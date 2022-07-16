<?php

namespace Thuhtet\LaravelExample\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    
    protected $guarded = [];

    public function getBrand(): string
    {
        return $this->brand;
    }

}