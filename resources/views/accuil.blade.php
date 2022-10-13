<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>accuil</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>   
 

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

  <style>
    .contentsection {
    background: #6a6a6a;
    width: 50%;
    margin: auto;
    gap: 20px;
    padding: 10px;
    display: flex;
    flex-direction: column;
    align-items: center;
    color: white;
    font-family: "Ubuntu",sans-serif;

    
}
body::-webkit-scrollbar  ,.allcomments::-webkit-scrollbar {
        width: 12px;               
        }

        body::-webkit-scrollbar-track , .allcomments::-webkit-scrollbar-track{
        background: orange;     
        }

        body::-webkit-scrollbar-thumb , .allcomments::-webkit-scrollbar-thumb{
        background-color: rgb(0, 0, 0);    
        border-radius: 15px;       
        border: 3px solid orange;  
        }

.contentsection div button{
    width: 40vw;
    height: 20vh;
    transition: all 0.3s;
}
.contentsection div button:hover{
  background: aquamarine;
font-size: 32px;
color: white;
}

a{
  color: #000000;
    font-size: 21px;
}


.colorblackstyle {
    font-size: 20px;
    color: black;
}

  </style>

  <div>
  </div>


    <section class="contentsection">
        <div> 
             <h1> bonjour Dr:{{ $fullname[0]}}  {{ $fullname[1]}}</h1>

         
        </div>

<div>


<form action={{route("showprogramme")}} method="get">
  <button class="btn btn-primary"><a style="text-decoration: none;" href={{route("showprogramme")}}>Program</a> </button>

</form>
</div>
        <div>
         
            <form action={{route("vedio.index")}} method="get">
              <button class="btn btn-primary"><a style="text-decoration: none;" href={{route("vedio.index")}}>Live</a></button>
            </form>
          </div>
          

          <div>
            <button type="button" class="colorblackstyle btn btn-primary" data-toggle="modal" data-target="#exampleModal">
              Rable
            </button>
          </div>

          <div>
            <form action={{route("poster")}} method="get">
              <button class="colorblackstyle btn btn-primary"> <a style="text-decoration: none;" href={{route("poster")}}>E-poster</a> </button>
            </form>
          </div>


        
    </section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div style="height: 80vh;height: 86vh;width: 98vh;right: 10%;" class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div  class="modal-body">
      
       <embed style="width: 100%; height: 100%;" src={{asset("pdfs/cover.pdf")}} type="">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src={{asset("/js/plugin.js")}}></script>



</html>