<?php

namespace App\Docs\Notifications;

/**
 * @OA\Delete(
 *     path="/api/notifications/{id}",
 *     summary="Delete a notification",
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
 *         description="Notification deleted",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="Notification deleted")
 *         )
 *     ),
 *     @OA\Response(response=404, description="Notification not found")
 * )
 */
class DeleteNotification {}
