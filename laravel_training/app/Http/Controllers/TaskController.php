<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use Illuminate\Support\Facades\DB;


class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $task = DB::table('task')->get();
        return view('admin.task.index', ['task' => $task]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.task.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TaskRequest $request)
    {
        DB::table('task')->insert(
            [
                'title' => $request->title,
                'description' =>  $request->description,
                'type' =>  $request->type,
                'status' =>  $request->type,
                'start_date' =>  $request->start_date,
                'due_date' =>  $request->due_date,
                'assignee' =>  $request->assignee,
                'estimate' =>  $request->estimate,
                'actual' =>  $request->actual,
            ]
        );
        return redirect()->back()->with('message', 'Create susscess!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $task = DB::table('task')->find($id);
        return view('admin.task.details', ['task' => $task]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task = DB::table('task')->find($id);
        return view('admin.task.edit', ['task' => $task]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TaskRequest $request, $id)
    {
        DB::table('task')->where('id', $id)->update(
            [
                'title' => $request->title,
                'description' =>  $request->description,
                'type' =>  $request->type,
                'status' =>  $request->status,
                'start_date' =>  $request->start_date,
                'due_date' =>  $request->due_date,
                'assignee' =>  $request->assignee,
                'estimate' =>  $request->estimate,
                'actual' =>  $request->actual,
            ]
        );
        return redirect()->back()->with('message', 'Update susscess!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('task')->where('id', $id)->delete();
        return redirect()->back()->with('message', 'Delete susscess!');
    }
}
