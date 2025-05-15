<?php

namespace App\Docs\Cart;

/**
 * @OA\Delete(
 *     path="/api/cart/clear",
 *     summary="Clear all items from the authenticated user's cart",
 *     tags={"Cart"},
 *     security={{"sanctum":{}}},
 *     @OA\Response(
 *         response=200,
 *         description="Cart cleared successfully",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="Cart cleared successfully")
 *         )
 *     ),
 *     @OA\Response(
 *         response=401,
 *         description="Unauthorized - User not authenticated",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="User not authenticated")
 *         )
 *     )
 * )
 */


class ClearCartDoc {}
