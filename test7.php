<?php

function magicCons() {
    echo __LINE__;     // 파일의 현재 줄 번호를 반환함.
    echo __FUNCTION__; // 함수의 이름을 반환함.
    echo __METHOD__;   // 클래스의 메소드 이름을 반환함.
}
magicCons();

?>