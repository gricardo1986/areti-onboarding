<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Person;

class Address extends Model
{
    use HasFactory;
    protected $table = 'address';

    protected $fillable = [
        'priority',
        'person_id',
    ];

    public $timestamps = false;

    public function person()
    {
        return $this->belongsTo(Person::class);
    }

}
