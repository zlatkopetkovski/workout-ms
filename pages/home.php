<?php

$title = 'Home';

$notices = array();
$noticesOutput = "";
$mailto = get_settings('contact_mail');

$subject = '';
$mailfrom = '';
$message = '';
//contact form - sent email
if (isset($_REQUEST['submitted'])&& $_REQUEST['submitted']=='submit'){
    $noticesOutput = "";
    $subject = mysqli_real_escape_string(get_connection(), trim($_REQUEST['name']));
    $mailfrom = mysqli_real_escape_string(get_connection(), trim($_REQUEST['email']));
    $message = mysqli_real_escape_string(get_connection(), $_REQUEST['message']);

    if ($subject==''){
        $notices[] = 'Subject is required!';
    }
    if (strlen($subject)>50){
        $notices[] = 'Your subject is too long. Please enter some shorter subject!';
    }
    if ($mailfrom==''){
        $notices[] = 'Enter your valid email address!';
    }
    if ($message==''){
        $notices[] = 'Enter your message!';
    }
    if (count($notices)>0)
    {
        $noticesOutput = '<span>*'.implode('</span></br><span>*', $notices).'</span>';
    }else{
        //mail($mailto,$subject,$message,$mailfrom);
        $subject = '';
        $mailfrom = '';
        $message = '';
    }
}

$slider = get_slider();

$program = '';
$program_num = 0;
$program_rows = mysqli_query(get_connection(), "SELECT * FROM programs");
while ($program_row = mysqli_fetch_array($program_rows)){
    $program.='
    <div class="col-md-4 programs-card">
    <div class="card">
    <img class="card-img-top" src="images/'.$program_row['image'].'" alt="Card image">
    <div class="card-body">
        <h4 class="card-title">'.$program_row['title'].'</h4>
        <p class="card-text">'.substr($program_row['details'],0, 80).'</p>
        <a href="'.url('program.php').'?id='.$program_row['id'].'" class="btn btn-primary my-main-button">See Program</a>
        </div>
    </div>
</div>';
}


$content = '
    <div class="container">

    '.$slider.'
        
    </div>
    <div class="programs" id="programs">
        <h2 class="programs-title">Programs</h2>
        <div class="container">
            <div class="row">
                '.$program.'
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
                '.$noticesOutput.'
                    <form action="'.url('home.php').'" method="post">
                        <div class="form-group">
                            <label for="name" class="hiden-label">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="First and last name" value="'.($subject!=''?$subject:'').'">
                        </div>
                        <div class="form-group">
                            <label for="email" class="hiden-label">Email:</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email address" value="'.($mailfrom!=''?$mailfrom:'').'">
                        </div>
                        <div class="form-group">
                            <label for="message" class="hiden-label">Message</label>
                            <textarea class="form-control" id="message" rows="3" name="message" placeholder="Message">'.($message!=''?$message:'').'</textarea>
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
