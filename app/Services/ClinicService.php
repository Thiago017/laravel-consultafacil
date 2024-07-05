<?php

namespace App\Services;

use App\Http\Requests\CreateClinic;
use App\Repositories\ClinicRepository;
use App\Models\Clinic;

class ClinicService
{
    private ClinicRepository $repository;
    public function __construct()
    {
        $this->repository = new ClinicRepository();
    }

    public function findById(int $id): ?Clinic
    {
        return $this->repository->findById($id);
    }

    public function create(CreateClinic $clinicData): ?Clinic
    {
        $clinic = new Clinic();
        $clinic->fill($clinicData->toArray());
        return $this->repository->create($clinic);
    }
}
