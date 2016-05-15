function validateContactForm() {
    var name = document.forms['contactform']['name'].value;
    var email = document.forms['contactform']['email'].value;
    var phone = document.forms['contactform']['phone'].value;
    var subject = document.forms['contactform']['subject'].value;
    var message = document.forms['contactform']['message'].value;

    if (name === "" | name === null | name.length < 1) {
        $(document).ready(function () {
            window.alert("Please enter a valid name.");
            $("#name").css("border-bottom", "1px solid red");
        });
        return false;
    }
    if (email === "" | email === null | email.length < 4) {
        $(document).ready(function () {
            window.alert("Please enter a valid email address.");
            $("#email").css("border-bottom", "1px solid red");
        });
        return false;
    }
    if (phone === "" | phone === null | phone.length < 1) {
        $(document).ready(function () {
            window.alert("Please enter a valid phone number.");
            $("#phone").css("border-bottom", "1px solid red");
        });
        return false;
    }
    if (subject === "_blank") {
        $(document).ready(function () {
            window.alert("Please select a subject.");
            $("#subject").css("border", "1px solid red");
        });
        return false;
    }
    if (message === "" | message === null | message.length < 2) {
        $(document).ready(function () {
            window.alert("Please enter a message.");
            $("#message").css("border-bottom", "1px solid red");
        });
        return false;
    } else {
        var dataString = 'name='+ name + '&email=' + email + '&phone=' + phone+ '&subject=' + subject+ '&message=' + message;
  //alert (dataString);return false;
        $.ajax({
            type: "POST",
            url: "sendEmail.php",
            data: dataString,
            success: function () {
                $("footer").css("position", "absolute");
                $("footer").css("bottom", "0");
                $("h1").hide();
                $("#contactForm").html("<div id='message'></div>");
                $("#message").html("<h2>Thank you for contacting us</h2>").append("<p>We will be in touch soon!</p>").hide().fadeIn(1500);
            }
        });
        return false;
    }
}


