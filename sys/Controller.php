<?php
abstract class Controller{
	public $layout = "layout";
	public $data = null;
	public function loadView($file,$view,$data=array()){
		$this->data = $data;		
		if($this->layout){
			ob_start();
			require "app/views/{$this->layout}.php";
			$content = ob_get_clean();
		}
		ob_start();
		require "app/views/{$file}/{$view}.php";
		$contentView = ob_get_clean();
		echo str_replace("[VIEW]",$contentView,$content);
	}
}