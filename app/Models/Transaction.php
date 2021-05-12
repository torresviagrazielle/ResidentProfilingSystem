<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use HasFactory;

    // relationship between resident and transaction
    public function resident()
    {
        return $this->hasMany(Resident::class);
    }

    // relationship between document and transaction
    public function document()
    {
        return $this->hasMany(Document::class);
    }
}
