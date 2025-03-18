@extends('partials.master')
@section('main')
<div class="partnership__wrapper">
    <h2 class="partnership__title">İş Birliği Fırsatları</h2>
    <p class="partnership__desc">
        Sektörde güçlü bir ağ oluşturmak ve karşılıklı fayda sağlamak için iş ortaklarımızla iş birliği yapıyoruz. 
        Eğer siz de bizimle iş birliği yapmak istiyorsanız, aşağıdaki şartları inceleyerek başvurunuzu gerçekleştirebilirsiniz.
    </p>
    <div class="partnership__terms">
        <h3>İş Birliği Şartları</h3>
        <ul>
            <li>Firmanızın yasal olarak faaliyet göstermesi gerekmektedir.</li>
            <li>Turizm, lojistik veya hizmet sektöründe faaliyet gösteriyor olmanız tercih sebebidir.</li>
            <li>İş birliği sürecinde müşteri memnuniyeti odaklı çalışılması gerekmektedir.</li>
            <li>İş birliği kapsamında belirlenen finansal koşullar ve sözleşme şartlarına uyulmalıdır.</li>
        </ul>
    </div>
    <div class="partnership__form">
        <h3>İş Birliği Başvuru Formu</h3>
        <form>
            <label>Firma Adı:</label>
            <input type="text" placeholder="Firmanızın adını girin" required>
            <label>Yetkili Kişi:</label>
            <input type="text" placeholder="Yetkili kişi adını girin" required>
            <label>Email Adresi:</label>
            <input type="email" placeholder="Email adresinizi girin" required>
            <label>Telefon Numarası:</label>
            <input type="tel" placeholder="Telefon numaranızı girin" required>
            <label>İş Birliği Türü:</label>
            <select>
                <option value="turizm">Turizm</option>
                <option value="lojistik">Lojistik</option>
                <option value="hizmet">Hizmet Sektörü</option>
                <option value="diğer">Diğer</option>
            </select>
            <label>Mesajınız:</label>
            <textarea placeholder="İş birliği hakkında detaylı bilgi verin" required></textarea>
            <button type="submit" class="partnership__submit">Başvur</button>
        </form>
    </div>
</div>
<script>
document.querySelector(".partnership__form form").addEventListener("submit", function(event) {
    event.preventDefault();
    alert("Başvurunuz alınmıştır. Teşekkür ederiz!");
});
</script>
@endsection
