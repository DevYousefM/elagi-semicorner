<?php

namespace App\Docs\User;

/**
 * @OA\Delete(
 *     path="/api/users/{user}",
 *     summary="Delete a user",
 *     tags={"Users"},
 *     security={{"bearerAuth":{}}},
 *     @OA\Parameter(
 *         name="user",
 *         in="path",
 *         description="User ID to delete",
 *         required=true,
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="User deleted confirmation",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="User deleted")
 *         )
 *     )
 * )
 */
class UserDestroy {}
