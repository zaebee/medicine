<?php
/**
 * Template part for displaying the quick actions section
 *
 * @package Pchelka
 */

?>
<section class="quick-actions">
    <div class="container">
        <div class="quick-actions-grid">
            <button onclick="openAppointmentModal()" class="action-card">
                <div class="action-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M8 2v4m8-4v4"/><rect width="18" height="18" x="3" y="4" rx="2"/><path d="M12 12h8m-4-4v8"/></svg>
                </div>
                <h3 class="action-title">Записаться на прием</h3><p class="action-description">Выберите удобное время и специалиста</p></button>
            <button onclick="openHomeDoctorModal()" class="action-card">
                <div class="action-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                </div>
                <h3 class="action-title">Вызвать врача на дом</h3><p class="action-description">Медицинская помощь у вас дома</p></button>
            <button onclick="openQuestionModal()" class="action-card">
                <div class="action-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/><path d="M12 10h.01"/><path d="M8 10h.01"/><path d="M16 10h.01"/></svg>
                </div>
                <h3 class="action-title">Задать вопрос врачу</h3><p class="action-description">Получите консультацию онлайн</p></button>
            <a href="#loyalty" class="action-card">
                <div class="action-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="6"/><path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11"/></svg>
                </div>
                <h3 class="action-title">Программы лояльности</h3><p class="action-description">Скидки и бонусы для постоянных клиентов</p></a>
        </div>
    </div>
</section>