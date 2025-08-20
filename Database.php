<?php 

class Database{

    public $connected;
    public $stat;

    public function __construct($cof,$username='project',$password='project')
    {
        $dns = 'mysql:' . http_build_query($cof,'',';') ;
        $this->connected = new PDO($dns,$username,$password,[
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function qurey($string,$param=[]){
        $this->stat=$this->connected->prepare($string);
        $this->stat->execute($param);
        return $this;
    }

    public function fetchAll(){
        return $this->stat->fetchAll();
    }

    public function fetch(){
        return $this->stat->fetch();
    }

    public function FindOrFail(){

        $result = $this->fetch();

        if(! $result){
            abort();
        }

        return $result;
    }
}



?>