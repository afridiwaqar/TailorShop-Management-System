<?php

$baseurl = "http://localhost/tailorshop/";	
$dbname = "tailor";
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";


error_reporting(E_ALL);
function connectdb()
{
    global $dbname, $dbuser, $dbhost, $dbpass;
    $conms = @mysql_connect($dbhost,$dbuser,$dbpass); //connect mysql
	mysql_set_charset('utf8', $conms);
    if(!$conms) return false;
    $condb = @mysql_select_db($dbname);
    if(!$condb) return false;
    return true;
}



function dbconnect()
{
	global $pdo;

	try {
		$pdo = new PDO('mysql:host='.$GLOBALS['dbhost'].';dbname='.$GLOBALS['dbname'].'', $GLOBALS['dbuser'], $GLOBALS['dbpass']);
	} catch (PDOException $e) {
		die('MySQL connection fail! ' . $e->getMessage());
	}
}


function insert_new_user($username, $password)
{
	# checking username is already taken
	if (username_exists($username))
		return false;

	# insert new user info
	global $pdo;
	$stmt = $pdo->prepare('
		INSERT INTO users
		(username, password)
		values (:username, :password)');

	$stmt->execute( array(':username' => $username, ':password' => md5($password)) );

	if ($pdo->lastInsertId())
		return true;
	else
		return false;
}

function username_exists($username)
{
	global $pdo;
	
	$stmt = $pdo->prepare('
		SELECT id
		FROM users
		WHERE username = :username
		LIMIT 1');

	$stmt->execute( array('username' => $username) );
	return $stmt->fetchColumn();
}

function attempt($username, $password)
{
	global $pdo;
	
	$stmt = $pdo->prepare('
		SELECT id, username
		FROM users
		WHERE username = :username AND password = :password
		LIMIT 1');

	$stmt->execute(array(':username' => $username, 'password' => md5($password)));

	if ($data = $stmt->fetch( PDO::FETCH_OBJ )) {
		# set session
		$_SESSION['username'] = $data->username;
		return true;
	} else {
		return false;
	}
}

function is_user()
{
	if (isset($_SESSION['username']))
		return true;
}

function redirect($url)
{
	header('Location: ' .$url);
	exit;
}

function valid_username($str){
	return preg_match('/^[a-z0-9_-]{3,16}$/', $str);
}

function valid_password($str){
	return preg_match('/^[a-z0-9_-]{6,18}$/', $str);
}

function add_customer($name,$address,$phone,$sex,$email,$city,$comment,$successful){
	global $pdo;
	global $successful;
	$sql = "INSERT into customer(fullname,address,phonenumber,sex,email,city,comment)values(:fname,:address,:phone,:sex,:email,:city,:comment)";
	$query = $pdo->prepare($sql);
	$query->bindParam(':fname',$name,PDO::PARAM_STR);
	$query->bindParam(':address',$address,PDO::PARAM_STR);
	$query->bindParam(':phone',$phone,PDO::PARAM_STR);
	$query->bindParam(':sex',$sex,PDO::PARAM_STR);
	$query->bindParam(':email',$email,PDO::PARAM_STR);
	$query->bindParam(':city',$city,PDO::PARAM_STR);
	$query->bindParam(':comment',$comment,PDO::PARAM_STR);
	$query->execute();
	$lastInsert = $pdo->lastInsertId();
	if ($lastInsert>0) {
		echo $successful;
	}else{
				echo "<script>alert('Something went wrong.');</script>";
			}
}





?>