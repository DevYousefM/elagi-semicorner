<?php
namespace App\Docs\Feedback;

/**
 * @OA\Get(
 *     path="/api/pinnedFeedbacks",
 *     summary="Get pinned feedback",
 *     tags={"Feedback"},
 *     @OA\Response(
 *         response=200,
 *         description="List of pinned feedback",
 *         @OA\JsonContent(type="array", @OA\Items(ref="#/components/schemas/Feedback"))
 *     )
 * )
 */
class GetPinnedFeedbacks {}
