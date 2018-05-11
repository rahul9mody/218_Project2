
<?php include ("view/header.php") ; ?>
  

  <body style="background-color: #c0deed;">
        <div class = "login-page">
            <div class="container">
                <div class = "form">
                    
                    <form class = "register-form" action = "form.php" method = "POST">
                        
                        <h1 id = "header">Create Account</h1>
                        
                        <div class = "col-lg-6 col-md-6">
                            <div class = "input-group input-group-lg">
                                <span class = "input-group-addon" id = "sizing-addon1"><i class = "glyphicon glyphicon-user"></i></span>
                                <input class = "form-control" type="text" name="fname" placeholder="Enter your First name" id="fname" required>
                            </div>
                            
                            <div class = "input-group input-group-lg">
                                <span class = "input-group-addon" id = "sizing-addon1"><i class = "glyphicon glyphicon-user"></i></span>
                                <input class = "form-control" type="text" name="lname" placeholder="Enter your Last name" id="lname" required>
                            </div>
                            
                            <div class = "input-group input-group-lg">
                                <span class = "input-group-addon" id = "sizing-addon1"><i class = "glyphicon glyphicon-envelope"></i></span>
                                <input class = "form-control" type="text" name="email" placeholder="Enter your E-mail" id="email" required>
                            </div>
                            
                            <div class = "input-group input-group-lg">
                                <span class = "input-group-addon" id = "sizing-addon1"><i class = "glyphicon glyphicon-phone-alt"></i></span>
                                <input class = "form-control" type="number" name="phone" placeholder="Enter your Phone no." id="phone" required>
                            </div>
                            
                            <div class = "input-group input-group-lg">
                                <span class = "input-group-addon" id = "sizing-addon1"><i class = "glyphicon glyphicon-calendar"></i></span>
                                <input class = "form-control" type="Date" name="birthday" placeholder="mm/dd/yyyy" id="birthday" pattern="mms/dd/yyyy" required>
                            </div>
                            
                            <select id = "select" name="gender" required>
                                <option value = "">Select gender</option>
                                <option value = "Male">Male</option>
                                <option value = "Female">Female</option>
                                <option value = "Other">Other</option>
                            </select>

                            <div class = "input-group input-group-lg">
                                <span class = "input-group-addon" id = "sizing-addon1"><i class = "glyphicon glyphicon-lock"></i></span>
                                <input class = "form-control" type="password" name="password" placeholder="Type a password" id="password" required>
                            </div>
                        </div>
                        
                        <button id = "btn" type = "submit" name = "signup" value="signup">Sign Up</button>
                    </form>

                    <h4>Have an account?</h4> 
                        <button id = "btn" type="submit" name="signin" value="signin"><a href="signin.php">Sign In</a></button>
                </div>



            </div>
        </div>

  <?php include ("view/footer.php"); ?>













































