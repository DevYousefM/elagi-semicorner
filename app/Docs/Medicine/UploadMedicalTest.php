<?php

namespace App\Docs\Medicine;

/**
 * @OA\Post(
 *     path="/api/upload-medicalTest",
 *     summary="Upload medical test file or input calcium level for analysis",
 *     tags={"Medicines"},
 *     security={{"bearerAuth":{}}},
 *     @OA\RequestBody(
 *         required=false,
 *         @OA\MediaType(
 *             mediaType="multipart/form-data",
 *             @OA\Schema(
 *                 @OA\Property(
 *                     description="Medical test file",
 *                     property="file",
 *                     type="string",
 *                     format="binary"
 *                 ),
 *                 @OA\Property(
 *                     description="Calcium level input if no file is provided",
 *                     property="calciumLevel",
 *                     type="number",
 *                     format="float"
 *                 )
 *             )
 *         )
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Analysis result",
 *         @OA\JsonContent(type="object")
 *     ),
 *     @OA\Response(response=500, description="Processing failed")
 * )
 */
class UploadMedicalTest {}
