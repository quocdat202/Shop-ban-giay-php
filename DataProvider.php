<?php
class DataProvider
{
	
	public static function executeQuery($sql)
	{
		require_once ('ketnoi.php');

		if (($connection = mysqli_connect($host,$user,$pass,$db)))
			echo"ket noi thanh cong";
		else 
			echo "Khong the ket noi";

		if (!(mysqli_query($connection,"set names 'utf8'")))
			echo "Khong the set utf8";

		if (!($result = mysqli_query($connection,$sql)))
			echo "Khong the ket noi 3"; 

		if (!(mysqli_close($connection)))
			echo "Khong the ket noi 4";
		return $result;
	}
}
?>