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
                                <h1 class="header-title">Add menu</h1>

                        </div>
                    </div>


                </header>
                
                
                <!-- main content -->

                <main class="content">
                    <div class="container">
                        <ul class="days-list">
                            <li class="day">
                                <a href="# " class="active item">Monday</a>
                            </li>
                        
                            <li class="day">
                                <a href="#" class="item">Tuesday</a>
                            </li>
                            <li class="day">
                                <a href="#" class="item">Wednesday</a>
                            </li>
                            <li class="day">
                                <a href="#" class="item">Thursday</a>
                            </li>
                            <li class="day">
                                <a href="#" class="item">Friday</a>
                            </li>
                            <li class="day">
                                <a href="#" class="item">Saturday</a>
                            </li>
                            <li class="day">
                                <a href="#" class="item">Sunday</a>
                            </li>
                        </ul>

                        <div class="meal">
                            <div class="meal-day" data-meal-day="1">
                                <!-- meal-day = 1 is for monday -->
                                <form action="#" method="post">

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
                                            <input type="text" name="food_name" id="food_name" class="form-control" placeholder="what is for monday">
                                        </div>  
                                    </div>

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
