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
  <script src="https://kit.fontawesome.com/bbcb7bea9a.js" crossorigin="anonymous"></script>
</head> 
<?php
	use main.php;
	$dados=$moto->correio($_POST["cepini"],$_POST["cepend"],$_POST["comp"],$_POST["altu"],$_POST["larg"],$_POST["diam"],$_POST["peso"]);
	
?>
  <body style='background-image: url("fundoNice.png") !important;'>
  <div class="container align-top">
<div class="card w-25 float-left">
        <img class="card-img-top" src="monster.png" class="mt-2" alt="GAMER FUEL OwO">
        <div class="card-body">
          <h5 class="bloco-title">Frete do produto</h5>
		  <form action="" method="post" class="mt-3">
		  <div class=" w-25 d-inline"><input type="text" name="cepini" class="w-75" placeholder="CEP Inicial" ></div><div class="p-1"></div>
          <div class=" w-25 d-inline"><input type="text" name="cepend" class="w-75" placeholder="CEP Final" ></div><div class="p-1"></div>
              <div class=" w-25 d-inline"><input type="text" name="peso" class="w-75" placeholder="Peso" ></div><div class="p-1"></div>
              <div class=" w-25 d-inline"><input type="text" name="comp" class="w-75" placeholder="Comprimento" ></div><div class="p-1"></div>
		  <div class=" w-25 d-inline"><input type="text" name="altu" class="w-75" placeholder="Altura" ></div><div class="p-1"></div>
		  <div class=" w-25 d-inline"><input type="text" name="larg" class="w-75" placeholder="Largura" ></div><div class="p-1"></div>
		  <div class=" w-25 d-inline"><input type="text" name="diam" class="w-75" placeholder="Diâmetro" ></div>
		  <div class="p-1"></div>
		  <div class="w-50 d-inline">
				
		  </div>
		  <div class="p-1"></div>
		  <a href="forn.php"><button  type="button" class="btn" id="left-panel-link" >Voltar para o calc</button></a>
		  </form>
		  <div class="p-2"></div>
		  <div class="w-25 d-inline"><input type="text" class="w-75" name="ruaini" placeholder="" readonly value="<?php echo $dados[2][0].' '.$dados[2][3].' '.$dados[2][2].' '.$dados[2][1]; ?>"></div>
		  <div class="p-1"></div>
		  <div class="w-25 d-inline"><input type="text" class="w-75" name="ruaend" placeholder="" readonly value="<?php echo $dados[3][0].' '.$dados[3][3].' '.$dados[3][2].' '.$dados[3][1]; ?>"></div>
		  <div class="p-1"></div>
        </div>
        <div class="card-footer">
		  <img src="hclogo.png" class="rounded img-thumbnail"> 
		 <div class="p-1"></div>
          <a href="index.php"><button  type="button" class="btn" id="left-panel-link" >Como cliente</button></a>
        </div>
      </div>
	  <div class="p-2 float-left"></div>
		<div class="card w-auto">
		<h4 class="card-title h4">Preços e prazos</h4>
		<div class="card-body pl-2 pr-2">
			<div class="row" id="imagens">
				<div class="col"> <img class="card-img-top" src="paclogo.png" class="mt-2" alt="PAC"></div>
				<div class="col"> <img class="card-img-top" src="sedexlogo.png" class="mt-2" alt="Sedex"></div>
				<div class="col align-top"> <img class="card-img-top" src="sedex10logo.png" class="mt-2" alt="Sedex10"></div>
				<div class="col align-top"> <img class="card-img-top" src="sedex12logo.png" class="mt-2" alt="Sedex12"></div>
				<div class="col"> <img class="card-img-top" src="sedexlogo.png" class="mt-2" alt="SedexHoje"></div>
				<div class="col"> <img class="card-img-top" src="moto.jpeg" class="mt-2" alt="Motoboy"></div>
			</div>
			<div class="row align-items-center pt-3 " id="preços">
				<div class="col"><input type="text" name="price1" class="w-75" placeholder="Preço Pac" readonly value="<?php echo $dados[1]["valor"]; ?>"></div>
				<div class="col"><input type="text" name="price2" class="w-75" placeholder="Preço Sedex" readonly value="<?php echo $dados[0]["valor"]; ?>"></div>
				<div class="col"><input type="text" name="price3" class="w-75" placeholder="Preço Sedex10" readonly value="<?php echo $dados[3]["valor"]; ?>"></div>
				<div class="col"><input type="text" name="price4" class="w-75" placeholder="Preço Sedex12" readonly value="<?php echo $dados[2]["valor"]; ?>"></div>
				<div class="col"><input type="text" name="price5" class="w-75" placeholder="Preço Sedex Hoje" readonly value="<?php echo $dados[4]["valor"]; ?>"></div>
				<div class="col"><input type="text" name="price6" class="w-75" placeholder="Preço Motoboy" readonly value="<?php echo $dados[0]["valor"]; ?>"></div>
			</div>
			<div class="row pt-3" id="prazo">
				<div class="col"><input type="text" name="time1" class="w-75" placeholder="Prazo Pac" readonly value="<?php echo $dados[1]["valor"]; ?>"></div>
				<div class="col"><input type="text" name="time2" class="w-75" placeholder="Prazo Sedex" readonly value="<?php echo $dados[0]["prazo"]; ?>"></div>
				<div class="col"><input type="text" name="time3" class="w-75" placeholder="Prazo Sedex10" readonly value="<?php echo $dados[3]["prazo"]; ?>"></div>
				<div class="col"><input type="text" name="time4" class="w-75" placeholder="Prazo Sedex12" readonly value="<?php echo $dados[2]["prazo"]; ?>"></div>
				<div class="col"><input type="text" name="time5" class="w-75" placeholder="Prazo Sedex Hoje" readonly value="<?php echo $dados[4]["prazo"]; ?>"></div>
				<div class="col"><input type="text" name="time6" class="w-75" placeholder="Prazo Motoboy" readonly value="<?php echo $dados[0]["prazo"]; ?>"></div>
			</div>
			
		</div>
		<div class="card-footer">
			<h4 class="card-title h4"><i class="fas fa-dollar-sign"></i>   Lucros do frete   <i class="fas fa-dollar-sign"></i></h4>
			<div class="row pt-3" id="lucro">
				<div class="col"><input type="text" name="lucro1" class="w-75" placeholder="Pac" readonly value="<?php echo $dados[]; ?>">Eu</div>
				<div class="col"><input type="text" name="lucro2" class="w-75" placeholder="Sedex" readonly value="<?php echo $dados[]; ?>">Queria</div>
				<div class="col"><input type="text" name="lucro3" class="w-75" placeholder="Sedex10" readonly value="<?php echo $dados[]; ?>">Dinheiro</div>
				<div class="col"><input type="text" name="lucro4" class="w-75" placeholder="Sedex12" readonly value="<?php echo $dados[]; ?>">Mas</div>
				<div class="col"><input type="text" name="lucro5" class="w-75" placeholder="Sedex Hoje" readonly value="<?php echo $dados[]; ?>">O codigo</div>
				<div class="col"><input type="text" name="lucro6" class="w-75" placeholder="Motoboy" readonly value="<?php echo $dados[]; ?>">Ñ pega</div>
			</div>
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