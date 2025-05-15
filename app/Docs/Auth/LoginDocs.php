<?php

namespace App\Docs\Auth;

/**
 * @OA\Post(
 *     path="/api/login",
 *     summary="Authenticate user and return token",
 *     tags={"Auth"},
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(
 *             required={"email", "password"},
 *             @OA\Property(property="email", type="string", format="email", example="user@example.com"),
 *             @OA\Property(property="password", type="string", format="password", example="secret123")
 *         )
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Login successful",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="Login successful"),
 *             @OA\Property(property="token", type="string", example="eyJ0eXAiOiJKV1QiLC...")
 *         )
 *     ),
 *     @OA\Response(
 *         response=401,
 *         description="Incorrect password",
 *         @OA\JsonContent(
 *             @OA\Property(property="error", type="string", example="The password you entered is incorrect")
 *         )
 *     ),
 *     @OA\Response(
 *         response=404,
 *         description="User not found",
 *         @OA\JsonContent(
 *             @OA\Property(property="error", type="string", example="We couldn't find an account with that email address")
 *         )
 *     )
 * )
 */



class LoginDocs {}
