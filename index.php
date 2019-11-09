<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css">
  
</head> 
  <body>
  <div class="container">
<div class="card w-25">
        <img class="card-img-top" src="http://www.orseu-concours.com/451-615-thickbox/selor-test-de-raisonnement-abstrait-niveau-a.jpg" alt="Company logo">
        <div class="card-body">
          <h5 class="card-title">Frete do produto</h5>
		  <form action="" class="mt-3">  

          <div class=" w-25 d-inline"><input type="text" class="w-75" placeholder="Forneça um endereço" onkeyup="checkForm()"></div> <div class="w-auto ml-2 d-inline"><i class="fa fa-map-marker"style="font-size:20px;"></i></div>
		  <div class="p-1"></div>
		  <div class="w-50 d-inline">
				<select class="repetido w-75" name="escolha">
					<option value="pac">PAC</option>
					<option value="sedex">SEDEX</option>
					<option value="sedex1">SEDEX10</option>
					<option value="sedex2">SEDEX Hoje</option>
					<option value="sedex3">SEDEX a Cobrar</option>
				</select>
		  </div>
		  <div class="p-1"></div>
		  <button  type="button" class="btn" id="left-panel-link" >Calcular Frete</button>
		  </form>
		  <div class="p-2"></div>
		  <div class=" w-25 d-inline"><input type="text" class="w-75" placeholder="Prazo aparece aqui" readonly></div><div class="w-auto ml-2 d-inline"><i class="fa fa-clock-o"style="font-size:20px;"></i></div>
		  <div class="p-2"></div>
		  <div class="w-auto d-inline"><input type="text" class="w-75" placeholder="Preço aparece aqui" readonly></div>
        </div>
        <div class="card-footer">
          
          
        </div>
      </div>
	  </div>
	 <script>
var x = document.getElementById("demo");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  x.innerHTML = "Latitude: " + position.coords.latitude + 
  "<br>Longitude: " + position.coords.longitude;
}

function checkForm()
{
    var elements = document.forms[0].elements;

    var cansubmit= true;
    for(var i = 0; i < elements.length; i++)
    {
        if(elements[i].value.length == 0 && elements[i].type != "button")
        {
            cansubmit = false;
        }

    }

    document.getElementById("myButton").disabled = !cansubmit;  
};
</script>
		
		
		
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script src="http://maps.google.com/maps/api/js"></script>
  </body>

</html>