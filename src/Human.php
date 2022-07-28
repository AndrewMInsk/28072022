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
            echo 'construct Class1 <br>';
        }

        public function save()
        {
            echo 'save this';
        }
    }