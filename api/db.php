<?php
date_default_timezone_set("Asia/Taipei");
session_start();
function to($url)
{
    header("location:$url");
}
function dd($ary)
{
    echo "<pre>";
    print_r($ary);
    echo "</pre>";
}
class DB
{
    protected $table;
    protected $dsn = "mysql:host=localhost;charset=utf8;dbname=db01";
    protected $pdo;
    function __construct($table)
    {
        $this->table = $table;
        $this->pdo = new PDO($this->dsn, 'root', '');
    }
    private function a2s($ary)
    {
        foreach ($ary as $col => $val) {
            $tmp[] = "`$col`='$val'";
        }
        return $tmp;
    }
    private function sql_all($sql, $where = "", $other = "")
    {
        if (is_array($where)) {
            $sql .= " where " . join(" && ", $this->a2s($where));
        } else {
            $sql .= " $where ";
        }
        $sql .= " $other ";
        return $sql;
    }
    private function math($math, $col, $where = "", $other = "")
    {
        $sql = "select $math(`$col`) from `$this->table` ";
        $sql = $this->sql_all($sql, $where, $other);
        return $this->pdo->query($sql)->fetchColumn();
    }
    function sum($col, $where = "", $other = "")
    {
        return $this->math("sum", $col, $where, $other);
    }
    function min($col, $where = "", $other = "")
    {
        return $this->math("min", $col, $where, $other);
    }
    function max($col, $where = "", $other = "")
    {
        return $this->math("max", $col, $where, $other);
    }
    function count($where = "", $other = "")
    {
        $sql = "select count(*) from `$this->table` ";
        $sql = $this->sql_all($sql, $where, $other);
        return $this->pdo->query($sql)->fetchColumn();
    }
    function all($where = "", $other = "")
    {
        $sql = "select * from `$this->table` ";
        $sql = $this->sql_all($sql, $where, $other);
        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
    function save($ary)
    {
        if (isset($ary['id'])) {
            $sql = "update `$this->table` set ";
            $sql .= join(",", $this->a2s($ary));
            $sql .= " where `id`='{$ary['id']}'";
        } else {
            $sql = "insert into `$this->table` ";
            $col = "(`" . join("`,`", array_keys($ary)) . "`)";
            $val = "('" . join("','", $ary) . "')";
            $sql .= "{$col} values {$val}";
        }
        return $this->pdo->exec($sql);
    }
    function del($id)
    {
        $sql = "delete from `$this->table` where ";
        if (is_array($id)) {
            $sql .= join(" && ", $this->a2s($id));
        } elseif (is_numeric($id)) {
            $sql .= "`id`='$id'";
        }
        return $this->pdo->exec($sql);
    }
    function find($id)
    {
        $sql = "select * from `$this->table` where ";
        if (is_array($id)) {
            $sql .= join(" && ", $this->a2s($id));
        } elseif (is_numeric($id)) {
            $sql .= "`id`='$id'";
        }
        return $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    }
    function pages($div, $now, $where = "", $other = "")
    {
        $total = $this->count($where, $other);
        $tmp['pages'] = ceil($total / $div);
        $tmp['start'] = ($now - 1) * $div;
        $tmp['next'] = ($now < $tmp['pages']) ? $now + 1 : $now;
        $tmp['prev'] = ($now > 1) ? $now - 1 : $now;
        return $tmp;
    }
}
$Ad = new DB('ad');
$Admin = new DB('admin');
$Bottom = new DB('bottom');
$Image = new DB('image');
$Menu = new DB('menu');
$Mvim = new DB('mvim');
$News = new DB('news');
$Total = new DB('total');
$Title = new DB('title');

if (isset($_GET['do'])) {
    if (isset(${ucfirst($_GET['do'])})) {
        $do = $_GET['do'];
        $DB = ${ucfirst($do)};
    }
}

if (!isset($_SESSION['visited'])) {
    $_SESSION['visited'] = 1;
    if ($Total->count() == 0) {
        $Total->save(['total' => 1]);
    } else {
        $total = $Total->find(1);
        $total['total']++;
        $Total->save($total);
    }
}
