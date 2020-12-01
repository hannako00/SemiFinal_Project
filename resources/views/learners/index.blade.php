@extends('base')

@section('content')

@include('info')


<div class="float-right">
    <a href="{{url('/learners/create')}}" class="btn btn-primary">Add New Learner</a>
</div>

<h1>Learners</h1>
<table class="table table-bordered table-striped table-sm">
    <thead>
        <tr>
            <th>ID Number</th>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Level</th>
            <th>Status</th>
            <th>&nbsp;</th>
        </tr>
    </thead>

    <tbody>
        @foreach($learners as $learner)

        <tr>
            <td>{{$learner->id}}</td>
            <td>{{$learner->lname}}</td>
            <td>{{$learner->fname}}</td>
            <td>{{$learner->level}}</td>
            <td>{{$learner->status}}</td>
            <td>
                <a href="{{url('/learners/edit', ['id'=>$learner])}}" class="btn btn-secondary btn-sm">Edit</a>
            </td>
        </tr>

        @endforeach
    </tbody>
</table>

@stop
