<?php

$title = 'Home';
$mailto = get_settings('contact_mail');

//contact form - sent email
if (isset($_REQUEST['submitted'])&& $_REQUEST['submitted']=='submit'){
    $subject = $_REQUEST['name'];
    $from = $_REQUEST['email'];
    $message = $_REQUEST['message'];

    mail($to,$subject,$message,$from);
}

$slider = get_slider();

$programs='
<div class="col-md-4 programs-card">
    <div class="card">
        <img class="card-img-top" src="images/yoga1.jpg" alt="Card image">
        <div class="card-body">
            <h4 class="card-title">Program 1</h4>
            <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
            <a href="program.php" class="btn btn-primary my-main-button">See Program</a>
        </div>
    </div>
    </div>
    <div class="col-md-4 programs-card">
    <div class="card">
        <img class="card-img-top" src="images/yoga2.jpg" alt="Card image">
        <div class="card-body">
            <h4 class="card-title">Program 2</h4>
            <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
            <a href="program.php" class="btn btn-primary  my-main-button">See Program</a>
        </div>
    </div>
    </div>
    <div class="col-md-4 programs-card">
    <div class="card">
        <img class="card-img-top" src="images/yoga3.jpg" alt="Card image">
        <div class="card-body">
            <h4 class="card-title">Program 3</h4>
            <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
            <a href="program.php" class="btn btn-primary  my-main-button">See program</a>
        </div>
    </div>
</div>';



$content = '
    <div class="container">

    '.$slider.'
        
    </div>
    <div class="programs" id="programs">
        <h2 class="programs-title">Programs</h2>
        <div class="container">
            <div class="row">
                '.$programs.'
            </div>
        </div>
    </div>
    <div class="aboutus">
        <div class="container">
            <h2 class="aboutus-title">About us</h2>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <p>
                        Morbi eu nibh efficitur, hendrerit nisl id, convallis diam. In quis auctor nunc. Morbi nec semper ex, eget aliquam nibh. 
                        Curabitur urna ante, laoreet ut imperdiet et, viverra eget augue.
                        Nullam erat dolor, volutpat non pellentesque vitae, ultrices vitae urna. 
                        <br>
                        <br>
                        Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. 
                        Sed non posuere lectus. Sed sed venenatis augue, et imperdiet diam. Quisque vel luctus ante. 
                        Nunc consectetur lorem non sem malesuada, quis efficitur orci varius. Sed a dictum turpis. 
                        Fusce eu ornare est. Integer rutrum pellentesque sapien nec euismod. Donec id consectetur ipsum, convallis maximus augue.
                    </p>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </div>
    <div class="contactus">
        <div class="container">
            <h2 class="contactus-title">Contact us</h2>
            <iframe class="contactus-map embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d752.4684026154096!2d21.337868829228988!3d41.028021010420446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDHCsDAxJzQwLjkiTiAyMcKwMjAnMTguMyJF!5e0!3m2!1sen!2smk!4v1537353641546"></iframe>
            <div class="d-flex justify-content-center"> 
                <div class="contactus-info">
                    <span class="contactus-info-icon contactus-info-icon-address  align-middle" title="Address icon" aria-hidden="true"></span>
                    <span class="contactus-info-icon-description align-middle" aria-hidden="true">'.get_settings('address').'</span> 
                </div>
                <div class="contactus-info">
                    <span class="contactus-info-icon contactus-info-icon-phone align-middle" title="Phone icon" aria-hidden="true"></span>
                    <span class="contactus-info-icon-description align-middle" aria-hidden="true">'.get_settings('phone_number').'</span>
                </div>
            </div>
            <div class="row contactus-form">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <form action="'.url('home.php').'" method="post">
                        <div class="form-group">
                            <label for="name" class="hiden-label">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="First and last name">
                        </div>
                        <div class="form-group">
                            <label for="email" class="hiden-label">Email:</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email address">
                        </div>
                        <div class="form-group">
                            <label for="message" class="hiden-label">Message</label>
                            <textarea class="form-control" id="message" rows="3" name="message" placeholder="Message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary my-main-button contactus-button">Send message</button>
                        <input type="hidden" name="submitted" value="submit" />
                    </form>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>
';
