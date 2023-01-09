// Set the date we're counting down to
var countDownDate = new Date("Jan 12, 2023 18:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get today's date and time
    var now = new Date().getTime();

    // Find the distance between now and the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Display the result in the element with id="timer"
    document.getElementById("timer").innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";

    // If the count down is finished, write some text
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("timer").innerHTML = "EXPIRED";
    }
}, 1000);

// Form Submit
$(document).ready(function () {
    $("#register-form").submit(function (event) {
        event.preventDefault();
        var formData = {
            name: $("#name").val(),
            email: $("#email").val(),
            age: $("#age").val(),
            mobile: $("#mobile").val(),
            organization: $("#organization").val(),
            club: $("#club").val(),
        };
  
        $.ajax({
            type: "POST",
            url: "submit.php",
            data: formData,
            dataType: "json",
            encode: true,
            success:function (data) {
                console.log(data);
                $('.modal-content').empty().innerHTML(
                    `<p>Hello `+formData.name+`!</p>

                    <p>Thank you for registering for Young India Foundation's National Youth Day Celebrations. Join us and our exceptional 25 Under 25 honorees as we recognize their exceptional skill, work and contribution to India's nation building.</p>
                    
                    <p>We hope to see you at <a href="https://goo.gl/maps/x6G8VPP5PTN5xs7YA" target="_blank">India International Centre</a> starting 6 p.m. onwards.</p>
                    
                    <p>Excited to meet you,</p>
                    
                    <p>Young India Foundation</p>`
                );
            }      
        })
    })
})