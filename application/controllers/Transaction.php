<?php
class Transaction extends CI_Controller {


  public function index($ISIN = NULL)
  {
    $data = [];
    $this->load->view('templates/header', $data);
    $this->load->view('transaction',$data);
    $this->load->view('templates/footer');
  }

  public function submit()
	{
  //get form field
    $data['amount'] = $this->input->post('amount');
    $this->load->view('templates/header', $data);
    $this->load->view('thankYou',$data);
    $this->load->view('templates/footer');
  
  }
}
?>