
  var newStopForm = document.querySelector(".stop-copy");
    var stops = document.querySelector(".stops")
    
    function addStop(){
        alert("yoo")
        var stop = newStopForm.cloneNode();
        stops.appendChild(stop);
    }
    