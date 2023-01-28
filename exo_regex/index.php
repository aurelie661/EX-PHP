<?php
$chaine="2 83 11 59 017 086";
// verifie si le num secu est correct
if(preg_match("#^[1|2]([ ][0-9]{2}){3}([ ][0-9]{3}){2}$#",$chaine)){
    echo "num correct";
}
else{
    echo "num pas correct";
}