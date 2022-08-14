<?php

include('./link.php');

$sql = $db->prepare('select * from users where username=:user');

$sql->bindvalue('user', $_POST['user']);
$sql->execute();

$query = $sql->fetch();


if ($_POST['captcha'] == $_POST['captcha_ans']) {
    if ($query) {
        if ($query['password'] == $_POST['password']) {
            $_SESSION['user'] = $query;
            header('location:./index.php');
        } else {
            echo '<script>alert("密碼錯誤")</script>';
            echo '<script>location.href="index.php"</script>';
        }
    } else {
        echo '<script>alert("帳號錯誤")</script>';
        echo '<script>location.href="index.php"</script>';
    }
} else {
    echo '<script>alert("驗證碼錯誤")</script>';
    echo '<script>location.href="index.php"</script>';
}
