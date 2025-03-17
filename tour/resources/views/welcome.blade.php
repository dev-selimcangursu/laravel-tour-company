@extends('partials.master')
@section('main')
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
<section class="hero__advert__card">
    <div class="advert__card">
        <img src="https://cdn-icons-png.freepik.com/256/10913/10913730.png?uid=R190373578&ga=GA1.1.655176800.1740923195&semt=ais_hybrid" alt="">
        <div class="advert__card__main">
            <h4>Hızlı ve Güvenilir</h4>
            <small>Hizmetlerimizle her zaman yanınızdayız.</small>
        </div>
    </div>
    <div class="advert__card">
        <img src="https://cdn-icons-png.freepik.com/256/14121/14121701.png?uid=R190373578&ga=GA1.1.655176800.1740923195&semt=ais_hybrid" alt="">
        <div class="advert__card__main">
            <h4>7/24 Destek</h4>
            <small>Her an, her yerde bizimle iletişime geçin.</small>
        </div>
    </div>
    <div class="advert__card">
        <img src="https://cdn-icons-png.freepik.com/256/15836/15836890.png?uid=R190373578&ga=GA1.1.655176800.1740923195&semt=ais_hybrid" alt="">
        <div class="advert__card__main">
            <h4>Memnuniyet Garantisi</h4>
            <small>Müşteri memnuniyeti bizim önceliğimizdir.</small>
        </div>
    </div>
</section>

@endsection
