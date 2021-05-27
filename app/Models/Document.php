<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $fillable = ['document_type'];

    
    // relationship between document and transaction
    public function transaction()
    {
        return $this->hasMany(Transaction::class);
    }
}
