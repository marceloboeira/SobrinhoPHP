<?php if ( ! defined('BASEPATH')) die('Acesso nao permitido :)');

/* Classe para operações com banco de dados */
Class Database {

    var $dba;
    var $usr;
    var $pwd;

    /*
     * Método mágico __construct();
     */
    public function __construct(){
        //define váriaveis globais da classe
        $this->host = 'localhost';//host | padrão 'localhost'
        $this->dtbs = 'db_ong';   //banaco de dados | nome do banco
        $this->user = 'root';     //usuário banco de dados mysql
        $this->pswd = '';         //senha do banco, se não houver senha deixar string vazia
    }
    
    /*
     * Função conecta(); inicia uma conexão com o banco de dados
     */
    public function conecta(){
        //tenta conexão com mysql
        if ($conn = mysql_connect($this->host, 
                                  $this->user, 
                                  $this->pswd)){
            //tenta conexão com banco
            if (mysql_select_db($this->dtbs, $conn)) {
                return TRUE;
            } else {
                return FALSE;
            }
        } else {
            return FALSE;
        }
    }
    
   public function consulta($string = null) {
        if (!isset($string))
            die(false);
        //tenta conexão com mysql
        if ($conn = mysql_connect($this->host, $this->user, $this->pswd)) {
            //tenta consulta no banco
            if (mysql_select_db($this->dtbs, $conn)) {
                if ($result = mysql_query($string, $conn)) {
                    $obj = array();
                   while($row = mysql_fetch_array($result)) {
                      $obj[] = $row;
                    }
                    return $obj;
                } else {
                    return mysql_error();
                }
            } else {
                return FALSE;
            }
        } else {
            return FALSE;
        }
    }
    
    /*
     * Exemplo de utilização:
     * $db = new Database();
     * echo '<pre>';
     * var_dump($db->consulta_aonde('tb_newsletter',array('nome'=>'maria','email'=>'maria@gmail.com')));
     */
    public function consulta_aonde($tb_name = null, $array_where = null){
        
        if(isset($tb_name) && isset($array_where)){
            
            $str = 'SELECT * FROM '.trim($tb_name).' WHERE ';
            $arr_control = 0;
            foreach($array_where as $chave => $valor){
                if($arr_control++ != 0){
                    $str .= ' AND ';
                }
               $str .= ''.$chave.' = \''.$valor.'\'';
            }
            //return $str;die();
            return $this->consulta($str);
            
        }else{
            return FALSE;
        }
    }
    
    

}

?>