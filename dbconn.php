<?php
    $host="localhost"; // 자신이 사용하는 호스트 ip로 입력해도 된다
    $user="root";      // 사용자
    $pass="3227";      // 비밀번호
    $dbname= "mydb";   // 자신이 지금 사용하는 dbname

    $conn = mysqli_connect($host, $user, $pass, $dbname);
    mysqli_set_charset($conn, "utf8");

    function mq($sql)
    {
        global $conn;               // 전역변수 선언
        return $conn->query($sql);  // 쿼리 연결
    }
?>