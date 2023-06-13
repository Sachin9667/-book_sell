@extends('layouts.app')

@section('main')

<div class="container">
    <div class="row justify-content-center mt-3">
        <div class="col-sm-8">
            <div class="card mt-3 p-3">
                <form mrthod="POST" action="/books/store" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" value="{{old('name')}}" />
                        @if($errors->has('name'))
                        <span class="text-danger">{{$errors->first('name')}}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Subject</label>
                        <input type="text" name="subject" class="form-control" value="{{old('subject')}}" />
                        @if($errors->has('subject'))
                        <span class="text-danger">{{$errors->first('subject')}}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" name="description" id="" cols="30"
                            rows="3">{{old('description')}}</textarea>
                        @if($errors->has('description'))
                        <span class="text-danger">{{$errors->first('description')}}</span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-dark mt-3">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection()