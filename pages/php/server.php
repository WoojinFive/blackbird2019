<?php
session_start();


$username = "";
$email    = "";
$errors = array();

$db = mysqli_connect('localhost', 'root', 'inet2005', 'jobfair');


// sign up
if (isset($_POST['regStudent'])) {

    $firstName = mysqli_real_escape_string($db, $_POST['firstName']);
    $lastName = mysqli_real_escape_string($db, $_POST['lastName']);
    $studentID = mysqli_real_escape_string($db, $_POST['studentID']);
    $studentEmail = mysqli_real_escape_string($db, $_POST['studentEmail']);
    $campus = mysqli_real_escape_string($db, $_POST['campus']);
    $ITProgram = mysqli_real_escape_string($db, $_POST['ITProgram']);
    $graduateYear = mysqli_real_escape_string($db, $_POST['graduateYear']);
    $photo = mysqli_real_escape_string($db, $_POST['photo']);
    $portfolio = mysqli_real_escape_string($db, $_POST['portfolio']);
    $programID = "SELECT programID FROM program WHERE programName = '" . $ITProgram. "'";
    $row = mysqli_fetch_assoc($programID);

    //$query = "INSERT INTO student (programID, studentWNumber, studentGraduatingYear, studentFirstName, studentLastName, studentEmail, studentPictureApproval, studentProfessionalPhoto, studentPortfolioPresentation) VALUES('" . $programID . "', '" . $studentID . "''" . $graduateYear . "', '" . $firstName . "', '" . $lastName . "', '" . $studentEmail . "', 0, 0, 0)";
    $query = "INSERT INTO location (locationName) VALUES('" . $row["programID"][0] ."')";
    mysqli_query($db, $query);



//    header('location: success.php');

}

// login
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