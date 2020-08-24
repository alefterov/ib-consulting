<?php
include "head.php"
?>

<body>
    <?php
    include "header.php"
    ?>

    <main>
        <div class="wrapper">
            <h3 class="analitic__main-tittle"></h3>
            <div class="analitic__menu">
                <div id="economic-calendar" class="analitic__item">Экономический календарь</div>
                <div id="market-review" class="analitic__item">Обзор рынка</div>
                <div id="cuorces" class="analitic__item">Курсы валют</div>
                <div id="criptomarket" class="analitic__item">Криптовалюты</div>
            </div>
            <div class="economic-calendar__container">
                <iframe src="https://sslecal2.forexprostools.com?columns=exc_flags,exc_currency,exc_importance,exc_actual,exc_forecast,exc_previous&features=datepicker,timezone&countries=25,4,17,39,72,26,10,6,37,43,56,36,5,61,22,12,35&calType=week&timeZone=18&lang=7"
                    width="900px" height="700px" frameborder="0" allowtransparency="true" style="text-align: center;" marginwidth="0" marginheight="0"></iframe>
                <div class="poweredBy" style="font-family: Arial, Helvetica, sans-serif;"><span style="font-size: 14px;color: #2c3138;text-decoration: none;">Экономический онлайн-календарь от <a href="https://ru.investing.com/" rel="nofollow" target="_blank" style="font-size: 14px;color: #204475; font-weight: bold;" class="underline_link">Investing.com Россия</a>, ведущего финансового портала</span></div>
            </div>
            <div class="market-review__container">
                <iframe height="700px" width="100%" src="https://ssltvc.forexprostools.com/?pair_ID=2186&height=700&width=1200&interval=300&plotStyle=area&domain_ID=7&lang_ID=7&timezone_ID=17"></iframe>
            </div>
            <div class="cuorces__container">
                <iframe src="https://ru.widgets.investing.com/single-currency-crosses?theme=lightTheme&currency=12" width="100%" height="700px" frameborder="0" allowtransparency="true" marginwidth="0" marginheight="0"></iframe>
                <div class="poweredBy" style="font-family: Arial, Helvetica, sans-serif;">Предоставлено <a href="https://ru.investing.com?utm_source=WMT&amp;utm_medium=referral&amp;utm_campaign=SINGLE_CROSSES&amp;utm_content=Footer%20Link" target="_blank" rel="nofollow">Investing.com</a></div>
            </div>
            <div class="criptomarket__container">
                <iframe src="https://ru.widgets.investing.com/top-cryptocurrencies?theme=darkTheme" width="100%" height="700px" frameborder="0" allowtransparency="true" marginwidth="0" marginheight="0"></iframe>
                <div class="poweredBy" style="font-family: Arial, Helvetica, sans-serif;">Предоставлено <a href="https://ru.investing.com?utm_source=WMT&amp;utm_medium=referral&amp;utm_campaign=TOP_CRYPTOCURRENCIES&amp;utm_content=Footer%20Link" target="_blank" rel="nofollow">Investing.com</a></div>
            </div>

        </div>
    </main>
    <div class="consultation-popap">
        <div class="consultation-popap-container">
            <div class="consultation__close">
                <svg width="20" height="20" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0)">
                    <path d="M2.06668 40.0001C1.53977 40.0001 1.01285 39.7997 0.612523 39.3964C-0.191154 38.5927 -0.191154 37.2898 0.612523 36.4861L36.4967 0.602744C37.3004 -0.200915 38.6033 -0.200915 39.407 0.602744C40.2107 1.4064 40.2107 2.70933 39.407 3.5135L3.52334 39.3964C3.11999 39.7972 2.59308 40.0001 2.06668 40.0001V40.0001Z" fill="#204475"/>
                    <path d="M37.9525 40.0001C37.4256 40.0001 36.8992 39.7997 36.4984 39.3964L0.61251 3.5135C-0.191149 2.70933 -0.191149 1.4064 0.61251 0.602744C1.41617 -0.200915 2.7191 -0.200915 3.52326 0.602744L39.4061 36.4861C40.2098 37.2898 40.2098 38.5927 39.4061 39.3964C39.0028 39.7972 38.4764 40.0001 37.9525 40.0001Z" fill="#204475"/>
                    </g>
                    <defs>
                    <clipPath id="clip0">
                    <rect width="40" height="40" fill="white"/>
                    </clipPath>
                    </defs>
                    </svg>
            </div>
            <div class="consultation__title">Свяжитесь с нами</div>
            <div class="consultation__form">
                <form class="popap-form" action="#">
                    <input class="consultation__input" type="text" required placeholder="Ваше имя">
                    <input class="consultation__input" type="email" required placeholder="Ваше Email">
                    <input class="consultation__input" type="tel" placeholder="Ваш телефон">
                    <button class="consultation__submit">Отправить</button>
                </form>
            </div>
        </div>
    </div>
    <div class="top-consultetion">
        Получить консультацию <span class="question">?</span>
    </div>
    <div class="callback-bot">
        <div class="callback-bot__button">
            <svg width="50" height="50" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M80 39.922C80 50.5856 75.8473 60.6108 68.3072 68.1513C60.7668 75.6914 50.7415 79.8441 40.078 79.8441C31.8768 79.8441 23.9967 77.3753 17.2895 72.7049C12.8211 69.5933 9.0807 65.6594 6.23782 61.1209V69.5517H0V50.8382H18.7135V57.076H11.0687C17.0557 67.2666 27.9373 73.6062 40.078 73.6062C58.6515 73.6062 73.7622 58.4956 73.7622 39.922H80ZM39.7661 6.23782C51.9069 6.23782 62.7885 12.5776 68.7754 22.768H61.2866V29.0058H79.8441V10.2924H73.6062V18.723C70.7634 14.1846 67.023 10.2506 62.5545 7.13918C55.8473 2.46877 47.9673 0 39.7661 0C29.1086 0 19.1088 4.15501 11.6084 11.6993C4.12273 19.2293 0 29.2522 0 39.922H6.23782C6.23782 21.3485 21.2784 6.23782 39.7661 6.23782ZM27.9694 21.9883L23.9372 25.9871C22.1347 27.7892 21.9442 30.2913 22.7669 32.8287C24.191 37.2211 25.6883 40.6703 32.5471 47.5275C39.4057 54.3849 43.0395 55.4954 47.3093 57.2552C48.2922 57.6603 49.2207 57.8556 50.0908 57.8556C51.6373 57.8556 52.9988 57.2384 54.1524 56.0851L58.1676 52.0541L47.852 41.7235L42.5326 46.9246C41.1223 45.8929 39.5251 44.5103 37.5442 42.5297C35.5404 40.5265 34.0134 38.8253 32.8602 37.3074L38.024 32.1012L27.9694 21.9883Z" fill="white"/>
                </svg>
        </div>
        <div class="callback-bot__popap">
            <div class="callback-bot__close">
                <svg width="20" height="20" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0)">
                    <path d="M2.06668 40.0001C1.53977 40.0001 1.01285 39.7997 0.612523 39.3964C-0.191154 38.5927 -0.191154 37.2898 0.612523 36.4861L36.4967 0.602744C37.3004 -0.200915 38.6033 -0.200915 39.407 0.602744C40.2107 1.4064 40.2107 2.70933 39.407 3.5135L3.52334 39.3964C3.11999 39.7972 2.59308 40.0001 2.06668 40.0001V40.0001Z" fill="white"/>
                    <path d="M37.9525 40.0001C37.4256 40.0001 36.8992 39.7997 36.4984 39.3964L0.61251 3.5135C-0.191149 2.70933 -0.191149 1.4064 0.61251 0.602744C1.41617 -0.200915 2.7191 -0.200915 3.52326 0.602744L39.4061 36.4861C40.2098 37.2898 40.2098 38.5927 39.4061 39.3964C39.0028 39.7972 38.4764 40.0001 37.9525 40.0001Z" fill="white"/>
                    </g>
                    <defs>
                    <clipPath id="clip0">
                    <rect width="40" height="40" fill="white"/>
                    </clipPath>
                    </defs>
                    </svg>
            </div>
            <div class="callback-bot__contant">
                <p class="callback-bot__text">Оставить заявку на бесплатную консультацию.</p>
                <input class="callback-bot__input" type="tel" placeholder="Ваше имя">
                <input class="callback-bot__input" type="tel" placeholder="Ваш номер">
                <button class="callback-bot__submit">ОТПРАВИТЬ</button>
            </div>
        </div>
    </div>
    <?php
        include "footer.php"
    ?>

    <script src="js/index.js"></script>
</body>

</html>