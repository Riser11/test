<?php

class NewsController extends Zend_Controller_Action
{

    public function init()
    {
        $this->db = Zend_Db_Table::getDefaultAdapter();
    }

    public function indexAction()
    {
          $news = $this->db->query('SELECT * FROM news')->fetchAll();

		

		/*
		foreach($this->view->news as $value){
			$this->view->jsonNews=json_encode(array("$counter"=>$value));
				$counter++;
		}*/
		
	$this->view->jsonNews =	json_encode($news);
	   //  $a=$this->_helper->json($news);
	
    }


}

