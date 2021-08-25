<?php
    $ano = $_POST['ano'];
    $seculoAno = SeculoAno($ano);
    function SeculoAno($ano){
        
        $seculo = ceil($ano/100);
        header('Location: home.php?ano='.$ano.'&seculo='.$seculo);
    }
    
?>