<?php

namespace App\Docs\Notifications;

/**
 * @OA\Patch(
 *     path="/api/notifications/{id}/read",
 *     summary="Mark notification as read",
 *     tags={"Notifications"},
 *     security={{"sanctum":{}}},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         description="Notification ID",
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Notification marked as read",
 *         @OA\JsonContent(ref="#/components/schemas/DashboardNotification")
 *     ),
 *     @OA\Response(response=404, description="Notification not found")
 * )
 */
class MarkAsRead {}
