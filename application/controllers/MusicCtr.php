<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MusicCtr extends CI_Controller {
	function MusicCtr()
	{
	    parent::__construct();
	    $this->load->model('MusicMod');
	    $this->load->library('session');
	    //error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
	}
	public function index()
	{
	    $session_data = $this->session->userdata('USERNAME');
	    if ($this->input->post('proceed')=='yes')
	    {
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
	    $data["musicuser"]=$this->MusicMod->MusicUser_View();
	    $this->load->view('header');
	    $this->load->view('MusicUser_View',$data);
	}
	function MusicUser($mode)
	{
	    if($this->input->post('proceed')=="add"){
		$this->MusicMod->MusicUser_Add();
	    }elseif($this->input->post('proceed')=="update"){
		$id=substr($mode ,4);
		$result=$this->MusicMod->MusicUser_Update($id);
	    }
	    $data['mode'] = $mode;	    
	    if($mode=="add"){
	    }else{
		$id=substr($mode ,4);
		$this->load->model('MusicMod');
		$data["MusicUserEdit"] = $this->MusicMod->getMusicUser_Edit($id);
	    }
	    $this->load->view('header');
	    $this ->load->view('MusicUser',$data);
	}
	function MusicUser_Delete($ID)
	{
	    $this->load->model('MusicMod');
	    $this->MusicMod->MusicUser_Delete($ID);
	    redirect("MusicCtr/MusicUser_View");
	}
	function MusicDirector_View()
	{
	    $data["musicdir"]=$this->MusicMod->MusicDirector_View();
	    $this->load->view('header');
	    $this->load->view('MusicDirector_View',$data);
	}
	function MusicDirector($mode)
	{
	    
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
	}
	function MusicDirector_Delete($ID)
	{
	    $this->MusicMod->MusicDirector_Delete($ID);
	    redirect("MusicCtr/MusicDirector_View");
	}
	function Singer_View()
	{
	    $data["musicSinger"]=$this->MusicMod->Singer_View();
	    $this->load->view('header');
	    $this->load->view('Singer_View',$data);
	}
	function Singer($mode)
	{
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
	    $this ->load->view('Singer',$data);
	}
	function Singer_Delete($ID)
	{
	    $this->MusicMod->Singer_Delete($ID);
	    redirect("MusicCtr/Singer_View");
	}
	function Lyricist_View()
	{
	    $data["musicLyricist"]=$this->MusicMod->Lyricist_View();
	    $this->load->view('header');
	    $this->load->view('Lyricist_View',$data);
	}
	function Lyricist($mode)
	{
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
	    $this->MusicMod->Lyricist_Delete($ID);
	    redirect("MusicCtr/Lyricist_View");
	}
	function Actor_View()
	{
	    $data["musicActor"]=$this->MusicMod->Actor_View();
	    $this->load->view('header');
	    $this->load->view('Actor_View',$data);
	}
	function Actor($mode)
	{
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
	    $this->MusicMod->Actor_Delete($ID);
	    redirect("MusicCtr/Actor_View");
	}
	
	function Category_View()
	{
	    $data["musicCategory"]=$this->MusicMod->Category_View();
	    $this->load->view('header');
	    $this->load->view('Category_View',$data);
	}
	function Category($mode)
	{
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
	    $this->MusicMod->Category_Delete($ID);
	    redirect("MusicCtr/Category_View");
	}
	function Language_View()
	{
	    $data["musicLanguage"]=$this->MusicMod->Language_View();
	    $this->load->view('header');
	    $this->load->view('Language_View',$data);
	}
	function Language($mode)
	{
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
	    $this->MusicMod->Language_Delete($ID);
	    redirect("MusicCtr/Language_View");
	}
	function Actress_View()
	{
	    $data["musicActress"]=$this->MusicMod->Actress_View();
	    $this->load->view('header');
	    $this->load->view('Actress_View',$data);
	}
	
	function Actress($mode)
	{
	    if($this->input->post('proceed')=="add"){
		$this->MusicMod->Actress_Add();
	    }elseif($this->input->post('proceed')=="update"){
		$id=substr($mode ,4);
		$result=$this->MusicMod->Actress_Edit($id);
	    }
	    $data['mode'] = $mode;	    
	    if($mode=="add"){
	    }else{
		$id=substr($mode ,4);
		$this->load->model('MusicMod');
		$data["actressEdit"] = $this->MusicMod->getActress_Edit($id);
	    }
	    $this->load->view('header');
	    $this ->load->view('Actress',$data);
	}
	function Actress_Delete($ID)
	{
	    $this->MusicMod->Actress_Delete($ID);
	    redirect("MusicCtr/Actress_View");
	}
	function Director_View()
	{
	    $data["musicDirector"]=$this->MusicMod->Director_View();
	    $this->load->view('header');
	    $this->load->view('Director_View',$data);
	}
	function Director($mode)
	{
	    if($this->input->post('proceed')=="add"){
		$this->MusicMod->Director_Add();
	    }elseif($this->input->post('proceed')=="update"){
		$id=substr($mode ,4);
		$result=$this->MusicMod->Director_Edit($id);
	    }
	    $data['mode'] = $mode;	    
	    if($mode=="add"){
	    }else{
		$id=substr($mode ,4);
		$this->load->model('MusicMod');
		$data["directorEdit"] = $this->MusicMod->getDirector_Edit($id);
	    }
	    $this->load->view('header');
	    $this ->load->view('Director',$data);
	}
	function Director_Delete($ID)
	{
	    $this->MusicMod->Director_Delete($ID);
	    redirect("MusicCtr/Director_View");
	}
	function Production_View()
	{
	    $data["musicProduction"]=$this->MusicMod->Production_View();
	    $this->load->view('header');
	    $this->load->view('Production_View',$data);
	}
	function Production_Add($mode)
	{
	    if($this->input->post('proceed')=="add"){
		$this->MusicMod->Production_Add();
	    }elseif($this->input->post('proceed')=="update"){
		$id=substr($mode ,4);
		$result=$this->MusicMod->Production_Edit($id);
	    }
	    $data['mode'] = $mode;	    
	    if($mode=="add"){
	    }else{
		$id=substr($mode ,4);
		$this->load->model('MusicMod');
		$data["productionEdit"] = $this->MusicMod->getProduction_Edit($id);
	    }
	    $this->load->view('header');
	    $this ->load->view('Production',$data);
	}
	function Production_Delete($ID)
	{
	    $this->MusicMod->Production_Delete($ID);
	    redirect("MusicCtr/Production_View");
	}
	function Movie_View()
	{
	    $data["musicMovie"]=$this->MusicMod->Movie_View();
	    $this->load->view('header');
	    $this->load->view('Movie_View',$data);
	}
	function Movie($mode)
	{
	    if($this->input->post('proceed')=="add"){
		$this->MusicMod->Movie_Add();
	    }elseif($this->input->post('proceed')=="update"){
		$id=substr($mode ,4);
		$result=$this->MusicMod->Movie_Edit($id);
	    }
	    $data['mode'] = $mode;	    
	    if($mode=="add"){
	    }else{
		$id=substr($mode ,4);
		$this->load->model('MusicMod');
		$data["MovieEdit"] = $this->MusicMod->getMovie_Edit($id);
	    }
	    $this->load->view('header');
	    $this ->load->view('Movie',$data);
	}
	function Movie_Delete($ID)
	{
	    $this->MusicMod->Movie_Delete($ID);
	    redirect("MusicCtr/Movie_View");
	}
	function Songs_View()
	{
	    $data["musicSong"]=$this->MusicMod->Songs_View();
	    $this->load->view('header');
	    $this->load->view("Songs_View");
	}
	function Songs($mode)
	{
	    $data['lyricist'] = $this->MusicMod->getLyricistlist();
	    $data['singer'] = $this->MusicMod->getSingerlist();
	    $data['director'] = $this->MusicMod->GetDirectorlist();
	    $data['musicdirector'] = $this->MusicMod->getMusicDirectorlist();
	    $data['production'] = $this->MusicMod->getProductionlist();
	    $data['movie'] = $this->MusicMod->GetMovielist();
	    $data['actress'] = $this->MusicMod->GetActresslist();
	    $data['actor'] = $this->MusicMod->GetActorlist();
	    $data['category'] = $this->MusicMod->GetCategorylist();
	    $data['language'] = $this->MusicMod->GetLanguagelist();
	    
	    if($this->input->post('proceed')=="add"){
		$this->MusicMod->Songs_Add();
	    }elseif($this->input->post('proceed')=="update"){
		$id=substr($mode ,4);
		$result=$this->MusicMod->Songs_Edit($id);
	    }
	    $data['mode'] = $mode;	    
	    if($mode=="add"){
	    }else{
		$id=substr($mode ,4);
		$this->load->model('MusicMod');
		$data["SongsEdit"] = $this->MusicMod->getSongs_Edit($id);
	    }
	    
	    $this->load->view('header');
	    $this->load->view("Songs",$data);
	}
}
