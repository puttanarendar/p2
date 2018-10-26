# p2
project
//to upload the data through csv file......
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
 {
		  public function index()
			{
				$this->load->view('Upload/fileupload');
			}
		  public function upload_file()
		  {
			  $csvFile = fopen($_FILES['userfile']['tmp_name'], 'r');
	            
	            // skip first line
	            // if your csv file have no heading, just comment the next line
	            fgetcsv($csvFile);
	            
	            //parse data from csv file line by line
	            while(($line = fgetcsv($csvFile)) !== FALSE)
	            {
					$this->load->model('Uploadmodel');
					$data=array("email"=>$line[3]);
					$result=$this->Uploadmodel->check($data);
					if(count($result) > 0){
	                    //update member data
	                    $this->db->update("member", array("name"=>$line[0], "fullname"=>$line[1]), array("email"=>$line[3]));
	                }else{
	                    //insert member data into database
	                   $this->load->model('Uploadmodel');
					   $data =array('name'=>$line[0],'fullname'=>$line[1],'gender'=>$line[2],'email'=>$line[3]);
					    $v=$this->Uploadmodel->save($data);
	                }
                 }
                 return redirect('Auth/display');
	            
	            //close opened csv file
	            fclose($csvFile);
            }
           public function display()
           {
			$this->load->model('Uploadmodel');
			$data['rows']=$this->Uploadmodel->display();
			$this->load->view('Upload/displayview',$data);   
			
		   }
  }
 ?>
