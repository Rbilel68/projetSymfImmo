#_Projet Symfony 4 :_

    Effectué avec la version 4.4 (vm Ubuntu 20.04)

## Contexte :
  - Créer un projet sous Symfony 4.4 dans une machine virtuelle (Linux - Ubuntu 20.04) :
    
- Le projet consiste à afficher le site marchand d'une agence immobilière.
- Ce site comporte une page d'accueil affichant les biens de l'agence. 
- Avec un côté administrateur pour les agents immobilier.

##  Fonctionnalité du projet :
  
  - Page d'accueil avec un menu affichant un onglet pour les biens et un autre pour revenir à la page d'accueil
    

  - Affichage de quelque bien dans la page d'accueil
    

  - Page des Biens :
      - Afficher tout les biens sous forme de carte
      - Filtrer les biens sur different détail (ex: taille de la surface, budget max )
      - Limité le nombre de bien afficher avec une pagination
      - Afficher un bien en particulier dans une page pour avoir la description entière du bien
      - Génerer de nombreuse propiété avec de fausse donnée a l'aide d'une librairie


  - Côté admin :
    
    - Accès à la gestion des biens via un login/logout (ex: localhost:8000/admin)
    - Gestion des biens via un CRUD (create, read, update, delete)
    - Ajout notification après de chaque action de l'admin ( ex: creation d'un bien, modification etc...)
    - Restriction lors de la création ou modification d'un bien pendant la saisie du fomulaire, ex :code postal on ne peut entrer du texte lors de la saisie etc...
    - Securite du mot de passe csrf .
    
## Pré-requis installation : 

 - Pile Lamp (Apache, Mysql, Php)
 - Git
 - Composer
 - Librairie php : php-mbstring, php-xml

## Outil utilisé :
    
 - Le composant Security
 - Kpnpaginator (pour la pagination des bien)
 - Librairie php faker permet de generer de nombreuse donnée 

## Infos utile :
 - Accès au back-end url : localhost:8000/admin
 - Login : demo
 - Mot de passe: demo
 - Déconnection du back-end : bouton déconnecter situer dans la navbar a droite
-----------------------------------------------
###  Récuperer Projet : 
    git clone https://github.com/Rbilel68/projetSymfImmo.git
 
 Se mettre dans projetSymfImmo : 
    
    cd projetSymfImmo

 Lancer la commande suivante pour recuperer le reste du projet (ex dossier vendor ):

    composer install

 Lancer le projet avec cette commande dans le terminale :
  
    php -S 127.0.0.1:8000 -t public

