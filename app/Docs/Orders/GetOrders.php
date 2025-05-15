<?php

namespace App\Docs\Orders;

/**
 * @OA\Get(
 *     path="/api/orders",
 *     summary="Get authenticated user's orders with items",
 *     tags={"Orders"},
 *     security={{"bearerAuth":{}}},
 *     @OA\Response(
 *         response=200,
 *         description="List of orders with items",
 *         @OA\JsonContent(
 *             type="array",
 *             @OA\Items(
 *                 type="object",
 *                 @OA\Property(property="id", type="integer"),
 *                 @OA\Property(property="address", type="string"),
 *                 @OA\Property(property="total_price", type="number", format="float"),
 *                 @OA\Property(property="status", type="string"),
 *                 @OA\Property(property="items", type="array",
 *                     @OA\Items(
 *                         type="object",
 *                         @OA\Property(property="id", type="integer"),
 *                         @OA\Property(property="medicine_name", type="string"),
 *                         @OA\Property(property="quantity", type="integer"),
 *                         @OA\Property(property="price", type="number", format="float"),
 *                     )
 *                 )
 *             )
 *         )
 *     )
 * )
 */
class GetOrders {}
