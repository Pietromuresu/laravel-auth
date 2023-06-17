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


</div>
@endsection

