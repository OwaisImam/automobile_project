<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
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
        $user_id = $this->session->userdata('user_id');
        $data['userData'] = $this->usermodel->getUserData($user_id);
        
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
        $this->load->view('dashboard',$data);
    }

    public function mydirectrefers()
    {
            $this->load->model('usermodel');
            $user_id = $this->session->userdata('user_id');
            $data['users'] = $this->usermodel->getMyDirectRefers($user_id);
            //var_dump($data);exit;
            $this->load->view('mydirectrefers',$data);
    }

    public function userteams()
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
        $this->load->view('userteams',$data);
    }

    public function userorders()
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
        $this->load->view('userorders',$data);
    }

    public function useraddress()
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
        $this->load->view('useraddress',$data);
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

    //new tempalte related actions which are added by lakshmi

    public function userprofile()
    {
        $this->load->model('usermodel');
        $user_id = $this->session->userdata('user_id');
        $data['userData'] = $this->usermodel->getUserData($user_id);

        $this->load->view('userprofile',$data);
    }
    
    public function useractivities()
    {
        $this->load->view('useractivities');
    }
    public function userprojects()
    {
        $this->load->view('userprojects');
    }
    public function usertasks()
    {
        $this->load->view('usertasks');
    }
    public function userprofilesettings()
    {
        $this->load->view('userprofilesettings');   
    }

    public function pageclients()
    {
        $this->load->view('pageclients');
    }
    public function pageteams()
    {
        $this->load->view('pageteams');
    }
    public function pageteam()
    {
        $this->load->view('pageteam');
    }
    public function pageteamfeeds()
    {
        $this->load->view('pageteamfeeds');
    }
    public function pageteamprojects()
    {
        $this->load->view('pageteamprojects');   
    }

    public function pageteammembers()
    {
        $this->load->view('pageteammembers');
    }
    public function pageproject()
    {
        $this->load->view('pageproject');
    }
    public function pageprojectboard()
    {
        $this->load->view('pageprojectboard');
    }
    public function pageprojectgantt()
    {
        $this->load->view('pageprojectgantt');
    }
    public function pagecalendar()
    {
        $this->load->view('pagecalendar');   
    }    

    public function pageinvoices()
    {
        $this->load->view('pageinvoices');   
    }    

    public function pageinvoice()
    {
        $this->load->view('pageinvoice');   
    }    

    public function pagemessages()
    {
        $this->load->view('pagemessages');   
    }    


    public function pageconversations()
    {
        $this->load->view('pageconversations');   
    }    


    public function authcomingsoonv1()
    {
        $this->load->view('authcomingsoonv1');   
    }    
    public function authcomingsoonv2()
    {
        $this->load->view('authcomingsoonv2');   
    }    
    public function authcookieconsent()
    {
        $this->load->view('authcookieconsent');   
    }    
    public function authemptystate()
    {
        $this->load->view('authemptystate');   
    }    
    public function autherrorv1()
    {
        $this->load->view('autherrorv1');   
    }    
    public function autherrorv2()
    {
        $this->load->view('autherrorv2');   
    }    
    public function autherrorv3()
    {
        $this->load->view('autherrorv3');   
    }    

     public function authmaintenance()
    {
        $this->load->view('authmaintenance');   
    }    
    
     public function authpagemessage()
    {
        $this->load->view('authpagemessage');   
    }    
     public function authsessiontimeout()
    {
        $this->load->view('authsessiontimeout');   
    }    
    
     public function authsigninv1()
    {
        $this->load->view('authsigninv1');   
    }
     public function authsigninv2()
    {
        $this->load->view('authsigninv2');   
    }    
    
     public function authsignup()
    {
        $this->load->view('authsignup');   
    }
     public function authrecoveryusername()
    {
        $this->load->view('authrecoveryusername');   
    }    
    
     public function authrecoverypassword()
    {
        $this->load->view('authrecoverypassword');   
    }
     public function authlockscreen()
    {
        $this->load->view('authlockscreen');   
    }    
    
     public function useraccountsettings()
    {
        $this->load->view('useraccountsettings');   
    }
     public function userbillingsettings()
    {
        $this->load->view('userbillingsettings');   
    }    
    
     public function notificationsettings()
    {
        $this->load->view('notificationsettings');   
    }
     public function layoutblank()
    {
        $this->load->view('layoutblank');   
    }    
    
     public function layoutnosearch()
    {
        $this->load->view('layoutnosearch');   
    }

    public function layoutfullwidth()
    {
        $this->load->view('layoutfullwidth');   
    }
    public function layoutpagenavs()
    {
        $this->load->view('layoutpagenavs');   
    }
    public function layoutpagecover()
    {
        $this->load->view('layoutpagecover');   
    }
    public function layoutpagecoverimg()
    {
        $this->load->view('layoutpagecoverimg');   
    }
    public function layoutpagesidebar()
    {
        $this->load->view('layoutpagesidebar');   
    }
    public function layoutpagesidebarfluid()
    {
        $this->load->view('layoutpagesidebarfluid');   
    }
    public function layoutpagesidebarhidden()
    {
        $this->load->view('layoutpagesidebarhidden');   
    }
    public function layoutcustom()
    {
        $this->load->view('layoutcustom');   
    }
    public function componentgeneral()
    {
        $this->load->view('componentgeneral');   
    }
    public function componenticons()
    {
        $this->load->view('componenticons');   
    }
    public function componentrichmedia()
    {
        $this->load->view('componentrichmedia');   
    }
    public function componentlistviews()
    {
        $this->load->view('componentlistviews');   
    }
    public function componentsortablenestable()
    {
        $this->load->view('componentsortablenestable');   
    }
    public function componentactivity()
    {
        $this->load->view('componentactivity');   
    }
    public function componentsteps()
    {
        $this->load->view('componentsteps');   
    }public function componenttasks()
    {
        $this->load->view('componenttasks');   
    }
    public function componentmetrics()
    {
        $this->load->view('componentmetrics');   
    }
    public function formbasic()
    {
        $this->load->view('formbasic');   
    }public function formautocompletes()
    {
        $this->load->view('formautocompletes');   
    }public function formpickers()
    {
        $this->load->view('formpickers');   
    }public function formeditors()
    {
        $this->load->view('formeditors');   
    }public function tablebasic()
    {
        $this->load->view('tablebasic');   
    }public function tabledatatables()
    {
        $this->load->view('tabledatatables');   
    }public function collectionjqvmap()
    {
        $this->load->view('collectionjqvmap');   
    }public function tablefiltersdatatables()
    {
        $this->load->view('tablefiltersdatatables');   
    }public function collectionchartjsline()
    {
        $this->load->view('collectionchartjsline');   
    }public function collectionchartjsbar()
    {
        $this->load->view('collectionchartjsbar');   
    }public function collectionchartjsradarscatter()
    {
        $this->load->view('collectionchartjsradarscatter');   
    }
    public function collectionflotcharts()
    {
        $this->load->view('collectionflotcharts');   
    }
    public function collectioninlinecharts()
    {
        $this->load->view('collectioninlinecharts');   
    }
    

}