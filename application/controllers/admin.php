<?php
class Admin extends MY_controller
{

     
      public function adduservalidtion()
      {
   //  $config = [
   //  'upload_path'=>'./upload/',
   //  'allowed_type'=>'gif|png|jpeg|jpg',
   //  ];

   //  $this->load->library('upload', $config);

   
   //    $this->form_validation->set_rules('article_title','Article Title','required|alpha');
   //    $this->form_validation->set_rules('article_boby','Article Boby','required|alpha');
         
   //  if (true) {
   //      $this->upload->do_upload();
   // echo "maj,ds";
   //      $post = $this->input->post();
   //      $data = $this->upload->data();

   //      $image_path=base_url("upload/".$data['raw_name'].$data['file_ext']);
   //      $post['image_path']=$image_path;
   //      $this->load->model('loginmodel');
   //      echo "kjfhkwejhgj";
   //     if($this->loginmodel->add_article($post))
   //       {
   //         $this->session->set_flashdata('msg','Article Added successfully');
   //        $this->session->set_flashdata('msg_class','alert-success');
   //     }
   //     else{
   //        $this->session->set_flashdata('msg','Aricle Not Added successfully');
   //        $this->session->set_flashdata('msg_class','alert-danger');
   //     }
   //     return redirect('Admin/Welcome');
   //  }
   //  else
   //  {  
   //     $upload_error=$this->upload->display_errors();
   //     $this->load->view('Admin/add_article',compact('upload_error'));
   //  }
 


     $this->form_validation->set_rules('article_title','Article Title','required|alpha');
     $this->form_validation->set_rules('article_boby','Article Boby','required|alpha');
         
    if ($this->form_validation->run())
     {
        $post = $this->input->post();
        $this->load->model('loginmodel');
        if($this->loginmodel->add_article($post))
         {
           $this->session->set_flashdata('msg','Article Added successfully');
          $this->session->set_flashdata('msg_class','alert-success');
       }
       else{
          $this->session->set_flashdata('msg','Aricle Not Added successfully');
          $this->session->set_flashdata('msg_class','alert-danger');
       }
       return redirect('Admin/Welcome');
    }
    else
    {  
       $this->load->view('Admin/add_article');
    }
    }

   
    public function adduser()
    {
      $this->load->view('admin/add_article');
    }

  public function welcome()
  {
    if(!$this->session->userdata('id'))
    return redirect('login');
    $this->load->model('loginmodel');
    $articles = $this->loginmodel->articlelist();
    $this->load->view('admin/dashboard',['articles'=>$articles]);
  }
  public function register()
  {
    if($this->session->userdata('id'))
         return redirect('jh');
    $this->load->view('admin/register');
  }
  public function sendmail()
  {
    $this->form_validation->set_rules('username','Username','required|alpha');
    $this->form_validation->set_rules('password','Password','required|max_length[12]');
    $this->form_validation->set_rules('firstname','First Name','required|alpha');
    $this->form_validation->set_rules('lastname','Last Name','required|alpha');
    $this->form_validation->set_rules('email','Email id','required|valid_email|is_unique[ci3.email]');
    if ($this->form_validation->run()) {

       $post = $this->input->post();
        $this->load->model('loginmodel');
        if($this->loginmodel->add_user($post))
        {
            $this->session->set_flashdata('user','Users Added successfully');
            $this->session->set_flashdata('user_class','alert-success');
        }
        else
        {
            $this->session->set_flashdata('user','Users Not Added Please Try!');
            $this->session->set_flashdata('user_class','alert-success');
        }
        return redirect('admin/register');
       $this->load->library('email');
       $this->email->from(set_value('email'),set_value('username'));
       $this->email->to('ranjit@gamil.com');
       $this->email->subject('regfddjchkdc');
       $this->email->message('Thank yot meet you');
       $this->email->set_newline("\r\n");
       $this->email->send();
       if ($this->email->send()) {
           show_error($this->email->print_debugger());
       }
       else{
        echo "your Email has been send";
       }

    }
      
    else{
      $this->load->view('admin/register');
    }


  }

     public function logout()
     {
         $this->session->unset_userdata('id');
         return redirect('login/index');
     }
      
      public function edituser($id)
          {
             // echo $id;
             $this->load->model('loginmodel');
            $art=$this->loginmodel->find_article($id);
            //echo "<pre>";
            // print_r($art);
             $this->load->view('Admin/edit_article',['article'=>$art]); 
          }

          public function updatearticle($article_id)
            {           
            $this->load->library('form_validation');
            $this->form_validation->set_rules('article_title','Article Title','required|alpha');
            $this->form_validation->set_rules('article_boby','Article Boby','required|alpha');


               // echo $article_id;
               // exit;
               // print_r($this->input->post());
               // exit;
               if($this->form_validation->run())
               {

               $post=$this->input->post();
               $this->load->model('loginmodel');
               if($this->loginmodel->update_article($article_id,$post))
               {
                  $this->session->set_flashdata('msg','Article update successfully');
                  $this->session->set_flashdata('msg_class','alert-success');
               }
               else
               {
                  $this->session->set_flashdata('msg','Article Not upadate successfuly');
                  $this->session->set_flashdata('msg_class','alert-success');
               
               }
               return redirect('Admin/welcome');
            }
            else{
               $this->edituser($article_id);
            }

            }


     public function delarticles()
     {
      $id = $this->input->post('id');
        $this->load->model('loginmodel');
        if($this->loginmodel->del($id))
        {
          $this->session->set_flashdata('msg','Delete successfully');
         $this->session->set_flashdata('msg_class','alert-success');
      }
      else{
         $this->session->set_flashdata('msg','Not Delete Please Try!');
         $this->session->set_flashdata('msg_class','alert-danger');
      }
      return redirect('admin/Welcome');
     }


}

?>