<?php 



$color2 = array('white','green','red','yellow','orange');
    echo implode(',', $color2);
    echo '<br />';
    
   

    // echo '<ul><li>' . implode('</li><li>', $color2) . '</li></ul>';

    echo '<ul>';
    echo implode('</li><li>', $color2);

    echo '</ul>';


    // $listItems = implode('</li><li>', $color2);
    // echo "<ul><li>$listItems</li></ul>";    

?>

