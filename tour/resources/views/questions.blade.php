@extends('partials.master')
@section('main')
<div class="faq__wrapper">
    <h3 class="faq__title">Sıkça Sorulan Sorular</h3>
    <div class="faq__content">
        <div class="faq__item">
            <button class="faq__question">1. Şirketiniz hangi hizmetleri sunuyor? <i class="bi bi-chevron-down"></i></button>
            <div class="faq__answer">
                <p>Şirketimiz, yurt içi ve yurt dışı turlar, otel rezervasyonları, uçak bileti hizmetleri ve vize danışmanlığı gibi geniş kapsamlı hizmetler sunmaktadır.</p>
            </div>
        </div>
        <div class="faq__item">
            <button class="faq__question">2. Tur iptal veya değişiklik işlemlerini nasıl yapabilirim? <i class="bi bi-chevron-down"></i></button>
            <div class="faq__answer">
                <p>Tur iptal ve değişiklik taleplerinizi çağrı merkezimizden veya web sitemiz üzerinden gerçekleştirebilirsiniz. İptal ve değişiklikler, sözleşmede belirtilen koşullara tabidir.</p>
            </div>
        </div>
        <div class="faq__item">
            <button class="faq__question">3. Ödeme yöntemleriniz nelerdir? <i class="bi bi-chevron-down"></i></button>
            <div class="faq__answer">
                <p>Visa, MasterCard, American Express gibi kredi kartlarını kabul ediyoruz. Ayrıca banka havalesi ve taksit seçeneklerimiz de mevcuttur.</p>
            </div>
        </div>
        <div class="faq__item">
            <button class="faq__question">4. Rehberlik hizmeti sağlıyor musunuz? <i class="bi bi-chevron-down"></i></button>
            <div class="faq__answer">
                <p>Evet, tüm turlarımızda profesyonel ve lisanslı rehberlerimiz bulunmaktadır. Rehberlerimiz, turunuzu daha keyifli ve bilgilendirici hale getirmek için size eşlik eder.</p>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function () {
    const faqQuestions = document.querySelectorAll(".faq__question");

    faqQuestions.forEach((question) => {
        question.addEventListener("click", function () {
            const parent = this.parentElement;

            if (parent.classList.contains("active")) {
                parent.classList.remove("active");
            } else {
                document.querySelectorAll(".faq__item").forEach((item) => {
                    item.classList.remove("active");
                });
                parent.classList.add("active");
            }
        });
    });
});

</script>

@endsection
