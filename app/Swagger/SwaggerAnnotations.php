<?php

namespace App\Swagger;

use OpenApi\Annotations as OA;

/**
 * @OA\Info(
 *     version="1.0.0",
 *     title="My Laravel API",
 *     description="API documentation for my Laravel app"
 * )

 * @OA\Server(
 *     url="http://localhost:8000",
 *     description="Local server"
 * )
 */
class SwaggerAnnotations {}
