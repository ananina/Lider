<?php
require_once 'db_mysql.php';

class model{
    private static $instance;

    public static function GetInstance(){
        if(self::$instance == null){
            self::$instance = new model();
        }

        return self::$instance;
    }

    public function get_all($table, $keySort='', $methodSort='')
    {
        if($keySort!='' && $methodSort!=''){
            $q = 'SELECT * FROM `' . $table . '` ORDER BY `' . $keySort . '` ' . $methodSort . '';
        }else{
            $q = 'SELECT * FROM `' . $table . '`';
        }

        $db_mysql = dbMYSQL::GetInstance();
        $all = $db_mysql->select($q);

        return $all;
    }

    public function add($table, $params)
    {
        $db_mysql = dbMYSQL::GetInstance();
        $id = $db_mysql->insert($table, $params);
        return $id;
    }

    public function delete($table, $idName, $id)
    {
        $db_mysql = dbMYSQL::GetInstance();
        $rows = $db_mysql->delete($table, "$idName=$id");
        return $rows;
    }

    public function edit($table, $idName, $id, array $params)
    {
        $db_mysql = dbMYSQL::GetInstance();
        $rows = $db_mysql->update($table, $params, "$idName=$id");
        return $rows;
    }

    public function select($table, $idName, $id)
    {
        $q = 'SELECT * FROM `' . $table . '` WHERE `' . $idName . '`='.$id.'';

        $db_mysql = dbMYSQL::GetInstance();
        $mass = $db_mysql->select($q);
        return $mass[0];
    }

    public function selectJoin($table1, $table2, $idName1, $idName2, $joinType)
    {
        if($joinType == 'leftJoin'){
            $q = 'SELECT * FROM `' . $table1 . '` LEFT JOIN `' . $table1 . '` ON `' . $table1 . '`.`' . $idName1 . '`=`' . $table2 . '`.`' . $idName2 . '';
        };

        $db_mysql = dbMYSQL::GetInstance();
        $mass = $db_mysql->select($q);
        return $mass;
    }
    public function leftjoin($q)
    {
        $db_mysql = dbMYSQL::GetInstance();
        $mass = $db_mysql->select($q);
        return $mass;
    }
}

class model_some extends model
{
    private static $instance;

    public static function GetInstance()
    {
        if (self::$instance == null) {
            self::$instance = new model_some();
        }

        return self::$instance;
    }

    public function select_some($table, $idName, $id)
    {
        $q = 'SELECT * FROM `' . $table . '` WHERE `' . $idName . '`='.$id.'';

        $db_mysql = dbMYSQL::GetInstance();
        $mass = $db_mysql->select($q);
        return $mass;
    }

    public function edit_some($table, $idName1, $id1, $idName2, $id2, array $params)
    {
        $db_mysql = dbMYSQL::GetInstance();
        $rows = $db_mysql->update($table, $params, "$idName1=$id1 AND $idName2=$id2");
        return $rows;
    }
}