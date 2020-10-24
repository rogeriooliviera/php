<?php

class Usuario 
{

	private $idusuario;
	private $deslogin;
	private $dessenha;
	private $dtcadastro;

    //Id
	public function getIdusuario()
	{
    	return $this->idusuario;
	}

    public function setIdusuario($value)
    {
       $this->idusuario =$value;
    }

    //Login
	public function getDeslogin()
	{
    	return $this->deslogin;
	}

    public function setDeslogin($value)
    {
       $this->deslogin =$value;
    }

    //Senha
	public function getDessenha()
	{
    	return $this->dessenha;
	}

    public function setDessenha($value)
    {
       $this->dessenha =$value;
    }

    //DataCadastro
	public function getDtcadastro()
	{
    	return $this->dtcadastro;
	}

    public function setDtcadastro($value)
    {
       $this->dtcadastro =$value;
    }


    //Retorna Usuário por ID
    public function loadById($id){

    	$sql = new FonteSql();

    	$results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(
        	":ID"=>$id
        ));

        //Validando se retorna informações.
        if (count($results)>0){

          $this->setData($results[0]); 

         }

    }

    //A vantagem de um médoto statico é que ele não precisa ser instanciado.
    //Retorna todos os usuários do banco de dados.
    public static function getList(){

    	$sql = new FonteSql();

    	return $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin;");
    }

    //Faz uma busca no banco de dados de acordo com a condição informada (deslogin).
    public static function search($login){

    	$sql = new FonteSql();

    	return $sql->select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :SEARCH ORDER BY deslogin", array(
        	":SEARCH"=> "%".$login."%"
    	));
    }


    //Funcao de login de usuario
    public function login($login, $password){

    	$sql = new FonteSql();

    	$results = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN AND dessenha = :PASSWORD", array(
        	":LOGIN"=>$deslogin,
        	":PASSWORD"=>$dessenha
        ));


        //Validando se retorna informações.
        if (count($results)>0){

          $this->setData($results[0]);
 
          }else{

          	throw new Exception("Login e/ou senha inválidos");        	

          }  

    }

    //Metodo criado para evitar redundacia de código (na hora de setar valor)
    public function setData($data){

    	    $this->setIdusuario($data['idusuario']);
            $this->setDeslogin($data['deslogin']);
            $this->setDessenha($data['dessenha']);
            $this->setDtcadastro(new DateTime($data['dtcadastro'])); 

    }
    
    //Metodo para inserir dados
	//Inserindo dados com a stored procedure sp_usuarios_insert
	//Depois de criado a função também criamos a procedure no banco de dados.
	/* 
	Codigo da Procedure:
	CREATE PROCEDURE `sp_usuarios_insert`(
       pdeslogin VARCHAR(64),
       pdessenha VARCHAR(258)
    )
      BEGIN
	   INSERT INTO tb_usuarios(deslogin,dessenha) VALUES (pdeslogin,pdessenha);
       SELECT * FROM tb_usuarios WHERE idusuario = LAST_INSERT_ID();
    END
	*/
    public function insert(){

    	$sql = new FonteSql();

    	$results = $sql->select("CALL sp_usuarios_insert(:LOGIN, :PASSWORD)", array(
            ":LOGIN"=>$this->getDeslogin(),
            ":PASSWORD"=>$this->getDessenha()          
    	));

    	if(count($results)>0){
    		$this->setData($results[0]);
    	}
    }
	
	
	public function update($login, $password){

            $this->setDeslogin($login);
            $this->setDessenha($password);

            $sql = new FonteSql();
			
            $sql->query("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID", array(
			":LOGIN"=>$this->getDeslogin(),
            ":PASSWORD"=>$this->getDessenha(),
            ":ID"=>$this->getIdusuario()
			));
	
	}

    public function delete(){

         $sql = new FonteSql();

          $sql->query("DELET FROM tb_usuarios WHERE idusuario = :ID", array(
            ":ID"=>$this->getIdusuario()

         ));

          $this->setIdusuario(0);
          $this->setDeslogin("");
          $this->setDessenha("");
          $this->setDtcadastro(new DateTime());

    }        


    //Metodo Contrutor da Classe - Obs dessa forma ($login = "", $password = "") os parametros do construtor nao sao obrigatorios
	//Se for informados os parametros beleza se não não ha problemas.
	public function __construct($login = "", $password = ""){
		$this->setDeslogin($login);
		$this->setDessenha($password);

	}

	public function __toString()
	{
		return json_encode(array(
			"idusuario"=>$this->getIdusuario(),
			"deslogin"=>$this->getDeslogin(),
			"dessenha"=>$this->getDessenha(),
			//Como o metodo getDtcadastro é um objeto DateTime e como ele tem o metodo format podemos usalo para formatar.
			"dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")
		));		
	}

}

?>