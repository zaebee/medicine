<?php
/**
 * Template part for displaying the hero section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Pchelka
 */

?>
<section class="hero" id="main-content">
    <!-- Video Background (can be replaced with slider) -->
    <div class="hero-media">
        <!-- Option 1: Video background -->
        <video class="hero-video" autoplay muted loop playsinline poster="https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=1920">
            <source src="https://assets.mixkit.co/videos/preview/mixkit-doctor-writing-on-a-clipboard-5883-large.mp4" type="video/mp4">
        </video>

        <!-- Option 2: Image Slider (hidden by default, can be toggled) -->
        <div class="hero-slider" style="display: none;">
            <div class="slider-track">
                <div class="slide active">
                    <img src="https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=1920" alt="Современная клиника" loading="eager">
                </div>
                <div class="slide">
                    <img src="https://images.unsplash.com/photo-1631217868264-e5b90bb7e133?w=1920" alt="Медицинское оборудование" loading="lazy">
                </div>
                <div class="slide">
                    <img src="https://images.unsplash.com/photo-1551076805-e1869033e561?w=1920" alt="Команда врачей" loading="lazy">
                </div>
            </div>
            <button class="slider-btn slider-prev" aria-label="Предыдущий слайд">‹</button>
            <button class="slider-btn slider-next" aria-label="Следующий слайд">›</button>
            <div class="slider-dots">
                <button class="dot active" aria-label="Слайд 1"></button>
                <button class="dot" aria-label="Слайд 2"></button>
                <button class="dot" aria-label="Слайд 3"></button>
            </div>
        </div>

        <!-- Overlay -->
        <div class="hero-overlay"></div>
    </div>

    <!-- Hero Content -->
    <div class="hero-content">
        <div class="container">
            <h1 class="hero-title">Клиника «Пчёлка» в Мытищах</h1>
            <p class="hero-subtitle">📍 Мытищи • Премиальная медицина с индивидуальным подходом к каждому пациенту</p>
            <div class="hero-features">
                <div class="hero-feature">
                    <svg class="feature-icon" width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M9 11l3 3L22 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    <span>Современное оборудование</span>
                </div>
                <div class="hero-feature">
                    <svg class="feature-icon" width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M9 11l3 3L22 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    <span>Опытные специалисты</span>
                </div>
                <div class="hero-feature">
                    <svg class="feature-icon" width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M9 11l3 3L22 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    <span>Программы лояльности</span>
                </div>
            </div>
        </div>
    </div>
</section>