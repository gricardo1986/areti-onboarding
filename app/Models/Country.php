<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Person;

class Country extends Model
{
    use HasFactory;
    protected $table = 'countries';

    protected $fillable = [
        'name',
        'code',
        'phone_code',
        'active'
    ];

    public $timestamps = false;

    public function person_phone_code()
    {
        return $this->hasMany(Person::class);
    }

}
