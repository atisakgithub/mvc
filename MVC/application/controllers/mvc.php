<?php
class mvc extends CI_Controller
{
public function index()
{
$this->load->model('m_model');
$this->m_model->setMessage("<br><br><br>Software Engineering <p> Atisak Chatcharoenporn <p> 544259154");

$data['displayMessage'] = $this->m_model->getMessage();

$this->load->view('viewpage',$data);
}
}

?>