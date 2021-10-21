<?php
    class USER {
        public $id;
        public $username;
        public $email;
        public $password;

        // function __construct($id,$username,$email,$password) {
        //     $this->id = $id;
        //     $this->username = $username;
        //     $this->email = $email;
        //     $this->password = $password;

        // }

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