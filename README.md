# Tutos-library
Librairie de différentes fonctions utiles

- Paginate-Laravel :
    Permet une pagination via bootstrap :
     => un fichier à mettre dans App\providers\AppServiceProviders
     => modifier le controller et lui ajouter la fonction paginate()
     => modifier la blade et y ajouter  {!! $function->links() !!}  dans la div a l'endroit où l'on souhaite afficher la pagination (par default en bootstrap dans cette méthode)