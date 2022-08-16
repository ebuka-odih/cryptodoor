<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;


class CryptoNews extends Model
{
    use Sluggable, SluggableScopeHelpers;
    protected $guarded = [];


    public function featured()
    {
        if ($this->featured == 1){
            return "Yes";
        }
        return "No";
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

}
