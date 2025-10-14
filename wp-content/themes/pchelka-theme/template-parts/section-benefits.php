<?php
/**
 * Template part for displaying the benefits section
 *
 * @package Pchelka
 */

?>
<section class="benefits">
    <div class="container">
        <h2 class="section-title text-center"><?php echo esc_html( get_theme_mod( 'benefits_section_title', __( 'Почему выбирают нас', 'pchelka' ) ) ); ?></h2>
        <p class="section-subtitle text-center"><?php echo esc_html( get_theme_mod( 'benefits_section_subtitle', __( 'Мы создали все условия для вашего комфорта и здоровья', 'pchelka' ) ) ); ?></p>
        <div class="benefits-grid">
            <div class="benefit-card"><div class="benefit-icon-wrapper"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4.8 2.3A.3.3 0 1 0 5 2H4a2 2 0 0 0-2 2v5a6 6 0 0 0 6 6v0a6 6 0 0 0 6-6V4a2 2 0 0 0-2-2h-1a.2.2 0 1 0 .3.3"/><path d="M8 15v1a6 6 0 0 0 6 6v0a6 6 0 0 0 6-6v-4"/><circle cx="20" cy="10" r="2"/></svg></div><h3 class="benefit-title">Опытные врачи</h3><p class="benefit-text">Специалисты высшей категории с опытом работы от 10 лет в ведущих клиниках</p></div>
            <div class="benefit-card"><div class="benefit-icon-wrapper"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="15" x="2" y="4" rx="2"/><path d="M12 19v-4"/><path d="M8 11h.01"/><path d="M16 11h.01"/></svg></div><h3 class="benefit-title">Современное оборудование</h3><p class="benefit-text">Диагностическое оборудование экспертного класса от мировых производителей</p></div>
            <div class="benefit-card"><div class="benefit-icon-wrapper"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="14" height="18" x="5" y="3" rx="2"/><path d="M12 18h.01"/><path d="M16 12h-8"/><path d="M16 8h-8"/></svg></div><h3 class="benefit-title">Комплексный подход</h3><p class="benefit-text">Индивидуальные программы лечения и профилактики для каждого пациента</p></div>
            <div class="benefit-card"><div class="benefit-icon-wrapper"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div><h3 class="benefit-title">Удобный график</h3><p class="benefit-text">Работаем без выходных с 8:00 до 21:00, экстренная помощь 24/7</p></div>
        </div>
    </div>
</section>