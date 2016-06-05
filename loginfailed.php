<?php

session_start();
echo 'Hey you, '.$_SESSION['username'].' You\'re not authorized. Please fuck off.';

?>