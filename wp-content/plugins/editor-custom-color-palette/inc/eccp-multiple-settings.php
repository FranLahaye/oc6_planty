<?php

/***********************************************************************************************************
*
*  Editor Custom Color Palette [REV:3.2.1] 
* 
*  I  Ajout d'un groupe de champs de paramètres à la page de réglages du plugin
*
*  1. 1ère SECTION:  Paramètres par défaut
*
*  2. 2ème SECTION:  IMPORT/EXPORT RÉGLAGES
*
*  3. 3ème SECTION:  EDITOR COLOR PALETTE
*		3.1  CHECKBOX: activer la personnalisation de la palette de couleurs
*		3.2  SELECT: choix du nombre de couleurs de la palette
*       3.3  DÉCLARATION DES CHAMPS POUR LA COULEUR N°1
*       3.4  DÉCLARATION DES CHAMPS POUR LA COULEUR N°2
*       3.5  DÉCLARATION DES CHAMPS POUR LA COULEUR N°3
*       3.6  DÉCLARATION DES CHAMPS POUR LA COULEUR N°4
*       3.7  DÉCLARATION DES CHAMPS POUR LA COULEUR N°5
*       3.8  DÉCLARATION DES CHAMPS POUR LA COULEUR N°6
*       3.9  DÉCLARATION DES CHAMPS POUR LA COULEUR N°7
*       3.10 DÉCLARATION DES CHAMPS POUR LA COULEUR N°8
*       3.11 DÉCLARATION DES CHAMPS POUR LA COULEUR N°9
*       3.13 DÉCLARATION DES CHAMPS POUR LA COULEUR N°10
*       3.13 DÉCLARATION DES CHAMPS POUR LA COULEUR N°11
*       3.14 DÉCLARATION DES CHAMPS POUR LA COULEUR N°12
*		3.15 CHECKBOX: DÉSACTIVER LES COULEURS & DÉGRADÉS PERSONNALISÉES

*  4. 4ème SECTION:  EDITOR TEXT SIZE
*		4.1 CHECKBOX: activer le réglage des tailles de texte
*		4.2 TEXT: TAILLE DU TEXTE SMALL
*		4.3 TEXT: TAILLE DU TEXTE REGULAR
*		4.4 TEXT: TAILLE DU TEXTE LARGE
*		4.5 TEXT: TAILLE DU TEXTE HUGE
*		4.6 CHECKBOX: ACTIVER TYPOGRAPHIE FLUIDE
*		4.7 TEXT: TAILLE DE TEXTE LARGE POUR ÉCRAN MOBILE
*		4.8 TEXT: TAILLE DE TEXTE HUGE POUR ÉCRAN MOBILE
*		4.9 CHECKBOX: activer la taille de police par défaut pour l'editeur Gutenberg 
*		4.10 TEXT: TAILLE DE TEXTE PAR DEFAUT EDITEUR GUTENBERG
*		4.11 CHECKBOX: DÉSACTIVER LA TAILLE DE POLICE PERSONNALISÉE
*		4.12 CHECKBOX: ACTIVER TYPOGRAPHIE FLUIDE POUR LA TAILLE DE POLICE PERSONNALISÉE
*		
*  5. 5ème SECTION:  CUSTOM GUTENBERG EDITOR
*		5.1 CHECKBOX: DESACTIVER LE MODE PLEIN ECRAN DE GUTENBERG
*		5.2 CHECKBOX: ACTIVER EN FRONT END LA FEUILLE DE STYLE PAR DÉFAUT DES BLOCS GUTENBERG
*		5.3 DÉCLARATION DES CHAMPS DE PARAMÈTRES POUR UN ALIGNEMENT LARGE DE L'EDITEUR DE BLOCS	
*		5.4 DÉCLARATION DES CHAMPS DE PARAMÈTRES POUR EMBEDS RESPONSIVE(EX INTÉGRATION VIDÉOS YouTube)
*		5.5 DÉCLARATION DES CHAMPS DE PARAMÈTRES POUR LA LARGEUR DE L'ÉDITEUR
*       5.6 DÉCLARATION DES CHAMPS de PARAMÈTRES POUR LE TITRE PAGE OU ARTICLE
*		5.7 DÉCLARATION DES CHAMPS de PARAMÈTRES POUR ACTIVER LA PRISE EN CHARGE DES NOUVEAUX PARAMÉTRES DE BLOCS: BORDURE & MARGES
*		5.8 CHECKBOX: DESACTIVER POUR UNE IMAGE JPEG LA GÉNÉRATION D'IMAGE WEBP PAR DÉFAUT POUR LES MINIATURES
*	    5.9 CHECKBOX: DESACTIVER LE TÉLÉCHARGEMENT & LA GÉNÉRATION D'IMAGE AU FORMAT WEBP
*	    6.0 CHECKBOX: Désactiver la catégorie Openverse de l'onglet Média pour l'inséreuse de blocs.
*	    6.1 CHECKBOX: Désactiver les onglets paramètres & styles pour la barre latérale
*       6.2 DÉCLARATION DES CHAMPS de PARAMÈTRES POUR LA COULEUR D'ARRIÈRE PLAN
*	    6.3 CHECKBOX: Activer l'espacement fluide
*       6.4 DÉCLARATION DES CHAMPS DE PARAMÈTRES POUR L'ESPACEMENT FLUIDE
*
*  6. 6ème SECTION:  CUSTOMIZE GUTENBERG BLOCKS
*       6.1 DÉCLARATION DES CHAMPS POUR LE BLOC PARAGRAPHE
*		 6.1.1 CHAMP RADIO: ACTIVER EFFET BOX SHADOW POUR LE BLOC PARAGRAPHE
*	 	 6.1.2 CHAMP RADIO: activer le style Card
*	 	 6.1.3 CHAMP RADIO: activer le style Notice: Question
*	 	 6.1.4 CHAMP RADIO: activer le style Notice: Info
*	 	 6.1.5 CHAMP RADIO: activer le style Notice: Advice
*	 	 6.1.6 CHAMP RADIO: activer le style Notice: Warning
*	 	 6.1.7 CHAMP RADIO: activer le style Notice: Alert
*	 	 6.1.8 CHAMP RADIO: activer le style Click to Tweet
*		 6.1.9 on déclare un champ de type text pour renseigner la couleur du texte pour l'info-bulle
*		 6.1.10 on déclare un champ de type text pour renseigner la couleur d'arrière plan pour l'info-bulle
*		 6.1.11 on déclare un champ de type text pour renseigner la couleur double soulignement du texte
*
*       6.2 DÉCLARATION DES CHAMPS TEXTE POUR LE BLOC LISTE
*		 6.2.1 CHAMP RADIO: activer les styles des liste à puces
*
*		7.2 DÉCLARATION DES CHAMPS TEXTE POUR LE BLOC GROUPE
*		 7.2.1 Champ de type text pour renseigner le Nom de la table des matières
*		 7.2.2 Champ de type text pour renseigner la couleur d'arrière plan de la table des matières
*		 7.2.3 Champ de type de type text pour renseigner le décalage des ancres de navigations
*		 7.2.4 CHAMP RADIO: activer le soulignement des liens de la table des matières au survol
*
*       6.3 DÉCLARATION DES CHAMPS POUR LE BLOC ICÔNES DE RÉSEAUX SOCIAUX 
*		 6.3.1 CHAMP RADIO: activer le style RECTANGLE SHAPE
*
*       6.4 DÉCLARATION DES CHAMPS TEXTE POUR LE BLOC IMAGE
*		 6.4.1 CHAMP RADIO: activer le style Image: Circle
*	  	 6.4.2 CHAMP RADIO: activer le style Image: Filter Grayscale
*	  	 6.4.3 CHAMP RADIO: activer le style Image: Card
*		 6.4.4 DÉCLARATION DES CHAMPS POUR DÉFINIR UNE TAILLE D'IMAGE AUX PARAMÈTRE DU BLOC
*		 6.4.5 DÉCLARATION DES CHAMPS POUR DÉFINIR LES PARAMÈTRES PAR DÉFAUT LORS D'UN AJOUT DE MÉDIA
*
*		6.5 DÉCLARATION DES CHAMPS TEXTE POUR LE BLOC BOUTONS
*		 6.5.1 Déclaration des champs pour le style plein au survol
*		 6.5.2 Déclaration des champs pour le style contour au survol
*
*		6.6 DÉCLARATION DES CHAMPS POUR LE BLOC PARENT COLONNES
*
*		6.7 DÉCLARATION DES CHAMPS POUR LE BLOC MÉDIA & TEXTE
*
*		6.8 DÉCLARATION DES CHAMPS POUR LE BLOC READ MORE
*		 6.8.1 Déclaration des champs pour le style du bloc Lire La Suite
*		 6.8.2 Déclaration des champs pour le style du bloc Lire La Suite au survol
*
*		6.9 DÉCLARATION DES CHAMPS POUR LE BLOC TABLE
*	
*		6.10 DÉCLARATION DES CHAMPS POUR LE BLOC DERNIERS ARTICLES
*
*		6.11 DÉCLARATION DES CHAMPS POUR LE BLOC BOUCLE DE REQUÊTE
*
*		6.12 DÉCLARATION DES CHAMPS POUR LE BLOC FAQ YOAST SEO
*
*		6.13 DÉCLARATION CHAMP RADIO POUR ACTIVER SCRIPT JS & CSS DE LA LIBRAIRIE SWIPER POUR LE BLOC GALERIE
*
*		6.14 DÉCLARATION CHAMP RADIO POUR ACTIVER STYLES PERSONNALISÉS DU BLOC CITATION
*
*       6.15 DÉCLARATION DU CHAMP RADIO POUR ACTIVER SCRIPT JAVASCRIPT POUR PLUS DE PERSONNALISATION
*
*  7. 7ème SECTION:  ADDONS REUSABLE BLOCKS
*		6.1  CHECKBOX: ACTIVER LE MENU BLOCS RÉUTILSABLES EN BACK OFFICE
*		6.2  CHECKBOX: AFFICHER UN BLOC RÉUTILISABLE PAR SHORTCODE
*		6.3  SELECT: INSÉRER UN BLOC RÉUTILISABLE AVANT ET/OU APRÉS UNE PUBLICATION
*       6.3  DÉCLARATION DES CHAMPS POUR LE BLOC BLOCKQUOTE
*		6.4  DÉCLARATION DES CHAMPS TEXTE POUR LE BLOC METTRE EN ÉVIDENCE
*
*
*  8. 8ème SECTION:  ELEMENTOR PAGE BUILDER
*       7.1  RADIO: activer la synchronization de la palette de couleurs avec celle de Gutenberg
*
*  9. 9ème SECTION:  DIVI COLOR PALETTE
*       8.1  RADIO: activer la synchronization de la palette de couleurs DIVI 
*		8.2  RADIO: Choix synchro DIVI vers Gutenberg ou Gutenberg vers DIVI
*
* 10. 10ème SECTION:  CUSTOM BACK OFFICE
*		10.1 DÉCLARATION DES CHAMPS POUR LES ÉCRANS DE PUBLICATIONS
*		 10.1.1 CHECKBOX: activer une colonne & affichage image en avant pour les articles & CPT
*		 10.1.2 CHECKBOX: activer une colonne & affichage image en avant pour les pages
*        10.1.3 TEXT: on déclare un champ de type text pour renseigner la largeur de la vignette pour l'image en avant
*		 10.1.4 CHECKBOX: activer filtre par auteur pour tous les types de publication
*		 10.1.5 CHECKBOX: activer le filtre catégorie pour les CPT
*		 10.1.6 CHECKBOX: activer le filtre par plage de dates pour les articles & CPT
*		 10.1.7 CHECKBOX: activer pour les articles le filtre par statuts de publication 
*		 10.1.8 CHECKBOX: activer status de publication pour les actions groupés des articles 
*		10.2 DÉCLARATION DES CHAMPS POUR LA MÉDIATHÈQUE
*		 10.2.1 CHECKBOX: activer les colonnes ID & Dimensions & Taille fichier
*		 10.2.2 CHECKBOX: activer le filtre par plage de dates pour la médiathèque en vue liste 
*		 10.2.3 CHECKBOX: Autoriser l'upload de tous types de format dans la bibliothèque médias
*		 10.2.4 CHECKBOX: Définir automatiquement le texte alternatif de l'image selon son titre assaini lors du téléchargement
*		 10.2.5 CHECKBOX: Définir automatiquement la légende de l'image selon son titre assaini lors du téléchargement
*		10.3 DÉCLARATION DES CHAMPS POUR LES COMPTES
*	     10.3.1 CHECKBOX: activer une colonne pour afficher la date de dernière connexion
*	     10.3.2 CHECKBOX: activer une colonne pour afficher la date d'enregistrement de l'utilisateur
*		 10.3.3 CHECKBOX: autoriser les contributeurs a télécharger des médias
*		10.4 DÉCLARATION DES CHAMPS POUR LE FORMULAIRE DE CONNEXION
*		 10.4.1 CHECKBOX: désactiver le sélecteur de langue
*		 10.4.2 TEXTAREA: Message d'erreur personnalisé
*		 10.4.3 CHECKBOX: Désactiver la demande de vérification de l'adresse e-mail administrateur
*		 10.4.4 CHECKBOX: Activer la personnalisation du logo
* 		 10.4.5 TEXT: Renseigner l'URL du Logo Personnalisé
* 		 10.4.6 TEXT: Renseigner la largeur du Logo Personnalisé
*		 10.4.7 TEXT: Renseigner la hauteur du Logo Personnalisé
*		 10.4.8 RADIO: Activer la personnalisation du formulaire de connexion
*		 10.4.9 TEXT: Renseigner la couleur de fond de la page de connexion
*		 10.4.10 TEXT: Renseigner la couleur du texte en pied de page
*		 10.4.11 TEXT: Renseigner la couleur de fond du formulaire
*		 10.4.12 TEXT: Renseigner la couleur de texte du formulaire
*		 10.4.13 TEXT: Renseigner la couleur de fond des boutons
*		 10.4.14 TEXT: Renseigner la couleur de bordure des boutons
*		 10.4.15 TEXT: Renseigner la couleur de texte des boutons
*		 10.4.16 TEXT: Renseigner la couleur de fond des boutons au survol
*		 10.4.17 TEXT: Renseigner la couleur de bordure des boutons au survol
*		 10.4.18 TEXT: Renseigner la couleur de texte des boutons au survol
*		 10.4.19 TEXT: Renseigner la couleur de fond pour la notice info
*		 10.4.20 TEXT: Renseigner la couleur de bordure pour la notice info
*		 10.4.21 TEXT: Renseigner la couleur de texte pour la notice info
*		 10.4.22 TEXT: Renseigner la couleur de fond pour la notice d'erreur
*		 10.4.23 TEXT: Renseigner la couleur de bordure pour la notice d'erreur
*		 10.4.24 TEXT: Renseigner la couleur de texte pour la notice d'erreur
*		 10.4.25 RADIO: Activer une image de fond
*		 10.4.26 TEXT: Renseigner l'URL de l'image de fond
*		 10.4.27 CHECKBOX: activer image de fond fixe
*		 10.4.28 CHECKBOX: activer la redrection aprés connexion
*		10.5 DÉCLARATION DES CHAMPS POUR LES EMAILS PAR DÉFAUT DE WORDPRESS
*		 10.5.1 CHECKBOX: activer Modification du nom de l'expéditeur et de l'adresse e-mail WordPress Par défaut
*		 10.5.2 TEXT: Renseigner l'adresse de l'expéditeur de l'EMAIL
*		 10.5.3 TEXT: Renseigner le Nom de l'expéditeur 
*		 10.5.4 CHECKBOX: activer «l'adresse de retour» correspond à l'adresse «De»
*		10.6 DÉCLARATION DES CHAMPS POUR LES AUTRES PERSONNALISATION DE L'ADMIN WORDPRESS
*		 10.6.1 CHECKBOX: désactiver le sitemap de WordPress par défaut
*		 10.6.2 CHECKBOX: activer un lien de connexion/déconnexion a l'admin de WordPress pour un site en local
*		 10.6.3 CHECKBOX: activer un lien de connexion/déconnexion a l'admin de WordPress pour un site en ligne
*		 10.6.4 TEXT: Renseigner le slug de l'URL de connexion a l'admin de WordPress
*
* 11. 11ème SECTION:  CUSTOM FRONT END
*		11.1 DÉCLARATION DES CHAMPS POUR LE BOUTON RETOUR VERS LE HAUT
*		 11.1.1 CHECKBOX: activer le bouton retour vers le haut
*		 11.1.2 TEXT: Renseigner la marge droite
*		 11.1.3 TEXT: Renseigner la marge verticale
*		 11.1.4 TEXT: Renseigner l'opacité du bouton retour en haut
*		 11.1.5 TEXT: Renseigner l'opacité du bouton retour en haut au survol
*		 11.1.6 TEXT: Renseigner la couleur du bouton retour en haut
*		 11.1.7 TEXT: Renseigner la couleur de l'icône pour le bouton retour en haut
*		 11.1.8 TEXT: Renseigner le rayon de bordure pour le bouton retour en haut
*		11.2 DÉCLARATION DES CHAMPS POUR LES PUBLICATIONS
*		 11.2.1 CHECKBOX: activer Boite d'informations auteur
*		 11.2.2 TEXT: Renseigner le rayon de bordure pour l'avatar
*		 11.2.3 TEXT: Renseigner la couleur du titre pour la boite d'info auteur
*		 11.2.4 TEXT: Renseigner la couleur du texte pour la boite d'info auteur
*		 11.2.5 TEXT: Renseigner la couleur des liens pour la boite d'info auteur
*		 11.2.6 TEXT: Renseigner la couleur de fond pour la boite d'info auteur
*		 11.2.7 FORMULAIRE DE COMMENTAIRE
*		  11.2.7.1 CHECKBOX: Supression du champ: Site WEB
*		  11.2.7.2 CHECKBOX: Déplacer la zone commentaire en bas du formulaire
*		  11.2.7.3 TEXT AREA: Afficher un texte personnalisé avant le formulaire
*		  11.2.7.4 TEXT AREA: Afficher un texte personnalisé aprés le formulaire
*		  11.2.7.5 CHECKBOX: Centrer le bouton de soummission du formulaire
*		 11.2.8 CHECKBOX: activer la Lightbox 

*
*  II  AFFICHAGE DE HTML EN DESSOUS DES TITRES DE SECTION
*      SOMMAIRE
*
*  III FONCTION: NETTOYER LE NOM DE LA COULEUR POUR LE SLUG 
*
*  IV  AFFICHAGE DES CHAMPS DE PARAMÈTRES 
*
*  1. AFFICHAGE DES CHAMPS POUR LA 1ère SECTION PARAMÈTRES PAR DÉFAUT
*
*  2. AFFICHAGE DES CHAMPS POUR LA 2ère SECTION IMPORT/EXPORT RÉGLAGES
*
*  3. AFFICHAGE DES CHAMPS POUR LA 3ème SECTION EDITOR COLOR PALETTE
*		3.1  Affiche le paramètre de champ chexbox pour activer la personnalisation de la palette de couleurs
*		3.2  Affiche le paramètre de champ select pour choisir le nombre de couleurs de la palette 
*		3.3  AFFICHE LES PARAMÈTRES DE CHAMP POUR LA COULEUR N°1
*		3.4  AFFICHE LES PARAMÈTRES DE CHAMP POUR LA COULEUR N°2
*		3.5  AFFICHE LES PARAMÈTRES DE CHAMP POUR LA COULEUR N°3
*		3.6  AFFICHE LES PARAMÈTRES DE CHAMP POUR LA COULEUR N°4
*		3.7  AFFICHE LES PARAMÈTRES DE CHAMP POUR LA COULEUR N°5
*		3.8  AFFICHE LES PARAMÈTRES DE CHAMP POUR LA COULEUR N°6
*		3.9  AFFICHE LES PARAMÈTRES DE CHAMP POUR LA COULEUR N°7
*		3.10 AFFICHE LES PARAMÈTRES DE CHAMP POUR LA COULEUR N°8
*		3.11 AFFICHE LES PARAMÈTRES DE CHAMP POUR LA COULEUR N°9
*		3.12 AFFICHE LES PARAMÈTRES DE CHAMP POUR LA COULEUR N°10
*		3.13 AFFICHE LES PARAMÈTRES DE CHAMP POUR LA COULEUR N°11
*		3.14 AFFICHE LES PARAMÈTRES DE CHAMP POUR LA COULEUR N°12
*		3.15 Affiche le paramètre de champ chexbox pour désactiver les couleurs & dégradés personnalisées
*
*
*  4. AFFICHAGE DES CHAMPS POUR LA 4ème SECTION EDITOR TEXT SIZE
*		4.1  Affiche le paramètre de champ chexbox pour activer le réglage des tailles de texte  
*		4.2  Affiche le paramètre de champ texte pour renseigner la taille du texte small
*		4.3  Affiche le paramètre de champ texte pour renseigner la taille du texte regular
*		4.4  Affiche le paramètre de champ texte pour renseigner la taille du texte large
*		4.5  Affiche le paramètre de champ texte pour renseigner la taille du texte huge
*		4.6  Affiche le paramètre de champ chexbox pour activer la typographie fluide
*		4.7  Affiche le paramètre de champ texte pour renseigner la taille Large sur écran mobile
*		4.8  Affiche le paramètre de champ texte pour renseigner la taille Huge sur écran mobile
*		4.7  Affiche le paramètre de champ chexbox pour activer la taille de police par défaut pour l'editeur Gutenberg 
*		4.8  Affiche le paramètre de champ texte pour renseigner la taille du texte par défaut pour l'editeur Gutenberg 
*		4.9  Affiche le paramètre de champ chexbox pour désactiver la taille de police personnalisée
*		4.10 Affiche le paramètre de champ chexbox pour activer la typographie fluide pour une taille de police personnalisée 
*
*  5. AFFICHAGE DES CHAMPS POUR LA 5ème SECTION CUSTOM EDITOR GUTENBERG
*		5.1 Affiche le paramètre de champ chexbox pour activer le mode plein écran de Gutenberg
*		5.2 Affiche le paramètre de champ chexbox pour activer en front end la feuille de style par défaut des blocs Gutenberg 
*       5.3 AFFICHAGE DES CHAMPS POUR UN ALIGNEMENT LARGE DE L'ÉDITEUR DE BLOCS
*		5.4 AFFICHER LES CHAMPS DE PARAMÈTRES POUR LES EMBEDS RESPONSIVES(EX Vidéos YouTube)
*       5.5 AFFICHER LES CHAMPS DE PARAMÈTRES POUR LA LARGEUR DE L'ÉDITEUR
*		5.6 AFFICHE LES PARAMÈTRES DE CHAMP POUR LE TITRE ARTICLE OU PAGE
*		5.7 AFFICHE LES PARAMÈTRES DE CHAMP POUR ACTIVER LA PRISE EN CHARGE DES NOUVEAUX PARAMÉTRES DE BLOCS: BORDURE & MARGES
*		5.8 Affiche le paramètre de champ chexbox afin de désactiver pour une image JPEG la génération d'image WebP pour les miniatures
*		5.9 Affiche le paramètre de champ chexbox pour désactiver le téléchargement & la génération d'image WebP par défaut
*		6.0 Affiche le paramètre de champ chexbox pour Désactiver la catégorie Openverse de l'onglet Média pour l'inséreuse de blocs.
*		6.1 Affiche le paramètre de champ chexbox pour Désactiver les onglets paramètres & styles pour la barre latérale
*		6.2	AFFICHER LES CHAMPS de PARAMÈTRES POUR LA COULEUR D'ARRIÈRE PLAN
*		6.3 Affiche le paramètre de champ chexbox pour activer l'espacement fluide
*		6.4 AFFICHER LES CHAMPS de PARAMÈTRES POUR L'ESPACEMENT FLUIDE
*
*  6. AFFICHAGE DES CHAMPS POUR LA 6ème SECTION CUSTOMIZE GUTENBERG BLOCKS
*		6.1 AFFICHE LES PARAMÈTRES DE CHAMP POUR LE BLOC PARAGRAPHE
*		 6.1.1 Affiche le paramètre de champ radio pour activer l'ombre de boite pour le bloc paragraphe
*		 6.1.2 Affiche le paramètre de champ radio pour activer le style card
*		 6.1.3 Affiche le paramètre de champ radio pour activer le style Notice: Question
*		 6.1.4 Affiche le paramètre de champ radio pour activer le style Notice: Info
*		 6.1.5 Affiche le paramètre de champ radio pour activer le style Notice: Advice
*		 6.1.6 Affiche le paramètre de champ radio pour activer le style Notice: Warning
*		 6.1.7 Affiche le paramètre de champ radio pour activer le style Notice: Alert
*        6.1.8 Affiche le parametre de champ radio pour activer le style Click to Tweet
*		 6.1.9 Affiche le parametre de champ text pour renseigner la couleur du texte pour l'info-bulle
*		 6.1.10 Affiche le parametre de champ text pour renseigner la couleur d'arrière plan pour l'info-bulle
*		 6.1.11 Affiche le parametre de champ text pour renseigner la couleur double soulignement du texte
*
*		6.2 AFFICHE LES PARAMÈTRES DE CHAMP TEXTE POUR LE BLOC LISTE
*        6.2.1 Affiche le paramètre de champ radio pour activer les styles de liste à puces
*
*		6.3 AFFICHE LES PARAMÈTRES DE CHAMP TEXTE POUR LE BLOC GROUPE
*		 6.3.1 Affiche le paramètre de champ texte pour renseigner le nom de la table des matières
*		 6.3.2 Affiche le paramètre de champ texte pour renseigner la couleur d'arrière plan de la table des matières
*		 6.3.3 Affiche le paramètre de champ texte pour renseigner le décalage des ancres de navigations
*		 6.3.4 Affiche le paramètre de champ radio pour activer le soulignement des liens au survol
*
*		6.3 AFFICHE LES CHAMPS POUR LE BLOC ICÔNES DE RÉSEAUX SOCIAUX
*		  6.3.1 Affiche le paramètre de champ radio pour activer le style Rectangle Shape
*
*		6.3 AFFICHE LES PARAMÈTRES DE CHAMP TEXTE POUR LE BLOC IMAGE
*		 6.3.1 Affiche le paramètre de champ radio pour activer le style Image: Circle
*		 6.3.2 Affiche le paramètre de champ radio pour activer le style Image: Filter Grayscale
*		 6.3.3 Affiche le paramètre de champ radio pour activer le style Image: Card
*		 6.3.4 Affiche les champs pour définir une taille d'image aux paramètres du bloc
*        6.3.5 Affiche les champs pour définr les paramètres par défaut lors d'un ajout de média
*
*		6.4 AFFICHE LES PARAMÈTRES DE CHAMPS TEXTE POUR LE BLOC BOUTONS
*		 6.4.1 Affichage des champs pour le style plein au survol
*		 6.4.2 Affichage des champs pour le style contour au survol
*		6.5 AFFFICHE LES CHAMPS POUR LE BLOC PARENT COLONNES
*		6.6 AFFFICHE LES CHAMPS POUR LE BLOC MÉDIA & TEXTE
*		6.7 AFFFICHE LES CHAMPS POUR LE BLOC READ MORE
*		 6.7.1 Affichage des champs pour le style du bloc Lire La Suite
*		 6.7.2 Affichage des champs pour le style du bloc Lire La Suite au survol
*		6.8 DESCRIPTIF POUR LE BLOC TITRE
*		6.9 AFFFICHE LES CHAMPS POUR LE BLOC TABLE
*		6.10 AFFFICHE LES CHAMPS POUR LE BLOC DERNIERS ARTICLES
*		6.11 AFFFICHE LES CHAMPS POUR LE BLOC BOUCLE DE REQUÊTE
*		6.12 AFFFICHE LES CHAMPS POUR LE BLOC FAQ YOAST SEO
*		6.13 AFFICHE LE CHAMP RADIO POUR ACTIVER SCRIPT JS & CSS DE LA LIBRAIRIE SWIPER POUR LE BLOC GALERIE
*		6.14 AFFICHE LE CHAMP RADIO POUR ACTIVER LES STYLES PERSONNALISÉS POUR LE BLOC CITATION
*       6.15 AFFICHE LE CHAMP RADIO POUR ACTIVER SCRIPT JAVASCRIPT POUR PLUS DE PERSONNALISATION
*
*  7. AFFICHAGE DES CHAMPS POUR LA 7ème SECTION ADDONS REUSABLE BLOCKS
*   7.1  Afficher le paramètre de champ chexbox pour activer le menu Blocs Réutilisables en back Office
*   7.2  Afficher le paramètre de champ chexbox pour afficher un bloc réutilisable par shortcode
*	7.3  Afficher le paramètre de champ select pour insérer un bloc réutilisable avant et/ou aprés le contenu d'une publication
*	7.3  AFFICHAGE DES CHAMPS POUR LE BLOC BLOCKQUOTE
*	7.4  AFFICHAGE DES CHAMPS TEXTE POUR LE BLOC METTRE EN ÉVIDENCE
*
*
*  8.  AFFICHAGE DES CHAMPS POUR LA 8ème SECTION ELEMENTOR PAGE BUILDER
*   8.1  Affiche le paramètre de champ radio pour activer la synchronization de la palette de couleurs avec celle de Gutenberg
*
*
*  9. AFFICHAGE DES CHAMPS POUR LA 9ème SECTION DIVI COLOR PALETTE
*    9.1  Affiche le paramètre de champ radio pour activer la synchronization de la palette de couleurs DIVI
*	 9.2  Affiche le paramètre de champ Radio pour le Choix synchro DIVI vers Gutenberg ou Gutenberg vers DIVI
*
* 10. AFFICHAGE DES CHAMPS POUR LA 10ème SECTION CUSTOM BACK OFFICE
*		10.1 AFFICHAGE DES CHAMPS POUR LES ÉCRANS DE PUBLICATIONS
*		 10.1.1 Affiche le paramètre de champ chexbox pour activer la colonne & affichage image en avant pour les articles & CPT
*		 10.1.2 Affiche le paramètre de champ chexbox pour activer la colonne & affichage image en avant pour les pages
*   	 10.1.3 Affiche le paramètre de champ texte pour la largeur de la vignette image en avant
*		 10.1.4 Affiche le paramètre de champ chexbox pour activer le filtre par auteur
*		 10.1.5 Affiche le paramètre de champ chexbox pour activer le filtre par catégorie pour les CPT
*		 10.1.6 Affiche le paramètre de champ chexbox pour activer le filtre par plage de dates pour les articles & CPT
*		 10.1.7 Affiche le paramètre de champ chexbox pour activer pour les articles le filtre par statuts de publication 
*		 10.1.8 Affiche le paramètre de champ chexbox pour activer status de publication pour les actions groupés des articles
*		10.2 AFFICHAGE DES CHAMPS POUR LA MÉDIATHÈQUE
*		 10.2.1 Affiche le paramètre de champ chexbox pour activer les colonnes ID & Dimensions & Taille fichier
*		 10.2.2 Affiche le paramètre de champ chexbox pour activer le filtre par plage de dates pour la médiathèque en vue liste
*		 10.2.3 Affiche le paramètre de champ chexbox pour autoriser l'upload de tous types de format dans la bibliothèque médias
*        10.2.4 Affiche le paramètre de champ chexbox pour définir automatiquement le texte alternatif de l'image selon son titre assaini lors du téléchargement
*        10.2.5 Affiche le paramètre de champ chexbox pour définir automatiquement la légende de l'image selon son titre assaini lors du téléchargement
*		10.3 AFFICHAGE DES CHAMPS POUR LES COMPTES
*	 	 10.3.1 Affiche le paramètre de champ chexbox pour activer activer une colonne date de dernière connexion
*		 10.3.2 Affiche le paramètre de champ chexbox pour activer une colonne date d'enregistrement utilisateurs
*		10.4 AFFICHAGE DES CHAMPS POUR LE FORMULAIRE DE CONNEXION
*		 10.4.1 Affiche le paramètre de champ chexbox pour désactiver le sélecteur de langue
*		 10.4.2 Affiche le paramètre de champ textarea pour renseigner un message d'erreur personnalisé
*		 10.4.3 Affiche le paramètre de champ chexbox pour désactiver la demande de vérification de l'adresse e-mail administrateur
*		 10.4.4 Affiche le paramètre de champ chexbox pour activer la personnalisation du logo
*		 10.4.5 Affiche notre champ de réglage pour renseigner l'URL du logo personnalisé 
*		 10.4.6 Affiche notre champ de réglage pour renseigner la largeur du logo personnalisé
*		 10.4.7 Affiche notre champ de réglage pour renseigner la hauteur du logo personnalisé
*		 10.4.8 Affiche le paramètre de champ radio pour activer la personnalisation du formulaire de connexion
*        10.4.9 Affiche le paramètre de champ texte pour renseigner la couleur de fond de la page de connexion
*		 10.4.10 Affiche le paramètre de champ texte pour renseigner la couleur du texte en pied de page
*   	 10.4.11 Affiche le paramètre de champ texte pour renseigner la couleur de fond du formulaire de connexion
*   	 10.4.12 Affiche le paramètre de champ texte pour renseigner la couleur de texte du formulaire de connexion
*   	 10.4.13 Affiche le paramètre de champ texte pour renseigner la couleur de fond des boutons de la page de connexion
*   	 10.4.14 Affiche le paramètre de champ texte pour renseigner la couleur de la bordure des boutons de la page de connexion
*   	 10.4.15 Affiche le paramètre de champ texte pour renseigner la couleur de texte des boutons de la page de connexion
*   	 10.4.16 Affiche le paramètre de champ texte pour renseigner la couleur de fond des boutons au survol de la page de connexion
*   	 10.4.17 Affiche le paramètre de champ texte pour renseigner la couleur de la bordure des boutons au survol de la page de connexion
*   	 10.4.18 Affiche le paramètre de champ texte pour renseigner la couleur de texte des boutons au survol de la page de connexion
*   	 10.4.19 Affiche le paramètre de champ texte pour renseigner la couleur de fond de la notice info
*   	 10.4.20 Affiche le paramètre de champ texte pour renseigner la couleur de bordure de la notice info
*   	 10.4.21 Affiche le paramètre de champ texte pour renseigner la couleur de texte de la notice info
*   	 10.4.22 Affiche le paramètre de champ texte pour renseigner la couleur de fond de la notice d'erreur
*   	 10.4.23 Affiche le paramètre de champ texte pour renseigner la couleur de bordure de la notice d'erreur
*   	 10.4.24 Affiche le paramètre de champ texte pour renseigner la couleur de texte de la notice d'erreur
*		 10.4.25 Affiche le paramètre de champ radio pour activer une image de fond
*		 10.4.26 Affiche notre champ de réglage pour renseigner l'URL de l'image de fond
*        10.4.27 Affiche le paramètre de champ  checkbox pour activer image de fond fixe
*	     10.4.28 Affiche le paramètre de champ  checkbox pour activer la redirection aprés connexion
*		 10.5 AFFICHE LES CHAMPS POUR LES EMAILS PAR DÉFAUT DE WORDPRESS
*		 10.5.1 Affiche le paramètre de champ chexbox pour activer la Modification du nom de l'expéditeur et de l'adresse e-mail WordPress Par défaut
*		 10.5.2 Affiche le paramètre de champ texte pour Renseigner l'adresse de l'expéditeur de l'EMAIL
*		 10.5.3 Affiche le paramètre de champ texte pour Renseigner le Nom de l'expéditeur
*		 10.5.4 Affiche le paramètre de champ chexbox pour activer «l'adresse de retour» correspond à l'adresse «De»
*		10.6 AFFICHE LES CHAMPS POUR LES AUTRES PERSONNALISATION DE L'ADMIN WORDPRESS
*		 10.6.1 Affiche le paramètre de champ chexbox pour désactiver le sitemap de WordPress par défaut
*		 10.6.2 Affiche le paramètre de champ chexbox pour activer un lien de connexion/déconnexion a l'admin de WordPress pour un site en local
*		 10.6.3 Affiche le paramètre de champ chexbox pour activer un lien de connexion/déconnexion a l'admin de WordPress pour un site en ligne
*        10.6.4 Affiche le paramètre de champ texte pour renseigner le slug de l'URL de connexion a l'admin de WordPress
*
*
* 11. AFFICHAGE DES CHAMPS POUR LA 11ème SECTION CUSTOM FRONT END
*		11.1 AFFICHAGE DES CHAMPS POUR LE BOUTON RETOUR VERS LE HAUT
*		 11.1.1 Affiche le paramètre de champ chexbox pour activer le bouton retour vers le haut
*		 11.1.2 Affiche le paramètre de champ texte pour Renseigner la marge droite
*		 11.1.3 Affiche le paramètre de champ texte pour Renseigner la marge verticale
*		 11.1.4 Affiche le paramètre de champ texte pour Renseigner l'opacité du bouton retour en haut
*		 11.1.5 Affiche le paramètre de champ texte pour Renseigner l'opacité du bouton retour en haut au survol
*		 11.1.6 Affiche le paramètre de champ texte pour Renseigner la couleur du bouton retour en haut
*		 11.1.7 Affiche le paramètre de champ texte pour Renseigner la couleur de l'icône pour le bouton retour en haut
*		 11.1.8 Affiche le paramètre de champ texte pour Renseigner le rayon de bordure pour le bouton retour en haut
*		11.2 AFFICHAGE DES CHAMPS POUR LES PUBLICATIONS
*		 11.2.1 Affiche le paramètre de champ chexbox pour activer Boite d'informations auteur
*		 11.2.2 Affiche le paramètre de champ texte pour Renseigner le rayon de bordure pour l'avatar
*		 11.2.3 Affiche le paramètre de champ texte pour Renseigner la couleur du titre pour la boite d'info auteur
*		 11.2.4 Affiche le paramètre de champ texte pour Renseigner la couleur du texte pour la boite d'info auteur
*		 11.2.5 Affiche le paramètre de champ texte pour Renseigner la couleur des liens pour la boite d'info auteur
*		 11.2.6 Affiche le paramètre de champ texte pour Renseigner la couleur d'arrière plan pour la boite d'info auteur
*		 11.2.7 FORMULAIRE DE COMMENTAIRE
*		  11.2.7.1 Affiche le paramètre de champ chexbox pour la Supression du champ: Site WEB
*		  11.2.7.2 Affiche le paramètre de champ chexbox pour Déplacer la zone commentaire en bas du formulaire
*		  11.2.7.3 Affiche le paramètre de champ textarea pour Afficher un texte personnalisé avant le formulaire
*		  11.2.7.4 Affiche le paramètre de champ textarea pour Afficher un texte personnalisé aprés le formulaire
*		  11.2.7.5 Affiche le paramètre de champ chexbox pour centrer le bouton de soumission
*		 11.2.7 Affiche le paramètre de champ chexbox pour activer la Lightbox
*
*
*  V  NETTOYAGE DES VALEURS DES CHAMPS AVANT ENTRÉE EN BASE DE DONNÉES	
*
*************************************************************************************************************/

/* Empêche l'utilisateur public d'accéder directement aux fichiers .php via l'URL
et garantit que les fichiers du plugin seront exécutés uniquement dans l'environnement WordPress.*/
defined( 'ABSPATH' ) || die();

/*************************************************************************************************
 * Ajout d'un groupe de champs de paramètres à l'onglet Default settings de réglages du plugin
 ************************************************************************************************/
 
 // On se hooke sur admin_init et va simplement déclarer à WordPress l’existence d’un réglage
 add_action( 'admin_init', 'eccp_settings_default_settings' );
 

// On enregistre plusieurs paramètres
function eccp_settings_default_settings(){
	
    // on crée un réglage
	register_setting( 
        'eccp_default_settings',     // Settings group ( nom du groupe).
        'eccp_settings_default_settings', // Setting name ( nom du réglage c'est le nom de la fonction qui est hooké sur admin_init)
        'eccp_default_settings_sanitize'  // Sanitize callback(fonction de nettoyage pour nos valeur de réglages avant l'entrée en base de données)
    );
	
	
	/* -------------------------------------- 1ère SECTION:  Paramètres par défaut -----------------------------------------*/
	
	// On enregistre une section pour y ranger nos champs de réglages
    add_settings_section( 
        'default_settings_section',                   // Section ID
        __( 'Default settings', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_section_default_settings_markup',            // Callback or empty string (une fonction de rappel s’il y a de l’HTML spécial à afficher entre le titre de la section et les réglages)
        'eccp_settings_page'              // Page to display the section in (le slug de la page à laquelle appartient le champ)
    );
	
	
	// on déclare un champ de type radio pour initialiser le plugin avec les paramètres par défaut
    add_settings_field( 
        'eccp_default_setting_radio_field',           // Field ID
        __( 'initialize the plugin with default settings', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_default_setting_radio_field_markup',    // Callback or empty string (une fonction de rappel s’il y a de l’HTML spécial à afficher entre le titre de la section et les réglages)
        'eccp_settings_page',         // Page (le slug de la page à laquelle appartient le champ)
        'default_settings_section', // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// on déclare un champ de type radio pour supprimer les données lors de la désinstallation 
    add_settings_field( 
        'eccp_delete_data_uninstallation_radio_field',           // Field ID
        __( 'delete data during uninstallation?', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_delete_data_uninstallation_radio_field_markup',    // Callback or empty string (une fonction de rappel s’il y a de l’HTML spécial à afficher entre le titre de la section et les réglages)
        'eccp_settings_page',         // Page (le slug de la page à laquelle appartient le champ)
        'default_settings_section', // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	

}	// FIN FONCTION eccp_default_settings()  



/********************************************************************************************
 * Ajout d'un groupe de champs de paramètres à l'onglet COLORS PALETTE de réglages du plugin
 ********************************************************************************************/
 
 // On se hooke sur admin_init et va simplement déclarer à WordPress l’existence d’un réglage
 add_action( 'admin_init', 'eccp_multiple_setting' );
 

// On enregistre plusieurs paramètres
function eccp_multiple_setting(){
	
    // on crée un réglage
	register_setting( 
        'settings_eccp',     // Settings group ( nom du groupe).
        'eccp_multiple_setting', // Setting name ( nom du réglage c'est le nom de la fonction qui est hooké sur admin_init)
        'eccp_multiple_settings_sanitize'  // Sanitize callback(fonction de nettoyage pour nos valeur de réglages avant l'entrée en base de données)
    );
	
	/* -------------------------------------- 2ème SECTION:  IMPORT/EXPORT RÉGLAGES  -----------------------------------------*/
	
	
	/* On enregistre une section pour y ranger nos champs de réglages pour l'import/export des réglages
    add_settings_section( 
        'import_export_settings_section',                   // Section ID
        __( 'Import/Export Settings', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_section_import_export_settings_markup',            // Callback or empty string (une fonction de rappel s’il y a de l’HTML spécial à afficher entre le titre de la section et les réglages)
        'eccp_settings_page'              // Page to display the section in (le slug de la page à laquelle appartient le champ)
    );
	*/
	
	/* -------------------------------------- 3ème SECTION:  EDITOR COLOR PALETTE  ----------------------------------------- */
	
	
	// On enregistre une section pour pour y ranger nos champs de réglages pour l'edition de la palette de couleurs
    add_settings_section( 
        'editor_color_palette_section',                   // Section ID
        __( 'EDITOR COLOR PALETTE GUTENBERG', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_section_editor_color_palette_markup',            // Callback or empty string (une fonction de rappel s’il y a de l’HTML spécial à afficher entre le titre de la section et les réglages)
        'eccp_settings_page_color_palette'              // Page to display the section in (le slug de la page à laquelle appartient le champ)
    );
	
	
	
	// CHECKBOX: activer la personnalisation de la palette de couleurs
    add_settings_field( 
        'eccp_settings_activate_customizing_color_palette_checkbox_field',        // Field ID
        __( 'customizing color palette', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_activate_customizing_color_palette_checkbox_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_color_palette',         // Page (le slug de la page à laquelle appartient le champ)
        'editor_color_palette_section', // Section (l'ID de la section à laquelle appartient le champ)
        array( 
            'label_for' => 'eccp_settings_activate_customizing_color_palette_checkbox_field',  // Id for the input and label element =  Field ID
            'description' => __( 'activate', 'editor-custom-color-palette' ),
        )
    ); 
	
	// SELECT: choix du nombre de couleurs de la palette
    add_settings_field( 
        'eccp_settings_number_colors_select_field',          // Field ID
        __( 'number of colors in the palette', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_number_colors_select_field_markup',   // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_color_palette',          // Page (le slug de la page à laquelle appartient le champ)
        'editor_color_palette_section',  // Section (l'ID de la section à laquelle appartient le champ)
        array(
            'options' => array(
                '7' => __( '7', 'editor-custom-color-palette' ),
                '8' => __( '8', 'editor-custom-color-palette' ),
                '9' => __( '9', 'editor-custom-color-palette' ),
				'10' => __( '10', 'editor-custom-color-palette' ),
				'11' => __( '11', 'editor-custom-color-palette' ),
				'12' => __( '12', 'editor-custom-color-palette' ),
            ),
        )
    );
	
	
	
	/*----------------------------DÉCLARATION DES CHAMPS POUR LA COULEUR N°1----------------------------------- */ 
	 
	// on déclare un champ de type text pour renseigner la couleur N°1
    add_settings_field( 
        'eccp_settings_color_one_text_field',                   // Field ID
        __( 'color 1', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_color_one_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_color_palette',                // Page (le slug de la page à laquelle appartient le champ)
        'editor_color_palette_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// on déclare un champ de type text pour renseigner l'opacité couleur N°1
    add_settings_field( 
        'eccp_settings_opacity_color_one_text_field',                   // Field ID
        __( 'opacity: 0 to 100', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_opacity_color_one_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_color_palette',                // Page (le slug de la page à laquelle appartient le champ)
        'editor_color_palette_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// on déclare un champ de type text pour renseigner le nom de la couleur N°1
    add_settings_field( 
        'eccp_settings_name_color_one_text_field',                   // Field ID
        __( 'name', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_name_color_one_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_color_palette',                // Page (le slug de la page à laquelle appartient le champ)
        'editor_color_palette_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// on déclare un champ de type text pour renseigner le slug de la couleur N°1
    add_settings_field( 
        'eccp_settings_slug_color_one_text_field',                   // Field ID
        __( 'slug', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_slug_color_one_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_color_palette',                // Page (le slug de la page à laquelle appartient le champ)
        'editor_color_palette_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	/*----------------------------DÉCLARATION DES CHAMPS POUR LA COULEUR N°2----------------------------------- */ 
	 
	// on déclare un champ de type text pour renseigner la couleur N°2
    add_settings_field( 
        'eccp_settings_color_two_text_field',                   // Field ID
        __( 'color 2', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_color_two_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_color_palette',                // Page (le slug de la page à laquelle appartient le champ)
        'editor_color_palette_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// on déclare un champ de type text pour renseigner l'opacité couleur N°2
    add_settings_field( 
        'eccp_settings_opacity_color_two_text_field',                   // Field ID
        __( 'opacity: 0 to 100', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_opacity_color_two_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_color_palette',                // Page (le slug de la page à laquelle appartient le champ)
        'editor_color_palette_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// on déclare un champ de type text pour renseigner le nom de la couleur N°2
    add_settings_field( 
        'eccp_settings_name_color_two_text_field',                   // Field ID
        __( 'name', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_name_color_two_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_color_palette',                // Page (le slug de la page à laquelle appartient le champ)
        'editor_color_palette_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// on déclare un champ de type text pour renseigner le slug de la couleur N°2
    add_settings_field( 
        'eccp_settings_slug_color_two_text_field',                   // Field ID
        __( 'slug', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_slug_color_two_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_color_palette',                // Page (le slug de la page à laquelle appartient le champ)
        'editor_color_palette_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	
	/*----------------------------DÉCLARATION DES CHAMPS POUR LA COULEUR N°3----------------------------------- */ 
	 
	// on déclare un champ de type text pour renseigner la couleur N°3
    add_settings_field( 
        'eccp_settings_color_three_text_field',                   // Field ID
        __( 'color 3', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_color_three_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_color_palette',                // Page (le slug de la page à laquelle appartient le champ)
        'editor_color_palette_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// on déclare un champ de type text pour renseigner l'opacité couleur N°3
    add_settings_field( 
        'eccp_settings_opacity_color_three_text_field',                   // Field ID
        __( 'opacity: 0 to 100', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_opacity_color_three_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_color_palette',                // Page (le slug de la page à laquelle appartient le champ)
        'editor_color_palette_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// on déclare un champ de type text pour renseigner le nom de la couleur N°3
    add_settings_field( 
        'eccp_settings_name_color_three_text_field',                   // Field ID
        __( 'name', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_name_color_three_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_color_palette',                // Page (le slug de la page à laquelle appartient le champ)
        'editor_color_palette_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// on déclare un champ de type text pour renseigner le slug de la couleur N°3
    add_settings_field( 
        'eccp_settings_slug_color_three_text_field',                   // Field ID
        __( 'slug', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_slug_color_three_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_color_palette',                // Page (le slug de la page à laquelle appartient le champ)
        'editor_color_palette_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	/*----------------------------DÉCLARATION DES CHAMPS POUR LA COULEUR N°4----------------------------------- */ 
	 
	// on déclare un champ de type text pour renseigner la couleur N°4
    add_settings_field( 
        'eccp_settings_color_four_text_field',                   // Field ID
        __( 'color 4', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_color_four_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_color_palette',                // Page (le slug de la page à laquelle appartient le champ)
        'editor_color_palette_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// on déclare un champ de type text pour renseigner l'opacité couleur N°4
    add_settings_field( 
        'eccp_settings_opacity_color_four_text_field',                   // Field ID
        __( 'opacity: 0 to 100', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_opacity_color_four_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_color_palette',                // Page (le slug de la page à laquelle appartient le champ)
        'editor_color_palette_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// on déclare un champ de type text pour renseigner le nom de la couleur N°4
    add_settings_field( 
        'eccp_settings_name_color_four_text_field',                   // Field ID
        __( 'name', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_name_color_four_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_color_palette',                // Page (le slug de la page à laquelle appartient le champ)
        'editor_color_palette_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// on déclare un champ de type text pour renseigner le slug de la couleur N°4
    add_settings_field( 
        'eccp_settings_slug_color_four_text_field',                   // Field ID
        __( 'slug', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_slug_color_four_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_color_palette',                // Page (le slug de la page à laquelle appartient le champ)
        'editor_color_palette_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
		
	/*----------------------------DÉCLARATION DES CHAMPS POUR LA COULEUR N°5----------------------------------- */ 
	 
	// on déclare un champ de type text pour renseigner la couleur N°5
    add_settings_field( 
        'eccp_settings_color_five_text_field',                   // Field ID
        __( 'color 5', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_color_five_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_color_palette',                // Page (le slug de la page à laquelle appartient le champ)
        'editor_color_palette_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// on déclare un champ de type text pour renseigner l'opacité couleur N°5
    add_settings_field( 
        'eccp_settings_opacity_color_five_text_field',                   // Field ID
        __( 'opacity: 0 to 100', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_opacity_color_five_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_color_palette',                // Page (le slug de la page à laquelle appartient le champ)
        'editor_color_palette_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// on déclare un champ de type text pour renseigner le nom de la couleur N°5
    add_settings_field( 
        'eccp_settings_name_color_five_text_field',                   // Field ID
        __( 'name', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_name_color_five_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_color_palette',                // Page (le slug de la page à laquelle appartient le champ)
        'editor_color_palette_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// on déclare un champ de type text pour renseigner le slug de la couleur N°5
    add_settings_field( 
        'eccp_settings_slug_color_five_text_field',                   // Field ID
        __( 'slug', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_slug_color_five_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_color_palette',                // Page (le slug de la page à laquelle appartient le champ)
        'editor_color_palette_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	/*----------------------------DÉCLARATION DES CHAMPS POUR LA COULEUR N°6----------------------------------- */ 
	 
	// on déclare un champ de type text pour renseigner la couleur N°6
    add_settings_field( 
        'eccp_settings_color_six_text_field',                   // Field ID
        __( 'color 6', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_color_six_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_color_palette',                // Page (le slug de la page à laquelle appartient le champ)
        'editor_color_palette_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// on déclare un champ de type text pour renseigner l'opacité couleur N°6
    add_settings_field( 
        'eccp_settings_opacity_color_six_text_field',                   // Field ID
        __( 'opacity: 0 to 100', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_opacity_color_six_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_color_palette',                // Page (le slug de la page à laquelle appartient le champ)
        'editor_color_palette_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// on déclare un champ de type text pour renseigner le nom de la couleur N°6
    add_settings_field( 
        'eccp_settings_name_color_six_text_field',                   // Field ID
        __( 'name', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_name_color_six_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_color_palette',                // Page (le slug de la page à laquelle appartient le champ)
        'editor_color_palette_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// on déclare un champ de type text pour renseigner le slug de la couleur N°6
    add_settings_field( 
        'eccp_settings_slug_color_six_text_field',                   // Field ID
        __( 'slug', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_slug_color_six_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_color_palette',                // Page (le slug de la page à laquelle appartient le champ)
        'editor_color_palette_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	/*----------------------------DÉCLARATION DES CHAMPS POUR LA COULEUR N°7----------------------------------- */ 
	 
	// on déclare un champ de type text pour renseigner la couleur N°7
    add_settings_field( 
        'eccp_settings_color_seven_text_field',                   // Field ID
        __( 'color 7', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_color_seven_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_color_palette',                // Page (le slug de la page à laquelle appartient le champ)
        'editor_color_palette_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// on déclare un champ de type text pour renseigner l'opacité couleur N°7
    add_settings_field( 
        'eccp_settings_opacity_color_seven_text_field',                   // Field ID
        __( 'opacity: 0 to 100', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_opacity_color_seven_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_color_palette',                // Page (le slug de la page à laquelle appartient le champ)
        'editor_color_palette_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// on déclare un champ de type text pour renseigner le nom de la couleur N°7
    add_settings_field( 
        'eccp_settings_name_color_seven_text_field',                   // Field ID
        __( 'name', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_name_color_seven_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_color_palette',                // Page (le slug de la page à laquelle appartient le champ)
        'editor_color_palette_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// on déclare un champ de type text pour renseigner le slug de la couleur N°7
    add_settings_field( 
        'eccp_settings_slug_color_seven_text_field',                   // Field ID
        __( 'slug', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_slug_color_seven_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_color_palette',                // Page (le slug de la page à laquelle appartient le champ)
        'editor_color_palette_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	/*----------------------------DÉCLARATION DES CHAMPS POUR LA COULEUR N°8----------------------------------- */ 
	 
	// on déclare un champ de type text pour renseigner la couleur N°8
    add_settings_field( 
        'eccp_settings_color_eight_text_field',                   // Field ID
        __( 'color 8', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_color_eight_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_color_palette',                // Page (le slug de la page à laquelle appartient le champ)
        'editor_color_palette_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// on déclare un champ de type text pour renseigner l'opacité couleur N°8
    add_settings_field( 
        'eccp_settings_opacity_color_eight_text_field',                   // Field ID
        __( 'opacity: 0 to 100', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_opacity_color_eight_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_color_palette',                // Page (le slug de la page à laquelle appartient le champ)
        'editor_color_palette_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// on déclare un champ de type text pour renseigner le nom de la couleur N°8
    add_settings_field( 
        'eccp_settings_name_color_eight_text_field',                   // Field ID
        __( 'name', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_name_color_eight_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_color_palette',                // Page (le slug de la page à laquelle appartient le champ)
        'editor_color_palette_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// on déclare un champ de type text pour renseigner le slug de la couleur N°8
    add_settings_field( 
        'eccp_settings_slug_color_eight_text_field',                   // Field ID
        __( 'slug', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_slug_color_eight_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_color_palette',                // Page (le slug de la page à laquelle appartient le champ)
        'editor_color_palette_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	/*----------------------------DÉCLARATION DES CHAMPS POUR LA COULEUR N°9----------------------------------- */ 
	 
	// on déclare un champ de type text pour renseigner la couleur N°9
    add_settings_field( 
        'eccp_settings_color_nine_text_field',                   // Field ID
        __( 'color 9', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_color_nine_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_color_palette',                // Page (le slug de la page à laquelle appartient le champ)
        'editor_color_palette_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// on déclare un champ de type text pour renseigner l'opacité couleur N°9
    add_settings_field( 
        'eccp_settings_opacity_color_nine_text_field',                   // Field ID
        __( 'opacity: 0 to 100', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_opacity_color_nine_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_color_palette',                // Page (le slug de la page à laquelle appartient le champ)
        'editor_color_palette_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// on déclare un champ de type text pour renseigner le nom de la couleur N°9
    add_settings_field( 
        'eccp_settings_name_color_nine_text_field',                   // Field ID
        __( 'name', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_name_color_nine_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_color_palette',                // Page (le slug de la page à laquelle appartient le champ)
        'editor_color_palette_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// on déclare un champ de type text pour renseigner le slug de la couleur N°9
    add_settings_field( 
        'eccp_settings_slug_color_nine_text_field',                   // Field ID
        __( 'slug', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_slug_color_nine_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_color_palette',                // Page (le slug de la page à laquelle appartient le champ)
        'editor_color_palette_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	/*----------------------------DÉCLARATION DES CHAMPS POUR LA COULEUR N°10----------------------------------- */ 
	 
	// on déclare un champ de type text pour renseigner la couleur N°10
    add_settings_field( 
        'eccp_settings_color_ten_text_field',                   // Field ID
        __( 'color 10', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_color_ten_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_color_palette',                // Page (le slug de la page à laquelle appartient le champ)
        'editor_color_palette_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// on déclare un champ de type text pour renseigner l'opacité couleur N°10
    add_settings_field( 
        'eccp_settings_opacity_color_ten_text_field',                   // Field ID
        __( 'opacity: 0 to 100', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_opacity_color_ten_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_color_palette',                // Page (le slug de la page à laquelle appartient le champ)
        'editor_color_palette_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// on déclare un champ de type text pour renseigner le nom de la couleur N°10
    add_settings_field( 
        'eccp_settings_name_color_ten_text_field',                   // Field ID
        __( 'name', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_name_color_ten_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_color_palette',                // Page (le slug de la page à laquelle appartient le champ)
        'editor_color_palette_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// on déclare un champ de type text pour renseigner le slug de la couleur N°10
    add_settings_field( 
        'eccp_settings_slug_color_ten_text_field',                   // Field ID
        __( 'slug', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_slug_color_ten_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_color_palette',                // Page (le slug de la page à laquelle appartient le champ)
        'editor_color_palette_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	/*----------------------------DÉCLARATION DES CHAMPS POUR LA COULEUR N°11----------------------------------- */ 
	 
	// on déclare un champ de type text pour renseigner la couleur N°11
    add_settings_field( 
        'eccp_settings_color_eleven_text_field',                   // Field ID
        __( 'color 11', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_color_eleven_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_color_palette',                // Page (le slug de la page à laquelle appartient le champ)
        'editor_color_palette_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// on déclare un champ de type text pour renseigner l'opacité couleur N°11
    add_settings_field( 
        'eccp_settings_opacity_color_eleven_text_field',                   // Field ID
        __( 'opacity: 0 to 100', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_opacity_color_eleven_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_color_palette',                // Page (le slug de la page à laquelle appartient le champ)
        'editor_color_palette_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// on déclare un champ de type text pour renseigner le nom de la couleur N°11
    add_settings_field( 
        'eccp_settings_name_color_eleven_text_field',                   // Field ID
        __( 'name', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_name_color_eleven_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_color_palette',                // Page (le slug de la page à laquelle appartient le champ)
        'editor_color_palette_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// on déclare un champ de type text pour renseigner le slug de la couleur N°11
    add_settings_field( 
        'eccp_settings_slug_color_eleven_text_field',                   // Field ID
        __( 'slug', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_slug_color_eleven_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_color_palette',                // Page (le slug de la page à laquelle appartient le champ)
        'editor_color_palette_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	/*----------------------------DÉCLARATION DES CHAMPS POUR LA COULEUR N°12----------------------------------- */ 
	 
	// on déclare un champ de type text pour renseigner la couleur N°12
    add_settings_field( 
        'eccp_settings_color_twelve_text_field',                   // Field ID
        __( 'color 12', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_color_twelve_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_color_palette',                // Page (le slug de la page à laquelle appartient le champ)
        'editor_color_palette_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// on déclare un champ de type text pour renseigner l'opacité couleur N°12
    add_settings_field( 
        'eccp_settings_opacity_color_twelve_text_field',                   // Field ID
        __( 'opacity: 0 to 100', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_opacity_color_twelve_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_color_palette',                // Page (le slug de la page à laquelle appartient le champ)
        'editor_color_palette_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// on déclare un champ de type text pour renseigner le nom de la couleur N°12
    add_settings_field( 
        'eccp_settings_name_color_twelve_text_field',                   // Field ID
        __( 'name', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_name_color_twelve_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_color_palette',                // Page (le slug de la page à laquelle appartient le champ)
        'editor_color_palette_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// on déclare un champ de type text pour renseigner le slug de la couleur N°12
    add_settings_field( 
        'eccp_settings_slug_color_twelve_text_field',                   // Field ID
        __( 'slug', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_slug_color_twelve_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_color_palette',                // Page (le slug de la page à laquelle appartient le champ)
        'editor_color_palette_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	/*------------------------ CHECKBOX: DÉSACTIVER LES COULEURS & DÉGRADÉS PERSONNALISÉES --------------------------------------*/
	
	// CHECKBOX: désactivés les couleurs personnalisés
    add_settings_field( 
        'eccp_settings_disabling_custom_colors_checkbox_field',        // Field ID
        __( 'disabling custom colors', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_disabling_custom_colors_checkbox_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_color_palette',         // Page (le slug de la page à laquelle appartient le champ)
        'editor_color_palette_section', // Section (l'ID de la section à laquelle appartient le champ)
        array( 
            'label_for' => 'eccp_settings_disabling_custom_colors_checkbox_field',  // Id for the input and label element =  Field ID
            'description' => __( 'activate', 'editor-custom-color-palette' ),
        )
    ); 
	
	// CHECKBOX: désactivés les dégradés personnalisés
    add_settings_field( 
        'eccp_settings_disabling_custom_gradients_checkbox_field',        // Field ID
        __( 'disabling custom gradients', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_disabling_custom_gradients_checkbox_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_color_palette',         // Page (le slug de la page à laquelle appartient le champ)
        'editor_color_palette_section', // Section (l'ID de la section à laquelle appartient le champ)
        array( 
            'label_for' => 'eccp_settings_disabling_custom_gradients_checkbox_field',  // Id for the input and label element =  Field ID
            'description' => __( 'activate', 'editor-custom-color-palette' ),
        )
    ); 

}	// FIN FONCTION eccp_multiple_setting()  


/************************************************************************************
 * Ajout d'un groupe de champs de paramètres à l'onglet Editor Texte Size du plugin
 ************************************************************************************/
 
 // On se hooke sur admin_init et on va simplement déclarer à WordPress l’existence d’un réglage
 add_action( 'admin_init', 'eccp_setting_editor_text_size' );

// On enregistre plusieurs paramètres
function eccp_setting_editor_text_size(){
	
    // on crée un réglage
	register_setting( 
        'eccp_editor_text_size',     // Settings group ( nom du groupe).
        'eccp_setting_editor_text_size', // Setting name ( nom du réglage c'est le nom de la fonction qui est hooké sur admin_init)
        'eccp_editor_text_size_sanitize'  // Sanitize callback(fonction de nettoyage pour nos valeur de réglages avant l'entrée en base de données)
    );
	
	
	/* -------------------------------------- 4ème SECTION:  EDITOR TEXT SIZE -----------------------------------------*/
	
	
	// On enregistre une section pour y ranger nos champs de réglages pour l 'edition de la palette de taille de texte
    add_settings_section( 
        'editor_text_size_section',                   // Section ID
        __( 'EDITOR TEXT SIZES', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_section_editor_text_size_markup',            // Callback or empty string (une fonction de rappel s’il y a de l’HTML spécial à afficher entre le titre de la section et les réglages)
        'eccp_settings_page_editor_text_size'              // Page to display the section in (le slug de la page à laquelle appartient le champ)
    );
	
	
	// CHECKBOX: activer le réglage des tailles de texte
    add_settings_field( 
        'eccp_settings_activate_editor_text_size_checkbox_field',        // Field ID
        __( 'activate editor text sizes setting', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_activate_editor_text_size_checkbox_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_editor_text_size',         // Page (le slug de la page à laquelle appartient le champ)
        'editor_text_size_section', // Section (l'ID de la section à laquelle appartient le champ)
        array( 
            'label_for' => 'eccp_settings_activate_editor_text_size_checkbox_field',  // Id for the input and label element =  Field ID
            'description' => __( 'activate', 'editor-custom-color-palette' ),
        )
    ); 
	
	
	
	// TEXT: TAILLE DU TEXTE SMALL 
    add_settings_field( 
        'eccp_settings_small_font_size_text_field',                   // Field ID
        __( 'font size: small in pixel', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_small_font_size_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_editor_text_size',                // Page (le slug de la page à laquelle appartient le champ)
        'editor_text_size_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// TEXT: TAILLE DU TEXTE REGULAR
    add_settings_field( 
        'eccp_settings_regular_font_size_text_field',                   // Field ID
        __( 'font size: normal in pixel', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_regular_font_size_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_editor_text_size',                // Page (le slug de la page à laquelle appartient le champ)
        'editor_text_size_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// TEXT: TAILLE DU TEXTE LARGE 
    add_settings_field( 
        'eccp_settings_large_font_size_text_field',                   // Field ID
        __( 'font size: large in pixel', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_large_font_size_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_editor_text_size',                // Page (le slug de la page à laquelle appartient le champ)
        'editor_text_size_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// TEXT: TAILLE DU TEXTE HUGE
    add_settings_field( 
        'eccp_settings_huge_font_size_text_field',                   // Field ID
        __( 'font size: huge in pixel', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_huge_font_size_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_editor_text_size',                // Page (le slug de la page à laquelle appartient le champ)
        'editor_text_size_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	 
    // CHECKBOX: ACTIVER TYPOGRAPHIE FLUIDE
    add_settings_field( 
        'eccp_settings_enable_fluid_typography_checkbox_field',        // Field ID
        __( 'enable fluid typography', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_enable_fluid_typography_checkbox_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_editor_text_size',         // Page (le slug de la page à laquelle appartient le champ)
        'editor_text_size_section', // Section (l'ID de la section à laquelle appartient le champ)
        array( 
            'label_for' => 'eccp_settings_enable_fluid_typography_checkbox_field',  // Id for the input and label element =  Field ID
            'description' => __( 'activate', 'editor-custom-color-palette' ),
        )
    ); 
	
	// TEXT: TAILLE DE TEXTE LARGE POUR ÉCRAN MOBILE
	add_settings_field( 
        'eccp_settings_mobile_screen_large_font_size_text_field',                   // Field ID
        __( 'mobile screen: Large font size in pixel', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_mobile_screen_large_font_size_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_editor_text_size',                // Page (le slug de la page à laquelle appartient le champ)
        'editor_text_size_section',        // Section (l'ID de la section à laquelle appartient le champ)
    );
	
	// TEXT: TAILLE DE TEXTE HUGE POUR ÉCRAN MOBILE
	add_settings_field( 
        'eccp_settings_mobile_screen_huge_font_size_text_field',                   // Field ID
        __( 'mobile screen: Huge font size in pixel', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_mobile_screen_huge_font_size_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_editor_text_size',                // Page (le slug de la page à laquelle appartient le champ)
        'editor_text_size_section',        // Section (l'ID de la section à laquelle appartient le champ)
    );
	
	
	// CHECKBOX: activer la taille de police par défaut pour l'editeur Gutenberg 
	add_settings_field( 
        'eccp_settings_enable_default_gutenberg_editor_font_size_checkbox_field',        // Field ID
        __( 'Enable default text size', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_enable_default_gutenberg_editor_font_size_checkbox_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_editor_text_size',         // Page (le slug de la page à laquelle appartient le champ)
        'editor_text_size_section', // Section (l'ID de la section à laquelle appartient le champ)
        array( 
            'Activate' => 'eccp_settings_enable_default_gutenberg_editor_font_size_checkbox_field',  // Id for the input and label element =  Field ID
            'description' => __( 'activate', 'editor-custom-color-palette' ),
        )
    );
	
	// TEXT: TAILLE DE TEXTE PAR DEFAUT EDITEUR GUTENBERG
	add_settings_field( 
        'eccp_settings_default_gutenberg_editor_font_size_text_field',                   // Field ID
        __( 'text size: in pixels', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_default_gutenberg_editor_font_size_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_editor_text_size',                // Page (le slug de la page à laquelle appartient le champ)
        'editor_text_size_section',        // Section (l'ID de la section à laquelle appartient le champ)
    );
	
	// CHECKBOX: DÉSACTIVER LA TAILLE DE POLICE PERSONNALISÉE
    add_settings_field( 
        'eccp_settings_disable_custom_font_size_checkbox_field',        // Field ID
        __( 'Disable the custom font size', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_disable_custom_font_size_checkbox_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_editor_text_size',         // Page (le slug de la page à laquelle appartient le champ)
        'editor_text_size_section', // Section (l'ID de la section à laquelle appartient le champ)
        array( 
            'Activate' => 'eccp_settings_disable_custom_font_size_checkbox_field',  // Id for the input and label element =  Field ID
            'description' => __( 'activate', 'editor-custom-color-palette' ),
        )
    ); 
	
	// CHECKBOX: ACTIVER TYPOGRAPHIE FLUIDE POUR LA TAILLE DE POLICE PERSONNALISÉE
	add_settings_field( 
        'eccp_settings_enable_fluid_custom_font_size_checkbox_field',        // Field ID
        __( 'enable fluid typography', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_enable_fluid_custom_font_size_checkbox_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_editor_text_size',         // Page (le slug de la page à laquelle appartient le champ)
        'editor_text_size_section', // Section (l'ID de la section à laquelle appartient le champ)
        array( 
            'Activate' => 'eccp_settings_enable_fluid_custom_font_size_checkbox_field',  // Id for the input and label element =  Field ID
            'description' => __( 'activate', 'editor-custom-color-palette' ),
        )
    ); 

}	// FIN FONCTION eccp_setting_editor_text_size()  




/*********************************************************************************************************
 * Ajout d'un groupe de champs de paramètres à l'onglet CUSTOM GUTENBERG EDITOR de réglages du plugin
 ********************************************************************************************************/
 
 // On se hooke sur admin_init et va simplement déclarer à WordPress l’existence d’un réglage
 add_action( 'admin_init', 'eccp_settings_custom_gutenberg_editor' );
 

// On enregistre plusieurs paramètres
function eccp_settings_custom_gutenberg_editor(){
	
    // on crée un réglage
	register_setting( 
        'eccp_custom_gutenberg_editor',     // Settings group ( nom du groupe).
        'eccp_settings_custom_gutenberg_editor', // Setting name ( nom du réglage c'est le nom de la fonction qui est hooké sur admin_init)
        'eccp_custom_gutenberg_editor_sanitize'  // Sanitize callback(fonction de nettoyage pour nos valeur de réglages avant l'entrée en base de données)
    );

	/* -------------------------------------- 5ème SECTION:  CUSTOM GUTENBERG EDITOR -----------------------------------------*/
	
	
	// On enregistre une section pour y ranger nos champs de réglages pour la personnalisation de l'éditeur Gutenberg
    add_settings_section( 
        'custom-gutenberg_editor_section',                   // Section ID
        __( 'CUSTOMIZING GUTENBERG EDITOR', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_section_custom_gutenberg_editor_markup',            // Callback or empty string (une fonction de rappel s’il y a de l’HTML spécial à afficher entre le titre de la section et les réglages)
        'eccp_settings_page_custom_gutenberg_editor'              // Page to display the section in (le slug de la page à laquelle appartient le champ)
    );
	
	// CHECKBOX: DESACTIVER LE MODE PLEIN ECRAN DE GUTENBERG
    add_settings_field( 
        'eccp_settings_disable_fullscreen_gutenberg_editor_checkbox_field',        // Field ID
        __( 'disable fullscreen mode of Gutenberg editor', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_disable_fullscreen_gutenberg_editor_checkbox_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_custom_gutenberg_editor',         // Page (le slug de la page à laquelle appartient le champ)
        'custom-gutenberg_editor_section', // Section (l'ID de la section à laquelle appartient le champ)
        array( 
            'label_for' => 'eccp_settings_disable_fullscreen_gutenberg_editor_checkbox_field',  // Id for the input and label element =  Field ID
            'description' => __( 'activate', 'editor-custom-color-palette' ),
        )
    ); 
	
	// CHECKBOX: ACTIVER EN FRONT END LA FEUILLE DE STYLE PAR DÉFAUT DES BLOCS GUTENBERG
    add_settings_field( 
        'eccp_settings_activate_default_style_sheet_on_front_end_checkbox_field',        // Field ID
        __( 'activate the default style sheet of Gutenberg blocks on Front End', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_activate_default_style_sheet_on_front_end_checkbox_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_custom_gutenberg_editor',         // Page (le slug de la page à laquelle appartient le champ)
        'custom-gutenberg_editor_section', // Section (l'ID de la section à laquelle appartient le champ)
        array( 
            'label_for' => 'eccp_settings_activate_default_style_sheet_on_front_end_checkbox_field',  // Id for the input and label element =  Field ID
            'description' => __( 'activate', 'editor-custom-color-palette' ),
        )
    ); 
	
	/* --------- DÉCLARATION DES CHAMPS DE PARAMÈTRES POUR UN ALIGNEMENT LARGE DE L'EDITEUR DE BLOCS --------------------*/
	
	// CHECKBOX: OPTION ALIGNEMENT LARGE POUR L'EDITEUR DE BLOCS
    add_settings_field( 
        'eccp_settings_activate_align_wide_block_editor_checkbox_field',        // Field ID
        __( 'align wide option for the block editor', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_activate_align_wide_block_editor_checkbox_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_custom_gutenberg_editor',         // Page (le slug de la page à laquelle appartient le champ)
        'custom-gutenberg_editor_section', // Section (l'ID de la section à laquelle appartient le champ)
        array( 
            'label_for' => 'eccp_settings_activate_align_wide_block_editor_checkbox_field',  // Id for the input and label element =  Field ID
            'description' => __( 'activate', 'editor-custom-color-palette' ),
        )
    ); 
	
	/* ----------------- DÉCLARATION DES CHAMPS DE PARAMÈTRES POUR EMBEDS RESPONSIVE(EX INTÉGRATION VIDÉOS YouTube) --------------------*/
	
	// CHECKBOX: ACTIVER EMBEDS RESPONSIVE
    add_settings_field( 
        'eccp_settings_activate_responsive_embeds_checkbox_field',        // Field ID
        __( 'responsive embeds(for example integration vidéos YouTube)', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_activate_responsive_embeds_checkbox_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_custom_gutenberg_editor',         // Page (le slug de la page à laquelle appartient le champ)
        'custom-gutenberg_editor_section', // Section (l'ID de la section à laquelle appartient le champ)
        array( 
            'label_for' => 'eccp_settings_activate_responsive_embeds_checkbox_field',  // Id for the input and label element =  Field ID
            'description' => __( 'activate', 'editor-custom-color-palette' ),
        )
    ); 
	
	
	// on déclare un champ de type text pour renseigner la largeur max des vidéos embarqués pour les articles
    add_settings_field( 
        'eccp_settings_post_embed_max_width_text_field',                   // Field ID
        __( 'max width integrated videos(in pixels)(min:160px)', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_post_embed_max_width_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_custom_gutenberg_editor',                // Page (le slug de la page à laquelle appartient le champ)
        'custom-gutenberg_editor_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// on déclare un champ de type text pour renseigner la largeur max des vidéos embarqués pour les pages
    add_settings_field( 
        'eccp_settings_page_embed_max_width_text_field',                   // Field ID
        __( 'max width integrated videos(in pixels)(min:160px)', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_page_embed_max_width_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_custom_gutenberg_editor',                // Page (le slug de la page à laquelle appartient le champ)
        'custom-gutenberg_editor_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	
	// on déclare un champ de type text pour renseigner la largeur max des vidéos embarqués pour les CPT
    add_settings_field( 
        'eccp_settings_cpt_embed_max_width_text_field',                   // Field ID
        __( 'max width integrated videos(in pixels)(min:160px)', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_cpt_embed_max_width_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_custom_gutenberg_editor',                // Page (le slug de la page à laquelle appartient le champ)
        'custom-gutenberg_editor_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// on déclare un champ de type radio pour corriger selon les thèmes le problème 
	// de marge interne haute et alignement centré des vidéos en Front End
    add_settings_field( 
        'eccp_corrective_according_to_theme_radio_field',           // Field ID
        __( 'corrective according to theme', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_corrective_according_to_theme_radio_field_markup',    // Callback or empty string (une fonction de rappel s’il y a de l’HTML spécial à afficher entre le titre de la section et les réglages)
        'eccp_settings_page_custom_gutenberg_editor',         // Page (le slug de la page à laquelle appartient le champ)
        'custom-gutenberg_editor_section', // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	
	
	/* ----------------- DÉCLARATION DES CHAMPS DE PARAMÈTRES POUR LA LARGEUR DE L'ÉDITEUR --------------------*/
	
	// CHECKBOX: ACTIVER LE RÉGLAGE DE LA LARGEUR DE L'ÉDITEUR
    add_settings_field( 
        'eccp_settings_activate_editor_width_checkbox_field',        // Field ID
        __( 'Enable Editor Width', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_activate_editor_width_checkbox_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_custom_gutenberg_editor',         // Page (le slug de la page à laquelle appartient le champ)
        'custom-gutenberg_editor_section', // Section (l'ID de la section à laquelle appartient le champ)
        array( 
            'label_for' => 'eccp_settings_activate_editor_width_checkbox_field',  // Id for the input and label element =  Field ID
            'description' => __( 'activate', 'editor-custom-color-palette' ),
        )
    ); 
	
	// on déclare un champ de type text pour renseigner la largeur de l'editeur: petit modèle
    add_settings_field( 
        'eccp_settings_small_template_editor_text_field',                   // Field ID
        __( 'small template: width in pixel(min:500px)', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_small_template_editor_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_custom_gutenberg_editor',                // Page (le slug de la page à laquelle appartient le champ)
        'custom-gutenberg_editor_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// on déclare un champ de type text pour renseigner la largeur de l'editeur: grand modèle
    add_settings_field( 
        'eccp_settings_large_template_editor_text_field',                   // Field ID
        __( 'large template: width in pixel(min:840px)', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_large_template_editor_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_custom_gutenberg_editor',                // Page (le slug de la page à laquelle appartient le champ)
        'custom-gutenberg_editor_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// on déclare un champ de type select pour choisir le modèle de largeur pour les articles
    add_settings_field( 
        'eccp_settings_post_template_editor_select_field',          // Field ID
        __( 'Post default', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_post_template_editor_select_field_markup',   // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_custom_gutenberg_editor',          // Page (le slug de la page à laquelle appartient le champ)
        'custom-gutenberg_editor_section',  // Section (l'ID de la section à laquelle appartient le champ)
        array(
            'options' => array(
                'small' => __( 'small', 'editor-custom-color-palette' ),
                'large' => __( 'large', 'editor-custom-color-palette' ),
                'fullwidth' => __( 'fullwidth', 'editor-custom-color-palette' ),
            ),
        )
    ); 
	
	
	// on déclare un champ de type select pour choisir le modèle de largeur pour les pages
    add_settings_field( 
        'eccp_settings_page_template_editor_select_field',          // Field ID
        __( 'Page default', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_page_template_editor_select_field_markup',   // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_custom_gutenberg_editor',          // Page (le slug de la page à laquelle appartient le champ)
        'custom-gutenberg_editor_section',  // Section (l'ID de la section à laquelle appartient le champ)
        array(
            'options' => array(
                'small' => __( 'small', 'editor-custom-color-palette' ),
                'large' => __( 'large', 'editor-custom-color-palette' ),
                'fullwidth' => __( 'fullwidth', 'editor-custom-color-palette' ),
            ),
        )
    );
	
	// on déclare un champ de type select pour choisir le modèle de largeur pour les Custom Post Type
    add_settings_field( 
        'eccp_settings_cpt_template_editor_select_field',          // Field ID
        __( 'CPT: Custom Post Type', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_cpt_template_editor_select_field_markup',   // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_custom_gutenberg_editor',          // Page (le slug de la page à laquelle appartient le champ)
        'custom-gutenberg_editor_section',  // Section (l'ID de la section à laquelle appartient le champ)
        array(
            'options' => array(
                'small' => __( 'small', 'editor-custom-color-palette' ),
                'large' => __( 'large', 'editor-custom-color-palette' ),
                'fullwidth' => __( 'fullwidth', 'editor-custom-color-palette' ),
            ),
        )
    );

	
	/* ----------------- DÉCLARATION DES CHAMPS de PARAMÈTRES POUR LE TITRE PAGE OU ARTICLE --------------------*/
	
	// on déclare un champ de type select pour renseigner l'alignement du titre
    add_settings_field( 
        'eccp_settings_page_title_alignment_select_field',          // Field ID
        __( 'publication title: alignment', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_page_title_alignment_select_field_markup',   // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_custom_gutenberg_editor',          // Page (le slug de la page à laquelle appartient le champ)
        'custom-gutenberg_editor_section',  // Section (l'ID de la section à laquelle appartient le champ)
        array(
            'options' => array(
                'left' => __( 'left', 'editor-custom-color-palette' ),
                'center' => __( 'center', 'editor-custom-color-palette' ),
                'right' => __( 'right', 'editor-custom-color-palette' ),
            ),
        )
    ); 
	
	/* ----------------- DÉCLARATION DES CHAMPS de PARAMÈTRES POUR ACTIVER LA PRISE EN CHARGE DES NOUVEAUX PARAMÉTRES DE BLOCS: BORDURE & MARGES --------------------*/
	
	// CHECKBOX: ACTIVER LES MARGES INTERNES & EXTERNE
    add_settings_field( 
       'eccp_settings_activate_support_margin_padding_checkbox_field',        // Field ID
        __( 'Enable support new block settings: Margin & Padding', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_activate_support_margin_padding_checkbox_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_custom_gutenberg_editor',         // Page (le slug de la page à laquelle appartient le champ)
        'custom-gutenberg_editor_section', // Section (l'ID de la section à laquelle appartient le champ)
        array( 
            'label_for' => 'eccp_settings_activate_support_margin_padding_checkbox_field',  // Id for the input and label element =  Field ID
            'description' => __( 'activate', 'editor-custom-color-palette' ),
        )
    ); 
	
	
	// CHECKBOX: ACTIVER LE PARAMÉTRE BORDURE(Rayon Epaisseur,Couleur,Style)
    add_settings_field( 
        'eccp_settings_activate_support_border_checkbox_field',        // Field ID
        __( 'Enable support new block setting: Border', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_activate_support_border_checkbox_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_custom_gutenberg_editor',         // Page (le slug de la page à laquelle appartient le champ)
        'custom-gutenberg_editor_section', // Section (l'ID de la section à laquelle appartient le champ)
        array( 
            'label_for' => 'eccp_settings_activate_support_border_checkbox_field',  // Id for the input and label element =  Field ID
            'description' => __( 'activate', 'editor-custom-color-palette' ),
        )
    ); 
	
	
	/* ----------------- CHECKBOX: DESACTIVER POUR UNE IMAGE JPEG LA GÉNÉRATION D'IMAGE WEBP PAR DÉFAUT POUR LES MINIATURES --------------------*/
	
    add_settings_field( 
        'eccp_settings_disable_webp_image_generation_checkbox_field',        // Field ID
        __( 'Disable for JPEG images the generation of thumbnails in WebP format', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_disable_webp_image_generation_checkbox_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_custom_gutenberg_editor',         // Page (le slug de la page à laquelle appartient le champ)
        'custom-gutenberg_editor_section', // Section (l'ID de la section à laquelle appartient le champ)
        array( 
            'label_for' => 'eccp_settings_disable_webp_image_generation_checkbox_field',  // Id for the input and label element =  Field ID
            'description' => __( '', 'editor-custom-color-palette' ),
        )
    ); 
	
	
	/* ----------------- CHECKBOX: DESACTIVER LE TÉLÉCHARGEMENT & LA GÉNÉRATION D'IMAGE AU FORMAT WEBP --------------------*/
	
    add_settings_field( 
        'eccp_settings_disable_downloading_and_image_generation_webp_checkbox_field',        // Field ID
        __( 'Disable the download of WebP images & for JPEG images the generation of thumbnails in WebP format', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_disable_downloading_and_image_generation_webp_checkbox_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_custom_gutenberg_editor',         // Page (le slug de la page à laquelle appartient le champ)
        'custom-gutenberg_editor_section', // Section (l'ID de la section à laquelle appartient le champ)
        array( 
            'label_for' => 'eccp_settings_disable_downloading_and_image_generation_webp_checkbox_field',  // Id for the input and label element =  Field ID
            'description' => __( '', 'editor-custom-color-palette' ),
        )
    ); 
	
	
	/* ----------------- CHECKBOX: Désactiver la catégorie Openverse de l'onglet Média pour l'inséreuse de blocs. --------------------*/
	
    add_settings_field( 
        'eccp_settings_disable_openverse_category_from_media_tab_checkbox_field',        // Field ID
        __( 'Disable Openverse category from the Medias tab', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_disable_openverse_category_from_media_tab_checkbox_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_custom_gutenberg_editor',         // Page (le slug de la page à laquelle appartient le champ)
        'custom-gutenberg_editor_section', // Section (l'ID de la section à laquelle appartient le champ)
        array( 
            'label_for' => 'eccp_settings_disable_openverse_category_from_media_tab_checkbox_field',  // Id for the input and label element =  Field ID
            'description' => __( '', 'editor-custom-color-palette' ),
        )
    ); 
	
	/* ----------------- CHECKBOX: Désactiver les onglets paramètres & styles pour la barre latérale --------------------*/
	
	add_settings_field( 
        'eccp_settings_disable_settings_styles_tabs_for_sidebar_checkbox_field',        // Field ID
        __( 'Disable settings & styles tabs for sidebar', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_disable_settings_styles_tabs_for_sidebar_checkbox_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_custom_gutenberg_editor',         // Page (le slug de la page à laquelle appartient le champ)
        'custom-gutenberg_editor_section', // Section (l'ID de la section à laquelle appartient le champ)
        array( 
            'label_for' => 'eccp_settings_disable_settings_styles_tabs_for_sidebar_checkbox_field',  // Id for the input and label element =  Field ID
            'description' => __( '', 'editor-custom-color-palette' ),
        )
    ); 
	
	/* ----------------- DÉCLARATION DES CHAMPS de PARAMÈTRES POUR LA COULEUR D'ARRIÈRE PLAN --------------------*/
	
	// ----------------- CHECKBOX: Activer la couleur d'arrière plan --------------------
	add_settings_field( 
        'eccp_settings_enable_editor_background_color_checkbox_field',        // Field ID
        __( 'Enable editor background color', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_enable_editor_background_color_checkbox_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_custom_gutenberg_editor',         // Page (le slug de la page à laquelle appartient le champ)
        'custom-gutenberg_editor_section', // Section (l'ID de la section à laquelle appartient le champ)
        array( 
            'label_for' => 'eccp_settings_enable_editor_background_color_checkbox_field',  // Id for the input and label element =  Field ID
            'description' => __( '', 'editor-custom-color-palette' ),
        )
    ); 
	
	//TEXT: Renseigner la couleur de fond de l'éditeur
	add_settings_field( 
        'eccp_settings_editor_background_color_text_field',                   // Field ID
        __( 'Editor background color', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_editor_background_color_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_custom_gutenberg_editor',                // Page (le slug de la page à laquelle appartient le champ)
        'custom-gutenberg_editor_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	
	
	// ----------------- CHECKBOX: Activer l'espacement fluide --------------------
	add_settings_field( 
        'eccp_settings_enable_fluid_spacing_checkbox_field',        // Field ID
        __( 'enable fluid spacing', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_enable_fluid_spacing_checkbox_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_custom_gutenberg_editor',         // Page (le slug de la page à laquelle appartient le champ)
        'custom-gutenberg_editor_section', // Section (l'ID de la section à laquelle appartient le champ)
        array( 
            'label_for' => 'eccp_settings_enable_fluid_spacing_checkbox_field',  // Id for the input and label element =  Field ID
            'description' => __( '', 'editor-custom-color-palette' ),
        )
    ); 
	
	/* ----------------- DÉCLARATION DES CHAMPS DE PARAMÈTRES POUR L'ESPACEMENT FLUIDE --------------------*/
	
	//TEXT: Renseigner la résolution min d'écran
	add_settings_field( 
        'eccp_settings_min_viewport_fluid_espacement_text_field',                   // Field ID
        __( 'min viewport in pixel', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_min_viewport_fluid_espacement_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_custom_gutenberg_editor',                // Page (le slug de la page à laquelle appartient le champ)
        'custom-gutenberg_editor_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	//TEXT: Renseigner la résolution max d'écran
	add_settings_field( 
        'eccp_settings_max_viewport_fluid_espacement_text_field',                   // Field ID
        __( 'max viewport in pixel', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_max_viewport_fluid_espacement_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_custom_gutenberg_editor',                // Page (le slug de la page à laquelle appartient le champ)
        'custom-gutenberg_editor_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	//TEXT: Renseigner Valeur Min Espacement Fluide 1
	add_settings_field( 
        'eccp_settings_min_value_fluid_espacement_number_one_text_field',                   // Field ID
        __( 'min spacing in pixel', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_min_value_fluid_espacement_number_one_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_custom_gutenberg_editor',                // Page (le slug de la page à laquelle appartient le champ)
        'custom-gutenberg_editor_section',        // Section (l'ID de la section à laquelle appartient le champ)
    );
	
	//TEXT: Renseigner Valeur Max Espacement Fluide 1
	add_settings_field( 
        'eccp_settings_max_value_fluid_espacement_number_one_text_field',                   // Field ID
        __( 'max spacing in pixel', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_max_value_fluid_espacement_number_one_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_custom_gutenberg_editor',                // Page (le slug de la page à laquelle appartient le champ)
        'custom-gutenberg_editor_section',        // Section (l'ID de la section à laquelle appartient le champ)
    );
	
	//TEXT: Renseigner Valeur Min Espacement Fluide 2
	add_settings_field( 
        'eccp_settings_min_value_fluid_espacement_number_two_text_field',                   // Field ID
        __( 'min spacing in pixel', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_min_value_fluid_espacement_number_two_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_custom_gutenberg_editor',                // Page (le slug de la page à laquelle appartient le champ)
        'custom-gutenberg_editor_section',        // Section (l'ID de la section à laquelle appartient le champ)
    );
	
	//TEXT: Renseigner Valeur Max Espacement Fluide 2
	add_settings_field( 
        'eccp_settings_max_value_fluid_espacement_number_two_text_field',                   // Field ID
        __( 'max spacing in pixel', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_max_value_fluid_espacement_number_two_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_custom_gutenberg_editor',                // Page (le slug de la page à laquelle appartient le champ)
        'custom-gutenberg_editor_section',        // Section (l'ID de la section à laquelle appartient le champ)
    );
	
	//TEXT: Renseigner Valeur Min Espacement Fluide 3
	add_settings_field( 
        'eccp_settings_min_value_fluid_espacement_number_three_text_field',                   // Field ID
        __( 'min spacing in pixel', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_min_value_fluid_espacement_number_three_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_custom_gutenberg_editor',                // Page (le slug de la page à laquelle appartient le champ)
        'custom-gutenberg_editor_section',        // Section (l'ID de la section à laquelle appartient le champ)
    );
	
	//TEXT: Renseigner Valeur Max Espacement Fluide 3
	add_settings_field( 
        'eccp_settings_max_value_fluid_espacement_number_three_text_field',                   // Field ID
        __( 'max spacing in pixel', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_max_value_fluid_espacement_number_three_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_custom_gutenberg_editor',                // Page (le slug de la page à laquelle appartient le champ)
        'custom-gutenberg_editor_section',        // Section (l'ID de la section à laquelle appartient le champ)
    );
	
	//TEXT: Renseigner Valeur Min Espacement Fluide 4
	add_settings_field( 
        'eccp_settings_min_value_fluid_espacement_number_four_text_field',                   // Field ID
        __( 'min spacing in pixel', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_min_value_fluid_espacement_number_four_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_custom_gutenberg_editor',                // Page (le slug de la page à laquelle appartient le champ)
        'custom-gutenberg_editor_section',        // Section (l'ID de la section à laquelle appartient le champ)
    );
	
	//TEXT: Renseigner Valeur Max Espacement Fluide 4
	add_settings_field( 
        'eccp_settings_max_value_fluid_espacement_number_four_text_field',                   // Field ID
        __( 'max spacing in pixel', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_max_value_fluid_espacement_number_four_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_custom_gutenberg_editor',                // Page (le slug de la page à laquelle appartient le champ)
        'custom-gutenberg_editor_section',        // Section (l'ID de la section à laquelle appartient le champ)
    );
	
	//TEXT: Renseigner Valeur Min Espacement Fluide 5
	add_settings_field( 
        'eccp_settings_min_value_fluid_espacement_number_five_text_field',                   // Field ID
        __( 'min spacing in pixel', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_min_value_fluid_espacement_number_five_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_custom_gutenberg_editor',                // Page (le slug de la page à laquelle appartient le champ)
        'custom-gutenberg_editor_section',        // Section (l'ID de la section à laquelle appartient le champ)
    );
	
	//TEXT: Renseigner Valeur Max Espacement Fluide 5
	add_settings_field( 
        'eccp_settings_max_value_fluid_espacement_number_five_text_field',                   // Field ID
        __( 'max spacing in pixel', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_max_value_fluid_espacement_number_five_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_custom_gutenberg_editor',                // Page (le slug de la page à laquelle appartient le champ)
        'custom-gutenberg_editor_section',        // Section (l'ID de la section à laquelle appartient le champ)
    );
	
	//TEXT: Renseigner Valeur Min Espacement Fluide 6
	add_settings_field( 
        'eccp_settings_min_value_fluid_espacement_number_six_text_field',                   // Field ID
        __( 'min spacing in pixel', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_min_value_fluid_espacement_number_six_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_custom_gutenberg_editor',                // Page (le slug de la page à laquelle appartient le champ)
        'custom-gutenberg_editor_section',        // Section (l'ID de la section à laquelle appartient le champ)
    );
	
	//TEXT: Renseigner Valeur Max Espacement Fluide 6
	add_settings_field( 
        'eccp_settings_max_value_fluid_espacement_number_six_text_field',                   // Field ID
        __( 'max spacing in pixel', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_max_value_fluid_espacement_number_six_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_custom_gutenberg_editor',                // Page (le slug de la page à laquelle appartient le champ)
        'custom-gutenberg_editor_section',        // Section (l'ID de la section à laquelle appartient le champ)
    );
	
	//TEXT: Renseigner Valeur Min Espacement Fluide 7
	add_settings_field( 
        'eccp_settings_min_value_fluid_espacement_number_seven_text_field',                   // Field ID
        __( 'min spacing in pixel', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_min_value_fluid_espacement_number_seven_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_custom_gutenberg_editor',                // Page (le slug de la page à laquelle appartient le champ)
        'custom-gutenberg_editor_section',        // Section (l'ID de la section à laquelle appartient le champ)
    );
	
	//TEXT: Renseigner Valeur Max Espacement Fluide 7
	add_settings_field( 
        'eccp_settings_max_value_fluid_espacement_number_seven_text_field',                   // Field ID
        __( 'max spacing in pixel', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_max_value_fluid_espacement_number_seven_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_custom_gutenberg_editor',                // Page (le slug de la page à laquelle appartient le champ)
        'custom-gutenberg_editor_section',        // Section (l'ID de la section à laquelle appartient le champ)
    );
	

}	// FIN FONCTION eccp_custom_gutenberg_editor()  



/*******************************************************************************************************
 * Ajout d'un groupe de champs de paramètres à l'onglet CUSTOM GUTENBERG BLOCKS de réglages du plugin
 *******************************************************************************************************/
 
 // On se hooke sur admin_init et va simplement déclarer à WordPress l’existence d’un réglage
 add_action( 'admin_init', 'eccp_settings_custom_gutenberg_block' );
 

// On enregistre plusieurs paramètres
function eccp_settings_custom_gutenberg_block(){
	
    // on crée un réglage
	register_setting( 
        'eccp_custom_gutenberg_blocks',     // Settings group ( nom du groupe).
        'eccp_settings_custom_gutenberg_block', // Setting name ( nom du réglage c'est le nom de la fonction qui est hooké sur admin_init)
        'eccp_custom_gutenberg_block_sanitize'  // Sanitize callback(fonction de nettoyage pour nos valeur de réglages avant l'entrée en base de données)
    );
	
	
	/* -------------------------------------- 6ème SECTION:  CUSTOMIZE GUTENBERG BLOCKS -----------------------------------------*/
	
	// On enregistre une section pour y ranger nos champs de réglages pour la personnalisation des blocs de l'éditeur Gutenberg
    add_settings_section( 
        'customizing_gutenberg_blocks_editor_section',                   // Section ID
        __( 'CUSTOMIZING GUTENBERG BLOCKS', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_section_customizing_gutenberg_blocks_markup',            // Callback or empty string (une fonction de rappel s’il y a de l’HTML spécial à afficher entre le titre de la section et les réglages)
        'eccp_settings_page_customizing_gutenberg_blocks'              // Page to display the section in (le slug de la page à laquelle appartient le champ)
    );
	
	
	
	/* ----------------- DÉCLARATION DES CHAMPS POUR LE BLOC PARAGRAPHE --------------------*/
	
	// CHAMP RADIO: ACTIVER EFFET BOX SHADOW POUR LE BLOC PARAGRAPHE
	// modif version 2.8
	/*
    add_settings_field( 
        'eccp_settings_activate_box_shadow_paragraph_block_radio_field',        // Field ID
        __( 'paragraph block: Box shadow style activate', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_activate_box_shadow_paragraph_block_radio_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_gutenberg_blocks',         // Page (le slug de la page à laquelle appartient le champ)
        'customizing_gutenberg_blocks_editor_section', // Section (l'ID de la section à laquelle appartient le champ)
    );
	*/	
	
	// on déclare un champ de type text pour renseigner la couleur ombre de boite
	// modif version 2.8
	/*
    add_settings_field( 
        'eccp_settings_box_shadow_color_text_field',                   // Field ID
        __( 'box shadow color', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_box_shadow_color_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_gutenberg_blocks',                // Page (le slug de la page à laquelle appartient le champ)
        'customizing_gutenberg_blocks_editor_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	*/
	
	// on déclare un champ de type text pour renseigner l'opacité pour l'ombre de boite
	// modif version 2.8
	/*
    add_settings_field( 
        'eccp_settings_box_shadow_opacity_text_field',                   // Field ID
        __( 'opacity: 0 to 100', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_box_shadow_opacity_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_gutenberg_blocks',                // Page (le slug de la page à laquelle appartient le champ)
        'customizing_gutenberg_blocks_editor_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	*/
	
	// on déclare un champ de type text pour renseigner le parametre X pour l'ombre de boite
	// modif version 2.8
	/*
    add_settings_field( 
        'eccp_settings_box_shadow_x_text_field',                   // Field ID
        __( 'X', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_box_shadow_x_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_gutenberg_blocks',                // Page (le slug de la page à laquelle appartient le champ)
        'customizing_gutenberg_blocks_editor_section',        // Section (l'ID de la section à laquelle appartient le champ)
    );
	*/
	
	// on déclare un champ de type text pour renseigner le parametre Y pour l'ombre de boite
	// modif version 2.8
	/*
    add_settings_field( 
        'eccp_settings_box_shadow_y_text_field',                   // Field ID
        __( 'Y', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_box_shadow_y_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_gutenberg_blocks',                // Page (le slug de la page à laquelle appartient le champ)
        'customizing_gutenberg_blocks_editor_section',        // Section (l'ID de la section à laquelle appartient le champ)
    );
	*/
	
	// on déclare un champ de type text pour renseigner le parametre blur(flou) pour l'ombre de boite
    // modif version 2.8
	/*
	add_settings_field( 
        'eccp_settings_box_shadow_blur_text_field',                   // Field ID
        __( 'Blur', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_box_shadow_blur_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_gutenberg_blocks',                // Page (le slug de la page à laquelle appartient le champ)
        'customizing_gutenberg_blocks_editor_section',        // Section (l'ID de la section à laquelle appartient le champ)
    );
	*/
	
	// on déclare un champ de type text pour renseigner le parametre spread(Diffuser) pour l'ombre de boite
    // modif version 2.8
	/*
	add_settings_field( 
        'eccp_settings_box_shadow_spread_text_field',                   // Field ID
        __( 'Spread', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_box_shadow_spread_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_gutenberg_blocks',                // Page (le slug de la page à laquelle appartient le champ)
        'customizing_gutenberg_blocks_editor_section',        // Section (l'ID de la section à laquelle appartient le champ)
    );
	*/
	
	// CHAMP RADIO: activer le style Card
    add_settings_field( 
        'eccp_settings_activate_style_card_paragraph_radio_field',        // Field ID
        __( 'paragraph bloc: Activate card style', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_activate_style_card_paragraph_radio_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_gutenberg_blocks',         // Page (le slug de la page à laquelle appartient le champ)
        'customizing_gutenberg_blocks_editor_section', // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// CHAMP RADIO: activer le style Notice: Question
    add_settings_field( 
        'eccp_settings_activate_style_notice_question_radio_field',        // Field ID
        __( 'paragraph bloc: Activate notice question style', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_activate_style_notice_question_radio_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_gutenberg_blocks',         // Page (le slug de la page à laquelle appartient le champ)
        'customizing_gutenberg_blocks_editor_section', // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// on déclare un champ de type text pour renseigner la couleur de l'icône pour le style Notice: Question
    add_settings_field( 
        'eccp_settings_icon_color_style_notice_question_text_field',                   // Field ID
        __( 'icon color', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_icon_color_style_notice_question_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_gutenberg_blocks',                // Page (le slug de la page à laquelle appartient le champ)
        'customizing_gutenberg_blocks_editor_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// CHAMP RADIO: activer le style Notice: Info
    add_settings_field( 
        'eccp_settings_activate_style_notice_info_radio_field',        // Field ID
        __( 'paragraph bloc: Activate notice info style', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_activate_style_notice_info_radio_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_gutenberg_blocks',         // Page (le slug de la page à laquelle appartient le champ)
        'customizing_gutenberg_blocks_editor_section', // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// on déclare un champ de type text pour renseigner la couleur de l'icône pour le style Notice: info
    add_settings_field( 
        'eccp_settings_icon_color_style_notice_info_text_field',                   // Field ID
        __( 'icon color', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_icon_color_style_notice_info_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_gutenberg_blocks',                // Page (le slug de la page à laquelle appartient le champ)
        'customizing_gutenberg_blocks_editor_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	
	// CHAMP RADIO: activer le style Notice: Advice
    add_settings_field( 
        'eccp_settings_activate_style_notice_advice_radio_field',        // Field ID
        __( 'paragraph bloc: Activate notice advice style', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_activate_style_notice_advice_radio_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_gutenberg_blocks',         // Page (le slug de la page à laquelle appartient le champ)
        'customizing_gutenberg_blocks_editor_section', // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// on déclare un champ de type text pour renseigner la couleur de l'icône pour le style Notice: advice
    add_settings_field( 
        'eccp_settings_icon_color_style_notice_advice_text_field',                   // Field ID
        __( 'icon color', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_icon_color_style_notice_advice_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_gutenberg_blocks',                // Page (le slug de la page à laquelle appartient le champ)
        'customizing_gutenberg_blocks_editor_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// CHAMP RADIO: activer le style Notice: Warning
    add_settings_field( 
        'eccp_settings_activate_style_notice_warning_radio_field',        // Field ID
        __( 'paragraph bloc: Activate notice warning style', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_activate_style_notice_warning_radio_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_gutenberg_blocks',         // Page (le slug de la page à laquelle appartient le champ)
        'customizing_gutenberg_blocks_editor_section', // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// on déclare un champ de type text pour renseigner la couleur de l'icône pour le style Notice: warning
    add_settings_field( 
        'eccp_settings_icon_color_style_notice_warning_text_field',                   // Field ID
        __( 'icon color', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_icon_color_style_notice_warning_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_gutenberg_blocks',                // Page (le slug de la page à laquelle appartient le champ)
        'customizing_gutenberg_blocks_editor_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// CHAMP RADIO: activer le style Notice: Alert
    add_settings_field( 
        'eccp_settings_activate_style_notice_alert_radio_field',        // Field ID
        __( 'paragraph bloc: Activate notice alert style', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_activate_style_notice_alert_radio_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_gutenberg_blocks',         // Page (le slug de la page à laquelle appartient le champ)
        'customizing_gutenberg_blocks_editor_section', // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// on déclare un champ de type text pour renseigner la couleur de l'icône pour le style Notice: alert
    add_settings_field( 
        'eccp_settings_icon_color_style_notice_alert_text_field',                   // Field ID
        __( 'icon color', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_icon_color_style_notice_alert_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_gutenberg_blocks',                // Page (le slug de la page à laquelle appartient le champ)
        'customizing_gutenberg_blocks_editor_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	
	// CHAMP RADIO: activer le style Click to Tweet
    add_settings_field( 
        'eccp_settings_activate_style_click_to_tweet_radio_field',        // Field ID
        __( 'paragraph bloc: Activate Click to Tweet style', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_activate_style_click_to_tweet_radio_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_gutenberg_blocks',         // Page (le slug de la page à laquelle appartient le champ)
        'customizing_gutenberg_blocks_editor_section', // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// on déclare un champ de type text pour renseigner la couleur du texte pour l'info-bulle
    add_settings_field( 
        'eccp_settings_tooltip_text_color_text_field',                   // Field ID
        __( 'tooltip text color', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_tooltip_text_color_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_gutenberg_blocks',                // Page (le slug de la page à laquelle appartient le champ)
        'customizing_gutenberg_blocks_editor_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// on déclare un champ de type text pour renseigner la couleur d'arrière plan pour l'info-bulle
	add_settings_field( 
        'eccp_settings_tooltip_background_color_text_field',                   // Field ID
        __( 'tooltip background color', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_tooltip_background_color_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_gutenberg_blocks',                // Page (le slug de la page à laquelle appartient le champ)
        'customizing_gutenberg_blocks_editor_section',        // Section (l'ID de la section à laquelle appartient le champ)
    );
	
	// on déclare un champ de type text pour renseigner la couleur double soulignement du texte
	add_settings_field( 
        'eccp_settings_text_double_underline_color_text_field',                   // Field ID
        __( 'text double underline color', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_text_double_underline_color_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_gutenberg_blocks',                // Page (le slug de la page à laquelle appartient le champ)
        'customizing_gutenberg_blocks_editor_section',        // Section (l'ID de la section à laquelle appartient le champ)
    );
	
	
	/* ----------------- DÉCLARATION DES CHAMPS TEXTE POUR LE BLOC LISTE --------------------*/
	
	// on déclare un champ de type text pour renseigner la couleur des listes a puces
	/* Réglage dans l'editeur Gutenberg a partir de la version 2.5
    add_settings_field( 
        'eccp_settings_bulleted_list_color_text_field',                   // Field ID
        __( '', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_bulleted_list_color_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_gutenberg_blocks',                // Page (le slug de la page à laquelle appartient le champ)
        'customizing_gutenberg_blocks_editor_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); */
	
	// on déclare un champ de type text pour renseigner la taille des puces
	/* Réglage dans l'editeur Gutenberg a partir de la version 2.5
    add_settings_field( 
        'eccp_settings_bulleted_list_size_text_field',                   // Field ID
        __( '', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_bulleted_list_size_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_gutenberg_blocks',                // Page (le slug de la page à laquelle appartient le champ)
        'customizing_gutenberg_blocks_editor_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); */
	
	// CHAMP RADIO: activer les styles des liste à puces
	add_settings_field( 
        'eccp_settings_activate_styles_bullet_list_radio_field',        // Field ID
        __( 'Activate bullet list styles', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_activate_styles_bullet_list_radio_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_gutenberg_blocks',         // Page (le slug de la page à laquelle appartient le champ)
        'customizing_gutenberg_blocks_editor_section', // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	
	/* ----------------- DÉCLARATION DES CHAMPS TEXTE POUR LE BLOC GROUPE --------------------*/
	
	// Champ de type text pour renseigner le Nom de la table des matières
    add_settings_field( 
        'eccp_settings_name_table_of_contents_text_field',                   // Field ID
        __( 'title table of contents(max 30 characters)', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_name_table_of_contents_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_gutenberg_blocks',                // Page (le slug de la page à laquelle appartient le champ)
        'customizing_gutenberg_blocks_editor_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// Champ de type text pour renseigner la couleur d'arrière plan de la table des matières
    add_settings_field( 
        'eccp_settings_title_color_table_of_contents_text_field',                   // Field ID
        __( 'table of contents title color', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_title_color_table_of_contents_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_gutenberg_blocks',                // Page (le slug de la page à laquelle appartient le champ)
        'customizing_gutenberg_blocks_editor_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// Champ de type de type text pour renseigner le décalage des ancres de navigations
    add_settings_field( 
        'eccp_settings_offset_navigation_anchors_text_field',                   // Field ID
        __( 'offset navigation anchors for a fixed header(min:0 max:300px)', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_offset_navigation_anchors_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_gutenberg_blocks',                // Page (le slug de la page à laquelle appartient le champ)
        'customizing_gutenberg_blocks_editor_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// CHAMP RADIO: activer le soulignement des liens de la table des matières au survol
	add_settings_field( 
        'eccp_settings_activate_underline_table_of_contents_links_on_hover_radio_field',        // Field ID
        __( 'enable link underline on hover', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_activate_underline_table_of_contents_links_on_hover_radio_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_gutenberg_blocks',         // Page (le slug de la page à laquelle appartient le champ)
        'customizing_gutenberg_blocks_editor_section', // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	/* ----------------- DÉCLARATION DES CHAMPS POUR LE BLOC ICÔNES DE RÉSEAUX SOCIAUX --------------------*/
	
	//CHAMP RADIO: activer le style RECTANGLE SHAPE
    add_settings_field( 
        'eccp_settings_activate_rectangle_shape_style_radio_field',        // Field ID
        __( 'Enable Styles: Rectangular Shape,Float Right,Float Left', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_activate_rectangle_shape_style_radio_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_gutenberg_blocks',         // Page (le slug de la page à laquelle appartient le champ)
        'customizing_gutenberg_blocks_editor_section', // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	
	/* ----------------- DÉCLARATION DES CHAMPS TEXTE POUR LE BLOC IMAGE --------------------*/
	
	// on déclare un champ de type text pour renseigner la taille du texte pour la légende
    add_settings_field( 
        'eccp_settings_caption_font_size_text_field',                   // Field ID
        __( 'caption: font size in pixel', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_caption_font_size_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_gutenberg_blocks',                // Page (le slug de la page à laquelle appartient le champ)
        'customizing_gutenberg_blocks_editor_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// on déclare un champ de type text pour renseigner la marge interne de la légende
    add_settings_field( 
        'eccp_settings_caption_padding_text_field',                   // Field ID
        __( 'caption: padding in pixel', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_caption_padding_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_gutenberg_blocks',                // Page (le slug de la page à laquelle appartient le champ)
        'customizing_gutenberg_blocks_editor_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// on déclare un champ de type text pour renseigner la couleur du texte de la légende
    add_settings_field( 
        'eccp_settings_caption_color_text_field',                   // Field ID
        __( 'caption: text color', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_caption_color_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_gutenberg_blocks',                // Page (le slug de la page à laquelle appartient le champ)
        'customizing_gutenberg_blocks_editor_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// on déclare un champ de type text pour renseigner la couleur de fond de la légende
    add_settings_field( 
        'eccp_settings_caption_background_color_text_field',                   // Field ID
        __( 'caption: background color', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_caption_background_color_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_gutenberg_blocks',                // Page (le slug de la page à laquelle appartient le champ)
        'customizing_gutenberg_blocks_editor_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 

	// CHAMP RADIO: activer le style Image: Circle
    add_settings_field( 
        'eccp_settings_activate_style_image_circle_radio_field',        // Field ID
        __( 'image bloc: Activate circle style', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_activate_style_image_circle_radio_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_gutenberg_blocks',         // Page (le slug de la page à laquelle appartient le champ)
        'customizing_gutenberg_blocks_editor_section', // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// CHAMP RADIO: activer le style Image: Filter Grayscale
    add_settings_field( 
        'eccp_settings_activate_style_image_filter_grayscale_radio_field',        // Field ID
        __( 'image bloc: Activate filter grayscale style', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_activate_style_image_filter_grayscale_radio_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_gutenberg_blocks',         // Page (le slug de la page à laquelle appartient le champ)
        'customizing_gutenberg_blocks_editor_section', // Section (l'ID de la section à laquelle appartient le champ)
    );
	
	// CHAMP RADIO: activer le style Image: Card
    add_settings_field( 
        'eccp_settings_activate_style_image_card_radio_field',        // Field ID
        __( 'image bloc: Activate card style', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_activate_style_image_card_radio_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_gutenberg_blocks',         // Page (le slug de la page à laquelle appartient le champ)
        'customizing_gutenberg_blocks_editor_section', // Section (l'ID de la section à laquelle appartient le champ)
    );


	/* ----------------- DÉCLARATION DES CHAMPS POUR DÉFINIR UNE TAILLE D'IMAGE AUX PARAMÈTRE DU BLOC  --------------------*/

	// CHAMP RADIO: activer une taille d'image aux paramètres du bloc
    add_settings_field( 
        'eccp_settings_enable_image_size_setting_radio_field',        // Field ID
        __( 'enable image size setting', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_enable_image_size_setting_radio_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_gutenberg_blocks',         // Page (le slug de la page à laquelle appartient le champ)
        'customizing_gutenberg_blocks_editor_section', // Section (l'ID de la section à laquelle appartient le champ)
    );
	
	// on déclare un champ de type text pour renseigner la largeur de l'image aux paramètres du bloc
    add_settings_field( 
        'eccp_settings_custom_image_width_parameter_text_field',                   // Field ID
        __( 'width in pixels(min:150 max:1024)', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_custom_image_width_parameter_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_gutenberg_blocks',                // Page (le slug de la page à laquelle appartient le champ)
        'customizing_gutenberg_blocks_editor_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// on déclare un champ de type text pour renseigner la hauteur de l'image aux paramètres du bloc
    add_settings_field( 
        'eccp_settings_custom_image_height_parameter_text_field',                   // Field ID
        __( 'height in pixels(min:150 max:1024)', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_custom_image_height_parameter_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_gutenberg_blocks',                // Page (le slug de la page à laquelle appartient le champ)
        'customizing_gutenberg_blocks_editor_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 


	// on déclare un champ de type text pour renseigner le Nom de cette nouvelle taille d'image
    add_settings_field( 
        'eccp_settings_name_new_image_size_text_field',                   // Field ID
        __( 'Name of this new image size(max 30 characters)', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_name_new_image_size_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_gutenberg_blocks',                // Page (le slug de la page à laquelle appartient le champ)
        'customizing_gutenberg_blocks_editor_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// on déclare un champ de type text pour renseigner le slug de cette nouvelle taille d'image
    add_settings_field( 
        'eccp_settings_slug_new_image_size_text_field',                   // Field ID
        __( 'slug', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_slug_new_image_size_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_gutenberg_blocks',                // Page (le slug de la page à laquelle appartient le champ)
        'customizing_gutenberg_blocks_editor_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	/* ---------- DÉCLARATION DES CHAMPS POUR DÉFINIR LES PARAMÈTRES PAR DÉFAUT LORS D'UN AJOUT DE MÉDIA  ---------*/
	
	// on déclare un champ de type select pour définir le type de lien par défaut lors de l'ajout d'image
    add_settings_field( 
        'eccp_settings_image_default_link_type_select_field',          // Field ID
        __( 'Image default link type', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_image_default_link_type_select_field_markup',   // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_gutenberg_blocks',          // Page (le slug de la page à laquelle appartient le champ)
        'customizing_gutenberg_blocks_editor_section',  // Section (l'ID de la section à laquelle appartient le champ)
        array(
            'options' => array(
                'none' => __( 'None', 'editor-custom-color-palette' ),
                'file' => __( 'Media file', 'editor-custom-color-palette' ),
            ),
        )
    ); 

	// on déclare un champ de type select pour définir la taille par défaut lors de l'ajout d'image
    add_settings_field( 
        'eccp_settings_image_default_size_select_field',          // Field ID
        __( 'Image default size', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_image_default_size_select_field_markup',   // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_gutenberg_blocks',          // Page (le slug de la page à laquelle appartient le champ)
        'customizing_gutenberg_blocks_editor_section',  // Section (l'ID de la section à laquelle appartient le champ)
        array(
            'options' => array(
                'thumbnail' => __( 'Thumbnail', 'editor-custom-color-palette' ),
                'medium' => __( 'Medium', 'editor-custom-color-palette' ),
				'large' => __( 'Large ', 'editor-custom-color-palette' ),
                'full' => __( 'Full Size', 'editor-custom-color-palette' ),
            ),
        )
    ); 


	/* ----------------- DÉCLARATION DES CHAMPS TEXTE POUR LE BLOC BOUTONS  --------------------*/
	
	// CHAMP RADIO: ACTIVER STYLE BOUTONS AU SURVOL
    add_settings_field( 
        'eccp_settings_activate_button_styles_hover_radio_field',        // Field ID
        __( 'activate buttons styles', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_activate_button_styles_hover_radio_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_gutenberg_blocks',         // Page (le slug de la page à laquelle appartient le champ)
        'customizing_gutenberg_blocks_editor_section', // Section (l'ID de la section à laquelle appartient le champ)
    ); 


        /*--------------Déclaration des champs pour le style plein au survol--------------*/
				//Configuré dans l'editeur Gutenberg a partir de la version 2.6
					
	/* on déclare un champ de type text pour renseigner la couleur de fond du bouton au survol
    add_settings_field( 
        'eccp_settings_hover_fill_style_background_color_text_field',                   // Field ID
        __( 'hover fill style backgound color', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_hover_fill_style_background_color_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_gutenberg_blocks',                // Page (le slug de la page à laquelle appartient le champ)
        'customizing_gutenberg_blocks_editor_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); */
	
	/* on déclare un champ de type text pour renseigner l'opacité pour la couleur de fond du bouton
    add_settings_field( 
        'eccp_settings_hover_fill_style_backgound_color_opacity_text_field',                   // Field ID
        __( 'opacity: 0 to 100', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_hover_fill_style_backgound_color_opacity_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_gutenberg_blocks',                // Page (le slug de la page à laquelle appartient le champ)
        'customizing_gutenberg_blocks_editor_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); */	
		
	/* on déclare un champ de type text pour renseigner la couleur de bordure du bouton au survol
    add_settings_field( 
        'eccp_settings_hover_fill_style_border_color_text_field',                   // Field ID
        __( 'hover fill style border color', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_hover_fill_style_border_color_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_gutenberg_blocks',                // Page (le slug de la page à laquelle appartient le champ)
        'customizing_gutenberg_blocks_editor_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 	*/
	
	/* on déclare un champ de type text pour renseigner la couleur du texte au survol
    add_settings_field( 
        'eccp_settings_hover_fill_style_text_color_text_field',                   // Field ID
        __( 'hover fill style text color', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_hover_fill_style_text_color_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_gutenberg_blocks',                // Page (le slug de la page à laquelle appartient le champ)
        'customizing_gutenberg_blocks_editor_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); */	
		
		
		 /*--------------Déclaration des champs pour le style contour au survol--------------*/
					//Configuré dans l'editeur Gutenberg a partir de la version 2.6

	/* on déclare un champ de type text pour renseigner la couleur de fond du bouton au survol
    add_settings_field( 
        'eccp_settings_hover_outline_style_background_color_text_field',                   // Field ID
        __( 'hover outline style backgound color', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_hover_outline_style_background_color_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_gutenberg_blocks',                // Page (le slug de la page à laquelle appartient le champ)
        'customizing_gutenberg_blocks_editor_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); */
	
	/* on déclare un champ de type text pour renseigner l'opacité pour la couleur de fond du bouton
    add_settings_field( 
        'eccp_settings_hover_outline_style_backgound_color_opacity_text_field',                   // Field ID
        __( 'opacity: 0 to 100', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_hover_outline_style_backgound_color_opacity_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_gutenberg_blocks',                // Page (le slug de la page à laquelle appartient le champ)
        'customizing_gutenberg_blocks_editor_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 	*/
		
	/* on déclare un champ de type text pour renseigner la couleur de bordure du bouton au survol
    add_settings_field( 
        'eccp_settings_hover_outline_style_border_color_text_field',                   // Field ID
        __( 'hover outline style border color', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_hover_outline_style_border_color_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_gutenberg_blocks',                // Page (le slug de la page à laquelle appartient le champ)
        'customizing_gutenberg_blocks_editor_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 	*/
	
	/* on déclare un champ de type text pour renseigner la couleur du texte au survol
    add_settings_field( 
        'eccp_settings_hover_outline_style_text_color_text_field',                   // Field ID
        __( 'hover outline style text color', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_hover_outline_style_text_color_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_gutenberg_blocks',                // Page (le slug de la page à laquelle appartient le champ)
        'customizing_gutenberg_blocks_editor_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); */

	
	/* ----------------- DÉCLARATION DES CHAMPS POUR LE BLOC PARENT COLONNES  --------------------*/
	
	// CHAMP RADIO: ACTIVER STYLES POUR LE BLOC PARENT COLONNES
    add_settings_field( 
        'eccp_settings_activate_columns_block_styles_radio_field',        // Field ID
        __( 'Activate styles for the columns block', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_activate_columns_block_styles_radio_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_gutenberg_blocks',         // Page (le slug de la page à laquelle appartient le champ)
        'customizing_gutenberg_blocks_editor_section', // Section (l'ID de la section à laquelle appartient le champ)
    ); 

	/* ----------------- DÉCLARATION DES CHAMPS POUR LE BLOC MÉDIA & TEXTE  --------------------*/
	
	// CHAMP RADIO: ACTIVER STYLES POUR LE BLOC MÉDIA & TEXTE
    add_settings_field( 
        'eccp_settings_activate_media_text_block_styles_radio_field',        // Field ID
        __( 'Activate styles for the média & text block', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_activate_media_text_block_styles_radio_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_gutenberg_blocks',         // Page (le slug de la page à laquelle appartient le champ)
        'customizing_gutenberg_blocks_editor_section', // Section (l'ID de la section à laquelle appartient le champ)
    ); 


	/* ----------------- DÉCLARATION DES CHAMPS POUR LE BLOC READ MORE  --------------------*/
	
	// CHAMP RADIO: ACTIVER STYLES POUR LE BLOC READ MORE
    add_settings_field( 
        'eccp_settings_activate_block_styles_read_more_radio_field',        // Field ID
        __( 'Activate styles for the read more block', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_activate_block_styles_read_more_radio_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_gutenberg_blocks',         // Page (le slug de la page à laquelle appartient le champ)
        'customizing_gutenberg_blocks_editor_section', // Section (l'ID de la section à laquelle appartient le champ)
    ); 

	// on déclare un champ de type text pour renseigner le libellé de la balise Lire La Suite
    add_settings_field( 
        'eccp_settings_link_text_read_more_text_field',                   // Field ID
        __( 'link text "Read more"', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_link_text_read_more_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_gutenberg_blocks',                // Page (le slug de la page à laquelle appartient le champ)
        'customizing_gutenberg_blocks_editor_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 


	   /*--------------Déclaration des champs pour le style du bloc Lire La Suite--------------*/
	
	// on déclare un champ de type text pour renseigner la couleur de fond 
    add_settings_field( 
        'eccp_settings_block_read_more_background_color_text_field',                   // Field ID
        __( 'backgound color', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_block_read_more_background_color_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_gutenberg_blocks',                // Page (le slug de la page à laquelle appartient le champ)
        'customizing_gutenberg_blocks_editor_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// on déclare un champ de type text pour renseigner l'opacité pour la couleur de fond 
    add_settings_field( 
        'eccp_settings_block_read_more_backgound_color_opacity_text_field',                   // Field ID
        __( 'opacity: 0 to 100', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_block_read_more_backgound_color_opacity_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_gutenberg_blocks',                // Page (le slug de la page à laquelle appartient le champ)
        'customizing_gutenberg_blocks_editor_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 	
		
	// on déclare un champ de type text pour renseigner la couleur de bordure 
    add_settings_field( 
        'eccp_settings_block_read_more_border_color_text_field',                   // Field ID
        __( 'border color', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_block_read_more_border_color_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_gutenberg_blocks',                // Page (le slug de la page à laquelle appartient le champ)
        'customizing_gutenberg_blocks_editor_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 	
	
	// on déclare un champ de type text pour renseigner la couleur du texte 
    add_settings_field( 
        'eccp_settings_block_read_more_text_color_text_field',                   // Field ID
        __( 'text color', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_block_read_more_text_color_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_gutenberg_blocks',                // Page (le slug de la page à laquelle appartient le champ)
        'customizing_gutenberg_blocks_editor_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 	
		
		
		 /*--------------Déclaration des champs pour le style du bloc Lire La Suite au survol--------------*/

	// on déclare un champ de type text pour renseigner la couleur de fond au survol
    add_settings_field( 
        'eccp_settings_block_read_more_hover_background_color_text_field',                   // Field ID
        __( 'hover backgound color', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_block_read_more_hover_background_color_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_gutenberg_blocks',                // Page (le slug de la page à laquelle appartient le champ)
        'customizing_gutenberg_blocks_editor_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// on déclare un champ de type text pour renseigner l'opacité pour la couleur de fond au survol
    add_settings_field( 
        'eccp_settings_block_read_more_hover_backgound_color_opacity_text_field',                   // Field ID
        __( 'opacity: 0 to 100', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_block_read_more_hover_backgound_color_opacity_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_gutenberg_blocks',                // Page (le slug de la page à laquelle appartient le champ)
        'customizing_gutenberg_blocks_editor_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 	
		
	// on déclare un champ de type text pour renseigner la couleur de bordure au survol
    add_settings_field( 
        'eccp_settings_block_read_more_hover_border_color_text_field',                   // Field ID
        __( 'hover border color', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_block_read_more_hover_border_color_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_gutenberg_blocks',                // Page (le slug de la page à laquelle appartient le champ)
        'customizing_gutenberg_blocks_editor_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 	
	
	// on déclare un champ de type text pour renseigner la couleur du texte au survol
    add_settings_field( 
        'eccp_settings_block_read_more_hover_text_color_text_field',                   // Field ID
        __( 'hover text color', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_block_read_more_hover_text_color_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_gutenberg_blocks',                // Page (le slug de la page à laquelle appartient le champ)
        'customizing_gutenberg_blocks_editor_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	
	/* ----------------- DÉCLARATION DES CHAMPS POUR LE BLOC TABLE  --------------------*/
	
	
	// CHAMP RADIO: ACTIVER STYLES POUR LE BLOC TABLE
    add_settings_field( 
        'eccp_settings_activate_block_styles_table_radio_field',        // Field ID
        __( 'Activate styles for the table block', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_activate_block_styles_table_radio_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_gutenberg_blocks',         // Page (le slug de la page à laquelle appartient le champ)
        'customizing_gutenberg_blocks_editor_section', // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// CHAMP RADIO: ACTIVER RESPONSIVE TABLES
    add_settings_field( 
        'eccp_settings_activate_reponsive_tables_radio_field',        // Field ID
        __( 'Enable responsive tables', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_activate_reponsive_tables_radio_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_gutenberg_blocks',         // Page (le slug de la page à laquelle appartient le champ)
        'customizing_gutenberg_blocks_editor_section', // Section (l'ID de la section à laquelle appartient le champ)
    ); 


	/* ----------------- DÉCLARATION DES CHAMPS POUR LE BLOC DERNIERS ARTICLES  --------------------*/
	
	
	// CHAMP RADIO: ACTIVER STYLE CARD POUR LE BLOC DERNIERS ARTICLES
    add_settings_field( 
        'eccp_settings_activate_card_style_latest_posts_block_radio_field',        // Field ID
        __( 'Enable Card style for Latest Posts blocks', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_activate_card_style_latest_posts_block_radio_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_gutenberg_blocks',         // Page (le slug de la page à laquelle appartient le champ)
        'customizing_gutenberg_blocks_editor_section', // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// CHAMP RADIO: ACTIVER STYLE Hover ZOOM POUR LE BLOC DERNIERS ARTICLES
    add_settings_field( 
        'eccp_settings_activate_hover_zoom_style_latest_posts_block_radio_field',        // Field ID
        __( 'Enable 5% zoom style on hover for Latest Posts Blocks', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_activate_hover_zoom_style_latest_posts_block_radio_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_gutenberg_blocks',         // Page (le slug de la page à laquelle appartient le champ)
        'customizing_gutenberg_blocks_editor_section', // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	/* ----------------- DÉCLARATION DES CHAMPS POUR LE BLOC BOUCLE DE REQUÊTE  --------------------*/
	
	
	// CHAMP RADIO: ACTIVER STYLE CARD POUR LE BLOC BOUCLE DE REQUÊTE
    add_settings_field( 
        'eccp_settings_activate_card_style_query_loop_block_radio_field',        // Field ID
        __( 'Enable Card style for Query Loop block', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_activate_card_style_query_loop_block_radio_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_gutenberg_blocks',         // Page (le slug de la page à laquelle appartient le champ)
        'customizing_gutenberg_blocks_editor_section', // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// CHAMP RADIO: ACTIVER GRAVATAR PERSONNALISÉ POUR LE BLOC BOUCLE DE REQUÊTE
    add_settings_field( 
        'eccp_settings_activate_custom_gravatar_radio_field',        // Field ID
        __( 'Enable custom avatar for Query Loop block', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_activate_custom_avatar_radio_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_gutenberg_blocks',         // Page (le slug de la page à laquelle appartient le champ)
        'customizing_gutenberg_blocks_editor_section', // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// on déclare un champ de type text pour renseigner l'URL du gravatar Personnalisé
    add_settings_field( 
        'eccp_settings_custom_gravatar_url_text_field',                   // Field ID
        __( 'Custom avatar url', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_custom_avatar_url_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_gutenberg_blocks',                // Page (le slug de la page à laquelle appartient le champ)
        'customizing_gutenberg_blocks_editor_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	
	// on déclare un champ de type text pour renseigner la taille de l'avatar personnalisé
    add_settings_field( 
        'eccp_settings_custom_avatar_size_text_field',                   // Field ID
        __( 'Custom avatar size in pixel(min:48 max:70)', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_custom_avatar_size_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_gutenberg_blocks',                // Page (le slug de la page à laquelle appartient le champ)
        'customizing_gutenberg_blocks_editor_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	
	// CHAMP RADIO: ACTIVER STYLE HOVER ZOOM POUR LE BLOC BOUCLE DE REQUÊTE
    add_settings_field( 
        'eccp_settings_activate_hover_zoom_style_query_loop_block_radio_field',        // Field ID
        __( 'Enable 5% zoom style on hover for Query Loop block', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_activate_hover_zoom_style_query_loop_block_radio_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_gutenberg_blocks',         // Page (le slug de la page à laquelle appartient le champ)
        'customizing_gutenberg_blocks_editor_section', // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	
	/* -------- DÉCLARATION DES CHAMPS POUR LE BLOC FAQ YOAST SEO -------------*/
	
	// CHAMP RADIO: Transformez le BLOC FAQ YOAST en accordéon
    add_settings_field( 
        'eccp_settings_turn_yoast_faq_block_an_accordion_radio_field',        // Field ID
        __( 'Turn the YOAST FAQ BLOCK into an accordion', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_turn_yoast_faq_block_an_accordion_radio_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_gutenberg_blocks',         // Page (le slug de la page à laquelle appartient le champ)
        'customizing_gutenberg_blocks_editor_section', // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// on déclare un champ de type text pour renseigner la largeur du bloc FAQ
    add_settings_field( 
        'eccp_settings_width_block_faq_yoast_text_field',                   // Field ID
        __( 'width Block FAQ Yoast SEO in %', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_width_block_faq_yoast_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_gutenberg_blocks',                // Page (le slug de la page à laquelle appartient le champ)
        'customizing_gutenberg_blocks_editor_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	/* -------- DÉCLARATION CHAMP RADIO POUR ACTIVER SCRIPT JS & CSS DE LA LIBRAIRIE SWIPER POUR LE BLOC GALERIE -------------*/
	
	// CHAMP RADIO: ACTIVER SCRIPT JS & CSS pour Swiper
    add_settings_field( 
        'eccp_settings_enable_script_js_css_swiper_radio_field',        // Field ID
        __( 'enable js script & css swiper', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_enable_script_js_css_swiper_radio_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_gutenberg_blocks',         // Page (le slug de la page à laquelle appartient le champ)
        'customizing_gutenberg_blocks_editor_section', // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	
	/* -------- DÉCLARATION CHAMP RADIO POUR ACTIVER STYLES PERSONNALISÉS DU BLOC CITATION -------------*/
	
	// CHAMP RADIO: ACTIVER STYLES PERSONNALISÉS
    add_settings_field( 
        'eccp_settings_enable_custom_block_quote_styles_radio_field',        // Field ID
        __( 'enable custom styles', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_enable_custom_block_quote_styles_radio_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_gutenberg_blocks',         // Page (le slug de la page à laquelle appartient le champ)
        'customizing_gutenberg_blocks_editor_section', // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	
	/* --------DÉCLARATION DU CHAMP RADIO POUR ACTIVER SCRIPT JAVASCRIPT POUR PLUS DE PERSONNALISATION -------------*/
	
	// CHAMP RADIO: ACTIVER LE SCRIPT JAVASCRIPT
    add_settings_field( 
        'eccp_settings_activate_script_reactjs_radio_field',        // Field ID
        __( 'Enable JS scripting for more customization', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_activate_script_reactjs_radio_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_gutenberg_blocks',         // Page (le slug de la page à laquelle appartient le champ)
        'customizing_gutenberg_blocks_editor_section', // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	
	
	



}	// FIN FONCTION eccp_settings_custom_gutenberg_blocks()  




/********************************************************************************************
 * Ajout d'un groupe de champs de paramètres à l'ongle REUSABLE BLOCKS de réglages du plugin
 ********************************************************************************************/
 
 // On se hooke sur admin_init et va simplement déclarer à WordPress l’existence d’un réglage
 add_action( 'admin_init', 'eccp_settings_reusable_blocks' );
 

// On enregistre plusieurs paramètres
function eccp_settings_reusable_blocks(){
	
    // on crée un réglage
	register_setting( 
        'eccp_reusable_blocks',     // Settings group ( nom du groupe).
        'eccp_settings_reusable_blocks', // Setting name ( nom du réglage c'est le nom de la fonction qui est hooké sur admin_init)
        'eccp_reusable_blocks_sanitize'  // Sanitize callback(fonction de nettoyage pour nos valeur de réglages avant l'entrée en base de données)
    );
	
	
	/* -------------------------------------- 7ème SECTION:  ADDONS REUSABLE BLOCKS -----------------------------------------*/
	
	
	// On enregistre une section pour y ranger nos champs de réglages pour l'ajout de blocs réutilisables
    add_settings_section( 
        'addons_reusable_blocks_section',                   // Section ID
        __( 'ADDONS REUSABLE BLOCKS', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_section_addons_reusable_blocks_markup',            // Callback or empty string (une fonction de rappel s’il y a de l’HTML spécial à afficher entre le titre de la section et les réglages)
        'eccp_settings_page_addons_reusable_blocks'              // Page to display the section in (le slug de la page à laquelle appartient le champ)
    );
	
	
	/*----------------------------CHECKBOX: ACTIVER LE MENU BLOCS RÉUTILSABLES EN BACK OFFICE----------------------------------- */ 
	
    add_settings_field( 
        'eccp_activate_reusable_blocks_menu_checkbox_field',        // Field ID
        __( 'Activate reusable blocks menu', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_activate_reusable_blocks_menu_checkbox_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_addons_reusable_blocks',         // Page (le slug de la page à laquelle appartient le champ)
        'addons_reusable_blocks_section', // Section (l'ID de la section à laquelle appartient le champ)
        array( 
            'label_for' => 'eccp_activate_reusable_blocks_menu_checkbox_field',  // Id for the input and label element =  Field ID
            'description' => __( 'activate', 'editor-custom-color-palette' ),
        )
    ); 


	/*---------------------------- CHECKBOX: AFFICHER UN BLOC RÉUTILISABLE PAR SHORTCODE ----------------------------------- */ 
	
    add_settings_field( 
        'eccp_activate_reusable_blocks_shortcode_checkbox_field',        // Field ID
        __( 'Enable the display of reusable blocks by a shortcode', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_activate_reusable_blocks_shortcode_checkbox_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_addons_reusable_blocks',         // Page (le slug de la page à laquelle appartient le champ)
        'addons_reusable_blocks_section', // Section (l'ID de la section à laquelle appartient le champ)
        array( 
            'label_for' => 'eccp_activate_reusable_blocks_shortcode_checkbox_field',  // Id for the input and label element =  Field ID
            'description' => __( 'activate', 'editor-custom-color-palette' ),
        )
    ); 

	/*-------------------  INSÉRER UN BLOC RÉUTILISABLE AVANT ET/OU APRÉS UNE PUBLICATION  --------------------------- */ 
	

	// on déclare un champ de type select pour choisir le bloc a insérer avant un article
    add_settings_field( 
        'eccp_settings_insert_block_before_post_select_field',          // Field ID
        __( 'Before the content', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_insert_block_before_post_select_field_markup',   // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_addons_reusable_blocks',          // Page (le slug de la page à laquelle appartient le champ)
        'addons_reusable_blocks_section',  // Section (l'ID de la section à laquelle appartient le champ)
		
    ); 
	
	// on déclare un champ de type select pour choisir le bloc a insérer aprés un article
    add_settings_field( 
        'eccp_settings_insert_block_after_post_select_field',          // Field ID
        __( 'After the content', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_insert_block_after_post_select_field_markup',   // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_addons_reusable_blocks',          // Page (le slug de la page à laquelle appartient le champ)
        'addons_reusable_blocks_section',  // Section (l'ID de la section à laquelle appartient le champ)
		
    ); 
	
	// on déclare un champ de type select pour choisir le bloc a insérer avant une page
    add_settings_field( 
        'eccp_settings_insert_block_before_page_select_field',          // Field ID
        __( 'Before the content', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_insert_block_before_page_select_field_markup',   // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_addons_reusable_blocks',          // Page (le slug de la page à laquelle appartient le champ)
        'addons_reusable_blocks_section',  // Section (l'ID de la section à laquelle appartient le champ)
		
    ); 
	
	// on déclare un champ de type select pour choisir le bloc a insérer aprés une page
    add_settings_field( 
        'eccp_settings_insert_block_after_page_select_field',          // Field ID
        __( 'After the content', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_insert_block_after_page_select_field_markup',   // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_addons_reusable_blocks',          // Page (le slug de la page à laquelle appartient le champ)
        'addons_reusable_blocks_section',  // Section (l'ID de la section à laquelle appartient le champ)
		
    ); 
	
	// on déclare un champ de type select pour choisir le bloc a insérer avant un CPT
    add_settings_field( 
        'eccp_settings_insert_block_before_cpt_select_field',          // Field ID
        __( 'Before the content', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_insert_block_before_cpt_select_field_markup',   // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_addons_reusable_blocks',          // Page (le slug de la page à laquelle appartient le champ)
        'addons_reusable_blocks_section',  // Section (l'ID de la section à laquelle appartient le champ)
		
    ); 
	
	// on déclare un champ de type select pour choisir le bloc a insérer aprés un CPT
    add_settings_field( 
        'eccp_settings_insert_block_after_cpt_select_field',          // Field ID
        __( 'After the content', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_insert_block_after_cpt_select_field_markup',   // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_addons_reusable_blocks',          // Page (le slug de la page à laquelle appartient le champ)
        'addons_reusable_blocks_section',  // Section (l'ID de la section à laquelle appartient le champ)
		
    ); 

	
	/*----------------------------DÉCLARATION DES CHAMPS POUR LE BLOC BLOCKQUOTE----------------------------------- */ 
	
	// on déclare un champ de type text pour renseigner la couleur des guillemets
    add_settings_field( 
        'eccp_settings_quotation_marks_color_text_field',                   // Field ID
        __( 'quotation marks color', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_quotation_marks_color_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_addons_reusable_blocks',                // Page (le slug de la page à laquelle appartient le champ)
        'addons_reusable_blocks_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// on déclare un champ de type text pour renseigner l'opacité couleur des guillemets
    add_settings_field( 
        'eccp_settings_quotation_marks_opacity_text_field',                   // Field ID
        __( 'opacity: 0 to 100', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_quotation_marks_opacity_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_addons_reusable_blocks',                // Page (le slug de la page à laquelle appartient le champ)
        'addons_reusable_blocks_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	/* on déclare un champ de type select pour renseigner la graisse du texte pour le blockquote(plus utilisé version 2.3)
    add_settings_field( 
        'eccp_settings_font_weight_blockquote_select_field',          // Field ID
        __( 'font weight', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_font_weight_blockquote_select_field_markup',   // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_addons_reusable_blocks',          // Page (le slug de la page à laquelle appartient le champ)
        'addons_reusable_blocks_section',  // Section (l'ID de la section à laquelle appartient le champ)
        array(
            'options' => array(
                '500' => __( '500', 'editor-custom-color-palette' ),
                '600' => __( '600', 'editor-custom-color-palette' ),
                '700' => __( '700', 'editor-custom-color-palette' ),
				'800' => __( '800', 'editor-custom-color-palette' ),
				'900' => __( '900', 'editor-custom-color-palette' ),
            ),
        )
    ); */
	
	/* on déclare un champ de type text pour renseigner la taille du texte pour le blockquote (plus utilisé version 2.3)
    add_settings_field( 
        'eccp_settings_font_size_blockquote_text_field',                   // Field ID
        __( 'font size in pixel', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_font_size_blockquote_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_addons_reusable_blocks',                // Page (le slug de la page à laquelle appartient le champ)
        'addons_reusable_blocks_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); */
	
	
	// on déclare un champ de type text pour renseigner la largeur du bloc blockquote en back office pour les articles
    add_settings_field( 
        'eccp_settings_width_blockquote_post_back_office_text_field',                   // Field ID
        __( 'blockquote(back office)width: 0 to 100 in %', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_width_blockquote_post_back_office_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_addons_reusable_blocks',                // Page (le slug de la page à laquelle appartient le champ)
        'addons_reusable_blocks_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// on déclare un champ de type text pour renseigner la largeur du bloc blockquote en front end pour les articles
    add_settings_field( 
        'eccp_settings_width_blockquote_post_front_end_text_field',                   // Field ID
        __( 'blockquote(front end)width: 0 to 100 in %', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_width_blockquote_post_front_end_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_addons_reusable_blocks',                // Page (le slug de la page à laquelle appartient le champ)
        'addons_reusable_blocks_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	
	// on déclare un champ de type text pour renseigner la largeur du bloc blockquote en back office pour les pages
    add_settings_field( 
        'eccp_settings_width_blockquote_page_back_office_text_field',                   // Field ID
        __( 'blockquote(back office)width: 0 to 100 in %', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_width_blockquote_page_back_office_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_addons_reusable_blocks',                // Page (le slug de la page à laquelle appartient le champ)
        'addons_reusable_blocks_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// on déclare un champ de type text pour renseigner la largeur du bloc blockquote en front end pour les pages
    add_settings_field( 
        'eccp_settings_width_blockquote_page_front_end_text_field',                   // Field ID
        __( 'blockquote(front end)width: 0 to 100 in %', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_width_blockquote_page_front_end_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_addons_reusable_blocks',                // Page (le slug de la page à laquelle appartient le champ)
        'addons_reusable_blocks_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// on déclare un champ de type text pour renseigner la largeur du bloc blockquote en back office pour les Custom Post Type
    add_settings_field( 
        'eccp_settings_width_blockquote_cpt_back_office_text_field',                   // Field ID
        __( 'blockquote(back office)width: 0 to 100 in %', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_width_blockquote_cpt_back_office_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_addons_reusable_blocks',                // Page (le slug de la page à laquelle appartient le champ)
        'addons_reusable_blocks_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// on déclare un champ de type text pour renseigner la largeur du bloc blockquote en front end pour les Custom Post Type
    add_settings_field( 
        'eccp_settings_width_blockquote_cpt_front_end_text_field',                   // Field ID
        __( 'blockquote(front end)width: 0 to 100 in %', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_width_blockquote_cpt_front_end_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_addons_reusable_blocks',                // Page (le slug de la page à laquelle appartient le champ)
        'addons_reusable_blocks_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	/*----------------------------DÉCLARATION DES CHAMPS TEXTE POUR LE BLOC METTRE EN ÉVIDENCE ----------------------------------- */ 

	// on déclare un champ de type text pour renseigner la couleur de bordure
    add_settings_field( 
        'eccp_settings_custom_paragraph_border_color_text_field',                   // Field ID
        __( 'border color', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_custom_paragraph_border_color_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_addons_reusable_blocks',                // Page (le slug de la page à laquelle appartient le champ)
        'addons_reusable_blocks_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// on déclare un champ de type text pour renseigner l'opacité de la couleur de bordure
    add_settings_field( 
        'eccp_settings_opacity_custom_paragraph_border_color_text_field',                   // Field ID
        __( 'opacity: 0 to 100', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_opacity_custom_paragraph_border_color_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_addons_reusable_blocks',                // Page (le slug de la page à laquelle appartient le champ)
        'addons_reusable_blocks_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 

	// on déclare un champ de type text pour renseigner la largeur du bloc Mettre En Évidence en back office pour les articles
    add_settings_field( 
        'eccp_settings_custom_paragraph_width_post_back_office_text_field',                   // Field ID
        __( 'custom paragraph(back office)width: 0 to 100 in %', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_custom_paragraph_width_post_back_office_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_addons_reusable_blocks',                // Page (le slug de la page à laquelle appartient le champ)
        'addons_reusable_blocks_section',        // Section (l'ID de la section à laquelle appartient le champ)
    );

	// on déclare un champ de type text pour renseigner la largeur du bloc Mettre En Évidence en front end pour les articles
    add_settings_field( 
        'eccp_settings_custom_paragraph_width_post_front_end_text_field',                   // Field ID
        __( 'custom paragraph(front end)width: 0 to 100 in %', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_custom_paragraph_width_post_front_end_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_addons_reusable_blocks',                // Page (le slug de la page à laquelle appartient le champ)
        'addons_reusable_blocks_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	
	// on déclare un champ de type text pour renseigner la largeur du bloc Mettre En Évidence en back office pour les pages
    add_settings_field( 
        'eccp_settings_custom_paragraph_width_page_back_office_text_field',                   // Field ID
        __( 'custom paragraph(back office)width: 0 to 100 in %', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_custom_paragraph_width_page_back_office_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_addons_reusable_blocks',                // Page (le slug de la page à laquelle appartient le champ)
        'addons_reusable_blocks_section',        // Section (l'ID de la section à laquelle appartient le champ)
    );

	// on déclare un champ de type text pour renseigner la largeur du bloc Mettre En Évidence en front end pour les pages
    add_settings_field( 
        'eccp_settings_custom_paragraph_width_page_front_end_text_field',                   // Field ID
        __( 'custom paragraph(front end)width: 0 to 100 in %', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_custom_paragraph_width_page_front_end_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_addons_reusable_blocks',                // Page (le slug de la page à laquelle appartient le champ)
        'addons_reusable_blocks_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// on déclare un champ de type text pour renseigner la largeur du bloc Mettre En Évidence en back office pour les Custom Post Type
    add_settings_field( 
        'eccp_settings_custom_paragraph_width_cpt_back_office_text_field',                   // Field ID
        __( 'custom paragraph(back office)width: 0 to 100 in %', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_custom_paragraph_width_cpt_back_office_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_addons_reusable_blocks',                // Page (le slug de la page à laquelle appartient le champ)
        'addons_reusable_blocks_section',        // Section (l'ID de la section à laquelle appartient le champ)
    );

	// on déclare un champ de type text pour renseigner la largeur du bloc Mettre En Évidence en front end pour les les Custom Post Type
    add_settings_field( 
        'eccp_settings_custom_paragraph_width_cpt_front_end_text_field',                   // Field ID
        __( 'custom paragraph(front end)width: 0 to 100 in %', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_custom_paragraph_width_cpt_front_end_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_addons_reusable_blocks',                // Page (le slug de la page à laquelle appartient le champ)
        'addons_reusable_blocks_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	

}	// FIN FONCTION eccp_settings_reusable_blocks()  



/****************************************************************************************
 * Ajout d'un groupe de champs de paramètres à l'onglet ELEMENTOR de réglages du plugin
 ****************************************************************************************/
 
 // On se hooke sur admin_init et va simplement déclarer à WordPress l’existence d’un réglage
 add_action( 'admin_init', 'eccp_settings_elementor' );
 

// On enregistre plusieurs paramètres
function eccp_settings_elementor(){
	
    // on crée un réglage
	register_setting( 
        'eccp_elementor_page_builder',     // Settings group ( nom du groupe).
        'eccp_settings_elementor', // Setting name ( nom du réglage c'est le nom de la fonction qui est hooké sur admin_init)
        'eccp_elementor_sanitize'  // Sanitize callback(fonction de nettoyage pour nos valeur de réglages avant l'entrée en base de données)
    );
	
	
	/* -------------------------------------- 8ème SECTION:  ELEMENTOR PAGE BUILDER -----------------------------------------*/
	
	
	// On enregistre une section pour y ranger nos champs de réglages pour la personnalisation d'Elementor
    add_settings_section( 
        'elementor_page_builder_section',                   // Section ID
        __( 'ELEMENTOR PAGE BUIDER', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_section_elementor_color_palette_markup',            // Callback or empty string (une fonction de rappel s’il y a de l’HTML spécial à afficher entre le titre de la section et les réglages)
        'eccp_settings_page_elementor'              // Page to display the section in (le slug de la page à laquelle appartient le champ)
    );
	
	// RADIO: activer la synchronization de la palette de couleurs avec celle de Gutenberg
    add_settings_field( 
        'eccp_activate_synchronization_color_palette_radio_field',        // Field ID
        __( 'Activate color palette synchronisation', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_activate_synchronization_color_palette_radio_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_elementor',         // Page (le slug de la page à laquelle appartient le champ)
        'elementor_page_builder_section', // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	

}	// FIN FONCTION eccp_settings_elementor()  





/**********************************************************************************
 * Ajout d'un groupe de champs de paramètres à l'onglet DIVI de réglages du plugin
 **********************************************************************************/
 
 // On se hooke sur admin_init et va simplement déclarer à WordPress l’existence d’un réglage
 add_action( 'admin_init', 'eccp_settings_divi_theme' );
 

// On enregistre plusieurs paramètres
function eccp_settings_divi_theme(){
	
    // on crée un réglage
	register_setting( 
        'eccp_divi_theme',     // Settings group ( nom du groupe).
        'eccp_settings_divi_theme', // Setting name ( nom du réglage c'est le nom de la fonction qui est hooké sur admin_init)
        'eccp_divi_sanitize'  // Sanitize callback(fonction de nettoyage pour nos valeur de réglages avant l'entrée en base de données)
    );
	
	
	/* -------------------------------------- 9ème SECTION:  DIVI COLOR PALETTE -----------------------------------------*/
	
	// On enregistre une section pour y ranger nos champs de réglages pour la personnalisation de DIVI
    add_settings_section( 
        'divi_theme_section',                   // Section ID
        __( 'DIVI THEME', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_section_divi_theme_markup',            // Callback or empty string (une fonction de rappel s’il y a de l’HTML spécial à afficher entre le titre de la section et les réglages)
        'eccp_settings_page_divi_theme'              // Page to display the section in (le slug de la page à laquelle appartient le champ)
    );
	
	// RADIO: activer la synchronization de la palette de couleurs DIVI
    add_settings_field( 
        'eccp_activate_synchronization_divi_color_palette_radio_field',        // Field ID
        __( 'Activate color palette synchronisation', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_activate_synchronization_divi_color_palette_radio_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_divi_theme',         // Page (le slug de la page à laquelle appartient le champ)
        'divi_theme_section', // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// RADIO: Choix synchro DIVI vers Gutenberg ou Gutenberg vers DIVI
    add_settings_field( 
        'eccp_choose_synchronization_radio_field',           // Field ID
        __( 'choose synchronization mode', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_choose_synchronization_radio_field_markup',    // Callback or empty string (une fonction de rappel s’il y a de l’HTML spécial à afficher entre le titre de la section et les réglages)
        'eccp_settings_page_divi_theme',         // Page (le slug de la page à laquelle appartient le champ)
        'divi_theme_section', // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	

}	// FIN FONCTION eccp_settings_divi_theme()  


/*******************************************************************************************************
 * Ajout d'un groupe de champs de paramètres à l'onglet Personnaliser Back Office des réglages du plugin
 *******************************************************************************************************/
 
 // On se hooke sur admin_init et va simplement déclarer à WordPress l’existence d’un réglage
 add_action( 'admin_init', 'eccp_settings_custom_back_office' );
 

// On enregistre plusieurs paramètres
function eccp_settings_custom_back_office(){
	
    // on crée un réglage
	register_setting( 
        'eccp_custom_back_office',     // Settings group ( nom du groupe).
        'eccp_settings_custom_back_office', // Setting name ( nom du réglage c'est le nom de la fonction qui est hooké sur admin_init)
        'eccp_custom_back_office_sanitize'  // Sanitize callback(fonction de nettoyage pour nos valeur de réglages avant l'entrée en base de données)
    );
	
	
	/* -------------------------------------- 10ème SECTION:  CUSTOM BACK OFFICE -----------------------------------------*/
	
	// On enregistre une section pour y ranger nos champs de réglages pour la personnalisation du BACK OFFICE
    add_settings_section( 
        'custom_back_office_section',                   // Section ID
        __( 'CUSTOMIZE THE BACK OFFICE', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_section_custom_back_office_markup',            // Callback or empty string (une fonction de rappel s’il y a de l’HTML spécial à afficher entre le titre de la section et les réglages)
        'eccp_settings_page_customizing_back_office'              // Page to display the section in (le slug de la page à laquelle appartient le champ)
    );
	
	
	/* ----------------- DÉCLARATION DES CHAMPS POUR LES ÉCRANS DE PUBLICATIONS --------------------*/
	
	// CHECKBOX: activer une colonne & affichage image en avant pour les articles & CPT
    add_settings_field( 
        'eccp_settings_activate_post_featured_image_column_checkbox_field',        // Field ID
        __( 'Enable Post ID & Featured Image Columns for Articles and CPT', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_activate_post_featured_image_column_checkbox_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_back_office',         // Page (le slug de la page à laquelle appartient le champ)
        'custom_back_office_section', // Section (l'ID de la section à laquelle appartient le champ)
        array( 
            'label_for' => 'eccp_settings_activate_post_featured_image_column_checkbox_field',  // Id for the input and label element =  Field ID
            'description' => __( 'activate', 'editor-custom-color-palette' ),
        )
    ); 
	
	// CHECKBOX: activer une colonne & affichage image en avant pour les pages
    add_settings_field( 
        'eccp_settings_activate_page_featured_image_column_checkbox_field',        // Field ID
        __( 'Enable Post ID & Featured Image Columns for Pages', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_activate_page_featured_image_column_checkbox_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_back_office',         // Page (le slug de la page à laquelle appartient le champ)
        'custom_back_office_section', // Section (l'ID de la section à laquelle appartient le champ)
        array( 
            'label_for' => 'eccp_settings_activate_page_featured_image_column_checkbox_field',  // Id for the input and label element =  Field ID
            'description' => __( 'activate', 'editor-custom-color-palette' ),
        )
    ); 
	
	
	// on déclare un champ de type text pour renseigner la largeur de la vignette pour l'image en avant
    add_settings_field( 
        'eccp_settings_width_thumbnail_featured_image_text_field',                   // Field ID
        __( 'featured image thumbnail width(min:100 max:200)', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_width_thumbnail_featured_image_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_back_office',                // Page (le slug de la page à laquelle appartient le champ)
        'custom_back_office_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	
	// CHECKBOX: activer filtre par auteur pour tous les types de publication
    add_settings_field( 
        'eccp_settings_activate_author_filter_checkbox_field',        // Field ID
        __( 'enable filter by author for all post types', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_activate_author_filter_checkbox_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_back_office',         // Page (le slug de la page à laquelle appartient le champ)
        'custom_back_office_section', // Section (l'ID de la section à laquelle appartient le champ)
        array( 
            'label_for' => 'eccp_settings_activate_author_filter_checkbox_field',  // Id for the input and label element =  Field ID
            'description' => __( 'activate', 'editor-custom-color-palette' ),
        )
    ); 
	
	// CHECKBOX: activer le filtre catégorie pour les CPT
    add_settings_field( 
        'eccp_settings_activate_taxonomy_filter_cpt_checkbox_field',        // Field ID
        __( 'enable category filter for custom post types', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_activate_taxonomy_filter_cpt_checkbox_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_back_office',         // Page (le slug de la page à laquelle appartient le champ)
        'custom_back_office_section', // Section (l'ID de la section à laquelle appartient le champ)
        array( 
            'label_for' => 'eccp_settings_activate_taxonomy_filter_cpt_checkbox_field',  // Id for the input and label element =  Field ID
            'description' => __( 'activate', 'editor-custom-color-palette' ),
        )
    ); 
	
	
	// CHECKBOX: activer le filtre par plage de dates pour les articles & CPT
    add_settings_field( 
        'eccp_settings_enable_post_cpt_date_range_filter_checkbox_field',        // Field ID
        __( 'enable filter by date range for Post & CPT', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_enable_post_cpt_date_range_filter_checkbox_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_back_office',         // Page (le slug de la page à laquelle appartient le champ)
        'custom_back_office_section', // Section (l'ID de la section à laquelle appartient le champ)
        array( 
            'label_for' => 'eccp_settings_enable_post_cpt_date_range_filter_checkbox_field',  // Id for the input and label element =  Field ID
            'description' => __( 'activate', 'editor-custom-color-palette' ),
        )
    ); 
	
	// CHECKBOX: activer pour les articles le filtre par statuts de publication 
	add_settings_field( 
        'eccp_settings_enable_post_filter_publication_status_checkbox_field',        // Field ID
        __( 'enable filter by publication status', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_enable_post_filter_publication_status_checkbox_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_back_office',         // Page (le slug de la page à laquelle appartient le champ)
        'custom_back_office_section', // Section (l'ID de la section à laquelle appartient le champ)
        array( 
            'label_for' => 'eccp_settings_enable_post_filter_publication_status_checkbox_field',  // Id for the input and label element =  Field ID
            'description' => __( 'activate', 'editor-custom-color-palette' ),
        )
    ); 
	
	// CHECKBOX: activer pour les articles le filtre par statuts de publication 
	add_settings_field( 
        'eccp_settings_enable_post_filter_publication_status_checkbox_field',        // Field ID
        __( 'enable filter by publication status', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_enable_post_filter_publication_status_checkbox_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_back_office',         // Page (le slug de la page à laquelle appartient le champ)
        'custom_back_office_section', // Section (l'ID de la section à laquelle appartient le champ)
        array( 
            'label_for' => 'eccp_settings_enable_post_filter_publication_status_checkbox_field',  // Id for the input and label element =  Field ID
            'description' => __( 'activate', 'editor-custom-color-palette' ),
        )
    ); 
	
	
	// CHECKBOX: activer status de publication pour les actions groupés des articles
	add_settings_field( 
        'eccp_settings_activate_publication_status_bulk_actions_posts_checkbox_field',        // Field ID
        __( 'activate publication status for bulk actions of articles', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_activate_publication_status_bulk_actions_posts_checkbox_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_back_office',         // Page (le slug de la page à laquelle appartient le champ)
        'custom_back_office_section', // Section (l'ID de la section à laquelle appartient le champ)
        array( 
            'label_for' => 'eccp_settings_activate_publication_status_bulk_actions_posts_checkbox_field',  // Id for the input and label element =  Field ID
            'description' => __( 'activate', 'editor-custom-color-palette' ),
        )
    ); 
	
	
	/* ----------------- DÉCLARATION DES CHAMPS POUR LA MÉDIATHÈQUE --------------------*/
	
	// CHECKBOX: activer les colonnes ID & Dimensions & Taille fichier
    add_settings_field( 
        'eccp_settings_activate_library_id_dimensions_size_file_column_checkbox_field',        // Field ID
        __( 'enable the columns ID, Dimensions, File size', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_activate_library_id_dimensions_size_file_column_checkbox_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_back_office',         // Page (le slug de la page à laquelle appartient le champ)
        'custom_back_office_section', // Section (l'ID de la section à laquelle appartient le champ)
        array( 
            'label_for' => 'eccp_settings_activate_library_id_dimensions_size_file_column_checkbox_field',  // Id for the input and label element =  Field ID
            'description' => __( 'activate', 'editor-custom-color-palette' ),
        )
    ); 
	
	
	// CHECKBOX: activer le filtre par plage de dates pour la médiathèque en vue liste
	add_settings_field( 
        'eccp_settings_enable_filter_dates_range_media_library_checkbox_field',        // Field ID
        __( 'enable filter by dates range for the media library in view of list', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_enable_filter_dates_range_media_library_checkbox_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_back_office',         // Page (le slug de la page à laquelle appartient le champ)
        'custom_back_office_section', // Section (l'ID de la section à laquelle appartient le champ)
        array( 
            'label_for' => 'eccp_settings_enable_filter_dates_range_media_library_checkbox_field',  // Id for the input and label element =  Field ID
            'description' => __( 'activate', 'editor-custom-color-palette' ),
        )
    ); 
	
	
	// CHECKBOX: Autoriser l'upload de tous types de format dans la bibliothèque médias
	add_settings_field( 
        'eccp_settings_activate_mime_types_media_checkbox_field',        // Field ID
        __( 'allow upload media in SVG format', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_activate_mime_types_media_checkbox_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_back_office',         // Page (le slug de la page à laquelle appartient le champ)
        'custom_back_office_section', // Section (l'ID de la section à laquelle appartient le champ)
        array( 
            'label_for' => 'eccp_settings_activate_mime_types_media_checkbox_field',  // Id for the input and label element =  Field ID
            'description' => __( 'activate', 'editor-custom-color-palette' ),
        )
    ); 
	
	
	
	// CHECKBOX: Définir automatiquement le texte alternatif de l'image selon son titre assaini lors du téléchargement
	add_settings_field( 
        '	 eccp_settings_image_alt_text_by_title_checkbox_field',        // Field ID
        __( 'set image alt text by title', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_image_alt_text_by_title_checkbox_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_back_office',         // Page (le slug de la page à laquelle appartient le champ)
        'custom_back_office_section', // Section (l'ID de la section à laquelle appartient le champ)
        array( 
            'label_for' => '	 eccp_settings_image_alt_text_by_title_checkbox_field',  // Id for the input and label element =  Field ID
            'description' => __( 'activate', 'editor-custom-color-palette' ),
        )
    ); 
	
	
	// CHECKBOX: Définir automatiquement la légende de l'image selon son titre assaini lors du téléchargement
	add_settings_field( 
        'eccp_settings_image_caption_according_title_checkbox_field',        // Field ID
        __( 'set image caption according to its title', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_image_caption_according_title_checkbox_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_back_office',         // Page (le slug de la page à laquelle appartient le champ)
        'custom_back_office_section', // Section (l'ID de la section à laquelle appartient le champ)
        array( 
            'label_for' => 'eccp_settings_image_caption_according_title_checkbox_field',  // Id for the input and label element =  Field ID
            'description' => __( 'activate', 'editor-custom-color-palette' ),
        )
    ); 
	
	
	/* ----------------- DÉCLARATION DES CHAMPS POUR LES COMPTES --------------------*/
	
	// CHECKBOX: activer une colonne pour afficher la date de dernière connexion
	add_settings_field( 
        'eccp_settings_activate_users_last_login_column_checkbox_field',        // Field ID
        __( 'enable last login column', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_activate_users_last_login_column_checkbox_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_back_office',         // Page (le slug de la page à laquelle appartient le champ)
        'custom_back_office_section', // Section (l'ID de la section à laquelle appartient le champ)
        array( 
            'label_for' => 'eccp_settings_activate_users_last_login_column_checkbox_field',  // Id for the input and label element =  Field ID
            'description' => __( 'activate', 'editor-custom-color-palette' ),
        )
    ); 
	
	// CHECKBOX: activer une colonne pour afficher la date d'enregistrement de l'utilisateur
	add_settings_field( 
        'eccp_settings_activate_users_registration_date_column_checkbox_field',        // Field ID
        __( 'enable user registration date column', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_activate_users_registration_date_column_checkbox_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_back_office',         // Page (le slug de la page à laquelle appartient le champ)
        'custom_back_office_section', // Section (l'ID de la section à laquelle appartient le champ)
        array( 
            'label_for' => 'eccp_settings_activate_users_registration_date_column_checkbox_field',  // Id for the input and label element =  Field ID
            'description' => __( 'activate', 'editor-custom-color-palette' ),
        )
    ); 
	
	//CHECKBOX: autoriser les contributeurs a télécharger des médias
	add_settings_field( 
        'eccp_settings_allow_contributors_upload_media_checkbox_field',        // Field ID
        __( 'Allow contributors to upload media', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_allow_contributors_upload_media_checkbox_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_back_office',         // Page (le slug de la page à laquelle appartient le champ)
        'custom_back_office_section', // Section (l'ID de la section à laquelle appartient le champ)
        array( 
            'label_for' => 'eccp_settings_allow_contributors_upload_media_checkbox_field',  // Id for the input and label element =  Field ID
            'description' => __( 'activate', 'editor-custom-color-palette' ),
        )
    ); 
	
	
	/* ----------------- DÉCLARATION DES CHAMPS POUR LE FORMULAIRE DE CONNEXION --------------------*/
	
	//CHECKBOX: désactiver le sélecteur de langue
	add_settings_field( 
        'eccp_settings_disable_language_selector_checkbox_field',        // Field ID
        __( 'Disable language selector', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_disable_language_selector_checkbox_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_back_office',         // Page (le slug de la page à laquelle appartient le champ)
        'custom_back_office_section', // Section (l'ID de la section à laquelle appartient le champ)
        array( 
            'label_for' => 'eccp_settings_disable_language_selector_checkbox_field',  // Id for the input and label element =  Field ID
            'description' => __( 'activate', 'editor-custom-color-palette' ),
        )
    ); 
	
	
	// TEXTAREA: Message d'erreur personnalisé
    add_settings_field( 
        'eccp_error_login_custom_message_textarea_field',        // Field ID
        __( 'add error login custom messsage', 'editor-custom-color-palette' ),  // Title
        'eccp_error_login_custom_message_textarea_field_markup', // Callback
        'eccp_settings_page_customizing_back_office',         // Page
        'custom_back_office_section', // Section
    ); 
	
	// CHECKBOX: Désactiver la demande de vérification de l'adresse e-mail administrateur
	add_settings_field( 
        'eccp_settings_disable_admin_email_request_checkbox_field',        // Field ID
        __( 'Disable Admin Email Verification Request', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_disable_admin_email_request_checkbox_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_back_office',         // Page (le slug de la page à laquelle appartient le champ)
        'custom_back_office_section', // Section (l'ID de la section à laquelle appartient le champ)
        array( 
            'label_for' => 'eccp_settings_disable_admin_email_request_checkbox_field',  // Id for the input and label element =  Field ID
            'description' => __( 'activate', 'editor-custom-color-palette' ),
        )
    ); 
	
	// CHECKBOX: Activer la personnalisation du logo
	add_settings_field( 
        'eccp_settings_activate_custom_logo_checkbox_field',        // Field ID
        __( 'enable custom logo', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_activate_custom_logo_checkbox_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_back_office',         // Page (le slug de la page à laquelle appartient le champ)
        'custom_back_office_section', // Section (l'ID de la section à laquelle appartient le champ)
        array( 
            'label_for' => 'eccp_settings_activate_custom_logo_checkbox_field',  // Id for the input and label element =  Field ID
            'description' => __( 'activate', 'editor-custom-color-palette' ),
        )
    ); 
	
	// TEXT: Renseigner l'URL du Logo Personnalisé
    add_settings_field( 
        'eccp_settings_custom_logo_url_text_field',                   // Field ID
        __( 'Custom logo url', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_custom_logo_url_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_back_office',                // Page (le slug de la page à laquelle appartient le champ)
        'custom_back_office_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	
	// TEXT: Renseigner la largeur du Logo Personnalisé
    add_settings_field( 
        'eccp_settings_custom_logo_width_text_field',                   // Field ID
        __( 'width logo in pixel(min:100 max:400)', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_custom_logo_width_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_back_office',                // Page (le slug de la page à laquelle appartient le champ)
        'custom_back_office_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// TEXT: Renseigner la hauteur du Logo Personnalisé
    add_settings_field( 
        'eccp_settings_custom_logo_height_text_field',                   // Field ID
        __( 'height logo in pixel(min:25 max:400)', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_custom_logo_height_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_back_office',                // Page (le slug de la page à laquelle appartient le champ)
        'custom_back_office_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// RADIO: Activer la personnalisation du formulaire de connexion
    add_settings_field( 
        'eccp_settings_activate_custom_login_form_radio_field',        // Field ID
        __( 'enable login form customization', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_activate_custom_login_form_radio_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_back_office',         // Page (le slug de la page à laquelle appartient le champ)
        'custom_back_office_section', // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	
	//TEXT: Renseigner la couleur de fond de la page de connexion
	add_settings_field( 
        'eccp_settings_page_login_form_background_color_text_field',                   // Field ID
        __( 'Login Form Page: background color', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_page_login_form_background_color_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_back_office',                // Page (le slug de la page à laquelle appartient le champ)
        'custom_back_office_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// TEXT: Renseigner la couleur du texte en pied de page
	add_settings_field( 
        'eccp_settings_page_login_form_footer_text_color_text_field',                   // Field ID
        __( 'Login Form Page: footer text color', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_page_login_form_footer_text_color_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_back_office',                // Page (le slug de la page à laquelle appartient le champ)
        'custom_back_office_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// TEXT: Renseigner la couleur de fond du formulaire
    add_settings_field( 
        'eccp_settings_login_form_background_color_text_field',                   // Field ID
        __( 'Login Form: background color', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_login_form_background_color_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_back_office',                // Page (le slug de la page à laquelle appartient le champ)
        'custom_back_office_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// TEXT: Renseigner la couleur de texte du formulaire
    add_settings_field( 
        'eccp_settings_login_form_text_color_text_field',                   // Field ID
        __( 'Login Form: text color', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_login_form_text_color_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_back_office',                // Page (le slug de la page à laquelle appartient le champ)
        'custom_back_office_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// TEXT: Renseigner la couleur de fond des boutons
	add_settings_field( 
        'eccp_settings_button_login_form_background_color_text_field',                   // Field ID
        __( 'Button: background color', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_button_login_form_background_color_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_back_office',                // Page (le slug de la page à laquelle appartient le champ)
        'custom_back_office_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// TEXT: Renseigner la couleur de bordure des boutons
	add_settings_field( 
        'eccp_settings_button_login_form_border_color_text_field',                   // Field ID
        __( 'Button: border color', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_button_login_form_border_color_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_back_office',                // Page (le slug de la page à laquelle appartient le champ)
        'custom_back_office_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// TEXT: Renseigner la couleur de texte des boutons
	add_settings_field( 
        'eccp_settings_button_login_form_text_color_text_field',                   // Field ID
        __( 'Button: text color', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_button_login_form_text_color_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_back_office',                // Page (le slug de la page à laquelle appartient le champ)
        'custom_back_office_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// TEXT: Renseigner la couleur de fond des boutons au survol
	add_settings_field( 
        'eccp_settings_hover_button_login_form_background_color_text_field',                   // Field ID
        __( 'Button: background color on hover', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_hover_button_login_form_background_color_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_back_office',                // Page (le slug de la page à laquelle appartient le champ)
        'custom_back_office_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// TEXT: Renseigner la couleur de bordure des boutons au survol
	add_settings_field( 
        'eccp_settings_hover_button_login_form_border_color_text_field',                   // Field ID
        __( 'Button: border color on hover', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_hover_button_login_form_border_color_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_back_office',                // Page (le slug de la page à laquelle appartient le champ)
        'custom_back_office_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// TEXT: Renseigner la couleur de texte des boutons au survol
	add_settings_field( 
        'eccp_settings_hover_button_login_form_text_color_text_field',                   // Field ID
        __( 'Button: text color on hover', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_hover_button_login_form_text_color_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_back_office',                // Page (le slug de la page à laquelle appartient le champ)
        'custom_back_office_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// TEXT: Renseigner la couleur de fond pour la notice info
	add_settings_field( 
        'eccp_settings_info_notice_login_form_background_color_text_field',                   // Field ID
        __( 'Info Notice: background color', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_info_notice_login_form_background_color_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_back_office',                // Page (le slug de la page à laquelle appartient le champ)
        'custom_back_office_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// TEXT: Renseigner la couleur de bordure pour la notice info
	add_settings_field( 
        'eccp_settings_info_notice_login_form_border_color_text_field',                   // Field ID
        __( 'Info Notice: left border color', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_info_notice_login_form_border_color_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_back_office',                // Page (le slug de la page à laquelle appartient le champ)
        'custom_back_office_section',        // Section (l'ID de la section à laquelle appartient le champ)
    );
	
	// TEXT: Renseigner la couleur de texte pour la notice info
	add_settings_field( 
        'eccp_settings_info_notice_login_form_text_color_text_field',                   // Field ID
        __( 'Info Notice: text color', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_info_notice_login_form_text_color_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_back_office',                // Page (le slug de la page à laquelle appartient le champ)
        'custom_back_office_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// TEXT: Renseigner la couleur de fond pour la notice d'erreur
	add_settings_field( 
        'eccp_settings_error_notice_login_form_background_color_text_field',                   // Field ID
        __( 'Error Notice: background color', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_error_notice_login_form_background_color_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_back_office',                // Page (le slug de la page à laquelle appartient le champ)
        'custom_back_office_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// TEXT: Renseigner la couleur de bordure pour la notice d'erreur
	add_settings_field( 
        'eccp_settings_error_notice_login_form_border_color_text_field',                   // Field ID
        __( 'Error Notice: left border color', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_error_notice_login_form_border_color_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_back_office',                // Page (le slug de la page à laquelle appartient le champ)
        'custom_back_office_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// TEXT: Renseigner la couleur de texte pour la notice d'erreur
	add_settings_field( 
        'eccp_settings_error_notice_login_form_text_color_text_field',                   // Field ID
        __( 'Error Notice: text color', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_error_notice_login_form_text_color_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_back_office',                // Page (le slug de la page à laquelle appartient le champ)
        'custom_back_office_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	
	// RADIO: Activer une image de fond
    add_settings_field( 
        'eccp_settings_activate_image_background_login_page_radio_field',        // Field ID
        __( 'Enable background image', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_activate_image_background_login_page_radio_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_back_office',         // Page (le slug de la page à laquelle appartient le champ)
        'custom_back_office_section', // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	
	// TEXT: Renseigner l'URL de l'image de fond
    add_settings_field( 
        'eccp_settings_custom_image_background_url_text_field',                   // Field ID
        __( 'Custom background image url', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_custom_image_background_url_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_back_office',                // Page (le slug de la page à laquelle appartient le champ)
        'custom_back_office_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// CHECKBOX: activer image de fond fixe
	add_settings_field( 
        'eccp_settings_enable_login_page_fixed_background_image_checkbox_field',        // Field ID
        __( 'fixed background image', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_enable_login_page_fixed_background_image_checkbox_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_back_office',         // Page (le slug de la page à laquelle appartient le champ)
        'custom_back_office_section', // Section (l'ID de la section à laquelle appartient le champ)
        array( 
            'label_for' => 'eccp_settings_enable_login_page_fixed_background_image_checkbox_field',  // Id for the input and label element =  Field ID
            'description' => __( 'activate', 'editor-custom-color-palette' ),
        )
    ); 
	
	
	// CHECKBOX: activer la redrection aprés connexion
	add_settings_field( 
        'eccp_settings_enable_redirect_after_login_checkbox_field',        // Field ID
        __( 'Redirect after login', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_enable_redirect_after_login_checkbox_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_back_office',         // Page (le slug de la page à laquelle appartient le champ)
        'custom_back_office_section', // Section (l'ID de la section à laquelle appartient le champ)
        array( 
            'label_for' => 'eccp_settings_enable_redirect_after_login_checkbox_field',  // Id for the input and label element =  Field ID
            'description' => __( 'activate', 'editor-custom-color-palette' ),
        )
    ); 
	
	/* --------------- DÉCLARATION DES CHAMPS POUR LES EMAILS PAR DÉFAUT DE WORDPRESS ---------------------*/
	
	// CHECKBOX: activer Modification du nom de l'expéditeur et de l'adresse e-mail WordPress Par défaut
	add_settings_field( 
        'eccp_settings_enable_change_email_sender_default_checkbox_field',        // Field ID
        __( 'change email sender by default', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_enable_change_email_sender_default_checkbox_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_back_office',         // Page (le slug de la page à laquelle appartient le champ)
        'custom_back_office_section', // Section (l'ID de la section à laquelle appartient le champ)
        array( 
            'label_for' => 'eccp_settings_enable_change_email_sender_default_checkbox_field',  // Id for the input and label element =  Field ID
            'description' => __( 'activate', 'editor-custom-color-palette' ),
        )
    ); 
	
	// TEXT: Renseigner l'adresse de l'expéditeur de l'EMAIL
    add_settings_field( 
        'eccp_settings_email_sender_address_text_field',                   // Field ID
        __( 'EMAIL SENDER ADDRESS', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_email_sender_address_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_back_office',                // Page (le slug de la page à laquelle appartient le champ)
        'custom_back_office_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// TEXT: Renseigner le Nom de l'expéditeur 
    add_settings_field( 
        'eccp_settings_email_sender_name_text_field',                   // Field ID
        __( 'EMAIL SENDER NAME', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_email_sender_name_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_back_office',                // Page (le slug de la page à laquelle appartient le champ)
        'custom_back_office_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// CHECKBOX: activer «l'adresse de retour» correspond à l'adresse «De»
	add_settings_field( 
        'eccp_settings_enable_return_adress_correspond_from_adress_checkbox_field',        // Field ID
        __( '«Return-Path» corresponds to «From-Address»', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_enable_return_adress_correspond_from_adress_checkbox_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_back_office',         // Page (le slug de la page à laquelle appartient le champ)
        'custom_back_office_section', // Section (l'ID de la section à laquelle appartient le champ)
        array( 
            'label_for' => 'eccp_settings_enable_return_adress_correspond_from_adress_checkbox_field',  // Id for the input and label element =  Field ID
            'description' => __( 'activate', 'editor-custom-color-palette' ),
        )
    ); 
	
	/* --------------- DÉCLARATION DES CHAMPS POUR LES AUTRES PERSONNALISATION DE L'ADMIN WORDPRESS ---------------------*/

	// CHECKBOX: désactiver le sitemap de WordPress par défaut
	add_settings_field( 
        'eccp_settings_disable_default_wordpress_sitemap_checkbox_field',        // Field ID
        __( 'Disable default WordPress sitemap', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_disable_default_wordpress_sitemap_checkbox_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_back_office',         // Page (le slug de la page à laquelle appartient le champ)
        'custom_back_office_section', // Section (l'ID de la section à laquelle appartient le champ)
        array( 
            'label_for' => 'eccp_settings_disable_default_wordpress_sitemap_checkbox_field',  // Id for the input and label element =  Field ID
            'description' => __( 'activate', 'editor-custom-color-palette' ),
        )
    ); 
	
	
	//CHECKBOX: activer un lien de connexion/déconnexion a l'admin de WordPress pour un site en local
	add_settings_field( 
        'eccp_settings_activate_local_site_admin_login_loginout_link_checkbox_field',        // Field ID
        __( 'Enable a Login/Logout menu item for a local site', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_activate_local_site_admin_login_loginout_link_checkbox_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_back_office',         // Page (le slug de la page à laquelle appartient le champ)
        'custom_back_office_section', // Section (l'ID de la section à laquelle appartient le champ)
        array( 
            'label_for' => 'eccp_settings_activate_local_site_admin_login_loginout_link_checkbox_field',  // Id for the input and label element =  Field ID
            'description' => __( 'activate', 'editor-custom-color-palette' ),
        )
    ); 
	
	//CHECKBOX: activer un lien de connexion/déconnexion a l'admin de WordPress pour un site en ligne
	add_settings_field( 
        'eccp_settings_activate_online_site_admin_login_loginout_link_checkbox_field',        // Field ID
        __( 'Activate a Login/Logout menu item for an online site', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_activate_online_site_admin_login_loginout_link_checkbox_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_back_office',         // Page (le slug de la page à laquelle appartient le champ)
        'custom_back_office_section', // Section (l'ID de la section à laquelle appartient le champ)
        array( 
            'label_for' => 'eccp_settings_activate_online_site_admin_login_loginout_link_checkbox_field',  // Id for the input and label element =  Field ID
            'description' => __( 'activate', 'editor-custom-color-palette' ),
        )
    ); 
	
	
	// TEXT: Renseigner le slug de l'URL de connexion a l'admin de WordPress
    add_settings_field( 
        'eccp_settings_slug_admin_login_url_text_field',                   // Field ID
        __( 'Fill in the slug of the WordPress admin login URL', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_slug_admin_login_url_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_back_office',                // Page (le slug de la page à laquelle appartient le champ)
        'custom_back_office_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	

}	// FIN FONCTION eccp_settings_custom_back_office()  


/*******************************************************************************************************
 * Ajout d'un groupe de champs de paramètres à l'onglet Personnaliser Front End des réglages du plugin
 *******************************************************************************************************/
 
 // On se hooke sur admin_init et va simplement déclarer à WordPress l’existence d’un réglage
 add_action( 'admin_init', 'eccp_settings_custom_front_end' );
 

// On enregistre plusieurs paramètres
function eccp_settings_custom_front_end(){
	
    // on crée un réglage
	register_setting( 
        'eccp_custom_front_end',     // Settings group ( nom du groupe).
        'eccp_settings_custom_front_end', // Setting name ( nom du réglage c'est le nom de la fonction qui est hooké sur admin_init)
        'eccp_custom_front_end_sanitize'  // Sanitize callback(fonction de nettoyage pour nos valeur de réglages avant l'entrée en base de données)
    );
	
	
	/* -------------------------------------- 11ème SECTION:  CUSTOM FRONT END -----------------------------------------*/
	
	// On enregistre une section pour y ranger nos champs de réglages pour la personnalisation du Front End
    add_settings_section( 
        'custom_front_end_section',                   // Section ID
        __( 'CUSTOMIZE THE FRONT END', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_section_custom_front_end_markup',            // Callback or empty string (une fonction de rappel s’il y a de l’HTML spécial à afficher entre le titre de la section et les réglages)
        'eccp_settings_page_customizing_front_end'              // Page to display the section in (le slug de la page à laquelle appartient le champ)
    );

	/* ----------------- DÉCLARATION DES CHAMPS POUR LE BOUTON RETOUR VERS LE HAUT --------------------*/

	//CHECKBOX: activer le bouton retour vers le haut
	add_settings_field( 
        'eccp_settings_enable_back_to_top_button_checkbox_field',        // Field ID
        __( 'enable back to top button', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_enable_back_to_top_button_checkbox_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_front_end',         // Page (le slug de la page à laquelle appartient le champ)
        'custom_front_end_section', // Section (l'ID de la section à laquelle appartient le champ)
        array( 
            'label_for' => 'eccp_settings_enable_back_to_top_button_checkbox_field',  // Id for the input and label element =  Field ID
            'description' => __( 'activate', 'editor-custom-color-palette' ),
        )
    ); 

	
	// TEXT: Renseigner la marge droite
    add_settings_field( 
        'eccp_settings_margin_x_text_field',                   // Field ID
        __( 'margin X(0 to 100px)', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_margin_x_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_front_end',                // Page (le slug de la page à laquelle appartient le champ)
        'custom_front_end_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 
	
	// TEXT: Renseigner la marge verticale
    add_settings_field( 
        'eccp_settings_margin_y_text_field',                   // Field ID
        __( 'margin Y(0 to 100px)', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_margin_y_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_front_end',                // Page (le slug de la page à laquelle appartient le champ)
        'custom_front_end_section',        // Section (l'ID de la section à laquelle appartient le champ)
    ); 

	//TEXT: Renseigner l'opacité du bouton retour en haut
	add_settings_field( 
        'eccp_settings_back_top_button_opacity_text_field',                   // Field ID
        __( 'button opacity(0 to 100%)', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_back_top_button_opacity_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_front_end',                // Page (le slug de la page à laquelle appartient le champ)
        'custom_front_end_section',        // Section (l'ID de la section à laquelle appartient le champ)
    );
	
	//TEXT: Renseigner l'opacité du bouton retour en haut au survol
	add_settings_field( 
        'eccp_settings_back_top_button_opacity_on_hover_text_field',                   // Field ID
        __( 'button opacity on hover(0 to 100%)', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_back_top_button_opacity_on_hover_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_front_end',                // Page (le slug de la page à laquelle appartient le champ)
        'custom_front_end_section',        // Section (l'ID de la section à laquelle appartient le champ)
    );
	
	//TEXT: Renseigner la couleur du bouton retour en haut
	add_settings_field( 
        'eccp_settings_back_top_button_color_text_field',                   // Field ID
        __( 'button color', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_back_top_button_color_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_front_end',                // Page (le slug de la page à laquelle appartient le champ)
        'custom_front_end_section',        // Section (l'ID de la section à laquelle appartient le champ)
    );

	//TEXT: Renseigner la couleur de l'icône pour le bouton retour en haut
	add_settings_field( 
        'eccp_settings_color_icon_back_to_top_button_text_field',                   // Field ID
        __( 'icon color', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_color_icon_back_to_top_button_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_front_end',                // Page (le slug de la page à laquelle appartient le champ)
        'custom_front_end_section',        // Section (l'ID de la section à laquelle appartient le champ)
    );
	
	
	//TEXT: Renseigner le rayon de bordure pour le bouton retour en haut
	add_settings_field( 
        'eccp_settings_back_to_top_button_border_radius_text_field',                   // Field ID
        __( 'button border radius(0 to 50px)', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_back_to_top_button_border_radius_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_front_end',                // Page (le slug de la page à laquelle appartient le champ)
        'custom_front_end_section',        // Section (l'ID de la section à laquelle appartient le champ)
    );
	
	
	/* ----------------- DÉCLARATION DES CHAMPS POUR LES PUBLICATIONS --------------------*/
	
	//CHECKBOX: activer Boite d'informations auteur
	add_settings_field( 
        'eccp_settings_enable_author_info_box_checkbox_field',        // Field ID
        __( 'enable author info box', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_enable_author_info_box_checkbox_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_front_end',         // Page (le slug de la page à laquelle appartient le champ)
        'custom_front_end_section', // Section (l'ID de la section à laquelle appartient le champ)
        array( 
            'label_for' => 'eccp_settings_enable_author_info_box_checkbox_field',  // Id for the input and label element =  Field ID
            'description' => __( 'activate', 'editor-custom-color-palette' ),
        )
    ); 
	
	//TEXT: Renseigner le rayon de bordure pour l'avatar
	add_settings_field( 
        'eccp_settings_border_radius_avatar_author_info_box_text_field',                   // Field ID
        __( 'avatar border radius(0 to 50px)', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_border_radius_avatar_author_info_box_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_front_end',                // Page (le slug de la page à laquelle appartient le champ)
        'custom_front_end_section',        // Section (l'ID de la section à laquelle appartient le champ)
    );
	
	//TEXT: Renseigner la couleur du titre pour la boite d'info auteur
	add_settings_field( 
        'eccp_settings_title_author_info_box_text_field',                   // Field ID
        __( 'title color', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_title_author_info_box_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_front_end',                // Page (le slug de la page à laquelle appartient le champ)
        'custom_front_end_section',        // Section (l'ID de la section à laquelle appartient le champ)
    );
	
	//Renseigner la couleur du texte pour la boite d'info auteur
	add_settings_field( 
        'eccp_settings_text_author_info_box_text_field',                   // Field ID
        __( 'text color', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_text_author_info_box_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_front_end',                // Page (le slug de la page à laquelle appartient le champ)
        'custom_front_end_section',        // Section (l'ID de la section à laquelle appartient le champ)
    );
	
	//TEXT: Renseigner la couleur des liens pour la boite d'info auteur
	add_settings_field( 
        'eccp_settings_link_author_info_box_text_field',                   // Field ID
        __( 'link color', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_link_author_info_box_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_front_end',                // Page (le slug de la page à laquelle appartient le champ)
        'custom_front_end_section',        // Section (l'ID de la section à laquelle appartient le champ)
    );
	
	//TEXT: Renseigner la couleur de fond pour la boite d'info auteur
	add_settings_field( 
        'eccp_settings_background_author_info_box_text_field',                   // Field ID
        __( 'background color', 'editor-custom-color-palette' ),  // Title , Text Domain(pour la traduction)
        'eccp_settings_background_author_info_box_text_field_markup',            // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_front_end',                // Page (le slug de la page à laquelle appartient le champ)
        'custom_front_end_section',        // Section (l'ID de la section à laquelle appartient le champ)
    );
	
	/* ----------------- FORMULAIRE DE COMMENTAIRE --------------------*/
	
	//CHECKBOX: Supression du champ: Site WEB
	add_settings_field( 
        'eccp_settings_delete_comment_form_field_url_checkbox_field',        // Field ID
        __( 'Deletion of field: WEBSITE', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_delete_comment_form_field_url_checkbox_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_front_end',         // Page (le slug de la page à laquelle appartient le champ)
        'custom_front_end_section', // Section (l'ID de la section à laquelle appartient le champ)
        array( 
            'label_for' => 'eccp_settings_delete_comment_form_field_url_checkbox_field',  // Id for the input and label element =  Field ID
            'description' => __( 'activate', 'editor-custom-color-palette' ),
        )
    ); 
	
	//CHECKBOX: Déplacer la zone commentaire en bas du formulaire
	add_settings_field( 
        'eccp_settings_move_comment_field_from_comment_form_checkbox_field',        // Field ID
        __( 'Move the comment area to the bottom of the form', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_move_comment_field_from_comment_form_checkbox_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_front_end',         // Page (le slug de la page à laquelle appartient le champ)
        'custom_front_end_section', // Section (l'ID de la section à laquelle appartient le champ)
        array( 
            'label_for' => 'eccp_settings_move_comment_field_from_comment_form_checkbox_field',  // Id for the input and label element =  Field ID
            'description' => __( 'activate', 'editor-custom-color-palette' ),
        )
    ); 
	
	// TEXT AREA: Afficher un texte personnalisé avant le formulaire
    add_settings_field( 
        'eccp_settings_message_before_comment_form_textarea_field',        // Field ID
        __( 'custom message before comment form', 'editor-custom-color-palette' ),  // Title
        'eccp_settings_message_before_comment_form_textarea_field_markup', // Callback
        'eccp_settings_page_customizing_front_end',         // Page
        'custom_front_end_section', // Section
    ); 
	
	// TEXT AREA: Afficher un texte personnalisé aprés le formulaire
    add_settings_field( 
        'eccp_settings_message_after_comment_form_textarea_field',        // Field ID
        __( 'custom message after comment form', 'editor-custom-color-palette' ),  // Title
        'eccp_settings_message_after_comment_form_textarea_field_markup', // Callback
        'eccp_settings_page_customizing_front_end',         // Page
        'custom_front_end_section', // Section
    );

	
	
	//CHECKBOX: Centrer le bouton de soummission du formulaire
	add_settings_field( 
        'eccp_settings_center_comment_form_submit_button_checkbox_field',        // Field ID
        __( 'center submit button', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_center_comment_form_submit_button_checkbox_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_front_end',         // Page (le slug de la page à laquelle appartient le champ)
        'custom_front_end_section', // Section (l'ID de la section à laquelle appartient le champ)
        array( 
            'label_for' => 'eccp_settings_center_comment_form_submit_button_checkbox_field',  // Id for the input and label element =  Field ID
            'description' => __( 'activate', 'editor-custom-color-palette' ),
        )
    ); 
	
	//CHECKBOX: activer la Lightbox
	add_settings_field( 
        'eccp_settings_enable_lightbox_checkbox_field',        // Field ID
        __( 'enable lightbox', 'editor-custom-color-palette' ), // Title , Text Domain(pour la traduction)
        'eccp_settings_enable_lightbox_checkbox_field_markup',  // Callback to display the field (la fonction permettant d'afficher le champ)
        'eccp_settings_page_customizing_front_end',         // Page (le slug de la page à laquelle appartient le champ)
        'custom_front_end_section', // Section (l'ID de la section à laquelle appartient le champ)
        array( 
            'label_for' => 'eccp_settings_enable_lightbox_checkbox_field',  // Id for the input and label element =  Field ID
            'description' => __( 'activate', 'editor-custom-color-palette' ),
        )
    ); 
	
}	// FIN FONCTION eccp_settings_custom_front_end



/* -------------------------------------- AFFICHAGE DE HTML EN DESSOUS DES TITRES DE SECTION -----------------------------------------*/

	
/* Affiche du contenu HTML si besoin en dessous du titre de la section: Paramètres par défaut
   $args  Arguments(de type Array) passé a l'appel de la fonction */
function eccp_section_default_settings_markup( $args ){

echo '<p id="section_default_settings"></p>';

}	

/* Affiche du contenu HTML si besoin en dessous du titre de la section: IMPORT/EXPORT RÉGLAGES
   $args  Arguments(de type Array) passé a l'appel de la fonction */

/* function eccp_section_import_export_settings_markup( $args ){
	
	echo '<h3 id="section_import_export_settings">'. esc_html__( 'Export Settings','editor-custom-color-palette' ).'</h3>';
	echo esc_html__( 'Click the button below to export the customization settings for this plugin','editor-custom-color-palette' );
	echo'<br><br>';
	
	?>
	<form method="post" action="eccp-export-settings.php" enctype="multipart/form-data">
	
		<input type="hidden" name="MAX_FILE_SIZE" value ="2097152">   
		<button type="submit" class="button button-primary" name ="bouton_export"><?php echo esc_html__( 'Export Settings','editor-custom-color-palette' );?></button>
		
	</form>
	
	<?php
		
	if (!empty($_GET['export_settings'])){
		
		$export_settings = sanitize_text_field( $_GET['export_settings'] );
		esc_html_e($export_settings);
		
	}
		
	echo'<br><br><br>';
	
}
*/
	




/* Affiche du contenu HTML si besoin en dessous du titre de la section: EDITOR COLOR PALETTE
   $args  Arguments(de type Array) passé a l'appel de la fonction */
function eccp_section_editor_color_palette_markup( $args ){
	
	echo '<div class="bloc-intro table-of-content" id="section_editor_color_palette">';
		echo '<strong>';
		echo esc_html__( 'Customize the color palette','editor-custom-color-palette' ); 
		echo '</strong><br><br>';
		echo esc_html__( 'You can customize a palette of twelve colors.','editor-custom-color-palette' );
		echo '<br>';
		echo esc_html__( 'The color is defined in hexadecimal,the opacity allows to apply an RGBA color.','editor-custom-color-palette' );
		echo '<br>';
		echo esc_html__( 'Choose a simple name for the color, max 25 characters alphanumeric.','editor-custom-color-palette' );
		echo'<br>';
		echo esc_html__( 'The slug is automatically created from the name of the color and allows the style to be applied in the front end.','editor-custom-color-palette' );  
		echo'<br><br>';
		echo esc_html__( 'two options allow:','editor-custom-color-palette' );  
		echo'<br>';
		echo esc_html__( '• Disabling custom colors','editor-custom-color-palette' );
		echo'<br>';
		echo esc_html__( '• Disabling custom gradients','editor-custom-color-palette' );
		echo'<br><br>';
		echo '<a href="#sub-title-editor-color-palette-one">'. esc_html__( 'customizing color palette', 'editor-custom-color-palette' ).'</a>';
		echo'<br>';
		echo '<a href="#sub-title-editor-color-palette-two">'. esc_html__( 'Disabling custom colors & gradients', 'editor-custom-color-palette' ).'</a>';
	echo '</div>';
	
	echo'<br>';	
	echo '<img src="'.esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/editor-color-palette/custom-color-palette.jpg">';
	echo'<br><br>';	
	
	echo '<h3 id="sub-title-editor-color-palette-one"><u>'. esc_html__( 'customizing color palette','editor-custom-color-palette' ).'</h3></u>';
	
}
	
	
/* Affiche du contenu HTML si besoin en dessous du titre de la section: EDITOR TEXT SIZE
   $args  Arguments(de type Array) passé a l'appel de la fonction */
function eccp_section_editor_text_size_markup( $args ){
	
	echo '<div class="bloc-intro table-of-content" id="section_editor_text_size">';
		
		echo '<strong>';
		echo esc_html__( 'Customize the text sizes proposed in the paragraph','editor-custom-color-palette' ); 
		echo '</strong><br><br>';
		echo esc_html__( 'When you add a paragraph, an option allows you to choose the size of the text: small,regular,large,huge.','editor-custom-color-palette' );
		echo '<br>';
		echo esc_html__( 'The style is then applied to the paragraph, both in the editor and on the Front End.','editor-custom-color-palette' );
		echo'<br>';
		echo esc_html__( 'In order to better control this option, you will be able to choose the corresponding sizes.','editor-custom-color-palette' );  
		echo'<br><br>';
		echo '<a href="#sub-title-editor-text-size-one">'. esc_html__( 'Customize the text sizes', 'editor-custom-color-palette' ).'</a>';
		echo'<br>';
		echo '<a href="#sub-title-editor-text-size-two">'. esc_html__( 'Default text size for the Gutenberg editor', 'editor-custom-color-palette' ).'</a>';
		echo'<br>';
		echo '<a href="#sub-title-editor-text-size-three">'. esc_html__( 'Disable the custom font size', 'editor-custom-color-palette' ).'</a>';
		
	echo '</div>';
	
	echo'<br>';	
	echo '<img src="'.esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/editor-font-size/custom-font-size.png">';	
	
	echo '<h3 id="sub-title-editor-text-size-one"><u>'. esc_html__( 'Customize the text sizes','editor-custom-color-palette' ).'</h3></u>';
	
}

/* Affiche du contenu HTML si besoin en dessous du titre de la section: Custom Gutenberg Editor
   $args  Arguments(de type Array) passé a l'appel de la fonction */
function eccp_section_custom_gutenberg_editor_markup( $args ){
	
	echo '<div class="bloc-intro table-of-content" id="section_custom_gutenberg_editor" >';
		echo '<strong>';
		echo esc_html__( 'Customize Gutenberg editor','editor-custom-color-palette' ); 
		echo '</strong><br><br>';
		echo esc_html__( 'align wide option for the block editor:','editor-custom-color-palette' );
		echo '<br>';
		echo esc_html__( 'Some blocks such as the image block have the possibility to define a wide or full alignment.','editor-custom-color-palette' );
		echo'<br>';
		echo esc_html__( 'Not all themes take these styles into account.','editor-custom-color-palette' );  
		echo '<br><br>';
		echo '<a href="#sub-title-custom-gutenberg-editor-one">'. esc_html__( 'disable fullscreen mode of Gutenberg editor', 'editor-custom-color-palette' ).'</a>';
		echo '<br>';
		echo '<a href="#sub-title-custom-gutenberg-editor-two">'. esc_html__( 'activate the default style sheet of Gutenberg blocks on Front End', 'editor-custom-color-palette' ).'</a>';
		echo '<br>';
		echo '<a href="#sub-title-custom-gutenberg-editor-three">'. esc_html__( 'align wide option for the block editor', 'editor-custom-color-palette' ).'</a>';
		echo '<br>';
		echo '<a href="#sub-title-custom-gutenberg-editor-four">'. esc_html__( 'responsive embeds(for example integration vidéos YouTube)', 'editor-custom-color-palette' ).'</a>';
		echo '<br>';
		echo '<a href="#sub-title-custom-gutenberg-editor-five">'. esc_html__( 'Editor max widths, match the editor width to your sites width.', 'editor-custom-color-palette' ).'</a>';
		echo '<br>';
		echo '<a href="#sub-title-custom-gutenberg-editor-nine">'. esc_html__( 'Publication Title', 'editor-custom-color-palette' ).'</a>';
		echo '<br>';
		echo '<a href="#sub-title-custom-gutenberg-editor-ten">'. esc_html__( 'Enable support for new block parameters Introduced since WordPress 6.0', 'editor-custom-color-palette' ).'</a>';
		echo '<br>';
		echo '<a href="#sub-title-custom-gutenberg-editor-eleven">'. esc_html__( 'Disable WebP image generation introduced by WordPress 6.1', 'editor-custom-color-palette' ).'</a>';
		echo '<br>';
		echo '<a href="#sub-title-custom-gutenberg-editor-twelve">'. esc_html__( 'Disable Openverse category from the Medias tab', 'editor-custom-color-palette' ).'</a>';
		echo '<br>';
		echo '<a href="#sub-title-custom-gutenberg-editor-thirteen">'. esc_html__( 'Disable settings & styles tabs for sidebar', 'editor-custom-color-palette' ).'</a>';
		echo '<br>';
		echo '<a href="#sub-title-custom-gutenberg-editor-fourteen">'. esc_html__( 'Background color', 'editor-custom-color-palette' ).'</a>';
		echo '<br>';
		echo '<a href="#sub-title-custom-gutenberg-editor-fifteen">'. esc_html__( 'Fluid Spacing', 'editor-custom-color-palette' ).'</a>';
	echo '</div>';
	

	echo '<h3 id="sub-title-custom-gutenberg-editor-one"><u>'. esc_html__( 'disable fullscreen mode of Gutenberg editor','editor-custom-color-palette' ).'</h3><u>';
	
}

/*---------------------------  SOMMAIRE   -------------------------------------------------------*/

/* Affiche du contenu HTML si besoin en dessous du titre de la section: Custom Gutenberg Blocks
   $args  Arguments(de type Array) passé a l'appel de la fonction */
function eccp_section_customizing_gutenberg_blocks_markup( $args ){
	

	echo '<div style="width:500px;" class="bloc-intro table-of-content">';
	
		echo '<span style="font-weight:bold;">'.esc_html__( 'SUMMARY','editor-custom-color-palette' ).'</span>';
		echo '<br>';
		echo '<a style="text-transform: uppercase;" href="#section_paragraph_block">'. esc_html__( 'Paragraph Block', 'editor-custom-color-palette' ).'</a>';
		echo '<br>';
		echo '<a style="margin-left:15px;font-size:15px;" href="#sub-title-custom-gutenberg-block-one" class="sub-title">'. esc_html__( 'Other styles for the paragraph block', 'editor-custom-color-palette' ).'</a>';
		echo '<br>';
		echo '<a style="margin-left:15px;font-size:15px;" href="#sub-title-custom-gutenberg-block-two" class="sub-title">'. esc_html__( 'Click to Tweet style', 'editor-custom-color-palette' ).'</a>';
		echo '<br>';
		echo '<a style="margin-left:15px;font-size:15px;" href="#sub-title-custom-gutenberg-block-three" class="sub-title">'. esc_html__( 'Tooltip Format', 'editor-custom-color-palette' ).'</a>';
		echo '<br>';
		echo '<a style="text-transform: uppercase;" href="#section_list_block">'. esc_html__( 'List Block', 'editor-custom-color-palette' ).'</a>';
		echo '<br>';
		echo '<a style="margin-left:15px;font-size:15px;" href="#sub-title-section-list-block-one" class="sub-title">'. esc_html__( 'Bulleted list: other styles', 'editor-custom-color-palette' ).'</a>';
		echo '<br>';
		echo '<a style="text-transform: uppercase;" href="#section_group_block">'. esc_html__( 'Group Block', 'editor-custom-color-palette' ).'</a>';
		echo '<br>';
		echo '<a style="margin-left:15px;font-size:15px;" href="#sub-title-section-group-block-one" class="sub-title">'. esc_html__( 'Table of contents style', 'editor-custom-color-palette' ).'</a>';
		echo '<br>';
		echo '<a style="text-transform: uppercase;" href="#section_block_social_media_icons">'. esc_html__( 'Block social media icons', 'editor-custom-color-palette' ).'</a>';
		echo '<br>';
		echo '<a style="text-transform: uppercase;" href="#section_image_block">'. esc_html__( 'Image Block', 'editor-custom-color-palette' ).'</a>';
		echo '<br>';
		echo '<a  style="margin-left:15px;font-size:15px;" href="#sub-title-section-image-block-one" class="sub-title">'. esc_html__( 'Other styles for the image block', 'editor-custom-color-palette' ).'</a>';
		echo '<br>';
		echo '<a  style="margin-left:15px;font-size:15px;" href="#sub-title-section-image-block-two" class="sub-title">'. esc_html__( 'Add new size to image block settings', 'editor-custom-color-palette' ).'</a>';
		echo '<br>';
		echo '<a  style="margin-left:15px;font-size:15px;" href="#sub-title-section-image-block-three" class="sub-title">'. esc_html__( 'Change default add media settings', 'editor-custom-color-palette' ).'</a>';
		echo '<br>';
		echo '<a style="text-transform: uppercase;" href="#section_button_block">'. esc_html__( 'Button Block', 'editor-custom-color-palette' ).'</a>';
		//echo '<br>';
		//echo '<a  style="margin-left:15px;font-size:15px;" href="#sub-title-custom-gutenberg-block-eight" class="sub-title">'. esc_html__( 'Hover fill style button', 'editor-custom-color-palette' ).'</a>';
		//echo '<br>';
		//echo '<a  style="margin-left:15px;font-size:15px;" href="#sub-title-custom-gutenberg-block-nine" class="sub-title">'. esc_html__( 'Hover outline style button', 'editor-custom-color-palette' ).'</a>';
		echo '<br>';
		echo '<a style="text-transform: uppercase;" href="#section_column_block">'. esc_html__( 'Column Block', 'editor-custom-color-palette' ).'</a>';
		echo '<br>';
		echo '<a style="text-transform: uppercase;" href="#section_cover_block">'. esc_html__( 'Cover Block', 'editor-custom-color-palette' ).'</a>';
		echo '<br>';
		echo '<a style="text-transform: uppercase;" href="#section_media_text_block">'. esc_html__( 'Media & Text Block', 'editor-custom-color-palette' ).'</a>';
		echo '<br>';
		echo '<a style="text-transform: uppercase;" href="#section_read_more_block">'. esc_html__( 'Read More Block', 'editor-custom-color-palette' ).'</a>';
		echo '<br>';
		echo '<a  style="margin-left:15px;font-size:15px;" href="#sub-title-section-read-more-block-one" class="sub-title">'. esc_html__( 'block style read more', 'editor-custom-color-palette' ).'</a>';
		echo '<br>';
		echo '<a  style="margin-left:15px;font-size:15px;" href="#sub-title-section-read-more-block-two" class="sub-title">'. esc_html__( 'block style read more on hover', 'editor-custom-color-palette' ).'</a>';
		echo '<br>';
		echo '<a style="text-transform: uppercase;" href="#section_heading_block">'. esc_html__( 'Heading Block', 'editor-custom-color-palette' ).'</a>';
		echo '<br>';
		echo '<a  style="text-transform: uppercase;" href="#section_table_block">'. esc_html__( 'Table Block', 'editor-custom-color-palette' ).'</a>';
		echo '<br>';
		echo '<a style="text-transform: uppercase;" href="#section_latest_posts_block">'. esc_html__( 'Latest Posts Block', 'editor-custom-color-palette' ).'</a>';
		echo '<br>';
		echo '<a style="text-transform: uppercase;" href="#section_query_loop_block">'. esc_html__( 'Query Loop Block', 'editor-custom-color-palette' ).'</a>';
		echo '<br>';
		echo '<a style="text-transform: uppercase;" href="#section_yoast_seo_faq_block">'. esc_html__( 'YOAST SEO FAQ BLOCK', 'editor-custom-color-palette' ).'</a>';
		echo '<br>';
		echo '<a style="text-transform: uppercase;" href="#section_bloc_galerie">'. esc_html__( 'Gallery Block', 'editor-custom-color-palette' ).'</a>';
		echo '<br>';
		echo '<a style="text-transform: uppercase;" href="#section_bloc_citation">'. esc_html__( 'Quote Block', 'editor-custom-color-palette' ).'</a>';
		echo '<br>';
		echo '<a style="text-transform: uppercase;" href="#section_more_personnalization">'. esc_html__( 'More Personalization', 'editor-custom-color-palette' ).'</a>';
		echo '<br>';
	
	echo '</div>';
	
	echo '<h3 style="margin-top:30px;" id="section_paragraph_block"><u>'. esc_html__( 'Paragraph Block','editor-custom-color-palette' ).'</h3></u>';
	
	echo '<h4><u>'. esc_html__( 'box shadow style','editor-custom-color-palette' ).'</u></h4>';
	
	echo '<div class="container" style="float:left;width:60%;margin-right:20px;">';
	
		echo '<div  style="width:85%;"class="mise-en-avant">';
			echo '<strong>';
			echo esc_html__( '• box shadow style below','editor-custom-color-palette' );
			echo'<br>';
			echo esc_html__( '• In the last section of this page enable JS scripting for more customization.','editor-custom-color-palette' );
			echo'<br>';
			echo esc_html__( 'You then have access (see opposite) to the ECCP Box Shadow Panel settings parameters for the box shadow style.','editor-custom-color-palette' ); 
			echo'<br>';
			echo esc_html__( 'Box Shadow style also present for Group, Column, Image, Media-text blocks.','editor-custom-color-palette' ); 					
			echo '</strong>';
			echo'<br><br>';
			echo esc_html__( 'default settings:','editor-custom-color-palette' ); 
			echo'<br>';
			echo esc_html__( 'shadow box color:#00000 opacity:20  X:0  Y:0  Blur:4  Spread:1','editor-custom-color-palette' );
		echo '</div>';
		
		echo '<div style="margin-left:1.1em;">';
			echo '<img style="margin-right:20px;" src="'.esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/custom-gutenberg-editor/paragraph-block.png" with="600" height="150">';
		echo '</div>';
		
	echo '</div>';
	
	echo '<div>';
	echo '<img  src="'.esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/custom-gutenberg-block/box-shadow-parameters.jpg">';
	echo '</div>';
	
	
	echo '<h4 id="sub-title-custom-gutenberg-block-one"><u>'. esc_html__( 'Other styles for the paragraph block','editor-custom-color-palette' ).'</u></h4>';
	
	echo '<div style="width:60%;" class="mise-en-avant">';
			echo '<strong>';
			echo esc_html__( '• Added styles to block settings (Styles panel) and block toolbar.','editor-custom-color-palette' );
			echo'<br>';
			echo esc_html__( 'Style: Question,Info,Advice,Warning,Alert','editor-custom-color-palette' );
			echo'<br>';
			echo esc_html__( 'These styles make it possible to obtain notification blocks with icon and color background.','editor-custom-color-palette' ); 
			echo'<br>';
			echo esc_html__( 'To have the styles in the block toolbar, in the last section of this page you need to enable JS scripting for more customization.','editor-custom-color-palette' ); 
			echo'<br>';
			echo esc_html__( 'These styles are also present for the Group block.','editor-custom-color-palette' ); 				
			echo'<br><br>';
			echo esc_html__( '• Added Click to Tweet style to block settings(Styles Panel).','editor-custom-color-palette' );
			echo'<br>';
			echo esc_html__( 'Adding a "click to tweet" feature to your posts is a great way to encourage readers to share your content.','editor-custom-color-palette' );
			echo'<br>';
			echo esc_html__( 'The Click to Tweet button is only visible in Front End.','editor-custom-color-palette' );
			echo'<br>';
			echo esc_html__( 'To also have the Click to Tweet style in the block inserter, in the last section of this page you must activate JS script for more customization.','editor-custom-color-palette' );
			echo'<br>';
			echo '</strong>';
	echo '</div>';
	
	echo '<img src="'.esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/custom-gutenberg-block/style-card-question.jpg">';
	echo '<img style="margin-left:5px;" src="'.esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/custom-gutenberg-block/style-info-advice.jpg">';
	echo '<img style="margin-left:5px;" src="'.esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/custom-gutenberg-block/style-warning-alert.jpg">';
	
}


/* Affiche du contenu HTML si besoin en dessous du titre de la section: Addons Reusable Blocks
   $args  Arguments(de type Array) passé a l'appel de la fonction */
function eccp_section_addons_reusable_blocks_markup( $args ){

	echo '<div id="section_addons_reusable_blocks">';

		echo '<h3 style="margin-top:30px;" id="sub-title-addons-reusable-blocks-one"><u>'. esc_html__( 'Introduction','editor-custom-color-palette' ).'</h3></u>';

		echo '<div class="bloc-intro table-of-content">';
		
			echo '<strong>';
			echo esc_html__( 'More blocks for Gutenberg editor','editor-custom-color-palette' ); 
			echo '</strong><br><br>';
			echo esc_html__( 'In this section you can download reusable blocks in json format.','editor-custom-color-palette' );
			echo '<br><br>';
			echo '<a href="#sub-title-addons-reusable-blocks-four">'. esc_html__( 'Activate reusable blocks menu', 'editor-custom-color-palette' ).'</a>';
			echo '<br>';
			echo '<a href="#sub-title-addons-reusable-blocks-five">'. esc_html__( 'Enable the display of reusable blocks by a shortcode', 'editor-custom-color-palette' ).'</a>';
			echo '<br>';
			echo '<a href="#sub-title-addons-reusable-blocks-six">'. esc_html__( 'Automatically add content before and/or after your posts, articles, pages or any type of custom post.', 'editor-custom-color-palette' ).'</a>';
			echo '<br>';
			echo '<a href="#sub-title-addons-reusable-blocks-seven">'. esc_html__( 'Blockquote download & settings', 'editor-custom-color-palette' ).'</a>';
			echo '<br>';
			echo '<a href="#sub-title-addons-reusable-blocks-eight">'. esc_html__( 'Download & settings Custom Paragraph Block', 'editor-custom-color-palette' ).'</a>';
			echo'<br>';
			echo '<a href="#sub-title-addons-reusable-blocks-nine">'. esc_html__( 'Download advice block', 'editor-custom-color-palette' ).'</a>';
			echo '<br>';
			echo '<a href="#sub-title-addons-reusable-blocks-ten">'. esc_html__( 'Download information block', 'editor-custom-color-palette' ).'</a>';
			echo '<br>';
			echo '<a href="#sub-title-addons-reusable-blocks-eleven">'. esc_html__( 'Download warning block', 'editor-custom-color-palette' ).'</a>';
			echo '<br>';
			echo '<a href="#sub-title-addons-reusable-blocks-twelve">'. esc_html__( 'Download alert block', 'editor-custom-color-palette' ).'</a>';
			echo '<br>';
			echo '<a href="#sub-title-addons-reusable-blocks-thirteen">'. esc_html__( 'Download the price table block', 'editor-custom-color-palette' ).'</a>';
			echo '<br>';
			echo '<a href="#sub-title-addons-reusable-blocks-fourteen">'. esc_html__( 'Download the Articles Query Loop block', 'editor-custom-color-palette' ).'</a>';
			echo '<br>';
			echo '<a href="#sub-title-addons-reusable-blocks-fifteen">'. esc_html__( 'Download social icons block with share links', 'editor-custom-color-palette' ).'</a>';
			echo '<br>';
			echo '<a href="#sub-title-addons-reusable-blocks-sixteen">'. esc_html__( 'Download the table of contents block', 'editor-custom-color-palette' ).'</a>';
		
		echo '</div>';

		echo'<br>';
		echo '<img src="'.esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/addons-reusable-blocks/settings-kadence-blocks.jpg" width="553" height="336">';
		
		// Gérer les blocs réutilisables
		echo '<h3 style="margin-top:30px;" id="sub-title-addons-reusable-blocks-two"><u>'. esc_html__( 'Manage reusable blocks','editor-custom-color-palette' ).'</u></h3>';

		echo '<div class="bloc-intro">';
			echo esc_html__( '• Access to the menu for reusable block management is done directly from the Gutenberg editor.','editor-custom-color-palette' );
			echo '<br>';
			echo esc_html__( '• Click on Import from JSON and select the JSON file and after refresh the screen key F5.','editor-custom-color-palette' );
			echo '<br>';
			echo esc_html__( '• Now in the Gutenberg editor click on the + icon to add a block from the reusable blocks tab.','editor-custom-color-palette' );
		echo '</div>';

		echo'<br>';
		echo '<img style="margin-right:10px;" src="'.esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/addons-reusable-blocks/manage-all-reusable-blocks.jpg">';
		echo '<img style="margin-right:30px;" src="'.esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/addons-reusable-blocks/back-offfice-reusable-blocks.jpg" width="369" height="338">';
		echo '<img src="'.esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/addons-reusable-blocks/editor-gutenberg-reusable-blocks.jpg">';
		echo'<br><br><br>';
		
		// Principes des blocs réutilisables
		echo '<h3 style="margin-top:30px;" id="sub-title-addons-reusable-blocks-three"><u>'. esc_html__( 'Principles of reusable blocks','editor-custom-color-palette' ).'</u></h3>';

		echo '<div class="bloc-intro">';
			echo esc_html__( '• Synchronization: the contents of the blocks are synchronized,if you modify the contents of the reusable block,all the occurrences of the block on the site are modified.','editor-custom-color-palette' );
			echo '<br>';
			echo esc_html__( '• Desynchronization: Synchronization can be turned off with one click using the «convert to normal block» option.Its content can then be modified without altering other content using the same original reusable block.','editor-custom-color-palette' );
			echo '<br>';
		echo '</div>';
		echo '<img style="margin-right:10px;" src="'.esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/addons-reusable-blocks/principles-reusable-blocks.jpg">';
		
		// Ajouter le menu Blocs Réutilisable en back office
		echo '<h3 id="sub-title-addons-reusable-blocks-four"><u>'. esc_html__( 'Activate the menu of reusable blocks in the back office','editor-custom-color-palette' ).'</u></h3>';
		
		echo '<div class="mise-en-avant">';
			echo '<strong>';
			echo esc_html__( 'For easier management of reusable blocks,add a reusable blocks menu on the dashboard.','editor-custom-color-palette' ); 
			echo '</strong>';
		echo '</div>';
	
		echo '<img style="margin-right:10px;" src="'.esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/addons-reusable-blocks/reusable-blocks-menu.jpg">';
	
	echo'</div>';// fin div section addons reusable blocks
	
	
}


/* Affiche du contenu HTML si besoin en dessous du titre de la section: ELMENTOR COLOR PALETTE
   $args  Arguments(de type Array) passé a l'appel de la fonction */
function eccp_section_elementor_color_palette_markup( $args ){
	
	echo '<div id="section_elementor_color_palette">';
	
		echo '<div class="bloc-intro">';
		
			echo '<strong>';
			echo esc_html__( 'Customize the color palette','editor-custom-color-palette' ); 
			echo '</strong><br><br>';
			echo esc_html__( 'You can sync Elementor color palette with Gutenberg color palette.','editor-custom-color-palette' );
			echo '<br>';
			echo esc_html__( '• Color 1 to 4 Gutenberg: Elementor system colors','editor-custom-color-palette' );
			echo '<br>';
			echo esc_html__( '• Color 5 to 12 Gutenberg: Elemntor custom colors','editor-custom-color-palette' );
			echo'<br>';
			echo esc_html__( 'Once the Elementor color palette is established, deactivate synchronization.','editor-custom-color-palette' );
			echo'<br>';
			echo esc_html__( 'If you want more than 12 colors, turn off sync and enter other custom colors from Elementor.','editor-custom-color-palette' );
			echo'<br><br>';
			echo'<strong class="souligne-texte" >';
			echo esc_html__( 'Warning! synchronization erases any color palette configured previously in Elementor.','editor-custom-color-palette' );
			echo'<br>';
			echo esc_html__( 'The synchronization is therefore to be done following an installation of WordPress & theme & Elementor.','editor-custom-color-palette' );
			echo'</strong>';
			echo'<br>';
			
		echo '</div>';
		
		echo'<br>';	
		echo '<img src="'.esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/elementor-page-builder/elementor-color-palette.jpg">';
		
		
		echo '<h3 id="sub-title-elementor-color-palette-one"><u>'. esc_html__( 'customizing color palette','editor-custom-color-palette' ).'</u></h3>';
	
	
	echo'</div>';// fin div section elementor color palette
	
	
}
	
	
/* Affiche du contenu HTML si besoin en dessous du titre de la section: DIVI COLOR PALETTE
$args  Arguments(de type Array) passé a l'appel de la fonction*/ 
function eccp_section_divi_theme_markup( $args ){
	
	echo '<div id="section_divi_color_palette">';
	
		echo '<div class="bloc-intro">';
		
			echo '<strong>';
			echo esc_html__( 'Customize the color palette','editor-custom-color-palette' ); 
			echo '</strong><br><br>';
			echo esc_html__( 'You can choose the synchronization:','editor-custom-color-palette' );
			echo '<br>';
			echo esc_html__( '• synchronize the DIVI color palette with the Gutenberg color palette(first eight colors)','editor-custom-color-palette' );
			echo '<br>';
			echo esc_html__( '• synchronize the Gutenberg color palette(first eight colors) with the DIVI color palette','editor-custom-color-palette' );
			echo'<br>';
			echo esc_html__( 'Once the color palette is established,deactivate synchronization.','editor-custom-color-palette' );
			echo'<br>';
			
		echo '</div>';
		
		echo'<br>';	
		echo '<img src="'.esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/divi-theme/divi-color-palette.jpg">';
		
		
		echo '<h3 id="sub-title-divi-color-palette-one"><u>'. esc_html__( 'customizing color palette','editor-custom-color-palette' ).'</u></h3>';
	
	
	echo'</div>';// fin div section divi color palette
	
	
}


/* Affiche du contenu HTML si besoin en dessous du titre de la section: PERSONNALISER BACK OFFICE
$args  Arguments(de type Array) passé a l'appel de la fonction*/ 
function eccp_section_custom_back_office_markup( $args ){
		
	// **************** SOMMAIRE **************************
	echo '<div class="bloc-intro table-of-content" id="section_custom_back_office" >';
	
		echo '<span style="font-weight:bold;">'.esc_html__( 'SUMMARY','editor-custom-color-palette' ).'</span>';
		echo '<br>';
		echo '<a style="text-transform: uppercase;" href="#section_publication">'. esc_html__( 'Publications', 'editor-custom-color-palette' ).'</a>';
		echo '<br>';
		echo '<a href="#sub-title-publication-one" class="sub-title">'. esc_html__( 'Featured Image & Post ID', 'editor-custom-color-palette' ).'</a>';
		echo '<br>';
		echo '<a href="#sub-title-publication-two" class="sub-title">'. esc_html__( 'Filter by author for all post types', 'editor-custom-color-palette' ).'</a>';
		echo '<br>';
		echo '<a href="#sub-title-publication-three" class="sub-title">'. esc_html__( 'Filter by categories for custom post types', 'editor-custom-color-palette' ).'</a>';
		echo '<br>';
		echo '<a href="#sub-title-publication-four" class="sub-title">'. esc_html__( 'Filter by date range', 'editor-custom-color-palette' ).'</a>';
		echo '<br>';
		echo '<a href="#sub-title-publication-five" class="sub-title">'. esc_html__( 'Filter post by publication status', 'editor-custom-color-palette' ).'</a>';
		echo '<br>';
		echo '<a href="#sub-title-publication-six" class="sub-title">'. esc_html__( 'Added publication status options for bulk article actions', 'editor-custom-color-palette' ).'</a>';
		echo '<br>';
		echo '<a  style="text-transform: uppercase;" href="#section_library">'. esc_html__( 'Library', 'editor-custom-color-palette' ).'</a>';
		echo '<br>';
		echo '<a href="#sub-title-library-one" class="sub-title">'. esc_html__( 'Added ID,Dimensions,File Size columns', 'editor-custom-color-palette' ).'</a>';
		echo '<br>';
		echo '<a href="#sub-title-library-two" class="sub-title">'. esc_html__( 'Filter by date range', 'editor-custom-color-palette' ).'</a>';
		echo '<br>';
		echo '<a href="#sub-title-library-three" class="sub-title">'. esc_html__( 'allow upload media in SVG format', 'editor-custom-color-palette' ).'</a>';
		echo '<br>';
		echo '<a href="#sub-title-library-four" class="sub-title">'. esc_html__( 'Automatically set image Title,Alt-Text & Caption upon upload', 'editor-custom-color-palette' ).'</a>';
		echo '<br>';
		echo '<a  style="text-transform: uppercase;" href="#section_users">'. esc_html__( 'Users', 'editor-custom-color-palette' ).'</a>';
		echo '<br>';
		echo '<a href="#sub-title-users-one" class="sub-title">'. esc_html__( 'Add column last login & user registration date', 'editor-custom-color-palette' ).'</a>';
		echo '<br>';
		echo '<a href="#sub-title-users-two" class="sub-title">'. esc_html__( 'Allow contributors to upload media to the media library', 'editor-custom-color-palette' ).'</a>';
		echo '<br>';
		echo '<a  style="text-transform: uppercase;" href="#section_login_form">'. esc_html__( 'Login Page', 'editor-custom-color-palette' ).'</a>';
		echo '<br>';
		echo '<a href="#sub-title-login-page-one" class="sub-title">'. esc_html__( 'Disable language selector', 'editor-custom-color-palette' ).'</a>';
		echo '<br>';
		echo '<a href="#sub-title-login-page-two" class="sub-title">'. esc_html__( 'Show a custom error message to your users', 'editor-custom-color-palette' ).'</a>';
		echo '<br>';
		echo '<a href="#sub-title-login-page-three" class="sub-title">'. esc_html__( 'Disable Admin Email Verification Request', 'editor-custom-color-palette' ).'</a>';
		echo '<br>';
		echo '<a href="#sub-title-login-page-four" class="sub-title">'. esc_html__( 'Custom Logo', 'editor-custom-color-palette' ).'</a>';
		echo '<br>';
		echo '<a href="#sub-title-login-page-five" class="sub-title">'. esc_html__( 'Custom Login Form', 'editor-custom-color-palette' ).'</a>';
		echo '<br>';
		echo '<a href="#sub-title-login-page-six" class="sub-title">'. esc_html__( 'Custom background image', 'editor-custom-color-palette' ).'</a>';
		echo '<br>';
		echo '<a href="#sub-title-login-page-seven" class="sub-title">'. esc_html__( 'Redirect after login', 'editor-custom-color-palette' ).'</a>';
		echo '<br>';
		echo '<a  style="text-transform: uppercase;" href="#section_default_wordpress_email">'. esc_html__( 'Default WordPress EMAIL', 'editor-custom-color-palette' ).'</a>';
		echo '<br>';
		echo '<a href="#sub-title-default-wordpress-email-one" class="sub-title">'. esc_html__( 'Changing the Sender Name and Email Address WordPress Default', 'editor-custom-color-palette' ).'</a>';
		echo '<br>';
		echo '<a href="#sub-title-default-wordpress-email-two" class="sub-title">'. esc_html__( 'Prevent WordPress notification emails from being considered spam', 'editor-custom-color-palette' ).'</a>';
		echo '<br>';
		echo '<a  style="text-transform: uppercase;" href="#section_other_admin_customization">'. esc_html__( 'Other WordPress admin customization', 'editor-custom-color-palette' ).'</a>';
		echo '<br>';
		echo '<a href="#sub-title-other-admin-customization-one" class="sub-title">'. esc_html__( 'Disable default WordPress sitemap', 'editor-custom-color-palette' ).'</a>';
		echo '<br>';
		echo '<a href="#sub-title-other-admin-customization-two" class="sub-title">'. esc_html__( 'Activate a menu item for login/logout to the WordPress admin', 'editor-custom-color-palette' ).'</a>';
	
	echo '</div>';
	

	echo '<h2 style="margin-top: 55px;" id="section_publication">'. esc_html__( 'Publications','editor-custom-color-palette' ).'</h2>';
	
	echo '<h3 id="sub-title-publication-one"><u>'. esc_html__( 'Featured Image & Post ID','editor-custom-color-palette' ).'</u></h3>';
	
	
	echo '<div class="bloc-intro">';
		echo esc_html__( '• For screens that list Posts, Pages, Custom Post Type, added columns to display a thumbnail of the featured image and post ID.','editor-custom-color-palette' );
		echo '<br>';
		echo esc_html__( '• Added a setting to the Quick Edit screen that allows Delete/Add Featured Image.','editor-custom-color-palette' );
		echo '<br>';
		echo esc_html__( '• Enabling a featured image column is common for posts & custom post types.','editor-custom-color-palette' );
	echo '</div>';

	
	
}


/* Affiche du contenu HTML si besoin en dessous du titre de la section: PERSONNALISER FRONT END
$args  Arguments(de type Array) passé a l'appel de la fonction*/ 
function eccp_section_custom_front_end_markup( $args ){
	
	// **************** SOMMAIRE **************************
	echo '<div class="bloc-intro table-of-content" id="section_custom_back_office" >';
	
		echo '<span style="font-weight:bold;">'.esc_html__( 'SUMMARY','editor-custom-color-palette' ).'</span>';
		echo '<br>';
		echo '<a style="text-transform: uppercase;" href="#section_back_to_top">'. esc_html__( 'Back to top button', 'editor-custom-color-palette' ).'</a>';
		echo '<br>';
		echo '<a  style="text-transform: uppercase;" href="#section_publication_front_end">'. esc_html__( 'Publications', 'editor-custom-color-palette' ).'</a>';
		echo '<br>';
		echo '<a href="#sub-title-publication-front-end-one" class="sub-title">'. esc_html__( 'Author Info Box', 'editor-custom-color-palette' ).'</a>';
		echo '<br>';
		echo '<a href="#sub-title-publication-front-end-two" class="sub-title">'. esc_html__( 'Comment form', 'editor-custom-color-palette' ).'</a>';
		echo '<br>';
		echo '<a href="#sub-title-publication-front-end-three" class="sub-title">'. esc_html__( 'Lightbox', 'editor-custom-color-palette' ).'</a>';
		echo '<br>';
		
	echo '</div>';
	

	echo '<h2 style="margin-top: 55px;" id="section_back_to_top">'. esc_html__( 'Back to top button','editor-custom-color-palette' ).'</h2>';

}


/*--------------------- FONCTION: NETTOYER LE NOM DE LA COULEUR POUR LE SLUG -------------------------------------*/

function eccp_sanitize_chain($string) {
	
	$search  = array('À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'Ù', 'Ú', 'Û', 'Ü', 'Ý', 'à', 'á', 'â', 'ã', 'ä', 'å', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ð', 'ò', 'ó', 'ô', 'õ', 'ö', 'ù', 'ú', 'û', 'ü', 'ý', 'ÿ',);

	// les caractères accentués sont converti en minuscule simple
	$replace = array('a', 'a', 'a', 'a', 'a', 'a', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u', 'y', 'a', 'a', 'a', 'a', 'a', 'a', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'o', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u', 'y', 'y',);

	// on retourne une chaine avec les caractères accentués
	// en minuscule sans accent
	// on utilise la fonction str_replace qui ne pose pas de problème en utf-8 
	// contrairement à strtr 
	$string = str_replace($search, $replace, $string);	 

	// on converti les majuscules initialement non accentués restantes en minuscule 
	// seulement maintenant car  la fonction strtolower ne gère pas les accents
	$string = strtolower($string);
	 
	// on supprime les espaces en début et fin de chaine
	$string = trim($string);
	
	// on utilise une expression singulière pour transformer
	// tout ce qui n'est pas une lettre minuscule en tiret
	// les « # » ne sont rien de plus que les délimiteurs de la regex.
	// le + permet de sélectionner plus d'un caractère a la fois
	// ainsi si on avait deux caractères spéciaux a suivre
	// ex: !/ ils sont remplacé par un tiret : - et non: --
	$string = preg_replace('#[^a-z0-9]+#', '-', $string);
	
	// Je supprime tous les tirets en début ou en fin de chaine
	// au cas ou il y aurait eu un caractère spécial en début ou fin de chaine
	$string= trim($string, '-');
	
	return $string;
}



/* -------------------------------------- AFFICHAGE DES CHAMPS POUR LA 1ère SECTION PARAMÈTRES PAR DÉFAUT -----------------------------------------*/

/* Affiche le paramètre de champ radio pour l'initialisation du plugin aux paramètres par défaut
   Attention ! ne prend pas les Majuscules pour les valeurs de champ.
   $args  Arguments(de type Array) passé a l'appel de la fonction 
   on fait correspondre l’attribut name HTML de notre champ qui est un tableau avec le nom 
   du réglage déclaré avec register_setting() soit eccp_settings_default_settings */
   
function eccp_default_setting_radio_field_markup( $args ){
	
    $default_settings = get_option( 'eccp_settings_default_settings' );
    $checked = ! empty( $default_settings['eccp_default_setting_radio_field'] ) ? $default_settings['eccp_default_setting_radio_field'] : 'no';
	?>
        <fieldset>
            <legend class="screen-reader-text"><?php esc_html_e( 'no', 'editor-custom-color-palette' ); ?></legend>
                <label for="settings_eccp_radio_option_1">
                    <input id="settings_eccp_radio_option_1" type="radio" name="eccp_settings_default_settings[eccp_default_setting_radio_field]" value="no" <?php checked( $checked, 'no' ); ?>>
                    <?php esc_html_e( 'no', 'editor-custom-color-palette' ); ?>  <!--  label , text domain  -->
                </label>
                <br>
                <label for="settings_eccp_radio_option_2">
                    <input id="settings_eccp_radio_option_2" type="radio" name="eccp_settings_default_settings[eccp_default_setting_radio_field]" value="yes" <?php checked( $checked, 'yes' ); ?>>
                    <?php esc_html_e( 'yes', 'editor-custom-color-palette' ); ?>
                </label>
        </fieldset>
		
    <?php
}

/* Affiche le paramètre de champ radio pour le choix de supprimer les données lors de la désinstallation */
function eccp_delete_data_uninstallation_radio_field_markup( $args ){
	
    $default_settings = get_option( 'eccp_settings_default_settings' );
    $checked = ! empty( $default_settings['eccp_delete_data_uninstallation_radio_field'] ) ? $default_settings['eccp_delete_data_uninstallation_radio_field'] : 'no';
    
	?>
        <fieldset>
            <legend class="screen-reader-text"><?php esc_html_e( 'no', 'editor-custom-color-palette' ); ?></legend>
                <label for="settings_eccp_radio_option_1">
                    <input id="settings_eccp_radio_option_1" type="radio" name="eccp_settings_default_settings[eccp_delete_data_uninstallation_radio_field]" value="no" <?php checked( $checked, 'no' ); ?>>
                    <?php esc_html_e( 'no', 'editor-custom-color-palette' ); ?>  <!--  label , text domain  -->
                </label>
                <br>
                <label for="settings_eccp_radio_option_2">
                    <input id="settings_eccp_radio_option_2" type="radio" name="eccp_settings_default_settings[eccp_delete_data_uninstallation_radio_field]" value="yes" <?php checked( $checked, 'yes' ); ?>>
                    <?php esc_html_e( 'yes', 'editor-custom-color-palette' ); ?>
                </label>
        </fieldset>
		
    <?php
}


/* -------------------------------------- AFFICHAGE DES CHAMPS POUR LA 3ème SECTION EDITOR COLOR PALETTE -----------------------------------------*/


// Affiche le paramètre de champ chexbox pour activer la personnalisation de la palette de couleurs  
function eccp_settings_activate_customizing_color_palette_checkbox_field_markup( $args ){
    
	$settings = get_option( 'eccp_multiple_setting' );
	$checked = (bool) $settings['eccp_settings_activate_customizing_color_palette_checkbox_field'] ?: false;
    
	?>
	
        <input id="<?php echo esc_attr( $args['label_for'] ); ?>" type="checkbox" name="eccp_multiple_setting[eccp_settings_activate_customizing_color_palette_checkbox_field]" <?php checked( $checked ); ?> >
        <span><?php echo esc_html( $args['description'] ); ?></span>
		
    <?php
	
	echo'<br><br>';
	
}

/* Affiche le paramètre de champ select pour choisir le nombre de couleurs de la palette  */
function eccp_settings_number_colors_select_field_markup( $args ){
	
    $settings  = get_option( 'eccp_multiple_setting' ); // le nom du réglage passé a la fonction register_setting()
    $selected = ! empty( $settings['eccp_settings_number_colors_select_field'] ) ? $settings['eccp_settings_number_colors_select_field'] : '12';// ID du champ
    
	?>
	
        <select name="eccp_multiple_setting[eccp_settings_number_colors_select_field]">
		
            <option value=""><?php esc_html_e( 'Choose an option', 'editor-custom-color-palette' ); ?></option>
			
            <!-- On obtiend les valeurs passées dans un tableau d'options  -->
            <?php foreach ( $args['options'] as $value => $label ) : ?>
                <option value="<?php echo esc_attr( $value ); ?>" <?php selected( $selected, $value ); ?>><?php echo esc_html( $label ); ?></option>
            <?php endforeach; ?>
			
        </select>
		
    <?php
	
	echo '<div class="mise-en-avant">';
	echo esc_html__( 'According to your choice for the number of color.','editor-custom-color-palette' );
	echo '<br>';
	echo esc_html__( 'Choice of 7 colors: enter colors 1 to 7 below','editor-custom-color-palette' );
	echo '<br>';
	echo esc_html__( 'Choice of 8 colors: enter colors 1 to 8 below','editor-custom-color-palette' );
	echo'<br>';
	echo esc_html__( 'etc ...','editor-custom-color-palette' );  
	echo'<br><br>';
	echo '</div>';
	echo'<br>';
	
}	


/* -------------------  AFFICHE LES PARAMÈTRES DE CHAMP POUR LA COULEUR N°1 ----------------------------------*/

// Affiche le paramètre de champ texte pour renseigner la couleur N°1
function eccp_settings_color_one_text_field_markup( $args ){
	
    $settings = get_option( 'eccp_multiple_setting' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $settings['eccp_settings_color_one_text_field'] ) ? $settings['eccp_settings_color_one_text_field'] : '';
    ?>
        <input class="color-field" type="text" name="eccp_multiple_setting[eccp_settings_color_one_text_field]" data-default-color = "<?php echo esc_attr( '#F37020' ); ?>"  value="<?php echo esc_attr( $value ); ?>">
    <?php

}

// Affiche le paramètre de champ texte pour renseigner l'opacité de la couleur N°1
  function eccp_settings_opacity_color_one_text_field_markup( $args ){
	
    $settings = get_option( 'eccp_multiple_setting' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $settings['eccp_settings_opacity_color_one_text_field'] ) ?  $settings['eccp_settings_opacity_color_one_text_field'] : '0';// un 0 par défaut pour une chaine vide afin de traiter la transparence
    
	// l'expression régulière: ([1-9]?[0-9])|100 de l'input définit un entier de 0 à 100 (sans 00, 01...) mais l'enregistrement du caractère 0 donne une chaine vide en base de donnée
	?>
        <input style="width:40px" size="3" maxlength="3" class="regular-text" type="text" pattern="([1-9]?[0-9])|100" name="eccp_multiple_setting[eccp_settings_opacity_color_one_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
    <?php
	    
} 

// Affiche le paramètre de champ texte pour renseigner le nom de la couleur N°1
  function eccp_settings_name_color_one_text_field_markup( $args ){
	
    $settings = get_option( 'eccp_multiple_setting' );// le nom du réglage passé a la fonction register_setting()
	
	
    $value   = ! empty( $settings['eccp_settings_name_color_one_text_field'] ) ?  esc_html__($settings['eccp_settings_name_color_one_text_field'],'editor-custom-color-palette') : 'primary color';
    ?>
        <input style="width:180px" size="25" maxlength="25" class="regular-text" type="text" name="eccp_multiple_setting[eccp_settings_name_color_one_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
    <?php
	    
} 

// Affiche le paramètre de champ texte pour renseigner le slug de la couleur N°1
// le champ a l'attribut readonly pour éviter la saisie mais la valeur est quand même renvoyé vers le serveur
  function eccp_settings_slug_color_one_text_field_markup( $args ){
	
    $settings = get_option( 'eccp_multiple_setting' );// le nom du réglage passé a la fonction register_setting()
	$value  = ! empty( $settings['eccp_settings_name_color_one_text_field'] ) ?  eccp_sanitize_chain( esc_html__($settings['eccp_settings_name_color_one_text_field'],'editor-custom-color-palette') ) : 'primary-color';
	//echo '.has-'.$value.'-background-color{background-color:'.$settings['eccp_settings_color_one_text_field'].'}';
	
    
    ?>
        <input style="width:180px" size="25" maxlength="25" class="regular-text" type="text" readonly="readonly" name="eccp_multiple_setting[eccp_settings_slug_color_one_text_field]"  value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
    <?php
	
	echo'<br><br><br>';
} 

/* -------------------  AFFICHE LES PARAMÈTRES DE CHAMP POUR LA COULEUR N°2 ----------------------------------*/

// Affiche le paramètre de champ texte pour renseigner la couleur N°2
function eccp_settings_color_two_text_field_markup( $args ){
	
    $settings = get_option( 'eccp_multiple_setting' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $settings['eccp_settings_color_two_text_field'] ) ? $settings['eccp_settings_color_two_text_field'] : '';
    ?>
        <input class="color-field" type="text" name="eccp_multiple_setting[eccp_settings_color_two_text_field]" data-default-color = "<?php echo esc_attr( '#B84331' ); ?>" value="<?php echo esc_attr( $value ); ?>">
    <?php

}

// Affiche le paramètre de champ texte pour renseigner l'opacité de la couleur N°2
  function eccp_settings_opacity_color_two_text_field_markup( $args ){
	
    $settings = get_option( 'eccp_multiple_setting' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $settings['eccp_settings_opacity_color_two_text_field'] ) ?  $settings['eccp_settings_opacity_color_two_text_field'] : '0';
    
	// l'expression régulière: ([1-9]?[0-9])|100 de l'input définit un entier de 0 à 100 (sans 00, 01...)
	?>
        <input style="width:40px" size="3" maxlength="3" class="regular-text" type="text" pattern="([1-9]?[0-9])|100" name="eccp_multiple_setting[eccp_settings_opacity_color_two_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
    <?php
	    
} 

// Affiche le paramètre de champ texte pour renseigner le nom de la couleur N°2
  function eccp_settings_name_color_two_text_field_markup( $args ){
	
    $settings = get_option( 'eccp_multiple_setting' );// le nom du réglage passé a la fonction register_setting()
	
	
    $value   = ! empty( $settings['eccp_settings_name_color_two_text_field'] ) ?  esc_html__($settings['eccp_settings_name_color_two_text_field'],'editor-custom-color-palette') : 'secondary color';
    ?>
        <input style="width:180px" size="25" maxlength="25" class="regular-text" type="text" name="eccp_multiple_setting[eccp_settings_name_color_two_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
    <?php
	    
} 

// Affiche le paramètre de champ texte pour renseigner le slug de la couleur N°2
  function eccp_settings_slug_color_two_text_field_markup( $args ){
	
    $settings = get_option( 'eccp_multiple_setting' );// le nom du réglage passé a la fonction register_setting()
	$value  = ! empty( $settings['eccp_settings_name_color_two_text_field'] ) ?  eccp_sanitize_chain( esc_html__($settings['eccp_settings_name_color_two_text_field'],'editor-custom-color-palette') ) : 'secondary-color';
	
    
    ?>
        <input style="width:180px" size="25" maxlength="25" class="regular-text" type="text" readonly="readonly" name="eccp_multiple_setting[eccp_settings_slug_color_two_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
    <?php
	 
	echo'<br><br><br>'; 
} 

/* -------------------  AFFICHE LES PARAMÈTRES DE CHAMP POUR LA COULEUR N°3 ----------------------------------*/

// Affiche le paramètre de champ texte pour renseigner la couleur N°3
function eccp_settings_color_three_text_field_markup( $args ){
	
    $settings = get_option( 'eccp_multiple_setting' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $settings['eccp_settings_color_three_text_field'] ) ? $settings['eccp_settings_color_three_text_field'] : '';
    ?>
        <input class="color-field" type="text" name="eccp_multiple_setting[eccp_settings_color_three_text_field]" data-default-color = "<?php echo esc_attr( '#666666' ); ?>" value="<?php echo esc_attr( $value ); ?>">
    <?php

}

// Affiche le paramètre de champ texte pour renseigner l'opacité de la couleur N°3
  function eccp_settings_opacity_color_three_text_field_markup( $args ){
	
    $settings = get_option( 'eccp_multiple_setting' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $settings['eccp_settings_opacity_color_three_text_field'] ) ?  $settings['eccp_settings_opacity_color_three_text_field'] : '0';
    
	// l'expression régulière: ([1-9]?[0-9])|100 de l'input définit un entier de 0 à 100 (sans 00, 01...)
	?>
        <input style="width:40px" size="3" maxlength="3" class="regular-text" type="text" pattern="([1-9]?[0-9])|100" name="eccp_multiple_setting[eccp_settings_opacity_color_three_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
    <?php
	    
} 

// Affiche le paramètre de champ texte pour renseigner le nom de la couleur N°3
  function eccp_settings_name_color_three_text_field_markup( $args ){
	
    $settings = get_option( 'eccp_multiple_setting' );// le nom du réglage passé a la fonction register_setting()
	
	
    $value   = ! empty( $settings['eccp_settings_name_color_three_text_field'] ) ?  esc_html__($settings['eccp_settings_name_color_three_text_field'],'editor-custom-color-palette') : 'accent color';
    ?>
        <input style="width:180px" size="25" maxlength="25" class="regular-text" type="text" name="eccp_multiple_setting[eccp_settings_name_color_three_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
    <?php
	    
} 

// Affiche le paramètre de champ texte pour renseigner le slug de la couleur N°3
  function eccp_settings_slug_color_three_text_field_markup( $args ){
	
    $settings = get_option( 'eccp_multiple_setting' );// le nom du réglage passé a la fonction register_setting()
	$value  = ! empty( $settings['eccp_settings_name_color_three_text_field'] ) ?  eccp_sanitize_chain( esc_html__($settings['eccp_settings_name_color_three_text_field'],'editor-custom-color-palette') ) : 'accent-color';
	
    
    ?>
        <input style="width:180px" size="25" maxlength="25" class="regular-text" type="text" readonly="readonly" name="eccp_multiple_setting[eccp_settings_slug_color_three_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
    <?php
	 
	echo'<br><br><br>'; 
} 

/* -------------------  AFFICHE LES PARAMÈTRES DE CHAMP POUR LA COULEUR N°4 ----------------------------------*/

// Affiche le paramètre de champ texte pour renseigner la couleur N°4
function eccp_settings_color_four_text_field_markup( $args ){
	
    $settings = get_option( 'eccp_multiple_setting' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $settings['eccp_settings_color_four_text_field'] ) ? $settings['eccp_settings_color_four_text_field'] : '';
    ?>
        <input class="color-field" type="text" name="eccp_multiple_setting[eccp_settings_color_four_text_field]" data-default-color = "<?php echo esc_attr( '#0E6487' ); ?>"  value="<?php echo esc_attr( $value ); ?>">
    <?php

}

// Affiche le paramètre de champ texte pour renseigner l'opacité de la couleur N°4
  function eccp_settings_opacity_color_four_text_field_markup( $args ){
	
    $settings = get_option( 'eccp_multiple_setting' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $settings['eccp_settings_opacity_color_four_text_field'] ) ?  $settings['eccp_settings_opacity_color_four_text_field'] : '0';
    
	// l'expression régulière: ([1-9]?[0-9])|100 de l'input définit un entier de 0 à 100 (sans 00, 01...)
	?>
        <input style="width:40px" size="3" maxlength="3" class="regular-text" type="text" pattern="([1-9]?[0-9])|100" name="eccp_multiple_setting[eccp_settings_opacity_color_four_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
    <?php
	    
} 

// Affiche le paramètre de champ texte pour renseigner le nom de la couleur N°4
  function eccp_settings_name_color_four_text_field_markup( $args ){
	
    $settings = get_option( 'eccp_multiple_setting' );// le nom du réglage passé a la fonction register_setting()
	
	
    $value   = ! empty( $settings['eccp_settings_name_color_four_text_field'] ) ?  esc_html__($settings['eccp_settings_name_color_four_text_field'],'editor-custom-color-palette') : 'title color';
    ?>
        <input style="width:180px" size="25" maxlength="25" class="regular-text" type="text" name="eccp_multiple_setting[eccp_settings_name_color_four_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
    <?php
	    
} 

// Affiche le paramètre de champ texte pour renseigner le slug de la couleur N°4
  function eccp_settings_slug_color_four_text_field_markup( $args ){
	
    $settings = get_option( 'eccp_multiple_setting' );// le nom du réglage passé a la fonction register_setting()
	$value  = ! empty( $settings['eccp_settings_name_color_four_text_field'] ) ?  eccp_sanitize_chain( esc_html__($settings['eccp_settings_name_color_four_text_field'],'editor-custom-color-palette') ) : 'title-color';
	
   
    ?>
        <input style="width:180px" size="25" maxlength="25" class="regular-text" type="text" readonly="readonly" name="eccp_multiple_setting[eccp_settings_slug_color_four_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
    <?php
	 
	echo'<br><br><br>'; 
} 

/* -------------------  AFFICHE LES PARAMÈTRES DE CHAMP POUR LA COULEUR N°5 ----------------------------------*/

// Affiche le paramètre de champ texte pour renseigner la couleur N°5
function eccp_settings_color_five_text_field_markup( $args ){
	
    $settings = get_option( 'eccp_multiple_setting' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $settings['eccp_settings_color_five_text_field'] ) ? $settings['eccp_settings_color_five_text_field'] : '';
    ?>
        <input class="color-field" type="text" name="eccp_multiple_setting[eccp_settings_color_five_text_field]" data-default-color = "<?php echo esc_attr( '#333333' ); ?>"  value="<?php echo esc_attr( $value ); ?>">
    <?php

}

// Affiche le paramètre de champ texte pour renseigner l'opacité de la couleur N°5
  function eccp_settings_opacity_color_five_text_field_markup( $args ){
	
    $settings = get_option( 'eccp_multiple_setting' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $settings['eccp_settings_opacity_color_five_text_field'] ) ?  $settings['eccp_settings_opacity_color_five_text_field'] : '0';
    
	// l'expression régulière: ([1-9]?[0-9])|100 de l'input définit un entier de 0 à 100 (sans 00, 01...)
	?>
        <input style="width:40px" size="3" maxlength="3" class="regular-text" type="text" pattern="([1-9]?[0-9])|100" name="eccp_multiple_setting[eccp_settings_opacity_color_five_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
    <?php
	    
} 

// Affiche le paramètre de champ texte pour renseigner le nom de la couleur N°5
  function eccp_settings_name_color_five_text_field_markup( $args ){
	
    $settings = get_option( 'eccp_multiple_setting' );// le nom du réglage passé a la fonction register_setting()
	
	
    $value   = ! empty( $settings['eccp_settings_name_color_five_text_field'] ) ?  esc_html__($settings['eccp_settings_name_color_five_text_field'],'editor-custom-color-palette') : 'text color';
    ?>
        <input style="width:180px" size="25" maxlength="25" class="regular-text" type="text" name="eccp_multiple_setting[eccp_settings_name_color_five_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
    <?php
	    
} 

// Affiche le paramètre de champ texte pour renseigner le slug de la couleur N°5
  function eccp_settings_slug_color_five_text_field_markup( $args ){
	
    $settings = get_option( 'eccp_multiple_setting' );// le nom du réglage passé a la fonction register_setting()
	$value  = ! empty( $settings['eccp_settings_name_color_five_text_field'] ) ?  eccp_sanitize_chain( esc_html__($settings['eccp_settings_name_color_five_text_field'],'editor-custom-color-palette') ) : 'text-color';
	
 
    ?>
        <input style="width:180px" size="25" maxlength="25" class="regular-text" type="text" readonly="readonly" name="eccp_multiple_setting[eccp_settings_slug_color_five_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
    <?php
	 
	echo'<br><br><br>'; 
} 

/* -------------------  AFFICHE LES PARAMÈTRES DE CHAMP POUR LA COULEUR N°6 ----------------------------------*/

// Affiche le paramètre de champ texte pour renseigner la couleur N°6
function eccp_settings_color_six_text_field_markup( $args ){
	
    $settings = get_option( 'eccp_multiple_setting' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $settings['eccp_settings_color_six_text_field'] ) ? $settings['eccp_settings_color_six_text_field'] : '';
    ?>
        <input class="color-field" type="text" name="eccp_multiple_setting[eccp_settings_color_six_text_field]" data-default-color = "<?php echo esc_attr( '#F0F2F6' ); ?>" value="<?php echo esc_attr( $value ); ?>">
    <?php

}

// Affiche le paramètre de champ texte pour renseigner l'opacité de la couleur N°6
  function eccp_settings_opacity_color_six_text_field_markup( $args ){
	
    $settings = get_option( 'eccp_multiple_setting' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $settings['eccp_settings_opacity_color_six_text_field'] ) ?  $settings['eccp_settings_opacity_color_six_text_field'] : '0';
    
	// l'expression régulière: ([1-9]?[0-9])|100 de l'input définit un entier de 0 à 100 (sans 00, 01...)
	?>
        <input style="width:40px" size="3" maxlength="3" class="regular-text" type="text" pattern="([1-9]?[0-9])|100" name="eccp_multiple_setting[eccp_settings_opacity_color_six_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
    <?php
	    
} 

// Affiche le paramètre de champ texte pour renseigner le nom de la couleur N°6
  function eccp_settings_name_color_six_text_field_markup( $args ){
	
    $settings = get_option( 'eccp_multiple_setting' );// le nom du réglage passé a la fonction register_setting()
	
	
    $value   = ! empty( $settings['eccp_settings_name_color_six_text_field'] ) ?  esc_html__($settings['eccp_settings_name_color_six_text_field'],'editor-custom-color-palette') : 'light off-white';
    ?>
        <input style="width:180px" size="25" maxlength="25" class="regular-text" type="text" name="eccp_multiple_setting[eccp_settings_name_color_six_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
    <?php
	    
} 

// Affiche le paramètre de champ texte pour renseigner le slug de la couleur N°6
  function eccp_settings_slug_color_six_text_field_markup( $args ){
	
    $settings = get_option( 'eccp_multiple_setting' );// le nom du réglage passé a la fonction register_setting()
	$value  = ! empty( $settings['eccp_settings_name_color_six_text_field'] ) ?  eccp_sanitize_chain( esc_html__($settings['eccp_settings_name_color_six_text_field'],'editor-custom-color-palette') ) : 'light-off-white';
	
  
    ?>
        <input style="width:180px" size="25" maxlength="25" class="regular-text" type="text" readonly="readonly" name="eccp_multiple_setting[eccp_settings_slug_color_six_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
    <?php
	 
	echo'<br><br><br>'; 
} 

/* -------------------  AFFICHE LES PARAMÈTRES DE CHAMP POUR LA COULEUR N°7 ----------------------------------*/

// Affiche le paramètre de champ texte pour renseigner la couleur N°7
function eccp_settings_color_seven_text_field_markup( $args ){
	
    $settings = get_option( 'eccp_multiple_setting' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $settings['eccp_settings_color_seven_text_field'] ) ? $settings['eccp_settings_color_seven_text_field'] : '';
    ?>
        <input class="color-field" type="text" name="eccp_multiple_setting[eccp_settings_color_seven_text_field]" data-default-color = "<?php echo esc_attr( '#E6E8ED' ); ?>" value="<?php echo esc_attr( $value ); ?>">
    <?php

}

// Affiche le paramètre de champ texte pour renseigner l'opacité de la couleur N°7
  function eccp_settings_opacity_color_seven_text_field_markup( $args ){
	
    $settings = get_option( 'eccp_multiple_setting' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $settings['eccp_settings_opacity_color_seven_text_field'] ) ?  $settings['eccp_settings_opacity_color_seven_text_field'] : '0';
    
	// l'expression régulière: ([1-9]?[0-9])|100 de l'input définit un entier de 0 à 100 (sans 00, 01...)
	?>
        <input style="width:40px" size="3" maxlength="3" class="regular-text" type="text" pattern="([1-9]?[0-9])|100" name="eccp_multiple_setting[eccp_settings_opacity_color_seven_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
    <?php
	    
} 

// Affiche le paramètre de champ texte pour renseigner le nom de la couleur N°7
  function eccp_settings_name_color_seven_text_field_markup( $args ){
	
    $settings = get_option( 'eccp_multiple_setting' );// le nom du réglage passé a la fonction register_setting()
	
	
    $value   = ! empty( $settings['eccp_settings_name_color_seven_text_field'] ) ?  esc_html__($settings['eccp_settings_name_color_seven_text_field'],'editor-custom-color-palette') : 'dark off-white';
    ?>
        <input style="width:180px" size="25" maxlength="25" class="regular-text" type="text" name="eccp_multiple_setting[eccp_settings_name_color_seven_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
    <?php
	    
} 

// Affiche le paramètre de champ texte pour renseigner le slug de la couleur N°7
  function eccp_settings_slug_color_seven_text_field_markup( $args ){
	
    $settings = get_option( 'eccp_multiple_setting' );// le nom du réglage passé a la fonction register_setting()
	$value  = ! empty( $settings['eccp_settings_name_color_seven_text_field'] ) ?  eccp_sanitize_chain( esc_html__($settings['eccp_settings_name_color_seven_text_field'],'editor-custom-color-palette') ) : 'dark-off-white';
	
    
    ?>
        <input style="width:180px" size="25" maxlength="25" class="regular-text" type="text" readonly="readonly" name="eccp_multiple_setting[eccp_settings_slug_color_seven_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
    <?php
	 
	echo'<br><br><br>'; 
} 

/* -------------------  AFFICHE LES PARAMÈTRES DE CHAMP POUR LA COULEUR N°8 ----------------------------------*/

// Affiche le paramètre de champ texte pour renseigner la couleur N°8
function eccp_settings_color_eight_text_field_markup( $args ){
	
    $settings = get_option( 'eccp_multiple_setting' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $settings['eccp_settings_color_eight_text_field'] ) ? $settings['eccp_settings_color_eight_text_field'] : '';
    ?>
        <input class="color-field" type="text" name="eccp_multiple_setting[eccp_settings_color_eight_text_field]" data-default-color = "<?php echo esc_attr( '#FFFFFF' ); ?>" value="<?php echo esc_attr( $value ); ?>">
    <?php

}

// Affiche le paramètre de champ texte pour renseigner l'opacité de la couleur N°8
  function eccp_settings_opacity_color_eight_text_field_markup( $args ){
	
    $settings = get_option( 'eccp_multiple_setting' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $settings['eccp_settings_opacity_color_eight_text_field'] ) ?  $settings['eccp_settings_opacity_color_eight_text_field'] : '0';
    
	// l'expression régulière: ([1-9]?[0-9])|100 de l'input définit un entier de 0 à 100 (sans 00, 01...)
	?>
        <input style="width:40px" size="3" maxlength="3" class="regular-text" type="text" pattern="([1-9]?[0-9])|100" name="eccp_multiple_setting[eccp_settings_opacity_color_eight_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
    <?php
	    
} 

// Affiche le paramètre de champ texte pour renseigner le nom de la couleur N°8
  function eccp_settings_name_color_eight_text_field_markup( $args ){
	
    $settings = get_option( 'eccp_multiple_setting' );// le nom du réglage passé a la fonction register_setting()
	
	
    $value   = ! empty( $settings['eccp_settings_name_color_eight_text_field'] ) ?  esc_html__($settings['eccp_settings_name_color_eight_text_field'],'editor-custom-color-palette') : 'white';
    ?>
        <input style="width:180px" size="25" maxlength="25" class="regular-text" type="text" name="eccp_multiple_setting[eccp_settings_name_color_eight_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
    <?php
	    
} 

// Affiche le paramètre de champ texte pour renseigner le slug de la couleur N°8
  function eccp_settings_slug_color_eight_text_field_markup( $args ){
	
    $settings = get_option( 'eccp_multiple_setting' );// le nom du réglage passé a la fonction register_setting()
	$value  = ! empty( $settings['eccp_settings_name_color_eight_text_field'] ) ?  eccp_sanitize_chain( esc_html__($settings['eccp_settings_name_color_eight_text_field'],'editor-custom-color-palette') ) : 'white';
	
    
    ?>
        <input style="width:180px" size="25" maxlength="25" class="regular-text" type="text" readonly="readonly" name="eccp_multiple_setting[eccp_settings_slug_color_eight_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
    <?php
	 
	echo'<br><br><br>'; 
} 

/* -------------------  AFFICHE LES PARAMÈTRES DE CHAMP POUR LA COULEUR N°9 ----------------------------------*/

// Affiche le paramètre de champ texte pour renseigner la couleur N°9
function eccp_settings_color_nine_text_field_markup( $args ){
	
    $settings = get_option( 'eccp_multiple_setting' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $settings['eccp_settings_color_nine_text_field'] ) ? $settings['eccp_settings_color_nine_text_field'] : '';
    ?>
        <input class="color-field" type="text" name="eccp_multiple_setting[eccp_settings_color_nine_text_field]"  data-default-color = "<?php echo esc_attr( '#8FB63F' ); ?>" value="<?php echo esc_attr( $value ); ?>">
    <?php

}

// Affiche le paramètre de champ texte pour renseigner l'opacité de la couleur N°9
  function eccp_settings_opacity_color_nine_text_field_markup( $args ){
	
    $settings = get_option( 'eccp_multiple_setting' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $settings['eccp_settings_opacity_color_nine_text_field'] ) ?  $settings['eccp_settings_opacity_color_nine_text_field'] : '0';
    
	// l'expression régulière: ([1-9]?[0-9])|100 de l'input définit un entier de 0 à 100 (sans 00, 01...)
	?>
        <input style="width:40px" size="3" maxlength="3" class="regular-text" type="text" pattern="([1-9]?[0-9])|100" name="eccp_multiple_setting[eccp_settings_opacity_color_nine_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
    <?php
	    
} 

// Affiche le paramètre de champ texte pour renseigner le nom de la couleur N°9
  function eccp_settings_name_color_nine_text_field_markup( $args ){
	
    $settings = get_option( 'eccp_multiple_setting' );// le nom du réglage passé a la fonction register_setting()
	
	
    $value   = ! empty( $settings['eccp_settings_name_color_nine_text_field'] ) ?  esc_html__($settings['eccp_settings_name_color_nine_text_field'],'editor-custom-color-palette') : 'green';
    ?>
        <input style="width:180px" size="25" maxlength="25" class="regular-text" type="text" name="eccp_multiple_setting[eccp_settings_name_color_nine_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
    <?php
	    
} 

// Affiche le paramètre de champ texte pour renseigner le slug de la couleur N°9
  function eccp_settings_slug_color_nine_text_field_markup( $args ){
	
    $settings = get_option( 'eccp_multiple_setting' );// le nom du réglage passé a la fonction register_setting()
	$value  = ! empty( $settings['eccp_settings_name_color_nine_text_field'] ) ?  eccp_sanitize_chain( esc_html__($settings['eccp_settings_name_color_nine_text_field'],'editor-custom-color-palette') ) : 'green';
	
    
    ?>
        <input style="width:180px" size="25" maxlength="25" class="regular-text" type="text" readonly="readonly" name="eccp_multiple_setting[eccp_settings_slug_color_nine_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
    <?php
	 
	echo'<br><br><br>'; 
} 


/* -------------------  AFFICHE LES PARAMÈTRES DE CHAMP POUR LA COULEUR N°10 ----------------------------------*/

// Affiche le paramètre de champ texte pour renseigner la couleur N°10
function eccp_settings_color_ten_text_field_markup( $args ){
	
    $settings = get_option( 'eccp_multiple_setting' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $settings['eccp_settings_color_ten_text_field'] ) ? $settings['eccp_settings_color_ten_text_field'] : '';
    ?>
        <input class="color-field" type="text" name="eccp_multiple_setting[eccp_settings_color_ten_text_field]" data-default-color = "<?php echo esc_attr( '#8FB63F' ); ?>" value="<?php echo esc_attr( $value ); ?>">
    <?php

}

// Affiche le paramètre de champ texte pour renseigner l'opacité de la couleur N°10
  function eccp_settings_opacity_color_ten_text_field_markup( $args ){
	
    $settings = get_option( 'eccp_multiple_setting' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $settings['eccp_settings_opacity_color_ten_text_field'] ) ?  $settings['eccp_settings_opacity_color_ten_text_field'] : '0';
    
	// l'expression régulière: ([1-9]?[0-9])|100 de l'input définit un entier de 0 à 100 (sans 00, 01...)
	?>
        <input style="width:40px" size="3" maxlength="3" class="regular-text" type="text" pattern="([1-9]?[0-9])|100" name="eccp_multiple_setting[eccp_settings_opacity_color_ten_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
    <?php
	    
} 

// Affiche le paramètre de champ texte pour renseigner le nom de la couleur N°10
  function eccp_settings_name_color_ten_text_field_markup( $args ){
	
    $settings = get_option( 'eccp_multiple_setting' );// le nom du réglage passé a la fonction register_setting()
	
	
    $value   = ! empty( $settings['eccp_settings_name_color_ten_text_field'] ) ?  esc_html__($settings['eccp_settings_name_color_ten_text_field'],'editor-custom-color-palette') : 'light green';
    ?>
        <input style="width:180px" size="25" maxlength="25" class="regular-text" type="text" name="eccp_multiple_setting[eccp_settings_name_color_ten_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
    <?php
	    
} 

// Affiche le paramètre de champ texte pour renseigner le slug de la couleur N°10
  function eccp_settings_slug_color_ten_text_field_markup( $args ){
	
    $settings = get_option( 'eccp_multiple_setting' );// le nom du réglage passé a la fonction register_setting()
	$value  = ! empty( $settings['eccp_settings_name_color_ten_text_field'] ) ?  eccp_sanitize_chain( esc_html__($settings['eccp_settings_name_color_ten_text_field'],'editor-custom-color-palette') ) : 'light-green';
	
    
    ?>
        <input style="width:180px" size="25" maxlength="25" class="regular-text" type="text" readonly="readonly" name="eccp_multiple_setting[eccp_settings_slug_color_ten_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
    <?php
	 
	echo'<br><br><br>'; 
}

/* -------------------  AFFICHE LES PARAMÈTRES DE CHAMP POUR LA COULEUR N°11 ----------------------------------*/

// Affiche le paramètre de champ texte pour renseigner la couleur N°11
function eccp_settings_color_eleven_text_field_markup( $args ){
	
    $settings = get_option( 'eccp_multiple_setting' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $settings['eccp_settings_color_eleven_text_field'] ) ? $settings['eccp_settings_color_eleven_text_field'] : '';
    ?>
        <input class="color-field" type="text" name="eccp_multiple_setting[eccp_settings_color_eleven_text_field]" data-default-color = "<?php echo esc_attr( '#FF0000' ); ?>" value="<?php echo esc_attr( $value ); ?>">
    <?php

}

// Affiche le paramètre de champ texte pour renseigner l'opacité de la couleur N°11
  function eccp_settings_opacity_color_eleven_text_field_markup( $args ){
	
    $settings = get_option( 'eccp_multiple_setting' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $settings['eccp_settings_opacity_color_eleven_text_field'] ) ?  $settings['eccp_settings_opacity_color_eleven_text_field'] : '0';
    
	// l'expression régulière: ([1-9]?[0-9])|100 de l'input définit un entier de 0 à 100 (sans 00, 01...)
	?>
        <input style="width:40px" size="3" maxlength="3" class="regular-text" type="text" pattern="([1-9]?[0-9])|100" name="eccp_multiple_setting[eccp_settings_opacity_color_eleven_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
    <?php
	    
} 

// Affiche le paramètre de champ texte pour renseigner le nom de la couleur N°11
  function eccp_settings_name_color_eleven_text_field_markup( $args ){
	
    $settings = get_option( 'eccp_multiple_setting' );// le nom du réglage passé a la fonction register_setting()
	
	
    $value   = ! empty( $settings['eccp_settings_name_color_eleven_text_field'] ) ?  esc_html__($settings['eccp_settings_name_color_eleven_text_field'],'editor-custom-color-palette') : 'red';
    ?>
        <input style="width:180px" size="25" maxlength="25" class="regular-text" type="text" name="eccp_multiple_setting[eccp_settings_name_color_eleven_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
    <?php
	    
} 

// Affiche le paramètre de champ texte pour renseigner le slug de la couleur N°11
  function eccp_settings_slug_color_eleven_text_field_markup( $args ){
	
    $settings = get_option( 'eccp_multiple_setting' );// le nom du réglage passé a la fonction register_setting()
	$value  = ! empty( $settings['eccp_settings_name_color_eleven_text_field'] ) ?  eccp_sanitize_chain( esc_html__($settings['eccp_settings_name_color_eleven_text_field'],'editor-custom-color-palette') ) : 'red';
	
    
    ?>
        <input style="width:180px" size="25" maxlength="25" class="regular-text" type="text" readonly="readonly" name="eccp_multiple_setting[eccp_settings_slug_color_eleven_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
    <?php
	 
	echo'<br><br><br>'; 
}

/* -------------------  AFFICHE LES PARAMÈTRES DE CHAMP POUR LA COULEUR N°12 ----------------------------------*/

// Affiche le paramètre de champ texte pour renseigner la couleur N°12
function eccp_settings_color_twelve_text_field_markup( $args ){
	
    $settings = get_option( 'eccp_multiple_setting' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $settings['eccp_settings_color_twelve_text_field'] ) ? $settings['eccp_settings_color_twelve_text_field'] : '';
    ?>
        <input class="color-field" type="text" name="eccp_multiple_setting[eccp_settings_color_twelve_text_field]" data-default-color = "<?php echo esc_attr( '#F3E672' ); ?>" value="<?php echo esc_attr( $value ); ?>">
    <?php

}

// Affiche le paramètre de champ texte pour renseigner l'opacité de la couleur N°12
  function eccp_settings_opacity_color_twelve_text_field_markup( $args ){
	
    $settings = get_option( 'eccp_multiple_setting' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $settings['eccp_settings_opacity_color_twelve_text_field'] ) ?  $settings['eccp_settings_opacity_color_twelve_text_field'] : '0';
    
	// l'expression régulière: ([1-9]?[0-9])|100 de l'input définit un entier de 0 à 100 (sans 00, 01...)
	?>
        <input style="width:40px" size="3" maxlength="3" class="regular-text" type="text" pattern="([1-9]?[0-9])|100" name="eccp_multiple_setting[eccp_settings_opacity_color_twelve_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
    <?php
	    
} 

// Affiche le paramètre de champ texte pour renseigner le nom de la couleur N°12
  function eccp_settings_name_color_twelve_text_field_markup( $args ){
	
    $settings = get_option( 'eccp_multiple_setting' );// le nom du réglage passé a la fonction register_setting()
	
	
    $value   = ! empty( $settings['eccp_settings_name_color_twelve_text_field'] ) ?  esc_html__($settings['eccp_settings_name_color_twelve_text_field'],'editor-custom-color-palette') : 'light yellow';
    ?>
        <input style="width:180px" size="25" maxlength="25" class="regular-text" type="text" name="eccp_multiple_setting[eccp_settings_name_color_twelve_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
    <?php
	    
} 

// Affiche le paramètre de champ texte pour renseigner le slug de la couleur N°12
  function eccp_settings_slug_color_twelve_text_field_markup( $args ){
	
    $settings = get_option( 'eccp_multiple_setting' );// le nom du réglage passé a la fonction register_setting()
	$value  = ! empty( $settings['eccp_settings_name_color_twelve_text_field'] ) ?  eccp_sanitize_chain( esc_html__($settings['eccp_settings_name_color_twelve_text_field'],'editor-custom-color-palette') ) : 'light-yellow';
	
    
    ?>
        <input style="width:180px" size="25" maxlength="25" class="regular-text" type="text" readonly="readonly" name="eccp_multiple_setting[eccp_settings_slug_color_twelve_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
    <?php
	 

	echo '<h3 id="sub-title-editor-color-palette-two"><u>'. esc_html__( 'Disabling custom colors & gradients','editor-custom-color-palette' ).'</u></h3>';

}


/* ------------------- Affiche le paramètre de champ chexbox pour désactiver les couleurs & dégradés personnalisées -------------*/
 
// Affiche le paramètre de champ checkox pour désactiver les couleurs personnalisés
function eccp_settings_disabling_custom_colors_checkbox_field_markup( $args ){
    
	$settings = get_option( 'eccp_multiple_setting' );
	$checked = (bool) $settings['eccp_settings_disabling_custom_colors_checkbox_field'] ?: false;
    
	
	?>
	
        <input id="<?php echo esc_attr( $args['label_for'] ); ?>" type="checkbox" name="eccp_multiple_setting[eccp_settings_disabling_custom_colors_checkbox_field]" <?php checked( $checked ); ?> >
        <span><?php echo esc_html( $args['description'] ); ?></span>
		
    <?php
	
	echo'<br><br>';
	
}

// Affiche le paramètre de champ checkox pour désactiver les dégradés personnalisés
function eccp_settings_disabling_custom_gradients_checkbox_field_markup( $args ){
    
	$settings = get_option( 'eccp_multiple_setting' );
	$checked = (bool) $settings['eccp_settings_disabling_custom_gradients_checkbox_field'] ?: false;
    
	?>
	
        <input id="<?php echo esc_attr( $args['label_for'] ); ?>" type="checkbox" name="eccp_multiple_setting[eccp_settings_disabling_custom_gradients_checkbox_field]" <?php checked( $checked ); ?> >
        <span><?php echo esc_html( $args['description'] ); ?></span>
		
    <?php
	
	echo'<br><br><br>';
	
}


/* -------------------------------------- AFFICHAGE DES CHAMPS POUR LA 4ème SECTION EDITOR TEXT SIZE -----------------------------------------*/

// Affiche le paramètre de champ chexbox pour activer le réglage des tailles de texte  
function eccp_settings_activate_editor_text_size_checkbox_field_markup( $args ){
    
	$editor_text_size_settings = get_option( 'eccp_setting_editor_text_size' );
	$checked = (bool) $editor_text_size_settings['eccp_settings_activate_editor_text_size_checkbox_field'] ?: false;
    
	?>
	
        <input id="<?php echo esc_attr( $args['label_for'] ); ?>" type="checkbox" name="eccp_setting_editor_text_size[eccp_settings_activate_editor_text_size_checkbox_field]" <?php checked( $checked ); ?> >
        <span><?php echo esc_html( $args['description'] ); ?></span>
		
    <?php
	
	echo'<br><br>';
	
}

// Affiche le paramètre de champ texte pour renseigner la taille du texte small
// pattern="(([1-9]{1}[0-9]{0,1})"  pour autoriser seulemnt la saisie d'un numéro commençant par un chiffre de 1 à 9 suivi d'un chifrre ou pas de 0 à 9
  function eccp_settings_small_font_size_text_field_markup( $args ){
	
    $editor_text_size_settings = get_option( 'eccp_setting_editor_text_size' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $editor_text_size_settings['eccp_settings_small_font_size_text_field'] ) ?  $editor_text_size_settings['eccp_settings_small_font_size_text_field'] : '18';
    ?>  
        <input style="width:40px;" size="2" maxlength="2" class="regular-text" type="text" pattern="([1-9]{1}[0-9]{0,1})" name="eccp_setting_editor_text_size[eccp_settings_small_font_size_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
    <?php 
} 

// Affiche le paramètre de champ texte pour renseigner la taille du texte regular
  function eccp_settings_regular_font_size_text_field_markup( $args ){
	
    $editor_text_size_settings = get_option( 'eccp_setting_editor_text_size' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $editor_text_size_settings['eccp_settings_regular_font_size_text_field'] ) ?  $editor_text_size_settings['eccp_settings_regular_font_size_text_field'] : '20';
    ?>
        <input style="width:40px;" size="2" maxlength="2" class="regular-text" type="text" pattern="([1-9]?[0-9])" name="eccp_setting_editor_text_size[eccp_settings_regular_font_size_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
    <?php
	     
} 

// Affiche le paramètre de champ texte pour renseigner la taille du texte large
  function eccp_settings_large_font_size_text_field_markup( $args ){
	
    $editor_text_size_settings = get_option( 'eccp_setting_editor_text_size' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $editor_text_size_settings['eccp_settings_large_font_size_text_field'] ) ?  $editor_text_size_settings['eccp_settings_large_font_size_text_field'] : '24';
    ?>
        <input style="width:40px;" size="2" maxlength="2" class="regular-text" type="text" pattern="([1-9]{1}[0-9]{0,1})" name="eccp_setting_editor_text_size[eccp_settings_large_font_size_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
    <?php
	     
} 

// Affiche le paramètre de champ texte pour renseigner la taille du texte huge
  function eccp_settings_huge_font_size_text_field_markup( $args ){
	
    $editor_text_size_settings = get_option( 'eccp_setting_editor_text_size' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $editor_text_size_settings['eccp_settings_huge_font_size_text_field'] ) ?  $editor_text_size_settings['eccp_settings_huge_font_size_text_field'] : '36';
    ?>
        <input style="width:40px;" size="2" maxlength="2" class="regular-text" type="text" pattern="([1-9]{1}[0-9]{0,1})" name="eccp_setting_editor_text_size[eccp_settings_huge_font_size_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
    <?php
	
	echo'<br><br>';
	     
} 


// Affiche le paramètre de champ chexbox pour activer la typographie fluide
function eccp_settings_enable_fluid_typography_checkbox_field_markup( $args ){
    
	$editor_text_size_settings = get_option( 'eccp_setting_editor_text_size' );
	$checked = (bool) $editor_text_size_settings['eccp_settings_enable_fluid_typography_checkbox_field'] ?: false;
    
	?>
	
        <input id="<?php echo esc_attr( $args['label_for'] ); ?>" type="checkbox" name="eccp_setting_editor_text_size[eccp_settings_enable_fluid_typography_checkbox_field]" <?php checked( $checked ); ?> >
        <span><?php echo esc_html( $args['description'] ); ?></span>
		
    <?php
	
	echo '<div style="width:40%;" class="mise-en-avant">';
	echo '<strong>';
	echo esc_html__( 'Fluid typography is typography that evolves proportionally depending on the screen size included by default in the resolution [480px 1000px].','editor-custom-color-palette' );
	echo'<br><br>';
	echo esc_html__( 'You can change the resolution [Min Max] from the Custom Editor tab, Fluid Spacing section.','editor-custom-color-palette' );
	echo'<br><br>';
	echo esc_html__( 'Smooth typography is active for predefined font size values (Large & Huge size).','editor-custom-color-palette' ); 
	echo'<br><br>';
	echo esc_html__( 'Set the font size for the predefined sizes (Large & Huge) below for Min resolution.','editor-custom-color-palette' ); 	
	echo '</strong>';
	echo '</div>';
	
}

// Affiche le paramètre de champ texte pour renseigner la taille Large sur écran mobile
  function eccp_settings_mobile_screen_large_font_size_text_field_markup( $args ){
	
    $editor_text_size_settings = get_option( 'eccp_setting_editor_text_size' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $editor_text_size_settings['eccp_settings_mobile_screen_large_font_size_text_field'] ) ?  $editor_text_size_settings['eccp_settings_mobile_screen_large_font_size_text_field'] : '20';
    ?>
        <input style="width:55px;" min="16" max="42" class="regular-text" type="number" name="eccp_setting_editor_text_size[eccp_settings_mobile_screen_large_font_size_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
    <?php
	  
}

// Affiche le paramètre de champ texte pour renseigner la taille Huge sur écran mobile
  function eccp_settings_mobile_screen_huge_font_size_text_field_markup( $args ){
	
    $editor_text_size_settings = get_option( 'eccp_setting_editor_text_size' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $editor_text_size_settings['eccp_settings_mobile_screen_huge_font_size_text_field'] ) ?  $editor_text_size_settings['eccp_settings_mobile_screen_huge_font_size_text_field'] : '24';
    ?>
        <input style="width:55px;" min="16" max="42" class="regular-text" type="number" name="eccp_setting_editor_text_size[eccp_settings_mobile_screen_huge_font_size_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
    <?php
	
	echo '<h3 id="sub-title-editor-text-size-two"><u>'. esc_html__( 'Default text size for the Gutenberg editor','editor-custom-color-palette' ).'</u></h3>';
	  
} 



// Affiche le paramètre de champ chexbox pour activer la taille de police par défaut pour l'editeur Gutenberg 
function eccp_settings_enable_default_gutenberg_editor_font_size_checkbox_field_markup( $args ){
    
	$editor_text_size_settings = get_option( 'eccp_setting_editor_text_size' );
	$checked = (bool) $editor_text_size_settings['eccp_settings_enable_default_gutenberg_editor_font_size_checkbox_field'] ?: false;
    
	?>
	
        <input id="<?php echo esc_attr( $args['label_for'] ); ?>" type="checkbox" name="eccp_setting_editor_text_size[eccp_settings_enable_default_gutenberg_editor_font_size_checkbox_field]" <?php checked( $checked ); ?> >
        <span><?php echo esc_html( $args['description'] ); ?></span>
		
    <?php
	
}

// Affiche le paramètre de champ texte pour renseigner la taille du texte par défaut pour l'editeur Gutenberg
  function eccp_settings_default_gutenberg_editor_font_size_text_field_markup( $args ){
	
    $editor_text_size_settings = get_option( 'eccp_setting_editor_text_size' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $editor_text_size_settings['eccp_settings_default_gutenberg_editor_font_size_text_field'] ) ?  $editor_text_size_settings['eccp_settings_default_gutenberg_editor_font_size_text_field'] : '18';
    ?>
        <input style="width:55px;" min="16" max="25" class="regular-text" type="number" name="eccp_setting_editor_text_size[eccp_settings_default_gutenberg_editor_font_size_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
    <?php
	
	echo '<h3 id="sub-title-editor-text-size-three"><u>'. esc_html__( 'Disable the custom font size','editor-custom-color-palette' ).'</u></h3>';
	    
} 

// Affiche le paramètre de champ chexbox pour désactiver la taille de police personnalisée  
function eccp_settings_disable_custom_font_size_checkbox_field_markup( $args ){
    
	$editor_text_size_settings = get_option( 'eccp_setting_editor_text_size' );
	$checked = (bool) $editor_text_size_settings['eccp_settings_disable_custom_font_size_checkbox_field'] ?: false;
    
	?>
	
        <input id="<?php echo esc_attr( $args['label_for'] ); ?>" type="checkbox" name="eccp_setting_editor_text_size[eccp_settings_disable_custom_font_size_checkbox_field]" <?php checked( $checked ); ?> >
        <span><?php echo esc_html( $args['description'] ); ?></span>
		
    <?php
	
}


// Affiche le paramètre de champ chexbox pour activer la typographie fluide pour une taille de police personnalisée  
function eccp_settings_enable_fluid_custom_font_size_checkbox_field_markup( $args ){
    
	$editor_text_size_settings = get_option( 'eccp_setting_editor_text_size' );
	$checked = (bool) $editor_text_size_settings['eccp_settings_enable_fluid_custom_font_size_checkbox_field'] ?: false;
    
	?>
	
        <input id="<?php echo esc_attr( $args['label_for'] ); ?>" type="checkbox" name="eccp_setting_editor_text_size[eccp_settings_enable_fluid_custom_font_size_checkbox_field]" <?php checked( $checked ); ?> >
        <span><?php echo esc_html( $args['description'] ); ?></span>
		
    <?php
	
	echo '<div style="width:40%;" class="mise-en-avant">';
	echo '<strong>';
	echo esc_html__( 'For custom sizes Fluid typography is active for minimum and maximum window widths (768px and 1600px) set by default by WordPress.','editor-custom-color-palette' );
	echo'<br><br>';
	echo esc_html__( 'Furthermore, the minimum font size for a resolution <= 768px is automatically set by WordPress according to the custom size entered in the editor.','editor-custom-color-palette' ); 
	echo '</strong>';
	echo '</div>';
	
	echo'<br><br><br>';
	
}



/* -------------------------------------- AFFICHAGE DES CHAMPS POUR LA 5ème SECTION CUSTOM EDITOR GUTENBERG -----------------------------------------*/

// Affiche le paramètre de champ chexbox pour activer le mode plein écran de Gutenberg  
function eccp_settings_disable_fullscreen_gutenberg_editor_checkbox_field_markup( $args ){
    
	$custom_gutenberg_editor_settings = get_option( 'eccp_settings_custom_gutenberg_editor' );
	$checked = (bool) $custom_gutenberg_editor_settings['eccp_settings_disable_fullscreen_gutenberg_editor_checkbox_field'] ?: false;
    
	?>
	
        <input id="<?php echo esc_attr( $args['label_for'] ); ?>" type="checkbox" name="eccp_settings_custom_gutenberg_editor[eccp_settings_disable_fullscreen_gutenberg_editor_checkbox_field]" <?php checked( $checked ); ?> >
        <span><?php echo esc_html( $args['description'] ); ?></span>
		
    <?php

	echo '<h3 id="sub-title-custom-gutenberg-editor-two"><u>'. esc_html__( 'activate the default style sheet of Gutenberg blocks on Front End','editor-custom-color-palette' ).'</u></h3>';
}

// Affiche le paramètre de champ chexbox pour activer en front end la feuille de style par défaut des blocs Gutenberg  
function eccp_settings_activate_default_style_sheet_on_front_end_checkbox_field_markup( $args ){
    
	$custom_gutenberg_editor_settings = get_option( 'eccp_settings_custom_gutenberg_editor' );
	$checked = (bool) $custom_gutenberg_editor_settings['eccp_settings_activate_default_style_sheet_on_front_end_checkbox_field'] ?: false;
    
	?>
	
        <input id="<?php echo esc_attr( $args['label_for'] ); ?>" type="checkbox" name="eccp_settings_custom_gutenberg_editor[eccp_settings_activate_default_style_sheet_on_front_end_checkbox_field]" <?php checked( $checked ); ?> >
        <span><?php echo esc_html( $args['description'] ); ?></span>
    <?php


	echo '<h3 id="sub-title-custom-gutenberg-editor-three"><u>'. esc_html__( 'align wide option for the block editor', 'editor-custom-color-palette' ).'</u></h3>';	
	echo '<img src="'.esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/custom-gutenberg-editor/align-wide.png">';
	
}

/* ------------ AFFICHAGE DES CHAMPS POUR UN ALIGNEMENT LARGE DE L'ÉDITEUR DE BLOCS -------------------*/

// Affiche le paramètre de champ chexbox pour activer l'alignement large pour l'editeur de blocs
function eccp_settings_activate_align_wide_block_editor_checkbox_field_markup( $args ){
    
	$custom_gutenberg_editor_settings = get_option( 'eccp_settings_custom_gutenberg_editor' );
	$checked = (bool) $custom_gutenberg_editor_settings['eccp_settings_activate_align_wide_block_editor_checkbox_field'] ?: false;
    
	?>
	
        <input id="<?php echo esc_attr( $args['label_for'] ); ?>" type="checkbox" name="eccp_settings_custom_gutenberg_editor[eccp_settings_activate_align_wide_block_editor_checkbox_field]" <?php checked( $checked ); ?> >
        <span><?php echo esc_html( $args['description'] ); ?></span>
		
    <?php
	

	echo '<h3 id="sub-title-custom-gutenberg-editor-four"><u>'. esc_html__( 'responsive embeds(for example integration vidéos YouTube)','editor-custom-color-palette' ).'</u></h3>';
	
	echo '<img src="'.esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/custom-gutenberg-editor/responsive-embeds.jpg" width="484" height="152">';	
	echo'<br><br>';
	echo '<img src="'.esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/custom-gutenberg-editor/embed-max-width.jpg" width="484" height="374">';	
	
}


/* ----------------- AFFICHER LES CHAMPS DE PARAMÈTRES POUR LES EMBEDS RESPONSIVES(EX Vidéos YouTube) --------------------*/

// Affiche le paramètre de champ chexbox pour activer les embeds responsive (ex: intégration vidéos YouTube)
function eccp_settings_activate_responsive_embeds_checkbox_field_markup( $args ){
    
	$custom_gutenberg_editor_settings = get_option( 'eccp_settings_custom_gutenberg_editor' );
	$checked = (bool) $custom_gutenberg_editor_settings['eccp_settings_activate_responsive_embeds_checkbox_field'] ?: false;
    
	?>
	
        <input id="<?php echo esc_attr( $args['label_for'] ); ?>" type="checkbox" name="eccp_settings_custom_gutenberg_editor[eccp_settings_activate_responsive_embeds_checkbox_field]" <?php checked( $checked ); ?> >
        <span><?php echo esc_html( $args['description'] ); ?></span>
		
    <?php
	
	echo'<br><br><br><br>';
	echo '<strong>'. esc_html__( 'Post default','editor-custom-color-palette' ).'</strong>';
	
}


// Affiche le paramètre de champ texte pour renseigner la largeur des vidéos intégrées pour les articles
  function eccp_settings_post_embed_max_width_text_field_markup( $args ){
	
    $custom_gutenberg_editor_settings = get_option( 'eccp_settings_custom_gutenberg_editor' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $custom_gutenberg_editor_settings['eccp_settings_post_embed_max_width_text_field'] ) ?  $custom_gutenberg_editor_settings['eccp_settings_post_embed_max_width_text_field'] : '';// 
    
	
	?>
        <input style="width:80px"  min="160" max="9999"  class="regular-text" type="number" name="eccp_settings_custom_gutenberg_editor[eccp_settings_post_embed_max_width_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
    <?php
	
	echo'<br><br><br>';
	echo '<strong>'. esc_html__( 'Page default','editor-custom-color-palette' ).'</strong>';
	
} 


// Affiche le paramètre de champ texte pour renseigner la largeur des vidéos intégrées pour les pages
  function eccp_settings_page_embed_max_width_text_field_markup( $args ){
	
    $custom_gutenberg_editor_settings = get_option( 'eccp_settings_custom_gutenberg_editor' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $custom_gutenberg_editor_settings['eccp_settings_page_embed_max_width_text_field'] ) ?  $custom_gutenberg_editor_settings['eccp_settings_page_embed_max_width_text_field'] : '';// 
    
	
	?>
        <input style="width:80px"  min="160" max="9999"  class="regular-text" type="number" name="eccp_settings_custom_gutenberg_editor[eccp_settings_page_embed_max_width_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
    <?php
	
	echo'<br><br><br>';
	echo '<strong>'. esc_html__( 'CPT: Custom Post Type','editor-custom-color-palette' ).'</strong>';
	
} 

// Affiche le paramètre de champ texte pour renseigner la largeur des vidéos intégrées pour les CPT
  function eccp_settings_cpt_embed_max_width_text_field_markup( $args ){
	
    $custom_gutenberg_editor_settings = get_option( 'eccp_settings_custom_gutenberg_editor' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $custom_gutenberg_editor_settings['eccp_settings_cpt_embed_max_width_text_field'] ) ?  $custom_gutenberg_editor_settings['eccp_settings_cpt_embed_max_width_text_field'] : '';// 
    
	
	?>
        <input style="width:80px"  min="160" max="9999"  class="regular-text" type="number" name="eccp_settings_custom_gutenberg_editor[eccp_settings_cpt_embed_max_width_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
    <?php
	
	echo'<br><br><br>';
	echo '<strong>'. esc_html__( 'corrective according to theme','editor-custom-color-palette' ).'</strong>';
	
	echo '<div class="mise-en-avant">';
	echo '<strong>';
	echo esc_html__( 'Correct according to the themes(example Divi, Astra)the problem of padding top and centered alignment of the videos on the front end.','editor-custom-color-palette' ); 
	echo '</strong>';
	echo '</div>';
	
} 


/* Affiche le paramètre de champ radio pour corriger selon les thèmes le problème 
   de marge interne haute et alignement centré des vidéos en front end .
   Attention ! ne prend pas les Majuscules pour les valeurs de champ.
   $args  Arguments(de type Array) passé a l'appel de la fonction 
   on fait correspondre l’attribut name HTML de notre champ qui est un tableau avec le nom 
   du réglage déclaré avec register_setting() soit eccp_settings_custom_gutenberg_editor */
   
function eccp_corrective_according_to_theme_radio_field_markup( $args ){
	
    $custom_gutenberg_editor_settings = get_option( 'eccp_settings_custom_gutenberg_editor' );
    $checked = ! empty( $custom_gutenberg_editor_settings['eccp_corrective_according_to_theme_radio_field'] ) ? $custom_gutenberg_editor_settings['eccp_corrective_according_to_theme_radio_field'] : 'no';
	?>
        <fieldset>
            <legend class="screen-reader-text"><?php esc_html_e( 'no', 'editor-custom-color-palette' ); ?></legend>
                <label for="settings_eccp_radio_option_1">
                    <input id="settings_eccp_radio_option_1" type="radio" name="eccp_settings_custom_gutenberg_editor[eccp_corrective_according_to_theme_radio_field]" value="no" <?php checked( $checked, 'no' ); ?>>
                    <?php esc_html_e( 'no', 'editor-custom-color-palette' ); ?>  <!--  label , text domain  -->
                </label>
                <br>
                <label for="settings_eccp_radio_option_2">
                    <input id="settings_eccp_radio_option_2" type="radio" name="eccp_settings_custom_gutenberg_editor[eccp_corrective_according_to_theme_radio_field]" value="yes" <?php checked( $checked, 'yes' ); ?>>
                    <?php esc_html_e( 'yes', 'editor-custom-color-palette' ); ?>
                </label>
        </fieldset>
		
    <?php
	
	
	echo '<h3 id="sub-title-custom-gutenberg-editor-five"><u>'. esc_html__( 'Editor max widths, match the editor width to your sites width.','editor-custom-color-palette' ).'</u></h3>';  

}





/* ----------------- AFFICHER LES CHAMPS DE PARAMÈTRES POUR LA LARGEUR DE L'ÉDITEUR --------------------*/

// Affiche le paramètre de champ chexbox pour activer le réglage de la largeur de l'editeur
function eccp_settings_activate_editor_width_checkbox_field_markup( $args ){
    
	$custom_gutenberg_editor_settings = get_option( 'eccp_settings_custom_gutenberg_editor' );
	$checked = (bool) $custom_gutenberg_editor_settings['eccp_settings_activate_editor_width_checkbox_field'] ?: false;
    
	?>
	
        <input id="<?php echo esc_attr( $args['label_for'] ); ?>" type="checkbox" name="eccp_settings_custom_gutenberg_editor[eccp_settings_activate_editor_width_checkbox_field]" <?php checked( $checked ); ?> >
        <span><?php echo esc_html( $args['description'] ); ?></span>
		
    <?php
	
}

// Affiche le paramètre de champ texte pour renseigner la largeur de l'editeur: petit modèle
  function eccp_settings_small_template_editor_text_field_markup( $args ){
	
    $custom_gutenberg_editor_settings = get_option( 'eccp_settings_custom_gutenberg_editor' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $custom_gutenberg_editor_settings['eccp_settings_small_template_editor_text_field'] ) ?  $custom_gutenberg_editor_settings['eccp_settings_small_template_editor_text_field'] : '';// 
    
	
	?>
        <input style="width:80px"  min="500"  class="regular-text" type="number" name="eccp_settings_custom_gutenberg_editor[eccp_settings_small_template_editor_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
    <?php
	    
} 

// Affiche le paramètre de champ texte pour renseigner la largeur de l'editeur: grand modèle
  function eccp_settings_large_template_editor_text_field_markup( $args ){
	
    $custom_gutenberg_editor_settings = get_option( 'eccp_settings_custom_gutenberg_editor' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $custom_gutenberg_editor_settings['eccp_settings_large_template_editor_text_field'] ) ?  $custom_gutenberg_editor_settings['eccp_settings_large_template_editor_text_field'] : '';// 
    
	
	?>
        <input style="width:80px"  min="840"  class="regular-text" type="number" name="eccp_settings_custom_gutenberg_editor[eccp_settings_large_template_editor_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
    <?php
	    
}

/* Affiche notre champ de réglage pour renseigner le modèle de largeur pour les articles */
function eccp_settings_post_template_editor_select_field_markup( $args ){
	
    $custom_gutenberg_editor_settings = get_option( 'eccp_settings_custom_gutenberg_editor' ); // le nom du réglage passé a la fonction register_setting()
    $selected = ! empty( $custom_gutenberg_editor_settings['eccp_settings_post_template_editor_select_field'] ) ? $custom_gutenberg_editor_settings['eccp_settings_post_template_editor_select_field'] : '';// ID du champ
    
	?>
	
        <select style="width:165px;" name="eccp_settings_custom_gutenberg_editor[eccp_settings_post_template_editor_select_field]">
		
            <option value=""><?php esc_html_e( 'Choose an option', 'editor-custom-color-palette' ); ?></option>
			
            <!-- On obtiend les valeurs passées dans un tableau d'options  -->
            <?php foreach ( $args['options'] as $value => $label ) : ?>
                <option value="<?php echo esc_attr( $value ); ?>" <?php selected( $selected, $value ); ?>><?php echo esc_html( $label ); ?></option>
            <?php endforeach; ?>
			
        </select>
		
    <?php
	
}


/* Affiche notre champ de réglage pour renseigner le modèle de largeur pour les pages */
function eccp_settings_page_template_editor_select_field_markup( $args ){
	
    $custom_gutenberg_editor_settings = get_option( 'eccp_settings_custom_gutenberg_editor' ); // le nom du réglage passé a la fonction register_setting()
    $selected = ! empty( $custom_gutenberg_editor_settings['eccp_settings_page_template_editor_select_field'] ) ? $custom_gutenberg_editor_settings['eccp_settings_page_template_editor_select_field'] : '';// ID du champ
    
	?>
	
        <select style="width:165px;" name="eccp_settings_custom_gutenberg_editor[eccp_settings_page_template_editor_select_field]">
		
            <option value=""><?php esc_html_e( 'Choose an option', 'editor-custom-color-palette' ); ?></option>
			
            <!-- On obtiend les valeurs passées dans un tableau d'options  -->
            <?php foreach ( $args['options'] as $value => $label ) : ?>
                <option value="<?php echo esc_attr( $value ); ?>" <?php selected( $selected, $value ); ?>><?php echo esc_html( $label ); ?></option>
            <?php endforeach; ?>
			
        </select>
		
    <?php
	
}

/* Affiche notre champ de réglage pour renseigner le modèle de largeur pour les Custom Post Type */
function eccp_settings_cpt_template_editor_select_field_markup( $args ){
	
    $custom_gutenberg_editor_settings = get_option( 'eccp_settings_custom_gutenberg_editor' ); // le nom du réglage passé a la fonction register_setting()
    $selected = ! empty( $custom_gutenberg_editor_settings['eccp_settings_cpt_template_editor_select_field'] ) ? $custom_gutenberg_editor_settings['eccp_settings_cpt_template_editor_select_field'] : '';// ID du champ
    
	?>
	
        <select style="width:165px;" name="eccp_settings_custom_gutenberg_editor[eccp_settings_cpt_template_editor_select_field]">
		
            <option value=""><?php esc_html_e( 'Choose an option', 'editor-custom-color-palette' ); ?></option>
			
            <!-- On obtiend les valeurs passées dans un tableau d'options  -->
            <?php foreach ( $args['options'] as $value => $label ) : ?>
                <option value="<?php echo esc_attr( $value ); ?>" <?php selected( $selected, $value ); ?>><?php echo esc_html( $label ); ?></option>
            <?php endforeach; ?>
			
        </select>
		
    <?php
	
	
	echo '<h3 id="sub-title-custom-gutenberg-editor-nine"><u>'. esc_html__( 'Publication Title','editor-custom-color-palette' ).'</u></h3>';
	
}

/* ----------------- AFFICHE LES PARAMÈTRES DE CHAMP POUR LE TITRE ARTICLE OU PAGE --------------------*/

/* Affiche notre champ de réglage pour renseigner l'alignement du titre de la page ou article */
function eccp_settings_page_title_alignment_select_field_markup( $args ){
	
    $custom_gutenberg_editor_settings = get_option( 'eccp_settings_custom_gutenberg_editor' ); // le nom du réglage passé a la fonction register_setting()
    $selected = ! empty( $custom_gutenberg_editor_settings['eccp_settings_page_title_alignment_select_field'] ) ? $custom_gutenberg_editor_settings['eccp_settings_page_title_alignment_select_field'] : '';// ID du champ
    
	?>
	
        <select style="width:165px;" name="eccp_settings_custom_gutenberg_editor[eccp_settings_page_title_alignment_select_field]">
		
            <option value=""><?php esc_html_e( 'Choose an option', 'editor-custom-color-palette' ); ?></option>
			
            <!-- On obtiend les valeurs passées dans un tableau d'options  -->
            <?php foreach ( $args['options'] as $value => $label ) : ?>
                <option value="<?php echo esc_attr( $value ); ?>" <?php selected( $selected, $value ); ?>><?php echo esc_html( $label ); ?></option>
            <?php endforeach; ?>
			
        </select>
		
    <?php
	
	echo '<h3 id="sub-title-custom-gutenberg-editor-ten"><u>'. esc_html__( 'Enable support for new block parameters Introduced since WordPress 6.0','editor-custom-color-palette' ).'</u></h3>';
	
	echo '<div class="mise-en-avant">';
	echo '<strong>';
	echo esc_html__( 'Enable support for new Margin parameter for blocks: heading...','editor-custom-color-palette' ); 
	echo'<br><br>';
	echo esc_html__( 'Enable support for new Padding parameter for blocks: group, column, cover, buton...','editor-custom-color-palette' ); 
	echo'<br><br>';
	echo esc_html__( 'Enable support for new Border parameter(radius,color,width,style) for blocks: group, column, image...','editor-custom-color-palette' ); 
	echo '</strong>';
	echo '</div>';
	
}


/*----------------- AFFICHE LES PARAMÈTRES DE CHAMP POUR ACTIVER LA PRISE EN CHARGE DES NOUVEAUX PARAMÉTRES DE BLOCS: BORDURE & MARGES --------------------*/

// Affiche notre champ de réglage pour activer les nouveaux paramètres de blocs: Marge Externe & Marge Interne
function eccp_settings_activate_support_margin_padding_checkbox_field_markup( $args ){
    
	$custom_gutenberg_editor_settings = get_option( 'eccp_settings_custom_gutenberg_editor' );
	$checked = (bool) $custom_gutenberg_editor_settings['eccp_settings_activate_support_margin_padding_checkbox_field'] ?: false;
    
	?>
	
        <input id="<?php echo esc_attr( $args['label_for'] ); ?>" type="checkbox" name="eccp_settings_custom_gutenberg_editor[eccp_settings_activate_support_margin_padding_checkbox_field]" <?php checked( $checked ); ?> >
        <span><?php echo esc_html( $args['description'] ); ?></span>
		
    <?php
	
}


// Affiche notre champ de réglage pour activer le nouveau paramètre de bloc: Bordure
function eccp_settings_activate_support_border_checkbox_field_markup( $args ){
    
	$custom_gutenberg_editor_settings = get_option( 'eccp_settings_custom_gutenberg_editor' );
	$checked = (bool) $custom_gutenberg_editor_settings['eccp_settings_activate_support_border_checkbox_field'] ?: false;
    
	?>
	
        <input id="<?php echo esc_attr( $args['label_for'] ); ?>" type="checkbox" name="eccp_settings_custom_gutenberg_editor[eccp_settings_activate_support_border_checkbox_field]" <?php checked( $checked ); ?> >
        <span><?php echo esc_html( $args['description'] ); ?></span>
		
    <?php
	
	echo '<h3 id="sub-title-custom-gutenberg-editor-eleven"><u>'. esc_html__( 'Disable WebP image generation introduced by WordPress 6.1','editor-custom-color-palette' ).'</u></h3>';
	
	echo '<div style="width:55%;" class="mise-en-avant">';
	echo '<strong>';
	echo esc_html__( 'As of version 6.1, when uploading a JPEG image to the media library, WordPress will now create WebP versions of the image and its thumbnails in addition to the JPEG thumbnails it already creates.','editor-custom-color-palette' ); 
	echo'<br>';
	echo esc_html__( 'Conversely for compatibility with some extensions that do not use the WebP format, when uploading a WebP image to the media library, WordPress will create JPEG versions of the image and its thumbnails in addition to the WebP thumbnails it already creates.','editor-custom-color-palette' ); 
	echo'<br>';
	echo esc_html__( 'This will significantly increase the space used by your media files on your hosting.','editor-custom-color-palette' ); 
	echo '</strong>';
	echo '</div>';
	
}


/*----------------- Affiche le paramètre de champ chexbox afin de désactiver pour une image JPEG la génération d'image WebP pour les miniatures --------------------*/

// Affiche notre champ de réglage pour désactiver la génération d'image WebP
function eccp_settings_disable_webp_image_generation_checkbox_field_markup( $args ){
    
	$custom_gutenberg_editor_settings = get_option( 'eccp_settings_custom_gutenberg_editor' );
	$checked = (bool) $custom_gutenberg_editor_settings['eccp_settings_disable_webp_image_generation_checkbox_field'] ?: false;
    
	?>
	
        <input id="<?php echo esc_attr( $args['label_for'] ); ?>" type="checkbox" name="eccp_settings_custom_gutenberg_editor[eccp_settings_disable_webp_image_generation_checkbox_field]" <?php checked( $checked ); ?> >
        <span><?php echo esc_html( $args['description'] ); ?></span>
		
    <?php
	
}

/*----------------- Affiche le paramètre de champ chexbox pour désactiver le téléchargement & la génération d'image WebP par défaut --------------------*/

// Affiche notre champ de réglage pour désactiver le téléchargement & la génération d'image WebP
function eccp_settings_disable_downloading_and_image_generation_webp_checkbox_field_markup( $args ){
    
	$custom_gutenberg_editor_settings = get_option( 'eccp_settings_custom_gutenberg_editor' );
	$checked = (bool) $custom_gutenberg_editor_settings['eccp_settings_disable_downloading_and_image_generation_webp_checkbox_field'] ?: false;
    
	?>
	
        <input id="<?php echo esc_attr( $args['label_for'] ); ?>" type="checkbox" name="eccp_settings_custom_gutenberg_editor[eccp_settings_disable_downloading_and_image_generation_webp_checkbox_field]" <?php checked( $checked ); ?> >
        <span><?php echo esc_html( $args['description'] ); ?></span>
		
    <?php
	
	echo '<h3 id="sub-title-custom-gutenberg-editor-twelve"><u>'. esc_html__( 'Disable Openverse category from the Medias tab','editor-custom-color-palette' ).'</u></h3>';
	
	echo '<div style="width:45%;float:left" class="mise-en-avant">';
		echo '<strong>';
		echo esc_html__( 'Disable Openverse category from the Medias tab for the block inserter.','editor-custom-color-palette' ); 
		echo'<br>';
		echo '</strong>';
	echo '</div>';
	

	echo '<div>';
		echo '<img style="margin:15px 20px 0 0 ;" src="'.esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/custom-gutenberg-editor/openverse-category-media-tab.jpg">';
	echo '</div>';
	
	
}


/*----------------- Affiche le paramètre de champ chexbox pour Désactiver la catégorie Openverse de l'onglet Média pour l'inséreuse de blocs. --------------------*/

function eccp_settings_disable_openverse_category_from_media_tab_checkbox_field_markup( $args ){
    
	$custom_gutenberg_editor_settings = get_option( 'eccp_settings_custom_gutenberg_editor' );
	$checked = (bool) $custom_gutenberg_editor_settings['eccp_settings_disable_openverse_category_from_media_tab_checkbox_field'] ?: false;
    
	?>
	
        <input id="<?php echo esc_attr( $args['label_for'] ); ?>" type="checkbox" name="eccp_settings_custom_gutenberg_editor[eccp_settings_disable_openverse_category_from_media_tab_checkbox_field]" <?php checked( $checked ); ?> >
        <span><?php echo esc_html( $args['description'] ); ?></span>
		
    <?php
	
	echo '<h3 id="sub-title-custom-gutenberg-editor-thirteen"><u>'. esc_html__( 'Disable settings & styles tabs for sidebar','editor-custom-color-palette' ).'</u></h3>';
	
	echo '<div style="width:45%;float:left" class="mise-en-avant">';
		echo '<strong>';
		echo esc_html__( 'Disable the Parameters & Styles sub-panels for all blocks in order to display the block\'s parameters and styles in the block panel of the editor sidebar.','editor-custom-color-palette' ); 
		echo'<br>';
		echo '</strong>';
	echo '</div>';
	

	echo '<div>';
		echo '<img style="margin:15px 20px 0 0 ;" src="'.esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/custom-gutenberg-editor/settings-styles-tabs-sidebar.jpg">';
	echo '</div>';
	
	
}


/*----------------- Affiche le paramètre de champ chexbox pour Désactiver les onglets paramètres & styles pour la barre latérale --------------------*/

function eccp_settings_disable_settings_styles_tabs_for_sidebar_checkbox_field_markup( $args ){
    
	$custom_gutenberg_editor_settings = get_option( 'eccp_settings_custom_gutenberg_editor' );
	$checked = (bool) $custom_gutenberg_editor_settings['eccp_settings_disable_settings_styles_tabs_for_sidebar_checkbox_field'] ?: false;
    
	?>
	
        <input id="<?php echo esc_attr( $args['label_for'] ); ?>" type="checkbox" name="eccp_settings_custom_gutenberg_editor[eccp_settings_disable_settings_styles_tabs_for_sidebar_checkbox_field]" <?php checked( $checked ); ?> >
        <span><?php echo esc_html( $args['description'] ); ?></span>
		
    <?php
	
	
	echo '<h3 id="sub-title-custom-gutenberg-editor-fourteen"><u>'. esc_html__( 'Background color','editor-custom-color-palette' ).'</u></h3>';
	
}

/*----------------- AFFICHER LES CHAMPS de PARAMÈTRES POUR LA COULEUR D'ARRIÈRE PLAN --------------------*/

// ----------------- Affiche le paramètre de champ chexbox pour activer la couleur d'arrière plan --------------------

function eccp_settings_enable_editor_background_color_checkbox_field_markup( $args ){
    
	$custom_gutenberg_editor_settings = get_option( 'eccp_settings_custom_gutenberg_editor' );
	$checked = (bool) $custom_gutenberg_editor_settings['eccp_settings_enable_editor_background_color_checkbox_field'] ?: false;
    
	?>
	
        <input id="<?php echo esc_attr( $args['label_for'] ); ?>" type="checkbox" name="eccp_settings_custom_gutenberg_editor[eccp_settings_enable_editor_background_color_checkbox_field]" <?php checked( $checked ); ?> >
        <span><?php echo esc_html( $args['description'] ); ?></span>
		
    <?php
	
}

// Affiche le paramètre de champ texte pour Renseigner la couleur de fond de l'éditeur
function eccp_settings_editor_background_color_text_field_markup( $args ){
	
    $custom_gutenberg_editor_settings = get_option( 'eccp_settings_custom_gutenberg_editor' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $custom_gutenberg_editor_settings['eccp_settings_editor_background_color_text_field'] ) ? $custom_gutenberg_editor_settings['eccp_settings_editor_background_color_text_field'] : '';
    ?>
        <input class="color-field" type="text" name="eccp_settings_custom_gutenberg_editor[eccp_settings_editor_background_color_text_field]" data-default-color = "<?php echo esc_attr( '#FFFFFF' ); ?>" value="<?php echo esc_attr( $value ); ?>">
    <?php
	
	echo '<h3 id="sub-title-custom-gutenberg-editor-fifteen"><u>'. esc_html__( 'Fluid Spacing','editor-custom-color-palette' ).'</u></h3>';
	   
	
	
	echo '<div style="width:55%; float:left;" class="mise-en-avant">';
		echo '<strong>';
		echo esc_html__( 'Fluid spacing applies to the editor\'s seven padding, margin, and block spacing presets.','editor-custom-color-palette' ); 
		echo'<br>';
		echo esc_html__( 'This allows the spacings to adapt to changes in screen size.','editor-custom-color-palette' ); 
		echo'<br>';
		echo esc_html__( 'Fluid spacing is active for the screen resolution set below in pixels [min viewport  max viewport].','editor-custom-color-palette' ); 
		echo'<br><br>';
		echo esc_html__( 'If for a setting among the seven predefined settings you do not want fluid spacing, enter min spacing = max spacing.','editor-custom-color-palette' ); 
		echo '</strong>';
	echo '</div>';
	
	echo '<div>';
		echo '<img src="'.esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/custom-gutenberg-editor/fluid-spacing.jpg">';
	echo '</div>';

}

// ----------------- Affiche le paramètre de champ chexbox pour activer l'espacement fluide --------------------

function eccp_settings_enable_fluid_spacing_checkbox_field_markup( $args ){
    
	$custom_gutenberg_editor_settings = get_option( 'eccp_settings_custom_gutenberg_editor' );
	$checked = (bool) $custom_gutenberg_editor_settings['eccp_settings_enable_fluid_spacing_checkbox_field'] ?: false;
    
	?>
	
        <input id="<?php echo esc_attr( $args['label_for'] ); ?>" type="checkbox" name="eccp_settings_custom_gutenberg_editor[eccp_settings_enable_fluid_spacing_checkbox_field]" <?php checked( $checked ); ?> >
        <span><?php echo esc_html( $args['description'] ); ?></span>
		
    <?php

}

/*----------------- AFFICHER LES CHAMPS de PARAMÈTRES POUR L'ESPACEMENT FLUIDE --------------------*/

// Affiche le paramètre de champ texte pour renseigner la résolution d'écran min
  function eccp_settings_min_viewport_fluid_espacement_text_field_markup( $args ){
	
    $custom_gutenberg_editor_settings = get_option( 'eccp_settings_custom_gutenberg_editor' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $custom_gutenberg_editor_settings['eccp_settings_min_viewport_fluid_espacement_text_field'] ) ?  $custom_gutenberg_editor_settings['eccp_settings_min_viewport_fluid_espacement_text_field'] : '480';
    ?>
        <input style="width:65px;" min="100" max="1000" class="regular-text" type="number" name="eccp_settings_custom_gutenberg_editor[eccp_settings_min_viewport_fluid_espacement_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
    <?php
	  
}

// Affiche le paramètre de champ texte pour renseigner la résolution d'écran max
  function eccp_settings_max_viewport_fluid_espacement_text_field_markup( $args ){
	
    $custom_gutenberg_editor_settings = get_option( 'eccp_settings_custom_gutenberg_editor' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $custom_gutenberg_editor_settings['eccp_settings_max_viewport_fluid_espacement_text_field'] ) ?  $custom_gutenberg_editor_settings['eccp_settings_max_viewport_fluid_espacement_text_field'] : '1000';
    ?>
        <input style="width:65px;" min="800" max="2000" class="regular-text" type="number" name="eccp_settings_custom_gutenberg_editor[eccp_settings_max_viewport_fluid_espacement_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
    <?php
	
	echo '<h4>'. esc_html__( 'Fluid Spacing 1','editor-custom-color-palette' ).'</h4>';
	  
}

// Affiche le paramètre de champ texte pour renseigner la valeur min Espacement Fluide 1
  function eccp_settings_min_value_fluid_espacement_number_one_text_field_markup( $args ){
	
    $custom_gutenberg_editor_settings = get_option( 'eccp_settings_custom_gutenberg_editor' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $custom_gutenberg_editor_settings['eccp_settings_min_value_fluid_espacement_number_one_text_field'] ) ?  $custom_gutenberg_editor_settings['eccp_settings_min_value_fluid_espacement_number_one_text_field'] : '7';
    ?>
        <input style="width:55px;" min="0" max="100" class="regular-text" type="number" name="eccp_settings_custom_gutenberg_editor[eccp_settings_min_value_fluid_espacement_number_one_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
    <?php
	  
}

// Affiche le paramètre de champ texte pour renseigner la valeur max Espacement Fluide 1
  function eccp_settings_max_value_fluid_espacement_number_one_text_field_markup( $args ){
	
    $custom_gutenberg_editor_settings = get_option( 'eccp_settings_custom_gutenberg_editor' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $custom_gutenberg_editor_settings['eccp_settings_max_value_fluid_espacement_number_one_text_field'] ) ?  $custom_gutenberg_editor_settings['eccp_settings_max_value_fluid_espacement_number_one_text_field'] : '7';
    ?>
        <input style="width:55px;" min="0" max="100" class="regular-text" type="number" name="eccp_settings_custom_gutenberg_editor[eccp_settings_max_value_fluid_espacement_number_one_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
    <?php
	
	echo '<h4>'. esc_html__( 'Fluid Spacing 2','editor-custom-color-palette' ).'</h4>';
	 
}

// Affiche le paramètre de champ texte pour renseigner la valeur min Espacement Fluide 2
  function eccp_settings_min_value_fluid_espacement_number_two_text_field_markup( $args ){
	
    $custom_gutenberg_editor_settings = get_option( 'eccp_settings_custom_gutenberg_editor' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $custom_gutenberg_editor_settings['eccp_settings_min_value_fluid_espacement_number_two_text_field'] ) ?  $custom_gutenberg_editor_settings['eccp_settings_min_value_fluid_espacement_number_two_text_field'] : '10';
    ?>
        <input style="width:55px;" min="0" max="100" class="regular-text" type="number" name="eccp_settings_custom_gutenberg_editor[eccp_settings_min_value_fluid_espacement_number_two_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
    <?php
	  
}

// Affiche le paramètre de champ texte pour renseigner la valeur max Espacement Fluide 2
  function eccp_settings_max_value_fluid_espacement_number_two_text_field_markup( $args ){
	
    $custom_gutenberg_editor_settings = get_option( 'eccp_settings_custom_gutenberg_editor' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $custom_gutenberg_editor_settings['eccp_settings_max_value_fluid_espacement_number_two_text_field'] ) ?  $custom_gutenberg_editor_settings['eccp_settings_max_value_fluid_espacement_number_two_text_field'] : '10';
    ?>
        <input style="width:55px;" min="0" max="100" class="regular-text" type="number" name="eccp_settings_custom_gutenberg_editor[eccp_settings_max_value_fluid_espacement_number_two_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
    <?php
	
	echo '<h4>'. esc_html__( 'Fluid Spacing 3','editor-custom-color-palette' ).'</h4>';
	 
}

// Affiche le paramètre de champ texte pour renseigner la valeur min Espacement Fluide 3
  function eccp_settings_min_value_fluid_espacement_number_three_text_field_markup( $args ){
	
    $custom_gutenberg_editor_settings = get_option( 'eccp_settings_custom_gutenberg_editor' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $custom_gutenberg_editor_settings['eccp_settings_min_value_fluid_espacement_number_three_text_field'] ) ?  $custom_gutenberg_editor_settings['eccp_settings_min_value_fluid_espacement_number_three_text_field'] : '10';
    ?>
        <input style="width:55px;" min="0" max="100" class="regular-text" type="number" name="eccp_settings_custom_gutenberg_editor[eccp_settings_min_value_fluid_espacement_number_three_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
    <?php
	  
}

// Affiche le paramètre de champ texte pour renseigner la valeur max Espacement Fluide 3
  function eccp_settings_max_value_fluid_espacement_number_three_text_field_markup( $args ){
	
    $custom_gutenberg_editor_settings = get_option( 'eccp_settings_custom_gutenberg_editor' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $custom_gutenberg_editor_settings['eccp_settings_max_value_fluid_espacement_number_three_text_field'] ) ?  $custom_gutenberg_editor_settings['eccp_settings_max_value_fluid_espacement_number_three_text_field'] : '16';
    ?>
        <input style="width:55px;" min="0" max="100" class="regular-text" type="number" name="eccp_settings_custom_gutenberg_editor[eccp_settings_max_value_fluid_espacement_number_three_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
    <?php
	
	echo '<h4>'. esc_html__( 'Fluid Spacing 4','editor-custom-color-palette' ).'</h4>';
	 
}

// Affiche le paramètre de champ texte pour renseigner la valeur min Espacement Fluide 4
  function eccp_settings_min_value_fluid_espacement_number_four_text_field_markup( $args ){
	
    $custom_gutenberg_editor_settings = get_option( 'eccp_settings_custom_gutenberg_editor' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $custom_gutenberg_editor_settings['eccp_settings_min_value_fluid_espacement_number_four_text_field'] ) ?  $custom_gutenberg_editor_settings['eccp_settings_min_value_fluid_espacement_number_four_text_field'] : '16';
    ?>
        <input style="width:55px;" min="0" max="100" class="regular-text" type="number" name="eccp_settings_custom_gutenberg_editor[eccp_settings_min_value_fluid_espacement_number_four_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
    <?php
	  
}

// Affiche le paramètre de champ texte pour renseigner la valeur max Espacement Fluide 4
  function eccp_settings_max_value_fluid_espacement_number_four_text_field_markup( $args ){
	
    $custom_gutenberg_editor_settings = get_option( 'eccp_settings_custom_gutenberg_editor' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $custom_gutenberg_editor_settings['eccp_settings_max_value_fluid_espacement_number_four_text_field'] ) ?  $custom_gutenberg_editor_settings['eccp_settings_max_value_fluid_espacement_number_four_text_field'] : '24';
    ?>
        <input style="width:55px;" min="0" max="100" class="regular-text" type="number" name="eccp_settings_custom_gutenberg_editor[eccp_settings_max_value_fluid_espacement_number_four_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
    <?php
	
	echo '<h4>'. esc_html__( 'Fluid Spacing 5','editor-custom-color-palette' ).'</h4>';
	 
}

// Affiche le paramètre de champ texte pour renseigner la valeur min Espacement Fluide 5
  function eccp_settings_min_value_fluid_espacement_number_five_text_field_markup( $args ){
	
    $custom_gutenberg_editor_settings = get_option( 'eccp_settings_custom_gutenberg_editor' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $custom_gutenberg_editor_settings['eccp_settings_min_value_fluid_espacement_number_five_text_field'] ) ?  $custom_gutenberg_editor_settings['eccp_settings_min_value_fluid_espacement_number_five_text_field'] : '24';
    ?>
        <input style="width:55px;" min="0" max="100" class="regular-text" type="number" name="eccp_settings_custom_gutenberg_editor[eccp_settings_min_value_fluid_espacement_number_five_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
    <?php
	  
}

// Affiche le paramètre de champ texte pour renseigner la valeur max Espacement Fluide 5
  function eccp_settings_max_value_fluid_espacement_number_five_text_field_markup( $args ){
	
    $custom_gutenberg_editor_settings = get_option( 'eccp_settings_custom_gutenberg_editor' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $custom_gutenberg_editor_settings['eccp_settings_max_value_fluid_espacement_number_five_text_field'] ) ?  $custom_gutenberg_editor_settings['eccp_settings_max_value_fluid_espacement_number_five_text_field'] : '36';
    ?>
        <input style="width:55px;" min="0" max="100" class="regular-text" type="number" name="eccp_settings_custom_gutenberg_editor[eccp_settings_max_value_fluid_espacement_number_five_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
    <?php
	
	echo '<h4>'. esc_html__( 'Fluid Spacing 6','editor-custom-color-palette' ).'</h4>';
	 
}

// Affiche le paramètre de champ texte pour renseigner la valeur min Espacement Fluide 6
  function eccp_settings_min_value_fluid_espacement_number_six_text_field_markup( $args ){
	
    $custom_gutenberg_editor_settings = get_option( 'eccp_settings_custom_gutenberg_editor' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $custom_gutenberg_editor_settings['eccp_settings_min_value_fluid_espacement_number_six_text_field'] ) ?  $custom_gutenberg_editor_settings['eccp_settings_min_value_fluid_espacement_number_six_text_field'] : '32';
    ?>
        <input style="width:55px;" min="0" max="100" class="regular-text" type="number" name="eccp_settings_custom_gutenberg_editor[eccp_settings_min_value_fluid_espacement_number_six_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
    <?php
	  
}

// Affiche le paramètre de champ texte pour renseigner la valeur max Espacement Fluide 6
  function eccp_settings_max_value_fluid_espacement_number_six_text_field_markup( $args ){
	
    $custom_gutenberg_editor_settings = get_option( 'eccp_settings_custom_gutenberg_editor' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $custom_gutenberg_editor_settings['eccp_settings_max_value_fluid_espacement_number_six_text_field'] ) ?  $custom_gutenberg_editor_settings['eccp_settings_max_value_fluid_espacement_number_six_text_field'] : '54';
    ?>
        <input style="width:55px;" min="0" max="100" class="regular-text" type="number" name="eccp_settings_custom_gutenberg_editor[eccp_settings_max_value_fluid_espacement_number_six_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
    <?php
	
	echo '<h4>'. esc_html__( 'Fluid Spacing 7','editor-custom-color-palette' ).'</h4>';
	 
}

// Affiche le paramètre de champ texte pour renseigner la valeur min Espacement Fluide 7
  function eccp_settings_min_value_fluid_espacement_number_seven_text_field_markup( $args ){
	
    $custom_gutenberg_editor_settings = get_option( 'eccp_settings_custom_gutenberg_editor' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $custom_gutenberg_editor_settings['eccp_settings_min_value_fluid_espacement_number_seven_text_field'] ) ?  $custom_gutenberg_editor_settings['eccp_settings_min_value_fluid_espacement_number_seven_text_field'] : '32';
    ?>
        <input style="width:55px;" min="0" max="100" class="regular-text" type="number" name="eccp_settings_custom_gutenberg_editor[eccp_settings_min_value_fluid_espacement_number_seven_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
    <?php
	  
}

// Affiche le paramètre de champ texte pour renseigner la valeur max Espacement Fluide 7
  function eccp_settings_max_value_fluid_espacement_number_seven_text_field_markup( $args ){
	
    $custom_gutenberg_editor_settings = get_option( 'eccp_settings_custom_gutenberg_editor' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $custom_gutenberg_editor_settings['eccp_settings_max_value_fluid_espacement_number_seven_text_field'] ) ?  $custom_gutenberg_editor_settings['eccp_settings_max_value_fluid_espacement_number_seven_text_field'] : '81';
    ?>
        <input style="width:55px;" min="0" max="100" class="regular-text" type="number" name="eccp_settings_custom_gutenberg_editor[eccp_settings_max_value_fluid_espacement_number_seven_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
    <?php
	
}




/* -------------------------------------- AFFICHAGE DES CHAMPS POUR LA 6ème SECTION CUSTOMIZE GUTENBERG BLOCKS -----------------------------------------*/

/* ----------------- AFFICHE LES PARAMÈTRES DE CHAMP POUR LE BLOC PARAGRAPHE --------------------*/

// Affiche le paramètre de champ radio pour activer l'ombre de boite pour le bloc paragraphe
// modif version 2.8
/*
function eccp_settings_activate_box_shadow_paragraph_block_radio_field_markup( $args ){
	
    $custom_gutenberg_blocks_settings = get_option( 'eccp_settings_custom_gutenberg_block' );
    $checked = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_activate_box_shadow_paragraph_block_radio_field'] ) ? $custom_gutenberg_blocks_settings['eccp_settings_activate_box_shadow_paragraph_block_radio_field'] : 'no';
	?>
        <fieldset>
            <legend class="screen-reader-text"><?php esc_html_e( 'no', 'editor-custom-color-palette' ); ?></legend>
                <label for="settings_eccp_radio_option_1">
                    <input id="settings_eccp_radio_option_1" type="radio" name="eccp_settings_custom_gutenberg_block[eccp_settings_activate_box_shadow_paragraph_block_radio_field]" value="no" <?php checked( $checked, 'no' ); ?>>
                    <?php esc_html_e( 'no', 'editor-custom-color-palette' ); ?>  <!--  label , text domain  -->
                </label>
                <br>
                <label for="settings_eccp_radio_option_2">
                    <input id="settings_eccp_radio_option_2" type="radio" name="eccp_settings_custom_gutenberg_block[eccp_settings_activate_box_shadow_paragraph_block_radio_field]" value="yes" <?php checked( $checked, 'yes' ); ?>>
                    <?php esc_html_e( 'yes', 'editor-custom-color-palette' ); ?>
                </label>
        </fieldset>
		
    <?php
}
*/		

// Affiche le paramètre de champ texte pour renseigner la couleur de l'ombre de boite
// modif version 2.8
/*
function eccp_settings_box_shadow_color_text_field_markup( $args ){
	
    $custom_gutenberg_blocks_settings = get_option( 'eccp_settings_custom_gutenberg_block' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_box_shadow_color_text_field'] ) ? $custom_gutenberg_blocks_settings['eccp_settings_box_shadow_color_text_field'] : '';
    ?>
        <input class="color-field" type="text" name="eccp_settings_custom_gutenberg_block[eccp_settings_box_shadow_color_text_field]" data-default-color = "<?php echo esc_attr( $value ); ?>" value="<?php echo esc_attr( $value ); ?>">
    <?php

}
*/

// Affiche le paramètre de champ texte pour renseigner l'opacité de de l'ombre de boite
// modif version 2.8
/*
function eccp_settings_box_shadow_opacity_text_field_markup( $args ){
	
    $custom_gutenberg_blocks_settings = get_option( 'eccp_settings_custom_gutenberg_block' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_box_shadow_opacity_text_field'] ) ?  $custom_gutenberg_blocks_settings['eccp_settings_box_shadow_opacity_text_field'] : '0';// un 0 par défaut pour une chaine vide afin de traiter la transparence
    
	// l'expression régulière: ([1-9]?[0-9])|100 de l'input définit un entier de 0 à 100 (sans 00, 01...) mais l'enregistrement du caractère 0 donne une chaine vide en base de donnée
	?>
        <input style="width:40px" size="3" maxlength="3" class="regular-text" type="text" pattern="([1-9]?[0-9])|100" name="eccp_settings_custom_gutenberg_block[eccp_settings_box_shadow_opacity_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
    <?php
	    
} 
*/

// Affiche le paramètre de champ texte pour renseigner le paramètre X pour l'ombre de boite
// modif version 2.8
/* 
function eccp_settings_box_shadow_x_text_field_markup( $args ){
	
    $custom_gutenberg_blocks_settings = get_option( 'eccp_settings_custom_gutenberg_block' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_box_shadow_x_text_field'] ) ?  $custom_gutenberg_blocks_settings['eccp_settings_box_shadow_x_text_field'] : '0';// l'enregistrement du caractère 0 donne une chaine vide en base de donnée
    
	
	?>
        <input style="width:60px" class="regular-text" type="number" name="eccp_settings_custom_gutenberg_block[eccp_settings_box_shadow_x_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
    <?php
	
}
*/

// Affiche le paramètre de champ texte pour renseigner le paramètre Y pour l'ombre de boite
/* 
function eccp_settings_box_shadow_y_text_field_markup( $args ){
	
    $custom_gutenberg_blocks_settings = get_option( 'eccp_settings_custom_gutenberg_block' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_box_shadow_y_text_field'] ) ?  $custom_gutenberg_blocks_settings['eccp_settings_box_shadow_y_text_field'] : '0';// l'enregistrement du caractère 0 donne une chaine vide en base de donnée 
    
	
	?>
        <input style="width:60px" class="regular-text" type="number" name="eccp_settings_custom_gutenberg_block[eccp_settings_box_shadow_y_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
    <?php
	
}
*/

// Affiche le paramètre de champ texte pour renseigner le paramètre Blur(Flou) pour l'ombre de boite 
// modif version 2.8
/* 
function eccp_settings_box_shadow_blur_text_field_markup( $args ){
	
    $custom_gutenberg_blocks_settings = get_option( 'eccp_settings_custom_gutenberg_block' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_box_shadow_blur_text_field'] ) ?  $custom_gutenberg_blocks_settings['eccp_settings_box_shadow_blur_text_field'] : '0';// l'enregistrement du caractère 0 donne une chaine vide en base de donnée
    
	
	?>
        <input style="width:60px" class="regular-text" type="number" name="eccp_settings_custom_gutenberg_block[eccp_settings_box_shadow_blur_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
    <?php
	
}
*/

// Affiche le paramètre de champ texte pour renseigner le paramètre Spread(diffuser) pour l'ombre de boite 
// modif version 2.8
/*
function eccp_settings_box_shadow_spread_text_field_markup( $args ){
	
    $custom_gutenberg_blocks_settings = get_option( 'eccp_settings_custom_gutenberg_block' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_box_shadow_spread_text_field'] ) ?  $custom_gutenberg_blocks_settings['eccp_settings_box_shadow_spread_text_field'] : '0';// l'enregistrement du caractère 0 donne une chaine vide en base de donnée
    
	
	?>
        <input style="width:60px" class="regular-text" type="number" name="eccp_settings_custom_gutenberg_block[eccp_settings_box_shadow_spread_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
    <?php

}
*/

// Affiche le paramètre de champ radio pour activer le style card
function eccp_settings_activate_style_card_paragraph_radio_field_markup( $args ){
	
    $custom_gutenberg_blocks_settings = get_option( 'eccp_settings_custom_gutenberg_block' );
    $checked = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_activate_style_card_paragraph_radio_field'] ) ? $custom_gutenberg_blocks_settings['eccp_settings_activate_style_card_paragraph_radio_field'] : 'no';
	?>
        <fieldset>
            <legend class="screen-reader-text"><?php esc_html_e( 'no', 'editor-custom-color-palette' ); ?></legend>
                <label for="settings_eccp_radio_option_1">
                    <input id="settings_eccp_radio_option_1" type="radio" name="eccp_settings_custom_gutenberg_block[eccp_settings_activate_style_card_paragraph_radio_field]" value="no" <?php checked( $checked, 'no' ); ?>>
                    <?php esc_html_e( 'no', 'editor-custom-color-palette' ); ?>  <!--  label , text domain  -->
                </label>
                <br>
                <label for="settings_eccp_radio_option_2">
                    <input id="settings_eccp_radio_option_2" type="radio" name="eccp_settings_custom_gutenberg_block[eccp_settings_activate_style_card_paragraph_radio_field]" value="yes" <?php checked( $checked, 'yes' ); ?>>
                    <?php esc_html_e( 'yes', 'editor-custom-color-palette' ); ?>
                </label>
        </fieldset>
		
    <?php
	
	echo'<br>';
	
}
	
// Affiche le paramètre de champ radio pour activer le style Notice: Question
function eccp_settings_activate_style_notice_question_radio_field_markup( $args ){
	
    $custom_gutenberg_blocks_settings = get_option( 'eccp_settings_custom_gutenberg_block' );
    $checked = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_activate_style_notice_question_radio_field'] ) ? $custom_gutenberg_blocks_settings['eccp_settings_activate_style_notice_question_radio_field'] : 'no';
	?>
        <fieldset>
            <legend class="screen-reader-text"><?php esc_html_e( 'no', 'editor-custom-color-palette' ); ?></legend>
                <label for="settings_eccp_radio_option_1">
                    <input id="settings_eccp_radio_option_1" type="radio" name="eccp_settings_custom_gutenberg_block[eccp_settings_activate_style_notice_question_radio_field]" value="no" <?php checked( $checked, 'no' ); ?>>
                    <?php esc_html_e( 'no', 'editor-custom-color-palette' ); ?>  <!--  label , text domain  -->
                </label>
                <br>
                <label for="settings_eccp_radio_option_2">
                    <input id="settings_eccp_radio_option_2" type="radio" name="eccp_settings_custom_gutenberg_block[eccp_settings_activate_style_notice_question_radio_field]" value="yes" <?php checked( $checked, 'yes' ); ?>>
                    <?php esc_html_e( 'yes', 'editor-custom-color-palette' ); ?>
                </label>
        </fieldset>
		
    <?php
	
	
}	

// Affiche le paramètre de champ texte pour renseigner la couleur de l'icône pour le style Notice: Question
function eccp_settings_icon_color_style_notice_question_text_field_markup( $args ){
	
    $custom_gutenberg_blocks_settings = get_option( 'eccp_settings_custom_gutenberg_block' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_icon_color_style_notice_question_text_field'] ) ? $custom_gutenberg_blocks_settings['eccp_settings_icon_color_style_notice_question_text_field'] : '';
    ?>
        <input class="color-field" type="text" name="eccp_settings_custom_gutenberg_block[eccp_settings_icon_color_style_notice_question_text_field]" data-default-color = "<?php echo esc_attr( '#666666' ); ?>" value="<?php echo esc_attr( $value ); ?>">
    <?php
	
	echo'<br><br>';

}

// Affiche le paramètre de champ radio pour activer le style Notice: Info
function eccp_settings_activate_style_notice_info_radio_field_markup( $args ){
	
    $custom_gutenberg_blocks_settings = get_option( 'eccp_settings_custom_gutenberg_block' );
    $checked = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_activate_style_notice_info_radio_field'] ) ? $custom_gutenberg_blocks_settings['eccp_settings_activate_style_notice_info_radio_field'] : 'no';
	?>
        <fieldset>
            <legend class="screen-reader-text"><?php esc_html_e( 'no', 'editor-custom-color-palette' ); ?></legend>
                <label for="settings_eccp_radio_option_1">
                    <input id="settings_eccp_radio_option_1" type="radio" name="eccp_settings_custom_gutenberg_block[eccp_settings_activate_style_notice_info_radio_field]" value="no" <?php checked( $checked, 'no' ); ?>>
                    <?php esc_html_e( 'no', 'editor-custom-color-palette' ); ?>  <!--  label , text domain  -->
                </label>
                <br>
                <label for="settings_eccp_radio_option_2">
                    <input id="settings_eccp_radio_option_2" type="radio" name="eccp_settings_custom_gutenberg_block[eccp_settings_activate_style_notice_info_radio_field]" value="yes" <?php checked( $checked, 'yes' ); ?>>
                    <?php esc_html_e( 'yes', 'editor-custom-color-palette' ); ?>
                </label>
        </fieldset>
		
    <?php
	
	
}	

// Affiche le paramètre de champ texte pour renseigner la couleur de l'icône pour le style Notice: info
function eccp_settings_icon_color_style_notice_info_text_field_markup( $args ){
	
    $custom_gutenberg_blocks_settings = get_option( 'eccp_settings_custom_gutenberg_block' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_icon_color_style_notice_info_text_field'] ) ? $custom_gutenberg_blocks_settings['eccp_settings_icon_color_style_notice_info_text_field'] : '';
    ?>
        <input class="color-field" type="text" name="eccp_settings_custom_gutenberg_block[eccp_settings_icon_color_style_notice_info_text_field]" data-default-color = "<?php echo esc_attr( '#FFFFFF' ); ?>" value="<?php echo esc_attr( $value ); ?>">
    <?php
	
	echo'<br><br>';

}

// Affiche le paramètre de champ radio pour activer le style Notice: Advice
function eccp_settings_activate_style_notice_advice_radio_field_markup( $args ){
	
    $custom_gutenberg_blocks_settings = get_option( 'eccp_settings_custom_gutenberg_block' );
    $checked = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_activate_style_notice_advice_radio_field'] ) ? $custom_gutenberg_blocks_settings['eccp_settings_activate_style_notice_advice_radio_field'] : 'no';
	?>
        <fieldset>
            <legend class="screen-reader-text"><?php esc_html_e( 'no', 'editor-custom-color-palette' ); ?></legend>
                <label for="settings_eccp_radio_option_1">
                    <input id="settings_eccp_radio_option_1" type="radio" name="eccp_settings_custom_gutenberg_block[eccp_settings_activate_style_notice_advice_radio_field]" value="no" <?php checked( $checked, 'no' ); ?>>
                    <?php esc_html_e( 'no', 'editor-custom-color-palette' ); ?>  <!--  label , text domain  -->
                </label>
                <br>
                <label for="settings_eccp_radio_option_2">
                    <input id="settings_eccp_radio_option_2" type="radio" name="eccp_settings_custom_gutenberg_block[eccp_settings_activate_style_notice_advice_radio_field]" value="yes" <?php checked( $checked, 'yes' ); ?>>
                    <?php esc_html_e( 'yes', 'editor-custom-color-palette' ); ?>
                </label>
        </fieldset>
		
    <?php
	
}	

// Affiche le paramètre de champ texte pour renseigner la couleur de l'icône pour le style Notice: advice
function eccp_settings_icon_color_style_notice_advice_text_field_markup( $args ){
	
    $custom_gutenberg_blocks_settings = get_option( 'eccp_settings_custom_gutenberg_block' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_icon_color_style_notice_advice_text_field'] ) ? $custom_gutenberg_blocks_settings['eccp_settings_icon_color_style_notice_advice_text_field'] : '';
    ?>
        <input class="color-field" type="text" name="eccp_settings_custom_gutenberg_block[eccp_settings_icon_color_style_notice_advice_text_field]" data-default-color = "<?php echo esc_attr( '#FFFFFF' ); ?>" value="<?php echo esc_attr( $value ); ?>">
    <?php
	
	echo'<br><br>';

}

// Affiche le paramètre de champ radio pour activer le style Notice: Warning
function eccp_settings_activate_style_notice_warning_radio_field_markup( $args ){
	
    $custom_gutenberg_blocks_settings = get_option( 'eccp_settings_custom_gutenberg_block' );
    $checked = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_activate_style_notice_warning_radio_field'] ) ? $custom_gutenberg_blocks_settings['eccp_settings_activate_style_notice_warning_radio_field'] : 'no';
	?>
        <fieldset>
            <legend class="screen-reader-text"><?php esc_html_e( 'no', 'editor-custom-color-palette' ); ?></legend>
                <label for="settings_eccp_radio_option_1">
                    <input id="settings_eccp_radio_option_1" type="radio" name="eccp_settings_custom_gutenberg_block[eccp_settings_activate_style_notice_warning_radio_field]" value="no" <?php checked( $checked, 'no' ); ?>>
                    <?php esc_html_e( 'no', 'editor-custom-color-palette' ); ?>  <!--  label , text domain  -->
                </label>
                <br>
                <label for="settings_eccp_radio_option_2">
                    <input id="settings_eccp_radio_option_2" type="radio" name="eccp_settings_custom_gutenberg_block[eccp_settings_activate_style_notice_warning_radio_field]" value="yes" <?php checked( $checked, 'yes' ); ?>>
                    <?php esc_html_e( 'yes', 'editor-custom-color-palette' ); ?>
                </label>
        </fieldset>
		
    <?php
	
}

// Affiche le paramètre de champ texte pour renseigner la couleur de l'icône pour le style Notice: warning
function eccp_settings_icon_color_style_notice_warning_text_field_markup( $args ){
	
    $custom_gutenberg_blocks_settings = get_option( 'eccp_settings_custom_gutenberg_block' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_icon_color_style_notice_warning_text_field'] ) ? $custom_gutenberg_blocks_settings['eccp_settings_icon_color_style_notice_warning_text_field'] : '';
    ?>
        <input class="color-field" type="text" name="eccp_settings_custom_gutenberg_block[eccp_settings_icon_color_style_notice_warning_text_field]" data-default-color = "<?php echo esc_attr( '#FFFFFF'); ?>" value="<?php echo esc_attr( $value ); ?>">
    <?php

	echo'<br><br>';

}

// Affiche le paramètre de champ radio pour activer le style Notice: Alert
function eccp_settings_activate_style_notice_alert_radio_field_markup( $args ){
	
    $custom_gutenberg_blocks_settings = get_option( 'eccp_settings_custom_gutenberg_block' );
    $checked = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_activate_style_notice_alert_radio_field'] ) ? $custom_gutenberg_blocks_settings['eccp_settings_activate_style_notice_alert_radio_field'] : 'no';
	?>
        <fieldset>
            <legend class="screen-reader-text"><?php esc_html_e( 'no', 'editor-custom-color-palette' ); ?></legend>
                <label for="settings_eccp_radio_option_1">
                    <input id="settings_eccp_radio_option_1" type="radio" name="eccp_settings_custom_gutenberg_block[eccp_settings_activate_style_notice_alert_radio_field]" value="no" <?php checked( $checked, 'no' ); ?>>
                    <?php esc_html_e( 'no', 'editor-custom-color-palette' ); ?>  <!--  label , text domain  -->
                </label>
                <br>
                <label for="settings_eccp_radio_option_2">
                    <input id="settings_eccp_radio_option_2" type="radio" name="eccp_settings_custom_gutenberg_block[eccp_settings_activate_style_notice_alert_radio_field]" value="yes" <?php checked( $checked, 'yes' ); ?>>
                    <?php esc_html_e( 'yes', 'editor-custom-color-palette' ); ?>
                </label>
        </fieldset>
		
    <?php
	
}

// Affiche le paramètre de champ texte pour renseigner la couleur de l'icône pour le style Notice: alert
function eccp_settings_icon_color_style_notice_alert_text_field_markup( $args ){
	
    $custom_gutenberg_blocks_settings = get_option( 'eccp_settings_custom_gutenberg_block' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_icon_color_style_notice_alert_text_field'] ) ? $custom_gutenberg_blocks_settings['eccp_settings_icon_color_style_notice_alert_text_field'] : '';
    ?>
        <input class="color-field" type="text" name="eccp_settings_custom_gutenberg_block[eccp_settings_icon_color_style_notice_alert_text_field]" data-default-color = "<?php echo esc_attr( '#FFFFFF' ); ?>" value="<?php echo esc_attr( $value ); ?>">
    <?php
	
	echo '<h4 id="sub-title-custom-gutenberg-block-two"> <u>'. esc_html__( 'Click to Tweet style','editor-custom-color-palette' ).'</u></h4>';
	
	echo '<img src="'.esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/custom-gutenberg-block/style-click-to-tweet.jpg">';

}

// Affiche le parametre de champ radio pour activer le style Click to Tweet
function eccp_settings_activate_style_click_to_tweet_radio_field_markup( $args ){
	
    $custom_gutenberg_blocks_settings = get_option( 'eccp_settings_custom_gutenberg_block' );
    $checked = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_activate_style_click_to_tweet_radio_field'] ) ? $custom_gutenberg_blocks_settings['eccp_settings_activate_style_click_to_tweet_radio_field'] : 'no';
	?>
        <fieldset>
            <legend class="screen-reader-text"><?php esc_html_e( 'no', 'editor-custom-color-palette' ); ?></legend>
                <label for="settings_eccp_radio_option_1">
                    <input id="settings_eccp_radio_option_1" type="radio" name="eccp_settings_custom_gutenberg_block[eccp_settings_activate_style_click_to_tweet_radio_field]" value="no" <?php checked( $checked, 'no' ); ?>>
                    <?php esc_html_e( 'no', 'editor-custom-color-palette' ); ?>  <!--  label , text domain  -->
                </label>
                <br>
                <label for="settings_eccp_radio_option_2">
                    <input id="settings_eccp_radio_option_2" type="radio" name="eccp_settings_custom_gutenberg_block[eccp_settings_activate_style_click_to_tweet_radio_field]" value="yes" <?php checked( $checked, 'yes' ); ?>>
                    <?php esc_html_e( 'yes', 'editor-custom-color-palette' ); ?>
                </label>
        </fieldset>
		
    <?php
	
	echo '<h4 id="sub-title-custom-gutenberg-block-three"> <u>'. esc_html__( 'Tooltip Format','editor-custom-color-palette' ).'</u></h4>';
	
	echo '<div style="width:60%;" class="mise-en-avant">';
		echo '<strong>';
		echo esc_html__( '• In the last section of this page enable JS scripting for more customization.','editor-custom-color-palette' );
		echo'<br>';
		echo esc_html__( 'You then have access for the selected text to the Add tooltip control of the format menu of the block toolbar.','editor-custom-color-palette' );
		echo'<br>';
		echo esc_html__( 'The Add tooltip button displays a modal window where you can enter your tooltip message.','editor-custom-color-palette' );
		echo'<br>';
		echo '</strong>';
	echo '</div>';
	
	echo'<div>';
		echo '<img style="margin-left:5px;" src="'.esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/custom-gutenberg-block/tooltip-block-paragraph.jpg">';
		echo'<figcaption style="max-width:590px;text-align:center;font-weight:bold;margin:20px 0px 30px 0px ;">'.esc_html__( 'paragraph block tooltip','editor-custom-color-palette' ).'</figcaption>';
	echo'</div>';
	
	
}

// Affiche le parametre de champ text pour renseigner la couleur du texte pour l'info-bulle
function eccp_settings_tooltip_text_color_text_field_markup( $args ){
	
    $custom_gutenberg_blocks_settings = get_option( 'eccp_settings_custom_gutenberg_block' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_tooltip_text_color_text_field'] ) ? $custom_gutenberg_blocks_settings['eccp_settings_tooltip_text_color_text_field'] : '';
    ?>
        <input class="color-field" type="text" name="eccp_settings_custom_gutenberg_block[eccp_settings_tooltip_text_color_text_field]" data-default-color = "<?php echo esc_attr( '#FFFFFF' ); ?>" value="<?php echo esc_attr( $value ); ?>">
    <?php
	
}

// Affiche le parametre de champ text pour renseigner la couleur d'arrière plan pour l'info-bulle
function eccp_settings_tooltip_background_color_text_field_markup( $args ){
	
    $custom_gutenberg_blocks_settings = get_option( 'eccp_settings_custom_gutenberg_block' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_tooltip_background_color_text_field'] ) ? $custom_gutenberg_blocks_settings['eccp_settings_tooltip_background_color_text_field'] : '';
    ?>
        <input class="color-field" type="text" name="eccp_settings_custom_gutenberg_block[eccp_settings_tooltip_background_color_text_field]" data-default-color = "<?php echo esc_attr( '#1E5A99' ); ?>" value="<?php echo esc_attr( $value ); ?>">
    <?php
	
}

// Affiche le parametre de champ text pour renseigner la couleur double soulignement du texte
function eccp_settings_text_double_underline_color_text_field_markup( $args ){
	
    $custom_gutenberg_blocks_settings = get_option( 'eccp_settings_custom_gutenberg_block' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_text_double_underline_color_text_field'] ) ? $custom_gutenberg_blocks_settings['eccp_settings_text_double_underline_color_text_field'] : '';
    ?>
        <input class="color-field" type="text" name="eccp_settings_custom_gutenberg_block[eccp_settings_text_double_underline_color_text_field]" data-default-color = "<?php echo esc_attr( '#1E5A99' ); ?>" value="<?php echo esc_attr( $value ); ?>">
    <?php
	
	
	echo '<h3 id="section_list_block"><u>'. esc_html__( 'List Block','editor-custom-color-palette' ).'</u></h3>';

	echo '<div style="width:60%;" class="mise-en-avant">';
		echo '<strong>';
		echo esc_html__( '• Activate the styles below for the List block.','editor-custom-color-palette' );
		echo'<br>';
		echo esc_html__( 'These styles are for unordered lists except for the "Ordonned disk" style.','editor-custom-color-palette' );
		echo'<br>';
		echo esc_html__( '• In the last section of this page enable JS scripting for more customization.','editor-custom-color-palette' );
		echo'<br>';
		echo esc_html__( 'You then have access to the settings parameters for the size & color of the list bullets in the sidebar of the editor respectively:','editor-custom-color-palette' );
		echo'<br>';
		echo esc_html__( 'ECCP Bullets color panel & ECCP Styles panel','editor-custom-color-palette' );
		echo'<br>';
		echo esc_html__( '• For ordered lists:','editor-custom-color-palette' );
		echo'<br>';
		echo esc_html__( 'To have access to the size and color settings of the ordered list bullets, select the default style in the block parameters, except for the "Ordonned disk" style.','editor-custom-color-palette' );
		echo'<br>';
		echo esc_html__( 'The "Ordonned disk" style does not allow to indent the list as an ordered list by default.','editor-custom-color-palette' );
		echo '</strong>';
	echo '</div>';
	
}


/* ----------------- AFFICHE LES PARAMÈTRES DE CHAMP TEXTE POUR LE BLOC LISTE --------------------*/

// Affiche le paramètre de champ texte pour renseigner la couleur de la liste à puces
/* Paramétre renseigné dans l'editeur Gutenberg a partir de la version 2.5
function eccp_settings_bulleted_list_color_text_field_markup( $args ){
	
    $custom_gutenberg_blocks_settings = get_option( 'eccp_settings_custom_gutenberg_block' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_bulleted_list_color_text_field'] ) ? $custom_gutenberg_blocks_settings['eccp_settings_bulleted_list_color_text_field'] : '';
    ?>
        <input class="color-field" type="text" name="eccp_settings_custom_gutenberg_block[eccp_settings_bulleted_list_color_text_field]" data-default-color = "<?php echo esc_attr( $value ); ?>" value="<?php echo esc_attr( $value ); ?>">
    <?php

}*/

// Affiche notre champ de réglage pour renseigner la taille de la liste à puces 
/*Paramétre renseigné dans l'editeur Gutenberg a partir de la version 2.5
function eccp_settings_bulleted_list_size_text_field_markup( $args ){
	
	$custom_gutenberg_blocks_settings = get_option( 'eccp_settings_custom_gutenberg_block' );// le nom du réglage passé a la fonction register_setting()
	$value   = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_bulleted_list_size_text_field'] ) ? $custom_gutenberg_blocks_settings['eccp_settings_bulleted_list_size_text_field'] : '';
	?>
		<input style="width:40px;" size="2" maxlength="2" class="regular-text" pattern="([1-9]{1}[0-9]{0,1})" readonly="readonly" name="eccp_settings_custom_gutenberg_block[eccp_settings_bulleted_list_size_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
	<?php
	
}*/

/* Affiche le paramètre de champ radio pour activer les styles de liste à puces */
function eccp_settings_activate_styles_bullet_list_radio_field_markup( $args ){
	
    $custom_gutenberg_blocks_settings = get_option( 'eccp_settings_custom_gutenberg_block' );
    $checked = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_activate_styles_bullet_list_radio_field'] ) ? $custom_gutenberg_blocks_settings['eccp_settings_activate_styles_bullet_list_radio_field'] : 'no';
	?>
        <fieldset>
            <legend class="screen-reader-text"><?php esc_html_e( 'no', 'editor-custom-color-palette' ); ?></legend>
                <label for="settings_eccp_radio_option_1">
                    <input id="settings_eccp_radio_option_1" type="radio" name="eccp_settings_custom_gutenberg_block[eccp_settings_activate_styles_bullet_list_radio_field]" value="no" <?php checked( $checked, 'no' ); ?>>
                    <?php esc_html_e( 'no', 'editor-custom-color-palette' ); ?>  <!--  label , text domain  -->
                </label>
                <br>
                <label for="settings_eccp_radio_option_2">
                    <input id="settings_eccp_radio_option_2" type="radio" name="eccp_settings_custom_gutenberg_block[eccp_settings_activate_styles_bullet_list_radio_field]" value="yes" <?php checked( $checked, 'yes' ); ?>>
                    <?php esc_html_e( 'yes', 'editor-custom-color-palette' ); ?>
                </label>
        </fieldset>
		
    <?php
	
	echo '<h4 id="sub-title-section-list-block-one"><u>'. esc_html__( 'Bulleted list: other styles','editor-custom-color-palette' ).'</u></h3>';
	echo '<img src="'.esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/custom-gutenberg-block/style-check-bullet-list.jpg" width="260" height="170" >';
	echo '<img style="margin-left:15px;" src="'.esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/custom-gutenberg-block/style-circle-duotone-bullet-list.jpg" width="260" height="170" >';
	echo '<img style="margin-left:15px;" src="'.esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/custom-gutenberg-block/style-push-spin-bullet-list.jpg" width="260" height="170" >';
	echo '<img style="margin-top:20px;" src="'.esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/custom-gutenberg-block/diagram-style-list.jpg">';


	echo '<h3 id="section_group_block"><u>'. esc_html__( 'Group Block','editor-custom-color-palette' ).'</u></h3>';

	echo '<h4 id="sub-title-section-group-block-one"><u>'. esc_html__( 'Table of contents style','editor-custom-color-palette' ).'</u></h3>';
		
	echo '<div style="float:left;width:43%;" class="mise-en-avant">';
		echo '<strong>';
		echo esc_html__( 'In the style panel of the block settings added the Table Of Contents style.','editor-custom-color-palette' ); 
		echo'<br>';
		echo esc_html__( 'This style is used to display only in Front End a table of contents of the current publication.','editor-custom-color-palette' ); 
		echo'<br>';
		echo esc_html__( 'You must also first select an <article> tag in the advanced panel/HTML element group block parameter.','editor-custom-color-palette' ); 
		echo'<br><br>';
		echo esc_html__( 'In the group block settings you can change:','editor-custom-color-palette' ); 
		echo'<br>';
		echo esc_html__( '• Background color,text color & size,border radius.','editor-custom-color-palette' ); 
		echo'<br><br>';
		echo esc_html__( 'In the ECCP styles panel of the block settings you can modify:','editor-custom-color-palette' ); 
		echo'<br>';
		echo esc_html__( '• Setting the width of the Group block and therefore of the Table Of Contents.','editor-custom-color-palette' ); 
		echo'<br><br>';
		echo esc_html__( 'More customization with the options below:','editor-custom-color-palette' ); 
		echo'<br>';
		echo esc_html__( '• title,title color,for the table of contents','editor-custom-color-palette' );
		echo'<br>';
		echo esc_html__( '• enable link underlining on hover','editor-custom-color-palette' );
		echo'<br>';
		echo esc_html__( '• offset navigation anchors for a fixed header','editor-custom-color-palette' );
		echo'<br><br>';
		echo esc_html__( 'Also find the Table of Contents block for download in the reusable blocks tab.','editor-custom-color-palette' );
		echo'<br>';
		echo esc_html__( 'Once the reusable block has been inserted into the publication, click on the "convert to normal blocks" icon on the block\'s toolbar.','editor-custom-color-palette' );
		echo '</strong>';
	echo '</div>';
	
	echo '<div style="margin-right:15px;">';
		echo '<div>';
			echo '<img style="margin:15px 20px 0 0 ;" src="'.esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/custom-gutenberg-block/panel-style-table-of-contents.jpg">';
			echo'<figcaption style="font-weight:bold;margin-top:10px;">Panneau Styles du bloc Groupe</figcaption>';
		echo '</div>';
		echo '<div>';
			echo '<img style="margin:15px 20px 0 0 ;" src="'.esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/custom-gutenberg-block/table-of-contents-block-bac-office.jpg">';
			echo'<figcaption style="font-weight:bold;margin-top:10px;">Bloc réutilisable Table des matières en back office</figcaption>';
		echo '</div>';
	echo '</div>';
	
}

/* ----------------- AFFICHE LES PARAMÈTRES DE CHAMP TEXTE POUR LE BLOC GROUPE --------------------*/


// Affiche le paramètre de champ texte pour renseigner le nom de la table des matières
  function eccp_settings_name_table_of_contents_text_field_markup( $args ){
	
    $custom_gutenberg_blocks_settings = get_option( 'eccp_settings_custom_gutenberg_block' );// le nom du réglage passé a la fonction register_setting()
	
	
    $value   = !empty( $custom_gutenberg_blocks_settings['eccp_settings_name_table_of_contents_text_field'] ) ?  $custom_gutenberg_blocks_settings['eccp_settings_name_table_of_contents_text_field'] : 'Sommaire';
    ?>
        <input style="width:190px" size="30" maxlength="30" class="regular-text" type="text" name="eccp_settings_custom_gutenberg_block[eccp_settings_name_table_of_contents_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
    <?php
	    
} 


//Affiche le paramètre de champ texte pour renseigner la couleur d'arrière plan de la table des matières
function eccp_settings_title_color_table_of_contents_text_field_markup( $args ){
	
    $custom_gutenberg_blocks_settings = get_option( 'eccp_settings_custom_gutenberg_block' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_title_color_table_of_contents_text_field'] ) ? $custom_gutenberg_blocks_settings['eccp_settings_title_color_table_of_contents_text_field'] : '';
    ?>
        <input class="color-field" type="text" name="eccp_settings_custom_gutenberg_block[eccp_settings_title_color_table_of_contents_text_field]" data-default-color = "<?php echo esc_attr( '#333333' ); ?>" value="<?php echo esc_attr( $value ); ?>">
    <?php

}

// Affiche le paramètre de champ texte pour renseigner le décalage des ancres de navigations
function eccp_settings_offset_navigation_anchors_text_field_markup( $args ){
	
	$custom_gutenberg_blocks_settings = get_option( 'eccp_settings_custom_gutenberg_block' );// le nom du réglage passé a la fonction register_setting()
	// une valeur de 0 n'est pas enregistré en base de données, pour y palier on met une valeur de 0 par défaut en cas de variable vide
	$value   = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_offset_navigation_anchors_text_field'] ) ? $custom_gutenberg_blocks_settings['eccp_settings_offset_navigation_anchors_text_field'] : 0;
	?>
		<input style="width:70px;"  min="0" max="300" class="regular-text" type="number" name="eccp_settings_custom_gutenberg_block[eccp_settings_offset_navigation_anchors_text_field]" value="<?php echo ( esc_attr( $value ) ); ?>">
	<?php
	
} 

/* Affiche le paramètre de champ radio pour activer le soulignement des liens au survol */
function eccp_settings_activate_underline_table_of_contents_links_on_hover_radio_field_markup( $args ){
	
    $custom_gutenberg_blocks_settings = get_option( 'eccp_settings_custom_gutenberg_block' );
    $checked = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_activate_underline_table_of_contents_links_on_hover_radio_field'] ) ? $custom_gutenberg_blocks_settings['eccp_settings_activate_underline_table_of_contents_links_on_hover_radio_field'] : 'no';
	?>
        <fieldset>
            <legend class="screen-reader-text"><?php esc_html_e( 'no', 'editor-custom-color-palette' ); ?></legend>
                <label for="settings_eccp_radio_option_1">
                    <input id="settings_eccp_radio_option_1" type="radio" name="eccp_settings_custom_gutenberg_block[eccp_settings_activate_underline_table_of_contents_links_on_hover_radio_field]" value="no" <?php checked( $checked, 'no' ); ?>>
                    <?php esc_html_e( 'no', 'editor-custom-color-palette' ); ?>  <!--  label , text domain  -->
                </label>
                <br>
                <label for="settings_eccp_radio_option_2">
                    <input id="settings_eccp_radio_option_2" type="radio" name="eccp_settings_custom_gutenberg_block[eccp_settings_activate_underline_table_of_contents_links_on_hover_radio_field]" value="yes" <?php checked( $checked, 'yes' ); ?>>
                    <?php esc_html_e( 'yes', 'editor-custom-color-palette' ); ?>
                </label>
        </fieldset>
		
    <?php
	
	echo '<h3 id="section_block_social_media_icons"><u>'. esc_html__( 'Block social media icons','editor-custom-color-palette' ).'</u></h3>';
	
	echo '<div style="float:left;" class="mise-en-avant">';
		echo '<strong>';
		echo esc_html__( '• In the block settings style panel added Rectangular Shape,Float Right,Float Left styles.','editor-custom-color-palette' ); 
		echo'<br>';
		echo esc_html__( 'Rectangular Shape: Rectangular shape social icons.','editor-custom-color-palette' ); 
		echo'<br>';
		echo esc_html__( 'Float Right: Floating right social icons.','editor-custom-color-palette' ); 
		echo'<br>';
		echo esc_html__( 'Float Left: Floating left social icons.','editor-custom-color-palette' ); 
		echo'<br><br>';
		echo esc_html__( '• For social network icons, enter the label in the block parameters.','editor-custom-color-palette' ); 
		echo'<br>';
		echo esc_html__( 'The label will be visible when hovering over the social media icon.','editor-custom-color-palette' );
		echo'<br><br>';
		echo esc_html__( '• In the ECCP styles panel of the block settings, option to transform the profile link into a sharing link.','editor-custom-color-palette' );
		echo'<br>';
		echo esc_html__( 'Find the social icons block with sharing link styles for download in the reusable blocks tab.','editor-custom-color-palette' );
		echo '</strong>';
	echo '</div>';
	
	echo '<div>';
		echo '<img style="margin:15px 20px 0 0 ;" src="'.esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/custom-gutenberg-block/panel-style-social-icons.jpg">';
	echo '</div>';
	
	echo '<div>';
		echo '<img src="'.esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/custom-gutenberg-block/style-rectangle-shape.jpg">';
		echo'<figcaption style="text-align:center;font-weight:bold;margin-top:10px;">'.esc_html__( 'Rectangular Shape style with profile links','editor-custom-color-palette' ).'</figcaption>';
	echo '</div>';
	
	echo '<div style="margin-top:25px;">';
		echo '<img src="'.esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/custom-gutenberg-block/rectangular-shape-style-share-links.jpg">';
		echo'<figcaption style="text-align:center;font-weight:bold;margin-top:10px;">'.esc_html__( 'Rectangular Shape style with share links','editor-custom-color-palette' ).'</figcaption>';
	echo '</div>';
	
}



/* ----------------- AFFICHE LES CHAMPS POUR LE BLOC ICÔNES DE RÉSEAUX SOCIAUX --------------------*/

// Affiche le paramètre de champ radio pour activer le style Rectangle Shape
function eccp_settings_activate_rectangle_shape_style_radio_field_markup( $args ){
	
    $custom_gutenberg_blocks_settings = get_option( 'eccp_settings_custom_gutenberg_block' );
    $checked = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_activate_rectangle_shape_style_radio_field'] ) ? $custom_gutenberg_blocks_settings['eccp_settings_activate_rectangle_shape_style_radio_field'] : 'no';
	?>
        <fieldset>
            <legend class="screen-reader-text"><?php esc_html_e( 'no', 'editor-custom-color-palette' ); ?></legend>
                <label for="settings_eccp_radio_option_1">
                    <input id="settings_eccp_radio_option_1" type="radio" name="eccp_settings_custom_gutenberg_block[eccp_settings_activate_rectangle_shape_style_radio_field]" value="no" <?php checked( $checked, 'no' ); ?>>
                    <?php esc_html_e( 'no', 'editor-custom-color-palette' ); ?>  <!--  label , text domain  -->
                </label>
                <br>
                <label for="settings_eccp_radio_option_2">
                    <input id="settings_eccp_radio_option_2" type="radio" name="eccp_settings_custom_gutenberg_block[eccp_settings_activate_rectangle_shape_style_radio_field]" value="yes" <?php checked( $checked, 'yes' ); ?>>
                    <?php esc_html_e( 'yes', 'editor-custom-color-palette' ); ?>
                </label>
        </fieldset>
		
    <?php
	
	echo '<h3 id="section_image_block"><u>'. esc_html__( 'Image Block','editor-custom-color-palette' ).'</u></h3>';
	
	echo '<div style="float:left;" class="mise-en-avant">';
		echo '<strong>';
		echo esc_html__( 'Apply a background color for the image caption:','editor-custom-color-palette' ); 
		echo '</strong>';
		echo'<br><br>';
		echo esc_html__( '• select a background color below with the color picker','editor-custom-color-palette' ); 
		echo'<br>';
		echo esc_html__( '• with the toolbar of the image block select highlight','editor-custom-color-palette' );
	echo '</div>';
	
	echo '<div>';
	echo '<img style="margin-right:10px;" src="'.esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/custom-gutenberg-block/image-caption-highlight.jpg" width="150" height="237">';
	echo '</div>';
	
}


/* ----------------- AFFICHE LES PARAMÈTRES DE CHAMP TEXTE POUR LE BLOC IMAGE --------------------*/

/* Affiche notre champ de réglage pour renseigner pour la légende la taille de la police */
function eccp_settings_caption_font_size_text_field_markup( $args ){
	
	$custom_gutenberg_blocks_settings = get_option( 'eccp_settings_custom_gutenberg_block' );// le nom du réglage passé a la fonction register_setting()
	$value   = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_caption_font_size_text_field'] ) ? $custom_gutenberg_blocks_settings['eccp_settings_caption_font_size_text_field'] : '';
	?>
		<input style="width:40px;" size="2" maxlength="2" class="regular-text" type="text" pattern="([1-9]{1}[0-9]{0,1})" name="eccp_settings_custom_gutenberg_block[eccp_settings_caption_font_size_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
	<?php
	
} 

// Affiche le paramètre de champ texte pour renseigner la marge interne pour la légende
  function eccp_settings_caption_padding_text_field_markup( $args ){
	
    $custom_gutenberg_blocks_settings = get_option( 'eccp_settings_custom_gutenberg_block' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_caption_padding_text_field'] ) ?  $custom_gutenberg_blocks_settings['eccp_settings_caption_padding_text_field'] : '0';// un 0 par défaut pour une chaine vide afin de traiter la transparence
    
	// l'expression régulière: ([1-9]?[0-9]) de l'input définit un entier de 0 à 99 (sans 00, 01...) mais l'enregistrement du caractère 0 donne une chaine vide en base de donnée
	?>
        <input style="width:40px" size="2" maxlength="2" class="regular-text" type="text" pattern="([1-9]?[0-9])" name="eccp_settings_custom_gutenberg_block[eccp_settings_caption_padding_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
    <?php
	    
} 

// Affiche le paramètre de champ texte pour renseigner la couleur de la légende
function eccp_settings_caption_color_text_field_markup( $args ){
	
    $custom_gutenberg_blocks_settings = get_option( 'eccp_settings_custom_gutenberg_block' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_caption_color_text_field'] ) ? $custom_gutenberg_blocks_settings['eccp_settings_caption_color_text_field'] : '';
    ?>
        <input class="color-field" type="text" name="eccp_settings_custom_gutenberg_block[eccp_settings_caption_color_text_field]" data-default-color = "<?php echo esc_attr( '#FFFFFF' ); ?>" value="<?php echo esc_attr( $value ); ?>">
    <?php

}

// Affiche le paramètre de champ texte pour renseigner la couleur d'arrière plan de la légende
function eccp_settings_caption_background_color_text_field_markup( $args ){
	
    $custom_gutenberg_blocks_settings = get_option( 'eccp_settings_custom_gutenberg_block' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_caption_background_color_text_field'] ) ? $custom_gutenberg_blocks_settings['eccp_settings_caption_background_color_text_field'] : '';
    ?>
        <input class="color-field" type="text" name="eccp_settings_custom_gutenberg_block[eccp_settings_caption_background_color_text_field]" data-default-color = "<?php echo esc_attr( '#D5590B' ); ?>" value="<?php echo esc_attr( $value ); ?>">
    <?php
	
	echo '<h4 id="sub-title-section-image-block-one"><u>'. esc_html__( 'Other styles for the image block','editor-custom-color-palette' ).'</u></h3>';
	
	echo'<div class="container" style="float:left;" >';
		echo '<img src="'.esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/custom-gutenberg-block/style-image-circle.jpg">';
		echo'<figcaption style="text-align:center;font-weight:bold;margin-top:10px;">'.esc_html__( 'Circle Style Image','editor-custom-color-palette' ).'</figcaption>';
	
		echo'<div>';
			echo '<img style="margin-top:15px;" src="'.esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/custom-gutenberg-block/style-card-image.jpg">';
		echo'<figcaption style="text-align:center;font-weight:bold;margin-top:10px;">'.esc_html__( 'Card Style Image','editor-custom-color-palette' ).'</figcaption>';
    
		echo'</div>';  
	
	echo'</div>';
	
	echo'<div>';
		echo '<img style="margin-left:5px;" src="'.esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/custom-gutenberg-block/style-image-filter-grayscale.jpg">';
		echo'<figcaption style="text-align:left;font-weight:bold;margin-top:10px;">'.esc_html__( 'Grayscale Style Image','editor-custom-color-palette' ).'</figcaption>';
	echo'</div>';
	
	       
}

// Affiche le paramètre de champ radio pour activer le style Image: Circle
function eccp_settings_activate_style_image_circle_radio_field_markup( $args ){
	
    $custom_gutenberg_blocks_settings = get_option( 'eccp_settings_custom_gutenberg_block' );
    $checked = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_activate_style_image_circle_radio_field'] ) ? $custom_gutenberg_blocks_settings['eccp_settings_activate_style_image_circle_radio_field'] : 'no';
	?>
        <fieldset>
            <legend class="screen-reader-text"><?php esc_html_e( 'no', 'editor-custom-color-palette' ); ?></legend>
                <label for="settings_eccp_radio_option_1">
                    <input id="settings_eccp_radio_option_1" type="radio" name="eccp_settings_custom_gutenberg_block[eccp_settings_activate_style_image_circle_radio_field]" value="no" <?php checked( $checked, 'no' ); ?>>
                    <?php esc_html_e( 'no', 'editor-custom-color-palette' ); ?>  <!--  label , text domain  -->
                </label>
                <br>
                <label for="settings_eccp_radio_option_2">
                    <input id="settings_eccp_radio_option_2" type="radio" name="eccp_settings_custom_gutenberg_block[eccp_settings_activate_style_image_circle_radio_field]" value="yes" <?php checked( $checked, 'yes' ); ?>>
                    <?php esc_html_e( 'yes', 'editor-custom-color-palette' ); ?>
                </label>
        </fieldset>
		
    <?php
	
}

// Affiche le paramètre de champ radio pour activer le style Image: Filter Grayscale
function eccp_settings_activate_style_image_filter_grayscale_radio_field_markup( $args ){
	
    $custom_gutenberg_blocks_settings = get_option( 'eccp_settings_custom_gutenberg_block' );
    $checked = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_activate_style_image_filter_grayscale_radio_field'] ) ? $custom_gutenberg_blocks_settings['eccp_settings_activate_style_image_filter_grayscale_radio_field'] : 'no';
	?>
        <fieldset>
            <legend class="screen-reader-text"><?php esc_html_e( 'no', 'editor-custom-color-palette' ); ?></legend>
                <label for="settings_eccp_radio_option_1">
                    <input id="settings_eccp_radio_option_1" type="radio" name="eccp_settings_custom_gutenberg_block[eccp_settings_activate_style_image_filter_grayscale_radio_field]" value="no" <?php checked( $checked, 'no' ); ?>>
                    <?php esc_html_e( 'no', 'editor-custom-color-palette' ); ?>  <!--  label , text domain  -->
                </label>
                <br>
                <label for="settings_eccp_radio_option_2">
                    <input id="settings_eccp_radio_option_2" type="radio" name="eccp_settings_custom_gutenberg_block[eccp_settings_activate_style_image_filter_grayscale_radio_field]" value="yes" <?php checked( $checked, 'yes' ); ?>>
                    <?php esc_html_e( 'yes', 'editor-custom-color-palette' ); ?>
                </label>
        </fieldset>
		
    <?php
	
}

// Affiche le paramètre de champ radio pour activer le style Image: Card
function eccp_settings_activate_style_image_card_radio_field_markup( $args ){
	
    $custom_gutenberg_blocks_settings = get_option( 'eccp_settings_custom_gutenberg_block' );
    $checked = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_activate_style_image_card_radio_field'] ) ? $custom_gutenberg_blocks_settings['eccp_settings_activate_style_image_card_radio_field'] : 'no';
	?>
        <fieldset>
            <legend class="screen-reader-text"><?php esc_html_e( 'no', 'editor-custom-color-palette' ); ?></legend>
                <label for="settings_eccp_radio_option_1">
                    <input id="settings_eccp_radio_option_1" type="radio" name="eccp_settings_custom_gutenberg_block[eccp_settings_activate_style_image_card_radio_field]" value="no" <?php checked( $checked, 'no' ); ?>>
                    <?php esc_html_e( 'no', 'editor-custom-color-palette' ); ?>  <!--  label , text domain  -->
                </label>
                <br>
                <label for="settings_eccp_radio_option_2">
                    <input id="settings_eccp_radio_option_2" type="radio" name="eccp_settings_custom_gutenberg_block[eccp_settings_activate_style_image_card_radio_field]" value="yes" <?php checked( $checked, 'yes' ); ?>>
                    <?php esc_html_e( 'yes', 'editor-custom-color-palette' ); ?>
                </label>
        </fieldset>
		
    <?php
	
	echo '<h4 id="sub-title-section-image-block-two"><u>'. esc_html__( 'Add new size to image block settings','editor-custom-color-palette' ).'</u></h4>';
	
	
	echo '<div style="float:left;" class="mise-en-avant">';
		echo '<strong>';
		echo esc_html__( '• Define a new image size to the block parameters as in the example image opposite: Custom (720 * 405px).','editor-custom-color-palette' );
		echo'<br><br>';
		echo esc_html__( '• Once the dimensions parameters and the name of the size have been declared and saved, you must then recreate the thumbnails of your site, so that this new image size appears in the block parameters.','editor-custom-color-palette' );
		echo'<br>';
		echo esc_html__( 'For that, I recommend this plugin:','editor-custom-color-palette' ); 	
		echo'<br>';
		echo '<a href="https://fr.wordpress.org/plugins/regenerate-thumbnails/" target="_blank">'. esc_html__( 'Regenerate Thumbnails', 'editor-custom-color-palette' ).'</a>';
		echo '</strong>';
	echo '</div>';
	
	echo '<div style="padding-top:15px;">';
	echo '<img  src="'.esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/custom-gutenberg-block/custom-sizes-images.jpg">';
	echo '</div>';
	
	
}


/*----------------Affiche les champs pour définir une taille d'image aux paramètres du bloc -------------------*/

// Affiche le paramètre de champ radio pour activer une taille d'image aux paramètres du bloc
function eccp_settings_enable_image_size_setting_radio_field_markup( $args ){
	
    $custom_gutenberg_blocks_settings = get_option( 'eccp_settings_custom_gutenberg_block' );
    $checked = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_enable_image_size_setting_radio_field'] ) ? $custom_gutenberg_blocks_settings['eccp_settings_enable_image_size_setting_radio_field'] : 'no';
	?>
        <fieldset>
            <legend class="screen-reader-text"><?php esc_html_e( 'no', 'editor-custom-color-palette' ); ?></legend>
                <label for="settings_eccp_radio_option_1">
                    <input id="settings_eccp_radio_option_1" type="radio" name="eccp_settings_custom_gutenberg_block[eccp_settings_enable_image_size_setting_radio_field]" value="no" <?php checked( $checked, 'no' ); ?>>
                    <?php esc_html_e( 'no', 'editor-custom-color-palette' ); ?>  <!--  label , text domain  -->
                </label>
                <br>
                <label for="settings_eccp_radio_option_2">
                    <input id="settings_eccp_radio_option_2" type="radio" name="eccp_settings_custom_gutenberg_block[eccp_settings_enable_image_size_setting_radio_field]" value="yes" <?php checked( $checked, 'yes' ); ?>>
                    <?php esc_html_e( 'yes', 'editor-custom-color-palette' ); ?>
                </label>
        </fieldset>
		
    <?php
	
	
}


/* Affiche notre champ de réglage pour renseigner la largeur pour la taille personnalisé */
function eccp_settings_custom_image_width_parameter_text_field_markup( $args ){
	
	$custom_gutenberg_blocks_settings = get_option( 'eccp_settings_custom_gutenberg_block' );// le nom du réglage passé a la fonction register_setting()
	$value   = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_custom_image_width_parameter_text_field'] ) ? $custom_gutenberg_blocks_settings['eccp_settings_custom_image_width_parameter_text_field'] : 720;
	?>
		<input style="width:70px;"  min="150" max="1024" class="regular-text" type="number" name="eccp_settings_custom_gutenberg_block[eccp_settings_custom_image_width_parameter_text_field]" value="<?php echo ( esc_attr( $value ) ); ?>">
	<?php
	
	
} 

/* Affiche notre champ de réglage pour renseigner la hauteur pour la taille personnalisé */
function eccp_settings_custom_image_height_parameter_text_field_markup( $args ){
	
	$custom_gutenberg_blocks_settings = get_option( 'eccp_settings_custom_gutenberg_block' );// le nom du réglage passé a la fonction register_setting()
	$value   = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_custom_image_height_parameter_text_field'] ) ? $custom_gutenberg_blocks_settings['eccp_settings_custom_image_height_parameter_text_field'] : 405;
	?>
		<input style="width:70px;" min="150" max="1024" class="regular-text" type="number" name="eccp_settings_custom_gutenberg_block[eccp_settings_custom_image_height_parameter_text_field]" value="<?php echo ( esc_attr( $value ) ); ?>">
	<?php
	
	
} 


// Affiche le paramètre de champ texte pour renseigner le nom de cette nouvelle taille d'image aux paramètres du bloc
  function eccp_settings_name_new_image_size_text_field_markup( $args ){
	
    $custom_gutenberg_blocks_settings = get_option( 'eccp_settings_custom_gutenberg_block' );// le nom du réglage passé a la fonction register_setting()
	
	
    $value   = !empty( $custom_gutenberg_blocks_settings['eccp_settings_name_new_image_size_text_field'] ) ?  $custom_gutenberg_blocks_settings['eccp_settings_name_new_image_size_text_field'] : 'Custom';
    ?>
        <input style="width:190px" size="30" maxlength="30" class="regular-text" type="text" name="eccp_settings_custom_gutenberg_block[eccp_settings_name_new_image_size_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
    <?php
	    
} 


// Affiche le paramètre de champ texte pour renseigner le slug de cette nouvelle taille d'image aux paramètres du bloc
  function eccp_settings_slug_new_image_size_text_field_markup( $args ){
	
    $custom_gutenberg_blocks_settings = get_option( 'eccp_settings_custom_gutenberg_block' );// le nom du réglage passé a la fonction register_setting()
	$value  = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_name_new_image_size_text_field'] ) ?  eccp_sanitize_chain( esc_html__($custom_gutenberg_blocks_settings['eccp_settings_name_new_image_size_text_field'],'editor-custom-color-palette') ) : 'custom';
	
    
    ?>
        <input style="width:190px" size="30" maxlength="30" class="regular-text" type="text" readonly="readonly" name="eccp_settings_custom_gutenberg_block[eccp_settings_slug_new_image_size_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
    <?php
	
	echo '<h4 id="sub-title-section-image-block-three"><u>'. esc_html__( 'Change default add media settings','editor-custom-color-palette' ).'</u></h4>';
	
}

/*---------------- Affiche les champs pour définr les paramètres par défaut lors d'un ajout de média -------------------*/

/* Affiche notre champ de réglage pour renseigner le type de lien par défaut de l'image */
function eccp_settings_image_default_link_type_select_field_markup( $args ){
	
    $custom_gutenberg_blocks_settings = get_option( 'eccp_settings_custom_gutenberg_block' ); // le nom du réglage passé a la fonction register_setting()
    $selected = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_image_default_link_type_select_field'] ) ? $custom_gutenberg_blocks_settings['eccp_settings_image_default_link_type_select_field'] : '';// ID du champ
    
	?>
	
        <select style="width:165px;" name="eccp_settings_custom_gutenberg_block[eccp_settings_image_default_link_type_select_field]">
		
            <option value=""><?php esc_html_e( 'Choose an option', 'editor-custom-color-palette' ); ?></option>
			
            <!-- On obtiend les valeurs passées dans un tableau d'options  -->
            <?php foreach ( $args['options'] as $value => $label ) : ?>
                <option value="<?php echo esc_attr( $value ); ?>" <?php selected( $selected, $value ); ?>><?php echo esc_html( $label ); ?></option>
            <?php endforeach; ?>
			
        </select>
		
    <?php
	
	
}

/* Affiche notre champ de réglage pour renseigner la taille de l'image par défaut */
function eccp_settings_image_default_size_select_field_markup( $args ){
	
    $custom_gutenberg_blocks_settings = get_option( 'eccp_settings_custom_gutenberg_block' ); // le nom du réglage passé a la fonction register_setting()
    $selected = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_image_default_size_select_field'] ) ? $custom_gutenberg_blocks_settings['eccp_settings_image_default_size_select_field'] : '';// ID du champ
    
	?>
	
        <select style="width:165px;" name="eccp_settings_custom_gutenberg_block[eccp_settings_image_default_size_select_field]">
		
            <option value=""><?php esc_html_e( 'Choose an option', 'editor-custom-color-palette' ); ?></option>
			
            <!-- On obtiend les valeurs passées dans un tableau d'options  -->
            <?php foreach ( $args['options'] as $value => $label ) : ?>
                <option value="<?php echo esc_attr( $value ); ?>" <?php selected( $selected, $value ); ?>><?php echo esc_html( $label ); ?></option>
            <?php endforeach; ?>
			
        </select>
		
    <?php
	
	echo '<h3 id="section_button_block"><u>'. esc_html__( 'Button Block','editor-custom-color-palette' ).'</u></h3>';
	
	echo '<div style="float:left;" class="mise-en-avant">';
		echo '<strong>';
		echo esc_html__( '• Activate the styles of the buttons below','editor-custom-color-palette' );
		echo'<br>';
		echo esc_html__( '• You then have the Outline hover arrow & Download style available in the block settings','editor-custom-color-palette' );
		echo'<br>';
		echo esc_html__( '• Depending on the Fill or Outline style, you have access to the parameters in the sidebar of the editor:','editor-custom-color-palette' ); 	
		echo'<br>';
		echo esc_html__( 'ECCP Hover Fill Style or ECCP Hover Outline Style panel','editor-custom-color-palette' ); 	
		echo'<br>';
		echo esc_html__( '• For the Outline hover arrow style (hover style: outline with arrow icon oriented to the right) the hover style in the front end is automatically applied according to the background color selected in the back office','editor-custom-color-palette' ); 				
		echo '</strong>';
	echo '</div>';
	
	echo '<div style="padding-top:15px;">';
	echo '<img  src="'.esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/custom-gutenberg-block/buttons-styles.jpg">';
	echo '</div>';
	
}




/*-------------------AFFICHE LES PARAMÈTRES DE CHAMPS TEXTE POUR LE BLOC BOUTONS-----------------------------*/

// Affiche le paramètre de champ radio pour activer les styles des boutons au survol
function eccp_settings_activate_button_styles_hover_radio_field_markup( $args ){
	
    $custom_gutenberg_blocks_settings = get_option( 'eccp_settings_custom_gutenberg_block' );
    $checked = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_activate_button_styles_hover_radio_field'] ) ? $custom_gutenberg_blocks_settings['eccp_settings_activate_button_styles_hover_radio_field'] : 'no';
	?>
        <fieldset>
            <legend class="screen-reader-text"><?php esc_html_e( 'no', 'editor-custom-color-palette' ); ?></legend>
                <label for="settings_eccp_radio_option_1">
                    <input id="settings_eccp_radio_option_1" type="radio" name="eccp_settings_custom_gutenberg_block[eccp_settings_activate_button_styles_hover_radio_field]" value="no" <?php checked( $checked, 'no' ); ?>>
                    <?php esc_html_e( 'no', 'editor-custom-color-palette' ); ?>  <!--  label , text domain  -->
                </label>
                <br>
                <label for="settings_eccp_radio_option_2">
                    <input id="settings_eccp_radio_option_2" type="radio" name="eccp_settings_custom_gutenberg_block[eccp_settings_activate_button_styles_hover_radio_field]" value="yes" <?php checked( $checked, 'yes' ); ?>>
                    <?php esc_html_e( 'yes', 'editor-custom-color-palette' ); ?>
                </label>
        </fieldset>
		
    <?php
	
	//echo '<h4 id="sub-title-custom-gutenberg-block-eight"><u>'. esc_html__( 'Hover fill style button','editor-custom-color-palette' ).'</u></h3>';
	
	echo '<div style="float:right;margin-bottom:40px;margin-top:30px;">';
		echo '<div style="float:left;" class="mise-en-avant">';
			echo '<strong>';
			echo esc_html__( '• In the last section of this page enable JS scripting for more customization.','editor-custom-color-palette' );
			echo'<br>';
			echo esc_html__( 'You then have in the toolbar of the block a new button which allows you to apply a Dashicon icon to the left or to the right of the selected text of the button.','editor-custom-color-palette' );
			echo'<br>';	
			echo '</strong>';
		echo '</div>';
		
		echo '<div style="padding-top:15px;">';
		echo '<img  src="'.esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/custom-gutenberg-block/icon-picker-dashicon.jpg">';
		echo '</div>';
	echo '</div>';
	

	echo '<h3 id="section_column_block"><u>'. esc_html__( 'Column Block','editor-custom-color-palette' ).'</u></h3>';
	
	echo '<div style="float:left;" class="mise-en-avant">';
		echo '<strong>';
		echo esc_html__( '• Activate the styles below for the column block','editor-custom-color-palette' );
		echo'<br>';
		echo esc_html__( '• You then have two styles available in the block parameters: Column reverse mobile & responsive three column','editor-custom-color-palette' );
		echo'<br>';
		echo esc_html__( '• The activation of styles also improves the display of the column block in back office & front end by adding margin','editor-custom-color-palette' ); 		
		echo '</strong>';
	echo '</div>';
	
	echo '<div>';
	echo '<img  src="'.esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/custom-gutenberg-block/style-columns-block.jpg" with="299" height="230">';
	echo '</div>';
	
	echo '<h4><u>'. esc_html__( 'style responsive three columns','editor-custom-color-palette' ).'</u></h4>';
	echo '<img style="margin-right:10px;margin-top:20px;" src="'.esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/custom-gutenberg-block/style-responsive-three-columns.jpg">';
	
}	

/*-------------------Affichage des champs pour le style plein au survol-----------------------------*/
				//Configuré dans l'editeur Gutenberg a partir de la version 2.6

/* Affiche le paramètre de champ texte pour renseigner la couleur de fond du bouton au survol
function eccp_settings_hover_fill_style_background_color_text_field_markup( $args ){
	
    $custom_gutenberg_blocks_settings = get_option( 'eccp_settings_custom_gutenberg_block' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_hover_fill_style_background_color_text_field'] ) ? $custom_gutenberg_blocks_settings['eccp_settings_hover_fill_style_background_color_text_field'] : '';
    ?>
        <input class="color-field" type="text" name="eccp_settings_custom_gutenberg_block[eccp_settings_hover_fill_style_background_color_text_field]" data-default-color = "<?php echo esc_attr( $value ); ?>" value="<?php echo esc_attr( $value ); ?>">
    <?php

} */

/* Affiche le paramètre de champ texte pour renseigner l'opacité de la couleur de fond du bouton au survol
  function eccp_settings_hover_fill_style_backgound_color_opacity_text_field_markup( $args ){
	
    $custom_gutenberg_blocks_settings = get_option( 'eccp_settings_custom_gutenberg_block' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_hover_fill_style_backgound_color_opacity_text_field'] ) ?  $custom_gutenberg_blocks_settings['eccp_settings_hover_fill_style_backgound_color_opacity_text_field'] : '0';// un 0 par défaut pour une chaine vide afin de traiter la transparence
    
	// l'expression régulière: ([1-9]?[0-9])|100 de l'input définit un entier de 0 à 100 (sans 00, 01...) mais l'enregistrement du caractère 0 donne une chaine vide en base de donnée
	?>
        <input style="width:40px" size="3" maxlength="3" class="regular-text" type="text" pattern="([1-9]?[0-9])|100" name="eccp_settings_custom_gutenberg_block[eccp_settings_hover_fill_style_backgound_color_opacity_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
    <?php
	    
} */

/* Affiche le paramètre de champ texte pour renseigner la couleur de bordure du bouton au survol
function eccp_settings_hover_fill_style_border_color_text_field_markup( $args ){
	
    $custom_gutenberg_blocks_settings = get_option( 'eccp_settings_custom_gutenberg_block' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_hover_fill_style_border_color_text_field'] ) ? $custom_gutenberg_blocks_settings['eccp_settings_hover_fill_style_border_color_text_field'] : '';
    ?>
        <input class="color-field" type="text" name="eccp_settings_custom_gutenberg_block[eccp_settings_hover_fill_style_border_color_text_field]" data-default-color = "<?php echo esc_attr( $value ); ?>" value="<?php echo esc_attr( $value ); ?>">
    <?php

} */

/* Affiche le paramètre de champ texte pour renseigner la couleur du texte pour le bouton au survol
function eccp_settings_hover_fill_style_text_color_text_field_markup( $args ){
	
    $custom_gutenberg_blocks_settings = get_option( 'eccp_settings_custom_gutenberg_block' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_hover_fill_style_text_color_text_field'] ) ? $custom_gutenberg_blocks_settings['eccp_settings_hover_fill_style_text_color_text_field'] : '';
    ?>
        <input class="color-field" type="text" name="eccp_settings_custom_gutenberg_block[eccp_settings_hover_fill_style_text_color_text_field]" data-default-color = "<?php echo esc_attr( $value ); ?>" value="<?php echo esc_attr( $value ); ?>">
    <?php

	echo '<h4 id="sub-title-custom-gutenberg-block-nine"><u>'. esc_html__( 'Hover outline style button','editor-custom-color-palette' ).'</u></h3>';

} */

/*-------------------Affichage des champs pour le style contour au survol-----------------------------*/
			//Configuré dans l'editeur Gutenberg a partir de la version 2.6


/* Affiche le paramètre de champ texte pour renseigner la couleur de fond du bouton au survol
function eccp_settings_hover_outline_style_background_color_text_field_markup( $args ){
	
    $custom_gutenberg_blocks_settings = get_option( 'eccp_settings_custom_gutenberg_block' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_hover_outline_style_background_color_text_field'] ) ? $custom_gutenberg_blocks_settings['eccp_settings_hover_outline_style_background_color_text_field'] : '';
    ?>
        <input class="color-field" type="text" name="eccp_settings_custom_gutenberg_block[eccp_settings_hover_outline_style_background_color_text_field]" data-default-color = "<?php echo esc_attr( $value ); ?>" value="<?php echo esc_attr( $value ); ?>">
    <?php

} */

/* Affiche le paramètre de champ texte pour renseigner l'opacité de la couleur de fond du bouton au survol
  function eccp_settings_hover_outline_style_backgound_color_opacity_text_field_markup( $args ){
	
    $custom_gutenberg_blocks_settings = get_option( 'eccp_settings_custom_gutenberg_block' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_hover_outline_style_backgound_color_opacity_text_field'] ) ?  $custom_gutenberg_blocks_settings['eccp_settings_hover_outline_style_backgound_color_opacity_text_field'] : '0';// un 0 par défaut pour une chaine vide afin de traiter la transparence
    
	// l'expression régulière: ([1-9]?[0-9])|100 de l'input définit un entier de 0 à 100 (sans 00, 01...) mais l'enregistrement du caractère 0 donne une chaine vide en base de donnée
	?>
        <input style="width:40px" size="3" maxlength="3" class="regular-text" type="text" pattern="([1-9]?[0-9])|100" name="eccp_settings_custom_gutenberg_block[eccp_settings_hover_outline_style_backgound_color_opacity_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
    <?php
	    
} */ 

/* Affiche le paramètre de champ texte pour renseigner la couleur de bordure du bouton au survol
function eccp_settings_hover_outline_style_border_color_text_field_markup( $args ){
	
    $custom_gutenberg_blocks_settings = get_option( 'eccp_settings_custom_gutenberg_block' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_hover_outline_style_border_color_text_field'] ) ? $custom_gutenberg_blocks_settings['eccp_settings_hover_outline_style_border_color_text_field'] : '';
    ?>
        <input class="color-field" type="text" name="eccp_settings_custom_gutenberg_block[eccp_settings_hover_outline_style_border_color_text_field]" data-default-color = "<?php echo esc_attr( $value ); ?>" value="<?php echo esc_attr( $value ); ?>">
    <?php

} */

/* Affiche le paramètre de champ texte pour renseigner la couleur du texte pour le bouton au survol
function eccp_settings_hover_outline_style_text_color_text_field_markup( $args ){
	
    $custom_gutenberg_blocks_settings = get_option( 'eccp_settings_custom_gutenberg_block' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_hover_outline_style_text_color_text_field'] ) ? $custom_gutenberg_blocks_settings['eccp_settings_hover_outline_style_text_color_text_field'] : '';
    ?>
        <input class="color-field" type="text" name="eccp_settings_custom_gutenberg_block[eccp_settings_hover_outline_style_text_color_text_field]" data-default-color = "<?php echo esc_attr( $value ); ?>" value="<?php echo esc_attr( $value ); ?>">
    <?php

} */


/*-------------------AFFFICHE LES CHAMPS POUR LE BLOC PARENT COLONNES-----------------------------*/

// Affiche le paramètre de champ radio pour activer les styles pour le bloc parent colonnes
function eccp_settings_activate_columns_block_styles_radio_field_markup( $args ){
	
    $custom_gutenberg_blocks_settings = get_option( 'eccp_settings_custom_gutenberg_block' );
    $checked = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_activate_columns_block_styles_radio_field'] ) ? $custom_gutenberg_blocks_settings['eccp_settings_activate_columns_block_styles_radio_field'] : 'no';
	?>
        <fieldset>
            <legend class="screen-reader-text"><?php esc_html_e( 'no', 'editor-custom-color-palette' ); ?></legend>
                <label for="settings_eccp_radio_option_1">
                    <input id="settings_eccp_radio_option_1" type="radio" name="eccp_settings_custom_gutenberg_block[eccp_settings_activate_columns_block_styles_radio_field]" value="no" <?php checked( $checked, 'no' ); ?>>
                    <?php esc_html_e( 'no', 'editor-custom-color-palette' ); ?>  <!--  label , text domain  -->
                </label>
                <br>
                <label for="settings_eccp_radio_option_2">
                    <input id="settings_eccp_radio_option_2" type="radio" name="eccp_settings_custom_gutenberg_block[eccp_settings_activate_columns_block_styles_radio_field]" value="yes" <?php checked( $checked, 'yes' ); ?>>
                    <?php esc_html_e( 'yes', 'editor-custom-color-palette' ); ?>
                </label>
        </fieldset>
		
    <?php
	
	echo '<h3 id="section_cover_block"><u>'. esc_html__( 'Cover Block','editor-custom-color-palette' ).'</u></h3>';
	
	echo '<div style="float:left;" class="mise-en-avant">';
		echo '<strong>';
		echo'<br>';
		echo esc_html__( '• To adjust the height of the banner, in the last section of this page you must enable JS scripting for more customization.','editor-custom-color-palette' ); 
		echo'<br>';
		echo esc_html__( 'You then have access to the settings in the block parameters (ECCP Styles panel).','editor-custom-color-palette' ); 
		echo'<br><br>';
		echo '</strong>';
	echo '</div>';
	
	echo '<div>';
		echo '<img style="margin-left:10px;margin-top:20px;"  src="'.esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/custom-gutenberg-block/mobile-height-cover.jpg">';
	echo '</div>';
	
	
	
	echo '<h3 id="section_media_text_block"><u>'. esc_html__( 'Media & Text Block','editor-custom-color-palette' ).'</u></h3>';
	
	echo '<div style="float:left;" class="mise-en-avant">';
		echo '<strong>';
		echo esc_html__( '• Enable (below) styles for media & text block','editor-custom-color-palette' );
		echo'<br>';
		echo esc_html__( '• In the block settings (Styles panel) activate the Half background style.','editor-custom-color-palette' );
		echo'<br>';
		echo esc_html__( '• To adjust the half background color, in the last section of this page you need to enable JS scripting for more customization.','editor-custom-color-palette' );
		echo'<br>';
		echo esc_html__( 'You then have access to the settings in the block parameters (ECCP Box Shadow panel).','editor-custom-color-palette' ); 
		echo'<br>';
		echo esc_html__( '• Enable box shadow style.','editor-custom-color-palette' );
		echo'<br><br>';
		echo '</strong>';
		echo esc_html__( 'Example settings:','editor-custom-color-palette' );
		echo'<br>';
		echo esc_html__( 'Box Shadow Color:#0E6487 X:20 Y:20 Blur:0 Diffuse:0','editor-custom-color-palette' );
	echo '</div>';
	
	echo '<div>';
		echo '<img  src="'.esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/custom-gutenberg-block/style-media-text-block.jpg">';
		echo '<img style="margin-left:10px;margin-top:20px;"  src="'.esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/custom-gutenberg-block/box-shadow-enable.jpg">';
	echo '</div>';
	
	echo '<h4><u>'. esc_html__( 'style half background','editor-custom-color-palette' ).'</u></h4>';
	echo '<img style="margin-right:10px;margin-top:20px;" src="'.esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/custom-gutenberg-block/style-half-background.jpg">';

	
}


/*-------------------AFFFICHE LES CHAMPS POUR LE BLOC MÉDIA & TEXTE -----------------------------*/

// Affiche le paramètre de champ radio pour activer les styles pour le bloc média & texte
function eccp_settings_activate_media_text_block_styles_radio_field_markup( $args ){
	
    $custom_gutenberg_blocks_settings = get_option( 'eccp_settings_custom_gutenberg_block' );
    $checked = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_activate_media_text_block_styles_radio_field'] ) ? $custom_gutenberg_blocks_settings['eccp_settings_activate_media_text_block_styles_radio_field'] : 'no';
	?>
        <fieldset>
            <legend class="screen-reader-text"><?php esc_html_e( 'no', 'editor-custom-color-palette' ); ?></legend>
                <label for="settings_eccp_radio_option_1">
                    <input id="settings_eccp_radio_option_1" type="radio" name="eccp_settings_custom_gutenberg_block[eccp_settings_activate_media_text_block_styles_radio_field]" value="no" <?php checked( $checked, 'no' ); ?>>
                    <?php esc_html_e( 'no', 'editor-custom-color-palette' ); ?>  <!--  label , text domain  -->
                </label>
                <br>
                <label for="settings_eccp_radio_option_2">
                    <input id="settings_eccp_radio_option_2" type="radio" name="eccp_settings_custom_gutenberg_block[eccp_settings_activate_media_text_block_styles_radio_field]" value="yes" <?php checked( $checked, 'yes' ); ?>>
                    <?php esc_html_e( 'yes', 'editor-custom-color-palette' ); ?>
                </label>
        </fieldset>
		
    <?php
	
	echo '<h3 id="section_read_more_block"><u>'. esc_html__( 'Read More Block','editor-custom-color-palette' ).'</u></h3>';
	
	echo '<div class="mise-en-avant">';
		echo '<strong>';
		echo esc_html__( '• Activate the styles below for the Read More block','editor-custom-color-palette' );
		echo'<br>';
		echo esc_html__( '• You can then customize the Front End link: Read more messages as a button with an arrow icon pointing to the right','editor-custom-color-palette' );
		echo '</strong>';
	echo '</div>';
	
}

/*-------------------AFFFICHE LES CHAMPS POUR LE BLOC READ MORE -----------------------------*/

// Affiche le paramètre de champ radio pour activer les styles pour le bloc Read More
function eccp_settings_activate_block_styles_read_more_radio_field_markup( $args ){
	
    $custom_gutenberg_blocks_settings = get_option( 'eccp_settings_custom_gutenberg_block' );
    $checked = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_activate_block_styles_read_more_radio_field'] ) ? $custom_gutenberg_blocks_settings['eccp_settings_activate_block_styles_read_more_radio_field'] : 'no';
	?>
        <fieldset>
            <legend class="screen-reader-text"><?php esc_html_e( 'no', 'editor-custom-color-palette' ); ?></legend>
                <label for="settings_eccp_radio_option_1">
                    <input id="settings_eccp_radio_option_1" type="radio" name="eccp_settings_custom_gutenberg_block[eccp_settings_activate_block_styles_read_more_radio_field]" value="no" <?php checked( $checked, 'no' ); ?>>
                    <?php esc_html_e( 'no', 'editor-custom-color-palette' ); ?>  <!--  label , text domain  -->
                </label>
                <br>
                <label for="settings_eccp_radio_option_2">
                    <input id="settings_eccp_radio_option_2" type="radio" name="eccp_settings_custom_gutenberg_block[eccp_settings_activate_block_styles_read_more_radio_field]" value="yes" <?php checked( $checked, 'yes' ); ?>>
                    <?php esc_html_e( 'yes', 'editor-custom-color-palette' ); ?>
                </label>
        </fieldset>
		
    <?php
	
}


// Affiche le paramètre de champ texte pour renseigner le libellé de la balise Lire La Suite
  function eccp_settings_link_text_read_more_text_field_markup( $args ){
	
    $settings = get_option( 'eccp_settings_custom_gutenberg_block' );// le nom du réglage passé a la fonction register_setting()
	
	
    $value   = ! empty( $settings['eccp_settings_link_text_read_more_text_field'] ) ?  esc_html__($settings['eccp_settings_link_text_read_more_text_field'],'editor-custom-color-palette') : 'Read more';
    ?>
        <input style="width:180px" size="25" maxlength="25" class="regular-text" type="text" name="eccp_settings_custom_gutenberg_block[eccp_settings_link_text_read_more_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
    <?php
	
	echo '<h4 id="sub-title-section-read-more-block-one"><u>'. esc_html__( 'block style read more','editor-custom-color-palette' ).'</u></h4>';
	    
} 

/*-------------------Affichage des champs pour le style du bloc Lire La Suite -----------------------------*/

// Affiche le paramètre de champ texte pour renseigner la couleur de fond 
function eccp_settings_block_read_more_background_color_text_field_markup( $args ){
	
    $custom_gutenberg_blocks_settings = get_option( 'eccp_settings_custom_gutenberg_block' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_block_read_more_background_color_text_field'] ) ? $custom_gutenberg_blocks_settings['eccp_settings_block_read_more_background_color_text_field'] : '';
    ?>
        <input class="color-field" type="text" name="eccp_settings_custom_gutenberg_block[eccp_settings_block_read_more_background_color_text_field]" data-default-color = "<?php echo esc_attr( '#F37020' ); ?>" value="<?php echo esc_attr( $value ); ?>">
    <?php

}

// Affiche le paramètre de champ texte pour renseigner l'opacité de la couleur de fond 
  function eccp_settings_block_read_more_backgound_color_opacity_text_field_markup( $args ){
	
    $custom_gutenberg_blocks_settings = get_option( 'eccp_settings_custom_gutenberg_block' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_block_read_more_backgound_color_opacity_text_field'] ) ?  $custom_gutenberg_blocks_settings['eccp_settings_block_read_more_backgound_color_opacity_text_field'] : '0';// un 0 par défaut pour une chaine vide afin de traiter la transparence
    
	// l'expression régulière: ([1-9]?[0-9])|100 de l'input définit un entier de 0 à 100 (sans 00, 01...) mais l'enregistrement du caractère 0 donne une chaine vide en base de donnée
	?>
        <input style="width:40px" size="3" maxlength="3" class="regular-text" type="text" pattern="([1-9]?[0-9])|100" name="eccp_settings_custom_gutenberg_block[eccp_settings_block_read_more_backgound_color_opacity_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
    <?php
	    
} 

// Affiche le paramètre de champ texte pour renseigner la couleur de bordure du bouton 
function eccp_settings_block_read_more_border_color_text_field_markup( $args ){
	
    $custom_gutenberg_blocks_settings = get_option( 'eccp_settings_custom_gutenberg_block' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_block_read_more_border_color_text_field'] ) ? $custom_gutenberg_blocks_settings['eccp_settings_block_read_more_border_color_text_field'] : '';
    ?>
        <input class="color-field" type="text" name="eccp_settings_custom_gutenberg_block[eccp_settings_block_read_more_border_color_text_field]" data-default-color = "<?php echo esc_attr( '#F37020' ); ?>" value="<?php echo esc_attr( $value ); ?>">
    <?php

}

// Affiche le paramètre de champ texte pour renseigner la couleur du texte pour le bouton 
function eccp_settings_block_read_more_text_color_text_field_markup( $args ){
	
    $custom_gutenberg_blocks_settings = get_option( 'eccp_settings_custom_gutenberg_block' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_block_read_more_text_color_text_field'] ) ? $custom_gutenberg_blocks_settings['eccp_settings_block_read_more_text_color_text_field'] : '';
    ?>
        <input class="color-field" type="text" name="eccp_settings_custom_gutenberg_block[eccp_settings_block_read_more_text_color_text_field]" data-default-color = "<?php echo esc_attr( '#FFFFFF' ); ?>" value="<?php echo esc_attr( $value ); ?>">
    <?php

	echo '<h4 id="sub-title-section-read-more-block-two"><u>'. esc_html__( 'block style read more on hover','editor-custom-color-palette' ).'</u></h4>';

}

/*-------------------Affichage des champs pour le style du bloc Lire La Suite au survol-----------------------------*/

// Affiche le paramètre de champ texte pour renseigner la couleur de fond au survol
function eccp_settings_block_read_more_hover_background_color_text_field_markup( $args ){
	
    $custom_gutenberg_blocks_settings = get_option( 'eccp_settings_custom_gutenberg_block' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_block_read_more_hover_background_color_text_field'] ) ? $custom_gutenberg_blocks_settings['eccp_settings_block_read_more_hover_background_color_text_field'] : '';
    ?>
        <input class="color-field" type="text" name="eccp_settings_custom_gutenberg_block[eccp_settings_block_read_more_hover_background_color_text_field]" data-default-color = "<?php echo esc_attr( '#000000' ); ?>" value="<?php echo esc_attr( $value ); ?>">
    <?php

}

// Affiche le paramètre de champ texte pour renseigner l'opacité de la couleur de fond au survol
  function eccp_settings_block_read_more_hover_backgound_color_opacity_text_field_markup( $args ){
	
    $custom_gutenberg_blocks_settings = get_option( 'eccp_settings_custom_gutenberg_block' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_block_read_more_hover_backgound_color_opacity_text_field'] ) ?  $custom_gutenberg_blocks_settings['eccp_settings_block_read_more_hover_backgound_color_opacity_text_field'] : '0';// un 0 par défaut pour une chaine vide afin de traiter la transparence
    
	// l'expression régulière: ([1-9]?[0-9])|100 de l'input définit un entier de 0 à 100 (sans 00, 01...) mais l'enregistrement du caractère 0 donne une chaine vide en base de donnée
	?>
        <input style="width:40px" size="3" maxlength="3" class="regular-text" type="text" pattern="([1-9]?[0-9])|100" name="eccp_settings_custom_gutenberg_block[eccp_settings_block_read_more_hover_backgound_color_opacity_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
    <?php
	    
} 

// Affiche le paramètre de champ texte pour renseigner la couleur de bordure au survol
function eccp_settings_block_read_more_hover_border_color_text_field_markup( $args ){
	
    $custom_gutenberg_blocks_settings = get_option( 'eccp_settings_custom_gutenberg_block' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_block_read_more_hover_border_color_text_field'] ) ? $custom_gutenberg_blocks_settings['eccp_settings_block_read_more_hover_border_color_text_field'] : '';
    ?>
        <input class="color-field" type="text" name="eccp_settings_custom_gutenberg_block[eccp_settings_block_read_more_hover_border_color_text_field]" data-default-color = "<?php echo esc_attr( '#D5590B' ); ?>" value="<?php echo esc_attr( $value ); ?>">
    <?php

}

// Affiche le paramètre de champ texte pour renseigner la couleur du texte au survol
function eccp_settings_block_read_more_hover_text_color_text_field_markup( $args ){
	
    $custom_gutenberg_blocks_settings = get_option( 'eccp_settings_custom_gutenberg_block' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_block_read_more_hover_text_color_text_field'] ) ? $custom_gutenberg_blocks_settings['eccp_settings_block_read_more_hover_text_color_text_field'] : '';
    ?>
        <input class="color-field" type="text" name="eccp_settings_custom_gutenberg_block[eccp_settings_block_read_more_hover_text_color_text_field]" data-default-color = "<?php echo esc_attr( '#D5590B' ); ?>" value="<?php echo esc_attr( $value ); ?>">
    <?php
	
	
	/*------------------- DESCRIPTIF POUR LE BLOC TITRE -----------------------------*/
	
	echo '<h3 id="section_heading_block"><u>'. esc_html__( 'Heading Block','editor-custom-color-palette' ).'</u></h3>';
	
	echo '<div style="float:left;" class="mise-en-avant">';
		echo '<strong>';
		echo esc_html__( '• In the last section of this page enable JS scripting for more customization.','editor-custom-color-palette' );
		echo'<br>';
		echo esc_html__( 'You then have access to the ECCP Styles panel settings parameters for the border radius, and a Dashicons icon as a prefix as a title indicator.','editor-custom-color-palette' );
		echo'<br>';
		echo esc_html__( '• To change the color of the icon you must change the color of the title.','editor-custom-color-palette' );
		echo'<br>';
		echo esc_html__( 'The icon inherits the color of the title by default except for the hashtag icon (#333333 by default).','editor-custom-color-palette' );
		echo'<br><br>';
		echo '<img  src="'.esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/custom-gutenberg-block/heading-prefix-icon.png">';
		echo '</strong>';
	echo '</div>';

	echo '<div>';
	echo '<img  src="'.esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/custom-gutenberg-block/heading-settings.jpg">';
	echo '</div>';
	
	
	/*------------------- DESCRIPTIF POUR LE BLOC TABLE -----------------------------*/
	echo '<h3 id="section_table_block"><u>'. esc_html__( 'Table Block','editor-custom-color-palette' ).'</u></h3>';
	
	echo '<div style="float:left;" class="mise-en-avant">';
		echo '<strong>';
		echo esc_html__( 'Activate the styles below for the table block:','editor-custom-color-palette' );
		echo'<br>';
		echo esc_html__( '• You then have the ECCP Stripes style available in the block settings','editor-custom-color-palette' );
		echo'<br>';
		echo esc_html__( '• You have access to the settings in the sidebar of the editor:','editor-custom-color-palette' );
		echo'<br>';
		echo esc_html__( 'ECCP Table Header & ECCP Table Body panel','editor-custom-color-palette' );
		echo'<br><br>';
		echo esc_html__( 'Enable responsive tables:','editor-custom-color-palette' );
		echo'<br>';
		echo esc_html__( '• For a screen resolution < 767px the left column is fixed and the rest of the columns can scroll.','editor-custom-color-palette' );
		echo '</strong>';
	echo '</div>';

	echo '<div>';
	echo '<img  src="'.esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/custom-gutenberg-block/table-style-sidebar.jpg">';
	echo '</div>';
	
}


/*-------------------AFFFICHE LES CHAMPS POUR LE BLOC TABLE -----------------------------*/

// Affiche le paramètre de champ radio pour activer les styles pour le bloc table
function eccp_settings_activate_block_styles_table_radio_field_markup( $args ){
	
    $custom_gutenberg_blocks_settings = get_option( 'eccp_settings_custom_gutenberg_block' );
    $checked = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_activate_block_styles_table_radio_field'] ) ? $custom_gutenberg_blocks_settings['eccp_settings_activate_block_styles_table_radio_field'] : 'no';
	?>
        <fieldset>
            <legend class="screen-reader-text"><?php esc_html_e( 'no', 'editor-custom-color-palette' ); ?></legend>
                <label for="settings_eccp_radio_option_1">
                    <input id="settings_eccp_radio_option_1" type="radio" name="eccp_settings_custom_gutenberg_block[eccp_settings_activate_block_styles_table_radio_field]" value="no" <?php checked( $checked, 'no' ); ?>>
                    <?php esc_html_e( 'no', 'editor-custom-color-palette' ); ?>  <!--  label , text domain  -->
                </label>
                <br>
                <label for="settings_eccp_radio_option_2">
                    <input id="settings_eccp_radio_option_2" type="radio" name="eccp_settings_custom_gutenberg_block[eccp_settings_activate_block_styles_table_radio_field]" value="yes" <?php checked( $checked, 'yes' ); ?>>
                    <?php esc_html_e( 'yes', 'editor-custom-color-palette' ); ?>
                </label>
        </fieldset>
		
    <?php
	
	echo '<h4><u>'. esc_html__( 'style ECCP Stripes','editor-custom-color-palette' ).'</u></h4>';
	echo '<img style="margin-right:10px;margin-top:20px;" src="'.esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/custom-gutenberg-block/style-eccp-stripes-table-block.jpg">';

}

// Affiche le paramètre de champ radio pour activer les tables reponsives
function eccp_settings_activate_reponsive_tables_radio_field_markup( $args ){
	
    $custom_gutenberg_blocks_settings = get_option( 'eccp_settings_custom_gutenberg_block' );
    $checked = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_activate_reponsive_tables_radio_field'] ) ? $custom_gutenberg_blocks_settings['eccp_settings_activate_reponsive_tables_radio_field'] : 'no';
	?>
        <fieldset>
            <legend class="screen-reader-text"><?php esc_html_e( 'no', 'editor-custom-color-palette' ); ?></legend>
                <label for="settings_eccp_radio_option_1">
                    <input id="settings_eccp_radio_option_1" type="radio" name="eccp_settings_custom_gutenberg_block[eccp_settings_activate_reponsive_tables_radio_field]" value="no" <?php checked( $checked, 'no' ); ?>>
                    <?php esc_html_e( 'no', 'editor-custom-color-palette' ); ?>  <!--  label , text domain  -->
                </label>
                <br>
                <label for="settings_eccp_radio_option_2">
                    <input id="settings_eccp_radio_option_2" type="radio" name="eccp_settings_custom_gutenberg_block[eccp_settings_activate_reponsive_tables_radio_field]" value="yes" <?php checked( $checked, 'yes' ); ?>>
                    <?php esc_html_e( 'yes', 'editor-custom-color-palette' ); ?>
                </label>
        </fieldset>
		
    <?php
	
	
	echo '<h3 id="section_latest_posts_block"><u>'. esc_html__( 'Latest Posts Block','editor-custom-color-palette' ).'</u></h3>';
	
	echo '<div style="float:left;" class="mise-en-avant">';
		echo '<strong>';
		echo esc_html__( '• Activate the styles below for the Latest Posts block.','editor-custom-color-palette' );
		echo'<br>';
		echo esc_html__( 'The Card style is only functional for the grid layout of the latest Posts.','editor-custom-color-palette' );
		echo'<br>';
		echo esc_html__( 'For the featured image use the medium size without any alignment.','editor-custom-color-palette' );
		echo'<br>';
		echo esc_html__( 'The style rules of the read more tag are common & applied from the read more block.','editor-custom-color-palette' );
		echo '</strong>';
	echo '</div>';

	echo '<div>';
	echo '<img  src="'.esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/custom-gutenberg-block/style-card-latest-posts-block.jpg">';
	echo '</div>';
	
}



/*-------------------AFFFICHE LES CHAMPS POUR LE BLOC DERNIERS ARTICLES -----------------------------*/

// Affiche le paramètre de champ radio pour activer le style Carte pour le bloc Derniers Articles
function eccp_settings_activate_card_style_latest_posts_block_radio_field_markup( $args ){
	
    $custom_gutenberg_blocks_settings = get_option( 'eccp_settings_custom_gutenberg_block' );
    $checked = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_activate_card_style_latest_posts_block_radio_field'] ) ? $custom_gutenberg_blocks_settings['eccp_settings_activate_card_style_latest_posts_block_radio_field'] : 'no';
	?>
        <fieldset>
            <legend class="screen-reader-text"><?php esc_html_e( 'no', 'editor-custom-color-palette' ); ?></legend>
                <label for="settings_eccp_radio_option_1">
                    <input id="settings_eccp_radio_option_1" type="radio" name="eccp_settings_custom_gutenberg_block[eccp_settings_activate_card_style_latest_posts_block_radio_field]" value="no" <?php checked( $checked, 'no' ); ?>>
                    <?php esc_html_e( 'no', 'editor-custom-color-palette' ); ?>  <!--  label , text domain  -->
                </label>
                <br>
                <label for="settings_eccp_radio_option_2">
                    <input id="settings_eccp_radio_option_2" type="radio" name="eccp_settings_custom_gutenberg_block[eccp_settings_activate_card_style_latest_posts_block_radio_field]" value="yes" <?php checked( $checked, 'yes' ); ?>>
                    <?php esc_html_e( 'yes', 'editor-custom-color-palette' ); ?>
                </label>
        </fieldset>
		
    <?php

}

// Affiche le paramètre de champ radio pour activer le style Zoom 5% au survol pour le bloc Derniers Articles
function eccp_settings_activate_hover_zoom_style_latest_posts_block_radio_field_markup( $args ){
	
    $custom_gutenberg_blocks_settings = get_option( 'eccp_settings_custom_gutenberg_block' );
    $checked = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_activate_hover_zoom_style_latest_posts_block_radio_field'] ) ? $custom_gutenberg_blocks_settings['eccp_settings_activate_hover_zoom_style_latest_posts_block_radio_field'] : 'no';
	?>
        <fieldset>
            <legend class="screen-reader-text"><?php esc_html_e( 'no', 'editor-custom-color-palette' ); ?></legend>
                <label for="settings_eccp_radio_option_1">
                    <input id="settings_eccp_radio_option_1" type="radio" name="eccp_settings_custom_gutenberg_block[eccp_settings_activate_hover_zoom_style_latest_posts_block_radio_field]" value="no" <?php checked( $checked, 'no' ); ?>>
                    <?php esc_html_e( 'no', 'editor-custom-color-palette' ); ?>  <!--  label , text domain  -->
                </label>
                <br>
                <label for="settings_eccp_radio_option_2">
                    <input id="settings_eccp_radio_option_2" type="radio" name="eccp_settings_custom_gutenberg_block[eccp_settings_activate_hover_zoom_style_latest_posts_block_radio_field]" value="yes" <?php checked( $checked, 'yes' ); ?>>
                    <?php esc_html_e( 'yes', 'editor-custom-color-palette' ); ?>
                </label>
        </fieldset>
		
    <?php
	
	echo '<h3 id="section_query_loop_block"><u>'. esc_html__( 'Query Loop Block','editor-custom-color-palette' ).'</u></h3>';
	
	echo '<div style="float:left;" class="mise-en-avant">';
		echo '<strong>';
		echo esc_html__( '• Activate the styles below for the Query Loop Block.','editor-custom-color-palette' );
		echo'<br>';
		echo esc_html__( 'The Card style is only functional for the grid layout.','editor-custom-color-palette' );
		echo'<br>';
		echo esc_html__( 'The style rules of the read more tag are common & applied from the read more block.','editor-custom-color-palette' );
		echo'<br><br>';
		echo esc_html__( '• Enable custom avatar for Query Loop block.','editor-custom-color-palette' );
		echo'<br>';
		echo esc_html__( 'This personalized avatar must be an image in square format, for example 150 * 150px.','editor-custom-color-palette' );
		echo'<br>';
		echo esc_html__( 'In the back office you must then select the custom avatar option in the Settings/Comments menu avatar section by default.','editor-custom-color-palette' );
		echo '</strong>';
	echo '</div>';

	echo '<div>';
	echo '<img  style="margin-top:15px;" src="'.esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/custom-gutenberg-block/style-card-query-loop-block.jpg">';
	echo '</div>';
	
	
}

/*-------------------AFFFICHE LES CHAMPS POUR LE BLOC BOUCLE DE REQUÊTE -----------------------------*/

// Affiche le paramètre de champ radio pour activer le style Carte pour le bloc Boucle De Requête
function eccp_settings_activate_card_style_query_loop_block_radio_field_markup( $args ){
	
    $custom_gutenberg_blocks_settings = get_option( 'eccp_settings_custom_gutenberg_block' );
    $checked = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_activate_card_style_latest_posts_block_radio_field'] ) ? $custom_gutenberg_blocks_settings['eccp_settings_activate_card_style_query_loop_block_radio_field'] : 'no';
	?>
        <fieldset>
            <legend class="screen-reader-text"><?php esc_html_e( 'no', 'editor-custom-color-palette' ); ?></legend>
                <label for="settings_eccp_radio_option_1">
                    <input id="settings_eccp_radio_option_1" type="radio" name="eccp_settings_custom_gutenberg_block[eccp_settings_activate_card_style_query_loop_block_radio_field]" value="no" <?php checked( $checked, 'no' ); ?>>
                    <?php esc_html_e( 'no', 'editor-custom-color-palette' ); ?>  <!--  label , text domain  -->
                </label>
                <br>
                <label for="settings_eccp_radio_option_2">
                    <input id="settings_eccp_radio_option_2" type="radio" name="eccp_settings_custom_gutenberg_block[eccp_settings_activate_card_style_query_loop_block_radio_field]" value="yes" <?php checked( $checked, 'yes' ); ?>>
                    <?php esc_html_e( 'yes', 'editor-custom-color-palette' ); ?>
                </label>
        </fieldset>
		
    <?php
	
	echo'<br><br>';
	
}

// Affiche le paramètre de champ radio pour activer un gravatar personnalisé
function eccp_settings_activate_custom_avatar_radio_field_markup( $args ){
	
    $custom_gutenberg_blocks_settings = get_option( 'eccp_settings_custom_gutenberg_block' );
    $checked = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_activate_custom_avatar_radio_field'] ) ? $custom_gutenberg_blocks_settings['eccp_settings_activate_custom_avatar_radio_field'] : 'no';
	?>
        <fieldset>
            <legend class="screen-reader-text"><?php esc_html_e( 'no', 'editor-custom-color-palette' ); ?></legend>
                <label for="settings_eccp_radio_option_1">
                    <input id="settings_eccp_radio_option_1" type="radio" name="eccp_settings_custom_gutenberg_block[eccp_settings_activate_custom_avatar_radio_field]" value="no" <?php checked( $checked, 'no' ); ?>>
                    <?php esc_html_e( 'no', 'editor-custom-color-palette' ); ?>  <!--  label , text domain  -->
                </label>
                <br>
                <label for="settings_eccp_radio_option_2">
                    <input id="settings_eccp_radio_option_2" type="radio" name="eccp_settings_custom_gutenberg_block[eccp_settings_activate_custom_avatar_radio_field]" value="yes" <?php checked( $checked, 'yes' ); ?>>
                    <?php esc_html_e( 'yes', 'editor-custom-color-palette' ); ?>
                </label>
        </fieldset>
		
    <?php
	
	
}

/* Affiche notre champ de réglage pour renseigner l'URL du gravatar personnalisé */
function eccp_settings_custom_avatar_url_text_field_markup( $args ){
	
	$custom_gutenberg_blocks_settings = get_option( 'eccp_settings_custom_gutenberg_block' );// le nom du réglage passé a la fonction register_setting()
	$value   = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_custom_avatar_url_text_field'] ) ? $custom_gutenberg_blocks_settings['eccp_settings_custom_avatar_url_text_field'] : esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/custom-gutenberg-block/eccp-mystery-gravatar.jpg';
	$size = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_custom_avatar_size_text_field'] ) ? $custom_gutenberg_blocks_settings['eccp_settings_custom_avatar_size_text_field'] : 48;

	?>
		<label for="upload_image">
			
			
			<!-- si une URL pour un gravatar personnalisé est enregistré 
			    dans la table option alors on affiche l'image correspondante 
			    sinon on affiche le gravatar par défaut: l'homme mystère 
			    a la sélection de l'image le script eccp-upload-media.js 
				affiche l'image choisie !-->
			<img id="upload_image_src" src=<?php echo ( esc_url( $value ) ); ?> height="<?php echo ( esc_attr( $size ) ); ?>" width="<?php echo ( esc_attr( $size ) ); ?>" />
			
			
			<!-- Champ texte pour l'URL de l'image sélectionnée !-->
			<input id="upload_image" style="width:160px;" class="regular-text" type="url" name="eccp_settings_custom_gutenberg_block[eccp_settings_custom_avatar_url_text_field]" value="<?php echo ( esc_url( $value ) ); ?>">
			<!-- Bouton géréer par javascript pour appeler la boite de téléchargement d'image  !-->
			<input id="upload_image_button" class="button" type="button" value="<?php echo esc_html__( 'Upload image','editor-custom-color-palette' ); ?>" />
			<br />
			<?php echo esc_html__( 'Enter a URL or upload an image','editor-custom-color-palette' );?>
			
			
		</label>
		
	<?php
	
} 


/* Affiche notre champ de réglage pour renseigner la taille de l'avatar personnalisé */
function eccp_settings_custom_avatar_size_text_field_markup( $args ){
	
	$custom_gutenberg_blocks_settings = get_option( 'eccp_settings_custom_gutenberg_block' );// le nom du réglage passé a la fonction register_setting()
	$value   = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_custom_avatar_size_text_field'] ) ? $custom_gutenberg_blocks_settings['eccp_settings_custom_avatar_size_text_field'] : 48;
	?>
		<!-- input gérér par javascript pour modifier la taille de la balise image
		     de l'avatar en fonction de la  taille sélectionnée  !-->
		<input id="avatar_size" style="width:60px;" size="2" min="48" max="70" class="regular-text" type="number" name="eccp_settings_custom_gutenberg_block[eccp_settings_custom_avatar_size_text_field]" value="<?php echo ( esc_attr( $value ) ); ?>">
	<?php
	
} 

// Affiche le paramètre de champ radio pour activer le style Hover Zoom pour le bloc Boucle De Requête
function eccp_settings_activate_hover_zoom_style_query_loop_block_radio_field_markup( $args ){
	
    $custom_gutenberg_blocks_settings = get_option( 'eccp_settings_custom_gutenberg_block' );
    $checked = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_activate_hover_zoom_style_query_loop_block_radio_field'] ) ? $custom_gutenberg_blocks_settings['eccp_settings_activate_hover_zoom_style_query_loop_block_radio_field'] : 'no';
	?>
        <fieldset>
            <legend class="screen-reader-text"><?php esc_html_e( 'no', 'editor-custom-color-palette' ); ?></legend>
                <label for="settings_eccp_radio_option_1">
                    <input id="settings_eccp_radio_option_1" type="radio" name="eccp_settings_custom_gutenberg_block[eccp_settings_activate_hover_zoom_style_query_loop_block_radio_field]" value="no" <?php checked( $checked, 'no' ); ?>>
                    <?php esc_html_e( 'no', 'editor-custom-color-palette' ); ?>  <!--  label , text domain  -->
                </label>
                <br>
                <label for="settings_eccp_radio_option_2">
                    <input id="settings_eccp_radio_option_2" type="radio" name="eccp_settings_custom_gutenberg_block[eccp_settings_activate_hover_zoom_style_query_loop_block_radio_field]" value="yes" <?php checked( $checked, 'yes' ); ?>>
                    <?php esc_html_e( 'yes', 'editor-custom-color-palette' ); ?>
                </label>
        </fieldset>
		
    <?php
	
	echo '<h3 id="section_yoast_seo_faq_block"><u>'. esc_html__( 'YOAST SEO FAQ BLOCK','editor-custom-color-palette' ).'</u></h3>';
	
	echo '<div>';
	echo '<img  style="margin-top:15px;" src="'.esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/custom-gutenberg-block/yoast-seo-faq-accordion-block-close.jpg">';
	echo '<img  style="margin-top:15px;" src="'.esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/custom-gutenberg-block/yoast-seo-faq-accordion-block-open.jpg">';
	echo '</div>';
	
}




/*-------- AFFFICHE LES CHAMPS POUR LE BLOC FAQ YOAST SEO -----------------*/

// Affiche le paramètre de champ radio pour transformer le bloc FAQ Yoast SEO en accordéon
function eccp_settings_turn_yoast_faq_block_an_accordion_radio_field_markup( $args ){
	
    $custom_gutenberg_blocks_settings = get_option( 'eccp_settings_custom_gutenberg_block' );
    $checked = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_turn_yoast_faq_block_an_accordion_radio_field'] ) ? $custom_gutenberg_blocks_settings['eccp_settings_turn_yoast_faq_block_an_accordion_radio_field'] : 'no';
	?>
        <fieldset>
            <legend class="screen-reader-text"><?php esc_html_e( 'no', 'editor-custom-color-palette' ); ?></legend>
                <label for="settings_eccp_radio_option_1">
                    <input id="settings_eccp_radio_option_1" type="radio" name="eccp_settings_custom_gutenberg_block[eccp_settings_turn_yoast_faq_block_an_accordion_radio_field]" value="no" <?php checked( $checked, 'no' ); ?>>
                    <?php esc_html_e( 'no', 'editor-custom-color-palette' ); ?>  <!--  label , text domain  -->
                </label>
                <br>
                <label for="settings_eccp_radio_option_2">
                    <input id="settings_eccp_radio_option_2" type="radio" name="eccp_settings_custom_gutenberg_block[eccp_settings_turn_yoast_faq_block_an_accordion_radio_field]" value="yes" <?php checked( $checked, 'yes' ); ?>>
                    <?php esc_html_e( 'yes', 'editor-custom-color-palette' ); ?>
                </label>
        </fieldset>
		
    <?php
	
	
}

/* Affiche notre champ de réglage pour renseigner la largeur du block FAQ Yoast SEO */
function eccp_settings_width_block_faq_yoast_text_field_markup( $args ){
	
	$custom_gutenberg_blocks_settings = get_option( 'eccp_settings_custom_gutenberg_block' );// le nom du réglage passé a la fonction register_setting()
	$value   = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_width_block_faq_yoast_text_field'] ) ? $custom_gutenberg_blocks_settings['eccp_settings_width_block_faq_yoast_text_field'] : 100;
	?>
		<!-- input gérér par javascript pour modifier la taille de la balise image
		     de l'avatar en fonction de la  taille sélectionnée  !-->
		<input id="avatar_size" style="width:70px;" min="0" max="100" class="regular-text" type="number" name="eccp_settings_custom_gutenberg_block[eccp_settings_width_block_faq_yoast_text_field]" value="<?php echo ( esc_attr( $value ) ); ?>">
	<?php
	
	echo '<h3 id="section_bloc_galerie"><u>'. esc_html__( 'Gallery Block','editor-custom-color-palette' ).'</u></h3>';

	echo '<div style="width:60%;" class="mise-en-avant">';
		echo '<strong>';
		echo esc_html__( 'Option to enable necessary scripts and styles has the Swiper library to transform into Front End the gallery block in Slider.','editor-custom-color-palette' );
		echo'<br>';
		echo esc_html__( 'In the settings of the gallery block added the panel ECCP slider to activate the slider and its setting options.','editor-custom-color-palette' );
		echo'<br>';
		echo '</strong>';
	echo '</div>';

} 

/*----AFFICHE LE CHAMP RADIO POUR ACTIVER SCRIPT JS & CSS DE LA LIBRAIRIE SWIPER POUR LE BLOC GALERIE---*/

// Affiche le paramètre de champ radio pour activer script js & css
function eccp_settings_enable_script_js_css_swiper_radio_field_markup( $args ){
	
    $custom_gutenberg_blocks_settings = get_option( 'eccp_settings_custom_gutenberg_block' );
    $checked = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_enable_script_js_css_swiper_radio_field'] ) ? $custom_gutenberg_blocks_settings['eccp_settings_enable_script_js_css_swiper_radio_field'] : 'no';
	?>
        <fieldset>
            <legend class="screen-reader-text"><?php esc_html_e( 'no', 'editor-custom-color-palette' ); ?></legend>
                <label for="settings_eccp_radio_option_1">
                    <input id="settings_eccp_radio_option_1" type="radio" name="eccp_settings_custom_gutenberg_block[eccp_settings_enable_script_js_css_swiper_radio_field]" value="no" <?php checked( $checked, 'no' ); ?>>
                    <?php esc_html_e( 'no', 'editor-custom-color-palette' ); ?>  <!--  label , text domain  -->
                </label>
                <br>
                <label for="settings_eccp_radio_option_2">
                    <input id="settings_eccp_radio_option_2" type="radio" name="eccp_settings_custom_gutenberg_block[eccp_settings_enable_script_js_css_swiper_radio_field]" value="yes" <?php checked( $checked, 'yes' ); ?>>
                    <?php esc_html_e( 'yes', 'editor-custom-color-palette' ); ?>
                </label>
        </fieldset>
		
    <?php
	
	echo '<h3 id="section_bloc_citation"><u>'. esc_html__( 'Quote Block','editor-custom-color-palette' ).'</u></h3>';

	echo '<div style="width:60%;" class="mise-en-avant">';
		echo '<strong>';
		echo esc_html__( 'Enable Quote,Fancy Quote,Parenthesis,First Letter,Arrow custom styles block parameters.','editor-custom-color-palette' );
		echo'<br>';
		echo esc_html__( 'The Fancy Quote style is identical to the variation of the Fancy Quote block available in the inserter block under the category: CUSTOM ECCP BLOCKS.','editor-custom-color-palette' );
		echo'<br>';
		echo '</strong>';
	echo '</div>';
	
	echo '<div>';
		echo '<img  style="margin-top:15px;" src="'.esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/custom-gutenberg-block/custom-block-quote-styles.jpeg">';
	echo '</div>';

}


/*----AFFICHE LE CHAMP RADIO POUR ACTIVER LES STYLES PERSONNALISÉS POUR LE BLOC CITATION---*/

// Affiche le paramètre de champ radio pour activer les styles personnalisés
function eccp_settings_enable_custom_block_quote_styles_radio_field_markup( $args ){
	
    $custom_gutenberg_blocks_settings = get_option( 'eccp_settings_custom_gutenberg_block' );
    $checked = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_enable_custom_block_quote_styles_radio_field'] ) ? $custom_gutenberg_blocks_settings['eccp_settings_enable_custom_block_quote_styles_radio_field'] : 'no';
	?>
        <fieldset>
            <legend class="screen-reader-text"><?php esc_html_e( 'no', 'editor-custom-color-palette' ); ?></legend>
                <label for="settings_eccp_radio_option_1">
                    <input id="settings_eccp_radio_option_1" type="radio" name="eccp_settings_custom_gutenberg_block[eccp_settings_enable_custom_block_quote_styles_radio_field]" value="no" <?php checked( $checked, 'no' ); ?>>
                    <?php esc_html_e( 'no', 'editor-custom-color-palette' ); ?>  <!--  label , text domain  -->
                </label>
                <br>
                <label for="settings_eccp_radio_option_2">
                    <input id="settings_eccp_radio_option_2" type="radio" name="eccp_settings_custom_gutenberg_block[eccp_settings_enable_custom_block_quote_styles_radio_field]" value="yes" <?php checked( $checked, 'yes' ); ?>>
                    <?php esc_html_e( 'yes', 'editor-custom-color-palette' ); ?>
                </label>
        </fieldset>
		
    <?php
	
	echo '<h3 id="section_more_personnalization"><u>'. esc_html__( 'More Personalization','editor-custom-color-palette' ).'</u></h3>';
	
	echo '<div style="width:60%;" class="mise-en-avant">';
		echo '<strong>';
		echo esc_html__( 'Enable ReactJS based scripting for more customization native blocks of the Gutenberg editor.','editor-custom-color-palette' );
		echo'<br>';
		echo esc_html__( '• Custom styles of the list & paragraph block present in the block toolbar & editor sidebar.','editor-custom-color-palette' );
		echo'<br>';
		echo esc_html__( '• Four-column variation for the column block.','editor-custom-color-palette' );
		echo'<br>';
		echo esc_html__( '• Variation for the quote block called Fancy Quote. This is the same as the Blocquote reusable block and its settings.','editor-custom-color-palette' );
		echo'<br>';
		echo esc_html__( '• Variation for the group block called Info Box.','editor-custom-color-palette' );
		echo'<br>';
		echo esc_html__( '• Variation for the group block called Countdown Timer.','editor-custom-color-palette' );
		echo'<br>';
		echo esc_html__( '• Variation for the  columns block called Pricing Table.','editor-custom-color-palette' );
		echo'<br>';
		echo esc_html__( '• Variation for the column block called Flip Box.','editor-custom-color-palette' );
		echo'<br>';
		echo esc_html__( '• Variation for the paragraph block called Click to Tweet.','editor-custom-color-palette' );
		echo'<br>';
		echo esc_html__( '• Added setting in editor sidebar for Paragraph & Group & Separator block width.','editor-custom-color-palette' );
		echo'<br>';
		echo esc_html__( '• Added setting in editor sidebar for border-radius for title & group & column block.','editor-custom-color-palette' );
		echo'<br>';
		echo esc_html__( '• In the ECCP Link panel of the Group or Column block parameters, option to add a Front End link to the entire block.','editor-custom-color-palette' );
		echo'<br>';
		echo esc_html__( '• Block Group: For the Alignment toolbar control, added Left Alignment, Center, Right Alignment options.','editor-custom-color-palette' );
		echo'<br>';
		echo esc_html__( '• Added settings in the sidebar of the editor to Hide/Show a block on Mobile or Tablet or PC.','editor-custom-color-palette' );
		echo'<br>';
		echo esc_html__( '• Added a Tooltip control of the selected text (Add tooltip) for the format menu of the block toolbar','editor-custom-color-palette' );
		echo'<br>';
		echo esc_html__( '• Added a Clear Formatting control for the format menu of thetoolbar of the block. This button removes all the active formats of the selected text(bold, italic etc...)','editor-custom-color-palette' );
		echo'<br>';
		echo esc_html__( '• Added a simple underline control of selected text(Underline)to the block toolbar\'s format menu','editor-custom-color-palette' );
		echo'<br>';
		echo esc_html__( '• Added underline selected text control(Underline Colors)for block toolbar format menu according to 7 color palette or custom color','editor-custom-color-palette' );
		echo'<br>';
		echo esc_html__( '• Added highlight control for selected text to toolbar format menu','editor-custom-color-palette' );
		echo'<br>';
		echo esc_html__( '• Added an External Links control for the selected link in the toolbar\'s format menu.','editor-custom-color-palette' );
		echo'<br>';
		echo esc_html__( 'This control adds a Dashicons External icon after the selected link with link + icon color setting.','editor-custom-color-palette' );
		echo'<br>';
		echo esc_html__( 'This highlights that it is an external link that will redirect the user to another website.','editor-custom-color-palette' );
		echo '</strong>';
	echo '</div>';

	
}



/*-------- AFFICHE LE CHAMP RADIO POUR ACTIVER SCRIPT JAVASCRIPT POUR PLUS DE PERSONNALISATION -----------------*/

// Affiche le paramètre de champ radio pour activer le script javascript
function eccp_settings_activate_script_reactjs_radio_field_markup( $args ){
	
    $custom_gutenberg_blocks_settings = get_option( 'eccp_settings_custom_gutenberg_block' );
    $checked = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_activate_script_reactjs_radio_field'] ) ? $custom_gutenberg_blocks_settings['eccp_settings_activate_script_reactjs_radio_field'] : 'no';
	?>
        <fieldset>
            <legend class="screen-reader-text"><?php esc_html_e( 'no', 'editor-custom-color-palette' ); ?></legend>
                <label for="settings_eccp_radio_option_1">
                    <input id="settings_eccp_radio_option_1" type="radio" name="eccp_settings_custom_gutenberg_block[eccp_settings_activate_script_reactjs_radio_field]" value="no" <?php checked( $checked, 'no' ); ?>>
                    <?php esc_html_e( 'no', 'editor-custom-color-palette' ); ?>  <!--  label , text domain  -->
                </label>
                <br>
                <label for="settings_eccp_radio_option_2">
                    <input id="settings_eccp_radio_option_2" type="radio" name="eccp_settings_custom_gutenberg_block[eccp_settings_activate_script_reactjs_radio_field]" value="yes" <?php checked( $checked, 'yes' ); ?>>
                    <?php esc_html_e( 'yes', 'editor-custom-color-palette' ); ?>
                </label>
        </fieldset>
		
    <?php
	
	
	echo '<div style="margin-top: 25px;">
			<img style="display:block;margin:auto;" src="'.esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/custom-gutenberg-block/list-toolbar.jpg">
			<figcaption style="text-align:center;font-weight:bold;margin-top:10px;">'.esc_html__( 'List block toolbar','editor-custom-color-palette' ).'
			</figcaption>
		  </div>';
		  
	echo '<div style="margin-top: 25px;">
			<img style="display:block;margin:auto;"  src="'.esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/custom-gutenberg-block/paragraph-toolbar.jpg">
			<figcaption style="text-align:center;font-weight:bold;margin-top:10px;">'.esc_html__( 'Paragraph block toolbar','editor-custom-color-palette' ).'
			</figcaption>
		  </div>';
		  
	echo '<div style="margin-top: 25px; margin-bottom: 25px">
			<img style="display:block;margin:auto;"  src="'.esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/custom-gutenberg-block/variation-block-columns.jpg">
			<figcaption style="text-align:center;font-weight:bold;">'.esc_html__( 'Variation block columns','editor-custom-color-palette' ).'
			</figcaption>
		  </div>';
	
	echo '<div style="width:650px;display:block;margin:auto;">';
		echo '<div style="float: left; margin-right:25px">';
			echo'<img src="'.esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/custom-gutenberg-block/variations-blocks-insereuse.jpg">';
			echo'<figcaption style="text-align:center;font-weight:bold;margin-top:10px;">'.esc_html__( 'Variation blocks','editor-custom-color-palette' ).'</figcaption>';
		echo '</div>';
		
		echo '<div>';
			echo'<img src="'.esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/custom-gutenberg-block/paragraph-sidebar.jpg">';
			echo'<figcaption style="width:290px;float:right;text-align:center;font-weight:bold;margin-top:10px;">'.esc_html__( 'Paragraph block width adjustment','editor-custom-color-palette' ).'</figcaption>';
		echo '</div>';
	echo '</div>';
	
	echo '<div style="margin-top: 55px;">
			<img style="display:block;margin:auto;" src="'.esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/custom-gutenberg-block/underline-color-text.jpg">
			<figcaption style="text-align:center;font-weight:bold;margin-top:10px;">'.esc_html__( 'Underline selected text','editor-custom-color-palette' ).'
			</figcaption>
		  </div>';
		  
	echo '<div style="margin-top: 55px;">
			<img style="display:block;margin:auto;" src="'.esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/custom-gutenberg-block/highlight-selected-text.jpg">
			<figcaption style="text-align:center;font-weight:bold;margin-top:10px;">'.esc_html__( 'Highlight selected text','editor-custom-color-palette' ).'
			</figcaption>
		  </div>';
		  
	echo '<div style="margin-top: 55px;">
			<img style="display:block;margin:auto;" src="'.esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/custom-gutenberg-block/format-external-links.jpg">
			<figcaption style="text-align:center;font-weight:bold;margin-top:10px;">'.esc_html__( 'External link icon','editor-custom-color-palette' ).'
			</figcaption>
		  </div>';
		  
	echo '<div style="margin-top: 55px;">
			<img style="display:block;margin:auto;" src="'.esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/custom-gutenberg-block/variation-info-box.jpg">
			<figcaption style="text-align:center;font-weight:bold;margin-top:10px;">'.esc_html__( 'Info Box Variation','editor-custom-color-palette' ).'
			</figcaption>
		  </div>';
		  
	echo '<div style="margin-top: 55px;">
			<img style="display:block;margin:auto;" src="'.esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/custom-gutenberg-block/variation-princing-table.jpg">
			<figcaption style="text-align:center;font-weight:bold;margin-top:10px;">'.esc_html__( 'Pricing Table Variation','editor-custom-color-palette' ).'
			</figcaption>
		  </div>';
	
	
}



/* -------------------------------------- AFFICHAGE DES CHAMPS POUR LA 7ème SECTION ADDONS REUSABLE BLOCKS -----------------------------------------*/


/* -----------Afficher le paramètre de champ chexbox pour activer le menu Blocs Réutilisables en back Office----------------------*/

	
	function eccp_activate_reusable_blocks_menu_checkbox_field_markup( $args ){
    
		$reusable_blocks_settings = get_option( 'eccp_settings_reusable_blocks' );
		$checked = (bool) $reusable_blocks_settings['eccp_activate_reusable_blocks_menu_checkbox_field'] ?: false;
		
		?>
		
			<input id="<?php echo esc_attr( $args['label_for'] ); ?>" type="checkbox" name="eccp_settings_reusable_blocks[eccp_activate_reusable_blocks_menu_checkbox_field]" <?php checked( $checked ); ?> >
			<span><?php echo esc_html( $args['description'] ); ?></span>
			
		<?php
		
		// Blocs Réutilisable Blockquote
		echo '<h3 id="sub-title-addons-reusable-blocks-five"><u>'. esc_html__( 'Enable the display of reusable blocks by a shortcode','editor-custom-color-palette' ).'</u></h3>';
		
		echo '<div style ="width:55%;" class="mise-en-avant">';
			echo '<strong>';
			echo esc_html__( '• Adds PHP shortcodes and functions to the reusable blocks admin interface.','editor-custom-color-palette' ); 
			echo'<br><br>';
			echo esc_html__( '• With the shortcodes you can use the reusable blocks in all types of publications,including page builders like Elementor...','editor-custom-color-palette' ); 
			echo'<br>';
			echo esc_html__( 'Example image below,embed with Elementor page builder shortcode widget the query loop block for posts with shortcode: [reusable_block id=\'8370\'].','editor-custom-color-palette' ); 
			echo'<br><br>';
			echo esc_html__( '• Call PHP functions anywhere in your theme, to display reusable blocks.','editor-custom-color-palette' ); 
			echo'<br>';
			echo esc_html__( 'With the example image below,to integrate the posts query loop block into your theme:','editor-custom-color-palette' );
			echo'<br>';
			echo esc_html__( '\'echo eccp_reusable_block(8370);\'','editor-custom-color-palette' );
			echo '</strong>';
		echo '</div>';
	
		echo '<img style="margin-right:10px;" src="'.esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/addons-reusable-blocks/admin-reusable-blocks.jpg">';
	
	}	
	
	
/* ----------- Afficher le paramètre de champ chexbox pour afficher un bloc réutilisable par shortcode ----------------------*/

	
	function eccp_activate_reusable_blocks_shortcode_checkbox_field_markup( $args ){
    
		$reusable_blocks_settings = get_option( 'eccp_settings_reusable_blocks' );
		$checked = (bool) $reusable_blocks_settings['eccp_activate_reusable_blocks_shortcode_checkbox_field'] ?: false;
		
		?>
		
			<input id="<?php echo esc_attr( $args['label_for'] ); ?>" type="checkbox" name="eccp_settings_reusable_blocks[eccp_activate_reusable_blocks_shortcode_checkbox_field]" <?php checked( $checked ); ?> >
			<span><?php echo esc_html( $args['description'] ); ?></span>
			
		<?php
		
		echo '<h3 id="sub-title-addons-reusable-blocks-six"><u>'. esc_html__( 'Automatically add content before and/or after your posts, articles, pages or any type of custom post.','editor-custom-color-palette' ).'</u></h3>';
	
		echo '<div style ="width:65%;" class="mise-en-avant">';
			echo '<strong>';
			echo esc_html__( '• You must first create reusable blocks which must have the status published.','editor-custom-color-palette' ); 
			echo'<br><br>';
			echo esc_html__( '• Select in the drop-down zones according to the type of publication articles, page or custom post type the reusable block to be inserted before and/or after the content.','editor-custom-color-palette' ); 
			echo'<br><br>';
			echo esc_html__( '• You thus have the possibility of automatically inserting in the articles the block of social icon personalized by this extension, or for example an author bio.','editor-custom-color-palette' ); 
			echo'<br><br>';
			echo esc_html__( '• To automatically add content before and/or after your events created with The Events Calendar plugin you must configure:','editor-custom-color-palette' );
			echo'<br>';
			echo esc_html__( 'View tab / Event template section: Default page theme.','editor-custom-color-palette' );
			echo'<br><br>';
			echo esc_html__( '• You can also block your content before/after to appear on all types of publications via the Panel before/after content of the Publications sidebar.','editor-custom-color-palette' );
			echo'<br>';
			echo esc_html__( 'It is also possible to prevent your before/after content from appearing on all types of publications via quick or grouped editing for all screens that list publications.','editor-custom-color-palette' );
			echo'<br>';
			echo esc_html__( 'Warning! To use this feature on a custom post type you must enable custom field support for your CPT.','editor-custom-color-palette' ); 			
			echo'<br>';
			echo esc_html__( 'Warning! use bulk editing to prevent your before/after content from showing on pages established with a page builder like Elementor which is not compatible.','editor-custom-color-palette' ); 			
			echo'<br>';
			echo '</strong>';
		echo '</div>';
		
		
		echo '<h4><span class="dashicons dashicons-admin-post" style="margin-right:10px;font-size:1.3em;"></span>'. esc_html__( 'POST','editor-custom-color-palette' ).'</h4>';
	
	}	

/* ----------- Afficher le paramètre de champ select pour insérer un bloc réutilisable avant et/ou aprés le contenu d'une publication ----------------------*/

	
	//******* On récupère la liste des blocs réutilisables avec leur ID ********
	
	function eccp_get_data_reusable_blocks(){
		
		// on prépare les arguments de la requête
		// que l'on appelle les query vars
		// les blocs réutilisables font partie d'un CPT ayant pour nom: wp_block 
		$args = array(
					'post_type' => 'wp_block',
					'posts_per_page' => -1, // tous les articles
					'post_status' => 'publish',
					'orderby' => 'title',
					'order' => 'ASC',
				);
		
		// objet de requête
		global $wp_query;
		
		// On appelle la variable de requête globale à partir de l'instance 
		// actuelle de la classe WP_query
		// et on exécute la WP Query
		$wp_query = new WP_Query( $args );
		
		
		if ( $wp_query->have_posts() ) {

			 // On lance la boucle
			 while ( $wp_query->have_posts() ) { 
				$wp_query->the_post();
				$avaible_blocks[] = array(
											'id' => get_the_ID(),
											'title' => get_the_title()
									   );
				 
			 }
		 
		}
		
		/*
		Structure du tableau  $avaible_blocks[]
		
		Array
			(
				[0] => Array
					(
						[id] => 1101
						[title] => Alerte À Éviter
					)

				[1] => Array
					(
						[id] => 1098
						[title] => Alerte Attention
					)
			)
			
		*/
		
		// On réinitialise à la requête principale important!
		// car auparavant on avait écrasé la requête principale
		// par notre requête personnalisé
		wp_reset_postdata();

		return $avaible_blocks;
	}
	
	// on utilise le hook plugins_loaded pour être sur que l'extension est chargée
	// alors on a accès a l'objet $wp_query sinon on aurait une erreur
	// appel a la fonction get_user_data() indéfinie
	add_action('plugins_loaded ','eccp_get_data_reusable_blocks');
	
	
	//******* Fin de  récupèration de la liste des bloc réutilisable avec leur ID ********

	
	/* Affiche notre champ de réglage pour insérer un bloc réutilsable avant le contenu d'un article */
	function eccp_settings_insert_block_before_post_select_field_markup(){
		
		// On récupère la liste des blocs réutilisables avec leur ID
		$avaible_blocks = eccp_get_data_reusable_blocks();
		
		/* Pour Debug
		echo'<pre>';
			print_r($avaible_blocks);
		echo'</pre>';
		*/
	
		$reusable_blocks_settings = get_option( 'eccp_settings_reusable_blocks' ); // le nom du réglage passé a la fonction register_setting()
		$selected = ! empty( $reusable_blocks_settings['eccp_settings_insert_block_before_post_select_field'] ) ? $reusable_blocks_settings['eccp_settings_insert_block_before_post_select_field'] : '';// ID du champ
		
		?>
		
			<?php
			/* Pour Debug
			foreach ( $avaible_blocks as $index => $value ) : 
					print_r($value['title']) . ': '. print_r($value['id']). '\n' ;	
			 endforeach;
			*/
			?>	
		
			<select style="width:300px;" name="eccp_settings_reusable_blocks[eccp_settings_insert_block_before_post_select_field]">
			
				<option value=""><?php esc_html_e( 'Choose an option', 'editor-custom-color-palette' ); ?></option>
				<!-- On obtiend les valeurs passées dans un tableau d'options  -->
				<?php foreach ( $avaible_blocks as $index => $value ) : ?>
						<option value="<?php echo esc_attr( $value['id']); ?>" <?php selected( $selected, $value['id']  ); ?>><?php echo esc_html( $value['title'].' (ID: '. $value['id'] . ')' ); ?></option>
				<?php endforeach; ?>
				
			</select>
			
		<?php
		
	}
	
	/* Affiche notre champ de réglage pour insérer un bloc réutilsable aprés le contenu d'un article */
	function eccp_settings_insert_block_after_post_select_field_markup(){
		
		$avaible_blocks = eccp_get_data_reusable_blocks();
		
		$reusable_blocks_settings = get_option( 'eccp_settings_reusable_blocks' ); // le nom du réglage passé a la fonction register_setting()
		$selected = ! empty( $reusable_blocks_settings['eccp_settings_insert_block_after_post_select_field'] ) ? $reusable_blocks_settings['eccp_settings_insert_block_after_post_select_field'] : '';// ID du champ
		
		?>
		
			<select style="width:300px;" name="eccp_settings_reusable_blocks[eccp_settings_insert_block_after_post_select_field]">
			
				<option value=""><?php esc_html_e( 'Choose an option', 'editor-custom-color-palette' ); ?></option>
				<!-- On obtiend les valeurs passées dans un tableau d'options  -->
				<?php foreach ( $avaible_blocks as $index => $value ) : ?>
						<option value="<?php echo esc_attr( $value['id']); ?>" <?php selected( $selected, $value['id']  ); ?>><?php echo esc_html( $value['title'].' (ID: '. $value['id'] . ')' ); ?></option>
				<?php endforeach; ?>
				
			</select>
			
		<?php
		
		echo '<h4><span class="dashicons dashicons-admin-page" style="margin-right:10px;font-size:1.3em;"></span>'. esc_html__( 'PAGE','editor-custom-color-palette' ).'</h4>';
		
	}
	
	/* Affiche notre champ de réglage pour insérer un bloc réutilsable avant le contenu d'une page */
	function eccp_settings_insert_block_before_page_select_field_markup(){
		
		$avaible_blocks = eccp_get_data_reusable_blocks();
	
		$reusable_blocks_settings = get_option( 'eccp_settings_reusable_blocks' ); // le nom du réglage passé a la fonction register_setting()
		$selected = ! empty( $reusable_blocks_settings['eccp_settings_insert_block_before_page_select_field'] ) ? $reusable_blocks_settings['eccp_settings_insert_block_before_page_select_field'] : '';// ID du champ
		
		?>
		
			<select style="width:300px;" name="eccp_settings_reusable_blocks[eccp_settings_insert_block_before_page_select_field]">
			
				<option value=""><?php esc_html_e( 'Choose an option', 'editor-custom-color-palette' ); ?></option>
				<!-- On obtiend les valeurs passées dans un tableau d'options  -->
				<?php foreach ( $avaible_blocks as $index => $value ) : ?>
						<option value="<?php echo esc_attr( $value['id']); ?>" <?php selected( $selected, $value['id']  ); ?>><?php echo esc_html( $value['title'].' (ID: '. $value['id'] . ')' ); ?></option>
				<?php endforeach; ?>
				
			</select>
			
		<?php
	
		
	}
	
	/* Affiche notre champ de réglage pour insérer un bloc réutilsable aprés le contenu d'une page*/
	function eccp_settings_insert_block_after_page_select_field_markup(){
		
		$avaible_blocks = eccp_get_data_reusable_blocks();
		
		$reusable_blocks_settings = get_option( 'eccp_settings_reusable_blocks' ); // le nom du réglage passé a la fonction register_setting()
		$selected = ! empty( $reusable_blocks_settings['eccp_settings_insert_block_after_page_select_field'] ) ? $reusable_blocks_settings['eccp_settings_insert_block_after_page_select_field'] : '';// ID du champ
		
		?>
		
			<select style="width:300px;" name="eccp_settings_reusable_blocks[eccp_settings_insert_block_after_page_select_field]">
			
				<option value=""><?php esc_html_e( 'Choose an option', 'editor-custom-color-palette' ); ?></option>
				<!-- On obtiend les valeurs passées dans un tableau d'options  -->
				<?php foreach ( $avaible_blocks as $index => $value ) : ?>
						<option value="<?php echo esc_attr( $value['id']); ?>" <?php selected( $selected, $value['id']  ); ?>><?php echo esc_html( $value['title'].' (ID: '. $value['id'] . ')' ); ?></option>
				<?php endforeach; ?>
				
			</select>
			
		<?php
		
		echo '<h4><span class="dashicons dashicons-portfolio" style="margin-right:10px;font-size:1.3em;"></span>'. esc_html__( 'CUSTOM POST TYPE','editor-custom-color-palette' ).'</h4>';
		
	}

/* Affiche notre champ de réglage pour insérer un bloc réutilsable avant le contenu d'un CPT */
	function eccp_settings_insert_block_before_cpt_select_field_markup(){
		
		$avaible_blocks = eccp_get_data_reusable_blocks();
		
		$reusable_blocks_settings = get_option( 'eccp_settings_reusable_blocks' ); // le nom du réglage passé a la fonction register_setting()
		$selected = ! empty( $reusable_blocks_settings['eccp_settings_insert_block_before_cpt_select_field'] ) ? $reusable_blocks_settings['eccp_settings_insert_block_before_cpt_select_field'] : '';// ID du champ
		
		?>
		
			<select style="width:300px;" name="eccp_settings_reusable_blocks[eccp_settings_insert_block_before_cpt_select_field]">
			
				<option value=""><?php esc_html_e( 'Choose an option', 'editor-custom-color-palette' ); ?></option>
				<!-- On obtiend les valeurs passées dans un tableau d'options  -->
				<?php foreach ( $avaible_blocks as $index => $value ) : ?>
						<option value="<?php echo esc_attr( $value['id']); ?>" <?php selected( $selected, $value['id']  ); ?>><?php echo esc_html( $value['title'].' (ID: '. $value['id'] . ')' ); ?></option>
				<?php endforeach; ?>
				
			</select>
			
		<?php
		
	}

/* Affiche notre champ de réglage pour insérer un bloc réutilsable aprés le contenu d'un CPT */
	function eccp_settings_insert_block_after_cpt_select_field_markup(){
		
		$avaible_blocks = eccp_get_data_reusable_blocks();
		
		$reusable_blocks_settings = get_option( 'eccp_settings_reusable_blocks' ); // le nom du réglage passé a la fonction register_setting()
		$selected = ! empty( $reusable_blocks_settings['eccp_settings_insert_block_after_cpt_select_field'] ) ? $reusable_blocks_settings['eccp_settings_insert_block_after_cpt_select_field'] : '';// ID du champ
		
		?>
		
			<select style="width:300px;" name="eccp_settings_reusable_blocks[eccp_settings_insert_block_after_cpt_select_field]">
			
				<option value=""><?php esc_html_e( 'Choose an option', 'editor-custom-color-palette' ); ?></option>
				<!-- On obtiend les valeurs passées dans un tableau d'options  -->
				<?php foreach ( $avaible_blocks as $index => $value ) : ?>
						<option value="<?php echo esc_attr( $value['id']); ?>" <?php selected( $selected, $value['id']  ); ?>><?php echo esc_html( $value['title'].' (ID: '. $value['id'] . ')' ); ?></option>
				<?php endforeach; ?>
				
			</select>
			
		<?php
		
		// Blocs Réutilisable Blockquote
		echo '<h3 id="sub-title-addons-reusable-blocks-seven"><u>'. esc_html__( 'Blockquote download & settings','editor-custom-color-palette' ).'</u></h3>';
		echo '<img style="margin-right:10px;" src="'.esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/addons-reusable-blocks/blockquote-block.png" width="496" height="170">';
		echo'<br>';
		echo'<div class="left-button">';
		echo '<a class="download-button" href="https://drive.google.com/uc?export=download&id=12wQNpuIM0jHYc6AWbdBmvykAti0gc44k">Blockquote</a>';
		echo'</div>';
		
	}






/* -------------------------------------- AFFICHAGE DES CHAMPS POUR LE BLOC BLOCKQUOTE -----------------------------------------*/


	// Affiche le paramètre de champ texte pour renseigner la couleur des guillemets
	function eccp_settings_quotation_marks_color_text_field_markup( $args ){
		
		$reusable_blocks_settings = get_option( 'eccp_settings_reusable_blocks' );// le nom du réglage passé a la fonction register_setting()
		$value   = ! empty( $reusable_blocks_settings['eccp_settings_quotation_marks_color_text_field'] ) ? $reusable_blocks_settings['eccp_settings_quotation_marks_color_text_field'] : '';
		?>
			<input class="color-field" type="text" name="eccp_settings_reusable_blocks[eccp_settings_quotation_marks_color_text_field]" data-default-color = "<?php echo esc_attr( '#F37020' ); ?>" value="<?php echo esc_attr( $value ); ?>">
		<?php

	}

	// Affiche le paramètre de champ texte pour renseigner l'opacité des guillemets
	 function eccp_settings_quotation_marks_opacity_text_field_markup( $args ){
		
		$reusable_blocks_settings = get_option( 'eccp_settings_reusable_blocks' );// le nom du réglage passé a la fonction register_setting()
		$value   = ! empty( $reusable_blocks_settings['eccp_settings_quotation_marks_opacity_text_field'] ) ?  $reusable_blocks_settings['eccp_settings_quotation_marks_opacity_text_field'] : '0';// un 0 par défaut pour une chaine vide afin de traiter la transparence
		
		// l'expression régulière: ([1-9]?[0-9])|100 de l'input définit un entier de 0 à 100 (sans 00, 01...) mais l'enregistrement du caractère 0 donne une chaine vide en base de donnée
		?>
			<input style="width:40px" size="3" maxlength="3" class="regular-text" type="text" pattern="([1-9]?[0-9])|100" name="eccp_settings_reusable_blocks[eccp_settings_quotation_marks_opacity_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
		<?php
		
		echo'<br><br><br>';
		echo '<strong>'. esc_html__( 'Post default','editor-custom-color-palette' ).'</strong>';
			
	} 

	/* Affiche notre champ de réglage pour renseigner la graisse du texte pour le blockquote(plus utilisé version 2.3)
	function eccp_settings_font_weight_blockquote_select_field_markup( $args ){
		
		$reusable_blocks_settings = get_option( 'eccp_settings_reusable_blocks' ); // le nom du réglage passé a la fonction register_setting()
		$selected = ! empty( $reusable_blocks_settings['eccp_settings_font_weight_blockquote_select_field'] ) ? $reusable_blocks_settings['eccp_settings_font_weight_blockquote_select_field'] : '';// ID du champ
		
		?>
		
			<select style="width:165px;" name="eccp_settings_reusable_blocks[eccp_settings_font_weight_blockquote_select_field]">
			
				<option value=""><?php esc_html_e( 'Choose an option', 'editor-custom-color-palette' ); ?></option>
				
				<!-- On obtiend les valeurs passées dans un tableau d'options  -->
				<?php foreach ( $args['options'] as $value => $label ) : ?>
					<option value="<?php echo esc_attr( $value ); ?>" <?php selected( $selected, $value ); ?>><?php echo esc_html( $label ); ?></option>
				<?php endforeach; ?>
				
			</select>
			
		<?php

	}*/
	
	
	/* Affiche notre champ de réglage pour renseigner la taille de la police pour le blockquote (plus utilisé version 2.3)
	function eccp_settings_font_size_blockquote_text_field_markup( $args ){
		
		$reusable_blocks_settings = get_option( 'eccp_settings_reusable_blocks' );// le nom du réglage passé a la fonction register_setting()
		$value   = ! empty( $reusable_blocks_settings['eccp_settings_font_size_blockquote_text_field'] ) ? $reusable_blocks_settings['eccp_settings_font_size_blockquote_text_field'] : '';
		?>
			<input style="width:40px;" size="2" maxlength="2" class="regular-text" type="text" pattern="([1-9]{1}[0-9]{0,1})" name="eccp_settings_reusable_blocks[eccp_settings_font_size_blockquote_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
		<?php
		
		echo'<br><br><br>';
		echo '<strong>'. esc_html__( 'Post default','editor-custom-color-palette' ).'</strong>';
		
	} */
	
	// Affiche le paramètre de champ texte pour renseigner la largeur du blockquote en back office pour les articles
	  function eccp_settings_width_blockquote_post_back_office_text_field_markup( $args ){
		
		$reusable_blocks_settings = get_option( 'eccp_settings_reusable_blocks' );// le nom du réglage passé a la fonction register_setting()
		$value   = ! empty( $reusable_blocks_settings['eccp_settings_width_blockquote_post_back_office_text_field'] ) ?  $reusable_blocks_settings['eccp_settings_width_blockquote_post_back_office_text_field'] : '0';
		
		// l'expression régulière: ([1-9]?[0-9])|100 de l'input définit un entier de 0 à 100 (sans 00, 01...)
		?>
			<input style="width:40px" size="3" maxlength="3" class="regular-text" type="text" pattern="([1-9]?[0-9])|100" name="eccp_settings_reusable_blocks[eccp_settings_width_blockquote_post_back_office_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
		<?php
			
	} 

	// Affiche le paramètre de champ texte pour renseigner la largeur du blockquote en front end pour les articles
	  function eccp_settings_width_blockquote_post_front_end_text_field_markup( $args ){
		
		$reusable_blocks_settings = get_option( 'eccp_settings_reusable_blocks' );// le nom du réglage passé a la fonction register_setting()
		$value   = ! empty( $reusable_blocks_settings['eccp_settings_width_blockquote_post_front_end_text_field'] ) ?  $reusable_blocks_settings['eccp_settings_width_blockquote_post_front_end_text_field'] : '0';
		
		// l'expression régulière: ([1-9]?[0-9])|100 de l'input définit un entier de 0 à 100 (sans 00, 01...)
		?>
			<input style="width:40px" size="3" maxlength="3" class="regular-text" type="text" pattern="([1-9]?[0-9])|100" name="eccp_settings_reusable_blocks[eccp_settings_width_blockquote_post_front_end_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
		<?php
		
		echo'<br><br><br>';
		echo '<strong>'. esc_html__( 'Page default','editor-custom-color-palette' ).'</strong>';
		
	} 
	
	
	// Affiche le paramètre de champ texte pour renseigner la largeur du blockquote en back office pour les pages
	  function eccp_settings_width_blockquote_page_back_office_text_field_markup( $args ){
		
		$reusable_blocks_settings = get_option( 'eccp_settings_reusable_blocks' );// le nom du réglage passé a la fonction register_setting()
		$value   = ! empty( $reusable_blocks_settings['eccp_settings_width_blockquote_page_back_office_text_field'] ) ?  $reusable_blocks_settings['eccp_settings_width_blockquote_page_back_office_text_field'] : '0';
		
		// l'expression régulière: ([1-9]?[0-9])|100 de l'input définit un entier de 0 à 100 (sans 00, 01...)
		?>
			<input style="width:40px" size="3" maxlength="3" class="regular-text" type="text" pattern="([1-9]?[0-9])|100" name="eccp_settings_reusable_blocks[eccp_settings_width_blockquote_page_back_office_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
		<?php
			
	} 

	// Affiche le paramètre de champ texte pour renseigner la largeur du blockquote en front end pour les pages
	  function eccp_settings_width_blockquote_page_front_end_text_field_markup( $args ){
		
		$reusable_blocks_settings = get_option( 'eccp_settings_reusable_blocks' );// le nom du réglage passé a la fonction register_setting()
		$value   = ! empty( $reusable_blocks_settings['eccp_settings_width_blockquote_page_front_end_text_field'] ) ?  $reusable_blocks_settings['eccp_settings_width_blockquote_page_front_end_text_field'] : '0';
		
		// l'expression régulière: ([1-9]?[0-9])|100 de l'input définit un entier de 0 à 100 (sans 00, 01...)
		?>
			<input style="width:40px" size="3" maxlength="3" class="regular-text" type="text" pattern="([1-9]?[0-9])|100" name="eccp_settings_reusable_blocks[eccp_settings_width_blockquote_page_front_end_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
		<?php
		
		echo'<br><br><br>';
		echo '<strong>'. esc_html__( 'CPT: Custom Post Type','editor-custom-color-palette' ).'</strong>';
		
	} 
	
	// Affiche le paramètre de champ texte pour renseigner la largeur du blockquote en back office pour les CPT
	  function eccp_settings_width_blockquote_cpt_back_office_text_field_markup( $args ){
		
		$reusable_blocks_settings = get_option( 'eccp_settings_reusable_blocks' );// le nom du réglage passé a la fonction register_setting()
		$value   = ! empty( $reusable_blocks_settings['eccp_settings_width_blockquote_cpt_back_office_text_field'] ) ?  $reusable_blocks_settings['eccp_settings_width_blockquote_cpt_back_office_text_field'] : '0';
		
		// l'expression régulière: ([1-9]?[0-9])|100 de l'input définit un entier de 0 à 100 (sans 00, 01...)
		?>
			<input style="width:40px" size="3" maxlength="3" class="regular-text" type="text" pattern="([1-9]?[0-9])|100" name="eccp_settings_reusable_blocks[eccp_settings_width_blockquote_cpt_back_office_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
		<?php
			
	} 

	// Affiche le paramètre de champ texte pour renseigner la largeur du blockquote en front end pour les CPT
	  function eccp_settings_width_blockquote_cpt_front_end_text_field_markup( $args ){
		
		$reusable_blocks_settings = get_option( 'eccp_settings_reusable_blocks' );// le nom du réglage passé a la fonction register_setting()
		$value   = ! empty( $reusable_blocks_settings['eccp_settings_width_blockquote_cpt_front_end_text_field'] ) ?  $reusable_blocks_settings['eccp_settings_width_blockquote_cpt_front_end_text_field'] : '0';
		
		// l'expression régulière: ([1-9]?[0-9])|100 de l'input définit un entier de 0 à 100 (sans 00, 01...)
		?>
			<input style="width:40px" size="3" maxlength="3" class="regular-text" type="text" pattern="([1-9]?[0-9])|100" name="eccp_settings_reusable_blocks[eccp_settings_width_blockquote_cpt_front_end_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
		<?php
		

		echo '<h3 id="sub-title-addons-reusable-blocks-eight"><u>'. esc_html__( 'Download & settings Custom Paragraph Block','editor-custom-color-palette' ).'</u></h3>';
		echo '<img style="margin-right:10px;" src="'.esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/addons-reusable-blocks/paragraph-custom-block.png" width="515" height="89">';
		echo'<br>';
		echo'<div class="left-button">';
		echo '<a class="download-button" href="https://drive.google.com/uc?export=download&id=1KrR7L0cgPf8YPL6zbUfWRvbZnkjMumgZ">Custom Paragraph Block</a>';
		echo'</div>';
		echo'<div class="right-button">';
		echo '<a class="download-button" href="https://drive.google.com/uc?export=download&id=140xSSrDf5yn5h7oG0VG2m5w900ztxhHH">Bloc mettre en évidence</a>';
		echo'</div>';
			
	} 
	
	/* -------------------------------------- AFFICHAGE DES CHAMPS TEXTE POUR LE BLOC METTRE EN ÉVIDENCE -----------------------------------------*/
	
	// Affiche le paramètre de champ texte pour renseigner la couleur de bordure
	function eccp_settings_custom_paragraph_border_color_text_field_markup( $args ){
		
		$reusable_blocks_settings = get_option( 'eccp_settings_reusable_blocks' );// le nom du réglage passé a la fonction register_setting()
		$value   = ! empty( $reusable_blocks_settings['eccp_settings_custom_paragraph_border_color_text_field'] ) ? $reusable_blocks_settings['eccp_settings_custom_paragraph_border_color_text_field'] : '';
		?>
			<input class="color-field" type="text" name="eccp_settings_reusable_blocks[eccp_settings_custom_paragraph_border_color_text_field]" data-default-color = "<?php echo esc_attr( '#F37020' ); ?>" value="<?php echo esc_attr( $value ); ?>">
		<?php

	}

	// Affiche le paramètre de champ texte pour renseigner l'opacité de la couleur de bordure
	function eccp_settings_opacity_custom_paragraph_border_color_text_field_markup( $args ){
	
		$reusable_blocks_settings = get_option( 'eccp_settings_reusable_blocks' );// le nom du réglage passé a la fonction register_setting()
		$value   = ! empty( $reusable_blocks_settings['eccp_settings_opacity_custom_paragraph_border_color_text_field'] ) ?  $reusable_blocks_settings['eccp_settings_opacity_custom_paragraph_border_color_text_field'] : '0';// un 0 par défaut pour une chaine vide afin de traiter la transparence
		
		// l'expression régulière: ([1-9]?[0-9])|100 de l'input définit un entier de 0 à 100 (sans 00, 01...) mais l'enregistrement du caractère 0 donne une chaine vide en base de donnée
		?>
			<input style="width:40px" size="3" maxlength="3" class="regular-text" type="text" pattern="([1-9]?[0-9])|100" name="eccp_settings_reusable_blocks[eccp_settings_opacity_custom_paragraph_border_color_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
		<?php
		
		echo'<br><br><br>';
		echo '<strong>'. esc_html__( 'Post default','editor-custom-color-palette' ).'</strong>';
	    
	} 
	
	
	// Affiche le paramètre de champ texte pour renseigner la largeur du bloc Mettre En Évidence en back office pour les articles
	function eccp_settings_custom_paragraph_width_post_back_office_text_field_markup( $args ){
	
		$reusable_blocks_settings = get_option( 'eccp_settings_reusable_blocks' );// le nom du réglage passé a la fonction register_setting()
		$value   = ! empty( $reusable_blocks_settings['eccp_settings_custom_paragraph_width_post_back_office_text_field'] ) ?  $reusable_blocks_settings['eccp_settings_custom_paragraph_width_post_back_office_text_field'] : '0';
		
		// l'expression régulière: ([1-9]?[0-9])|100 de l'input définit un entier de 0 à 100 (sans 00, 01...)
		?>
			<input style="width:40px" size="3" maxlength="3" class="regular-text" type="text" pattern="([1-9]?[0-9])|100" name="eccp_settings_reusable_blocks[eccp_settings_custom_paragraph_width_post_back_office_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
		<?php
	    
	} 
	
	// Affiche le paramètre de champ texte pour renseigner la largeur du bloc Mettre En Évidence en front end pour les articles
	function eccp_settings_custom_paragraph_width_post_front_end_text_field_markup( $args ){
	
		$reusable_blocks_settings = get_option( 'eccp_settings_reusable_blocks' );// le nom du réglage passé a la fonction register_setting()
		$value   = ! empty( $reusable_blocks_settings['eccp_settings_custom_paragraph_width_post_front_end_text_field'] ) ?  $reusable_blocks_settings['eccp_settings_custom_paragraph_width_post_front_end_text_field'] : '0';
		
		// l'expression régulière: ([1-9]?[0-9])|100 de l'input définit un entier de 0 à 100 (sans 00, 01...)
		?>
			<input style="width:40px" size="3" maxlength="3" class="regular-text" type="text" pattern="([1-9]?[0-9])|100" name="eccp_settings_reusable_blocks[eccp_settings_custom_paragraph_width_post_front_end_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
		<?php
		
		echo'<br><br><br>';
		echo '<strong>'. esc_html__( 'Page default','editor-custom-color-palette' ).'</strong>';
			
	}
	
	
	// Affiche le paramètre de champ texte pour renseigner la largeur du bloc Mettre En Évidence en back office pour les pages
	function eccp_settings_custom_paragraph_width_page_back_office_text_field_markup( $args ){
	
		$reusable_blocks_settings = get_option( 'eccp_settings_reusable_blocks' );// le nom du réglage passé a la fonction register_setting()
		$value   = ! empty( $reusable_blocks_settings['eccp_settings_custom_paragraph_width_page_back_office_text_field'] ) ?  $reusable_blocks_settings['eccp_settings_custom_paragraph_width_page_back_office_text_field'] : '0';
		
		// l'expression régulière: ([1-9]?[0-9])|100 de l'input définit un entier de 0 à 100 (sans 00, 01...)
		?>
			<input style="width:40px" size="3" maxlength="3" class="regular-text" type="text" pattern="([1-9]?[0-9])|100" name="eccp_settings_reusable_blocks[eccp_settings_custom_paragraph_width_page_back_office_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
		<?php
	    
	} 
	
	// Affiche le paramètre de champ texte pour renseigner la largeur du bloc Mettre En Évidence en front end pour les pages
	function eccp_settings_custom_paragraph_width_page_front_end_text_field_markup( $args ){
	
		$reusable_blocks_settings = get_option( 'eccp_settings_reusable_blocks' );// le nom du réglage passé a la fonction register_setting()
		$value   = ! empty( $reusable_blocks_settings['eccp_settings_custom_paragraph_width_page_front_end_text_field'] ) ?  $reusable_blocks_settings['eccp_settings_custom_paragraph_width_page_front_end_text_field'] : '0';
		
		// l'expression régulière: ([1-9]?[0-9])|100 de l'input définit un entier de 0 à 100 (sans 00, 01...)
		?>
			<input style="width:40px" size="3" maxlength="3" class="regular-text" type="text" pattern="([1-9]?[0-9])|100" name="eccp_settings_reusable_blocks[eccp_settings_custom_paragraph_width_page_front_end_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
		<?php
		
		echo'<br><br><br>';
		echo '<strong>'. esc_html__( 'CPT: Custom Post Type','editor-custom-color-palette' ).'</strong>';
	
	}
	
	
	// Affiche le paramètre de champ texte pour renseigner la largeur du bloc Mettre En Évidence en back office pour les CPT
	function eccp_settings_custom_paragraph_width_cpt_back_office_text_field_markup( $args ){
	
		$reusable_blocks_settings = get_option( 'eccp_settings_reusable_blocks' );// le nom du réglage passé a la fonction register_setting()
		$value   = ! empty( $reusable_blocks_settings['eccp_settings_custom_paragraph_width_cpt_back_office_text_field'] ) ?  $reusable_blocks_settings['eccp_settings_custom_paragraph_width_cpt_back_office_text_field'] : '0';
		
		// l'expression régulière: ([1-9]?[0-9])|100 de l'input définit un entier de 0 à 100 (sans 00, 01...)
		?>
			<input style="width:40px" size="3" maxlength="3" class="regular-text" type="text" pattern="([1-9]?[0-9])|100" name="eccp_settings_reusable_blocks[eccp_settings_custom_paragraph_width_cpt_back_office_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
		<?php
	    
	} 
	
	// Affiche le paramètre de champ texte pour renseigner la largeur du bloc Mettre En Évidence en front end pour les CPT
	function eccp_settings_custom_paragraph_width_cpt_front_end_text_field_markup( $args ){
	
		$reusable_blocks_settings = get_option( 'eccp_settings_reusable_blocks' );// le nom du réglage passé a la fonction register_setting()
		$value   = ! empty( $reusable_blocks_settings['eccp_settings_custom_paragraph_width_cpt_front_end_text_field'] ) ?  $reusable_blocks_settings['eccp_settings_custom_paragraph_width_cpt_front_end_text_field'] : '0';
		
		// l'expression régulière: ([1-9]?[0-9])|100 de l'input définit un entier de 0 à 100 (sans 00, 01...)
		?>
			<input style="width:40px" size="3" maxlength="3" class="regular-text" type="text" pattern="([1-9]?[0-9])|100" name="eccp_settings_reusable_blocks[eccp_settings_custom_paragraph_width_cpt_front_end_text_field]" value="<?php echo htmlspecialchars_decode( esc_attr( $value ) ); ?>">
		<?php
		

		
		// téléchargement Bloc Conseil
		echo '<h3 id="sub-title-addons-reusable-blocks-nine"><u>'. esc_html__( 'Download advice block','editor-custom-color-palette' ).'</u></h3>';
		echo '<img style="margin-right:10px;" src="'.esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/addons-reusable-blocks/advice-block.jpg">';
		echo'<br>';
		echo'<div class="left-button">';
		echo '<a class="download-button" href="https://drive.google.com/uc?export=download&id=1Yif3cVlCLTLjdY3EIibq4spzKX5owUCq">Bloc Conseil</a>';
		echo'</div>';
		echo'<br>';
		/*
		echo'<div class="right-button">';
		echo '<a class="download-button" href="https://drive.google.com/uc?export=download&id=14xYDdK4TApveNwwfwn7rGCztBMKbsdTc">Advice Block</a>';
		echo'</div>';
		*/
		
		// téléchargement Bloc Info
		echo '<h3 id="sub-title-addons-reusable-blocks-ten"><u>'. esc_html__( 'Download information block','editor-custom-color-palette' ).'</u></h3>';
		echo '<img style="margin-right:10px;" src="'.esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/addons-reusable-blocks/info-block.jpg">';
		echo'<br>';
		echo'<div class="left-button">';
		echo '<a class="download-button" href="https://drive.google.com/uc?export=download&id=15gIwwAwRhCspf-13Ar3SdDUpO6x8HcFN">Bloc Info</a>';
		echo'</div>';
		echo'<br>';
		/*
		echo'<div class="right-button">';
		echo '<a class="download-button" href="https://drive.google.com/uc?export=download&id=11gnXAEMvjdds-KuEYsR4u1msv3esqLr5">Info Block</a>';
		echo'</div>';
		*/
			
		// téléchargement Bloc Attention
		echo '<h3 id="sub-title-addons-reusable-blocks-eleven"><u>'. esc_html__( 'Download warning block','editor-custom-color-palette' ).'</u></h3>';
		echo '<img style="margin-right:10px;" src="'.esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/addons-reusable-blocks/warning-block.jpg">';
		echo'<br>';
		echo'<div class="left-button">';
		echo '<a class="download-button" href="https://drive.google.com/uc?export=download&id=1AoSKxPzaiV7PDwIwYVPQRUJln5P4R2rB">Bloc Attention</a>';
		echo'</div>';
		echo'<br>';
		/*
		echo'<div class="right-button">';
		echo '<a class="download-button" href="https://drive.google.com/uc?export=download&id=1Jo8sKHNrG13KW6FVKJd0k-HQ0FzA9tNG">Warning Block</a>';
		echo'</div>';
		*/
			
		// téléchargement Bloc Alerte
		echo '<h3 id="sub-title-addons-reusable-blocks-twelve"><u>'. esc_html__( 'Download alert block','editor-custom-color-palette' ).'</u></h3>';
		echo '<img style="margin-right:10px;" src="'.esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/addons-reusable-blocks/alert-block.jpg">';
		echo'<br>';
		echo'<div class="left-button">';
		echo '<a class="download-button" href="https://drive.google.com/uc?export=download&id=1kf980Px7N2S94no9fu7K6zKW12GdKGFt">Bloc Alerte</a>';
		echo'</div>';
		echo'<br>';
		/*
		echo'<div class="right-button">';
		echo '<a class="download-button" href="https://drive.google.com/uc?export=download&id=111lWwLyzapdBuOxHwHQBURx50RJR2pRI">Alert Block</a>';
		echo'</div>';
		*/
		
		// téléchargement Bloc Table Des Prix
		echo '<h3 id="sub-title-addons-reusable-blocks-thirteen"><u>'. esc_html__( 'Download the price table block','editor-custom-color-palette' ).'</u></h3>';
		
		echo '<div style ="width:60%;" class="mise-en-avant">';
			echo '<strong>';
			echo esc_html__( 'To use this block you must first, in the settings page of the extension Customize Gutenberg Blocks tab/More customization, have activated the JS script option for more customization.','editor-custom-color-palette' ); 
			echo'<br><br>';
			echo '</strong>';
		echo '</div>';
		
		echo '<img style="margin-right:10px;" src="'.esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/custom-gutenberg-block/variation-princing-table.jpg">';
		echo'<br>';
		echo'<div class="left-button">';
		echo '<a class="download-button" href="https://drive.google.com/uc?export=download&id=1byytZyidGNsAj16fgCjobP73_gnNvu2z">'.esc_html__( 'Pricing Table Block', 'editor-custom-color-palette' ).'</a>';
		echo'</div>';
		echo'<br><br>';
		
		// téléchargement Bloc Boucle de Requête Articles
		echo '<h3 id="sub-title-addons-reusable-blocks-fourteen"><u>'. esc_html__( 'Download the Articles Query Loop block','editor-custom-color-palette' ).'</u></h3>';
		
		echo '<div style ="width:60%;" class="mise-en-avant">';
			echo '<strong>';
			echo esc_html__( 'To use this block you must first, in the settings page of the extension Customize Gutenberg Blocks tab/More customization, have activated the JS script option for more customization.','editor-custom-color-palette' ); 
			echo'<br><br>';
			echo '</strong>';
		echo '</div>';
		
		echo '<img style="margin-right:10px;" src="'.esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/custom-gutenberg-block/style-card-query-loop-block.jpg">';
		echo'<br>';
		echo'<div class="left-button">';
		echo '<a class="download-button" href="https://drive.google.com/uc?export=download&id=1pv47noczIP_PTAxDvdWhhCPfgCX1kRFY">'.esc_html__( 'Posts Query Loop Block', 'editor-custom-color-palette' ).'</a>';
		echo'</div>';
		echo'<br><br>';
		
		
		// téléchargement Bloc Icônes Sociales avec liens de partage
		echo '<h3 id="sub-title-addons-reusable-blocks-fifteen"><u>'. esc_html__( 'Download social icons block with share links','editor-custom-color-palette' ).'</u></h3>';
		
		echo '<div style ="width:60%;" class="mise-en-avant">';
			echo '<strong>';
			echo esc_html__( 'Download Social icons block with sharing links for social networks: Tweeter,Pinterest,Facebook,Mail,Linkedin & WhatsApp.','editor-custom-color-palette' ); 
			echo'<br><br>';
			echo esc_html__( 'The share link for Pinterest pass the URL of the Featured Image if present for Articles & Custom Post Types.','editor-custom-color-palette' ); 
			echo'<br>';
			echo '</strong>';
		echo '</div>';
		
		
		echo '<img style="margin-bottom:20px;" src="'.esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/addons-reusable-blocks/rectangular-shape-style-share-links.jpg">';
		echo'<br>';
		
		echo'<div class="left-button" style="display:inline-block;" >';
			echo '<a class="download-button" href="https://drive.google.com/uc?export=download&id=1KTDmSJRuRwx2FkUHHLi__HZtAZZGM9wk">Style Float Left</a>';
		echo'</div>';
		
		echo'<div style="display:inline-block;margin-top:20px;margin-bottom:30px;" >';
			echo '<a class="download-button" href="https://drive.google.com/uc?export=download&id=1XiaocWpgs-Rvi8LajEfYHjRQnG9Gv0oc">Style Rectangular Shape</a>';
		echo'</div>';
		
		echo'<div style="display:inline-block;margin-top:20px;margin-bottom:30px;" >';
			echo '<a class="download-button" href="https://drive.google.com/uc?export=download&id=1wcyMVqkwPgMrx356ZZf3EoVyHZ7auJ7U">Style Float Right</a>';
		echo'</div>';
		
		// téléchargement Bloc Table des matières
		echo '<h3 id="sub-title-addons-reusable-blocks-sixteen"><u>'. esc_html__( 'Download the table of contents block','editor-custom-color-palette' ).'</u></h3>';
		
		echo '<div style ="width:60%;" class="mise-en-avant">';
			echo '<strong>';
			echo esc_html__( 'This reusable block is a customization of the group block:','editor-custom-color-palette' ); 
			echo'<br>';
			echo esc_html__( '• Block Settings Styles Panel: Table Of Contents.','editor-custom-color-palette' ); 
			echo'<br>';
			echo esc_html__( '• Advanced HTML ELEMENT/block settings panel: <article>.','editor-custom-color-palette' ); 
			echo'<br>';
			echo esc_html__( '• Insertion of a code block to fill in a title for the table of contents in the Back Office.','editor-custom-color-palette' ); 
			echo'<br>';
			echo esc_html__( '• This title is hidden in Front End.','editor-custom-color-palette' ); 
			echo'<br><br>';
			echo esc_html__( 'In the Group block settings you can change:','editor-custom-color-palette' ); 
			echo'<br>';
			echo esc_html__( '• Background color,text color & size,border radius.','editor-custom-color-palette' ); 
			echo'<br><br>';
			echo esc_html__( 'In the ECCP styles panel of the block settings you can modify:','editor-custom-color-palette' ); 
			echo'<br>';
			echo esc_html__( '• Setting the width of the Group block and therefore of the Table Of Contents.','editor-custom-color-palette' ); 
			echo'<br><br>';
			echo esc_html__( 'In the plugin settings page,Customize tab Gutenberg Blocks/Block Group/table of contents style:','editor-custom-color-palette' ); 
			echo'<br>';
			echo esc_html__( '• title,title color,for the table of contents','editor-custom-color-palette' ); 
			echo'<br>';
			echo esc_html__( '• enable link underlining on hover','editor-custom-color-palette' ); 	
			echo'<br>';
			echo esc_html__( '• offset navigation anchors for a fixed header','editor-custom-color-palette' ); 	
			echo'<br><br>';
			echo esc_html__( 'Warning! the table of contents is only visible in Front End','editor-custom-color-palette' ); 				
			echo'<br>';
			echo esc_html__( 'Once the reusable block has been inserted into the publication, click on the "convert to normal blocks" icon on the block\'s toolbar.','editor-custom-color-palette' ); 				
			echo'<br>';
			echo '</strong>';
		echo '</div>';
		
		
		echo '<img style="margin-bottom:20px;" src="'.esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/addons-reusable-blocks/table-of-contents-block.jpg">';
		echo'<br>';
		
		echo'<div style="display:inline-block;margin-bottom:30px;" >';
			echo '<a class="download-button" href="https://drive.google.com/uc?export=download&id=1uBaoomwUDNYFO8SrkN9CNtuN22Uy0wG1">'.esc_html__('Table of contents block','editor-custom-color-palette').'</a>';
		echo'</div>';
	
	}
	
	/* -------------------------------------- AFFICHAGE DES CHAMPS POUR LA 8ème SECTION ELEMENTOR PAGE BUILDER -----------------------------------------*/

	/* Affiche le paramètre de champ radio pour activer la synchronization de la palette de couleurs avec celle de Gutenberg 
   Attention ! ne prend pas les Majuscules pour les valeurs de champ.
   $args  Arguments(de type Array) passé a l'appel de la fonction 
   on fait correspondre l’attribut name HTML de notre champ qui est un tableau avec le nom 
   du réglage déclaré avec register_setting() soit eccp_settings_elementor */
   
function eccp_activate_synchronization_color_palette_radio_field_markup( $args ){
	
    $elementor_settings = get_option( 'eccp_settings_elementor' );
    $checked = ! empty( $elementor_settings['eccp_activate_synchronization_color_palette_radio_field'] ) ? $elementor_settings['eccp_activate_synchronization_color_palette_radio_field'] : 'no';
	?>
        <fieldset>
            <legend class="screen-reader-text"><?php esc_html_e( 'no', 'editor-custom-color-palette' ); ?></legend>
                <label for="settings_eccp_radio_option_1">
                    <input id="settings_eccp_radio_option_1" type="radio" name="eccp_settings_elementor[eccp_activate_synchronization_color_palette_radio_field]" value="no" <?php checked( $checked, 'no' ); ?>>
                    <?php esc_html_e( 'no', 'editor-custom-color-palette' ); ?>  <!--  label , text domain  -->
                </label>
                <br>
                <label for="settings_eccp_radio_option_2">
                    <input id="settings_eccp_radio_option_2" type="radio" name="eccp_settings_elementor[eccp_activate_synchronization_color_palette_radio_field]" value="yes" <?php checked( $checked, 'yes' ); ?>>
                    <?php esc_html_e( 'yes', 'editor-custom-color-palette' ); ?>
                </label>
        </fieldset>
		
    <?php
}
	
	
	/* -------------------------------------- AFFICHAGE DES CHAMPS POUR LA 9ème SECTION DIVI COLOR PALETTE -----------------------------------------*/

	 
	/* Affiche le paramètre de champ radio pour activer la synchronization de la palette de couleurs DIVI
   Attention ! ne prend pas les Majuscules pour les valeurs de champ.
   $args  Arguments(de type Array) passé a l'appel de la fonction 
   on fait correspondre l’attribut name HTML de notre champ qui est un tableau avec le nom 
   du réglage déclaré avec register_setting() soit eccp_settings_divi_theme */
   
	function eccp_activate_synchronization_divi_color_palette_radio_field_markup( $args ){
		
		$divi_settings = get_option( 'eccp_settings_divi_theme' );
		$checked = ! empty( $divi_settings['eccp_activate_synchronization_divi_color_palette_radio_field'] ) ? $divi_settings['eccp_activate_synchronization_divi_color_palette_radio_field'] : 'no';
		?>
			<fieldset>
				<legend class="screen-reader-text"><?php esc_html_e( 'no', 'editor-custom-color-palette' ); ?></legend>
					<label for="settings_eccp_radio_option_1">
						<input id="settings_eccp_radio_option_1" type="radio" name="eccp_settings_divi_theme[eccp_activate_synchronization_divi_color_palette_radio_field]" value="no" <?php checked( $checked, 'no' ); ?>>
						<?php esc_html_e( 'no', 'editor-custom-color-palette' ); ?>  <!--  label , text domain  -->
					</label>
					<br>
					<label for="settings_eccp_radio_option_2">
						<input id="settings_eccp_radio_option_2" type="radio" name="eccp_settings_divi_theme[eccp_activate_synchronization_divi_color_palette_radio_field]" value="yes" <?php checked( $checked, 'yes' ); ?>>
						<?php esc_html_e( 'yes', 'editor-custom-color-palette' ); ?>
					</label>
			</fieldset>
			
		<?php
	}
 
	/* Affiche le paramètre de champ Radio pour le Choix synchro DIVI vers Gutenberg ou Gutenberg vers DIVI
   Attention ! ne prend pas les Majuscules pour les valeurs de champ.
   $args  Arguments(de type Array) passé a l'appel de la fonction 
   on fait correspondre l’attribut name HTML de notre champ qui est un tableau avec le nom 
   du réglage déclaré avec register_setting() soit eccp_settings_divi_theme */
   
function eccp_choose_synchronization_radio_field_markup( $args ){
	
    $divi_settings = get_option( 'eccp_settings_divi_theme' );
    $checked = ! empty( $divi_settings['eccp_choose_synchronization_radio_field'] ) ? $divi_settings['eccp_choose_synchronization_radio_field'] : 'synchro-gutenberg-to-divi';
	?>
        <fieldset>
            <legend class="screen-reader-text"><?php esc_html_e( 'Gutenberg to Divi', 'editor-custom-color-palette' ); ?></legend>
                <label for="settings_eccp_radio_option_1">
                    <input id="settings_eccp_radio_option_1" type="radio" name="eccp_settings_divi_theme[eccp_choose_synchronization_radio_field]" value="synchro-gutenberg-to-divi" <?php checked( $checked, 'synchro-gutenberg-to-divi' ); ?>>
                    <?php esc_html_e( 'Gutenberg to Divi', 'editor-custom-color-palette' ); ?>  <!--  label , text domain  -->
                </label>
                <br>
                <label for="settings_eccp_radio_option_2">
                    <input id="settings_eccp_radio_option_2" type="radio" name="eccp_settings_divi_theme[eccp_choose_synchronization_radio_field]" value="synchro-divi-to-gutenberg" <?php checked( $checked, 'synchro-divi-to-gutenberg' ); ?>>
                    <?php esc_html_e( 'Divi to Gutenberg', 'editor-custom-color-palette' ); ?>
                </label>
        </fieldset>
		
    <?php
}


	
/* -------------------------------------- AFFICHAGE DES CHAMPS POUR LA 10ème SECTION CUSTOM BACK OFFICE -----------------------------------------*/


/* -------------------------------------- AFFICHAGE DES CHAMPS POUR LES ÉCRANS DE PUBLICATIONS -----------------------------------------*/


// Affiche le paramètre de champ chexbox pour activer la colonne & affichage image en avant pour les articles & CPT  
function eccp_settings_activate_post_featured_image_column_checkbox_field_markup( $args ){
    
	$custom_back_office_settings = get_option( 'eccp_settings_custom_back_office' );
	$checked = (bool) $custom_back_office_settings['eccp_settings_activate_post_featured_image_column_checkbox_field'] ?: false;
    
	?>
	
        <input id="<?php echo esc_attr( $args['label_for'] ); ?>" type="checkbox" name="eccp_settings_custom_back_office[eccp_settings_activate_post_featured_image_column_checkbox_field]" <?php checked( $checked ); ?> >
        <span><?php echo esc_html( $args['description'] ); ?></span>
		
    <?php
	
	echo'<br><br>';
	
}
	
// Affiche le paramètre de champ chexbox pour activer la colonne & affichage image en avant pour les pages 
function eccp_settings_activate_page_featured_image_column_checkbox_field_markup( $args ){
    
	$custom_back_office_settings = get_option( 'eccp_settings_custom_back_office' );
	$checked = (bool) $custom_back_office_settings['eccp_settings_activate_page_featured_image_column_checkbox_field'] ?: false;
    
	?>
	
        <input id="<?php echo esc_attr( $args['label_for'] ); ?>" type="checkbox" name="eccp_settings_custom_back_office[eccp_settings_activate_page_featured_image_column_checkbox_field]" <?php checked( $checked ); ?> >
        <span><?php echo esc_html( $args['description'] ); ?></span>
		
    <?php
	
	echo'<br><br>';
	
}
	
// Affiche le paramètre de champ texte pour la largeur de la vignette image en avant 
function eccp_settings_width_thumbnail_featured_image_text_field_markup( $args ){
	
	$custom_back_office_settings = get_option( 'eccp_settings_custom_back_office' );// le nom du réglage passé a la fonction register_setting()
	$value   = ! empty( $custom_back_office_settings['eccp_settings_width_thumbnail_featured_image_text_field'] ) ? $custom_back_office_settings['eccp_settings_width_thumbnail_featured_image_text_field'] : 160;
	?>
		<input style="width:70px;"  min="100" max="200" class="regular-text" type="number" name="eccp_settings_custom_back_office[eccp_settings_width_thumbnail_featured_image_text_field]" value="<?php echo ( esc_attr( $value ) ); ?>">
	<?php
	
	echo '<div style="margin-top: 55px;">
			<img style="display:block;margin:auto;" src="'.esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/custom-screen-admin/screen-posts-featured-column.jpg">
			<figcaption style="text-align:center;font-weight:bold;margin-top:10px;">'.esc_html__( 'Post Screen: Featured Image Column & ID & Filter by Author','editor-custom-color-palette' ).'
			</figcaption>
		  </div>';
	
	echo '<h3 id="sub-title-publication-two"><u>'. esc_html__( 'Filter by author for all post types','editor-custom-color-palette' ).'</u></h3>';
	
} 


// Affiche le paramètre de champ chexbox pour activer le filtre par auteur 
function eccp_settings_activate_author_filter_checkbox_field_markup( $args ){
    
	$custom_back_office_settings = get_option( 'eccp_settings_custom_back_office' );
	$checked = (bool) $custom_back_office_settings['eccp_settings_activate_author_filter_checkbox_field'] ?: false;
    
	?>
	
        <input id="<?php echo esc_attr( $args['label_for'] ); ?>" type="checkbox" name="eccp_settings_custom_back_office[eccp_settings_activate_author_filter_checkbox_field]" <?php checked( $checked ); ?> >
        <span><?php echo esc_html( $args['description'] ); ?></span>
		
    <?php
	

	echo '<h3 id="sub-title-publication-three"><u>'. esc_html__( 'Filter by categories for custom post types','editor-custom-color-palette' ).'</u></h3>';
	
}


// Affiche le paramètre de champ chexbox pour activer le filtre par catégorie pour les CPT 
function eccp_settings_activate_taxonomy_filter_cpt_checkbox_field_markup( $args ){
    
	$custom_back_office_settings = get_option( 'eccp_settings_custom_back_office' );
	$checked = (bool) $custom_back_office_settings['eccp_settings_activate_taxonomy_filter_cpt_checkbox_field'] ?: false;
    
	?>
	
        <input id="<?php echo esc_attr( $args['label_for'] ); ?>" type="checkbox" name="eccp_settings_custom_back_office[eccp_settings_activate_taxonomy_filter_cpt_checkbox_field]" <?php checked( $checked ); ?> >
        <span><?php echo esc_html( $args['description'] ); ?></span>
		
    <?php
	
	echo '<h3 id="sub-title-publication-four"><u>'. esc_html__( 'Filter by date range','editor-custom-color-palette' ).'</u></h3>';
	
}


// Affiche le paramètre de champ chexbox pour activer le filtre par plage de dates pour les articles & CPT
function eccp_settings_enable_post_cpt_date_range_filter_checkbox_field_markup( $args ){
    
	$custom_back_office_settings = get_option( 'eccp_settings_custom_back_office' );
	$checked = (bool) $custom_back_office_settings['eccp_settings_enable_post_cpt_date_range_filter_checkbox_field'] ?: false;
    
	?>
	
        <input id="<?php echo esc_attr( $args['label_for'] ); ?>" type="checkbox" name="eccp_settings_custom_back_office[eccp_settings_enable_post_cpt_date_range_filter_checkbox_field]" <?php checked( $checked ); ?> >
        <span><?php echo esc_html( $args['description'] ); ?></span>
		
    <?php
	
	echo '<h3 id="sub-title-publication-five"><u>'. esc_html__( 'Filter post by publication status','editor-custom-color-palette' ).'</u></h3>';
	
}

// Affiche le paramètre de champ chexbox pour activer pour les articles le filtre par statuts de publication 
function eccp_settings_enable_post_filter_publication_status_checkbox_field_markup( $args ){
    
	$custom_back_office_settings = get_option( 'eccp_settings_custom_back_office' );
	$checked = (bool) $custom_back_office_settings['eccp_settings_enable_post_filter_publication_status_checkbox_field'] ?: false;
    
	?>
	
        <input id="<?php echo esc_attr( $args['label_for'] ); ?>" type="checkbox" name="eccp_settings_custom_back_office[eccp_settings_enable_post_filter_publication_status_checkbox_field]" <?php checked( $checked ); ?> >
        <span><?php echo esc_html( $args['description'] ); ?></span>
		
    <?php
	
	echo '<h3 id="sub-title-publication-six"><u>'. esc_html__( 'Added publication status options for bulk article actions','editor-custom-color-palette' ).'</u></h3>';
	
	
}


// Affiche le paramètre de champ chexbox pour activer status de publication pour les actions groupés des articles
function eccp_settings_activate_publication_status_bulk_actions_posts_checkbox_field_markup( $args ){
    
	$custom_back_office_settings = get_option( 'eccp_settings_custom_back_office' );
	$checked = (bool) $custom_back_office_settings['eccp_settings_activate_publication_status_bulk_actions_posts_checkbox_field'] ?: false;
    
	?>
	
        <input id="<?php echo esc_attr( $args['label_for'] ); ?>" type="checkbox" name="eccp_settings_custom_back_office[eccp_settings_activate_publication_status_bulk_actions_posts_checkbox_field]" <?php checked( $checked ); ?> >
        <span><?php echo esc_html( $args['description'] ); ?></span>
		
    <?php
	
	
	echo '<h2 style="margin-top: 55px;" id="section_library">'. esc_html__( 'Library','editor-custom-color-palette' ).'</h2>';
	
	echo '<h3 id="sub-title-library-one"><u>'. esc_html__( 'Added ID,Dimensions,File Size columns','editor-custom-color-palette' ).'</u></h3>';
	
	echo '<div style="width:40%;" class="mise-en-avant">';
		echo '<strong>';
		echo esc_html__( 'Adding columns to the library:','editor-custom-color-palette' );
		echo'<br>';
		echo esc_html__( '• Post ID','editor-custom-color-palette' );
		echo'<br>';
		echo esc_html__( '• Dimensions: Width * Height','editor-custom-color-palette' );
		echo'<br>';
		echo esc_html__( '• File size in KB','editor-custom-color-palette' );
		echo'<br>';
		echo '</strong>';
	echo '</div>';
	
}



/* -------------------------------------- AFFICHAGE DES CHAMPS POUR LA MÉDIATHÈQUE -----------------------------------------*/

// Affiche le paramètre de champ chexbox pour activer les colonnes ID & Dimensions & Taille fichier 
function eccp_settings_activate_library_id_dimensions_size_file_column_checkbox_field_markup( $args ){
    
	$custom_back_office_settings = get_option( 'eccp_settings_custom_back_office' );
	$checked = (bool) $custom_back_office_settings['eccp_settings_activate_library_id_dimensions_size_file_column_checkbox_field'] ?: false;
    
	?>
	
        <input id="<?php echo esc_attr( $args['label_for'] ); ?>" type="checkbox" name="eccp_settings_custom_back_office[eccp_settings_activate_library_id_dimensions_size_file_column_checkbox_field]" <?php checked( $checked ); ?> >
        <span><?php echo esc_html( $args['description'] ); ?></span>
		
    <?php
	
	echo '<div style="margin-top: 55px;">
			<img style="display:block;margin:auto;" src="'.esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/custom-screen-admin/screen-library-id-dimensions-size-file-column.jpg">
			<figcaption style="text-align:center;font-weight:bold;margin-top:10px;">'.esc_html__( 'Library screen: ID & Dimensions & File Size columns','editor-custom-color-palette' ).'
			</figcaption>
		  </div>';
	
	
	echo '<h3 id="sub-title-library-two"><u>'. esc_html__( 'Filter by date range','editor-custom-color-palette' ).'</u></h3>';
	
	
} 

// Affiche le paramètre de champ chexbox pour activer le filtre par plage de dates pour la médiathèque en vue liste
function eccp_settings_enable_filter_dates_range_media_library_checkbox_field_markup( $args ){
    
	$custom_back_office_settings = get_option( 'eccp_settings_custom_back_office' );
	$checked = (bool) $custom_back_office_settings['eccp_settings_enable_filter_dates_range_media_library_checkbox_field'] ?: false;
    
	?>
	
        <input id="<?php echo esc_attr( $args['label_for'] ); ?>" type="checkbox" name="eccp_settings_custom_back_office[eccp_settings_enable_filter_dates_range_media_library_checkbox_field]" <?php checked( $checked ); ?> >
        <span><?php echo esc_html( $args['description'] ); ?></span>
		
    <?php
	
	echo '<h3 id="sub-title-library-three"><u>'. esc_html__( 'allow upload media in SVG format','editor-custom-color-palette' ).'</u></h3>';
}  



// Affiche le paramètre de champ chexbox pour autoriser l'upload de tous types de format dans la bibliothèque médias
function eccp_settings_activate_mime_types_media_checkbox_field_markup( $args ){
    
	$custom_back_office_settings = get_option( 'eccp_settings_custom_back_office' );
	$checked = (bool) $custom_back_office_settings['eccp_settings_activate_mime_types_media_checkbox_field'] ?: false;
    
	?>
	
        <input id="<?php echo esc_attr( $args['label_for'] ); ?>" type="checkbox" name="eccp_settings_custom_back_office[eccp_settings_activate_mime_types_media_checkbox_field]" <?php checked( $checked ); ?> >
        <span><?php echo esc_html( $args['description'] ); ?></span>
		
    <?php
	
	echo '<h3 id="sub-title-library-four"><u>'. esc_html__( 'Automatically set image Title,Alt-Text & Caption upon upload','editor-custom-color-palette' ).'</u></h3>';
	
	
	echo '<div style="width:40%;" class="mise-en-avant">';
		echo '<strong>';
		echo esc_html__( '• Sanitize the title: We remove hyphens,underscores and extra spaces from the image title.','editor-custom-color-palette' );
		echo'<br>';
		echo esc_html__( '• The title thus sanitized will be used to define the alternative text and the caption of the image.','editor-custom-color-palette' );
		echo'<br>';
		echo '</strong>';
	echo '</div>';

}
 
// Affiche le paramètre de champ chexbox pour définir automatiquement le texte alternatif de l'image selon son titre assaini lors du téléchargement
function eccp_settings_image_alt_text_by_title_checkbox_field_markup( $args ){
    
	$custom_back_office_settings = get_option( 'eccp_settings_custom_back_office' );
	$checked = (bool) $custom_back_office_settings['eccp_settings_image_alt_text_by_title_checkbox_field'] ?: false;
    
	?>
	
        <input id="<?php echo esc_attr( $args['label_for'] ); ?>" type="checkbox" name="eccp_settings_custom_back_office[eccp_settings_image_alt_text_by_title_checkbox_field]" <?php checked( $checked ); ?> >
        <span><?php echo esc_html( $args['description'] ); ?></span>
		
    <?php
	
	
} 
 
 
 // Affiche le paramètre de champ chexbox pour définir automatiquement la légende de l'image selon son titre assaini lors du téléchargement
function eccp_settings_image_caption_according_title_checkbox_field_markup( $args ){
    
	$custom_back_office_settings = get_option( 'eccp_settings_custom_back_office' );
	$checked = (bool) $custom_back_office_settings['eccp_settings_image_caption_according_title_checkbox_field'] ?: false;
    
	?>
	
        <input id="<?php echo esc_attr( $args['label_for'] ); ?>" type="checkbox" name="eccp_settings_custom_back_office[eccp_settings_image_caption_according_title_checkbox_field]" <?php checked( $checked ); ?> >
        <span><?php echo esc_html( $args['description'] ); ?></span>
		
    <?php
	
	
	echo '<h2 style="margin-top: 55px;" id="section_users">'. esc_html__( 'Users','editor-custom-color-palette' ).'</h2>';
	
	echo '<h3 id="sub-title-users-one"><u>'. esc_html__( 'Add column last login & user registration date','editor-custom-color-palette' ).'</u></h3>';
	
	echo '<div style="width:40%;" class="mise-en-avant">';
		echo '<strong>';
		echo esc_html__( 'Enable a column on the All Accounts screen to display the last login date and/or the check-in date.','editor-custom-color-palette' );
		echo'<br>';
		echo '</strong>';
	echo '</div>';
	
} 
 
 
 /* -------------------------------------- AFFICHAGE DES CHAMPS POUR LES COMPTES -----------------------------------------*/
 
 // Affiche le paramètre de champ chexbox pour activer activer une colonne date de dernière connexion
function eccp_settings_activate_users_last_login_column_checkbox_field_markup( $args ){
    
	$custom_back_office_settings = get_option( 'eccp_settings_custom_back_office' );
	$checked = (bool) $custom_back_office_settings['eccp_settings_activate_users_last_login_column_checkbox_field'] ?: false;
    
	?>
	
        <input id="<?php echo esc_attr( $args['label_for'] ); ?>" type="checkbox" name="eccp_settings_custom_back_office[eccp_settings_activate_users_last_login_column_checkbox_field]" <?php checked( $checked ); ?> >
        <span><?php echo esc_html( $args['description'] ); ?></span>
		
    <?php
		  
} 


 // Affiche le paramètre de champ chexbox pour activer une colonne date d'enregistrement utilisateurs
function eccp_settings_activate_users_registration_date_column_checkbox_field_markup( $args ){
    
	$custom_back_office_settings = get_option( 'eccp_settings_custom_back_office' );
	$checked = (bool) $custom_back_office_settings['eccp_settings_activate_users_registration_date_column_checkbox_field'] ?: false;
    
	?>
	
        <input id="<?php echo esc_attr( $args['label_for'] ); ?>" type="checkbox" name="eccp_settings_custom_back_office[eccp_settings_activate_users_registration_date_column_checkbox_field]" <?php checked( $checked ); ?> >
        <span><?php echo esc_html( $args['description'] ); ?></span>
		
    <?php
		  
	echo '<h3 id="sub-title-users-two"><u>'. esc_html__( 'Allow contributors to upload media to the media library','editor-custom-color-palette' ).'</u></h3>';
	
} 

// Affiche le paramètre de champ chexbox pour autoriser les contributeurs a télécharger des médias
function eccp_settings_allow_contributors_upload_media_checkbox_field_markup( $args ){
    
	$custom_back_office_settings = get_option( 'eccp_settings_custom_back_office' );
	$checked = (bool) $custom_back_office_settings['eccp_settings_allow_contributors_upload_media_checkbox_field'] ?: false;
    
	?>
	
        <input id="<?php echo esc_attr( $args['label_for'] ); ?>" type="checkbox" name="eccp_settings_custom_back_office[eccp_settings_allow_contributors_upload_media_checkbox_field]" <?php checked( $checked ); ?> >
        <span><?php echo esc_html( $args['description'] ); ?></span>
		
    <?php
		
	
	echo '<h2 style="margin-top: 75px;" id="section_login_form">'. esc_html__( 'Login Page','editor-custom-color-palette' ).'</h2>';
	
	echo '<div style="margin-top: 55px;">
			<img  src="'.esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/custom-screen-admin/screen-login-form.jpg">
			<figcaption style="text-align:left;font-weight:bold;margin-top:10px;">'.esc_html__( 'Login Form','editor-custom-color-palette' ).'
			</figcaption>
		  </div>';
		  
	echo '<h3 id="sub-title-login-page-one"><u>'. esc_html__( 'Disable language selector','editor-custom-color-palette' ).'</u></h3>';
	
} 


/* -------------------------------------- AFFICHAGE DES CHAMPS POUR LE FORMULAIRE DE CONNEXION -----------------------------------------*/

//Affiche le paramètre de champ chexbox pour désactiver le sélecteur de langue
function eccp_settings_disable_language_selector_checkbox_field_markup( $args ){
    
	$custom_back_office_settings = get_option( 'eccp_settings_custom_back_office' );
	$checked = (bool) $custom_back_office_settings['eccp_settings_disable_language_selector_checkbox_field'] ?: false;
    
	?>
	
        <input id="<?php echo esc_attr( $args['label_for'] ); ?>" type="checkbox" name="eccp_settings_custom_back_office[eccp_settings_disable_language_selector_checkbox_field]" <?php checked( $checked ); ?> >
        <span><?php echo esc_html( $args['description'] ); ?></span>
		
    <?php
	
	echo '<br><br>'; 
	echo '<h3 id="sub-title-login-page-two"><u>'. esc_html__( 'Show a custom error message to your users','editor-custom-color-palette' ).'</u></h3>';
	echo '<div style="width:40%;margin:0;" class="mise-en-avant">';
	echo esc_html__( 'You can customize the texts below in the language of your choice.Leave the field blank to not display a message.','editor-custom-color-palette' ); 
	echo '<br>'; 
	echo '</div>';

} 
 
//Affiche le paramètre de champ textarea pour renseigner un message d'erreur personnalisé
function eccp_error_login_custom_message_textarea_field_markup( $args ){
	
    $custom_back_office_settings = get_option( 'eccp_settings_custom_back_office' );
    $value = ! empty( $custom_back_office_settings['eccp_error_login_custom_message_textarea_field'] ) ?  esc_html__( $custom_back_office_settings['eccp_error_login_custom_message_textarea_field'],'editor-custom-color-palette' )  : '';
	
    ?>
        <textarea class="regular-text" rows=3 name="eccp_settings_custom_back_office[eccp_error_login_custom_message_textarea_field]"><?php echo htmlspecialchars_decode( esc_textarea( $value ) ); ?></textarea>
    <?php
	
	echo '<br><br>'; 
	echo '<h3 id="sub-title-login-page-three"><u>'. esc_html__( 'Disable Admin Email Verification Request','editor-custom-color-palette' ).'</u></h3>';
	

}


//Affiche le paramètre de champ chexbox pour désactiver la demande de vérification de l'adresse e-mail administrateur
function eccp_settings_disable_admin_email_request_checkbox_field_markup( $args ){
    
	$custom_back_office_settings = get_option( 'eccp_settings_custom_back_office' );
	$checked = (bool) $custom_back_office_settings['eccp_settings_disable_admin_email_request_checkbox_field'] ?: false;
    
	?>
	
        <input id="<?php echo esc_attr( $args['label_for'] ); ?>" type="checkbox" name="eccp_settings_custom_back_office[eccp_settings_disable_admin_email_request_checkbox_field]" <?php checked( $checked ); ?> >
        <span><?php echo esc_html( $args['description'] ); ?></span>
		
    <?php

	echo '<br><br>'; 
	echo '<h3 id="sub-title-login-page-four"><u>'. esc_html__( 'Custom Logo','editor-custom-color-palette' ).'</u></h3>';
	
	echo '<div style="width:40%;" class="mise-en-avant">';
		echo '<strong>';
		echo esc_html__( '• Replace the Wordpress logo with your custom logo.','editor-custom-color-palette' );
		echo'<br>';
		echo esc_html__( '• The connection page logo link is replaced by default by the site home page link.','editor-custom-color-palette' );
		echo'<br>';
		echo '</strong>';
	echo '</div>';

} 


// Affiche le paramètre de champ chexbox pour activer la personnalisation du logo
function eccp_settings_activate_custom_logo_checkbox_field_markup( $args ){
    
	$custom_back_office_settings = get_option( 'eccp_settings_custom_back_office' );
	$checked = (bool) $custom_back_office_settings['eccp_settings_activate_custom_logo_checkbox_field'] ?: false;
    
	?>
	
        <input id="<?php echo esc_attr( $args['label_for'] ); ?>" type="checkbox" name="eccp_settings_custom_back_office[eccp_settings_activate_custom_logo_checkbox_field]" <?php checked( $checked ); ?> >
        <span><?php echo esc_html( $args['description'] ); ?></span>
		
    <?php

	echo'<br><br>';

} 

// Affiche notre champ de réglage pour renseigner l'URL du logo personnalisé 
function eccp_settings_custom_logo_url_text_field_markup( $args ){
	
	$custom_back_office_settings = get_option( 'eccp_settings_custom_back_office' );// le nom du réglage passé a la fonction register_setting()
	$value   = ! empty( $custom_back_office_settings['eccp_settings_custom_logo_url_text_field'] ) ? $custom_back_office_settings['eccp_settings_custom_logo_url_text_field'] : esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/custom-gutenberg-block/eccp-mystery-gravatar.jpg';
	$size = ! empty( $custom_back_office_settings['eccp_settings_custom_logo_width_text_field'] ) ? $custom_back_office_settings['eccp_settings_custom_logo_width_text_field'] : 318;

	?>
		<label for="upload_image">
			
			
			<!-- si une URL pour un logo personnalisé est enregistré 
			    dans la table option alors on affiche l'image correspondante 
			    sinon on affiche le logo par défaut: l'homme mystère 
			    a la sélection de l'image le script eccp-upload-media.js 
				affiche l'image choisie !-->
			<img id="upload_image_src" src=<?php echo ( esc_url( $value ) ); ?> height="auto" width="100" />
			
			
			<!-- Champ texte pour l'URL de l'image sélectionnée !-->
			<input id="upload_image" style="width:160px;" class="regular-text" type="url" name="eccp_settings_custom_back_office[eccp_settings_custom_logo_url_text_field]" value="<?php echo ( esc_url( $value ) ); ?>">
			<!-- Bouton géréer par javascript pour appeler la boite de téléchargement d'image  !-->
			<input id="upload_image_button" class="button" type="button" value="<?php echo esc_html__( 'Upload image','editor-custom-color-palette' ); ?>" />
			<br />
			<?php echo esc_html__( 'Enter a URL or upload an image','editor-custom-color-palette' );?>
			
			
		</label>
		
	<?php
	
} 


// Affiche notre champ de réglage pour renseigner la largeur du logo personnalisé 
function eccp_settings_custom_logo_width_text_field_markup( $args ){
	
	$custom_back_office_settings = get_option( 'eccp_settings_custom_back_office' );// le nom du réglage passé a la fonction register_setting()
	$value   = ! empty( $custom_back_office_settings['eccp_settings_custom_logo_width_text_field'] ) ? $custom_back_office_settings['eccp_settings_custom_logo_width_text_field'] : 318;
	?>
		<!-- input gérér par javascript pour modifier dynamiquement la taille de la balise image
		     du logo en fonction de la  taille sélectionnée (a condition que id=avatar_size)  !-->
		<input id="logo_width" style="width:60px;" size="3" min="100" max="400" class="regular-text" type="number" name="eccp_settings_custom_back_office[eccp_settings_custom_logo_width_text_field]" value="<?php echo ( esc_attr( $value ) ); ?>">
	<?php
	
} 

// Affiche notre champ de réglage pour renseigner la hauteur du logo personnalisé 
function eccp_settings_custom_logo_height_text_field_markup( $args ){
	
	$custom_back_office_settings = get_option( 'eccp_settings_custom_back_office' );// le nom du réglage passé a la fonction register_setting()
	$value   = ! empty( $custom_back_office_settings['eccp_settings_custom_logo_height_text_field'] ) ? $custom_back_office_settings['eccp_settings_custom_logo_height_text_field'] : 96;
	?>
		<!-- input gérér par javascript pour modifier dynamiquement la taille de la balise image
		     du logo en fonction de la  taille sélectionnée (a condition que id=avatar_size)  !-->
		<input id="logo_height" style="width:60px;" size="3" min="20" max="400" class="regular-text" type="number" name="eccp_settings_custom_back_office[eccp_settings_custom_logo_height_text_field]" value="<?php echo ( esc_attr( $value ) ); ?>">
	<?php
	
	echo '<br><br>'; 
	echo '<h3 id="sub-title-login-page-five"><u>'. esc_html__( 'Custom Login Form','editor-custom-color-palette' ).'</u></h3>';
	
}

// Affiche le paramètre de champ radio pour activer la personnalisation du formulaire de connexion
function eccp_settings_activate_custom_login_form_radio_field_markup( $args ){
	
    $custom_back_office_settings = get_option( 'eccp_settings_custom_back_office' );
    $checked = ! empty( $custom_back_office_settings['eccp_settings_activate_custom_login_form_radio_field'] ) ? $custom_back_office_settings['eccp_settings_activate_custom_login_form_radio_field'] : 'no';
	?>
        <fieldset>
            <legend class="screen-reader-text"><?php esc_html_e( 'no', 'editor-custom-color-palette' ); ?></legend>
                <label for="settings_eccp_radio_option_1">
                    <input id="settings_eccp_radio_option_1" type="radio" name="eccp_settings_custom_back_office[eccp_settings_activate_custom_login_form_radio_field]" value="no" <?php checked( $checked, 'no' ); ?>>
                    <?php esc_html_e( 'no', 'editor-custom-color-palette' ); ?>  <!--  label , text domain  -->
                </label>
                <br>
                <label for="settings_eccp_radio_option_2">
                    <input id="settings_eccp_radio_option_2" type="radio" name="eccp_settings_custom_back_office[eccp_settings_activate_custom_login_form_radio_field]" value="yes" <?php checked( $checked, 'yes' ); ?>>
                    <?php esc_html_e( 'yes', 'editor-custom-color-palette' ); ?>
                </label>
        </fieldset>
		
    <?php
	
	echo'<br><br><br>';
	
}

// Affiche le paramètre de champ texte pour renseigner la couleur de fond de la page de connexion
function eccp_settings_page_login_form_background_color_text_field_markup( $args ){
	
    $custom_back_office_settings = get_option( 'eccp_settings_custom_back_office' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $custom_back_office_settings['eccp_settings_page_login_form_background_color_text_field'] ) ? $custom_back_office_settings['eccp_settings_page_login_form_background_color_text_field'] : '';
    ?>
        <input class="color-field" type="text" name="eccp_settings_custom_back_office[eccp_settings_page_login_form_background_color_text_field]" data-default-color = "<?php echo esc_attr( '#F0F0F1' ); ?>" value="<?php echo esc_attr( $value ); ?>">
    <?php
	   
}

// Affiche le paramètre de champ texte pour renseigner la couleur du texte en pied de page
function eccp_settings_page_login_form_footer_text_color_text_field_markup( $args ){
	
    $custom_back_office_settings = get_option( 'eccp_settings_custom_back_office' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $custom_back_office_settings['eccp_settings_page_login_form_footer_text_color_text_field'] ) ? $custom_back_office_settings['eccp_settings_page_login_form_footer_text_color_text_field'] : '';
    ?>
        <input class="color-field" type="text" name="eccp_settings_custom_back_office[eccp_settings_page_login_form_footer_text_color_text_field]" data-default-color = "<?php echo esc_attr( '#333333' ); ?>" value="<?php echo esc_attr( $value ); ?>">
    <?php
	
	echo'<br><br><br>';     
}

// Affiche le paramètre de champ texte pour renseigner la couleur de fond du formulaire de connexion
function eccp_settings_login_form_background_color_text_field_markup( $args ){
	
    $custom_back_office_settings = get_option( 'eccp_settings_custom_back_office' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $custom_back_office_settings['eccp_settings_login_form_background_color_text_field'] ) ? $custom_back_office_settings['eccp_settings_login_form_background_color_text_field'] : '';
    ?>
        <input class="color-field" type="text" name="eccp_settings_custom_back_office[eccp_settings_login_form_background_color_text_field]" data-default-color = "<?php echo esc_attr( '#EAE672' ); ?>" value="<?php echo esc_attr( $value ); ?>">
    <?php
	     
}

//Affiche le paramètre de champ texte pour renseigner la couleur de texte du formulaire de connexion
function eccp_settings_login_form_text_color_text_field_markup( $args ){
	
    $custom_back_office_settings = get_option( 'eccp_settings_custom_back_office' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $custom_back_office_settings['eccp_settings_login_form_text_color_text_field'] ) ? $custom_back_office_settings['eccp_settings_login_form_text_color_text_field'] : '';
    ?>
        <input class="color-field" type="text" name="eccp_settings_custom_back_office[eccp_settings_login_form_text_color_text_field]" data-default-color = "<?php echo esc_attr( '#333333' ); ?>" value="<?php echo esc_attr( $value ); ?>">
    <?php
	
	echo'<br><br><br>';
	     
}

// Affiche le paramètre de champ texte pour renseigner la couleur de fond des boutons de la page de connexion
function eccp_settings_button_login_form_background_color_text_field_markup( $args ){
	
    $custom_back_office_settings = get_option( 'eccp_settings_custom_back_office' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $custom_back_office_settings['eccp_settings_button_login_form_background_color_text_field'] ) ? $custom_back_office_settings['eccp_settings_button_login_form_background_color_text_field'] : '';
    ?>
        <input class="color-field" type="text" name="eccp_settings_custom_back_office[eccp_settings_button_login_form_background_color_text_field]" data-default-color = "<?php echo esc_attr( '#F0AD4E' ); ?>" value="<?php echo esc_attr( $value ); ?>">
    <?php
	     
}

// Affiche le paramètre de champ texte pour renseigner la couleur de a bordure des boutons de la page de connexion
function eccp_settings_button_login_form_border_color_text_field_markup( $args ){
	
    $custom_back_office_settings = get_option( 'eccp_settings_custom_back_office' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $custom_back_office_settings['eccp_settings_button_login_form_border_color_text_field'] ) ? $custom_back_office_settings['eccp_settings_button_login_form_border_color_text_field'] : '';
    ?>
        <input class="color-field" type="text" name="eccp_settings_custom_back_office[eccp_settings_button_login_form_border_color_text_field]" data-default-color = "<?php echo esc_attr( '#F0AD4E' ); ?>" value="<?php echo esc_attr( $value ); ?>">
    <?php
	     
}

// Affiche le paramètre de champ texte pour renseigner la couleur de texte des boutons de la page de connexion
function eccp_settings_button_login_form_text_color_text_field_markup( $args ){
	
    $custom_back_office_settings = get_option( 'eccp_settings_custom_back_office' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $custom_back_office_settings['eccp_settings_button_login_form_text_color_text_field'] ) ? $custom_back_office_settings['eccp_settings_button_login_form_text_color_text_field'] : '';
    ?>
        <input class="color-field" type="text" name="eccp_settings_custom_back_office[eccp_settings_button_login_form_text_color_text_field]" data-default-color = "<?php echo esc_attr( '#FFFFFF' ); ?>" value="<?php echo esc_attr( $value ); ?>">
    <?php
	  
}

// Affiche le paramètre de champ texte pour renseigner la couleur de fond des boutons au survol de la page de connexion
function eccp_settings_hover_button_login_form_background_color_text_field_markup( $args ){
	
    $custom_back_office_settings = get_option( 'eccp_settings_custom_back_office' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $custom_back_office_settings['eccp_settings_hover_button_login_form_background_color_text_field'] ) ? $custom_back_office_settings['eccp_settings_hover_button_login_form_background_color_text_field'] : '';
    ?>
        <input class="color-field" type="text" name="eccp_settings_custom_back_office[eccp_settings_hover_button_login_form_background_color_text_field]" data-default-color = "<?php echo esc_attr( '#EC971F' ); ?>" value="<?php echo esc_attr( $value ); ?>">
    <?php
	     
}

// Affiche le paramètre de champ texte pour renseigner la couleur de la bordure des boutons au survol de la page de connexion
function eccp_settings_hover_button_login_form_border_color_text_field_markup( $args ){
	
    $custom_back_office_settings = get_option( 'eccp_settings_custom_back_office' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $custom_back_office_settings['eccp_settings_hover_button_login_form_border_color_text_field'] ) ? $custom_back_office_settings['eccp_settings_hover_button_login_form_border_color_text_field'] : '';
    ?>
        <input class="color-field" type="text" name="eccp_settings_custom_back_office[eccp_settings_hover_button_login_form_border_color_text_field]" data-default-color = "<?php echo esc_attr( '#EC971F' ); ?>" value="<?php echo esc_attr( $value ); ?>">
    <?php
	     
}

// Affiche le paramètre de champ texte pour renseigner la couleur de texte des boutons au survol de la page de connexion
function eccp_settings_hover_button_login_form_text_color_text_field_markup( $args ){
	
    $custom_back_office_settings = get_option( 'eccp_settings_custom_back_office' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $custom_back_office_settings['eccp_settings_hover_button_login_form_text_color_text_field'] ) ? $custom_back_office_settings['eccp_settings_hover_button_login_form_text_color_text_field'] : '';
    ?>
        <input class="color-field" type="text" name="eccp_settings_custom_back_office[eccp_settings_hover_button_login_form_text_color_text_field]" data-default-color = "<?php echo esc_attr( '#FFFFFF' ); ?>" value="<?php echo esc_attr( $value ); ?>">
    <?php
	  
	echo'<br><br><br>';
	  
}

//Affiche le paramètre de champ texte pour renseigner la couleur de fond de la notice info
function eccp_settings_info_notice_login_form_background_color_text_field_markup( $args ){
	
    $custom_back_office_settings = get_option( 'eccp_settings_custom_back_office' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $custom_back_office_settings['eccp_settings_info_notice_login_form_background_color_text_field'] ) ? $custom_back_office_settings['eccp_settings_info_notice_login_form_background_color_text_field'] : '';
    ?>
        <input class="color-field" type="text" name="eccp_settings_custom_back_office[eccp_settings_info_notice_login_form_background_color_text_field]" data-default-color = "<?php echo esc_attr( '#B0E0E6' ); ?>" value="<?php echo esc_attr( $value ); ?>">
    <?php
	     
}

// Affiche le paramètre de champ texte pour renseigner la couleur de bordure de la notice info
function eccp_settings_info_notice_login_form_border_color_text_field_markup( $args ){
	
    $custom_back_office_settings = get_option( 'eccp_settings_custom_back_office' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $custom_back_office_settings['eccp_settings_info_notice_login_form_border_color_text_field'] ) ? $custom_back_office_settings['eccp_settings_info_notice_login_form_border_color_text_field'] : '';
    ?>
        <input class="color-field" type="text" name="eccp_settings_custom_back_office[eccp_settings_info_notice_login_form_border_color_text_field]" data-default-color = "<?php echo esc_attr( '#00A0D2' ); ?>" value="<?php echo esc_attr( $value ); ?>">
    <?php
	     
}

//Affiche le paramètre de champ texte pour renseigner la couleur de texte de la notice info
function eccp_settings_info_notice_login_form_text_color_text_field_markup( $args ){
	
    $custom_back_office_settings = get_option( 'eccp_settings_custom_back_office' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $custom_back_office_settings['eccp_settings_info_notice_login_form_text_color_text_field'] ) ? $custom_back_office_settings['eccp_settings_info_notice_login_form_text_color_text_field'] : '';
    ?>
        <input class="color-field" type="text" name="eccp_settings_custom_back_office[eccp_settings_info_notice_login_form_text_color_text_field]" data-default-color = "<?php echo esc_attr( '#333333' ); ?>" value="<?php echo esc_attr( $value ); ?>">
    <?php
	     
	echo'<br><br><br>';
}

//Affiche le paramètre de champ texte pour renseigner la couleur de fond de la notice d'erreur
function eccp_settings_error_notice_login_form_background_color_text_field_markup( $args ){
	
    $custom_back_office_settings = get_option( 'eccp_settings_custom_back_office' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $custom_back_office_settings['eccp_settings_error_notice_login_form_background_color_text_field'] ) ? $custom_back_office_settings['eccp_settings_error_notice_login_form_background_color_text_field'] : '';
    ?>
        <input class="color-field" type="text" name="eccp_settings_custom_back_office[eccp_settings_error_notice_login_form_background_color_text_field]" data-default-color = "<?php echo esc_attr( '#FA8072' ); ?>" value="<?php echo esc_attr( $value ); ?>">
    <?php
	     
}

//Affiche le paramètre de champ texte pour renseigner la couleur de bordure de la notice d'erreur
function eccp_settings_error_notice_login_form_border_color_text_field_markup( $args ){
	
    $custom_back_office_settings = get_option( 'eccp_settings_custom_back_office' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $custom_back_office_settings['eccp_settings_error_notice_login_form_border_color_text_field'] ) ? $custom_back_office_settings['eccp_settings_error_notice_login_form_border_color_text_field'] : '';
    ?>
        <input class="color-field" type="text" name="eccp_settings_custom_back_office[eccp_settings_error_notice_login_form_border_color_text_field]" data-default-color = "<?php echo esc_attr( '#F23C3C' ); ?>" value="<?php echo esc_attr( $value ); ?>">
    <?php
	     
}

//Affiche le paramètre de champ texte pour renseigner la couleur de texte de la notice d'erreur
function eccp_settings_error_notice_login_form_text_color_text_field_markup( $args ){
	
    $custom_back_office_settings = get_option( 'eccp_settings_custom_back_office' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $custom_back_office_settings['eccp_settings_error_notice_login_form_text_color_text_field'] ) ? $custom_back_office_settings['eccp_settings_error_notice_login_form_text_color_text_field'] : '';
    ?>
        <input class="color-field" type="text" name="eccp_settings_custom_back_office[eccp_settings_error_notice_login_form_text_color_text_field]" data-default-color = "<?php echo esc_attr( '#333333' ); ?>" value="<?php echo esc_attr( $value ); ?>">
    <?php

		echo '<h3 id="sub-title-login-page-six"><u>'. esc_html__( 'Custom background image','editor-custom-color-palette' ).'</u></h3>';
}


// Affiche le paramètre de champ radio pour activer une image de fond
function eccp_settings_activate_image_background_login_page_radio_field_markup( $args ){
	
    $custom_back_office_settings = get_option( 'eccp_settings_custom_back_office' );
    $checked = ! empty( $custom_back_office_settings['eccp_settings_activate_image_background_login_page_radio_field'] ) ? $custom_back_office_settings['eccp_settings_activate_image_background_login_page_radio_field'] : 'no';
	?>
        <fieldset>
            <legend class="screen-reader-text"><?php esc_html_e( 'no', 'editor-custom-color-palette' ); ?></legend>
                <label for="settings_eccp_radio_option_1">
                    <input id="settings_eccp_radio_option_1" type="radio" name="eccp_settings_custom_back_office[eccp_settings_activate_image_background_login_page_radio_field]" value="no" <?php checked( $checked, 'no' ); ?>>
                    <?php esc_html_e( 'no', 'editor-custom-color-palette' ); ?>  <!--  label , text domain  -->
                </label>
                <br>
                <label for="settings_eccp_radio_option_2">
                    <input id="settings_eccp_radio_option_2" type="radio" name="eccp_settings_custom_back_office[eccp_settings_activate_image_background_login_page_radio_field]" value="yes" <?php checked( $checked, 'yes' ); ?>>
                    <?php esc_html_e( 'yes', 'editor-custom-color-palette' ); ?>
                </label>
        </fieldset>
		
    <?php
	

	
}



// Affiche notre champ de réglage pour renseigner l'URL de l'image de fond
function eccp_settings_custom_image_background_url_text_field_markup( $args ){
	
	$custom_back_office_settings = get_option( 'eccp_settings_custom_back_office' );// le nom du réglage passé a la fonction register_setting()
	$value   = ! empty( $custom_back_office_settings['eccp_settings_custom_image_background_url_text_field'] ) ? $custom_back_office_settings['eccp_settings_custom_image_background_url_text_field'] : esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/custom-gutenberg-block/eccp-mystery-gravatar.jpg';


	?>
		<label for="upload_image_two">
			
			
			<!-- si une URL pour une image personnalisé est enregistré 
			    dans la table option alors on affiche l'image correspondante 
			    sinon on affiche le logo par défaut: l'homme mystère 
			    a la sélection de l'image le script eccp-upload-media.js 
				affiche l'image choisie !-->
			<img id="upload_image_src_two" src=<?php echo ( esc_url( $value ) ); ?> height="auto" width="100" />
			
			
			<!-- Champ texte pour l'URL de l'image sélectionnée !-->
			<input id="upload_image_two" style="width:160px;" class="regular-text" type="url" name="eccp_settings_custom_back_office[eccp_settings_custom_image_background_url_text_field]" value="<?php echo ( esc_url( $value ) ); ?>">
			<!-- Bouton géréer par javascript pour appeler la boite de téléchargement d'image  !-->
			<input id="upload_image_button_two" class="button" type="button" value="<?php echo esc_html__( 'Upload image','editor-custom-color-palette' ); ?>" />
			<br />
			<?php echo esc_html__( 'Enter a URL or upload an image','editor-custom-color-palette' );?>
			
			
		</label>
		
	<?php
	
	
} 

// Affiche le paramètre de champ  checkbox pour activer image de fond fixe
function eccp_settings_enable_login_page_fixed_background_image_checkbox_field_markup( $args ){
    
	$custom_back_office_settings = get_option( 'eccp_settings_custom_back_office' );
	$checked = (bool) $custom_back_office_settings['eccp_settings_enable_login_page_fixed_background_image_checkbox_field'] ?: false;
    
	?>
	
        <input id="<?php echo esc_attr( $args['label_for'] ); ?>" type="checkbox" name="eccp_settings_custom_back_office[eccp_settings_enable_login_page_fixed_background_image_checkbox_field]" <?php checked( $checked ); ?> >
        <span><?php echo esc_html( $args['description'] ); ?></span>
		
    <?php
	
	echo '<h3 id="sub-title-login-page-seven"><u>'. esc_html__( 'Redirect after login','editor-custom-color-palette' ).'</u></h3>';
	 
	echo '<div style="width:50%;" class="mise-en-avant">';
		echo '<strong>';
		echo esc_html__( 'Redirect administrators after connection to the dashboard and other users to the home page.','editor-custom-color-palette' );
		echo '</strong>';
	echo '</div>';
	
}

// Affiche le paramètre de champ  checkbox pour activer la redirection aprés connexion
function eccp_settings_enable_redirect_after_login_checkbox_field_markup( $args ){
    
	$custom_back_office_settings = get_option( 'eccp_settings_custom_back_office' );
	$checked = (bool) $custom_back_office_settings['eccp_settings_enable_redirect_after_login_checkbox_field'] ?: false;
    
	?>
	
        <input id="<?php echo esc_attr( $args['label_for'] ); ?>" type="checkbox" name="eccp_settings_custom_back_office[eccp_settings_enable_redirect_after_login_checkbox_field]" <?php checked( $checked ); ?> >
        <span><?php echo esc_html( $args['description'] ); ?></span>
		
    <?php
	
	echo '<h2 style="margin-top: 55px;" id="section_default_wordpress_email">'. esc_html__( 'Default WordPress EMAIL','editor-custom-color-palette' ).'</h2>';
	 
	echo '<h3 id="sub-title-default-wordpress-email-one"><u>'. esc_html__( 'Changing the Sender Name and Email Address WordPress Default','editor-custom-color-palette' ).'</u></h3>';
	 
	echo '<div style="width:50%;" class="mise-en-avant">';
		echo '<strong>';
		echo esc_html__( 'Typically WordPress sends all emails using "WordPress" as sender name and "wordpress@domainname.fr" as sender address which is totally fine for admin notifications but not for any kind of emails to you users.','editor-custom-color-palette' );
		echo'<br><br>';
		echo esc_html__( 'In addition, changing the default Wordpress email address will prevent spam filters from blocking your WordPress emails considering them as unwanted.','editor-custom-color-palette' );
		echo'<br>';
		echo '</strong>';
	echo '</div>';
	
}

 
/* --------------- AFFICHE LES CHAMPS POUR LES EMAILS PAR DÉFAUT DE WORDPRESS ---------------------*/ 
 
 
// Affiche le paramètre de champ chexbox pour activer la Modification du nom de l'expéditeur et de l'adresse e-mail WordPress Par défaut
function eccp_settings_enable_change_email_sender_default_checkbox_field_markup( $args ){
    
	$custom_back_office_settings = get_option( 'eccp_settings_custom_back_office' );
	$checked = (bool) $custom_back_office_settings['eccp_settings_enable_change_email_sender_default_checkbox_field'] ?: false;
    
	?>
	
        <input id="<?php echo esc_attr( $args['label_for'] ); ?>" type="checkbox" name="eccp_settings_custom_back_office[eccp_settings_enable_change_email_sender_default_checkbox_field]" <?php checked( $checked ); ?> >
        <span><?php echo esc_html( $args['description'] ); ?></span>
		
    <?php

} 


// Affiche le paramètre de champ texte pour Renseigner l'adresse de l'expéditeur de l'EMAIL
function eccp_settings_email_sender_address_text_field_markup( $args ){
	
	$custom_back_office_settings = get_option( 'eccp_settings_custom_back_office' );// le nom du réglage passé a la fonction register_setting()
	$value   = ! empty( $custom_back_office_settings['eccp_settings_email_sender_address_text_field'] ) ?  $custom_back_office_settings['eccp_settings_email_sender_address_text_field'] : '';
	?>

		<!--- on utilise une expression singulière pour vérifier la saisie de l'adresse E-mail --->
		<input style="width:250px;" class="regular-text" type="email" pattern="[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}" name="eccp_settings_custom_back_office[eccp_settings_email_sender_address_text_field]" value="<?php echo ( esc_attr( $value ) ); ?>">
			
	<?php
	
} 


// Affiche le paramètre de champ texte pour Renseigner le Nom de l'expéditeur
function eccp_settings_email_sender_name_text_field_markup( $args ){
	
	$custom_back_office_settings = get_option( 'eccp_settings_custom_back_office' );// le nom du réglage passé a la fonction register_setting()
	$value   = ! empty( $custom_back_office_settings['eccp_settings_email_sender_name_text_field'] ) ?  $custom_back_office_settings['eccp_settings_email_sender_name_text_field'] : '';
	?>

		
		<input style="width:250px;" class="regular-text" type="text" name="eccp_settings_custom_back_office[eccp_settings_email_sender_name_text_field]" value="<?php echo ( esc_attr( $value ) ); ?>">
			
	<?php
	
	
	echo '<h3 id="sub-title-default-wordpress-email-two"><u>'. esc_html__( 'Prevent WordPress notification emails from being considered spam','editor-custom-color-palette' ).'</u></h3>';
	 
	echo '<div style="width:50%;" class="mise-en-avant">';
		echo '<strong>';
		echo esc_html__( 'Once this option is enabled, all outgoing emails from WordPress will use the «Return-Path» corresponding to the «From» address, which can help improve email deliverability and prevent them from being considered spam.','editor-custom-color-palette' );
		echo'<br>';
		echo '</strong>';
	echo '</div>';
	
	
} 


// Affiche le paramètre de champ chexbox pour activer «l'adresse de retour» correspond à l'adresse «De»
function eccp_settings_enable_return_adress_correspond_from_adress_checkbox_field_markup( $args ){
    
	$custom_back_office_settings = get_option( 'eccp_settings_custom_back_office' );
	$checked = (bool) $custom_back_office_settings['eccp_settings_enable_return_adress_correspond_from_adress_checkbox_field'] ?: false;
    
	?>
	
        <input id="<?php echo esc_attr( $args['label_for'] ); ?>" type="checkbox" name="eccp_settings_custom_back_office[eccp_settings_enable_return_adress_correspond_from_adress_checkbox_field]" <?php checked( $checked ); ?> >
        <span><?php echo esc_html( $args['description'] ); ?></span>
		
    <?php
	
	
	echo '<h2 style="margin-top: 55px;" id="section_other_admin_customization">'. esc_html__( 'Other WordPress admin customization','editor-custom-color-palette' ).'</h2>';
	 
	echo '<h3 id="sub-title-other-admin-customization-one"><u>'. esc_html__( 'Disable default WordPress sitemap','editor-custom-color-palette' ).'</u></h3>';
	
	echo '<div style="width:40%;" class="mise-en-avant">';
		echo '<strong>';
		echo esc_html__( 'The default sitemap feature allows WordPress to automatically publish XML sitemaps for your website.','editor-custom-color-palette' );
		echo'<br>';
		echo esc_html__( 'You may have installed a WordPress SEO plugin, such as Yoast SEO.','editor-custom-color-palette' );
		echo'<br>';
		echo esc_html__( 'You then generate a duplicate sitemap for the same website which can confuse search engines and lower your SEO ranking.','editor-custom-color-palette' );
		echo'<br>';
		echo '</strong>';
	echo '</div>';

} 

/* --------------- AFFICHE LES CHAMPS POUR LES AUTRES PERSONNALISATION DE L'ADMIN WORDPRESS ---------------------*/

// Affiche le paramètre de champ chexbox pour désactiver le sitemap de WordPress par défaut
function eccp_settings_disable_default_wordpress_sitemap_checkbox_field_markup( $args ){
    
	$custom_back_office_settings = get_option( 'eccp_settings_custom_back_office' );
	$checked = (bool) $custom_back_office_settings['eccp_settings_disable_default_wordpress_sitemap_checkbox_field'] ?: false;
    
	?>
	
        <input id="<?php echo esc_attr( $args['label_for'] ); ?>" type="checkbox" name="eccp_settings_custom_back_office[eccp_settings_disable_default_wordpress_sitemap_checkbox_field]" <?php checked( $checked ); ?> >
        <span><?php echo esc_html( $args['description'] ); ?></span>
		
    <?php

	echo '<h3 id="sub-title-other-admin-customization-two"><u>'. esc_html__( 'Activate a menu item for login/logout to the WordPress admin','editor-custom-color-palette' ).'</u></h3>';
	
	echo '<div style="width:40%;" class="mise-en-avant">';
		echo '<strong>';
		echo esc_html__( '• For a local or online site, add to your navigation menu a login/logout link to the WordPress admin in the form of a Dashicon Users icon.','editor-custom-color-palette' );
		echo'<br><br>';
		echo esc_html__( '• For an online site, enter the slug of the connection url, by default wp-admin or admin.','editor-custom-color-palette' );
		echo'<br>';
		echo '</strong>';
	echo '</div>';

} 
 
//Affiche le paramètre de champ chexbox pour activer un lien de connexion/déconnexion a l'admin de WordPress pour un site en local
function eccp_settings_activate_local_site_admin_login_loginout_link_checkbox_field_markup( $args ){
    
	$custom_back_office_settings = get_option( 'eccp_settings_custom_back_office' );
	$checked = (bool) $custom_back_office_settings['eccp_settings_activate_local_site_admin_login_loginout_link_checkbox_field'] ?: false;
    
	?>
	
        <input id="<?php echo esc_attr( $args['label_for'] ); ?>" type="checkbox" name="eccp_settings_custom_back_office[eccp_settings_activate_local_site_admin_login_loginout_link_checkbox_field]" <?php checked( $checked ); ?> >
        <span><?php echo esc_html( $args['description'] ); ?></span>
		
    <?php

	echo'<br><br><br><br><br>';

} 

//Affiche le paramètre de champ chexbox pour activer un lien de connexion/déconnexion a l'admin de WordPress pour un site en ligne
function eccp_settings_activate_online_site_admin_login_loginout_link_checkbox_field_markup( $args ){
    
	$custom_back_office_settings = get_option( 'eccp_settings_custom_back_office' );
	$checked = (bool) $custom_back_office_settings['eccp_settings_activate_online_site_admin_login_loginout_link_checkbox_field'] ?: false;
    
	?>
	
        <input id="<?php echo esc_attr( $args['label_for'] ); ?>" type="checkbox" name="eccp_settings_custom_back_office[eccp_settings_activate_online_site_admin_login_loginout_link_checkbox_field]" <?php checked( $checked ); ?> >
        <span><?php echo esc_html( $args['description'] ); ?></span>
		
    <?php

}
 
 
// Affiche le paramètre de champ texte pour renseigner le slug de l'URL de connexion a l'admin de WordPress
function eccp_settings_slug_admin_login_url_text_field_markup( $args ){
	
	$custom_back_office_settings = get_option( 'eccp_settings_custom_back_office' );// le nom du réglage passé a la fonction register_setting()
	$value   = ! empty( $custom_back_office_settings['eccp_settings_slug_admin_login_url_text_field'] ) ?  $custom_back_office_settings['eccp_settings_slug_admin_login_url_text_field'] : '';
	?>

		<!-- Champ texte pour le slug de l'url de connexion !-->
		<!-- On utilise une regex ou expression singulière pour contrôler que le texte entré est bien un slug !-->
		<input style="width:160px;" class="regular-text" type="texte" pattern="^[a-z0-9]+(?:(?:-|_)+[a-z0-9]+)*$" name="eccp_settings_custom_back_office[eccp_settings_slug_admin_login_url_text_field]" value="<?php echo ( esc_attr( $value ) ); ?>">
			
	<?php
	
} 



/* -------------------------------------- AFFICHAGE DES CHAMPS POUR LA 11ème SECTION CUSTOM FRONT END -----------------------------------------*/

/* -------------------------------------- AFFICHAGE DES CHAMPS POUR LE BOUTON RETOUR VERS LE HAUT -----------------------------------------*/

//Affiche le paramètre de champ chexbox pour activer le bouton retour vers le haut
function eccp_settings_enable_back_to_top_button_checkbox_field_markup( $args ){
    
	$custom_front_end_settings = get_option( 'eccp_settings_custom_front_end' );
	$checked = (bool) $custom_front_end_settings['eccp_settings_enable_back_to_top_button_checkbox_field'] ?: false;
    
	?>
	
        <input id="<?php echo esc_attr( $args['label_for'] ); ?>" type="checkbox" name="eccp_settings_custom_front_end[eccp_settings_enable_back_to_top_button_checkbox_field]" <?php checked( $checked ); ?> >
        <span><?php echo esc_html( $args['description'] ); ?></span>
		
    <?php

}

//Affiche le paramètre de champ texte pour Renseigner la marge droite
function eccp_settings_margin_x_text_field_markup( $args ){
	
	$custom_front_end_settings = get_option( 'eccp_settings_custom_front_end' );// le nom du réglage passé a la fonction register_setting()
	// on met une valeur de 0 par défaut car l'enregistrement de la valeur 0 en base de données donne un champ vide!
	$value   = ! empty( $custom_front_end_settings ['eccp_settings_margin_x_text_field'] ) ? $custom_front_end_settings['eccp_settings_margin_x_text_field'] : 0;
	?>
		<input style="width:60px;" size="3" min="0" max="100" class="regular-text" type="number" name="eccp_settings_custom_front_end[eccp_settings_margin_x_text_field]" value="<?php echo ( esc_attr( $value ) ); ?>">
	<?php
	
}

//Affiche le paramètre de champ texte pour Renseigner la marge verticale
function eccp_settings_margin_y_text_field_markup( $args ){
	
	$custom_front_end_settings = get_option( 'eccp_settings_custom_front_end' );// le nom du réglage passé a la fonction register_setting()
	// on met une valeur de 0 par défaut car l'enregistrement de la valeur 0 en base de données donne un champ vide!
	$value   = ! empty( $custom_front_end_settings ['eccp_settings_margin_y_text_field'] ) ? $custom_front_end_settings['eccp_settings_margin_y_text_field'] : 0;
	?>
		<input style="width:60px;" size="3" min="0" max="100" class="regular-text" type="number" name="eccp_settings_custom_front_end[eccp_settings_margin_y_text_field]" value="<?php echo ( esc_attr( $value ) ); ?>">
	<?php
	
}

//Affiche le paramètre de champ texte pour Renseigner l'opacité du bouton retour en haut
function eccp_settings_back_top_button_opacity_text_field_markup( $args ){
	
	$custom_front_end_settings = get_option( 'eccp_settings_custom_front_end' );// le nom du réglage passé a la fonction register_setting()
	// on met une valeur de 0 par défaut car l'enregistrement de la valeur 0 en base de données donne un champ vide!
	$value   = ! empty( $custom_front_end_settings ['eccp_settings_back_top_button_opacity_text_field'] ) ? $custom_front_end_settings['eccp_settings_back_top_button_opacity_text_field'] : 0;
	?>
		<input style="width:60px;" size="3" min="0" max="100" class="regular-text" type="number" name="eccp_settings_custom_front_end[eccp_settings_back_top_button_opacity_text_field]" value="<?php echo ( esc_attr( $value ) ); ?>">
	<?php
	
}

//Affiche le paramètre de champ texte pour Renseigner l'opacité du bouton retour en haut au survol
function eccp_settings_back_top_button_opacity_on_hover_text_field_markup( $args ){
	
	$custom_front_end_settings = get_option( 'eccp_settings_custom_front_end' );// le nom du réglage passé a la fonction register_setting()
	// on met une valeur de 0 par défaut car l'enregistrement de la valeur 0 en base de données donne un champ vide!
	$value   = ! empty( $custom_front_end_settings ['eccp_settings_back_top_button_opacity_on_hover_text_field'] ) ? $custom_front_end_settings['eccp_settings_back_top_button_opacity_on_hover_text_field'] : 0;
	?>
		<input style="width:60px;" size="3" min="0" max="100" class="regular-text" type="number" name="eccp_settings_custom_front_end[eccp_settings_back_top_button_opacity_on_hover_text_field]" value="<?php echo ( esc_attr( $value ) ); ?>">
	<?php
	
}

//Affiche le paramètre de champ texte pour Renseigner la couleur du bouton retour en haut
function eccp_settings_back_top_button_color_text_field_markup( $args ){
	
    $custom_front_end_settings = get_option( 'eccp_settings_custom_front_end' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $custom_front_end_settings['eccp_settings_back_top_button_color_text_field'] ) ? $custom_front_end_settings['eccp_settings_back_top_button_color_text_field'] : '';
    ?>
        <input class="color-field" type="text" name="eccp_settings_custom_front_end[eccp_settings_back_top_button_color_text_field]" data-default-color = "<?php echo esc_attr( '#2271B1' ); ?>" value="<?php echo esc_attr( $value ); ?>">
    <?php

}

//Affiche le paramètre de champ texte pour Renseigner la couleur de l'icône pour le bouton retour en haut
function eccp_settings_color_icon_back_to_top_button_text_field_markup( $args ){
	
    $custom_front_end_settings = get_option( 'eccp_settings_custom_front_end' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $custom_front_end_settings['eccp_settings_color_icon_back_to_top_button_text_field'] ) ? $custom_front_end_settings['eccp_settings_color_icon_back_to_top_button_text_field'] : '';
    ?>
        <input class="color-field" type="text" name="eccp_settings_custom_front_end[eccp_settings_color_icon_back_to_top_button_text_field]" data-default-color = "<?php echo esc_attr( '#FFFFFF' ); ?>" value="<?php echo esc_attr( $value ); ?>">
    <?php

}

//Affiche le paramètre de champ texte pour Renseigner le rayon de bordure pour le bouton retour en haut
function eccp_settings_back_to_top_button_border_radius_text_field_markup( $args ){
	
	$custom_front_end_settings = get_option( 'eccp_settings_custom_front_end' );// le nom du réglage passé a la fonction register_setting()
	// on met une valeur de 0 par défaut car l'enregistrement de la valeur 0 en base de données donne un champ vide!
	$value   = ! empty( $custom_front_end_settings ['eccp_settings_back_to_top_button_border_radius_text_field'] ) ? $custom_front_end_settings['eccp_settings_back_to_top_button_border_radius_text_field'] : 0;
	?>
		<input style="width:50px;" size="2" min="0" max="50" class="regular-text" type="number" name="eccp_settings_custom_front_end[eccp_settings_back_to_top_button_border_radius_text_field]" value="<?php echo ( esc_attr( $value ) ); ?>">
	<?php
	
	echo '<h2 style="margin-top: 55px;" id="section_publication_front_end">'. esc_html__( 'Publications','editor-custom-color-palette' ).'</h2>';
	
	echo '<h3 id="sub-title-publication-front-end-one"><u>'. esc_html__( 'Author Info Box','editor-custom-color-palette' ).'</u></h3>';
	
	
	echo '<div style="width70%;" class="mise-en-avant">';
		echo esc_html__( 'To display the author info box you must:','editor-custom-color-palette' );
		echo '<br>';
		echo esc_html__( '• Activate the author information box option','editor-custom-color-palette' );
		echo '<br>';
		echo esc_html__( '• Fill in the biographical description for the account profile','editor-custom-color-palette' );
	echo '</div>';
	
	echo'<img  src="'.esc_url(EDITOR_CUSTOM_COLOR_PALETTE_URL).'img/custom-front-end/author-box-info.jpg">';
	
}


/* -------------- AFFICHAGE DES CHAMPS POUR LES PUBLICATIONS -----------------*/

//Affiche le paramètre de champ chexbox pour activer Boite d'informations auteur
function eccp_settings_enable_author_info_box_checkbox_field_markup( $args ){
    
	$custom_front_end_settings = get_option( 'eccp_settings_custom_front_end' );
	$checked = (bool) $custom_front_end_settings['eccp_settings_enable_author_info_box_checkbox_field'] ?: false;
    
	?>
	
        <input id="<?php echo esc_attr( $args['label_for'] ); ?>" type="checkbox" name="eccp_settings_custom_front_end[eccp_settings_enable_author_info_box_checkbox_field]" <?php checked( $checked ); ?> >
        <span><?php echo esc_html( $args['description'] ); ?></span>
		
    <?php

}

//Affiche le paramètre de champ texte pour Renseigner le rayon de bordure pour l'avatar
function eccp_settings_border_radius_avatar_author_info_box_text_field_markup( $args ){
	
	$custom_front_end_settings = get_option( 'eccp_settings_custom_front_end' );// le nom du réglage passé a la fonction register_setting()
	// on met une valeur de 0 par défaut car l'enregistrement de la valeur 0 en base de données donne un champ vide!
	$value   = ! empty( $custom_front_end_settings['eccp_settings_border_radius_avatar_author_info_box_text_field'] ) ? $custom_front_end_settings['eccp_settings_border_radius_avatar_author_info_box_text_field'] : 0;
	?>
		<input style="width:50px;" size="2" min="0" max="50" class="regular-text" type="number" name="eccp_settings_custom_front_end[eccp_settings_border_radius_avatar_author_info_box_text_field]" value="<?php echo ( esc_attr( $value ) ); ?>">
	<?php
	
}

//Affiche le paramètre de champ texte pour Renseigner la couleur du titre pour la boite d'info auteur
function eccp_settings_title_author_info_box_text_field_markup( $args ){
	
    $custom_front_end_settings = get_option( 'eccp_settings_custom_front_end' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $custom_front_end_settings['eccp_settings_title_author_info_box_text_field'] ) ? $custom_front_end_settings['eccp_settings_title_author_info_box_text_field'] : '';
    ?>
        <input class="color-field" type="text" name="eccp_settings_custom_front_end[eccp_settings_title_author_info_box_text_field]" data-default-color = "<?php echo esc_attr( '#222222' ); ?>" value="<?php echo esc_attr( $value ); ?>">
    <?php

}

//Affiche le paramètre de champ texte pour Renseigner la couleur du texte pour la boite d'info auteur
function eccp_settings_text_author_info_box_text_field_markup( $args ){
	
    $custom_front_end_settings = get_option( 'eccp_settings_custom_front_end' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $custom_front_end_settings['eccp_settings_text_author_info_box_text_field'] ) ? $custom_front_end_settings['eccp_settings_text_author_info_box_text_field'] : '';
    ?>
        <input class="color-field" type="text" name="eccp_settings_custom_front_end[eccp_settings_text_author_info_box_text_field]" data-default-color = "<?php echo esc_attr( '#666666' ); ?>" value="<?php echo esc_attr( $value ); ?>">
    <?php

}

//Affiche le paramètre de champ texte pour Renseigner la couleur des liens pour la boite d'info auteur
function eccp_settings_link_author_info_box_text_field_markup( $args ){
	
    $custom_front_end_settings = get_option( 'eccp_settings_custom_front_end' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $custom_front_end_settings['eccp_settings_link_author_info_box_text_field'] ) ? $custom_front_end_settings['eccp_settings_link_author_info_box_text_field'] : '';
    ?>
        <input class="color-field" type="text" name="eccp_settings_custom_front_end[eccp_settings_link_author_info_box_text_field]" data-default-color = "<?php echo esc_attr( '#0E6487' ); ?>" value="<?php echo esc_attr( $value ); ?>">
    <?php

}

//Affiche le paramètre de champ texte pour Renseigner la couleur d'arrière plan pour la boite d'info auteur
function eccp_settings_background_author_info_box_text_field_markup( $args ){
	
    $custom_front_end_settings = get_option( 'eccp_settings_custom_front_end' );// le nom du réglage passé a la fonction register_setting()
    $value   = ! empty( $custom_front_end_settings['eccp_settings_background_author_info_box_text_field'] ) ? $custom_front_end_settings['eccp_settings_background_author_info_box_text_field'] : '';
    ?>
        <input class="color-field" type="text" name="eccp_settings_custom_front_end[eccp_settings_background_author_info_box_text_field]" data-default-color = "<?php echo esc_attr( '#F5F5F5' ); ?>" value="<?php echo esc_attr( $value ); ?>">
    <?php

	echo '<h3 id="sub-title-publication-front-end-two"><u>'. esc_html__( 'Comment form','editor-custom-color-palette' ).'</u></h3>';
	
}

/* -------------- FORMULAIRE DE COMMENTAIRE -----------------*/

// Affiche le paramètre de champ chexbox pour la Supression du champ: Site WEB
function eccp_settings_delete_comment_form_field_url_checkbox_field_markup( $args ){
    
	$custom_front_end_settings = get_option( 'eccp_settings_custom_front_end' );
	$checked = (bool) $custom_front_end_settings['eccp_settings_delete_comment_form_field_url_checkbox_field'] ?: false;
    
	?>
	
        <input id="<?php echo esc_attr( $args['label_for'] ); ?>" type="checkbox" name="eccp_settings_custom_front_end[eccp_settings_delete_comment_form_field_url_checkbox_field]" <?php checked( $checked ); ?> >
        <span><?php echo esc_html( $args['description'] ); ?></span>
		
    <?php

}

//Affiche le paramètre de champ chexbox pour Déplacer la zone commentaire en bas du formulaire
function eccp_settings_move_comment_field_from_comment_form_checkbox_field_markup( $args ){
    
	$custom_front_end_settings = get_option( 'eccp_settings_custom_front_end' );
	$checked = (bool) $custom_front_end_settings['eccp_settings_move_comment_field_from_comment_form_checkbox_field'] ?: false;
    
	?>
	
        <input id="<?php echo esc_attr( $args['label_for'] ); ?>" type="checkbox" name="eccp_settings_custom_front_end[eccp_settings_move_comment_field_from_comment_form_checkbox_field]" <?php checked( $checked ); ?> >
        <span><?php echo esc_html( $args['description'] ); ?></span>
		
    <?php
	
	
	echo '<div style="width:40%;margin-top:30px;" class="mise-en-avant">';
	echo esc_html__( 'You can customize the texts below in the language of your choice.Leave the field blank to not display a message.','editor-custom-color-palette' ); 
	echo '<br><br>';
	echo esc_html__( 'You can use these HTML tags and attributes:','editor-custom-color-palette' ); 
	echo '<br>';
	echo esc_html__( '<a href=""> <br> <strong> etc...','editor-custom-color-palette' ); 
	echo '</div>';
	
}

//Affiche le paramètre de champ textarea pour Afficher un texte personnalisé avant le formulaire
function eccp_settings_message_before_comment_form_textarea_field_markup( $args ){
	
    $custom_front_end_settings = get_option( 'eccp_settings_custom_front_end' );
    $value = ! empty( $custom_front_end_settings['eccp_settings_message_before_comment_form_textarea_field'] ) ?  esc_html__( $custom_front_end_settings['eccp_settings_message_before_comment_form_textarea_field'],'editor-custom-color-palette' )  : '';
	
    ?>
        <textarea class="regular-text" rows=3 name="eccp_settings_custom_front_end[eccp_settings_message_before_comment_form_textarea_field]"><?php echo htmlspecialchars_decode( esc_textarea( $value ) ); ?></textarea>
    <?php
	
}

//Affiche le paramètre de champ textarea pour Afficher un texte personnalisé aprés le formulaire
function eccp_settings_message_after_comment_form_textarea_field_markup( $args ){
	
    $custom_front_end_settings = get_option( 'eccp_settings_custom_front_end' );
    $value = ! empty( $custom_front_end_settings['eccp_settings_message_after_comment_form_textarea_field'] ) ?  esc_html__( $custom_front_end_settings['eccp_settings_message_after_comment_form_textarea_field'],'editor-custom-color-palette' )  : '';
	
    ?>
        <textarea class="regular-text" rows=3 name="eccp_settings_custom_front_end[eccp_settings_message_after_comment_form_textarea_field]"><?php echo htmlspecialchars_decode( esc_textarea( $value ) ); ?></textarea>
    <?php
	
}


// Affiche le paramètre de champ chexbox pour centrer le bouton de soumission
function eccp_settings_center_comment_form_submit_button_checkbox_field_markup( $args ){
    
	$custom_front_end_settings = get_option( 'eccp_settings_custom_front_end' );
	$checked = (bool) $custom_front_end_settings['eccp_settings_center_comment_form_submit_button_checkbox_field'] ?: false;
    
	?>
	
        <input id="<?php echo esc_attr( $args['label_for'] ); ?>" type="checkbox" name="eccp_settings_custom_front_end[eccp_settings_center_comment_form_submit_button_checkbox_field]" <?php checked( $checked ); ?> >
        <span><?php echo esc_html( $args['description'] ); ?></span>
		
    <?php
	
	echo '<h3 id="sub-title-publication-front-end-three"><u>'. esc_html__( 'Lightbox','editor-custom-color-palette' ).'</u></h3>';
	
	
	echo '<div style="width:60%;" class="mise-en-avant">';
		echo esc_html__( 'ECCP plugin uses Fancybox popup to lightbox WordPress images & galleries.','editor-custom-color-palette' );
		echo '<br>';
		echo esc_html__( '• Be sure to link the image directly to the media and not to the attachment page.','editor-custom-color-palette' );
		echo '<br>';
		echo esc_html__( '• For galleries, the option links to = media files must be activated.','editor-custom-color-palette' );
		echo '<br><br>';
		echo esc_html__( 'Theme OceanWP:','editor-custom-color-palette' );
		echo '<br>';
		echo esc_html__( 'please disable theme default lightbox:','editor-custom-color-palette' );
		echo '<br>';
		echo esc_html__( 'Appearance/customize/General Options/performance/LightBox','editor-custom-color-palette' );
		echo '<br>';
	echo '</div>';

}



//Affiche le paramètre de champ chexbox pour activer la Lightbox
function eccp_settings_enable_lightbox_checkbox_field_markup( $args ){
    
	$custom_front_end_settings = get_option( 'eccp_settings_custom_front_end' );
	$checked = (bool) $custom_front_end_settings['eccp_settings_enable_lightbox_checkbox_field'] ?: false;
    
	?>
	
        <input id="<?php echo esc_attr( $args['label_for'] ); ?>" type="checkbox" name="eccp_settings_custom_front_end[eccp_settings_enable_lightbox_checkbox_field]" <?php checked( $checked ); ?> >
        <span><?php echo esc_html( $args['description'] ); ?></span>
		
    <?php

}


/* ----------------- NETTOYAGE DES VALEURS DES CHAMPS AVANT ENTRÉE EN BASE DE DONNÉES ----------------------*/



 /* Fonction de nettoyage pour nos valeurs de réglages avant l'entrée en base de données
 $settings Un tableau de paramètres, 
 avec en index l'ID des champs de réglage déclaré avec la fonction: add_settings_field() )
 */
function eccp_default_settings_sanitize( $default_settings ){
	
	/*-------------------------------------Sanitize 1ère SECTION  Paramètres par défaut -------------------------------------*/
	
	// Sanitize radio Default settings
	// sanitize_key:  Nettoie une clé de chaîne.
    $default_settings['eccp_default_setting_radio_field'] = sanitize_key( $default_settings['eccp_default_setting_radio_field'] ) ;
	
	// Sanitize radio delete data uninstallation
    $default_settings['eccp_delete_data_uninstallation_radio_field'] = sanitize_key( $default_settings['eccp_delete_data_uninstallation_radio_field'] ) ;
	
	
	return $default_settings;
	
}

/* Fonction de nettoyage pour nos valeurs de réglages avant l'entrée en base de données
 $settings Un tableau de paramètres, 
 avec en index l'ID des champs de réglage déclaré avec la fonction: add_settings_field() )
 */
function eccp_multiple_settings_sanitize( $settings ){
	
	/*----------------------------------- Sanitize 3ème SECTION EDITOR COLOR PALETTE -------------------------------------*/
		
	// Sanitize Checkbox activate customizing color palette
    $settings['eccp_settings_activate_customizing_color_palette_checkbox_field'] = isset( $settings['eccp_settings_activate_customizing_color_palette_checkbox_field'] ) ;
	
	// Sanitize Select number colors
    $settings['eccp_settings_number_colors_select_field']   = ! empty( $settings['eccp_settings_number_colors_select_field'] ) ? sanitize_key( $settings['eccp_settings_number_colors_select_field'] ) : '' ;
	
	
	/* -------------- COLOR 1 -------------------------------*/
	// Sanitize text color one
    $settings['eccp_settings_color_one_text_field']     = ! empty( $settings['eccp_settings_color_one_text_field'] ) ? sanitize_text_field( $settings['eccp_settings_color_one_text_field'] ) : '';
	
	// Sanitize text opacity color one
    $settings['eccp_settings_opacity_color_one_text_field']     = ! empty( $settings['eccp_settings_opacity_color_one_text_field'] ) ? sanitize_text_field( $settings['eccp_settings_opacity_color_one_text_field'] ) : '';

	// Sanitize text name color one
    $settings['eccp_settings_name_color_one_text_field']     = ! empty( $settings['eccp_settings_name_color_one_text_field'] ) ? sanitize_text_field( $settings['eccp_settings_name_color_one_text_field'] ) : '';
	
	// Sanitize text slug color one
    $settings['eccp_settings_slug_color_one_text_field']     = ! empty( $settings['eccp_settings_slug_color_one_text_field'] ) ? sanitize_text_field( $settings['eccp_settings_slug_color_one_text_field'] ) : '';
	
	/* -------------- COLOR 2 -------------------------------*/
	// Sanitize text color two
    $settings['eccp_settings_color_two_text_field']     = ! empty( $settings['eccp_settings_color_two_text_field'] ) ? sanitize_text_field( $settings['eccp_settings_color_two_text_field'] ) : '';
	
	// Sanitize text opacity color two
    $settings['eccp_settings_opacity_color_two_text_field']     = ! empty( $settings['eccp_settings_opacity_color_two_text_field'] ) ? sanitize_text_field( $settings['eccp_settings_opacity_color_two_text_field'] ) : '';

	// Sanitize text name color two
    $settings['eccp_settings_name_color_two_text_field']     = ! empty( $settings['eccp_settings_name_color_two_text_field'] ) ? sanitize_text_field( $settings['eccp_settings_name_color_two_text_field'] ) : '';
	
	// Sanitize text slug color two
    $settings['eccp_settings_slug_color_two_text_field']     = ! empty( $settings['eccp_settings_slug_color_two_text_field'] ) ? sanitize_text_field( $settings['eccp_settings_slug_color_two_text_field'] ) : '';
	
	/* -------------- COLOR 3 -------------------------------*/
	// Sanitize text color three
    $settings['eccp_settings_color_three_text_field']     = ! empty( $settings['eccp_settings_color_three_text_field'] ) ? sanitize_text_field( $settings['eccp_settings_color_three_text_field'] ) : '';
	
	// Sanitize text opacity color three
    $settings['eccp_settings_opacity_color_three_text_field']     = ! empty( $settings['eccp_settings_opacity_color_three_text_field'] ) ? sanitize_text_field( $settings['eccp_settings_opacity_color_three_text_field'] ) : '';

	// Sanitize text name color three
    $settings['eccp_settings_name_color_three_text_field']     = ! empty( $settings['eccp_settings_name_color_three_text_field'] ) ? sanitize_text_field( $settings['eccp_settings_name_color_three_text_field'] ) : '';
	
	// Sanitize text slug color three
    $settings['eccp_settings_slug_color_three_text_field']     = ! empty( $settings['eccp_settings_slug_color_three_text_field'] ) ? sanitize_text_field( $settings['eccp_settings_slug_color_three_text_field'] ) : '';
	
	/* -------------- COLOR 4 -------------------------------*/
	// Sanitize text color four
    $settings['eccp_settings_color_four_text_field']     = ! empty( $settings['eccp_settings_color_four_text_field'] ) ? sanitize_text_field( $settings['eccp_settings_color_four_text_field'] ) : '';
	
	// Sanitize text opacity color four
    $settings['eccp_settings_opacity_color_four_text_field']     = ! empty( $settings['eccp_settings_opacity_color_four_text_field'] ) ? sanitize_text_field( $settings['eccp_settings_opacity_color_four_text_field'] ) : '';

	// Sanitize text name color four
    $settings['eccp_settings_name_color_four_text_field']     = ! empty( $settings['eccp_settings_name_color_four_text_field'] ) ? sanitize_text_field( $settings['eccp_settings_name_color_four_text_field'] ) : '';
	
	// Sanitize text slug color four
    $settings['eccp_settings_slug_color_four_text_field']     = ! empty( $settings['eccp_settings_slug_color_four_text_field'] ) ? sanitize_text_field( $settings['eccp_settings_slug_color_four_text_field'] ) : '';
	
	/* -------------- COLOR 5 -------------------------------*/
	// Sanitize text color five
    $settings['eccp_settings_color_five_text_field']     = ! empty( $settings['eccp_settings_color_five_text_field'] ) ? sanitize_text_field( $settings['eccp_settings_color_five_text_field'] ) : '';
	
	// Sanitize text opacity color five
    $settings['eccp_settings_opacity_color_five_text_field']     = ! empty( $settings['eccp_settings_opacity_color_five_text_field'] ) ? sanitize_text_field( $settings['eccp_settings_opacity_color_five_text_field'] ) : '';

	// Sanitize text name color five
    $settings['eccp_settings_name_color_five_text_field']     = ! empty( $settings['eccp_settings_name_color_five_text_field'] ) ? sanitize_text_field( $settings['eccp_settings_name_color_five_text_field'] ) : '';
	
	// Sanitize text slug color five
    $settings['eccp_settings_slug_color_five_text_field']     = ! empty( $settings['eccp_settings_slug_color_five_text_field'] ) ? sanitize_text_field( $settings['eccp_settings_slug_color_five_text_field'] ) : '';
	
	/* -------------- COLOR 6 -------------------------------*/
	// Sanitize text color six
    $settings['eccp_settings_color_six_text_field']     = ! empty( $settings['eccp_settings_color_six_text_field'] ) ? sanitize_text_field( $settings['eccp_settings_color_six_text_field'] ) : '';
	
	// Sanitize text opacity color six
    $settings['eccp_settings_opacity_color_six_text_field']     = ! empty( $settings['eccp_settings_opacity_color_six_text_field'] ) ? sanitize_text_field( $settings['eccp_settings_opacity_color_six_text_field'] ) : '';

	// Sanitize text name color six
    $settings['eccp_settings_name_color_six_text_field']     = ! empty( $settings['eccp_settings_name_color_six_text_field'] ) ? sanitize_text_field( $settings['eccp_settings_name_color_six_text_field'] ) : '';
	
	// Sanitize text slug color six
    $settings['eccp_settings_slug_color_six_text_field']     = ! empty( $settings['eccp_settings_slug_color_six_text_field'] ) ? sanitize_text_field( $settings['eccp_settings_slug_color_six_text_field'] ) : '';
	
	/* -------------- COLOR 7 -------------------------------*/
	// Sanitize text color seven
    $settings['eccp_settings_color_seven_text_field']     = ! empty( $settings['eccp_settings_color_seven_text_field'] ) ? sanitize_text_field( $settings['eccp_settings_color_seven_text_field'] ) : '';
	
	// Sanitize text opacity color seven
    $settings['eccp_settings_opacity_color_seven_text_field']     = ! empty( $settings['eccp_settings_opacity_color_seven_text_field'] ) ? sanitize_text_field( $settings['eccp_settings_opacity_color_seven_text_field'] ) : '';

	// Sanitize text name color seven
    $settings['eccp_settings_name_color_seven_text_field']     = ! empty( $settings['eccp_settings_name_color_seven_text_field'] ) ? sanitize_text_field( $settings['eccp_settings_name_color_seven_text_field'] ) : '';
	
	// Sanitize text slug color seven
    $settings['eccp_settings_slug_color_seven_text_field']     = ! empty( $settings['eccp_settings_slug_color_seven_text_field'] ) ? sanitize_text_field( $settings['eccp_settings_slug_color_seven_text_field'] ) : '';
	
	/* -------------- COLOR 8 -------------------------------*/
	// Sanitize text color eight
    $settings['eccp_settings_color_eight_text_field']     = ! empty( $settings['eccp_settings_color_eight_text_field'] ) ? sanitize_text_field( $settings['eccp_settings_color_eight_text_field'] ) : '';
	
	// Sanitize text opacity color eight
    $settings['eccp_settings_opacity_color_eight_text_field']     = ! empty( $settings['eccp_settings_opacity_color_eight_text_field'] ) ? sanitize_text_field( $settings['eccp_settings_opacity_color_eight_text_field'] ) : '';

	// Sanitize text name color eight
    $settings['eccp_settings_name_color_eight_text_field']     = ! empty( $settings['eccp_settings_name_color_eight_text_field'] ) ? sanitize_text_field( $settings['eccp_settings_name_color_eight_text_field'] ) : '';
	
	// Sanitize text slug color eight
    $settings['eccp_settings_slug_color_eight_text_field']     = ! empty( $settings['eccp_settings_slug_color_eight_text_field'] ) ? sanitize_text_field( $settings['eccp_settings_slug_color_eight_text_field'] ) : '';
	
	/* -------------- COLOR 9 -------------------------------*/
	// Sanitize text color nine
    $settings['eccp_settings_color_nine_text_field']     = ! empty( $settings['eccp_settings_color_nine_text_field'] ) ? sanitize_text_field( $settings['eccp_settings_color_nine_text_field'] ) : '';
	
	// Sanitize text opacity color nine
    $settings['eccp_settings_opacity_color_nine_text_field']     = ! empty( $settings['eccp_settings_opacity_color_nine_text_field'] ) ? sanitize_text_field( $settings['eccp_settings_opacity_color_nine_text_field'] ) : '';

	// Sanitize text name color nine
    $settings['eccp_settings_name_color_nine_text_field']     = ! empty( $settings['eccp_settings_name_color_nine_text_field'] ) ? sanitize_text_field( $settings['eccp_settings_name_color_nine_text_field'] ) : '';
	
	// Sanitize text slug color nine
    $settings['eccp_settings_slug_color_nine_text_field']     = ! empty( $settings['eccp_settings_slug_color_nine_text_field'] ) ? sanitize_text_field( $settings['eccp_settings_slug_color_nine_text_field'] ) : '';
	
	/* -------------- COLOR 10 -------------------------------*/
	// Sanitize text color ten
    $settings['eccp_settings_color_ten_text_field']     = ! empty( $settings['eccp_settings_color_ten_text_field'] ) ? sanitize_text_field( $settings['eccp_settings_color_ten_text_field'] ) : '';
	
	// Sanitize text opacity color ten
    $settings['eccp_settings_opacity_color_ten_text_field']     = ! empty( $settings['eccp_settings_opacity_color_ten_text_field'] ) ? sanitize_text_field( $settings['eccp_settings_opacity_color_ten_text_field'] ) : '';

	// Sanitize text name color ten
    $settings['eccp_settings_name_color_ten_text_field']     = ! empty( $settings['eccp_settings_name_color_ten_text_field'] ) ? sanitize_text_field( $settings['eccp_settings_name_color_ten_text_field'] ) : '';
	
	// Sanitize text slug color ten
    $settings['eccp_settings_slug_color_ten_text_field']     = ! empty( $settings['eccp_settings_slug_color_ten_text_field'] ) ? sanitize_text_field( $settings['eccp_settings_slug_color_ten_text_field'] ) : '';
	
	/* -------------- COLOR 11 -------------------------------*/
	// Sanitize text color eleven
    $settings['eccp_settings_color_eleven_text_field']     = ! empty( $settings['eccp_settings_color_eleven_text_field'] ) ? sanitize_text_field( $settings['eccp_settings_color_eleven_text_field'] ) : '';
	
	// Sanitize text opacity color eleven
    $settings['eccp_settings_opacity_color_eleven_text_field']     = ! empty( $settings['eccp_settings_opacity_color_eleven_text_field'] ) ? sanitize_text_field( $settings['eccp_settings_opacity_color_eleven_text_field'] ) : '';

	// Sanitize text name color eleven
    $settings['eccp_settings_name_color_eleven_text_field']     = ! empty( $settings['eccp_settings_name_color_eleven_text_field'] ) ? sanitize_text_field( $settings['eccp_settings_name_color_eleven_text_field'] ) : '';
	
	// Sanitize text slug color eleven
    $settings['eccp_settings_slug_color_eleven_text_field']     = ! empty( $settings['eccp_settings_slug_color_eleven_text_field'] ) ? sanitize_text_field( $settings['eccp_settings_slug_color_eleven_text_field'] ) : '';
	
	/* -------------- COLOR 12 -------------------------------*/
	// Sanitize text color twelve
    $settings['eccp_settings_color_twelve_text_field']     = ! empty( $settings['eccp_settings_color_twelve_text_field'] ) ? sanitize_text_field( $settings['eccp_settings_color_twelve_text_field'] ) : '';
	
	// Sanitize text opacity color twelve
    $settings['eccp_settings_opacity_color_twelve_text_field']     = ! empty( $settings['eccp_settings_opacity_color_twelve_text_field'] ) ? sanitize_text_field( $settings['eccp_settings_opacity_color_twelve_text_field'] ) : '';

	// Sanitize text name color twelve
    $settings['eccp_settings_name_color_twelve_text_field']     = ! empty( $settings['eccp_settings_name_color_twelve_text_field'] ) ? sanitize_text_field( $settings['eccp_settings_name_color_twelve_text_field'] ) : '';
	
	// Sanitize text slug color twelve
    $settings['eccp_settings_slug_color_twelve_text_field']     = ! empty( $settings['eccp_settings_slug_color_twelve_text_field'] ) ? sanitize_text_field( $settings['eccp_settings_slug_color_twelve_text_field'] ) : '';
	
	
	// Sanitize Checkbox disabling custom colors
    $settings['eccp_settings_disabling_custom_colors_checkbox_field'] = isset( $settings['eccp_settings_disabling_custom_colors_checkbox_field'] ) ;
	
	// Sanitize Checkbox disabling custom gradients
    $settings['eccp_settings_disabling_custom_gradients_checkbox_field'] = isset( $settings['eccp_settings_disabling_custom_gradients_checkbox_field'] ) ;
	
	
	return $settings;
	
}


/* Fonction de nettoyage pour nos valeurs de réglages avant l'entrée en base de données
 $editor_text_size_settings Un tableau de paramètres, 
 avec en index l'ID des champs de réglage déclaré avec la fonction: add_settings_field() )
 */
function eccp_editor_text_size_sanitize( $editor_text_size_settings ){
	
	/*------------------------------------ Sanitize 4ème SECTION EDITOR TEXT SIZE -------------------------------------*/
	
	// Sanitize Checkbox activate editor text size
	$editor_text_size_settings['eccp_settings_activate_editor_text_size_checkbox_field'] = isset( $editor_text_size_settings['eccp_settings_activate_editor_text_size_checkbox_field'] ) ;
	
	// Sanitize text small font size
    $editor_text_size_settings['eccp_settings_small_font_size_text_field']     = ! empty( $editor_text_size_settings['eccp_settings_small_font_size_text_field'] ) ? sanitize_text_field( $editor_text_size_settings['eccp_settings_small_font_size_text_field'] ) : '';
	
	// Sanitize text regular font size
    $editor_text_size_settings['eccp_settings_regular_font_size_text_field']     = ! empty( $editor_text_size_settings['eccp_settings_regular_font_size_text_field'] ) ? sanitize_text_field( $editor_text_size_settings['eccp_settings_regular_font_size_text_field'] ) : '';
	
	// Sanitize text large font size
    $editor_text_size_settings['eccp_settings_large_font_size_text_field']     = ! empty( $editor_text_size_settings['eccp_settings_large_font_size_text_field'] ) ? sanitize_text_field( $editor_text_size_settings['eccp_settings_large_font_size_text_field'] ) : '';
	
	// Sanitize text huge font size
    $editor_text_size_settings['eccp_settings_huge_font_size_text_field']     = ! empty( $editor_text_size_settings['eccp_settings_huge_font_size_text_field'] ) ? sanitize_text_field( $editor_text_size_settings['eccp_settings_huge_font_size_text_field'] ) : '';
	
	// Sanitize Checkbox enable fluid typography
	$editor_text_size_settings['eccp_settings_enable_fluid_typography_checkbox_field'] = isset( $editor_text_size_settings['eccp_settings_enable_fluid_typography_checkbox_field'] ) ;
	
	// Sanitize text mobile screen large font size
    $editor_text_size_settings['eccp_settings_mobile_screen_large_font_size_text_field'] = ! empty( $editor_text_size_settings['eccp_settings_mobile_screen_large_font_size_text_field'] ) ? sanitize_text_field( $editor_text_size_settings['eccp_settings_mobile_screen_large_font_size_text_field'] ) : '';
	
	// Sanitize text mobile screen huge font size
    $editor_text_size_settings['eccp_settings_mobile_screen_huge_font_size_text_field'] = ! empty( $editor_text_size_settings['eccp_settings_mobile_screen_huge_font_size_text_field'] ) ? sanitize_text_field( $editor_text_size_settings['eccp_settings_mobile_screen_huge_font_size_text_field'] ) : '';
	
	
	
	// Sanitize Checkbox enable default gutenberg editor font size
    $editor_text_size_settings['eccp_settings_enable_default_gutenberg_editor_font_size_checkbox_field'] = isset( $editor_text_size_settings['eccp_settings_enable_default_gutenberg_editor_font_size_checkbox_field'] ) ;
	
	// Sanitize text default gutenberg editor font size
    $editor_text_size_settings['eccp_settings_default_gutenberg_editor_font_size_text_field'] = ! empty( $editor_text_size_settings['eccp_settings_default_gutenberg_editor_font_size_text_field'] ) ? sanitize_text_field( $editor_text_size_settings['eccp_settings_default_gutenberg_editor_font_size_text_field'] ) : '';
	
	// Sanitize Checkbox disable custom font size
    $editor_text_size_settings['eccp_settings_disable_custom_font_size_checkbox_field'] = isset( $editor_text_size_settings['eccp_settings_disable_custom_font_size_checkbox_field'] ) ;
	
	// Sanitize Checkbox enable fluid custom font size
    $editor_text_size_settings['eccp_settings_enable_fluid_custom_font_size_checkbox_field'] = isset( $editor_text_size_settings['eccp_settings_enable_fluid_custom_font_size_checkbox_field'] ) ;
	
	
	
	return $editor_text_size_settings;
	
}


/* Fonction de nettoyage pour nos valeurs de réglages avant l'entrée en base de données
$custom_gutenberg_editor_settings Un tableau de paramètres, 
 avec en index l'ID des champs de réglage déclaré avec la fonction: add_settings_field() )
 */
function eccp_custom_gutenberg_editor_sanitize( $custom_gutenberg_editor_settings ){
	
	/*------------------------------------ Sanitize 5ème SECTION CUSTOM GUTENBERG EDITOR -------------------------------------*/
	
	// Sanitize Checkbox disable fullscreen gutenberg editor
    $custom_gutenberg_editor_settings['eccp_settings_disable_fullscreen_gutenberg_editor_checkbox_field'] = isset( $custom_gutenberg_editor_settings['eccp_settings_disable_fullscreen_gutenberg_editor_checkbox_field'] ) ;
	
	// Sanitize Checkbox activate default style sheet on front end
    $custom_gutenberg_editor_settings['eccp_settings_activate_default_style_sheet_on_front_end_checkbox_field'] = isset( $custom_gutenberg_editor_settings['eccp_settings_activate_default_style_sheet_on_front_end_checkbox_field'] ) ;
	
	
	// Sanitize Checkbox activate responsive embeds
    $custom_gutenberg_editor_settings['eccp_settings_activate_responsive_embeds_checkbox_field'] = isset( $custom_gutenberg_editor_settings['eccp_settings_activate_responsive_embeds_checkbox_field'] ) ;
	
	// Sanitize text post embed max width
    $custom_gutenberg_editor_settings['eccp_settings_post_embed_max_width_text_field']     = ! empty( $custom_gutenberg_editor_settings['eccp_settings_post_embed_max_width_text_field'] ) ? sanitize_text_field( $custom_gutenberg_editor_settings['eccp_settings_post_embed_max_width_text_field'] ) : '';
	
	// Sanitize text page embed max width
    $custom_gutenberg_editor_settings['eccp_settings_page_embed_max_width_text_field']     = ! empty( $custom_gutenberg_editor_settings['eccp_settings_page_embed_max_width_text_field'] ) ? sanitize_text_field( $custom_gutenberg_editor_settings['eccp_settings_page_embed_max_width_text_field'] ) : '';
	
	// Sanitize text cpt embed max width
    $custom_gutenberg_editor_settings['eccp_settings_cpt_embed_max_width_text_field']     = ! empty( $custom_gutenberg_editor_settings['eccp_settings_cpt_embed_max_width_text_field'] ) ? sanitize_text_field( $custom_gutenberg_editor_settings['eccp_settings_cpt_embed_max_width_text_field'] ) : '';
	
	// Sanitize radio corrective according to theme
    $custom_gutenberg_editor_settings['eccp_corrective_according_to_theme_radio_field'] = sanitize_key( $custom_gutenberg_editor_settings['eccp_corrective_according_to_theme_radio_field'] ) ;
	
	
	
	// Sanitize Checkbox activate align wide block editor
    $custom_gutenberg_editor_settings['eccp_settings_activate_align_wide_block_editor_checkbox_field'] = isset( $custom_gutenberg_editor_settings['eccp_settings_activate_align_wide_block_editor_checkbox_field'] ) ;
	
	
	
	// Sanitize Checkbox activate editor width
    $custom_gutenberg_editor_settings['eccp_settings_activate_editor_width_checkbox_field'] = isset( $custom_gutenberg_editor_settings['eccp_settings_activate_editor_width_checkbox_field'] ) ;
	
	// Sanitize text small template editor
    $custom_gutenberg_editor_settings['eccp_settings_small_template_editor_text_field']     = ! empty( $custom_gutenberg_editor_settings['eccp_settings_small_template_editor_text_field'] ) ? sanitize_text_field( $custom_gutenberg_editor_settings['eccp_settings_small_template_editor_text_field'] ) : '';
	
	// Sanitize text large template editor
    $custom_gutenberg_editor_settings['eccp_settings_large_template_editor_text_field']     = ! empty( $custom_gutenberg_editor_settings['eccp_settings_large_template_editor_text_field'] ) ? sanitize_text_field( $custom_gutenberg_editor_settings['eccp_settings_large_template_editor_text_field'] ) : '';
	
	// Sanitize Select post template editor
    $custom_gutenberg_editor_settings['eccp_settings_post_template_editor_select_field']   = ! empty(  $custom_gutenberg_editor_settings['eccp_settings_post_template_editor_select_field'] ) ? sanitize_key(  $custom_gutenberg_editor_settings['eccp_settings_post_template_editor_select_field'] ) : '' ;
	
	// Sanitize Select page template editor
    $custom_gutenberg_editor_settings['eccp_settings_page_template_editor_select_field']   = ! empty(  $custom_gutenberg_editor_settings['eccp_settings_page_template_editor_select_field'] ) ? sanitize_key(  $custom_gutenberg_editor_settings['eccp_settings_page_template_editor_select_field'] ) : '' ;
	
	// Sanitize Select cpt template editor
    $custom_gutenberg_editor_settings['eccp_settings_cpt_template_editor_select_field']   = ! empty(  $custom_gutenberg_editor_settings['eccp_settings_cpt_template_editor_select_field'] ) ? sanitize_key(  $custom_gutenberg_editor_settings['eccp_settings_cpt_template_editor_select_field'] ) : '' ;
	
	
	// Sanitize Select page title alignment
    $custom_gutenberg_editor_settings['eccp_settings_page_title_alignment_select_field']   = ! empty(  $custom_gutenberg_editor_settings['eccp_settings_page_title_alignment_select_field'] ) ? sanitize_key(  $custom_gutenberg_editor_settings['eccp_settings_page_title_alignment_select_field'] ) : '' ;
	
	
	// Sanitize Checkbox activate support margin padding
    $custom_gutenberg_editor_settings['eccp_settings_activate_support_margin_padding_checkbox_field'] = isset( $custom_gutenberg_editor_settings['eccp_settings_activate_support_margin_padding_checkbox_field'] ) ;
	
	// Sanitize Checkbox activate support border
    $custom_gutenberg_editor_settings['eccp_settings_activate_support_border_checkbox_field'] = isset( $custom_gutenberg_editor_settings['eccp_settings_activate_support_border_checkbox_field'] ) ;
	
	
	// Sanitize Checkbox disable webp image generation
    $custom_gutenberg_editor_settings['eccp_settings_disable_webp_image_generation_checkbox_field'] = isset( $custom_gutenberg_editor_settings['eccp_settings_disable_webp_image_generation_checkbox_field'] ) ;
	
	// Sanitize Checkbox disable webp image generation
    $custom_gutenberg_editor_settings['eccp_settings_disable_downloading_and_image_generation_webp_checkbox_field'] = isset( $custom_gutenberg_editor_settings['eccp_settings_disable_downloading_and_image_generation_webp_checkbox_field'] ) ;
	
	
	// Sanitize Checkbox disable openverse category from media tab
    $custom_gutenberg_editor_settings['eccp_settings_disable_openverse_category_from_media_tab_checkbox_field'] = isset( $custom_gutenberg_editor_settings['eccp_settings_disable_openverse_category_from_media_tab_checkbox_field'] ) ;
	
	// Sanitize Checkbox disable settings styles tabs for sidebar
    $custom_gutenberg_editor_settings['eccp_settings_disable_settings_styles_tabs_for_sidebar_checkbox_field'] = isset( $custom_gutenberg_editor_settings['eccp_settings_disable_settings_styles_tabs_for_sidebar_checkbox_field'] ) ;
	
	// Sanitize Checkbox enable editor background color
    $custom_gutenberg_editor_settings['eccp_settings_enable_editor_background_color_checkbox_field'] = isset( $custom_gutenberg_editor_settings['eccp_settings_enable_editor_background_color_checkbox_field'] ) ;
	
	// Sanitize text editor background color
    $custom_gutenberg_editor_settings['eccp_settings_editor_background_color_text_field']  = ! empty( $custom_gutenberg_editor_settings['eccp_settings_editor_background_color_text_field'] ) ? sanitize_text_field( $custom_gutenberg_editor_settings['eccp_settings_editor_background_color_text_field'] ) : '';
	
	
	// Sanitize Checkbox enable fluid spacing
    $custom_gutenberg_editor_settings['eccp_settings_enable_fluid_spacing_checkbox_field'] = isset( $custom_gutenberg_editor_settings['eccp_settings_enable_fluid_spacing_checkbox_field'] ) ;
	
	// Sanitize text editor min viewport fluid espacement
    $custom_gutenberg_editor_settings['eccp_settings_min_viewport_fluid_espacement_text_field']  = ! empty( $custom_gutenberg_editor_settings['eccp_settings_min_viewport_fluid_espacement_text_field']) ? sanitize_text_field( $custom_gutenberg_editor_settings['eccp_settings_min_viewport_fluid_espacement_text_field'] ) : '';
	
	// Sanitize text editor max viewport fluid espacement
    $custom_gutenberg_editor_settings['eccp_settings_max_viewport_fluid_espacement_text_field']  = ! empty( $custom_gutenberg_editor_settings['eccp_settings_max_viewport_fluid_espacement_text_field']) ? sanitize_text_field( $custom_gutenberg_editor_settings['eccp_settings_max_viewport_fluid_espacement_text_field'] ) : '';
	
	// Sanitize text editor min value fluid espacement number one
    $custom_gutenberg_editor_settings['eccp_settings_min_value_fluid_espacement_number_one_text_field']  = ! empty( $custom_gutenberg_editor_settings['eccp_settings_min_value_fluid_espacement_number_one_text_field']) ? sanitize_text_field( $custom_gutenberg_editor_settings['eccp_settings_min_value_fluid_espacement_number_one_text_field'] ) : '';
	
	// Sanitize text editor max value fluid espacement number one
    $custom_gutenberg_editor_settings['eccp_settings_max_value_fluid_espacement_number_one_text_field']  = ! empty( $custom_gutenberg_editor_settings['eccp_settings_max_value_fluid_espacement_number_one_text_field']) ? sanitize_text_field( $custom_gutenberg_editor_settings['eccp_settings_max_value_fluid_espacement_number_one_text_field'] ) : '';
	
	// Sanitize text editor min value fluid espacement number two
    $custom_gutenberg_editor_settings['eccp_settings_min_value_fluid_espacement_number_two_text_field']  = ! empty( $custom_gutenberg_editor_settings['eccp_settings_min_value_fluid_espacement_number_two_text_field']) ? sanitize_text_field( $custom_gutenberg_editor_settings['eccp_settings_min_value_fluid_espacement_number_two_text_field'] ) : '';
	
	// Sanitize text editor max value fluid espacement number two
    $custom_gutenberg_editor_settings['eccp_settings_max_value_fluid_espacement_number_two_text_field']  = ! empty( $custom_gutenberg_editor_settings['eccp_settings_max_value_fluid_espacement_number_two_text_field']) ? sanitize_text_field( $custom_gutenberg_editor_settings['eccp_settings_max_value_fluid_espacement_number_two_text_field'] ) : '';
	
	// Sanitize text editor min value fluid espacement number three
    $custom_gutenberg_editor_settings['eccp_settings_min_value_fluid_espacement_number_three_text_field']  = ! empty( $custom_gutenberg_editor_settings['eccp_settings_min_value_fluid_espacement_number_three_text_field']) ? sanitize_text_field( $custom_gutenberg_editor_settings['eccp_settings_min_value_fluid_espacement_number_three_text_field'] ) : '';
	
	// Sanitize text editor max value fluid espacement number three
    $custom_gutenberg_editor_settings['eccp_settings_max_value_fluid_espacement_number_three_text_field']  = ! empty( $custom_gutenberg_editor_settings['eccp_settings_max_value_fluid_espacement_number_three_text_field']) ? sanitize_text_field( $custom_gutenberg_editor_settings['eccp_settings_max_value_fluid_espacement_number_three_text_field'] ) : '';
	
	// Sanitize text editor min value fluid espacement number four
    $custom_gutenberg_editor_settings['eccp_settings_min_value_fluid_espacement_number_four_text_field']  = ! empty( $custom_gutenberg_editor_settings['eccp_settings_min_value_fluid_espacement_number_four_text_field']) ? sanitize_text_field( $custom_gutenberg_editor_settings['eccp_settings_min_value_fluid_espacement_number_four_text_field'] ) : '';
	
	// Sanitize text editor max value fluid espacement number four
    $custom_gutenberg_editor_settings['eccp_settings_max_value_fluid_espacement_number_four_text_field']  = ! empty( $custom_gutenberg_editor_settings['eccp_settings_max_value_fluid_espacement_number_four_text_field']) ? sanitize_text_field( $custom_gutenberg_editor_settings['eccp_settings_max_value_fluid_espacement_number_four_text_field'] ) : '';
	
	// Sanitize text editor min value fluid espacement number five
    $custom_gutenberg_editor_settings['eccp_settings_min_value_fluid_espacement_number_five_text_field']  = ! empty( $custom_gutenberg_editor_settings['eccp_settings_min_value_fluid_espacement_number_five_text_field']) ? sanitize_text_field( $custom_gutenberg_editor_settings['eccp_settings_min_value_fluid_espacement_number_five_text_field'] ) : '';
	
	// Sanitize text editor max value fluid espacement number five
    $custom_gutenberg_editor_settings['eccp_settings_max_value_fluid_espacement_number_five_text_field']  = ! empty( $custom_gutenberg_editor_settings['eccp_settings_max_value_fluid_espacement_number_five_text_field']) ? sanitize_text_field( $custom_gutenberg_editor_settings['eccp_settings_max_value_fluid_espacement_number_five_text_field'] ) : '';
	
	// Sanitize text editor min value fluid espacement number six
    $custom_gutenberg_editor_settings['eccp_settings_min_value_fluid_espacement_number_six_text_field']  = ! empty( $custom_gutenberg_editor_settings['eccp_settings_min_value_fluid_espacement_number_six_text_field']) ? sanitize_text_field( $custom_gutenberg_editor_settings['eccp_settings_min_value_fluid_espacement_number_six_text_field'] ) : '';
	
	// Sanitize text editor max value fluid espacement number six
    $custom_gutenberg_editor_settings['eccp_settings_max_value_fluid_espacement_number_six_text_field']  = ! empty( $custom_gutenberg_editor_settings['eccp_settings_max_value_fluid_espacement_number_six_text_field']) ? sanitize_text_field( $custom_gutenberg_editor_settings['eccp_settings_max_value_fluid_espacement_number_six_text_field'] ) : '';
	
	// Sanitize text editor min value fluid espacement number seven
    $custom_gutenberg_editor_settings['eccp_settings_min_value_fluid_espacement_number_seven_text_field']  = ! empty( $custom_gutenberg_editor_settings['eccp_settings_min_value_fluid_espacement_number_seven_text_field']) ? sanitize_text_field( $custom_gutenberg_editor_settings['eccp_settings_min_value_fluid_espacement_number_seven_text_field'] ) : '';
	
	// Sanitize text editor max value fluid espacement number seven
    $custom_gutenberg_editor_settings['eccp_settings_max_value_fluid_espacement_number_seven_text_field']  = ! empty( $custom_gutenberg_editor_settings['eccp_settings_max_value_fluid_espacement_number_seven_text_field']) ? sanitize_text_field( $custom_gutenberg_editor_settings['eccp_settings_max_value_fluid_espacement_number_seven_text_field'] ) : '';
	
	
	
	
	return $custom_gutenberg_editor_settings;
	
}


/* Fonction de nettoyage pour nos valeurs de réglages avant l'entrée en base de données
 $custom_gutenberg_blocks_settings Un tableau de paramètres, 
 avec en index l'ID des champs de réglage déclaré avec la fonction: add_settings_field() )
 */
function eccp_custom_gutenberg_blocks_sanitize( $custom_gutenberg_blocks_settings ){
	

	/*------------------------------------ Sanitize 6ème SECTION CUSTOMIZE GUTENBERG BLOCKS -------------------------------------*/

	// Sanitize Radio activate box shadow paragraph block
	// sanitize_key:  Nettoie une clé de chaîne.
    //$custom_gutenberg_blocks_settings['eccp_settings_activate_box_shadow_paragraph_block_radio_field'] = sanitize_key( $custom_gutenberg_blocks_settings['eccp_settings_activate_box_shadow_paragraph_block_radio_field'] ) ;
	
	// Sanitize text box shadow color
    //$custom_gutenberg_blocks_settings['eccp_settings_box_shadow_color_text_field']     = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_box_shadow_color_text_field'] ) ? sanitize_text_field( $custom_gutenberg_blocks_settings['eccp_settings_box_shadow_color_text_field'] ) : '';
	
	// Sanitize text box shadow opacity
    //$custom_gutenberg_blocks_settings['eccp_settings_box_shadow_opacity_text_field']     = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_box_shadow_opacity_text_field'] ) ? sanitize_text_field( $custom_gutenberg_blocks_settings['eccp_settings_box_shadow_opacity_text_field'] ) : '';
	
	// Sanitize text box shadow x
    //$custom_gutenberg_blocks_settings['eccp_settings_box_shadow_x_text_field']     = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_box_shadow_x_text_field'] ) ? sanitize_text_field( $custom_gutenberg_blocks_settings['eccp_settings_box_shadow_x_text_field'] ) : '';
	
	// Sanitize text box shadow y
    //$custom_gutenberg_blocks_settings['eccp_settings_box_shadow_y_text_field']     = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_box_shadow_y_text_field'] ) ? sanitize_text_field( $custom_gutenberg_blocks_settings['eccp_settings_box_shadow_y_text_field'] ) : '';
	
	// Sanitize text box shadow blur
    //$custom_gutenberg_blocks_settings['eccp_settings_box_shadow_blur_text_field']     = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_box_shadow_blur_text_field'] ) ? sanitize_text_field( $custom_gutenberg_blocks_settings['eccp_settings_box_shadow_blur_text_field'] ) : '';
	
	// Sanitize text box shadow spread
    //$custom_gutenberg_blocks_settings['eccp_settings_box_shadow_spread_text_field']     = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_box_shadow_spread_text_field'] ) ? sanitize_text_field( $custom_gutenberg_blocks_settings['eccp_settings_box_shadow_spread_text_field'] ) : '';
	
	
	// Sanitize Radio activate style card paragraph
    $custom_gutenberg_blocks_settings['eccp_settings_activate_style_card_paragraph_radio_field'] = sanitize_key( $custom_gutenberg_blocks_settings['eccp_settings_activate_style_card_paragraph_radio_field'] ) ;
	
	// Sanitize Radio activate style notice question
    $custom_gutenberg_blocks_settings['eccp_settings_activate_style_notice_question_radio_field'] = sanitize_key( $custom_gutenberg_blocks_settings['eccp_settings_activate_style_notice_question_radio_field'] ) ;
	
	// Sanitize text icon color style notice question
    $custom_gutenberg_blocks_settings['eccp_settings_icon_color_style_notice_question_text_field']     = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_icon_color_style_notice_question_text_field'] ) ? sanitize_text_field( $custom_gutenberg_blocks_settings['eccp_settings_icon_color_style_notice_question_text_field'] ) : '';
	
	// Sanitize Radio activate style notice info
    $custom_gutenberg_blocks_settings['eccp_settings_activate_style_notice_info_radio_field'] = sanitize_key( $custom_gutenberg_blocks_settings['eccp_settings_activate_style_notice_info_radio_field'] ) ;
	
	// Sanitize text icon color style notice info
    $custom_gutenberg_blocks_settings['eccp_settings_icon_color_style_notice_info_text_field']     = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_icon_color_style_notice_info_text_field'] ) ? sanitize_text_field( $custom_gutenberg_blocks_settings['eccp_settings_icon_color_style_notice_info_text_field'] ) : '';
	
	// Sanitize Radio activate style notice advice
    $custom_gutenberg_blocks_settings['eccp_settings_activate_style_notice_advice_radio_field'] = sanitize_key( $custom_gutenberg_blocks_settings['eccp_settings_activate_style_notice_advice_radio_field'] ) ;
	
	// Sanitize text icon color style notice advice
    $custom_gutenberg_blocks_settings['eccp_settings_icon_color_style_notice_advice_text_field']     = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_icon_color_style_notice_advice_text_field'] ) ? sanitize_text_field( $custom_gutenberg_blocks_settings['eccp_settings_icon_color_style_notice_advice_text_field'] ) : '';
	
	// Sanitize Radio activate style notice warning
    $custom_gutenberg_blocks_settings['eccp_settings_activate_style_notice_warning_radio_field'] = sanitize_key( $custom_gutenberg_blocks_settings['eccp_settings_activate_style_notice_warning_radio_field'] ) ;
	
	// Sanitize text icon color style notice warning
    $custom_gutenberg_blocks_settings['eccp_settings_icon_color_style_notice_warning_text_field']     = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_icon_color_style_notice_warning_text_field'] ) ? sanitize_text_field( $custom_gutenberg_blocks_settings['eccp_settings_icon_color_style_notice_warning_text_field'] ) : '';
	
	// Sanitize Radio activate style notice alert
    $custom_gutenberg_blocks_settings['eccp_settings_activate_style_notice_alert_radio_field'] = sanitize_key( $custom_gutenberg_blocks_settings['eccp_settings_activate_style_notice_alert_radio_field'] ) ;
	
	// Sanitize text icon color style notice alert
    $custom_gutenberg_blocks_settings['eccp_settings_icon_color_style_notice_alert_text_field']     = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_icon_color_style_notice_alert_text_field'] ) ? sanitize_text_field( $custom_gutenberg_blocks_settings['eccp_settings_icon_color_style_notice_alert_text_field'] ) : '';
	
	// Sanitize Radio activate style Click to Tweet
    $custom_gutenberg_blocks_settings['eccp_settings_activate_style_click_to_tweet_radio_field'] = sanitize_key( $custom_gutenberg_blocks_settings['eccp_settings_activate_style_click_to_tweet_radio_field'] ) ;
	
	// Sanitize text tootip text color
    $custom_gutenberg_blocks_settings['eccp_settings_tooltip_text_color_text_field']  = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_tooltip_text_color_text_field'] ) ? sanitize_text_field( $custom_gutenberg_blocks_settings['eccp_settings_tooltip_text_color_text_field'] ) : '';
	
	// Sanitize text tootip background color
    $custom_gutenberg_blocks_settings['eccp_settings_tooltip_background_color_text_field']  = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_tooltip_background_color_text_field'] ) ? sanitize_text_field( $custom_gutenberg_blocks_settings['eccp_settings_tooltip_background_color_text_field'] ) : '';
	
	// Sanitize text double underline color
    $custom_gutenberg_blocks_settings['eccp_settings_text_double_underline_color_text_field']  = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_text_double_underline_color_text_field'] ) ? sanitize_text_field( $custom_gutenberg_blocks_settings['eccp_settings_text_double_underline_color_text_field'] ) : '';
	
	
	
	
	// Sanitize text bulleted list color
    //$custom_gutenberg_blocks_settings['eccp_settings_bulleted_list_color_text_field']     = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_bulleted_list_color_text_field'] ) ? sanitize_text_field( $custom_gutenberg_blocks_settings['eccp_settings_bulleted_list_color_text_field'] ) : '';
	
	// Sanitize text bulleted list size
    //$custom_gutenberg_blocks_settings['eccp_settings_bulleted_list_size_text_field']     = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_bulleted_list_size_text_field'] ) ? sanitize_text_field( $custom_gutenberg_blocks_settings['eccp_settings_bulleted_list_size_text_field'] ) : '';
	
	// Sanitize Radio activate styles bullet list
    $custom_gutenberg_blocks_settings['eccp_settings_activate_styles_bullet_list_radio_field'] = sanitize_key( $custom_gutenberg_blocks_settings['eccp_settings_activate_styles_bullet_list_radio_field'] ) ;

	// Sanitize text name table of contents
	$custom_gutenberg_blocks_settings['eccp_settings_name_table_of_contents_text_field'] = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_name_table_of_contents_text_field'] ) ? sanitize_text_field( $custom_gutenberg_blocks_settings['eccp_settings_name_table_of_contents_text_field'] ) : '';
	
	// Sanitize text background color table of contents
	$custom_gutenberg_blocks_settings['eccp_settings_title_color_table_of_contents_text_field'] = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_title_color_table_of_contents_text_field'] ) ? sanitize_text_field( $custom_gutenberg_blocks_settings['eccp_settings_title_color_table_of_contents_text_field'] ) : '';
	
	// Sanitize text offset anchors navigation
	$custom_gutenberg_blocks_settings['eccp_settings_offset_navigation_anchors_text_field'] = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_offset_navigation_anchors_text_field'] ) ? sanitize_text_field( $custom_gutenberg_blocks_settings['eccp_settings_offset_navigation_anchors_text_field'] ) : '';
	
	// Sanitize Radio activate underline table of contents links
    $custom_gutenberg_blocks_settings['eccp_settings_activate_underline_table_of_contents_links_on_hover_radio_field'] = sanitize_key( $custom_gutenberg_blocks_settings['eccp_settings_activate_underline_table_of_contents_links_on_hover_radio_field'] ) ;

	
	
	
	// Sanitize Radio activate rectangle shape style
    $custom_gutenberg_blocks_settings['eccp_settings_activate_rectangle_shape_style_radio_field'] = sanitize_key( $custom_gutenberg_blocks_settings['eccp_settings_activate_rectangle_shape_style_radio_field'] ) ;

	
	// Sanitize text caption font size
    $custom_gutenberg_blocks_settings['eccp_settings_caption_font_size_text_field']     = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_caption_font_size_text_field'] ) ? sanitize_text_field( $custom_gutenberg_blocks_settings['eccp_settings_caption_font_size_text_field'] ) : '';
	
	// Sanitize text caption padding
    $custom_gutenberg_blocks_settings['eccp_settings_caption_padding_text_field']     = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_caption_padding_text_field'] ) ? sanitize_text_field( $custom_gutenberg_blocks_settings['eccp_settings_caption_padding_text_field'] ) : '';
	
	// Sanitize text caption color
    $custom_gutenberg_blocks_settings['eccp_settings_caption_color_text_field']     = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_caption_color_text_field'] ) ? sanitize_text_field( $custom_gutenberg_blocks_settings['eccp_settings_caption_color_text_field'] ) : '';
	
	// Sanitize text caption background color
    $custom_gutenberg_blocks_settings['eccp_settings_caption_background_color_text_field']     = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_caption_background_color_text_field'] ) ? sanitize_text_field( $custom_gutenberg_blocks_settings['eccp_settings_caption_background_color_text_field'] ) : '';
	
	// Sanitize Radio activate style image circle
    $custom_gutenberg_blocks_settings['eccp_settings_activate_style_image_circle_radio_field'] = sanitize_key( $custom_gutenberg_blocks_settings['eccp_settings_activate_style_image_circle_radio_field'] ) ;

	// Sanitize Radio activate style image filter grayscale
    $custom_gutenberg_blocks_settings['eccp_settings_activate_style_image_filter_grayscale_radio_field'] = sanitize_key( $custom_gutenberg_blocks_settings['eccp_settings_activate_style_image_filter_grayscale_radio_field'] ) ;
	
	// Sanitize Radio activate style image card
    $custom_gutenberg_blocks_settings['eccp_settings_activate_style_image_card_radio_field'] = sanitize_key( $custom_gutenberg_blocks_settings['eccp_settings_activate_style_image_card_radio_field'] ) ;
	
	// Sanitize Radio enable image size setting
    $custom_gutenberg_blocks_settings['eccp_settings_enable_image_size_setting_radio_field'] = sanitize_key( $custom_gutenberg_blocks_settings['eccp_settings_enable_image_size_setting_radio_field'] ) ;
	
	// Sanitize text custom image width parameter
    $custom_gutenberg_blocks_settings['eccp_settings_custom_image_width_parameter_text_field']  = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_custom_image_width_parameter_text_field'] ) ? sanitize_text_field( $custom_gutenberg_blocks_settings['eccp_settings_custom_image_width_parameter_text_field'] ) : '';
	
	// Sanitize text custom image height parameter
    $custom_gutenberg_blocks_settings['eccp_settings_custom_image_height_parameter_text_field']  = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_custom_image_height_parameter_text_field'] ) ? sanitize_text_field( $custom_gutenberg_blocks_settings['eccp_settings_custom_image_height_parameter_text_field'] ) : '';
	
	// Sanitize text name new image size
    $custom_gutenberg_blocks_settings['eccp_settings_name_new_image_size_text_field']  = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_name_new_image_size_text_field'] ) ? sanitize_text_field( $custom_gutenberg_blocks_settings['eccp_settings_name_new_image_size_text_field'] ) : '';
	
	// Sanitize text slug new image size
   // $custom_gutenberg_blocks_settings['eccp_settings_slug_new_image_size_text_field']  = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_slug_new_image_size_text_field'] ) ? sanitize_text_field( $custom_gutenberg_blocks_settings['eccp_settings_slug_new_image_size_text_field'] ) : '';
	
	// Sanitize Select image default link type
    $custom_gutenberg_blocks_settings['eccp_settings_image_default_link_type_select_field']   = ! empty(  $custom_gutenberg_blocks_settings['eccp_settings_image_default_link_type_select_field'] ) ? sanitize_key( $custom_gutenberg_blocks_settings['eccp_settings_image_default_link_type_select_field'] ) : '' ;
	
	// Sanitize Select image default size
    $custom_gutenberg_blocks_settings['eccp_settings_image_default_size_select_field']   = ! empty(  $custom_gutenberg_blocks_settings['eccp_settings_image_default_size_select_field'] ) ? sanitize_key( $custom_gutenberg_blocks_settings['eccp_settings_image_default_size_select_field'] ) : '' ;
	
	
	
	
	// Sanitize Radio activate boutons styles hover
    $custom_gutenberg_blocks_settings['eccp_settings_activate_button_styles_hover_radio_field'] = sanitize_key( $custom_gutenberg_blocks_settings['eccp_settings_activate_style_notice_alert_radio_field'] ) ;
	
	
	//Configuré dans l'editeur Gutenberg a partir de la version 2.6
	
	// Sanitize text hover fill style background color
   // $custom_gutenberg_blocks_settings['eccp_settings_hover_fill_style_background_color_text_field']  = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_hover_fill_style_background_color_text_field'] ) ? sanitize_text_field( $custom_gutenberg_blocks_settings['eccp_settings_hover_fill_style_background_color_text_field'] ) : '';
	
	// Sanitize text hover fill style backgound color opacity
    //$custom_gutenberg_blocks_settings['eccp_settings_hover_fill_style_backgound_color_opacity_text_field']  = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_hover_fill_style_backgound_color_opacity_text_field'] ) ? sanitize_text_field( $custom_gutenberg_blocks_settings['eccp_settings_hover_fill_style_backgound_color_opacity_text_field'] ) : '';
	
	// Sanitize text hover fill style border color
    //$custom_gutenberg_blocks_settings['eccp_settings_hover_fill_style_border_color_text_field']  = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_hover_fill_style_border_color_text_field'] ) ? sanitize_text_field( $custom_gutenberg_blocks_settings['eccp_settings_hover_fill_style_border_color_text_field'] ) : '';
	
	// Sanitize text hover fill style text color
    //$custom_gutenberg_blocks_settings['eccp_settings_hover_fill_style_text_color_text_field']  = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_hover_fill_style_text_color_text_field'] ) ? sanitize_text_field( $custom_gutenberg_blocks_settings['eccp_settings_hover_fill_style_text_color_text_field'] ) : '';
	
	
	//Configuré dans l'editeur Gutenberg a partir de la version 2.6
	
	// Sanitize text hover outline style background color
    //$custom_gutenberg_blocks_settings['eccp_settings_hover_outline_style_background_color_text_field']  = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_hover_outline_style_background_color_text_field'] ) ? sanitize_text_field( $custom_gutenberg_blocks_settings['eccp_settings_hover_outline_style_background_color_text_field'] ) : '';
	
	// Sanitize text hover outline style backgound color opacity
    //$custom_gutenberg_blocks_settings['eccp_settings_hover_outline_style_backgound_color_opacity_text_field']  = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_outline_fill_style_backgound_color_opacity_text_field'] ) ? sanitize_text_field( $custom_gutenberg_blocks_settings['eccp_settings_hover_outline_style_backgound_color_opacity_text_field'] ) : '';
	
	// Sanitize text hover outline style border color
   // $custom_gutenberg_blocks_settings['eccp_settings_hover_outline_style_border_color_text_field']  = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_hover_fill_outline_border_color_text_field'] ) ? sanitize_text_field( $custom_gutenberg_blocks_settings['eccp_settings_hover_outline_style_border_color_text_field'] ) : '';
	
	// Sanitize text hover outline style text color
    //$custom_gutenberg_blocks_settings['eccp_settings_hover_outline_style_text_color_text_field']  = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_hover_fill_outline_text_color_text_field'] ) ? sanitize_text_field( $custom_gutenberg_blocks_settings['eccp_settings_hover_outline_style_text_color_text_field'] ) : '';
	
	
	// Sanitize Radio activate columns block styles
    $custom_gutenberg_blocks_settings['eccp_settings_activate_columns_block_styles_radio_field'] = sanitize_key( $custom_gutenberg_blocks_settings['eccp_settings_activate_columns_block_styles_radio_field'] ) ;
	
	
	
	// Sanitize Radio activate media text block styles
    $custom_gutenberg_blocks_settings['eccp_settings_activate_media_text_block_styles_radio_field'] = sanitize_key( $custom_gutenberg_blocks_settings['eccp_settings_activate_media_text_block_styles_radio_field'] ) ;
	
	
	
	// Sanitize Radio activate block styles read more
    $custom_gutenberg_blocks_settings['eccp_settings_activate_block_styles_read_more_radio_field'] = sanitize_key( $custom_gutenberg_blocks_settings['eccp_settings_activate_block_styles_read_more_radio_field'] ) ;
	
	// Sanitize text link text read more
    $custom_gutenberg_blocks_settings['eccp_settings_link_text_read_more_text_field']  = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_link_text_read_more_text_field'] ) ? sanitize_text_field( $custom_gutenberg_blocks_settings['eccp_settings_link_text_read_more_text_field'] ) : '';
	
	
	// Sanitize text block read more background color
    $custom_gutenberg_blocks_settings['eccp_settings_block_read_more_background_color_text_field']  = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_block_read_more_background_color_text_field'] ) ? sanitize_text_field( $custom_gutenberg_blocks_settings['eccp_settings_block_read_more_background_color_text_field'] ) : '';
	
	// Sanitize text block read more background color opacity
    $custom_gutenberg_blocks_settings['eccp_settings_block_read_more_backgound_color_opacity_text_field']  = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_block_read_more_backgound_color_opacity_text_field'] ) ? sanitize_text_field( $custom_gutenberg_blocks_settings['eccp_settings_block_read_more_backgound_color_opacity_text_field'] ) : '';
	
	// Sanitize text block read more border color
    $custom_gutenberg_blocks_settings['eccp_settings_block_read_more_border_color_text_field']  = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_block_read_more_border_color_text_field'] ) ? sanitize_text_field( $custom_gutenberg_blocks_settings['eccp_settings_block_read_more_border_color_text_field'] ) : '';
	
	// Sanitize text block read more text color
    $custom_gutenberg_blocks_settings['eccp_settings_block_read_more_text_color_text_field']  = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_block_read_more_text_color_text_field'] ) ? sanitize_text_field( $custom_gutenberg_blocks_settings['eccp_settings_block_read_more_text_color_text_field'] ) : '';
	
	
	// Sanitize text block read more hover background color
    $custom_gutenberg_blocks_settings['eccp_settings_block_read_more_hover_background_color_text_field']  = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_block_read_more_hover_background_color_text_field'] ) ? sanitize_text_field( $custom_gutenberg_blocks_settings['eccp_settings_block_read_more_hover_background_color_text_field'] ) : '';
	
	// Sanitize text block read more hover background color opacity
    $custom_gutenberg_blocks_settings['eccp_settings_block_read_more_hover_backgound_color_opacity_text_field']  = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_block_read_more_hover_backgound_color_opacity_text_field'] ) ? sanitize_text_field( $custom_gutenberg_blocks_settings['eccp_settings_block_read_more_hover_backgound_color_opacity_text_field'] ) : '';
	
	// Sanitize text block read more hover border color
    $custom_gutenberg_blocks_settings['eccp_settings_block_read_more_hover_border_color_text_field']  = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_block_read_more_hover_border_color_text_field'] ) ? sanitize_text_field( $custom_gutenberg_blocks_settings['eccp_settings_block_read_more_hover_border_color_text_field'] ) : '';
	
	// Sanitize text block read more hover text color
    $custom_gutenberg_blocks_settings['eccp_settings_block_read_more_hover_text_color_text_field']  = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_block_read_more_hover_text_color_text_field'] ) ? sanitize_text_field( $custom_gutenberg_blocks_settings['eccp_settings_block_read_more_hover_text_color_text_field'] ) : '';
	
	
	// Sanitize Radio activate block styles table
    $custom_gutenberg_blocks_settings['eccp_settings_activate_block_styles_table_radio_field'] = sanitize_key( $custom_gutenberg_blocks_settings['eccp_settings_activate_block_styles_table_radio_field'] ) ;
	
	// Sanitize Radio activate responsive tables
	$custom_gutenberg_blocks_settings['eccp_settings_activate_reponsive_tables_radio_field'] = sanitize_key( $custom_gutenberg_blocks_settings['eccp_settings_activate_reponsive_tables_radio_field'] ) ;
	
	
	// Sanitize Radio activate card style latest posts block
    $custom_gutenberg_blocks_settings['eccp_settings_activate_card_style_latest_posts_block_radio_field'] = sanitize_key( $custom_gutenberg_blocks_settings['eccp_settings_activate_card_style_latest_posts_block_radio_field'] ) ;
	
	// Sanitize Radio activate hover zoom style latest posts block
    $custom_gutenberg_blocks_settings['eccp_settings_activate_hover_zoom_style_latest_posts_block_radio_field'] = sanitize_key( $custom_gutenberg_blocks_settings['eccp_settings_activate_hover_zoom_style_latest_posts_block_radio_field'] ) ;
	
	
	// Sanitize Radio activate card style query loop block
    $custom_gutenberg_blocks_settings['eccp_settings_activate_card_style_query_loop_block_radio_field'] = sanitize_key( $custom_gutenberg_blocks_settings['eccp_settings_activate_card_style_query_loop_block_radio_field'] ) ;
	
	// Sanitize Radio activate custom avatar
    $custom_gutenberg_blocks_settings['eccp_settings_activate_custom_avatar_radio_field'] = sanitize_key( $custom_gutenberg_blocks_settings['eccp_settings_activate_custom_avatar_radio_field'] ) ;
	
	// Sanitize text custom avatar url
    $custom_gutenberg_blocks_settings['eccp_settings_custom_avatar_url_text_field']  = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_custom_avatar_url_text_field'] ) ? sanitize_url( $custom_gutenberg_blocks_settings['eccp_settings_custom_avatar_url_text_field'] ) : '';
	
	// Sanitize text custom avatar size
    $custom_gutenberg_blocks_settings['eccp_settings_custom_avatar_size_text_field']  = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_custom_avatar_size_text_field'] ) ? sanitize_url( $custom_gutenberg_blocks_settings['eccp_settings_custom_avatar_size_text_field'] ) : '';
	
	// Sanitize Radio activate Hover Zoom style query loop block
    $custom_gutenberg_blocks_settings['eccp_settings_activate_hover_zoom_style_query_loop_block_radio_field'] = sanitize_key( $custom_gutenberg_blocks_settings['eccp_settings_activate_hover_zoom_style_query_loop_block_radio_field'] ) ;
	
	
	// Sanitize Radio turn yoast faq block
    $custom_gutenberg_blocks_settings['eccp_settings_turn_yoast_faq_block_an_accordion_radio_field'] = sanitize_key( $custom_gutenberg_blocks_settings['eccp_settings_turn_yoast_faq_block_an_accordion_radio_field'] ) ;
	
	// Sanitize text width block faq yoast
    $custom_gutenberg_blocks_settings['eccp_settings_width_block_faq_yoast_text_field']  = ! empty( $custom_gutenberg_blocks_settings['eccp_settings_width_block_faq_yoast_text_field'] ) ? sanitize_url( $custom_gutenberg_blocks_settings['eccp_settings_width_block_faq_yoast_text_field']) : '';
	
	
	// Sanitize Radio enable script js css swiper
    $custom_gutenberg_blocks_settings['eccp_settings_enable_script_js_css_swiper_radio_field'] = sanitize_key( $custom_gutenberg_blocks_settings['eccp_settings_enable_script_js_css_swiper_radio_field'] ) ;
	
	// Sanitize Radio enable custom block quote styles
    $custom_gutenberg_blocks_settings['eccp_settings_enable_custom_block_quote_styles_radio_field'] = sanitize_key( $custom_gutenberg_blocks_settings['eccp_settings_enable_custom_block_quote_styles_radio_field'] ) ;
	
	
	
	// Sanitize Radio activate script reactjs
    $custom_gutenberg_blocks_settings['eccp_settings_activate_script_reactjs_radio_field'] = sanitize_key( $custom_gutenberg_blocks_settings['eccp_settings_activate_script_reactjs_radio_field'] ) ;
	
	
	
	
	return $custom_gutenberg_blocks_settings;
	
}


/* Fonction de nettoyage pour nos valeurs de réglages avant l'entrée en base de données
 $reusable_blocks_settings Un tableau de paramètres, 
 avec en index l'ID des champs de réglage déclaré avec la fonction: add_settings_field() )
 */
function eccp_reusable_blocks_sanitize( $reusable_blocks_settings ){
	
	
	/*------------------------------------ Sanitize 7ème SECTION ADDONS REUSABLE BLOCKS -------------------------------------*/

	
	// Sanitize Checkbox activate reusable blocks menu
    $reusable_blocks_settings['eccp_activate_reusable_blocks_menu_checkbox_field'] = isset( $reusable_blocks_settings['eccp_activate_reusable_blocks_menu_checkbox_field'] ) ;

	
	// Sanitize Checkbox activate reusable blocks shortcode
    $reusable_blocks_settings['eccp_activate_reusable_blocks_shortcode_checkbox_field'] = isset( $reusable_blocks_settings['eccp_activate_reusable_blocks_shortcode_checkbox_field'] ) ;

	
	// Sanitize Select insert block before post
    $reusable_blocks_settings['eccp_settings_insert_block_before_post_select_field']   = ! empty(  $reusable_blocks_settings['eccp_settings_insert_block_before_post_select_field'] ) ? sanitize_key( $reusable_blocks_settings['eccp_settings_insert_block_before_post_select_field'] ) : '' ;
	
	// Sanitize Select insert block after post
    $reusable_blocks_settings['eccp_settings_insert_block_after_post_select_field']   = ! empty(  $reusable_blocks_settings['eccp_settings_insert_block_after_post_select_field'] ) ? sanitize_key( $reusable_blocks_settings['eccp_settings_insert_block_after_post_select_field'] ) : '' ;
	
	// Sanitize Select insert block before page
    $reusable_blocks_settings['eccp_settings_insert_block_before_page_select_field']   = ! empty(  $reusable_blocks_settings['eccp_settings_insert_block_before_page_select_field'] ) ? sanitize_key( $reusable_blocks_settings['eccp_settings_insert_block_before_page_select_field'] ) : '' ;
	
	// Sanitize Select insert block after page
    $reusable_blocks_settings['eccp_settings_insert_block_after_page_select_field']   = ! empty(  $reusable_blocks_settings['eccp_settings_insert_block_after_page_select_field'] ) ? sanitize_key( $reusable_blocks_settings['eccp_settings_insert_block_after_page_select_field'] ) : '' ;
	
	// Sanitize Select insert block before cpt
    $reusable_blocks_settings['eccp_settings_insert_block_before_cpt_select_field']   = ! empty(  $reusable_blocks_settings['eccp_settings_insert_block_before_cpt_select_field'] ) ? sanitize_key( $reusable_blocks_settings['eccp_settings_insert_block_before_cpt_select_field'] ) : '' ;
	
	// Sanitize Select insert block after cpt
    $reusable_blocks_settings['eccp_settings_insert_block_after_cpt_select_field']   = ! empty(  $reusable_blocks_settings['eccp_settings_insert_block_after_cpt_select_field'] ) ? sanitize_key( $reusable_blocks_settings['eccp_settings_insert_block_after_cpt_select_field'] ) : '' ;
	
	
	
	// Sanitize text quotation marks color
    $reusable_blocks_settings['eccp_settings_quotation_marks_color_text_field']     = ! empty( $reusable_blocks_settings['eccp_settings_quotation_marks_color_text_field'] ) ? sanitize_text_field( $reusable_blocks_settings['eccp_settings_quotation_marks_color_text_field'] ) : '';
	
	// Sanitize text quotation marks opacity
    $reusable_blocks_settings['eccp_settings_quotation_marks_opacity_text_field']     = ! empty( $reusable_blocks_settings['eccp_settings_quotation_marks_opacity_text_field'] ) ? sanitize_text_field( $reusable_blocks_settings['eccp_settings_quotation_marks_opacity_text_field'] ) : '';
	
	// Sanitize Select font weight blockquote(plus utilisé version 2.3)
    //$reusable_blocks_settings['eccp_settings_font_weight_blockquote_select_field']   = ! empty( $reusable_blocks_settings['eccp_settings_font_weight_blockquote_select_field'] ) ? sanitize_key( $reusable_blocks_settings['eccp_settings_font_weight_blockquote_select_field'] ) : '' ;
	
	// Sanitize font size blockquote front end(plus utilisé version 2.3)
    //$reusable_blocks_settings['eccp_settings_font_size_blockquote_text_field']     = ! empty( $reusable_blocks_settings['eccp_settings_font_size_blockquote_text_field'] ) ? sanitize_text_field( $reusable_blocks_settings['eccp_settings_font_size_blockquote_text_field'] ) : '';
	
	// Sanitize text width blockquote post back office
    $reusable_blocks_settings['eccp_settings_width_blockquote_post_back_office_text_field']     = ! empty( $reusable_blocks_settings['eccp_settings_width_blockquote_post_back_office_text_field'] ) ? sanitize_text_field( $reusable_blocks_settings['eccp_settings_width_blockquote_post_back_office_text_field'] ) : '';
	
	// Sanitize text width blockquote post front end
    $reusable_blocks_settings['eccp_settings_width_blockquote_post_front_end_text_field']     = ! empty( $reusable_blocks_settings['eccp_settings_width_blockquote_post_front_end_text_field'] ) ? sanitize_text_field( $reusable_blocks_settings['eccp_settings_width_blockquote_post_front_end_text_field'] ) : '';
	
	// Sanitize text width blockquote page back office
    $reusable_blocks_settings['eccp_settings_width_blockquote_page_back_office_text_field']     = ! empty( $reusable_blocks_settings['eccp_settings_width_blockquote_page_back_office_text_field'] ) ? sanitize_text_field( $reusable_blocks_settings['eccp_settings_width_blockquote_page_back_office_text_field'] ) : '';
	
	// Sanitize text width blockquote page front end
    $reusable_blocks_settings['eccp_settings_width_blockquote_page_front_end_text_field']     = ! empty( $reusable_blocks_settings['eccp_settings_width_blockquote_page_front_end_text_field'] ) ? sanitize_text_field( $reusable_blocks_settings['eccp_settings_width_blockquote_page_front_end_text_field'] ) : '';
	
	// Sanitize text width blockquote cpt back office
    $reusable_blocks_settings['eccp_settings_width_blockquote_cpt_back_office_text_field']     = ! empty( $reusable_blocks_settings['eccp_settings_width_blockquote_cpt_back_office_text_field'] ) ? sanitize_text_field( $reusable_blocks_settings['eccp_settings_width_blockquote_cpt_back_office_text_field'] ) : '';
	
	// Sanitize text width blockquote cpt front end
    $reusable_blocks_settings['eccp_settings_width_blockquote_cpt_front_end_text_field']     = ! empty( $reusable_blocks_settings['eccp_settings_width_blockquote_cpt_front_end_text_field'] ) ? sanitize_text_field( $reusable_blocks_settings['eccp_settings_width_blockquote_cpt_front_end_text_field'] ) : '';
	
	
	// Sanitize text custom paragraph border color
    $reusable_blocks_settings['eccp_settings_custom_paragraph_border_color_text_field']     = ! empty( $reusable_blocks_settings['eccp_settings_custom_paragraph_border_color_text_field'] ) ? sanitize_text_field( $reusable_blocks_settings['eccp_settings_custom_paragraph_border_color_text_field'] ) : '';
	
	// Sanitize text opacity custom paragraph border color
    $reusable_blocks_settings['eccp_settings_opacity_custom_paragraph_border_color_text_field']     = ! empty( $reusable_blocks_settings['eccp_settings_opacity_custom_paragraph_border_color_text_field'] ) ? sanitize_text_field( $reusable_blocks_settings['eccp_settings_opacity_custom_paragraph_border_color_text_field'] ) : '';
	
	// Sanitize text custom paragraph with  post back office
    $reusable_blocks_settings['eccp_settings_custom_paragraph_width_post_back_office_text_field']     = ! empty( $reusable_blocks_settings['eccp_settings_custom_paragraph_width_post_back_office_text_field'] ) ? sanitize_text_field( $reusable_blocks_settings['eccp_settings_custom_paragraph_width_post_back_office_text_field'] ) : '';
	
	// Sanitize text custom paragraph with post front end
    $reusable_blocks_settings['eccp_settings_custom_paragraph_width_post_front_end_text_field']     = ! empty( $reusable_blocks_settings['eccp_settings_custom_paragraph_width_post_front_end_text_field'] ) ? sanitize_text_field( $reusable_blocks_settings['eccp_settings_custom_paragraph_width_post_front_end_text_field'] ) : '';
	
	// Sanitize text custom paragraph with page back office
    $reusable_blocks_settings['eccp_settings_custom_paragraph_width_page_back_office_text_field']     = ! empty( $reusable_blocks_settings['eccp_settings_custom_paragraph_width_page_back_office_text_field'] ) ? sanitize_text_field( $reusable_blocks_settings['eccp_settings_custom_paragraph_width_page_back_office_text_field'] ) : '';
	
	// Sanitize text custom paragraph with page front end
    $reusable_blocks_settings['eccp_settings_custom_paragraph_width_page_front_end_text_field']     = ! empty( $reusable_blocks_settings['eccp_settings_custom_paragraph_width_page_front_end_text_field'] ) ? sanitize_text_field( $reusable_blocks_settings['eccp_settings_custom_paragraph_width_page_front_end_text_field'] ) : '';
	
	// Sanitize text custom paragraph with cpt back office
    $reusable_blocks_settings['eccp_settings_custom_paragraph_width_cpt_back_office_text_field']     = ! empty( $reusable_blocks_settings['eccp_settings_custom_paragraph_width_cpt_back_office_text_field'] ) ? sanitize_text_field( $reusable_blocks_settings['eccp_settings_custom_paragraph_width_cpt_back_office_text_field'] ) : '';
	
	// Sanitize text custom paragraph with cpt front end
    $reusable_blocks_settings['eccp_settings_custom_paragraph_width_cpt_front_end_text_field']     = ! empty( $reusable_blocks_settings['eccp_settings_custom_paragraph_width_cpt_front_end_text_field'] ) ? sanitize_text_field( $reusable_blocks_settings['eccp_settings_custom_paragraph_width_cpt_front_end_text_field'] ) : '';
	
	
	return $reusable_blocks_settings;
	
}


/* Fonction de nettoyage pour nos valeurs de réglages avant l'entrée en base de données
 $elementor_settings Un tableau de paramètres, 
 avec en index l'ID des champs de réglage déclaré avec la fonction: add_settings_field() )
 */
function eccp_elementor_sanitize( $elementor_settings ){
	
	/*------------------------------------ Sanitize 8ème SECTION:  ELEMENTOR PAGE BUILDER  -------------------------------------*/
	
	// Sanitize Radio activate synchronization color palette
	// sanitize_key:  Nettoie une clé de chaîne.
    $elementor_settings ['eccp_activate_synchronization_color_palette_radio_field'] = sanitize_key( $elementor_settings ['eccp_activate_synchronization_color_palette_radio_field'] ) ;
	
	return $elementor_settings;
	
}


 /* Fonction de nettoyage pour nos valeurs de réglages avant l'entrée en base de données
  $divi_settings Un tableau de paramètres, 
 avec en index l'ID des champs de réglage déclaré avec la fonction: add_settings_field() )
 */
function eccp_divi_sanitize( $divi_settings ){
	
	/*------------------------------------ Sanitize 9ème SECTION:  DIVI COLOR PALETTE  -------------------------------------*/
	
	// Sanitize Radio activate synchronization color palette
	// sanitize_key:  Nettoie une clé de chaîne.
    $divi_settings ['eccp_activate_synchronization_divi_color_palette_radio_field'] = sanitize_key( $divi_settings['eccp_activate_synchronization_divi_color_palette_radio_field'] ) ;
	
	// Sanitize radio choose synchronization
	// sanitize_key:  Nettoie une clé de chaîne.
    $divi_settings ['eccp_choose_synchronization_radio_field'] = sanitize_key( $divi_settings['eccp_choose_synchronization_radio_field'] ) ;
	
	
	return $divi_settings;
	
}


function eccp_custom_back_office_sanitize( $custom_back_office_settings ){
	
	/*------------------------------------ Sanitize 10ème SECTION:  CUSTOM BACK OFFICE  -------------------------------------*/
	
	// Sanitize Checkbox activate post featured image column
    $custom_back_office_settings['eccp_settings_activate_post_featured_image_column_checkbox_field'] = isset( $custom_back_office_settings['eccp_settings_activate_post_featured_image_column_checkbox_field'] ) ;

	// Sanitize Checkbox activate page featured image column
    $custom_back_office_settings['eccp_settings_activate_page_featured_image_column_checkbox_field'] = isset( $custom_back_office_settings['eccp_settings_activate_page_featured_image_column_checkbox_field'] ) ;

	// Sanitize text width thumbnail featured image
 	$custom_back_office_settings['eccp_settings_width_thumbnail_featured_image_text_field'] = ! empty( $custom_back_office_settings['eccp_settings_width_thumbnail_featured_image_text_field'] ) ? sanitize_text_field( $custom_back_office_settings['eccp_settings_width_thumbnail_featured_image_text_field'] ) : '';
	
	// Sanitize Checkbox activate author filter
    $custom_back_office_settings['eccp_settings_activate_author_filter_checkbox_field'] = isset( $custom_back_office_settings['eccp_settings_activate_author_filter_checkbox_field'] ) ;

	// Sanitize Checkbox activate taxonomy filter cpt
    $custom_back_office_settings['eccp_settings_activate_taxonomy_filter_cpt_checkbox_field'] = isset( $custom_back_office_settings['eccp_settings_activate_taxonomy_filter_cpt_checkbox_field'] ) ;

	// Sanitize Checkbox enable post cpt date range filter
    $custom_back_office_settings['eccp_settings_enable_post_cpt_date_range_filter_checkbox_field'] = isset( $custom_back_office_settings['eccp_settings_enable_post_cpt_date_range_filter_checkbox_field'] ) ;

	// Sanitize Checkbox enable post filter publication status
    $custom_back_office_settings['eccp_settings_enable_post_filter_publication_status_checkbox_field'] = isset( $custom_back_office_settings['eccp_settings_enable_post_filter_publication_status_checkbox_field'] ) ;

	// Sanitize Checkbox activate publication status bulk actions posts
    $custom_back_office_settings['eccp_settings_activate_publication_status_bulk_actions_posts_checkbox_field'] = isset( $custom_back_office_settings['eccp_settings_activate_publication_status_bulk_actions_posts_checkbox_field'] ) ;

	
	
	
	// Sanitize Checkbox activate library id dimensions size file column
    $custom_back_office_settings['eccp_settings_activate_library_id_dimensions_size_file_column_checkbox_field'] = isset( $custom_back_office_settings['eccp_settings_activate_library_id_dimensions_size_file_column_checkbox_field'] ) ;

	// Sanitize Checkbox enable filter dates range media library
    $custom_back_office_settings['eccp_settings_enable_filter_dates_range_media_library_checkbox_field'] = isset( $custom_back_office_settings['eccp_settings_enable_filter_dates_range_media_library_checkbox_field'] ) ;

	// Sanitize Checkbox activate mime types media
    $custom_back_office_settings['eccp_settings_activate_mime_types_media_checkbox_field'] = isset( $custom_back_office_settings['eccp_settings_activate_mime_types_media_checkbox_field'] ) ;

	// Sanitize Checkbox image alt text by title
    $custom_back_office_settings['eccp_settings_image_alt_text_by_title_checkbox_field'] = isset( $custom_back_office_settings['eccp_settings_image_alt_text_by_title_checkbox_field'] ) ;

	// Sanitize Checkbox image caption according title
    $custom_back_office_settings['eccp_settings_image_caption_according_title_checkbox_field'] = isset( $custom_back_office_settings['eccp_settings_image_caption_according_title_checkbox_field'] ) ;

	
	
	// Sanitize Checkbox activate users last login column
    $custom_back_office_settings['eccp_settings_activate_users_last_login_column_checkbox_field'] = isset( $custom_back_office_settings['eccp_settings_activate_users_last_login_column_checkbox_field'] ) ;

	// Sanitize Checkbox activate users registration date column
    $custom_back_office_settings['eccp_settings_activate_users_registration_date_column_checkbox_field'] = isset( $custom_back_office_settings['eccp_settings_activate_users_registration_date_column_checkbox_field'] ) ;

	// Sanitize Checkbox allow contributors upload media
    $custom_back_office_settings['eccp_settings_allow_contributors_upload_media_checkbox_field'] = isset( $custom_back_office_settings['eccp_settings_allow_contributors_upload_media_checkbox_field'] ) ;

	
	
	// Sanitize Checkbox disable language selector
    $custom_back_office_settings['eccp_settings_disable_language_selector_checkbox_field'] = isset( $custom_back_office_settings['eccp_settings_disable_language_selector_checkbox_field'] ) ;

	// Sanitize Text Area error login custom message
	// wp_kses_post : Nettoie le contenu des balises HTML autorisées pour le contenu des articles
	$custom_back_office_settings['eccp_error_login_custom_message_textarea_field'] = ! empty( $custom_back_office_settings['eccp_error_login_custom_message_textarea_field'] ) ? wp_kses_post( $custom_back_office_settings['eccp_error_login_custom_message_textarea_field'] ) : '' ;
   
    // Sanitize Checkbox disable admin email request
    $custom_back_office_settings['eccp_settings_disable_admin_email_request_checkbox_field'] = isset( 	$custom_back_office_settings['eccp_settings_disable_admin_email_request_checkbox_field'] ) ;
	
	// Sanitize Checkbox activate custom logo
    $custom_back_office_settings['eccp_settings_activate_custom_logo_checkbox_field'] = isset( 	$custom_back_office_settings['eccp_settings_activate_custom_logo_checkbox_field'] ) ;
	
	// Sanitize text custom logo url
 	$custom_back_office_settings['eccp_settings_custom_logo_url_text_field'] = ! empty( $custom_back_office_settings['eccp_settings_custom_logo_url_text_field'] ) ? sanitize_text_field( $custom_back_office_settings['eccp_settings_custom_logo_url_text_field'] ) : '';
	
	// Sanitize text custom logo width
 	$custom_back_office_settings['eccp_settings_custom_logo_width_text_field'] = ! empty( $custom_back_office_settings['eccp_settings_custom_logo_width_text_field'] ) ? sanitize_text_field( $custom_back_office_settings['eccp_settings_custom_logo_width_text_field'] ) : '';
	
	// Sanitize text custom logo height
 	$custom_back_office_settings['eccp_settings_custom_logo_height_text_field'] = ! empty( $custom_back_office_settings['eccp_settings_custom_logo_height_text_field'] ) ? sanitize_text_field( $custom_back_office_settings['eccp_settings_custom_logo_height_text_field'] ) : '';
	
	// Sanitize Checkbox activate custom login form
    $custom_back_office_settings['eccp_settings_activate_custom_login_form_checkbox_field'] = isset( 	$custom_back_office_settings['eccp_settings_activate_custom_login_form_checkbox_field'] ) ;
	
	// Sanitize Radio activate custom login form
	// sanitize_key:  Nettoie une clé de chaîne.
    $custom_back_office_settings['eccp_settings_activate_custom_login_form_radio_field'] = sanitize_key( $custom_back_office_settings['eccp_settings_activate_custom_login_form_radio_field'] ) ;
	
	// Sanitize text page login form background color
 	$custom_back_office_settings['eccp_settings_page_login_form_background_color_text_field'] = ! empty( $custom_back_office_settings['eccp_settings_page_login_form_background_color_text_field'] ) ? sanitize_text_field( $custom_back_office_settings['eccp_settings_page_login_form_background_color_text_field'] ) : '';
	
	// Sanitize text page login form background color
 	$custom_back_office_settings['eccp_settings_page_login_form_footer_text_color_text_field'] = ! empty( $custom_back_office_settings['eccp_settings_page_login_form_footer_text_color_text_field'] ) ? sanitize_text_field( $custom_back_office_settings['eccp_settings_page_login_form_footer_text_color_text_field'] ) : '';
	
	// Sanitize text login form background color
 	$custom_back_office_settings['eccp_settings_login_form_background_color_text_field'] = ! empty( $custom_back_office_settings['eccp_settings_login_form_background_color_text_field'] ) ? sanitize_text_field( $custom_back_office_settings['eccp_settings_login_form_background_color_text_field'] ) : '';
	
	// Sanitize text login form text color
 	$custom_back_office_settings['eccp_settings_login_form_text_color_text_field'] = ! empty( $custom_back_office_settings['eccp_settings_login_form_text_color_text_field'] ) ? sanitize_text_field( $custom_back_office_settings['eccp_settings_login_form_text_color_text_field'] ) : '';
	
	// Sanitize text button login form background color
 	$custom_back_office_settings['eccp_settings_button_login_form_background_color_text_field'] = ! empty( $custom_back_office_settings['eccp_settings_button_login_form_background_color_text_field'] ) ? sanitize_text_field( $custom_back_office_settings['eccp_settings_button_login_form_background_color_text_field'] ) : '';
	
	// Sanitize text button login form border color
 	$custom_back_office_settings['eccp_settings_button_login_form_border_color_text_field'] = ! empty( $custom_back_office_settings['eccp_settings_button_login_form_border_color_text_field'] ) ? sanitize_text_field( $custom_back_office_settings['eccp_settings_button_login_form_border_color_text_field'] ) : '';
	
	// Sanitize text button login form text color
 	$custom_back_office_settings['eccp_settings_button_login_form_text_color_text_field'] = ! empty( $custom_back_office_settings['eccp_settings_button_login_form_text_color_text_field'] ) ? sanitize_text_field( $custom_back_office_settings['eccp_settings_button_login_form_text_color_text_field'] ) : '';
	
	// Sanitize text hover button login form background color
 	$custom_back_office_settings['eccp_settings_hover_button_login_form_background_color_text_field'] = ! empty( $custom_back_office_settings['eccp_settings_hover_button_login_form_background_color_text_field'] ) ? sanitize_text_field( $custom_back_office_settings['eccp_settings_hover_button_login_form_background_color_text_field'] ) : '';
	
	// Sanitize text hover button login form border color
 	$custom_back_office_settings['eccp_settings_hover_button_login_form_border_color_text_field'] = ! empty( $custom_back_office_settings['eccp_settings_hover_button_login_form_border_color_text_field'] ) ? sanitize_text_field( $custom_back_office_settings['eccp_settings_hover_button_login_form_border_color_text_field'] ) : '';
	
	// Sanitize text hover button login form text color
 	$custom_back_office_settings['eccp_settings_hover_button_login_form_text_color_text_field'] = ! empty( $custom_back_office_settings['eccp_settings_hover_button_login_form_text_color_text_field'] ) ? sanitize_text_field( $custom_back_office_settings['eccp_settings_hover_button_login_form_text_color_text_field'] ) : '';
	
	// Sanitize text info notice login form background color
 	$custom_back_office_settings['eccp_settings_info_notice_login_form_background_color_text_field'] = ! empty( $custom_back_office_settings['eccp_settings_info_notice_login_form_background_color_text_field'] ) ? sanitize_text_field( $custom_back_office_settings['eccp_settings_info_notice_login_form_background_color_text_field'] ) : '';
	
	// Sanitize text info notice login form background color
 	$custom_back_office_settings['eccp_settings_info_notice_login_form_border_color_text_field'] = ! empty( $custom_back_office_settings['eccp_settings_info_notice_login_form_border_color_text_field'] ) ? sanitize_text_field( $custom_back_office_settings['eccp_settings_info_notice_login_form_border_color_text_field'] ) : '';
	
	// Sanitize text info notice login form text color
 	$custom_back_office_settings['eccp_settings_info_notice_login_form_text_color_text_field'] = ! empty( $custom_back_office_settings['eccp_settings_info_notice_login_form_text_color_text_field'] ) ? sanitize_text_field( $custom_back_office_settings['eccp_settings_info_notice_login_form_text_color_text_field'] ) : '';
	
	// Sanitize text error notice login form background color
 	$custom_back_office_settings['eccp_settings_error_notice_login_form_background_color_text_field'] = ! empty( $custom_back_office_settings['eccp_settings_error_notice_login_form_background_color_text_field'] ) ? sanitize_text_field( $custom_back_office_settings['eccp_settings_error_notice_login_form_background_color_text_field'] ) : '';
	
	// Sanitize text error notice login form border color
 	$custom_back_office_settings['eccp_settings_error_notice_login_form_border_color_text_field'] = ! empty( $custom_back_office_settings['eccp_settings_error_notice_login_form_border_color_text_field'] ) ? sanitize_text_field( $custom_back_office_settings['eccp_settings_error_notice_login_form_border_color_text_field'] ) : '';
	
	// Sanitize text error notice login form text color
 	$custom_back_office_settings['eccp_settings_error_notice_login_form_text_color_text_field'] = ! empty( $custom_back_office_settings['eccp_settings_error_notice_login_form_text_color_text_field'] ) ? sanitize_text_field( $custom_back_office_settings['eccp_settings_error_notice_login_form_text_color_text_field'] ) : '';
	
	// Sanitize Radio activate image background login page
	// sanitize_key:  Nettoie une clé de chaîne.
    $custom_back_office_settings['eccp_settings_activate_image_background_login_page_radio_field'] = sanitize_key( $custom_back_office_settings['eccp_settings_activate_image_background_login_page_radio_field'] ) ;
	
	// Sanitize text custom image background url
 	$custom_back_office_settings['eccp_settings_custom_image_background_url_text_field'] = ! empty( $custom_back_office_settings['eccp_settings_custom_image_background_url_text_field'] ) ? sanitize_text_field( $custom_back_office_settings['eccp_settings_custom_image_background_url_text_field'] ) : '';
	
	// Sanitize Checkbox enable login page fixed background image
    $custom_back_office_settings['eccp_settings_enable_login_page_fixed_background_image_checkbox_field'] = isset( 	$custom_back_office_settings['eccp_settings_enable_login_page_fixed_background_image_checkbox_field'] ) ;
	
	// Sanitize Checkbox enable login page fixed background image
    $custom_back_office_settings['eccp_settings_enable_redirect_after_login_checkbox_field'] = isset( 	$custom_back_office_settings['eccp_settings_enable_redirect_after_login_checkbox_field'] ) ;
	
	
	
	
	// Sanitize Checkbox enable change email sender default 
    $custom_back_office_settings['eccp_settings_enable_change_email_sender_default_checkbox_field'] = isset( 	$custom_back_office_settings['eccp_settings_enable_change_email_sender_default_checkbox_field'] ) ;
	
	// Sanitize text email sender address
 	$custom_back_office_settings['eccp_settings_email_sender_address_text_field'] = ! empty( $custom_back_office_settings['eccp_settings_email_sender_address_text_field'] ) ? sanitize_text_field( $custom_back_office_settings['eccp_settings_email_sender_address_text_field'] ) : '';
	
	// Sanitize text email sender name
 	$custom_back_office_settings['eccp_settings_email_sender_name_text_field'] = ! empty( $custom_back_office_settings['eccp_settings_email_sender_name_text_field'] ) ? sanitize_text_field( $custom_back_office_settings['eccp_settings_email_sender_name_text_field'] ) : '';
	
	// Sanitize Checkbox enable return adress correspond from adress 
    $custom_back_office_settings['eccp_settings_enable_return_adress_correspond_from_adress_checkbox_field'] = isset( 	$custom_back_office_settings['eccp_settings_enable_return_adress_correspond_from_adress_checkbox_field'] ) ;
	
	
	
	
	
	// Sanitize Checkbox disable default wordpress sitemap
    $custom_back_office_settings['eccp_settings_disable_default_wordpress_sitemap_checkbox_field'] = isset( 	$custom_back_office_settings['eccp_settings_disable_default_wordpress_sitemap_checkbox_field'] ) ;
	
	// Sanitize Checkbox activate local site admin login logout link
    $custom_back_office_settings['eccp_settings_activate_local_site_admin_login_loginout_link_checkbox_field'] = isset( 	$custom_back_office_settings['eccp_settings_activate_local_site_admin_login_loginout_link_checkbox_field'] ) ;
	
	// Sanitize Checkbox activate online site admin login logout link
    $custom_back_office_settings['eccp_settings_activate_online_site_admin_login_loginout_link_checkbox_field'] = isset( 	$custom_back_office_settings['eccp_settings_activate_online_site_admin_login_loginout_link_checkbox_field'] ) ;
	
	// Sanitize text slug admin login url
 	$custom_back_office_settings['eccp_settings_slug_admin_login_url_text_field'] = ! empty( $custom_back_office_settings['eccp_settings_slug_admin_login_url_text_field'] ) ? sanitize_text_field( $custom_back_office_settings['eccp_settings_slug_admin_login_url_text_field'] ) : '';
	
	
	
	return $custom_back_office_settings;
	
}


function eccp_custom_front_end_sanitize( $custom_front_end_settings ){
	
	/*------------------------------------ Sanitize 11ème SECTION:  CUSTOM FRONT END  -------------------------------------*/

	// Sanitize Checkbox enable back to top button
    $custom_front_end_settings['eccp_settings_enable_back_to_top_button_checkbox_field'] = isset( $custom_front_end_settings['eccp_settings_enable_back_to_top_button_checkbox_field'] ) ;
	
	// Sanitize text margin x
 	$custom_front_end_settings ['eccp_settings_margin_x_text_field'] = ! empty( $custom_front_end_settings ['eccp_settings_margin_x_text_field'] ) ? sanitize_text_field( $custom_front_end_settings ['eccp_settings_margin_x_text_field'] ) : 0;
	
	// Sanitize text margin y
 	$custom_front_end_settings ['eccp_settings_margin_y_text_field'] = ! empty( $custom_front_end_settings ['eccp_settings_margin_y_text_field'] ) ? sanitize_text_field( $custom_front_end_settings ['eccp_settings_margin_y_text_field'] ) : 0;
	
	// Sanitize text button opacity
 	$custom_front_end_settings ['eccp_settings_back_top_button_opacity_text_field'] = ! empty( $custom_front_end_settings ['eccp_settings_back_top_button_opacity_text_field'] ) ? sanitize_text_field( $custom_front_end_settings ['eccp_settings_back_top_button_opacity_text_field'] ) : 0;
	
	// Sanitize text button opacity on hover
 	$custom_front_end_settings ['eccp_settings_back_top_button_opacity_on_hover_text_field'] = ! empty( $custom_front_end_settings ['eccp_settings_back_top_button_opacity_on_hover_text_field'] ) ? sanitize_text_field( $custom_front_end_settings ['eccp_settings_back_top_button_opacity_on_hover_text_field'] ) : 0;
	
	// Sanitize text back top button color
 	$custom_front_end_settings['eccp_settings_back_top_button_color_text_field'] = ! empty( $custom_front_end_settings['eccp_settings_back_top_button_color_text_field'] ) ? sanitize_text_field( $custom_front_end_settings['eccp_settings_back_top_button_color_text_field'] ) : '';
	
	// Sanitize text color icon back to top button 
 	$custom_front_end_settings['eccp_settings_color_icon_back_to_top_button_text_field'] = ! empty( $custom_front_end_settings['eccp_settings_color_icon_back_to_top_button_text_field'] ) ? sanitize_text_field( $custom_front_end_settings['eccp_settings_color_icon_back_to_top_button_text_field'] ) : '';
	
	// Sanitize text back to top button border radius
 	$custom_front_end_settings['eccp_settings_back_to_top_button_border_radius_text_field'] = ! empty( $custom_front_end_settings['eccp_settings_back_to_top_button_border_radius_text_field'] ) ? sanitize_text_field( $custom_front_end_settings['eccp_settings_back_to_top_button_border_radius_text_field'] ) : 0;
	
	
	// Sanitize Checkbox enable info box author
    $custom_front_end_settings['eccp_settings_enable_author_info_box_checkbox_field'] = isset( $custom_front_end_settings['eccp_settings_enable_author_info_box_checkbox_field'] ) ;
	
	// Sanitize text back to top button border radius
 	$custom_front_end_settings['eccp_settings_border_radius_avatar_author_info_box_text_field'] = ! empty( $custom_front_end_settings['eccp_settings_border_radius_avatar_author_info_box_text_field'] ) ? sanitize_text_field( $custom_front_end_settings['eccp_settings_border_radius_avatar_author_info_box_text_field'] ) : 0;
	
	// Sanitize text title author info box
 	$custom_front_end_settings['eccp_settings_title_author_info_box_text_field'] = ! empty( $custom_front_end_settings['eccp_settings_title_author_info_box_text_field'] ) ? sanitize_text_field( $custom_front_end_settings['eccp_settings_title_author_info_box_text_field'] ) : '';
	
	// Sanitize text text author info box
 	$custom_front_end_settings['eccp_settings_text_author_info_box_text_field'] = ! empty( $custom_front_end_settings['eccp_settings_text_author_info_box_text_field'] ) ? sanitize_text_field( $custom_front_end_settings['eccp_settings_text_author_info_box_text_field'] ) : '';
	
	// Sanitize text link author info box
 	$custom_front_end_settings['eccp_settings_link_author_info_box_text_field'] = ! empty( $custom_front_end_settings['eccp_settings_link_author_info_box_text_field'] ) ? sanitize_text_field( $custom_front_end_settings['eccp_settings_link_author_info_box_text_field'] ) : '';
	
	// Sanitize text background author info box
 	$custom_front_end_settings['eccp_settings_background_author_info_box_text_field'] = ! empty( $custom_front_end_settings['eccp_settings_background_author_info_box_text_field'] ) ? sanitize_text_field( $custom_front_end_settings['eccp_settings_background_author_info_box_text_field'] ) : '';
	
	// Sanitize Checkbox delete comment form field url
    $custom_front_end_settings['eccp_settings_delete_comment_form_field_url_checkbox_field'] = isset( $custom_front_end_settings['eccp_settings_delete_comment_form_field_url_checkbox_field'] ) ;
	
	// Sanitize Checkbox move comment field from comment form
    $custom_front_end_settings['eccp_settings_move_comment_field_from_comment_form_checkbox_field'] = isset( $custom_front_end_settings['eccp_settings_move_comment_field_from_comment_form_checkbox_field'] ) ;
	
	// Sanitize Text Area message before comment form
	// wp_kses_post : Nettoie le contenu des balises HTML autorisées pour le contenu des articles
	$custom_front_end_settings['eccp_settings_message_before_comment_form_textarea_field'] = ! empty( $custom_front_end_settings['eccp_settings_message_before_comment_form_textarea_field'] ) ? wp_kses_post( $custom_front_end_settings['eccp_settings_message_before_comment_form_textarea_field'] ) : '' ;
	
	// Sanitize Text Area message after comment form
	$custom_front_end_settings['eccp_settings_message_after_comment_form_textarea_field'] = ! empty( $custom_front_end_settings['eccp_settings_message_after_comment_form_textarea_field'] ) ? wp_kses_post( $custom_front_end_settings['eccp_settings_message_after_comment_form_textarea_field'] ) : '' ;
	
	// Sanitize Checkbox ecenter comment form submit button
    $custom_front_end_settings['eccp_settings_center_comment_form_submit_button_checkbox_field'] = isset( $custom_front_end_settings['eccp_settings_center_comment_form_submit_button_checkbox_field'] ) ;
	

	
	// Sanitize Checkbox enable lightbox
    $custom_front_end_settings['eccp_settings_enable_lightbox_checkbox_field'] = isset( $custom_front_end_settings['eccp_settings_enable_lightbox_checkbox_field'] ) ;
	
	
	return $custom_front_end_settings;

}