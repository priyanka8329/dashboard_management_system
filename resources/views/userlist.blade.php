
@extends('layout')
@section('content')
<h1>list page</h1>


<div>
    <ul>
        @foreach($user as $u)
        <li><span>{{$u->id}}</span> <span>{{$u->name}}</span> <span>{{$u->email}}</span></li>
        @endforeach
    </ul>
</div>
@endsection
