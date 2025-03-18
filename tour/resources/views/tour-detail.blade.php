@extends('partials.master')
@section('main')
<section class="tour__detail__wrapper">
    <div class="tour__detail__left__area">
        <div class="tour__summary_details">
            <h3>Unutulmaz İstanbul Turu</h3>
            <div class="tour__summary__detail">
                <div class="tour__summary__detail__info">
                    <i class="bi bi-stopwatch"></i>
                    <span>10 Saat</span>
                </div>
                <div class="tour__summary__detail__info">
                    <i class="bi bi-people"></i>
                    <span>Maksimum Kişi Sayısı : 26</span>
                </div>
                <div class="tour__summary__detail__info">
                    <i class="bi bi-wifi"></i>
                    <span>Wifi Mevcut</span>
                </div>
                <div class="tour__summary__detail__info">
                    <i class="bi bi-calendar-check"></i>
                    <span>19 Ocak - 21 Aralık</span>
                </div>
                <div class="tour__summary__detail__info">
                    <i class="bi bi-person"></i>
                    <span>Min Yaş 12+</span>
                </div>
                <div class="tour__summary__detail__info">
                    <i class="bi bi-bus-front"></i>
                    <span>Otobüs</span>
                </div>
            </div>
        </div>
        <hr>
        <div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto laboriosam ea minus eligendi doloremque. Distinctio optio recusandae maiores autem eveniet. Libero doloribus quod a ipsa, voluptatem ut eius? Necessitatibus, exercitationem magni dolorum maiores deleniti alias illum ipsum similique nemo assumenda fugit laboriosam rerum quibusdam molestiae maxime, labore doloremque mollitia aliquam veritatis velit voluptatum debitis obcaecati suscipit facilis. Eum ut, eaque aut aliquam magni ratione velit mollitia cum dolore totam veniam sint nisi dolorum facilis quis fugit quidem iure animi corporis. Tempore recusandae voluptatum beatae quia veniam harum atque aliquam quasi rerum architecto odio dolore, molestias incidunt fuga obcaecati sint nemo!</p>
            <br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus quasi sapiente eveniet nam necessitatibus temporibus, quos veniam alias cumque expedita ducimus porro dignissimos incidunt impedit cupiditate tempora hic architecto nobis inventore reprehenderit illum labore? Dicta corporis expedita delectus labore aperiam quidem libero fugiat? Laboriosam error, nemo architecto at sapiente reprehenderit numquam doloremque repellendus illum ullam veritatis consequatur vero nesciunt soluta esse deserunt odio vitae similique porro ipsam laborum aut odit. Mollitia voluptas dignissimos doloremque. Quo ipsum asperiores, blanditiis nesciunt perspiciatis dolorem, excepturi aut praesentium odio repudiandae, eaque necessitatibus illo. Tenetur incidunt necessitatibus dolorem quisquam inventore mollitia aspernatur quasi veritatis? Fuga?</p>
        </div>
        <hr>
        <div>
            <table class="table">
                <tbody>
                    <tr>
                        <th>Kalkış ve Dönüş Lokasyonu</th>
                        <td>Taksim Meydanı - Sultanahmet</td>
                    </tr>
                    <tr>
                        <th>Kalkış Saati</th>
                        <td>17.00</td>
                    </tr>
                    <tr>
                        <th>Otel Bilgisi</th>
                        <td>5 Yıldızlı Şehir Oteli</td>
                    </tr>
                    <tr>
                        <th>Fiyata Dahil Olan Hizmetler</th>
                        <td>
                            <ul style="list-style: none">
                                <li>Rehberlik Hizmeti</li>
                                <li>Ulaşım</li>
                                <li>Öğle Yemeği</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <th>Fiyata Dahil Olmayan Hizmetler</th>
                        <td>
                            <ul style="list-style: none">
                                <li>Kişisel Harcamalar</li>
                                <li>Ekstra Aktiviteler</li>
                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="tour__detail__right__area">
      <div class="tour__detail__right__search">
         <select name="" id="">
            <option selected value="1">Tur Tarihi</option>
         </select>
         <select name="" id="">
            <option selected value="1">Kişi Bilgileri</option>
         </select>
         <button>Hesapla</button>
      </div>
      <div class="reservation__detail">
         <div class="reservation__date__area">
            <div class="reservastion__date">
                <small>Giriş Tarihi:</small>
                <span>29 Mar 2025 Cmt</span>
            </div>
            <div class="reservastion__date">
                <small>Dönüş Tarihi:</small>
                <span>29 Mar 2025 Cmt</span>
            </div>
         </div>
         <hr>
         <div class="reservastion__summary__area">
            <h5>Günübirlik Abant Gölcük Gölü Turu</h5>
            <div class="reservastion__summary__bottom">
                <p>3 Yetişkin, 0 Çocuk Toplam Ücret :</p>
                 <span>3750₺</span>
            </div>
         </div>
         <div class="reservastion__summary__price">
           <div class="reservastion__summary__price__item">
             <small>İndirimsiz Toplam Fiyat :</small>
             <small>4411₺</small>
           </div>
           <div class="reservastion__summary__price__item">
            <small>İndirimli Toplam Fiyat :</p>
            <small>4411₺</small>
          </div>
           <div>
            <h4>Toplam Ücret </h4>
             <p>35831₺</p>
           </div>
         </div>
         <button>Rezervasyon Yap</button>
      </div>
    </div>

</section>
@endsection
