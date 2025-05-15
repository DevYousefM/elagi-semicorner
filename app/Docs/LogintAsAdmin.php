<?php

namespace App\Docs;

/**
 * @OA\Post(
 *     path="/api/dashlogin",
 *     summary="Admin login",
 *     tags={"Dashboard"},
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(
 *             required={"email","password"},
 *             @OA\Property(property="email", type="string", format="email", example="admin@gmail.com"),
 *             @OA\Property(property="password", type="string", format="password", example="secret123")
 *         )
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Login successful, token returned",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="Login successful"),
 *             @OA\Property(property="token", type="string", example="eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9...")
 *         )
 *     ),
 *     @OA\Response(
 *         response=401,
 *         description="Incorrect password",
 *         @OA\JsonContent(
 *             @OA\Property(property="error", type="string", example="Incorrect password")
 *         )
 *     ),
 *     @OA\Response(
 *         response=403,
 *         description="Not authorized (not admin)",
 *         @OA\JsonContent(
 *             @OA\Property(property="error", type="string", example="Not authorized")
 *         )
 *     ),
 *     @OA\Response(
 *         response=404,
 *         description="User not found",
 *         @OA\JsonContent(
 *             @OA\Property(property="error", type="string", example="No account found")
 *         )
 *     )
 * )
 */


class LogintAsAdmin {}
