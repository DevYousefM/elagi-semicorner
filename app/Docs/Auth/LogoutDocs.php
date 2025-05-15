<?php

namespace App\Docs\Auth;

/**
 * @OA\Post(
 *     path="/api/logout",
 *     summary="Logout the authenticated user",
 *     tags={"Auth"},
 *     security={{"sanctum": {}}},
 *     @OA\Response(
 *         response=200,
 *         description="Logout successful",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="You have been successfully logged out.")
 *         )
 *     ),
 *     @OA\Response(
 *         response=401,
 *         description="Unauthenticated"
 *     )
 * )
 */


class LogoutDocs {}
