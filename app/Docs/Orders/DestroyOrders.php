<?php

namespace App\Docs\Orders;

/**
 * @OA\Delete(
 *     path="/api/dorders/{order}",
 *     summary="Delete an order",
 *     tags={"Orders"},
 *     @OA\Parameter(
 *         name="order",
 *         in="path",
 *         description="Order ID to delete",
 *         required=true,
 *         @OA\Schema(type="integer", example=1)
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Order deleted successfully",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="Order deleted successfully")
 *         )
 *     )
 * )
 */
class DestroyOrders {}
