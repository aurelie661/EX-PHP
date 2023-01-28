<?php
$chaine="afpa.toto@gmail.com";
// verifie si l'e-mail est correct
if(preg_match("#^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]{2,}\.[a-z]{2,4}$#",$chaine)){
    echo "e-mail correct";
}
else{
    echo "e-mail pas correct";
}