<?php

abstract class Model_Base_Episodios extends \MaikDatabase\BaseModel {

    public function initTableDefinitions(){
        $this->setTable("episodios");

        $this->addColum("id",[
            "primary" => true,
            "auto_increment" => true,
            "default" => null
        ]);
        $this->addColum("title",[
            "primary" => false,
            "auto_increment" => false,
            "default" => null
        ]);
        $this->addColum("description",[
            "primary" => false,
            "auto_increment" => false,
            "default" => null
        ]);
        $this->addColum("youtube",[
            "primary" => false,
            "auto_increment" => false,
            "default" => null
        ]);
        $this->addColum("avaliacaoTotal",[
            "primary" => false,
            "auto_increment" => false,
            "default" => null
        ]);
        $this->addColum("avaliacao",[
            "primary" => false,
            "auto_increment" => false,
            "default" => null
        ]);
        $this->addColum("views",[
            "primary" => false,
            "auto_increment" => false,
            "default" => null
        ]);
        $this->addColum("date",[
            "primary" => false,
            "auto_increment" => false,
            "default" => null
        ]);
        $this->addColum("img",[
            "primary" => false,
            "auto_increment" => false,
            "default" => null
        ]);


    }

    public function setupTable(){

    }

}