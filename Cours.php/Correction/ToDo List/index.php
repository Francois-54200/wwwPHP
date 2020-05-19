<?php

	include 'functions.php';

	$tasks = getLinesFromCSV('tasks.csv');

	include 'index.phtml';