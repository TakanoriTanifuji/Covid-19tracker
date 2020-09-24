<?php
  include "logic.php";
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <!-- link CSS -->
    <link rel="stylesheet" href="/style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- Bootstrap JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/7dd19ad769.js" crossorigin="anonymous"></script>
    <title>Covid-19 Tracker</title>
  </head>
  <body>
    <div class="container-fluid bg-light p-5 text-center my-3">
      <h1>Covid-19 Tracker</h1>
      <h5 class = "text-muted">An open sourse project to keep track of all Covid-19 cases</h5>
    </div>

    <div class="container my-5">
      <div class="row text-center ">
        <div class="col-4 py-3">
          <h5>Confirmed</h5>
          <?php echo $total_confirmed; ?>
        </div>
        <div class="col-4  py-3">
          <h5>Recoverd</h5>
          <?php echo $total_recovered; ?>
        </div>
        <div class="col-4 py-3">
          <h5>Deaths</h5>
          <?php echo $total_deaths; ?>
        </div>

      </div>

    </div>

<div class="container bg-light p-3 my-3 text-center">
  <h5 class="text-info">Prevention is the cure.</h5>
  <p class = "text-muted">Stay indoor</p>

</div>

    <div class="container-fluid">
      <table class = "table">
        <thead class = "thead-dark">
          <tr>
            <th scope= "col">Countries</th>
            <th scope= "col">Confirmed</th>
            <th scope= "col">Recovered</th>
            <th scope= "col">Deceased</th>
          </tr>
        </thead>

        <tbody>
            <?php
              foreach($data as $key => $value){
                $increased = $value[$days_count]['confirmed'] - $value[$days_count_prev]['confirmed'];
             ?>
             <tr>
               <th><?php echo $key; ?></th>
               <td>
                 <?php echo $value[$days_count]['confirmed']?>
                 <?php if($increased !=0){?>
                   <small class = "text-danger pl-3"><i class="fa fa-arrow-up" aria-hidden="true"><?php echo $increased ?></i></small>
                 <?php } ?>
               </td>
               <td>
                 <?php echo $value[$days_count]['recovered'];?>
               </td>
               <td>
                 <?php echo $value[$days_count]['deaths'];?>
               </td>
             </tr>

           <?php } ?>
        </tbody>
      </table>
    </div>
  </body>
</html>
