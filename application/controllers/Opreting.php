<?php

class Opreting extends MY_controller
{
    public function index()
    {
        $this->load->library('user_agent');
        $data['browser'] = $this->agent->browser();
        $data['browser_version'] = $this->agent->version();
        $data['os'] = $this->agent->platform();
        $data['ip_address'] = $this->input->ip_address();
        $data['en'] = $this->agent->accept_lang('en');

        $this->load->view('mobile',$data);
    }
}
