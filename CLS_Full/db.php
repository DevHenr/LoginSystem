<?php
    
    $con = mysqli_connect("localhost","root","","LoginSystem");
    
    if (mysqli_connect_errno()){
        echo "Falha na Conexão: " . mysqli_connect_error();
    }
?>