# Checkpoint PHP-2

Tu vas travailler sur un mini site permettant d'afficher un programme TV.

## Installation et rendu final
1. Clone ce dépôt 
2. Crée une branche à ton nom depuis master et pousse ton travail dessus quand tu auras terminé.
3. Le dépôt contient un mini-framework MVC qui te permettra de gagner beaucoup de temps et de ne pas avoir à tout réécrire de zéro.
Ce mini-framework n'est pas tout à fait identique à ce que tu as pu voir jusqu'à présent, mais reste très proche cependant. Tu ne devrais pas avoir de difficulté
à comprendre son fonctionnement. Quelques noms de fichiers, de classes ou de méthodes peuvent donc différer, mais c'est normal, à toi de montrer que tu sais t'adapter à n'importe quel environement MVC.
4. Une base de données est fournie dans le dossier bdd, fichier *checkpoint.sql*. Tu dois l'importer pour pouvoir travailler.
    La base contient :
    - une table "channel" (les chaînes de TV) avec les champs pour le nom de la chaîne et le numéro de la chaîne
    - une table "program" (les différentes programmations) contenant le nom du programme, une description, le début de diffusion (datetime), la durée en minutes, ainsi que la chaîne qui diffusera ce programme.
    Pour rappel, la commande à utiliser pour l'importation est :
    ```
    mysql -u root -p < checkpoint.sql
    ```
    La base contient quelques données, n'hésite pas à en ajouter si tu en as besoin.
5. Lance un composer install.
6. Renomme le fichier db_model.php en db.php et rempli le. Fais attention à ne pas le versionner quand tu pousseras ton travail.
6. Le code fourni comprend différents dossiers, quelques fichiers déjà écrits, prends le temps d'explorer son contenu car il
est là pour t'aider. Pense également à bien lire les commentaires dans le code. 
Bootstrap est également déjà intégré, tu n'as donc pas à le télécharger (par contre, tu es fortement invité à l'utiliser ;-))

### Consignes


1. Le fichier *public/index.php* contient un certain nombre de routes préétablies.
La route *programs* envoie vers une page d'accueil affichant déjà une liste (non triée) de tous les programmes, quelque soit leur jour de diffusion ou leur chaîne.
Ce n'est pas très lisible, il faut donc que tu modifies cette page afin d'y lister (de manière simple), les différents programmes **du jour**, classés dans l'**ordre chronologique** et **par chaine**.
    
    Par ex : 
    - Nom Chaine 1
        - 10h : Nom Programme 1 (120min)
        - 12h : Nom Programme 2 (60min)
    - Nom Chaine 2 
        - 11h : Nom Programme 3 (50min)
        - 20h : Nom Programme 4 (220min) ...
    
2. Lorsque tu cliques sur un nom de programme, il faut qu'un lien t'emmene vers une nouvelle page (route *program*) qui affichera tous les détails de **ce** programme uniquement
 (c'est à dire le nom, la description, la date de diffusion, la durée, l'audience si renseignée, ainsi que le nom et numéro de la chaîne)
3. Le fichier *public/index.php* contient également une route *add* affichant un formulaire d'ajout de programme.
Attention **ce formulaire est incomplet**. Il faut que tu le termines, puis que tu rendes l'ajout fonctionnel 
(un nouveau programme ajouté doit apparaître en base de données, relié à une chaîne, et sur la page d'accueil s'il est diffusé aujourd'hui).

5. Crée une route *audiences*. Cette page affichera l'audience totale de chaque chaine pour les programmes de **la veille**, classés dans l'ordre decroissant.
    N'hésite pas à modifier la base de données pour ajouter ou modifier des audiences.
    
    La page devra afficher une liste simple, par ex : 
    - Nom Chaine 5 : 50125
    - Nom Chaine 8 : 48751
    - Nom Chaine 1 : 25647 ...
    
    L'audience totale d'une chaine pour une journée correspond à la somme des audiences de tous les programmes *débutants* sur cette journée.

5. **OPTIONNEL** : Mets en place un upload d'image dans le formulaire d'ajout pour illustrer les programmes (la base de données sera également à modifier) et affiche ces images sur les pages *programs* et *program*.

**Remarque** : chacun de ces points est indépendant du précédent (même s'ils peuvent avoir du code en commun). Tu peux donc les traiter dans le désordre (on s'attend bien entendu à avoir un commit pour chaque point). 
Compte environ 45min max pour chaque point. C'est une simple estimation, mais ça peut-être un bonne indication pour te dire qu'il est temps de passer au suivant si tu bloques sur un point.

Bon courage !
