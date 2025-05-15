<?php
namespace App\Docs\Products;

use OpenApi\Annotations as OA;

/**
 * @OA\Put(
 *     path="/api/products/{id}",
 *     summary="Update an existing product",
 *     tags={"Products"},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         description="Product ID",
 *         required=true,
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(
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
 *         response=200,
 *         description="Product updated successfully",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="Product updated successfully"),
 *             @OA\Property(property="product", ref="#/components/schemas/Product")
 *         )
 *     ),
 *     @OA\Response(
 *         response=404,
 *         description="Product not found"
 *     )
 * )
 */
class UpdateProducts {}
