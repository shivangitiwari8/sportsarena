// document.getElementById('btn').addEventListener("click", function () {
//     Event.
//     setTimeout(function () {
//         window.location.href = 'loginbackend.php';
//     },2000);

// }
// );

// document.ready(function(){
//     $('.Submit').click(function(){
//     alert('This is an alert after the submit button has been pressed'); //provide an alert to the screen
//     return false; //prevents form from submitting
//     });
// });

var button = document.getElementById("btn");
// var form = document.getElementById("new_video");

button.onclick = function(event) {
  event.preventDefault();
  
  setTimeout((document.getElementById('form1')).submit(), 5000);
}




document.getElementById("football").addEventListener("click", function() {
    // Play kicking sound
    // var kickSound = document.getElementById("kick-sound");
    // kickSound.play();

    // Add animation class
    this.classList.add("kick");
    document.getElementById('uname').classList.add('fadeoutanimation');
    document.getElementById('pass').classList.add("fadeoutanimation");
    document.getElementById('heading').classList.add("fadeoutanimation");
    
    // document.getElementById('signintext').innerHTML="<p></p>";
    
    // Wait for the animation to complete, then show message and redirect
    this.addEventListener('animationend', function() {
        document.getElementById("congratulations").classList.remove("hidden");
        document.getElementById('uname').classList.add('hidden');
        document.getElementById('pass').classList.add("hidden");
        document.getElementById('heading').classList.add("hidden");
        
        // Ensure that the message is visible for a while before redirecting
        setTimeout(function() {
            // window.location.href = "loginbackend.php";
            // form.submit()
        }, 2000); // Delay of 2 seconds
    });


});
