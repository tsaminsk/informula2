<?php header("Access-Control-Allow-Origin: http://example.com"); ?>
<!DOCTYPE html>
<html class='no-js' lang='ru'>
<head>
    <meta content='IE=edge,chrome=1' http-equiv='X-UA-Compatible'>
    <link href='https://www.milur.ru/bitrix/templates/default/css/bootstrap.css' media='screen' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i&amp;subset=cyrillic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i&amp;subset=cyrillic" rel="stylesheet">
    <link href='https://www.milur.ru/bitrix/templates/default/css/theme.css' media='screen' rel='stylesheet' type='text/css'>
    <link href='https://www.milur.ru/bitrix/templates/default/fonts/rouble_new/rouble.css' media='screen' rel='stylesheet' type='text/css'>
    <meta content='width=device-width, initial-scale=1.0' name='viewport'>
    <link rel="shortcut icon" type="image/png" href="/favicon.png" />
    <!--[if !IE 7]>
    <style>
        #wrapper {display:table;height:100%}
    </style>
    <![endif]-->
    <!--[if lt IE 9]>
    <script src='https://www.milur.ru/bitrix/templates/default/js/vendor/respond.min.js' type='text/javascript'></script>
    <![endif]-->
    <!--[if lt IE 8]>
    <link href='https://www.milur.ru/bitrix/templates/default/css/bootstrap-ie7.css' media='screen' rel='stylesheet' type='text/css'>
    <![endif]-->
    <script src='https://www.milur.ru/bitrix/templates/default/js/vendor/jquery.1.10.2.min.js' type='text/javascript'></script>
    <script src="https://www.milur.ru/bitrix/templates/default/js/vendor/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="https://www.milur.ru/bitrix/js/main/core/css/core.css?14933695513963" type="text/css"  rel="stylesheet" />
<link href="https://www.milur.ru/bitrix/js/main/core/css/core_popup.css?149606383719832" type="text/css"  rel="stylesheet" />
<link href="https://www.milur.ru/bitrix/js/main/core/css/core_date.css?149336955110263" type="text/css"  rel="stylesheet" />
<link href="https://www.milur.ru/bitrix/components/bitrix/sale.location.selector.search/templates/.default/style.css?14933731766262" type="text/css"  rel="stylesheet" />
<link href="https://www.milur.ru/bitrix/panel/main/popup.css?149121159523084" type="text/css"  rel="stylesheet" />
<link href="https://www.milur.ru/bitrix/components/bitrix/sale.location.selector.steps/templates/.default/style.css?14912116157133" type="text/css"  rel="stylesheet" />
<link href="https://www.milur.ru/bitrix/templates/default/js/crocobox/style.css?14978833264032" type="text/css"  data-template-style="true"  rel="stylesheet" />
<link href="https://www.milur.ru/bitrix/templates/default/css/jquery.fancybox.css?149039495013413" type="text/css"  data-template-style="true"  rel="stylesheet" />
<link href="https://www.milur.ru/bitrix/templates/default/css/magnific-popup.css?15311469286951" type="text/css"  data-template-style="true"  rel="stylesheet" />
<link href="https://www.milur.ru/bitrix/templates/default/js/owl/owl.carousel.css?14938185494039" type="text/css"  data-template-style="true"  rel="stylesheet" />
<link href="https://www.milur.ru/bitrix/templates/default/js/owl/owl.theme.default.css?14938186011363" type="text/css"  data-template-style="true"  rel="stylesheet" />
<link href="https://www.milur.ru/bitrix/templates/default/js/jquery-ui.css?148672830919611" type="text/css"  data-template-style="true"  rel="stylesheet" />
<link href="https://www.milur.ru/bitrix/templates/default/components/informula/sale.order.ajax/.default/style.css?15554964321095" type="text/css"  data-template-style="true"  rel="stylesheet" />
<script type="text/javascript">if(!window.BX)window.BX={message:function(mess){if(typeof mess=='object') for(var i in mess) BX.message[i]=mess[i]; return true;}};</script>
<script type="text/javascript">(window.BX||top.BX).message({'JS_CORE_LOADING':'Загрузка...','JS_CORE_NO_DATA':'- Нет данных -','JS_CORE_WINDOW_CLOSE':'Закрыть','JS_CORE_WINDOW_EXPAND':'Развернуть','JS_CORE_WINDOW_NARROW':'Свернуть в окно','JS_CORE_WINDOW_SAVE':'Сохранить','JS_CORE_WINDOW_CANCEL':'Отменить','JS_CORE_WINDOW_CONTINUE':'Продолжить','JS_CORE_H':'ч','JS_CORE_M':'м','JS_CORE_S':'с','JSADM_AI_HIDE_EXTRA':'Скрыть лишние','JSADM_AI_ALL_NOTIF':'Показать все','JSADM_AUTH_REQ':'Требуется авторизация!','JS_CORE_WINDOW_AUTH':'Войти','JS_CORE_IMAGE_FULL':'Полный размер'});</script>
<script type="text/javascript">(window.BX||top.BX).message({'WEEK_START':'1'});(window.BX||top.BX).message({'MONTH_1':'Январь','MONTH_2':'Февраль','MONTH_3':'Март','MONTH_4':'Апрель','MONTH_5':'Май','MONTH_6':'Июнь','MONTH_7':'Июль','MONTH_8':'Август','MONTH_9':'Сентябрь','MONTH_10':'Октябрь','MONTH_11':'Ноябрь','MONTH_12':'Декабрь','MONTH_1_S':'Января','MONTH_2_S':'Февраля','MONTH_3_S':'Марта','MONTH_4_S':'Апреля','MONTH_5_S':'Мая','MONTH_6_S':'Июня','MONTH_7_S':'Июля','MONTH_8_S':'Августа','MONTH_9_S':'Сентября','MONTH_10_S':'Октября','MONTH_11_S':'Ноября','MONTH_12_S':'Декабря','MON_1':'Янв','MON_2':'Фев','MON_3':'Мар','MON_4':'Апр','MON_5':'Май','MON_6':'Июн','MON_7':'Июл','MON_8':'Авг','MON_9':'Сен','MON_10':'Окт','MON_11':'Ноя','MON_12':'Дек','DAY_OF_WEEK_0':'Воскресенье','DAY_OF_WEEK_1':'Понедельник','DAY_OF_WEEK_2':'Вторник','DAY_OF_WEEK_3':'Среда','DAY_OF_WEEK_4':'Четверг','DAY_OF_WEEK_5':'Пятница','DAY_OF_WEEK_6':'Суббота','DOW_0':'Вс','DOW_1':'Пн','DOW_2':'Вт','DOW_3':'Ср','DOW_4':'Чт','DOW_5':'Пт','DOW_6':'Сб','FD_SECOND_AGO_0':'#VALUE# секунд назад','FD_SECOND_AGO_1':'#VALUE# секунду назад','FD_SECOND_AGO_10_20':'#VALUE# секунд назад','FD_SECOND_AGO_MOD_1':'#VALUE# секунду назад','FD_SECOND_AGO_MOD_2_4':'#VALUE# секунды назад','FD_SECOND_AGO_MOD_OTHER':'#VALUE# секунд назад','FD_SECOND_DIFF_0':'#VALUE# секунд','FD_SECOND_DIFF_1':'#VALUE# секунда','FD_SECOND_DIFF_10_20':'#VALUE# секунд','FD_SECOND_DIFF_MOD_1':'#VALUE# секунда','FD_SECOND_DIFF_MOD_2_4':'#VALUE# секунды','FD_SECOND_DIFF_MOD_OTHER':'#VALUE# секунд','FD_MINUTE_AGO_0':'#VALUE# минут назад','FD_MINUTE_AGO_1':'#VALUE# минуту назад','FD_MINUTE_AGO_10_20':'#VALUE# минут назад','FD_MINUTE_AGO_MOD_1':'#VALUE# минуту назад','FD_MINUTE_AGO_MOD_2_4':'#VALUE# минуты назад','FD_MINUTE_AGO_MOD_OTHER':'#VALUE# минут назад','FD_MINUTE_DIFF_0':'#VALUE# минут','FD_MINUTE_DIFF_1':'#VALUE# минута','FD_MINUTE_DIFF_10_20':'#VALUE# минут','FD_MINUTE_DIFF_MOD_1':'#VALUE# минута','FD_MINUTE_DIFF_MOD_2_4':'#VALUE# минуты','FD_MINUTE_DIFF_MOD_OTHER':'#VALUE# минут','FD_MINUTE_0':'#VALUE# минут','FD_MINUTE_1':'#VALUE# минуту','FD_MINUTE_10_20':'#VALUE# минут','FD_MINUTE_MOD_1':'#VALUE# минуту','FD_MINUTE_MOD_2_4':'#VALUE# минуты','FD_MINUTE_MOD_OTHER':'#VALUE# минут','FD_HOUR_AGO_0':'#VALUE# часов назад','FD_HOUR_AGO_1':'#VALUE# час назад','FD_HOUR_AGO_10_20':'#VALUE# часов назад','FD_HOUR_AGO_MOD_1':'#VALUE# час назад','FD_HOUR_AGO_MOD_2_4':'#VALUE# часа назад','FD_HOUR_AGO_MOD_OTHER':'#VALUE# часов назад','FD_HOUR_DIFF_0':'#VALUE# часов','FD_HOUR_DIFF_1':'#VALUE# час','FD_HOUR_DIFF_10_20':'#VALUE# часов','FD_HOUR_DIFF_MOD_1':'#VALUE# час','FD_HOUR_DIFF_MOD_2_4':'#VALUE# часа','FD_HOUR_DIFF_MOD_OTHER':'#VALUE# часов','FD_YESTERDAY':'вчера','FD_TODAY':'сегодня','FD_TOMORROW':'завтра','FD_DAY_AGO_0':'#VALUE# суток назад','FD_DAY_AGO_1':'#VALUE# сутки назад','FD_DAY_AGO_10_20':'#VALUE# суток назад','FD_DAY_AGO_MOD_1':'#VALUE# сутки назад','FD_DAY_AGO_MOD_2_4':'#VALUE# суток назад','FD_DAY_AGO_MOD_OTHER':'#VALUE# суток назад','FD_DAY_DIFF_0':'#VALUE# дней','FD_DAY_DIFF_1':'#VALUE# день','FD_DAY_DIFF_10_20':'#VALUE# дней','FD_DAY_DIFF_MOD_1':'#VALUE# день','FD_DAY_DIFF_MOD_2_4':'#VALUE# дня','FD_DAY_DIFF_MOD_OTHER':'#VALUE# дней','FD_DAY_AT_TIME':'#DAY# в #TIME#','FD_MONTH_AGO_0':'#VALUE# месяцев назад','FD_MONTH_AGO_1':'#VALUE# месяц назад','FD_MONTH_AGO_10_20':'#VALUE# месяцев назад','FD_MONTH_AGO_MOD_1':'#VALUE# месяц назад','FD_MONTH_AGO_MOD_2_4':'#VALUE# месяца назад','FD_MONTH_AGO_MOD_OTHER':'#VALUE# месяцев назад','FD_MONTH_DIFF_0':'#VALUE# месяцев','FD_MONTH_DIFF_1':'#VALUE# месяц','FD_MONTH_DIFF_10_20':'#VALUE# месяцев','FD_MONTH_DIFF_MOD_1':'#VALUE# месяц','FD_MONTH_DIFF_MOD_2_4':'#VALUE# месяца','FD_MONTH_DIFF_MOD_OTHER':'#VALUE# месяцев','FD_YEARS_AGO_0':'#VALUE# лет назад','FD_YEARS_AGO_1':'#VALUE# год назад','FD_YEARS_AGO_10_20':'#VALUE# лет назад','FD_YEARS_AGO_MOD_1':'#VALUE# год назад','FD_YEARS_AGO_MOD_2_4':'#VALUE# года назад','FD_YEARS_AGO_MOD_OTHER':'#VALUE# лет назад','FD_YEARS_DIFF_0':'#VALUE# лет','FD_YEARS_DIFF_1':'#VALUE# год','FD_YEARS_DIFF_10_20':'#VALUE# лет','FD_YEARS_DIFF_MOD_1':'#VALUE# год','FD_YEARS_DIFF_MOD_2_4':'#VALUE# года','FD_YEARS_DIFF_MOD_OTHER':'#VALUE# лет','CAL_BUTTON':'Выбрать','CAL_TIME_SET':'Установить время','CAL_TIME':'Время'});</script>
<script type="text/javascript">(window.BX||top.BX).message({'INPUT_TYPE':'Тип','INPUT_REQUIRED':'Обязательное','INPUT_REQUIRED_ERROR':'обязательно для заполнения','INPUT_INVALID_ERROR':'ошибка ввода','INPUT_MULTIPLE':'Множественное','INPUT_VALUE':'Значение','INPUT_ADD':'Добавить','INPUT_DELETE':'Удалить','INPUT_STRING':'Строка','INPUT_STRING_MINLENGTH':'Минимальная длина строки','INPUT_STRING_MINLENGTH_ERROR':'длина меньше #NUM# символов','INPUT_STRING_MAXLENGTH':'Максимальная длина строки','INPUT_STRING_MAXLENGTH_ERROR':'длина больше #NUM# символов','INPUT_STRING_PATTERN':'Регулярное выражение для проверки','INPUT_STRING_PATTERN_ERROR':'не соответствует шаблону','INPUT_STRING_SIZE':'Количество видимых символов','INPUT_STRING_MULTILINE':'Много строк','INPUT_STRING_ROWS':'Количество видимых строк','INPUT_NUMBER':'Число','INPUT_NUMBER_NUMERIC_ERROR':'не число','INPUT_NUMBER_MIN':'Минимальное значение','INPUT_NUMBER_MIN_ERROR':'меньше #NUM#','INPUT_NUMBER_MAX':'Максимальное значение','INPUT_NUMBER_MAX_ERROR':'больше #NUM#','INPUT_NUMBER_STEP':'Шаг','INPUT_NUMBER_STEP_ERROR':'не соответствует шагу #NUM#','INPUT_NUMBER_SIZE':'Количество видимых цифр','INPUT_EITHERYN':'Да/Нет','INPUT_EITHERYN_ALL':'(все)','INPUT_EITHERYN_Y':'Да','INPUT_EITHERYN_N':'Нет','INPUT_ENUM':'Перечисление','INPUT_ENUM_SIZE':'Количество видимых элементов','INPUT_ENUM_MULTIELEMENT':'Показывать как список элементов','INPUT_ENUM_OPTIONS_ERROR':'Не заданы варианты перечисления','INPUT_ENUM_EMPTY_OPTION':'Не выбрано','INPUT_FILE':'Файл','INPUT_FILE_MAXSIZE':'Максимальный размер файла в байтах','INPUT_FILE_MAXSIZE_ERROR':'превышен максимальный размер файла','INPUT_FILE_ACCEPT':'Допустимые типы файлов','INPUT_FILE_PARTIAL_ERROR':'файл не был загружен полностью','INPUT_FILE_DOWNLOAD':'Скачать','INPUT_FILE_BROWSE':'Выбрать','INPUT_FILE_RESET':'Восстановить','INPUT_DATE':'Дата','INPUT_DATE_TIME':'Время','INPUT_DATE_SELECT':'Выбрать дату','INPUT_LOCATION':'Местоположение','INPUT_LOCATION_TEMPLATE':'Шаблон'});</script>
<script type="text/javascript">(window.BX||top.BX).message({'SALE_GOPE_WRONG_EMAIL':'адрес \"#EMAIL#\" в поле \"#NAME#\" не корректен','SOP_UNKNOWN_GROUP':'Неизвестная группа свойств'});</script>
<script type="text/javascript">(window.BX||top.BX).message({'LANGUAGE_ID':'ru','FORMAT_DATE':'DD.MM.YYYY','FORMAT_DATETIME':'DD.MM.YYYY HH:MI:SS','COOKIE_PREFIX':'BITRIX_SM','SERVER_TZ_OFFSET':'10800','SITE_ID':'s1','SITE_DIR':'/','USER_ID':'','SERVER_TIME':'1555743348','USER_TZ_OFFSET':'0','USER_TZ_AUTO':'Y','bitrix_sessid':'e85764cd261b39504ccd66cf2d62d631'});</script>


<script type="text/javascript" src="https://www.milur.ru/bitrix/js/main/core/core.js?1496063837117643"></script>
<script type="text/javascript" src="https://www.milur.ru/bitrix/js/main/core/core_db.js?149337313711148"></script>
<script type="text/javascript" src="https://www.milur.ru/bitrix/js/main/core/core_ajax.js?149337316235797"></script>
<script type="text/javascript" src="https://www.milur.ru/bitrix/js/main/json/json2.min.js?14933695513467"></script>
<script type="text/javascript" src="https://www.milur.ru/bitrix/js/main/core/core_ls.js?149336955110430"></script>
<script type="text/javascript" src="https://www.milur.ru/bitrix/js/main/core/core_fx.js?149337316216888"></script>
<script type="text/javascript" src="https://www.milur.ru/bitrix/js/main/core/core_frame_cache.js?149336955117555"></script>
<script type="text/javascript" src="https://www.milur.ru/bitrix/js/main/core/core_popup.js?149606383758656"></script>
<script type="text/javascript" src="https://www.milur.ru/bitrix/js/sale/core_ui_widget.js?149336999411663"></script>
<script type="text/javascript" src="https://www.milur.ru/bitrix/js/sale/core_ui_etc.js?149336999410079"></script>
<script type="text/javascript" src="https://www.milur.ru/bitrix/js/sale/core_ui_autocomplete.js?149606384332270"></script>
<script type="text/javascript" src="https://www.milur.ru/bitrix/js/main/core/core_window.js?149336955196650"></script>
<script type="text/javascript" src="https://www.milur.ru/bitrix/js/main/core/core_date.js?149336955153474"></script>
<script type="text/javascript" src="https://www.milur.ru/bitrix/js/sale/input.js?149337317439766"></script>
<script type="text/javascript" src="https://www.milur.ru/bitrix/js/sale/core_ui_pager.js?149336999410531"></script>
<script type="text/javascript" src="https://www.milur.ru/bitrix/js/sale/core_ui_combobox.js?149336999428352"></script>
<script type="text/javascript" src="https://www.milur.ru/bitrix/js/sale/core_ui_chainedselectors.js?149336999418746"></script>
<script type="text/javascript" src="https://www.milur.ru/bitrix/js/sale/orderproperties.js?14933699944507"></script>
<script type="text/javascript" src="https://api-maps.yandex.ru/2.1.34/?load=package.full&lang=ru-RU"></script>
<script type="text/javascript">
					(function () {
						"use strict";

						var counter = function ()
						{
							var cookie = (function (name) {
								var parts = ("; " + document.cookie).split("; " + name + "=");
								if (parts.length == 2) {
									try {return JSON.parse(decodeURIComponent(parts.pop().split(";").shift()));}
									catch (e) {}
								}
							})("BITRIX_CONVERSION_CONTEXT_s1");

							if (cookie && cookie.EXPIRE >= BX.message("SERVER_TIME") && cookie.UNIQUE && cookie.UNIQUE.length > 0)
							{
								for (var i = 0; i < cookie.UNIQUE.length; i++)
								{
									if (cookie.UNIQUE[i] == "conversion_visit_day")
										return;
								}
							}

							var request = new XMLHttpRequest();
							request.open("POST", "/bitrix/tools/conversion/ajax_counter.php", true);
							request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
							request.send(
								"SITE_ID="+encodeURIComponent("s1")+
								"&sessid="+encodeURIComponent(BX.bitrix_sessid())+
								"&HTTP_REFERER="+encodeURIComponent(document.referrer)
							);
						};

						if (window.frameRequestStart === true)
							BX.addCustomEvent("onFrameDataReceived", counter);
						else
							BX.ready(counter);
					})();
				</script>



<script type="text/javascript" src="https://www.milur.ru/bitrix/templates/default/js/vendor/bootstrap.min.js?149512017929097"></script>
<script type="text/javascript" src="https://www.milur.ru/bitrix/templates/default/js/bootstrap-select.min.js?148917179034156"></script>
<script type="text/javascript" src="https://www.milur.ru/bitrix/templates/default/js/jquery.fancybox.js?1496224715117641"></script>
<script type="text/javascript" src="https://www.milur.ru/bitrix/templates/default/js/owl/owl.carousel.js?149381833185400"></script>
<script type="text/javascript" src="https://www.milur.ru/bitrix/templates/default/js/swiper.min.js?148917179096824"></script>
<script type="text/javascript" src="https://www.milur.ru/bitrix/templates/default/js/jquery.magnific-popup.min.js?153114691720218"></script>
<script type="text/javascript" src="https://www.milur.ru/bitrix/templates/default/js/jquery.scrollTo.min.js?14303149467519"></script>
<script type="text/javascript" src="https://www.milur.ru/bitrix/templates/default/js/bootstrap-tabcollapse.js?14891717908736"></script>
<script type="text/javascript" src="https://www.milur.ru/bitrix/templates/default/js/crocobox/script.js?15549086767138"></script>
<script type="text/javascript" src="https://www.milur.ru/bitrix/templates/default/js/application.js?153114727618504"></script>
<script type="text/javascript" src="https://www.milur.ru/bitrix/templates/default/js/jquery-ui.min.js?148671542632162"></script>
<script type="text/javascript" src="https://www.milur.ru/bitrix/components/bitrix/sale.location.selector.search/templates/.default/script.js?149337318411483"></script>
<script type="text/javascript" src="https://www.milur.ru/bitrix/templates/default/components/informula/sale.order.ajax/.default/script.js?149121161511361"></script>
<script type="text/javascript" src="https://www.milur.ru/bitrix/templates/default/components/informula/sale.order.ajax/.default/order_ajax.js?1555409064321004"></script>
<script type="text/javascript" src="https://www.milur.ru/bitrix/components/bitrix/sale.location.selector.steps/templates/.default/script.js?149337318412447"></script>
<script type="text/javascript">var _ba = _ba || []; _ba.push(["aid", "0fa037e31ff123ac252fa3b87dc57603"]); _ba.push(["host", "www.milur.ru"]); (function() {var ba = document.createElement("script"); ba.type = "text/javascript"; ba.async = true;ba.src = (document.location.protocol == "https:" ? "https://" : "http://") + "bitrix.info/ba.js";var s = document.getElementsByTagName("script")[0];s.parentNode.insertBefore(ba, s);})();</script>


	<title>Оформление заказа</title>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function (d, w, c) {
            (w[c] = w[c] || []).push(function() {
                try {
                    w.yaCounter44910706 = new Ya.Metrika({
                        id:44910706,
                        clickmap:true,
                        trackLinks:true,
                        accurateTrackBounce:true,
                        webvisor:true
                    });
                } catch(e) { }
            });

            var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function () { n.parentNode.insertBefore(s, n); };
            s.type = "text/javascript";
            s.async = true;
            s.src = "https://mc.yandex.ru/metrika/watch.js";

            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else { f(); }
        })(document, window, "yandex_metrika_callbacks");
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/44910706" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-61213634-14', 'auto');
        ga('send', 'pageview');

    </script>
</head>

<body>
<!--[if lt IE 7]>
<p class='chromeframe'>
    Вы используете
    <strong>устаревший</strong>
    браузер. Пожалуйста
    <a href="http://browsehappy.com/?locale=ru">обновите браузер</a>
    или
    <a href="http://www.google.com/chromeframe/?redirect=true">активируйте Google Chrome Frame</a>
    для улучшения отображения страниц сайта.
</p>
<![endif]-->
	<div id="panel"></div>
<div id='wrapper'>
    <div id='main-layout'>
        <div class='with-back' id='header'>
                        <div class='header-top hidden-xs'>
                <div class='container'>
                    <div class='row'>
                        <div class='col-sm-6'>
                            <div class='location-block'>
    <div class='location-title'>Ваш город:</div>
    <div class='dropdown location-dropdown'>
        <a data-target="#s" class="dropdown-toggle" href='javascript:void(0);'>
            Екатеринбург            <span class='caret'></span>
        </a>
        <div class="dropdown-menu">
            <div class="title">Выберите свой город из списка: </div>
                        <ul class="ul-color">
                                    <li>
                        <a href='javascript:void(0);'>Москва</a>
                    </li>
                                                                        <li>
                        <a href='javascript:void(0);'>Нижний Новгород</a>
                    </li>
                                                </ul>
                            <script>
                var availableCities = [
                "Абаза","Абакан","Абдулино","Абинск","Агидель","Агрыз","Адыгейск","Азнакаево","Азов","Ак-Довурак","Аксай","Алагир","Алапаевск","Алатырь","Алдан","Алейск","Александров","Александровск","Александровск-Сахалинский","Алексеевка","Алексин","Алзамай","Алупка","Алушта","Альметьевск","Амурск","Анадырь","Анапа","Ангарск","Андреаполь","Анжеро-Судженск","Анива","Апатиты","Апрелевка","Апшеронск","Арамиль","Аргун","Ардатов","Ардон","Арзамас","Аркадак","Армавир","Армянск","Арсеньев","Арск","Артем","Артемовск","Артемовский","Архангельск","Асбест","Асино","Астрахань","Аткарск","Ахтубинск","Ахтубинск-7","Ачинск","Аша","Бабаево","Бабушкин","Бавлы","Багратионовск","Байкальск","Баймак","Бакал","Баксан","Балабаново","Балаково","Балахна","Балашиха","Балашов","Балей","Балтийск","Барабинск","Барнаул","Барыш","Батайск","Бахчисарай","Бежецк","Белая Калитва","Белая Холуница","Белгород","Белебей","Белев","Белинский","Белово","Белогорск","Белогорск","Белозерск","Белокуриха","Беломорск","Белорецк","Белореченск","Белоусово","Белоярский","Белый","Бердск","Березники","Березовский","Березовский","Беслан","Бийск","Бикин","Билибино","Биробиджан","Бирск","Бирюсинск","Бирюч","Благовещенск","Благовещенск","Благодарный","Бобров","Богданович","Богородицк","Богородск","Боготол","Богучар","Бодайбо","Бокситогорск","Болгар","Бологое","Болотное","Болохово","Болхов","Большой Камень","Бор","Борзя","Борисоглебск","Боровичи","Боровск","Боровск-1","Бородино","Братск","Бронницы","Брянск","Бугульма","Бугуруслан","Буденновск","Бузулук","Буинск","Буй","Буйнакск","Бутурлиновка","Валдай","Валуйки","Велиж","Великие Луки","Великие Луки-1","Великий Новгород","Великий Устюг","Вельск","Венев","Верещагино","Верея","Верхнеуральск","Верхний Тагил","Верхний Уфалей","Верхняя Пышма","Верхняя Салда","Верхняя Тура","Верхотурье","Верхоянск","Весьегонск","Ветлуга","Видное","Вилюйск","Вилючинск","Вихоревка","Вичуга","Владивосток","Владикавказ","Владимир","Волгоград","Волгодонск","Волгореченск","Волжск","Волжский","Вологда","Володарск","Волоколамск","Волосово","Волхов","Волчанск","Вольск","Вольск-18","Воркута","Воронеж","Воронеж-45","Ворсма","Воскресенск","Воткинск","Всеволожск","Вуктыл","Выборг","Выкса","Высоковск","Высоцк","Вытегра","Вышний Волочек","Вяземский","Вязники","Вязьма","Вятские Поляны","Гаврилов Посад","Гаврилов-Ям","Гагарин","Гаджиево","Гай","Галич","Гатчина","Гвардейск","Гдов","Геленджик","Георгиевск","Глазов","Голицыно","Горбатов","Горно-Алтайск","Горнозаводск","Горняк","Городец","Городище","Городовиковск","Городской округ Черноголовка","Гороховец","Горячий Ключ","Грайворон","Гремячинск","Грозный","Грязи","Грязовец","Губаха","Губкин","Губкинский","Гудермес","Гуково","Гулькевичи","Гурьевск","Гурьевск","Гусев","Гусиноозерск","Гусь-Хрустальный","Давлеканово","Дагестанские Огни","Далматово","Дальнегорск","Дальнереченск","Данилов","Данков","Дегтярск","Дедовск","Демидов","Дербент","Десногорск","Джанкой","Дзержинск","Дзержинский","Дивногорск","Дигора","Димитровград","Дмитриев","Дмитров","Дмитровск","Дно","Добрянка","Долгопрудный","Долинск","Домодедово","Донецк","Донской","Дорогобуж","Дрезна","Дубна","Дубовка","Дудинка","Духовщина","Дюртюли","Дятьково","Евпатория","Егорьевск","Ейск","Екатеринбург","Елабуга","Елец","Елизово","Ельня","Еманжелинск","Емва","Енисейск","Ермолино","Ершов","Ессентуки","Ефремов","Железноводск","Железногорск","Железногорск","Железногорск-Илимский","Железнодорожный","Жердевка","Жигулевск","Жиздра","Жирновск","Жуков","Жуковка","Жуковский","Завитинск","Заводоуковск","Заволжск","Заволжье","Задонск","Заинск","Закаменск","Заозерный","Заозерск","Западная Двина","Заполярный","Зарайск","Заречный","Заречный","Заринск","Звенигово","Звенигород","Зверево","Зеленогорск","Зеленогорск","Зеленоград","Зеленоградск","Зеленодольск","Зеленокумск","Зерноград","Зея","Зима","Златоуст","Злынка","Змеиногорск","Знаменск","Зубцов","Зуевка","Ивангород","Иваново","Ивантеевка","Ивдель","Игарка","Ижевск","Избербаш","Изобильный","Иланский","Инза","Инкерман","Инсар","Инта","Ипатово","Ирбит","Иркутск","Иркутск-45","Исилькуль","Искитим","Истра","Истра-1","Ишим","Ишимбай","Йошкар-Ола","Кадников","Казань","Калач","Калач-на-Дону","Калачинск","Калининград","Калининск","Калтан","Калуга","Калязин","Камбарка","Каменка","Каменногорск","Каменск-Уральский","Каменск-Шахтинский","Камень-на-Оби","Камешково","Камызяк","Камышин","Камышлов","Канаш","Кандалакша","Канск","Карабаново","Карабаш","Карабулак","Карасук","Карачаевск","Карачев","Каргат","Каргополь","Карпинск","Карталы","Касимов","Касли","Каспийск","Катав-Ивановск","Катайск","Качканар","Кашин","Кашира","Кашира-8","Кедровый","Кемерово","Кемь","Керчь","Кизел","Кизилюрт","Кизляр","Кимовск","Кимры","Кингисепп","Кинель","Кинешма","Киреевск","Киренск","Киржач","Кириллов","Кириши","Киров","Киров","Кировград","Кирово-Чепецк","Кировск","Кировск","Кирс","Кирсанов","Киселевск","Кисловодск","Климовск","Клин","Клинцы","Княгинино","Ковдор","Ковров","Ковылкино","Когалым","Кодинск","Козельск","Козловка","Козьмодемьянск","Кола","Кологрив","Коломна","Колпашево","Колпино","Кольчугино","Коммунар","Комсомольск","Комсомольск-на-Амуре","Конаково","Кондопога","Кондрово","Константиновск","Копейск","Кораблино","Кореновск","Коркино","Королев","Короча","Корсаков","Коряжма","Костерево","Костомукша","Кострома","Котельники","Котельниково","Котельнич","Котлас","Котово","Котовск","Кохма","Красавино","Красноармейск","Красноармейск","Красновишерск","Красногорск","Краснодар","Красное Село","Краснозаводск","Краснознаменск","Краснознаменск","Краснокаменск","Краснокамск","Красноперекопск","Красноперекопск","Краснослободск","Краснослободск","Краснотурьинск","Красноуральск","Красноуфимск","Красноярск","Красный Кут","Красный Сулин","Красный Холм","Кременки","Кронштадт","Кропоткин","Крымск","Кстово","Кубинка","Кувандык","Кувшиново","Кудымкар","Кузнецк","Кузнецк-12","Кузнецк-8","Куйбышев","Кулебаки","Кумертау","Кунгур","Купино","Курган","Курганинск","Курильск","Курлово","Куровское","Курск","Куртамыш","Курчатов","Куса","Кушва","Кызыл","Кыштым","Кяхта","Лабинск","Лабытнанги","Лагань","Ладушкин","Лаишево","Лакинск","Лангепас","Лахденпохья","Лебедянь","Лениногорск","Ленинск","Ленинск-Кузнецкий","Ленск","Лермонтов","Лесной","Лесозаводск","Лесосибирск","Ливны","Ликино-Дулево","Липецк","Липки","Лиски","Лихославль","Лобня","Лодейное Поле","Ломоносов","Лосино-Петровский","Луга","Луза","Лукоянов","Луховицы","Лысково","Лысьва","Лыткарино","Льгов","Любань","Люберцы","Любим","Людиново","Лянтор","Магадан","Магас","Магнитогорск","Майкоп","Майский","Макаров","Макарьев","Макушино","Малая Вишера","Малгобек","Малмыж","Малоархангельск","Малоярославец","Мамадыш","Мамоново","Мантурово","Мариинск","Мариинский Посад","Маркс","Махачкала","Мглин","Мегион","Медвежьегорск","Медногорск","Медынь","Межгорье","Междуреченск","Мезень","Меленки","Мелеуз","Менделеевск","Мензелинск","Мещовск","Миасс","Микунь","Миллерово","Минеральные Воды","Минусинск","Миньяр","Мирный","Мирный","Михайлов","Михайловка","Михайловск","Михайловск","Мичуринск","Могоча","Можайск","Можга","Моздок","Мончегорск","Морозовск","Моршанск","Мосальск","Москва","Московский","Муравленко","Мураши","Мурманск","Муром","Мценск","Мыски","Мытищи","Мышкин","Набережные Челны","Навашино","Наволоки","Надым","Назарово","Назрань","Называевск","Нальчик","Нариманов","Наро-Фоминск","Нарткала","Нарьян-Мар","Находка","Невель","Невельск","Невинномысск","Невьянск","Нелидово","Неман","Нерехта","Нерчинск","Нерюнгри","Нестеров","Нефтегорск","Нефтекамск","Нефтекумск","Нефтеюганск","Нея","Нижневартовск","Нижнекамск","Нижнеудинск","Нижние Серги","Нижние Серги-3","Нижний Ломов","Нижний Новгород","Нижний Тагил","Нижняя Салда","Нижняя Тура","Николаевск","Николаевск-на-Амуре","Никольск","Никольск","Никольское","Новая Ладога","Новая Ляля","Новоалександровск","Новоалтайск","Новоаннинский","Нововоронеж","Новодвинск","Новозыбков","Новокубанск","Новокузнецк","Новокуйбышевск","Новомичуринск","Новомосковск","Новопавловск","Новоржев","Новороссийск","Новосибирск","Новосиль","Новосокольники","Новотроицк","Новоузенск","Новоульяновск","Новоуральск","Новохоперск","Новочебоксарск","Новочеркасск","Новошахтинск","Новый Оскол","Новый Уренгой","Ногинск","Нолинск","Норильск","Ноябрьск","Нурлат","Нытва","Нюрба","Нягань","Нязепетровск","Няндома","Облучье","Обнинск","Обоянь","Обь","Одинцово","Ожерелье","Озерск","Озерск","Озеры","Октябрьск","Октябрьский","Окуловка","Олекминск","Оленегорск","Оленегорск-1","Оленегорск-2","Оленегорск-4","Олонец","Омск","Омутнинск","Онега","Опочка","Орёл","Оренбург","Орехово-Зуево","Орлов","Орск","Оса","Осинники","Осташков","Остров","Островной","Острогожск","Отрадное","Отрадный","Оха","Оханск","Очер","Павлово","Павловск","Павловск","Павловский Посад","Палласовка","Партизанск","Певек","Пенза","Первомайск","Первоуральск","Перевоз","Пересвет","Переславль-Залесский","Пермь","Пестово","Петергоф","Петров Вал","Петровск","Петровск-Забайкальский","Петрозаводск","Петропавловск-Камчатский","Петухово","Петушки","Печора","Печоры","Пикалево","Пионерский","Питкяранта","Плавск","Пласт","Плес","Поворино","Подольск","Подпорожье","Покачи","Покров","Покровск","Полевской","Полесск","Полысаево","Полярные Зори","Полярный","Поронайск","Порхов","Похвистнево","Почеп","Починок","Пошехонье","Правдинск","Приволжск","Приморск","Приморск","Приморско-Ахтарск","Приозерск","Прокопьевск","Пролетарск","Протвино","Прохладный","Псков","Пугачев","Пудож","Пустошка","Пучеж","Пушкин","Пушкино","Пущино","Пыталово","Пыть-Ях","Пятигорск","Радужный","Радужный","Райчихинск","Раменское","Рассказово","Ревда","Реж","Реутов","Ржев","Родники","Рославль","Россошь","Ростов","Ростов-на-Дону","Рошаль","Ртищево","Рубцовск","Рудня","Руза","Рузаевка","Рыбинск","Рыбное","Рыльск","Ряжск","Рязань","Саки","Саки","Салават","Салаир","Салехард","Сальск","Самара","Санкт-Петербург","Саранск","Сарапул","Саратов","Саров","Сасово","Сатка","Сафоново","Саяногорск","Саянск","Светлогорск","Светлоград","Светлый","Светогорск","Свирск","Свободный","Себеж","Севастополь","Северо-Курильск","Северобайкальск","Северодвинск","Североморск","Североуральск","Северск","Севск","Сегежа","Сельцо","Семенов","Семикаракорск","Семилуки","Сенгилей","Серафимович","Сергач","Сергиев Посад","Сергиев Посад-7","Сердобск","Серов","Серпухов","Сертолово","Сестрорецк","Сибай","Сим","Симферополь","Сковородино","Скопин","Славгород","Славск","Славянск-на-Кубани","Сланцы","Слободской","Слюдянка","Смоленск","Снегири","Снежинск","Снежногорск","Собинка","Советск","Советск","Советск","Советская Гавань","Советский","Сокол","Солигалич","Соликамск","Солнечногорск","Солнечногорск-2","Солнечногорск-25","Солнечногорск-30","Солнечногорск-7","Соль-Илецк","Сольвычегодск","Сольцы","Сольцы 2","Сорочинск","Сорск","Сортавала","Сосенский","Сосновка","Сосновоборск","Сосновый Бор","Сосногорск","Сочи","Спас-Деменск","Спас-Клепики","Спасск","Спасск-Дальний","Спасск-Рязанский","Среднеколымск","Среднеуральск","Сретенск","Ставрополь","Старая Купавна","Старая Русса","Старица","Стародуб","Старый Крым","Старый Оскол","Стерлитамак","Стрежевой","Строитель","Струнино","Ступино","Суворов","Судак","Суджа","Судогда","Суздаль","Суоярви","Сураж","Сургут","Суровикино","Сурск","Сусуман","Сухиничи","Сухой Лог","Сызрань","Сыктывкар","Сысерть","Сычевка","Сясьстрой","Тавда","Таганрог","Тайга","Тайшет","Талдом","Талица","Тамбов","Тара","Тарко-Сале","Таруса","Татарск","Таштагол","Тверь","Теберда","Тейково","Темников","Темрюк","Терек","Тетюши","Тимашевск","Тихвин","Тихорецк","Тобольск","Тогучин","Тольятти","Томари","Томмот","Томск","Топки","Торжок","Торопец","Тосно","Тотьма","Трехгорный","Трехгорный-1","Троицк","Троицк","Трубчевск","Туапсе","Туймазы","Тула","Тулун","Туран","Туринск","Тутаев","Тында","Тырныауз","Тюкалинск","Тюмень","Уварово","Углегорск","Углич","Удачный","Удомля","Ужур","Узловая","Улан-Удэ","Ульяновск","Унеча","Урай","Урень","Уржум","Урус-Мартан","Урюпинск","Усинск","Усмань","Усолье","Усолье-Сибирское","Уссурийск","Усть-Джегута","Усть-Илимск","Усть-Катав","Усть-Кут","Усть-Лабинск","Устюжна","Уфа","Ухта","Учалы","Уяр","Фатеж","Феодосия","Фокино","Фокино","Фролово","Фрязино","Фурманов","Хабаровск","Хадыженск","Ханты-Мансийск","Харабали","Харовск","Хасавюрт","Хвалынск","Хилок","Химки","Холм","Холмск","Хотьково","Цивильск","Цимлянск","Чадан","Чайковский","Чапаевск","Чаплыгин","Чебаркуль","Чебоксары","Чегем","Чекалин","Челябинск","Чердынь","Черемхово","Черепаново","Череповец","Черкесск","Чермоз","Черноголовка","Черногорск","Чернушка","Черняховск","Чехов","Чехов-2","Чехов-3","Чехов-8","Чистополь","Чита","Чкаловск","Чудово","Чулым","Чулым-3","Чусовой","Чухлома","Шагонар","Шадринск","Шали","Шарыпово","Шарья","Шатура","Шахтерск","Шахты","Шахунья","Шацк","Шебекино","Шелехов","Шенкурск","Шилка","Шимановск","Шиханы","Шлиссельбург","Шумерля","Шумиха","Шуя","Щекино","Щелкино","Щелково","Щербинка","Щигры","Щучье","Электрогорск","Электросталь","Электроугли","Элиста","Энгельс","Энгельс-19","Энгельс-2","Эртиль","Юбилейный","Югорск","Южа","Южно-Сахалинск","Южно-Сухокумск","Южноуральск","Юрга","Юрьев-Польский","Юрьевец","Юрюзань","Юхнов","Юхнов-1","Юхнов-2","Ядрин","Якутск","Ялта","Ялуторовск","Янаул","Яранск","Яровое","Ярославль","Ярцево","Ясногорск","Ясный","Яхрома"                ];
                $(document).ready(function() {
                    $(".dropdown-toggle").on("click", function(e) {
                        e.preventDefault();
                        $(this).siblings(".dropdown-menu").fadeToggle("fast");
                    });
                    $(".dropdown-menu ul li a").on("click", function(e) {
                        e.preventDefault();
                        var city = $(this).text();
                        $.ajax({
                            type: "GET",
                            url: "/bitrix/templates/default/inc/geo/set_city.php?city=" + city,
                            success: function (data) {
                                location.reload();
                            },
                            error: function () {}
                        });
                    });
                    $( "#current_city" ).autocomplete({
                        source: availableCities,
                        select: function( event, ui ) {
                            if (event.srcElement.innerText != "Екатеринбург") {
                                $.ajax({
                                    type: "GET",
                                    url: "/bitrix/templates/default/inc/geo/set_city.php?city=" + event.srcElement.innerText,
                                    success: function (data) {
                                        location.reload();
                                    },
                                    error: function () {}
                                });
                            }
                        }
                    });
                });
                </script>
                        <div class="subtitle">или укажите в поле:</div>
            <form class="cities">
                <div class="form-group">
                    <input type="text" id="current_city" class="form-control" name="current_city" placeholder="Введите название города" value="">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary pull-right" name="submit" value="Выбрать">
                </div>
            </form>
        </div>
    </div>
</div>
                        </div>
                        <div class='col-sm-6'>
                        <div id="user_login" class="login-top pull-right">
            <a href="/auth/?register=yes" class="register rc_register">Регистрация</a>
        <a href="/auth/?login=yes" id="rc_login" class="rc_login">Войти</a>
    </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class='header-bottom'>
                <div class='container'>
                    <div class='row'>
                        <div class='col-xs-12'>
                            <div class='header-bottom-inner'>
                                <div class='logo'>
                                    <a href='/'>Милур</a>
                                </div>
                                <a class='btn btn-primary pull-right hidden-xs' href='/dealers/become/'>Стать дилером</a>
                                <div id="header_cart" class='header-cart hidden-xs'>
                                <a class='cart-btn' href='/personal/cart/'>Корзина<span>1</span></a>
                                </div>
                                <div class='header-phone hidden-xs'>
                                    <a href='tel:88001009117'>8 800 100 91 17</a>
                                    <div class='header-phone-helper'>Бесплатно по России</div>
                                </div>
                                <div class='search-block'>
    <a class='search-btn search-block-open' href='#'>Поиск</a>
</div>
<div class='search-block-full'>
    <div class='search-block-full-inner'>
        <form action="/search/">
            <input class='form-control search-block-full-input' type="text" name="q" value="" placeholder='Поиск по сайту' size="15" maxlength="50" />
            <input class='search-block-go' name="s" type="submit" value="Найти" />
            <a class='search-block-close' href='javascript:void(0);'>Закрыть</a>
        </form>
    </div>
</div>                                <button class='navbar-toggle' type='button'>
                                    <span class='icon-bar'></span>
                                    <span class='icon-bar'></span>
                                    <span class='icon-bar'></span>
                                </button>
                                <div class='navbar-close'>
                                    <a href='#'>Закрыть</a>
                                </div>
                                <div class='nav-second-back'>
                                    <a href='#'>Назад</a>
                                </div>
                                <div class='nav-second-title'></div>
                                <div class='header-link-back'>
                                    <a href='#'>Назад</a>
                                </div>
                            </div>
                                <div class='navbar' role='navigation'>
    <div class='collapse navbar-collapse'>
        <ul class='nav navbar-nav'>
            <li class='visible-xs'>
        <a class='nav-second-link' href='#'>Ваш город: Екатеринбург</a>
    <ul class='nav-second city-select'>
                                <li>
                    <a href='javascript:void(0);'>Москва</a>
                </li>
                                            <li>
                    <a href='javascript:void(0);'>Нижний Новгород</a>
                </li>
                                        <li>
                <div style="padding: 0 20px;">
            <script>
                $(document).ready(function() {
                    $(".city-select li a").on("click", function(e) {
                        e.preventDefault();
                        var city = $(this).text();
                        $.ajax({
                            type: "GET",
                            url: "/bitrix/templates/default/inc/geo/set_city.php?city=" + city,
                            success: function (data) {
                                location.reload();
                            },
                            error: function () {}
                        });
                    });
                    $( "#current_city_mob" ).autocomplete({
                        source: availableCities,
                        select: function( event, ui ) {
                            if (event.srcElement.innerText != "Екатеринбург") {
                                $.ajax({
                                    type: "GET",
                                    url: "/bitrix/templates/default/inc/geo/set_city.php?city=" + event.srcElement.innerText,
                                    success: function (data) {
                                        location.reload();
                                    },
                                    error: function () {}
                                });
                            }
                        }
                    });
                });
            </script>
                <div class="subtitle" style="margin-bottom: 10px;">или укажите в поле:</div>
                <form class="cities">
                    <div class="form-group">
                        <input type="text" id="current_city_mob" class="form-control" name="current_city" placeholder="Введите название города" value="">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary pull-right" name="submit" value="Выбрать">
                    </div>
                </form>
                </div>
            </li>
            </ul>
</li>
	
	
		
							<li class=" "><a href="/catalog/">Каталог</a></li>
			
		
	
	
	
	
		
							<li class=" "><a href="/ascapc/">АСКУЭ</a></li>
			
		
	
	
	
	
		
							<li class=" "><a href="/support/">Поддержка</a></li>
			
		
	
	
	
	
		
							<li class=" "><a href="/press/">Пресса</a></li>
			
		
	
	
	
	
		
							<li class=" "><a href="/news/">Новости</a></li>
			
		
	
	
	
	
		
							<li class=" mgr0"><a href="/contacts/">Контакты</a></li>
			
		
	
	
	
	
		
							<li class=" visible-xs mob-gray"><a href="/dealers/">Дилеры</a></li>
			
		
	
	
	
	
		
							<li class=" visible-xs mob-gray mob-tel"><a href="/tel:88001009117">8 800 100 91 17</a></li>
			
		
	
	


                </ul>
    </div>
    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class='main-content'>
                                                            <div class='container'>
                                <div class='row hidden-xs'><div class='col-xs-12'><ol class='breadcrumb pull-left'>
			<li id="bx_breadcrumb_0" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb" itemref="bx_breadcrumb_1">
				<a href="/" title="Главная" itemprop="url">
					<span itemprop="title">Главная</span>
				</a>
			</li>
			<li id="bx_breadcrumb_1" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb" itemprop="child">
				<a href="/personal/" title="Личный кабинет" itemprop="url">
					<span itemprop="title">Личный кабинет</span>
				</a>
			</li>
			<li class='active'>
				<span>Оформление заказа</span>
            </li></ol></div></div>
            
            <div class='row'>
                <div class='col-xs-12 page-header'>
                    <h1>Оформление заказа</h1>
                </div>
            </div>
            <div style="display:none">
	            <div id="sls-14253" class="bx-slst">
		            <input type="hidden" name="SALE_LOCATION_SELECTOR_RESOURCES" value="" class="bx-ui-slst-target" />
		            <div class="bx-ui-slst-pool"> </div>
					<div data-bx-ui-id="slst-error"> </div>
		
		            <script type="text/html" data-template-id="bx-ui-slst-selector-scope">

			<div class="dropdown-block bx-ui-slst-input-block">
				<span class="dropdown-icon"></span>
				<input type="text" name="" value="" autocomplete="off" class="dropdown-field" />
				<div class="bx-ui-combobox-container" style="margin: 0px; padding: 0px; border: none; position: relative;">
											<input type="text" value="" autocomplete="off" class="bx-ui-combobox-fake" placeholder="Выберите местоположение ..." />
									</div>
				<div class="dropdown-fade2white"></div>
				<div class="bx-ui-combobox-loader" data-bx-ui-id="combobox-loader"></div>
				<div class="bx-ui-combobox-toggle" title="Открыть / закрыть" data-bx-ui-id="combobox-toggle"></div>

				<div class="bx-ui-combobox-dropdown" data-bx-ui-id="combobox-dropdown">
					
					<div data-bx-ui-id="pager-pane">
					</div>
				</div>
			</div>

		</script>

		<div class="bx-ui-slst-loader"></div>
	</div>

	<script type="text/javascript">

		if (!window.BX && top.BX)
			window.BX = top.BX;

		
							if(typeof window.BX.locationSelectors == 'undefined') window.BX.locationSelectors = {};
				window.BX.locationSelectors['SALE_LOCATION_SELECTOR_RESOURCES'] = 
			
			new BX.Sale.component.location.selector.steps({'scope':'sls-14253','source':'/bitrix/components/bitrix/sale.location.selector.steps/get.php','query':{'FILTER':{'SITE_ID':'s1'},'BEHAVIOUR':{'SEARCH_BY_PRIMARY':'1','LANGUAGE_ID':'ru'}},'selectedItem':0,'knownBundles':{'a':[]},'provideLinkBy':'code','messages':{'notSelected':'Выберите местоположение ...','error':'К сожалению, произошла внутренняя ошибка','nothingFound':'Не удалось обнаружить местоположение','clearSelection':'--- Отменить выбор'},'callback':'','useSpawn':true,'initializeByGlobalEvent':'','globalEventScope':'','rootNodeValue':0,'showDefault':false,'bundlesIncomplete':{'a':true,'0':true},'autoSelectWhenSingle':true,'types':{'1':{'CODE':'COUNTRY'},'2':{'CODE':'COUNTRY_DISTRICT'},'3':{'CODE':'REGION'},'4':{'CODE':'SUBREGION'},'5':{'CODE':'CITY'},'6':{'CODE':'VILLAGE'},'7':{'CODE':'STREET'}},'disableKeyboardInput':false,'dontShowNextChoice':false});

		
	</script>

</div>    <NOSCRIPT>
        <div style="color:red">Для оформления заказа необходимо включить JavaScript. По-видимому, JavaScript либо не поддерживается браузером, либо отключен. Измените настройки браузера и затем <a href="">повторите попытку</a>.</div>
    </NOSCRIPT>
    <div class='h1-helper hidden-xs'>
        <a class='helper-link-back' href='/personal/cart/'>Назад в корзину</a>
    </div>
    <script>
        $(document).ready(function() {
            $(".h1-helper").insertAfter($("h1"));
        });
    </script>
    <form action="/personal/order/make/" method="POST" name="ORDER_FORM" id="bx-soa-order-form" enctype="multipart/form-data">
        <input type="hidden" name="sessid" id="sessid" value="e85764cd261b39504ccd66cf2d62d631" />                <input type="hidden" name="action" value="saveOrderAjax">
        <input type="hidden" name="location_type" value="code">
        <input type="hidden" name="BUYER_STORE" id="BUYER_STORE" value="0">
        <div id="bx-soa-order" class="row" style="opacity: 0">
            <!--	MAIN BLOCK	-->
            <div class="col-lg-9 col-md-8 col-xs-12">
                <div id="bx-soa-main-notifications">
                    <div class="alert alert-danger" style="display:none"></div>
                    <div data-type="informer" style="display:none"></div>
                </div>
                <!--	AUTH BLOCK	-->
                <div id="bx-soa-auth" class="bx-soa-section bx-soa-auth" style="display:none">
                    <div class="bx-soa-section-title-container">
                        <h2 class="bx-soa-section-title col-sm-9">
                            <span class="bx-soa-section-title-count"></span>Авторизация                        </h2>
                    </div>
                    <div class="bx-soa-section-content"></div>
                </div>
                    <!--	BUYER PROPS BLOCK	-->
                    <div id="bx-soa-properties" data-visited="false" class="panel xs-wide bx-soa-section bx-active">
                        <div class='row'>
                            <div class='col-md-6'>
                                <div class='h3'>Укажите контактную информацию</div>
                                <div class="bx-soa-section-content order-props-list"></div>
                            </div>
                            <div class='col-md-6'>
                                                                <div class='order-information'>
                                    <p>Авторизуйтесь на сайте, и мы сохраним всю информацию по заказу и автоматически заполним ваши контактные данные.</p>
                                    <p>
                                        <a href='/auth/?login=yes'>Войти</a>
                                        или
                                        <a href='/auth/?register=yes'>зарегистрироваться</a>
                                    </p>
                                </div>
                                                            </div>
                        </div>
                    </div>

                <!--	DUPLICATE MOBILE ORDER SAVE BLOCK	-->
                <div id="bx-soa-total-mobile" style="margin-bottom: 6px;"></div>

                <!--	REGION BLOCK	-->
                <div id="bx-soa-region" data-visited="false" class="panel xs-wide bx-soa-section bx-active">
                    <div class='panel-head'>
                        <div class='h3'>Укажите адрес доставки</div>
                    </div>
                    <div class='panel-body'>
                        <div class="bx-soa-section-content order-region"></div>
                        <div class="bx-soa-section-content-address"></div>
                    </div>
                </div>

                                    <!--	DELIVERY BLOCK	-->
                    <div id="bx-soa-delivery" data-visited="false" class="panel xs-wide bx-soa-section bx-active" >
                        <div class='panel-head'>
                            <div class='h3'>Выберите подходящий способ доставки</div>
                        </div>
                        <div class='panel-body'>
                            <div class='row'>
                                <div class='col-xs-12'>
                                    <div class='row bx-soa-section-content'></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--	PICKUP BLOCK	-->
                    <div id="bx-soa-pickup" data-visited="false" class="panel xs-wide bx-soa-section" style="display:none">
                        <div class="bx-soa-section-title-container">
                            <h2 class="bx-soa-section-title col-sm-9">
                                <span class="bx-soa-section-title-count"></span>
                            </h2>
                        </div>
                        <div class="bx-soa-section-content"></div>
                    </div>
                    <!--	PAY SYSTEMS BLOCK	-->
                    <div id="bx-soa-paysystem" data-visited="false" class="panel xs-wide bx-soa-section bx-active">
                        <div class='panel-head'>
                            <div class='h3'>Выберите способ оплаты</div>
                        </div>
                        <div class='panel-body'>
                            <div class='row'>
                                <div class='col-xs-12'>
                                    <div class='row'>
                                        <div class="bx-soa-section-content"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                <div style="display: none;">
                    <div id='bx-soa-basket-hidden' class="bx-soa-section"></div>
                    <div id='bx-soa-region-hidden' class="bx-soa-section"></div>
                    <div id='bx-soa-paysystem-hidden' class="bx-soa-section"></div>
                    <div id='bx-soa-delivery-hidden' class="bx-soa-section"></div>
                    <div id='bx-soa-pickup-hidden' class="bx-soa-section"></div>
                    <div id="bx-soa-properties-hidden" class="bx-soa-section"></div>
                    <div id="bx-soa-auth-hidden" class="bx-soa-section">
                        <div class="bx-soa-section-content reg"></div>
                    </div>
                </div>
            </div>

            <!--	SIDEBAR BLOCK	-->
            <div id="bx-soa-total" class="col-lg-3 col-md-4 col-xs-12">
                <div class='panel nopd xs-wide'>
                    <div class='panel-inner has-border'>
                                                    <!--	BASKET ITEMS BLOCK	-->
                            <div id="bx-soa-basket" data-visited="false" class="order-list bx-soa-section bx-active">
                                <div class='order-list-title'>Состав заказа</div>
                                <div class="bx-soa-section-content order-goods-list"></div>
                                <div class='order-list-title'>Способ доставки</div>
                                <div class='order-list-delivery'></div>
                            </div>
                                            </div>
                    <div class='panel-inner has-border'>
                        <div class='basket-summ-all'>
                            <div class="bx-soa-cart-total-ghost"></div>
                            <div class="bx-soa-cart-total"></div>
                            <!--	ORDER SAVE BLOCK	-->
                            <div id="bx-soa-orderSave">
                                <a class='btn btn-primary btn-block btn-sm' href="javascript:void(0)">
                                    Подтвердить                                    <span class='visible-inline-xs'>оформление</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class='panel-inner form-group no_call'>                     </div>
                    <div class='panel-inner has-border'>

                    </div>
                </div>
            </div>
        </div>
    </form>

    <div id="bx-soa-saved-files" style="display:none"></div>

        <script type="text/javascript">
        BX.message({'SOA_YES':'да','SOA_NO':'нет','SOA_DO_SOC_SERV':'Войти с помощью соцсетей','SOA_NOT_FOUND':'Не найден','SOA_NOT_SPECIFIED':'не указано','SOA_NOT_SELECTED':'не выбрано','SOA_NOT_CALCULATED':'не рассчитана','SOA_PS_SELECT_ERROR':'Платежная система не выбрана','SOA_DELIVERY_SELECT_ERROR':'Служба доставки не выбрана','SOA_PICKUP_PHONE':'Телефон','SOA_PICKUP_ADDRESS':'Адрес','SOA_PICKUP_WORK':'Режим работы','SOA_PICKUP_STORE':'Склад','SOA_PICKUP_EMAIL':'Электронная почта','SOA_PICKUP_DESC':'Описание','SOA_MAP_COORDS':'Координаты на карте','SOA_DISTANCE_KM':'км','SOA_ORDER_PROPS':'Свойства заказа','SOA_FIELD':'Поле','SOA_REQUIRED':'обязательно для заполнения','SOA_INVALID_EMAIL':'Введен неверный e-mail','SOA_MIN_LENGTH':'Минимальная длина поля','SOA_MAX_LENGTH':'Максимальная длина поля','SOA_NOT_NUMERIC':'должно быть числовым','SOA_MIN_VALUE':'Минимальное значение поля','SOA_MAX_VALUE':'Максимальное значение поля','SOA_NUM_STEP':'не соответствует шагу','SOA_LESS':'не менее','SOA_MORE':'не более','SOA_SYMBOLS':'символов','SOA_INVALID_PATTERN':'не соответствует шаблону','SOA_PROP_NEW_PROFILE':'Новый профиль','SOA_PAY_SYSTEM':'Платежная система','SOA_PAY_ACCOUNT3':'Средств достаточно для полной оплаты заказа.','SOA_DELIVERY':'Служба доставки','SOA_ORDER_SUC':'<b>Ваш заказ №#ORDER_ID#<\/b> от #ORDER_DATE# успешно создан.','SOA_PAYMENT_SUC':'Номер вашей оплаты: <b>№#PAYMENT_ID#<\/b>','SOA_ORDER_SUC1':'Вы можете следить за выполнением своего заказа в <a href=\"#LINK#\">персональном разделе сайта<\/a>. Обратите внимание, что для входа в этот раздел вам необходимо будет ввести логин и пароль пользователя сайта.','SOA_PAY':'Оплата заказа: ','SOA_PAY_LINK':'Если окно с платежной информацией не открылось автоматически, нажмите на ссылку <a href=\"#LINK#\" target=\"_blank\">Оплатить заказ<\/a>.','SOA_PAY_PDF':'Для того, чтобы скачать счет в формате pdf, нажмите на ссылку <a href=\"#LINK#\" target=\"_blank\">Скачать счет<\/a>.','SOA_ERROR_ORDER':'Ошибка формирования заказа','SOA_ERROR_ORDER_LOST':'Заказ №#ORDER_ID# не найден.','SOA_ERROR_ORDER_LOST1':'Пожалуйста обратитесь к администрации интернет-магазина или попробуйте оформить ваш заказ еще раз.','SOA_SUM_NAME':'Наименование','SOA_SUM_DISCOUNT':'Скидка','SOA_SUM_WEIGHT':'Вес','SOA_SUM_QUANTITY':'Кол-во','SOA_SUM_PRICE':'Цена','SOA_SUM_WEIGHT_SUM':'Общий вес:','SOA_SUM_SUMMARY':'Товаров на:','SOA_SUM_VAT':'НДС:','SOA_SUM_DELIVERY':'Доставка:','SOA_SUM_IT':'Итого:','SOA_SUM_PAYED':'Оплачено:','SOA_SUM_LEFT_TO_PAY':'Осталось оплатить:','SOA_ORDER_COMPLETE':'Заказ сформирован','CAPTCHA_REGF_TITLE':'Защита от автоматической регистрации','CAPTCHA_REGF_PROMT':'Введите слово на картинке','STOF_LOGIN':'Логин','STOF_PASSWORD':'Пароль','STOF_REMEMBER':'Запомнить меня','STOF_ENTER':'Войти','STOF_REGISTER':'Регистрация','STOF_DO_AUTHORIZE':'Авторизоваться','STOF_DO_REGISTER':'Зарегистрироваться','STOF_AUTH_REQUEST':'Пожалуйста, авторизуйтесь','STOF_REG_REQUEST':'Пожалуйста, зарегистрируйтесь','STOF_REG_HINT':'Если вы впервые на сайте, и хотите что бы мы вас помнили и все ваши заказы сохранялись,\nзаполните регистрационную форму.','STOF_FORGET_PASSWORD':'Забыли пароль?','STOF_NEXT_STEP':'Продолжить оформление заказа','STOF_NAME':'Имя','STOF_LASTNAME':'Фамилия','STOF_EMAIL':'E-mail','STOF_MY_PASSWORD':'Задать логин и пароль','STOF_RE_PASSWORD':'Повтор пароля','STOF_SYS_PASSWORD':'Сгенерировать логин и пароль','SALE_SADC_TRANSIT':'Срок доставки','SOA_NO_JS':'Для оформления заказа необходимо включить JavaScript. По-видимому, JavaScript либо не поддерживается браузером, либо отключен. Измените настройки браузера и затем <a href=\"\">повторите попытку<\/a>.','SOA_PAYSYSTEM_PRICE':'Дополнительно наложенный платеж:','SOA_OTHER_LOCATION':'Другое местоположение','SOA_LOCATION_NOT_FOUND':'Местоположение не найдено','SOA_LOCATION_NOT_FOUND_PROMPT':'Нажмите #ANCHOR#добавить местоположение#ANCHOR_END#, чтобы мы узнали, куда нам доставить ваш заказ','SOA_NOT_SELECTED_ALT':'При необходимости уточнить местоположение','SOA_ORDER_PS_ERROR':'Ошибка выбранного способа оплаты. Обратитесь к Администрации сайта, либо выберите другой способ оплаты.','AUTH_BLOCK_NAME_DEFAULT':'Авторизация','REG_BLOCK_NAME_DEFAULT':'Регистрация','BASKET_BLOCK_NAME_DEFAULT':'Состав заказа','REGION_BLOCK_NAME_DEFAULT':'Укажите адрес доставки','PAYMENT_BLOCK_NAME_DEFAULT':'Выберите способ оплаты','DELIVERY_BLOCK_NAME_DEFAULT':'Выберите подходящий способ доставки','BUYER_BLOCK_NAME_DEFAULT':'Укажите контактную информацию','BACK_DEFAULT':'Назад','FURTHER_DEFAULT':'Далее','EDIT_DEFAULT':'изменить','ORDER_DEFAULT':'Подтвердить','ORDER_DEFAULT_END':'оформление','ADD_DEFAULT':'Добавить','PRICE_DEFAULT':'Стоимость','PERIOD_DEFAULT':'Срок доставки','NAV_BACK_DEFAULT':'Назад','NAV_FORWARD_DEFAULT':'Вперед','REGISTRATION_REFERENCE_DEFAULT':'Если вы впервые на сайте, и хотите что бы мы вас помнили и все ваши заказы сохранялись, заполните регистрационную форму.','AUTH_REFERENCE_1_DEFAULT':'Символом \"звездочка\" (*) отмечены обязательные для заполнения поля.','AUTH_REFERENCE_2_DEFAULT':'После регистрации вы получите информационное письмо.','AUTH_REFERENCE_3_DEFAULT':'Личные сведения, полученные в распоряжение интернет-магазина при регистрации или каким-либо иным образом, не будут без разрешения пользователей передаваться третьим организациям и лицам за исключением ситуаций, когда этого требует закон или судебное решение.','ADDITIONAL_PROPS_DEFAULT':'Дополнительные свойства','USE_COUPON_DEFAULT':'Применить купон','COUPON_DEFAULT':'Купон','PERSON_TYPE_DEFAULT':'Тип плательщика','SELECT_PROFILE_DEFAULT':'Выберите профиль','REGION_REFERENCE_DEFAULT':'Выберите свой город в списке. Если вы не нашли свой город, выберите \"другое местоположение\", а город впишите в поле \"Адрес доставки\"','PICKUP_LIST_DEFAULT':'Пункты самовывоза:','NEAREST_PICKUP_LIST_DEFAULT':'Ближайшие пункты:','SELECT_PICKUP_DEFAULT':'Выбрать','INNER_PS_BALANCE_DEFAULT':'На вашем пользовательском счете:','ORDER_DESC_DEFAULT':'Комментарии к заказу:','SELECT_FILE_DEFAULT':'Выбрать','SUCCESS_PRELOAD_TEXT_DEFAULT':'\nВы заказывали в нашем интернет-магазине, поэтому мы заполнили все данные автоматически.<br />\nЕсли все заполнено верно, нажмите кнопку \"#ORDER_BUTTON#\".\n','FAIL_PRELOAD_TEXT_DEFAULT':'\nВы заказывали в нашем интернет-магазине, поэтому мы заполнили все данные автоматически.<br />\nОбратите внимание на развернутый блок с информацией о заказе. Здесь вы можете внести необходимые изменения или \nоставить как есть и нажать кнопку \"#ORDER_BUTTON#\".\n','DELIVERY_CALC_ERROR_TITLE_DEFAULT':'Не удалось рассчитать стоимость доставки.','DELIVERY_CALC_ERROR_TEXT_DEFAULT':'Вы можете продолжить оформление заказа, а чуть позже менеджер магазина свяжется с вами и уточнит информацию по доставке.','EMPTY_BASKET_TITLE':'Ваша корзина пуста','EMPTY_BASKET_HINT':'#A1#Нажмите здесь#A2#, чтобы продолжить покупки','SOA_BAD_EXTENSION':'Неверный тип файла','SOA_MAX_SIZE':'Превышен максимальный размер файла'});
        BX.Sale.OrderAjaxComponent.init({
            result: {'IS_AUTHORIZED':false,'LAST_ORDER_DATA':[],'SHOW_AUTH':false,'SHOW_EMPTY_BASKET':false,'AUTH':{'new_user_registration_email_confirmation':'N','new_user_registration':'Y','new_user_email_required':'Y'},'OK_MESSAGE':'','GRID':{'DEFAULT_COLUMNS':false,'HEADERS':[{'id':'NAME','name':'Название'},{'id':'PREVIEW_PICTURE','name':'Изображение'},{'id':'PROPS','name':'Свойства'},{'id':'PRICE_FORMATED','name':'Цена','align':'right'},{'id':'QUANTITY','name':'Количество'},{'id':'SUM','name':'Сумма'}],'HEADERS_HIDDEN':[],'ROWS':{'876':{'id':'876','data':{'MODULE':'catalog','PRODUCT_ID':'162','ID':'876','LID':'s1','QUANTITY':'1','WEIGHT':'650.00','DELAY':'N','CAN_BUY':'Y','PRICE':'9200.0000','CUSTOM_PRICE':'N','BASE_PRICE':'9200.0000','PRODUCT_PRICE_ID':'72','CURRENCY':'RUB','BARCODE_MULTI':'N','RESERVED':'N','RESERVE_QUANTITY':'','NAME':'Милур 307.32RG-2-D','CATALOG_XML_ID':'','VAT_RATE':'0.0000','NOTES':'Базовая','DISCOUNT_PRICE':'0.0000','PRODUCT_PROVIDER_CLASS':'CCatalogProductProvider','CALLBACK_FUNC':'','ORDER_CALLBACK_FUNC':'','PAY_CALLBACK_FUNC':'','CANCEL_CALLBACK_FUNC':'','DIMENSIONS':'a:3:{s:5:\"WIDTH\";s:3:\"110\";s:6:\"HEIGHT\";s:2:\"80\";s:6:\"LENGTH\";s:3:\"100\";}','TYPE':'','SET_PARENT_ID':'','DETAIL_PAGE_URL':'/catalog/schetchiki-elektrichestva/milur-307-32rg-2-d/','FUSER_ID':'469056','MEASURE_CODE':'796','MEASURE_NAME':'шт','ORDER_ID':'','DATE_INSERT':'17.04.2019 19:27:02','DATE_UPDATE':'20.04.2019 09:55:47','PRODUCT_XML_ID':'162','SUBSCRIBE':'N','RECOMMENDATION':'','VAT_INCLUDED':'Y','SORT':'100','DISCOUNT_NAME':'','DISCOUNT_COUPON':'','DISCOUNT_VALUE':'0','PRICE_FORMATED':'9 200 <span class=\'rouble\'>P<\/span>','WEIGHT_FORMATED':'650 г','DISCOUNT_PRICE_PERCENT':'0','DISCOUNT_PRICE_PERCENT_FORMATED':'0%','BASE_PRICE_FORMATED':'9 200 <span class=\'rouble\'>P<\/span>','PROPS':[{'CODE':'TIMEZONE_FIRMWARE','ID':'1214','VALUE':'Москва (UTC+03:00)','SORT':'100','NAME':'Часовой пояс'},{'CODE':'TARIFFS_FIRMWARE','ID':'1215','VALUE':'1','SORT':'100','NAME':'Количество тарифов'}],'SUM_NUM':'9200','SUM':'9 200 <span class=\'rouble\'>P<\/span>','SUM_BASE':'9200','SUM_BASE_FORMATED':'9 200 <span class=\'rouble\'>P<\/span>','PREVIEW_PICTURE':'344','DETAIL_PICTURE':'345','PREVIEW_PICTURE_SRC':'https://www.milur.ru/upload/resize_cache/iblock/9e7/160_160_1/9e793169060124734f16c52a49515eac.jpg','PREVIEW_PICTURE_SRC_2X':'https://www.milur.ru/upload/resize_cache/iblock/9e7/320_320_1/9e793169060124734f16c52a49515eac.jpg','PREVIEW_PICTURE_SRC_ORIGINAL':'https://www.milur.ru/upload/iblock/9e7/9e793169060124734f16c52a49515eac.jpg','DETAIL_PICTURE_SRC':'https://www.milur.ru/upload/resize_cache/iblock/101/160_160_1/101ed5d08659b440e78d8a4c71634ba8.jpg','DETAIL_PICTURE_SRC_2X':'https://www.milur.ru/upload/resize_cache/iblock/101/320_320_1/101ed5d08659b440e78d8a4c71634ba8.jpg','DETAIL_PICTURE_SRC_ORIGINAL':'https://www.milur.ru/upload/iblock/101/101ed5d08659b440e78d8a4c71634ba8.jpg','MEASURE_TEXT':'шт','MEASURE':'796'},'actions':[],'columns':{'PROPS':'Часовой&nbsp;пояс:&nbsp;Москва&nbsp;(UTC+03:00)<br />Количество&nbsp;тарифов:&nbsp;1<br />','PREVIEW_PICTURE':'<a href=\"/upload/iblock/9e7/9e793169060124734f16c52a49515eac.jpg\" title=\"Увеличить\" target=\"_blank\"><img src=\"/upload/iblock/9e7/9e793169060124734f16c52a49515eac.jpg\" border=0 alt=\"\" width=\"93\" height=\"110\" title=\"Увеличить\" /><\/a>','DETAIL_PICTURE':'<a href=\"/upload/iblock/101/101ed5d08659b440e78d8a4c71634ba8.jpg\" title=\"Увеличить\" target=\"_blank\"><img src=\"/upload/iblock/101/101ed5d08659b440e78d8a4c71634ba8.jpg\" border=0 alt=\"\" width=\"93\" height=\"110\" title=\"Увеличить\" /><\/a>','QUANTITY':'1&nbsp;шт'},'editable':true}}},'PERSON_TYPE':{'1':{'ID':'1','LID':'s1','NAME':'Физическое лицо','SORT':'100','ACTIVE':'Y','CHECKED':'Y'}},'PAY_SYSTEM':[{'ID':'6','PAY_SYSTEM_ID':'6','NAME':'Банковской картой онлайн','PSA_NAME':'Банковской картой онлайн','CODE':'','SORT':'100','DESCRIPTION':'','PS_MODE':'','HAVE_PRICE':'N','ACTIVE':'Y','ALLOW_EDIT_PAYMENT':'Y','IS_CASH':'N','AUTO_CHANGE_1C':'N','CAN_PRINT_CHECK':'N','PSA_ID':'6','PSA_ACTION_FILE':'/bitrix/php_interface/include/sale_payment/payment','PSA_RESULT_FILE':'','PSA_NEW_WINDOW':'N','PSA_PERSON_TYPE_ID':'','PSA_PARAMS':'a:1:{s:16:\"BX_PAY_SYSTEM_ID\";i:6;}','PSA_TARIF':'','PSA_HAVE_PAYMENT':'Y','PSA_HAVE_ACTION':'N','PSA_HAVE_RESULT':'Y','PSA_HAVE_PREPAY':'N','PSA_HAVE_RESULT_RECEIVE':'N','PSA_ENCODING':'','PSA_LOGOTIP':{'ID':'643','TIMESTAMP_X':'15.04.2019 16:26:54','MODULE_ID':'sale','HEIGHT':'512','WIDTH':'512','FILE_SIZE':'62998','CONTENT_TYPE':'image/png','SUBDIR':'sale/paysystem/logotip/740','FILE_NAME':'740f9f3dfff14f2eb8a7e2583044c14e.png','ORIGINAL_NAME':'sberbank.png','DESCRIPTION':'','HANDLER_ID':'','EXTERNAL_ID':'83dc94ffe8240580bb9a49a23c6e8f1c','~src':false,'SRC':'https://www.milur.ru/upload/sale/paysystem/logotip/740/740f9f3dfff14f2eb8a7e2583044c14e.png'},'CHECKED':'Y','PRICE':'0','PSA_LOGOTIP_SRC':'https://www.milur.ru/upload/resize_cache/sale/paysystem/logotip/740/300_300_1/740f9f3dfff14f2eb8a7e2583044c14e.png','PSA_LOGOTIP_SRC_2X':'https://www.milur.ru/upload/sale/paysystem/logotip/740/740f9f3dfff14f2eb8a7e2583044c14e.png','PSA_LOGOTIP_SRC_ORIGINAL':'https://www.milur.ru/upload/sale/paysystem/logotip/740/740f9f3dfff14f2eb8a7e2583044c14e.png'},{'ID':'5','PAY_SYSTEM_ID':'5','NAME':'Выставить счет на оплату','PSA_NAME':'Выставить счет на оплату','CODE':'','SORT':'200','DESCRIPTION':'','PS_MODE':'','HAVE_PRICE':'N','ACTIVE':'Y','ALLOW_EDIT_PAYMENT':'Y','IS_CASH':'N','AUTO_CHANGE_1C':'N','CAN_PRINT_CHECK':'N','PSA_ID':'5','PSA_ACTION_FILE':'bill','PSA_RESULT_FILE':'','PSA_NEW_WINDOW':'N','PSA_PERSON_TYPE_ID':'','PSA_PARAMS':'a:1:{s:16:\"BX_PAY_SYSTEM_ID\";i:5;}','PSA_TARIF':'','PSA_HAVE_PAYMENT':'Y','PSA_HAVE_ACTION':'N','PSA_HAVE_RESULT':'N','PSA_HAVE_PREPAY':'N','PSA_HAVE_RESULT_RECEIVE':'N','PSA_ENCODING':'','PSA_LOGOTIP':{'ID':'51','TIMESTAMP_X':'28.04.2017 13:58:00','MODULE_ID':'sale','HEIGHT':'249','WIDTH':'512','FILE_SIZE':'6352','CONTENT_TYPE':'image/png','SUBDIR':'sale/paysystem/logotip/ebb','FILE_NAME':'ebba2e06cb8b7400af4c019ea406e816.png','ORIGINAL_NAME':'bill.png','DESCRIPTION':'','HANDLER_ID':'','EXTERNAL_ID':'7ddd4c9abbd7d8022df3aa321429d086','~src':false,'SRC':'https://www.milur.ru/upload/sale/paysystem/logotip/ebb/ebba2e06cb8b7400af4c019ea406e816.png'},'PRICE':'0','PSA_LOGOTIP_SRC':'https://www.milur.ru/upload/resize_cache/sale/paysystem/logotip/ebb/300_300_1/ebba2e06cb8b7400af4c019ea406e816.png','PSA_LOGOTIP_SRC_2X':'https://www.milur.ru/upload/sale/paysystem/logotip/ebb/ebba2e06cb8b7400af4c019ea406e816.png','PSA_LOGOTIP_SRC_ORIGINAL':'https://www.milur.ru/upload/sale/paysystem/logotip/ebb/ebba2e06cb8b7400af4c019ea406e816.png'}],'INNER_PAY_SYSTEM':{'ID':'1','PAY_SYSTEM_ID':'','PERSON_TYPE_ID':'','NAME':'Внутренний счет','PSA_NAME':'Внутренний счет','CODE':'','SORT':'100','ACTION_FILE':'inner','RESULT_FILE':'','DESCRIPTION':'','NEW_WINDOW':'N','PARAMS':'','TARIF':'','PS_MODE':'','HAVE_PAYMENT':'N','HAVE_ACTION':'N','HAVE_RESULT':'N','HAVE_PREPAY':'N','HAVE_PRICE':'N','HAVE_RESULT_RECEIVE':'N','ENCODING':'','LOGOTIP':{'ID':'46','TIMESTAMP_X':'24.04.2017 16:36:36','MODULE_ID':'sale','HEIGHT':'249','WIDTH':'512','FILE_SIZE':'6562','CONTENT_TYPE':'image/png','SUBDIR':'sale/paysystem/logotip/a74','FILE_NAME':'a74949f831f6940b63db00881c6aa561.png','ORIGINAL_NAME':'inner.png','DESCRIPTION':'','HANDLER_ID':'','EXTERNAL_ID':'9eaf0afd19e43f2843e709f4f4d48a3e','~src':false,'SRC':'https://www.milur.ru/upload/sale/paysystem/logotip/a74/a74949f831f6940b63db00881c6aa561.png'},'ACTIVE':'Y','ALLOW_EDIT_PAYMENT':'Y','IS_CASH':'N','AUTO_CHANGE_1C':'N','CAN_PRINT_CHECK':'N','LOGOTIP_SRC':'https://www.milur.ru/upload/resize_cache/sale/paysystem/logotip/a74/300_300_1/a74949f831f6940b63db00881c6aa561.png','LOGOTIP_SRC_2X':'https://www.milur.ru/upload/sale/paysystem/logotip/a74/a74949f831f6940b63db00881c6aa561.png','LOGOTIP_SRC_ORIGINAL':'https://www.milur.ru/upload/sale/paysystem/logotip/a74/a74949f831f6940b63db00881c6aa561.png'},'DELIVERY':{'2':{'CHECKED':'Y','PRICE':'0','PRICE_FORMATED':'0 <span class=\'rouble\'>P<\/span>','ID':'2','NAME':'Самовывоз','OWN_NAME':'Самовывоз','DESCRIPTION':'124498, Москва, Зеленоград, Георгиевский проспект, дом 5','FIELD_NAME':'DELIVERY_ID','CURRENCY':'RUB','SORT':'100','EXTRA_SERVICES':[],'STORE':[]},'3':{'PRICE':'0','PRICE_FORMATED':'0 <span class=\'rouble\'>P<\/span>','PERIOD_TEXT':' от 1 до 3 дней ','ID':'3','NAME':'Курьерская доставка','OWN_NAME':'Курьерская доставка','DESCRIPTION':'Курьерская доставка','FIELD_NAME':'DELIVERY_ID','CURRENCY':'RUB','SORT':'200','EXTRA_SERVICES':[],'STORE':[]}},'USER_PROFILES':'','ORDER_PROP':{'groups':[{'ID':'5','NAME':'Данные для прошивки','PERSON_TYPE_ID':'1','SORT':'0'},{'ID':'1','NAME':'Личные данные','PERSON_TYPE_ID':'1','SORT':'100'},{'ID':'2','NAME':'Данные для доставки','PERSON_TYPE_ID':'1','SORT':'200'}],'properties':[{'ID':'1','PERSON_TYPE_ID':'1','NAME':'Ф.И.О.','TYPE':'STRING','REQUIRED':'Y','DEFAULT_VALUE':'','SORT':'100','USER_PROPS':'Y','IS_LOCATION':'N','PROPS_GROUP_ID':'1','DESCRIPTION':'','IS_EMAIL':'N','IS_PROFILE_NAME':'Y','IS_PAYER':'Y','IS_LOCATION4TAX':'N','IS_FILTERED':'Y','CODE':'FIO','IS_ZIP':'N','IS_PHONE':'N','IS_ADDRESS':'N','ACTIVE':'Y','UTIL':'N','INPUT_FIELD_LOCATION':'0','MULTIPLE':'N','SIZE':'40','VALUE':['']},{'ID':'2','PERSON_TYPE_ID':'1','NAME':'E-Mail','TYPE':'STRING','REQUIRED':'Y','DEFAULT_VALUE':'','SORT':'110','USER_PROPS':'Y','IS_LOCATION':'N','PROPS_GROUP_ID':'1','DESCRIPTION':'','IS_EMAIL':'Y','IS_PROFILE_NAME':'N','IS_PAYER':'N','IS_LOCATION4TAX':'N','IS_FILTERED':'Y','CODE':'EMAIL','IS_ZIP':'N','IS_PHONE':'N','IS_ADDRESS':'N','ACTIVE':'Y','UTIL':'N','INPUT_FIELD_LOCATION':'0','MULTIPLE':'N','SIZE':'40','VALUE':['']},{'ID':'3','PERSON_TYPE_ID':'1','NAME':'Телефон','TYPE':'STRING','REQUIRED':'Y','DEFAULT_VALUE':'','SORT':'120','USER_PROPS':'Y','IS_LOCATION':'N','PROPS_GROUP_ID':'1','DESCRIPTION':'','IS_EMAIL':'N','IS_PROFILE_NAME':'N','IS_PAYER':'N','IS_LOCATION4TAX':'N','IS_FILTERED':'N','CODE':'PHONE','IS_ZIP':'N','IS_PHONE':'Y','IS_ADDRESS':'N','ACTIVE':'Y','UTIL':'N','INPUT_FIELD_LOCATION':'0','MULTIPLE':'N','VALUE':['']},{'ID':'6','PERSON_TYPE_ID':'1','NAME':'Местоположение','TYPE':'LOCATION','REQUIRED':'Y','DEFAULT_VALUE':'0000073738','SORT':'140','USER_PROPS':'Y','IS_LOCATION':'Y','PROPS_GROUP_ID':'2','DESCRIPTION':'','IS_EMAIL':'N','IS_PROFILE_NAME':'N','IS_PAYER':'N','IS_LOCATION4TAX':'N','IS_FILTERED':'N','CODE':'LOCATION','IS_ZIP':'N','IS_PHONE':'N','IS_ADDRESS':'N','ACTIVE':'Y','UTIL':'N','INPUT_FIELD_LOCATION':'5','MULTIPLE':'N','VALUE':['0000073738']},{'ID':'7','PERSON_TYPE_ID':'1','NAME':'Адрес доставки','TYPE':'STRING','REQUIRED':'N','DEFAULT_VALUE':'','SORT':'150','USER_PROPS':'Y','IS_LOCATION':'N','PROPS_GROUP_ID':'2','DESCRIPTION':'','IS_EMAIL':'N','IS_PROFILE_NAME':'N','IS_PAYER':'N','IS_LOCATION4TAX':'N','IS_FILTERED':'N','CODE':'ADDRESS','IS_ZIP':'N','IS_PHONE':'N','IS_ADDRESS':'N','ACTIVE':'Y','UTIL':'N','INPUT_FIELD_LOCATION':'0','MULTIPLE':'N','MINLENGTH':'','MAXLENGTH':'','PATTERN':'','MULTILINE':'Y','COLS':'30','ROWS':'3','VALUE':['']}]},'STORE_LIST':[],'BUYER_STORE':'0','COUPON_LIST':[],'PAY_CURRENT_ACCOUNT':'N','PAY_FROM_ACCOUNT':false,'CURRENT_BUDGET_FORMATED':false,'TOTAL':{'PRICE_WITHOUT_DISCOUNT_VALUE':'9200','PRICE_WITHOUT_DISCOUNT':'9 200 <span class=\'rouble\'>P<\/span>','PAYED_FROM_ACCOUNT_FORMATED':false,'ORDER_TOTAL_PRICE':'9200','ORDER_TOTAL_PRICE_FORMATED':'9 200 <span class=\'rouble\'>P<\/span>','ORDER_TOTAL_LEFT_TO_PAY':'','ORDER_TOTAL_LEFT_TO_PAY_FORMATED':'','ORDER_WEIGHT':'650','ORDER_WEIGHT_FORMATED':'650 г','ORDER_PRICE':'9200','ORDER_PRICE_FORMATED':'9 200 <span class=\'rouble\'>P<\/span>','USE_VAT':false,'VAT_RATE':'0','VAT_SUM':'0','VAT_SUM_FORMATED':'0 <span class=\'rouble\'>P<\/span>','TAX_PRICE':'0','TAX_LIST':[],'DISCOUNT_PRICE':'0','DISCOUNT_PRICE_FORMATED':'0 <span class=\'rouble\'>P<\/span>','DELIVERY_PRICE':'0','DELIVERY_PRICE_FORMATED':'0 <span class=\'rouble\'>P<\/span>','PAY_SYSTEM_PRICE':'','PAY_SYSTEM_PRICE_FORMATTED':''},'ERROR':[],'WARNING':[]},
            locations: {'6':{'template':'search','output':['\n\n\n				\n	<div id=\"sls-87627\" class=\"bx-sls \">\n\n				<div class=\"dropdown-block bx-ui-sls-input-block\">\n\n			<span class=\"dropdown-icon\"><\/span>\n			<input type=\"text\" autocomplete=\"off\" name=\"ORDER_PROP_6\" value=\"0000812044\" class=\"dropdown-field\" placeholder=\"Введите название ...\" />\n\n			<div class=\"dropdown-fade2white\"><\/div>\n			<div class=\"bx-ui-sls-loader\"><\/div>\n			<div class=\"bx-ui-sls-clear\" title=\"Отменить выбор\"><\/div>\n			<div class=\"bx-ui-sls-pane\"><\/div>\n\n		<\/div>\n\n		<script type=\"text/html\" data-template-id=\"bx-ui-sls-error\">\n			<div class=\"bx-ui-sls-error\">\n				<div><\/div>\n				{{message}}\n			<\/div>\n		<\/script>\n\n		<script type=\"text/html\" data-template-id=\"bx-ui-sls-dropdown-item\">\n			<div class=\"dropdown-item bx-ui-sls-variant\">\n				<span class=\"dropdown-item-text\">{{display_wrapped}}<\/span>\n							<\/div>\n		<\/script>\n\n		<div class=\"bx-ui-sls-error-message\">\n					<\/div>\n\n	<\/div>\n\n	<script>\n\n		if (!window.BX && top.BX)\n			window.BX = top.BX;\n\n					if(typeof window.BX.locationsDeferred == \'undefined\') window.BX.locationsDeferred = {};\n			window.BX.locationsDeferred[\'6\'] = function(){\n		\n							if(typeof window.BX.locationSelectors == \'undefined\') window.BX.locationSelectors = {};\n				window.BX.locationSelectors[\'6\'] = \n			\n			new BX.Sale.component.location.selector.search({\'scope\':\'sls-87627\',\'source\':\'/bitrix/components/bitrix/sale.location.selector.search/get.php\',\'query\':{\'FILTER\':{\'EXCLUDE_ID\':0,\'SITE_ID\':\'s1\'},\'BEHAVIOUR\':{\'SEARCH_BY_PRIMARY\':\'0\',\'LANGUAGE_ID\':\'ru\'}},\'selectedItem\':2204,\'knownItems\':{\'2204\':{\'CODE\':\'0000812044\',\'TYPE_ID\':\'5\',\'PATH\':[57,1],\'VALUE\':2204,\'DISPLAY\':\'Екатеринбург\'},\'1\':{\'CODE\':\'0000028023\',\'TYPE_ID\':\'1\',\'PATH\':[1],\'VALUE\':1,\'DISPLAY\':\'Россия\'},\'57\':{\'CODE\':\'0000028085\',\'TYPE_ID\':\'3\',\'PATH\':[],\'VALUE\':57,\'DISPLAY\':\'Свердловская область\'}},\'provideLinkBy\':\'code\',\'messages\':{\'nothingFound\':\'К сожалению, ничего не найдено\',\'error\':\'К сожалению, произошла внутренняя ошибка\'},\'callback\':\'submitFormProxy\',\'useSpawn\':false,\'initializeByGlobalEvent\':\'\',\'globalEventScope\':\'\',\'pathNames\':{\'1\':\'Россия\',\'57\':\'Свердловская область\',\'2204\':\'Екатеринбург\'},\'types\':{\'1\':{\'CODE\':\'COUNTRY\'},\'2\':{\'CODE\':\'COUNTRY_DISTRICT\'},\'3\':{\'CODE\':\'REGION\'},\'4\':{\'CODE\':\'SUBREGION\'},\'5\':{\'CODE\':\'CITY\'},\'6\':{\'CODE\':\'VILLAGE\'},\'7\':{\'CODE\':\'STREET\'}}});\n\n					};\n		\n	<\/script>\n\n'],'showAlt':false,'lastValue':'0000812044'}},
            params: {'PAY_FROM_ACCOUNT':'N','COUNT_DELIVERY_TAX':'N','COUNT_DISCOUNT_4_ALL_QUANTITY':'N','ONLY_FULL_PAY_FROM_ACCOUNT':'N','ALLOW_AUTO_REGISTER':'Y','SEND_NEW_USER_NOTIFY':'Y','DELIVERY_NO_AJAX':'N','TEMPLATE_LOCATION':'popup','PROP_1':'','PATH_TO_BASKET':'/personal/cart/','PATH_TO_PERSONAL':'/personal/orders/','PATH_TO_PAYMENT':'/personal/order/payment/','PATH_TO_ORDER':'/personal/order/make/','SET_TITLE':'Y','SHOW_ACCOUNT_NUMBER':'Y','DELIVERY_NO_SESSION':'Y','COMPATIBLE_MODE':'N','BASKET_POSITION':'after','BASKET_IMAGES_SCALING':'adaptive','SERVICES_IMAGES_SCALING':'adaptive','COMPONENT_TEMPLATE':'.default','DELIVERY_TO_PAYSYSTEM':'d2p','USE_PREPAYMENT':'N','USE_PRELOAD':'Y','ALLOW_USER_PROFILES':'Y','ALLOW_NEW_PROFILE':'N','TEMPLATE_THEME':'site','SHOW_ORDER_BUTTON':'always','SHOW_TOTAL_ORDER_BUTTON':'N','SHOW_PAY_SYSTEM_LIST_NAMES':'Y','SHOW_PAY_SYSTEM_INFO_NAME':'Y','SHOW_DELIVERY_LIST_NAMES':'Y','SHOW_DELIVERY_INFO_NAME':'Y','SHOW_DELIVERY_PARENT_NAMES':'Y','SHOW_STORES_IMAGES':'Y','SKIP_USELESS_BLOCK':'Y','SHOW_BASKET_HEADERS':'N','DELIVERY_FADE_EXTRA_SERVICES':'N','SHOW_COUPONS_BASKET':'N','SHOW_COUPONS_DELIVERY':'N','SHOW_COUPONS_PAY_SYSTEM':'N','SHOW_NEAREST_PICKUP':'N','DELIVERIES_PER_PAGE':'8','PAY_SYSTEMS_PER_PAGE':'8','PICKUPS_PER_PAGE':'5','SHOW_MAP_IN_PROPS':'N','PROPS_FADE_LIST_1':[],'PROPS_FADE_LIST_2':[],'PATH_TO_AUTH':'/auth/','DISABLE_BASKET_REDIRECT':'N','PRODUCT_COLUMNS_VISIBLE':['PREVIEW_PICTURE','PROPS','PRICE_FORMATED'],'PRODUCT_COLUMNS_HIDDEN':[],'USE_YM_GOALS':'N','USE_CUSTOM_MAIN_MESSAGES':'N','USE_CUSTOM_ADDITIONAL_MESSAGES':'N','USE_CUSTOM_ERROR_MESSAGES':'N','CACHE_TYPE':'A','DISPLAY_IMG_HEIGHT':'90','CURRENT_PAGE':'/personal/order/make/','PRODUCT_COLUMNS':{'NAME':'Название','PREVIEW_PICTURE':'Изображение','PROPS':'Свойства','PRICE_FORMATED':'Цена','QUANTITY':'Количество','SUM':'Сумма'},'~PAY_FROM_ACCOUNT':'N','~COUNT_DELIVERY_TAX':'N','~COUNT_DISCOUNT_4_ALL_QUANTITY':'N','~ONLY_FULL_PAY_FROM_ACCOUNT':'N','~ALLOW_AUTO_REGISTER':'Y','~SEND_NEW_USER_NOTIFY':'Y','~DELIVERY_NO_AJAX':'N','~TEMPLATE_LOCATION':'popup','~PROP_1':'','~PATH_TO_BASKET':'/personal/cart/','~PATH_TO_PERSONAL':'/personal/orders/','~PATH_TO_PAYMENT':'/personal/order/payment/','~PATH_TO_ORDER':'/personal/order/make/','~SET_TITLE':'Y','~SHOW_ACCOUNT_NUMBER':'Y','~DELIVERY_NO_SESSION':'Y','~COMPATIBLE_MODE':'N','~BASKET_POSITION':'after','~BASKET_IMAGES_SCALING':'adaptive','~SERVICES_IMAGES_SCALING':'adaptive','~COMPONENT_TEMPLATE':'.default','~DELIVERY_TO_PAYSYSTEM':'d2p','~USE_PREPAYMENT':'N','~USE_PRELOAD':'Y','~ALLOW_USER_PROFILES':'Y','~ALLOW_NEW_PROFILE':'N','~TEMPLATE_THEME':'site','~SHOW_ORDER_BUTTON':'always','~SHOW_TOTAL_ORDER_BUTTON':'N','~SHOW_PAY_SYSTEM_LIST_NAMES':'Y','~SHOW_PAY_SYSTEM_INFO_NAME':'Y','~SHOW_DELIVERY_LIST_NAMES':'Y','~SHOW_DELIVERY_INFO_NAME':'Y','~SHOW_DELIVERY_PARENT_NAMES':'Y','~SHOW_STORES_IMAGES':'Y','~SKIP_USELESS_BLOCK':'Y','~SHOW_BASKET_HEADERS':'N','~DELIVERY_FADE_EXTRA_SERVICES':'N','~SHOW_COUPONS_BASKET':'N','~SHOW_COUPONS_DELIVERY':'N','~SHOW_COUPONS_PAY_SYSTEM':'N','~SHOW_NEAREST_PICKUP':'N','~DELIVERIES_PER_PAGE':'8','~PAY_SYSTEMS_PER_PAGE':'8','~PICKUPS_PER_PAGE':'5','~SHOW_MAP_IN_PROPS':'N','~PROPS_FADE_LIST_1':[],'~PROPS_FADE_LIST_2':[],'~PATH_TO_AUTH':'/auth/','~DISABLE_BASKET_REDIRECT':'N','~PRODUCT_COLUMNS_VISIBLE':['PREVIEW_PICTURE','PROPS','PRICE_FORMATED'],'~PRODUCT_COLUMNS_HIDDEN':[],'~USE_YM_GOALS':'N','~USE_CUSTOM_MAIN_MESSAGES':'N','~USE_CUSTOM_ADDITIONAL_MESSAGES':'N','~USE_CUSTOM_ERROR_MESSAGES':'N','~CACHE_TYPE':'A','~DISPLAY_IMG_HEIGHT':'90','~CURRENT_PAGE':'/personal/order/make/','~PRODUCT_COLUMNS':{'NAME':'Название','PREVIEW_PICTURE':'Изображение','PROPS':'Свойства','PRICE_FORMATED':'Цена','QUANTITY':'Количество','SUM':'Сумма'},'MESS_AUTH_BLOCK_NAME':'Авторизация','MESS_REG_BLOCK_NAME':'Регистрация','MESS_BASKET_BLOCK_NAME':'Состав заказа','MESS_REGION_BLOCK_NAME':'Укажите адрес доставки','MESS_PAYMENT_BLOCK_NAME':'Выберите способ оплаты','MESS_DELIVERY_BLOCK_NAME':'Выберите подходящий способ доставки','MESS_BUYER_BLOCK_NAME':'Укажите контактную информацию','MESS_BACK':'Назад','MESS_FURTHER':'Далее','MESS_EDIT':'изменить','MESS_ORDER':'Подтвердить','MESS_ORDER_END':'оформление','MESS_PRICE':'Стоимость','MESS_PERIOD':'Срок доставки','MESS_NAV_BACK':'Назад','MESS_NAV_FORWARD':'Вперед','MESS_REGISTRATION_REFERENCE':'Если вы впервые на сайте, и хотите что бы мы вас помнили и все ваши заказы сохранялись, заполните регистрационную форму.','MESS_AUTH_REFERENCE_1':'Символом \"звездочка\" (*) отмечены обязательные для заполнения поля.','MESS_AUTH_REFERENCE_2':'После регистрации вы получите информационное письмо.','MESS_AUTH_REFERENCE_3':'Личные сведения, полученные в распоряжение интернет-магазина при регистрации или каким-либо иным образом, не будут без разрешения пользователей передаваться третьим организациям и лицам за исключением ситуаций, когда этого требует закон или судебное решение.','MESS_ADDITIONAL_PROPS':'Дополнительные свойства','MESS_USE_COUPON':'Применить купон','MESS_COUPON':'Купон','MESS_PERSON_TYPE':'Тип плательщика','MESS_SELECT_PROFILE':'Выберите профиль','MESS_REGION_REFERENCE':'Выберите свой город в списке. Если вы не нашли свой город, выберите \"другое местоположение\", а город впишите в поле \"Адрес доставки\"','MESS_PICKUP_LIST':'Пункты самовывоза:','MESS_NEAREST_PICKUP_LIST':'Ближайшие пункты:','MESS_SELECT_PICKUP':'Выбрать','MESS_INNER_PS_BALANCE':'На вашем пользовательском счете:','MESS_ORDER_DESC':'Комментарии к заказу:','MESS_PRELOAD_ORDER_TITLE':'','MESS_SUCCESS_PRELOAD_TEXT':'\nВы заказывали в нашем интернет-магазине, поэтому мы заполнили все данные автоматически.<br />\nЕсли все заполнено верно, нажмите кнопку \"#ORDER_BUTTON#\".\n','MESS_FAIL_PRELOAD_TEXT':'\nВы заказывали в нашем интернет-магазине, поэтому мы заполнили все данные автоматически.<br />\nОбратите внимание на развернутый блок с информацией о заказе. Здесь вы можете внести необходимые изменения или \nоставить как есть и нажать кнопку \"#ORDER_BUTTON#\".\n','MESS_DELIVERY_CALC_ERROR_TITLE':'Не удалось рассчитать стоимость доставки.','MESS_DELIVERY_CALC_ERROR_TEXT':'Вы можете продолжить оформление заказа, а чуть позже менеджер магазина свяжется с вами и уточнит информацию по доставке.'},
            signedParamsString: 'YToxNTY6e3M6MTY6IlBBWV9GUk9NX0FDQ09VTlQiO3M6MToiTiI7czoxODoiQ09VTlRfREVMSVZFUllfVEFYIjtzOjE6Ik4iO3M6Mjk6IkNPVU5UX0RJU0NPVU5UXzRfQUxMX1FVQU5USVRZIjtzOjE6Ik4iO3M6MjY6Ik9OTFlfRlVMTF9QQVlfRlJPTV9BQ0NPVU5UIjtzOjE6Ik4iO3M6MTk6IkFMTE9XX0FVVE9fUkVHSVNURVIiO3M6MToiWSI7czoyMDoiU0VORF9ORVdfVVNFUl9OT1RJRlkiO3M6MToiWSI7czoxNjoiREVMSVZFUllfTk9fQUpBWCI7czoxOiJOIjtzOjE3OiJURU1QTEFURV9MT0NBVElPTiI7czo1OiJwb3B1cCI7czo2OiJQUk9QXzEiO3M6MDoiIjtzOjE0OiJQQVRIX1RPX0JBU0tFVCI7czoxNToiL3BlcnNvbmFsL2NhcnQvIjtzOjE2OiJQQVRIX1RPX1BFUlNPTkFMIjtzOjE3OiIvcGVyc29uYWwvb3JkZXJzLyI7czoxNToiUEFUSF9UT19QQVlNRU5UIjtzOjI0OiIvcGVyc29uYWwvb3JkZXIvcGF5bWVudC8iO3M6MTM6IlBBVEhfVE9fT1JERVIiO3M6MjE6Ii9wZXJzb25hbC9vcmRlci9tYWtlLyI7czo5OiJTRVRfVElUTEUiO3M6MToiWSI7czoxOToiU0hPV19BQ0NPVU5UX05VTUJFUiI7czoxOiJZIjtzOjE5OiJERUxJVkVSWV9OT19TRVNTSU9OIjtzOjE6IlkiO3M6MTU6IkNPTVBBVElCTEVfTU9ERSI7czoxOiJOIjtzOjE1OiJCQVNLRVRfUE9TSVRJT04iO3M6NToiYWZ0ZXIiO3M6MjE6IkJBU0tFVF9JTUFHRVNfU0NBTElORyI7czo4OiJhZGFwdGl2ZSI7czoyMzoiU0VSVklDRVNfSU1BR0VTX1NDQUxJTkciO3M6ODoiYWRhcHRpdmUiO3M6MTg6IkNPTVBPTkVOVF9URU1QTEFURSI7czo4OiIuZGVmYXVsdCI7czoyMToiREVMSVZFUllfVE9fUEFZU1lTVEVNIjtzOjM6ImQycCI7czoxNDoiVVNFX1BSRVBBWU1FTlQiO3M6MToiTiI7czoxMToiVVNFX1BSRUxPQUQiO3M6MToiWSI7czoxOToiQUxMT1dfVVNFUl9QUk9GSUxFUyI7czoxOiJZIjtzOjE3OiJBTExPV19ORVdfUFJPRklMRSI7czoxOiJOIjtzOjE0OiJURU1QTEFURV9USEVNRSI7czo0OiJzaXRlIjtzOjE3OiJTSE9XX09SREVSX0JVVFRPTiI7czo2OiJhbHdheXMiO3M6MjM6IlNIT1dfVE9UQUxfT1JERVJfQlVUVE9OIjtzOjE6Ik4iO3M6MjY6IlNIT1dfUEFZX1NZU1RFTV9MSVNUX05BTUVTIjtzOjE6IlkiO3M6MjU6IlNIT1dfUEFZX1NZU1RFTV9JTkZPX05BTUUiO3M6MToiWSI7czoyNDoiU0hPV19ERUxJVkVSWV9MSVNUX05BTUVTIjtzOjE6IlkiO3M6MjM6IlNIT1dfREVMSVZFUllfSU5GT19OQU1FIjtzOjE6IlkiO3M6MjY6IlNIT1dfREVMSVZFUllfUEFSRU5UX05BTUVTIjtzOjE6IlkiO3M6MTg6IlNIT1dfU1RPUkVTX0lNQUdFUyI7czoxOiJZIjtzOjE4OiJTS0lQX1VTRUxFU1NfQkxPQ0siO3M6MToiWSI7czoxOToiU0hPV19CQVNLRVRfSEVBREVSUyI7czoxOiJOIjtzOjI4OiJERUxJVkVSWV9GQURFX0VYVFJBX1NFUlZJQ0VTIjtzOjE6Ik4iO3M6MTk6IlNIT1dfQ09VUE9OU19CQVNLRVQiO3M6MToiTiI7czoyMToiU0hPV19DT1VQT05TX0RFTElWRVJZIjtzOjE6Ik4iO3M6MjM6IlNIT1dfQ09VUE9OU19QQVlfU1lTVEVNIjtzOjE6Ik4iO3M6MTk6IlNIT1dfTkVBUkVTVF9QSUNLVVAiO3M6MToiTiI7czoxOToiREVMSVZFUklFU19QRVJfUEFHRSI7aTo4O3M6MjA6IlBBWV9TWVNURU1TX1BFUl9QQUdFIjtpOjg7czoxNjoiUElDS1VQU19QRVJfUEFHRSI7aTo1O3M6MTc6IlNIT1dfTUFQX0lOX1BST1BTIjtzOjE6Ik4iO3M6MTc6IlBST1BTX0ZBREVfTElTVF8xIjthOjA6e31zOjE3OiJQUk9QU19GQURFX0xJU1RfMiI7YTowOnt9czoxMjoiUEFUSF9UT19BVVRIIjtzOjY6Ii9hdXRoLyI7czoyMzoiRElTQUJMRV9CQVNLRVRfUkVESVJFQ1QiO3M6MToiTiI7czoyMzoiUFJPRFVDVF9DT0xVTU5TX1ZJU0lCTEUiO2E6Mzp7aTowO3M6MTU6IlBSRVZJRVdfUElDVFVSRSI7aToxO3M6NToiUFJPUFMiO2k6MjtzOjE0OiJQUklDRV9GT1JNQVRFRCI7fXM6MjI6IlBST0RVQ1RfQ09MVU1OU19ISURERU4iO2E6MDp7fXM6MTI6IlVTRV9ZTV9HT0FMUyI7czoxOiJOIjtzOjI0OiJVU0VfQ1VTVE9NX01BSU5fTUVTU0FHRVMiO3M6MToiTiI7czozMDoiVVNFX0NVU1RPTV9BRERJVElPTkFMX01FU1NBR0VTIjtzOjE6Ik4iO3M6MjU6IlVTRV9DVVNUT01fRVJST1JfTUVTU0FHRVMiO3M6MToiTiI7czoxMDoiQ0FDSEVfVFlQRSI7czoxOiJBIjtzOjE4OiJESVNQTEFZX0lNR19IRUlHSFQiO2k6OTA7czoxMjoiQ1VSUkVOVF9QQUdFIjtzOjIxOiIvcGVyc29uYWwvb3JkZXIvbWFrZS8iO3M6MTU6IlBST0RVQ1RfQ09MVU1OUyI7YTo2OntzOjQ6Ik5BTUUiO3M6MTY6ItCd0LDQt9Cy0LDQvdC40LUiO3M6MTU6IlBSRVZJRVdfUElDVFVSRSI7czoyMjoi0JjQt9C+0LHRgNCw0LbQtdC90LjQtSI7czo1OiJQUk9QUyI7czoxNjoi0KHQstC+0LnRgdGC0LLQsCI7czoxNDoiUFJJQ0VfRk9STUFURUQiO3M6ODoi0KbQtdC90LAiO3M6ODoiUVVBTlRJVFkiO3M6MjA6ItCa0L7Qu9C40YfQtdGB0YLQstC+IjtzOjM6IlNVTSI7czoxMDoi0KHRg9C80LzQsCI7fXM6MTc6In5QQVlfRlJPTV9BQ0NPVU5UIjtzOjE6Ik4iO3M6MTk6In5DT1VOVF9ERUxJVkVSWV9UQVgiO3M6MToiTiI7czozMDoifkNPVU5UX0RJU0NPVU5UXzRfQUxMX1FVQU5USVRZIjtzOjE6Ik4iO3M6Mjc6In5PTkxZX0ZVTExfUEFZX0ZST01fQUNDT1VOVCI7czoxOiJOIjtzOjIwOiJ+QUxMT1dfQVVUT19SRUdJU1RFUiI7czoxOiJZIjtzOjIxOiJ+U0VORF9ORVdfVVNFUl9OT1RJRlkiO3M6MToiWSI7czoxNzoifkRFTElWRVJZX05PX0FKQVgiO3M6MToiTiI7czoxODoiflRFTVBMQVRFX0xPQ0FUSU9OIjtzOjU6InBvcHVwIjtzOjc6In5QUk9QXzEiO3M6MDoiIjtzOjE1OiJ+UEFUSF9UT19CQVNLRVQiO3M6MTU6Ii9wZXJzb25hbC9jYXJ0LyI7czoxNzoiflBBVEhfVE9fUEVSU09OQUwiO3M6MTc6Ii9wZXJzb25hbC9vcmRlcnMvIjtzOjE2OiJ+UEFUSF9UT19QQVlNRU5UIjtzOjI0OiIvcGVyc29uYWwvb3JkZXIvcGF5bWVudC8iO3M6MTQ6In5QQVRIX1RPX09SREVSIjtzOjIxOiIvcGVyc29uYWwvb3JkZXIvbWFrZS8iO3M6MTA6In5TRVRfVElUTEUiO3M6MToiWSI7czoyMDoiflNIT1dfQUNDT1VOVF9OVU1CRVIiO3M6MToiWSI7czoyMDoifkRFTElWRVJZX05PX1NFU1NJT04iO3M6MToiWSI7czoxNjoifkNPTVBBVElCTEVfTU9ERSI7czoxOiJOIjtzOjE2OiJ+QkFTS0VUX1BPU0lUSU9OIjtzOjU6ImFmdGVyIjtzOjIyOiJ+QkFTS0VUX0lNQUdFU19TQ0FMSU5HIjtzOjg6ImFkYXB0aXZlIjtzOjI0OiJ+U0VSVklDRVNfSU1BR0VTX1NDQUxJTkciO3M6ODoiYWRhcHRpdmUiO3M6MTk6In5DT01QT05FTlRfVEVNUExBVEUiO3M6ODoiLmRlZmF1bHQiO3M6MjI6In5ERUxJVkVSWV9UT19QQVlTWVNURU0iO3M6MzoiZDJwIjtzOjE1OiJ+VVNFX1BSRVBBWU1FTlQiO3M6MToiTiI7czoxMjoiflVTRV9QUkVMT0FEIjtzOjE6IlkiO3M6MjA6In5BTExPV19VU0VSX1BST0ZJTEVTIjtzOjE6IlkiO3M6MTg6In5BTExPV19ORVdfUFJPRklMRSI7czoxOiJOIjtzOjE1OiJ+VEVNUExBVEVfVEhFTUUiO3M6NDoic2l0ZSI7czoxODoiflNIT1dfT1JERVJfQlVUVE9OIjtzOjY6ImFsd2F5cyI7czoyNDoiflNIT1dfVE9UQUxfT1JERVJfQlVUVE9OIjtzOjE6Ik4iO3M6Mjc6In5TSE9XX1BBWV9TWVNURU1fTElTVF9OQU1FUyI7czoxOiJZIjtzOjI2OiJ+U0hPV19QQVlfU1lTVEVNX0lORk9fTkFNRSI7czoxOiJZIjtzOjI1OiJ+U0hPV19ERUxJVkVSWV9MSVNUX05BTUVTIjtzOjE6IlkiO3M6MjQ6In5TSE9XX0RFTElWRVJZX0lORk9fTkFNRSI7czoxOiJZIjtzOjI3OiJ+U0hPV19ERUxJVkVSWV9QQVJFTlRfTkFNRVMiO3M6MToiWSI7czoxOToiflNIT1dfU1RPUkVTX0lNQUdFUyI7czoxOiJZIjtzOjE5OiJ+U0tJUF9VU0VMRVNTX0JMT0NLIjtzOjE6IlkiO3M6MjA6In5TSE9XX0JBU0tFVF9IRUFERVJTIjtzOjE6Ik4iO3M6Mjk6In5ERUxJVkVSWV9GQURFX0VYVFJBX1NFUlZJQ0VTIjtzOjE6Ik4iO3M6MjA6In5TSE9XX0NPVVBPTlNfQkFTS0VUIjtzOjE6Ik4iO3M6MjI6In5TSE9XX0NPVVBPTlNfREVMSVZFUlkiO3M6MToiTiI7czoyNDoiflNIT1dfQ09VUE9OU19QQVlfU1lTVEVNIjtzOjE6Ik4iO3M6MjA6In5TSE9XX05FQVJFU1RfUElDS1VQIjtzOjE6Ik4iO3M6MjA6In5ERUxJVkVSSUVTX1BFUl9QQUdFIjtzOjE6IjgiO3M6MjE6In5QQVlfU1lTVEVNU19QRVJfUEFHRSI7czoxOiI4IjtzOjE3OiJ+UElDS1VQU19QRVJfUEFHRSI7czoxOiI1IjtzOjE4OiJ+U0hPV19NQVBfSU5fUFJPUFMiO3M6MToiTiI7czoxODoiflBST1BTX0ZBREVfTElTVF8xIjthOjA6e31zOjE4OiJ+UFJPUFNfRkFERV9MSVNUXzIiO2E6MDp7fXM6MTM6In5QQVRIX1RPX0FVVEgiO3M6NjoiL2F1dGgvIjtzOjI0OiJ+RElTQUJMRV9CQVNLRVRfUkVESVJFQ1QiO3M6MToiTiI7czoyNDoiflBST0RVQ1RfQ09MVU1OU19WSVNJQkxFIjthOjM6e2k6MDtzOjE1OiJQUkVWSUVXX1BJQ1RVUkUiO2k6MTtzOjU6IlBST1BTIjtpOjI7czoxNDoiUFJJQ0VfRk9STUFURUQiO31zOjIzOiJ+UFJPRFVDVF9DT0xVTU5TX0hJRERFTiI7YTowOnt9czoxMzoiflVTRV9ZTV9HT0FMUyI7czoxOiJOIjtzOjI1OiJ+VVNFX0NVU1RPTV9NQUlOX01FU1NBR0VTIjtzOjE6Ik4iO3M6MzE6In5VU0VfQ1VTVE9NX0FERElUSU9OQUxfTUVTU0FHRVMiO3M6MToiTiI7czoyNjoiflVTRV9DVVNUT01fRVJST1JfTUVTU0FHRVMiO3M6MToiTiI7czoxMToifkNBQ0hFX1RZUEUiO3M6MToiQSI7czoxOToifkRJU1BMQVlfSU1HX0hFSUdIVCI7aTo5MDtzOjEzOiJ+Q1VSUkVOVF9QQUdFIjtzOjIxOiIvcGVyc29uYWwvb3JkZXIvbWFrZS8iO3M6MTY6In5QUk9EVUNUX0NPTFVNTlMiO2E6Njp7czo0OiJOQU1FIjtzOjE2OiLQndCw0LfQstCw0L3QuNC1IjtzOjE1OiJQUkVWSUVXX1BJQ1RVUkUiO3M6MjI6ItCY0LfQvtCx0YDQsNC20LXQvdC40LUiO3M6NToiUFJPUFMiO3M6MTY6ItCh0LLQvtC50YHRgtCy0LAiO3M6MTQ6IlBSSUNFX0ZPUk1BVEVEIjtzOjg6ItCm0LXQvdCwIjtzOjg6IlFVQU5USVRZIjtzOjIwOiLQmtC+0LvQuNGH0LXRgdGC0LLQviI7czozOiJTVU0iO3M6MTA6ItCh0YPQvNC80LAiO31zOjIwOiJNRVNTX0FVVEhfQkxPQ0tfTkFNRSI7czoyMjoi0JDQstGC0L7RgNC40LfQsNGG0LjRjyI7czoxOToiTUVTU19SRUdfQkxPQ0tfTkFNRSI7czoyMjoi0KDQtdCz0LjRgdGC0YDQsNGG0LjRjyI7czoyMjoiTUVTU19CQVNLRVRfQkxPQ0tfTkFNRSI7czoyNToi0KHQvtGB0YLQsNCyINC30LDQutCw0LfQsCI7czoyMjoiTUVTU19SRUdJT05fQkxPQ0tfTkFNRSI7czo0Mjoi0KPQutCw0LbQuNGC0LUg0LDQtNGA0LXRgSDQtNC+0YHRgtCw0LLQutC4IjtzOjIzOiJNRVNTX1BBWU1FTlRfQkxPQ0tfTkFNRSI7czo0Mjoi0JLRi9Cx0LXRgNC40YLQtSDRgdC/0L7RgdC+0LEg0L7Qv9C70LDRgtGLIjtzOjI0OiJNRVNTX0RFTElWRVJZX0JMT0NLX05BTUUiO3M6Njc6ItCS0YvQsdC10YDQuNGC0LUg0L/QvtC00YXQvtC00Y/RidC40Lkg0YHQv9C+0YHQvtCxINC00L7RgdGC0LDQstC60LgiO3M6MjE6Ik1FU1NfQlVZRVJfQkxPQ0tfTkFNRSI7czo1Njoi0KPQutCw0LbQuNGC0LUg0LrQvtC90YLQsNC60YLQvdGD0Y4g0LjQvdGE0L7RgNC80LDRhtC40Y4iO3M6OToiTUVTU19CQUNLIjtzOjEwOiLQndCw0LfQsNC0IjtzOjEyOiJNRVNTX0ZVUlRIRVIiO3M6MTA6ItCU0LDQu9C10LUiO3M6OToiTUVTU19FRElUIjtzOjE2OiLQuNC30LzQtdC90LjRgtGMIjtzOjEwOiJNRVNTX09SREVSIjtzOjIyOiLQn9C+0LTRgtCy0LXRgNC00LjRgtGMIjtzOjE0OiJNRVNTX09SREVSX0VORCI7czoyMDoi0L7RhNC+0YDQvNC70LXQvdC40LUiO3M6MTA6Ik1FU1NfUFJJQ0UiO3M6MTg6ItCh0YLQvtC40LzQvtGB0YLRjCI7czoxMToiTUVTU19QRVJJT0QiO3M6MjU6ItCh0YDQvtC6INC00L7RgdGC0LDQstC60LgiO3M6MTM6Ik1FU1NfTkFWX0JBQ0siO3M6MTA6ItCd0LDQt9Cw0LQiO3M6MTY6Ik1FU1NfTkFWX0ZPUldBUkQiO3M6MTI6ItCS0L/QtdGA0LXQtCI7czoyNzoiTUVTU19SRUdJU1RSQVRJT05fUkVGRVJFTkNFIjtzOjIxODoi0JXRgdC70Lgg0LLRiyDQstC/0LXRgNCy0YvQtSDQvdCwINGB0LDQudGC0LUsINC4INGF0L7RgtC40YLQtSDRh9GC0L4g0LHRiyDQvNGLINCy0LDRgSDQv9C+0LzQvdC40LvQuCDQuCDQstGB0LUg0LLQsNGI0Lgg0LfQsNC60LDQt9GLINGB0L7RhdGA0LDQvdGP0LvQuNGB0YwsINC30LDQv9C+0LvQvdC40YLQtSDRgNC10LPQuNGB0YLRgNCw0YbQuNC+0L3QvdGD0Y4g0YTQvtGA0LzRgy4iO3M6MjE6Ik1FU1NfQVVUSF9SRUZFUkVOQ0VfMSI7czoxMjE6ItCh0LjQvNCy0L7Qu9C+0LwgItC30LLQtdC30LTQvtGH0LrQsCIgKCopINC+0YLQvNC10YfQtdC90Ysg0L7QsdGP0LfQsNGC0LXQu9GM0L3Ri9C1INC00LvRjyDQt9Cw0L/QvtC70L3QtdC90LjRjyDQv9C+0LvRjy4iO3M6MjE6Ik1FU1NfQVVUSF9SRUZFUkVOQ0VfMiI7czo5ODoi0J/QvtGB0LvQtSDRgNC10LPQuNGB0YLRgNCw0YbQuNC4INCy0Ysg0L/QvtC70YPRh9C40YLQtSDQuNC90YTQvtGA0LzQsNGG0LjQvtC90L3QvtC1INC/0LjRgdGM0LzQvi4iO3M6MjE6Ik1FU1NfQVVUSF9SRUZFUkVOQ0VfMyI7czo0Nzk6ItCb0LjRh9C90YvQtSDRgdCy0LXQtNC10L3QuNGPLCDQv9C+0LvRg9GH0LXQvdC90YvQtSDQsiDRgNCw0YHQv9C+0YDRj9C20LXQvdC40LUg0LjQvdGC0LXRgNC90LXRgi3QvNCw0LPQsNC30LjQvdCwINC/0YDQuCDRgNC10LPQuNGB0YLRgNCw0YbQuNC4INC40LvQuCDQutCw0LrQuNC8LdC70LjQsdC+INC40L3Ri9C8INC+0LHRgNCw0LfQvtC8LCDQvdC1INCx0YPQtNGD0YIg0LHQtdC3INGA0LDQt9GA0LXRiNC10L3QuNGPINC/0L7Qu9GM0LfQvtCy0LDRgtC10LvQtdC5INC/0LXRgNC10LTQsNCy0LDRgtGM0YHRjyDRgtGA0LXRgtGM0LjQvCDQvtGA0LPQsNC90LjQt9Cw0YbQuNGP0Lwg0Lgg0LvQuNGG0LDQvCDQt9CwINC40YHQutC70Y7Rh9C10L3QuNC10Lwg0YHQuNGC0YPQsNGG0LjQuSwg0LrQvtCz0LTQsCDRjdGC0L7Qs9C+INGC0YDQtdCx0YPQtdGCINC30LDQutC+0L0g0LjQu9C4INGB0YPQtNC10LHQvdC+0LUg0YDQtdGI0LXQvdC40LUuIjtzOjIxOiJNRVNTX0FERElUSU9OQUxfUFJPUFMiO3M6NDU6ItCU0L7Qv9C+0LvQvdC40YLQtdC70YzQvdGL0LUg0YHQstC+0LnRgdGC0LLQsCI7czoxNToiTUVTU19VU0VfQ09VUE9OIjtzOjI5OiLQn9GA0LjQvNC10L3QuNGC0Ywg0LrRg9C/0L7QvSI7czoxMToiTUVTU19DT1VQT04iO3M6MTA6ItCa0YPQv9C+0L0iO3M6MTY6Ik1FU1NfUEVSU09OX1RZUEUiO3M6Mjk6ItCi0LjQvyDQv9C70LDRgtC10LvRjNGJ0LjQutCwIjtzOjE5OiJNRVNTX1NFTEVDVF9QUk9GSUxFIjtzOjMxOiLQktGL0LHQtdGA0LjRgtC1INC/0YDQvtGE0LjQu9GMIjtzOjIxOiJNRVNTX1JFR0lPTl9SRUZFUkVOQ0UiO3M6MjM3OiLQktGL0LHQtdGA0LjRgtC1INGB0LLQvtC5INCz0L7RgNC+0LQg0LIg0YHQv9C40YHQutC1LiDQldGB0LvQuCDQstGLINC90LUg0L3QsNGI0LvQuCDRgdCy0L7QuSDQs9C+0YDQvtC0LCDQstGL0LHQtdGA0LjRgtC1ICLQtNGA0YPQs9C+0LUg0LzQtdGB0YLQvtC/0L7Qu9C+0LbQtdC90LjQtSIsINCwINCz0L7RgNC+0LQg0LLQv9C40YjQuNGC0LUg0LIg0L/QvtC70LUgItCQ0LTRgNC10YEg0LTQvtGB0YLQsNCy0LrQuCIiO3M6MTY6Ik1FU1NfUElDS1VQX0xJU1QiO3M6MzQ6ItCf0YPQvdC60YLRiyDRgdCw0LzQvtCy0YvQstC+0LfQsDoiO3M6MjQ6Ik1FU1NfTkVBUkVTVF9QSUNLVVBfTElTVCI7czozMjoi0JHQu9C40LbQsNC50YjQuNC1INC/0YPQvdC60YLRizoiO3M6MTg6Ik1FU1NfU0VMRUNUX1BJQ0tVUCI7czoxNDoi0JLRi9Cx0YDQsNGC0YwiO3M6MjE6Ik1FU1NfSU5ORVJfUFNfQkFMQU5DRSI7czo2MDoi0J3QsCDQstCw0YjQtdC8INC/0L7Qu9GM0LfQvtCy0LDRgtC10LvRjNGB0LrQvtC8INGB0YfQtdGC0LU6IjtzOjE1OiJNRVNTX09SREVSX0RFU0MiO3M6Mzk6ItCa0L7QvNC80LXQvdGC0LDRgNC40Lgg0Log0LfQsNC60LDQt9GDOiI7czoyNDoiTUVTU19QUkVMT0FEX09SREVSX1RJVExFIjtOO3M6MjU6Ik1FU1NfU1VDQ0VTU19QUkVMT0FEX1RFWFQiO3M6MjYyOiIK0JLRiyDQt9Cw0LrQsNC30YvQstCw0LvQuCDQsiDQvdCw0YjQtdC8INC40L3RgtC10YDQvdC10YIt0LzQsNCz0LDQt9C40L3QtSwg0L/QvtGN0YLQvtC80YMg0LzRiyDQt9Cw0L/QvtC70L3QuNC70Lgg0LLRgdC1INC00LDQvdC90YvQtSDQsNCy0YLQvtC80LDRgtC40YfQtdGB0LrQuC48YnIgLz4K0JXRgdC70Lgg0LLRgdC1INC30LDQv9C+0LvQvdC10L3QviDQstC10YDQvdC+LCDQvdCw0LbQvNC40YLQtSDQutC90L7Qv9C60YMgIiNPUkRFUl9CVVRUT04jIi4KIjtzOjIyOiJNRVNTX0ZBSUxfUFJFTE9BRF9URVhUIjtzOjQ1NToiCtCS0Ysg0LfQsNC60LDQt9GL0LLQsNC70Lgg0LIg0L3QsNGI0LXQvCDQuNC90YLQtdGA0L3QtdGCLdC80LDQs9Cw0LfQuNC90LUsINC/0L7RjdGC0L7QvNGDINC80Ysg0LfQsNC/0L7Qu9C90LjQu9C4INCy0YHQtSDQtNCw0L3QvdGL0LUg0LDQstGC0L7QvNCw0YLQuNGH0LXRgdC60LguPGJyIC8+CtCe0LHRgNCw0YLQuNGC0LUg0LLQvdC40LzQsNC90LjQtSDQvdCwINGA0LDQt9Cy0LXRgNC90YPRgtGL0Lkg0LHQu9C+0Log0YEg0LjQvdGE0L7RgNC80LDRhtC40LXQuSDQviDQt9Cw0LrQsNC30LUuINCX0LTQtdGB0Ywg0LLRiyDQvNC+0LbQtdGC0LUg0LLQvdC10YHRgtC4INC90LXQvtCx0YXQvtC00LjQvNGL0LUg0LjQt9C80LXQvdC10L3QuNGPINC40LvQuCAK0L7RgdGC0LDQstC40YLRjCDQutCw0Log0LXRgdGC0Ywg0Lgg0L3QsNC20LDRgtGMINC60L3QvtC/0LrRgyAiI09SREVSX0JVVFRPTiMiLgoiO3M6MzA6Ik1FU1NfREVMSVZFUllfQ0FMQ19FUlJPUl9USVRMRSI7czo3Nzoi0J3QtSDRg9C00LDQu9C+0YHRjCDRgNCw0YHRgdGH0LjRgtCw0YLRjCDRgdGC0L7QuNC80L7RgdGC0Ywg0LTQvtGB0YLQsNCy0LrQuC4iO3M6Mjk6Ik1FU1NfREVMSVZFUllfQ0FMQ19FUlJPUl9URVhUIjtzOjIyMToi0JLRiyDQvNC+0LbQtdGC0LUg0L/RgNC+0LTQvtC70LbQuNGC0Ywg0L7RhNC+0YDQvNC70LXQvdC40LUg0LfQsNC60LDQt9CwLCDQsCDRh9GD0YLRjCDQv9C+0LfQttC1INC80LXQvdC10LTQttC10YAg0LzQsNCz0LDQt9C40L3QsCDRgdCy0Y/QttC10YLRgdGPINGBINCy0LDQvNC4INC4INGD0YLQvtGH0L3QuNGCINC40L3RhNC+0YDQvNCw0YbQuNGOINC/0L4g0LTQvtGB0YLQsNCy0LrQtS4iO30=.bf6cf61068e7d170c4d87d41a4f0fb72cbbf8d55af0c78110754275a55e7f55e',
            siteID: 's1',
            ajaxUrl: '/bitrix/components/informula/sale.order.ajax/ajax.php',
            templateFolder: '/bitrix/templates/default/components/informula/sale.order.ajax/.default',
            propertyValidation: true,
            showWarnings: true,
            pickUpMap: {
                defaultMapPosition: {
                    lat: 55.76,
                    lon: 37.64,
                    zoom: 7
                },
                secureGeoLocation: false,
                geoLocationMaxTime: 5000,
                minToShowNearestBlock: 3,
                nearestPickUpsToShow: 3
            },
            propertyMap: {
                defaultMapPosition: {
                    lat: 55.76,
                    lon: 37.64,
                    zoom: 7
                }
            },
            deliveryTooltip: {
                2: "Подсказка для самовывоза",
                3: "Курьерка",
                4: "EMS тут"
            },
            orderBlockId: 'bx-soa-order',
            authBlockId: 'bx-soa-auth',
            basketBlockId: 'bx-soa-basket',
            regionBlockId: 'bx-soa-region',
            paySystemBlockId: 'bx-soa-paysystem',
            deliveryBlockId: 'bx-soa-delivery',
            pickUpBlockId: 'bx-soa-pickup',
            propsBlockId: 'bx-soa-properties',
            totalBlockId: 'bx-soa-total'
        });
    </script>

    <script type="text/javascript">
        
        BX.saleOrderAjax.init({'source':'/bitrix/components/informula/sale.order.ajax/get.php','cityTypeId':'5','messages':{'otherLocation':'--- Другое местоположение','moreInfoLocation':'--- При необходимости уточнить местоположение','notFoundPrompt':'<div class=\"-bx-popup-special-prompt\">Местоположение не найдено.<br />Нажмите <a href=\"javascript:void(0)\" class=\"-bx-popup-set-mode-add-loc\">добавить местоположение<\/a>, чтобы мы узнали, куда нам доставить ваш заказ<\/div>'}});
    </script>
    <script>
        (function bx_ymaps_waiter(){
            if (typeof ymaps !== 'undefined')
                ymaps.ready(BX.proxy(BX.Sale.OrderAjaxComponent.initMaps, BX.Sale.OrderAjaxComponent));
            else
                setTimeout(bx_ymaps_waiter, 100);
        })();
            </script>
</div></div>
</div>
</div>
<footer id='footer'>
    <div class='f-top'>
        <div class='container'>
            <div class='row'>
                <div class='col-xs-12'>
                        <div class='footer-nav hidden-xs'>
        <ul>
	
	
		
							<li class=""><a href="/about/">ГК Миландр</a></li>
			
		
	
	
	
	
		
							<li class=""><a href="/dealers/">Дилеры</a></li>
			
		
	
	
	
	
		
							<li class=""><a href="/contacts/">Контакты</a></li>
			
		
	
	


                </ul>
    </div>
                    <div class='footer-phone'>
                        <a href='tel:88001009117'>8 (800) 100-91-17</a>
                    </div>
                    <div class='footer-feedback hidden-xs'>
                        <a class='btn btn-white2 rc_callback' href='javascript:void(0);'>Написать нам</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class='f-bottom'>
        <div class='container'>
            <div class='row'>
                <div class='col-xs-12'>
                    <div class='footer-copy'>
                        <a href='/'>milur.ru</a>
                        <span class='copyright'>производство и продажа счетчиков электроэнергии</span>
                    </div>
                    <div class='footer-info hidden-xs'>
                                            </div>
                    <div class='go-top hidden-xs js-gotop'>
                        <a href='javascript:void(0);'>Наверх</a>
                    </div>
                    <div class="footer-message">
                      <div class="footer-message-inner">
                        Данный интернет-сайт и материалы, размещенные на нем, носят исключительно информационный характер и ни при каких условиях не являются публичной офертой, определяемой положениями статьи 437 Гражданского кодекса РФ.
                      </div>
                        <div class="policy_link"><a href="/support/kak-kupit-na-saite/#policy">Политика конфиденциальности</a></div>
                        <div class="paysystems">
                            <div class="logo sber"></div>
                            <div class="logo mir"></div>
                            <div class="logo visa"></div>
                            <div class="logo master"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
    (function(){ var widget_id = 'iuUMzMoDeg';var d=document;var w=window;function l(){
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
<!-- {/literal} END JIVOSITE CODE -->
</body>
</html>