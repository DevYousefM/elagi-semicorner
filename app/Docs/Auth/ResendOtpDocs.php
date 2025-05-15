<?php

namespace App\Docs\Auth;

/**
 * @OA\Post(
 *     path="/api/resend-otp",
 *     summary="Resend OTP for user registration",
 *     tags={"Auth"},
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(
 *             required={"email"},
 *             @OA\Property(property="email", type="string", format="email", example="john@gmail.com")
 *         )
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="OTP resent successfully",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="OTP has been resent to your email.")
 *         )
 *     ),
 *     @OA\Response(
 *         response=404,
 *         description="No registration data found",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="No registration data found for the provided email.")
 *         )
 *     ),
 *     @OA\Response(
 *         response=422,
 *         description="Validation error",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="The given data was invalid."),
 *             @OA\Property(
 *                 property="errors",
 *                 type="object",
 *                 example={"email": {"The email field is required."}}
 *             )
 *         )
 *     )
 * )
 */


class ResendOtpDocs {}
