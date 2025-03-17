<header id="header" style="position: relative" class="header">
      <div class="mobile-menu-overlay"></div>
      <div class="mobile-menu-wrapper">
          <div class="mobile-menu-header">
              <img style="width: 100px" src="{{asset('logo.png')}}" alt="">
              <a href="javascript:void(0);" class="close-menu"><i class="bi bi-x-lg"></i></a>
          </div>
          <ul class="mobile-menu">
              <li><a href="">Anasayfa</a></li>
              <li><a href="">Yurtiçi Turlar</a></li>
              <li><a href="">Yurtdışı Turlar</a></li>
              <li><a href="">Ramazan Bayramı Turları</a></li>
              <li><a href="">Erken Rezervasyon</a></li>
              <li><a href="">Hakkımızda</a></li>
              <li><a href="">İletişim</a></li>
          </ul>
      </div>
    <div class="header__top">
      <div class="header__top__left">
        <div class="header__top__left__main">
          <i class="bi bi-headset"></i>
          <small> + 12 345 67 89 00</small>
        </div>
        <div class="header__top__left__main">
          <i class="bi bi-envelope"></i>
          <small>tour@company.com</small>
        </div>
      </div>
      <div class="header__top__right">
        <ul>
          <li>
            <a href="">
              <i class="bi bi-instagram"></i>
            </a>
          </li>
          <li>
            <a href="">
              <i class="bi bi-linkedin"></i>
            </a>
          </li>
          <li>
            <a href="">
              <i class="bi bi-github"></i>
            </a>
          </li>
          <li>
            <div class="login__area">
              <i class="bi bi-person-lock"></i>
              <a style="font-size: 13px" href="">Giriş Yap</a>
            </div>
          </li>
          <li>
            <div class="login__area"> | <i class="bi bi-person"></i>
              <a style="font-size: 13px" href="">Kayıt Ol</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <div class="header__bottom">
      <div class="header__logo">
        <img src="{{asset('logo.png')}}" alt="">
      </div>
      <div class="header__bottom__menu">
        <ul>
          <li>
            <a href="">Anasayfa</a>
          </li>
          <li class="header__menu">
            <a href="">Yurtiçi Turları</a>
            <div class="header__menu__dropdown">
              <ul>
                <li>
                  <a href="">Kış ve Kayak Turları</a>
                </li>
                <li>
                  <a href="">Günübirlik Turlar</a>
                </li>
                <li>
                  <a href="">Haftasonu Turları</a>
                </li>
                <li>
                  <a href="">Doğu Express Turları</a>
                </li>
                <li>
                  <a href="">Gap Turları</a>
                </li>
                <li>
                  <a href="">Karadeniz Turları</a>
                </li>
                <li>
                  <a href="">Ege Akdeniz Turları</a>
                </li>
                <li>
                  <a href="">Doğu Anadolu Turları</a>
                </li>
                <li>
                  <a href="">Kapadokya Turları</a>
                </li>
                <li>
                  <a href="">Salda Gölü Turları</a>
                </li>
                <li>
                  <a href="">Kıbrıs Turları</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="header__menu">
            <a href="">Yurtdışı Turları</a>
            <div class="header__menu__dropdown">
              <ul>
                <li>
                  <a href="">Dubai Turları</a>
                </li>
                <li>
                  <a href="">Balkan Turlar</a>
                </li>
                <li>
                  <a href="">İtalya Turları</a>
                </li>
                <li>
                  <a href="">Mısır Turları</a>
                </li>
                <li>
                  <a href="">İspanya Turları</a>
                </li>
                <li>
                  <a href="">Tayland Turları</a>
                </li>
                <li>
                  <a href="">Uzak Doğu Turları</a>
                </li>
                <li>
                  <a href="">Orta Avrupa Turları</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="header__menu">
            <a href="">Ramazan Bayramı Turları</a>
            <div class="header__menu__dropdown">
              <ul>
                <li>
                  <a href="">Günübirlik Bayram Turları</a>
                </li>
                <li>
                  <a href="">Konaklamalı Bayram Turlar</a>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <a href="">Erken Rezervasyonlar</a>
          </li>
          <li>
            <a href="">Hakkımızda</a>
          </li>
          <li>
            <a href="">İletişim</a>
          </li>
        </ul>
      </div>
       <a style="display: none;cursor: pointer;" id="mobileMenuOpenButton" type="button"><i class="bi bi-list"></i></a>
    </div>
    <hr>
  </header>
  <section id="hero__wrapper">
    <div class="hero__wrapper__main">
        <h4>Lorem ipsum dolor sit amet.</h4>
        <small>Lorem ipsum dolor sit amet consectetur.</small>
        <div class="hero__wrapper__input__area">
            <input type="text" placeholder="Nereye Gideceksin?">
            <select>
                <option value="">Tur Dönemi Seçin</option>
                <option value="yaz">Yaz Dönemi</option>
                <option value="kis">Kış Dönemi</option>
                <option value="ilkbahar">İlkbahar</option>
                <option value="sonbahar">Sonbahar</option>
            </select>
            <button>Ara</button>
        </div>
     </div>
</section>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
        const menuWrapper = document.querySelector(".mobile-menu-wrapper");
        const overlay = document.querySelector(".mobile-menu-overlay");
        const openMenuButton = document.querySelector("#mobileMenuOpenButton");
        const closeMenu = document.querySelector(".close-menu");

        // Menü Açma
        openMenuButton.addEventListener("click", function () {
            menuWrapper.classList.add("active");
            overlay.classList.add("active");
        });

        // Menü Kapatma
        function closeMenuFunc() {
            menuWrapper.classList.remove("active");
            overlay.classList.remove("active");
        }

        closeMenu.addEventListener("click", closeMenuFunc);
        overlay.addEventListener("click", closeMenuFunc);
    });
</script>