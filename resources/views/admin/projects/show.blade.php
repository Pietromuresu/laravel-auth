@extends('layouts.app')

@section('content')
<div class="container mt-5">

    <h1>Name: {{ $project->name }}</h1>

    <h4>Purpose: {{ $project->purpose }}</h4>
    <br>
    <h2>Team: {{ $project->team_members }}</h2>
    <p>Desc: {{ $project->description }}</p>
    <h2>Technologies: {{ $project->technologies }}</h2>
    @if ($project->is_done )
    <h1 class="text-success text-center mt-5">Ended</h1>
    @else
    <h1 class="text-danger text-center mt-5">Work in progress</h1>
    @endif


</div>
@endsection

