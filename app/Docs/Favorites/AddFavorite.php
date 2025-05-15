<?php

namespace App\Docs\Favorites;

/**
 * @OA\Post(
 *     path="/api/favorites/add/{productId}",
 *     summary="Add a product to favorites",
 *     tags={"Favorites"},
 *     security={{"bearerAuth":{}}},
 *     @OA\Parameter(
 *         name="productId",
 *         in="path",
 *         description="ID of product to add to favorites",
 *         required=true,
 *         @OA\Schema(type="integer", example=5)
 *     ),
 *     @OA\Response(response=200, description="Added to favorites"),
 *     @OA\Response(response=404, description="Product not found"),
 *     @OA\Response(response=409, description="Already in favorites")
 * )
 */
class AddFavorite {}
