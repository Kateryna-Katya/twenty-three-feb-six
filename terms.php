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
            <span class="section-tag" data-aos="fade-down">Terms & Conditions</span>
            <h1 data-aos="fade-up">Условия использования</h1>

            <div class="legal-content">
                <div class="policy-hero-card terms-accent" data-aos="fade-up" data-aos-delay="100">
                    <p>
                        Добро пожаловать на сайт <strong><?= $domainTitle ?></strong>! Настоящие Условия использования
                        представляют собой юридически обязывающий договор между вами (далее — «Пользователь») и платформой <strong><?= $domainTitle ?></strong>.
                        Используя наш ресурс, вы подтверждаете свое полное согласие с данными Условиями.
                    </p>
                </div>

                <div class="legal-block" data-aos="fade-up">
                    <h2>1. Предмет Соглашения</h2>
                    <p>
                        Компания предоставляет Пользователю доступ к использованию сайта
                        <strong><?= $fullDomain ?></strong> и его функционала, включая: доступ к
                        инновационным материалам, статьям в блоге, карьерным консультациям и другим AI-инструментам 
                        развития. Настоящее Соглашение регулирует все аспекты взаимодействия в рамках цифровой среды.
                    </p>
                </div>

                <div class="legal-block" data-aos="fade-up">
                    <h2>2. Обязанности и права Пользователя</h2>
                    <p>При использовании платформы <strong><?= $domainTitle ?></strong> запрещается:</p>
                    <ul class="legal-list">
                        <li><i class="fa-solid fa-ban"></i> Публиковать или передавать любую незаконную, вредоносную или клеветническую информацию.</li>
                        <li><i class="fa-solid fa-bug-slash"></i> Предпринимать действия, которые могут нарушить работу цифровой инфраструктуры <strong><?= $domainTitle ?></strong>.</li>
                        <li><i class="fa-solid fa-robot"></i> Использовать автоматизированные скрипты (боты) для сбора информации без разрешения.</li>
                        <li><i class="fa-solid fa-user-xmark"></i> Предоставлять недостоверную информацию при регистрации на консультацию.</li>
                    </ul>
                </div>

                <div class="legal-block" data-aos="fade-up">
                    <h2>3. Интеллектуальная собственность</h2>
                    <div class="property-block">
                        <div class="property-block__icon">
                            <i class="fas fa-copyright"></i>
                        </div>
                        <div class="property-block__text">
                            <p>
                                Весь контент на <strong><?= $fullDomain ?></strong> (тексты, программный код, графика, логотипы) является собственностью Компании. 
                                Вам предоставляется ограниченная лицензия для личного использования в целях саморазвития. Любое коммерческое копирование материалов запрещено.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="legal-block" data-aos="fade-up">
                    <h2>4. Ограничение ответственности</h2>
                    <div class="warning-block risk-warning">
                        <p>
                            Услуги и информация предоставляются по принципу <strong>«как есть» (as is)</strong>. Компания не несет ответственности за любые убытки, 
                            возникшие в результате использования или невозможности использования технологий на платформе <strong><?= $domainTitle ?></strong>.
                        </p>
                    </div>
                </div>

                <div class="legal-block" data-aos="fade-up">
                    <h2>5. Изменения и разрешение споров</h2>
                    <p>
                        Мы оставляем за собой право изменять Условия в любое время. Все споры стороны будут стремиться разрешить путем конструктивных переговоров в соответствии с законодательством <span class="text-accent">Италии</span>. 
                        В случае недостижения согласия, спор подлежит рассмотрению по месту регистрации Оператора.
                    </p>
                </div>

                <div class="contact-info-block" data-aos="zoom-in">
                    <h2>Контактная информация</h2>
                    <p>Если у вас возникли вопросы, связанные с настоящими Условиями, пожалуйста, свяжитесь с нами:</p>
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