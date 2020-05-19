<?php

	include 'functions.php';

	if(array_key_exists('taskIndex', $_POST))
	{
		$taskIndex = $_POST['taskIndex'];
		$taskRemoved = removeLineOfCSV('tasks.csv', $taskIndex);
	}

	$tasks = getLinesFromCSV('tasks.csv');

	include 'remove.phtml';