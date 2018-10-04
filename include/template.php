<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title><?php print $title ;?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Webpage for workout"/>
    

    <!-- after injector edit path -- <?php print url('css/styles.css'); ?> -->
    <!-- injector:css -->
    <link rel="stylesheet" href="<?php print url('bower_components/bootstrap/dist/css/bootstrap.css'); ?>">
    <link rel="stylesheet" href="<?php print url('css/styles.css'); ?>">
    <!-- endinjector -->
</head>
<body>

    <header>
      <nav class="navbar navbar-expand-sm my-nav">
        <div class="container">
            <div class="d-flex justify-content-start">
                <a class="navbar-brand navbar-textual" href="<?php print url('index.php');?>">
                    <h1><?php print $company_name;?></h1>
                </a>
            </div>
            <!--login -or logout link -->
            <?php print $login_logout;?> 
        </div>
      </nav>
    </header>

    <main>
        <!--page content -->
        <?php print $content;?>
    </main>

    <footer>
        <div class="my-footer">
            <div class="container">
                <div class="d-flex justify-content-between"> 
                    <div>
                        <h3><?php print $company_name;?></h3>
                        <p>&copy; <?php print $year;?></p>
                    </div>
                    <div class="my-footer-social"> 
                        <div class="my-footer-social-icon-box">
                            <a href="https://facebook.com" target="_blank"><span class="my-footer-social-facebook"></span></a>
                        </div>
                        <div class="my-footer-social-icon-box">
                            <a href="https://twitter.com" target="_blank"><span class="my-footer-social-twitter"></span></a>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </footer>

    <!-- after injector edit path -- <?php print url('css/styles.css'); ?> -->
    <!-- injector:js -->
    <script src="<?php print url('bower_components/jquery/dist/jquery.js'); ?>"></script>
    <script src="<?php print url('bower_components/bootstrap/dist/js/bootstrap.js'); ?>"></script>
    <script src="<?php print url('js/script.js'); ?>"></script>
    <!-- endinjector -->
</body>
</html>