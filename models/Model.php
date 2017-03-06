<?php
class Model
{
    public static $table;

    public static function all()
    {
        $db   = Db::getInstance();
        $list = [];
        $req  = $db->query('SELECT * FROM ' . static::$table);

        return $req;
    }

    public static function store($props)
    {
        $db  = Db::getInstance();
        $sql = "INSERT INTO " . static::$table . "(";
        foreach ($props as $key => $value) {
            $sql .= $key . ' ,';
        }
        $sql = trim($sql, ',');
        $sql .= ")  VALUES (";
        foreach ($props as $key => $value) {
            $sql .= ' \' ' . $value . ' \',';
        }
        $sql = trim($sql, ',');
        $sql .= ')';
        $req = $db->prepare($sql);
        $req->execute();
        $isInserted = $req->rowCount();
        if ($isInserted > 0) {
            $objectResult = static::find($db->lastInsertId());
        } else {
            $objectResult = null;
        }
        return $objectResult;
    }

    public static function find($id)
    {
        $id  = intval($id);
        $db  = Db::getInstance();
        $req = $db->prepare('SELECT * FROM ' . static::$table . ' WHERE id = :id');
        $req->execute(array('id' => $id));
        $objectResult = $req->fetch();

        return $objectResult;
    }

    public static function update($id, $props)
    {
        $db  = Db::getInstance();
        $sql = "UPDATE " . static::$table . " SET ";

        foreach ($props as $key => $value) {
            if ($value !== '') {
                $sql .= $key . "='" . $value . "',";
            }

        }

        $sql = rtrim($sql, ",");

        $sql .= ' WHERE id = :id';

        $req = $db->prepare($sql);
        $req->execute(array('id' => $id));
        $isUpdated = $req->rowCount();
        if ($isUpdated > 0) {
            $objectResult = static::find($id);
        } else {
            $objectResult = null;
        }
        return $objectResult;
    }

    public static function destroy($id)
    {
        $db        = Db::getInstance();
        $isDeleted = false;
        $id        = intval($id);
        $req       = $db->prepare('DELETE FROM ' . static::$table . ' WHERE id = :id');
        // the query was prepared, now we replace :id with our actual $id value
        $req->execute(array('id' => $id));
        if ($req->execute(array('id' => $id))) {
            $isDeleted = true;
        }
        return $isDeleted;
    }

    public static function count()
    {
        $db    = Db::getInstance();
        $count = $db->query('SELECT COUNT(id) FROM ' . static::$table)->fetchColumn();
        return $count;
    }

    public static function pagnitate($limit)
    {
        $db    = Db::getInstance();
        if (isset($_GET["page"])) {
            $start = ($_GET["page"] - 1) * $limit;
        } else {
            $start = 0;

        }
        $req = $db->query('SELECT * FROM ' . static::$table . ' LIMIT '.$start.','. $limit);
        return $req;
    }

    public static function pagnitationCount($limit)
    {
        $total     = static::count();
        $totalPage = ceil($total / $limit);
        return $totalPage;
    }
}
