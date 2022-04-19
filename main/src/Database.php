<?php

/**
 * Database
 */
class Database
{
    protected static $instance = null;
    protected $connection;
    protected $result;

    public function __construct()
    {
    }

    public function connect()
    {
        if ($this->connection && $this->connection->connect_errno === 0) {
            return $this->connection;
        }

        $this->connection = new mysqli(
            MYSQL_HOST,
            MYSQL_USERNAME,
            MYSQL_PASSWORD,
            MYSQL_DATABASE,
            MYSQL_PORT
        );

        // Connectie controleren.
        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }

        return $this->connection;
    }

    // Deze methode returnt this, dit is een techniek genaamd method chaining of fluent interface.
    // Meer hierover:
    // @see https://dev.to/mofiqul/fluent-interface-and-method-chaining-in-php-and-javascript-251c
    public function query($sql)
    {
        $this->result = $this->connect()->query($sql);

        if (!$this->result) {
            printf("Error message: <br>\n%s<br>\n%s<br>\n", $this->connection->error, $sql);
            die();
        }

        return $this;
    }

    public function asObject()
    {
        if ($this->result) {
            return $this->result->fetch_object();
        }
        return null;
    }

    public function asArray()
    {
        if ($this->result) {
            return $this->result->fetch_all(MYSQLI_ASSOC);
        }
        return [];
    }

    public static function instance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    public static function raw($sql)
    {
        return self::instance()->query($sql);
    }
}
