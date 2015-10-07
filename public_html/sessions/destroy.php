

<?php

if (isset($_SESSION['user_id'])) {
    unset($_SESSION['user_id']);
    header('Location: ./public_html');
} else {
    header('Location: ./public_html');
}

?>