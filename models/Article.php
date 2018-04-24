<?php
/**
 * Class Article
 *
 */

class Article
{

    private $dbhost = '127.0.0.1:3306';
    private $dbname = 'crud';
    private $dblogin = 'root';
    private $dbpass = 'root';
    public $pdo;

    /**
     * @return PDO
     *
     */
    private function connect()
    {

        try {
            $pdo = new PDO("mysql:host=$this->dbhost;dbname=$this->dbname", $this->dblogin, $this->dbpass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            exit($e->getMessage());
        }

        return $pdo;
    }

    /**
     * @return array
     *
     */
    public function showAll()
    {

        $conn = $this->connect();

        $sql = "SELECT * FROM `article` ORDER BY `created_at` DESC";
        $res = $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);

        return $res;
    }

    /**
     * @param $name
     * @param $description
     *
     */
    public function create($name, $description)
    {

        $conn = $this->connect();

        $sql = "INSERT INTO `article` VALUES(NULL, '$name', '$description', NOW())";
        $conn->exec($sql);
    }

    /**
     * @param $id
     * @param bool $name
     * @param bool $description
     * @return mixed|void
     *
     */
    public function update($id, $name = false, $description = false)
    {

        $conn = $this->connect();
        $sql = "SELECT * FROM `article` WHERE `id` = $id";
        $sql2 = "UPDATE `article` SET `name` = '$name', `description` = '$description', `created_at` = NOW() WHERE `id` = $id";
        if ($id && $name && $description) {
            $conn->exec($sql2);
            return;
        }
        if ($id && !$name && !$description) {
            return $conn->query($sql)->fetch();
        }
    }

    /**
     * @param $id
     *
     */
    public function delete($id)
    {

        $conn = $this->connect();
        $sql = "DELETE FROM `article` WHERE `id` = $id";
        $conn->exec($sql);
    }
}