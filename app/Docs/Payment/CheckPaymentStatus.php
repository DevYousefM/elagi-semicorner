<?php

namespace App\Docs\Payment;

/**
 * @OA\Get(
 *     path="/api/check-payment-status/{paymentId}",
 *     summary="Check payment status by payment ID",
 *     tags={"Payments"},
 *     security={{"bearerAuth":{}}},
 *     @OA\Parameter(
 *         name="paymentId",
 *         in="path",
 *         required=true,
 *         description="Payment identifier",
 *         @OA\Schema(type="string")
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Payment status",
 *         @OA\JsonContent(
 *             @OA\Property(property="status", type="string", example="completed")
 *         )
 *     ),
 *     @OA\Response(
 *         response=404,
 *         description="Payment not found",
 *         @OA\JsonContent(
 *             @OA\Property(property="status", type="string", example="error"),
 *             @OA\Property(property="message", type="string", example="Payment not found")
 *         )
 *     )
 * )
 */
class CheckPaymentStatus {}
