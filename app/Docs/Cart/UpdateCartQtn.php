<?php

namespace App\Docs\Cart;

/**
 * @OA\Patch(
 *     path="/api/cart/{cartItem}",
 *     summary="Update quantity of a specific cart item",
 *     tags={"Cart"},
 *     security={{"sanctum":{}}},
 *     @OA\Parameter(
 *         name="cartItem",
 *         in="path",
 *         description="ID of the cart item to update",
 *         required=true,
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(
 *             required={"quantity"},
 *             @OA\Property(property="quantity", type="integer", minimum=1, example=2)
 *         )
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Cart item updated successfully",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="Cart item updated successfully")
 *         )
 *     ),
 *     @OA\Response(
 *         response=404,
 *         description="Cart item not found",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="Cart item not found")
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



class UpdateCartQtn {}
