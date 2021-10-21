<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
 
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">IPT Midterm Project</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
         
            <li class="nav-item">
              <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= url('/users') ?> ">Users</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= url('/accounts') ?> ">Accounts</a>
          </ul>
        </div>
      </nav>
      <div class="container">
        <div class="row">
     
            <div class="col-md-4">

              <div class="list-group">
                <div class="text-center">
                  <h2>Main Menu</h2> 
                </a> <br><br><hr>
                <div class="head">
                <a href="#" class="list-group-item list-group-item-action"><b>Home</b></a><br>
                <a href="<?= url('/users') ?>" class="list-group-item list-group-item-action"><b>Users</b></a><br>
                <a href="<?= url('/accounts') ?>" class="list-group-item list-group-item-action"><b>Accounts</b></a>
             
              </div>
            </div>
          </div>
</body>

<style>
  h1{
       
       top:10px;
       
    }

  .nav-item{
      position: relative;
      left:1100px;
      
  }

  .list-group{
    font-family:Arial, Helvetica, sans-serif;
    position: relative;
    left: 340px;
    top:25px;
    padding-top:5px;
    padding-left:20px;
    padding-right:20px;
    padding-bottom: 20px;
    background-color:#007bff;
    border-radius: 5px;
    
  }

  h2{
 
    color:white;
  }

    </style>

</html>