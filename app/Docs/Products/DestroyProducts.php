<?php

namespace App\Docs\Products;

/**
 * @OA\Delete(
 *     path="/api/products/{product}",
 *     summary="Delete a product",
 *     tags={"Products"},
 *     security={{"bearerAuth":{}}},
 *     @OA\Parameter(
 *         name="product",
 *         in="path",
 *         description="Product ID",
 *         required=true,
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\Response(
 *         response=204,
 *         description="Product deleted successfully"
 *     ),
 *     @OA\Response(
 *         response=404,
 *         description="Product not found"
 *     )
 * )
 */
class DestroyProducts {}
