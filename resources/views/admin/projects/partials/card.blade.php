
<a class="pm-card-link" href="{{route('admin.projects.show', $project)}}">
    <div class="pm-card text-black  ">
        <div class="pm-bg-light-green">

        </div>

        <div class="pm-card-title position-relative">

            <h4 class="text-dark">{{$project->name}}</h4>

        </div>


        <p class="mt-4">{{$project->purpose    }}</p>
        <h6 class="mt-4 text-dark">Project Manager: {{$project->team_members}}</h6>
        <p class="mt-4">{!! $project->is_done ? 'Completed <i class="fa-solid fa-check"></i>' : 'In progress... ' !!}</p>

    </div>

</a>
