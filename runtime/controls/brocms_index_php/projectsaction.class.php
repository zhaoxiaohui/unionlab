<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    class ProjectsAction extends Common {
        
        function index(){
            //获取并分配菜单项
				$column=D("column");

				

				

				$this->assign("menu", $column->field('id,title')->where(array("pid"=>0,"display"=>1))->order("ord asc")->select());
				//左边导航
				$this->assign("columnmenu", $column->field('id,title,description')->where(array("pid"=>$_GET["pid"],"display"=>1))->select());
            $this->display();
        }
    }
?>
