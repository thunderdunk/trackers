<?php
include_once('Akismet.class.php');

$name		= '';
$email		= $_REQUEST['email'] ;
$subject	= $_REQUEST['subject'] ;
$phone		= $_REQUEST['phone'] ;
$information= $_REQUEST['information'] ;
$youth = $_POST["youth"];
							if ($youth != 'yes-updates') {
								$youth = 'no-updates'; }
$adult = $_POST["adult"];
							if ($adult != 'yes-updates') {
								$adult = 'no-updates'; }

$message .= "Email: $email\n\n";
$message .= "Subject: $subject\n\n";
$message .= "Phone: $phone\n\n";
$message .= "Query: $information\n\n";
$message .= "Youth Newsletter: $youth\n";
$message .= "Adult Newsletter: $adult\n\n";

$akismet = new Akismet('http://www.trackerspdx.com/', 'f4bd9729ad61');
$akismet->setCommentAuthor($name);
$akismet->setCommentAuthorEmail($email);
$akismet->setCommentAuthorURL($phone);
$akismet->setCommentContent($information);

if ($akismet->isCommentSpam())
{
    echo "We think you are trying to spam us. If this is an error please call us at 503-559-2825";
}
else
{
 	mail("libby@trackersearth.com, chris@trackersearth.com", "Trackers Portland inquiry...", $message, "From: ".$email);
	header( "Location: http://trackerspdx.com/forms/contact-followup.php" );
}
?>