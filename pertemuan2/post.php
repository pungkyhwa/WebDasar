<?php 
    $nim = $_POST['nim'];
    echo 'nim : '.$nim.'<br>';
    
    $hobi = $_POST['hobi'];
    echo 'hobi : <br>';
    echo '<ul>';    
    foreach ($hobi as $row) {
        echo '<li>'.$row.'</li>';
    }
    echo '</ul>'
?>