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
            <span class="section-tag" data-aos="fade-down">Privacy & Security</span>
            <h1 data-aos="fade-up">Политика касаемо обработки персональных данных</h1>

            <div class="legal-content">
                <div class="policy-intro" data-aos="fade-up" data-aos-delay="100">
                    <div class="legal-block">
                        <h2>1. Общие положения</h2>
                        <p>
                            Настоящая политика обработки персональных данных (далее —
                            «Политика») определяет порядок и условия обработки персональных
                            данных, предпринимаемые платформой <strong><?= $domainTitle ?></strong> (далее — «Оператор»), и
                            устанавливает меры по обеспечению безопасности этих данных.
                        </p>
                        <p>
                            1.1. Важнейшей целью Оператор считает соблюдение прав и свобод человека при
                            обработке его персональных данных, включая защиту прав на
                            неприкосновенность частной жизни и личную тайну в соответствии с нормами ЕС.
                        </p>
                        <p>
                            1.2. Настоящая Политика применяется ко всей информации, которую
                            Оператор может получить о посетителях веб-сайта <strong><?= $fullDomain ?></strong>.
                        </p>
                    </div>
                </div>

                <div class="policy-section" data-aos="fade-up">
                    <h2>2. Основные понятия</h2>
                    <ul class="terminology-list">
                        <li>
                            <span class="term">Веб-сайт</span> 
                            <span class="desc">совокупность графических и информационных материалов <strong><?= $fullDomain ?></strong>.</span>
                        </li>
                        <li>
                            <span class="term">Пользователь</span> 
                            <span class="desc">любой посетитель веб-сайта.</span>
                        </li>
                        <li>
                            <span class="term">Персональные данные</span> 
                            <span class="desc">любая информация, относящаяся прямо или косвенно к Пользователю.</span>
                        </li>
                    </ul>
                </div>

                <div class="policy-section" data-aos="fade-up">
                    <h2>3. Данные, которые мы обрабатываем</h2>
                    <div class="data-grid-policy">
                        <div class="data-item-card">
                            <div class="data-item-card__icon"><i class="fas fa-user-shield"></i></div>
                            <div class="data-item-card__text">
                                <strong>Личные данные</strong>
                                <p>ФИО, Email, номер телефона (Италия: +39).</p>
                            </div>
                        </div>
                        <div class="data-item-card">
                            <div class="data-item-card__icon"><i class="fas fa-cookie-bite"></i></div>
                            <div class="data-item-card__text">
                                <strong>Технические данные</strong>
                                <p>Cookies, IP-адрес, данные вашего браузера.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="policy-section" data-aos="fade-up">
                    <h2>4. Цели обработки данных</h2>
                    <ul class="check-list">
                        <li>Идентификация Пользователя для доступа к платформе <?= $domainTitle ?>.</li>
                        <li>Установление обратной связи и оперативная обработка заявок.</li>
                        <li>Исполнение обязательств по программам обучения.</li>
                        <li>Улучшение качества работы интерфейсов и пользовательского опыта.</li>
                    </ul>
                </div>

                <div class="policy-section" data-aos="fade-up">
                    <h2>5. Правовые основания</h2>
                    <div class="legal-notice-box">
                        <i class="fas fa-info-circle"></i>
                        <p>Оператор обрабатывает данные только при наличии вашего добровольного согласия или если сохранение файлов «cookie» разрешено в настройках вашего браузера для работы в регионе Италия.</p>
                    </div>
                </div>

                <div class="contact-info-block contact-footer-policy" data-aos="zoom-in">
                    <h2>6. Вопросы и отзывы</h2>
                    <p>Если у вас возникли вопросы по поводу ваших данных, вы можете направить запрос нашей службе поддержки:</p>
                    <div class="policy-contact-links">
                        <a href="mailto:hello@<?= $fullDomain ?>" class="policy-mail">
                            <i class="fas fa-envelope"></i> hello@<?= $fullDomain ?>
                        </a>
                        <p class="policy-address">
                            <i class="fas fa-location-dot"></i> Via del Corso, 184, 00186 Roma RM, Italy
                        </p>
                    </div>
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