<?php
  include 'includes/conn.php';

  session_start();
  if(isset($_SESSION['admin'])){
    header('location:home.php');
  }
?>

    <link rel="stylesheet" 
    href="../bulma/css/bulma.min.css"> 
<?php //include 'includes/header.php'; ?> 
<body class="hold-transition login-page">



<section class="hero is-primary is-fullheight">
  <div class="hero-body">
    <div class="container">
	<div class="has-text-centered is-size-3">
  		<b>Ingreso Administrador</b>
  	</div>	
      <div class="columns is-centered">
        <div class="column is-5-tablet is-4-desktop is-3-widescreen">
          <form action="login.php" class="box" method="POST" >
            <div class="field">
              <label for="" class="label">Usuario</label>
              <div class="control has-icons-left">
			    <input type="text" class="input" name="username" placeholder="e.g. bobsmith@gmail.com" required autofocus>
        		
               
                <span class="icon is-small is-left">
                  <i class="fa fa-envelope"></i>
                </span>
              </div>
            </div>
            <div class="field">
              <label for="" class="label">Password</label>
              <div class="control has-icons-left">
                <input type="password" name="password" placeholder="*******" class="input" required>
				
                <span class="icon is-small is-left">
                  <i class="fa fa-lock"></i>
                </span>
              </div>
            </div>
            <div class="field">
              <label for="" class="checkbox">
                <input type="checkbox">
               Remember me
              </label>
            </div>
            <div class="field">
              
			  <button type="submit" class="button is-success" name="login">
						<i class="fa fa-sign-in"></i> Ingresar</button>
            </div>
          </form>
        </div>
      </div>
	  <?php
  		if(isset($_SESSION['error'])){
  			echo "
  				<div class='callout callout-danger text-center mt20'>
			  		<p>".$_SESSION['error']."</p> 
			  	</div>
  			";
  			unset($_SESSION['error']);
  		}
  	?>
    </div>
  </div>
</section>

<!--
<div class="login-box">
  	
  
  	<div class="login-box-body">
    	<p class="login-box-msg">Ingresa para iniciar tu sesión</p>

    	<form action="login.php" method="POST">
      		<div class="form-group has-feedback">
        		<input type="text" class="form-control" name="username" placeholder="input Username" required autofocus>
        		<span class="glyphicon glyphicon-user form-control-feedback"></span>
      		</div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" placeholder="input Password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
      		<div class="row">
    			<div class="col-xs-4">
          			<button type="submit" class="btn btn-primary btn-block btn-flat" name="login">
						<i class="fa fa-sign-in"></i> Ingresar</button>
        		</div>.
      		</div>
    	</form>
  	</div>
  	<?php
  		if(isset($_SESSION['error'])){
  			echo "
  				<div class='callout callout-danger text-center mt20'>
			  		<p>".$_SESSION['error']."</p> 
			  	</div>
  			";
  			unset($_SESSION['error']);
  		}
  	?>
</div>
	-->
	
<?php include 'includes/scripts.php' ?>
</body>
</html>