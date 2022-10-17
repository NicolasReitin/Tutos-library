# Tutos-library
Librairie de différentes fonctions utiles

- Paginate-Laravel :
    Permet une pagination via bootstrap :
     => un fichier à mettre dans App\providers\AppServiceProviders
     => modifier le controller et lui ajouter la fonction paginate()
     => modifier la blade et y ajouter  {!! $function->links() !!}  dans la div a l'endroit où l'on souhaite afficher la pagination (par default en bootstrap dans cette méthode)

- .htaccess : 
    => remove ability to access ".env" file and other files in laravel

- SearchBar en php : 
    => en un seul fichier ou 2 fichier si utilisation du form action=""


-Storage:link en production :
    Accédez au dossier de l'itinéraire your-app-folder/routes/web.php et enregistrez un nouvel itinéraire comme suit

        Route::get('/linkstorage', function () {
            Artisan::call('storage:link');
        }); 
    puis allez sur votre site Web www.example.com/linkstorage et il vous amènera à une page vierge.
    C'est fait. Le dossier de stockage sera créé.


