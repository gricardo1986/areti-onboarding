<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Person;

class Account extends Model
{
    use HasFactory;

    protected $table = 'accounts';

    protected $fillable = [
        'account_type',
        'term_use',
        'status',
    ];

    public function person()
    {
        return $this->hasMany(Person::class);
    }
}
