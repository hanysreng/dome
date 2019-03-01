
   <div id="users">
   <div class="col-md-12">
       <div class="pull-left">
           <input class="search" placeholder="Search" />
       </div>

       <div class="pull-right">
           <a href="index.php?action=view"><i class="glyphicon glyphicon-plus-sign" style="font-size:20px;"></i></a> &nbsp;
       </div>
   </div>
   <form action="index.php?action=get_form_data" method="POST">
       <table class="table-bordered col-md-12">
           <th class="sort text-center">ID</th>
           <th class="sort text-center" data-sort="fname">Student Name</th>
           <th class="sort text-center" data-sort="age">Age</th>
           <th class="sort text-center" data-sort="salary">Salary</th>
           <th class="sort text-center">Action</th>
           <!-- IMPORTANT, class="list" have to be at tbody -->
           <tbody class="list ">
            
            <?php
         
            $i = 1;
               foreach( $data['employee_data'] as $rows){
                
                ?>
                <tr>
                   <td class="text-center"><?php echo $i ?></td>
                   <td class="text-left"><?php echo $rows['firstname']." ".$rows['lastname'] ?></td>
                   <td class="text-center"><?php echo $rows['age'] ?></td>
                   <td class="text-center"><?php echo $rows['salary'] ?></td>
                   <td class="text-center">
                   <a href="index.php?action=view&id=<?php echo $rows['id'] ;?>"><i class="glyphicon glyphicon-eye-open" style="color:green"></i></a>&nbsp;
                   <a href="index.php?action=delete&id=<?php echo $rows['id'] ;?>"><i class="glyphicon glyphicon-trash" style="color: red"></i></a>&nbsp;
                   <a href="index.php?action=update&id=<?php echo $rows['id'] ;?>"><i class="glyphicon glyphicon-pencil" ></i></a><br>
                   </td>
                </tr>

                <?php
                $i++;

               }
            ?>
      
           </tbody>

       </table>
   </form>
</div>

<script>
   var options = {
       valueNames: ['i', 'firstname','lastname', 'age', 'salary']
   };

   var userList = new List('users', options);
</script>
>

