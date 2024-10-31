<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Net income Activity</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>  
</head>
  <body>
          <div class="container">
             <form action="" method="POST" col-4>
               <label for="name" class="form-label" col-4>Full Name</label>
               <input type="text" name="name" id="name" class="form-control" required><br>
               <label for="status" class="form-label"  mx-auto col-4>Civil Status</label>
               <input type="text" name="status" id="civil_status" class="form-control" required><br>
               <label for="status" class="form-label"  mx-auto col-4>Position</label>
               <input type="text" nametext="stasus" id="position" class="form-control" required><br>
               <label for="status" class="form-label"  mx-auto col-4>Employee Status</label>
               <input type="text" name="status" id=" employee_status" class="form-control" required><br>
               <label for="number" class="form-label"  mx-auto col-4>Gross Income</label>
               <input type="number" name="income" id="gross_incom" class="form-control" required><br>
               <label for="number" class="form-label"  mx-auto col-4>Net Income</label>
               <input type="number" name="income" id="net_income" class="form-control" required><br>
             
               <input type="submit"  value="Submit" name="submit"class="btn btn-dark w-100">Submit<input type="text">
               
        
               
             </form>





          </div>




  </body>

 </html> 


 <?php

 include "Employee.php"

 if(isset($_POST['submit'])){

  $name = $_POST['name'];
  $status = $_POST['civil_status'];
  $position = $_POST['position'];
  $employee_status = $_POST['employee_status'];
  $gross_incom = $_POST['gross_incom'];
  $net_income = $_POST['net_income'];

  $employee = new Employee();
  $employee->setValues($name, $civil_status, $position,$employee_status,$gross_incom,$net_income);  
  $total_price =unmber_format($employee->computeTotalPrice(),2);

  
  ?>


    <table class="card" bg-bblack mb-4>
        <th>
        <tbody>
          <td >Full Name</td><?php 
          <td>Civil Status</td>
          <td>POsition</td>
          <td>Employment Status</td>
          <td>Gross Income</td>
          <td>Net Income</td>
          </tbody>
        </th>
     
    
    </table>
    
  </div>




 



 }