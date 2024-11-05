<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\JsonResponse;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return JsonResponse
     */
    public function index(Request $request): JsonResponse
    {
        // ... kode yang lain tetap sama
    }

    /**
     * Store a newly created resource in storage.
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        // ... kode yang lain tetap sama
    }

    /**
     * Display the specified resource.
     * @return JsonResponse
     */
    public function show(int $id): JsonResponse
    {
        // ... kode yang lain tetap sama
    }

    /**
     * Update the specified resource in storage.
     * @return JsonResponse
     */
    public function update(Request $request, int $id): JsonResponse
    {
        // ... kode yang lain tetap sama
    }

    /**
     * Remove the specified resource from storage.
     * @return JsonResponse
     */
    public function destroy(int $id): JsonResponse
    {
        // ... kode yang lain tetap sama
    }
}
