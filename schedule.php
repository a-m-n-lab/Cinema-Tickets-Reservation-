<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="img/logo.png">
    <link rel="stylesheet" href="style/styles.css">
    <link rel="stylesheet" href="styles/main.css">
    <title>Movies Schedule</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>

<header></header>

<?php require "controllerFilme.php";
$language = "engleza";
 	include "sections/nav.sec.php"; ?>
?>
<body>
    <div class="schedule-section">
        <h1>Schedule</h1>
        <div class="schedule-dates">
            <div class="schedule-item">March 10,2021</div>
            <div class="schedule-item schedule-item-selected">March 11,2021</div>
            <div class="schedule-item">March 12,2021</div>
            <div class="schedule-item">March 13,2021</div>
            <div class="schedule-item">March 14,2021</div>
        </div>
        <div class="schedule-table">
            <table>
              <?php
              $filme = new filme();
              $query = "SELECT * FROM filme";
              $product_array = $filme->getAllMovies($query);

              if(!empty($product_array)){
           			//var_dump($product_array);

           			foreach($product_array as $key => $value){ ?>
                <tr>
                    <th>SHOW</th>
                    <th>SCHEDULE IN CINEMA</th>
                </tr>
                <tr class="fade-scroll">
                    <td>
                      <img style="width:250px; height:300px;" src="<?php echo $product_array[$key]['image'];?> "></img>
                        <h2 > <?php echo $product_array[$key]['name'];?> </h2>
                        <i class="far fa-clock"></i> 125m <i class="fas fa-desktop"></i> IMAX
                        <h3 >DESCRIPTION</h3>
                        <p><?php echo $product_array[$key]['descriere_en'];?> </p>
                        <div class="schedule-item"> DETAILS</a>
                        </div>
                    </td>
                    <td>
                        <div class="hall-type">
                            <h3>Private Hall</h3>
                            <div>
                                <div class="schedule-item"><i class="far fa-clock"></i></div>
                                <div class="schedule-item">09:00 AM</div>
                                <div class="schedule-item">11:30 AM</div>
                                <div class="schedule-item">06:00 PM</div>
                            </div>
                        </div>
                        <div class="hall-type">
                            <h3>VIP Hall</h3>
                            <div>
                                <div class="schedule-item"><i class="far fa-clock"></i></div>
                                <div class="schedule-item">09:00 AM</div>
                                <div class="schedule-item">11:30 AM</div>
                                <div class="schedule-item">06:00 PM</div>
                            </div>
                        </div>
                        <div class="hall-type">
                            <h3>Main Hall</h3>
                            <div>
                                <div class="schedule-item"><i class="far fa-clock"></i></div>
                                <div class="schedule-item">09:00 AM</div>
                                <div class="schedule-item">11:30 AM</div>
                                <div class="schedule-item">06:00 PM</div>
                            </div>
                        </div>
                    </td>
                </tr>


                <?php


                 			}
                 		}

                 	 ?>

            </table>
        </div>


    </div>
    <footer></footer>

    <script src="scripts/jquery-3.3.1.min.js "></script>
    <script src="scripts/owl.carousel.min.js "></script>
    <script src="scripts/script.js "></script>
</body>

</html>
