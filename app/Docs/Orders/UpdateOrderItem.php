<?php

namespace App\Docs\Orders;

/**
 * @OA\Put(
 *     path="/api/order-items/{id}",
 *     summary="Update the quantity of an order item",
 *     tags={"Orders"},
 *     security={{"bearerAuth":{}}},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         description="Order item ID",
 *         required=true,
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(
 *             required={"quantity"},
 *             @OA\Property(property="quantity", type="integer", example=3)
 *         )
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Order item updated with new total price",
 *         @OA\JsonContent(
 *             @OA\Property(property="orderItem", type="object",
 *                 @OA\Property(property="id", type="integer"),
 *                 @OA\Property(property="quantity", type="integer"),
 *                 @OA\Property(property="medicine_name", type="string"),
 *                 @OA\Property(property="price", type="number", format="float"),
 *             ),
 *             @OA\Property(property="totalPrice", type="number", format="float", example=150.50)
 *         )
 *     ),
 *     @OA\Response(response=404, description="Order item not found"),
 * )
 */
class UpdateOrderItem {}
