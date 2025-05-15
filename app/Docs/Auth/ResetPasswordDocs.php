<?php

namespace App\Docs\Auth;

/**
 * @OA\Post(
 *     path="/api/reset-password",
 *     summary="Reset password using OTP",
 *     tags={"Auth"},
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(
 *             required={"email", "otp", "newPassword"},
 *             @OA\Property(property="email", type="string", format="email", example="user@example.com"),
 *             @OA\Property(property="otp", type="string", example="123456"),
 *             @OA\Property(property="newPassword", type="string", format="password", example="newSecret123")
 *         )
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Password has been reset successfully",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="Password has been reset successfully")
 *         )
 *     ),
 *     @OA\Response(
 *         response=400,
 *         description="Invalid OTP",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="Invalid OTP")
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


class ResetPasswordDocs {}
