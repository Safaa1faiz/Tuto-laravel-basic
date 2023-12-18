# Autoformation Laravel

Entrez dans le monde de l'auto-apprentissage Laravel ! Ce manuel a été créé dans le but de vous orienter dans vos débuts avec Laravel et de vous fournir des ressources complémentaires pour votre parcours d'autoformation.
 ## Pour commencer
 
Avant de commencer, assurez-vous d'avoir installé les éléments suivants :

Composer : Gestionnaire de dépendances pour PHP.
PHP : Laravel nécessite PHP 7.3.0 ou version ultérieure.
Node.js : Laravel Mix, le compilateur d'actifs, dépend de Node.js.

### Comment commencer avec Laravel ?

Pour créer un nouveau projet Laravel, suivez les étapes ci-dessous :

1. Installez Laravel en utilisant Composer :

    ```bash
    composer create-project --prefer-dist laravel/laravel nom-du-projet
    ```

    Remplacez `nom-du-projet` par le nom que vous souhaitez donner à votre projet.

2. Accédez au répertoire de votre projet :

    ```bash
    cd nom-du-projet
    ```

3. Copiez le fichier d'environnement :

    ```bash
    cp .env.example .env
    ```

4. Générez la clé d'application :

    ```bash
    php artisan key:generate
    ```

5. Configurez votre base de données dans le fichier `.env`.

6. Exécutez les migrations et remplissez la base de données :

    ```bash
    php artisan migrate --seed
    ```

7. Lancez le serveur de développement :

    ```bash
    php artisan serve
    ```
Maintenant, vous êtes prêt à commencer votre parcours d'autoformation Laravel !

## Chapitres

### Vue d'ensemble de la documentation Laravel

Ce référentiel couvre différents aspects du développement Laravel. Chaque section est liée à la documentation Laravel pertinente pour des informations approfondies.

### Eloquent: Accesseurs et Mutateurs

Découvrez les [accesseurs et mutateurs Eloquent](https://laravel.com/docs/eloquent-mutators) dans la documentation Laravel.

### Eloquent: Seed and Factory

Comprenez comment utiliser [Eloquent Seed and Factory](https://laravel.com/docs/seeding) dans Laravel pour un remplissage efficace de la base de données.

### Front-end avec Vite

Explorez l'intégration de [Vite](https://laravel-mix.com/docs/6.0/vite) pour le développement front-end dans Laravel.

### Composants Blade

Maîtrisez l'utilisation des [composants Blade](https://laravel.com/docs/blade) pour des composants de vue efficaces et réutilisables.

### Laravel Breeze

Commencez avec [Laravel Breeze](https://laravel.com/docs/breeze) pour une structure d'authentification minimale et élégante.

### Politiques

Apprenez sur les [politiques](https://laravel.com/docs/authorization) dans Laravel pour gérer la logique d'autorisation.

### Fournisseur de services

Comprenez le rôle d'un [fournisseur de services](https://laravel.com/docs/providers) dans l'amorçage d'une application Laravel.

### Événements

Explorez l'utilisation des [événements](https://laravel.com/docs/events) pour gérer différentes actions dans votre application Laravel.

### Notifications

Implémentez les [notifications](https://laravel.com/docs/notifications) pour envoyer des notifications sur différents canaux.

### Internationalisation

Gérez les traductions et l'[internationalisation](https://laravel.com/docs/localization) dans les applications Laravel.

### Files d'attente

Apprenez sur les [files d'attente](https://laravel.com/docs/queues) et comment gérer efficacement les tâches en arrière-plan.

### Ressources API

Créez et gérez les [ressources API](https://laravel.com/docs/8.x/eloquent-resources) pour construire des API puissantes.

### Tests avec Laravel

Explorez les capacités de test de Laravel grâce à la documentation sur les [tests](https://laravel.com/docs/testing).

### Hébergement et Déploiement

Comprenez le processus de [hébergement et déploiement](https://laravel.com/docs/deployment) pour les applications Laravel.

### Hébergement partagé via SSH (Infomaniak)

Apprenez à déployer des applications Laravel sur un hébergement partagé avec SSH en utilisant [Infomaniak](https://www.infomaniak.com/).

N'hésitez pas à explorer chaque chapitre pour des informations détaillées et des exemples !

## Ressources supplémentaires

- [Laracasts](https://laracasts.com/series/laravel-8-from-scratch) : Une excellente ressource pour les screencasts et tutoriels vidéo Laravel.
- [Laravel News](https://laravel-news.com/) : Restez informé des dernières actualités, tutoriels et packages Laravel.
- [Laravel Podcast](https://www.laravelpodcast.com/) : Écoutez des discussions sur des sujets liés à Laravel.
- [Playlist Laravel](https://youtube.com/playlist?list=PLe30vg_FG4OTxKekbWLABcpstdeCDA4LQ&si=qwpSjOJUbgHR-Goa) : playlist Laravel
