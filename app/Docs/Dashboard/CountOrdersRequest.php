<?php
namespace App\Docs\Dashboard;

/**
 * @OA\Get(
 *     path="/api/dashboard/orders",
 *     summary="Get total orders count",
 *     tags={"Dashboard"},
 *     @OA\Response(response=200, description="Success")
 * )
 */
class CountOrdersRequest {}
