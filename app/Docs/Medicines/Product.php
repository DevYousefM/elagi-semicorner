<?php

namespace App\Docs\Medicines;

/**
 * @OA\Get(
 *     path="/api/medicines",
 *     summary="Get paginated list of medicines with optional sorting",
 *     tags={"Medicines"},
 *     @OA\Parameter(
 *         name="sort",
 *         in="query",
 *         description="Sorting option: price_asc, price_desc, name_asc, name_desc",
 *         required=false,
 *         @OA\Schema(type="string", enum={"price_asc","price_desc","name_asc","name_desc"})
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Paginated list of medicines",
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
class Product {}
