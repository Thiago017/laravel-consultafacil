<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateClinic;
use App\Http\Requests\UpdateClinic;
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
    public function store(CreateClinic $createClinic): JsonResponse
    {
        $clinic = $this->clinicService->store($createClinic);
        return $this->responseEntity("", 201, $clinic);
    }

    /**
     * update
     *
     * @param  int $id
     * @param  UpdateClinic $updateClinic
     * @return JsonResponse
     */
    public function update(int $id, UpdateClinic $updateClinic): JsonResponse
    {
        $clinic = $this->clinicService->update($id, $updateClinic);
        return $this->responseEntity("", 200, $clinic);
    }

    public function delete(int $id): JsonResponse
    {
        $this->clinicService->delete($id);
        return $this->response("Deleted", 200, []);
    }
}
