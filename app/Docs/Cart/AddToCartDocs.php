<?php

namespace App\Docs\Cart;

/**
 * @OA\Post(
 *     path="/api/cart/add",
 *     summary="Add a product to the authenticated user's cart",
 *     tags={"Cart"},
 *     security={{"bearerAuth":{}}},
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(
 *             required={"product_id","quantity"},
 *             @OA\Property(property="product_id", type="integer", example=123, description="ID of the product to add"),
 *             @OA\Property(property="quantity", type="integer", example=2, description="Quantity to add (minimum 1)")
 *         )
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Product added to cart successfully",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="Product added to cart successfully!")
 *         )
 *     ),
 *     @OA\Response(
 *         response=422,
 *         description="Validation error",
 *         @OA\JsonContent(
 *             @OA\Property(property="errors", type="object")
 *         )
 *     ),
 *     @OA\Response(
 *         response=401,
 *         description="Unauthorized",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="Unauthenticated.")
 *         )
 *     )
 * )
 */


class AddToCartDocs {}
