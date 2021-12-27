<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.highlight-within-textarea.css')}}">
    <title>Document</title>
</head>
<body>
    <!--
        creation de la bar de menu
    -->
    <nav class="navbar navbar-expand-lg navbar-light mb-4" style="background-color: #e3f2fd;">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">ELIOS</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse float-right" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="{{ route('enseignant') }}">Enseignant</a>
              <a class="nav-link" href="{{ route('eleve') }}">Elève</a>
            </div>
          </div>
        </div>
    </nav>
    <div class="container">
      <h3>Bienvenue sur la platefrome des exercices</h3>
      <form action="sdsd">
        <select class="form-select" aria-label="Default select example" id="exoChoice">
          <option selected>Choissisez l'exercice à faire </option>
         @foreach ($exos as $exo) 
          <option value="{{$exo->nom}}">{{$exo->nom}}</option>
        @endforeach
        </select>
      </form>
    </div>


    
    <script src="{{asset('js/app.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{asset('js/perso.js')}}">
     <script src="{{asset('js/jquery.highlight-within-textarea.js')}}">
    </script>
</body>
</html>