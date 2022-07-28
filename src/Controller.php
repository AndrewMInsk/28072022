<?php


    namespace src;


    class Controller
    {
        private $view;
        private $conn;
        public function __construct()
        {
            $this->view = new \src\View();
            $this->conn = new \mysqli('localhost:3307', 'root', '', 'humans');
            if ($this->conn->connect_error) {
                die('Connection failed: ' . $this->conn->connect_error);
            }

//            $sql = "INSERT INTO humans (name, surname) VALUES
//            ('Sam', 41),
//            ('Bob', 29),
//            ('Alice', 32)";
//            if($conn->query($sql)){
//                echo "Данные успешно добавлены";
//            } else{
//                echo "Ошибка: " . $conn->error;
//            }

        }
        function __destruct() {
            $this->conn->close();
        }
        public function index(){
            $this->view->generate('index.php', ['action'=>'index']);
        }
        public function delete(){
            $this->view->generate('index.php', ['action'=>'delete', 'data' => $_REQUEST]);
        }
    }