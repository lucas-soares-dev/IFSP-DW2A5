<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $casts = [
        'items' => 'array'
    ];

    protected $date = ['date'];

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public static function moveFile($request)
    {
        if(!$request->hasFile('image') || !$request->file('image')->isValid()) {
            return false;
        }

        $requestImage = $request->image;
        $extension = $requestImage->extension();
        $imageName = md5($requestImage->getClientOriginalName() . strtotime('now')) . '.' . $extension;
        $request->image->move(public_path('images/events'), $imageName);
        return $imageName;
    }

    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }
}
