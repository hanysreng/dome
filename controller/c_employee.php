<?php
   $data = array();
     flexible_function($data);

     function flexible_function(&$data){
         $function = 'view';
         if(isset($_GET['action'])){
             $action = $_GET['action'];
             $function = $action;
         }

        $function($data); 
     }

   function view(&$data){
     $data['page'] = "employee/view";
     $data['employee_data'] = view_employee();

     
   }

   function add(&$data){
    $data['page'] = "employee/add";
    
   }

   function update(&$data){
    $data['page'] = "employee/update";
    //    echo "update.php";
   }

  //  function delete(&$data){
  //   $data['page'] = "employee/delete";
  //   //    echo "delete.php";
  //  }

   function get_form_data(){
     $add_data = m_add_employee();
     if($add_data){
       $action = "view";
     }else{
       $action="add";
     }
     header("Location: index.php?action=$action");

   }

   function detail(&$data){
     $data[' employee_data'] = detail_employee();
     $data['page'] = "employee/detail";
   }

  function delete(&$data){

    $data_delete = m_delete_employee();
    if($data_delete){

      header("Location:index.php?action=view");
  }
  
  }
 
?>



