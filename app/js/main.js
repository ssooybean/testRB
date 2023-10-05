function carouselFunc() {
  const pageActive = document.querySelector('.page--active');
  const pageCount = document.querySelector('.count-page');

  const prevBtn = document.querySelector('.back');
  const nextBtn = document.querySelector('.next');

  const carousel = document.querySelector('.cards__robbon');
  const carouselItems = document.querySelectorAll('.card');

  let currentIndex = 0;
  const itemWidth = carouselItems[0].clientWidth;

  pageCount.textContent = carouselItems.length;
  prevBtn.addEventListener('click', () => {
    if (currentIndex > 0) {
      currentIndex--;
    } else {
      currentIndex = carouselItems.length - 1;
    }
    carousel.style.transform = `translateX(-${currentIndex * itemWidth}px)`;
    pageActive.textContent = currentIndex + 1;
  });

  nextBtn.addEventListener('click', () => {
    if (currentIndex < carouselItems.length - 1) {
      currentIndex++;
    } else {
      currentIndex = 0;
    }
    carousel.style.transform = `translateX(-${currentIndex * itemWidth}px)`;
    pageActive.textContent = currentIndex + 1;
  });
}
function navigate() {
  const nav = document.querySelector('.nav');
  let isActive = false;

  const burger = document.querySelector('.burger');
  burger.addEventListener('click', () => {
    if (!isActive) {
      nav.classList.add('active');
      burger.classList.add('active');
      document.body.style.overflow = 'hidden';
    } else {
      nav.classList.remove('active');
      burger.classList.remove('active');
      document.body.style.overflow = 'auto';
    }
    isActive = !isActive;
  });
}
function closeForm() {
  const closeBtn = document.querySelector('.close');
  const form = document.querySelector('.form__container');
  closeBtn.addEventListener('click', () => {
    form.style.display = 'none';
  });
}
function openForm() {
  const form = document.querySelector('.form__container');
  setTimeout(() => {
    form.style.display = 'block';
  }, 10000);
}
openForm();
closeForm();
navigate();
carouselFunc();
