<?php

namespace App\Http\Resources;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
/**
 * @mixin Todo
 */
class TodoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'text' => $this->text,
            'is_completed' => $this->is_completed,
        ];
    }
}
