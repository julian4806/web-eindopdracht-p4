<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "210549@student.glu.nl";
    $headers = "From: " . $mailFrom;
    $headers .= 'Cc: 210549@student.glu.nl\r\n';
    $txt = "U heeft een e-mail ontvangen van " . $mailFrom . ".\n\n" . "Bericht: " . $message;

    mail($mailTo, $subject, $txt, $headers);
    print("<script>
alert('Bedankt voor uw interesse. Wij nemen zo spoedig mogelijk contact met u op.');
window.location.href = 'index.html';
</script>");
}
