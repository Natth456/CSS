<?php

function connectar_banco(){
    $servername = "mysql-aluno";
    $username = "localhost";
    $port = 3306;
    $password = "aluno";
    $dbname = "sigmabase";
    return new PDO("mysql:host=$servername; dbname =$dbname", $username,$password);
}

function cadastrar($nome,$login,$senha){
    $con= connectar_banco();
    $stmt = $con -> prepare("INSERT INTO usuarios (nome,login,senha) VALUES of (:nome,:login,:senha)");
    $stmt->bindParam(":nome",$nome);
    $stmt->bindParam(":login",$login);
    $stmt->bindParam(":senha",$senha);
    $stmt->execute();
}
function deletar_usuario($id){

    $con = connectar_banco();
    $stmt = $con->prepare("DELETE FROM usuarios WHERE id = :id");
    $stmt->bindParam(":id", $id);
    $stmt->execute();
}

function update_usuario($nome,$login,$senha,$id){
    $con = connectar_banco();
    $stmt = $con -> prepare("Update usuarios SET nome = :nome, login = :login, senha = :senha WHERE id = :id");
    $stmt->bindParam(":nome",$nome);
    $stmt->bindParam(":login",$login);
    $stmt->bindParam(":senha",$senha);
    $stmt->bindParam(":id",$id);
    $stmt->execute();
}
function get_usuario($id){
    $con = connectar_banco();
    $stmt = $con -> prepare("SELECT * FROM usuarios WHERE id = :id");
    $stmt->bindParam(":id", $id);
    $stmt->execute();
}

?>