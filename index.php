<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/adf01c95ca.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style/index.css">
    <title>My Note</title>
  </head>
  <body>
    <nav class="navbar navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          MyNote
        </a>
      </div>
    </nav>

    <div class="container note-body">
      <h1>My Notes:</h1>
      <ul class="container">
        <?php
        require_once "note/connection.php";

        $query = mysqli_query($connection, "SELECT * FROM notes");
        $queryResultArray = mysqli_fetch_all($query);

        foreach ($queryResultArray as $row) {
          echo "<li>
          <h2> ${row[0]}</h2>
          <p class='last-modified'>
            Last Modified: ${row[3]}
          </p>
          <p class='note-content'>
            ${row[1]}
          </p>
          <a href='note/edit.php?id=${row[4]}'>
            <button>Edit</button>
          </a>
          <a href='note/delete.php?id=${row[4]}'>
            <button>Delete</button>
          </a>
        </li>";
        }

        ?>


      </ul>
    </div>

    <a href="note/add.php" class="add-btn">
      <i class="fas fa-plus plus"></i>
    </a>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>