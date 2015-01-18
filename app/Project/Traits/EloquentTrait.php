<?php namespace Project\Traits;

trait EloquentTrait {

    public function scopeFindSlug($query, $slug)
    {
        return $query->where('slug', '=', $slug)->first();
    }
}