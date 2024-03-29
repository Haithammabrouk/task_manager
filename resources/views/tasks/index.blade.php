@extends('layouts.app')

@section('content')


<div  style="text-align: right; margin-right: 20px;" class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover">
    <a href="{{ route('tasks.create') }}" class="btn btn-sm btn-light btn-active-primary">
        <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
        <span class="svg-icon svg-icon-3">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
                <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
            </svg>
        </span>
        <!--end::Svg Icon-->Create New task
    </a>
</div>

<!-- <form action="{{ route('tasks.index') }}" method="GET">
    <div class="form-group row">
        <input style="margin:20px;" type="name" class="form-control" placeholder="You can use email or code or name" name="search">
    </div>
    <button style="margin:10px;" type="submit" id="kt_sign_up_submit" class="btn btn-primary">

        <span class="indicator-label">search</span>

    </button>
    <a href="{{ url('/tasks') }}" class="btn btn-primary">
        Reset
    </a>
</form> -->
<table id="example" class="table table-striped" style="width:100%">
    <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Assigned by</th>
            <th>Assigned to</th>

        </tr>
    </thead>
    <tbody>
        @foreach($tasks as $task)
        <tr>

            <td>{{$task->title}}</td>
            <td>{{$task->description}}</td>
            <td>{{$task->assignedBy->name}}</td>
            <td>{{$task->assignedTo->name}}</td>
         
        </tr>
        @endforeach
    </tbody>

</table>

<div style="text-align:center" class="pagination">
{!!$tasks->links()!!}

</div>


@endsection