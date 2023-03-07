<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Person;

class Occupation extends Model
{
    use HasFactory;
    protected $table = 'occupations';

    protected $fillable = [
        'name',
    ];

    public $timestamps = false;

    public function occupations_persons()
    {
        return $this->hasMany(Person::class);
    }
}
