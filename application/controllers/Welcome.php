<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$sql = "SELECT * FROM t_chat_caregory";
		$data['query'] = $this->db->query($sql)->result();
		$this->load->view('template/index',$data);

	}

	public function add()
	{	
		$this->load->view('template/add');
	}

	public function edit($ID)
	{	$sql = "SELECT * FROM t_chat_caregory WHERE CAT_ID =".$ID;
		$data['query'] = $this->db->query($sql)->result();
		$this->load->view('template/edit',$data);
	}

	public function key($ID)
	{	$sql = "SELECT * FROM t_chat_keyword WHERE CAT_ID =".$ID;
		$data['query'] = $this->db->query($sql)->result();
		$data['title'] = $ID;
		$this->load->view('template/keyword',$data);
	}

	public function insert()
	{   
		$DESCR_THA = $this->input->post('titleTHA');
		$DESCR_ENG = $this->input->post('titleENG');
		$ANS_TYPE = $this->input->post('type');
		$CATHEAD_ID = $this->input->post('parent');
		$ANS_THA = $this->input->post('th');
		$ANS_ENG = $this->input->post('eng');

		$this->db->set('DESCR_THA', $DESCR_THA);
		$this->db->set('DESCR_ENG', $DESCR_ENG);
		$this->db->set('ANS_TYPE', $ANS_TYPE);
		$this->db->set('CATHEAD_ID', $CATHEAD_ID);
		$this->db->set('ANS_THA', $ANS_THA);
		$this->db->set('ANS_ENG', $ANS_ENG);
		$this->db->insert('t_chat_caregory');

		$this->index();

	}

	public function update()
	{   $CAT_ID = $this->input->post('ID');
		$DESCR_THA = $this->input->post('titleTHA');
		$DESCR_ENG = $this->input->post('titleENG');
		$ANS_TYPE = $this->input->post('type');
		$CATHEAD_ID = $this->input->post('parent');
		$ANS_THA = $this->input->post('th');
		$ANS_ENG = $this->input->post('eng');

		$this->db->set('DESCR_THA', $DESCR_THA);
		$this->db->set('DESCR_ENG', $DESCR_ENG);
		$this->db->set('ANS_TYPE', $ANS_TYPE);
		$this->db->set('CATHEAD_ID', $CATHEAD_ID);
		$this->db->set('ANS_THA', $ANS_THA);
		$this->db->set('ANS_ENG', $ANS_ENG);
		$this->db->where('CAT_ID', $CAT_ID);
		$this->db->update('t_chat_caregory');

		$this->index();
	}

	public function addkeyword()
	{   
		$CAT_ID = $this->input->post('ID');
		$KEYWORD = $this->input->post('KEYWORD');

		$this->db->set('CAT_ID', $CAT_ID);
		$this->db->set('KEYWORD', $KEYWORD);
		$this->db->insert('t_chat_keyword');

		$this->key($CAT_ID);
	}

	public function test(){
		$this->index();
	}


}
