<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- Main CSS-->
    <link href={{asset("css/main.css")}} rel="stylesheet" media="all">
</head>

<style>
    body{
        font-family: "Ubuntu",sans-serif;
    }

    .frmp{
        box-shadow: 0px 0px 10px;
    padding: 10px;
    }
</style>

<body>


   

  
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">

                    @if(Session::has('dijaexist'))
                    <div class="alert alert-danger">
                        {{Session::get('dijaexist')}}
                    </div>
                @endif

                    <h2 class="title">Inscription</h2>
                    <form class="frmp" action={{route("home.store")}}  method="POST">
                        
                        @csrf
                        <div class="input-group">
                            <input  class="input--style-1" type="text" placeholder="nom" id="name" value="{{old("name")}}" name="name">                                         

                        </div>
                        @if($errors->has('name'))
                        <div style="color: rgb(194, 16, 16);" class="alert-danger">le champe name obligatoir</div>
                    @endif
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1 js-datepicker" type="text" placeholder="Prénom" value="{{old("prenom")}}" name="prenom">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                                @if($errors->has('prenom'))
                                <div style="color: rgb(194, 16, 16);" class="alert-danger">le champe prenom obligatoir</div>
                            @endif
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <div style="width: 100%;" class="rs-select2 js-select-simple select--no-search">
                                        <select style="width: 100%; height: 30px;" required name="specialite">
                                            <option disabled="disabled" selected="selected">Spécialité</option>
                                            <option>libéral</option>
                                            <option>hospitalier</option>
                                            <option>résidence</option>
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
                                    <input class="input--style-1" type="text" placeholder="ville" name="ville">
                                    @if($errors->has('ville'))
                                    <div style="color: rgb(194, 16, 16);">le champe ville obligatoir</div>
                                @endif
                                </div>
                            </div>
                        </div>

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                   <input class="input--style-1" type="text" placeholder="email" value="{{old("email")}}" name="email">
                                   @if($errors->has('email'))
                                   <div style="color: rgb(194, 16, 16);">le champe email obligatoir</div>
                                   @endif
                                </div>
                            </div>
                        </div>

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="Tel" value="{{old("tel")}}" name="tel">
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
    </div>



   
    
    <script>
        $('#exampleModal').on('show.bs.modal', event => {
            var button = $(event.relatedTarget);
            var modal = $(this);
            // Use above variables to manipulate the DOM
            
        });
    </script>

   
    <!-- Main JS-->
     <script src={{asset("js/global.js")}}></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
