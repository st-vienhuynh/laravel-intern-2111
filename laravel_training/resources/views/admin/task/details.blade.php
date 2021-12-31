@extends('admin.layouts.app')
@section("content")
<table class="table table-sm table-dark">
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{session()->get('message')}}
    </div>
    @endif
    <thead>
        <tr class=" cart_menu">
            <td class="Title">
                <h2>Title</h2>
            </td>
            <td class="Description">
                <h2>Description</h2>
            </td>
            <td class="Type">
                <h2>Type</h2>
            </td>
            <td class="Status">
                <h2>Status</h2>
            </td>
            <td class="Start_date">
                <h2>Start_date</h2>
            </td>
            <td class="Due_date">
                <h2>Due_date</h2>
            </td>
            <td class="Assignee">
                <h2>Assignee</h2>
            </td>
            <td class="Estimate">
                <h2>Estimate</h2>
            </td>
            <td class="Actual">
                <h2>Actual</h2>
            </td>
            <td class="Action">
                <h2>Action</h2>
            </td>
        </tr>
    </thead>
    <tbody>
        <tr role="row">
            <td>{{$task->title}}</td>
            <td>{{$task->description}}</td>
            <td>{{$task->type_label}}</td>
            <td>{{$task->status_label}}</td>
            <td>{{$task->start_date}}</td>
            <td>{{$task->due_date}}</td>
            <td>{{$task->assignee}}</td>
            <td>{{$task->estimate}}</td>
            <td>{{$task->actual}}</td>
            <td><a href="{{route('tasks.edit',['id'=>$task->id])}}"><button class="btn btn-default" id="button">Edit</button></a>
                <form action="{{route('tasks.destroy',['id'=>$task->id])}}" method="post">
                    {{ csrf_field() }}
                    @method('delete')
                    <button type="submit" class="btn btn-default" id="button">Delete</button>
                </form>
            </td>
        </tr>
    </tbody>
</table>
@endsection