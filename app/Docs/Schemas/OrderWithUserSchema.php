<?php

namespace App\Docs\Schemas;

/**
 * @OA\Schema(
 *     schema="OrderWithUser",
 *     allOf={
 *         @OA\Schema(ref="#/components/schemas/Order"),
 *         @OA\Schema(
 *             @OA\Property(
 *                 property="user",
 *                 type="object",
 *                 @OA\Property(property="id", type="integer", example=1),
 *                 @OA\Property(property="name", type="string", example="John Doe"),
 *                 @OA\Property(property="email", type="string", example="john@example.com")
 *             )
 *         )
 *     }
 * )
 */
class OrderWithUserSchema {}
