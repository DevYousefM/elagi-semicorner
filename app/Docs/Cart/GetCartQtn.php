<?php

namespace App\Docs\Cart;

/**
 * @OA\Get(
 *     path="/api/cart/quantity",
 *     summary="Get total quantity of items in the authenticated user's cart",
 *     tags={"Cart"},
 *     security={{"bearerAuth":{}}},
 *     @OA\Response(
 *         response=200,
 *         description="Total quantity retrieved successfully",
 *         @OA\JsonContent(
 *             @OA\Property(property="quantity", type="integer", example=5)
 *         )
 *     ),
 *     @OA\Response(
 *         response=401,
 *         description="Unauthorized - User not authenticated",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="Unauthenticated")
 *         )
 *     )
 * )
 */


class GetCartQtn {}
