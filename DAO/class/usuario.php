<?php

class Usuario {

    private $idusuario;
    private $deslogin;
    private $dessenha;
    private $dtcadastro;

    public function getIdusuario() {
        return $this->idusuario;
    }

    public function setIdusuario($value) {
        $this->idusuario = $value;
    }

    public function getDeslogin() {
        return $this->deslogin;
    }

    public function setDeslogin($value) {
        $this->deslogin = $value;
    }

    public function getDessenha() {
        return $this->dessenha;
    }

    public function setDessenha($value) {
        $this->dessenha = $value;
    }

    
    public function getDtcadastro() {
        return $this->dtcadastro;
    }

    public function setDtcadastro($value) {
        $this->dtcadastro = $value;
    }

    public function loadById($id) {

        $sql = new Sql();

        $results = $sql->select("SELECT * FROM tbusuarios WHERE idusuario = :ID", array(
            ":ID"=>$id
        ));

        if(count($results) > 0) {

            $this->setData($results[0]);

        } //fim do if

    } // fim da função loadById

    // método para listar todos usuarios da tabela
    public static function getList() {

        $sql = new Sql();

        return $sql->select("SELECT * FROM tbusuarios ORDER BY deslogin;");

    } // fim do metodo getList

    // método de busca de usuario por login
    public static function search($login) {

        $sql = new Sql();

        return $sql->select("SELECT * FROM tbusuarios WHERE deslogin LIKE :SEARCH ORDER BY deslogin", array(
            ':SEARCH'=>"%".$login."%"
        ));

    } // fim do metodo Search
    
    //metodo de busca de usuario autenticado
    public function login($login, $password) {

        $sql = new Sql();

        $results = $sql->select("SELECT * FROM tbusuarios WHERE deslogin = :LOGIN AND dessenha = :PASSWORD", array(
            ":LOGIN"=>$login,
            ":PASSWORD"=>$password
        ));

        if(count($results) > 0) {

            $this->setData($results[0]);

        } else {

            throw new Exception("Login e/ou senha inválidos.");

        } // fim do if

    } // fim do metodo login

    // método de setters para a classe usuário
    public function setData($data) {

        $this->setIdusuario($data['idusuario']);
        $this->setDeslogin($data['deslogin']);
        $this->setDessenha($data['dessenha']);
        $this->setDtcadastro(new DateTime($data['dtcadastro']));
    } // fim do método setData

    // método para inserção de dados no banco por meio de um procedure
    public function insert() {

        $sql = new Sql();

        $results = $sql->select("CALL sp_usuarios_insert(:LOGIN, :PASSWORD)", array(
            ':LOGIN'=>$this->getDeslogin(),
            ':PASSWORD'=>$this->getDessenha()
        ));

        if (count($results) > 0){
            $this->setData($results[0]);
        }

    } // fim do método insert

    // método para atualizar um cadastro no banco
    public function update($login, $password) {

        $this->setDeslogin($login);
        $this->setDessenha($password);

        $sql = new Sql();

        $sql->query("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID", ARRAY(
            ':LOGIN'=>$this->getDeslogin(),
            ':PASSWORD'=>$this->getDessenha(),
            ':ID'=>$this->getIdusuario()
        ));

    } // fim do método update

    // método construtor para o insert
    public function __construct($login = "", $password = ""){

        $this->setDeslogin($login);
        $this->setDessenha($password);

    } // fim do método construct

    // método para retornar json
    public function __toString() {
        return json_encode(array(
            "idusuario"=>$this->getIdusuario(),
            "deslogin"=>$this->getDeslogin(),
            "dessenha"=>$this->getDessenha(),
            "dtcadastro"=>$this->getDtcadastro()->format("d/m/Y M:i:s")
        ));
    } // fim do método toString

} // fim da classe usuario

?>