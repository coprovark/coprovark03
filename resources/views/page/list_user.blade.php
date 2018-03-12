@extends('layouts.main')

@section('title', 'Page Title')
@section('content')
    <h1>List Users</h1>
    <hr>


<table class="table">
    <tr>
    <td>ID</td>
    <td>USERNAME</td>
    <td>PASSWORD</td>
</tr>
@foreach($data_list as $item)
<tr>
    <td>{{$item->id}}</td>
    <td>{{$item->username}}</td>
    <td>{{$item->password}}</td>
</tr>
@endforeach
</table>

@endsection