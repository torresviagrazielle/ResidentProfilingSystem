<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use HasFactory, SoftDeletes;

    
    protected $fillable = ['purpose','place_issued','user_id', 'resident_id', 'document_id'];
    //protected $guarded = ['img'];

    // relationship between resident and transaction
    public function resident()
    {
        return $this->belongsTo(Resident::class);
    }

    // relationship between document and transaction
    public function document()
    {
        return $this->belongsTo(Document::class);
    }
}
