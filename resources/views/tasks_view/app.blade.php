<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />

    <title>Gestionnaire des taches</title>

    </head>
    <body>
        
        <div class="container">
            
            <h1>Gestionnaire de Tache</h1>
            @yield('content')
        </div>
        
        <style>
            /* Fond blanc et texte noir */
            .toast-success {
                background-color: #ffffff !important;
                color: #000000 !important;
            }
        
            /* Barre de progression verte plus vive */
            .toast-success .toast-progress {
                background-color: #03B209 !important; /* Vert vif pour la barre */
                opacity: 1 !important; /* Supprime toute opacité */
                height: 5px; /* Augmente la hauteur de la barre pour plus de visibilité */
            }
        
            .toast-message {
                text-align: left !important;
                flex: 1;
                width:100%
}        
            
        </style>
        
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <script>



var audio;

window.onload = function() {
    // Initialiser et précharger l'audio
    audio = new Audio('{{ asset('tada.mp3') }}');
    audio.preload = 'auto';
};


            // Configuration globale de Toastr
            toastr.options = {
                "closeButton": true,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "slideDown", // Apparition avec slideDown
        "hideMethod": "slideUp", // Disparition avec slideUp
        "closeMethod": "slideUp",
        "onShown": function() {
        // Jouer l'audio préchargé quand la notification apparaît
        if (audio) {
            audio.play();
        }
    }
};
        
            // Afficher une notification avec un emoji de validation
            @if(Session::has('success'))
        var imgUrl = "{{ asset('le_check_vert.svg') }}";
        toastr.success(`
            <div style="display: flex; align-items: center;">
                <span class="toast-icon">
                     <img src="` + imgUrl + `" width="20" height="20" alt="Success Icon" style="margin-right: 10px; margin-left: -30px;">
                </span>
                <span>{{ Session::get('success') }}</span>
            </div>
        `);
    @endif
        </script>
        

    </body>
    </html>