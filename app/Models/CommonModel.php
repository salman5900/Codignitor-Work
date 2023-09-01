<?php

namespace App\Models;

use CodeIgniter\Model;

class CommonModel extends Model
{
    public function selectQuery()
    {
        $builder = $this->db->table("sheet1");
        $builder->select("firstname,lastname,address,phonenumber");
        //$builder-> where("key", "1213");
        $result = $builder->get();
        echo $this->db->getLastQuery();

        return $result->getResult();

        // "SELECT * FROM sheet1 WHERE key = '1213'";

    }
}