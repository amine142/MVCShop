<?php

class Controller {

    protected $_view;

    public function __construct() {
        $this->_view = new view();
    }

    //fonction de chargement du modèle pour la requête
    public function loadModel($name, $dir) {

        $modelpath = strtolower("models\\" . $name . '.php');
        //try to load and instantiate model		
        try {
            require $dir.$modelpath;

            //break name into sections based on a / 
            $parts = explode('/', $name);

            //use last part of array
            $modelName = ucwords(end($parts));

            //instantiate object
            $model = new $modelName();
            return $model;
        }
        catch (Exception $e) {
            echo 'Exception reçue : ', $e->getMessage(), "\n";
        }

        //return object to controller
    }

}
