<?php
include_once "functions/functions.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $firstName = $_POST['first-name'] ?? '';
    $lastName = $_POST['last-name'] ?? '';
    $fullName = trim("$firstName $lastName") ?: 'Guest';
    
    $email = $_POST['email'] ?? 'No email';
    $subject = $_POST['subject'] ?? 'No subject';
    $message = $_POST['message'] ?? 'No message';
    $date = date('Y-m-d H:i:s');

    $entry = "[$date] Name: $fullName | Email: $email | Subject: $subject | Message: $message" . PHP_EOL;

    file_put_contents("data/messages.txt", $entry, FILE_APPEND);

    redirect("index.php");
}

$page_title = "Contact Us"; 
include_once "parts/header.php"; 
?>

    <div class="page-banner change-name">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="header-text">
                        <h2><em>Contact</em> Us</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod keoi tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="contact-page-map">
        <div class="container expanded">
            <div class="row">
                <div class="col-lg-12">
                    <div id="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12469.776493332698!2d-80.14036379941481!3d25.907788681148624!2m3!1f357.26927939317244!2f20.870722720054623!3f0!3m2!1i1024!2i768!4f35!3m3!1m2!1s0x88d9add4b4ac788f%3A0xe77469d09480fcdb!2sSunny%20Isles%20Beach!5e1!3m2!1sen!2sth!4v1642869952544!5m2!1sen!2sth" width="100%" height="550px" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-us-page">
        <div class="container">
            <div class="col-lg-12">
                <div class="contact-page-form">
                    <div class="row">
                        <div class="col-lg-6 align-self-center">
                            <form id="contact" action="contact.php" method="POST">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="section-heading">
                                            <h2>Don't be Hesitated<br><em>Send a message now</em>!</h2>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">                 
                                        <input name="first-name" type="text" id="first-name" placeholder="First Name*" required="">               
                                    </div>
                                    <div class="col-lg-6">                
                                        <input name="last-name" type="text" id="last-name" placeholder="Last Name*" required="">                           
                                    </div>
                                    <div class="col-lg-6">                       
                                        <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">                        
                                    </div>
                                    <div class="col-lg-6">                         
                                        <input name="subject" type="text" id="subject" placeholder="Subject*" required="">                        
                                    </div>
                                    <div class="col-lg-12">                           
                                        <textarea name="message" class="form-control" id="message" placeholder="Message" required=""></textarea>                          
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit" id="form-submit" class="main-button ">Send Message</button>                            
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-info">
                                <ul>
                                    <li>
                                        <h6>Mailing Address</h6>
                                        <span>Sunny Isles Beach, Florida 33160, USA</span>
                                    </li>
                                    <li>
                                        <h6>Email Address</h6>
                                        <span>contact@company.com</span>
                                    </li>
                                    <li>
                                        <h6>Chat With Us</h6>
                                        <span>chat@company.com</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h2>Hire us to Work on a Project?</h2>
                </div>
                <div class="col-lg-4">
                    <div class="white-button">
                        <a href="contact.php">Contact Us Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include_once "parts/footer.php"; ?>