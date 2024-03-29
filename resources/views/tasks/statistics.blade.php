@extends('layouts.app')

@section('content')


<table class="table table-striped" style="width:100%">
    <thead>
        <tr>
            <th>User Name</th>
            <th>Task Count</th>
       

        </tr>
    </thead>
    <tbody>
        @foreach($statistics as $stat)
        <tr>

            <td>{{$stat->user->name}}</td>
            <td>{{$stat->task_count}}</td>
   
        </tr>
        @endforeach
    </tbody>

</table>

<div style="text-align:center" class="pagination">
{!!$statistics->links()!!}

</div>


@endsection