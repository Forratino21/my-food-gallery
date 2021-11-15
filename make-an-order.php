<?php include "includes/header.php"?>
<?php include "includes/nav.php"?>
    <div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll" data-image-src="img/fish-and-chips.jpg"></div>

    <div class="container-fluid tm-mt-60">
        <div class="row tm-mb-50">
            <div class="col-lg-4 col-4 mb-4">
                <h2 class="tm-text-primary mb-5">Contact Page</h2>
                <form id="contact-form" action="" method="POST" class="tm-contact-form mx-auto">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control rounded-0" placeholder="Name" required />
                    </div>
                    <div class="form-group">
                        <input type="text" name="name" class="form-control rounded-0" placeholder="Contact" required />
                    </div>
                    <div class="form-group">
                        <input type="text" name="name" class="form-control rounded-0" placeholder="Address" required />
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control rounded-0" placeholder="Email" required />
                    </div>
                    <div class="form-group">
                        <select class="form-control" id="contact-select" name="inquiry">
                            <option value="-">Select a Dish</option>
                            <option value="sales">Sales &amp; Marketing</option>
                            <option value="creative">Creative Design</option>
                            <option value="uiux">UI / UX</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <textarea rows="8" name="message" class="form-control rounded-0" placeholder="Enter any other addtional information " required=></textarea>
                    </div>

                    <div class="form-group tm-text-right">
                        <button type="submit" class="btn btn-primary">Send</button>
                    </div>
                </form>                
            </div>
            <div class="col-lg-4 col-4 mb-4">
                <div class="tm-address-col">
                    <h2 class="tm-text-primary mb-5">Our Address</h2>
                    <p class="tm-mb-50"> <b>New Campus:</b> Opposite CDC Headquater, <br>Congo Town, <br>Monrovia, Liberia </p>
                    <p class="tm-mb-50"><b> Old Campus: </b> Tubman Blvd,<br>Sinkor Road,<br>post Box 1881,<br>
                    Monrovia Liberia</p>
                   
                    <address class="tm-text-gray tm-mb-50">
                    
                    </address>
                    <ul class="tm-contacts">
                        <li>
                            <a href="#" class="tm-text-gray">
                                <i class="fas fa-envelope"></i>
                                Email: info@foodgallery.com
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tm-text-gray">
                                <i class="fas fa-phone"></i>
                                Orange: +231 770717212
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tm-text-gray">
                                <i class="fas fa-phone"></i>
                                Lonestar: +231 880717212
                            </a>
                        </li>
                    </ul>
                </div>                
            </div>
            <div class="col-lg-4 col-4 mb-4">
                <div class="tm-address-col">
                    <h2 class="tm-text-primary mb-5">Our Location</h2>
                   
                    <address class="tm-text-gray tm-mb-50">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.9617931479142!2d-10.734345585703693!3d6.268755327812598!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xf0a03848f44a4eb%3A0x87e24a893fb4393!2sBlueCrest%20university!5e0!3m2!1sen!2s!4v1636992177632!5m2!1sen!2s" 
                        width="350" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </address>
                    
                </div>                
            </div>
          
    </div> <!-- container-fluid, tm-container-content -->

    <?php include "includes/footer.php"?>