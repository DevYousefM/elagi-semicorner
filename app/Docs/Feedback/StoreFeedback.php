<?php
namespace App\Docs\Feedback;

/**
 * @OA\Post(
 *     path="/api/feedback",
 *     summary="Submit feedback",
 *     tags={"Feedback"},
 *     security={{"bearerAuth":{}}},
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(
 *             required={"name","email","feedback","rating"},
 *             @OA\Property(property="name", type="string", maxLength=255, example="John Doe"),
 *             @OA\Property(property="email", type="string", format="email", maxLength=255, example="john@example.com"),
 *             @OA\Property(property="feedback", type="string", example="Great service!"),
 *             @OA\Property(property="rating", type="integer", minimum=1, maximum=5, example=4)
 *         )
 *     ),
 *     @OA\Response(
 *         response=201,
 *         description="Feedback submitted and awaiting approval",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="Feedback received and awaiting approval"),
 *             @OA\Property(property="feedback", type="object",
 *                 @OA\Property(property="id", type="integer"),
 *                 @OA\Property(property="name", type="string"),
 *                 @OA\Property(property="email", type="string"),
 *                 @OA\Property(property="feedback", type="string"),
 *                 @OA\Property(property="rating", type="integer"),
 *                 @OA\Property(property="is_pinned", type="boolean")
 *             )
 *         )
 *     ),
 *     @OA\Response(
 *         response=422,
 *         description="Validation error"
 *     )
 * )
 */
class StoreFeedback {}
