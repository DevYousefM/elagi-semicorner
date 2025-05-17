<?php

namespace App\Docs\Notifications;

/**
 * @OA\Patch(
 *     path="/api/notifications/mark-all-unread",
 *     summary="Mark all notifications as unread",
 *     tags={"Notifications"},
 *     security={{"bearerAuth":{}}},
 *     @OA\Response(
 *         response=200,
 *         description="All notifications marked as unread",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="All notifications marked as unread")
 *         )
 *     )
 * )
 */
class MarkAllAsUnread {}
