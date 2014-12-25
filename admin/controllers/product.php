<?php

class Product extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {

        $data['title'] = 'Product';

        $this->_view->rendertemplate('header', $data);
        $this->_view->datas= $data;
        $this->_view->render('product/product', $data);
        $this->_view->rendertemplate('footer', $data);
    }

}
