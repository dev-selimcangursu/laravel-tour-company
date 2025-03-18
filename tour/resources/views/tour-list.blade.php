@extends('partials.master')
@section('main')
  <section class="list__wrapper">
    <div class="list__wrapper__top">
        <div class="list__wrapper__left">
            <h4>Arama Sonuçları</h4>
            <small>Tur Arama Sonuçları (Bu Aramaya Ait X Tur Bulunmuştur)</small>
        </div>
        <div class="list__wrapper__right">
            <label for="">Akıllı Sıralama</label>
            <select>
                <option selected value="1">Popüler</option>
                <option selected value="1">Fiyat Artan</option>
                <option selected value="1">Fiyat Azalan</option>
            </select>
        </div>
    </div>
    <div class="list__wrapper__bottom">
        <div class="list__wrapper__filter">
            <div class="filter-group">
                <label for="price">Fiyat Aralığı (₺)</label>
                <input type="number" id="price-min" placeholder="Min">
                <input type="number" id="price-max" placeholder="Max">
            </div>
            <div class="filter-group">
                <label for="date">Tarih Seç</label>
                <input type="date" id="date">
            </div>

            <div class="filter-actions">
                <button class="btn-filter">Filtrele</button>
                <button class="btn-reset">Sıfırla</button>
            </div>
        </div>    
    <div class="list__wrapper__card__list">
        <div class="list__wrapper__card">
            <div class="list__wrapper__card__left">
                <img src="https://via.placeholder.com/120x80" alt="Tur Görseli">
                <div class="list__wrapper__card__left__main">
                    <h5>Kapadokya Turu</h5>
                    <small>İstanbul Kalkışlı</small>
                    <ul>
                        <li>2 Gece 3 Gün</li>
                        <li>Otobüsle Ulaşım</li>
                        <li>Kahvaltı Dahil</li>
                    </ul>
                </div>
            </div>
            <div class="list__wrapper__card__right">
                <small>%15'e Varan İndirim</small>
                <span>1470.00 TL</span>
                <span>1250.00 TL</span>
                <button>Turu İncele</button>
            </div>
        </div>
        <div class="list__wrapper__card">
            <div class="list__wrapper__card__left">
                <img src="https://via.placeholder.com/120x80" alt="Tur Görseli">
                <div class="list__wrapper__card__left__main">
                    <h5>Kapadokya Turu</h5>
                    <small>İstanbul Kalkışlı</small>
                    <ul>
                        <li>2 Gece 3 Gün</li>
                        <li>Otobüsle Ulaşım</li>
                        <li>Kahvaltı Dahil</li>
                    </ul>
                </div>
            </div>
            <div class="list__wrapper__card__right">
                <small>%15'e Varan İndirim</small>
                <span>1470.00 TL</span>
                <span>1250.00 TL</span>
                <button>Turu İncele</button>
            </div>
        </div>
        <div class="list__wrapper__card">
            <div class="list__wrapper__card__left">
                <img src="https://via.placeholder.com/120x80" alt="Tur Görseli">
                <div class="list__wrapper__card__left__main">
                    <h5>Kapadokya Turu</h5>
                    <small>İstanbul Kalkışlı</small>
                    <ul>
                        <li>2 Gece 3 Gün</li>
                        <li>Otobüsle Ulaşım</li>
                        <li>Kahvaltı Dahil</li>
                    </ul>
                </div>
            </div>
            <div class="list__wrapper__card__right">
                <small>%15'e Varan İndirim</small>
                <span>1470.00 TL</span>
                <span>1250.00 TL</span>
                <button>Turu İncele</button>
            </div>
        </div>
        <div class="list__wrapper__card">
            <div class="list__wrapper__card__left">
                <img src="https://via.placeholder.com/120x80" alt="Tur Görseli">
                <div class="list__wrapper__card__left__main">
                    <h5>Kapadokya Turu</h5>
                    <small>İstanbul Kalkışlı</small>
                    <ul>
                        <li>2 Gece 3 Gün</li>
                        <li>Otobüsle Ulaşım</li>
                        <li>Kahvaltı Dahil</li>
                    </ul>
                </div>
            </div>
            <div class="list__wrapper__card__right">
                <small>%15'e Varan İndirim</small>
                <span>1470.00 TL</span>
                <span>1250.00 TL</span>
                <button>Turu İncele</button>
            </div>
        </div>
        <div class="list__wrapper__card">
            <div class="list__wrapper__card__left">
                <img src="https://via.placeholder.com/120x80" alt="Tur Görseli">
                <div class="list__wrapper__card__left__main">
                    <h5>Kapadokya Turu</h5>
                    <small>İstanbul Kalkışlı</small>
                    <ul>
                        <li>2 Gece 3 Gün</li>
                        <li>Otobüsle Ulaşım</li>
                        <li>Kahvaltı Dahil</li>
                    </ul>
                </div>
            </div>
            <div class="list__wrapper__card__right">
                <small>%15'e Varan İndirim</small>
                <span>1470.00 TL</span>
                <span>1250.00 TL</span>
                <button>Turu İncele</button>
            </div>
        </div>
    </div>
    </div>
  </section>
@endsection