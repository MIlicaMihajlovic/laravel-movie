<?php

namespace App;

use App\Movie;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = ['id'];

    const VALIDATION_RULES =
    [
        'content' => 'required | min:10',    
    ];

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }
}
