 <?php
 $data = array();
 flixeble_function($data);
 function flixeble_function(&$data){
     $function = "view";
     if(isset($_GET['action'])){
        $action = $_GET['action'];
        $function = $action;
     }
     $function($data);
 }

 function view(&$data) {
    $data['employee_data'] = get_employee();
    $data['page'] = "employee/view";
}

function add_form(&$data){
    $data['page'] = "employee/add_em";
}

 function add_employee(&$data){
     $add_data = m_add_employee($_POST);
     if($add_data) {
        $action = "view";
    }else {
        echo "Can not add data";
    }
    header("Location: index.php?action=$action");
 }