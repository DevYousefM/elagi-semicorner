<?php

namespace App\Docs\Auth;

/**
 * @OA\Post(
 *     path="/api/register",
 *     summary="Register a new user and send OTP",
 *     tags={"Auth"},
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(
 *             required={"fullname", "email", "phone", "password", "password_confirmation"},
 *             @OA\Property(property="fullname", type="string", example="John Doe"),
 *             @OA\Property(property="email", type="string", format="email", example="john@gmail.com"),
 *             @OA\Property(property="phone", type="string", example="01234567890"),
 *             @OA\Property(property="password", type="string", format="password", example="password123"),
 *             @OA\Property(property="password_confirmation", type="string", format="password", example="password123")
 *         )
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="OTP sent successfully",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="OTP sent successfully")
 *         )
 *     ),
 *     @OA\Response(
 *         response=400,
 *         description="Validation error",
 *         @OA\JsonContent(
 *             @OA\Property(property="errors", type="object", example={"email": {"The email must be a valid Gmail address."}})
 *         )
 *     )
 * )
 */

class RegisterDocs {}
