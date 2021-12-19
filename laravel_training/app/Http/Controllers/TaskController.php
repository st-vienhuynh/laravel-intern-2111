<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;


class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $value = $this->data();
        return view('admin/task/index', ['value' => $value]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/task/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TaskRequest $request)
    {
        return redirect()->back()->with('message', 'Create susscess!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($key)
    {
        $value = $this->data();
        foreach ($value as $k => $v) {
            if ($k == $key) {
                $value = $v;
            }
        }
        return view('admin/task/details', ['value' => $value], ['key' => $key]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($key)
    {
        $value = $this->data();
        foreach ($value as $k => $v) {
            if ($k == $key) {
                $value = $v;
            }
        }
        return view('admin/task/edit', ['value' => $value], ['key' => $key]);
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
        return redirect()->back()->with('message', 'Delete susscess!');
    }
    public function data()
    {
        return [
            'task1' => [
                'title' => 'This is task 1',
                'Description' => 'This is description',
                'type' => 'This is type',
                'status' => '0',
                'start_date' => '15/12/2021',
                'due_date' => '30/12/2021',
                'assignee' => 'Ngoc Vien',
                'estimate' => '15 days',
                'actual' => '10 days'
            ],
            'task2' => [
                'title' => 'This is task 2',
                'Description' => 'This is description',
                'type' => 'This is type',
                'status' => '1',
                'start_date' => '30/12/2021',
                'due_date' => '15/1/2022',
                'assignee' => 'Ngoc Vien',
                'estimate' => '15 days',
                'actual' => '10 days'
            ]
        ];
    }
}
