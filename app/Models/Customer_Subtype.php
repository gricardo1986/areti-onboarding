<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Person;

class Customer_Subtype extends Model
{
    use HasFactory;
    protected $table = 'customers_subtype';

    protected $fillable = [
        'name',
    ];

    public $timestamps = false;

    public function customers_subtype_persons()
    {
        return $this->hasMany(Person::class);
    }
}
