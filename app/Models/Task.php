<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Task extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'completed',
        'priority',
    ];

    public static function search($value,$paginate = 5)
    {
        return self::where('title', 'like', "%{$value}%")
            ->orWhere('description', 'like', "%{$value}%")
            ->paginate($paginate);
    }


}
