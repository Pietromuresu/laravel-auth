@extends('layouts.app')

@section('content')

<div class="container w-75">

    <form class="mt-5" action="{{route('admin.projects.store')}}" method="POST">

        @csrf
        <div class="mb-3">
            {{--Name text input --}}

            <label for="name" class="form-label"><strong>Add a Name</strong></label>
            <div class="input-group">
                <input value="{{old($project->name)}}"   type="text" class="form-control"  id="name" name="name" aria-describedby="basic-addon3 basic-addon4">
            </div>
        </div>
        <div class="mb-3">
            {{--Purpose text input --}}

            <label for="purpose" class="form-label"><strong>Add a Purpose</strong></label>
            <div class="input-group">
                <input value="{{old($project->purpose)}}"  type="text" class="form-control"  id="purpose" name="purpose">
            </div>
        </div>
        <div class="mb-3">
            {{--Description text input --}}

            <label for="description" class="form-label"><strong>Add a Description</strong></label>
            <div class="input-group">
                <input value="{{old($project->description)}}" type="text" class="form-control"  id="description"  name="description"  aria-describedby="basic-addon3 basic-addon4">
            </div>
        </div>
        <div class="mb-3">
            {{--Technologies text input --}}

            <label for="technologies" class="form-label"><strong>List used Technologies</strong></label>
            <div class="input-group">
                <input value="{{old($project->technologies)}}" type="text" class="form-control"  id="technologies" name="technologies"  aria-describedby="basic-addon3 basic-addon4">
            </div>
        </div>
        <div class="mb-3">
            {{-- team members text input --}}

            <label for="team_members" class="form-label"><strong>List team members</strong></label>
            <div class="input-group">
                <input value="{{old($project->team_members)}}" type="text" class="form-control"  id="team_members" name="team_members" aria-describedby="basic-addon3 basic-addon4">
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

                Add New Project
            </button>
        </div>
    </form>

</div>
@endsection
