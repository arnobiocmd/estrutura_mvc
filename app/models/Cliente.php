<?php
namespace app\models;
namespace app\models;
use app\core\Model;

class Cliente extends Model{

    public function __construct()
    {
        parent::__construct();
    }

    public function lista(){
        $sql = "SELECT * FROM usuarios";
        $qry = $this->db->query($sql);
        return $qry->fetchAll(\PDO::FETCH_OBJ);
    }
}