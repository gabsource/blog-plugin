<?php

return [
    'plugin' => [
        'name' => 'Блог',
        'description' => 'Надежная блоговая-платформа.'
    ],
    'blog' => [
        'menu_label' => 'Блог',
        'menu_description' => 'Управление Блогом',
        'posts' => 'Записи',
        'create_post' => 'записи',
        'categories' => 'Категории',
        'create_category' => 'категории',
        'tab' => 'Блог',
        'access_posts' => 'Управление записями блога',
        'access_categories' => 'Управление категориями блога',
        'delete_confirm' => 'Вы уверены, что хотите сделать это?',
        'chart_published' => 'Опубликовано',
        'chart_drafts' => 'Черновики',
        'chart_total' => 'Всего',
        'new_category' => 'Новая категория'
    ],
    'posts' => [
        'list_title' => 'Управление записями блога',
        'category' => 'Категория',
        'hide_published' => 'Скрыть опубликованные',
        'new_post' => 'Новая запись'
    ],
    'post' => [
        'title' => 'Заголовок',
        'title_placeholder' => 'Новый заголовок записи',
        'slug' => 'URL записи',
        'slug_placeholder' => 'new-post-slug',
        'categories' => 'Категории',
        'created' => 'Дата создания',
        'updated' => 'Дата обновления',
        'published' => 'Опубликовано',
        'published_validation' => 'Пожалуйста, укажите дату публикации.',
        'tab_edit' => 'Редактор',
        'tab_categories' => 'Категории',
        'categories_comment' => 'Выберите категории, к которым относится эта запись',
        'categories_placeholder' => 'Не найдено ни одной категории, создайте хотя бы одну!',
        'tab_manage' => 'Управление',
        'published_on' => 'Опубликовано',
        'excerpt' => 'Отрывок',
        'featured_images' => 'Тематические изображения',
        'delete_confirm' => 'Вы действительно хотите удалить эту запись?',
        'close_confirm' => 'Запись не была сохранена.',
        'return_to_posts' => 'Вернуться к списку записей'
    ],
    'categories' => [
        'list_title' => 'Управление категориями блога',
        'new_category' => 'Новая категория',
        'uncategorized' => 'Без'
    ],
    'category' => [
        'name' => 'Название',
        'name_placeholder' => 'Новое имя категории',
        'slug' => 'URL адрес',
        'slug_placeholder' => 'new-category-slug',
        'posts' => 'Записи',
        'delete_confirm' => 'Вы действительно хотите удалить эту категорию?',
        'return_to_categories' => 'Вернуться к списку категорий'
    ],
    'settings' => [
        'category_title' => 'Список категорий блога',
        'category_description' => 'Отображает список категорий на странице.',
        'category_slug' => 'Параметр URL',
        'category_slug_description' => 'Параметр маршрута, используемый для поиска в текущей категории по URL. Это свойство используется по умолчанию компонентом для маркировки активной категории.',
        'category_display_empty' => 'Пустые категории',
        'category_display_empty_description' => 'Отображать категории, которые не имеют записей.',
        'category_page' => 'Страница категорий',
        'category_page_description' => 'Название страницы категорий. Это свойство используется по умолчанию компонентом.',
        'post_title' => 'Запись блога',
        'post_description' => 'Отображение записи блога',
        'post_slug' => 'Параметр URL',
        'post_slug_description' => 'Параметр маршрута, необходимый для выбора конкретной записи.',
        'post_category' => 'Страница категорий',
        'post_category_description' => 'Название страницы категорий. Это свойство используется по умолчанию компонентом.',
        'posts_title' => 'Список записей блога',
        'posts_description' => 'Отображает список последних записей блога на странице.',
        'posts_pagination' => 'Параметр постраничной навигации',
        'posts_pagination_description' => 'Параметр, необходимый для постраничной навигации.',
        'posts_filter' => 'Фильтр категорий',
        'posts_filter_description' => 'Введите URL категории или параметр URL-адреса для фильтрации записей. Оставьте пустым, чтобы посмотреть все записи.',
        'posts_per_page' => 'Записей на странице',
        'posts_per_page_validation' => 'Недопустимый Формат. Ожидаемый тип данных - действительное число.',
        'posts_no_posts' => 'Отсутсвие записей',
        'posts_no_posts_description' => 'Сообщение, отображаемое в блоге, если нет никаких записей. Это свойство используется по умолчанию компонентом.',
        'posts_order' => 'Сортировка',
        'posts_order_description' => 'Атрибут, по которому будут сортироваться записи.',
        'posts_category' => 'Страница категорий',
        'posts_category_description' => 'Название категории на странице записи "размещена в категории". Это свойство используется по умолчанию компонентом.',
        'posts_post' => 'Страница записи',
        'posts_post_description' => 'Название страницы для ссылки "подробнее". Это свойство используется по умолчанию компонентом.'
    ]
];
