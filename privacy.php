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
            <h1 data-aos="fade-down">Политика конфиденциальности</h1>

            <p data-aos="fade-up">
                Политика конфиденциальности распространяется на персональные данные,
                предоставляемые клиентами <strong><?= $domainTitle ?></strong>, как для оказания различного рода
                услуг по консалтингу, так и для других взаимодействий в электронном
                формате, а также при участии клиентов в экспертных программах и акциях, оказывая
                техническую поддержку и информационное сопровождение в рамках юрисдикции Великобритании.
            </p>

            <p data-aos="fade-up">
                <strong><?= $domainTitle ?></strong> оставляет за собой право вносить изменения и дополнения
                в действующие положения Политики конфиденциальности. Эти изменения будут иметь приоритет над текущими
                положениями. Обратите внимание, что наши услуги могут содержать ссылки на ресурсы третьих лиц, которые имеют свои
                собственные положения. В таких случаях <strong><?= $domainTitle ?></strong> не несет ответственности за содержание и соблюдение
                конфиденциальности любой сторонней компании. Предоставляя свои данные, вы даете полное согласие
                на их обработку способами, предусмотренными настоящей Политикой.
            </p>

            <h2 data-aos="fade-up">Порядок сбора, хранения и уничтожения персональных данных</h2>
            <p data-aos="fade-up">
                <strong><?= $domainTitle ?></strong> собирает персональные данные только с согласия
                пользователя и исключительно для предоставления качественных услуг: доступа к аналитической платформе,
                участия в стратегических сессиях, получения отчетов и внедрения инноваций. Для
                предотвращения утечки данных мы используем полный комплекс мер информационной безопасности, включая современные протоколы шифрования, соответствующие стандартам Англии.
            </p>

            <p data-aos="fade-up">
                Максимальный срок хранения персональных данных составляет 75
                лет с даты получения информации. В остальных случаях компания хранит данные клиента до
                завершения своей деятельности или до момента официального отзыва согласия пользователем.
            </p>

            <p data-aos="fade-up">
                Уничтожение, обезличивание или блокирование данных осуществляется для исключения возможности
                их дальнейшей обработки, если цель сбора была достигнута или по запросу клиента.
            </p>

            <p data-aos="fade-up">
                <strong><?= $domainTitle ?></strong> собирает данные в следующих категориях:
            </p>

            <h2 data-aos="fade-up">Техническая информация:</h2>
            <ul data-aos="fade-up">
                <li>время доступа и IP-адрес;</li>
                <li>источники обращения на интернет-ресурс <strong><?= $fullDomain ?></strong>;</li>
                <li>интернет-страницы, посещаемые пользователем;</li>
                <li>просмотры информационных и рекламных блоков;</li>
                <li>иная техническая информация, предоставляемая браузером;</li>
                <li>номер телефона (в случае звонка по контактам, указанным на сайте).</li>
            </ul>

            <p data-aos="fade-up">
                При регистрации или заполнении форм обратной связи мы собираем информацию, 
                необходимую для аутентификации и персонализации услуг:
            </p>
            <ul data-aos="fade-up">
                <li>имя пользователя;</li>
                <li>e-mail и номер телефона для оперативной связи;</li>
            </ul>

            <h2 data-aos="fade-up">Информация о действиях пользователя:</h2>
            <ul data-aos="fade-up">
                <li>информация о соглашениях и контрактах между клиентом и <strong><?= $domainTitle ?></strong>;</li>
                <li>данные о запросах, отправленных через формы на сайте;</li>
                <li>сведения о полученных консультациях и пройденных программах;</li>
                <li>произведенные платежи и иная финансовая информация, предусмотренная действующим законодательством Великобритании и ЕС.</li>
            </ul>

            <h2 data-aos="fade-up">Цели обработки персональных данных клиентов:</h2>
            <ul data-aos="fade-up">
                <li>предоставление консалтинговых услуг и доступа к аналитической платформе;</li>
                <li>учет пожеланий при разработке новых технологических решений;</li>
                <li>информирование об акциях, скидках и новых материалах в блоге через e-mail;</li>
                <li>обеспечение качественной экспертной поддержки.</li>
            </ul>

            <h2 data-aos="fade-up">
                <strong><?= $domainTitle ?></strong> не предоставляет данные клиентов третьим лицам, за исключением:
            </h2>
            <ul data-aos="fade-up">
                <li>получения прямого согласия пользователя на такую передачу;</li>
                <li>по требованию компетентных органов <strong>Великобритании</strong> в соответствии с законодательством;</li>
                <li>случаев стратегического слияния или поглощения компании.</li>
            </ul>

            <h2 data-aos="fade-up">Использование файлов cookie и точечных маркеров</h2>
            <p data-aos="fade-up">
                Файлы cookie позволяют нам анализировать трафик и сохранять ваши предпочтения (например, настройки региона <strong>Англия</strong>), 
                чтобы сделать использование <strong><?= $fullDomain ?></strong> максимально эффективным. Точечные маркеры 
                используются для статистического анализа посещений. Вы можете в любое время отключить Cookies в настройках своего браузера.
            </p>

            <h2 data-aos="fade-up">Права пользователя в отношении персональных данных</h2>
            <p data-aos="fade-up">
                Если вы хотите отредактировать свои данные или полностью прекратить их обработку в соответствии с нормами <strong>UK GDPR</strong>, 
                пожалуйста, свяжитесь с командой <strong><?= $domainTitle ?></strong> по адресу: 
                <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a>.
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