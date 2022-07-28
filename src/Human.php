<?php


    namespace src;

    class Human
    {
        private $id;
        private $name;
        private $surname;
        private $dateOfBirth;
        private $sex;
        private $city;

        /**
         * @return mixed
         */
        public function getId(): int
        {
            return $this->id;
        }

        /**
         * @param mixed $id
         */
        public function setId($id)
        {
            $this->id = $id;
        }

        /**
         * @return mixed
         */
        public function getName(): string
        {
            return $this->name;
        }

        /**
         * @param mixed $name
         */
        public function setName($name)
        {
            $this->name = $name;
        }

        /**
         * @return mixed
         */
        public function getSurname(): string
        {
            return $this->surname;
        }

        /**
         * @param mixed $surname
         */
        public function setSurname($surname)
        {
            $this->surname = $surname;
        }

        /**
         * @return mixed
         */
        public function getDateOfBirth(): string
        {
            return $this->dateOfBirth;
        }

        /**
         * @param mixed $dateOfBirth
         */
        public function setDateOfBirth($dateOfBirth)
        {
            $this->dateOfBirth = $dateOfBirth;
        }

        /**
         * @return mixed
         */
        public function getSex(): int
        {
            return $this->sex;
        }

        /**
         * @param mixed $sex
         */
        public function setSex($sex)
        {
            $this->sex = $sex;
        }

        /**
         * @return mixed
         */
        public function getCity(): string
        {
            return $this->city;
        }

        /**
         * @param mixed $city
         */
        public function setCity($city)
        {
            $this->city = $city;
        }

        function __construct()
        {
        }

        public function create()
        {
            $conn = (new Database('humans'))->getConn();
            $stmt = $conn->prepare("INSERT INTO humans VALUES ('', ?,  ?,  ?,  ?,  ?)");
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $sex = $_POST['sex'];
            $date_of_birth = $_POST['date_of_birth'];
            $city = $_POST['city'];
            $stmt->bind_param('ssiss', $name, $surname, $sex, $date_of_birth, $city);
            $stmt->execute();

            if ($conn->affected_rows) {
                return true;
            }
            return false;
        }

        public function save($id)
        {
            $conn = (new Database('humans'))->getConn();
            $stmt = $conn->prepare("UPDATE humans SET name = ?, surname = ?, sex = ?, date_of_birth = ?, city_of_birth = ?  WHERE  id = $id");
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $sex = $_POST['sex'];
            $date_of_birth = $_POST['date_of_birth'];
            $city = $_POST['city'];
            $stmt->bind_param('ssiss', $name, $surname, $sex, $date_of_birth, $city);
            $stmt->execute();
            if ($conn->affected_rows) {
                return true;
            }
            return false;
        }

        public static function getList()
        {
            $conn = (new Database('humans'))->getConn();
            $sql = "SELECT * FROM humans";
            $result = $conn->query($sql);
            $list = [];
            while ($row = mysqli_fetch_array($result)) {
                $model = new Human();
                $model->setCity($row['city_of_birth']);
                $model->setDateOfBirth($row['date_of_birth']);
                $model->setId($row['id']);
                $model->setName($row['name']);
                $model->setSurname($row['surname']);
                $model->setSex($row['sex']);
                $list[] = $model;
            }
            return $list;
        }

        public static function delete($id)
        {
            $conn = (new Database('humans'))->getConn();
            $sql = "DELETE FROM humans WHERE id = $id";
            $conn->query($sql);
            if ($conn->affected_rows) {
                return true;
            }
            return false;
        }

        public static function findById($id)
        {
            $conn = (new Database('humans'))->getConn();
            $sql = "SELECT * FROM humans WHERE id = $id";
            $result = $conn->query($sql);
            $row = mysqli_fetch_array($result);

            $model = new Human();
            $model->setCity($row['city_of_birth']);
            $model->setDateOfBirth($row['date_of_birth']);
            $model->setId($row['id']);
            $model->setName($row['name']);
            $model->setSurname($row['surname']);
            $model->setSex($row['sex']);
            return $model;
        }

        public static function getTextSex($sex){
            switch ($sex){
                case 0: return 'Man';
                case 1: return 'Woman';
                default: return 'Other';
            }
        }
        public static function getFullAge($date){
            $birthday_timestamp = strtotime($date);
            $age = date('Y') - date('Y', $birthday_timestamp);
            if (date('md', $birthday_timestamp) > date('md')) {
                $age--;
            }
            return $age;
        }
    }