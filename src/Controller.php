<?php


    namespace src;
    //@TODO: validate date

    class Controller
    {
        private $view;

        public function __construct()
        {
            $this->view = new \src\View();
        }

        public function index()
        {
            $list = Human::getList();
            $this->view->generate('index.php', ['list' => $list]);
        }

        public function delete()
        {
            if (isset($_GET['id'])) {
                $result = Human::delete($_GET['id']);
            } else {
                exit('Not found');
            }
            $this->view->generate('delete.php', ['result' => $result]);
        }

        public function edit()
        {
            if (isset($_GET['id'])) {
                $model = Human::findById($_GET['id']);
            } else {
                exit('Not found');
            }
            $this->view->generate('edit.php', ['model' => $model]);
        }

        public function save()
        {
            if (isset($_GET['id'])) {
                $model = Human::findById($_GET['id']);
                $result = $model->save($_GET['id']);
            } else {
                exit('Not found');
            }
            $this->view->generate('save.php', ['result' => $result]);
        }
        public function new()
        {
            $result = false;
            if (isset($_POST['create'])) {
                $model = new Human();
                $result = $model->create();
            }
            $this->view->generate('new.php', ['result' => $result]);
        }
    }