<div class="container body">
    <?php if($error){ ?>
        <div class="alert alert-danger" role="alert">
            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
            <span class="sr-only">Error:</span>
            Se ha producido un error. Prueba de nuevo.
        </div>
    <?php } ?>
  <?php
        $attributes = array('class' => 'form-signin');
        echo form_open("login/validate",$attributes);
  ?>
        <h2 class="form-signin-heading">Administrator Panel</h2>
        <label for="user" class="sr-only">Usuario</label>
        <input type="text" id="user" name="user" class="form-control" placeholder="Usuario" required autofocus>
        <label for="password" class="sr-only">Contraseña</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="Contraseña" required>
        <br />
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
  <?php echo form_close(); ?>

</div> <!-- /container -->
