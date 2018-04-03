<?php

//Consultar
$Model =  Model_Episodios::init_instance();
$pager = $Model->find([
	"orderby" => "DESC",
	"ordercol" => "id",
	"pagination" => [
		"per_page" => 15,
		"page" => $Page ? $Page : 1
	]
]);

$data['Pager'] = $Model->getPagination();
$data['Results'] = $pager;


//Inserir
$Model = new Model_Episodios();
$Model->title = $Nome->toString();
$Model->description = $Texto->toString();
$Model->youtube = $Url->toString();
$Model->date = date("c");
$Model->img = $ImgSend;
$Model->save();

//Editar
$id = 1;
$table = Model_Episodios::init_instance();
$Model = $table->findOneById($id);
$Model->title = $Nome->toString();
$Model->description = $Texto->toString();
$Model->youtube = $Url->toString();
$Model->img = $ImgSend;
$Model->save();	

//Remover   
$id = 1;
$table = Model_Episodios::init_instance();
$model = $table->findOneById($id);
$model->remove();
