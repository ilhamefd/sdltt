<?php
class C_admin extends CI_Controller{
  
  function __construct(){
    parent::__construct();
    session_start();
    $this->load->model('m_login');
    $this->load->helper('tglindo_helper');
  }
  
  function index(){
    $data = array();
    $session = isset($_SESSION['user_data']) ? $_SESSION['user_data']:'';
    if($session!=""){
      $pisah_info = explode("|", $session);
      $data['username'] = $pisah_info[0];
      $data['nama'] = $pisah_info[1];
      $data['level'] = $pisah_info[2];
      if($data['level']=="admin"){
        $data['jenis']="beranda";
        $this->load->view('cPanel/hal_cPanel', $data);
      }
      else{
      ?>
        <script type="text/javascript" language="javascript">
		  alert("Anda tidak berhak masuk ke Control Panel Admin...!!!");
		</script>
      <?php
        echo "<meta http-equiv='refresh' content='0; url=".base_url()."c_admin/login_user'>";
      }
    }
    else{
    ?>
	  <script type="text/javascript" language="javascript">
	    alert("Anda belum Log In...!!!\nAnda harus Log In untuk mengakses halaman ini...!!!");
      </script>
    <?php
      echo "<meta http-equiv='refresh' content='0; url=".base_url()."c_admin/login_user'>";
    }
  }
  
  function login_user(){
    $data = array();
    $session = isset($_SESSION['user_data']) ? $_SESSION['user_data']:'';

    if ($session!=""){
      echo "<meta http-equiv='refresh' content='0; url=".base_url()."c_admin'>";
    }
    else{
      $this->load->view('cPanel/login');
    }
  }
  
  function login(){
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $hasil = $this->m_login->cekdb();
    
    if (count($hasil->result_array())>0){
      foreach($hasil->result() as $row){
        $sess_user = $row->username."|".$row->nama."|".$row->level;
        $level = $row->level;
      }
      $_SESSION['user_data']=$sess_user;
      if ($level=="admin"){
        echo "<meta http-equiv='refresh' content='0; url=".base_url()."c_admin'>";
      }
      else{
        echo "<meta http-equiv='refresh' content='0; url=".base_url()."c_admin/login_user'>";
      }
    }
    else{
    ?>
	  <script type="text/javascript">
	    alert("Username atau Password Yang Anda Masukkan Salah..!!!");
      </script>
	<?php
   echo "<meta http-equiv='refresh' content='0; url=".base_url()."c_admin/login_user'>";
    }
  }
  
  function logout(){
	session_destroy();
    echo "<meta http-equiv='refresh' content='0; url=".base_url()."c_admin/login_user'>";
  }
  
  

  
  function add_berita(){
    $data = array();
    $session = isset($_SESSION['user_data']) ? $_SESSION['user_data']:'';
    if($session!=""){
      $pisah_info = explode("|", $session);
      $data['username'] = $pisah_info[0];
      $data['nama'] = $pisah_info[1];
      $data['level'] = $pisah_info[2];
      $data['editor'] = $this->editor_tinymce();

      if($data['level']=="admin"){
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('penulis', 'Penulis', 'required');
        $this->form_validation->set_rules('isi', 'Isi', 'required');
        
        if ($this->form_validation->run() == TRUE) {
          if ($this->input->post('simpan')) {
            $this->m_berita->simpan_berita();
            redirect('c_admin/select_berita');
          }
        }
        $data['jenis'] = 'Tambah Berita';
        $this->load->view('cPanel/hal_cPanel', $data);
      }
      else{
      ?>
        <script type="text/javascript" language="javascript">
		  alert("Anda tidak berhak masuk ke Control Panel Admin...!!!");
		</script>
      <?php
        echo "<meta http-equiv='refresh' content='0; url=".base_url()."c_admin/login_user'>";
      }
    }
    else{
    ?>
	  <script type="text/javascript" language="javascript">
	    alert("Anda belum Log In...!!!\nAnda harus Log In untuk mengakses halaman ini...!!!");
      </script>
    <?php
      echo "<meta http-equiv='refresh' content='0; url=".base_url()."c_admin/login_user'>";
    }
  }
  
  
  
  function select_link() {
    $page=$this->uri->segment(3);
    $limit=10;
    if(!$page): $offset=0;
    else: $offset = $page;
    endif;

    $data = array();
    $session = isset($_SESSION['user_data']) ? $_SESSION['user_data']:'';
    if($session!=""){
      $pisah_info = explode("|", $session);
      $data['username'] = $pisah_info[0];
      $data['nama'] = $pisah_info[1];
      $data['level'] = $pisah_info[2];

      if($data['level']=="admin"){
        $total = $this->m_link->tot_data('banner');
 	    $config['base_url'] = base_url().'c_admin/select_link/';
        $config['total_rows'] = $total->num_rows();

	    $config['per_page'] = $limit;
	    $config['uri_segment'] = 3;
	    $config['first_link'] = 'Awal';
	    $config['last_link'] = 'Akhir';
	    $config['next_link'] = 'Selanjutnya';
	    $config['prev_link'] = 'Sebelumnya';
	    $this->pagination->initialize($config);
        $data['paginator'] = $this->pagination->create_links();

        $data['hasil'] = $this->m_link->tampil_link($offset,$limit);
        $data['page'] = $page;
	    $data['jenis'] = 'Module Partner Link';

	    $this->load->view('cPanel/hal_cPanel', $data);
	  }
      else{
      ?>
        <script type="text/javascript" language="javascript">
		  alert("Anda tidak berhak masuk ke Control Panel Admin...!!!");
		</script>
      <?php
        echo "<meta http-equiv='refresh' content='0; url=".base_url()."c_admin/login_user'>";
      }
    }
    else{
    ?>
	  <script type="text/javascript" language="javascript">
	    alert("Anda belum Log In...!!!\nAnda harus Log In untuk mengakses halaman ini...!!!");
      </script>
    <?php
      echo "<meta http-equiv='refresh' content='0; url=".base_url()."c_admin/login_user'>";
    }
  }
  
  function add_link(){
    $data = array();
    $session = isset($_SESSION['user_data']) ? $_SESSION['user_data']:'';
    if($session!=""){
      $pisah_info = explode("|", $session);
      $data['username'] = $pisah_info[0];
      $data['nama'] = $pisah_info[1];
      $data['level'] = $pisah_info[2];

      if($data['level']=="admin"){
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('url', 'URL', 'required');

        if ($this->form_validation->run() == TRUE) {
          if ($this->input->post('simpan')) {
            $this->m_link->simpan_link();
            redirect('c_admin/select_link');
          }
        }
        $data['jenis'] = 'Tambah Partner Link';
        $this->load->view('cPanel/hal_cPanel', $data);
      }
      else{
      ?>
        <script type="text/javascript" language="javascript">
		  alert("Anda tidak berhak masuk ke Control Panel Admin...!!!");
		</script>
      <?php
        echo "<meta http-equiv='refresh' content='0; url=".base_url()."c_admin/login_user'>";
      }
    }
    else{
    ?>
	  <script type="text/javascript" language="javascript">
	    alert("Anda belum Log In...!!!\nAnda harus Log In untuk mengakses halaman ini...!!!");
      </script>
    <?php
      echo "<meta http-equiv='refresh' content='0; url=".base_url()."c_admin/login_user'>";
    }
  }
  
  function edit_link($id=NULL){
    $data = array();
    $session = isset($_SESSION['user_data']) ? $_SESSION['user_data']:'';
    if($session!=""){
      $pisah_info = explode("|", $session);
      $data['username'] = $pisah_info[0];
      $data['nama'] = $pisah_info[1];
      $data['level'] = $pisah_info[2];

      if($data['level']=="admin"){
        if ($_POST==NULL){
          $data['hasil'] = $this->m_link->tampil_edit($id);
          $data['jenis'] = 'Ubah Partner Link';
          $this->load->view('cPanel/hal_cPanel', $data);
        }
        else{
          $this->m_link->ubah_link($id);
          redirect('c_admin/select_link');
        }
      }
      else{
      ?>
        <script type="text/javascript" language="javascript">
		  alert("Anda tidak berhak masuk ke Control Panel Admin...!!!");
		</script>
      <?php
        echo "<meta http-equiv='refresh' content='0; url=".base_url()."c_admin/login_user'>";
      }
    }
    else{
    ?>
	  <script type="text/javascript" language="javascript">
	    alert("Anda belum Log In...!!!\nAnda harus Log In untuk mengakses halaman ini...!!!");
      </script>
    <?php
      echo "<meta http-equiv='refresh' content='0; url=".base_url()."c_admin/login_user'>";
    }
  }
  
  function delete_link($id=NULL){
    $data = array();
    $session = isset($_SESSION['user_data']) ? $_SESSION['user_data']:'';
    if($session!=""){
      $pisah_info = explode("|", $session);
      $data['username'] = $pisah_info[0];
      $data['nama'] = $pisah_info[1];
      $data['level'] = $pisah_info[2];

      if($data['level']=="admin"){
        $this->m_link->hapus_link($id);
        redirect('c_admin/select_link');
      }
      else{
      ?>
        <script type="text/javascript" language="javascript">
		  alert("Anda tidak berhak masuk ke Control Panel Admin...!!!");
		</script>
      <?php
        echo "<meta http-equiv='refresh' content='0; url=".base_url()."c_admin/login_user'>";
      }
    }
    else{
    ?>
	  <script type="text/javascript" language="javascript">
	    alert("Anda belum Log In...!!!\nAnda harus Log In untuk mengakses halaman ini...!!!");
      </script>
    <?php
      echo "<meta http-equiv='refresh' content='0; url=".base_url()."c_admin/login_user'>";
    }
  }
}
?>
