<!--Gayatri Nambiar-->
<!--The Spark fondation-->
<!--Basic Banking System-->

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Basic Banking System</title>
  </head>

  <body style=background-image:linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)),url(./img/cash.jpg);background-position:center;background-size:cover;height:100vh;>
  <?php
  include 'navbar.php';
  ?>
  <br>
 
  <div class="flex flex-col text-center w-full mb-10" >
      <h1 style="color:white;" class="text-xs text-white-100 tracking-widest font-small title-font mb-1">ONLINE BANKING</h1>
      <h2 style="color:white;" class="sm:text-xl text-2xl font-small title-font mb-4 text-white-900">Easy Payment</h2>
    </div>
  <section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap -mx-4 -mb-10 text-center">
      <div class="sm:w-1/2 mb-10 px-4">
        <div class="rounded-lg h-64 overflow-hidden">
          <img alt="content" class="object-cover object-center h-full w-full" src="img/logo.png" width="150px">
        </div>
        <h2 class="title-font text-xl font-small text-gray-900 mt-6 mb-3" style="color:white;">Make a Transaction</h2>
        <a href="transfermoney.php"><button class="flex mx-auto mt-6 text-white bg-#2785C4-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded">Transfer Money</button></a>
      </div>
      <br>
      <br>
      <div class="sm:w-1/2 mb-10 px-4">
        <div class="rounded-lg h-64 overflow-hidden">
          <img alt="content" class="object-cover object-center h-full w-full" src="img/history.png" width="150px">
        </div>
        <h2 class="title-font text-xl font-small text-gray-900 mt-6 mb-3"style="color:white;">View Previous Transaction</h2>
        <a href="transactionhistory.php"><button class="flex mx-auto mt-6 text-white bg-indigo-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded">Transaction History</button></a>
    
    </div>
    </div>
  </div>
</section>
<br>
<br>
      <!-- Activity section -->
            
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>