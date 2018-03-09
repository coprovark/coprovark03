@extends('layouts.main')

@section('title', 'Page Title')

page1

@section('content')
    <p>This is my body content.</p>


    <form action="/page" method="post">
    <!-- <input type="text" name="name"> -->
    
            <input type="text" name="name">
            <input type="hidden" name="hidden" value="59122420302">
            <input type="radio" name="radio" value="M">ชาย
            <input type="radio" name="radio" value="F">หญิง
            <input type="password" name="password" value="12345678">
            <br>

    <input type="submit"value="ส่งค่า">
    </from>
    <h2>แสดงค่า</h2>
    ชื่อ = {{ $NAME}}<br>
    ID = {{ $ID}}<br>
    เพศ = {{ $GEN}}<br>
    pass = {{ $NUM}}
@endsection