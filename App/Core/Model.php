<?php

namespace App\Core;

use PDO;
use PDOException;
use Exception;

class Model
{
	private $host;
	private $name;
	private $username;
	private $passwd;
	private $driver;
	private $pdo;
	private $err;

	public function __construct()
	{
		$this->host = $_ENV['DB_HOST'];
		$this->name = $_ENV['DB_NAME'];
		$this->username = $_ENV['DB_USER'];
		$this->passwd = $_ENV['DB_PASSWD'];
		$this->driver = $_ENV['DB_CONN'];

		try {
			$this->pdo = new PDO($this->driver.':host='.$this->host.';dbname='.$this->name.';', $this->username, $this->passwd);
		} catch(PDOException $e) {
			throw new Exception('Ocorreu um erro na tentativa de conexão com o banco de dados', 500);
		}
	}
}