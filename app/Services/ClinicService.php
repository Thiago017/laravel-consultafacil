<?php

namespace App\Services;

use App\Http\Requests\CreateClinic;
use App\Http\Requests\UpdateClinic;
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

    public function store(CreateClinic $clinicData): ?Clinic
    {
        $clinic = new Clinic();
        $clinic->fill($clinicData->toArray());
        return $this->repository->store($clinic);
    }

    public function update(int $id, UpdateClinic $updateClinic)
    {
        $clinicData = new Clinic();
        $clinicData->fill($updateClinic->toArray());
        return $this->repository->update($id, $clinicData);
    }

    public function delete(int $id): void
    {
        $this->repository->delete($id);
    }
}
