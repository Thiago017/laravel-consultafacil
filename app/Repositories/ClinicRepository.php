<?php

namespace App\Repositories;

use App\Models\Clinic;

class ClinicRepository
{
    public function findById(int $id)
    {
        return Clinic::find($id);
    }

    public function create(Clinic $clinic)
    {
        return Clinic::create($clinic->toArray());
    }
}
