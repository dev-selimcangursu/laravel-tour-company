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
@endsection
