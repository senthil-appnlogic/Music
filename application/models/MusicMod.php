<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MusicMod extends CI_Model {
    function __construct()
    {
	parent::__construct();
    }    
    function MusicAuthentication()
    {
        $user_id = $this->input->post('userId');
	$password = $this->input->post('password');
        $sql="SELECT * FROM user where USERNAME='$user_id' AND PASSWORD='$password'";
	$query = $this->db->query($sql);
        if($query != NULL)
        {
	    
            return $query->result_array();
        }
        else
        {
            return false;
        }
    }
    function MusicUser_View()
    {
        $sql="SELECT * FROM user";
	return   $query = $this->db->query($sql)->result_array();
    }
    function MusicUser_Add()
    {
        $data= array(
            "USERNAME"=>$this->input->post("UserName"),
            "PASSWORD"=>$this->input->post("UserPassword"),
            "EMAIL"=>$this->input->post("UserEmail")
	);
	$this->db->insert("user",$data);
        redirect("MusicCtr/MusicUser_Add");
    }
    function MusicUser_Delete($ID)
    {
        $this->db->where("ID",$ID);
        $this->db->delete('user');
    }
    function MusicDirector_View()
    {
        $sql="SELECT * FROM musicdirector";
	return   $query = $this->db->query($sql)->result_array();
    }
    function MusicDirector_Add()
    {
        $config['upload_path'] ='application/uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $this->load->library('upload', $config);
        $this->upload->do_upload('MusicDirectorImage');
        $data =  $this->upload->data();
        $path1=$data['file_name'];
	$target_file =base_url().$config['upload_path'].$path1;
        $data= array(
	   
	       "MUSICDIRECTOR_NAME"=>$this->input->post("MusicDirectorName"),
	       "MUSICDIRECTOR_IMAGE"=>$target_file
						 
	);
	$this->db->insert("musicdirector",$data);
        redirect("MusicCtr/MusicDirector_View");
    }
    function MusicDirector_Update($id)
    {
	if($_FILES['MusicDirectorImage']['name']=="")
    	{
    	    $path1=$this->input->post('getMusicDirectorImage');
	}
	else
	{
	    $config['upload_path'] ='application/uploads/';
	    $config['allowed_types'] = 'gif|jpg|png';
	    $this->load->library('upload', $config);
	    $this->upload->do_upload('MusicDirectorImage');
	    $data =  $this->upload->data();
	    $path1=$data['file_name'];
	    $target_file =base_url().$config['upload_path'].$path1;
	}
	
        $data= array(
	   
	       "MUSICDIRECTOR_NAME"=>$this->input->post("MusicDirectorName"),
	       "MUSICDIRECTOR_IMAGE"=>$target_file
						 
	);
	$this->db->where("ID","$id");
	return $this->db->update("musicdirector",$data);
    }
    function getMusicDirector_Edit($id)
    {
	$sql="SELECT * FROM musicdirector WHERE ID = '$id'";
	return $query = $this->db->query($sql)->result_array();
    }
    function MusicDirector_Delete($ID)
    {
        $this->db->where("ID",$ID);
        $this->db->delete('musicdirector');
    }
    function Singer_Add()
    {
	$config['upload_path'] ='application/uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $this->load->library('upload', $config);
        $this->upload->do_upload('SingerImage');
        $data =  $this->upload->data();
        $path1=$data['file_name'];
	$target_file =base_url().$config['upload_path'].$path1;
        $data= array(
	   
	       "SINGER_NAME"=>$this->input->post("SingerName"),
	       "SINGER_IMAGE"=>$target_file
						 
	);
	$this->db->insert("singer",$data);
        redirect("MusicCtr/Singer_View");
    }
    function Singer_Edit($id)
    {
	if($_FILES['SingerImage']['name']=="")
    	{
    	    $path1=$this->input->post('getSingerImage');
	}
	else
	{
	    $config['upload_path'] ='application/uploads/';
	    $config['allowed_types'] = 'gif|jpg|png';
	    $this->load->library('upload', $config);
	    $this->upload->do_upload('SingerImage');
	    $data =  $this->upload->data();
	    $path1=$data['file_name'];
	    $target_file =base_url().$config['upload_path'].$path1;
	}
	
        $data= array(
	   
	       "SINGER_NAME"=>$this->input->post("SingerName"),
	       "SINGER_IMAGE"=>$target_file
						 
	);
	$this->db->where("ID","$id");
	return $this->db->update("singer",$data);
    }
    function getSinger_Edit($id)
    {
	$sql="SELECT * FROM singer WHERE ID = '$id'";
	return $query = $this->db->query($sql)->result_array();
    }
    function Singer_View()
    {
	$sql="SELECT * FROM singer";
	return   $query = $this->db->query($sql)->result_array();
    }
    function Singer_Delete($ID)
    {
	$this->db->where("ID",$ID);
        $this->db->delete('singer');
    }
    function Lyricist_Add()
    {
	$config['upload_path'] ='application/uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $this->load->library('upload', $config);
        $this->upload->do_upload('LyricistImage');
        $data =  $this->upload->data();
        $path1=$data['file_name'];
	$target_file =base_url().$config['upload_path'].$path1;
        $data= array(
	   
	       "LYRICIST_NAME"=>$this->input->post("LyricistName"),
	       "LYRICIST_IMAGE"=>$target_file
						 
	);
	$this->db->insert("lyricist",$data);
        redirect("MusicCtr/Lyricist_View");
    }
    function Lyricist_Update($id)
    {
	if($_FILES['LyricistImage']['name']=="")
    	{
    	    $path1=$this->input->post('getLyricistImage');
	}
	else
	{
	    $config['upload_path'] ='application/uploads/';
	    $config['allowed_types'] = 'gif|jpg|png';
	    $this->load->library('upload', $config);
	    $this->upload->do_upload('LyricistImage');
	    $data =  $this->upload->data();
	    $path1=$data['file_name'];
	    $target_file =base_url().$config['upload_path'].$path1;
	}
	
        $data= array(
	   
	       "LYRICIST_NAME"=>$this->input->post("LyricistName"),
	       "LYRICIST_IMAGE"=>$target_file
						 
	);
	$this->db->where("ID","$id");
	return $this->db->update("lyricist",$data);
    }
    function getLyricist_Edit($id)
    {
	$sql="SELECT * FROM lyricist WHERE ID = '$id'";
	return $query = $this->db->query($sql)->result_array();
    }
    function Lyricist_View()
    {
	$sql="SELECT * FROM lyricist";
	return   $query = $this->db->query($sql)->result_array();
    }
    function Lyricist_Delete($ID)
    {
	$this->db->where("ID",$ID);
        $this->db->delete('lyricist');
    }
    function Actor_View()
    {
	$sql="SELECT * FROM actor";
	return   $query = $this->db->query($sql)->result_array();
    }
    function Actor_Add()
    {
	$config['upload_path'] ='application/uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $this->load->library('upload', $config);
        $this->upload->do_upload('ActorImage');
        $data =  $this->upload->data();
        $path1=$data['file_name'];
	$target_file =base_url().$config['upload_path'].$path1;
        $data= array(
	   
	       "ACTOR_NAME"=>$this->input->post("ActorName"),
	       "ACTOR_IMAGE"=>$target_file
						 
	);
	$this->db->insert("actor",$data);
        redirect("MusicCtr/Actor_View");
    }
    function Actor_Update($id)
    {
	if($_FILES['ActorImage']['name']=="")
    	{
    	    $path1=$this->input->post('getActorImage');
	}
	else
	{
	    $config['upload_path'] ='application/uploads/';
	    $config['allowed_types'] = 'gif|jpg|png';
	    $this->load->library('upload', $config);
	    $this->upload->do_upload('ActorImage');
	    $data =  $this->upload->data();
	    $path1=$data['file_name'];
	    $target_file =base_url().$config['upload_path'].$path1;
	}
	
        $data= array(
	   
	       "ACTOR_NAME"=>$this->input->post("ActorName"),
	       "ACTOR_IMAGE"=>$target_file
						 
	);
	$this->db->where("ID","$id");
	return $this->db->update("actor",$data);
    }
    function getActor_Edit($id)
    {
	$sql="SELECT * FROM actor WHERE ID = '$id'";
	return $query = $this->db->query($sql)->result_array();
    }
    function Actor_Delete($ID)
    {
	$this->db->where("ID",$ID);
        $this->db->delete('actor');
    }
    function Actress_View()
    {
	$sql="SELECT * FROM actress";
	return   $query = $this->db->query($sql)->result_array();
    }
    function Actress_Add()
    {
	$config['upload_path'] ='application/uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $this->load->library('upload', $config);
        $this->upload->do_upload('ActressImage');
        $data =  $this->upload->data();
        $path1=$data['file_name'];
	$target_file =base_url().$config['upload_path'].$path1;
        $data= array(
	   
	       "ACTRESS_NAME"=>$this->input->post("ActressName"),
	       "ACTRESS_IMAGE"=>$target_file
						 
	);
	$this->db->insert("actress",$data);
        redirect("MusicCtr/Actress_View");
    }
    function Actress_Edit($id)
    {
	if($_FILES['ActressImage']['name']=="")
	{
         $path1=$this->input->post('ActressImage');
	}
	else
	{
	    $config['upload_path'] ='application/uploads/';
	    $config['allowed_types'] = 'gif|jpg|png';
	    $this->load->library('upload', $config);
	    $this->upload->do_upload('ActressImage');
	    $data =  $this->upload->data();
	    $path1=$data['file_name'];
	    $target_file =base_url().$config['upload_path'].$path1;
	}
        $data= array(
	   
	       "ACTRESS_NAME"=>$this->input->post("ActressName"),
	       "ACTRESS_IMAGE"=>$target_file
						 
	);
	$this->db->where("ID","$id");
	    return $this->db->update("actress",$data);
    }
    function getActress_Edit($id)
    {
    
	$sql="SELECT * FROM actress WHERE ID = '$id'";
	return $query = $this->db->query($sql)->result_array();
	
    }
    function Actress_Delete($ID)
    {
	$this->db->where("ID",$ID);
        $this->db->delete('actress');
    }
    function Director_View()
    {
	$sql="SELECT * FROM director";
	return   $query = $this->db->query($sql)->result_array();
    }
    function Director_Add()
    {
	$config['upload_path'] ='application/uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $this->load->library('upload', $config);
        $this->upload->do_upload('DirectorImage');
        $data =  $this->upload->data();
        $path1=$data['file_name'];
	$target_file =base_url().$config['upload_path'].$path1;
        $data= array(
	   
	       "DIRECTOR_NAME"=>$this->input->post("DirectorName"),
	       "DIRECTOR_IMAGE"=>$target_file
						 
	);
	$this->db->insert("director",$data);
        redirect("MusicCtr/Director_View");
    }
    function Director_Edit($id)
    {
	if($_FILES['DirectorImage']['name']=="")
	{
         $path1=$this->input->post('DirectorImage');
	}
	else
	{
	    $config['upload_path'] ='application/uploads/';
	    $config['allowed_types'] = 'gif|jpg|png';
	    $this->load->library('upload', $config);
	    $this->upload->do_upload('DirectorImage');
	    $data =  $this->upload->data();
	    $path1=$data['file_name'];
	    $target_file =base_url().$config['upload_path'].$path1;
	}
	    $data= array(
	       
		   "DIRECTOR_NAME"=>$this->input->post("DirectorName"),
		   "DIRECTOR_IMAGE"=>$target_file
						     
	    );
	    $this->db->where("ID","$id");
	    return $this->db->update("director",$data);
    }
    function getDirector_Edit($id)
    {
    
	$sql="SELECT * FROM director WHERE ID = '$id'";
	return $query = $this->db->query($sql)->result_array();
	
    }
    function Director_Delete($ID)
    {
	$this->db->where("ID",$ID);
        $this->db->delete('director');
    }
    function Production_View()
    {
	$sql="SELECT * FROM production";
	return   $query = $this->db->query($sql)->result_array();
    }
    function Production_Add()
    {
	$config['upload_path'] ='application/uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $this->load->library('upload', $config);
        $this->upload->do_upload('ProductionImage');
        $data =  $this->upload->data();
        $path1=$data['file_name'];
	$target_file =base_url().$config['upload_path'].$path1;
        $data= array(
	   
	       "PRODUCTION_NAME"=>$this->input->post("ProductionName"),
	       "PRODUCTION_IMAGE"=>$target_file
						 
	);
	$this->db->insert("production",$data);
        redirect("MusicCtr/Production_View");
    }
    function Production_Edit($id)
    {
	if($_FILES['ProductionImage']['name']=="")
	{
         $path1=$this->input->post('ProductionImage');
	}
	else
	{
	    $config['upload_path'] ='application/uploads/';
	    $config['allowed_types'] = 'gif|jpg|png';
	    $this->load->library('upload', $config);
	    $this->upload->do_upload('ProductionImage');
	    $data =  $this->upload->data();
	    $path1=$data['file_name'];
	    $target_file =base_url().$config['upload_path'].$path1;
	}
        $data= array(
	   
	       "PRODUCTION_NAME"=>$this->input->post("ProductionName"),
	       "PRODUCTION_IMAGE"=>$target_file
						 
	);
	$this->db->where("ID","$id");
	return $this->db->update("production",$data);
    }
    function getProduction_Edit($id)
    {
    
	$sql="SELECT * FROM production WHERE ID = '$id'";
	return $query = $this->db->query($sql)->result_array();
	
    }
    
    function Production_Delete($ID)
    {
	$this->db->where("ID",$ID);
        $this->db->delete('production');
    }
    function Album_View()
    {
	$sql="SELECT * FROM album";
	return   $query = $this->db->query($sql)->result_array();
    }
    function Album_Add()
    {
	$config['upload_path'] ='application/uploads/';
	$config['allowed_types'] = 'gif|jpg|png';
	$this->load->library('upload', $config);
	$this->upload->do_upload('AlbumImage');
	$data =  $this->upload->data();
	$path1=$data['file_name'];
	$target_file =base_url().$config['upload_path'].$path1;
        $data= array(
	   
	       "ALBUM_NAME"=>$this->input->post("AlbumName"),
	       "ALBUM_IMAGE"=>$target_file
						 
	);
	$this->db->insert("album",$data);
        redirect("MusicCtr/Album_View");
    }
    function Album_Edit($id)
    {
	//print_r($_POST);
	//exit;
	if($_FILES['AlbumImage']['name']=="")
	{
         $path1=$this->input->post('AlbumImage');
	}
	else
	{
	    $config['upload_path'] ='application/uploads/';
	    $config['allowed_types'] = 'gif|jpg|png';
	    $this->load->library('upload', $config);
	    $this->upload->do_upload('AlbumImage');
	    $data =  $this->upload->data();
	    $path1=$data['file_name'];
	    $target_file =base_url().$config['upload_path'].$path1;
	}
        $data= array(
	   
	       "ALBUM_NAME"=>$this->input->post("AlbumName"),
	       "ALBUM_IMAGE"=>$target_file
						 
	);
	$this->db->where("ID","$id");
	return $this->db->update("album",$data);
    }
    function getAlbum_Edit($id)
    {
    
	$sql="SELECT * FROM album WHERE ID = '$id'";
	return $query = $this->db->query($sql)->result_array();
	
    }
    
    function Album_Delete($ID)
    {
	$this->db->where("ID",$ID);
        $this->db->delete('album');
    }
    function Category_View()
    {
	$sql="SELECT * FROM category";
	return   $query = $this->db->query($sql)->result_array();
    }
    function Category_Add()
    {
        $data= array(
	    "CATEGORY_NAME"=>$this->input->post("CategoryName")						 
	);
	$this->db->insert("category",$data);
        redirect("MusicCtr/Category_View");
    }
    function Category_Update($id)
    {
        $data= array(
	    "CATEGORY_NAME"=>$this->input->post("CategoryName")
	);
	$this->db->where("ID","$id");
	return $this->db->update("category",$data);
    }
    function getCategory_Edit($id)
    {
	$sql="SELECT * FROM category WHERE ID = '$id'";
	return $query = $this->db->query($sql)->result_array();
    }
    function Category_Delete($ID)
    {
	$this->db->where("ID",$ID);
        $this->db->delete('category');
    }
    function Language_View()
    {
	$sql="SELECT * FROM language";
	return   $query = $this->db->query($sql)->result_array();
    }
    function Language_Add()
    {
        $data= array(
	    "LANGUAGE_NAME"=>$this->input->post("LanguageName")						 
	);
	$this->db->insert("language",$data);
        redirect("MusicCtr/Language_View");
    }
    function Language_Update($id)
    {
        $data= array(
	    "LANGUAGE_NAME"=>$this->input->post("LanguageName")
	);
	$this->db->where("ID","$id");
	return $this->db->update("language",$data);
    }
    function getLanguage_Edit($id)
    {
	$sql="SELECT * FROM language WHERE ID = '$id'";
	return $query = $this->db->query($sql)->result_array();
    }
    function Language_Delete($ID)
    {
	$this->db->where("ID",$ID);
        $this->db->delete('language');
    }
    
    function GetDirectorlist()
    {
	$sql="SELECT * FROM director";
	return $query = $this->db->query($sql)->result_array();
    }
    function getMusicDirectorlist()
    {
	$sql="SELECT * FROM musicdirector";
	return $query = $this->db->query($sql)->result_array();
    }
    function getProductionlist()
    {
	$sql="SELECT * FROM production";
	return $query = $this->db->query($sql)->result_array();
    }
    function GetAlbumlist()
    {
	$sql="SELECT * FROM album";
	return $query = $this->db->query($sql)->result_array();
    }
    function GetActresslist()
    {
	$sql="SELECT * FROM actress";
	return $query = $this->db->query($sql)->result_array();
    }
    function GetActorlist()
    {
	$sql="SELECT * FROM actor";
	return $query = $this->db->query($sql)->result_array();
    }
}