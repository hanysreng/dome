
<?php

    
    function view_employee(){
        $query = "SELECT * FROM employee";
        include 'connection.php';
        $result = mysqli_query($connection, $query);
        $rows = [];
        if(mysqli_num_rows($result)> 0){

            while($result_into_array = mysqli_fetch_assoc($result)){
                $rows[] = $result_into_array ;

            }

        }
        return $rows;

    // var_dump($rows);
    }

  function m_add_employee(){
      include 'connection.php';
      $firstname = $_POST['firstname'];
      $lastname = $_POST['lastname'];
      $age = $_POST['age'];
      $saraly= $_POST['salary'];

    $query = "INSERT INTO employee(firstname,lastname,age,salary) values(' $firstname','$lastname',$age,$saraly)";
    $result = mysqli_query($connection,$query);
    return $result;

  }

  function m_delete_employee(){
    include 'connection.php';
    $id = $_GET['id'];
    $query = "DELETE from employee where id= '$id' ";

    $result = mysqli_query( $connection,$query);
    return $result;

  }

?>