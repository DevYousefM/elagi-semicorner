<?php

namespace App\Docs\Contact;

/**
 * @OA\Get(
 *     path="/api/contacts",
 *     summary="Get list of all contact messages",
 *     tags={"Contact"},
 *     @OA\Response(
 *         response=200,
 *         description="List of contact messages",
 *         @OA\JsonContent(
 *             type="array",
 *             @OA\Items(
 *                 type="object",
 *                 @OA\Property(property="id", type="integer", example=1),
 *                 @OA\Property(property="name", type="string", example="John Doe"),
 *                 @OA\Property(property="email", type="string", example="john@example.com"),
 *                 @OA\Property(property="message", type="string", example="Hello, I need support..."),
 *                 @OA\Property(property="created_at", type="string", format="date-time"),
 *                 @OA\Property(property="updated_at", type="string", format="date-time")
 *             )
 *         )
 *     )
 * )
 */
class IndexContact {}
