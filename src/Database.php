<?php


    namespace src;


    class Database
    {
        private $conn;

        public function __construct($table)
        {
            $this->conn = new \mysqli('localhost:3307', 'root', '', $table);
            if ($this->conn->connect_error) {
                die('Connection failed: ' . $this->conn->connect_error);
            }
        }

        /**
         * @return \mysqli
         */
        public function getConn(): \mysqli
        {
            return $this->conn;
        }

    }