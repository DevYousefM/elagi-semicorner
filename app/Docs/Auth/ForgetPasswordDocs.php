<?php

namespace App\Docs\Auth;

/**
 * @OA\Post(
 *     path="/api/forgot-password",
 *     summary="Send OTP for password reset",
 *     tags={"Auth"},
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(
 *             required={"email"},
 *             @OA\Property(property="email", type="string", format="email", example="user@example.com")
 *         )
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="OTP generated successfully",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="OTP generated successfully.")
 *         )
 *     ),
 *     @OA\Response(
 *         response=404,
 *         description="User does not exist",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="User does not exist")
 *         )
 *     )
 * )
 */


class ForgetPasswordDocs {}
