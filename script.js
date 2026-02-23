document.addEventListener('DOMContentLoaded', () => {
    // 1. Инициализация AOS
    AOS.init({ duration: 800, once: true });

    // 2. Мобильное меню
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.nav');
    const navLinks = document.querySelectorAll('.nav__link');

    burger.addEventListener('click', () => {
        nav.classList.toggle('nav--active');
        burger.classList.toggle('burger--active');
    });

    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            nav.classList.remove('nav--active');
            burger.classList.remove('burger--active');
        });
    });

    // 3. Валидация телефона (только цифры)
    const phoneInput = document.getElementById('phone-input');
    phoneInput.addEventListener('input', (e) => {
        e.target.value = e.target.value.replace(/\D/g, '');
    });

    // 4. Математическая капча
    const captchaLabel = document.getElementById('captcha-label');
    const captchaInput = document.getElementById('captcha-input');
    let num1 = Math.floor(Math.random() * 10) + 1;
    let num2 = Math.floor(Math.random() * 10) + 1;
    let correctAnswer = num1 + num2;
    captchaLabel.innerText = `Сколько будет ${num1} + ${num2}?`;

    // 5. Обработка формы (AJAX имитация)
    const form = document.getElementById('ai-form');
    const status = document.getElementById('form-status');

    form.addEventListener('submit', (e) => {
        e.preventDefault();
        
        if (parseInt(captchaInput.value) !== correctAnswer) {
            status.innerText = "Ошибка капчи! Попробуйте снова.";
            status.className = "form__status form__status--error";
            return;
        }

        // Имитация отправки
        const btn = form.querySelector('button');
        const originalBtnText = btn.innerText;
        btn.innerText = "Отправка...";
        btn.disabled = true;

        setTimeout(() => {
            status.innerText = "Успешно! Мы свяжемся с вами в ближайшее время.";
            status.className = "form__status form__status--success";
            form.reset();
            btn.innerText = originalBtnText;
            btn.disabled = false;
            
            // Обновляем капчу
            num1 = Math.floor(Math.random() * 10) + 1;
            num2 = Math.floor(Math.random() * 10) + 1;
            correctAnswer = num1 + num2;
            captchaLabel.innerText = `Сколько будет ${num1} + ${num2}?`;
        }, 1500);
    });

    // 6. Аккордеон (Инструменты)
    const accordionItems = document.querySelectorAll('.accordion-item');
    accordionItems.forEach(item => {
        item.querySelector('.accordion-header').addEventListener('click', () => {
            const isActive = item.classList.contains('active');
            accordionItems.forEach(i => i.classList.remove('active'));
            if (!isActive) item.classList.add('active');
        });
    });

    // 7. Cookie Popup
    const cookiePopup = document.getElementById('cookie-popup');
    const acceptBtn = document.getElementById('accept-cookies');

    if (!localStorage.getItem('cookies-accepted')) {
        setTimeout(() => {
            cookiePopup.classList.add('cookie-popup--active');
        }, 2000);
    }

    acceptBtn.addEventListener('click', () => {
        localStorage.setItem('cookies-accepted', 'true');
        cookiePopup.classList.remove('cookie-popup--active');
    });

    // 8. Canvas Background (уже был выше, убедитесь что он в этом файле)
    initCanvasAnimation(); 
});

// Вынос функции Canvas для чистоты
function initCanvasAnimation() {
    const canvas = document.getElementById('bg-canvas');
    if(!canvas) return;
    const ctx = canvas.getContext('2d');
    let particles = [];
    const count = 70;

    function init() {
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
    }

    class P {
        constructor() {
            this.x = Math.random() * canvas.width;
            this.y = Math.random() * canvas.height;
            this.vx = (Math.random() - 0.5) * 0.3;
            this.vy = (Math.random() - 0.5) * 0.3;
        }
        update() {
            this.x += this.vx; this.y += this.vy;
            if(this.x < 0 || this.x > canvas.width) this.vx *= -1;
            if(this.y < 0 || this.y > canvas.height) this.vy *= -1;
        }
    }

    for(let i=0; i<count; i++) particles.push(new P());

    function draw() {
        ctx.clearRect(0,0,canvas.width, canvas.height);
        ctx.fillStyle = 'rgba(98, 0, 234, 0.2)';
        particles.forEach((p, i) => {
            p.update();
            ctx.beginPath(); ctx.arc(p.x, p.y, 1, 0, Math.PI*2); ctx.fill();
            for(let j=i+1; j<particles.length; j++) {
                const d = Math.hypot(p.x - particles[j].x, p.y - particles[j].y);
                if(d < 120) {
                    ctx.strokeStyle = `rgba(255,235,59,${0.1 * (1 - d/120)})`;
                    ctx.beginPath(); ctx.moveTo(p.x, p.y); ctx.lineTo(particles[j].x, particles[j].y); ctx.stroke();
                }
            }
        });
        requestAnimationFrame(draw);
    }
    window.addEventListener('resize', init);
    init(); draw();
}