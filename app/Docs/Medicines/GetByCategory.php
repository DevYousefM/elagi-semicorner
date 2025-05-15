<?php

namespace App\Docs\Medicines;

/**
 * @OA\Get(
 *     path="/api/medicines/category/{categorySlug}",
 *     summary="Get paginated list of medicines by category slug",
 *     tags={"Medicines"},
 *     @OA\Parameter(
 *         name="categorySlug",
 *         in="path",
 *         description="Category slug",
 *         required=true,
 *         @OA\Schema(type="string")
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Paginated list of medicines in given category",
 *         @OA\JsonContent(
 *             @OA\Property(property="current_page", type="integer"),
 *             @OA\Property(property="data", type="array",
 *                 @OA\Items(ref="#/components/schemas/Medicine")
 *             ),
 *             @OA\Property(property="last_page", type="integer"),
 *             @OA\Property(property="per_page", type="integer"),
 *             @OA\Property(property="total", type="integer")
 *         )
 *     )
 * )
 */
class GetByCategory {}
