<?php
/**
 * Template part for displaying the licenses section
 *
 * @package Pchelka
 */

?>
<section class="licenses" id="licenses">
    <div class="container">
        <h2 class="section-title text-center">Лицензии и сертификаты</h2>
        <p class="section-subtitle text-center">Вся наша деятельность лицензирована и сертифицирована</p>
        <div class="licenses-grid">
            <div class="license-card"><div class="license-icon"><svg width="80" height="80" viewBox="0 0 80 80" fill="none"><rect x="16" y="12" width="48" height="56" rx="4" fill="#FFF8E1" stroke="#FFD700" stroke-width="2"/><circle cx="40" cy="28" r="8" fill="#FFD700"/><path d="M40 22l2 4 4 1-3 3 1 4-4-2-4 2 1-4-3-3 4-1 2-4z" fill="#2C3E50"/><rect x="24" y="44" width="32" height="4" rx="2" fill="#FFD700"/><rect x="24" y="52" width="24" height="3" rx="1.5" fill="#E0E0E0"/><rect x="24" y="58" width="28" height="3" rx="1.5" fill="#E0E0E0"/></svg></div><h3 class="license-title">Лицензия на медицинскую деятельность</h3><p class="license-number">№ ЛО-77-01-012345 от 15.01.2024</p><p class="license-issuer">Выдана Департаментом здравоохранения г. Москвы</p><button onclick="openLicenseModal('medical')" class="btn btn-outline btn-sm">Посмотреть документ</button></div>
            <div class="license-card"><div class="license-icon"><svg width="80" height="80" viewBox="0 0 80 80" fill="none"><rect x="16" y="12" width="48" height="56" rx="4" fill="#FFF8E1" stroke="#FFD700" stroke-width="2"/><path d="M40 20l3 6 7 1-5 5 1 7-6-3-6 3 1-7-5-5 7-1 3-6z" fill="#FFD700"/><rect x="24" y="44" width="32" height="4" rx="2" fill="#FFD700"/><rect x="24" y="52" width="24" height="3" rx="1.5" fill="#E0E0E0"/><rect x="24" y="58" width="28" height="3" rx="1.5" fill="#E0E0E0"/></svg></div><h3 class="license-title">Сертификат ISO 9001:2015</h3><p class="license-number">Система менеджмента качества</p><p class="license-issuer">Международный стандарт качества медицинских услуг</p><button onclick="openLicenseModal('iso')" class="btn btn-outline btn-sm">Посмотреть документ</button></div>
            <div class="license-card"><div class="license-icon"><svg width="80" height="80" viewBox="0 0 80 80" fill="none"><rect x="16" y="12" width="48" height="56" rx="4" fill="#FFF8E1" stroke="#FFD700" stroke-width="2"/><circle cx="40" cy="30" r="10" stroke="#FFD700" stroke-width="2"/><path d="M35 30l3 3 7-7" stroke="#FFD700" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><rect x="24" y="48" width="32" height="4" rx="2" fill="#FFD700"/><rect x="24" y="56" width="24" height="3" rx="1.5" fill="#E0E0E0"/></svg></div><h3 class="license-title">Членство в СРО</h3><p class="license-number">Саморегулируемая организация</p><p class="license-issuer">Национальная медицинская палата</p><button onclick="openLicenseModal('sro')" class="btn btn-outline btn-sm">Посмотреть документ</button></div>
            <div class="license-card"><div class="license-icon"><svg width="80" height="80" viewBox="0 0 80 80" fill="none"><rect x="16" y="12" width="48" height="56" rx="4" fill="#FFF8E1" stroke="#FFD700" stroke-width="2"/><path d="M40 24v12M40 36l-8 8M40 36l8 8" stroke="#FFD700" stroke-width="2" stroke-linecap="round"/><circle cx="40" cy="36" r="4" fill="#FFD700"/><rect x="24" y="52" width="32" height="4" rx="2" fill="#FFD700"/><rect x="24" y="60" width="24" height="3" rx="1.5" fill="#E0E0E0"/></svg></div><h3 class="license-title">Санитарно-эпидемиологическое заключение</h3><p class="license-number">№ 77.01.16.000.М.000123.01.24</p><p class="license-issuer">Роспотребнадзор по г. Москве</p><button onclick="openLicenseModal('sanitary')" class="btn btn-outline btn-sm">Посмотреть документ</button></div>
        </div>
        <div class="licenses-footer"><p class="licenses-note">Все документы доступны для ознакомления в клинике. Копии лицензий и сертификатов размещены на информационных стендах.</p></div>
    </div>
</section>