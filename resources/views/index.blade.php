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
    <div class="container-form ms-5">
        <!-- formulaire de mise en place de l'exercice -->
       <form action="{{ route('exercice.store') }}" method="POST" >
           <!-- mise en palce du token de sécurité -->
            @csrf
           <!-- nom général de l'exercie -->
           <div class="row mb-3">
               <label for="" class="col-sm-2 col-form-label">Nom de l'exercice :</label>
               <div class="col-sm-5">
                    <input type="text" class="form-control" id="inputEmail3" name="exoName">
              </div>
           </div>
           <div id="afficherQuestion" >
               <div class="copycat">
                   <!-- enoncé question -->
                    <div class="row mb-3">
                        <label for="" class="col-sm-2 col-form-label">Enoncé de la question :</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="inputQuiz" name="quiz">
                        </div>
                    </div>
                    <!-- réponse de la question -->
                    <div class="row mb-3">
                        <label for="" class="col-sm-2 col-form-label">Réponse :</label>
                        <div class="col-sm-5">
                            <textarea type="text" class="form-control inputAns" id="inputAns" placeholder="Inscriver la réponse à votre question...." name="answer"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <!-- bouton permettant l'ajout de champs a question suplémentaire -->
            <div class="mb-3">
                <input class="btn btn-outline-secondary" type="button" value="Plus de questions" id="Quiz">
            </div>
            <button type="submit" class="btn btn-primary">Enregistrer l'exercice</button>
       </form>
    </div>


    <!-- partie des éleves -->


    
    <script src="{{asset('js/app.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{asset('js/perso.js')}}">
     <script src="{{asset('js/jquery.highlight-within-textarea.js')}}">
    </script>
</body>
</html>