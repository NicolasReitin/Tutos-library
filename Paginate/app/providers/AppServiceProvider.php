<?php

// Dans la fonction boot(), rajouter le paginator Bootstrap suivant :

public function boot()
    {
        Paginator::useBootstrapFive();
    }