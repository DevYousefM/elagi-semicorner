<?php
namespace App\Docs\Feedback;

/**
 * @OA\Delete(
 *     path="/api/ignoreFeedback/{id}",
 *     summary="Ignore and delete a feedback",
 *     tags={"Feedback"},
 *     security={{"bearerAuth":{}}},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         description="Feedback ID to ignore and delete",
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Feedback ignored and deleted",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="Feedback ignored and deleted")
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
class IgnoreFeedback {}
