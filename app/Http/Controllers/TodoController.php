<?php

namespace App\Http\Controllers;

use App\Contracts\ITodo;
use App\Http\Requests\TodoStoreRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\App;

class TodoController extends Controller
{

    public ITodo $todoService;

    public function __construct()
    {
        $this->todoService = App::make(ITodo::class);
    }

    public function index(): JsonResponse
    {
        $items = $this->todoService->index();

        return response()->json($items);
    }

    public function store(TodoStoreRequest $request): JsonResponse
    {
        $item = $this->todoService->store($request);

        return response()->json($item, 201);
    }
}
