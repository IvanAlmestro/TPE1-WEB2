<?php
    require_once 'MusicController.php';

    // instancio la clase del controlador
    $controller = new MusicController();

    $controller->showMoviesByGenre();

    switch ($variable) {
        case 'home':
            ShowHome();
            break;
        
        default:
            echo "Error"
            break;
    }
<?