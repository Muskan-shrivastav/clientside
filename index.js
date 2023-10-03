function data() {
    var data = document.getElementById("text").value;
    console.log(data);
    if (data == "india" || data == "INDIA" || data == "India") {
      window.location.href = "/map1.html";
    } else {
      alert("sorry we dont have any data");
    }
  }
  
var tl = gsap.timeline()
  tl.from(".ex h1",{
    y:-200,
    duration:1,
    opacity:0,
    delay:0.5
  })
  
    
   