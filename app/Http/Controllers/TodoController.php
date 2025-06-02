<?php

namespace App\Http\Controllers;

use App\Contracts\ITodo;
use App\Http\Requests\TodoStoreRequest;
use App\Http\Requests\TodoUpdateRequest;
use App\Http\Resources\TodoResource;
use App\Models\Todo;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Support\Facades\App;

class TodoController extends Controller
{

    public ITodo $todoService;

    public function __construct()
    {
        $this->todoService = App::make(ITodo::class);
    }

    public function index(): AnonymousResourceCollection
    {
        $items = $this->todoService->index();

        return TodoResource::collection($items);
    }

    public function store(TodoStoreRequest $request): TodoResource
    {
        $item = $this->todoService->store($request);

        return TodoResource::make($item);
    }

    public function update(Todo $todo, TodoUpdateRequest $request): TodoResource
    {
        $item = $this->todoService->update($todo, $request);

        return TodoResource::make($item);
    }

    public function destroy(Todo $todo): JsonResponse
    {
        $this->todoService->destroy($todo);

        return response()->json(['success' => true]);
    }
}
