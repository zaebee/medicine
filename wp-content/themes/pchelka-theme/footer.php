<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Pchelka
 */

?>

	</div><!-- #content -->

    <!-- Footer from mockup -->
    <footer class="footer" role="contentinfo">
        <div class="container">
            <div class="footer-content">
                <!-- Footer Column 1: About -->
                <div class="footer-column">
                    <div class="footer-logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="Клиника Пчёлка Медик" class="footer-logo-image" width="100" height="auto">
                    </div>
                    <p class="footer-description">
                        Премиальная медицинская клиника с индивидуальным подходом к каждому пациенту. Современное оборудование и опытные врачи.
                    </p>
                    <div class="footer-social">
                        <a href="#" class="social-link" aria-label="ВКонтакте"><svg width="32" height="32" viewBox="0 0 32 32"><circle cx="16" cy="16" r="15" fill="#4680C2"/><path d="M16.8 22h-1.2c-4.8 0-7.6-3.3-7.7-8.8h2.4c.1 4 1.8 5.7 3.2 6v-6h2.2v3.5c1.4-.2 2.8-1.7 3.3-3.5h2.2c-.4 2.1-1.9 3.7-3 4.3 1.1.5 2.8 1.9 3.5 4.5h-2.4c-.5-1.7-1.8-3-3.5-3.2V22z" fill="white"/></svg></a>
                        <a href="#" class="social-link" aria-label="Telegram"><svg width="32" height="32" viewBox="0 0 32 32"><circle cx="16" cy="16" r="15" fill="#0088cc"/><path d="M22.5 10.5l-2.8 13.2c-.2.9-.7 1.1-1.4.7l-3.9-2.9-1.9 1.8c-.2.2-.4.4-.8.4l.3-4 7.5-6.8c.3-.3-.1-.4-.5-.2l-9.3 5.8-4-1.2c-.9-.3-.9-.9.2-1.3l15.6-6c.7-.3 1.4.2 1.1 1.3z" fill="white"/></svg></a>
                        <a href="#" class="social-link" aria-label="WhatsApp"><svg width="32" height="32" viewBox="0 0 32 32"><circle cx="16" cy="16" r="15" fill="#25D366"/><path d="M23 13.5c0 3.9-3.1 7-7 7-.9 0-1.8-.2-2.6-.5l-3.4.9.9-3.3c-.4-.8-.6-1.7-.6-2.6 0-3.9 3.1-7 7-7s7 3.1 7 7zm-7-5.5c-3 0-5.5 2.5-5.5 5.5 0 1 .3 2 .8 2.8l-.5 1.9 2-.5c.8.5 1.7.8 2.7.8 3 0 5.5-2.5 5.5-5.5S19 8 16 8z" fill="white"/></svg></a>
                    </div>
                </div>

                <!-- Footer Column 2: Navigation -->
                <div class="footer-column">
                    <h4 class="footer-title">Навигация</h4>
                    <ul class="footer-links">
                        <li><a href="#services">Услуги</a></li>
                        <li><a href="#doctors">Врачи</a></li>
                        <li><a href="#equipment">Оборудование</a></li>
                        <li><a href="#loyalty">Программы лояльности</a></li>
                        <li><a href="#pricing">Цены</a></li>
                        <li><a href="#contact">Контакты</a></li>
                    </ul>
                </div>

                <!-- Footer Column 3: Services -->
                <div class="footer-column">
                    <h4 class="footer-title">Услуги</h4>
                    <ul class="footer-links">
                        <li><a href="#services">Терапия</a></li>
                        <li><a href="#services">Кардиология</a></li>
                        <li><a href="#services">Неврология</a></li>
                        <li><a href="#services">Эндокринология</a></li>
                        <li><a href="#services">Педиатрия</a></li>
                        <li><a href="#services">Диагностика</a></li>
                    </ul>
                </div>

                <!-- Footer Column 4: Contact -->
                <div class="footer-column">
                    <h4 class="footer-title">Контакты</h4>
                    <ul class="footer-contacts">
                        <li><svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor"><path d="M14 6.67c0 4.67-6 8.67-6 8.67s-6-4-6-8.67a6 6 0 0112 0z"/><circle cx="8" cy="6.67" r="2"/></svg><span>г. Москва, ул. Примерная, д. 123</span></li>
                        <li><svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor"><path d="M14.67 11.28v2a1.33 1.33 0 01-1.45 1.33 13.19 13.19 0 01-5.75-2.05 13 13 0 01-4-4 13.19 13.19 0 01-2.05-5.78A1.33 1.33 0 012.74 1.33h2a1.33 1.33 0 011.33 1.15c.08.64.24 1.27.47 1.87a1.33 1.33 0 01-.3 1.41l-.85.84a10.67 10.67 0 004 4l.85-.85a1.33 1.33 0 011.4-.3c.61.23 1.24.39 1.88.47a1.33 1.33 0 011.14 1.35z"/></svg><a href="tel:+74951234567">+7 (495) 123-45-67</a></li>
                        <li><svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor"><path d="M2.67 2.67h10.66c.74 0 1.34.6 1.34 1.33v8c0 .74-.6 1.33-1.34 1.33H2.67c-.74 0-1.34-.59-1.34-1.33V4c0-.73.6-1.33 1.34-1.33z"/><path d="M14.67 4L8 8.67 1.33 4" stroke="white" stroke-width="1.5" fill="none"/></svg><a href="mailto:info@pchelka-clinic.ru">info@pchelka-clinic.ru</a></li>
                        <li><svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor"><circle cx="8" cy="8" r="6.67"/><path d="M8 4v4l2.67 1.33" stroke="white" stroke-width="1.5" stroke-linecap="round" fill="none"/></svg><span>Пн-Вс: 8:00 — 21:00</span></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="footer-bottom-content">
                    <p class="footer-copyright">© <?php echo date('Y'); ?> Клиника «Пчёлка». Все права защищены.</p>
                    <div class="footer-legal">
                        <a href="#" onclick="openPrivacyModal(); return false;">Политика конфиденциальности</a><span class="separator">|</span>
                        <a href="#" onclick="openTermsModal(); return false;">Пользовательское соглашение</a><span class="separator">|</span>
                        <a href="#" onclick="openLicenseModal('medical'); return false;">Лицензии</a>
                    </div>
                </div>
                <div class="footer-disclaimer">
                    <p>Имеются противопоказания. Необходима консультация специалиста.</p>
                    <p>Лицензия № ЛО-77-01-012345 от 15.01.2024</p>
                </div>
            </div>
        </div>
    </footer><!-- #colophon -->

    <!-- All Modals from Mockup -->
    <div id="callbackModal" class="modal" role="dialog" aria-labelledby="callback-title" aria-hidden="true"><div class="modal-overlay" onclick="closeModal('callbackModal')"></div><div class="modal-content"><button class="modal-close" onclick="closeModal('callbackModal')" aria-label="Закрыть">×</button><h3 id="callback-title" class="modal-title">Заказать звонок</h3><p class="modal-description">Оставьте свой номер телефона, и мы перезвоним вам в течение 15 минут</p><form class="modal-form" onsubmit="handleCallbackSubmit(event)"><div class="form-group"><label for="callback-name" class="form-label">Ваше имя *</label><input type="text" id="callback-name" name="name" class="form-input" placeholder="Иван Иванов" required></div><div class="form-group"><label for="callback-phone" class="form-label">Телефон *</label><input type="tel" id="callback-phone" name="phone" class="form-input" placeholder="+7 (___) ___-__-__" required></div><div class="form-group"><label for="callback-time" class="form-label">Удобное время для звонка</label><select id="callback-time" name="time" class="form-select"><option value="">Любое время</option><option value="morning">Утро (9:00 - 12:00)</option><option value="afternoon">День (12:00 - 15:00)</option><option value="evening">Вечер (15:00 - 18:00)</option></select></div><div class="form-group"><label class="form-checkbox"><input type="checkbox" name="consent" required><span>Я согласен на обработку персональных данных</span></label></div><button type="submit" class="btn btn-primary btn-block">Заказать звонок</button></form></div></div>
    <div id="appointmentModal" class="modal" role="dialog" aria-labelledby="appointment-title" aria-hidden="true"><div class="modal-overlay" onclick="closeModal('appointmentModal')"></div><div class="modal-content"><button class="modal-close" onclick="closeModal('appointmentModal')" aria-label="Закрыть">×</button><h3 id="appointment-title" class="modal-title">Записаться на прием</h3><p class="modal-description">Выберите специалиста и удобное время для визита</p><form class="modal-form" onsubmit="handleAppointmentSubmit(event)"><div class="form-group"><label for="appointment-name" class="form-label">Ваше имя *</label><input type="text" id="appointment-name" name="name" class="form-input" placeholder="Иван Иванов" required></div><div class="form-group"><label for="appointment-phone" class="form-label">Телефон *</label><input type="tel" id="appointment-phone" name="phone" class="form-input" placeholder="+7 (___) ___-__-__" required></div><div class="form-group"><label for="appointment-doctor" class="form-label">Специалист *</label><select id="appointment-doctor" name="doctor" class="form-select" required><option value="">Выберите специалиста</option><option value="ivanova">Иванова Е.С. - Терапевт</option><option value="petrov">Петров М.А. - Кардиолог</option><option value="smirnova">Смирнова А.В. - Педиатр</option><option value="kozlov">Козлов Д.И. - Невролог</option></select></div><div class="form-group"><label for="appointment-date" class="form-label">Дата *</label><input type="date" id="appointment-date" name="date" class="form-input" required></div><div class="form-group"><label for="appointment-time" class="form-label">Время *</label><select id="appointment-time" name="time" class="form-select" required><option value="">Выберите время</option><option value="09:00">09:00</option><option value="10:00">10:00</option><option value="11:00">11:00</option><option value="12:00">12:00</option><option value="14:00">14:00</option><option value="15:00">15:00</option><option value="16:00">16:00</option><option value="17:00">17:00</option></select></div><div class="form-group"><label for="appointment-comment" class="form-label">Комментарий</label><textarea id="appointment-comment" name="comment" class="form-textarea" rows="3" placeholder="Опишите причину обращения..."></textarea></div><div class="form-group"><label class="form-checkbox"><input type="checkbox" name="consent" required><span>Я согласен на обработку персональных данных</span></label></div><button type="submit" class="btn btn-primary btn-block">Записаться</button></form></div></div>
    <div id="questionModal" class="modal" role="dialog" aria-labelledby="question-title" aria-hidden="true"><div class="modal-overlay" onclick="closeModal('questionModal')"></div><div class="modal-content"><button class="modal-close" onclick="closeModal('questionModal')" aria-label="Закрыть">×</button><h3 id="question-title" class="modal-title">Задать вопрос врачу</h3><p class="modal-description">Опишите ваш вопрос, и врач ответит вам в течение 24 часов</p><form class="modal-form" onsubmit="handleQuestionSubmit(event)"><div class="form-group"><label for="question-name" class="form-label">Ваше имя *</label><input type="text" id="question-name" name="name" class="form-input" placeholder="Иван Иванов" required></div><div class="form-group"><label for="question-email" class="form-label">Email *</label><input type="email" id="question-email" name="email" class="form-input" placeholder="example@mail.ru" required></div><div class="form-group"><label for="question-specialty" class="form-label">Специализация врача</label><select id="question-specialty" name="specialty" class="form-select"><option value="">Любой специалист</option><option value="therapy">Терапия</option><option value="cardiology">Кардиология</option><option value="neurology">Неврология</option><option value="endocrinology">Эндокринология</option><option value="pediatrics">Педиатрия</option></select></div><div class="form-group"><label for="question-text" class="form-label">Ваш вопрос *</label><textarea id="question-text" name="question" class="form-textarea" rows="5" placeholder="Опишите ваш вопрос подробно..." required></textarea></div><div class="form-group"><label class="form-checkbox"><input type="checkbox" name="consent" required><span>Я согласен на обработку персональных данных</span></label></div><button type="submit" class="btn btn-primary btn-block">Отправить вопрос</button></form></div></div>
    <div id="homeDoctorModal" class="modal" role="dialog" aria-labelledby="home-doctor-title" aria-hidden="true"><div class="modal-overlay" onclick="closeModal('homeDoctorModal')"></div><div class="modal-content"><button class="modal-close" onclick="closeModal('homeDoctorModal')" aria-label="Закрыть">×</button><h3 id="home-doctor-title" class="modal-title">Вызвать врача на дом</h3><p class="modal-description">Врач приедет к вам в течение 2 часов</p><form class="modal-form" onsubmit="handleHomeDoctorSubmit(event)"><div class="form-group"><label for="home-name" class="form-label">Ваше имя *</label><input type="text" id="home-name" name="name" class="form-input" placeholder="Иван Иванов" required></div><div class="form-group"><label for="home-phone" class="form-label">Телефон *</label><input type="tel" id="home-phone" name="phone" class="form-input" placeholder="+7 (___) ___-__-__" required></div><div class="form-group"><label for="home-address" class="form-label">Адрес *</label><input type="text" id="home-address" name="address" class="form-input" placeholder="Улица, дом, квартира" required></div><div class="form-group"><label for="home-symptoms" class="form-label">Симптомы *</label><textarea id="home-symptoms" name="symptoms" class="form-textarea" rows="4" placeholder="Опишите симптомы и жалобы..." required></textarea></div><div class="form-group"><label for="home-time" class="form-label">Желаемое время визита</label><select id="home-time" name="time" class="form-select"><option value="asap">Как можно скорее</option><option value="morning">Утро (9:00 - 12:00)</option><option value="afternoon">День (12:00 - 15:00)</option><option value="evening">Вечер (15:00 - 18:00)</option></select></div><div class="form-group"><label class="form-checkbox"><input type="checkbox" name="consent" required><span>Я согласен на обработку персональных данных</span></label></div><button type="submit" class="btn btn-primary btn-block">Вызвать врача</button><p class="form-note">Стоимость вызова: от 5 000 ₽</p></form></div></div>
    <div id="loyaltyModal" class="modal" role="dialog" aria-labelledby="loyalty-title" aria-hidden="true"><div class="modal-overlay" onclick="closeModal('loyaltyModal')"></div><div class="modal-content"><button class="modal-close" onclick="closeModal('loyaltyModal')" aria-label="Закрыть">×</button><h3 id="loyalty-title" class="modal-title">Подключить программу лояльности</h3><p class="modal-description">Заполните форму, и мы свяжемся с вами для оформления карты</p><form class="modal-form" onsubmit="handleLoyaltySubmit(event)"><div class="form-group"><label for="loyalty-name" class="form-label">Ваше имя *</label><input type="text" id="loyalty-name" name="name" class="form-input" placeholder="Иван Иванов" required></div><div class="form-group"><label for="loyalty-phone" class="form-label">Телефон *</label><input type="tel" id="loyalty-phone" name="phone" class="form-input" placeholder="+7 (___) ___-__-__" required></div><div class="form-group"><label for="loyalty-email" class="form-label">Email *</label><input type="email" id="loyalty-email" name="email" class="form-input" placeholder="example@mail.ru" required></div><div class="form-group"><label for="loyalty-program" class="form-label">Программа *</label><select id="loyalty-program" name="program" class="form-select" required><option value="">Выберите программу</option><option value="accumulative">Накопительная система</option><option value="family">Семейная программа</option><option value="corporate">Корпоративное обслуживание</option><option value="certificate">Подарочный сертификат</option><option value="referral">Друг рекомендует</option><option value="annual">Здоровье круглый год</option></select></div><div class="form-group"><label class="form-checkbox"><input type="checkbox" name="consent" required><span>Я согласен на обработку персональных данных</span></label></div><button type="submit" class="btn btn-primary btn-block">Отправить заявку</button></form></div></div>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>