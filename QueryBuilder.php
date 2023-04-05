<?php

class QueryBuilder {

    private $db;

    public function __construct($db){
        $this->db = $db;
    }

    public function selectAll($table, $class){
        $sql = "SELECT * from {$table}";
        $query = $this->db->prepare($sql);
        $query->execute();
        $todos=$query->fetchAll(PDO::FETCH_CLASS,$class);

        return $todos;
    }
}