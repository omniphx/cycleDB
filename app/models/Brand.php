<?php

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Project\Traits\EloquentTrait;

class Brand extends \Eloquent implements SluggableInterface {

    use SluggableTrait;
    use EloquentTrait;

    protected $sluggable = array(
        'build_from' => 'name',
        'save_to'    => 'slug',
    );

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function scopeSearch($query, $search)
    {
        return $query->where('name','LIKE',"%$search%");
    }

    public function products()
    {
        return $this->hasMany('Product');
    }
    
}