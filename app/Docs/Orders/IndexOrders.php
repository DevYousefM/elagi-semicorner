<?php

namespace App\Docs\Orders;

/**
 * @OA\Get(
 *     path="/api/dorders",
 *     summary="List all orders",
 *     tags={"Orders"},
 *     @OA\Response(
 *         response=200,
 *         description="List of orders",
 *         @OA\JsonContent(type="array",
 *             @OA\Items(ref="#/components/schemas/OrderWithUser")
 *         )
 *     )
 * )
 */
class IndexOrders {}
