<?php

namespace App\Docs\Notifications;

/**
 * @OA\Patch(
 *     path="/api/notifications/mark-all-read",
 *     summary="Mark all notifications as read",
 *     tags={"Notifications"},
 *     security={{"sanctum":{}}},
 *     @OA\Response(
 *         response=200,
 *         description="All notifications marked as read",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="All notifications marked as read")
 *         )
 *     )
 * )
 */
class MarkAllAsRead {}
