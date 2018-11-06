<?php

if(isset($_GET['id']) && isset($_GET['name']))
{
	echo $_GET['id']." ".$_GET['name'];
}

?>