<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Live</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">

</head>
<body>
    
    <style>
        #ifram{
            width: 100%;
            height: 70vh;
        }

        .btnmm{
            position: absolute;
            top: 26px;
            z-index: 9999;
            right: 10vw;
            color: white;
            width: 69px;
            cursor: pointer;
            padding: 0;
            font-size: 30px;
            background-color: rgb(38 62 120 / 0%);
        }

        .btnmm:hover{
            background-color: rgb(38 62 120 / 20%);
        }

        .allcomments{
            margin-left: 20%;
            overflow: scroll;
            height: 400px;
            scroll-behavior: smooth;
        }

        body{background-color: #2e2828;}


       .inputcomment{
            width: 50%;
            margin-left: 10px;
        }

        body::-webkit-scrollbar  ,.allcomments::-webkit-scrollbar {
        width: 12px;               
        }

        body::-webkit-scrollbar-track , .allcomments::-webkit-scrollbar-track{
        background: orange;     
        }

        body::-webkit-scrollbar-thumb , .allcomments::-webkit-scrollbar-thumb{
        background-color: rgb(0, 0, 0);    
        border-radius: 20px;       
        border: 3px solid orange;  
        }
    </style>

<iframe id="ifram" width="420" height="315"  src="{{$videourl ?? ""}}">
</iframe><br>
<button class="btnmm" id="btnmaxmin">[   ]</button>






<section class="commentsection">

 <form action={{route("comment.store")}} method="post">
@csrf
    <div class="form-group">
      <input type="text" class="inputcomment form-control" name="commenttext" id="" aria-describedby="helpId" placeholder="">
        <button style=" margin: 8px;" type="submit" class="btn btn-primary">commenté</button>
    </div>
 </form>

</section>


<section class="allcomments">


@foreach ($allcomment as $comment)
<div style="border-radius: 15px;width: 70%;background-color: #03a9f4;text-align: center;padding: 0px;padding-right: 25px;">
<p> {{$comment->commenttext}}</p>
<p style="margin-top: 0;margin-bottom: 2px;;color: #fdfdfd;text-align: end;">DR :{{$comment->username}}</p>
</div>

@endforeach

</section>




</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>

var max=true

$("#btnmaxmin").click(function(){
    if(max==true){
        document.getElementById("ifram").style.height="100vh"
        max=false;
        return
     }


     if(max==false){
        document.getElementById("ifram").style.height="70vh"
        max=true;
}
})



</script>
</html>