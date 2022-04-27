<?php
class DataProvider
{
	public static function executeQuery($sql)
	{
		include ('ketnoi.php');
			// 1. Tao ket noi CSDL
		if (!($connection = mysqli_connect($host,$user,$pass)))
			die ("couldn't connect to localhost");
		if (!(mysqli_select_db($connection,$db)))
			echo "Khong the ket noi 1";
		//2. Thiet lap font Unicode
		if (!(mysqli_query($connection,"set names 'utf8'")))
			echo "Khong the set utf8";
		// Thuc thi cau truy van
		if (!($result = mysqli_query($connection,$sql)))
			echo "Khong the ket noi 3"; 
		// Dong ket noi CSDL
		if (!(mysqli_close($connection)))
			echo "Khong the ket noi 4";
		return $result;
	}

	public static function executeQuery2($sql)
	{
		include ('ketnoi.php');
			// 1. Tao ket noi CSDL
		if (!($connection = mysqli_connect($host,$user,$pass)))
			die ("couldn't connect to localhost");
		if (!(mysqli_select_db($connection,$db)))
			echo "Khong the ket noi 1";
		//2. Thiet lap font Unicode
		if (!(mysqli_query($connection,"set names 'utf8'")))
			echo "Khong the set utf8";
		// Thuc thi cau truy van
		if (!($result = mysqli_query($connection,$sql)))
			echo "Khong the ket noi 3"; 
		// Dong ket noi CSDL
		if (!(mysqli_close($connection)))
			echo "Khong the ket noi 4";
		return true;
	}
}
?>