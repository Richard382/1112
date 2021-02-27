<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct() {
        parent::__construct();
		$this->load->model("home_model");
    }

	public function index()
	{
		$this->load->view('index');
	}

	public function newGame()
	{
		$data['random_word_en'][] = $this->home_model->getRandomWords("en");
		$data['random_word_de'][] = $this->home_model->getRandomWords("de");
		$data['sentence_by_word'][] = $this->home_model->getSentenceByWord();
		$data['sentence_by_sentence'][] = $this->home_model->getBySentence();
		$this->load->view('game', $data);
	}

	function createDb($data)
	{
		$rows = $this->home_model->dbSetFromCSV($data);
	}

	function saveOption2()
	{
		$postdata = $this->input->post('option2');
		$this->home_model->saveOption2($postdata);
		return ;
	}

	function saveOption3()
	{
		$postdata = $this->input->post('postdata');
		$result = $this->home_model->saveOption3($postdata);
		echo $result[0]->id;
		return ;
	}

	function removeOption3() 
	{
		$data = $this->input->post('postdata');
		$this->home_model->removeOption3($data);
		return;
	}

	function removeOption2()
	{
		$data = $this->input->post('postdata');
		$this->home_model->removeOption2($data);
		return;
	}

	function addoption2()
	{
		$data = $this->input->post('postdata');
		$result = $this->home_model->addOption2($data);
		echo $result[0]->id;
		return;
	}
	
	function addoption3()
	{
		$data = $this->input->post('postdata');
		$result = $this->home_model->addOption3($data);
		echo $result[0]->id;
		return;
	}
}
