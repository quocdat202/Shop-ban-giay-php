<?php
class DataProvider
{
	
	public static function executeQuery($sql)
	{
		require ('ketnoi.php');

		if (($connection = mysqli_connect($host,$user,$pass,$db)))
			echo"<script> console.log('Kết nối thành công')</script>";
		else 
			echo"<script> console.log('Không thể kết nối')</script>";

		if (!(mysqli_query($connection,"set names 'utf8'")))
			echo"<script> console.log('Không thể set names 'utf8'')</script>";

		if (!($result = mysqli_query($connection,$sql)))
			echo"<script> console.log('Không thể kết nối 3')</script>";
 
		if (!(mysqli_close($connection)))
			echo"<script> console.log('Không thể kết nối 4')</script>";

		return $result;
	}
}
?>