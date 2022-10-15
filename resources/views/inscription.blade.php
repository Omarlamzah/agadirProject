<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form-v8 by Colorlib</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">

	<!-- Font-->
	
	<link href={{asset("css/main.css")}} rel="stylesheet" media="all">
</head>

<style>
	.inputinsc{
		padding-left: 10px;
	}

	div input{
		border-bottom: 0px solid #ccc;
	}
</style>

<body class="form-v8">


	<div class="page-content">
		<div class="form-v8-content">
			<div class="form-left">
				<img style="height: 99.5%;" src="images/form-v8.jpg" alt="form">
			</div>
			<div class="form-right">

				@if(Session::has('dijaexist'))
				<div class="alert alert-danger">
					{{Session::get('dijaexist')}}
				</div>
			@endif

				<div class="tab">
					<div class="tab-inner">
						<button class="tablinks" id="defaultOpen">Inscription</button>
					</div>
					
				</div>
				


				<form style="padding: 38px;" class="frmp" action={{route("home.store")}}  method="POST">
                        
					@csrf
					<div class="input-group">
						<input  class="form-control inputinsc input--style-1" type="text" placeholder="nom" id="name" value="{{old("name")}}" name="name">                                         

					</div>
					@if($errors->has('name'))
					<div style="color: rgb(194, 16, 16);" class="alert-danger">le champe name obligatoir</div>
				@endif
					<div class="row row-space">
						<div class="col-2">
							<div class="input-group">
								<input class="form-control inputinsc input--style-1 js-datepicker" type="text" placeholder="Prénom" value="{{old("prenom")}}" name="prenom">
								<i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
							</div>
							@if($errors->has('prenom'))
							<div style="color: rgb(194, 16, 16);" class="alert-danger">le champe prenom obligatoir</div>
						@endif
						</div>
						<br/>
						<div class="col-2">
							<div class="input-group">
								<div style="width: 100%;  height: 39px;" class="rs-select2 js-select-simple select--no-search">
									<select class="form-control inputinsc" style="width: 100%; height: 30px;" required name="specialite">
										<option disabled="disabled" selected="selected">Spécialité</option>
										<option>libéral</option>
										<option>hospitalier</option>
										<option>résident</option>
									</select>
									

									<div class="select-dropdown"></div>
								</div>
								@if($errors->has('specialite'))
								<div style="color: rgb(194, 16, 16);">le champe Spécialité obligatoir</div>
							@endif
							</div>
						</div>
					</div>
				 
					<div class="row row-space">
						<div class="col-2">
							<div class="input-group">
								<input class="form-control inputinsc input--style-1" type="text" placeholder="ville" name="ville">
								@if($errors->has('ville'))
								<div style="color: rgb(194, 16, 16);">le champe ville obligatoir</div>
							@endif
							</div>
						</div>
					</div>

					<div class="row row-space">
						<div class="col-2">
							<div class="input-group">
							   <input class="form-control input-text inputinsc input--style-1" type="text" placeholder="email" value="{{old("email")}}" name="email">
							   @if($errors->has('email'))
							   <div style="color: rgb(194, 16, 16);">le champe email obligatoir</div>
							   @endif
							</div>
						</div>
					</div>

					<div class="row row-space">
						
						<div class="col-2">
							<div class="input-group">
								<input class="form-control input-text inputinsc input--style-1" type="text" placeholder="Tel" value="{{old("tel")}}" name="tel">
								@if($errors->has('tel'))
								<div style="color: rgb(194, 16, 16);">le champe tel obligatoir</div>
							@endif
							</div>
						</div>
					</div>

					<div class="p-t-20">
						<button class="btn btn--radius btn--green" type="submit">Submit</button>
					</div>
				</form>
				
			</div>
		</div>
	</div>
	<script type="text/javascript">
		function openCity(evt, cityName) {
		    var i, tabcontent, tablinks;
		    tabcontent = document.getElementsByClassName("tabcontent");
		    for (i = 0; i < tabcontent.length; i++) {
		        tabcontent[i].style.display = "none";
		    }
		    tablinks = document.getElementsByClassName("tablinks");
		    for (i = 0; i < tablinks.length; i++) {
		        tablinks[i].className = tablinks[i].className.replace(" active", "");
		    }
		    document.getElementById(cityName).style.display = "block";
		    evt.currentTarget.className += " active";
		}

		// Get the element with id="defaultOpen" and click on it
		document.getElementById("defaultOpen").click();
	</script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>