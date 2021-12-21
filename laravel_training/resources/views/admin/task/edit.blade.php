@extends('admin.layouts.app')
@section("content")
<div class="row justify-content-center">

    <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Update Here</h1>
                            </div>
                            @if(session()->has('message'))
                            <div class="alert alert-success">
                                {{session()->get('message')}}
                            </div>
                            @endif
                            <form action="{{url('/tasks/'.$value->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal form-material">
                                {{ csrf_field() }}
                                @method('put')
                                <div class="form-group">
                                    @error('title')
                                    <span>{{$message}}</span>
                                    @enderror
                                    <input type="title" name="title" class="form-control form-control-user" value="{{$value->title}}">
                                </div>
                                <div class="form-group">
                                    @error('description')
                                    <span>{{$message}}</span>
                                    @enderror
                                    <input type="description" name="description" class="form-control form-control-user" value="{{$value->description}}">
                                </div>
                                <div class="form-group">
                                    @error('type')
                                    <span>{{$message}}</span>
                                    @enderror
                                    <input type="type" name="type" class="form-control form-control-user" value="{{$value->type}}">
                                </div>
                                <div class="form-group">
                                    @error('status')
                                    <span>{{$message}}</span>
                                    @enderror
                                    <input type="status" name="status" class="form-control form-control-user" value="{{$value->status}}">
                                </div>
                                <div class="form-group">
                                    @error('start_date')
                                    <span>{{$message}}</span>
                                    @enderror
                                    <input type="start_date" name="start_date" class="form-control form-control-user" value="{{$value->start_date}}">
                                </div>
                                <div class="form-group">
                                    @error('due_date')
                                    <span>{{$message}}</span>
                                    @enderror
                                    <input type="due_date" name="due_date" class="form-control form-control-user" value="{{$value->due_date}}">
                                </div>
                                <div class="form-group">
                                    @error('assignee')
                                    <span>{{$message}}</span>
                                    @enderror
                                    <input type="assignee" name="assignee" class="form-control form-control-user" value="{{$value->assignee}}">
                                </div>
                                <div class="form-group">
                                    @error('estimate')
                                    <span>{{$message}}</span>
                                    @enderror
                                    <input type="estimate" name="estimate" class="form-control form-control-user" value="{{$value->estimate}}">
                                </div>
                                <div class="form-group">
                                    @error('actual')
                                    <span>{{$message}}</span>
                                    @enderror
                                    <input type="actual" name="actual" class="form-control form-control-user" value="{{$value->actual}}">
                                </div>
                                <div class="form-group">
                                    <button name="submit" type="submit" class="btn btn-success">Edit</button>
                                </div>
                            </form>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection