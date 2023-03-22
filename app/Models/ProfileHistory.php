<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileHistory extends Model
{
    use HasFactory;
    
    protected $guarded = array('id');
    
    public static $rules = array(
        'profile' => 'required',
        'edit' => 'required',
        );
        
        public function profile_histories()
        {
            return $this->hasMany('App\Models\ProfileHistory');
        }
}
