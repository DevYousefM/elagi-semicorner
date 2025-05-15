<?php

namespace App\Docs\Donate;

/**
 * @OA\Post(
 *     path="/api/donate",
 *     summary="Initiate a donation payment",
 *     tags={"Donation"},
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(
 *             required={"amount"},
 *             @OA\Property(property="amount", type="number", format="float", minimum=1, example=50.0, description="Donation amount"),
 *             @OA\Property(property="donor_name", type="string", example="John Doe", description="Name of the donor (optional)")
 *         )
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Payment URL returned",
 *         @OA\JsonContent(
 *             @OA\Property(property="paymentUrl", type="string", example="https://accept.paymob.com/api/acceptance/iframes/123456?payment_token=abc123xyz")
 *         )
 *     ),
 *     @OA\Response(response=422, description="Validation error"),
 *     security={}
 * )
 */
class InitiateDonationRequest {}
