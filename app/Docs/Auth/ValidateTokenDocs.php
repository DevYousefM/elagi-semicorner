<?php

namespace App\Docs\Auth;

/**
 * @OA\Post(
 *     path="/api/validate-token",
 *     summary="Validate JWT token",
 *     tags={"Auth"},
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(
 *             required={"token"},
 *             @OA\Property(property="token", type="string", example="eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9...")
 *         )
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Token is valid",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="Token is valid"),
 *             @OA\Property(
 *                 property="user",
 *                 type="object",
 *                 description="Authenticated user data",
 *                 @OA\Property(property="id", type="integer", example=1),
 *                 @OA\Property(property="name", type="string", example="John Doe"),
 *                 @OA\Property(property="email", type="string", example="john@example.com")
 *             )
 *         )
 *     ),
 *     @OA\Response(
 *         response=400,
 *         description="Token not provided",
 *         @OA\JsonContent(
 *             @OA\Property(property="error", type="string", example="Token not provided")
 *         )
 *     ),
 *     @OA\Response(
 *         response=401,
 *         description="Token is invalid",
 *         @OA\JsonContent(
 *             @OA\Property(property="error", type="string", example="Token is invalid")
 *         )
 *     )
 * )
 */


class ValidateTokenDocs {}
