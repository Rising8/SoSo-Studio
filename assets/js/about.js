// Slider for About Page - Get To Know Us Section
document.addEventListener("DOMContentLoaded", function () {
    // Creates a new swiper slider instance targetting the tranding-slider element
    var TrandingSlider = new Swiper('.tranding-slider', {
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        loop: false,
        initialSlide: 1,
        slidesPerView: 2.5,
        spaceBetween: 30,

        // Settings specfic to the coverflow effect - creates a 3D carousel-like appearance
        coverflowEffect: {
            rotate: 0,
            stretch: 0,
            depth: 150,
            modifier: 1,
            slideShadows: false
        },

        // Pagination settings (dots below the slider)
        pagination: {
            el: '.swiper-pagination',
            clickable: true
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev'
        }
    });
});




document.addEventListener('DOMContentLoaded', () => {
  const container = document.getElementById('vtCards');
  if (!container) {
    console.error('vtCards container not found.');
    return;
  }

  const cards = Array.from(container.querySelectorAll('.vt-card'));
  const dots = Array.from(document.querySelectorAll('.vt-dot'));
  const prevBtn = document.querySelector('.vt-prev');
  const nextBtn = document.querySelector('.vt-next');

  if (!cards.length) {
    console.error('No vt-card elements found.');
    return;
  }

  // data-index を保証（ドットにも自動割当）
  cards.forEach((c, i) => { 
    c.dataset.index = i; 
    c.setAttribute('role','group'); // アクセシビリティ補助
    c.setAttribute('aria-expanded', 'false');
  });

  if (dots.length && dots.length !== cards.length) {
    console.warn('Number of .vt-dot elements differs from number of .vt-card elements.');
  }
  // ドットがあるならインデックス付与
  dots.forEach((d, i) => { d.dataset.index = i; d.setAttribute('role','tab'); });

  // 初期現在位置を「中央」にする
  let current = Math.floor(cards.length / 2);

  // 安全なラップ付きで .active を切り替える
  function applyActive(index) {
    index = ((index % cards.length) + cards.length) % cards.length; // 安全なラップ
    cards.forEach((c, i) => {
      const isActive = (i === index);
      c.classList.toggle('active', isActive);
      c.setAttribute('aria-expanded', isActive ? 'true' : 'false');
    });
    dots.forEach((d, i) => d.classList.toggle('active', i === index));
    current = index;
  }

  function setActive(index) {
    const doSwitch = () => applyActive(index);
    if (document.startViewTransition) {
      document.startViewTransition(doSwitch);
    } else {
      doSwitch();
    }
  }

  // カードクリック（デリゲーション）
  container.addEventListener('click', (e) => {
    const card = e.target.closest('.vt-card');
    if (!card) return;
    const idx = Number(card.dataset.index);
    if (!Number.isFinite(idx)) return;
    if (idx === current) return; // 既に active なら何もしない（折りたたむ仕様にする場合は変更可）
    setActive(idx);
  });

  // ドットクリック
  dots.forEach(d => {
    d.addEventListener('click', (e) => {
      const idx = Number(d.dataset.index);
      if (!Number.isFinite(idx)) return;
      setActive(idx);
    });
  });

  // 矢印
  if (prevBtn) prevBtn.addEventListener('click', () => setActive(current - 1));
  if (nextBtn) nextBtn.addEventListener('click', () => setActive(current + 1));

  // キーボード操作（左右）
  document.addEventListener('keydown', (e) => {
    if (e.key === 'ArrowLeft') setActive(current - 1);
    if (e.key === 'ArrowRight') setActive(current + 1);
  });

  // 初期表示（中央のカードを active にする）
  applyActive(current);


});