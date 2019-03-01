<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'avatar', 'studies', 'description',
    ];

    /**
     * Perfil belong to user.
     *
     * @return Model
     */
    public function user(){
        return $this->belongsTo(User::class);
    }
}
