<?php

namespace App\Docs\Favorites;

/**
 * @OA\Delete(
 *     path="/api/favorites/remove/{id}",
 *     summary="Remove a product from favorites",
 *     tags={"Favorites"},
 *     security={{"bearerAuth":{}}},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         description="Product ID to remove from favorites",
 *         required=true,
 *         @OA\Schema(type="integer", example=5)
 *     ),
 *     @OA\Response(response=200, description="Product removed from favorites"),
 *     @OA\Response(response=404, description="Favorite not found")
 * )
 */
class RemoveFavorite {}
