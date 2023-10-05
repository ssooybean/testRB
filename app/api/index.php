<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Клиника</title>
    <link rel="stylesheet" href="./css/style.min.css" />
  </head>
  <body>
    <div class="container">
      <header class="header">
        <div class="header__top">
          <div class="burger"><span></span><span></span><span></span></div>
          <div class="header__left">
            <div class="logo">
              <img src="../images/logo.svg" alt="" />
            </div>
            <div class="adress">
              <span class="adress__city">
                <img
                  src="../images/placeholder.svg"
                  class="svg-placeholder-dims"
                  alt="placeholder"
                />
                Ростов-на-Дону</span
              >
              <span class="adress__street">ул. Ленина, 2Б</span>
            </div>
          </div>
          <div class="header__right">
            <div class="header__number">
              <img src="../images/whatsapp2.svg" alt="" />
              <a href="tel:+78630000000" class="number__text">+7(863) 000 00 00</a>
            </div>
            <button class="btn">Записаться на прием</button>
            <span class="adress--mobile">Ростов-на-Дону</span>
          </div>
        </div>
        <nav class="nav">
          <ul class="nav__list">
            <li class="nav__item"><a href="#">О клинике</a></li>
            <li class="nav__item"><a href="#">Услуги</a></li>
            <li class="nav__item"><a href="#">Специалисты</a></li>
            <li class="nav__item"><a href="#">Цены</a></li>
            <li class="nav__item"><a href="#">Контакты</a></li>
            <li class="nav__item--btn"><button class="btn">Записаться на прием</button></li>
          </ul>
        </nav>
      </header>
      <section class="introduce">
        <div class="introduce__text">
          <h1 class="introduce__title">Многопрофильная клиника для детей и взрослых</h1>
          <p class="introduce__parag">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua
          </p>
        </div>
        <picture class="introduce__img">
          <source srcset="../images/intro.avif" type="image/avif" />
          <source srcset="../images/intro.webp" type="image/webp" />
          <img src="../images/intro.png" alt="introduce" />
        </picture>
      </section>
      <section class="cards">
        <div class="cards__robbon">
          <div class="card">
            <div class="card__text">
              <h2 class="card__title">Check-UP<br /><span>для мужчин</span></h2>
              <ul class="card__list">
                <li class="card__item"><span>Гормональный скрининг</span></li>
                <li class="card__item"><span>Тестостерон</span></li>
                <li class="card__item"><span>Свободный тестостерон</span></li>
                <li class="card__item"><span>Глобулин, связывающий половые гормоны</span></li>
              </ul>
              <p class="card__price">
                Всего 2800₽
                <s><span>3500₽</span></s>
              </p>
              <div class="card__btns">
                <button class="btn">Записаться</button>
                <button class="btn btn__details">Подробнее</button>
              </div>
            </div>
            <picture class="card__img">
              <source srcset="../images/card1.avif" type="image/avif" />
              <source srcset="../images/card1.webp" type="image/webp" />
              <img src="../images/card1.png" alt="card" />
            </picture>
          </div>
          <div class="card">
            <div class="card__text">
              <h2 class="card__title">2<br /><span>для мужчин</span></h2>
              <ul class="card__list">
                <li class="card__item"><span>Гормональный скрининг</span></li>
                <li class="card__item"><span>Тестостерон</span></li>
                <li class="card__item"><span>Свободный тестостерон</span></li>
                <li class="card__item"><span>Глобулин, связывающий половые гормоны</span></li>
              </ul>
              <p class="card__price">
                Всего 2800₽
                <s><span>3500₽</span></s>
              </p>
              <div class="card__btns">
                <button class="btn">Записаться</button>
                <button class="btn btn__details">Подробнее</button>
              </div>
            </div>
            <picture class="card__img">
              <source srcset="../images/card1.avif" type="image/avif" />
              <source srcset="../images/card1.webp" type="image/webp" />
              <img src="../images/card1.png" alt="card" />
            </picture>
          </div>
          <div class="card">
            <div class="card__text">
              <h2 class="card__title">3 <br /><span>для мужчин</span></h2>
              <ul class="card__list">
                <li class="card__item"><span>Гормональный скрининг</span></li>
                <li class="card__item"><span>Тестостерон</span></li>
                <li class="card__item"><span>Свободный тестостерон</span></li>
                <li class="card__item"><span>Глобулин, связывающий половые гормоны</span></li>
              </ul>
              <p class="card__price">
                Всего 2800₽
                <s><span>3500₽</span></s>
              </p>
              <div class="card__btns">
                <button class="btn">Записаться</button>
                <button class="btn btn__details">Подробнее</button>
              </div>
            </div>
            <picture class="card__img">
              <source srcset="../images/card1.avif" type="image/avif" />
              <source srcset="../images/card1.webp" type="image/webp" />
              <img src="../images/card1.png" alt="card" />
            </picture>
          </div>
        </div>
        <div class="card__pagination">
          <svg
            class="page-arrow back"
            width="34"
            height="34"
            viewBox="0 0 34 34"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <g clip-path="url(#clip0_17814_122)">
              <path
                class="arrow"
                d="M32.6718 15.6719H4.54488L9.20421 11.0351C9.7241 10.5177 9.7261 9.67678 9.20866 9.15689C8.69122 8.63693 7.85025 8.635 7.33036 9.15237L0.390637 16.0586C0.390173 16.059 0.389841 16.0595 0.389442 16.0599C-0.129124 16.5773 -0.130784 17.4209 0.389309 17.9401C0.389774 17.9405 0.390106 17.941 0.390505 17.9414L7.33022 24.8476C7.85005 25.3649 8.69102 25.3631 9.20852 24.8431C9.72596 24.3232 9.72397 23.4823 9.20408 22.9648L4.54488 18.3281H32.6718C33.4053 18.3281 33.9999 17.7335 33.9999 17C33.9999 16.2665 33.4053 15.6719 32.6718 15.6719Z"
              />
            </g>
            <defs>
              <clipPath id="clip0_17814_122">
                <rect width="34" height="34" fill="white" />
              </clipPath>
            </defs>
          </svg>

          <span class="page--active">1</span>
          <span>/</span>
          <span class="count-page">4</span>
          <svg
            class="page-arrow next"
            width="34"
            height="18"
            viewBox="0 0 34 18"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              class="arrow"
              d="M1.32822 7.67186H29.4551L24.7958 3.03512C24.2759 2.51768 24.2739 1.67678 24.7913 1.15689C25.3088 0.636925 26.1497 0.635 26.6696 1.15237L33.6094 8.05861C33.6098 8.05901 33.6102 8.05947 33.6106 8.05987C34.1291 8.57731 34.1308 9.42093 33.6107 9.94009C33.6102 9.94049 33.6099 9.94095 33.6095 9.94135L26.6698 16.8476C26.1499 17.3649 25.309 17.3631 24.7915 16.8431C24.274 16.3232 24.276 15.4823 24.7959 14.9648L29.4551 10.3281H1.32822C0.5947 10.3281 9.91821e-05 9.7335 9.91821e-05 8.99998C9.91821e-05 8.26646 0.5947 7.67186 1.32822 7.67186Z"
            />
          </svg>
        </div>
      </section>
      <footer class="footer">
        <div class="footer__right">
          <div class="logo">
            <img src="../images/logoFooter.svg" alt="logotype" />
          </div>
          <div class="footer__nav">
            <ul class="footer__list">
              <li class="footer__item"><a href="#">О клинике</a></li>
              <li class="footer__item"><a href="#">Услуги</a></li>
              <li class="footer__item"><a href="#">Специалисты</a></li>
              <li class="footer__item"><a href="#">Цены</a></li>
              <li class="footer__item"><a href="#">Контакты</a></li>
            </ul>
          </div>
        </div>
        <div class="icons">
          <img class="icon" src="../images/instagram.svg" alt="instagram" />
          <img class="icon" src="../images/whatsapp.svg" alt="whatsapp" />
          <img class="icon" src="../images/telegram.svg" alt="telegram" />
        </div>
      </footer>
    </div>
    <div class="form__container">
      <span class="close" id="closeForm">&times;</span>
      <h2>Отправить сообщение</h2>
      <form id="emailForm" method="POST" action="send_email.php">
        <label for="name"
          >Имя:
          <input type="text" id="name" name="name" required />
        </label>

        <label for="email"
          >Email:
          <input type="email" id="email" name="email" required />
        </label>

        <label class="message" for="message"
          >Сообщение:
          <textarea id="message" name="message" required></textarea>
        </label>

        <input class="btn" type="submit" value="Отправить" />
      </form>
    </div>
  </body>
  <script type="module" src="./js/main.min.js"></script>
</html>
