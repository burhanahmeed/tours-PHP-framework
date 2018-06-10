<?php

class Loader{

	public function helper($help){
		include HELPER_PATH."{$help}_helper.php";
	}

	public function library($lib){
		include LIB_PATH."$lib.class.php";
	}

	public function view($view) {
		include VIEW_PATH."$view.view.php";
	}
}