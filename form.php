<?php
	$name = $_POST['name'];
	$nameError=null;
    if (strlen($name)=="0"){ 
    	$nameError = "Введите имя<br>"; 
       	echo $nameError; 
    }
    elseif ((strlen($name)<6) || ((strlen($name)>12))) {
       	echo "Введите от 6 до 12 символов<br>";    	}
    else{
       	echo "<br>";
    }

    $email = $_POST['email'];
	$emailError=null;
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$emailError = "Ошибка при вводе<br>";
		echo $emailError;
	}
	else{
       	echo "<br>";
    }

    $phone = $_POST['phone'];
	$phoneError=null;
	if(strlen($phone)=="0"){
		$phoneError = "Введите телефон<br>";
		echo $phoneError;
	}
	elseif((strlen($phone)!=10) || (!preg_match("/^[0-9-]+$/",$phone))){
		$phoneError = "Неверный формат<br>";
		echo $phoneError;
	}
	else{
     	echo "<br>";
    }

    $testResult = $phoneError.$emailError.$nameError;
	if ($testResult==null){
		echo "Проверка на стороне сервера пройдена<br>";
	}
?>
