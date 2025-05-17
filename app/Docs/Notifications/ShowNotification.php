<?php

namespace App\Docs\Notifications;

/**
 * @OA\Get(
 *     path="/api/notifications/{id}",
 *     summary="Get notification details and mark as read",
 *     tags={"Notifications"},
 *     security={{"bearerAuth":{}}},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         description="Notification ID",
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Notification details",
 *         @OA\JsonContent(ref="#/components/schemas/DashboardNotification")
 *     ),
 *     @OA\Response(response=404, description="Notification not found")
 * )
 */
class ShowNotification {}
