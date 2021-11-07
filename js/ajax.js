function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  const lat_coord = position.coords.latitude;
  const long_coord = position.coords.longitude;
  
  $.ajax({
    method: 'post',
    url: 'js/views.php',
    data: {lat: lat_coord, long:long_coord},
    success:function(data){

    }
  });    
  return false;

  }

  getLocation();