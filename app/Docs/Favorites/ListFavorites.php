<?php

namespace App\Docs\Favorites;

/**
 * @OA\Get(
 *     path="/api/favorites",
 *     summary="List all favorites for the authenticated user",
 *     tags={"Favorites"},
 *     security={{"bearerAuth":{}}},
 *     @OA\Response(
 *         response=200,
 *         description="List of favorites",
 *         @OA\JsonContent(type="array",
 *             @OA\Items(ref="#/components/schemas/FavoriteWithProduct")
 *         )
 *     )
 * )
 */
class ListFavorites {}
