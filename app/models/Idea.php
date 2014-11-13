<?php

class Idea extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		 'title' => 'required',
		 'body' => 'required',
	];

	// Don't forget to fill this array
	protected $fillable = ['title','body'];

	 public function ratings()
     {
         return $this->belongsToMany('Rating', 'idea_rating')
                   ->withPivot('votes');
     } 

}