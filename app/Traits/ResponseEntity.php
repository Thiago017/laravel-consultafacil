<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\JsonResponse;

trait ResponseEntity
{
    public function responseEntity(string $message, string|int $statusCode, Model $entity): JsonResponse
    {
        return response()->json([
            'message' => $message,
            'status_code' => $statusCode,
            'Entity' => $entity
        ], $statusCode);
    }
}
