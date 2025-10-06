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
            <button onclick="openAppointmentModal()" class="action-card"><svg class="action-icon" width="48" height="48" viewBox="0 0 48 48" fill="none"><rect x="8" y="10" width="32" height="32" rx="4" stroke="currentColor" stroke-width="2"/><path d="M16 6v8M32 6v8M8 18h32" stroke="currentColor" stroke-width="2" stroke-linecap="round"/><circle cx="16" cy="26" r="1.5" fill="currentColor"/><circle cx="24" cy="26" r="1.5" fill="currentColor"/><circle cx="32" cy="26" r="1.5" fill="currentColor"/><circle cx="16" cy="34" r="1.5" fill="currentColor"/><circle cx="24" cy="34" r="1.5" fill="currentColor"/></svg><h3 class="action-title">Записаться на прием</h3><p class="action-description">Выберите удобное время и специалиста</p></button>
            <button onclick="openHomeDoctorModal()" class="action-card"><svg class="action-icon" width="48" height="48" viewBox="0 0 48 48" fill="none"><path d="M24 4L6 16v20a4 4 0 004 4h28a4 4 0 004-4V16L24 4z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/><path d="M18 42V26h12v16" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="30" cy="18" r="6" fill="#FFD700"/><path d="M30 15v3l2 2" stroke="#2C3E50" stroke-width="1.5" stroke-linecap="round"/></svg><h3 class="action-title">Вызвать врача на дом</h3><p class="action-description">Медицинская помощь у вас дома</p></button>
            <button onclick="openQuestionModal()" class="action-card"><svg class="action-icon" width="48" height="48" viewBox="0 0 48 48" fill="none"><path d="M42 24c0 9.941-8.059 18-18 18-2.652 0-5.16-.574-7.425-1.605L6 42l1.605-10.575C6.574 29.16 6 26.652 6 24 6 14.059 14.059 6 24 6s18 8.059 18 18z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/><circle cx="24" cy="24" r="2" fill="currentColor"/><circle cx="16" cy="24" r="2" fill="currentColor"/><circle cx="32" cy="24" r="2" fill="currentColor"/></svg><h3 class="action-title">Задать вопрос врачу</h3><p class="action-description">Получите консультацию онлайн</p></button>
            <a href="#loyalty" class="action-card"><svg class="action-icon" width="48" height="48" viewBox="0 0 48 48" fill="none"><path d="M24 6l6 12 13 2-9.5 9 2.5 13-12-6-12 6 2.5-13L6 20l13-2 6-12z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/><circle cx="24" cy="24" r="6" fill="#FFD700"/><path d="M24 21v6M21 24h6" stroke="#2C3E50" stroke-width="1.5" stroke-linecap="round"/></svg><h3 class="action-title">Программы лояльности</h3><p class="action-description">Скидки и бонусы для постоянных клиентов</p></a>
        </div>
    </div>
</section>