
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
                <div class="form" >
                    <h1 class="login">Register</h1>
                    <form action="registerprocess.php" onsubmit="validate()" method="POST">

                        <div class="formgroup">
                            <label for="fullname">Fullname</label>
                            <input type="text" placeholder="Bright Augustt" id="cname" name="cname" required>
                        </div>
                        <div class="formgroup">
                            <label for="email">Email</label>
                            <input type="email" placeholder="john@example.com" id="cemail" name="cemail" required>
                        </div>
                        <div class="formgroup">
                            <label for="password">Password</label>
                            <input type="password" placeholder="At least 8 characters" id="cpass" name="cpass" required>
                        </div>
                        <div class="formgroup">
                            <label for="country">Country</label>
                            <input type="text" placeholder="country" id="ccountry" name="ccountry" required>
                        </div>
                        <div class="formgroup">
                            <label for="city">City</label>
                            <input type="text" placeholder="city" id="ccity" name="ccity" required>
                        </div>
                        <div class="formgroup">
                            <label for="telephone">Contact </label>
                            <input type="tel" placeholder="Contact" id="ccontact" name="ccontact" required>
                        </div>
                        <button id="button" value="register" name="register">Register</button>
                    </form>
                </div>
            </div>
        </div>
        <script defer src="./register.js"></script>

    </body>
    
    </html>
        