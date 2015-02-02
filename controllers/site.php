<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Site extends Controller{
    function index(){
        $page='heloo....';
        $params=$this->urlPara();
        $page=$params[0];
        echo $page;
    }
    function user(){
        
    }
}