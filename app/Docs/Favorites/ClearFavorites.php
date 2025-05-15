<?php

namespace App\Docs\Favorites;

/**
 * @OA\Delete(
 *     path="/api/favorites/clear",
 *     summary="Clear all favorites for the authenticated user",
 *     tags={"Favorites"},
 *     security={{"bearerAuth":{}}},
 *     @OA\Response(
 *         response=200,
 *         description="All favorites cleared successfully",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="All favorites cleared successfully")
 *         )
 *     )
 * )
 */
class ClearFavorites {}
