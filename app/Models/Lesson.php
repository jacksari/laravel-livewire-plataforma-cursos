<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $guarded = ['id'];

    use HasFactory;

    public function getCompleteAttribute(){
        return $this->users->contains(auth()->user()->id);
    }

    // Uno a uno
    public function description(){
        return $this->hasOne(Description::class);
    }

    // Uno a muchos inversa
    public function section(){
        return $this->belongsTo(Section::class);
    }

    // Uno a muchos inversa
    public function platform(){
        return $this->belongsTo(Platform::class);
    }

    // muchos a muchos
    public function users(){
        return $this->belongsToMany(User::class);
    }

    // relacion uno a uno polimorfica
    public function resource(){
        return $this->morphOne(Resource::class, 'resourceable');
    }

    // relacion uno a muchos polimorfica
    public  function comments(){
        return $this->morphToMany(Resource::class, 'commentable');
    }

    public  function reactions(){
        return $this->morphToMany(Reaction::class, 'reactionable');
    }
}
