@extends('admin.layouts.app')
@section("content")
<table class="table table-sm table-dark">
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{session()->get('message')}}
    </div>
    @endif
    <thead>
        <span>User Name: </span>
        <p style="display: inline-block;">{{$user->name}}</p>
        <tr class=" cart_menu">
            <td class="Title">
                <h2>Title</h2>
            </td>
            <td class="Description">
                <h2>Description</h2>
            </td>
        </tr>
    </thead>
    <tbody>
        @foreach($tasks as $key => $task)
        <tr role="row">
            <td>{{$task->title}}</td>
            <td>{{$task->description}}</td>
        </tr>
        @endforeach
    </tbody>
    <tfoot>
</table>
@endsection