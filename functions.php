<?php 

function emailValidator($email) {

    return str_contains($email, ".") && str_contains($email, "@");

}

?>