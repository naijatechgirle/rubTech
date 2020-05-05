let myform = document.querySelector("#myform");
myform.addEventListener('submit', (e) => {
    validate(e);
})

function validate() {
    var regName = /^[a-zA-Z]+ [a-zA-Z]+$/;
    var name = document.getElementById('name').value;
    if(!regName.test(name)){
        alert('Please enter your full name (first & last name).');
        document.getElementById('name').focus();
        return false;
    }

    var email = document.forms["myform"]["email"].value;
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if (!filter.test(email)) {
    alert('Please provide a valid email address');
    emai
    return false;
    }
    event.stopPropagation();

    
//         var text = document.getElementById('text').value;
//    var matches = text.match(/\b[^\d\s]+\b/g);
//     if (!matches && matches.cha < 2) {
//         alert('please type service(s) you need!');
//         text.focus();
//          return false;
//     }

    var name = document.getElementById('mobile').value;
    var phoneno = /^\d{11}$/;
  if(!mobile.value.match(phoneno))
        {
            alert("Please fill in your correct phone number!");
      return false;
        }
   

}