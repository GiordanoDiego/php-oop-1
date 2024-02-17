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
        public function setMultiGenre($genre1, $genre2 = "", $genre3 = "", ){
            $this->genre .= ", ".$genre1;
            if(strlen($genre2) > 0){
                $this->genre .= ", ".$genre2;
                if(strlen($genre3) > 0){
                    $this->genre .= ", ".$genre3;
                }
            }
        }

        public function setVote($vote){
            if(is_numeric($vote) and $vote <=5 ){
                $this->vote = $vote;
            }else{
                var_dump("Errore, inserisci un voto tra 0 e 5 in numeri");
            }
        }

        public function getFullInfo(){
            return "Titolo: ".$this->title."<br>"."Lingua: ".$this->languge."<br>"."Genere: ".$this->genre." ";
        }
    };

?>