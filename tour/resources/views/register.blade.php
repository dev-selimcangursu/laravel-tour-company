@extends('partials.master')
@section('main')
<div class="register-container">
    <div class="register-form">
        <h2>Üye Kaydı</h2>
        <form action="#" method="POST" id="registerForm">
            @csrf
            <div class="input-group">
                <label for="username">Kullanıcı Adı</label>
                <input type="text" id="username" name="username" placeholder="Kullanıcı Adınızı Girin" required>
            </div>
            <div class="input-group">
                <label for="email">E-posta</label>
                <input type="email" id="email" name="email" placeholder="E-posta Adresinizi Girin" required>
            </div>
            <div class="input-group">
                <label for="password">Şifre</label>
                <input type="password" id="password" name="password" placeholder="Şifrenizi Girin" required>
            </div>
            <div class="input-group">
                <label for="confirm_password">Şifreyi Onayla</label>
                <input type="password" id="confirm_password" name="confirm_password" placeholder="Şifreyi Onaylayın" required>
            </div>
            <button type="submit" class="btn">Kayıt Ol</button>
            <div class="signup-link">
                <p>Zaten hesabınız var mı? <a href="">Giriş Yap</a></p>
            </div>
        </form>
    </div>
</div>
@endsection
