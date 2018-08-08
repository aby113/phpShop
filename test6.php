<?php

    
    
    function counter() {
         static $count;
        echo "함수 내부에서 호출한 static 변수 count의 값은 {$count}입니다.<br>";
        $count++;
    }

    counter();
    counter();
    counter();


?>