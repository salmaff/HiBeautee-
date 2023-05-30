<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserM extends Model
{
    use HasFactory;
    protected $table = 'tbl_users';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'NamaUser',
        'Email',
        'NoTelp',
        'Password',
    ];

    public $timestamps = false;

}
