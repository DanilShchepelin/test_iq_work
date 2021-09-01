<?php header("Content-Type: text/html; charset=UTF-8"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="jquery-ui.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Test work</title>
</head>
<body>
    <div class="wrapper">
        <header class="header">
            <div class="container">
                <div class="header_logo">
                    <img src="logo/logo.png" alt="logo">
                    <div class="header_phones">
                        8-800-100-5005 <br>
                        +7 (3452) 522-000
                    </div>
                </div>
                <ul class="header_menu">
                    <li class="header_menu_item">Кредитные карты</li>
                    <li class="header_menu_item menu_active">Вклады</li>
                    <li class="header_menu_item">Дебетовая карта</li>
                    <li class="header_menu_item">Страхование</li>
                    <li class="header_menu_item">Друзья</li>
                    <li class="header_menu_item">Интернет банк</li>
                </ul>
            </div>
        </header>
    
        <section class="calc">
            <div class="container">
                <div class="nav">
                    <a href="#" class="link">Главная</a> -
                    <a href="#" class="link">Вклады</a> -
                    <a href="#" class="link active_link">Калькулятор</a>
                </div>
    
                <form action="calc.php" method="POST" id="result">
                    <h1>Калькулятор</h1>
    
                    <div class="form_inputs">
                        <!-- <div class="inputs">
                            <label for="a">Дата оформления вклада</label>
                            <label for="b">Сумма вклада</label>
                            <label for="c">Срок вклада</label>
                            <label for="d">Пополнение вклада</label>
                            <label for="e">Сумма пополнения вклада</label>
                        </div> -->
                        
                        <div class="form_inputs_item">
                            <label for="a">Дата оформления вклада</label>
                            
                            <input id="a" name="date" type="text">
                        </div>
                        <div class="form_inputs_item range">
                            <label for="b">Сумма вклада</label>
                            <input id="b" name="summ" type="number" min="1000" max="3000000">
                            <input type="range" class="input_range" min="1000" max="3000000">
                        </div>
                        <div class="form_inputs_item">
                            <label for="c">Срок вклада</label>
                            <select name="years" id="c">
                                <option value="365">1 год</option>
                                <option value="730">2 года</option>
                                <option value="1095">3 года</option>
                                <option value="1460">4 года</option>
                                <option value="1825">5 лет</option>
                            </select>
                        </div>
                        <div class="form_inputs_item">
                            <label for="d">Пополнение вклада</label>
                            <input id="d" name="radio" type="radio" name="choise" value="no" class="not" checked>Нет
                            <input id="d" name="radio" type="radio" name="choise" value="yes" class="not">Да
                        </div>
                        <div class="form_inputs_item range2">
                            <label for="e">Сумма пополнения вклада</label>
                            <input id="e" name="summadd" type="number" min="1000" max="3000000">
                            <input type="range" class="input_range" min="1000" max="3000000">
                        </div>
    
                        <button class="form_submit">Рассчитать</button>
                        <input type="text" id="res">
                    </div>
                </form>
            </div>
        </section>
    
        <footer class="footer">
            <div class="container">
                <ul class="footer_menu">
                    <li class="footer_menu_item">
                        <a href="">Кредитные карты</a>
                    </li>
                    <li class="footer_menu_item menu_active">
                        <a href="">Вклады</a>
                    </li>
                    <li class="footer_menu_item">
                        <a href="">Дебетовая карта</a>
                    </li>
                    <li class="footer_menu_item">
                        <a href="">Страхование</a>
                    </li>
                    <li class="footer_menu_item">
                        <a href="">Друзья</a>
                    </li>
                    <li class="footer_menu_item">
                        <a href="">Интернет банк</a>
                    </li>
                </ul>
            </div>
        </footer>
    </div>
    
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="jquery-ui.min.js"></script>
    <script src="script.js"></script>
</body>
</html>

