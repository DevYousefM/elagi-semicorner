<?php

namespace App\Docs\Schemas;

/**
 * @OA\Schema(
 *     schema="Order",
 *     type="object",
 *     required={"id", "status", "total_price"},
 *     @OA\Property(property="id", type="integer", example=1),
 *     @OA\Property(property="status", type="string", example="pending"),
 *     @OA\Property(property="total_price", type="number", format="float", example=99.99),
 *     @OA\Property(property="created_at", type="string", format="date-time", example="2025-05-15T12:00:00Z"),
 *     @OA\Property(property="updated_at", type="string", format="date-time", example="2025-05-15T12:30:00Z")
 * )
 */
class OrderSchema {}
