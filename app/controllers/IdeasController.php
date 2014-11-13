<?php

class IdeasController extends \BaseController {

	/**
	 * Display a listing of ideas
	 *
	 * @return Response
	 */
	public function index()
	{
		$ideas = Idea::with('ratings');

		 return json_encode($ideas->get());
	}

	/**
	 * Show the form for creating a new idea
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('ideas.create');
	}

	/**
	 * Store a newly created idea in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Idea::$rules);

		if ($validator->fails())
		{
			return "validation failed";
		}

		Idea::create($data);

		return "Created";
	}

	/**
	 * Display the specified idea.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$idea = Idea::findOrFail($id);

		return View::make('ideas.show', compact('idea'));
	}

	/**
	 * Show the form for editing the specified idea.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$idea = Idea::find($id);

		return View::make('ideas.edit', compact('idea'));
	}

	/**
	 * Update the specified idea in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$idea = Idea::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Idea::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$idea->update($data);

		return Redirect::route('ideas.index');
	}

	/**
	 * Remove the specified idea from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Idea::destroy($id);

		return Redirect::route('ideas.index');
	}

}
