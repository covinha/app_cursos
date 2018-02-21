<?php
/**
 * Created by PhpStorm.
 * User: Reginaldo
 * Date: 20/02/2018
 * Time: 21:44
 */

namespace App\DAO;


class CursoDAO
{
private $conexao;

    /**
     * CursoDAO constructor.
     */
    public function __construct()
    {

        $this->conexao = new \PDO("mysql:dbname=db_cursos host=localhost", "root", "#9258863709202202#");
        $this->conexao->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

public function inserir($curso)
{
    $sql = "insert into cursos (nome, valor) VALUES (:nome, :valor)";
    try{
      $insercao = $this->conexao->prepare(sql);
      $insercao->bindValue(":nome", $curso->getNome());
      $insercao->bindValue(":valor", $curso->getValor());
      $insercao->execute();

    }catch (\PDOException $erro){
        echo $erro->getMessage();
    }
}
}