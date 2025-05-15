<?php
namespace App\Docs\Dashboard;

/**
 * @OA\Get(
 *     path="/api/dashboard/users",
 *     summary="Get total user count",
 *     tags={"Dashboard"},
 *     @OA\Response(response=200, description="Success")
 * )
 */
class CountUsersRequest {}
