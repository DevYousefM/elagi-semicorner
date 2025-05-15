<?php

namespace App\Docs\RareMedicine;

/**
 * @OA\Schema(
 *     schema="RareMedicineRequest",
 *     type="object",
 *     required={"id", "medicine_name", "requested_by"},
 *     @OA\Property(property="id", type="integer", example=1),
 *     @OA\Property(property="medicine_name", type="string", example="Unobtainium 500mg"),
 *     @OA\Property(property="requested_by", type="string", example="John Doe"),
 *     @OA\Property(property="created_at", type="string", format="date-time", example="2025-05-15T12:00:00Z"),
 *     @OA\Property(property="updated_at", type="string", format="date-time", example="2025-05-15T12:00:00Z")
 * )
 */
class RareMedicineRequestSchema {}
