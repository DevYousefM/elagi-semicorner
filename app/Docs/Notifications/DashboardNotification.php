<?php

namespace App\Docs\Notifications;

/**
 * @OA\Schema(
 *     schema="DashboardNotification",
 *     type="object",
 *     properties={
 *         @OA\Property(property="id", type="integer", example=1),
 *         @OA\Property(property="order_id", type="integer", example=123),
 *         @OA\Property(property="is_read", type="boolean", example=false),
 *         @OA\Property(property="created_at", type="string", format="date-time"),
 *         @OA\Property(property="updated_at", type="string", format="date-time")
 *     }
 * )
 */

class DashboardNotification {}
