@extends('layouts.app')

@section('content')

<div class="container w-75">

    @if($errors->any())
    <div class=" mt-5 alert alert-danger" role="alert">
        <h4 >Ops, pay attention to these fields</h4>
        <ul>
            @foreach ($errors->all() as $error)

            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>

@endif


    <form class="mt-5" action="{{route('admin.projects.update', $project)}}" method="POST">

        @csrf
        @method('PUT')

        <div class="mb-3">
            {{--Name text input --}}

            <label for="name" class="form-label"><strong>Edit Name</strong></label>
            <div class="input-group">
                <input value="{{old('name', $project->name)}}"   type="text" class="form-control"  id="name" name="name" aria-describedby="basic-addon3 basic-addon4">
            </div>
        </div>
        <div class="mb-3">
            {{--Purpose text input --}}

            <label for="purpose" class="form-label"><strong>Edit Purpose</strong></label>
            <div class="input-group">
                <input value="{{old('purpose', $project->purpose)}}"  type="text" class="form-control"  id="purpose" name="purpose">
            </div>
        </div>
        <div class="mb-3">
            {{--Description text input --}}

            <label for="description" class="form-label"><strong>Edit Description</strong></label>

                <textarea type="text" class="form-control"  id="description"  name="description"  aria-describedby="basic-addon3 basic-addon4">{{old('description', $project->description)}}</textarea>
                <script>
                    ClassicEditor
                        .create( document.querySelector( '#description' ) )
                        .catch( error => {
                            console.error( error );
                        } );
                </script>

        </div>
        <div class="mb-3">
            {{--Technologies text input --}}

            <label for="technologies" class="form-label"><strong>Edit/Delete Technologies</strong></label>
            <div class="input-group">
                <input value="{{old('technologies', $project->technologies)}}" type="text" class="form-control"  id="technologies" name="technologies"  aria-describedby="basic-addon3 basic-addon4">
            </div>
        </div>
        <div class="mb-3">
            {{--Repository text input --}}

            <label for="repository" class="form-label"><strong>Edit Repository</strong></label>
            <div class="input-group">
                <input value="{{old('repository', $project->repository)}}" type="text" class="form-control"  id="repository" name="repository"  aria-describedby="basic-addon3 basic-addon4">
            </div>
        </div>
        <div class="mb-3">
            {{-- team members text input --}}

            <label for="team_members" class="form-label"><strong>Add team members</strong></label>
            <div class="input-group">
                <input value="{{old('team_members', $project->team_members)}}" type="text" class="form-control"  id="team_members" name="team_members" aria-describedby="basic-addon3 basic-addon4">
            </div>
        </div>
        <div class="mb-3">
            {{-- Project Manager text input --}}

            <label for="project_manager" class="form-label"><strong>Edit Project Manager</strong></label>
            <div class="input-group">
                <input value="{{old('project_manager', $project->project_manager)}}" type="text" class="form-control"  id="project_manager" name="project_manager" aria-describedby="basic-addon3 basic-addon4">
            </div>
        </div>
        <div class="mb-3">
            {{-- is_done checkbox --}}
            <label for="is_done" class="form-label"><strong>Completed</strong></label>
            <div class="input-group">
                <label class="mx-2" for="is_done">Yes</label>

                    <input type="checkbox" value="1" id="is_done" name="is_done"  aria-describedby="basic-addon3 basic-addon4">
            </div>
            <div class="input-group">

                <label class="mx-2" for="is_done">No</label>

                <input type="checkbox" value="0" id="is_done" name="is_done"  aria-describedby="basic-addon3 basic-addon4">
            </div>
        </div>

        <div class="text-center mt-5">
            <button type="submit" class="btn btn-dark">

                Modify "{{$project->name}}"
            </button>
        </div>
    </form>

</div>
@endsection
