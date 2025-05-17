<?php

namespace App\Docs\Cart;

/**
 * @OA\Delete(
 *     path="/api/cart/{cartItem}",
 *     summary="Remove a specific cart item",
 *     tags={"Cart"},
 *     security={{"bearerAuth":{}}},
 *     @OA\Parameter(
 *         name="cartItem",
 *         in="path",
 *         description="ID of the cart item to delete",
 *         required=true,
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Cart item removed successfully",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="Cart item removed successfully")
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


class RemoveCartItemDocs {}
