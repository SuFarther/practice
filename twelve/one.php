<?php
    /**
     * 打印九九乘法表
     */


    echo  '<table width="800px" height="200px" border="1">';

    for($i = 1; $i <=9; $i++){
        echo '<tr>';
       for($j = 1; $j <= $i; $j++){
           echo '<td>'.$i.'*'.$j.'='.$i*$j.'</td>';
       }
        echo '</tr>';
    }


    echo '</table>';