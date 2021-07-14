<div id="back"></div>

<div class="login-box">

  <div class="login-logo">

    <img src="views/img/template/logo-blanco-bloque.png" class="img-responsive" style="padding: 30px 100px 0px 100px">   

  </div>

  <div class="login-box-body">

    <div class="login-box-msg">Enter the System</div>

    <form method="post">

      <div class="form-group has-feedback">

        <input type="text" class="form-control" placeholder="user" name="loginUser" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>

      </div>

      <div class="form-group has-feedback">

        <input type="password" class="form-control" placeholder="password" name="loginpass" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>

      </div>

      <div class="row">

        <div class="col-xs-4">

          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>

        </div>

      </div>

    </div>

    <?php 

    $login = new controllerUser();
    $login -> ctrlLoginUser();

     ?>

  </form>

</div>