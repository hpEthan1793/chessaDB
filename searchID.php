<?php
// Define the path to your CSV file
$file_path = 'cfplay.csv';

// Open the file for reading
$file = fopen($file_path, 'r');

// Initialize an array to store the search results
$search_results = [];

// Loop through each row in the CSV file
while (($row = fgetcsv($file)) !== false) {
    
    // Check if the current row matches the search criteria
    if (stripos($row[0], $_GET['search']) !== false) {
        
        // If it does, add it to the search results array
        $search_results[] = $row;
        
    }
}

// Close the CSV file
fclose($file);

// Generate the HTML table
$table_html = '
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chessa Database Search</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<style>
main{
    min-height: 96vh;
}
</style>

<div>
<a href="/"><button class="btn btn-dark m-4">Home</button></a>
</div>

<main>

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
          <input type="text" name="search" placeholder="Federation Search" class="form-control form-control-lg m-2">
          <div class="text-center">
            <input type="submit" class="btn btn-dark m-2" value="Search">
          </div>
        </div>
      </form>
    <form action="searchTIT.php" method="get">
        <div class="d-flex">
          <input type="text" name="search" placeholder="Title Search" class="form-control form-control-lg m-2">
          <div class="text-center">
            <input type="submit" class="btn btn-dark m-2" value="Search">
          </div>
        </div>
      </form>
    </div>


<div class="table table-responsive-lg ">
    <table class="table table-striped table-bordered">';

// Add the table headers
$table_html .= '<thead class="table-dark"><tr><th>ID</th><th>SURNAME</th><th>FIRSTNAME</th><th>BDATE</th><th>SEX</th><th>TITLE</th><th>RATING</th><th>FED</th></tr></thead>';

// Add the table rows
$table_html .= '<tbody class="table-group-divider">';
foreach ($search_results as $result) {
    $table_html .= '<tr><td>' . $result[0] . '</td><td>' . $result[1] . '</td><td>' . $result[2] . '</td><td>' . $result[3] . '</td><td>' . $result[4] . '</td><td>' . $result[5] . '</td><td>' . $result[6] . '</td><td>' . $result[7] . '</td></td>' . $result[8] . '</td></tr>' ;
}
$table_html .= '</tbody>';

$table_html .= '</table></div></main>
';

// Output the HTML table
echo $table_html;

?>

