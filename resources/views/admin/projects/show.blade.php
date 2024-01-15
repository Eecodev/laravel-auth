@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>{{$project->title}}</h1>
        <p>{{$project->description}}</p>
        <div>
            <img src="{{asset('storage/' . $project->image)}}" alt="{{$project->title}}">
        </div>
    </section>
@endsection

