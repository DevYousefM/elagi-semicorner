<?php

namespace App\Docs\Notifications;

/**
 * @OA\Get(
 *     path="/api/notifications",
 *     summary="Get all notifications",
 *     tags={"Notifications"},
 *     security={{"sanctum":{}}},
 *     @OA\Response(
 *         response=200,
 *         description="List of notifications",
 *         @OA\JsonContent(type="array",
 *             @OA\Items(ref="#/components/schemas/DashboardNotification")
 *         )
 *     )
 * )
 */
class IndexNotification {}
