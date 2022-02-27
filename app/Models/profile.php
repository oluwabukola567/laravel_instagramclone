<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    protected $guarded = [];

    use HasFactory;
    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'profile/Asset 3.png';
        return '/storage/'. $imagePath;
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
