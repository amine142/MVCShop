<?php

class Controller 
{
	protected $_view;

	public function __construct()
        {
		$this->_view = new view();
	}

	//fonction de chargement du modèle pour la requête
	public function loadModel($name)
        {

		$modelpath = strtolower('models/'.$name.'.php');

		//try to load and instantiate model		
		if(file_exists($modelpath)){
			
			require $modelpath;

			//break name into sections based on a / 
			$parts = explode('/',$name);

			//use last part of array
			$modelName = ucwords(end($parts));

			//instantiate object
			$model = new $modelName();

		} else {
			$this->_error("Model does not exist: ".$modelpath);
			return false;
		}

		//return object to controller
		return $model;

	}

}
