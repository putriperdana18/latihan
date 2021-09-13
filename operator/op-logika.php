<?php
    $username = "putri";
    $pasword = "123";

    echo "username : $username <br>";
    echo "<br> password : $pasword <br>";
    echo "<br> Cek login ". (($username != $pasword) && ($username == $pasword));