<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Seasonal Produce</title>
    <link rel="icon" type="image/x-icon" href="./fruit_and_veg.jpeg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

</head>
<body>
<div class="container">
    <h1>Seasonal Fruit and Vegetables</h1>
    <p>What produce is in season this month?</p>
    <p>
        Current Date is:
        <span id="currDate" name="currDate"></span>
    </p>
    <p>
        Current Month is:
        <span id="currMonth"></span>
    </p>
</div>
<div class="container">
    <p>
        Fruits:
        <span id="fruits"></span>
    </p>
    <p>
        Vegetables:
        <span id="vegetables"></span>
    </p>
</div>

<script src="current_date.js"></script>
<script>
    //window.onload = function (e){
    $(document).ready(function(){
        display_current_date();
    })
    //}
</script>
</body>
</html>