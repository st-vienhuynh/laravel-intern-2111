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
        @foreach($tasks as $key => $tasks)
        <tr role="row">
            <td>{{$tasks->title}}</td>
            <td>{{$tasks->description}}</td>
            <td>{{$tasks->type}}</td>
            <td>{{$tasks->status}}</td>
            <td>{{$tasks->start_date}}</td>
            <td>{{$tasks->due_date}}</td>
            <td>{{$tasks->assignee}}</td>
            <td>{{$tasks->estimate}}</td>
            <td>{{$tasks->actual}}</td>
            <td><a href="{{route('tasks.show',['id'=>$tasks->id])}}"><button class="btn btn-default" id="button">Details</button></a>
            <td><a href="{{route('tasks.edit',['id'=>$tasks->id])}}"><button class="btn btn-default" id="button">Edit</button></a>
                <form action="{{route('tasks.destroy',['id'=>$tasks->id])}}" method="post">
                    {{ csrf_field() }}
                    @method('delete')
                    <button type="submit" class="btn btn-default" id="button">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    <tfoot>
        <td colspan="8">
            <a href="{{route('tasks.create')}}"><button class="btn btn-default" id="button">Create Product</button></a>
        </td>
        </tr>
    </tfoot>
</table>
@endsection