<? include 'includes/header.php'; ?>

<?php 
    if(isset($_POST['email'])) {
        $to       = $_POST['email'];
        $subject  = "Subscription Confirmation";
        $message  = "<h2>Congratulations on your subscription at <b>GOAT Tech!<b></h2>";
        $from     = "nick@goattechnology.com";

        $headers  = "From: " . $from . "\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
        mail($to, $subject, $message, $headers);
    }

?>

<h2>Congratulations <?php echo $_POST["name"]; ?>!</h2>
<p>You have just subscribed to recieve our weekly newsletter!
We will send you a summary of all things technology that has happened during the week.</p>

<p>The email we will be sending the newsletters to will be:<strong><?php echo $_POST["email"]; ?></strong></p>

<p>Again, thank you for signing up for Tech Newsletter!</p>
<strong>GOAT TECH</strong>

<? include 'includes/footer.php'; ?>
