<?php
/**
 * Template part for displaying the licenses section
 *
 * @package Pchelka
 */

?>
<section class="licenses" id="licenses">
    <div class="container">
        <h2 class="section-title text-center"><?php echo esc_html( get_theme_mod( 'licenses_section_title', __( 'Лицензии и сертификаты', 'pchelka' ) ) ); ?></h2>
        <p class="section-subtitle text-center"><?php echo esc_html( get_theme_mod( 'licenses_section_subtitle', __( 'Вся наша деятельность лицензирована и сертифицирована', 'pchelka' ) ) ); ?></p>
        <div class="licenses-grid">
            <div class="license-card"><div class="license-icon"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"/><path d="M14 2v4a2 2 0 0 0 2 2h4"/><path d="M10 9H8"/><path d="M16 13H8"/><path d="M16 17H8"/></svg></div><h3 class="license-title">Лицензия на медицинскую деятельность</h3><p class="license-number">№ ЛО-77-01-012345 от 15.01.2024</p><p class="license-issuer">Выдана Департаментом здравоохранения г. Москвы</p><button onclick="openLicenseModal('medical')" class="btn btn-outline btn-sm">Посмотреть документ</button></div>
            <div class="license-card"><div class="license-icon"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"/><path d="M14 2v4a2 2 0 0 0 2 2h4"/><path d="M10 9H8"/><path d="M16 13H8"/><path d="M16 17H8"/></svg></div><h3 class="license-title">Сертификат ISO 9001:2015</h3><p class="license-number">Система менеджмента качества</p><p class="license-issuer">Международный стандарт качества медицинских услуг</p><button onclick="openLicenseModal('iso')" class="btn btn-outline btn-sm">Посмотреть документ</button></div>
            <div class="license-card"><div class="license-icon"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"/><path d="M14 2v4a2 2 0 0 0 2 2h4"/><path d="M10 9H8"/><path d="M16 13H8"/><path d="M16 17H8"/></svg></div><h3 class="license-title">Членство в СРО</h3><p class="license-number">Саморегулируемая организация</p><p class="license-issuer">Национальная медицинская палата</p><button onclick="openLicenseModal('sro')" class="btn btn-outline btn-sm">Посмотреть документ</button></div>
            <div class="license-card"><div class="license-icon"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"/><path d="M14 2v4a2 2 0 0 0 2 2h4"/><path d="M10 9H8"/><path d="M16 13H8"/><path d="M16 17H8"/></svg></div><h3 class="license-title">Санитарно-эпидемиологическое заключение</h3><p class="license-number">№ 77.01.16.000.М.000123.01.24</p><p class="license-issuer">Роспотребнадзор по г. Москве</p><button onclick="openLicenseModal('sanitary')" class="btn btn-outline btn-sm">Посмотреть документ</button></div>
        </div>
        <div class="licenses-footer"><p class="licenses-note">Все документы доступны для ознакомления в клинике. Копии лицензий и сертификатов размещены на информационных стендах.</p></div>
    </div>
</section>