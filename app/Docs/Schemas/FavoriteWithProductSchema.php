<?php

namespace App\Docs\Schemas;

/**
 * @OA\Schema(
 *     schema="FavoriteWithProduct",
 *     type="object",
 *     @OA\Property(property="id", type="integer", example=1),
 *     @OA\Property(property="user_id", type="integer", example=1),
 *     @OA\Property(property="product_id", type="integer", example=5),
 *     @OA\Property(
 *         property="product",
 *         type="object",
 *         @OA\Property(property="id", type="integer", example=5),
 *         @OA\Property(property="name", type="string", example="Sample Product"),
 *         @OA\Property(property="price", type="number", format="float", example=49.99),
 *         @OA\Property(property="description", type="string", example="Product description here")
 *     )
 * )
 */
class FavoriteWithProductSchema {}
