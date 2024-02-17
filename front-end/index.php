<?php

    class Movie{
        private $title;
        private $languge;
        private $genre;
        private $vote;

        function __construct($title, $languge, $genre)
        {
            $this->title = $title;
            $this->languge = $languge;    
            $this->genre = $genre;    
        }

        public function setVote($vote){
            if(is_numeric($vote) and $vote <=5 ){
                $this->vote = $vote;
            }else{
                var_dump("Errore, inserisci un voto tra 0 e 5 in numeri");
            }
        }
    };

    $avatar = new Movie("Avatar", "English", "Fantasy");
    $gone_girl = new Movie("Gone girl", "English", "Thriller");
    var_dump($avatar);
    var_dump($gone_girl);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- FONTAWESOME -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- LINK CSS - BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
         <!-- LINK MIO CSS -->
        <link rel="stylesheet" href="./css/style.css">
        <!-- TITLE PAGE -->
        <title>Document</title>
    </head>

        <!-- START BODY -->
    <body class="debug">
        <div id="app">
            <!-- START MAIN HEADER -->
            <header>
                <div class="container">
                    <div>
                        <h1 class="text-center">
                            {{h1Content}}
                        </h1>
                    </div>
                </div>
            </header>
            <!-- END MAIN HEADER -->

            <!-- START MAIN -->
            <main>
                <div class="container">
                    MAIN
                </div>
            </main>
            <!-- END MAIN -->
        </div>


        <!---------------------------------------------------------------------------------------------------------------------------->
         <!-- VUE -->
         <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
         <!-- AXIOS -->
         <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.7/axios.min.js" integrity="sha512-NQfB/bDaB8kaSXF8E77JjhHG5PM6XVRxvHzkZiwl3ddWCEPBa23T76MuWSwAJdMGJnmQqM0VeY9kFszsrBEFrQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
         <!--BOOTSTRAP-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
         <!--JS MIO-->
        <script src="./js/script.js"></script>
    </body>
</html>