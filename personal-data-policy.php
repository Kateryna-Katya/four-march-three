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
            <h1 data-aos="fade-down">Политика обработки персональных данных</h1>

            <h2 data-aos="fade-up">1. Общие положения</h2>
            <p data-aos="fade-up">
                Настоящая политика (далее — «Политика») определяет порядок обработки персональных
                данных, предпринимаемые платформой <strong><?= $domainTitle ?></strong> (далее — «Оператор»), 
                в соответствии с требованиями <strong>Data Protection Act 2018</strong> и регламента <strong>UK GDPR</strong>.
            </p>
            <p data-aos="fade-up">
                1.1. Оператор считает своей приоритетной задачей соблюдение прав и свобод человека при
                обработке его персональных данных, включая защиту права на неприкосновенность частной жизни и личную тайну.
            </p>
            <p data-aos="fade-up">
                1.2. Настоящая Политика применяется ко всей информации, которую
                Оператор может получить о посетителях (далее — «Пользователи»)
                веб-сайта <strong><?= $fullDomain ?></strong>.
            </p>

            <h2 data-aos="fade-up">2. Основные понятия</h2>
            <ul data-aos="fade-up">
                <li>
                    <strong>Веб-сайт</strong> — совокупность цифровых материалов и ПО, доступных по адресу 
                    <strong><?= $fullDomain ?></strong>.
                </li>
                <li><strong>Пользователь</strong> — любое физическое лицо, посещающее ресурс.</li>
                <li>
                    <strong>Персональные данные</strong> — любая информация, прямо или косвенно относящаяся к идентифицированному Пользователю.
                </li>
                <li>
                    <strong>Безопасность данных</strong> — комплекс мер по защите информации от неправомерного доступа, изменения или уничтожения.
                </li>
            </ul>

            <h2 data-aos="fade-up">3. Категории обрабатываемых данных</h2>
            <p data-aos="fade-up">Оператор обрабатывает следующие данные:</p>
            <ul data-aos="fade-up">
                <li>
                    <strong>Данные, предоставляемые Пользователем:</strong>
                    <ul>
                        <li>Имя и фамилия;</li>
                        <li>Адрес электронной почты;</li>
                        <li>Номер телефона (валидация согласно стандартам Великобритании).</li>
                    </ul>
                </li>
                <li>
                    <strong>Технические данные:</strong>
                    <ul>
                        <li>
                            Сбор обезличенных данных (в т.ч. «cookie») с помощью Google Analytics для анализа активности в блоге и оптимизации консалтинговых предложений.
                        </li>
                    </ul>
                </li>
            </ul>

            <h2 data-aos="fade-up">4. Цели обработки</h2>
            <ul data-aos="fade-up">
                <li>Предоставление доступа к экспертным материалам и сервисам <strong><?= $domainTitle ?></strong>.</li>
                <li>Установление обратной связи для проведения бесплатных консультаций.</li>
                <li>Заключение договоров на внедрение инновационных технологий и программ пассивного дохода.</li>
                <li>Информирование о новых стратегиях роста посредством Email-рассылок (с возможностью отписки).</li>
            </ul>

            <h2 data-aos="fade-up">5. Правовые основания</h2>
            <p data-aos="fade-up">
                Оператор обрабатывает данные только при наличии:
            </p>
            <ul data-aos="fade-up">
                <li>Явного согласия Пользователя, данного через формы на сайте.</li>
                <li>Законного интереса Оператора в обеспечении безопасности и функциональности ресурса.</li>
            </ul>

            <h2 data-aos="fade-up">6. Безопасность и сроки хранения</h2>
            <ul data-aos="fade-up">
                <li>
                    Оператор применяет современные методы шифрования и организационные меры для защиты данных в юрисдикции Великобритании.
                </li>
                <li>
                    Данные хранятся до достижения целей обработки или до момента отзыва согласия Пользователем.
                </li>
                <li>
                    Пользователь может в любой момент отозвать согласие, написав на 
                    <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a>.
                </li>
            </ul>

            <h2 data-aos="fade-up">7. Контактная информация</h2>
            <p data-aos="fade-up">
                По всем вопросам, связанным с вашими данными на платформе <strong><?= $domainTitle ?></strong>, обращайтесь:
                <br><br>
                Email: <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a><br>
                Телефон: <a href="tel:+442048871571">+44 20 4887 1571</a><br>
                Адрес: 25 Old Broad St, London EC2N 1HQ, United Kingdom
            </p>
            
            <div class="pages-footer" style="margin-top: 50px; padding-top: 30px; border-top: 1px solid rgba(0,0,0,0.05);" data-aos="fade-in">
                <p style="font-size: 0.9rem; opacity: 0.7;">Редакция от: 04 Марта 2026</p>
            </div>
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