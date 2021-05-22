<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\SoftDeletes;


class Resident extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['lastname','firstname','middlename', 'extname', 'house_num', 'street','barangay','city', 'citizenship', 'religion', 'sex', 'birth_date','age', 'civil_status', 'occupation', 'tin_num', 'residence_period', 'contact_num', 'voters_id', 'precint_num'];
    protected $guarded = ['img'];


    // relationship between resident and transaction
    public function transaction()
    {
        return $this->hasMany(Transaction::class);
    }
}
