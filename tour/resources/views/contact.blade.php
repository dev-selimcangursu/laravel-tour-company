@extends('partials.master')
@section('main')
<div class="contact__wrapper">
    <div class="contact__top">
        <h3>İletişim</h3>
        <div class="contact__top__main">
            <div class="contact__top__main__item">
                <i class="bi bi-building"></i>
                <p>Şirket Adı: XYZ Turizm</p>
                <p>Adres: İstanbul, Türkiye</p>
            </div>
            <div class="contact__top__main__item">
                <i class="bi bi-telephone"></i>
                <p>Telefon: +90 555 123 45 67</p>
                <p>Çalışma Saatleri: 09:00 - 18:00</p>
            </div>
            <div class="contact__top__main__item">
                <i class="bi bi-whatsapp"></i>
                <p>WhatsApp: +90 555 987 65 43</p>
                <p>7/24 Destek Hattı</p>
            </div>
            <div class="contact__top__main__item">
                <i class="bi bi-envelope-paper"></i>
                <p>E-posta: info@xyzturizm.com</p>
                <p>Destek: destek@xyzturizm.com</p>
            </div>
        </div>
    </div>
    <div class="contact__map">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3111.5140632549685!2d28.97835807547417!3d41.00823737127069!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab99b7f57b1fd%3A0x83a3c0f8b1dfbd8c!2sİstanbul!5e0!3m2!1str!2str!4v1648912727073!5m2!1str!2str" 
            width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</div>

<style>

</style>

@endsection
