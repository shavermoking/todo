<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $title
 * @property string $text
 * @property bool $is_completed
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 */
class Todo extends Model
{
    protected $fillable = [
        'title',
        'text'
    ];
}
