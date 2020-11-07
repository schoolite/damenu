<?php 
    require_once('php/includes/config.php'); 
    require_once('php/classes/database.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Da menu</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="app">

            <header class="header">
                
                    <nav class="navbar">
                        <div class="container">
                            <a href="/" class="navbar-brand">
                                <img src="img/logo.svg" alt="logo" >
                            </a>
                        </div>
                    </nav>

                    <div class="header-content header-content-mini">
                        <div class="container">
                                <h1 class="header-title">Add timetable</h1>

                        </div>
                    </div>


                </header>
                
                
                <!-- main content -->

                <main class="content">
                    <div class="container">
                        <ul class="days-list">
                            <li class="day">
                                <a href="# " class="active item" data-day="mon">Monday</a>
                            </li>
                        
                            <li class="day">
                                <a href="#" class="item" data-day="tue">Tuesday</a>
                            </li>
                            <li class="day">
                                <a href="#" class="item" data-day="wed">Wednesday</a>
                            </li>
                            <li class="day">
                                <a href="#" class="item" data-day="thur">Thursday</a>
                            </li>
                            <li class="day">
                                <a href="#" class="item" data-day="fri">Friday</a>
                            </li>
                            <li class="day">
                                <a href="#" class="item" data-day="sat">Saturday</a>
                            </li>
                            <li class="day">
                                <a href="#" class="item" data-day="sun">Sunday</a>
                            </li>
                        </ul>

                        <div class="meal">
                            <form action="#" method="POST" id="timeTable" class="addMeal">
                                <div class="meal-day show" data-day="mon">
                                    <h2>Monday</h2>
                                    <div class="form-group">
                                        <input type="text" name="mon_breakfast" id="food_name" class="form-control" placeholder="what's for breakfast">
                                    </div>  
                                    <div class="form-group">
                                        <input type="text" name="mon_brunch" id="food_name" class="form-control" placeholder="what's for brunch">
                                    </div>  
                                    <div class="form-group">
                                        <input type="text" name="mon_lunch" id="food_name" class="form-control" placeholder="what's for lunch">
                                    </div>  
                                    <div class="form-group">
                                        <input type="text" name="mon_dinner" id="food_name" class="form-control" placeholder="what's for dinner">
                                    </div>  
                                    <div class="form-group">
                                        <input type="text" name="mon_dessert" id="food_name" class="form-control" placeholder="what's for dessert">
                                    </div>  
                                </div>
                                <div class="meal-day" data-day="tue">
                                   <h2>Tuesday</h2>
                                   <div class="form-group">
                                        <input type="text" name="tue_breakfast" id="food_name" class="form-control" placeholder="what's for breakfast">
                                    </div>  
                                    <div class="form-group">
                                        <input type="text" name="tue_brunch" id="food_name" class="form-control" placeholder="what's for brunch">
                                    </div>  
                                    <div class="form-group">
                                        <input type="text" name="tue_lunch" id="food_name" class="form-control" placeholder="what's for lunch">
                                    </div>  
                                    <div class="form-group">
                                        <input type="text" name="tue_dinner" id="food_name" class="form-control" placeholder="what's for dinner">
                                    </div>  
                                    <div class="form-group">
                                        <input type="text" name="tue_dessert" id="food_name" class="form-control" placeholder="what's for dessert">
                                    </div>  
                                </div>
                                <div class="meal-day" data-day="wed">
                                   <h2>Wednessday</h2>
                                   <div class="form-group">
                                        <input type="text" name="wed_breakfast" id="food_name" class="form-control" placeholder="what's for breakfast">
                                    </div>  
                                    <div class="form-group">
                                        <input type="text" name="wed_brunch" id="food_name" class="form-control" placeholder="what's for brunch">
                                    </div>  
                                    <div class="form-group">
                                        <input type="text" name="wed_lunch" id="food_name" class="form-control" placeholder="what's for lunch">
                                    </div>  
                                    <div class="form-group">
                                        <input type="text" name="wed_dinner" id="food_name" class="form-control" placeholder="what's for dinner">
                                    </div>  
                                    <div class="form-group">
                                        <input type="text" name="wed_dessert" id="food_name" class="form-control" placeholder="what's for dessert">
                                    </div>
                                </div>
                                <div class="meal-day" data-day="thur">
                                   <h2>Thursday</h2>
                                   <div class="form-group">
                                        <input type="text" name="thur_breakfast" id="food_name" class="form-control" placeholder="what's for breakfast">
                                    </div>  
                                    <div class="form-group">
                                        <input type="text" name="thur_brunch" id="food_name" class="form-control" placeholder="what's for brunch">
                                    </div>  
                                    <div class="form-group">
                                        <input type="text" name="thur_lunch" id="food_name" class="form-control" placeholder="what's for lunch">
                                    </div>  
                                    <div class="form-group">
                                        <input type="text" name="thur_dinner" id="food_name" class="form-control" placeholder="what's for dinner">
                                    </div>  
                                    <div class="form-group">
                                        <input type="text" name="thur_dessert" id="food_name" class="form-control" placeholder="what's for dessert">
                                    </div>
                                </div>
                                <div class="meal-day" data-day="fri">
                                   <h2>Friday</h2>
                                   <div class="form-group">
                                        <input type="text" name="fri_breakfast" id="food_name" class="form-control" placeholder="what's for breakfast">
                                    </div>  
                                    <div class="form-group">
                                        <input type="text" name="fri_brunch" id="food_name" class="form-control" placeholder="what's for brunch">
                                    </div>  
                                    <div class="form-group">
                                        <input type="text" name="fri_lunch" id="food_name" class="form-control" placeholder="what's for lunch">
                                    </div>  
                                    <div class="form-group">
                                        <input type="text" name="fri_dinner" id="food_name" class="form-control" placeholder="what's for dinner">
                                    </div>  
                                    <div class="form-group">
                                        <input type="text" name="fri_dessert" id="food_name" class="form-control" placeholder="what's for dessert">
                                    </div>
                                </div>
                                <div class="meal-day" data-day="sat">
                                   <h2>Saturday</h2>
                                   <div class="form-group">
                                        <input type="text" name="sat_breakfast" id="food_name" class="form-control" placeholder="what's for breakfast">
                                    </div>  
                                    <div class="form-group">
                                        <input type="text" name="sat_brunch" id="food_name" class="form-control" placeholder="what's for brunch">
                                    </div>  
                                    <div class="form-group">
                                        <input type="text" name="sat_lunch" id="food_name" class="form-control" placeholder="what's for lunch">
                                    </div>  
                                    <div class="form-group">
                                        <input type="text" name="sat_dinner" id="food_name" class="form-control" placeholder="what's for dinner">
                                    </div>  
                                    <div class="form-group">
                                        <input type="text" name="sat_dessert" id="food_name" class="form-control" placeholder="what's for dessert">
                                    </div>
                                </div>
                                <div class="meal-day" data-day="sun">
                                   <h2>Sunday</h2>
                                   <div class="form-group">
                                        <input type="text" name="sun_breakfast" id="food_name" class="form-control" placeholder="what's for breakfast">
                                    </div>  
                                    <div class="form-group">
                                        <input type="text" name="sun_brunch" id="food_name" class="form-control" placeholder="what's for brunch">
                                    </div>  
                                    <div class="form-group">
                                        <input type="text" name="sun_lunch" id="food_name" class="form-control" placeholder="what's for lunch">
                                    </div>  
                                    <div class="form-group">
                                        <input type="text" name="sun_dinner" id="food_name" class="form-control" placeholder="what's for dinner">
                                    </div>  
                                    <div class="form-group">
                                        <input type="text" name="sun_dessert" id="food_name" class="form-control" placeholder="what's for dessert">
                                    </div>
                                </div>
                                
                                <!-- <button class="btn-full btn-full-secondary" id="addMeal">Add meal</button> -->
                                <button class="btn-full btn-full-primary" id="saveBtn">Save</button>
                            </form>
                        </div>
                        
                        
                    </div>
                </main>
        

         
    </div>
</body>
</html>

<?php 
    $db = new Database($db);

    if(count($_POST)){
        $formData = json_encode($_POST);

        try{

            $db->insert($formData);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
?>

<script src="js/main.js"></script>

