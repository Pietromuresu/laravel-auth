@extends('layouts.app')

@section('content')
<div class="container">

    <table class="table table-striped mt-5">
        <thead>
          <tr>
            <th scope="col">#ID</th>
            <th scope="col">Name</th>
            <th scope="col">Team</th>
            <th scope="col">Is done</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)

            <tr>
                <th scope="row">{{$project->id}}</th>
                <td>{{$project->name}}</td>
                <td>{{$project->team_members}}</td>
                @if($project->is_done)
                    <td>Yes</td>
                @else
                    <td>No</td>
                @endif

                <td>
                    <a href="{{route('admin.projects.show', $project)}}" class="btn btn-primary"><i class="fa-solid fa-info"></i></a>
                    <a href="{{route('admin.projects.edit', $project)}}" class="btn btn-primary">Modify</a>
                    <a href="#" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach

        </tbody>
      </table>

</div>
@endsection

