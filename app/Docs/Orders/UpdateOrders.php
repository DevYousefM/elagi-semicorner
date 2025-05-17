<?php

namespace App\Docs\Orders;

/**
 * @OA\Put(
 *     path="/api/dorders/{order}",
 *     summary="Update an order",
 *     tags={"Orders"},
 *     security={{"bearerAuth":{}}},
 *     @OA\Parameter(
 *         name="order",
 *         in="path",
 *         description="Order ID to update",
 *         required=true,
 *         @OA\Schema(type="integer", example=1)
 *     ),
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(
 *             type="object",
 *             @OA\Property(property="status", type="string", example="shipped"),
 *             @OA\Property(property="total_price", type="number", format="float", example=99.99)
 *         )
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Updated order",
 *         @OA\JsonContent(ref="#/components/schemas/Order")
 *     ),
 *     @OA\Response(response=404, description="Order not found")
 * )
 */
class UpdateOrders {}
