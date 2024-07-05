<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateClinic;
use App\Services\ClinicService;
use App\Traits\HttpResponse;
use App\Traits\ResponseEntity;
use Illuminate\Http\JsonResponse;

class ClinicController extends Controller
{
    use HttpResponse, ResponseEntity;

    private ClinicService $clinicService;

    public function __construct()
    {
        $this->clinicService = new ClinicService();
    }

    /**
     * @param $id
     * @return JsonResponse
     */
    public function findById($id): JsonResponse
    {
        $clinic = $this->clinicService->findById($id);
        return $this->responseEntity("", 200, $clinic);
    }

    /**
     * @param CreateClinic $createClinic
     * @return JsonResponse
     */
    public function create(CreateClinic $createClinic): JsonResponse
    {
        $clinic = $this->clinicService->create($createClinic);
        return $this->responseEntity("", 201, $clinic);
    }
}
