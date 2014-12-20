<?php

class View {
        public function __construct(){
              
        }
	public function render($path,$data = false, $error = false){
		require "views/$path.phtml";
	}

	public function rendertemplate($path,$data = false){
		require "templates/".Session::get('template')."/$path.phtml";
	}
	
}