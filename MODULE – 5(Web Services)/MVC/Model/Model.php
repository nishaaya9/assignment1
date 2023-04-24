<?php
class Model
{
    public $connection;
    public function __construct()
    {
        $this->connection = new mysqli("localhost", "root", "", "mvc2");
    }
    public function insert($table, $insertarray)
    {
        $keys = array_keys($insertarray);
        $keystr = implode(",", $keys);
        $values = array_values($insertarray);
        $valstr = implode("','", $values);
        $q = "insert into $table($keystr)values('$valstr')";
        if ($this->connection->query($q)) {
            return true;
        } else {
            return false;
        }
    }
    public function select($table)
    {
        $q = "select * from $table";
        $res = $this->connection->query($q);
        while ($row = $res->fetch_object()) {
            $result[] = $row;
        }
        return $result ?? [];
    }
    public function select_where($table, $where)
    {
        $query = "select * from $table where 1=1";
        foreach ($where as $key => $value) {
            $query .= " and " . $key . " = '" . $value . " ' ";
        }
        $req = $this->connection->query($query);
        while ($row = $req->fetch_object()) {
            $result[] = $row;
        }
        return $result ?? [];
    }
    public function update_data($table, $data, $where)
    {
        $query = "update $table set ";
        $count = count($data);
        $i = 0;
        foreach ($data as $key => $val) {
            if ($i < $count - 1) {
                $query .= " " . $key . " = '" . $val . "',";
            } else {
                $query .= " " . $key . " = '" . $val . "'";
            }

            $i++;
        }
        $query .= " where 1=1 ";
        foreach ($where as $key => $value) {
            $query .= " and " . $key . " = '" . $value . " ' ";
        }

        if ($this->connection->query($query)) {
            return true;
        } else {
            return false;
        }
    }
    public function delete_data($table, $where)
    {
        $q = "delete from $table where 1=1";
        foreach ($where as $key => $value) {
            $q .= " and " . $key . "='" . $value . "'";
        }
        if ($this->connection->query($q)) {
            return true;
        } else {
            return false;
        }
    }

}
?>