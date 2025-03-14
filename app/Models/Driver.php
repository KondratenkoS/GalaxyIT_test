<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;
    protected $table = 'drivers';
    protected $guarded = false;
    protected $fillable = ['first_name', 'last_name', 'birth_date', 'image', 'image_url'];

    public function getFirstNameAttribute($value)
    {
        return mb_ucfirst($value);
    }

    public function setFirstNameAttribute($value)
    {
        $this->attributes['first_name'] = mb_strtolower($value);
    }
}
