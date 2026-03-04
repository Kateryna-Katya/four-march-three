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
    <title>
        <?= $domainTitle ?> | Экспертный консалтинг и стратегии роста
    </title>

    <link rel="icon"
        href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><rect width=%22100%22 height=%22100%22 rx=%2220%22 fill=%22%230f172a%22/><path d=%22M30 30 L70 70 M70 30 L30 70%22 stroke=%22%23fbbf24%22 stroke-width=%2212%22 stroke-linecap=%22round%22/></svg>"
        type="image/svg+xml">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&family=Montserrat:wght@700;800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header class="header" id="header">
        <div class="container header__container">
            <a href="./#hero" class="logo">
                <span class="logo__dot"></span>
                <?= $domainTitle ?>
            </a>

            <nav class="nav" id="nav">
                <ul class="nav__list">
                    <li><a href="./#hero" class="nav__link">Главная</a></li>
                    <li><a href="./#strategy" class="nav__link">Стратегия</a></li>
                    <li><a href="./#analytics" class="nav__link">Аналитика</a></li>
                    <li><a href="./#scaling" class="nav__link">Масштабирование</a></li>
                    <li><a href="./#cases" class="nav__link">Кейсы</a></li>
                </ul>
            </nav>

            <a href="./#contact" class="btn btn--header">Связаться</a>

            <button class="burger" id="burger" aria-label="Menu">
                <span></span>
            </button>
        </div>
    </header>
<main>
    <section class="pages">
        <div class="container">
            <h1>Условия использования</h1>

            <p>
                Добро пожаловать на сайт <strong><?= $domainTitle ?></strong>! Настоящие Условия использования
                (далее — «Условия» или «Соглашение») представляют собой юридически
                обязывающий договор между вами (далее — «Пользователь») и <strong><?= $domainTitle ?></strong>
                (далее — «Компания», «мы», «нас»). Пожалуйста, внимательно
                ознакомьтесь с ними. Используя наш сайт и любые связанные с ним
                услуги, вы подтверждаете свое полное и безоговорочное согласие с
                данными Условиями. Если вы не согласны, вы должны немедленно
                прекратить использование сайта.
            </p>

            <h2>1. Предмет Соглашения</h2>
            <p>
                Компания предоставляет Пользователю доступ к использованию сайта
                <strong><?= $fullDomain ?></strong> и его функционала, включая, но не ограничиваясь: доступ к
                инновационным материалам, статьям в блоге, экспертным консультациям и другим инструментам 
                развития (далее — «Услуги»). Настоящее Соглашение регулирует все аспекты
                взаимодействия Пользователя с платформой.
            </p>

            <h2>2. Обязанности и права Пользователя</h2>
            <p>
                Вы обязуетесь использовать сайт исключительно в законных и личных
                некоммерческих целях. При использовании платформы <strong><?= $domainTitle ?></strong>
                <strong>запрещается</strong>:
            </p>
            <ul>
                <li>
                    Публиковать, передавать или распространять любую информацию,
                    которая является незаконной, вредоносной, клеветнической,
                    нарушает авторские права или разжигает ненависть.
                </li>
                <li>
                    Предпринимать любые действия, которые могут нарушить нормальную
                    работу сайта, его безопасность или привести к перегрузке
                    цифровой инфраструктуры <strong><?= $domainTitle ?></strong>.
                </li>
                <li>
                    Использовать автоматизированные скрипты (ботов) для сбора
                    информации или иного взаимодействия с сайтом без нашего
                    предварительного письменного разрешения.
                </li>
                <li>
                    Выдавать себя за другое лицо или предоставлять недостоверную
                    информацию о себе при регистрации на консультацию.
                </li>
            </ul>

            <h2>3. Интеллектуальная собственность</h2>
            <p>
                Весь контент, размещенный на сайте <strong><?= $fullDomain ?></strong>, включая тексты, графику,
                изображения, видео, логотипы и программный код (далее — «Контент»), является объектом интеллектуальной
                собственности Компании или ее партнеров. Вам предоставляется ограниченная
                лицензия на доступ и использование Контента в личных целях для профессионального развития. 
                Любое копирование, воспроизведение или распространение Контента без предварительного 
                письменного разрешения правообладателя строго запрещено.
            </p>

            <h2>4. Ограничение ответственности и отказ от гарантий</h2>
            <p>
                Услуги и все материалы на сайте предоставляются по принципу «как
                есть» (as is). Мы не даем никаких гарантий, что сайт будет работать бесперебойно, 
                без ошибок или что его контент является абсолютно точным в контексте динамически 
                меняющегося рынка в Германии и странах ЕС.
            </p>
            <p>
                Компания не несет ответственности за любые прямые или косвенные
                убытки, которые могут возникнуть у Пользователя в результате использования 
                или невозможности использования платформы <strong><?= $domainTitle ?></strong>. 
                Это также относится к любому контенту сторонних ресурсов, ссылки на которые 
                могут быть размещены на нашем сайте.
            </p>

            <h2>5. Изменения в Условиях использования</h2>
            <p>
                Мы оставляем за собой право в любое время изменять или дополнять настоящие Условия. 
                Все изменения вступают в силу с момента их публикации на этой странице. 
                Ваше дальнейшее использование сайта <strong><?= $fullDomain ?></strong> после внесения 
                изменений означает ваше автоматическое согласие с новой редакцией Условий.
            </p>

            <h2>6. Разрешение споров</h2>
            <p>
                Все споры и разногласия стороны будут стремиться разрешить путем конструктивных переговоров.
                В случае если согласие не будет достигнуто, спор подлежит рассмотрению в соответствии 
                с действующим законодательством по месту регистрации Компании в <strong>Германии</strong>.
            </p>

            <h2>7. Контактная информация</h2>
            <p>
                Если у вас возникли вопросы, связанные с настоящими Условиями,
                пожалуйста, свяжитесь с нами по электронной почте:
                <br><br>
                Email: <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a><br>
                Телефон: <a href="tel:+390697639457">+390697639457</a>
            </p>
        </div>
    </section>
</main>



    <footer class="footer">
        <div class="container">
            <div class="footer__grid">
                <div class="footer__col">
                    <a href="./#hero" class="logo logo--footer">
                        <?= $domainTitle ?>
                    </a>
                    <p class="footer__text">Технологии, которые работают на вас. Экспертная поддержка на всех этапах
                        развития вашего бизнеса в Европе и за её пределами.</p>
                </div>

                <div class="footer__col">
                    <h4 class="footer__title">Навигация</h4>
                    <ul class="footer__menu">
                        <li><a href="./#hero">Главная</a></li>
                        <li><a href="./#strategy">Стратегия</a></li>
                        <li><a href="./#analytics">Аналитика</a></li>
                        <li><a href="./#cases">Кейсы</a></li>
                    </ul>
                </div>

                <div class="footer__col">
                    <h4 class="footer__title">Документы</h4>
                    <ul class="footer__menu">
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
                    <ul class="footer__contacts">
                        <li><i class="fa-solid fa-phone"></i> <a href="tel:+442048871571">+44 20 4887 1571</a></li>
                        <li><i class="fa-solid fa-envelope"></i> <a href="mailto:hello@<?= $fullDomain ?>">hello@
                                <?= $fullDomain ?>
                            </a></li>
                        <li><i class="fa-solid fa-location-dot"></i> 25 Old Broad St, London EC2N 1HQ, United Kingdom
                        </li>
                    </ul>
                </div>
            </div>

            <div class="footer__bottom">
                <p>©
                 2026
                    <?= $domainTitle ?>. Все права защищены. Решения, которые меняют правила игры.
                </p>
            </div>
        </div>
    </footer>
        <div id="cookiePopup" class="cookie-popup">
            <div class="cookie-popup__content">
                <p>Этот сайт использует cookies для улучшения работы. Подробнее — в нашей <a href="./cookies.php">Cookie
                        политике</a>.</p>
                <button id="acceptCookies" class="btn btn--header">Принять</button>
            </div>
        </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="script.js"></script>
</body>

</html>