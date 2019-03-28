<?php 
 header("Content-Type: text/html; charset=utf-8");

if (empty($_REQUEST['fullname'])) {
echo 'Поле не заполнено';
} else {
echo 'Поле было заполнено';
$a = $_REQUEST['fullname'];
}

if (empty($_REQUEST['email'])) {
echo 'Поле не заполнено';
} else {
echo 'Поле было заполнено';
$a = $_REQUEST['email'];
}

if (empty($_REQUEST['date'])) {
echo 'Поле не заполнено';
} else {
echo 'Поле было заполнено';
$a = $_REQUEST['date'];
}

if (empty($_REQUEST['phone'])) {
echo 'Поле не заполнено';
} else {
echo 'Поле было заполнено';
$a = $_REQUEST['phone'];
}

if (empty($_REQUEST['comment'])) {
echo 'Поле не заполнено';
} else {
echo 'Поле было заполнено';
$a = $_REQUEST['comment'];
}

function clean($value = "") {
    $value = trim($value);
    $value = stripslashes($value);
    $value = strip_tags($value);
    $value = htmlspecialchars($value);
    
    return $value;
}
function check_length($value = "", $min, $max) {
    $result = (mb_strlen($value) < $min || mb_strlen($value) > $max);
    return !$result;
}
if($_SERVER['REQUEST_METHOD'] == 'POST') {	
	$fullname = $_POST['fullname'];
	$email = $_POST['email'];
    $date = $_POST['date']; 
    $phone = $_POST['phone'];
	$message = $_POST['comment'];
	$fullname = clean($fullname);
	$email = clean($email);
    $phone = clean($phone);
    $date = clean($date);
	$comment = clean($comment);
	if(!empty($fullname) && !empty($date) && !empty($email) && !empty($comment) && !empty($phone)) {
	    $email_validate = filter_var($email, FILTER_VALIDATE_EMAIL); 
	    if(check_length($fullname, 3, 50) && check_length($comment, 2, 1000) && $email_validate) {
	        echo "Спасибо за сообщение";
	    } else {
	        echo "Введенные данные некорректные";
	    }
	} else {
	    echo "Данные отправлены!";
	}
} else {
	header("Location: ../index.php");
}
?>