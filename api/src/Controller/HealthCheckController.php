<?php

namespace App\Controller;

use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations\Get;
use Symfony\Component\HttpFoundation\JsonResponse;


class HealthCheckController extends AbstractFOSRestController
{
    /**
     * @Get("/health-check", name="get_health_check")
     */
    public function getHealthCheck(): JsonResponse
    {
        return new JsonResponse([
            'status' => "I'm alive",
            'code' => 'ok',
        ]);
    }
}