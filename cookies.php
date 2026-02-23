<?php

$fullDomain = strtolower($_SERVER['HTTP_HOST'] ?? '');
$fullDomain = explode(':', $fullDomain)[0];

$parts = explode('.', $fullDomain);
$domainSlug = count($parts) >= 2
        ? $parts[count($parts) - 2]
        : $fullDomain;

$domainTitle = ucwords(str_replace('-', ' ', $domainSlug));

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $domainTitle ?> — Практики применения ИИ для каждого</title>
    
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><circle cx=%2250%22 cy=%2250%22 r=%2245%22 fill=%22%236200ea%22/><path d=%22M30 50 L50 30 L70 50 L50 70 Z%22 fill=%22%23ffeb3b%22/></svg>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&family=Space+Grotesk:wght@500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <canvas id="bg-canvas"></canvas>

    <header class="header">
        <div class="container header__container">
            <a href="./#hero" class="logo">
                <span class="logo__icon"></span>
                <span class="logo__text"><?= $domainTitle ?></span>
            </a>

            <nav class="nav">
                <ul class="nav__list">
                    <li><a href="./#hero" class="nav__link">Главная</a></li>
                    <li><a href="./#about" class="nav__link">О платформе</a></li>
                    <li><a href="./#cases" class="nav__link">Практики</a></li>
                    <li><a href="./#tools" class="nav__link">Инструменты</a></li>
                    <li><a href="./#faq" class="nav__link">Вопросы</a></li>
                </ul>
            </nav>

            <a href="./#contact" class="btn btn--header">Связаться</a>

            <button class="burger" aria-label="Menu">
                <span></span>
            </button>
        </div>
    </header>
    <main class="legal-page">
    <section class="pages">
        <div class="container">
            <span class="section-tag" data-aos="fade-down">Legal Documents</span>
            <h1 data-aos="fade-up">Политика использования файлов cookie</h1>

            <div class="legal-content">
                <p class="lead-text" data-aos="fade-up" data-aos-delay="100">
                    Добро пожаловать на <strong><?= $domainTitle ?></strong>! Чтобы улучшить ваш опыт
                    взаимодействия с нашим сайтом, обеспечить его корректную работу и
                    анализировать активность пользователей, мы используем файлы cookie и
                    схожие технологии.
                </p>

                <div class="legal-block" data-aos="fade-up">
                    <h2>Что такое файлы cookie?</h2>
                    <p>
                        Файл cookie — это небольшой фрагмент данных (текстовый файл),
                        который веб-сайт сохраняет на вашем устройстве, когда вы его посещаете. 
                        Это позволяет платформе <strong><?= $domainTitle ?></strong> "помнить" ваши действия 
                        и предпочтения (например, язык, настройки региона <span class="text-accent">Италия</span> и другие параметры) 
                        в течение определенного времени.
                    </p>
                </div>

                <div class="legal-block" data-aos="fade-up">
                    <h2>Какие типы файлов cookie мы используем?</h2>
                    <p>
                        Мы классифицируем файлы cookie, используемые на сайте <strong><?= $fullDomain ?></strong>, по
                        следующим категориям:
                    </p>
                    <ul class="legal-list">
                        <li>
                            <i class="fa-solid fa-shield-halved"></i>
                            <div><strong>Строго необходимые:</strong> Критически важны для функционирования. Позволяют перемещаться по страницам <strong><?= $domainTitle ?></strong>.</div>
                        </li>
                        <li>
                            <i class="fa-solid fa-chart-simple"></i>
                            <div><strong>Аналитические:</strong> Сбор анонимной информации о том, как посетители используют наш сайт.</div>
                        </li>
                        <li>
                            <i class="fa-solid fa-sliders"></i>
                            <div><strong>Функциональные:</strong> Позволяют запоминать ваш выбор для персонализированного опыта в рамках IT-обучения.</div>
                        </li>
                        <li>
                            <i class="fa-solid fa-bullhorn"></i>
                            <div><strong>Маркетинговые:</strong> Используются для доставки объявлений, соответствующих вашим интересам.</div>
                        </li>
                    </ul>
                </div>

                <div class="legal-block" data-aos="fade-up">
                    <h2>Зачем мы используем файлы cookie?</h2>
                    <ul class="check-list">
                        <li>Обеспечение стабильной и безопасной работы платформы.</li>
                        <li>Анализ пользовательского поведения для оптимизации курсов.</li>
                        <li>Персонализация контента для пользователей в Европе.</li>
                        <li>Предоставление релевантных маркетинговых материалов.</li>
                    </ul>
                </div>

                <div class="legal-block" data-aos="fade-up">
                    <h2>Ваш выбор и управление</h2>
                    <p>
                        Вы имеете полный контроль над файлами cookie. Вы можете в любой
                        момент изменить свои настройки в браузере. Однако, обратите
                        внимание: отключение строго необходимых cookie может привести к
                        некорректной работе некоторых функций.
                    </p>
                </div>

                <div class="contact-info-block" data-aos="zoom-in">
                    <h2>Контактная информация</h2>
                    <p>
                        Если у вас возникли вопросы касательно политики на <strong><?= $domainTitle ?></strong>, свяжитесь с нами:
                    </p>
                    <ul class="contact-data">
                        <li><i class="fa-solid fa-envelope"></i> <strong>Email:</strong> <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a></li>
                        <li><i class="fa-solid fa-phone"></i> <strong>Телефон:</strong> <a href="tel:+390697639265">+39 06 9763 9265</a></li>
                        <li><i class="fa-solid fa-location-dot"></i> <strong>Адрес:</strong> Via del Corso, 184, 00186 Roma RM, Italy</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</main>

    <footer class="footer">
        <div class="container footer__grid">
            <div class="footer__col">
                <a href="./#hero" class="logo logo--footer">
                    <span class="logo__icon"></span>
                    <span class="logo__text"><?= $domainTitle ?></span>
                </a>
                <p class="footer__desc">
                    Технологии нового поколения, доступные каждому. Мы делаем будущее понятным.
                </p>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Навигация</h4>
                <ul class="footer__list">
                    <li><a href="./#hero">Главная</a></li>
                    <li><a href="./#about">О платформе</a></li>
                    <li><a href="./#cases">Практики</a></li>
                    <li><a href="./#contact">Контакты</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Документы</h4>
                <ul class="footer__list">
                    <li><a href="./privacy.php">Privacy Policy</a></li>
                    <li><a href="./cookies.php">Cookie Policy</a></li>
                    <li><a href="./terms.php">Terms of Service</a></li>
                    <li><a href="./return.php">Return Policy</a></li>
                    <li><a href="./disclaimer.php">Disclaimer</a></li>
                    <li><a href="./contact.php">Contact Us</a></li>
                    <li><a href="./personal-data-policy.php">Data Policy</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Контакты</h4>
                <ul class="footer__contact">
                    <li><i class="fa-solid fa-phone"></i> <a href="tel:+390697639265">+39 06 9763 9265</a></li>
                    <li><i class="fa-solid fa-envelope"></i> <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a></li>
                    <li><i class="fa-solid fa-location-dot"></i> <span>Via del Corso, 184, 00186 Roma RM, Italy</span></li>
                </ul>
            </div>
        </div>
        
        <div class="container footer__bottom">
            <p>&copy; 2026 <?= $domainTitle ?>. Все права защищены. Инновации для вас.</p>
        </div>
    </footer>
    <div id="cookie-popup" class="cookie-popup">
        <div class="cookie-popup__content">
            <p>Этот сайт использует cookies для улучшения работы. Подробнее — в нашей <a href="./cookies.php">Cookie политике</a>.</p>
            <button id="accept-cookies" class="btn btn--header">Принять</button>
        </div>
    </div>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="script.js"></script>
</body>
</html>