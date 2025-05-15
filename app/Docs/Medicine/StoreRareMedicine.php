<?php

namespace App\Docs\Medicine;

/**
 * @OA\Post(
 *     path="/api/store-rare-medicine",
 *     summary="Submit a rare medicine request",
 *     tags={"Medicines"},
 *     security={{"bearerAuth":{}}},
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(
 *             required={"address", "medicine_name", "quantity"},
 *             @OA\Property(property="address", type="string", example="123 Main St"),
 *             @OA\Property(property="medicine_name", type="string", example="Paracetamol"),
 *             @OA\Property(property="quantity", type="integer", example=2)
 *         )
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Request submitted successfully",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="Request submitted successfully")
 *         )
 *     ),
 *     @OA\Response(response=401, description="Unauthorized")
 * )
 */
class StoreRareMedicine {}
