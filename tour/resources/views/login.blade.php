@extends('partials.master')
@section('main')
    <div class="login-container">
        <div class="login-form">
            <h2>Üye Girişi</h2>
            <form action="#" method="POST" id="loginForm">
                @csrf
                <div class="input-group">
                    <label for="username">Kullanıcı Adı</label>
                    <input type="text" id="username" name="username" placeholder="Kullanıcı Adınızı Girin" required>
                </div>
                <div class="input-group">
                    <label for="password">Şifre</label>
                    <input type="password" id="password" name="password" placeholder="Şifrenizi Girin" required>
                </div>
                <button type="submit" class="btn">Giriş Yap</button>
                <div class="signup-link">
                    <p>Hesabınız yok mu? <a href="">Üye Ol</a></p>
                </div>
            </form>
        </div>
    </div>
@endsection
