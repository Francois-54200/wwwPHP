<?php

	if(array_key_exists('title', $_POST))
	{
		include 'functions.php';

		$task = $_POST;
		$taskAdded = addLineToCSV('tasks.csv', $task);
	}

	include 'add.phtml';