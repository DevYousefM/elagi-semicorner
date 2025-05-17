<?php

namespace App\Docs\Dashboard;

/**
 * @OA\Get(
 *     path="/api/reset-db",
 *     summary="Reset DB",
 *     tags={"Dashboard"},
 *     security={{"bearerAuth":{}}},
 *     @OA\Response(
 *         response=200,
 *         description="Reset DB",
 *         @OA\JsonContent(
 *             type="object",
 *             @OA\Property(property="message", type="string", example="Database reset successfully.")
 *         )
 *     )
 * )
 */

class ResetDB {}
