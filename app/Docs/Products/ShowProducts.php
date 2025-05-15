<?php

namespace App\Docs\Products;

/**
 * @OA\Get(
 *     path="/api/products/{product}",
 *     summary="Get product details by ID",
 *     tags={"Products"},
 *     @OA\Parameter(
 *         name="product",
 *         in="path",
 *         description="Product ID",
 *         required=true,
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Product details",
 *         @OA\JsonContent(ref="#/components/schemas/Product")
 *     ),
 *     @OA\Response(
 *         response=404,
 *         description="Product not found"
 *     )
 * )
 */
class ShowProducts {}
