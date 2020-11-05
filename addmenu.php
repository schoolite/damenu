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
                                <a href="# " class="active item" data-day="1">Monday</a>
                            </li>
                        
                            <li class="day">
                                <a href="#" class="item" data-day="2">Tuesday</a>
                            </li>
                            <li class="day">
                                <a href="#" class="item" data-day="3">Wednesday</a>
                            </li>
                            <li class="day">
                                <a href="#" class="item" data-day="4">Thursday</a>
                            </li>
                            <li class="day">
                                <a href="#" class="item" data-day="5">Friday</a>
                            </li>
                            <li class="day">
                                <a href="#" class="item" data-day="6">Saturday</a>
                            </li>
                            <li class="day">
                                <a href="#" class="item" data-day="7">Sunday</a>
                            </li>
                        </ul>

                        <div class="meal">
                            <div class="meal-day show" data-meal-day="1">
                                <!-- meal-day = 1 is for monday -->
                                <form action="#" method="post">

                                    <input type="hidden" name="day" value="1">
                                    <div class="form-group-inline">
                                        <div class="form-group">
                                            <select name="category" id="category" class="form-control">
                                                <option value="1">Breakfast</option>
                                                <option value="2">Launch</option>
                                                <option value="3">Dinner</option>
                                                <option value="4">Braunch</option>
                                                <option value="5">Desert</option>
                                            </select>
                                        </div>
    
                                        <div class="form-group form-group-2">
                                            <input type="text" name="food_name" id="food_name" class="form-control" placeholder="what's for breakfast">
                                        </div>  

                                    </div>
                                    <a href="#" class="btn-link add-meal" data-for="1">Add meal </a>

                                    <button type="submit" class="btn btn-primary">Save</button>
                                </form>
                            </div>
                            <div class="meal-day " data-meal-day="2">
                                <!-- meal-day = 2 is for tuesday -->
                                <form action="#" method="post">

                                    <input type="hidden" name="day" value="1">
                                    <div class="form-group-inline">
                                        <input type="hidden" name="day" value="2">
                                        <div class="form-group">
                                            <select name="category" id="category" class="form-control">
                                                <option value="1">Breakfast</option>
                                                <option value="2">Launch</option>
                                                <option value="3">Dinner</option>
                                                <option value="4">Braunch</option>
                                                <option value="5">Desert</option>
                                            </select>
                                        </div>
    
                                        <div class="form-group">
                                            <input type="text" name="food_name" id="food_name" class="form-control" placeholder="what is for tuesday">
                                        </div>  

                                    </div>
                                    <a href="#" class="btn-link add-meal" data-for="2">Add meal </a>

                                    <button type="submit" class="btn btn-primary">Save</button>
                                </form>
                            </div>
                            <div class="meal-day" data-meal-day="3">
                                <!-- meal-day = 3 is for wednesday -->
                                <form action="#" method="post">

                                    <input type="hidden" name="day" value="1">
                                    <div class="form-group-inline">
                                       
                                        <div class="form-group">
                                            <select name="category" id="category" class="form-control">
                                                <option value="1">Breakfast</option>
                                                <option value="2">Launch</option>
                                                <option value="3">Dinner</option>
                                                <option value="4">Braunch</option>
                                                <option value="5">Desert</option>
                                            </select>
                                        </div>
    
                                        <div class="form-group">
                                            <input type="text" name="food_name" id="food_name" class="form-control" placeholder="what is for wednesday">
                                        </div>  

                                    </div>
                                    <a href="#" class="btn-link add-meal" data-for="3">Add meal </a>

                                    <button type="submit" class="btn btn-primary">Save</button>
                                </form>
                            </div>
                            <div class="meal-day" data-meal-day="4">
                                <!-- meal-day = 4 is for thursday -->
                                <form action="#" method="post">

                                    <input type="hidden" name="day" value="4">
                                    <div class="form-group-inline">
                                      
                                        <div class="form-group">
                                            <select name="category" id="category" class="form-control">
                                                <option value="1">Breakfast</option>
                                                <option value="2">Launch</option>
                                                <option value="3">Dinner</option>
                                                <option value="4">Braunch</option>
                                                <option value="5">Desert</option>
                                            </select>
                                        </div>
    
                                        <div class="form-group">
                                            <input type="text" name="food_name" id="food_name" class="form-control" placeholder="what is for thursday">
                                        </div>  

                                    </div>
                                    <a href="#" class="btn-link add-meal" data-for="4">Add meal </a>

                                    <button type="submit" class="btn btn-primary">Save</button>
                                </form>
                            </div>
                            <div class="meal-day" data-meal-day="5">
                                <!-- meal-day = 5 is for friday-->
                                <form action="#" method="post">

                                    <input type="hidden" name="day" value="5">
                                    <div class="form-group-inline">
                                      
                                        <div class="form-group">
                                            <select name="category" id="category" class="form-control">
                                                <option value="1">Breakfast</option>
                                                <option value="2">Launch</option>
                                                <option value="3">Dinner</option>
                                                <option value="4">Braunch</option>
                                                <option value="5">Desert</option>
                                            </select>
                                        </div>
    
                                        <div class="form-group">
                                            <input type="text" name="food_name" id="food_name" class="form-control" placeholder="what is for friday">
                                        </div>  

                                    </div>
                                    <a href="#" class="btn-link add-meal" data-for="5">Add meal </a>

                                    <button type="submit" class="btn btn-primary">Save</button>
                                </form>
                            </div>
                            <div class="meal-day" data-meal-day="6">
                                <!-- meal-day = 6 is for saturday -->
                                <form action="#" method="post">

                                    <input type="hidden" name="day" value="6">
                                    <div class="form-group-inline">
                                        
                                        <div class="form-group">
                                            <select name="category" id="category" class="form-control">
                                                <option value="1">Breakfast</option>
                                                <option value="2">Launch</option>
                                                <option value="3">Dinner</option>
                                                <option value="4">Braunch</option>
                                                <option value="5">Desert</option>
                                            </select>
                                        </div>
    
                                        <div class="form-group">
                                            <input type="text" name="food_name" id="food_name" class="form-control" placeholder="what is for saturday">
                                        </div>  

                                    </div>
                                    <a href="#" class="btn-link add-meal" data-for="6">Add meal </a>

                                    <button type="submit" class="btn btn-primary">Save</button>
                                </form>
                            </div>
                            <div class="meal-day" data-meal-day="7">
                                <!-- meal-day = 7 is for sundary -->
                                <form action="#" method="post">

                                    <input type="hidden" name="day" value="7">
                                    <div class="form-group-inline">
                                        <div class="form-group">
                                            <select name="category" id="category" class="form-control">
                                                <option value="1">Breakfast</option>
                                                <option value="2">Launch</option>
                                                <option value="3">Dinner</option>
                                                <option value="4">Braunch</option>
                                                <option value="5">Desert</option>
                                            </select>
                                        </div>
    
                                        <div class="form-group">
                                            <input type="text" name="food_name" id="food_name" class="form-control" placeholder="what is for sunday">
                                        </div>  

                                    </div>
                                    <a href="#" class="btn-link add-meal" data-for="7">Add meal </a>

                                    <button type="submit" class="btn btn-primary">Save</button>
                                </form>
                            </div>
                        </div>
                        
                        
                    </div>
                </main>
        

         
    </div>
</body>
</html>

<script src="js/main.js"></script>
