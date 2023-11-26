<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/custom.css">
        <link rel="stylesheet" href="css/intlTelInput.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap');

        .header {
            height: 435px;
            background-color: #f8f9fa;
            /* Цвет фона хедера */
            padding: 22px 15px;
            /* Внутренний отступ внутри хедера */
            box-sizing: border-box;
        }

        .header-content {
            height: 390px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        body {
            padding-top: 56px;
            /* Высота хедера (56px) + отступ сверху */
            /* background: #FBD800; */
        }

        .form-container {
            /* width: 766px; */
            /* height: 436px; */
            margin: 50px auto;
            /* Центрирование формы */
            background-color: #f8f9fa;
            /* Цвет фона формы */
            padding: 20px;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .form-header {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .form-group {
            width: 100%;
            display: flex;
            flex-direction: column;
            margin-bottom: 15px;
        }

        .form-group label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input {
            padding: 8px;
        }

        .form-text {
            margin-top: 20px;
            margin-bottom: 20px;
            display: flex;
            gap: 20px;
        }

        .submit-button {
            align-self: center;
            padding: 10px 20px;
            background-color: #007bff;
            /* Цвет кнопки */
            color: #fff;
            /* Цвет текста на кнопке */
            border: none;
            cursor: pointer;
        }

        .navbar-light .navbar-toggler {
            border: none;
        }

        p {
            margin-bottom: 0px;
        }

        .btn-primary {
            border-radius: 4px;
            background: #FBD800;
            color: #181717;
            font-family: Roboto;
            font-size: 18px;
            font-style: normal;
            font-weight: 700;
            line-height: 100%; /* 18px */
            letter-spacing: 0.54px;
            padding: 14px 20px;
        }

        .width {
                width: 100%;
        }
    </style>

</head>

<body>

    <!-- Навигационная панель -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <!-- <a class="navbar-brand" href="#">Логотип</a> -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Пункт 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Пункт 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Пункт 3</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Пункт 4</a>
                </li>
            </ul>
        </div>
        <button class="btn btn-primary ml-2">Присодениться</button>
    </nav>

    <!-- Хедер -->
    <div class="header">
        <div class="header-content">
            <!-- Контент внутри хедера -->
            <h1>Работа в твоем городе</h1>
            <p>Если ты хочешь координально
                изменить свою жизнь и
                зарабатывать от 20 000 рублей в день</p>
            <p>свяжись с нами удобным для тебя способом</p>
        </div>
    </div>

    <section>
        <!-- Форма -->
        <!-- <form class="form-container form-registration" action="./success.php?subid={subid}" method="post">
            <div class="form-header">Заголовок формы</div>

            <div class="form-group">
                <input type="text" id="name" name="f_name" placeholder="Имя*" required="" class="form-name">
            </div>

            <div class="form-group">
                <input type="text" id="city" name="city" placeholder="Город*" required="" class="intl-tel-input">
            </div>

            <div class="form-group">
                <input type="tel" name="phone"
                class="form-phone"
                required="" 
                autocomplete="off"
                data-intl-tel-input-id="0"  
                >
            </div>

            <div class="form-text">
                <p>Заполняя форму, я принимаю условия передачи информации</p>
                <button class="submit-button" type="submit">Продолжить</button>
            </div>
        </form> -->
         <form class="form-registration" data-id="0" action="./success.php?subid={subid}" method="post" >
                                                <div class="form-group">
                                                    <input type="text" required="" placeholder="Имя*" name="f_name" class="form-name">
                                                    <div class="invalid-feedback">Twoje imię jest zbyt krótkie (co
                                                        najmniej 2 znaki)
                                                    </div>
                                                </div>

                                                <!-- <div class="form-group">
                                                    <input type="hidden" required="" value="" placeholder="Nazwisko" name="l_name" class="form-lastname">
                                                    <div class="invalid-feedback">Twoje nazwisko jest zbyt krótkie (co
                                                        najmniej 2 znaki)
                                                    </div>
                                                </div> -->
                                                <!-- <div class="form-group">
                                                    <input type="hidden" required="" placeholder="E-mail" name="email" class="form-email">
                                                    <div class="invalid-feedback">Wprowadź swój prawdziwy adres e-mail
                                                        (example@gmail.com)
                                                    </div>
                                                </div> -->
                                                <div class="form-group">
                                                    <input type="text" required="" placeholder="Город*" name="city" class="form-city">
                                                    <div class="invalid-feedback">Пожалуйста, введите ваш город
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <input type="tel" name="phone" class="form-phone" required="">
                                                    <div class="invalid-feedback" style="width: 100%">Wprowadź swój
                                                        pełny numer telefonu
                                                    </div>
                                                </div>

                                                <button class="form-button" type="submit" disabled="">
                                                    Utwórz darmowe konto
                                                </button>
                                                <input type="hidden" name="full-phone">
                                                <!-- <input type="hidden" name="client_ip">
                                                <input type="hidden" name="land_id">
                                                <input type="hidden" name="id" value="1">
                                                <input type="hidden" name="clickid" value="2949cgxira8vr615"> -->
                                            </form>
                                        
    </section>

    <script src="./js/intlTellnput.js"></script>
<script src="./js/utils.js"></script>
<script src="./js/main.js"></script>

    <!-- Подключение Bootstrap JS (необходимо для работы навигационной панели на мобильных устройствах) -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

   






</body>

</html>