<?php

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Product extends \Eloquent implements SluggableInterface {
    
    use SluggableTrait;

    protected $sluggable = array(
        'build_from' => 'name',
        'save_to'    => 'slug',
    );

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function scopeSearch($query, $search)
    {
        return $query->where('name','LIKE',"%$search%");
    }

    public function category(){
        return $this->belongsTo('Category');
    }

    public function brand(){
        return $this->belongsTo('Brand');
    }
}