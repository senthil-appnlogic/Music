<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MusicCtr extends CI_Controller {
	function SedarCtr()
	{
	    parent::__construct();
	    $this->load->model('MusicMod');
	    $this->load->library('session');
	    $this->load->library('upload');
	    //error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
	}
	public function index()
	{
	    $session_data = $this->session->userdata('USERNAME');
	    if ($this->input->post('proceed')=='yes')
	    {
		$this->load->model('MusicMod');
		$result= $this->MusicMod->MusicAuthentication();
		 
		if($result == NULL)
		{
		    $error=$this->session->set_flashdata('error', 'Invalid User Id and Password Please check it');
		    redirect(base_url()."MusicCtr/index",'refresh');
		}
		else
		{
		    $this->session->set_userdata('USERNAME',$result[0]['USERNAME']);
		    redirect("MusicCtr/MusicUser_View");
		}
	    }
	    $this->load->view('index');
	    if(isset($session_data) && $session_data != "")
	    {
		redirect("MusicCtr/MusicUser_View");
	    }
	}
	public function Logout()
	{
	    $this->session->unset_userdata('USERNAME');
	    unset($this->session->userdata);
	    redirect(base_url()."MusicCtr",'refresh');
	}
	function MusicUser_View()
	{
	    $this->load->model('MusicMod');
	    $data["musicuser"]=$this->MusicMod->MusicUser_View();
	    $this->load->view('header');
	    $this->load->view('MusicUser_View',$data);
	}
	function MusicUser_Add()
	{
	    $this->load->model('MusicMod');
	    if(isset ($_POST["submit_form"]))
	    {
		$this->MusicMod->MusicUser_Add();
	    }
	    $this->load->view('header');
	    $this->load->view('MusicUser_Add');
	}
	function MusicUser_Delete($ID)
	{
	    $this->load->model('MusicMod');
	    $this->MusicMod->MusicUser_Delete($ID);
	    redirect("MusicCtr/MusicUser_View");
	}
	function MusicDirector_View()
	{
	    $this->load->model('MusicMod');
	    $data["musicdir"]=$this->MusicMod->MusicDirector_View();
	    $this->load->view('header');
	    $this->load->view('MusicDirector_View',$data);
	}
	function MusicDirector($mode)
	{
	    
	    $this->load->model('MusicMod');
	    if($this->input->post('proceed')=="add"){
		$this->MusicMod->MusicDirector_Add();
	    }elseif($this->input->post('proceed')=="update"){
		$id=substr($mode ,4);
		$result=$this->MusicMod->MusicDirector_Update($id);
	    }
	    $data['mode'] = $mode;	    
	    if($mode=="add"){
	    }else{
		$id=substr($mode ,4);
		$this->load->model('MusicMod');
		$data["MusicDirectorEdit"] = $this->MusicMod->getMusicDirector_Edit($id);
	    }
	    $this->load->view('header');
	    $this ->load->view('MusicDirector',$data);
	    
	    
	    
	    
	//    $this->load->model('MusicMod');
	//    if(isset ($_POST["submit_form"]))
	//    {
	//	$this->MusicMod->MusicDirector();
	//    }
	//    $this->load->view('header');
	//    $this->load->view('MusicDirector');
	}
	function MusicDirector_Delete($ID)
	{
	    $this->load->model('MusicMod');
	    $this->MusicMod->MusicDirector_Delete($ID);
	    redirect("MusicCtr/MusicDirector_View");
	}
	function Singer_View()
	{
	    $this->load->model('MusicMod');
	    $data["musicSinger"]=$this->MusicMod->Singer_View();
	    $this->load->view('header');
	    $this->load->view('Singer_View',$data);
	}
	function Singer_Add($mode)
	{
	    $this->load->model('MusicMod');
	    if($this->input->post('proceed')=="add"){
		$this->MusicMod->Singer_Add();
	    }elseif($this->input->post('proceed')=="update"){
		$id=substr($mode ,4);
		$result=$this->MusicMod->Singer_Edit($id);
	    }
	    $data['mode'] = $mode;	    
	    if($mode=="add"){
	    }else{
		$id=substr($mode ,4);
		$this->load->model('MusicMod');
		$data["singerEdit"] = $this->MusicMod->getSinger_Edit($id);
	    }
	    $this->load->view('header');
	    $this ->load->view('Singer_Add',$data);
	}
	function Singer_Delete($ID)
	{
	    $this->load->model('MusicMod');
	    $this->MusicMod->Singer_Delete($ID);
	    redirect("MusicCtr/Singer_View");
	}
	function Lyricist_View()
	{
	    $this->load->model('MusicMod');
	    $data["musicLyricist"]=$this->MusicMod->Lyricist_View();
	    $this->load->view('header');
	    $this->load->view('Lyricist_View',$data);
	}
	function Lyricist($mode)
	{
	    $this->load->model('MusicMod');
	    if($this->input->post('proceed')=="add"){
		$this->MusicMod->Lyricist_Add();
	    }elseif($this->input->post('proceed')=="update"){
		$id=substr($mode ,4);
		$result=$this->MusicMod->Lyricist_Update($id);
	    }
	    $data['mode'] = $mode;	    
	    if($mode=="add"){
	    }else{
		$id=substr($mode ,4);
		$this->load->model('MusicMod');
		$data["LyricistEdit"] = $this->MusicMod->getLyricist_Edit($id);
	    }
	    $this->load->view('header');
	    $this ->load->view('Lyricist',$data);
	}
	function Lyricist_Delete($ID)
	{
	    $this->load->model('MusicMod');
	    $this->MusicMod->Lyricist_Delete($ID);
	    redirect("MusicCtr/Lyricist_View");
	}
	function Actor_View()
	{
	    $this->load->model('MusicMod');
	    $data["musicActor"]=$this->MusicMod->Actor_View();
	    $this->load->view('header');
	    $this->load->view('Actor_View',$data);
	}
	function Actor($mode)
	{
	    $this->load->model('MusicMod');
	    if($this->input->post('proceed')=="add"){
		$this->MusicMod->Actor_Add();
	    }elseif($this->input->post('proceed')=="update"){
		$id=substr($mode ,4);
		$result=$this->MusicMod->Actor_Update($id);
	    }
	    $data['mode'] = $mode;	    
	    if($mode=="add"){
	    }else{
		$id=substr($mode ,4);
		$this->load->model('MusicMod');
		$data["ActorEdit"] = $this->MusicMod->getActor_Edit($id);
	    }
	    $this->load->view('header');
	    $this ->load->view('Actor',$data);
	}
	function Actor_Delete($ID)
	{
	    $this->load->model('MusicMod');
	    $this->MusicMod->Actor_Delete($ID);
	    redirect("MusicCtr/Actor_View");
	}
	function Actress_View()
	{
	    $this->load->model('MusicMod');
	    $data["musicActress"]=$this->MusicMod->Actress_View();
	    $this->load->view('header');
	    $this->load->view('Actress_View',$data);
	}
	function Actress_Add()
	{
	    $this->load->model('MusicMod');
	    if(isset ($_POST["submit_form"]))
	    {
		$this->MusicMod->Actress_Add();
	    }
	    $this->load->view('header');
	    $this->load->view('Actress_Add');
	}
	function Actress_Delete($ID)
	{
	    $this->load->model('MusicMod');
	    $this->MusicMod->Actress_Delete($ID);
	    redirect("MusicCtr/Actress_View");
	}
	function Director_View()
	{
	    $this->load->model('MusicMod');
	    $data["musicDirector"]=$this->MusicMod->Director_View();
	    $this->load->view('header');
	    $this->load->view('Director_View',$data);
	}
	function Director_Add()
	{
	    $this->load->model('MusicMod');
	    if(isset ($_POST["submit_form"]))
	    {
		$this->MusicMod->Director_Add();
	    }
	    $this->load->view('header');
	    $this->load->view('Director_Add');
	}
	function Director_Delete($ID)
	{
	    $this->load->model('MusicMod');
	    $this->MusicMod->Director_Delete($ID);
	    redirect("MusicCtr/Director_View");
	}
	function Production_View()
	{
	    $this->load->model('MusicMod');
	    $data["musicProduction"]=$this->MusicMod->Production_View();
	    $this->load->view('header');
	    $this->load->view('Production_View',$data);
	}
	function Production_Add()
	{
	    $this->load->model('MusicMod');
	    if(isset ($_POST["submit_form"]))
	    {
		$this->MusicMod->Production_Add();
	    }
	    $this->load->view('header');
	    $this->load->view('Production_Add');
	}
	function Production_Delete($ID)
	{
	    $this->load->model('MusicMod');
	    $this->MusicMod->Production_Delete($ID);
	    redirect("MusicCtr/Production_View");
	}
	function Album_View()
	{
	    $this->load->model('MusicMod');
	    $data["musicAlbum"]=$this->MusicMod->Album_View();
	    $this->load->view('header');
	    $this->load->view('Album_View',$data);
	}
	function Album_Add()
	{
	    $this->load->model('MusicMod');
	    if(isset ($_POST["submit_form"]))
	    {
		$this->MusicMod->Album_Add();
	    }
	    $this->load->view('header');
	    $this->load->view('Album_Add');
	}
	function Album_Delete($ID)
	{
	    $this->load->model('MusicMod');
	    $this->MusicMod->Album_Delete($ID);
	    redirect("MusicCtr/Album_View");
	}
	function Category_View()
	{
	    $this->load->model('MusicMod');
	    $data["musicCategory"]=$this->MusicMod->Category_View();
	    $this->load->view('header');
	    $this->load->view('Category_View',$data);
	}
	function Category($mode)
	{
	    $this->load->model('MusicMod');
	    if($this->input->post('proceed')=="add"){
		$this->MusicMod->Category_Add();
	    }elseif($this->input->post('proceed')=="update"){
		$id=substr($mode ,4);
		$result=$this->MusicMod->Category_Update($id);
	    }
	    $data['mode'] = $mode;	    
	    if($mode=="add"){
	    }else{
		$id=substr($mode ,4);
		$this->load->model('MusicMod');
		$data["CategoryEdit"] = $this->MusicMod->getCategory_Edit($id);
	    }
	    $this->load->view('header');
	    $this ->load->view('Category',$data);
	}
	function Category_Delete($ID)
	{
	    $this->load->model('MusicMod');
	    $this->MusicMod->Category_Delete($ID);
	    redirect("MusicCtr/Category_View");
	}
	function Language_View()
	{
	    $this->load->model('MusicMod');
	    $data["musicLanguage"]=$this->MusicMod->Language_View();
	    $this->load->view('header');
	    $this->load->view('Language_View',$data);
	}
	function Language($mode)
	{
	    $this->load->model('MusicMod');
	    if($this->input->post('proceed')=="add"){
		$this->MusicMod->Language_Add();
	    }elseif($this->input->post('proceed')=="update"){
		$id=substr($mode ,4);
		$result=$this->MusicMod->Language_Update($id);
		redirect("MusicCtr/Language_View");
	    }
	    $data['mode'] = $mode;	    
	    if($mode=="add"){
	    }else{
		$id=substr($mode ,4);
		$this->load->model('MusicMod');
		$data["LanguageEdit"] = $this->MusicMod->getLanguage_Edit($id);
	    }
	    $this->load->view('header');
	    $this ->load->view('Language',$data);
	}
	function Language_Delete($ID)
	{
	    $this->load->model('MusicMod');
	    $this->MusicMod->Language_Delete($ID);
	    redirect("MusicCtr/Language_View");
	}
	
}
