<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Contact App - Contact</title>
    <style media="screen">
      .center{
        margin: auto;
        width: 60%;
        border: 5px solid rgb(210, 210, 210);
        padding 10px;
        color: darkblue;
        background-color: rgb(240, 240, 240);
      }
      .cen{
        margin-left: 30%;
      }
      .cen2{
        margin-left:25%;
      }
      a{
            text-decoration: none;
            text-decoration-line: none;
        }
        a:hover{
            color:darkblue;
            text-decoration: none;
        }
        button{
          float:  right;
        }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-primary bg-dark text-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><b>ContactApp &nbsp;&nbsp;||</b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index1.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.html">Sign-Out</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="Contact.php">Contacts</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="body"><br><br>
  <div class="container">
  <div class="row">
    <div class="col">
      <img src="img\img3.png" alt="login" height="500px" width="600px">

    </div>

    <div class="col center">
      <br>
      <div class="text-center">
        <h3>Add Contacts</h3>
      </div><br>

      <form id="form" action="contact_con.php" method="post">

        <div class="row mb-3">
            <label for="Name" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="Name" name="Name" required>
            </div>
          </div>

          <div class="row mb-3">
            <label for="Ph_No" class="col-sm-2 col-form-label">Ph No</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="Ph_No" name="Ph_No" required>
            </div>
          </div>

          <div class="row mb-3">
            <label for="Email_id" class="col-sm-2 col-form-label">Email ID</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="Email_id" name="Email_id" required>
            </div>
          </div>

<br><br>
          <button type="submit" class="btn btn-primary btn-sm btn-block " name="submit"><h5>&nbsp;&nbsp;&nbsp;✅&nbsp;&nbsp; Save &nbsp;&nbsp;&nbsp;</h5></button>
<br><br>
      </form>

    </div>


  </div>
  <br><br>
</div><br><br>
</div>
<h2 class="text-center">My Contacts</h2>
<div class="container">
  <div class="row">
    <div class="col-1">

    </div>
    <div class="col--8">
      <table class="table table-striped table-dark text-light">
                  <thead>
                  <tr>
                      <th>Sl.no</th>
                      <th>Name</th>
                      <th>Phone Number</th>
                      <th>Email ID</th>
                    </tr>
                  </thead>

                  <?php
                              include("connection.php");
                              error_reporting(0);
                              $query = "SELECT * FROM contact";
                              $data = mysqli_query($con,$query);
                              $total = mysqli_num_rows($data);

                              // $result = mysqli_fetch_assoc($data);

                              echo $result['sl_no ']." ".$result['Name']." ".$result['Ph_No']." ".$result['Email_id'] ;



                                  // echo "$total";

                                  if($total != 0){
                                      // $result = mysqli_fetch_assoc($data);
                                      while($result = mysqli_fetch_assoc($data)){
                                          echo"
                                          <tr>
                                            <td>".$result['sl_no']."</td>
                                            <td>".$result['Name']."</td>
                                            <td>".$result['Ph_No']."</td>
                                            <td>".$result['Email_id']."</td>

                                          </tr>
                                          ";
                                      }
                                      // echo " Table has records";
                                  }
                                  else{
                                      echo "No recodrs found";
                                  }
                              ?>

                          </table>
                          <script>
                              function checkdelete()
                              {
                                  return confirm('Are you sure you want to delete this record!!')
                              }
                          </script>
                              </div>

        </body>
    </div>
    <div class="col-1">

    </div>
  </div>
</div>

</html>
