// 

// function applyTranslations() {
//   document.querySelectorAll('[data-i18n]').forEach(el => {
//     const path = el.getAttribute('data-i18n');
//     const value = getTranslation(path);
//     if (typeof value === 'string') el.textContent = value;
//   });
//   roles = translations[currentLang].hero.roles;
//   roleIndex = 0;
//   typeRole();
// }

// ===== Typing Effect =====
let roles = ['Backend Engineer', 'PHP Developer', 'WordPress Expert', 'Laravel Developer'];
let roleIndex = 0;
let charIndex = 0;
let isDeleting = false;

function typeRole() {
  const el = document.getElementById('typedRole');
  if (!el) return;
  const current = roles[roleIndex];
  if (isDeleting) {
    el.textContent = current.substring(0, charIndex - 1);
    charIndex--;
  } else {
    el.textContent = current.substring(0, charIndex + 1);
    charIndex++;
  }
  let delay = isDeleting ? 50 : 100;
  if (!isDeleting && charIndex === current.length) {
    delay = 2000;
    isDeleting = true;
  } else if (isDeleting && charIndex === 0) {
    isDeleting = false;
    roleIndex = (roleIndex + 1) % roles.length;
    delay = 500;
  }
  setTimeout(typeRole, delay);
}

// ===== Navbar Scroll =====
function initNavbar() {
  const navbar = document.getElementById('navbar');
  const scrollProgress = document.getElementById('scrollProgress');
  window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
      navbar.classList.add('scrolled');
    } else {
      navbar.classList.remove('scrolled');
    }
    const scrollTop = window.scrollY;
    const docHeight = document.documentElement.scrollHeight - window.innerHeight;
    const scrollPercent = (scrollTop / docHeight) * 100;
    scrollProgress.style.width = scrollPercent + '%';
  });
}

// ===== Mobile Menu =====
function initMobileMenu() {
  const toggle = document.getElementById('mobileToggle');
  const links = document.getElementById('navLinks');
  toggle.addEventListener('click', () => {
    toggle.classList.toggle('active');
    links.classList.toggle('open');
  });
  links.querySelectorAll('a').forEach(link => {
    link.addEventListener('click', () => {
      toggle.classList.remove('active');
      links.classList.remove('open');
    });
  });
}



// ===== Contact Form =====
function initContactForm() {
  const form = document.getElementById('contactForm');
  const btn = document.getElementById('submitBtn');
  const btnLabel = btn.querySelector('.btn-label');
  form.addEventListener('submit', (e) => {
    e.preventDefault();
    btnLabel.textContent = 'Sending...';
    btn.style.opacity = '0.7';
    btn.style.pointerEvents = 'none';
    setTimeout(() => {
      btnLabel.textContent = 'Message Sent!';
      form.reset();
      setTimeout(() => {
        btnLabel.textContent = 'Send Message';
        btn.style.opacity = '1';
        btn.style.pointerEvents = 'auto';
      }, 2500);
    }, 1500);
  });
}

// ===== Back to Top =====
function initBackToTop() {
  const btn = document.getElementById('backToTop');
  btn.addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });
}

// ===== Init =====
document.addEventListener('DOMContentLoaded', () => {
  AOS.init({ duration: 800, once: true, offset: 80 });
  if (window.lucide) lucide.createIcons();
  initNavbar();
  initMobileMenu();
  // initLangSwitcher();
  initContactForm();
  initBackToTop();
  typeRole();
  // applyTranslations();
});

// ===== Scroll Progress =====
const scrollProgress = document.getElementById('scrollProgress');
window.addEventListener('scroll', () => {
  const scrollTop = window.scrollY;
  const docHeight = document.documentElement.scrollHeight - window.innerHeight;
  scrollProgress.style.width = (scrollTop / docHeight) * 100 + '%';
});

// ===== Tabs =====
const tabs = document.querySelectorAll('.tab');
const panels = document.querySelectorAll('.lab-panel');

tabs.forEach(tab => {
  tab.addEventListener('click', () => {
    const target = tab.dataset.tab;
    tabs.forEach(t => t.classList.remove('active'));
    panels.forEach(p => p.classList.remove('active'));
    tab.classList.add('active');
    document.getElementById('panel-' + target).classList.add('active');
  });
});

if( document.getElementById('rippleBtn') ) {
  // ===== Ripple Button =====
  const rippleBtn = document.getElementById('rippleBtn');
  rippleBtn.addEventListener('click', (e) => {
    const rect = rippleBtn.getBoundingClientRect();
    const x = e.clientX - rect.left;
    const y = e.clientY - rect.top;
    const ripple = document.createElement('span');
    ripple.className = 'ripple';
    ripple.style.left = (x - 20) + 'px';
    ripple.style.top = (y - 20) + 'px';
    ripple.style.width = '40px';
    ripple.style.height = '40px';
    rippleBtn.appendChild(ripple);
    setTimeout(() => ripple.remove(), 600);
  });

  // ===== Toggle =====
  const toggleSwitch = document.getElementById('toggleSwitch');
  const toggleLabel = document.getElementById('toggleLabel');
  toggleSwitch.addEventListener('click', () => {
    toggleSwitch.classList.toggle('on');
    toggleLabel.classList.toggle('on');
    toggleLabel.textContent = toggleSwitch.classList.contains('on') ? 'ACTIVATED' : 'DORMANT';
  });

  // ===== Drag Card =====
  const dragCard = document.getElementById('dragCard');
  const dragArea = document.getElementById('dragArea');
  let isDragging = false;
  let startX, startY, offsetX = 0, offsetY = 0;

  dragCard.addEventListener('mousedown', (e) => {
    isDragging = true;
    const rect = dragCard.getBoundingClientRect();
    const areaRect = dragArea.getBoundingClientRect();
    startX = e.clientX - rect.left;
    startY = e.clientY - rect.top;
    dragCard.style.transition = 'none';
  });

  document.addEventListener('mousemove', (e) => {
    if (!isDragging) return;
    const areaRect = dragArea.getBoundingClientRect();
    let x = e.clientX - areaRect.left - startX;
    let y = e.clientY - areaRect.top - startY;
    x = Math.max(0, Math.min(x, areaRect.width - dragCard.offsetWidth));
    y = Math.max(0, Math.min(y, areaRect.height - dragCard.offsetHeight));
    dragCard.style.left = x + 'px';
    dragCard.style.top = y + 'px';
    dragCard.style.transform = 'scale(1.1)';
  });

  document.addEventListener('mouseup', () => {
    if (isDragging) {
      isDragging = false;
      dragCard.style.transition = 'transform 0.2s ease';
      dragCard.style.transform = 'scale(1)';
    }
  });

  // Touch support
  dragCard.addEventListener('touchstart', (e) => {
    isDragging = true;
    const rect = dragCard.getBoundingClientRect();
    startX = e.touches[0].clientX - rect.left;
    startY = e.touches[0].clientY - rect.top;
    dragCard.style.transition = 'none';
  });

  document.addEventListener('touchmove', (e) => {
    if (!isDragging) return;
    const areaRect = dragArea.getBoundingClientRect();
    let x = e.touches[0].clientX - areaRect.left - startX;
    let y = e.touches[0].clientY - areaRect.top - startY;
    x = Math.max(0, Math.min(x, areaRect.width - dragCard.offsetWidth));
    y = Math.max(0, Math.min(y, areaRect.height - dragCard.offsetHeight));
    dragCard.style.left = x + 'px';
    dragCard.style.top = y + 'px';
    dragCard.style.transform = 'scale(1.1)';
    e.preventDefault();
  }, { passive: false });

  document.addEventListener('touchend', () => {
    if (isDragging) {
      isDragging = false;
      dragCard.style.transition = 'transform 0.2s ease';
      dragCard.style.transform = 'scale(1)';
    }
  });

  // ===== Init =====
  document.addEventListener('DOMContentLoaded', () => {
    AOS.init({ duration: 800, once: true, offset: 80 });
  });
}