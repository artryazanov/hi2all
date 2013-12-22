<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="language" content="ru" />
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <meta name="keywords" content="<?= !empty($_REQUEST['q']) ? $_REQUEST['q'] : '' ?> поиск, фильмы, игры, музыка, программы, книги, скачать, торрент, ссылка, смотреть, онлайн" />
    <meta name="description" content="<?= !empty($_REQUEST['q']) ? $_REQUEST['q'] : '' ?> Поиск фильмов, игр, музыки, программ, книг и ещё много чего интересного. Скачать торрент, смотреть онлайн, скачать по ссылке." />
    <link rel="stylesheet" type="text/css" href="/css/style.css" media="all" />
    <script type="text/javascript" src="/js/jquery-1.6.2.min.js"></script>
    <script type="text/javascript" src="/js/jquery.reject.js"></script>
    <script type="text/javascript" src="/js/hi2all.js"></script>
    <title><?= !empty($_REQUEST['q']) ? $_REQUEST['q'] : '' ?> - результаты поиска | Hi2All.ru</title>
</head>

<body id="bodyResults">

<div id="search">
	<div class="content">
		<form id="cse-search-box" action="/search" method="get">
			<a id="headerLogo" href="/"><img src="/css/blank.gif" /></a>
			<div class="form">
                <div class="inputs">
                    <input type="hidden" name="cx" value="partner-pub-3763729898990541:2112609846" />
                    <input type="hidden" name="cof" value="FORID:10" />
                    <input type="hidden" name="ie" value="UTF-8" />
                    <input type="text" name="q" size="55" />
					<input type="submit" value="Поиск" />
				</div>
			</div>
		</form>
        <script type="text/javascript" src="http://www.google.ru/coop/cse/brand?form=cse-search-box&amp;lang=ru"></script>

		<h1><?= !empty($_REQUEST['q']) ? $_REQUEST['q'] : '' ?> - результаты поиска</h1>

        <div id="cse-search-results" class="loader"></div>
        <script type="text/javascript">
            var googleSearchIframeName = "cse-search-results";
            var googleSearchFormName = "cse-search-box";
            var googleSearchFrameWidth = 800;
            var googleSearchDomain = "www.google.ru";
            var googleSearchPath = "/cse";
        </script>
        <script type="text/javascript" src="http://www.google.com/afsonline/show_afs_search.js"></script>

	</div>
</div>

<div id="footer">
	<div class="content">
		<a id="footerLogo" href="/"><img src="/css/blank.gif" /></a>
		<div id="copyrights">2005-2013 © <a href="/">Hi2All.ru</a> All rights reserved</div>
	</div>
</div>

<? include 'counters.inc' ?>

</body>

<? include 'body-end.inc' ?>

</html>