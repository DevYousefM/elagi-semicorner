<?php

namespace App\Docs\Products;

/**
 * @OA\Schema(
 *     schema="Product",
 *     type="object",
 *     required={"id", "name", "name_ar", "price", "stock", "category", "category_ar"},
 *     @OA\Property(property="id", type="integer", example=1),
 *     @OA\Property(property="name", type="string", example="Painkiller"),
 *     @OA\Property(property="name_ar", type="string", example="مسكن"),
 *     @OA\Property(property="description", type="string", example="Used to relieve pain"),
 *     @OA\Property(property="description_ar", type="string", example="يستخدم لتخفيف الألم"),
 *     @OA\Property(property="price", type="number", format="float", example=15.99),
 *     @OA\Property(property="stock", type="integer", example=100),
 *     @OA\Property(property="image_url", type="string", example="images/painkiller.png"),
 *     @OA\Property(property="category", type="string", example="Analgesics"),
 *     @OA\Property(property="category_ar", type="string", example="مسكنات"),
 *     @OA\Property(property="created_at", type="string", format="date-time", example="2025-05-15T12:00:00Z"),
 *     @OA\Property(property="updated_at", type="string", format="date-time", example="2025-05-15T12:00:00Z")
 * )
 */
class ProductSchema {}
