<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Contact extends Controller {

	public function action_index()
	{
		$contact['headtitle'] = 'Contact Page!';
		$contact['content'] = 'This is contact page content.';
		$header['title'] = 'Contact Page :: Index';
		$footer = NULL;
		$contact['header'] = View::factory('header', $header)->render();
		$contact['footer'] = View::factory('footer', $footer)->render();
		$view = View::factory('pages/contact', $contact);
		
		$this->response->body($view->render());
	}
	
	public function action_info()
	{
		$id = $this->request->param('id', NULL);
		$this->response->body('Contact info: '.$id);
	}
	

}