document.addEventListener('DOMContentLoaded', () => {
    // Инициализация AOS
    AOS.init({
        duration: 1000,
        once: true,
        offset: 100
    });

    // Изменение хедера при скролле
    const header = document.querySelector('#header');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.classList.add('header--scrolled');
        } else {
            header.classList.remove('header--scrolled');
        }
    });

    // Анимация появления логотипа через Anime.js
    anime({
        targets: '.logo',
        opacity: [0, 1],
        translateX: [-20, 0],
        duration: 1200,
        easing: 'easeOutExpo'
    });

    // Плавный скролл для навигации
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                window.scrollTo({
                    top: target.offsetTop - 80,
                    behavior: 'smooth'
                });
            }
        });
    });
});
// Добавьте этот код в функцию DOMContentLoaded
const initHeroAnimation = () => {
    const canvas = document.getElementById('heroCanvas');
    const ctx = canvas.getContext('2d');
    let width, height, lastNow;
    let dots = [];
    const numDots = 60;

    const resize = () => {
        width = canvas.width = window.innerWidth;
        height = canvas.height = window.innerHeight;
    };

    window.addEventListener('resize', resize);
    resize();

    for (let i = 0; i < numDots; i++) {
        dots.push({
            x: Math.random() * width,
            y: Math.random() * height,
            radius: Math.random() * 2 + 1,
            vx: (Math.random() - 0.5) * 0.5,
            vy: (Math.random() - 0.5) * 0.5
        });
    }

    const draw = () => {
        ctx.clearRect(0, 0, width, height);
        ctx.fillStyle = '#fbbf24';
        ctx.strokeStyle = 'rgba(251, 191, 36, 0.1)';

        dots.forEach((dot, i) => {
            dot.x += dot.vx;
            dot.y += dot.vy;

            if (dot.x < 0 || dot.x > width) dot.vx *= -1;
            if (dot.y < 0 || dot.y > height) dot.vy *= -1;

            ctx.beginPath();
            ctx.arc(dot.x, dot.y, dot.radius, 0, Math.PI * 2);
            ctx.fill();

            for (let j = i + 1; j < dots.length; j++) {
                const dot2 = dots[j];
                const dist = Math.hypot(dot.x - dot2.x, dot.y - dot2.y);
                if (dist < 150) {
                    ctx.beginPath();
                    ctx.moveTo(dot.x, dot.y);
                    ctx.lineTo(dot2.x, dot2.y);
                    ctx.stroke();
                }
            }
        });
        requestAnimationFrame(draw);
    };
    draw();
};

initHeroAnimation();

// GSAP анимация заголовка (если подключите GSAP, если нет — используем Anime.js)
anime({
    targets: '.hero__title',
    translateY: [30, 0],
    opacity: [0, 1],
    delay: 300,
    duration: 1500,
    easing: 'easeOutExpo'
});
// Функция анимации цифр
const animateNumbers = () => {
    const stats = document.querySelectorAll('.stat-item__num');
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const target = entry.target;
                const endValue = parseInt(target.getAttribute('data-target'));
                
                anime({
                    targets: target,
                    innerHTML: [0, endValue],
                    easing: 'linear',
                    round: 1,
                    duration: 2000,
                    update: function(anim) {
                        // Можно добавить форматирование, если нужно
                    }
                });
                observer.unobserve(target);
            }
        });
    }, { threshold: 0.5 });

    stats.forEach(stat => observer.observe(stat));
};

// Вызовите эту функцию внутри DOMContentLoaded
animateNumbers();
// Добавим микровзаимодействие для карточек кейсов
document.querySelectorAll('.case-card').forEach(card => {
    card.addEventListener('mouseenter', () => {
        anime({
            targets: card.querySelector('.case-card__badge'),
            scale: [1, 1.1],
            duration: 300,
            easing: 'easeOutQuad'
        });
    });
    
    card.addEventListener('mouseleave', () => {
        anime({
            targets: card.querySelector('.case-card__badge'),
            scale: [1.1, 1],
            duration: 300,
            easing: 'easeOutQuad'
        });
    });
});
// --- Валидация телефона (только цифры) ---
const phoneInput = document.getElementById('phoneInput');
phoneInput.addEventListener('input', (e) => {
    e.target.value = e.target.value.replace(/[^0-9]/g, '');
});

// --- Математическая капча ---
let captchaAnswer;
const generateCaptcha = () => {
    const num1 = Math.floor(Math.random() * 10) + 1;
    const num2 = Math.floor(Math.random() * 10) + 1;
    captchaAnswer = num1 + num2;
    document.getElementById('captchaLabel').innerText = `${num1} + ${num2} =`;
};

// --- Обработка формы (AJAX имитация) ---
const contactForm = document.getElementById('contactForm');
contactForm.addEventListener('submit', (e) => {
    e.preventDefault();
    const userInput = parseInt(document.getElementById('captchaInput').value);
    const messageBox = document.getElementById('formMessage');

    if (userInput !== captchaAnswer) {
        alert('Неверный ответ капчи. Попробуйте еще раз.');
        generateCaptcha();
        return;
    }

    // Имитация отправки
    const btn = contactForm.querySelector('button');
    btn.disabled = true;
    btn.innerText = 'Отправка...';

    setTimeout(() => {
        messageBox.innerText = 'Успешно! Мы свяжемся с вами в ближайшее время.';
        messageBox.classList.add('form__message--success');
        contactForm.reset();
        generateCaptcha();
        btn.disabled = false;
        btn.innerText = 'Запросить доступ';
        
        // Скрыть сообщение через 5 секунд
        setTimeout(() => {
            messageBox.classList.remove('form__message--success');
        }, 5000);
    }, 1500);
});

// --- Cookie Popup Logic ---
const cookiePopup = document.getElementById('cookiePopup');
const acceptBtn = document.getElementById('acceptCookies');

if (!localStorage.getItem('cookiesAccepted')) {
    setTimeout(() => {
        cookiePopup.classList.add('cookie-popup--active');
    }, 2000);
}

acceptBtn.addEventListener('click', () => {
    localStorage.setItem('cookiesAccepted', 'true');
    cookiePopup.classList.remove('cookie-popup--active');
});

// Инициализация капчи при загрузке
generateCaptcha();
const burger = document.getElementById('burger');
const nav = document.getElementById('nav');
const navLinks = document.querySelectorAll('.nav__link');
const body = document.body;

const toggleMenu = () => {
    const isActive = nav.classList.contains('nav--active');
    
    burger.classList.toggle('burger--active');
    nav.classList.toggle('nav--active');
    body.classList.toggle('no-scroll');

    if (!isActive) {
        // Анимация появления ссылок при открытии
        anime({
            targets: '.nav__link',
            translateY: [30, 0],
            opacity: [0, 1],
            delay: anime.stagger(100, {start: 300}),
            easing: 'easeOutExpo',
            duration: 800
        });
    }
};

burger.addEventListener('click', toggleMenu);

// Закрытие меню при клике на ссылку
navLinks.forEach(link => {
    link.addEventListener('click', () => {
        if (nav.classList.contains('nav--active')) {
            toggleMenu();
        }
    });
});