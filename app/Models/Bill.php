<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table = 'bills';
    protected $fillable = ['date_order', 'total', 'note', 'status_id', 'payment_id'];

    public function Status()
    {
    	return $this->belongsTo(Status::class, 'status_id');
    }

    public function Payment()
    {
    	return $this->belongsTo(Payment::class, 'payment_id');
    }

    public function Bill_detail()
    {
    	return $this->hasMany(Bill_detail::class, 'bill_id');
    }
}
