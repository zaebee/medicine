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
            <div class="footer-column">
                <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
                    <?php dynamic_sidebar( 'footer-1' ); ?>
                <?php endif; ?>
            </div>
            <div class="footer-column">
                <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
                    <?php dynamic_sidebar( 'footer-2' ); ?>
                <?php endif; ?>
            </div>
            <div class="footer-column">
                <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
                    <?php dynamic_sidebar( 'footer-3' ); ?>
                <?php endif; ?>
            </div>
            <div class="footer-column">
                <?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
                    <?php dynamic_sidebar( 'footer-4' ); ?>
                <?php endif; ?>
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