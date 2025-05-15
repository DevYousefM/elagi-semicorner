<?php
namespace App\Docs\Dashboard;

/**
 * @OA\Get(
 *     path="/api/dashboard/medicines",
 *     summary="Get total medicines count",
 *     tags={"Dashboard"},
 *     @OA\Response(response=200, description="Success")
 * )
 */
class CountMedicinesRequest {}
