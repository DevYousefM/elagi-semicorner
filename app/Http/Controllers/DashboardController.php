<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Medicine;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\RareMedicineRequest;
use App\Models\Feedback;
use App\Models\Contact;
use App\Models\DashboardNotification;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Retrieve the user by email
        $user = User::where('email', $request->email)->first();

        // Check if user exists
        if (!$user) {
            return response()->json(['error' => __('messages.no_account')], 404);
        }

        // Check if the user is an admin
        if (!$user->is_admin) {  // Assuming there is an `is_admin` column in your users table
            return response()->json(['error' => __('messages.not_authorized')], 403);
        }

        // Check if the provided password matches the hashed password
        if (!Hash::check($request->password, $user->password)) {
            return response()->json(['error' => __('messages.incorrect_password')], 401);
        }

        // Generate a token for the authenticated user
        $token = $user->createToken('authToken')->plainTextToken;

        // Return a response with the token
        return response()->json(['message' => __('messages.login_success'), 'token' => $token], 200);
    }



    public function validateToken(Request $request)
    {
        try {
            $token = $request->input('token');

            if (!$token) {
                return response()->json(['error' => 'Token not provided'], 400);
            }

            // Attempt to parse and verify the JWT token
            $user = JWTAuth::parseToken()->authenticate();

            // If the token is valid, return a success response
            return response()->json(['message' => 'Token is valid', 'user' => $user]);
        } catch (JWTException $e) {
            // Token is invalid
            return response()->json(['error' => 'Token is invalid'], 401);
        }
    }

    public function logout(Request $request)
    {
        // Revoke the token that was used to authenticate the current request...
        $request->user()->currentAccessToken()->delete();

        // Alternatively, if you want to revoke all tokens for the user
        // $request->user()->tokens()->delete();

        return response()->json(['message' => 'You have been successfully logged out.'], 200);
    }


    public function countUsers()
    {
        $count = User::count();
        return response()->json(['count' => $count]);
    }

    public function countMedicines()
    {
        $count = Medicine::count();
        return response()->json(['count' => $count]);
    }

    public function countOrders()
    {
        $count = Order::count();
        return response()->json(['count' => $count]);
    }

    public function getTotalSalesRevenue()
    {
        $totalSalesRevenue = DB::table('orders')
            ->sum('total_price');

        return response()->json(['total_sales_revenue' => $totalSalesRevenue]);
    }

    public function index()
    {
        $users = User::all();
        return response()->json($users);
    }

    public function update(Request $request, $userId)
    {
        try {
            $user = User::findOrFail($userId);  // Ensure the user exists
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users,email,' . $userId,
                'phone' => 'nullable|string|max:20',
            ]);

            $user->update($validatedData);
            return response()->json($user);
        } catch (\Exception $e) {
            Log::error('Failed to update user: ' . $e->getMessage());
            return response()->json(['message' => 'Failed to update user'], 500);
        }
    }


    public function destroy(User $user)
    {
        $user->delete();
        return response()->json(['message' => 'User deleted']);
    }


    public function indexOrders()
    {
        $orders = Order::with('user')->get();
        return response()->json($orders);
    }

    public function updateOrders(Request $request, Order $order)
    {
        $order->update($request->all());
        return response()->json($order);
    }

    public function destroyOrders(Order $order)
    {
        $order->delete();

        return response()->json(['message' => 'Order deleted successfully'], 200);
    }

    public function showOrderDetails($id)
    {
        $order = Order::with('items')->find($id);
        if ($order) {
            return response()->json($order);
        } else {
            return response()->json(['error' => 'Order not found'], 404);
        }
    }

    public function updateOrderItem(Request $request, $id)
    {
        $orderItem = OrderItem::find($id);
        $orderItem->quantity = $request->quantity;
        $orderItem->save();

        // After updating the item, recalculate the total price for the order
        $order = Order::find($orderItem->order_id);
        $order->total_price = $order->items->sum(function ($item) {
            return $item->price * $item->quantity;
        });
        $order->save();

        return response()->json([
            'orderItem' => $orderItem,
            'totalPrice' => $order->total_price
        ], 200);
    }



    public function indexProducts()
    {
        $products = Product::all();
        return response()->json($products);
    }

    public function showProducts(Product $product)
    {
        return response()->json($product);
    }

    public function storeProducts(Request $request)
    {
        $product = new Product;
        $product->name = $request->name;
        $product->name_ar = $request->name_ar;
        $product->description = $request->description;
        $product->description_ar = $request->description_ar;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->image_url = $request->image_url;  // Assuming image_url is the name of the field in your request
        $product->category = $request->category;
        $product->category_ar = $request->category_ar;
        $product->save();

        return response()->json(['message' => 'Product created successfully', 'product' => $product]);
    }


    public function updateProducts(Request $request, $id)
    {
        try {
            $product = Product::findOrFail($id);  // Ensure the product exists

            // Validate the incoming data conditionally
            $data = $request->validate([
                'name' => 'sometimes|required|string|max:255',
                'name_ar' => 'sometimes|required|string|max:255',
                'description' => 'sometimes|nullable|string',
                'description_ar' => 'sometimes|nullable|string',
                'price' => 'sometimes|required|numeric',
                'stock' => 'sometimes|required|integer',
                'category' => 'sometimes|required|string|max:255',
                'category_ar' => 'sometimes|required|string|max:255',
                'image_url' => 'sometimes|nullable|string|max:255', // Ensure this is correct as per your application's logic
            ]);

            // Update the product with validated data
            $product->update($data);

            return response()->json(['message' => 'Product updated successfully', 'product' => $product]);
        } catch (\Exception $e) {
            Log::error('Failed to update product: ' . $e->getMessage());
            return response()->json(['message' => 'Failed to update product'], 500);
        }
    }


    public function destroyProducts(Product $product)
    {
        $product->delete();
        return response()->json(null, 204);
    }

    public function indexRareMedicine()
    {
        $requests = RareMedicineRequest::all();
        return response()->json($requests);
    }

    public function destroyRareMedicine($id)
    {
        try {
            $request = RareMedicineRequest::findOrFail($id);
            $request->delete();
            return response()->json(['message' => 'Request deleted successfully']);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Request not found'], 404);
        }
    }


    public function indexFeedback()
    {
        $feedbacks = Feedback::all();
        return response()->json($feedbacks);
    }

    // Existing methods for regular feedback management are assumed to be correct

    public function getPinnedFeedbacks()
    {
        $feedbacks = Feedback::where('is_pinned', true)->get();
        return response()->json($feedbacks);
    }

    public function approveFeedback($id)
    {
        $feedback = Feedback::find($id);
        if ($feedback) {
            $feedback->is_pinned = false;
            $feedback->save();
            return response()->json(['message' => 'Feedback approved successfully']);
        }
        return response()->json(['message' => 'Feedback not found'], 404);
    }

    public function ignoreFeedback($id)
    {
        $feedback = Feedback::find($id);
        if ($feedback) {
            $feedback->delete();
            return response()->json(['message' => 'Feedback ignored and deleted']);
        }
        return response()->json(['message' => 'Feedback not found'], 404);
    }



    // Delete a feedback
    public function destroyFeedback($id)
    {
        try {
            $feedback = Feedback::findOrFail($id);
            $feedback->delete();
            return response()->json(['message' => 'Feedback deleted successfully']);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Feedback not found'], 404);
        }
    }


    public function indexContact()
    {
        $contacts = Contact::all();
        return response()->json($contacts);
    }

    // Delete a contact
    public function destroyContact($id)
    {
        try {
            $contact = Contact::findOrFail($id);
            $contact->delete();
            return response()->json(['message' => 'Contact deleted successfully']);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Contact not found'], 404);
        }
    }



    public function indexNotification()
    {
        // Fetch all notifications
        $notifications = DashboardNotification::with(['order.user', 'order.items.product'])->get();
        return response()->json($notifications);
    }

    public function showNotification($id)
    {
        // Fetch the notification details and mark as read
        $notification = DashboardNotification::with(['order.user', 'order.items.product'])->findOrFail($id);
        $notification->is_read = true;
        $notification->save();

        return response()->json($notification);
    }
    public function markAsUnread($id)
    {
        $notification = DashboardNotification::findOrFail($id);
        $notification->is_read = false;
        $notification->save();

        return response()->json($notification);
    }

    public function markAsRead($id)
    {
        $notification = DashboardNotification::findOrFail($id);
        $notification->is_read = true;
        $notification->save();

        return response()->json($notification);
    }

    public function markAllAsRead()
    {
        DashboardNotification::where('is_read', false)->update(['is_read' => true]);
        return response()->json(['message' => 'All notifications marked as read']);
    }

    public function markAllAsUnread()
    {
        DashboardNotification::where('is_read', true)->update(['is_read' => false]);
        return response()->json(['message' => 'All notifications marked as unread']);
    }

    public function deleteNotification($id)
    {
        $notification = DashboardNotification::findOrFail($id);
        $notification->delete();
        return response()->json(['message' => 'Notification deleted']);
    }



    public function getChartData()
    {
        $userCount = User::count();
        $orderCount = Order::count();
        $productCount = Product::count();

        // Example: Monthly orders count
        $monthlyOrders = Order::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
            ->groupBy('month')
            ->get();

        return response()->json([
            'userCount' => $userCount,
            'orderCount' => $orderCount,
            'productCount' => $productCount,
            'monthlyOrders' => $monthlyOrders
        ]);
    }

    public function getUserRegistrationsOverTime()
    {
        $registrations = User::select(
            DB::raw('DATE(created_at) as date'),
            DB::raw('count(*) as count')
        )
            ->groupBy('date')
            ->orderBy('date', 'ASC')
            ->get();

        return response()->json($registrations);
    }

    public function getMostSoldMedicines()
    {
        $mostSoldMedicines = OrderItem::select('medicine_name', DB::raw('count(*) as total'))
            ->groupBy('medicine_name')
            ->orderByDesc('total')
            ->limit(10)
            ->get();

        return response()->json($mostSoldMedicines);
    }

    public function getSalesRevenue()
    {
        $salesRevenue = DB::table('orders')
            ->select(DB::raw('DATE(created_at) as date'), DB::raw('SUM(total_price) as total_revenue'))
            ->groupBy('date')
            ->orderBy('date', 'asc')
            ->get();

        return response()->json($salesRevenue);
    }
}
