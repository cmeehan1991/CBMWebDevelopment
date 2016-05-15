<?php
$name = filter_input(INPUT_POST, "name");
$email = filter_input(INPUT_POST, "email");
$phone = filter_input(INPUT_POST, "phone");
$contactSubject = filter_input(INPUT_POST, "subject");
$message_text = filter_input(INPUT_POST, "message");


$to = "Connor.Meehan@cbmwebdevelopment.com";
$subject = "Webmail | ".$contactSubject;
$message = ""
        . "<html>"
        . "<body>"
        . "<tr>"
        . "<td><b>Name: </b></td><td>$name</td>"
        . "</tr>"
        . "<tr>"
        . "<td><b>Email:</b></td><td>$email</td>"
        . "</tr>"
        . "<tr>"
        . "<td><b>Phone Number:</b></td><td>$phone</td>"
        . "</tr>"
        . "<tr>"
        . "<td><b>Subject:</b></td><td>$contactSubject</td>"
        . "</tr>"
        . "<tr>"
        . "<td><b>Message:</b></td><td>$message_text</td>"
        . "</tr>"
        . "</table>"
        . "</body>"
        . "</html>";
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

mail($to, $subject, $message, $headers);
