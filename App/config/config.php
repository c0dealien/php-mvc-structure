<?php

session_start();

//* Setting phpdotenv's path *//
	$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
	$dotenv->load();