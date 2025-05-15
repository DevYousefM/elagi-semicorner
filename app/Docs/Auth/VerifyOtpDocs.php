<?php

namespace App\Docs\Auth;

/**
 * @OA\Post(
 *     path="/api/verify-otp",
 *     summary="Verify OTP and create a user account",
 *     tags={"Auth"},
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(
 *             required={"email", "otp"},
 *             @OA\Property(property="email", type="string", format="email", example="user@gmail.com"),
 *             @OA\Property(property="otp", type="integer", example=123456)
 *         )
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="OTP verified and user account created",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="OTP verified successfully. Account created.")
 *         )
 *     ),
 *     @OA\Response(
 *         response=400,
 *         description="Invalid or expired OTP",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="Invalid or expired OTP.")
 *         )
 *     )
 * )
 */


class VerifyOtpDocs {}
