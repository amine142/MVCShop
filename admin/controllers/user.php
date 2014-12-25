<?php

class User extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['title'] = 'Bienvenue';
        $this->_view->rendertemplate('header', $data);
        $this->_view->render('user/index', $data);
        $this->_view->rendertemplate('footer', $data);
    }

    public function login() {
        $data['title'] = 'Bienvenue';
        $this->_view->render('user/login', $data);
        $login_model = $this->loadModel('Login', __dir__ . '\\..\\..\\');
        $login_successful = $login_model->login();
//        if ($login_successful) {
//            header('location: ' . URL . 'dashboard/index');
//        }
//        else {
//            header('location: ' . URL . 'user/index');
//        }
    }

}
