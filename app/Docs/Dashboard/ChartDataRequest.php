<?php
namespace App\Docs\Dashboard;

/**
 * @OA\Get(
 *     path="/api/dashboard/chart-data",
 *     summary="Get dashboard chart data",
 *     tags={"Dashboard"},
 *     security={{"bearerAuth":{}}},
 *     @OA\Response(response=200, description="Success")
 * )
 */
class ChartDataRequest {}
