<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage()
    {
      return ($this->image) ? '/storage/' . $this->image : '/storage/profile/tvDyYcrUw9wd3swxvTmRSfsEXi7Y1P1KBUUsOiwZ.jpeg';
    }

    public function followers()
    {
      return $this->belongsToMany(User::class);
    }

    public function user()
    {
      return $this->belongsTo(User::class);
    }
}
