<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function getImage()
    {
        $imagePath = $this->image ?? 'avatars/default.jpeg';

        return "/storage/" . $imagePath;
    }
}
