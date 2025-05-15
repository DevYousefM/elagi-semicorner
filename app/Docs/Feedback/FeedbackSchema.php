<?php
namespace App\Docs\Feedback;

/**
 * @OA\Schema(
 *     schema="Feedback",
 *     type="object",
 *     required={"id","name","email","feedback","rating","is_pinned"},
 *     @OA\Property(property="id", type="integer", example=1),
 *     @OA\Property(property="name", type="string", example="John Doe"),
 *     @OA\Property(property="email", type="string", format="email", example="john@example.com"),
 *     @OA\Property(property="feedback", type="string", example="Great service!"),
 *     @OA\Property(property="rating", type="integer", example=5),
 *     @OA\Property(property="is_pinned", type="boolean", example=false)
 * )
 */
class FeedbackSchema {}
