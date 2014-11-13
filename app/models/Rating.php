<?php

class Rating extends \Eloquent {
	protected $fillable = [];

	public function ideas()
    {
         return $this->belongsToMany('Idea', 'idea_rating');
    }
}