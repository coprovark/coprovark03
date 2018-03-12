@extends('layouts.main')

@section('content')

        <h1 class="page-header">เข้าสู่ระบบ</h1>
          <form action="/form_login2" method="post">
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">username</label>
             <div class="col-sm-10">
                <input name="username" type="text" class="form-control" id="inputEmail3" placeholder="Usename">
            </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">password</label>
    <div class="col-sm-10">
      <input name="pass" type="password" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>
  </form>
  
  
  
  user={{$username}}<br>
  id={{$name}}
  
  <br>
  <br>
  
  
      
    
@endsection