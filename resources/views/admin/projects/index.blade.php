@extends('layouts.app')

@section('content')
<div class="container">

    @if (session('deleted'))
        <div class="alert alert-success mt-3">
            {!! session('deleted') !!}
        </div>
    @endif

    <h1 class="my-4">All projects</h1>

    <div class="pm-card-wrapper">
        @foreach ($projects as $project)

            @include('admin.projects.partials.card', $project)

        @endforeach
    </div>




    </div>
@endsection

