<?php

namespace App\Services;

use App\Contracts\ITodo;
use App\Http\Requests\TodoStoreRequest;
use App\Http\Requests\TodoUpdateRequest;
use App\Models\Todo;
use Illuminate\Support\Collection;

class TodoService implements ITodo
{

    public function index(): Collection
    {
        return Todo::query()->get();
    }

    public function store(TodoStoreRequest $request)
    {
        return Todo::query()->create([
            'title' => $request->input('title'),
            'text' => $request->input('text'),
        ]);
    }

    public function update(Todo $todo, TodoUpdateRequest $request): Todo
    {
        $todo->update($request->validated());

        return $todo;
    }

    public function destroy(Todo $todo): void
    {
        $todo->delete();
    }
}
