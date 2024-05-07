<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserModel extends Authenticatable implements JWTSubject
{
    public function getJWTIdentifier(){
    return $this->getKey();
    }

    public function getJWTCustomClaims(){
        return [];
    
    }
    protected $table = 'm_user';
    protected $primaryKey = 'user_id';

    protected $fillable = ['level_id','username','nama','password'];
}

// use Illuminate\Database\Eloquent\Relations\BelongsTo;
// use Illuminate\Auth\Authenticatable as AuthenticableTrait;
// use Illuminate\Database\Eloquent\Factories\HasFactory;
// class UserModel extends Model implements Authenticatable

// // //jobsheet 3
// // {
// //     use HasFactory;

// //     protected $table = 'm_user'; // Mendefinisikan nama tabel yang digunakan oleh model ini
// //     protected $primaryKey = 'user_id'; // Mendefinisikan primary key dari tabel yang digunakan

    
// // }

// {
//     use AuthenticableTrait;
//     use HasFactory;

//     protected $table = 'm_user'; // Mendefinisikan nama tabel yang digunakan oleh model ini
//     protected $primaryKey = 'user_id'; // Mendefinisikan primary key dari tabel yang digunakan
    
//     /**
//      * The attributes that are mass assignable.
//      * 
//      * @var array
//      */
//     protected $fillable = ['level_id','username','nama','password'];

//     public function level(): BelongsTo
//     {
//         return $this->belongsTo(LevelModel::class, 'level_id', 'level_id');
//     }
// }