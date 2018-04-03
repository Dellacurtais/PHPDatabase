<?php

class Model_Episodios extends Model_Base_Episodios{

    protected static $_instance;

    public static function init_instance(){
        if (is_null(self::$_instance)){
            self::$_instance = new static();
        }
        return self::$_instance;
    }

}