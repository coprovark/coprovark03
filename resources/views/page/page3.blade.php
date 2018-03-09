@extends('layouts.main')

@section('title', 'Page Title')

page3

@section('content')
<form action="/page12" method="post">
<select name="select">
    <option value="ไทย">ไทย</option>
    <option value="ลาว">ลาว</option>
    <option value="มาเล">มาเล</option>
    <option value="กัมพูชา">กัมพูชา</option>
    </select>
    <textarea name="area"></textarea>
    <br>
    <input type="submit" value="ส่งค่า">
    </fome>


@endsection