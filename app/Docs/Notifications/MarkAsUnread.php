<?php

namespace App\Docs\Notifications;

/**
 * @OA\Patch(
 *     path="/api/notifications/{id}/unread",
 *     summary="Mark notification as unread",
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
 *         description="Notification marked as unread",
 *         @OA\JsonContent(ref="#/components/schemas/DashboardNotification")
 *     ),
 *     @OA\Response(response=404, description="Notification not found")
 * )
 */
class MarkAsUnread {}
