window.addEventListener('load', function(){


    /**
     * Getting all days of the week list to toggle active states
     */

    const days = document.querySelectorAll('.day .item');
    
    days.forEach(day => {
        day.addEventListener('click', function() {
            /**
             * On click all elements with class of actives get the class removed
             * current element should get the active class
             */
            removeDaysActiveClass();
            this.classList.add('active');

        })
    })

    const removeDaysActiveClass = () => {
        days.forEach(day => {
            day.classList.contains('active') ? day.classList.remove('active') : '';
        })
    }
    
    
    
   
})