<?php
    /**
     * 
     * 项目展示的后台控制器
     * date 2012/7/14
     * author Griffin
     * 
     */
    class Projects {
        
        function index(){
            
            $this->display();
            
        }
        function add(){
            
            $projects = D("projects");
            $this->mess('提示：带<span class="red_font">*</span>的项目为必填项目');
            $this->display();
        }
                function insert(){
            $values = $_POST;
            $projects = D("projects");
           $result =  $projects->insert($values,1,1);
           if ($result){
               
               $this->mess('提示：添加项目成功');
               
               $this->display("add");
           }
            
            
        }
    }

?>
