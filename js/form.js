
// get form element
const form = document.querySelector('.addMeals');

// console.log(form);

form.addEventListener('submit', function(e){

    // prevent the event from submitting the form, no redirect
    e.preventDefault();

    // console.log(this);

    const formattedFormData = new FormData(form);

    postData(formattedFormData);
});

async function postData(formattedFormData){

    // get data from the form
    const response = await fetch('/php/functions/form',{
        method: 'POST',
        body: formattedFormData
    });

    const data = await response.text();

    console.log(data);
}