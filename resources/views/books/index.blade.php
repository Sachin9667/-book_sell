<!DOCTYPE html>
@extends('layouts.app')

@section('main')

<div class="container">
    <div class="text-right">
        <a href="books/create" class="btn btn-dark mt-3">Add Book</a>
    </div>

    <table class="table table-hover mt-3">
        <thead>
            <tr>
                <th>Sno.</th>
                <th>Name</th>
                <th>Subject</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
            <tr>
                <td>{{$loop->index +1}}</td>
                <td>{{$book->name}}</td>
                <td>{{$book->subject}}</td>
                <td>{{$book->description}}</td>
                <td>
                    <a href="books/{{$book->id}}/edit" class="btn btn-dark btn-sm">
                        <i class="fa fa-edit" style="btn-sm"></i>
                    </a>
                    <a href="books/{{$book->id}}/delete" class="btn btn-danger btn-sm">
                        <i class="fa fa-trash" style="btn-sm"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection()