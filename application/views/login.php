<div class="container">
  <div class="login well col-md-4">
    

    <form id="loginform" method="POST" action="<?=base_url("index.php/MainController/login");?>">
    
    <div class="wrapper">
    <form class="form-signin" id="loginform" method="POST" action="<?=base_url("index.php/MainController/login");?>">       
      <h2 class="form-signin-heading">Please login</h2>
      <input type="text" class="form-control" name="username" placeholder="Username" required="" autofocus="" />
      <input type="password" class="form-control" name="password" placeholder="Password" required=""/>      
      <label class="checkbox">
      <a href="#"> Recover Password </a>
      </label>
      <button class="btn btn-sm btn-primary btn-block" id = "submit">Login </a></button>
    </form>
  </div>
  </div>
</div>



