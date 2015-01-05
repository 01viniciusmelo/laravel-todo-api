<?php

class TasksController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /tasks
	 *
	 * @return Response
	 */
	public function index()
	{
		$tasks = Task::all();
		return Response::json($tasks, 200);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /tasks/create
	 *
	 * @return Response
	 */
	public function create()
	{

	}

	/**
	 * Store a newly created resource in storage.
	 * POST /tasks
	 *
	 * @return Response
	 */
	public function store()
	{

    if(Task::validate(Input::all())){
    	return Response::json(array(
    		'message' => 'Task has been created!'
    		), 200);
    }else{
    	return Response::json(array(
    		'error_code' => 'Some problem happened, verify the API documentation.'
    		), 400);
    }

	}

	/**
	 * Display the specified resource.
	 * GET /tasks/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$task = Task::find($id);
		if($task){
			return Response::json($task, 200);
		}else{
			$err_message = array('error_code' => 'Task not Found!');
			return Response::json($err_message, 400);
		}
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /tasks/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /tasks/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /tasks/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}