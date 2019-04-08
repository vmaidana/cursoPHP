<?php

require_once("config.php");

/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tbusuarios");

echo json_encode($usuarios);*/

//Carrega um usuario
// $root = new Usuario();
// $root->loadById(1);
// echo $root;

//Carrega uma lista de usuarios
// $lista = Usuario::getList();
// echo json_encode($lista);

//Carrega uma lista de usuarios buscando pelo login
// $search = Usuario::search("jo");
// echo json_encode($search);

//Carrega um usuario usando login e senha
// $usuario = new Usuario();
// $usuario->login("Jose", "1234567890");
// echo $usuario;

//Insere um usuário no banco e retorna json
// $aluno = new Usuario("aluno2", "@aluno2");
// $aluno->insert();
// echo $aluno;

//Atualiza um cadastro no banco
// $usuario = new Usuario();
// $usuario->loadById(3);
// $usuario->update("professor", "senhaprof123");
// echo $usuario;

//Deleta um usuario do banco
$usuario = new Usuario();
$usuario->loadById(3);
$usuario->delete();
echo $usuario;
?>