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
        @foreach($admins as $admin)
        <tr>
            <td>{{$admin->name}}</td>
            <td>{{$admin->email}}</td>
        </tr>
        @endforeach
    </tbody>

</table>


<div style="text-align:center" class="pagination">
    {!!$admins->links()!!}

</div>




@endsection