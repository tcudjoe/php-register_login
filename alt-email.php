<?php
    $message = '<!doctype html>
    <html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <style>
            .introEmail h2 {
                font-size: 15px;
            }
            
            .emailBlock {
                background-color: rgb(48, 48, 48);
                border-style: solid;
                border-color: rgb(48, 48, 48);
                border-width: 10px;
                
            }
            
            .emailBlock p {
                color: white;
                text-align: center;
                font-size: 25px;
                padding-top: 15px;
            }
            
            .headerEmail {
                font-size: 25px;
                padding-left: 25px;
                margin-top: 20px;
            }
            
            .emailText {
                padding-left: 25px;
            }
            
            .emailBlock2{
                background-color: rgb(72, 72, 72);
                border-width: 1px;
                border-style: solid;
            }
        </style>
        <title>Hello, world!</title>
    </head>
    <body>
        <div class="emailBlock container">
          <p>CarArchive.com</p>
          </div>
          <div class="emailBlock2"></div>
        <div class="introEmail">                            
            <p class="headerEmail">Dear user,</p>
        </div>
          <div class="emailText">
            <p>You have recently registered on the website <strong>CarArchive.com</strong></p>
            <p>Here is the activation link</p>
            <p>click <a href="http://php-inlogregistratiesysteem.com/index.php?content=activate&id=' . $id . '&pwh=' . $array['password_hash'] . '">here</a> to activate your account.</p>
            <br>
            <p>If any question arises, dont hesitate to call or send us an email.</p>
            <p>Kind regards,</p>
            <br>
            <p>T.A.O. Cudjoe</p>
            <p>CEO of CarArchive.com</p>
          </div>
          <div>
            <div class="emailBlock2 fixed-bottom"></div>
            <div class="emailBlock fixed-bottom"></div>
          </div>
          
          <div>
              '. $array["date"] . '-' . $array["time"] .'
          </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
        -->
    </body>

    </html>'; ?>