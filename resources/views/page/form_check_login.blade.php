


<form action="/form_check_login" method="post">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">username</label>
    <div class="col-sm-10">
      <input name="username" type="text" class="form-control" id="inputEmail3" placeholder="Usename">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">password</label>
    <div class="col-sm-10">
      <input name="password" type="password" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>
  </form>



<hr>

@foreach ($users as $user) 
  
    {{  $user->id}}
@endforeach