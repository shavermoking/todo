<?php

namespace App\Contracts;

use App\Http\Requests\TodoStoreRequest;
use App\Http\Requests\TodoUpdateRequest;
use App\Models\Todo;

interface ITodo
{
    public function index();

    public function store(TodoStoreRequest $request);

    public function update(Todo $todo, TodoUpdateRequest $request);

    public function destroy(Todo $todo);
}
