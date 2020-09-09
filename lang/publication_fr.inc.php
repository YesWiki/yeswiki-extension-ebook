<?php

/**
* Fichier de traduction en francais de l'extension wkhtmltopdf
*
* @license		GNU GPL 2
* @package 		publication
* @author       Florian Schmitt <florian@outils-reseaux.org>
* @copyright 	Outils-R�seaux
*
*/

$GLOBALS['translations'] = array_merge(
	$GLOBALS['translations'], array(
		'PUBLICATION_ADD_ALL' => 'Ajouter tout',
		'PUBLICATION_AVAILABLE_PAGES' => 'Pages disponibles',
               'PUBLICATION_BLANK_PAGE' => 'Page blanche',
		'PUBLICATION_CONTENT_VISIBLE_ONLINE_FROM_PAGE' => 'Contenu en ligne sur la page',
		'PUBLICATION_DELETE' => 'Supprimer',
		'PUBLICATION_DELETE_PAGE' => 'Enlever la page',
		'PUBLICATION_DOWNLOAD' => 'Télécharger',
		'PUBLICATION_DOWNLOAD_PDF' => 'PDF',
		'PUBLICATION_EBOOK' => 'Ebook',
		'PUBLICATION_EBOOK_AUTHOR' => 'Pr&eacute;nom puis nom de l\'auteur',
		'PUBLICATION_EBOOK_COVER_IMAGE' => 'Lien vers l\'image de couverture de l\'ouvrage',
		'PUBLICATION_EBOOK_COVER_PAGE' => 'Généreration automatique de la page de couverture',
		'PUBLICATION_EBOOK_COVER_PAGE_HELP' => 'Elle réutilisera les informations mentionnées ci-dessus.',
		'PUBLICATION_EBOOK_DESC' => 'Description',
		'PUBLICATION_EBOOK_DISPLAY_PRINT_MARKS' => 'Affiche les marques de découpe',
		'PUBLICATION_EBOOK_DISPLAY_PRINT_MARKS_HELP' => 'Pratique si vous travaillez avec un·e imprimeur·se.',
    'PUBLICATION_EBOOK_FOLD' => 'Ajout de marges intérieures',
    'PUBLICATION_EBOOK_FOLD_HELP' => 'Pratique pour relier le document imprimé.',
    'PUBLICATION_EBOOK_FORMAT' => 'Format de page',
		'PUBLICATION_EBOOK_ORIENTATION' => 'Orientation de page',
		'PUBLICATION_EBOOK_ORIENTATION_LANDSCAPE' => 'Paysage',
		'PUBLICATION_EBOOK_ORIENTATION_PORTRAIT' => 'Portrait',
		'PUBLICATION_EBOOK_PAGE_CREATED' => 'La page de l\'Ebook a &eacute;t&eacute; cr&eacute;&eacute;e avec succ&egrave;s',
		'PUBLICATION_EBOOK_PAGE_CREATION_FAILED' => 'La création de la page de l\'Ebook n\'a pas abouti pour une raison technique. Peut-être un bug, peut-être que vous ne disposez pas de permissions d\'écriture&nbsp;?',
		'PUBLICATION_EBOOK_PRINT_MARKS' => 'Marques de découpe',
		'PUBLICATION_EBOOK_TITLE' => 'Titre de l\'ouvrage',
		'PUBLICATION_END_PAGE' => 'Page de fin',
		'PUBLICATION_EXAMPLE_AUTHOR' => 'Ex: Victor Hugo',
		'PUBLICATION_EXPORT_PAGES_INFO' => 'S&eacute;lectionnez vos pages pour l\'Ebook en cliquant sur ',
		'PUBLICATION_FILTER_PAGES' => 'Filtrer les pages',
		'PUBLICATION_FOR_THE_EBOOK' => 'pour l&apos;Ebook',
		'PUBLICATION_FROM_THE_EBOOK' => 'de l&apos;Ebook',
		'PUBLICATION_GENERATE' => 'Générer',
		'PUBLICATION_GOTO_EBOOK_PAGE' => 'Aller voir la page : ',
		'PUBLICATION_GOTO_EBOOK_CREATION_PAGE' => 'Retourner à la page de création d\'Ebook : ',
		'PUBLICATION_INSERT_BLANK_PAGE' => 'Insérer une page blanche',
		'PUBLICATION_MANDATORY_FIELD' => 'Champ obligatoire',
		'PUBLICATION_MISSING_NEWSLETTER_FORM' => 'Vous devez préciser un id de formulaire pour produire une newsletter (reportez-vous au fichier readme.md).',
		'PUBLICATION_MORE_OPTIONS' => 'Autres options de personnalisation',
		'PUBLICATION_NEWSLETTER' => 'Newsletter',
		'PUBLICATION_NEWSLETTER_CREATED' => 'La newsletter a bien été créée',
		'PUBLICATION_NO_AUTHOR_FOUND' => 'ERREUR : L\'auteur n\'a pas &eacute;t&eacute; renseign&eacute;.',
		'PUBLICATION_NO_DESC_FOUND' => 'ERREUR : La description n\'a pas &eacute;t&eacute; renseign&eacute;.',
		'PUBLICATION_NO_EBOOK_FOUND' => 'Pas d\'ebook trouv&eacute;.',
		'PUBLICATION_NO_IMAGE_FOUND' => 'ERREUR : Le lien vers l\'image de couverture n\'a pas &eacute;t&eacute; renseign&eacute;.',
		'PUBLICATION_NO_TITLE_FOUND' => 'ERREUR : Le titre n\'a pas &eacute;t&eacute; renseign&eacute;.',
		'PUBLICATION_NOT_IMAGE_FILE' => 'ERREUR : Le lien vers l\'image de couverture n\'est pas une image avec l\'extension .jpg.',
		'PUBLICATION_ORDER_PAGES_INFO' => 'D&eacute;placez les pages pour les mettre dans l\'ordre qui vous convient.',
		'PUBLICATION_PAGINATION_POSITION' => 'Emplacement de la numérotation des pages',
		'PUBLICATION_PAGINATION_BOTTOM_CENTER' => 'En bas, au centre',
		'PUBLICATION_PAGINATION_BOTTOM_SIDES' => 'En bas, sur les côtés',
		'PUBLICATION_PAGINATION_NONE' => 'Aucun',
		'PUBLICATION_PREVIEW' => 'Aperçu',
		'PUBLICATION_SEE_NEWSLETTER' => 'Voir la newsletter',
		'PUBLICATION_SEE_PAGE' => 'Voir la page',
		'PUBLICATION_SELECT_PAGE' => 'S&eacute;lectionner la page',
		'PUBLICATION_SPAM_RISK' => 'Il faut activer javascript pour ne pas &ecirc;tre consid&eacute;r&eacute; comme du spam.',
		'PUBLICATION_START_PAGE' => 'Page d\'introduction',
		'PUBLICATION_YOUR' => 'Votre',
		'PUBLICATION_EXPORT_PAGE_TO_PDF' => 'Exporter la page au format pdf',
		'PUBLICATION_NO_GENERATED_PDF_FILE_FOUND' => 'Le fichier pdf g&eacute;n&eacute;r&eacute; n\'a pas &eacute;t&eacute; trouv&eacute;.<br />V&eacute;rifier les permissions en &eacute;criture sur le dossier "cache" ou les permissions en droit d\'&eacute;x&eacute;cution du programme chromium.',
		'PUBLICATION_NO_EXECUTABLE_FILE_FOUND_ON_PATH' => 'Pas de fichier exécutable trouvé pour',
		'PUBLICATION_DID_YOU_INSTALL_CHROMIUM_OR_SET_UP_PATH' => 'Avez vous installé Chromium sur votre serveur, ou configuré le chemin vers le programme ou le service (paramètres "htmltopdf_path" ou "htmltopdf_service_url" dans le fichier de configuration) ?',
		 )
);
