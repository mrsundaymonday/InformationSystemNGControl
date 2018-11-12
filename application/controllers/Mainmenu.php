<?php
Class Mainmenu extends Ci_Controller
{
	function __construct() {   	
   		parent::__construct();		
		$this->load->helper(array('url','html'));		
		$this->uri->segment(4);
		$this->load->model('User_model');		
		//$this->load->model('Ngchart_model');
		//$this->load->model('Daily_defect_model');
		$this->load->model('Menu_model');		
		$this->load->model('Gmc_model');		
		$this->load->model('Ng_model');			
		$this->load->model('User_model');	
		$this->load->model('Part_model');	
		$this->load->model('Hakakses_model');
		$this->load->model('Masalahng_model');
		$this->load->model('Masalahww_model');	

		//$this->load->model('Ngchart_model');
		$this->isLoggedIn(FALSE);
	}
	
	Function index(){
		$data['akses'] = $this->Menu_model->get_all_akses();			
		$data['grafik'] = $this->Masalahng_model->get_data_masalah();
		$data['totalmasalah'] = $this->Masalahng_model->totalng()->result();
		//$data['original'] = $this->Masalahng_model->count_all($qty_ng); 
		$data['totalng'] = $this->Ng_model->count_all(); 
		$data['ngperuser'] = $this->Masalahng_model->ng_peruser();
		$data['totaluser'] = $this->User_model->count_all();
		$data['totalpart'] = $this->Part_model->count_all();
		$data['user_createmasalahng'] = $this->Masalahng_model->get_alldata_ng();

		$data['content'] = 'admin/dashboard';
  		$this->load->view('admin/include/template',$data);	
	}
	Function gmc(){	
		$data['akses'] = $this->Menu_model->get_all_akses();
		$data['content'] = 'admin/gmc';
  		$this->load->view('admin/include/template',$data);	
	}
	Function part(){	
		$data['akses'] = $this->Menu_model->get_all_akses();
		$data['content'] = 'admin/part';
  		$this->load->view('admin/include/template',$data);	
	}
	Function ng(){		
		$data['akses'] = $this->Menu_model->get_all_akses();
		$data['content'] = 'admin/ng';
  		$this->load->view('admin/include/template',$data);	
	}
	Function user(){		
		$data['akses'] = $this->Menu_model->get_all_akses();
		$data['content'] = 'admin/user';
  		$this->load->view('admin/include/template',$data);	
	}
	Function masalahng(){	
		$data['akses'] = $this->Menu_model->get_all_akses();	
		$data['content'] = 'admin/masalahng';
  		$this->load->view('admin/include/template',$data);	
	}

	Function masalahww(){	
		$data['akses'] = $this->Menu_model->get_all_akses();	
		$data['content'] = 'admin/masalahww';
  		$this->load->view('admin/include/template',$data);	
	}

	Function hakakses(){	
		$data['akses'] = $this->Menu_model->get_all_akses();
		$data['menu'] = $this->Menu_model->get_all();
        $data['user'] = $this->User_model->getall();	
		$data['content'] = 'admin/hakakses';
  		$this->load->view('admin/include/template',$data);	
	}

	function isLoggedIn(){
		$isLoggedIn = $this->session->userdata('isLoggedIn');
		if(!isset($isLoggedIn) || $isLoggedIn != true){
		//	echo '<scriYou don\'t have permission to access this page. <a href="../login">Login</a>';
	    echo "<script>alert('You don\'t have permission to access this page, please login');</script>";
		redirect('Login');
		}		
	}

	function controller_list(){
		$controllers = array();
	    $this->load->helper('file');

	    // Scan files in the /application/controllers directory
	    // Set the second param to TRUE or remove it if you 
	    // don't have controllers in sub directories
	    $files = get_dir_file_info(APPPATH.'controllers', FALSE);

	    // Loop through file names removing .php extension
	    foreach ( array_keys($files) as $file ) {
	        if ( $file != 'index.html' )
	            $controllers[] = str_replace('.php', '', $file);
	    }
	    print_r($controllers); 
	}

}