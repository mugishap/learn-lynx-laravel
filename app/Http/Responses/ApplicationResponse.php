<?php

namespace App\Http\Responses;

use Illuminate\Http\JsonResponse;

class ApplicationResponse
{
    public static function success($data = null, $message = '', $status = 200): JsonResponse
    {
        return response()->json([
            'success' => true,
            'message' => $message,
            'data' => $data,
        ], $status);
    }

    public static function error($message = '', $status = 400): JsonResponse
    {
        return response()->json([
            'success' => false,
            'message' => $message,
        ], $status);
    }
}
