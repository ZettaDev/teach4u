    <body class="tm-background">
        <nav class="tm-navbar uk-navbar uk-navbar-attached">
            <div class="uk-container uk-container-center">
                <a class="uk-navbar-brand uk-hidden-small" href="<?php echo $base_url; ?>"><img class="uk-margin uk-margin-remove" src="<?php echo $resources; ?>img/logo_uikit.svg" width="90" height="30" title="UIkit" alt="UIkit"></a>
                 <div class="uk-navbar-flip">
                    <ul class="uk-navbar-nav uk-hidden-small">
                        <li><a href="<?php echo $base_url; ?>register">Registrarse</a></li>
                        <!-- This is the container enabling the JavaScript -->
                        <li class="uk-parent" data-uk-dropdown >
                            <!-- This is the menu item toggling the dropdown -->
                            <a href="#"><img src="<?php echo $resources; ?>img/male_user_icon.png" alt="" class="img-circle">  <span class="uk-icon-caret-down"></span></a>
                            <!-- This is the dropdown -->
                            <div class="uk-dropdown uk-dropdown-center">
                                <ul class="uk-nav uk-nav-navbar">
                                    <li><a href="#">Perfil</a></li>
                                    <li><a href="#"></a></li>
                                    <li><a href="#"></a></li>
                                    <li><a href="#"></a></li>
                                    <li class="uk-nav-divider"></li>
                                    <li><a href="#">Cerrar sesión</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="uk-parent" data-uk-dropdown="{}" aria-haspopup="true" aria-expanded="false"><a href="#">Islas <span class="uk-icon-caret-down"></span></a>
                            <div class="uk-dropdown uk-dropdown-navbar uk-dropdown-center">
                                    <ul class="uk-nav uk-nav-navbar">
                                        <?php echo $islands_menu; ?>
                                    </ul>
                                </div>
                        </li>
                        <li><a href="<?php echo $base_url; ?>home/help">Ayuda</a></li>
                        <li><a href="<?php echo $base_url; ?>home/contact">Contacto</a></li>
                    </ul>
                 </div>
                 <a href="#tm-offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a>
                 <div class="uk-navbar-brand uk-navbar-center uk-visible-small"><img src="<?php echo $resources; ?>img/logo_uikit.svg" width="90" height="30" title="UIkit" alt="UIkit"></div>

            </div>
        </nav>
