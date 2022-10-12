<?php 

    
// Exemple de code où l'on rajoute un paginate dans le controller :

public function index()
    {
        return view('home', ['supports' => Support::orderBy('titre', 'desc')->paginate(15)]);
    }