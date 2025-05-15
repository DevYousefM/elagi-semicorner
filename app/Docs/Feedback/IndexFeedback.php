<?php
namespace App\Docs\Feedback;

/**
 * @OA\Get(
 *     path="/api/feedback",
 *     summary="Get all unpinned feedback",
 *     tags={"Feedback"},
 *     @OA\Response(
 *         response=200,
 *         description="List of unpinned feedback",
 *         @OA\JsonContent(type="array", @OA\Items(ref="#/components/schemas/Feedback"))
 *     )
 * )
 */
class IndexFeedback {}
