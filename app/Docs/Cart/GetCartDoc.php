<?php

namespace App\Docs\Cart;

/**
 * @OA\Get(
 *     path="/api/cart",
 *     summary="Get authenticated user's cart items",
 *     tags={"Cart"},
 *     security={{"bearerAuth":{}}},
 *     @OA\Response(
 *         response=200,
 *         description="List of cart items",
 *         @OA\JsonContent(
 *             type="array",
 *             @OA\Items(
 *                 type="object",
 *                 @OA\Property(property="id", type="integer", example=1),
 *                 @OA\Property(property="user_id", type="integer", example=10),
 *                 @OA\Property(property="product_id", type="integer", example=100),
 *                 @OA\Property(
 *                     property="product",
 *                     type="object",
 *                     description="Related product details",
 *                     @OA\Property(property="id", type="integer", example=100),
 *                     @OA\Property(property="name", type="string", example="Sample Product"),
 *                     @OA\Property(property="price", type="number", format="float", example=29.99)
 *                 )
 *             )
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


class GetCartDoc {}
