@extends('layouts.app')

@section('content')



<table id="example" class="table table-striped" style="width:100%">
    <thead>
        <tr>
            <th>Name</th>
            <th>email</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
        </tr>
        @endforeach
    </tbody>

</table>


<div style="text-align:center" class="pagination">
    {!!$users->links()!!}

</div>




@endsection