<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Account;

class Account_Purpose extends Model
{
    use HasFactory;
    protected $table = 'account_purposes';

    protected $fillable = [
        'description',
        'account_id',
    ];

    public $timestamps = false;

    public function account()
    {
        return $this->belongsTo(Account::class);
    }
}
