<?php


class Conexion
{

	static public function conectar()
	{
		/**
		 #PDO("nombre servidor; nombre de  la  base  de    datos", "usuario", "password")
		 */
		$link = new PDO("mysql:host=localhost;dbname=cte",
			"root",
			"");
		$link->exec("set names utf8");

		return $link;

	}
}