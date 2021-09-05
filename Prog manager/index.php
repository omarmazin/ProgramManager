<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manager</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "omarmazin";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        echo "errr";
      } 
    if(isset($_POST["Submit"])){
        $selectOption = $_POST['taskOption'];
        $sql = "UPDATE programmanagment SET color='$selectOption' WHERE id=1";
        $progn = $_POST['pro'];
        $sql = "UPDATE programmanagment SET progn='$progn' WHERE id=1";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }
    ?>
    <form method="POST">
        <div id="UpperBar"></div>
        <div id="Headline">Program Manager</div>
        <div id="Backg" >Background color </p> </div>
        <div id="BackSel">
            <select name="taskOption" class="form-select" aria-label="Disabled select example" >
                <option value="Red">Red</option>
                <option value="Green">Green</option>
                <option value="Yellow">Yellow</option>
            </select>
        </div>
        <div id="ProgName">Program Name  </div>
        <div id="Progin"><input type="text" size="15px" placeholder="Example : omar" name="pro" required></div>
        <div id="su"><input  class="btn btn-outline-success" type="submit" value="Submit" name="Submit"></div>
        
    </form>
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>