<?php

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Project\Traits\EloquentTrait;

class Product extends \Eloquent implements SluggableInterface {
    
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

    public function subcategory(){
        return $this->belongsTo('Subcategory');
    }

    public function brand(){
        return $this->belongsTo('Brand');
    }

    public function category(){
        return $this->belongsTo('Brand');
    }
}