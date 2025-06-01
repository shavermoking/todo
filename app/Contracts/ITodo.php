<?php

namespace App\Contracts;

use App\Http\Requests\TodoStoreRequest;
use App\Models\Todo;

interface ITodo
{
    public function index();

    public function store(TodoStoreRequest $request);

    public function update(Todo $todo);

    public function destroy(Todo $todo);
}
