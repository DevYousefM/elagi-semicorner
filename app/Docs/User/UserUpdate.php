<?php

namespace App\Docs\User;

/**
 * @OA\Put(
 *     path="/api/users/{user}",
 *     summary="Update user information",
 *     tags={"Users"},
 *     security={{"bearerAuth":{}}},
 *     @OA\Parameter(
 *         name="user",
 *         in="path",
 *         description="User ID",
 *         required=true,
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(
 *             required={"name","email"},
 *             @OA\Property(property="name", type="string", example="Jane Doe"),
 *             @OA\Property(property="email", type="string", format="email", example="jane@example.com"),
 *             @OA\Property(property="phone", type="string", example="+1234567890")
 *         )
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Updated user object",
 *         @OA\JsonContent(
 *             type="object",
 *             @OA\Property(property="id", type="integer", example=1),
 *             @OA\Property(property="name", type="string", example="Jane Doe"),
 *             @OA\Property(property="email", type="string", example="jane@example.com"),
 *             @OA\Property(property="phone", type="string", example="+1234567890"),
 *             @OA\Property(property="created_at", type="string", format="date-time"),
 *             @OA\Property(property="updated_at", type="string", format="date-time")
 *         )
 *     ),
 *     @OA\Response(response=500, description="Failed to update user")
 * )
 */
class UserUpdate {}
