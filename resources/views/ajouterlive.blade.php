<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<body>


<form action={{route("vedio.store")}} method="post">
    @csrf
    <div class="form-group">
        <label for="">ajout live video </label>
        <input type="text" class="form-control" name="videourl" id="" aria-describedby="helpId" placeholder="">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
</form>

    
</body>
</html>