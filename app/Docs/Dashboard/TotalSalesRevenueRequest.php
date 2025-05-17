<?php
namespace App\Docs\Dashboard;

/**
 * @OA\Get(
 *     path="/api/dashboard/total-sales-revenue",
 *     summary="Get total sales revenue",
 *     tags={"Dashboard"},
 *     security={{"bearerAuth":{}}},
 *     @OA\Response(response=200, description="Success")
 * )
 */
class TotalSalesRevenueRequest {}
