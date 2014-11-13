<?php

class Rating extends \Eloquent {
	protected $fillable = ['title','body'];

	public function ideas()
    {
         return $this->belongsToMany('Idea', 'idea_rating');
    }
}
