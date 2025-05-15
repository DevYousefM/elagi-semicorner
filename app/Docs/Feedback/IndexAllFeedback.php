<?php
namespace App\Docs\Feedback;

/**
 * @OA\Get(
 *     path="/api/feedbacks",
 *     summary="Get all feedback",
 *     tags={"Feedback"},
 *     @OA\Response(
 *         response=200,
 *         description="List of all feedback",
 *         @OA\JsonContent(type="array", @OA\Items(ref="#/components/schemas/Feedback"))
 *     )
 * )
 */
class IndexAllFeedback {}
