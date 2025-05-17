<?php

namespace App\Docs\RareMedicine;

/**
 * @OA\Delete(
 * path="/api/rare-medicine-requests/{id}",
 * summary="Delete a rare medicine request by ID",
 * tags={"Rare Medicine Requests"},
 * security={{"bearerAuth":{}}},
 * @OA\Parameter(
 * name="id",
 * in="path",
 * description="ID of the rare medicine request",
 * required=true,
 * @OA\Schema(type="integer")
 * ),
 * @OA\Response(
 * response=200,
 * description="Request deleted successfully",
 * @OA\JsonContent(
 * @OA\Property(property="message", type="string", example="Request deleted successfully")
 * )
 * ),
 * @OA\Response(
 * response=404,
 * description="Request not found",
 * @OA\JsonContent(
 * @OA\Property(property="message", type="string", example="Request not found")
 * )
 * )
 * )
 */
class DestroyRareMedicineRequest {}
