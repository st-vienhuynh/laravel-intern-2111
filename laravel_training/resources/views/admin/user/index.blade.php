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
                <h2>Name</h2>
            </td>
            <td class="Description">
                <h2>Email</h2>
            </td>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $key => $user)
        <tr role="row">
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
                <a href="{{route('users.show',['id'=>$user->id])}}"><button class="btn btn-default" id="button">Details</button></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection