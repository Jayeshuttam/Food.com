let submitButton1 = document.getElementById('submitbutton');
submitButton1.addEventListener('click', handleEvent());

function handleEvent() {
    let fname1 = document.getElementById('fname');
    console.log(fname1.value);
    let lName1 = document.getElementById('lname');
    console.log(lName1.value);
    let phone1 = document.getElementById('phn');
    console.log(phone1.value);
    let email1 = document.getElementById('email');
    let order1 = document.getElementById("order");
    let complain1 = document.getElementById('c&s');
    var orderValue = order1.value;
    var output = 'Feedback/Complain Registered for ' + orderValue + '\nClient name' + (fname1.value + ' ' + lName1.value) + '\nYou will get your follow up on your email ' + email1.value
    alert(output);



}