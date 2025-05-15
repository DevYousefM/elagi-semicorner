<?php

namespace App\Docs\Products;

/**
 * @OA\Post(
 *     path="/api/products",
 *     summary="Create a new product",
 *     tags={"Products"},
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(
 *             required={"name", "name_ar", "price", "stock", "category", "category_ar"},
 *             @OA\Property(property="name", type="string", example="Painkiller"),
 *             @OA\Property(property="name_ar", type="string", example="مسكن"),
 *             @OA\Property(property="description", type="string", example="Used to relieve pain"),
 *             @OA\Property(property="description_ar", type="string", example="يستخدم لتخفيف الألم"),
 *             @OA\Property(property="price", type="number", format="float", example=15.99),
 *             @OA\Property(property="stock", type="integer", example=100),
 *             @OA\Property(property="image_url", type="string", example="images/painkiller.png"),
 *             @OA\Property(property="category", type="string", example="Analgesics"),
 *             @OA\Property(property="category_ar", type="string", example="مسكنات")
 *         )
 *     ),
 *     @OA\Response(
 *         response=201,
 *         description="Product created successfully",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="Product created successfully"),
 *             @OA\Property(property="product", ref="#/components/schemas/Product")
 *         )
 *     )
 * )
 */
class StoreProducts {}
