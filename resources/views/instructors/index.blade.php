@extends('base')

@section('content')

@include('info')


<div class="float-right">
    <a href="{{url('/instructors/create')}}" class="btn btn-primary">Add New Instructor</a>
</div>
<h1>Instructors</h1>
<table class="table table-bordered table-striped table-sm">
    <thead>
        <tr>
            <th>ID Number</th>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Expertise</th>
            <th>Rating</th>
            <th>&nbsp;</th>
        </tr>
    </thead>

    <tbody>
        @foreach($instructors as $instructor)

        <tr>
            <td>{{$instructor->id}}</td>
            <td>{{$instructor->lname}}</td>
            <td>{{$instructor->fname}}</td>
            <td>{{$instructor->aoe}}</td>
            <td>{{$instructor->rating}}</td>
            <td>
                <a href="{{url('/instructors/edit', ['id'=>$instructor])}}" class="btn btn-secondary btn-sm">Edit</a>
            </td>
        </tr>

        @endforeach
    </tbody>
</table>

@stop
