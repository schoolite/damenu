window.addEventListener('load', function(){
    
    // querySelectorAll shortener
    const selectAll = (prop)=>{
        return  document.querySelectorAll(prop);
    }

    // querySelector for one shortener
    const selectOne = (prop)=>{
        return document.querySelector(prop);
    }

    /** Getting all days of the week list to toggle active states*/
    
    const days = selectAll('.day .item');



    /* Getting all meal days element to show each meal based on which is clicked for */
    const mealDays = selectAll('.meal .meal-day');



    // Getting add meal buttons
    const addMealBtn = selectAll('.add-meal');



    // current Day selected in the form
    let currentDayForm  = 1;

    // tracking nodeposition for form elements
    let nodeLevel = 3;



    // function to show /hide each meal day
    const showCurrentMealDay = (day) => {
       
        mealDays.forEach(meal => {
            if(meal.dataset.mealDay !== day){
                meal.classList.add('hide');
                meal.classList.remove('show');
            }else{
                meal.classList.add('show');
                meal.classList.remove('hide');
            }
        });
    }

   

    // handling clicking of each day menu on the page
    days.forEach(day => {
        day.addEventListener('click', function() {
            /**
             * On click if elements contains  class of active get the class removed
             * current element then get the active class 
             */
            removeDaysActiveClass();
            this.classList.add('active');

            // assigning the day value to the currentDayForm to keep track of it
            currentDayForm = this.dataset.day;

            showCurrentMealDay(currentDayForm);
            
            nodeLevel = 3;

        });
    });



    // function to handle removing of active class
    const removeDaysActiveClass = () => {
        days.forEach(day => {
            day.classList.contains('active') ? day.classList.remove('active') : '';
        })
    }

    const buildForm = function(el, parentTracker){
        el.innerHTML = `
            
            <input type="hidden" name="day" value="${parentTracker}">
            <div class="form-group">
                <select name="category" id="category" class="form-control">
                    <option value="1">Breakfast</option>
                    <option value="2">Launch</option>
                    <option value="3">Dinner</option>
                    <option value="4">Brunch</option>
                    <option value="5">Desert</option>
                </select>
            </div>

            <div class="form-group">
                <input type="text" name="food_name" id="food_name" class="form-control" placeholder="what is for sunday">
            </div> 
    
    
    
        `;
    }

    const formCountChecker = function(parentTracker){
        let forms = selectAll('.form-group-inline');
        let count = 1;
        forms.forEach(function(form){
            if(form.parentNode.parentNode.dataset.mealDay == parentTracker){
              count++;
            }
           
        })

      

        return (count > 5) ? false : true;
    };


    addMealBtn.forEach(btn => {

        btn.addEventListener('click', (e)=> {
            e.preventDefault();

            // get parent node identity
            let parentTracker = btn.parentNode.parentNode.dataset.mealDay;

            // get mealElement based on the parentTracker
            let mealELement =  [...mealDays].filter(meal => meal.dataset.mealDay == parentTracker)[0];
           
            // element where the new form will be place after

            let targetFormElement = mealELement.childNodes[3].childNodes[nodeLevel];
            nodeLevel++;
            // console.log(mealELement.childNodes[3].childNodes);
            
            let el = document.createElement('div');
            if(formCountChecker(parentTracker)){
                el.classList.add('form-group-inline');
                buildForm(el, parentTracker);
            }
            
           

            targetFormElement.after(el);     
            console.log(nodeLevel);
            
        });

    });

  


    
    

   
});