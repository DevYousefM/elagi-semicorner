<?php
namespace App\Docs\Feedback;

/**
 * @OA\Post(
 *     path="/api/approveFeedback/{id}",
 *     summary="Approve (unpin) a feedback",
 *     tags={"Feedback"},
 *     security={{"bearerAuth":{}}},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         description="Feedback ID to approve",
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Feedback approved successfully",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="Feedback approved successfully")
 *         )
 *     ),
 *     @OA\Response(
 *         response=404,
 *         description="Feedback not found",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="Feedback not found")
 *         )
 *     )
 * )
 */
class ApproveFeedback {}
