<?php

namespace App\Docs\Medicine;

/**
 * @OA\Post(
 *     path="/api/upload-prescription",
 *     summary="Upload prescription image and extract medicine names",
 *     tags={"Medicines"},
 *     security={{"bearerAuth":{}}},
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\MediaType(
 *             mediaType="multipart/form-data",
 *             @OA\Schema(
 *                 required={"image"},
 *                 @OA\Property(
 *                     property="image",
 *                     type="string",
 *                     format="binary",
 *                     description="Prescription image file"
 *                 )
 *             )
 *         )
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Extraction result",
 *         @OA\JsonContent(
 *             @OA\Property(property="found", type="array",
 *                 @OA\Items(type="object",
 *                     @OA\Property(property="name", type="string"),
 *                     @OA\Property(property="description", type="string"),
 *                     @OA\Property(property="stock", type="integer"),
 *                     @OA\Property(property="status", type="string")
 *                 )
 *             ),
 *             @OA\Property(property="notFoundAndAlternatives", type="array",
 *                 @OA\Items(type="object",
 *                     @OA\Property(property="notFoundName", type="string"),
 *                     @OA\Property(property="alternative", type="object",
 *                         nullable=true,
 *                         @OA\Property(property="name", type="string"),
 *                         @OA\Property(property="description", type="string"),
 *                         @OA\Property(property="stock", type="integer"),
 *                         @OA\Property(property="status", type="string")
 *                     )
 *                 )
 *             )
 *         )
 *     ),
 *     @OA\Response(response=500, description="OCR processing failed")
 * )
 */
class UploadPrescription {}
