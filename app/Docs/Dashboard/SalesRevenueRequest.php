<?php
namespace App\Docs\Dashboard;

/**
 * @OA\Get(
 *     path="/api/dashboard/sales-revenue",
 *     summary="Get sales revenue by date",
 *     tags={"Dashboard"},
 *     security={{"bearerAuth":{}}},
 *     @OA\Response(response=200, description="Success")
 * )
 */
class SalesRevenueRequest {}
