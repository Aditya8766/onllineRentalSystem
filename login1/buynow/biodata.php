
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js">
    </head>


    <body style="background-image: radial-gradient(#f5cdcd,#ad7a71);">
   <!-- <div class="container">
    <a href="index.php"><button type="button" class="btn btn-primary btn-lg" >Add Data</button></a>
    </div>-->
    <div class="container">
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">FirstName</th>
                <th scope="col">LastName</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Returning Date</th>
                <th scope="col">Gender</th>
                <th scope="col">Address</th>
            </tr>
            <?php 
                include_once"config (2).php";
                $sql=mysqli_query($conn,"SELECT * FROM details");

               // while($row=mysqli_fetch_assoc($sql)){
                //    $unserializeHobby=unserialize($row['hobbies']);

           ?>

        </thead>
        <tbody>
            <tr>
                <td><?php=$row["first_name"] ?></td>
                <td><?php=$row["last_name"] ?></td>
                <td><?php=$row["email"] ?></td>
                <td><?php=$row["mobile_num"] ?></td>
                <td><?php=$row["dob"] ?></td>
                <td><?php=$row["gender"] ?></td>
                <td><?php=$row["address"] ?></td>
              <!--  <td>  <?php 
                       // foreach ($unserializeHobby as $key => $value){
                       //     echo $value.", ";
                    //    }
                   ?>
                </td>
            </tr> -->
            <?php 
      //          }
            ?>
           
        </tbody>
    </table>
    </div>
    </body>

</html>

