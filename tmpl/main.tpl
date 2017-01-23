<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns="http://www.w3.org/1999/html">
<head>
    <title><?=$this->title?></title>
    <meta charset="UTF-8">
    <meta name="description" content="<?=$this->meta_desc?>"/>
    <meta name="keywords" content="<?=$this->meta_key?>"/>
    <link rel="stylesheet" href="style/main.css" type="text/css"/>
</head>
<body>
<div id="body">
    <div id="header">
        <a href="<?=$this->link_user?>" title="Members Login" class="login">Вітаю <span><?=$this->user_name?></span></a>
        <div id="text_adress">
            <p class="red">м.Соснівка<br>
                Львівська обл. Україна</p>
            <p class="grey">вул. хорошая <br>
                Телефон нокиа</p>
        </div>
        <div id="menu_top">
            <ul class="nav">
                <li><a href="#" class="hover">Головна сторінка</a></li>
                <li><a href="#">Про Нас</a></li>
                <li><a href="#">Новини</a></li>
                <li><a href="#">Регіон</a></li>
                <li><a href="#">Служіння</a></li>
                <li><a href="#">Недільна школа</a></li>
                <li><a href="#">Планування</a></li>
                <li><a href="#">Зв'язатись</a></li>
                <li><a href="#">Зв'язатись</a></li>
            </ul>
        </div>
    </div>

    <div id="container">
        <div id="left">
            <div>
                <h2><span>Головне меню</span></h2>
                <ul>
                    <li><a href="#"><span class="nor">jul</span><span class="bg">01</span>Головна сторінка</a></li>
                    <li><a href="#"><span class="nor">jul</span><span class="bg">03</span>Про Нас</a></li>
                    <li><a href="#"><span class="nor">jul</span><span class="bg">04</span>Новини</a></li>
                </ul>
            </div>
            <div>
                <h2 style="margin-top: 10px"><span>Розклад служінь</span></h2>
                <p style="text-align: center;"><em>Розклад оновлено на 2016 р.</em></p>
                <table>
                    <tbody>
                    <tr>
                        <td><span style="color: #1e73be;"><strong>25 січня</strong></span></td>
                        <td><strong>&nbsp;17:00&nbsp; &nbsp;</strong></td>
                        <td><strong>с.&nbsp;Карпилiвка</strong></td>
                    </tr>
                    <tr>
                        <td><span style="color: #1e73be;"><strong>22 лютого</strong></span></td>
                        <td><strong>&nbsp;17:00</strong></td>
                        <td><strong>с. Качин</strong></td>
                    </tr>
                    <tr>
                        <td><span style="color: #1e73be;"><strong>22 березня</strong></span></td>
                        <td><strong>&nbsp;17:00&nbsp;&nbsp;</strong></td>
                        <td><strong>с. Брониця</strong></td>
                    </tr>
                    <tr>
                        <td><span style="color: #1e73be;"><strong>26 квітня</strong></span></td>
                        <td><strong>&nbsp;17:00&nbsp;&nbsp;</strong></td>
                        <td><strong>м. Камiнь-Каширський</strong></td>
                    </tr>
                    <tr>
                        <td><span style="color: #1e73be;"><strong>24 травня</strong></span></td>
                        <td><strong>&nbsp;17:00&nbsp;&nbsp;</strong></td>
                        <td><strong>с.&nbsp;Гута-Боровенська</strong></td>
                    </tr>
                    <tr>
                        <td><span style="color: #1e73be;"><strong>28 червня</strong></span></td>
                        <td><strong>&nbsp;17:00&nbsp;&nbsp;</strong></td>
                        <td><strong>с. Воегоща</strong></td>
                    </tr>
                    <tr>
                        <td><span style="color: #1e73be;"><strong>26 липня</strong></span></td>
                        <td><strong>&nbsp;17:00&nbsp;&nbsp;</strong></td>
                        <td><strong>с. Карасин</strong></td>
                    </tr>
                    <tr>
                        <td><span style="color: #1e73be;"><strong>23 серпня</strong></span></td>
                        <td><strong>&nbsp;17:00&nbsp;&nbsp;</strong></td>
                        <td><strong>с. Пiщане</strong></td>
                    </tr>
                    <tr>
                        <td><span style="color: #1e73be;"><strong>27 вересня</strong></span></td>
                        <td><strong>&nbsp;17:00&nbsp;&nbsp;</strong></td>
                        <td><strong>с. Стобихiвка</strong></td>
                    </tr>
                    <tr>
                        <td><span style="color: #1e73be;"><strong>25 жовтня</strong></span></td>
                        <td><strong>&nbsp;17:00</strong></td>
                        <td><strong>с. Пiдрiччя</strong></td>
                    </tr>
                    <tr>
                        <td><span style="color: #1e73be;"><strong>25 листопада</strong></span></td>
                        <td><strong>&nbsp;17:00</strong></td>
                        <td><strong>с. Краснилiвка</strong></td>
                    </tr>
                    <tr>
                        <td><span style="color: #1e73be;"><strong>27 грудня</strong></span></td>
                        <td><strong>&nbsp;17:00 &nbsp; &nbsp;</strong></td>
                        <td><strong>с. Воегоща</strong></td>
                    </tr>
                    </tbody>
                </table>
            </div>

        </div>
        <div id="right">
            <div class="loginform">
                <h2><span>Members Login</span></h2>
                <form name="memberLogin" action="#" method="post">
                    <label>Enter Your Name</label>
                    <input type="text" name="name" class="txtBox"/>
                    <label>Enter Your Password</label>
                    <input type="password" name="password" class="txtBox"/>
                    <a href="#">Forget Password</a>
                    <input type="submit" name="login" value="Login" class="login"/>
                    <br class="spacer"/>
                </form>
            </div>
            <div class="blog">
                <h2>Оголошення</h2>
                <ul class="head">
                    <li>kibero ligulain leced smd, diam in prta</li>
                </ul>
                <p>In lobortis neque eu orciM ulla aliquam adipiscing massa ulla. Suspendisse nulla.
                    Aliquam</p>
                <ul class="head">
                    <li>blandit molestie em orci, feugiat id, ullorper</li>
                </ul>
                <p class="padBottom">pulvinar viverra.Sedftueleilpu lputaligulaeleifturpis,eleifend ut,
                    viverraon,</p>
            </div>
        </div>
        <div id="main">
            <?php include "content_".$this->content.".tpl"; ?>


        </div>
    </div>
</div>
<div class="clear"></div>

<footer id="containerfooter" class="footerclass" role="contentinfo">
    <div class="container">
        <p>Copyright &copy; 2017 молодь - Усі права захищено. <span style="color: #ffffff;"></span></p>

    </div>
</footer>
</body>
</html>