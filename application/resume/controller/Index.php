<?php
namespace app\resume\controller;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use think\Controller;
/**
 * Description of Index
 *
 * @author gzh
 */
class Index extends Controller {
    public function home(){
        echo $this->fetch();
    }
}

