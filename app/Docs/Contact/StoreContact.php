<?php

namespace App\Docs\Contact;

/**
 * @OA\Post(
 *     path="/api/contact/save",
 *     summary="Save a new contact message",
 *     tags={"Contact"},
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(
 *             required={"name","email","message"},
 *             @OA\Property(property="name", type="string", maxLength=255, example="John Doe"),
 *             @OA\Property(property="email", type="string", format="email", maxLength=255, example="john@example.com"),
 *             @OA\Property(property="message", type="string", example="Hello, I need support with...")
 *         )
 *     ),
 *     @OA\Response(
 *         response=201,
 *         description="Message sent successfully",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="Message sent successfully!"),
 *             @OA\Property(property="data", type="object",
 *                 @OA\Property(property="id", type="integer", example=1),
 *                 @OA\Property(property="name", type="string"),
 *                 @OA\Property(property="email", type="string"),
 *                 @OA\Property(property="message", type="string"),
 *                 @OA\Property(property="created_at", type="string", format="date-time"),
 *                 @OA\Property(property="updated_at", type="string", format="date-time")
 *             )
 *         )
 *     ),
 *     @OA\Response(
 *         response=400,
 *         description="Validation errors",
 *         @OA\JsonContent(
 *             type="object",
 *             example={"email": {"The email field is required."}}
 *         )
 *     )
 * )
 */
class StoreContact {}
