<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email  = $_POST['email'];
    $message = $POST['message'];
    $noWA = $_POST['noWA'];
    header("location:https://api.whatsapp.com/send/?phone=$noWA&text=Full Name:%20$name%20%0DEmail Address:%20$email%20%0DSend Message:%20$message");
} else {
    echo "
    <script> 
    window.location=history.go(-1);
    </script>
    ";
}
