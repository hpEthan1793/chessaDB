<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Chessa Database Search</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

  </head>
  <style>
*{
    box-sizing: border-box;

}
    main {
      min-height: 96vh;
    }
  </style>
  <main>
    <div class="text-center">
      <h1>Chessa Database Search</h1>
      <p>Last updated: <a href="https://chessa.co.za/ratingsdatabase/ratingsdb.aspx"> 1 March 2024</a>
      </p>
    </div>
    
    <div class="d-lg-flex justify-content-center">
      <form action="search.php" method="get">
        <div class="d-flex">
          <input type="text" name="search" placeholder="Surname of Player" class="form-control form-control-lg m-2 w-96">
          <div class="text-center">
            <input type="submit" class="btn btn-dark m-2" value="Search">
          </div>
        </div>
      </form>
      <form action="searchID.php" method="get">
        <div class="d-flex">
          <input type="text" name="search" placeholder="ID of player" class="form-control form-control-lg m-2">
          <div class="text-center">
            <input type="submit" class="btn btn-dark m-2" value="Search">
          </div>
        </div>
      </form>
    </div>
    <div class="d-lg-flex justify-content-center">
      <form action="searchFED.php" method="get">
        <div class="d-flex">
          <input type="text" name="search" placeholder="Region Search" class="form-control form-control-lg m-2">
          <div class="text-center">
            <input type="submit" class="btn btn-dark m-2" value="Search">
          </div>
        </div>
      </form>
    <form action="searchTIT.php" method="get">
        <div class="d-flex">
          <input type="text" name="search" placeholder="Title Search (GM, IM, WIM...)" class="form-control form-control-lg m-2">
          <div class="text-center">
            <input type="submit" class="btn btn-dark m-2" value="Search">
          </div>
        </div>
      </form>
    </div>
    </div>
  </main>
</html>
