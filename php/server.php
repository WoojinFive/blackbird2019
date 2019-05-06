<?php
session_start();


$username = "";
$email    = "";
$errors = array();

$db = mysqli_connect('localhost', 'root', 'inet2005', 'jobfair');

/*
// 회원가입
if (isset($_POST['reg_user'])) {// post값으로 전달된 ref_user값이 있는지 확인합니다
    // 폼에서 입력 값을 받아옵니다
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
    // mysqli_real_escape_string은 게시글에서 설명하겠습니다.

    // 폼의 항목들이 모두 채워졌는지 확인합니다 ...
    // 비워진 부분이 있다면 errors라는 배열에 추가를 합니다
    if (empty($username)) { array_push($errors, "ID가 비어 있어요"); }
    if (empty($email)) { array_push($errors, "Email이 비어 있어요"); }
    if (empty($password_1)) { array_push($errors, "비밀번호가 비어 있어요"); }
    if ($password_1 != $password_2) {
        array_push($errors, "이런! 비밀번호가 일치하지 않네요");
    }

    // 데이터베이스를 활용하는 부분입니다 혹시 준비되지 않으신 분들은 준비해 주세요
    $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
    // email과 ID가 중복되었는지 확인하는 sql문을 변수에 담아둡니다.
    $result = mysqli_query($db, $user_check_query);
    //실제 결과를 이제 변수에 담아두고요.
    $user = mysqli_fetch_assoc($result); // 그 결과를 배열에 담습니다.

    if ($user) { // if 만약 결과가 존재한다면
        if ($user['username'] === $username) {
            array_push($errors, "이런! 해당 ID는 이미 사용중이네요");
        }

        if ($user['email'] === $email) {
            array_push($errors, "이런! 해당 이메일은 이미 사용중이네요");
        }
    }

    // 에러가 없다면(errors배열이 비어 있다면) 가입이 진행됩니다
    if (count($errors) == 0) {
        $password = md5($password_1);// 입력한 비밀번호를 암호화 시킵니다.
        // md5는 복호화가 힘들기 때문에 아래 게시글에 있는 링크를 참고하시면 나중에 활용하기 좋야요
        $query = "INSERT INTO users (username, email, password)
  			  VALUES('$username', '$email', '$password')";
        //db에 넣는 쿼리문 적고요
        mysqli_query($db, $query); //실행을 합니다
        $_SESSION['username'] = $username; // 세션을 추가합니다.
        $_SESSION['success'] = "당신은 로그인에 성공했어요
1";
        header('location: index.php');// 그리고 index 페이지로 보내버립니다.
    }
}
*/

if (isset($_POST['loginUser'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (empty($username)) {
        array_push($errors, "Please input Username");
    }

    if (empty($password)) {
        array_push($errors, "Please input Password");
    }

    if (count($errors) == 0) {
        //$password = md5($password);
        $query = "SELECT * FROM admin WHERE adminUsername = '" . $username . "' AND adminPassword = '" . $password . "'";

        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "Login Success";
            header("location: index.php");
        }else {
            array_push($errors, "Login Fail");
        }
    }

}

?>
