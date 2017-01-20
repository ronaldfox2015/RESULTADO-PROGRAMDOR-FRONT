<?php session_start(); ?>
<?php include dirname(__FILE__) . '/../lib/Respuesta.php'; ?>
<?php $lib = new Respuesta(); ?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="lang" content="es">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>
        <!-- Latest compiled and minified JavaScript -->
        <meta name="title" content="Prueba de entrada">
        <style>

            button {
                border: none;
                background: #3a7999;
                color: #f2f2f2;
                padding: 10px;
                font-size: 18px;
                border-radius: 5px;
                position: relative;
                box-sizing: border-box;
                transition: all 500ms ease;
            }
            button:before {
                content:'';
                position: absolute;
                top: 0px;
                left: 0px;
                width: 0px;
                height: 42px;
                background: rgba(255,255,255,0.3);
                border-radius: 5px;
                transition: all 2s ease;
            }
            button:hover:before {
                width: 100%;
            }
            .btn-espacio{
                margin-top: 17px;
            }
            #div
            {
                font: bold 250% monospace;
                text-align: -webkit-center;
                align-content: center;
                padding-top: 138px;
                width:483px;
                height:298px;
                background:#3072ac;
                transition:all 0.3s ease;
            }
            #div.shrink:hover
            {
                -webkit-transform: scale(0.8);
                -ms-transform: scale(0.8);
                transform: scale(0.8);
            }
        </style>
        <title>Prueba de entraday</title>
    </head>
    <body>

        <header>

        </header>
        <section>

            <div class="container">

                <form method="POST" id="form">

                    <?php for ($index = 0; $index < 10; $index++) { ?>
                        <button name="name[]" value="<?php echo $index ?>" type="submit" ><?php echo $index ?></button>
                    <?php } ?>
                    <div></div>
                    <div></div>
                    <div class="btn-espacio" >
                        <input name="<?php echo (isset($_POST['ASC'])) ? 'DESC' : 'ASC' ?>" class="btn btn-primary"  type="submit" value="<?php echo (isset($_POST['ASC'])) ? 'DESENDENTE' : 'ASENDENTE' ?>" />
                        <input id="limpiar" name="limpiar" class="btn btn-primary" type="submit" value="LIMPIAR" />
                    </div>
                </form>   
                <div id="div" class="shrink">
                    <?php
                    echo $lib->imprime($_POST)
                    ?>
                </div>  
            </div>

        </section>
        <footer>

        </footer>
        <div id="animacion" class="hide">
            <div id="loader">
                <div class="layers"><span>one</span></div>
                <div class="layers"><span>two</span></div>
                <div class="layers"><span>three</span></div>
            </div>

            <!-- delete below -->
            <!--            <div class="loaded">
                            <span>Loaded</span>
                        </div>-->

        </div>

    </body>

</html>
