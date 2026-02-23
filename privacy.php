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
            <span class="section-tag" data-aos="fade-down">Privacy Policy</span>
            <h1 data-aos="fade-up">Политика конфиденциальности</h1>

            <div class="legal-content">
                <div class="policy-hero-card" data-aos="fade-up" data-aos-delay="100">
                    <p>
                        Политика конфиденциальности распространяется на персональные данные,
                        предоставляемые клиентами <strong><?= $domainTitle ?></strong>, как для оказания услуг по карьерному консультированию, так и для других взаимодействий в электронном
                        формате.
                    </p>
                </div>

                <div class="policy-notice" data-aos="fade-up">
                    <p>
                        <strong><?= $domainTitle ?></strong> оставляет за собой право вносить изменения в положения Политики. Обратите внимание, что наши услуги могут содержать ссылки на ресурсы третьих лиц. Предоставляя свои данные, вы даете полное согласие на их обработку способами, предусмотренными настоящей Политикой.
                    </p>
                </div>

                <h2 data-aos="fade-right">Порядок сбора, хранения и уничтожения</h2>
                <div class="storage-info" data-aos="fade-up">
                    <div class="storage-item">
                        <div class="storage-item__icon"><i class="fas fa-history"></i></div>
                        <div class="storage-item__text">
                            <span>Срок хранения</span>
                            <strong>до 75 лет</strong>
                        </div>
                    </div>
                    <div class="storage-item">
                        <div class="storage-item__icon"><i class="fas fa-user-check"></i></div>
                        <div class="storage-item__text">
                            <span>Основание</span>
                            <strong>Ваше согласие</strong>
                        </div>
                    </div>
                </div>
                
                <p data-aos="fade-up">
                    Для предотвращения утечки данных мы используем полный комплекс мер информационной безопасности. Уничтожение или блокирование данных осуществляется по запросу клиента или при достижении целей сбора.
                </p>

                <div class="data-collection-grid">
                    <div class="data-box" data-aos="fade-right">
                        <h3><i class="fas fa-microchip"></i> Техническая информация</h3>
                        <ul class="legal-list">
                            <li>IP-адрес и время доступа</li>
                            <li>Источники перехода на <strong><?= $fullDomain ?></strong></li>
                            <li>Данные браузера и просмотры блоков</li>
                        </ul>
                    </div>
                    <div class="data-box" data-aos="fade-left">
                        <h3><i class="fas fa-id-card"></i> Персонализация</h3>
                        <ul class="legal-list">
                            <li>Имя пользователя</li>
                            <li>E-mail и номер телефона</li>
                            <li>Данные о контрактах и услугах</li>
                        </ul>
                    </div>
                </div>

                <h2 data-aos="fade-right">Цели обработки персональных данных</h2>
                <ul class="check-list" data-aos="fade-up">
                    <li>Предоставление доступа к инновационной платформе обучения.</li>
                    <li>Учет пожеланий при разработке новых решений.</li>
                    <li>Информирование об акциях и материалах блога.</li>
                    <li>Обеспечение качественной обратной связи.</li>
                </ul>

                <h2 data-aos="fade-right">Использование Cookies</h2>
                <div class="legal-block" data-aos="fade-up">
                    <p>
                        Файлы cookie позволяют нам анализировать трафик и сохранять ваши предпочтения (например, настройки региона <span class="text-accent">Италия</span>), чтобы сделать использование <strong><?= $fullDomain ?></strong> удобнее. Вы можете отключить их в настройках браузера.
                    </p>
                </div>

                <div class="rights-block" data-aos="zoom-in">
                    <h2>Ваши права</h2>
                    <p>
                        Если вы хотите отредактировать свои данные или прекратить их обработку, свяжитесь с командой <strong><?= $domainTitle ?></strong>:
                    </p>
                    <a href="mailto:hello@<?= $fullDomain ?>" class="contact-btn-legal">
                        <i class="fas fa-paper-plane"></i> hello@<?= $fullDomain ?>
                    </a>
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