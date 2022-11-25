<?php
class Jeu{
    public string $nom;
    public string $description;
    public int $min_joueurs;
    public int $max_joueurs;

    function __construct(string $nomJeu, string $descript, int $minJoueurs, int $maxJoueurs){
        $this->nom=$nomJeu;
        $this->description=$descript;
        $this->min_joueurs=$minJoueurs;
        $this->max_joueurs=$maxJoueurs;
    }


}