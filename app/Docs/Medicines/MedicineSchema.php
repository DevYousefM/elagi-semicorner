<?php

namespace App\Docs\Medicines;

/**
 * @OA\Schema(
 *     schema="Medicine",
 *     type="object",
 *     required={"id","name","price","image_url"},
 *     @OA\Property(property="id", type="integer", example=1),
 *     @OA\Property(property="name", type="string", example="Paracetamol"),
 *     @OA\Property(property="price", type="number", format="float", example=9.99),
 *     @OA\Property(property="image_url", type="string", format="url", example="https://example.com/images/paracetamol.jpg")
 * )
 */
class MedicineSchema {}
