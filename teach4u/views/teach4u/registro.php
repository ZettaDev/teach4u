<div class="tm-section tm-section-color-white">
    <div class="uk-container uk-container-center uk-text-center">
        <h1 class="registro">Registro</h1>
        <div class="uk-panel">
            <form class="uk-form">
                <div class="usuarioReg">

                    <div class="uk-form-icon">
                        <i class="uk-icon-at"></i>
                        <input class="uk-form-width-large" type="text" placeholder="Introduzca el email" id="email" >
                    </div>
                    <div class="errorEmail">                    
                    </div>
                    <div class="uk-form-icon">
                        <i class="uk-icon-user"></i>
                        <input class="uk-form-width-large" type="text" placeholder="Introduzca el nick" id="nick" > 
                    </div>
                    <div class="errorNick">                    
                    </div>
                    <div class="uk-form-icon uk-form-password">
                        <i class="uk-icon-lock"></i>
                        <input class="uk-form-width-large" type="password" placeholder="Introduzca la contraseña" id="password">
                        <a href="" class="uk-form-password-toggle" data-uk-form-password><i class='uk-icon-eye'></i></a>
                    </div>
                    <div class="errorPass">                    
                    </div>
                    <div class="uk-form-icon uk-form-password">
                        <i class="uk-icon-lock"></i>
                        <input class="uk-form-width-large" type="password" placeholder="Repita la contraseña" id="password2">
                        <a href="" class="uk-form-password-toggle" data-uk-form-password><i class='uk-icon-eye'></i></a>
                    </div>
                    <div class="errorPass2">                    
                    </div>

                </div>
                <div class="localidadReg">

                    <div class="uk-grid">
                        <div class="uk-width-1-1" style="padding-top:10px;">
                            <select id="isla" name="isla" style="width:500px" class="uk-form-medium uk-width-1-3">
                                <option value="" disabled selected>Isla</option>
                                <?php echo $islands_select; ?>
                            </select>
                        </div>
                        <div class="uk-width-1-1" style="padding-top:10px;">
                            <select id="comunidad" style="width:500px" name="comunidad" class="uk-form-medium uk-width-1-3" disabled>
                                <option value="" disabled selected>Comunidad</option>
                            </select>
                        </div>
                    </div>

                </div>
                <div class="infoReg">

                    <div style="padding-top:10px">
                        <input class="uk-form-width-large" type="text" placeholder="Introduzca el nombre" id="nombre">
                    </div>
                    <div style="padding-top:10px"> 
                        <input class="uk-form-width-large" type="text" placeholder="Introduzca el apellido" id="apellido">
                    </div>
                    <div class="uk-form-icon">
                        <i class="uk-icon-phone"></i>
                        <input class="uk-form-width-large" type="text" placeholder="Introduzca el móvil" id="telefono" >
                    </div>
                    <div class="errorTelefono">                    
                    </div>

                </div>

                <div class="btnRegistro" style="padding-top:10px">
                    <button class="uk-button-large uk-width-1-3" id="btnRegistro">Registrar</button>
                </div>
            </form>
        </div>
    </div>
</div>