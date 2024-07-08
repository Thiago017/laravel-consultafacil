<?php

namespace App\Repositories;

use App\Models\Clinic;

class ClinicRepository
{
    public function findById(int $id)
    {
        return Clinic::query()->findOrFail($id);
    }

    public function store(Clinic $clinic)
    {
        return Clinic::query()->create($clinic->toArray());
    }

    public function update(int $id, Clinic $clinicData)
    {
        $clinic = $this->findById($id);
        $clinic->fill($clinicData->toArray());
        $clinic->save();
        return $clinic;
    }

    public function delete(int $id): void
    {
        $clinic = $this->findById($id);
        $clinic->delete();
    }
}
