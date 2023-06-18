@extends('layouts.app')

@section('content')
<div class="container mt-5">

    <h1 class="mb-5"> {{ $project->name }}</h1>

    <h3 class="mt-4">Purpose: </h3>
    <p>{{ $project->purpose }}</p>
    <br>
    <h3 class="mt-4">Team:</h3>
    <p> {{ $project->team_members }}</p>
    <h3 class="mt-4">Description:</h3>
    <p> {!!$project->description!!}</p>
    <h3 class="mt-4">Technologies:</h3>
    <p> {{ $project->technologies }}</p>
    @if ($project->is_done )
    <h1 class="text-success text-center mt-5">Ended</h1>
    @else
    <h1 class="text-danger text-center mt-5">Work in progress</h1>
    @endif

    <div class="pm-buttons-container text-center mt-5">
        <div class="btn pm-bg-dark ">
            <a class="text-white text-decoration-none" href="{{route('admin.projects.edit', $project)}}">
                Modify
            </a>
        </div>
        <div class="btn pm-bg-red ms-3" >
            <form
              method="POST"
              action="{{route('admin.projects.destroy', $project)}}"
              onsubmit="return confirm('If you confirm, {{ $project->name }} will be deleted forever')">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-transparent border-0 p-0 text-white">
                    Delete
                </button>
            </form>
        </div>
    </div>

</div>
@endsection

