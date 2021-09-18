<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Myaccount extends CI_Controller {
    function __construct() {
        parent::__construct();
        if($this->session->userdata('user_name') == FALSE)
        {
            redirect('login');
        }
    }

    public function index()
    {
        $this->load->model('usermodel');
        $data['yourData'] = $this->usermodel->getPersonalData();
        $data['teams'] = $this->usermodel->getTeams();
        for($i=1; $i<5; $i++)
        {
            $levelNoCount = $this->usermodel->checkLevelStatus($i);
            $reqTeamSize = $this->calulateTeamNum($i);
            if($levelNoCount == $reqTeamSize)
            {
                $data['achlevel'.$i] = "Achieved";
                $data['agentCom'.$i] = $this->usermodel->getAgentCommission('Level'.$i);
            }
            else
            {
                $this->usermodel->getAchievedDate($i);
                $data['achlevel'.$i] = "Not Achieved";
                $data['agentCom'.$i] = "";
            }
        }
        $this->load->view('myaccount',$data);
    }
    public function calulateTeamNum($times)
    {
        $teamCount  = 1;
        for($i=0; $i<$times; $i++)
        {
            $teamCount = $teamCount * 3;
        }
        return $teamCount;
    }
}