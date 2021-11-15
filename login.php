<?php include "includes/header.php"?>
<?php include "includes/nav.php"?>
<div class="tm-hero d-flex justify-content-center align-items-center" 
    data-parallax="scroll" data-image-src="img/fish-and-chips.jpg"></div>
<div class=""><br></Br><br>
                <h2 style="text-align: center;" class="tm-text-primary ">Contact Page</h2>
                <form id="contact-form" action="" method="POST" class="tm-contact-form mx-auto">
                    <div class="form-group">
                        <input type="text" name="username" class="form-control rounded-0" placeholder="Username" required />
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control rounded-0" placeholder="Password" required />
                    </div>
                    <div class="form-group tm-text-right">
                        <button type="submit" class="btn btn-primary">Login</button>
                        <a href="#">no account? Register here</a>
                    </div>
                </form>                
            </div>
<?php include "includes/footer.php"?>