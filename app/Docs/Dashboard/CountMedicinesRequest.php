<?php
namespace App\Docs\Dashboard;

/**
 * @OA\Get(
 *     path="/api/dashboard/medicines",
 *     summary="Get total medicines count",
 *     tags={"Dashboard"},
 *     security={{"bearerAuth":{}}},
 *     @OA\Response(response=200, description="Success")
 * )
 */
class CountMedicinesRequest {}
