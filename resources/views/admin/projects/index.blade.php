@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>Project List</h1>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Project Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Description</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Url</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project)
                        <tr>
                            <td>{{$project->title}}</td>
                            <td>{{$project->image}}</td>
                            <td>{{$project->description}}</td>
                            <td>{{$project->slug}}</td>
                            <td>
                                {{$project->url}}
                                <div class="d-flex">
                                    <a href="{{route('admin.projects.show', $project->id)}}" class="btn btn-info border">Info</a>
                                    <form action="{{route('admin.projects.destroy', $project->id)}}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="cancel-btn btn btn-danger ms-3" data-item-title="{{$project->title}}">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
    </section>
@endsection
