<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Account;
use App\Models\Address;

class Person extends Model
{
    use HasFactory;

    protected $table = 'persons';

    protected $fillable = [
        'account_id',
        'first_name',
        'last_name',
        'email',
        'phone_code_id',
        'phone_number',
        'index_signer'
    ];

    public function account()
    {
        return $this->belongsTo(Account::class);
    }

    public function address()
    {
        return $this->hasMany(Address::class);
    }
}
