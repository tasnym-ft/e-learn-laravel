# 🎓 École Des Langues - Plateforme d'Apprentissage des Langues

<div align="center">

![Laravel](https://img.shields.io/badge/Laravel-12.0-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8.2-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-8.0-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-5.0-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white)
![License](https://img.shields.io/badge/License-MIT-green?style=for-the-badge)

Une plateforme moderne et élégante pour l'apprentissage des langues étrangères avec gestion complète des cours, étudiants et enseignants.

[Démo](#-fonctionnalités) • [Installation](#-installation) • [Documentation](#-documentation) • [Contribuer](#-contribution)

</div>

---

## 📋 Table des Matières

- [À Propos](#-à-propos)
- [Fonctionnalités](#-fonctionnalités)
- [Technologies](#-technologies)
- [Prérequis](#-prérequis)
- [Installation](#-installation)
- [Configuration](#-configuration)
- [Structure du Projet](#-structure-du-projet)
- [Base de Données](#-base-de-données)
- [Utilisation](#-utilisation)
- [Captures d'Écran](#-captures-décran)
- [API](#-api)
- [Tests](#-tests)
- [Contribution](#-contribution)
- [Licence](#-licence)

---

## 🌟 À Propos

**École Des Langues** est une application web complète développée avec Laravel 12, conçue pour faciliter l'apprentissage des langues étrangères. La plateforme offre une interface moderne et intuitive pour gérer les cours, les étudiants et les enseignants.

### 🎯 Objectifs du Projet

- Proposer une plateforme d'apprentissage accessible et moderne
- Faciliter la gestion administrative des cours de langues
- Offrir une expérience utilisateur fluide et responsive
- Permettre un suivi personnalisé des étudiants

---

## ✨ Fonctionnalités

### 🎨 Interface Frontend

- **Page d'Accueil Dynamique**
  - Design moderne avec animations
  - Présentation des cours disponibles
  - Section À Propos et Contact

- **Catalogue de Cours**
  - 6 langues disponibles (Chinois, Allemand, Italien, Anglais, Français, Espagnol)
  - Affichage dynamique depuis la base de données
  - Informations détaillées (prix, horaires, capacité, durée)
  - Cartes interactives avec effets hover

### 🔐 Système d'Authentification

- Inscription et connexion sécurisées (Laravel Breeze)
- Gestion des rôles (Admin/Utilisateur)
- Profils utilisateurs personnalisables
- Middleware de protection des routes

### 👨‍💼 Espace Administration

- **Dashboard Admin**
  - Vue d'ensemble des statistiques
  - Gestion complète des ressources

- **Gestion des Étudiants**
  - CRUD complet (Create, Read, Update, Delete)
  - Informations détaillées (nom, email, téléphone, adresse, date de naissance)
  - Recherche et filtrage

- **Gestion des Enseignants**
  - CRUD complet
  - Spécialités et coordonnées
  - Association aux cours

- **Gestion des Langues/Cours**
  - Création et modification de cours
  - Paramétrage des prix et horaires
  - Gestion des capacités et durées

### 🎨 Design & UX

- Interface responsive (mobile, tablette, desktop)
- Animations fluides (WOW.js)
- Dégradés modernes et palette de couleurs harmonieuse
- Icônes Bootstrap Icons
- Typographie Google Fonts (Heebo, Inter, Lobster Two)

---

## 🛠 Technologies

### Backend
- **Laravel 12.0** - Framework PHP moderne
- **PHP 8.2** - Langage de programmation
- **MySQL** - Base de données relationnelle
- **Laravel Breeze** - Authentification

### Frontend
- **Bootstrap 5** - Framework CSS
- **Blade Templates** - Moteur de templates Laravel
- **JavaScript/jQuery** - Interactivité
- **WOW.js** - Animations au scroll
- **Owl Carousel** - Carrousels

### Outils de Développement
- **Composer** - Gestionnaire de dépendances PHP
- **NPM** - Gestionnaire de paquets JavaScript
- **Vite** - Build tool moderne
- **Git** - Contrôle de version

---

## 📦 Prérequis

Avant de commencer, assurez-vous d'avoir installé :

- **PHP** >= 8.2
- **Composer** >= 2.0
- **Node.js** >= 18.0 & NPM
- **MySQL** >= 8.0 ou **MariaDB** >= 10.3
- **XAMPP** / **WAMP** / **MAMP** (recommandé pour Windows)

---

## 🚀 Installation

### 1️⃣ Cloner le Projet

```bash
git clone https://github.com/votre-username/ecole-des-langues.git
cd ecole-des-langues
```

### 2️⃣ Installer les Dépendances

```bash
# Dépendances PHP
composer install

# Dépendances JavaScript
npm install
```

### 3️⃣ Configuration de l'Environnement

```bash
# Copier le fichier d'environnement
cp .env.example .env

# Générer la clé d'application
php artisan key:generate
```

### 4️⃣ Configurer la Base de Données

Éditez le fichier `.env` :

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=elearn_db
DB_USERNAME=root
DB_PASSWORD=
```

### 5️⃣ Créer la Base de Données

**Option 1 : Via phpMyAdmin**
- Ouvrez phpMyAdmin (http://localhost/phpmyadmin)
- Créez une nouvelle base de données nommée `elearn_db`

**Option 2 : Via MySQL CLI**
```bash
mysql -u root -p
CREATE DATABASE elearn_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
exit;
```

### 6️⃣ Exécuter les Migrations et Seeders

```bash
# Créer les tables
php artisan migrate

# Remplir avec des données de test
php artisan db:seed --class=LangueSeeder
```

### 7️⃣ Compiler les Assets

```bash
# Développement
npm run dev

# Production
npm run build
```

### 8️⃣ Lancer le Serveur

```bash
php artisan serve
```

Accédez à l'application : **http://localhost:8000**

---

## ⚙️ Configuration

### Configuration de la Base de Données

Le projet utilise MySQL par défaut. Pour utiliser SQLite :

```env
DB_CONNECTION=sqlite
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=laravel
```

Créez ensuite le fichier de base de données :
```bash
touch database/database.sqlite
```

### Configuration du Mail

Pour les notifications par email :

```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=your_username
MAIL_PASSWORD=your_password
MAIL_ENCRYPTION=tls
```

---

## 📁 Structure du Projet

```
ecole-des-langues/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── Frontend/
│   │   │   │   └── LangueController.php
│   │   │   ├── StudentController.php
│   │   │   ├── EnseignantController.php
│   │   │   └── AuthController.php
│   │   └── Middleware/
│   └── Models/
│       ├── Langue.php
│       ├── Student.php
│       ├── Enseignant.php
│       └── User.php
├── database/
│   ├── migrations/
│   │   ├── create_users_table.php
│   │   ├── create_students_table.php
│   │   ├── create_enseignants_table.php
│   │   └── create_langues_table.php
│   └── seeders/
│       └── LangueSeeder.php
├── resources/
│   └── views/
│       ├── frontend/
│       │   ├── home.blade.php
│       │   ├── cours.blade.php
│       │   ├── about.blade.php
│       │   └── contact.blade.php
│       ├── admin/
│       │   ├── students/
│       │   └── enseignants/
│       └── layouts/
├── routes/
│   └── web.php
└── public/
    ├── css/
    ├── js/
    └── image/
```

---

## 🗄️ Base de Données

### Schéma des Tables

#### Table `langues`
| Colonne | Type | Description |
|---------|------|-------------|
| id | BIGINT | Clé primaire |
| nom | VARCHAR(255) | Nom de la langue |
| description | TEXT | Description du cours |
| niveau | VARCHAR(255) | Niveau (Débutant, Intermédiaire, Avancé) |
| prix | DECIMAL(8,2) | Prix du cours |
| horaire | VARCHAR(255) | Horaire des cours |
| capacite | INTEGER | Capacité maximale |
| image | VARCHAR(255) | Chemin de l'image |
| enseignant_id | BIGINT | Clé étrangère vers enseignants |
| duree | VARCHAR(255) | Durée du cours |
| actif | BOOLEAN | Statut du cours |
| created_at | TIMESTAMP | Date de création |
| updated_at | TIMESTAMP | Date de modification |

#### Table `students`
| Colonne | Type | Description |
|---------|------|-------------|
| id | BIGINT | Clé primaire |
| name | VARCHAR(255) | Nom complet |
| email | VARCHAR(255) | Email (unique) |
| phone | VARCHAR(255) | Téléphone |
| address | VARCHAR(255) | Adresse |
| birthdate | DATE | Date de naissance |

#### Table `enseignants`
| Colonne | Type | Description |
|---------|------|-------------|
| id | BIGINT | Clé primaire |
| nom | VARCHAR(255) | Nom complet |
| email | VARCHAR(255) | Email (unique) |
| telephone | VARCHAR(255) | Téléphone |
| specialite | VARCHAR(255) | Spécialité |

### Relations

- `Langue` **belongsTo** `Enseignant`
- `Enseignant` **hasMany** `Langue`

---

## 💻 Utilisation

### Accès Frontend

- **Page d'accueil** : `http://localhost:8000/`
- **Cours de langues** : `http://localhost:8000/cours`
- **À propos** : `http://localhost:8000/a-propos`
- **Contact** : `http://localhost:8000/contact`

### Accès Admin

1. Créez un compte administrateur :
```bash
php artisan tinker
```

```php
$user = User::create([
    'name' => 'Admin',
    'email' => 'admin@ecole.com',
    'password' => bcrypt('password'),
    'role' => 'admin'
]);
```

2. Connectez-vous à : `http://localhost:8000/login`

3. Accédez au dashboard : `http://localhost:8000/admin/dashboard`

### Routes Principales

```php
// Routes publiques
GET  /                    -> Page d'accueil
GET  /cours               -> Liste des cours
GET  /a-propos            -> Page à propos
GET  /contact             -> Page contact

// Authentification
GET  /login               -> Formulaire de connexion
POST /login               -> Traitement connexion
GET  /register            -> Formulaire d'inscription
POST /register            -> Traitement inscription
POST /logout              -> Déconnexion

// Routes admin (protégées)
GET  /admin/dashboard     -> Dashboard admin
GET  /admin/students      -> Liste des étudiants
GET  /admin/enseignants   -> Liste des enseignants
```

---

## 📸 Captures d'Écran

### Page d'Accueil
> Interface moderne avec présentation des cours et appel à l'action

### Catalogue de Cours
> Affichage dynamique des 6 langues avec informations détaillées

### Dashboard Admin
> Interface d'administration pour la gestion des ressources

---

## 🔌 API

### Endpoints Disponibles

```http
GET /api/langues
```
Retourne la liste de toutes les langues actives

**Réponse :**
```json
[
  {
    "id": 1,
    "nom": "Chinois",
    "prix": "129.00",
    "horaire": "12-14 AM",
    "capacite": 30,
    "duree": "3 mois",
    "enseignant": {
      "id": 1,
      "nom": "Ai Zhang"
    }
  }
]
```

---

## 🧪 Tests

### Exécuter les Tests

```bash
# Tous les tests
php artisan test

# Tests spécifiques
php artisan test --filter=LangueTest

# Avec couverture de code
php artisan test --coverage
```

### Tests Disponibles

- Tests unitaires des modèles
- Tests de fonctionnalités (Feature tests)
- Tests d'intégration

---

## 🤝 Contribution

Les contributions sont les bienvenues ! Voici comment contribuer :

1. **Fork** le projet
2. Créez votre branche (`git checkout -b feature/AmazingFeature`)
3. Committez vos changements (`git commit -m 'Add some AmazingFeature'`)
4. Push vers la branche (`git push origin feature/AmazingFeature`)
5. Ouvrez une **Pull Request**

### Guidelines

- Suivez les standards PSR-12 pour PHP
- Écrivez des tests pour les nouvelles fonctionnalités
- Documentez votre code
- Utilisez des messages de commit clairs

---

## 📝 Licence

Ce projet est sous licence **MIT**. Voir le fichier [LICENSE](LICENSE) pour plus de détails.

---

## 👥 Auteurs

- **Votre Nom** - *Développeur Principal* - [@votre-github](https://github.com/votre-username)

---

## 🙏 Remerciements

- [Laravel](https://laravel.com) - Framework PHP
- [Bootstrap](https://getbootstrap.com) - Framework CSS
- [Font Awesome](https://fontawesome.com) - Icônes
- [Google Fonts](https://fonts.google.com) - Typographie

---

## 📞 Support

Pour toute question ou problème :

- 📧 Email : support@ecole-langues.com
- 🐛 Issues : [GitHub Issues](https://github.com/votre-username/ecole-des-langues/issues)
- 💬 Discussions : [GitHub Discussions](https://github.com/votre-username/ecole-des-langues/discussions)

---

<div align="center">

**Fait avec ❤️ par [Votre Nom](https://github.com/votre-username)**

⭐ N'oubliez pas de mettre une étoile si ce projet vous a aidé !

</div>
