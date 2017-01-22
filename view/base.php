<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$title?></title>
    <link href="<?=FPATH?>assets/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=FPATH?>assets/treemenu-js/jquery.treemenu.css" rel="stylesheet">
    <link href="<?=FPATH?>assets/slick-1.6.0/slick/slick.css" rel="stylesheet">
    <link href="<?=FPATH?>assets/slick-1.6.0/slick/slick-theme.css" rel="stylesheet">
    <link href="<?=FPATH?>assets/Collapsible-Tree-Menu-Plugin-with-jQuery-CSS3-Nxeed-Tree-Menu/css/style.css" rel="stylesheet">
    <link href="<?=FPATH?>assets/Collapsible-Tree-Menu-Plugin-with-jQuery-CSS3-Nxeed-Tree-Menu/lib/jquery.ntm/themes/default/css/theme.css" rel="stylesheet">
    <link href="<?=FPATH?>assets/style.css" rel="stylesheet">
    <script src="<?=FPATH?>vendor/components/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="<?=FPATH?>assets/bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?=FPATH?>assets/treemenu-js/jquery.treemenu.js" type="text/javascript"></script>
    <script src="<?=FPATH?>assets/slick-1.6.0/slick/slick.min.js" type="text/javascript"></script>
    <script src="<?=FPATH?>assets/Collapsible-Tree-Menu-Plugin-with-jQuery-CSS3-Nxeed-Tree-Menu/lib/jquery.ntm/js/jquery.ntm.js" type="text/javascript"></script>
    <script language="JavaScript" src="<?=FPATH?>assets/script.js" type="text/javascript"></script>
</head>
<body>
    <div class="header container">
        <div class="reg-logo">
            <div class="users">
                <ul>
                    <li class="auth">
                        <a><span class="glyphicon glyphicon-lock"></span> Вход</a>
                    </li>
                    <li class="register"> /
                        <a>Регистрация</a>
                    </li>
                </ul>
            </div>
            <div class="logo">
                <img src="<?=FPATH?>img/logo.png">
            </div>
        </div>
        <div class="information">
            <div class="contacts">
                <ul>
                    <li>
                        Интернет-магазин: <br>
                        <strong>+7 985 998-96-71</strong>
                    </li>
                    <li>
                        Магазин SKIWAX <i>"sport"</i>: <br>
                        <strong>+ 7 499 579-30-41</strong>
                    </li>
                    <li>
                        Оптовые закупки: <br>
                        <strong>+ 7 915 330-22-75</strong>
                    </li>
                    <li>
                        Работа со спорт.школами: <br>
                        <strong>+ 7 915 329-99-24</strong>
                    </li>
                </ul>
            </div>
            <div class="contact_times_info">
                Звонки принимаются с 9 до 18 по рабочим дням(по Москве)
            </div>
            <div class="searchform">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <form class="navbar-form" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Что Вы ищете?" name="search" id="search-input">
                                <select class="form-control" id="select-brand">
                                    <option value="0">Все бренды</option>
                                </select>
                                <button class="btn" id="search-button" type="submit">
                                    <span class="glyphicon glyphicon-search" aria-label="найти"></span>
                                </button>
                            </div>
                        </form>
                    </div>
                </nav>
            </div>
            <div class="basket">
                <div class="name">
                    Ваша корзина:
                </div>
                <strong>
                    <a>Кол-во тов.</a>
                </strong>
                <span>Сумма (руб.)</span>
                <div class="submit">
                    <button type="button" class="btn btn-default">Оформить заказ</button>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-default main-menu" role="navigation">
            <div class="container-fluid">
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="#">КАТАЛОГ</a></li>
                        <li><a href="#">ХАЛЯВА</a></li>
                        <li>
                            <a href="#">СКИДКА</a>
                        </li>
                        <li>
                            <a href="#">МАГАЗИН</a>
                        </li>
                        <li>
                            <a href="#">СЕРВИС</a>
                        </li>
                        <li>
                            <a href="#">О НАС</a>
                        </li>
                        <li>
                            <a href="#">ДОСТАВКА</a>
                        </li>
                        <li>
                            <a href="#">ОПЛАТА</a>
                        </li>
                        <li>
                            <a href="#">ПОМОЩЬ</a>
                        </li>
                        <li>
                            <a href="#">КОНТАКТЫ</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </div>

    <?=$content?>

    <div class="footer">
        <nav class="navbar navbar-default main-menu" role="navigation">
            <div class="container-fluid">
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="#">КАТАЛОГ</a></li>
                        <li><a href="#">ХАЛЯВА</a></li>
                        <li>
                            <a href="#">СКИДКА</a>
                        </li>
                        <li>
                            <a href="#">МАГАЗИН</a>
                        </li>
                        <li>
                            <a href="#">СЕРВИС</a>
                        </li>
                        <li>
                            <a href="#">О НАС</a>
                        </li>
                        <li>
                            <a href="#">ДОСТАВКА</a>
                        </li>
                        <li>
                            <a href="#">ОПЛАТА</a>
                        </li>
                        <li>
                            <a href="#">ПОМОЩЬ</a>
                        </li>
                        <li>
                            <a href="#">КОНТАКТЫ</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <div class="footer-info">
            <div class="payment">
                <img src="<?=FPATH?>img/0.png">
            </div>
            <div class="contacts">
                <ul>
                    <li>
                        Интернет-магазин: <br>
                        <strong>+7 985 998-96-71</strong>
                    </li>
                    <li>
                        Магазин SKIWAX <i>"sport"</i>: <br>
                        <strong>+ 7 499 579-30-41</strong>
                    </li>
                    <li>
                        Оптовые закупки: <br>
                        <strong>+ 7 915 330-22-75</strong>
                    </li>
                </ul>
            </div>
        </div>
        <div class="copyright">
            <p>Интернет-магазин SkiWax.ru © 2017</p>
        </div>
    </div>

</body>