<?php

namespace App\Docs\Payment;

/**
 * @OA\Post(
 *     path="/api/payment/callback",
 *     summary="Handle payment gateway callback",
 *     tags={"Payments"},
 *     security={{"bearerAuth":{}}},
 *     @OA\RequestBody(
 *         required=true,
 *         description="Payment gateway callback data",
 *         @OA\JsonContent(
 *             @OA\Property(property="status", type="string", example="SUCCESS"),
 *         )
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Payment processed successfully",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="Payment successful, order processed")
 *         )
 *     ),
 *     @OA\Response(
 *         response=404,
 *         description="Order not found",
 *         @OA\JsonContent(
 *             @OA\Property(property="error", type="string", example="Order not found")
 *         )
 *     ),
 *     @OA\Response(
 *         response=400,
 *         description="Payment failed",
 *         @OA\JsonContent(
 *             @OA\Property(property="error", type="string", example="Payment failed")
 *         )
 *     )
 * )
 */
class HandleCallback {}
