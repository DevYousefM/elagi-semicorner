<?php

namespace App\Docs\RareMedicine;

/**
 * @OA\Get(
 *     path="/api/rare-medicine-requests",
 *     summary="Get all rare medicine requests",
 *     tags={"Rare Medicine Requests"},
 *     @OA\Response(
 *         response=200,
 *         description="List of rare medicine requests",
 *         @OA\JsonContent(type="array",
 *             @OA\Items(ref="#/components/schemas/RareMedicineRequest")
 *         )
 *     )
 * )
 */
class IndexRareMedicineRequest {}
