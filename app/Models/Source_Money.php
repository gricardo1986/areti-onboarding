<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Person;

class Source_Money extends Model
{
    use HasFactory;
    protected $table = 'source_money';

    protected $fillable = [
        'type',
        'description',
        'person_id',
    ];

    public $timestamps = false;

    public function person()
    {
        return $this->belongsTo(Person::class);
    }
}
