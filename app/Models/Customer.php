<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'date_of_birth','image'];
    public function measurements()
    {
        return $this->hasMany(Measurement::class);
    }
}
