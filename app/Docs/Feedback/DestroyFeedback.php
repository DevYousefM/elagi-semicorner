<?php
namespace App\Docs\Feedback;

/**
 * @OA\Delete(
 *     path="/api/feedbacks/{id}",
 *     summary="Delete a feedback",
 *     tags={"Feedback"},
 *     security={{"bearerAuth":{}}},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         description="Feedback ID to delete",
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Feedback deleted successfully",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="Feedback deleted successfully")
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
class DestroyFeedback {}
