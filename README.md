# Portfolio WordPress - Projet TD4

## Liens Importants
- **Portfolio** : https://portfolio.enzorv.dev
- **Panel Admin** : https://portfolio.enzorv.dev/wp/wp-admin
- **PhpMyAdmin** : https://pma.enzorv.dev

## Identifiants
### Panel Admin
- **Utilisateur** : `root`
- **Mot de passe** : `root`

### Base de Données
- **Nom** : `td4_wordpress`
- **Utilisateur** : `td4_wordpress_user`
- **Mot de passe** : `vU1KetG1GKOOWLGBE9r+vA==`



## Explication des étapes réalisées
### 1. Installation et Configuration
* Installation de Bedrock à l'aide de composer
* Installation du thème `astra` depuis le panel admin de wordpress
* Création d'un dossier `astra-child` avec les fichiers `functions.php` et `style.css`

### 2. Création du Custom Post Type (CPT)
* Création d'un CPT depuis le site https://generatewp.com/post-type/
* Ajout du CPT dans un fichier `cpt-portfolio.php`
* Ajout de la configuration pour le cpt dans le fichier `functions.php`

### 3. Ajout des Champs Personnalisés avec SCF
* Installation du plugin `Secure Custom Field` depuis le panel admin de wordpress
* Création depuis l'onglet `SCF` un groupe de champs pour le CPT `portfolio`
* Ajout de la configuration pour que les champs SCF ne soient affichés que sur le CPT `portfolio`


### 4. Affichage des Réalisations
* Création d'un fichier `archive-portfolio.php` pour afficher l'ensemble des créations
* Création d'un fichier `single-portfolio.php` pour afficher une création
* Ajout de HTML et de PHP pour mettre en forme
* Ajout d'un fichier `style.css` pour personnaliser l'affichage

### 5. Création de la Homepage
* La page a été créée a l'aide du thème parent
* Ajout d'une description rapide
* Ajout de timeline sur le parcours scolaire et professionnel
* Ajout d'un tableau de ma liste de compétences techniques et logicielles
* Ajout de mes 3 derniers projets à l'aide d'un éléments du plugin `postX`


### 6. Gestion et Livraison du Projet
* Rédaction d'un `README.md`
* Export de la base de données depuis le panel de phpmyadmi

## Difficultés rencontrées
* Beaucoup de problèmes lié a la connexion SQL en local, obligé de passer sur un développement directement sur un vps
* Difficulté à comprendre l'utilisation des CPT
* La personnalisation du `style.css` ne marche pas

## Installation du projet
1. **Clonez le projet**
```sh
git clone https://github.com/enzo-rndrsvt/td4-wordpress .
cd td4-wordpress
```

2. **Installez les dépendances**
```sh
composer install
```

3. **Configurez les variables d'environnements**
Ajoutez un fichier `.env` et modifiez les valeurs selon votre configuration
```js
DB_NAME=
DB_USER=
DB_PASSWORD=
DB_HOST=

WP_ENV=development
WP_HOME=
WP_SITEURL=${WP_HOME}/wp
```

4. **Importez la base de données** `portfolio.sql`

5. **Lancez votre php**


