<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $guarded =[];
    public function profileImage()
    {
        $imagePath = ($this->image) ?  $this->image : '/profile/nondispo.png';
        return '/storage/' . $imagePath;
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }
    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
