<?php

trait Model
{
    use Database;
    protected $limit = 5;
    protected $offset = 0;
    protected $order_type = "desc";
    protected $order_column = "id";

    public function getTable()
    {
        return $this->table;
    }

    public function getLimit()
    {
        return $this->limit;
    }

    public function getOffset()
    {
        return $this->offset;
    }

    public function getOrderType()
    {
        return $this->order_type;
    }

    public function getOrderColumn()
    {
        return $this->order_column;
    }

    public function dynamicJoin($joinTable, $currentTableColumn, $joinColumn)
    {
        $query = "SELECT * FROM $this->table";
        $query .= " INNER JOIN $joinTable ON $this->table.$currentTableColumn = $joinTable.$joinColumn";

        return $this->query($query);
    }

    public function dynamicMultiJoin($joins)
    {
        $query = "SELECT * FROM $this->table";

        foreach ($joins as $join) {
            $joinTable = $join['table'];
            $currentTableColumn = $join['currentTableColumn'];
            $joinColumn = $join['joinColumn'];

            $query .= " INNER JOIN $joinTable ON $this->table.$currentTableColumn = $joinTable.$joinColumn";
        }

        return $this->query($query);
    }

    public function findAll()
    {
        $query = "SELECT * FROM $this->table ";
        return $this->query($query);
    }
    public function getColomn()
    {
        $query = "SHOW COLUMNS FROM $this->table";
        $use = $this->query($query);
        $array = [];
        for ($i = 0; $i < count($use); $i++) {
            array_push($array, $use[$i]->Field);
        }
        return $array;

    }
    public function where($data)
    {
        $query = "SELECT * FROM $this->table WHERE ";
        $conditions = [];

        if (!empty($data)) {
            foreach ($data as $key => $value) {
                $conditions[] = "$key = :$key";
            }

            $query .= implode(" AND ", $conditions);
            return $this->query($query, $data);
        } else {
            return [];
        }
    }


    public function login($data)
    {
        $query = "SELECT * FROM $this->table WHERE email = :email ";
        $_SESSION['id'] = 5;
        return $this->query($query, $data);
    }


    public function first($data, $data_not = [])
    {
        $query = "SELECT * FROM $this->table WHERE ";
        $conditions = [];

        foreach ($data as $key => $value) {
            $conditions[] = "$key = :$key";
        }

        foreach ($data_not as $key => $value) {
            $conditions[] = "$key != :$key";
        }

        $query .= implode(" AND ", $conditions);

        if ($this->limit !== null && $this->offset !== null) {
            $query .= " LIMIT :limit OFFSET :offset ";
        }

        $mergedData = array_merge($data, $data_not);

        $mergedData['limit'] = $this->limit;
        $mergedData['offset'] = $this->offset;

        $result = $this->query($query, $mergedData);

        if ($result) {
            return $result[0];
        } else {
            return false;
        }
    }



    public function insert($data = [])
    {
        $colum = $this->getColomn();

        if (count($colum) !== count($data)) {
            die("Number of columns does not match number of values");
        }

        $columns = implode(", ", $colum);
        $placeholders = ":" . implode(", :", $colum);
        $query = "INSERT INTO $this->table ($columns) VALUES ($placeholders)";

        try {
            $this->query($query, $data);
            return true;
        } catch (PDOException $e) {
            die("Insert failed: " . $e->getMessage());
        }
    }



    public function update($id, $data, $id_column = 'id')
    {
        $keys = array_keys($data);
        $query = "UPDATE $this->table SET ";

        foreach ($keys as $key) {
            $query .= "`$key` = :$key, ";
        }

        $query = rtrim($query, ', ');

        $query .= " WHERE `$id_column` = :$id_column ";

        $data[$id_column] = $id;

        try {
            $this->query($query, $data);
            return true; 
        } catch (PDOException $e) {
            die("Update failed: " . $e->getMessage());
        }
    }

    public function delete($id_column, $id = 'id')
    {
        $data[$id] = $id_column;
        $query = "DELETE FROM $this->table WHERE $id = :$id ";

        try {
            $this->query($query, $data);
            return true;
        } catch (PDOException $e) {
            die("Delete failed: " . $e->getMessage());
        }
    }
    public function de()
    {
        echo "hhhhh";
    }



}

?>