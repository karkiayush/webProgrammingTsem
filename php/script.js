function displayTime() {
    // Get the current time
    var currentTime = new Date();
    // Extract the hours, minutes, and seconds
    var hours = currentTime.getHours();
    var minutes = currentTime.getMinutes();
    var seconds = currentTime.getSeconds();
    // Add a leading zero to the minutes and seconds if necessary
    minutes = (minutes < 10 ? "0" : "") + minutes;
    seconds = (seconds < 10 ? "0" : "") + seconds;
    // Choose AM or PM as appropriate
    var ampm = (hours < 12) ? "AM" : "PM";
    // Convert the hours from military time to standard time
    hours = (hours > 12) ? hours - 12 : hours;
    // Set the hours to 12 if it is 0
    hours = (hours == 0) ? 12 : hours;
    // Update the time div with the current time
    document.getElementById("time").innerHTML = hours + ":" + minutes + ":" + seconds + " " + ampm;
}

// Display the time when the page loads
window.onload = function () {
    displayTime();
}

// Update the time every second
setInterval(displayTime, 1000);
