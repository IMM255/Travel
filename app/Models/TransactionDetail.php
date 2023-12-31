<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class TransactionDetail extends Model
{
    use HasFactory,softDeletes;

    protected $fillable = [
        'transactions_id','username','nationality','is_visa',
        'doe_passport'
    ];

    protected $hidden = [

    ];


    public function transaction(){
        return $this->belongsTo(Transaction::class,'transactions_id','id');
    }



}
