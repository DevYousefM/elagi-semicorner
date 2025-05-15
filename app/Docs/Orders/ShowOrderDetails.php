<?php

namespace App\Docs\Orders;

/**
 * @OA\Get(
 *     path="/api/dorders/{id}",
 *     summary="Get order details by ID",
 *     tags={"Orders"},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         description="Order ID",
 *         required=true,
 *         @OA\Schema(type="integer", example=1)
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Order details",
 *         @OA\JsonContent(ref="#/components/schemas/OrderWithItems")
 *     ),
 *     @OA\Response(response=404, description="Order not found")
 * )
 */
class ShowOrderDetails {}
