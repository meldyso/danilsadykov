
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Boostrap 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="alert alert-success mt-5" role="alert">
            Boostrap 5 is working!
        </div>    
    </div>
    <style type="text/css">
        .display {
            display: none;
        }
    </style>
    <div class="container">
        <div class="alert alert-success mt-5 display" id="alertt" role="alert">
           Успешно
        </div>    
    </div>
    <div class="card w-75 p-3 " style="margin: 0 auto" ><div>
  <div class="form-group">
    <label for="exampleInputEmail1">Твое имя</label>
    <input type="text" class="form-control" id="username">
   
  </div>
 
 <br>
  <button class="btn btn-primary" onclick="application()">Отправить</button>
</div></div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="../../dist/js/main.js"></script>

   <script>
   const settings = {
      "port": "{{getenv('APP_PORT')}}"
   };
      </script>
         <script src="/../dist/js/jquery.js"></script>
</body>
</html>