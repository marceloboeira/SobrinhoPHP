<?php if ( ! defined('BASEPATH')) die('Acesso nao permitido :)');



/* Classe para operações com banco de dados */
Class BancoDeDados {


    private $host;
    private $banco;
    private $usuario;
    private $senha;

    /*
     * Método mágico __construct();
     */
    public function __construct(){
        //define váriaveis globais da classe
        $this->host    = $config['banco']['host'];    //host | padrão 'localhost'
        $this->banco   = $config['banco']['banco'];   //banaco de dados | nome do banco
        $this->usuario = $config['banco']['usuario']; //usuário banco de dados mysql
        $this->senha   = $config['banco']['senha'];   //senha do banco, se não houver senha deixar string vazia
    }



    /*
     * Função conecta(); inicia uma conexão com o banco de dados
     */
    public function conecta(){
        //tenta conexão com mysql
        if ($conn = mysql_connect($this->host,
                                  $this->usuario,
                                  $this->senha)){
            //tenta conexão com banco
            if (mysql_select_db($this->banco, $conn)) {
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
        if ($conn = mysql_connect($this->host, $this->usuario, $this->senha)) {
            //tenta consulta no banco
            if (mysql_select_db($this->banco, $conn)) {
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

    
    /*
     * Função insere();
     * exemplo: $this->insere('tabela_x',array('nome'=>'joao','email'=>'joao@joao.com','idade'=>20));
     */
    public function insere($tabela = null, $arr_dados = null){
        if(isset($tabela) && isset($arr_dados)){

            if(!@$this->conecta()){
                return FALSE;
                die();
            }
            $str = 'INSERT INTO '.$tabela.' (';
            $count_key = 0;
            foreach($arr_dados as $key => $value){
                if($count_key++ != 0){
                    $str .= ', ';
                }
                $str .= ''.$key.'';
            }
            $str .= ') VALUES (';
            $count_val = 0;
            foreach($arr_dados as $key => $value){
                if($count_val++ != 0){
                    $str .= ', ';
                }
                $str .= '\''.$value.'\'';
            }
            $str .= ')';
            if(@mysql_query($str)){
                return TRUE;
            }else{
                return FALSE;
            }
        }else{
            return FALSE;
        }
    }

}

?>
