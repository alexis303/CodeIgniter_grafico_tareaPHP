<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TareaPHP</title>
	
	<div>
		<meta name="description" content="The small framework with powerful features">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
		
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
		
		<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
		<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
		<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
	</div>
		
	
	<!-----------------------------------------STYLES Css --------------------------------------->

	<style>
		
		.tituloNav{
            text-shadow: 0.1em 0.1em #000;
        }
		.titulo{
            font-family: Tahoma ;
            text-align: center;
        }
		.color1{
			color: #26A69A;
			
		}
		html, body {
			color: rgba(200, 200, 200, 1);
			font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";
			font-size: 16px;
			margin: 0;
			padding: 0;
			-webkit-font-smoothing: antialiased;
			-moz-osx-font-smoothing: grayscale;
			text-rendering: optimizeLegibility;
			background-Color: #222;
		}

		.btn2 {
			border: 2px solid #26A69A;
			background-color:  #4caf4f00;
			border-color: #26A69A;
  			color: #26A69A;
			padding: 14px 28px;
			font-size: 16px;
			cursor: pointer;
		}
		.btn2:hover {
			background-color: #26A69A;
  			color: black;
		}
		.copyrights {
            bottom:0;
            clear: both;
            position: relative;
            width: 100%;
            height:70px;
            margin-top:300px;
            text-align: center;
            color: #26A69A;
        }
        .container{
			
            margin-top: 70px;
            position:relative;
            height: 100%;
            max-height: auto;
        }
		
	</style>
</head>
<body>

	<!-----------------------------------------NAVBAR --------------------------------------->
	<header>
        <nav class="navbar navbar-expand-lg  navbar-dark bg-dark">

            <div class="navbar-nav">
                <h3 class="color1 tituloNav" href="http://localhost/TareaPHP/public/">Gonzalo Sepúlveda Y.</h3>
            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon color1"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavDropdown" >
                <ul class="mr-auto"></ul>
                <ul class="navbar-nav">
                    <li class="nav-item active left ">
                        <a class="nav-link" href="http://localhost/TareaPHP/public/">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                            
                    <li class="nav-item active left">
                        <a class="nav-link" href="http://localhost/TareaPHP/public/InfoUF">Info UF</a>
                    </li>
                </ul>
            </div>

        </nav>
    </header>


	<!-----------------------------------------TITULO --------------------------------------->
	<div class="container ">
        <h2 class="color1 titulo">Gráficos</h2>
    </div>


	<!-----------------------------------------FORM GRÁFICO --------------------------------------->

	<div class="container mt-5 ">
		<form>
			<div class="row">

				<div class="col-6 form-group">
					<label >Indicador Económico</label>
					<select class="form-control" id="ind_economico">
						<option value="none" >Seleccione un indicador económico</option>
						<option value="uf" >Unidad de fomento (UF)</option>
						<option value="ivp" >Indice de valor promedio (IVP)</option>
						<option value="dolar" >Dólar</option>
						<option value="dolar_intercambio" >Dólar intercambio</option>
						<option value="euro" >Euro</option>
						<option value="ipc" >Indice de Precios al Consumidor (IPC)</option>
						<option value="utm" >Unidad Tributaria Mensual (UTM)</option>
						<option value="imacec" >Imacec</option>
						<option value="tpm" >Tasa Política Monetaria (TPM)</option>
						<option value="libra_cobre" >Libra de Cobre</option>
						<option value="tasa_desempleo" >Tasa de desempleo</option>
						<option value="bitcoin" >Bitcoin</option>
					</select>
				</div>
				
				<div class="col-3 form-group">
					<label >Fecha de Inicio</label>
					<input readonly type="text" class="form-control" id="start_date" placeholder="Fecha de Inicio">
				</div>
					
				<div class="col-3 form-group">
					<label >Fecha de Fin</label>
					<input readonly type="email" class="form-control" id="end_date" placeholder="Fecha de fin">

				</div>
			</div>

			<button type="button" onclick=" buscar()" class="btn2 success btn-lg ">Buscar</button>

		</form>


		<!----------------------------------------- GRÁFICO --------------------------------------->
		<canvas class="color1" id="myChart" width="100" height="50"></canvas>
	</div>


	<!-----------------------------------------FOOTER ---------------------------------------> 
	<footer>
		<div class="copyrights bg-dark">
			<h4 class="tituloNav">&copy; <?= date('Y') ?> Copyright.</h4>
		</div>
	</footer>

	<!--------SCRIPT --------> 
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

	<script>


		// <!-----------------------------------------FECHAS DEL INPUT ---------------------------------------> 
		var fecInicio ;
		var fecFin ;
		$( function() {
			var dateFormat = "dd-mm-yy",
			from = $( "#start_date" ).datepicker({
				defaultDate: "+1w",
				changeMonth: true,
				dateFormat:"dd-mm-yy",
				minDate: "-40y",
				maxDate: new Date,
				numberOfMonths: 2
			}).on( "change", function() {
				to.datepicker( "option", "minDate", getDate( this ) );
			});

			to = $( "#end_date" ).datepicker({
				defaultDate: "+1w",
				changeMonth: true,
				dateFormat:"dd-mm-yy",
				maxDate: new Date,
				minDate: "-40y",
				numberOfMonths: 2
			}).on( "change", function() {
				from.datepicker( "option", "maxDate", getDate2( this ) );
			});
		
			function getDate( element ) {
				var date;
				try {
					date = $.datepicker.parseDate( dateFormat, element.value );
					fecInicio = element.value;
				} catch( error ) {
					date = null;
				};
				return date;
			}

			function getDate2( element ) {
				var date;
				try {
					date = $.datepicker.parseDate( dateFormat, element.value );
					fecFin = element.value;
				} catch( error ) {
					console.log("error")
					date = null;
				};
		
				return date;
			}
		});	


		// <!-----------------------------------------CAMBIAR FORMATO DE FECHA PARA AJAX ---------------------------------------> 
		function convertDateFormat(string) {
			var info = string.split('-');
			return info[1] + '/' + info[0] + '/' + info[2];
		};
		function convertDateFormat2(string) {
			var info = string.split('-');
			return info[2] + '-' + info[1] + '-' + info[0];
		};



		//<!-----------------------------------------BUSCAR DATOS PARA EL GRAFICO ---------------------------------------> 
		var titulo = "";
		var arrFecha = [];
		var arrValor= [];
		var selectIndEco;
		var docSelect;
		
		function buscar(dCodigo) {

			var docSelect = document.getElementById("ind_economico")
			var selectIndEco = docSelect.options[docSelect.selectedIndex].value;
		
			if(fecInicio === undefined || fecFin === undefined || selectIndEco === "none" ){
				return alert("Hay campos vacios!!");
				return null ;
			};
			fecha1 = convertDateFormat(fecInicio);
			fecha2 = convertDateFormat(fecFin);
			arrFecha =[];
			arrValor = [];
			
			
			var fechaInicio = new Date(fecha1);
			var fechaFin    = new Date(fecha2);
			while(fechaFin.getTime() >= fechaInicio.getTime()){

				var fechaApi;
				fechaApi = fechaInicio.getDate()  + '-' + (fechaInicio.getMonth() + 1) + '-' + fechaInicio.getFullYear();
				var  datosGuardados =  'https://mindicador.cl/api/'+ selectIndEco+"/"+fechaApi;
				
			
				$.ajax({
					async: false,
					type:"GET",	
					url:  datosGuardados,
					dataType: "JSON",
					success:  function (data) {
						data.serie.map(element => arrValor.push(element.valor));
						data.serie.map(element => arrFecha.push(convertDateFormat2(element.fecha.substr(0,10))));
						titulo= selectIndEco;
					
						graficos();
					},
					error : function(data) {
                        alert("Ocurrió un ERROR !!");
                    }
				});	

				fechaInicio.setDate(fechaInicio.getDate() + 1);		
			};			
		};



		//<!-----------------------------------------INICIAR GRAFICO VACIO ---------------------------------------> 
		$( document ).ready(function() {
			graficos();
		});



		//<!-----------------------------------------GRAFICO Y SUS CONFIGURACIONES ---------------------------------------> 
		var myChart=null;
		function graficos(){
		

			if(myChart!=null){
				myChart.destroy();
			};
			var ctx = document.getElementById('myChart').getContext('2d');
		
			myChart = new Chart(ctx, {
				type: 'bar',
				options: {
					scales: {
						yAxes: [{
							gridLines:{
								color: '#888'
							},
							ticks: {
								fontColor:['#26A69A'],
								beginAtZero: true,	
							},
						}],
						xAxes: [{
							gridLines:{
								color: '#888'
							},
							ticks: {
								fontColor:['#26A69A'],
								beginAtZero: true
							},
						}]
						
					},
					legend: {
						labels: {
							fontColor: '#26A69A',
							scaleLineColor: "red"
						}
					},
				},
				data: {
					labels:arrFecha ,
					datasets: [{
						label: titulo,
						data: arrValor,
						backgroundColor: 'rgba(38, 166, 153, 0.3)',
						borderColor: 'rgba(75, 192, 192, 1)',
						borderWidth: 2,
					}]
				},
			});
		};	
	</script>

</body>
</html>
