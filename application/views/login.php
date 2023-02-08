<html lang="en">
    <head>

        <meta charset="UTF-8">
        <link rel="mask-icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111"> -->
        <title>Login | Signup</title>
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/index.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/google.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
        <!-- <link href="assets/css/bootstrap.min.css" rel="stylesheet"> -->
        <link rel="shortcut icon" type="image/jpg" href="<?php echo base_url();?>assets/img/icone.png">
        <!-- <link href="assets/css/unicons.css" rel="stylesheet"> -->


        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css"> -->
        <!-- <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css"> -->
        <link href="assets/css/index.css" rel="stylesheet">
        <!-- 
        <script>
        window.console = window.console || function(t) {};
        </script>



        <script>
        if (document.location.search.match(/type=embed/gi)) {
        window.parent.postMessage("resize", "*");
        }
        </script> -->


    </head>

    <body translate="no">
  <!-- <a href="https://front.codes/" class="logo" target="_blank">
		<img src="https://assets.codepen.io/1462889/fcy.png" alt="">
	</a> -->

        <div class="section">
            <div class="container">
                <div class="row full-height justify-content-center">
                    <div class="col-12 text-center align-self-center py-5">
                        <div class="section pb-5 pt-5 pt-sm-2 text-center">
                            <h6 class="mb-0 pb-3"><span>Se connecter </span><span>S' inscrire</span></h6>
                            <input class="checkbox" type="checkbox" id="reg-log" name="reg-log">
                            <label for="reg-log"></label>
                            <div class="card-3d-wrap mx-auto">
                                <div class="card-3d-wrapper">
                                    <div class="card-front">
                                        <div class="center-wrap">
                                            <div class="section text-center">
                                                <h4 class="mb-4 pb-3">Se connecter</h4>
                                                <form method="POST" action="<?php echo site_url('Login/get_info');  ?>">
                                                    <div class="form-group">
                                                        <input type="email" name="email" class="form-style" placeholder="Votre Email" id="logemail" autocomplete="off" style="border:none;" value="">
                                                        <!-- <i class="input-icon uil uil-at"></i> -->
                                                        <img src="<?php echo base_url();?>assets/img/at.svg">
                                                    </div>	
                                                    <div class="form-group mt-2">
                                                        <input type="password" name="mdp" class="form-style" placeholder="Votre mot de passe" autocomplete="off" style="">
                                                        <!-- <i class="input-icon uil uil-lock-alt"></i> -->
                                                        <img src="<?php echo base_url();?>assets/img/padlock.svg">
                                                    </div>
                                                    <button class="btn mt-4">Se connecter</button>
                                                </form>
                                                <p class="mb-0 mt-4 text-center"><a href="#0" class="link">Mot de passe oublié?</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-back">
                                        <div class="center-wrap">
                                            <div class="section text-center">
                                                <h4 class="mb-4 pb-3">S' inscrire</h4>
                                                <form method="POST" action="<?php echo site_url(); ?>Inscription/inscrire">
                                                    <div class="form-group">
                                                        <input type="text" name="newname" class="form-style" placeholder="Votre nom complet" id="logname" autocomplete="off" style="border:none;" value="">
                                                        <!-- <i class="input-icon uil uil-user"></i> -->
                                                        <img src="<?php echo base_url();?>assets/img/user.svg">
                                                    </div>	
                                                    <div class="form-group mt-2">
                                                        <input type="date" name="dtn" class="form-style" placeholder="Votre date de naissance" id="logpass" autocomplete="off" style="border:none;">
                                                        <!-- <i class="input-icon uil uil-lock-alt"></i> -->
                                                        <img src="<?php echo base_url();?>assets/img/padlock.svg">
                                                    </div>
                                                    <div class="form-group mt-2">
                                                        <input type="email" name="newemail" class="form-style" placeholder="Votre email" autocomplete="off" style="">
                                                        <!-- <i class="input-icon uil uil-at"></i> -->
                                                        <img src="<?php echo base_url();?>assets/img/at.svg">
                                                    </div>	
                                                    <div class="form-group mt-2">
                                                        <input type="password" name="newpass" class="form-style" placeholder="Votre mot de passe" id="logpass" autocomplete="off" style="border:none;">
                                                        <!-- <i class="input-icon uil uil-lock-alt"></i> -->
                                                        <img src="<?php echo base_url();?>assets/img/padlock.svg">
                                                    </div>
                                                    <button class="btn mt-4">S' inscrire</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-2c7831bb44f98c1391d6a4ffda0e1fd302503391ca806e7fcc7b9b87197aec26.js"></script>

    
        <script id="rendered-js">
            /* ========================================= * 
                            BEST VIEWED FULLSCREEN
            https://codepen.io/ig_design/full/KKVQpVP
            * ========================================= */
            //# sourceURL=pen.js
        </script>
    </body>
</html>