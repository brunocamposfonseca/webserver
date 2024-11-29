<?php
    session_start();

    $_SESSION["name"] = "Bruno";
    $_SESSION["favcolor"] = "green";
    $_SESSION["favanimal"] = "elephant";
    echo "Varialvel criada com sucesso!";
?>
