<?php

namespace App\Docs\Schemas;

/**
 * @OA\Schema(
 *     schema="OrderWithItems",
 *     allOf={
 *         @OA\Schema(ref="#/components/schemas/Order"),
 *         @OA\Schema(
 *             @OA\Property(
 *           property="items",
 *                 type="array",
 *                 @OA\Items(
 *                     type="object",
 *                     @OA\Property(property="id", type="integer", example=10),
 *                     @OA\Property(property="product_name", type="string", example="Aspirin"),
 *                     @OA\Property(property="quantity", type="integer", example=2),
 *                     @OA\Property(property="price", type="number", format="float", example=19.99)
 *                 )
 *             )
 *         )
 *     }
 * )
 */
class OrderWithItemsSchema {}
