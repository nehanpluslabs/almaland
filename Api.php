<?php

class Api extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("Api_model", "api");
        header('Access-Control-Allow-Origin: *');
    }
    
    function reg_formDtl(){
        $this->api->regformDtl();
    }
    
    function registeration(){
        $this->api->reg();
    }
    
    function login(){
        $this->api->login();
    }
    
    function view_profile(){
        $this->api->viewProfile();
    }
	
    function add_reunion() {
        $this->api->add_reunion();
    }
    
    function get_myReunion(){
        $this->api->get_my_reunion();
    }
    
    function get_otherReunion(){
        $this->api->get_other_reunion();
    }
    
    function delete_reunion(){
        $this->api->deleteReunion();
    }
    
    function join_reunion(){
        $this->api->joinReunion();
    }
    
    function add_event(){
        $this->api->addEvent();
    }
    
    function get_myEvent(){
        $this->api->getMyevent();
    }
    
    function get_otherEvent(){
        $this->api->getOtherevent();
    }
    
    function event_detail(){
        $this->api->get_eventDtl();
    }
    
    function join_event(){
        $this->api->joinEvent();
    }
    
    function delete_event(){
        $this->api->dltEvent();
    }
    
    function add_internship(){
        $this->api->addEnternship();
    }
    
    function get_myInternship(){
        $this->api->myInternship();
    }
    
    function get_otherInternship(){
        $this->api->otherInternship();
    }
    
    function delete_internship(){
        $this->api->dltInternship();
    }
    
    function apply_intern(){
        $this->api->applyInternship();
    }
    
    function get_country(){
        $this->api->get_countrylist();
    }
    function noti(){
       $this->api->get_noti(); 
    }
    
    
    
}

