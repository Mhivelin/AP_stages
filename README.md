# cahier des charges


## Objectif de l'application
L'objectif de l'application est de faciliter la gestion des stages pour les étudiants du BTS SIO, en offrant une plateforme centrale pour gérer les informations relatives aux stages, aux étudiants, aux entreprises et aux tuteurs.


## Fonctionnalités de l'application
L'application devrait offrir les fonctionnalités suivantes :

  * Enregistrement des étudiants : l'application doit permettre l'enregistrement des étudiants du BTS SIO, avec les informations suivantes : nom, prénom, adresse e-mail, adresse postale, numéro de téléphone, année d'étude et spécialisation.

  * Gestion des entreprises : l'application doit permettre l'enregistrement des entreprises où les étudiants pourront effectuer leur stage, avec les informations suivantes : nom de l'entreprise, adresse, personne de contact, adresse e-mail et numéro de téléphone.

  * Gestion des tuteurs : l'application doit permettre l'enregistrement des tuteurs qui superviseront les stages, avec les informations suivantes : nom, prénom, adresse e-mail, adresse postale, numéro de téléphone et entreprise.

  * Gestion des stages : l'application doit permettre la gestion des stages pour chaque étudiant, avec les informations suivantes : entreprise, tuteur, date de début et date de fin du stage, description du stage et évaluation du tuteur.

  * Recherche et filtrage : l'application doit permettre aux utilisateurs de rechercher et filtrer les stages, les entreprises et les tuteurs par nom, date, entreprise et spécialisation.

  * Notifications : l'application doit envoyer des notifications par e-mail pour rappeler aux étudiants et aux tuteurs les dates de début et de fin de stage, ainsi que les évaluations.

  * Authentification et sécurité : l'application doit inclure une authentification sécurisée pour les utilisateurs et garantir la sécurité des données.


## Interface utilisateur
L'interface utilisateur doit être intuitive et conviviale, permettant aux utilisateurs de naviguer facilement entre les différentes fonctionnalités de l'application.Elle sera donc composé de formulaires et d'un menu pour naviguer entre les différent formulaire.


## Technologies utilisées
L'application doit être développée en utilisant des technologies web modernes telles que HTML, CSS, JavaScript et PHP ou Python pour la partie back-end.
On utilisera aussi Mariadb comme service de base données.

## Contraintes de temps
Le développement de l'application devrait être terminé dans un délai de trois mois à partir de la date de début du projet.

## Budget
Le budget pour le développement de l'application seras de 99999.99 Bitcoin en 3 versement(un par mois).

## Maintenance et support
nous offrirons une maintenance et un support continus pour l'application après sa mise en ligne, y compris la résolution des bugs et la mise à jour des fonctionnalités(contre monnaie payante bien sur).





## 1. Introduction
### 1.1. Objectif
faire une application qui permet de gérer les stages des étudiants du BTS SIO, elle doit permettre de gérer les étudiants, les entreprises, les stages et les tuteurs.

### 1.2. Portée et présentation
> Décrivez brièvement la portée de ce document de vision, notamment les programmes, les projets, les applications et les processus métier auxquels 

#### acteurs :
* professeur

#### les objets :


#### fonctionnalités :
* gestion des étudiants (ajout, modification)
* gestion des entreprises (ajout, modification)
* gestion des stages (ajout, modification)
* gestion des tuteurs (ajout, modification)
* afficher les étudiants
* afficher les stages
* afficher les entreprises
* afficher les tuteurs

#### contraintes :
aucune pour le moment

### 1.2. Description

#### 1.2.1. Etudiants
* nom
* prénom
* année

#### 1.2.2. Entreprises
* nom
* adresse
* code postal
* téléphone
* mail

#### 1.2.3. Tuteurs
* nom
* prénom
* mail
* téléphone

#### 1.2.4. Stages
* nom
* description
* date de début
* date de fin
* étudiant
* entreprise

## 2. fonctionnalités

### 2.1. gestion des étudiants
* ajouter un étudiant
* modifier un étudiant
* afficher les étudiants
    * trier par nom
    * trier par année

### 2.2. gestion des entreprises
* ajouter une entreprise
* modifier une entreprise
* afficher les entreprises
    * trier par nom
    * trier par code postal
    * trier par nombre de stages

### 2.3. gestion des tuteurs
* ajouter un tuteur
* modifier un tuteur
* afficher les tuteurs
    * trier par nom

### 2.4. gestion des stages
* ajouter un stage
* modifier un stage
* afficher les stages
    * trier par nom
    * trier par date de début
    * trier par date de fin

## 2.5. autres
* afficher les stages d'un étudiant
* afficher les stages d'une entreprise

## 3. diagrammes

### 3.1. diagramme de cas d'utilisation

[Image: image]


### 3.2. diagramme de classe

[Image: image]


### 3.3. diagramme de séquence

[Image: image]



### bdd

[Image: image]





