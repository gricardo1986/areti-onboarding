<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Country;
use App\Models\Account;

class Expected_Money extends Model
{
    use HasFactory;
    protected $table = 'expected_money';

    protected $fillable = [
        'type',
        'country_id',
        'account_id',
    ];

    public $timestamps = false;

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function account()
    {
        return $this->belongsTo(Account::class);
    }
}
