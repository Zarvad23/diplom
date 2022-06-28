<?php include($_SERVER['DOCUMENT_ROOT'].'/components/header.php') ?>
<body>
<header>
    <div class="container">
        <div class="logo">
            <a href="../index.php"><img src="../pictures/logo.png" alt="логотип"></a>
        </div>
        <nav>
            <ul class="nav-menu">
                <li><a href="repair.php">Ремонт</a></li>
                <li><a href="cleaners.php">Химчистка</a></li>
                <li><a href="fabrics.php">Ткани</a></li>
                <li><a href="prices.php">Цены</a></li>
                <li><a href="individual.php">Индивидуальный пошив</a></li>
                <li><a href="about.php">О нас</a></li>
                <li><a href="contacts.php">Контакты</a></li>
            </ul>
        </nav>
        <div class="phone-number">
            <a href="tel:+79825510453">+7 982 551 04 53</a>
        </div>
    </div>
</header>
<div class="main">
    <div class="container">
        <div class="contacts">
            <div class="contacts-left">
                <h2>Единый телефон сети</h2>
                <div>
                    <a class="contacts-tel" href="tel:+79825510453">+7 (982) 551 04 53</a>
                    <span>Звонки принимаются ежедневно с 8:00 до 19:00</span>
                    <a class="contacts-mail" href="mailto:zarifullin.vadim@mail.ru">zarifullin.vadim@mail.ru</a>
                    <span>Почта для приема просьб и запросов на подшив</span>
                    <div class="messengers">
                        <h3>Мессенджеры:</h3>
                        <a class="contacts-VK" href="https://vk.me/provodnick5lvl" target="_blank">ВКонтакте: Вадим
                            Зарифуллин</a>
                        <a class="contacts-Telegram" href="https://t.me/Zarvad" target="_blank">Телеграмм: Вадим
                            Зарифуллин</a>
                    </div>
                </div>
            </div>
            <div class="contacts-right">
                <h2>Адреса</h2>
                <ul class="addresses">
                    <li><p>ул.Островского, д.50</p> <span>(часы приема с 8:00 до 20:00)</span></li>
                    <li><p>ул.Технологическая, д.36T</p> <span>(часы приема с 10:00 до 20:00)</span></li>
                    <li><p>ул.Профсоюзов, тц.Детская искорка эт.2.</p> <span>(часы приема с 8:00 до 20:00)</span></li>
                    <li><p>просп.Мира ул.Генерала Иванова д.37/3</p> <span>(часы приема с 8:00 до 20:00)</span></li>
                    <li><p>ул.Индустриальная, д.43</p> <span>(часы приема с 10:00 до 20:00)</span></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="map">
        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A54dceb11bb300418197b0d338d0dc92762ddea8d1e7516605688581430d9683b&amp;source=constructor"
                width="100%" height="628" frameborder="0"></iframe>
    </div>
    <div class="contact-form">
        <div class="container">
            <h2>Напишите нам:</h2>
            <form action="POST" class="element-animation">
                <input type="text" name="contact-name" id="contact-name" placeholder="Ваше имя">
                <input type="text" name="contact-mail" id="contact-mail" placeholder="Электронная почта">
                <input type="text" name="contact-phone" id="contact-phone" placeholder="Ваше телефон">
                <textarea name="contact-message" id="contact-message" cols="15" rows="10"
                          placeholder="Сообщение"></textarea>
                <button class="btn" type="submit">Отправить сообщение</button>
            </form>
        </div>
    </div>
</div>
<footer>
    <div class="container">
        <div class="footer-feedbacks">
            <div class="footer-feedbacks-top">
                <div>
                    <a class="footer-tel" href="tel:+79825510453">+7 (982) 551 04 53</a>
                    <a class="footer-mail" href="mailto:zarifullin.vadim@mail.ru">zarifullin.vadim@mail.ru</a>
                </div>
                <div>
                    <a class="footer-VK" href="https://vk.me/provodnick5lvl" target="_blank">VKontankte</a>
                    <a class="footer-Telegram" href="https://t.me/Zarvad" target="_blank">Telegram</a>
                </div>
                <div>
                    <p>Принимаем: </p>
                    <span class="pay_system"></span>
                </div>
            </div>
        </div>
        <ul class="footer-menu">
            <li><a href="repair.php">Ремонт</a></li>
            <li><a href="cleaners.php">Химчистка</a></li>
            <li><a href="fabrics.php">Ткани</a></li>
            <li><a href="prices.php">Цены</a></li>
            <li><a href="individual.php">Индивидуальный пошив</a></li>
            <li><a href="about.php">О нас</a></li>
            <li><a href="contacts.php">Контакты</a></li>
        </ul>
    </div>
    <span class="copyright"> Copyright © Сайт выполнен в рамках дипломной работы Зарифуллиным Вадимом</span>
</footer>
<?php include($_SERVER['DOCUMENT_ROOT'].'/components/footer.php'); ?>