
# Stage de Fin d'Études - Projet

## **Description du projet**
Ce projet est le résultat du travail effectué dans le cadre de mon stage de fin d'études. Son objectif est de développer et déployer une application web pour la gestion des stagiaires et la , en mettant en œuvre des concepts avancés de développement logiciel et de gestion de projet.

L'application vise à fournir une solution robuste, performante et intuitive pour répondre aux besoins des utilisateurs finaux.


## 🎥 **Voir la demo**
[https://github.com/Bouquennouche/Stage-fin-etudes/issues/1#issue-2731225772](https://github.com/user-attachments/assets/c6f33c3b-00aa-4567-9c87-c36f15a2519f
)



## **Fonctionnalités principales**
- **Authentification et Gestion des utilisateurs** : Système d'inscription, de connexion et de gestion des profils utilisateurs.
- **Gestion des rôles et permissions** : Contrôle d'accès basé sur les rôles pour assurer la sécurité et les autorisations.
- **Gestion des données** : Ajout, modification, suppression et affichage des données de l'application.
- **Gestion des Stagiaire** : Ajout, visualisation et modifcation de donnees des stagiaires.
- **Génération de rapports** : Export de rapports au format PDF et Excel.
- **Interface utilisateur interactive** : Interface responsive et facile à utiliser.
- **Multilingue** : Prise en charge de plusieurs langues pour offrir une accessibilité globale.

## **Structure du projet**
Le projet suit l'architecture **MVC (Modèle-Vue-Contrôleur)** pour assurer une séparation claire des responsabilités. Voici la structure principale du projet :

```
├── app/              # Contient la logique métier (Modèles, Contrôleurs, Services)
├── bootstrap/        # Fichiers d'initialisation de l'application
├── config/           # Fichiers de configuration de l'application
├── database/         # Migrations et seeders de la base de données
├── public/           # Point d'entrée (index.php) et fichiers statiques (CSS, JS, images)
├── resources/        # Vues (Blade), fichiers de traduction, ressources visuelles
├── routes/           # Fichiers de définition des routes
├── storage/          # Fichiers de cache, logs, uploads temporaires
├── tests/            # Tests automatisés (PHPUnit)
├── vendor/           # Bibliothèques et dépendances installées via Composer
```

## **Prérequis**
Avant d'exécuter ce projet, assurez-vous d'avoir installé les outils suivants :

- **PHP >= 8.0**
- **Composer** (pour la gestion des dépendances PHP)
- **Node.js & npm** (pour les dépendances front-end)
- **Serveur de base de données** (MySQL, PostgreSQL, etc.)
- **Serveur web** (Apache, Nginx)

## **Installation du projet**
Suivez ces étapes pour installer et exécuter le projet sur votre environnement local.

1. **Cloner le dépôt** :
   ```bash
   git clone https://github.com/nom_utilisateur/nom_du_projet.git
   cd nom_du_projet
   ```

2. **Installer les dépendances back-end** :
   ```bash
   composer install
   ```

3. **Installer les dépendances front-end** :
   ```bash
   npm install
   ```

4. **Configurer l'environnement** :
   Copiez le fichier `.env.example` en `.env` et modifiez les paramètres de la base de données.
   ```bash
   cp .env.example .env
   ```

   Mettez à jour les paramètres de base de données dans le fichier **.env**.

5. **Générer la clé de l'application** :
   ```bash
   php artisan key:generate
   ```

6. **Exécuter les migrations et seeders** :
   ```bash
   php artisan migrate --seed
   ```

7. **Lancer le serveur de développement** :
   ```bash
   php artisan serve
   ```

Le projet est maintenant accessible à l'adresse suivante : [http://localhost:8000](http://localhost:8000).

## **Utilisation**
- Accédez à la page d'accueil.
- Créez un compte ou connectez-vous avec les informations d'identification.
- Naviguez dans l'interface pour accéder aux fonctionnalités de gestion.

## **Commandes utiles**
- **Lancer les tests unitaires** :
  ```bash
  php artisan test
  ```
- **Mettre à jour les dépendances** :
  ```bash
  composer update
  npm update
  ```
- **Effacer le cache de l'application** :
  ```bash
  php artisan cache:clear
  ```
- **Effacer le cache de la configuration** :
  ```bash
  php artisan config:clear
  ```
- **Compiler les fichiers front-end** :
  ```bash
  npm run dev
  ```
- **Compiler les fichiers front-end pour la production** :
  ```bash
  npm run build
  ```

## **Conventions de codage**
- **Respect des normes PSR-12** pour l'écriture de code PHP.
- **Nommage clair et significatif** des variables, fonctions et classes.
- **Séparation claire des responsabilités** via le modèle MVC.

## **Outils et technologies utilisés**
- **Framework Back-end** : Laravel
- **Front-end** : HTML, CSS, JavaScript, Vue.js
- **Base de données** : MySQL / PostgreSQL
- **Dépendances** : Composer (pour PHP) et npm (pour les dépendances JS)
- **Outils de déploiement** : Scripts de déploiement et intégration continue (CI/CD)

## **Structure des routes**
Voici un aperçu des routes principales du projet (exemple).

| **Méthode** | **URI**         | **Action**              | **Description**                 |
|-------------|-----------------|-------------------------|----------------------------------|
| GET         | /login          | AuthController@login    | Page de connexion               |
| POST        | /login          | AuthController@authenticate | Connexion d'un utilisateur    |
| GET         | /dashboard      | DashboardController@index | Tableau de bord               |
| GET         | /users          | UserController@index     | Liste des utilisateurs         |
| POST        | /users          | UserController@store     | Création d'un utilisateur      |

## **Sécurité**
- **Hashage des mots de passe** avec Bcrypt.
- **Protection CSRF** sur les formulaires.
- **Système de permissions basé sur les rôles**.
- **Validation des entrées utilisateur**.

## **Améliorations futures**
- Amélioration de l'interface utilisateur.
- Intégration de la gestion des notifications par email.
- Ajout de nouveaux rôles d'utilisateurs.

## **Crédits**
Ce projet a été développé dans le cadre de mon **Stage de Fin d'Études**. Merci à toutes les personnes qui ont contribué directement ou indirectement.

## **Licence**
Ce projet est sous licence [MIT](https://opensource.org/licenses/MIT). Vous êtes libre de l'utiliser, de le modifier et de le redistribuer.

---

Si vous avez des questions ou des suggestions, n'hésitez pas à me contacter à l'adresse suivante : **ayoubbouquennouche@gmail.com**
