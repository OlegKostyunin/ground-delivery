<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/styles/style.css">
    <title>Ground Delivery</title>
</head>

<body>
    <div class="big_container" style="margin-bottom: 200px;">
        <div class="nav">
            <div class="title-nav">
                <div class="logo">
                    <img class="logotype" src="assets/imgs/logotype.svg" alt="логотип">
                </div>
                <div class="button btn_nav">
                    <a href="#dost">Доставка</a>
                </div>
                <a href="#usl" class="b-white">Услуги</a>
                <a href="#usl" class="b-white">Цены</a>
                <div class="dropdown">
                    <a href="#foot" class="b-white">Контакты</a>
                    <div class="dropdown-content">
                        <a href="https://wa.me/yourwhatsappnumber" target="_blank">
                            <img src="assets/imgs/i_ws.svg" alt="WhatsApp Icon">WhatsApp
                        </a>
                        <a href="https://vk.com/yourvkprofile" target="_blank">
                            <img src="assets/imgs/i_vk.svg" alt="VK Icon">ВКонтакте
                        </a>
                        <a href="viber://chat?number=yourvibernumber" target="_blank">
                            <img src="assets/imgs/i_viber.svg" alt="Viber Icon">Viber
                        </a>
                        <a href="tel:yourphonenumber">
                            <img src="assets/imgs/i_tel.svg" alt="Phone Icon">Телефон
                        </a>
                    </div>
                </div>
                <div class="button btn_nav">
                    <a href="authorization.html">Профиль</a>
                </div>
                
            </div>
        </div>

    </div>

    <section class="bg_img" style="background-image: url(./assets/imgs/background.png);">
        <div class="big_container" style="position: relative;">
            <div class="title-stroke">
                <div class="big-title">
                    <h1>Доставка песка, щебня и грунта</h1>
                    <p>Более 20 лет на рынке</p>
                </div>
                <div class="stroke">
                    
                    <div class="button_main" onclick="hideText()" style="width: 249px; cursor: pointer;" id="moveButton">
                        <div class="text-icon" id="moveButton">
                            <b><p>Рассчитать стоимость</p></b>
                        </div>
                        
                    </div>
                    <div class="text_bron" id="text_bron">Проведите чтобы рассчитать стоимость</div>
                   
                    <div id="modalWin" class="modalWin">
                        <div class="block" style="justify-content: center; flex-direction: column; gap: 30px;">
                            <div class="modal_content">

                                <div class="closeWin">
                                    <img src="assets/imgs/cross.svg" style="width: 20px;" alt="cross">
                                </div>

                                <div class="title" style="width: 100%;">
                                    <h1>РАССЧЕТ СТОИМОСТИ ДОСТАВКИ</h1>
                                </div>

                                <form action="" style="display: flex; flex-direction: column;">
                                    <select id="choose_service">
                                        <option selected disabled>Выберите услугу</option>
                                        <option value="sand">Песок</option>
                                        <option value="stone">Щебень</option>
                                        <option value="mixture">Песчано-гравийная смесь</option>
                                        <option value="priming">Плодородный грунт</option>
                                    </select>
                                    <input type="num" placeholder="Количество в тоннах" class="input" id="ton"
                                        value="" />
                                    <select id="choose_city">
                                        <option selected disabled>Выберите город</option>
                                        <option value="nn">Нижний Новгород</option>
                                        <option value="dzer">Дзержинск</option>
                                        <option value="bogorodsk">Богородск</option>
                                        <option value="bor">Бор</option>
                                        <option value="balahna">Балахна</option>
                                        <option value="kstovo">Кстово</option>
                                    </select>
                                </form>
                            </div>

                            <button class="button" style="cursor: pointer; padding: 15px;" id="sendApplication">
                                <p>Рассчитать стоимость</p>
                            </button>
                        </div>

                    </div>

                    <div class="modalBackdrop" id="modalBackdrop"></div>
                    <!---->

                    <!-- <a
                            href="https://docs.google.com/forms/d/e/1FAIpQLSdXT-MT1k4P7gCDgYKJat4_uloy5p7_C3wAke0MuLMMW9EiSQ/viewform?usp=sf_link">
                            
                        </a> -->
                </div>
            </div>
        </div>


    </section>

    <section class="big_container" id="usl">
        <div class="services">
            <div class="title-service">
                <h1>Услуги</h1>
                <select name="" id="tariff">
                    <option value="all" selected>Выберите услугу</option>
                    <option value="sand">Песок</option>
                    <option value="stone">Щебень</option>
                    <option value="opgs">ОПГС</option>
                    <option value="soil">Грунт</option>
                    <option value="waste">Вывоз мусора</option>
                    <option value="demolition">Демонтаж строений</option>
                    <option value="loader">Аренда погрузчика</option>
                    <option value="snow">Вывоз снега</option>
                </select>
            </div>
    
            <div class="services_container">
                <div class="three_carts">
                    <div class="cart" data-service="sand">
                        <img src="assets/imgs/cart1.svg" alt="cart">
                        <div class="description">
                            <h1>Песок</h1>
                            <p>Песок используется при выполнении практически всех строительных
                                работ, и мы поможем быстро и дёшево обеспечить его доставку.
                            </p>
                            <div class="line"></div>
                            <div class="price">
                                <h1>от 1300 ₽ / <span class="t-small">тонна</span></h1>
                            </div>
                        </div>
                    </div>
                    <div class="cart" data-service="stone">
                        <img src="assets/imgs/cart2.svg" alt="cart">
                        <div class="description">
                            <h1>Щебень</h1>
                            <p>Щебень - востребованный материал, использующийся во многих областях
                                строительства, будь то дорожное или жилищное хозяйство.
                            </p>
                            <div class="line"></div>
                            <div class="price">
                                <h1>от 1500 ₽ / <span class="t-small">тонна</span></h1>
                            </div>
                        </div>
                    </div>
                    <div class="cart" data-service="opgs">
                        <img src="assets/imgs/cart3.svg" alt="cart">
                        <div class="description">
                            <h1>Песчано-гравийная смесь</h1>
                            <p>Пользуется популярностью, так как она используется при приготовлении
                                растворов, бетонных смесей, заливке фундамента и стяжки.
                            </p>
                            <div class="line"></div>
                            <div class="price">
                                <h1>от 900 ₽ / <span class="t-small">тонна</span></h1>
                            </div>
                        </div>
                    </div>
                    <div class="cart" data-service="soil">
                        <img src="assets/imgs/cart7.svg" alt="cart">
                        <div class="description">
                            <h1>Плодородный грунт</h1>
                            <p>Грунт плодородный активно используется обладателями приусадебных
                                участков, владельцами парников и теплиц.
                            </p>
                            <div class="line"></div>
                            <div class="price">
                                <h1>от 1700 ₽ / <span class="t-small">тонна</span></h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="three_carts">
                    <div class="cart" data-service="waste">
                        <img src="assets/imgs/cart4.svg" alt="cart">
                        <div class="description">
                            <h1>Вывоз мусора</h1>
                            <p>Подходит для срочного вывоза большого объема строительного или
                                бытового мусора. Грузоподъемность самосвалов до 10 тонн.
                            </p>
                            <div class="line"></div>
                            <div class="price">
                                <h1>от 1200 ₽ / <span class="t-small">тонна</span></h1>
                            </div>
                        </div>
                    </div>
                    <div class="cart" data-service="demolition">
                        <img src="assets/imgs/cart5.svg" alt="cart">
                        <div class="description">
                            <h1>Демонтаж строений</h1>
                            <p>Демонтаж строений из любых материалов (кирпичное здание, деревянные
                                конструкции, демонтаж части здания).
                            </p>
                            <div class="line"></div>
                            <div class="price">
                                <h1>от 100 ₽ / <span class="t-small">м. куб</span></h1>
                            </div>
                        </div>
                    </div>
                    <div class="cart" data-service="loader">
                        <img src="assets/imgs/cart6.svg" alt="cart">
                        <div class="description">
                            <h1>Аренда погрузчика</h1>
                            <p>Аренда фронтального погрузчика для самостоятельной работы, будь то
                                уборка территории, погрузка материалов и прочее.
                            </p>
                            <div class="line"></div>
                            <div class="price">
                                <h1>от 2000 ₽ / <span class="t-small">тонна</span></h1>
                            </div>
                        </div>
                    </div>
                    <div class="cart" data-service="snow">
                        <img src="assets/imgs/cart8.svg" alt="cart">
                        <div class="description">
                            <h1>Вывоз снега</h1>
                            <p>Подходит для вывоза снега с территории. Вместимость кузова до 10 куб.
                                метров, грузоподъемность самосвалов до 13 тонн.
                            </p>
                            <div class="line"></div>
                            <div class="price">
                                <h1>от 1400 ₽ / <span class="t-small">тонна</span></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="big_container" style="margin-top: -20px;">
        <div class="services">
            <div class="title-service">
                <h1>Пункты доставки на карте</h1>
            </div>
        </div>

        <ol class="block_adrs">
            <li class="button adrs is-active" style="padding: 15px;">
                <p>Нижний Новгород</p>
            </li>
            <li class="button adrs" style="padding: 15px;">
                <p>Дзержинск</p>
            </li>
            <li class="button adrs" style="padding: 15px;">
                <p>Богородск</p>
            </li>
            <li class="button adrs" style="padding: 15px;">
                <p>Бор</p>
            </li>
            <li class="button adrs" style="padding: 15px;">
                <p>Балахна</p>
            </li>
            <li class="button adrs" style="padding: 15px;">
                <p>Кстово</p>
            </li>
        </ol>

        <ul class="map">
            <li class="content_map is-active">
                <iframe
                    src="https://yandex.ru/map-widget/v1/?um=constructor%3A4dc55aa2648e888b4436430a440ca5226c42e655aca023ce4de25285724b1add&amp;source=constructor"
                    width="100%" height="410" frameborder="0">
                </iframe>
            </li>
            <li class="content_map">
                <iframe
                    src="https://yandex.ru/map-widget/v1/?um=constructor%3Ab25c4fe7e84b86467aba3d946b8a3a012e92a9b9ea00c292bcfe484f428da28c&amp;source=constructor"
                    width="100%" height="410" frameborder="0">
                </iframe>
            </li>
            <li class="content_map">
                <iframe
                    src="https://yandex.ru/map-widget/v1/?um=constructor%3A7331523548966166edafc9788283eb14a3e29c4bf10a0452e680e6ca5c4bd986&amp;source=constructor"
                    width="100%" height="410" frameborder="0">
                </iframe>
            </li>
            <li class="content_map">
                <iframe
                    src="https://yandex.ru/map-widget/v1/?um=constructor%3A7306c5adb9935b58d9fe119da4fcd794b6548dab58eb7be9310be40fcdfa85ed&amp;source=constructor"
                    width="100%" height="410" frameborder="0">
                </iframe>
            </li>
            <li class="content_map">
                <iframe
                    src="https://yandex.ru/map-widget/v1/?um=constructor%3Abc9428647e755bf247ddaf9f01527cd5f20a8e2e63a6439db34b671d3ec75e67&amp;source=constructor"
                    width="100%" height="410" frameborder="0">
                </iframe>
            </li>
            <li class="content_map">
                <iframe
                    src="https://yandex.ru/map-widget/v1/?um=constructor%3A115919f50a514d72933a5655f2d9e257200446f4eef3b7f583c2b2927b620ae4&amp;source=constructor"
                    width="100%" height="410" frameborder="0">
                </iframe>
            </li>
        </ul>
    </section>

    <section class="big_container" style="margin-top: 65px;">
        <div class="services">
            <div class="title-service">
                <h1>Фотогалерея</h1>

                <div class="button arrow" id="prev">
                    <div class="text-icon">
                        <img src="assets/imgs/ar_left.svg" alt="ar_left">
                    </div>
                </div>

                <div class="button arrow">
                    <div class="text-icon" id="next">
                        <img src="assets/imgs/ar_right.svg" alt="ar_right">
                    </div>
                </div>
            </div>

            <div class="slider">
                <div class="photo" id="img1">
                    <img src="" alt="p1">
                </div>
                <div class="photo" id="img2">
                    <img src="" alt="p2">
                </div>
                <div class="photo" id="img3">
                    <img src="" alt="p3">
                </div>
            </div>
        </div>
    </section>
    
    <section class="big_container" id="dost">
        <div class="form-container" style="margin-top: 75px">
            <div class="form">
                <div class="title-text">
                    <h1>
                        <span class="yellow-text" data-before="ОСТАВЬТЕ ЗАЯВКУ ПРЯМО СЕЙЧАС,"><br></span>
                        <span class="black-text">И НАШИ СПЕЦИАЛИСТЫ ПЕРЕЗВОНЯТ ВАМ</span>
                    </h1>
                </div>
                <div class="form-group">
                    <label for="phone">Введите номер телефона:</label>
                    <div class="group">
                        <input type="text" id="phone" name="phone" required placeholder="+7 (___) ___-____">
                        <button onclick="openPopup()" class="button">Отправить заявку</button>
                    </div>
                </div>
                <p class="form-note">Нажимая на кнопку, вы соглашаетесь на обработку ваших персональных данных.</p>
            </div>
        </div>
    </section>
    
    <div class="popup" id="popup" style="font-family: 'Mon';">
        <div class="popup-form">
            <span class="close" onclick="closePopup()">&times;</span>
            <form action="https://api.web3forms.com/submit" method="POST" class="contact-form" style="gap: 0;">
                <input type="hidden" name="access_key" value="888a0014-decb-4e4f-b083-739dcf2d2c9c">
                
                <div class="form-group">
                    <label for="name">Имя:</label>
                    <input type="text" id="name" name="name" required placeholder="Введите ваше имя">
                </div>
                
                <div class="form-group">
                    <label for="phone-popup">Номер телефона:</label>
                    <input type="text" id="phone-popup" name="phone" required placeholder="+7 (___) ___-____">
                </div>
                
                <div class="form-group">
                    <label for="email">Почтовый адрес:</label>
                    <input type="email" id="email" name="email" required placeholder="Введите ваш email">
                </div>
                
                <div class="form-group">
                    <label for="message">Сообщение:</label>
                    <textarea id="message" name="message" required placeholder="Напишите ваше сообщение"  style="font-family: 'Mon'; min-height: 55px;"></textarea>
                </div>
                
                <button type="submit">Отправить заявку</button>
            </form>
            
            <p class="form-note">Нажимая на кнопку, вы соглашаетесь на обработку персональных данных.</p>
        </div>
    </div>

    <section class="big_container">
        <div class="reviews-container">
            <div class="services">
                <div class="title-service">
                    <h1>Отзывы клиентов</h1>
                </div>
            </div>
            <div id="reviews-list">
                <!-- Сюда будут добавляться отзывы динамически -->
            </div>
            <form id="add-review-form">
                <div class="form-group" >
                    <label for="review-name">Имя:</label>
                    <input type="text" id="review-name" name="name" required style="min-height: 50px;">
                </div>
                <div class="form-group">
                    <label for="review-text">Отзыв:</label>
                    <textarea id="review-text" name="text" rows="4" required style="max-height: 50px;"></textarea>
                </div>
                <div class="form-group" style="padding-top: 37px;">
                    <button type="submit">Добавить отзыв</button>
                </div>
            </form>
        </div>
    </section>

    
    

    <footer style="margin-top: 35px;" id="foot">
        <div class="big_container">
            <div class="block" style="align-items: flex-start; justify-content: space-between;">
                <div class="logo">
                    <img class="logotype" src="assets/imgs/logotype.svg" alt="логотип">
                </div>

                <div class="block" style="align-items: flex-start; flex-direction: column;">
                    <p style="font-weight: 600; padding-bottom: 14px;">Доставка</p>
                    <p>О сервисе</p>
                    <p>Блог</p>
                    <p>Часто задаваемые вопросы</p>
                    <p>Способы оплаты</p>
                </div>

                <div class="block" style="align-items: flex-start; flex-direction: column;">
                    <p style="font-weight: 600; padding-bottom: 14px;">Услуги</p>
                    <p>Доставка материалов</p>
                    <p>Демонтаж строений</p>
                    <p>Вывоз снега и мусора</p>
                    <p>Аренда спецтехники</p>
                </div>

                <div class="block" style="align-items: flex-start; flex-direction: column;">
                    <p style="font-weight: 600; padding-bottom: 14px;">Цены</p>
                    <p>О сервисе</p>
                    <p>Блог</p>
                    <p>Часто задаваемые вопросы</p>
                    <p>Способы оплаты</p>
                </div>

                <div class="block" style="flex-direction: column;">
                    <div class="text-icon" style="display: flex; align-items: center;">
                        <img src="assets/imgs/i_tel.svg" alt="tel">
                        <a href="#" style="font-weight: 500;">8 (951) 919-51-06</a>
                    </div>
                    <div class="text-icon">
                        <a href="#"><img src="assets/imgs/i_vk.svg" alt="vk"></a>
                        <a href="#"><img src="assets/imgs/i_tg.svg" alt="tg"></a>
                        <a href="#"><img src="assets/imgs/i_ws.svg" alt="ws"></a>
                        <a href="#"><img src="assets/imgs/i_viber.svg" alt="viber"></a>
                    </div>

                    <div class="button" style="padding: 15px 30px;">
                        <a
                            href="https://docs.google.com/forms/d/e/1FAIpQLSdXT-MT1k4P7gCDgYKJat4_uloy5p7_C3wAke0MuLMMW9EiSQ/viewform?usp=sf_link">
                            <div class="text-icon">
                                <p style="font-weight: 600; font-family: 'Mon';">Поддержка</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="./assets/js/main.js"></script>
</body>

</html>