<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Country;
use App\Models\Person;

class Identification_Document extends Model
{
    use HasFactory;
    protected $table = 'identification_documents';

    protected $fillable = [
        'priority',
        'type_document',
        'person_id',
    ];

    public $timestamps = false;

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function person()
    {
        return $this->belongsTo(Person::class);
    }
}
