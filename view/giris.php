<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>İl Sağlık Müdürlüğü</title>

        <!-- Font Icon -->
        <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

        <!-- Main css -->
        <link rel="stylesheet" href="css/style.css">
        <script src="delete.js"></script>
    </head>
    <body><!-- Sing in  Form -->
    <section class="sign-in">
        <div class="container">
            <div class="signin-content">
                <!-- <form action="/controller/giris.php" method="POST"></form> -->
                <div class="signin-image">
                    <figure><img src="image/saglık.jpg" alt="sing up image"></figure>

                </div>

                <div class="signin-form">
                    <h2 class="form-title">Giris Yap</h2>
                    <form method="POST" class="register-form" id="login-form" action="../controller/login.php">
                        <div class="form-group">
                            <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="your_name" id="your_name" placeholder="Adınız"/>
                        </div>
                        <div class="form-group">
                            <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="your_pass" id="your_pass" placeholder="Şifreniz"/>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                        </div>
                        <?php if (isset($error_message)) { ?>
                    <p style="color: red;"><?php echo $error_message; ?></p>
                    <?php } ?>
                          <div class=".form-submit">
                            <input type="submit" id="signin" class="form-submit"/>
                        </div>
                    </form>
                    <div class="social-login">
                        <span class="social-label"></span>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    </div>
    </form>
        <!-- JS -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="js/main.js"></script>
        
    </body><!-- This templates was made by Colorlib (https://colorlib.com) -->
    </html>
