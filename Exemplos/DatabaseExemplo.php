<?php

class Database {

    public function __construct()
    {
        $database = new stdClass();
        $database->hostname = "localhost";
        $database->database = "database";
        $database->username = "root";
        $database->password = "mysql";

        $database->generate = false;
        $database->generate_dir = APPPATH.'models_base';
        \MaikDatabase\Settings::getInstance()->createConnection($database, true, "frame_work");
    }

}