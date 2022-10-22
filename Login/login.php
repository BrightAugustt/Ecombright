
    <!--  -->
    <!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Trial</title>
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="mediaQueries.css">
    </head>
 
    <body>
        <div class="container">
            <div class="content">
                <div class="info">
                    <h1 class="name">Gradie</h1>
                    <p class="grade">Beautiful gradients in seconds.</p>
                    <img src="iPhone Mockup.png" alt="img">
                </div>
                <div class="form">
                    <h1 class="login">Login</h1>
                    <form action="loginprocess.php" onsubmit="validate()" method="POST">
                        <div class="formgroup">
                            <label for="email">Email</label>
                            <input type="email" placeholder="john@example.com" id="cemail" name="cemail" required>
                        </div>
                        <div class="formgroup">
                            <label for="password">Password</label>
                            <input type="password" placeholder="At least 8 characters" id="pass" name="cpass"required>
                        </div>
                       
                        <button id="button" value="login" name="login">Login</button>
                    </form>
                    <?php
                    if(!empty($_SESSION['error'])){
                    ?>
                    <div style = "color : red; font-weight:600;">
                    <?php
                        echo $_SESSION['error'];
                        
                        unset($_SESSION['error']); 
                    } 
                    ?>
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </body>
    
    </html>
        