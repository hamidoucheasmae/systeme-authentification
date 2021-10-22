<?php
    class USER {
        public $id;
        public $username;
        public $email;
        public $password;

        function get_id() {
            return $this->id;
          }

        function get_username() {
            return $this->username;
          }

        function get_email() {
            return $this->email;
          }

        function get_password() {
            return $this->password;
          }


    }

    class POST {
      public $id;
      public $title;
      public $content;
      public $date;
      public $id_user;

    }


?>