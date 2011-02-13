<?php

$LANG = array(

# class.plx.admin.php

'L_SAVE_SUCCESSFUL'					=> 'Настройки сохранены',
'L_SAVE_ERR'						=> 'Ошибка во время сохранения данных',
'L_NO_ENTRY'						=> 'Нет записей',
'L_ERR_USER_EMPTY'					=> 'Введите имя пользователя',
'L_ERR_PASSWORD_EMPTY'				=> 'Введите пароль',
'L_ERR_PASSWORD_EMPTY_CONFIRMATION'	=> 'Неверный или отсутствующий пароль',
'L_ERR_INVALID_EMAIL'				=> 'Не верный email адрес',
'L_ERR_INVALID_SITE'				=> 'Неправильный url сайта',
'L_ERR_INVALID_ARTICLE_IDENT'		=> 'Неправильный id статьи !',
'L_DEFAULT_NEW_CATEGORY_URL'		=> 'new-category',
'L_DEFAULT_NEW_STATIC_URL'			=> 'new-page',
'L_DEFAULT_NEW_ARTICLE_URL'			=> 'new-article',
'L_ARTICLE_SAVE_SUCCESSFUL'			=> 'Пост был успешно создан',
'L_ARTICLE_MODIFY_SUCCESSFUL'		=> 'Статья была успешно обновлена',
'L_ARTICLE_DELETE_SUCCESSFUL'		=> 'Статья удалена',
'L_ARTICLE_SAVE_ERR'				=> 'Статью не удалось сохранить',
'L_ARTICLE_DELETE_ERR'				=> 'Возникла ошибка: статью не удалось удалить',
'L_ERR_UNKNOWN_COMMENT'				=> 'Выбранный комментарий больше не существует', # used in commentaire.php
'L_COMMENT_SAVE_SUCCESSFUL'			=> 'Комментарий успешно сохранён',
'L_COMMENT_UPDATE_ERR'				=> 'Ошибка во время обновления комментария',
'L_COMMENT_DELETE_SUCCESSFUL'		=> 'Комментарий был успешно удалён',
'L_COMMENT_DELETE_ERR'				=> 'Ошибка во время удаления комментария',
'L_COMMENT_VALIDATE_SUCCESSFUL'		=> 'Комментарийбыл успешно проверен',
'L_COMMENT_VALIDATE_ERR'			=> 'Возникла ошибка вовремя проверки',
'L_COMMENT_MODERATE_SUCCESSFUL'		=> 'Успешно отмодерировано',
'L_COMMENT_MODERATE_ERR'			=> 'Возникла ошибка во время модерации',

# class.plx.media.php
'L_PLXMEDIAS_MEDIAS_FOLDER_ERR'		=> 'Coul\'t create the media folder for connected user',
'L_PLXMEDIAS_MOVE_FOLDER'			=> 'Move',
'L_PLXMEDIAS_ROOT'					=> 'root',
'L_PLXMEDIAS_NEW_FOLDER_ERR'		=> 'Could\'t create folder',
'L_PLXMEDIAS_NEW_FOLDER_SUCCESSFUL'	=> 'Folder succesfully created',
'L_PLXMEDIAS_NEW_FOLDER_EXISTS'		=> 'This folder already exists',
'L_PLXMEDIAS_DEL_FOLDER_ERR'		=> 'Error during the folder deletion',
'L_PLXMEDIAS_DEL_FOLDER_SUCCESSFUL'	=> 'Folder sucessfully deleted',
'L_PLXMEDIAS_DEL_FILE_ERR'			=> 'Could\'t delete file',
'L_PLXMEDIAS_DEL_FILE_SUCCESSFUL'	=> 'File sucessfully deleted',
'L_PLXMEDIAS_MOVE_FILES_SUCCESSFUL'	=> 'Files sucessfully moved',
'L_PLXMEDIAS_MOVE_FILE_SUCCESSFUL'	=> 'File sucessfully moved',
'L_PLXMEDIAS_MOVE_FILES_ERR'		=> 'An error occured while moving the files',
'L_PLXMEDIAS_MOVE_FILE_ERR'			=> 'An error occured while moving the file',
'L_PLXMEDIAS_WRONG_FILES_FORMAT'	=> 'Please check the file format: gif, jpg and png only',
'L_PLXMEDIAS_AUTHORIZED_FILES_FORMAT'=> 'Forbidden file type',
'L_PLXMEDIAS_WRONG_FILES_SIZE'		=> 'A file\'s size is bigger than',
'L_PLXMEDIAS_UPLOAD_ERR'			=> 'Could\'nt send the files (writing problem in the folder)',
'L_PLXMEDIAS_FILES_UPLOAD_SUCCESSFUL'=> 'Files sucessfully sent',
'L_PLXMEDIAS_FILE_UPLOAD_SUCCESSFUL' => 'File sucessfully sent',
'L_PLXMEDIAS_DO_THUMBS_SUCCESSFUL'	=> 'Thumbnails sucessfully re-created',
'L_PLXMEDIAS_DO_THUMBS_ERR'			=> 'An error occured during the thumbnails\' generation',
'L_PLXMEDIAS_DO_THUMB_SUCCESSFUL'	=> 'Thumbnail succesfully re-created',
'L_PLXMEDIAS_DO_THUMB_ERR'			=> 'An error occured during the thumbnail generation',
'L_PLXMEDIAS_NO_THUMB'				=> 'No thumbnail created',
'L_PLXMEDIAS_PATH_ERR'				=> 'Invalid path',

# article.php

'L_DEFAULT_NEW_ARTICLE_TITLE'		=> 'Новая статья',
'L_ERR_INVALID_PUBLISHING_DATE'		=> 'Неверная дата публикации.',
'L_ERR_UNKNOWN_ARTICLE'				=> 'Статья не найдена, или не существует!',
'L_ERR_FORBIDDEN_ARTICLE'			=> 'У вас нет соотвествующих прав для доступа к данной статье !',
'L_BACK_TO_ARTICLES'				=> 'Назад к списку',
'L_ARTICLE_EDITING'					=> 'Редактирование статьи',
'L_ARTICLE_PREVIEW'					=> 'Предпросмотр', # used in article.php and fullscreen.php
'L_ARTICLE_TITLE'					=> 'Название',
'L_ARTICLE_LIST_AUTHORS'			=> 'Автор',
'L_HEADLINE_FIELD'					=> 'Заголовок (опционально)', # used in article.php and fullscreen.php
'L_CONTENT_FIELD'					=> 'Содержимое', # used in article.php, parametres_edittpl.php, statique.php and fullscreen.php
'L_ARTICLE_STATUS'					=> 'Статус',
'L_DRAFT' 							=> 'Черновик',
'L_PUBLISHED' 						=> 'Опубликовано',
'L_ARTICLE_DATE' 					=> 'Дата',
'L_NOW'								=> 'сейчас',
'L_ARTICLE_CATEGORIES' 				=> 'Разделы',
'L_CATEGORY_HOME_PAGE' 			 	=> 'Домашняя страница',
'L_NEW_CATEGORY' 			 		=> 'Новый раздел',
'L_ARTICLE_TAGS_FIELD' 				=> 'Теги',
'L_ARTICLE_TAGS_FIELD_TITLE' 		=> 'Разделите теги запятыми',
'L_ARTICLE_TOGGLER_TITLE' 			=> 'Список тегов',
'L_NO_TAG' 							=> 'Нет тега',
'L_ALLOW_COMMENTS' 					=> 'Разрешить комментарии',
'L_ARTICLE_URL_FIELD' 				=> 'Url',
'L_ARTICLE_URL_FIELD_TITLE' 		=> 'Поле URL автоматически заполнится во время создания статьи',
'L_ARTICLE_TEMPLATE_FIELD' 			=> 'Шаблон',
'L_ARTICLE_MANAGE_COMMENTS'			=> 'Управляь комментариями',
'L_ARTICLE_MANAGE_COMMENTS_TITLE'	=> 'Управлять комментариями к этой статье',
'L_ARTICLE_NEW_COMMENT'				=> 'Написать комментарий',
'L_ARTICLE_NEW_COMMENT_TITLE'		=> 'Написать комментарий к этой статье',
'L_ARTICLE_DELETE_CONFIRM'			=> 'Удалить эту статью ?',
'L_ARTICLE_PREVIEW_BUTTON'			=> 'Предпросмотр', # used in article.php and fullscreen.php
'L_ARTICLE_DRAFT_BUTTON' 			=> 'В черновик',
'L_ARTICLE_PUBLISHING_BUTTON'		=> 'Опубликовать',
'L_ARTICLE_OFFLINE_BUTTON'			=> 'На доработку',
'L_ARTICLE_UPDATE_BUTTON' 			=> 'Сохранить',
'L_CATEGORY_ADD_BUTTON'				=> "Добавить",
'L_ARTICLE_META_DESCRIPTION'		=> '"Описание" мета теги (опционально)',
'L_ARTICLE_META_KEYWORDS'			=> '"Ключевые слова" мета теги (опционально)',

# auth.php

'L_AUTH_PAGE_TITLE'					=> 'Страница Авторизации',
'L_LOGOUT_SUCCESSFUL'				=> 'Сеанс Завершен',
'L_LOGIN_PAGE'						=> 'Login to administration',
'L_AUTH_LOGIN_FIELD'				=> 'Логин',
'L_AUTH_PASSWORD_FIELD'				=> 'Пароль',
'L_SUBMIT_BUTTON'					=> 'Войти',
'L_ERR_WRONG_PASSWORD' 				=> 'Не верный логин или пароль',

# categories.php

'L_CAT_SORT_DESCENDANT' 			=> 'Descendant',
'L_CAT_SORT_ASCENDANT'				=> 'Ascendant',
'L_CAT_TITLE'						=> 'Category Manager',
'L_CAT_LIST_ID' 					=> 'ID',
'L_CAT_LIST_NAME' 					=> 'Category name',
'L_CAT_LIST_URL' 					=> 'Url',
'L_CAT_LIST_SORT' 					=> 'Article sorting',
'L_CAT_LIST_BYPAGE'					=> 'Nb art/page',
'L_CAT_LIST_ORDER' 					=> 'Rank',
'L_CAT_LIST_MENU' 					=> 'Menu',
'L_CATEGORY'						=> 'Category',
'L_DISPLAY'							=> 'Display',# used in categories.php and statiques.php
'L_HIDE'							=> 'Hide',# used in categories.php and statiques.php
'L_OPTIONS'							=> 'Options',# used in categories.php, parametres_users.php and statiques.php
'L_CAT_TEMPLATE_FIELD'				=> 'Template',
'L_NEW_CATEGORY' 					=> 'New category',
'L_YES' 							=> 'Yes', # used in categories.php, statiques.php and article.php
'L_NO' 								=> 'No', # used in categories.php, statiques.php and article.php
'L_FOR_SELECTION' 					=> 'For selection...', # used in categories.php, parametres_users.php and statiques.php
'L_DELETE' 						    => 'Delete', # used in article.php, categories.php, medias.php, parametres_users.php and statiques.php
'L_OK'								=> 'Ok', # used in categories.php, parametres_users.php and statiques.php
'L_CAT_APPLY_BUTTON'				=> 'Change categories list',
'L_CAT_UNKNOWN'						=> 'Unknown category',

# categorie.php

'L_EDITCAT_PAGE_TITLE'				=> 'Edit category options',
'L_EDITCAT_DESCRIPTION'				=> 'Description',
'L_EDITCAT_TEMPLATE'				=> 'Template',
'L_EDITCAT_BACK_TO_PAGE'			=> 'Back to categories',
'L_EDITCAT_UPDATE'					=> 'Update this category',
'L_EDITCAT_META_DESCRIPTION'		=> '"Description" Meta tag content  (optional)',
'L_EDITCAT_META_KEYWORDS'			=> '"Keywords" Meta tag content  (optional)',

# commentaire.php

'L_COMMENT_ORPHAN' 					=> 'no article',
'L_COMMENT_ORPHAN_STATUS' 			=> 'not displayed (we advise you to delete this comment',
'L_COMMENT_ARTICLE_LINKED'			=> 'Article', # used in commentaire.php and commentaire_new.php
'L_COMMENT_ARTICLE_LINKED_TITLE'	=> 'Article linked to this comment', # used in commentaire.php and commentaire_new.php
'L_COMMENT_OFFLINE' 				=> 'offline',
'L_COMMENT_ONLINE'					=> 'online',
'L_COMMENT_ONLINE_TITLE'			=> 'See this comment online', # used in commentaires_online.php et commentaire.php
'L_BACK_TO_ARTICLE_COMMENTS'		=> 'Back to this article\'s comments', # used in commentaire.php and commentaire_new.php
'L_BACK_TO_COMMENTS'        		=> 'Back to comments', # used in commentaire.php and commentaire_new.php
'L_COMMENT_EDITING' 				=> 'Comment edit',
'L_COMMENT_AUTHOR_FIELD'			=> 'Author', # used in commentaire.php and commentaire_new.php
'L_COMMENT_TYPE_FIELD'				=> 'Comment type', # used in commentaire.php and commentaire_new.php
'L_COMMENT_DATE_FIELD'				=> 'Date',
'L_COMMENT_IP_FIELD'				=> 'Ip',
'L_COMMENT_SITE_FIELD'				=> 'Site', # used in commentaire.php and commentaire_new.php
'L_COMMENT_EMAIL_FIELD'				=> 'E-mail',
'L_COMMENT_STATUS_FIELD'			=> 'Status',
'L_COMMENT_LINKED_ARTICLE_FIELD'	=> 'Linked article', # used in commentaire.php and commentaire_new.php
'L_COMMENT_ARTICLE_FIELD'			=> 'Comments',
'L_COMMENT_DELETE_CONFIRM'			=> 'Delete this comment ?',
'L_COMMENT_PUBLISH_BUTTON'			=> 'Confirm publication',
'L_COMMENT_OFFLINE_BUTTON'			=> 'Switch offline',
'L_COMMENT_ANSWER_BUTTON'			=> 'Answer this comment',
'L_COMMENT_UPDATE_BUTTON'			=> 'Update',

# sous_navigation/commentaires.php

'L_COMMENT_NEW_COMMENT_TITLE'		=> 'Написать новый комментарий для этой статьи',
'L_COMMENT_NEW_COMMENT'				=> 'Написать новый комментарий',

# commentaire_new.php

'L_ERR_ANSWER_UNKNOWN_COMMENT'		=> 'The comment you are trying to answer no longer exists !',
'L_ERR_ANSWER_OFFLINE_COMMENT'		=> 'Comment is offline, you can\'t answer it !',
'L_ERR_COMMENT_UNKNOWN_ARTICLE'		=> 'The article doesn\'t exist or no longer exists, you can\'t comment it !',
'L_ERR_CREATING_COMMENT'			=> 'An error occured while creating the comment',
'L_CREATING_COMMENT_SUCCESSFUL'		=> 'Comment succesfully created',
'L_CREATE_NEW_COMMENT'				=> 'Write a comment (article', /* Utiliser un printf ? */
'L_COMMENT_SAVE_BUTTON' 			=> 'Сохранить',
'L_ARTICLE_COMMENTS_LIST'			=> 'Comments for this article (from most recent to the oldest)',
'L_COMMENT_ANSWER_TITLE' 			=> 'Answer this comment',
'L_COMMENT_ANSWER'					=> 'Answer',

# commentaires_offline.php

'L_COMMENTS_ARTICLE_SCOPE' 			=> 'статья',
'L_COMMENTS_GLOBAL_SCOPE'			=> 'весь сайт',
'L_COMMENTS_OFFLINE_LIST'			=> 'Комментарии ожидающие модерации',
'L_COMMENTS_LIST_DATE'				=> 'Дата',
'L_COMMENTS_LIST_AUTHOR'			=> 'Автор',
'L_COMMENTS_LIST_MESSAGE'			=> 'Сообщение',
'L_COMMENTS_LIST_ACTION'			=> 'Действие',
'L_COMMENT_EDIT'					=> 'Редактировать', # used in commentaire_offline.php, commentaires_new.php and commentaire_online.php
'L_COMMENT_EDIT_TITLE'				=> 'Редактировать этот комментарий', # used in commentaire_offline.php, commentaires_new.php and commentaire_online.php
'L_COMMENT_DELETE'					=> 'Удалить', # used in commentaire_offline.php, commentaires_new.php et commentaire_online.php
'L_COMMENT_VALID'					=> 'Проверить',
'L_NO_COMMENT'						=> 'Нет комментариев',
'L_PAGINATION_FIRST_TITLE'			=> 'К первой странице', # used in commentaires_offline.php and commentaires_online.php
'L_PAGINATION_LAST_TITLE'			=> 'К последней странице', # used in commentaires_offline.php and commentaires_online.php
'L_PAGINATION_NEXT'					=> 'Дальше', # used in commentaires_offline.php and commentaires_online.php
'L_ON'					            => 'из', # Ligne 127
'L_PAGINATION_NEXT_TITLE'			=> 'Следующая страница', # used in commentaires_offline.php and commentaires_online.php
'L_PAGINATION_PREVIOUS_TITLE'		=> 'Предыдущая странца', # used in commentaires_offline.php and commentaires_online.php
'L_COMMENT_OFFLINE_FEEDS_TITLE'		=> 'Atom feed for offline comments', # used in commentaires_offline.php and commentaires_online.php
'L_COMMENT_OFFLINE_FEEDS'			=> 'Offline comments', # used in commentaires_offline.php and commentaires_online.php
'L_COMMENT_ONLINE_FEEDS_TITLE'		=> 'Atom feed for online comments', # used in commentaires_offline.php and commentaires_online.php
'L_COMMENT_ONLINE_FEEDS'			=> 'Online comments', # used in commentaires_offline.php and commentaires_online.php
'L_COMMENTS_PRIVATE_FEEDS'		    => 'Private feeds',

# commentaire_online.php

'L_COMMENT_MAKE_ONLINE'				=> 'Switch offline',
'L_COMMENT_ONLINE_ERROR_MSG'		=> 'The article doesn\'t exist or no longer exists',
'L_COMMENT_ONLINE_ARTICLE'			=> 'статья',
'L_COMMENT_ONLINE_SITE'				=> 'весь сайт',

'L_COMMENT_ONLINE_TITLE'			=> 'Опубликованные комментарии',

# foot.php

'L_POWERED_BY'						=> 'Работает на <a href="http://pluxml.org">PluXml</a>',  # used in auth.php and footer.php
'L_VERSION'							=> 'Версия',  # used in parametres_infos.php and footer.php

# fullscreen.php

'L_FULLSCREEN_UPDATE_BUTTON'		=> 'Обновить',

# index.php

'L_ARTICLES_FILTER_INPUT'			=> 'Поиск',
'L_ARTICLES_FILTER_BUTTON'			=> 'Фильтр',
'L_CATEGORIES_TABLE'				=> 'Разделы',
'L_SPECIFIC_CATEGORIES_TABLE'		=> 'Spectific categories',
'L_ALL_ARTICLES_CATEGORIES_TABLE'	=> 'Все статьи',
'L_ARTICLES_LIST'					=> 'Список статей',
'L_ARTICLE_LIST_DATE'				=> 'Дата',
'L_ARTICLE_LIST_TITLE'				=> 'Название',
'L_ARTICLE_LIST_CATEGORIES'			=> 'Раздел',
'L_ARTICLE_LIST_NBCOMS'				=> 'Nb coms',
'L_ARTICLE_LIST_AUTHOR'				=> 'Автор',
'L_ARTICLE_LIST_ACTION'				=> 'Действие',
'L_CATEGORY_HOME'					=> 'Главная',
'L_CATEGORY_DRAFT'					=> 'Черновик',
'L_UNCLASSIFIED'					=> 'Unclassified',
'L_ARTICLE_VIEW'					=> 'Показать',
'L_ARTICLE_VIEW_TITLE'				=> 'View this article online',
'L_ARTICLE_EDIT'					=> 'Редакт.',
'L_ARTICLE_EDIT_TITLE'				=> 'Редактировать эту статью',
'L_NEW_COMMENTS_TITLE' 				=> 'Комментарии ожидающие модерации',
'L_VALIDATED_COMMENTS_TITLE' 		=> 'Опубликованные комментарии',
'L_NO_ARTICLE'						=> 'Нет раздела',

# medias.php

'L_MEDIAS_DELETE_FOLDER'			=> 'Delete folder',
'L_MEDIAS_DELETE_FOLDER_CONFIRM'	=> 'Delete folder and its content ?',
'L_MEDIAS_FOLDER_CONTENT'			=> 'View of the folder\'s content',
'L_MEDIAS_NO_FOLDER'				=> 'No folder',
'L_MEDIAS_REBUILD_MINIATURE'		=> 'Rebuild thumbnail',
'L_MEDIAS_VIEW_PIC'					=> 'View picture',
'L_MEDIAS_ADD_MINIATURE'			=> 'Add thumbnail',
'L_MEDIAS_INSERT_MINIATURE'			=> 'Insert thumbnail',
'L_MEDIAS_ADD_PIC'					=> 'Add picture',
'L_MEDIAS_INSERT_PIC'				=> 'Insert picture',
'L_MEDIAS_DELETE_PIC'				=> 'Delete picture',
'L_MEDIAS_DELETE_PIC_CONFIRM'		=> 'Delete picture ?',
'L_MEDIAS_NO_FILE'					=> 'No file',
'L_MEDIAS_FILENAME'					=> 'File name',
'L_MEDIAS_ACTION'					=> 'Action',
'L_MEDIAS_ADD_DOWNLOAD_LINK_FILE'	=> 'Add link to download file',
'L_MEDIAS_ADD_FILE'					=> 'Add file',
'L_MEDIAS_ADD_LINK_FILE'			=> 'Add file link',
'L_MEDIAS_DELETE_FILE'				=> 'Delete file',
'L_MEDIAS_DELETE_FILE_CONFIRM'		=> 'Delete this file ?',
'L_MEDIAS_LIBRARY'					=> 'Media Library',
'L_MEDIAS_BACK'						=> 'Back',
'L_MEDIAS_TITLE'					=> 'Media manager',
'L_MEDIAS_IMAGES'					=> 'Pictures',
'L_MEDIAS_DOCUMENTS'				=> 'Documents',
'L_MEDIAS_CREATE_FOLDER'			=> 'Create folder',
'L_MEDIAS_UPLOAD_PIC'				=> 'Send a picture (gif, jpg, png)',
'L_MEDIAS_UPLOAD_FILE'				=> 'Send a file',
'L_MEDIAS_FILE1'					=> 'File 1',
'L_MEDIAS_FILE2'					=> 'File 2',
'L_MEDIAS_FILE3'					=> 'File 3',
'L_MEDIAS_FILE4'					=> 'File 4',
'L_MEDIAS_FILE5'					=> 'File 5',
'L_MEDIAS_SUBMIT_FILE'				=> 'Send',
'L_MEDIAS_MAX_UPOLAD_FILE'			=> 'Максимальный размер файла',
'L_FILE'							=> 'файл',
'L_IN'								=> 'в',
'L_MEDIAS_SORT'						=> 'sort :',
'L_MEDIAS_ALPHA'					=> 'alphabetical',
'L_MEDIAS_DATE_DESC'				=> 'date, descendant',
'L_MEDIAS_UPDATE'					=> 'Применить изменения',
'L_MEDIAS_REBUILD_THUMBS_FOLDER'	=> 'Заново создать превью для этой папки',

# parametres_affichage.php

'L_NONE2'							=> 'none',
'L_DESC'							=> 'descendant',
'L_ASC'								=> 'ascendant',
'L_CONFIG_VIEW_TITLE'				=> 'Editing PluXml settings',
'L_CONFIG_VIEW_FIELD'				=> 'Display preferences',
'L_CONFIG_VIEW_SKIN_SELECT'			=> 'Skin',
'L_CONFIG_VIEW_FILES_EDIT_TITLE'	=> 'Edit theme files',
'L_CONFIG_VIEW_FILES_EDIT'			=> 'Edit theme files',
'L_CONFIG_VIEW_SORT'				=> 'Sorting articles',
'L_CONFIG_VIEW_BYPAGE'				=> 'Articles per page',
'L_CONFIG_VIEW_BYPAGE_ARCHIVES'		=> 'Articles per page in archives',
'L_CONFIG_VIEW_BYPAGE_ADMIN'		=> 'Articles per page in administration',
'L_CONFIG_VIEW_SORT_COMS'			=> 'Sorting comments',
'L_CONFIG_VIEW_BYPAGE_ADMIN_COMS'	=> 'Comments per page in administraton',
'L_CONFIG_VIEW_THUMBS'				=> 'Thumbnails size (width x height)',
'L_CONFIG_VIEW_HOMESTATIC'			=> 'Use a static page as Homepage',
'L_CONFIG_VIEW_HOMESTATIC_ACTIVE'	=> '<span class="alert">Warning: this page is inactive</span>',
'L_CONFIG_VIEW_PLUXML_RESSOURCES'	=> 'Download themes at <a href="http://ressources.pluxml.org">ressources.pluxml.org</a>.',
'L_CONFIG_VIEW_FEEDS_FIELD'			=> 'Rss/Atom Feed',
'L_CONFIG_VIEW_BYPAGE_FEEDS'		=> 'N° of Articles or comments in the Rss/Atom feed',
'L_CONFIG_VIEW_FEEDS_HEADLINE'		=> 'Only display headlines in the Rss/Atom article feed <a class="help" title="Headline field is empty, content is displayed instead">&nbsp;</a>',
'L_CONFIG_VIEW_FEEDS_FOOTER'		=> 'Signature used in the end of every Rss/Atom feed\'s article',
'L_CONFIG_VIEW_UPDATE'				=> 'Edit display settings',

# parametres_avances.php

'L_CONFIG_ADVANCED_TITLE'			=> 'Edit PluXml Settings',
'L_CONFIG_ADVANCED_DESC'			=> 'Advanced configuration (experienced user)',
'L_CONFIG_ADVANCED_URL_REWRITE'		=> 'Enable url rewriting',
'L_CONFIG_ADVANCED_URL_REWRITE_ALERT'=> '<span class="alert">Warning: a .htaccess file already exists at your PluXml\'s installation root. Activating url rewriting will replace this file</span>',
'L_CONFIG_ADVANCED_GZIP'			=> 'Enable GZIP compression',
'L_CONFIG_ADVANCED_GZIP_HELP'		=> 'Makes it possible to compress pages to save bandwidth, but could increase CPU usage',
'L_CONFIG_ADVANCED_CAPCHA'			=> 'Enable anti spam-capcha',
'L_CONFIG_ADVANCED_ADMIN_KEY'		=> 'Administration key (private URLs)',
'L_CONFIG_ADVANCED_KEY_HELP'		=> 'Leave this field empty to rebuild key',
'L_CONFIG_ADVANCED_FILES_FOLDERS'	=> 'Folders and files location',
'L_CONFIG_ADVANCED_USERFOLDERS'		=> 'Use separate Images and Documents folders for every user',
'L_HELP_SLASH_END'					=> 'Don\'t forget the slash at the end',
'L_CONFIG_ADVANCED_PICS_FOLDER'		=> 'Images (folder) location',
'L_CONFIG_ADVANCED_DOCS_FOLDER'		=> 'Documents (folder) location',
'L_CONFIG_ADVANCED_ARTS_FOLDER'		=> 'Articles (folder) location',
'L_CONFIG_ADVANCED_COMS_FOLDER'		=> 'Comments (folder) location',
'L_CONFIG_ADVANCED_STATS_FOLDER'	=> 'Static page (folder) location',
'L_CONFIG_ADVANCED_CATS_FILE'		=> 'Categories location (xml file)',
'L_CONFIG_ADVANCED_STATICS_FILE'	=> 'Static page file location (xml file)',
'L_CONFIG_ADVANCED_USERS_FILE'		=> 'Users file location (xml file)',
'L_CONFIG_ADVANCED_TAGS_FILE'		=> 'Tags file location (xml file)',
'L_CONFIG_ADVANCED_PLUGINS_FILE'	=> 'Plugins file location (xml file)',
'L_CONFIG_ADVANCED_UPDATE'			=> 'Edit advanced configuration',

# parametres_base.php

'L_NONE'							=> 'нет',  # used in parametres_base.php and parametres_affichage.php
'L_CONFIG_BASE_TITLE'				=> 'Редактировать параметры PluXml\'s',
'L_CONFIG_BASE_CONFIG_TITLE'		=> 'Базовая конфигурация',
'L_CONFIG_BASE_SITE_TITLE'			=> 'Название сайта',
'L_CONFIG_BASE_SITE_SLOGAN'			=> 'Описание сайта',
'L_CONFIG_BASE_SITE_URL'			=> 'Корень (пример : http://pluxml.org/pluxml/)',
'L_CONFIG_BASE_URL_HELP'			=> 'Не забудте слеш в конце /',
'L_CONFIG_BASE_DEFAULT_LANG'		=> 'Основной язык сайта',
'L_CONFIG_BASE_TIMEZONE'			=> 'Часовой Пояс',
'L_CONFIG_BASE_ALLOW_COMMENTS'		=> 'Разрешить комментарии',
'L_CONFIG_BASE_MODERATE_COMMENTS'	=> 'Предмодерация комментариев',
'L_CONFIG_BASE_TEXT_EDIT'			=> 'Текстовый Редактор',
'L_CONFIG_BASE_UPDATE'				=> 'Применить изменения',
'L_CONFIG_META_DESCRIPTION'			=> '"описание" мета тег (опционально)',
'L_CONFIG_META_KEYWORDS'			=> '"ключевые слова" мета тег (опционально)',

# parametres_edittpl.php

'L_CONFIG_EDITTPL_ERROR_NOTHEME'	=> 'Такой темы не существует !',
'L_CONFIG_EDITTPL_FILE_SAVE_INFO'	=> 'Файл успешно сохранён',
'L_CONFIG_EDITTPL_FILE_SAVE_ERROR'	=> 'Что то пошло не так во время сохранения файла',
'L_CONFIG_EDITTPL_TITLE'			=> 'Редактировать тему',
'L_CONFIG_EDITTPL_SELECT_FILE'		=> 'Выберите файл для редактирования:',
'L_CONFIG_EDITTPL_LOAD'				=> 'Загрузить',
'L_CONFIG_EDITTPL_SAVE'				=> 'Сохранить файл',

# parametres_infos.php

'L_CONFIG_INFOS_TITLE'				=> 'Информация о PluXml',
'L_CONFIG_INFOS_DESCRIPTION'		=> 'Эта информация говорит о том как работает PluXml, и может быть полезна для устранения проблем.',
'L_CONFIG_INFOS_NB_CATS'			=> 'N° разделов :',
'L_CONFIG_INFOS_NB_STATICS'			=> 'N° статических страниц :',
'L_CONFIG_INFOS_WRITER'				=> 'N° вошедших пользователей :',
'L_PLUXML_CHECK_VERSION'			=> 'Проверка версии PluXml ...',
'L_PLUXML_UPDATE_UNAVAILABLE'		=> 'Не могу проверить обновления так как \'allow_url_fopen\' отключено на сервере',
'L_PLUXML_UPDATE_ERR'				=> 'Проверка не удалась...',
'L_PLUXML_UPTODATE'					=> 'Вы используете актуальную версию PluXml',
'L_PLUXML_UPDATE_AVAILABLE'			=> 'Доступна новая версия PluXml ! Вы можете загрузить её на',

# parametres_users.php

'L_CONFIG_USERS_TITLE'				=> 'Управление пользователями',
'L_CONFIG_USER'						=> 'Пользователь',
'L_CONFIG_USERS_ID'					=> 'ID пользователя',
'L_CONFIG_USERS_ACTIVE'				=> 'Активный',
'L_CONFIG_USERS_ACTION'				=> 'Действие',
'L_CONFIG_USERS_NEW'				=> 'Новый пользователь',
'L_CONFIG_USERS_UPDATE'				=> 'Применить изменения',

# parametre_plugins.php

'L_BACK_TO_PLUGINS'					=> 'Назад к плагинам',

# parametres_plugins.php

'L_PLUGINS_TITLE'					=> 'Управление плагинами',
'L_PLUGINS_VERSION'					=> 'Версия',
'L_PLUGINS_AUTHOR'					=> 'Автор',
'L_PLUGINS_ACTIVATE'				=> 'Включить',
'L_PLUGINS_DEACTIVATE'				=> 'Выключить',
'L_PLUGINS_DELETE'					=> 'Удалить',
'L_PLUGINS_DELETE_ERROR'			=> 'Во время удаления возникла ошибка',
'L_PLUGINS_DELETE_SUCCESSFUL'		=> 'Успешно удалено',
'L_PLUGINS_CONFIG'					=> 'Настройка',
'L_PLUGINS_CONFIG_TITLE'			=> 'Настройка плагинов',
'L_PLUGINS_HELP'					=> 'Помощь',
'L_PLUGINS_HELP_TITLE'				=> 'Посмотреть помошь',
'L_PLUGINS_REQUIREMENTS'			=> 'Зависимости',
'L_PLUGINS_REQUIREMENTS_HELP'		=> 'Available and active plugins to activate this one',
'L_PLUGINS_REQUIREMENTS_NONE'		=> 'Нет',

# profil.php

'L_PROFIL_EDIT_TITLE'				=> 'Редактрировать профиль',
'L_PROFIL'							=> 'Профиль',                       # used in profil.php and parametres_users.php
'L_PROFIL_LOGIN'					=> 'Логин',           # used in profil.php and parametres_users.php
'L_PROFIL_USER'						=> 'Имя пользователя',           # used in profil.php and parametres_users.php
'L_PROFIL_MAIL'						=> 'Email адрес',                # used in profil.php and parametres_users.php
'L_PROFIL_ADMIN_LANG'				=> 'Язык для администрирования',
'L_PROFIL_INFOS'					=> 'Информация',                 # used in profil.php and parametres_users.php
'L_PROFIL_UPDATE'					=> 'Обновить ваш профиль',
'L_PROFIL_CHANGE_PASSWORD'			=> 'Сменить пароль',
'L_PROFIL_PASSWORD'					=> 'Пароль',                 # used in profil.php and parametres_users.php
'L_PROFIL_CONFIRM_PASSWORD'			=> 'Подтвердить пароль',
'L_PROFIL_UPDATE_PASSWORD'			=> 'Сменить пароль',

# statique.php

'L_STATIC_BACK_TO_PAGE'				=> 'Назад к списку',
'L_STATIC_UNKNOWN_PAGE'				=> 'Страница не найдена, или не существует !',
'L_STATIC_TITLE'					=> 'Редактировать исходный код страницы',
'L_STATIC_VIEW_PAGE'				=> 'Показать страницу',  # used in statique.php and statiques.php
'L_STATIC_ON_SITE'					=> 'на сайте',  # used in statique.php and statiques.php
'L_STATIC_UPDATE'					=> 'Сохранить',
'L_STATIC_META_DESCRIPTION'			=> 'Мета теги "описание" содержимого страницы (опционально)',
'L_STATIC_META_KEYWORDS'			=> 'Мета теги "ключевые слова" содержимого страницы (опционально)',

# statiques.php

'L_STATICS_PAGE_TITLE'				=> 'Статические страницы',
'L_STATICS_ID'						=> 'ID',
'L_STATICS_GROUP'					=> 'Группа',
'L_STATICS_TITLE'					=> 'Название',
'L_STATICS_URL'						=> 'Url',
'L_STATICS_ACTIVE'					=> 'Активно',
'L_STATICS_ORDER'					=> 'Положение',
'L_STATICS_MENU'					=> 'Меню',
'L_STATICS_ACTION'					=> 'Действие',
'L_STATICS_TEMPLATE_FIELD'			=> 'Шаблон',
'L_STATICS_PAGE_HOME'				=> 'Установить как домашнюю',
'L_PAGE'							=> 'Страница',# used in statiques.php and commentaires_offline.php
'L_VIEW'							=> 'Посмотреть',# used in statiques.php and medias.php
'L_STATICS_SRC_TITLE'				=> 'Редактировать исходный код этой страницы',
'L_STATICS_SRC'						=> 'Редакт.',
'L_STATICS_NEW_PAGE'				=> 'Новая страница',
'L_STATICS_UPDATE'					=> 'Применить изменения',

# top.php

'L_PROFIL_ADMIN'					=> 'Администратор',  # used in article.php, parametres_users.php and top.php
'L_PROFIL_MANAGER'					=> 'Менеджер',   # used in article.php, parametres_users.php and top.php
'L_PROFIL_MODERATOR'				=> 'Модератор',   # used in article.php, parametres_users.php and top.php
'L_PROFIL_EDITOR'					=> 'Редактор',   # used in article.php, parametres_users.php and top.php
'L_PROFIL_WRITER'					=> 'Писатель', # used in article.php, parametres_users.php and top.php
'L_ADMIN'							=> '- администратор',
'L_LOGIN'							=> 'Вошел как',
'L_ADMIN_LOGOUT'					=> 'Выйти',
'L_ADMIN_LOGOUT_TITLE'				=> 'Завершить сессию администратора',
'L_BACK_TO_SITE'					=> 'На главную',
'L_BACK_TO_SITE_TITLE'				=> 'На главную', # used in auth.php and top.php
'L_MENU_ARTICLES'					=> 'Статьи',
'L_MENU_ARTICLES_TITLE'				=> 'Список статей и редактирование',
'L_MENU_NEW_ARTICLES'				=> 'Новая статья', # used in article.php and top.php
'L_MENU_NEW_ARTICLES_TITLE'			=> 'Новая статья', 
'L_MENU_STATICS_TITLE'				=> 'Список статических страниц',
'L_MENU_STATICS'					=> 'Статические страницы',
'L_MENU_COMMENTS_TITLE'				=> 'Список комментариев',
'L_MENU_COMMENTS'					=> 'Комментарии',
'L_MENU_MEDIAS_TITLE'				=> 'Управление медиа файлами',
'L_MENU_MEDIAS'						=> 'Медиа',
'L_MENU_CATEGORIES_TITLE'			=> 'Создавать и редактировать разделы',
'L_MENU_CATEGORIES'					=> 'Разделы',
'L_MENU_CONFIG_TITLE'				=> 'Настроить PluXml',
'L_MENU_CONFIG'						=> 'Параметры',
'L_MENU_PROFIL_TITLE'				=> 'Настроить свой профиль',
'L_MENU_PROFIL'						=> 'Профиль',
'L_MENU_PLUGINS_TITLE'				=> 'Управлять плагинами',
'L_MENU_PLUGINS'					=> 'Плагины',
'L_WARNING_INSTALLATION_FILE'		=> '<p class="error">Файл install.php до сих пор находитсяв корне вашего сайта.<br />Из соображений безопастности его рекомендуется удалить</p>',

# user.php
'L_USER_UNKNOWN'					=> 'Неизвестный пользователь',
'L_USER_LANG'						=> 'Язык для администрирования',
'L_USER_MAIL'						=> 'Email адрес',
'L_USER_INFOS'						=> 'Информация',
'L_USER_UPDATE'						=> 'Обновить пользователя',
'L_USER_PAGE_TITLE'					=> 'Редактировать настройки пользователя',
'L_USER_BACK_TO_PAGE'				=> 'Назад к списку',

# sous-navigation/parametres.php

'L_MENU_CONFIG_BASE_TITLE'			=> 'Редактировать базовую конфигурацию PluXml',
'L_MENU_CONFIG_BASE'				=> 'Базовая конфигурация',
'L_MENU_CONFIG_VIEW_TITLE'			=> 'Редактировать настройки отображения',
'L_MENU_CONFIG_VIEW'				=> 'Настройки отображения',
'L_MENU_CONFIG_USERS_TITLE'			=> 'Управление аккаунтами пользователей',
'L_MENU_CONFIG_USERS'				=> 'Аккаунты пользователей',
'L_MENU_CONFIG_ADVANCED_TITLE'		=> 'Редактировать расширенную конфигурацию PluXml',
'L_MENU_CONFIG_ADVANCED'			=> 'Расширенная конфигурация',
'L_MENU_CONFIG_INFOS_TITLE'			=> 'Информация о PluXml',
'L_MENU_CONFIG_INFOS'				=> 'Информация',
'L_MENU_CONFIG_VERSION'				=> 'Проверить обновления',
'L_MENU_CONFIG_PLUGINS_TITLE'		=> 'Управление плагинами',
'L_MENU_CONFIG_PLUGINS'				=> 'Плагины',

);
?>