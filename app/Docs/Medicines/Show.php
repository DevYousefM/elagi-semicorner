<?php

namespace App\Docs\Medicines;

/**
 * @OA\Get(
 *     path="/api/medicines/{product}",
 *     summary="Get details of a medicine by ID",
 *     tags={"Medicines"},
 *     @OA\Parameter(
 *         name="product",
 *         in="path",
 *         description="Medicine ID",
 *         required=true,
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Medicine details",
 *         @OA\JsonContent(ref="#/components/schemas/Medicine")
 *     ),
 *     @OA\Response(
 *         response=404,
 *         description="Medicine not found",
 *         @OA\JsonContent(
 *             @OA\Property(property="error", type="string", example="Medicine not found")
 *         )
 *     )
 * )
 */
class Show {}
