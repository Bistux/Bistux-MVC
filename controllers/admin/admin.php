<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Admin extends Controller{
    function index($page=''){
  //echo Controller::$urlPara[1];
        //$data='hi, this is data..';
        $this->loadView($page);
        $this->loadModel('basemodel');
        $a=new Basemodel();
    }
    function auth(){}
}