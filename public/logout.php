<?php
session_destroy();

unset($_SESSION['user_login']);
unset($_SESSION['nama']);
die('<script>location.replace("/login")</script>');