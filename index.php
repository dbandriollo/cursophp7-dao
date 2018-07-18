<?php 
require_once ("config.php");

/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuario");

echo json_encode($usuarios);*/

//carrega um usuário
//$root = new Usuario();
//$root->loadbyId(2);
//echo $root;

//carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);


//carrega uma lista de usuário buscando pelo login
//$search = Usuario::search("b");
//echo json_encode($search);

//carrega um usuário usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("dba", "ahdiwehd");
//echo $usuario;


//Inserindo um novo usuário
//$aluno = new Usuario("dba", "321");
//$aluno->insert();
//echo $aluno;

$usuario = new Usuario();

$usuario->loadById(3);

$usuario->update("Bonesso", "@dba#");

echo $usuario;
?>