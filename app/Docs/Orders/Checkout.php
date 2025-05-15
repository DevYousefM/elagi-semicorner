<?php

namespace App\Docs\Orders;

/**
 * @OA\Post(
 *     path="/api/checkout",
 *     summary="Place a new order (checkout)",
 *     tags={"Orders"},
 *     security={{"bearerAuth":{}}},
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(
 *             required={"address","paymentMethod","cartItems"},
 *             @OA\Property(property="address", type="string", example="123 Main St, City"),
 *             @OA\Property(property="paymentMethod", type="string", enum={"cash","card"}, example="card"),
 *             @OA\Property(
 *                 property="cartItems",
 *                 type="array",
 *                 @OA\Items(
 *                     required={"product_id","quantity"},
 *                     @OA\Property(property="product_id", type="integer", example=10),
 *                     @OA\Property(property="quantity", type="integer", example=2)
 *                 )
 *             )
 *         )
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Order placed or payment url returned",
 *         @OA\JsonContent(
 *             oneOf={
 *                 @OA\Schema(
 *                     @OA\Property(property="message", type="string", example="Order placed successfully")
 *                 ),
 *                 @OA\Schema(
 *                     @OA\Property(property="paymentUrl", type="string", example="https://paymentgateway.com/pay?token=xyz")
 *                 )
 *             }
 *         )
 *     ),
 *     @OA\Response(response=500, description="Order placement failed")
 * )
 */
class Checkout {}
