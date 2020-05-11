// window.onscroll = () => {
//     stickyFunction()
//   };
  
//   const navbar = document.getElementById("navbar");
//   const sticky = navbar.offsetTop;
  
//   stickyFunction = () => {
//     if (window.pageYOffset >= sticky) {
//       navbar.classList.add("sticky")
//     } else {
//       navbar.classList.remove("sticky");
//     }
//   }

function validate() {
    var regName = /^[a-zA-Z]+ [a-zA-Z]+$/;
    var name = document.getElementById('name').value;
    if(!regName.test(name)){
        alert('Please enter your full name (first & last name).');
        document.getElementById('name').focus();
        return false;
    }

    var email = document.getElementById('email').value;
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if (!filter.test(email)) {
    alert('Please provide a valid email address');
    document.getElementById('email').focus();
    return false;
    }

 
    var name = document.getElementById('mobile').value;
    var phoneno = /^\d{11}$/;
    if(!mobile.value.match(phoneno)){
        alert("Please fill in your correct phone number");
        return false;
    }
    
    var service = document.getElementById('service').value;
    var matches = service.match(/\b[^\d\s]+\b/g);
    if (!(matches && matches.length >= 2)) {
        alert('Please enter service(s)');
        document.getElementById('service').focus();
        return false;
    }

}