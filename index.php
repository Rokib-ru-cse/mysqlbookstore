<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Book Store</title>
  </head>
  <body>
    
        <?php
        require_once('config.php');
        $sql = $conn->query("SELECT * FROM bookstores");
       
        
        ?>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Book Store</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
      <div class="container mt-5">
        <div class="my-5 mx-auto">
              <form method="GET" action="search.php">
                <div class="form-group">
                  
                  <input name="title" type="text" class="form-control" placeholder="Enter Book Title" >
                </div>
                
                <div class="container text-center">
                <button type='submit' class='btn btn-outline-primary'>Search</button>
                </div>
        </form>

        </div>
       
    
        <table class="table table-striped">
    <thead>
            <tr>
                <th> ID </th>
                <th> Isbn </th>
                <th> Title </th>
                <th> Author </th>
                <th> Pages </th>
                <th> available </th>
                <th> Delete </th>
                <th> Edit </th>
            </tr>
    </thead>
    <tbody>

    <?php
      while($row = $sql->fetch(PDO::FETCH_ASSOC)){
        ?>
      
                <tr>
                <th scope="row"><?php echo $row["id"] ?></th>  
                <td><?php echo $row["isbn"] ?></td>
                <td><?php echo $row["title"] ?></td>
                <td><?php echo $row["author"] ?></td>
                <td><?php echo $row["pages"] ?></td>
                <td><?php echo $row["available"] ?></td>
                <td><a href="delete.php?id=<?php echo $row['id'] ?>">Delete</a></td>
                <td><a href="insert.php?id=<?php echo $row['id'] ?>">Edit</a></td>
            </tr>    
            <?php } ?> 
    </tbody>
    </table>
    </div>
    <div class="container text-center">
        <a  href="insert.php" class="btn btn-outline-primary">Add Book</a>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>