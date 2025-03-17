@extends('partials.master')
@section('main')
<style>
  #hero__wrapper {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    height: auto;
    min-height: 300px;
    text-align: center;
    color: white !important;
    background-image: url('https://img.freepik.com/free-photo/dusk-colorful-dramatic-yellow-sun_1203-5704.jpg?uid=R190373578&ga=GA1.1.655176800.1740923195&semt=ais_hybrid');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}

#hero__wrapper::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.3);
    z-index: 0;
}

.hero__wrapper__main {
    position: relative;
    z-index: 1;
    text-align: center;
}

.hero__wrapper__main h4 {
    font-size: 52px;
    letter-spacing: 1px;
}
.hero__wrapper__main small {
    font-size: 21px;
    letter-spacing: 1px;
}
.hero__wrapper__main .hero__wrapper__input__area {
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    gap: 3px;
    margin-top: 10px;
}
.hero__wrapper__main .hero__wrapper__input__area input,
.hero__wrapper__main .hero__wrapper__input__area select {
    width: 100%;
    height: 48px;
    padding-left: 10px;
    background-color: white;
    border: none;
}
.hero__wrapper__main .hero__wrapper__input__area button {
    width: 100%;
    height: 48px;
    border: none;
    background-color: #f26627;
    color: white;
}
</style>

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
