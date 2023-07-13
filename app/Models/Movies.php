<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function genre()
    {
        return $this->belongsTo(Genres::class);
    }
    public function country()
    {
        return $this->belongsTo(Countries::class);
    }
    public function comment()
    {
        return $this->hasMany(Comments::class);
    }
}
