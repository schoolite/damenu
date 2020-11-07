window.addEventListener('load', function(){
    
    // querySelectorAll shortener
    const selectAll = (prop)=>{
        return  document.querySelectorAll(prop);
    }


    /** Getting all days of the week list to toggle active states*/
    
    const days = selectAll('.day .item');

    // handling clicking of each day menu on the page
    days.forEach(day => {
        day.addEventListener('click', function(e) {
            e.preventDefault();
            /**
             * On click if elements contains  class of active get the class removed
             * current element then get the active class 
             */
            removeDaysActiveClass();
            this.classList.add('active');
            
            // assigning the day value to the currentDayForm to keep track of it
            currentDayForm = this.dataset.day;
            
            document.querySelectorAll('.meal-day').forEach(function(mealDay){
                let isCurrentDay = mealDay.dataset.day === currentDayForm;
        
                if(isCurrentDay){
                    mealDay.classList.add('show');
                }else{
                    mealDay.classList.remove('show');
                }
            });


        });
    });


    // function to handle removing of active class
    const removeDaysActiveClass = () => {
        days.forEach(day => {
            day.classList.contains('active') ? day.classList.remove('active') : '';
        })
    }


    let saveBtn = document.querySelector("#saveBtn");

    saveBtn.addEventListener("click", function(e){
        e.preventDefault();
        
        let requiredFields = document.querySelectorAll('input[name$="_breakfast"],input[name$="_lunch"],input[name$="_dinner"]');
        let validated = [...requiredFields].some(function(field){
            return field.value !== "";
        });

        if(validated){
            document.getElementById('timeTable').submit();
        }else{
            alert("Some required field are missing");
        }

    })
   
});


