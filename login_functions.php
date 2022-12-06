<?php

function auth($username, $password, $conn)
{	
	$sql = "SELECT username, password FROM accounts";
	$result = mysqli_query($conn, $sql);

	$uname = "";
	$pass  = "";

	while($row = mysqli_fetch_assoc($result))
	{
		if($username == $row['username'])
		{
			$uname = $row['username'];
			$pass  = $row['password'];
		}
	}

	if($uname == $username && $pass == $password)
	{
		$ret = 1;
	}
	else
	{
		$ret = 0;
	}



	return $ret;
}

?>
