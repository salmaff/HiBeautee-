<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    use HasFactory;
    protected $fillable=["Nama_cust", "Email_cust", "Telp_cust", "date_pesan", "Shift"];
    
}
