<?php

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Project\Traits\EloquentTrait;

class Category extends \Eloquent implements SluggableInterface {

    use SluggableTrait;
    use EloquentTrait;

    protected $sluggable = array(
        'build_from' => 'name',
        'save_to'    => 'slug',
    );

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function subcategories()
    {
        return $this->hasMany('Subcategory');
    }

    public function products()
    {
        return $this->hasManyThrough('Product','Subcategory');
    }

}