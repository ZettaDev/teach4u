<div class="tm-fullscreen">
    <div class="tm-slideshow-fullscreen" data-uk-slideshow="{animation: 'scroll'}">
        <div class="uk-slidenav-position">
          <ul class="uk-slideshow uk-slideshow-fullscreen uk-overlay-active">
            <li style="min-height: 500px;" class="uk-active">
                <video width="" height="" autoplay loop muted controls>
                    <source src="//a0.muscache.com/airbnb/static/Seoul-P1-4.mp4" type='video/mp4'>
                    <source src="//a0.muscache.com/airbnb/static/Seoul-P1-4.webm" type='video/webm'>
                </video>
                    <div class="uk-overlay-panel uk-flex uk-flex-center uk-flex-middle">
                        <div>
                        <div class="uk-margin">
                            <div class="tm-cover-content uk-flex uk-flex-center uk-flex-middle">
                               <div class="uk-text-center">
                                 <h1>Experience the World</h1>
                                 <p>Your adventure guide and store</p>
                                     <button id="actividadesRecientes" class="uk-button-large" href="#" type="button">Acividades recientes</button>
                                     <button id="login" class="uk-button-large" data-uk-modal="{center:true,target:'#mlogin'}">Iniciar sesion</button>
                               </div>
                            </div>
                        </div>
                        </div>
                  </div>
                  <div class="uk-overlay-panel uk-overlay-background uk-flex uk-flex-center uk-overlay-bottom">
                        <div>
                        <div class="uk-margin">
                           <div class="buscador">
                                <?php
                                    $attributes = array('class' => 'uk-form','id' => 'seach_form');
                                    echo form_open("activities/search",$attributes);
                                ?>
                                <div class="uk-form-icon">
                                    <i class="uk-icon-search"></i>
                                    <input id="lugar" name="lugar" type="text" placeholder="¿Qué quieres buscar?" class="uk-form-large">
                                </div>
                                <select id="isla" name="isla" class="uk-form-large">
                                    <option value="" disabled selected>Isla</option>
                                    <?php echo $islands_select; ?>
                                </select>
                                <select id="comunidad" name="comunidad" class="uk-form-large" disabled>
                                    <option value="" disabled selected>Comunidad</option>
                                </select>
                                <select id="categoria" name="categoria" class="uk-form-large">
                                    <option value="" disabled selected>Categoría</option>
                                </select>
                                <a href="#"><button id="buscar" class="uk-button-large" type="submit"><i class="uk-icon-search"></i> Buscar</button></a>
                                <?php echo form_close(); ?>
                            </div>
                        </div>
                        </div>
                  </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="home-search" style="background-image: url(https://a0.muscache.com/airbnb/static/landing_pages/pretzel/slideshow/hero5-662b34b371029c13f549a2e554b8a046.jpg);">

    <div class="uk-container uk-container-center uk-flex uk-flex-center">

        
        <div class="uk-grid">

            <div class="uk-width-1-1">


                <div id="main-search-form" class="search-container">


                    <div class="uk-grid uk-grid-preserve">

                        <?php
                            $attributes = array('class' => 'uk-form','id' => 'seach_form');
                            echo form_open("activities/search",$attributes);
                        ?>
                        <div class="uk-width-1-1" class="lugar" style="padding:5px">

                            <div class="uk-form-icon" style="width:311px">
                                <i class="uk-icon-search"></i>
                                <input id="lugar" name="lugar" type="text" placeholder="¿Qué quieres buscar?" class="uk-form-large uk-width-1-1">
                            </div>
                        </div>
                        <div class="uk-width-1-1" class="isla"  style="padding:5px">
                            <select id="isla" name="isla" class="uk-form-large uk-width-1-1">
                                <option value="" disabled selected>Isla</option>
                                <?php echo $islands_select; ?>
                            </select>
                        </div>
                        <div class="uk-width-1-1" class="comunidad" style="padding:5px">
                            <select id="comunidad" name="comunidad" class="uk-form-large uk-width-1-1" disabled>
                                <option value="" disabled selected>Comunidad</option>
                            </select>
                        </div>
                        <div class="uk-width-1-1" class="categoria" style="padding:5px">
                            <select id="categoria" name="categoria" class="uk-form-large uk-width-1-1">
                                <option value="" disabled selected>Categoría</option>
                            </select>
                        </div>
                        <div class="uk-width-1-1" class="buscar" style="padding:5px">
                            <a href="#"><button id="buscar" class="uk-form-large uk-width-1-1" type="submit"><i class="uk-icon-search"></i> Buscar</button></a>
                        </div>
                        <?php echo form_close(); ?>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>




<div class="tm-section tm-section-color-white">
    <div class="uk-container uk-container-center uk-text-center">
        <h1 class="islas">Nuestras islas</h1>
        <div class="uk-container uk-container-center uk-text-center">
            <div class="uk-grid">
                <div id="islaActividad" class="uk-width-medium-1-3">
                    <div class="uk-panel">
                        <figure class="uk-overlay uk-overlay-hover">
                            <img src="<?php echo $resources; ?>img/228.jpg" width="" height="" alt="">
                            <figcaption class="uk-overlay-panel uk-overlay-fade uk-overlay-background uk-flex uk-flex-center uk-flex-middle uk-text-center uk-ignore">
                                <div>
                                    <h2>Tenerife</h2>
                                </div>
                            </figcaption>
                            <a class="uk-position-cover" href="#"></a>
                        </figure>
                    </div>
                </div>
                <div id="islaActividad" class="uk-width-medium-1-3">
                    <div class="uk-panel">
                        <figure class="uk-overlay uk-overlay-hover">
                            <img src="<?php echo $resources; ?>img/396.jpg" width="" height="" alt="">
                            <figcaption class="uk-overlay-panel uk-overlay-fade uk-overlay-background uk-flex uk-flex-center uk-flex-middle uk-text-center uk-ignore">
                                <div>
                                    <h2>La Palma</h2>
                                </div>
                            </figcaption>
                            <a class="uk-position-cover" href="#"></a>
                        </figure>
                    </div>
                </div>
                <div id="islaActividad" class="uk-width-medium-1-3">
                    <div class="uk-panel">
                        <figure class="uk-overlay uk-overlay-hover">
                            <img src="<?php echo $resources; ?>img/41.jpg" width="" height="" alt="">
                            <figcaption class="uk-overlay-panel uk-overlay-fade uk-overlay-background uk-flex uk-flex-center uk-flex-middle uk-text-center uk-ignore">
                                <div>
                                    <h2>El Hierro</h2>
                                </div>
                            </figcaption>
                            <a class="uk-position-cover" href="#"></a>
                        </figure>
                    </div>
                </div>
            </div>

            <div class="uk-grid">
                <div id="islaActividad" class="uk-width-medium-1-3">
                    <div class="uk-panel">
                        <figure class="uk-overlay uk-overlay-hover">
                            <img src="<?php echo $resources; ?>img/228.jpg" width="" height="" alt="">
                            <figcaption class="uk-overlay-panel uk-overlay-fade uk-overlay-background uk-flex uk-flex-center uk-flex-middle uk-text-center uk-ignore">
                                <div>
                                    <h2>La Gomera</h2>
                                </div>
                            </figcaption>
                            <a class="uk-position-cover" href="#"></a>
                        </figure>
                    </div>
                </div>
                <div id="islaActividad" class="uk-width-medium-1-3">
                    <div class="uk-panel">
                        <figure class="uk-overlay uk-overlay-hover">
                            <img src="<?php echo $resources; ?>img/396.jpg" width="" height="" alt="">
                            <figcaption class="uk-overlay-panel uk-overlay-fade uk-overlay-background uk-flex uk-flex-center uk-flex-middle uk-text-center uk-ignore">
                                <div>
                                    <h2>Gran Canarias</h2>
                                </div>
                            </figcaption>
                            <a class="uk-position-cover" href="#"></a>
                        </figure>
                    </div>
                </div>
                <div id="islaActividad" class="uk-width-medium-1-3">
                    <div class="uk-panel">
                        <figure class="uk-overlay uk-overlay-hover">
                            <img src="<?php echo $resources; ?>img/41.jpg" width="" height="" alt="">
                            <figcaption class="uk-overlay-panel uk-overlay-fade uk-overlay-background uk-flex uk-flex-center uk-flex-middle uk-text-center uk-ignore">
                                <div>
                                    <h2>Lanzarote</h2>
                                </div>
                            </figcaption>
                            <a class="uk-position-cover" href="#"></a>
                        </figure>
                    </div>
                </div>
            </div>
            <div class="uk-grid">
                <div id="islaActividad" class="uk-width-medium-1-3  uk-container-center">
                    <div class="uk-panel">
                        <figure class="uk-overlay uk-overlay-hover">
                            <img src="<?php echo $resources; ?>img/396.jpg" width="" height="" alt="">
                            <figcaption class="uk-overlay-panel uk-overlay-fade uk-overlay-background uk-flex uk-flex-center uk-flex-middle uk-text-center uk-ignore">
                                <div>
                                    <h2>Fuerteventura</h2>
                                </div>
                            </figcaption>
                            <a class="uk-position-cover" href="#"></a>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="tm-section tm-section-color-grey">
    <div class="uk-container uk-container-center uk-text-center">
        <div class="uk-panel">
            <h1>Actividades más populares</h1>
            <div id="owl-populares" class="owl-carousel owl-theme">
                  <div class="item" ><h1>1</h1></div>
                  <div class="item" ><h1>2</h1></div>
                  <div class="item" ><h1>3</h1></div>
                  <div class="item" ><h1>4</h1></div>
                  <div class="item" ><h1>5</h1></div>
                  <div class="item" ><h1>6</h1></div>
                  <div class="item" ><h1>7</h1></div>
                  <div class="item" ><h1>8</h1></div>
                  <div class="item" ><h1>9</h1></div>
                  <div class="item" ><h1>10</h1></div>
                </div>
            </div>
    </div>
</div>

<div class="tm-section tm-section-color-grey">
    <div class="uk-container uk-container-center uk-text-center">
        <div class="uk-panel">
            <h1>Actividades más recientes</h1>
            <div id="owl-recientes" class="owl-carousel owl-theme">
                  <div class="item" ><h1>1</h1></div>
                  <div class="item" ><h1>2</h1></div>
                  <div class="item" ><h1>3</h1></div>
                  <div class="item" ><h1>4</h1></div>
                  <div class="item" ><h1>5</h1></div>
                  <div class="item" ><h1>6</h1></div>
                  <div class="item" ><h1>7</h1></div>
                  <div class="item" ><h1>8</h1></div>
                  <div class="item" ><h1>9</h1></div>
                  <div class="item" ><h1>10</h1></div>
                </div>
            </div>
    </div>
</div>
