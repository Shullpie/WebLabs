<?php session_start();
require_once("logic.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <title>Courses</title>
</head>
<?php
$url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
?>

<body>
    <header>
        <? header('Content-Type: text/html; charset="utf-8"'); ?>
        <div class="container-fluid">
            <div class="row" style="padding-top: 1%">
                <div class="col-md-auto">
                    <img src='https://about.coursera.org/images/logos/coursera-logo-full-rgb.png' width="130px">
                </div>
            </div>
        </div>
    </header>
    <section class="grad" style="padding-top: 5%;">
        <div class="container">
        <?php
            if ($url =='http://lr4/text.php?preset=1' ) {
                $text ='<body class="mediawiki ltr sitedir-ltr mw-hide-empty-elt ns-0 ns-subject mw-editable page-Киноринхи rootpage-Киноринхи skin-vector action-view skin-vector-legacy"><div id="mw-page-base" class="noprint"></div>
                <div id="mw-head-base" class="noprint"></div>
                <div id="content" class="mw-body" role="main">
                    <a id="top"></a>
                    <div id="siteNotice"><!-- CentralNotice --></div>
                    <div class="mw-indicators">
                    <div id="mw-indicator-fa" class="mw-indicator"><a href="/wiki/%D0%92%D0%B8%D0%BA%D0%B8%D0%BF%D0%B5%D0%B4%D0%B8%D1%8F:%D0%98%D0%B7%D0%B1%D1%80%D0%B0%D0%BD%D0%BD%D1%8B%D0%B5_%D1%81%D1%82%D0%B0%D1%82%D1%8C%D0%B8" title="Эта статья входит в число избранных"><img alt="Эта статья входит в число избранных" src="//upload.wikimedia.org/wikipedia/commons/thumb/8/8b/Small_Skew_Star_SVG.svg/14px-Small_Skew_Star_SVG.svg.png" decoding="async" width="14" height="15" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/8/8b/Small_Skew_Star_SVG.svg/21px-Small_Skew_Star_SVG.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/8/8b/Small_Skew_Star_SVG.svg/28px-Small_Skew_Star_SVG.svg.png 2x" data-file-width="14" data-file-height="15" /></a></div>
                    </div>
                    <h1 id="firstHeading" class="firstHeading" >Киноринхи</h1>
                    <div id="bodyContent" class="vector-body">
                        <div id="siteSub" class="noprint">Материал из Википедии — свободной энциклопедии</div>
                        <div id="contentSub"><div id="mw-fr-revisiontag" class="flaggedrevs_short flaggedrevs_stable_synced plainlinks noprint"><div class="flaggedrevs_short_basic"><span aria-disabled="false" title="Правки этой страницы требуют проверки." class="flaggedrevs-icon oo-ui-widget oo-ui-widget-enabled oo-ui-iconElement-icon oo-ui-icon-articleSearch oo-ui-iconElement oo-ui-labelElement-invisible oo-ui-iconWidget"></span><span aria-disabled="false" title="Это отпатрулированная версия страницы" class="flaggedrevs-icon oo-ui-widget oo-ui-widget-enabled oo-ui-iconElement-icon oo-ui-icon-eye oo-ui-iconElement oo-ui-labelElement-invisible oo-ui-iconWidget"></span><span id="mw-fr-revisiontoggle" aria-disabled="false" title="показать/скрыть подробности" class="fr-toggle-arrow oo-ui-widget oo-ui-widget-enabled oo-ui-indicatorElement-indicator oo-ui-indicator-down oo-ui-indicatorElement oo-ui-labelElement-invisible oo-ui-indicatorWidget"></span></div>
                <div id="mw-fr-revisiondetails-wrapper" style="position:relative;"><div id="mw-fr-revisiondetails" class="flaggedrevs_short_details" style="display:none">Это <a href="/wiki/%D0%92%D0%B8%D0%BA%D0%B8%D0%BF%D0%B5%D0%B4%D0%B8%D1%8F:%D0%9F%D0%B0%D1%82%D1%80%D1%83%D0%BB%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5" title="Википедия:Патрулирование">стабильная версия</a>, <a class="external text" href="https://ru.wikipedia.org/w/index.php?title=%D0%A1%D0%BB%D1%83%D0%B6%D0%B5%D0%B1%D0%BD%D0%B0%D1%8F:%D0%96%D1%83%D1%80%D0%BD%D0%B0%D0%BB%D1%8B&type=review&page=%D0%9A%D0%B8%D0%BD%D0%BE%D1%80%D0%B8%D0%BD%D1%85%D0%B8">отпатрулированная</a> <i>7 июля 2021</i>.</div>
                </div>
                </div>
                </div>
                        <div id="contentSub2"></div>
                        
                        <div id="jump-to-nav"></div>
                        <a class="mw-jump-link" href="#mw-head">Перейти к навигации</a>
                        <a class="mw-jump-link" href="#searchInput">Перейти к поиску</a>
                        <div id="mw-content-text" class="mw-body-content mw-content-ltr" lang="ru" dir="ltr"><div class="mw-parser-output"><style data-mw-deduplicate="TemplateStyles:r115405585">.mw-parser-output .ts-Taxonomy-rang-row{display:table;text-align:left;width:100%;border-spacing:0}.mw-parser-output .ts-Taxonomy-rang-label{display:table-cell;text-align:right;vertical-align:top;padding-right:0.3em!important;white-space:nowrap}.mw-parser-output .ts-Taxonomy-rang-name{display:table-cell;text-align:left;vertical-align:bottom}.mw-parser-output .ts-Taxonomy-error{color:Dimgray;background-color:Gainsboro;font-size:85%}@media(min-width:720px){.mw-parser-output .ts-Taxonomy-rang-label{width:40%!important}}</style>
                <table class="infobox" style="width: 22em; text-align: left; font-size: 88%; line-height: 1.5em; width:275px;" data-name="Таксон"><tbody><tr><th colspan="2" scope="colgroup" class="infobox-above" style="background:#ffc3cd;font-size:130%;">Киноринхи</th></tr><tr><td colspan="2" class="infobox-image" style=""> <span data-wikidata-property-id="P18" class="no-wikidata"><a href="/wiki/%D0%A4%D0%B0%D0%B9%D0%BB:Echinoderes_komatsui.jpg" class="image" title="Внешний вид Echinoderes komatsui"><img alt="Внешний вид Echinoderes komatsui" src="//upload.wikimedia.org/wikipedia/commons/thumb/c/cd/Echinoderes_komatsui.jpg/190px-Echinoderes_komatsui.jpg" decoding="async" width="190" height="400" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/c/cd/Echinoderes_komatsui.jpg/286px-Echinoderes_komatsui.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/c/cd/Echinoderes_komatsui.jpg/381px-Echinoderes_komatsui.jpg 2x" data-file-width="911" data-file-height="1911" /></a><br /><span data-wikidata-qualifier-id="P2096" class="media-caption" style="display:block">Внешний вид <i><a href="/w/index.php?title=Echinoderes_komatsui&action=edit&redlink=1" class="new" title="Echinoderes komatsui (страница отсутствует)">Echinoderes komatsui</a></i></span></span> </td></tr>
                <tr>
                <th colspan="2" scope="colgroup" class="infobox-header" style="background:#ffd1d9;font-size:110%;"><a href="/wiki/%D0%91%D0%B8%D0%BE%D0%BB%D0%BE%D0%B3%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B0%D1%8F_%D1%81%D0%B8%D1%81%D1%82%D0%B5%D0%BC%D0%B0%D1%82%D0%B8%D0%BA%D0%B0" title="Биологическая систематика">Научная классификация</a></th>
                </tr>
                <tr>
                <td colspan="2" class="plainlist" style="text-align:center;font-size:110%;">
                <div class="mw-collapsible mw-collapsed" style="font-size:95%; background-color: transparent; border:0;"><div class="nomobile" style="background-color: transparent; border:0;"><small style="display:block;"><b>промежуточные ранги</b></small></div><div class="ts-Taxonomy-rang-row"><div class="ts-Taxonomy-rang-label" style="color:inherit">Домен:</div><div class="ts-Taxonomy-rang-name"><a href="/wiki/Eukaryota" class="mw-redirect" title="Eukaryota">Эукариоты</a></div></div><div class="ts-Taxonomy-rang-row"><div class="ts-Taxonomy-rang-label" style="color:inherit">Царство:</div><div class="ts-Taxonomy-rang-name"><a href="/wiki/Animalia" class="mw-redirect" title="Animalia">Животные</a></div></div><div class="ts-Taxonomy-rang-row mw-collapsible-content"><div class="ts-Taxonomy-rang-label" style="color:#007878">Подцарство:</div><div class="ts-Taxonomy-rang-name"><a href="/wiki/Eumetazoa" class="mw-redirect" title="Eumetazoa">Эуметазои</a></div></div><div class="ts-Taxonomy-rang-row mw-collapsible-content"><div class="ts-Taxonomy-rang-label" style="color:#6F6F00">Без ранга:</div><div class="ts-Taxonomy-rang-name"><a href="/wiki/Bilateria" class="mw-redirect" title="Bilateria">Двусторонне-симметричные</a></div></div><div class="ts-Taxonomy-rang-row mw-collapsible-content"><div class="ts-Taxonomy-rang-label" style="color:#6F6F00">Без ранга:</div><div class="ts-Taxonomy-rang-name"><a href="/wiki/Protostomia" class="mw-redirect" title="Protostomia">Первичноротые</a></div></div><div class="ts-Taxonomy-rang-row mw-collapsible-content"><div class="ts-Taxonomy-rang-label" style="color:#6F6F00">Без ранга:</div><div class="ts-Taxonomy-rang-name"><a href="/wiki/Ecdysozoa" class="mw-redirect" title="Ecdysozoa">Линяющие</a></div></div><div class="ts-Taxonomy-rang-row mw-collapsible-content"><div class="ts-Taxonomy-rang-label" style="color:#6F6F00">Клада:</div><div class="ts-Taxonomy-rang-name"><a href="/wiki/Scalidophora" title="Scalidophora">Scalidophora</a></div></div><div class="ts-Taxonomy-rang-row"><div class="ts-Taxonomy-rang-label" style="color:inherit">Класс:</div><div class="ts-Taxonomy-rang-name"><b>Киноринхи</b></div></div></div></td>
                </tr>
                <tr>
                <th colspan="2" scope="colgroup" class="infobox-header" style="background:#ffd1d9;font-size:110%;">Международное научное название</th>
                </tr>
                <tr>
                <td colspan="2" class="plainlist" style="text-align:center;font-size:110%;">
                Kinorhyncha <span style="font-variant:small-caps;"><a href="/wiki/%D0%A0%D0%B5%D0%B9%D0%BD%D0%B3%D0%B0%D1%80%D0%B4,_%D0%92%D0%BB%D0%B0%D0%B4%D0%B8%D0%BC%D0%B8%D1%80_%D0%92%D0%B0%D1%81%D0%B8%D0%BB%D1%8C%D0%B5%D0%B2%D0%B8%D1%87" title="Рейнгард, Владимир Васильевич">Reinhard</a>, 1881<sup id="cite_ref-1" class="reference"><a href="#cite_note-1">[1]</a></sup></span></td>
                </tr>
                <tr>
                <th colspan="2" scope="colgroup" class="infobox-header" style="background:#ffd1d9;font-size:110%;">Отряды</th>
                </tr>
                <tr>
                <td colspan="2" class="noplainlist" style="text-align:center;font-size:110%;">
                <div align="left">
                <ul><li><a href="/w/index.php?title=Cyclorhagida&action=edit&redlink=1" class="new" title="Cyclorhagida (страница отсутствует)">Cyclorhagida</a></li>
                <li><a href="/w/index.php?title=Homalorhagida&action=edit&redlink=1" class="new" title="Homalorhagida (страница отсутствует)">Homalorhagida</a></li></ul></div></td>
                </tr><tr><td colspan="2" class="infobox-below" style="background:#ffe0e5; font-size:90%; line-height:140%;;"><table role="presentation" width="100%" class="plainlinks" cellspacing="0" cellpadding="4"><tbody><tr><td style="vertical-align:middle"><a href="https://species.wikimedia.org/wiki/Kinorhyncha?uselang=ru"><img alt="Логотип Викивидов" src="//upload.wikimedia.org/wikipedia/commons/thumb/d/df/Wikispecies-logo.svg/17px-Wikispecies-logo.svg.png" decoding="async" width="17" height="20" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/df/Wikispecies-logo.svg/26px-Wikispecies-logo.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/df/Wikispecies-logo.svg/34px-Wikispecies-logo.svg.png 2x" data-file-width="941" data-file-height="1103" /></a><br /><a class="external text" href="https://species.wikimedia.org/wiki/Kinorhyncha?uselang=ru">Систематика<br />в Викивидах</a></td><td style="vertical-align:middle"><a href="https://commons.wikimedia.org/wiki/Category:Kinorhyncha"><img alt="Логотип Викисклада" src="//upload.wikimedia.org/wikipedia/commons/thumb/4/4a/Commons-logo.svg/15px-Commons-logo.svg.png" decoding="async" width="15" height="20" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/4/4a/Commons-logo.svg/23px-Commons-logo.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/4a/Commons-logo.svg/30px-Commons-logo.svg.png 2x" data-file-width="1024" data-file-height="1376" /></a><br /><a class="external text" href="https://commons.wikimedia.org/wiki/Category:Kinorhyncha">Изображения<br />на Викискладе</a></td><td><table width="100%" cellspacing="0" cellpadding="0" style="background:#ffe0e5; text-align:left">
                <tbody><tr><th scope="row" style="font-weight:normal; text-align:right" width="40%"><a href="/wiki/%D0%9E%D0%B1%D1%8A%D0%B5%D0%B4%D0%B8%D0%BD%D1%91%D0%BD%D0%BD%D0%B0%D1%8F_%D1%82%D0%B0%D0%BA%D1%81%D0%BE%D0%BD%D0%BE%D0%BC%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B0%D1%8F_%D0%B8%D0%BD%D1%84%D0%BE%D1%80%D0%BC%D0%B0%D1%86%D0%B8%D0%BE%D0%BD%D0%BD%D0%B0%D1%8F_%D1%81%D0%BB%D1%83%D0%B6%D0%B1%D0%B0" title="Объединённая таксономическая информационная служба">ITIS</a>  </th><td class="plainlinks" style="vertical-align:middle"><span data-wikidata-claim-id="Q5182$037FB4C9-3F03-4B09-BE02-A5CCB73F962B" class="wikidata-claim" data-wikidata-property-id="P815"><span class="wikidata-snak wikidata-main-snak"><a rel="nofollow" class="external text" href="https://www.itis.gov/servlet/SingleRpt/SingleRpt?search_topic=TSN&search_value=59467">59467</a></span></span></td></tr><tr><th scope="row" style="font-weight:normal; text-align:right" width="40%"><a href="/wiki/%D0%9D%D0%B0%D1%86%D0%B8%D0%BE%D0%BD%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D0%B9_%D1%86%D0%B5%D0%BD%D1%82%D1%80_%D0%B1%D0%B8%D0%BE%D1%82%D0%B5%D1%85%D0%BD%D0%BE%D0%BB%D0%BE%D0%B3%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%BE%D0%B9_%D0%B8%D0%BD%D1%84%D0%BE%D1%80%D0%BC%D0%B0%D1%86%D0%B8%D0%B8" title="Национальный центр биотехнологической информации">NCBI</a>  </th><td class="plainlinks" style="vertical-align:middle"><span data-wikidata-claim-id="Q5182$B851DF82-7F58-416B-ADEC-B3BACE9D9DDE" class="wikidata-claim" data-wikidata-property-id="P685"><span class="wikidata-snak wikidata-main-snak"><a rel="nofollow" class="external text" href="https://www.ncbi.nlm.nih.gov/Taxonomy/Browser/wwwtax.cgi?mode=Info&id=51516">51516</a></span></span></td></tr><tr><th scope="row" style="font-weight:normal; text-align:right" width="40%"><a href="/wiki/%D0%AD%D0%BD%D1%86%D0%B8%D0%BA%D0%BB%D0%BE%D0%BF%D0%B5%D0%B4%D0%B8%D1%8F_%D0%B6%D0%B8%D0%B7%D0%BD%D0%B8" title="Энциклопедия жизни">EOL</a>  </th><td class="plainlinks" style="vertical-align:middle"><span data-wikidata-claim-id="Q5182$A1CA9FB4-B727-49EF-B4DC-14DE372B6BB7" class="wikidata-claim" data-wikidata-property-id="P830"><span class="wikidata-snak wikidata-main-snak"><a rel="nofollow" class="external text" href="https://eol.org/pages/1526">1526</a></span></span></td></tr><tr><th scope="row" style="font-weight:normal; text-align:right" width="40%"><a href="/wiki/Fossilworks" title="Fossilworks">FW</a>  </th><td class="plainlinks" style="vertical-align:middle"><span data-wikidata-claim-id="Q5182$0d8d46fe-40aa-06fa-4d34-d47f04f40cef" class="wikidata-claim" data-wikidata-property-id="P842"><span class="wikidata-snak wikidata-main-snak"><a rel="nofollow" class="external text" href="http://fossilworks.org/bridge.pl?a=taxonInfo&taxon_no=67128">67128</a></span></span></td></tr></tbody></table></td></tr></tbody></table></td></tr>
                </tbody></table>
                <p><b>Кинори́нхи</b><sup id="cite_ref-BRE_2-0" class="reference"><a href="#cite_note-BRE-2">[2]</a></sup> <span class="lang">(<a href="/wiki/%D0%9B%D0%B0%D1%82%D0%B8%D0%BD%D1%81%D0%BA%D0%B8%D0%B9_%D1%8F%D0%B7%D1%8B%D0%BA" title="Латинский язык">лат.</a> <span dir="auto" lang="la">Kinorhyncha</span>, от <a href="/wiki/%D0%94%D1%80%D0%B5%D0%B2%D0%BD%D0%B5%D0%B3%D1%80%D0%B5%D1%87%D0%B5%D1%81%D0%BA%D0%B8%D0%B9_%D1%8F%D0%B7%D1%8B%D0%BA" title="Древнегреческий язык">др.-греч.</a> <span lang="grc"><span style="font-family: palatino linotype, new athena unicode, athena, gentium, code2000, serif; font-size: 105%;">κινέω</span></span> — двигаю и <span lang="grc"><span style="font-family: palatino linotype, new athena unicode, athena, gentium, code2000, serif; font-size: 105%;">ῥύγχος</span></span> — рыло)</span> — <a href="/wiki/%D0%9A%D0%BB%D0%B0%D1%81%D1%81_(%D0%B1%D0%B8%D0%BE%D0%BB%D0%BE%D0%B3%D0%B8%D1%8F)" title="Класс (биология)">класс</a> <a href="/wiki/%D0%91%D0%B5%D1%81%D0%BF%D0%BE%D0%B7%D0%B2%D0%BE%D0%BD%D0%BE%D1%87%D0%BD%D1%8B%D0%B5" title="Беспозвоночные">беспозвоночных животных</a> из группы <a href="/wiki/Scalidophora" title="Scalidophora">Scalidophora</a> (некоторые исследователи рассматривают его как самостоятельный <a href="/wiki/%D0%A2%D0%B8%D0%BF_(%D0%B1%D0%B8%D0%BE%D0%BB%D0%BE%D0%B3%D0%B8%D1%8F)" title="Тип (биология)">тип</a>). Киноринхи обитают в поверхностном слое илистого грунта или между песчинками в морях по всему миру. Отличительной анатомической чертой киноринх является <a href="/wiki/%D0%9C%D0%B5%D1%82%D0%B0%D0%BC%D0%B5%D1%80%D0%B8%D1%8F_(%D0%B1%D0%B8%D0%BE%D0%BB%D0%BE%D0%B3%D0%B8%D1%8F)" title="Метамерия (биология)">метамерия</a> в строении кутикулы, <a href="/wiki/%D0%9C%D1%83%D1%81%D0%BA%D1%83%D0%BB%D0%B0%D1%82%D1%83%D1%80%D0%B0" class="mw-redirect" title="Мускулатура">мускулатуры</a>, <a href="/wiki/%D0%AD%D0%BF%D0%B8%D0%B4%D0%B5%D1%80%D0%BC%D0%B8%D1%81" title="Эпидермис">эпидермальных</a> <a href="/wiki/%D0%96%D0%B5%D0%BB%D0%B5%D0%B7%D0%B0" title="Железа">желёз</a> и <a href="/wiki/%D0%9D%D0%B5%D1%80%D0%B2%D0%BD%D0%B0%D1%8F_%D1%81%D0%B8%D1%81%D1%82%D0%B5%D0%BC%D0%B0" title="Нервная система">нервной системы</a>. Тело разделено на 13 сегментов, первым из которых является хобот (интроверт). Они не имеют конечностей и двигаются благодаря втягиванию хобота. В составе хобота выделяют два подотдела: ротовой конус и центральную часть. У киноринх ротовой конус выдвигается, а не выворачивается, как у <a href="/wiki/%D0%9F%D1%80%D0%B8%D0%B0%D0%BF%D1%83%D0%BB%D0%B8%D0%B4%D1%8B" title="Приапулиды">приапулид</a>. Киноринхи раздельнополы, хорошо выражен <a href="/wiki/%D0%9F%D0%BE%D0%BB%D0%BE%D0%B2%D0%BE%D0%B9_%D0%B4%D0%B8%D0%BC%D0%BE%D1%80%D1%84%D0%B8%D0%B7%D0%BC" title="Половой диморфизм">половой диморфизм</a>. Детали <a href="/wiki/%D0%AD%D0%BC%D0%B1%D1%80%D0%B8%D0%BE%D0%BD%D0%B0%D0%BB%D1%8C%D0%BD%D0%BE%D0%B5_%D1%80%D0%B0%D0%B7%D0%B2%D0%B8%D1%82%D0%B8%D0%B5" class="mw-redirect" title="Эмбриональное развитие">эмбрионального развития</a> киноринх неизвестны. Вылупившиеся черви похожи на взрослых особей и сразу же приступают к питанию.
                </p><p>Первые представители группы были описаны в 1841 году. В настоящее время класс киноринх подразделяется на два отряда: Cyclorhagida и Homalorhagida. По состоянию на 2015 год известно около 220 <a href="/wiki/%D0%91%D0%B8%D0%BE%D0%BB%D0%BE%D0%B3%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B8%D0%B9_%D0%B2%D0%B8%D0%B4" title="Биологический вид">видов</a> киноринх, и число описанных видов постоянно растёт<sup id="cite_ref-3" class="reference"><a href="#cite_note-3">[3]</a></sup>. В 2016 году был <a href="/wiki/%D0%A1%D0%B5%D0%BA%D0%B2%D0%B5%D0%BD%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5" title="Секвенирование">секвенирован</a> <a href="/wiki/%D0%9C%D0%B8%D1%82%D0%BE%D1%85%D0%BE%D0%BD%D0%B4%D1%80%D0%B8%D0%B0%D0%BB%D1%8C%D0%BD%D0%B0%D1%8F_%D0%94%D0%9D%D0%9A" title="Митохондриальная ДНК">митохондриальный</a> <a href="/wiki/%D0%93%D0%B5%D0%BD%D0%BE%D0%BC" title="Геном">геном</a> двух видов киноринх — <i>Echinoderes svetlanae</i> и <i>Pycnophyes kielensis</i>.
                </p>
                <div id="toc" class="toc" role="navigation" aria-labelledby="mw-toc-heading"><input type="checkbox" role="button" id="toctogglecheckbox" class="toctogglecheckbox" style="display:none" /><div class="toctitle" lang="ru" dir="ltr"><h2 id="mw-toc-heading">Содержание</h2><span class="toctogglespan"><label class="toctogglelabel" for="toctogglecheckbox"></label></span></div>
                <ul>
                <li class="toclevel-1 tocsection-1"><a href="#Анатомия_и_физиология"><span class="tocnumber">1</span> <span class="toctext">Анатомия и физиология</span></a>
                <ul>
                <li class="toclevel-2 tocsection-2"><a href="#Общий_план"><span class="tocnumber">1.1</span> <span class="toctext">Общий план</span></a></li>
                <li class="toclevel-2 tocsection-3"><a href="#Покровы"><span class="tocnumber">1.2</span> <span class="toctext">Покровы</span></a></li>
                <li class="toclevel-2 tocsection-4"><a href="#Мускулатура"><span class="tocnumber">1.3</span> <span class="toctext">Мускулатура</span></a></li>
                <li class="toclevel-2 tocsection-5"><a href="#Нервная_система"><span class="tocnumber">1.4</span> <span class="toctext">Нервная система</span></a></li>
                <li class="toclevel-2 tocsection-6"><a href="#Органы_чувств"><span class="tocnumber">1.5</span> <span class="toctext">Органы чувств</span></a></li>
                <li class="toclevel-2 tocsection-7"><a href="#Пищеварительная_система"><span class="tocnumber">1.6</span> <span class="toctext">Пищеварительная система</span></a></li>
                <li class="toclevel-2 tocsection-8"><a href="#Полость_тела"><span class="tocnumber">1.7</span> <span class="toctext">Полость тела</span></a></li>
                <li class="toclevel-2 tocsection-9"><a href="#Выделительная_система"><span class="tocnumber">1.8</span> <span class="toctext">Выделительная система</span></a></li>
                <li class="toclevel-2 tocsection-10"><a href="#Половая_система"><span class="tocnumber">1.9</span> <span class="toctext">Половая система</span></a></li>
                </ul>
                </li>
                <li class="toclevel-1 tocsection-11"><a href="#Развитие"><span class="tocnumber">2</span> <span class="toctext">Развитие</span></a></li>
                <li class="toclevel-1 tocsection-12"><a href="#Распространение_и_экология"><span class="tocnumber">3</span> <span class="toctext">Распространение и экология</span></a></li>
                <li class="toclevel-1 tocsection-13"><a href="#Классификация_и_филогения"><span class="tocnumber">4</span> <span class="toctext">Классификация и филогения</span></a></li>
                <li class="toclevel-1 tocsection-14"><a href="#История_изучения"><span class="tocnumber">5</span> <span class="toctext">История изучения</span></a></li>
                <li class="toclevel-1 tocsection-15"><a href="#Примечания"><span class="tocnumber">6</span> <span class="toctext">Примечания</span></a></li>
                <li class="toclevel-1 tocsection-16"><a href="#Литература"><span class="tocnumber">7</span> <span class="toctext">Литература</span></a></li>
                </ul>
                </div>
                
                <h2><span id=".D0.90.D0.BD.D0.B0.D1.82.D0.BE.D0.BC.D0.B8.D1.8F_.D0.B8_.D1.84.D0.B8.D0.B7.D0.B8.D0.BE.D0.BB.D0.BE.D0.B3.D0.B8.D1.8F"></span><span class="mw-headline" id="Анатомия_и_физиология">Анатомия и физиология</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=%D0%9A%D0%B8%D0%BD%D0%BE%D1%80%D0%B8%D0%BD%D1%85%D0%B8&veaction=edit&section=1" class="mw-editsection-visualeditor" title="Редактировать раздел «Анатомия и физиология»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=%D0%9A%D0%B8%D0%BD%D0%BE%D1%80%D0%B8%D0%BD%D1%85%D0%B8&action=edit&section=1" title="Редактировать раздел «Анатомия и физиология»">править код</a><span class="mw-editsection-bracket">]</span></span></h2>
                <h3><span id=".D0.9E.D0.B1.D1.89.D0.B8.D0.B9_.D0.BF.D0.BB.D0.B0.D0.BD"></span><span class="mw-headline" id="Общий_план">Общий план</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=%D0%9A%D0%B8%D0%BD%D0%BE%D1%80%D0%B8%D0%BD%D1%85%D0%B8&veaction=edit&section=2" class="mw-editsection-visualeditor" title="Редактировать раздел «Общий план»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=%D0%9A%D0%B8%D0%BD%D0%BE%D1%80%D0%B8%D0%BD%D1%85%D0%B8&action=edit&section=2" title="Редактировать раздел «Общий план»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
                <div class="thumb tleft"><div class="thumbinner" style="width:222px;"><a href="/wiki/%D0%A4%D0%B0%D0%B9%D0%BB:Kinorhyncha.svg" class="image"><img alt="" src="//upload.wikimedia.org/wikipedia/commons/thumb/4/42/Kinorhyncha.svg/220px-Kinorhyncha.svg.png" decoding="async" width="220" height="340" class="thumbimage" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/4/42/Kinorhyncha.svg/330px-Kinorhyncha.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/42/Kinorhyncha.svg/440px-Kinorhyncha.svg.png 2x" data-file-width="2000" data-file-height="3092" /></a>  <div class="thumbcaption"><div class="magnify"><a href="/wiki/%D0%A4%D0%B0%D0%B9%D0%BB:Kinorhyncha.svg" class="internal" title="Увеличить"></a></div>Схема сегментации тела киноринх</div></div></div>
                <p>Киноринхи — червеобразные <a href="/wiki/%D0%94%D0%B2%D1%83%D1%81%D1%82%D0%BE%D1%80%D0%BE%D0%BD%D0%BD%D0%B5-%D1%81%D0%B8%D0%BC%D0%BC%D0%B5%D1%82%D1%80%D0%B8%D1%87%D0%BD%D1%8B%D0%B5" title="Двусторонне-симметричные">двусторонне-симметричные</a> <a href="/wiki/%D0%96%D0%B8%D0%B2%D0%BE%D1%82%D0%BD%D1%8B%D0%B5" title="Животные">животные</a> длиной от 100 <a href="/wiki/%D0%9C%D0%BA%D0%BC" class="mw-redirect" title="Мкм">мкм</a> до 1,03 <a href="/wiki/%D0%9C%D0%BC" class="mw-redirect" title="Мм">мм</a><sup id="cite_ref-r2002_4-0" class="reference"><a href="#cite_note-r2002-4">[4]</a></sup>. Самый маленький представитель, <i>Cephalorhyncha liticola</i>, достигает от 127 до 210 мкм в длину, а самый крупный, <i>Pycnophyes greenlandicus</i>, может достигать 1,035 мм<sup id="cite_ref-_401f68fb6d487ecb_5-0" class="reference"><a href="#cite_note-_401f68fb6d487ecb-5">[5]</a></sup>. Тело подразделяется на два отдела: хобот (интроверт) и туловище. Туловище в поперечном сечении может быть округлым, овальным, треугольным<sup id="cite_ref-r2002_4-1" class="reference"><a href="#cite_note-r2002-4">[4]</a></sup>. При помощи особых мышц хобот может втягиваться в туловище. Выворачивание хобота происходит за счёт давления, создаваемого при сжатии туловища в спинно-брюшном направлении. Тело в общей сложности состоит из 13 сегментов. Первым сегментом считают хобот, вторым — шейный отдел, который представляет собой серию пластинок, прикрывающих хобот, втягивающийся в тело. Форма и число пластинок шейного отдела служат важными признаками, использующимися в <a href="/wiki/%D0%91%D0%B8%D0%BE%D0%BB%D0%BE%D0%B3%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B0%D1%8F_%D0%BA%D0%BB%D0%B0%D1%81%D1%81%D0%B8%D1%84%D0%B8%D0%BA%D0%B0%D1%86%D0%B8%D1%8F" class="mw-redirect" title="Биологическая классификация">классификации</a> киноринх. Собственно туловище метамерно разделено на 11 сегментов (зонитов), каждый из которых образован одной или несколькими кутикулярными пластинами<sup id="cite_ref-_b78f2b8e8623409b_6-0" class="reference"><a href="#cite_note-_b78f2b8e8623409b-6">[6]</a></sup>.
                </p><p>В составе хобота выделяют два подотдела: ротовой конус и центральную часть. Ротовой конус представляет собой усечённый <a href="/wiki/%D0%9A%D0%BE%D0%BD%D1%83%D1%81" title="Конус">конус</a> с ротовым отверстием на вершине, окружённым 9 стилетами, которые задействованы в сборе пищи. У киноринх ротовой конус выдвигается, а не выворачивается, как у <a href="/wiki/%D0%9F%D1%80%D0%B8%D0%B0%D0%BF%D1%83%D0%BB%D0%B8%D0%B4%D1%8B" title="Приапулиды">приапулид</a><sup id="cite_ref-_83713271714e51cb_7-0" class="reference"><a href="#cite_note-_83713271714e51cb-7">[7]</a></sup>. Тонкая и гибкая кутикула в области конуса образует продольные складки. Поверхность центральной части несёт концентрические круги скалид — шипообразных кутикулярных образований. В состав каждого круга может входить разное число придатков. Скалиды, как правило, состоят из двух члеников<sup id="cite_ref-_b78f2b8e8623409b_6-1" class="reference"><a href="#cite_note-_b78f2b8e8623409b-6">[6]</a></sup>.
                </p><p>Каждый сегмент несёт свои кутикулярные пластинки (плациды). Хотя внешне сегменты кажутся одинаковыми, во внутреннем строении киноринх метамерии не прослеживается. Количество и форма пластин сегментов активно используются в качестве систематических признаков. Как правило, один туловищный сегмент несёт три пластины: одну спинную (<a href="/wiki/%D0%A2%D0%B5%D1%80%D0%B3%D0%B8%D1%82" title="Тергит">тергит</a>) и две брюшные (<a href="/wiki/%D0%A1%D1%82%D0%B5%D1%80%D0%BD%D0%B8%D1%82" title="Стернит">стерниты</a>). Кутикулярные пластинки на втором или третьем сегменте образуют замыкательный аппарат при полностью ввёрнутом интроверте<sup id="cite_ref-_83713271714e51cb_7-1" class="reference"><a href="#cite_note-_83713271714e51cb-7">[7]</a></sup>. На туловище располагаются шипы и другие придатки. Они представляют собой кутикулярные образования, в которые могут заходить отростки <a href="/wiki/%D0%9A%D0%BB%D0%B5%D1%82%D0%BA%D0%B0_(%D0%B1%D0%B8%D0%BE%D0%BB%D0%BE%D0%B3%D0%B8%D1%8F)" class="mw-redirect" title="Клетка (биология)">клеток</a> <a href="/wiki/%D0%93%D0%B8%D0%BF%D0%BE%D0%B4%D0%B5%D1%80%D0%BC%D0%B0" title="Гиподерма">гиподермы</a> и <a href="/wiki/%D0%9D%D0%B5%D0%B9%D1%80%D0%BE%D0%BD" title="Нейрон">нейроны</a>. Шипы задействованы в локомоции животных и функционируют в качестве <a href="/wiki/%D0%9E%D1%80%D0%B3%D0%B0%D0%BD%D1%8B_%D1%87%D1%83%D0%B2%D1%81%D1%82%D0%B2" class="mw-redirect" title="Органы чувств">органов чувств</a><sup id="cite_ref-_b78f2b8e8623409b_6-2" class="reference"><a href="#cite_note-_b78f2b8e8623409b-6">[6]</a></sup>.
                </p><p>Движение киноринх осуществляется за счёт выворачивания интроверта, заякоривания в субстрате при помощи скалид и последующего подтягивания тела<sup id="cite_ref-_b78f2b8e8623409b_6-3" class="reference"><a href="#cite_note-_b78f2b8e8623409b-6">[6]</a></sup>.
                </p>
                <h3><span id=".D0.9F.D0.BE.D0.BA.D1.80.D0.BE.D0.B2.D1.8B"></span><span class="mw-headline" id="Покровы">Покровы</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=%D0%9A%D0%B8%D0%BD%D0%BE%D1%80%D0%B8%D0%BD%D1%85%D0%B8&veaction=edit&section=3" class="mw-editsection-visualeditor" title="Редактировать раздел «Покровы»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=%D0%9A%D0%B8%D0%BD%D0%BE%D1%80%D0%B8%D0%BD%D1%85%D0%B8&action=edit&section=3" title="Редактировать раздел «Покровы»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
                <p>Тело киноринх покрыто плотным кутикулярным панцирем, который подстилается однослойной гиподермой. Кутикула киноринх состоит из <a href="/wiki/%D0%A5%D0%B8%D1%82%D0%B8%D0%BD" title="Хитин">хитина</a><sup id="cite_ref-_83713271714e51cb_7-2" class="reference"><a href="#cite_note-_83713271714e51cb-7">[7]</a></sup>. К кутикуле прикрепляется <a href="/wiki/%D0%9B%D0%BE%D0%BA%D0%BE%D0%BC%D0%BE%D1%86%D0%B8%D1%8F" title="Локомоция">локомоторная</a> мускулатура, более того, она определяет расположение всех внутренних органов. Кроме того, кутикула выполняет защитную роль. Как упоминалось выше, в типичном случае каждый сегмент покрыт одной спинной и двумя брюшными пластинами. Спинные и брюшные пластины каждого сегмента соединены гибкими волокнистыми связками, которые известны как плевральные пластины. Брюшные пластины соединяются при помощи волокнистого шва с хорошо развитым гребнем. Как правило, самые мощные кутикулярные покровы имеет первый тергит. У некоторых примитивных форм, таких как <i>Zelinkaderes floridensis</i>, толщина кутикулы одинакова по всей поверхности тела<sup id="cite_ref-_3ab5ca47efa1dd41_8-0" class="reference"><a href="#cite_note-_3ab5ca47efa1dd41-8">[8]</a></sup>. На поверхности кутикулы располагаются микроскопические шипики и волоски, направленные назад. На кутикуле также имеются тонкие папиллы, собранные в так называемые флоскули и «чувствительные пятна». Кроме того, на поверхности кутикулы находятся чувствительные щетинки и поры, которыми открываются наружу гиподермальные железы<sup id="cite_ref-_2478872f97e48bd0_9-0" class="reference"><a href="#cite_note-_2478872f97e48bd0-9">[9]</a></sup>. На четвёртом зоните (нередко лишь у самцов) могут присутствовать прикрепительные трубочки<sup id="cite_ref-_83713271714e51cb_7-3" class="reference"><a href="#cite_note-_83713271714e51cb-7">[7]</a></sup>.
                </p><p>Поверх кутикулы находится тонкая трёхслойная <a href="/wiki/%D0%91%D0%B8%D0%BE%D0%BB%D0%BE%D0%B3%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B8%D0%B5_%D0%BC%D0%B5%D0%BC%D0%B1%D1%80%D0%B0%D0%BD%D1%8B" class="mw-redirect" title="Биологические мембраны">мембрана</a> 7—10 <a href="/wiki/%D0%9D%D0%BC" class="mw-redirect" title="Нм">нм</a> толщиной. Под ней расположен гомогенный слой толщиной от 1 до 2,5 мкм. На расстоянии 10—20 нм от гомогенного слоя залегает гиподерма. В некоторых случаях промежуток между гомогенным слоем и гиподермой достигает 0,5 мкм и заполнен рыхлым тонковолокнистым материалом, который представляет собой самый внутренний, третий слой кутикулы. В местах прикрепления мышц гомогенный слой и гиподерма контактируют непосредственно. Кутикулярные пластины пронизаны многочисленными ветвящимися каналами, которые особенно многочисленны в местах прикрепления мышц к кутикуле. Каналы заполнены тонковолокнистым материалом, который также образует третий слой кутикулы<sup id="cite_ref-_2478872f97e48bd0_9-1" class="reference"><a href="#cite_note-_2478872f97e48bd0-9">[9]</a></sup>.
                </p><p>В области плевральных пластин кутикула состоит из наружной осмофильной мембраны, плотного гомогенного слоя толщиной 0,5 мкм, 5—6 слоёв толстых фибрилл и тонковолокнистого внутреннего слоя толщиной 0,2—0,3 мкм. На её поверхности заметны мельчайшие продольные гребни. Фибриллы соседних слоёв залегают перпендикулярно друг другу<sup id="cite_ref-_2478872f97e48bd0_9-2" class="reference"><a href="#cite_note-_2478872f97e48bd0-9">[9]</a></sup>.
                </p><p>Передние края всех пластин, а также обращённые к брюшному шву края стернитов имеют характерные утолщения, представляющие собой кутикулярные выросты, направленные внутрь тела, — пахицикли. К ним крепятся хорошо развитые продольные мышцы<sup id="cite_ref-_2478872f97e48bd0_9-3" class="reference"><a href="#cite_note-_2478872f97e48bd0-9">[9]</a></sup>.
                </p><p>Кутикула, покрывающая хобот, заметно тоньше и гибче туловищной кутикулы. Под наружной мембраной находится плотный слой толщиной 0,4—0,6 мкм, под которым залегает слой тонковолокнистого материала толщиной 1—3 мкм<sup id="cite_ref-_2478872f97e48bd0_9-4" class="reference"><a href="#cite_note-_2478872f97e48bd0-9">[9]</a></sup>.
                </p><p>Рост тела киноринх сопровождается сбрасыванием старой кутикулы в ходе <a href="/wiki/%D0%9B%D0%B8%D0%BD%D1%8C%D0%BA%D0%B0" title="Линька">линьки</a>. При линьке в клетках наружного слоя гиподермы накапливаются пузырьки, происходящие от <a href="/wiki/%D0%AD%D0%BD%D0%B4%D0%BE%D0%BF%D0%BB%D0%B0%D0%B7%D0%BC%D0%B0%D1%82%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B8%D0%B9_%D1%80%D0%B5%D1%82%D0%B8%D0%BA%D1%83%D0%BB%D1%83%D0%BC" title="Эндоплазматический ретикулум">эндоплазматического ретикулума</a>. Когда плотный гомогенный слой кутикулы отходит от гиподермы, содержимое пузырьков, представляющее собой материал новой кутикулы, изливается наружу. Как и при <a href="/wiki/%D0%9B%D0%B8%D0%BD%D1%8C%D0%BA%D0%B0_%D1%87%D0%BB%D0%B5%D0%BD%D0%B8%D1%81%D1%82%D0%BE%D0%BD%D0%BE%D0%B3%D0%B8%D1%85" title="Линька членистоногих">линьке насекомых</a>, происходит частичный <a href="/wiki/%D0%9B%D0%B8%D0%B7%D0%B8%D1%81" title="Лизис">лизис</a> старой кутикулы, которая образует <a href="/wiki/%D0%AD%D0%BA%D0%B7%D1%83%D0%B2%D0%B8%D0%B9" title="Экзувий">экзувий</a>. Киноринха вспарывает его при помощи скалид и особых спинных зубцов и выходит наружу. После этого новая кутикула расправляется и становится жёсткой<sup id="cite_ref-_1e3a5b37552c5676_10-0" class="reference"><a href="#cite_note-_1e3a5b37552c5676-10">[10]</a></sup>.
                </p><p>У многих киноринх кутикула чрезвычайно <a href="/wiki/%D0%93%D0%B8%D0%B4%D1%80%D0%BE%D1%84%D0%BE%D0%B1%D0%BD%D0%BE%D1%81%D1%82%D1%8C" title="Гидрофобность">гидрофобна</a>. Эта особенность используется для извлечения киноринх из субстрата, при котором пробы грунта сильно встряхивают, и киноринхи прилипают к пузырькам воздуха, поднимаясь вместе с ними на поверхность воды<sup id="cite_ref-_3ab5ca47efa1dd46_11-0" class="reference"><a href="#cite_note-_3ab5ca47efa1dd46-11">[11]</a></sup>.
                </p><p>Гиподерма представляет собой однослойный погружённый эпителий. Клетки гиподермы связаны с кутикулой посредством <a href="/wiki/%D0%9F%D0%BE%D0%BB%D1%83%D0%B4%D0%B5%D1%81%D0%BC%D0%BE%D1%81%D0%BE%D0%BC%D1%8B" title="Полудесмосомы">полудесмосом</a>. Апикальные участки соседних гиподермальных клеток связаны <a href="/wiki/%D0%94%D0%B5%D1%81%D0%BC%D0%BE%D1%81%D0%BE%D0%BC%D0%B0" class="mw-redirect" title="Десмосома">десмосомами</a>, а в других местах их мембраны удалены на расстояние 15—20 нм; промежуток между ними заполнен особым тёмным материалом. Выросты одной клетки могут входить в выемки другой, формируя некое подобие замка. В гиподерме также выявляются <a href="/wiki/%D0%A1%D0%B5%D0%BF%D1%82%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%BD%D1%8B%D0%B5_%D0%BA%D0%BE%D0%BD%D1%82%D0%B0%D0%BA%D1%82%D1%8B" title="Септированные контакты">септированные контакты</a>. В гиподерме находятся метамерно расположенные слизистые железы, которые открываются на кутикуле специальными отверстиями и выделяют на её поверхности слой <a href="/wiki/%D0%A1%D0%BB%D0%B8%D0%B7%D1%8C" title="Слизь">слизи</a><sup id="cite_ref-_83713271714e51cb_7-4" class="reference"><a href="#cite_note-_83713271714e51cb-7">[7]</a></sup>. Со стороны полости тела гиподерма подстилается мелкогранулярным <a href="/wiki/%D0%92%D0%BD%D0%B5%D0%BA%D0%BB%D0%B5%D1%82%D0%BE%D1%87%D0%BD%D1%8B%D0%B9_%D0%BC%D0%B0%D1%82%D1%80%D0%B8%D0%BA%D1%81" title="Внеклеточный матрикс">внеклеточным матриксом</a> толщиной 20 нм, который, по сути, является <a href="/wiki/%D0%91%D0%B0%D0%B7%D0%B0%D0%BB%D1%8C%D0%BD%D0%B0%D1%8F_%D0%BC%D0%B5%D0%BC%D0%B1%D1%80%D0%B0%D0%BD%D0%B0" title="Базальная мембрана">базальной мембраной</a><sup id="cite_ref-_37a82960165dc3c3_12-0" class="reference"><a href="#cite_note-_37a82960165dc3c3-12">[12]</a></sup>.
                </p><p>Клетки гиподермы очень <a href="/wiki/%D0%A4%D0%B8%D0%B7%D0%B8%D0%BE%D0%BB%D0%BE%D0%B3%D0%B8%D1%8F" title="Физиология">физиологически</a> активны. Они имеют крупные овальные <a href="/wiki/%D0%9A%D0%BB%D0%B5%D1%82%D0%BE%D1%87%D0%BD%D0%BE%D0%B5_%D1%8F%D0%B4%D1%80%D0%BE" title="Клеточное ядро">ядра</a>, в их <a href="/wiki/%D0%A6%D0%B8%D1%82%D0%BE%D0%BF%D0%BB%D0%B0%D0%B7%D0%BC%D0%B0" title="Цитоплазма">цитоплазме</a> хорошо развиты гранулярный эндоплазматический ретикулум и <a href="/wiki/%D0%90%D0%BF%D0%BF%D0%B0%D1%80%D0%B0%D1%82_%D0%93%D0%BE%D0%BB%D1%8C%D0%B4%D0%B6%D0%B8" title="Аппарат Гольджи">аппарат Гольджи</a>. В них также можно обнаружить хорошо выраженные ламеллярные структуры, часто свёрнутые в глобулы, липоидные включения, секреторные гранулы и <a href="/wiki/%D0%92%D0%B5%D0%B7%D0%B8%D0%BA%D1%83%D0%BB%D1%8B" class="mw-redirect" title="Везикулы">везикулы</a> разных размеров с гомогенным содержимым. В промежутках между гиподермальными валиками клетки гиподермы бедны <a href="/wiki/%D0%9E%D1%80%D0%B3%D0%B0%D0%BD%D0%B5%D0%BB%D0%BB%D0%B0" class="mw-redirect" title="Органелла">органеллами</a>. В тех местах, где мышцы крепятся к кутикуле, гиподерма пересечена мощными пучками <span data-interwiki-lang="en" data-interwiki-article="Tonofibril"><a href="/w/index.php?title=%D0%A2%D0%BE%D0%BD%D0%BE%D1%84%D0%B8%D0%B1%D1%80%D0%B8%D0%BB%D0%BB%D1%8B&action=edit&redlink=1" class="new" title="Тонофибриллы (страница отсутствует)">тонофиламентов</a></span><span style="font-style:normal; font-weight:normal;"><sup class="noprint"><a href="https://en.wikipedia.org/wiki/Tonofibril" class="extiw" title="en:Tonofibril"><span title="Tonofibril — версия статьи «Тонофибриллы» на английском языке">[en]</span></a></sup></span><sup id="cite_ref-_37a82960165dc3c3_12-1" class="reference"><a href="#cite_note-_37a82960165dc3c3-12">[12]</a></sup>.
                </p>
                <h3><span id=".D0.9C.D1.83.D1.81.D0.BA.D1.83.D0.BB.D0.B0.D1.82.D1.83.D1.80.D0.B0"></span><span class="mw-headline" id="Мускулатура">Мускулатура</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=%D0%9A%D0%B8%D0%BD%D0%BE%D1%80%D0%B8%D0%BD%D1%85%D0%B8&veaction=edit&section=4" class="mw-editsection-visualeditor" title="Редактировать раздел «Мускулатура»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=%D0%9A%D0%B8%D0%BD%D0%BE%D1%80%D0%B8%D0%BD%D1%85%D0%B8&action=edit&section=4" title="Редактировать раздел «Мускулатура»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
                <p>Киноринхи имеют своеобразные <a href="/wiki/%D0%9F%D0%BE%D0%BF%D0%B5%D1%80%D0%B5%D1%87%D0%BD%D0%BE%D0%BF%D0%BE%D0%BB%D0%BE%D1%81%D0%B0%D1%82%D1%8B%D0%B5_%D0%BC%D1%8B%D1%88%D1%86%D1%8B" class="mw-redirect" title="Поперечнополосатые мышцы">поперечнополосатые мышцы</a>. <a href="/wiki/%D0%A1%D0%B0%D1%80%D0%BA%D0%BE%D0%BC%D0%B5%D1%80" title="Саркомер">Саркомеры</a> разделяются рядами так называемых Z-тел, которые представляют собой веретеновидные электронноплотные структуры. К ним крепятся <a href="/wiki/%D0%90%D0%BA%D1%82%D0%B8%D0%BD" title="Актин">актиновые</a> филаменты диаметром 7 нм. Толстые (25 нм) <a href="/wiki/%D0%9C%D0%B8%D0%BE%D0%B7%D0%B8%D0%BD" title="Миозин">миозиновые</a> волокна могут вдвигаться в пространство между Z-телами и даже заходить в соседний саркомер. Благодаря этой особенности мускулатура киноринх способна к сверхсокращению (то есть сокращению более чем на 50 %). Z-тела могут располагаться хаотически или зигзагом, и границы саркомеров нередко оказываются сильно изогнутыми. В миоцитах киноринх чётко выражены сократимая и электронносветлая <a href="/wiki/%D0%A1%D0%B0%D1%80%D0%BA%D0%BE%D0%BF%D0%BB%D0%B0%D0%B7%D0%BC%D0%B0" title="Саркоплазма">саркоплазматическая</a> часть, бедная органеллами<sup id="cite_ref-_d3bf050f2ce1b69e_13-0" class="reference"><a href="#cite_note-_d3bf050f2ce1b69e-13">[13]</a></sup>.
                </p><p>Скелетные мышцы крепятся к кутикуле через тонкие прослойки гиподермы. Таким образом, в месте прикрепления есть два ряда десмосомных пластинок: между мышечной и гиподермальной клетками и между гиподермальной клеткой и кутикулой. Как и для кутикулы, для мускулатуры киноринх характерна метамерия<sup id="cite_ref-_d3bf050f2ce1b69e_13-1" class="reference"><a href="#cite_note-_d3bf050f2ce1b69e-13">[13]</a></sup>.
                </p><p><a href="/wiki/%D0%A1%D0%BA%D0%B5%D0%BB%D0%B5%D1%82%D0%BD%D0%B0%D1%8F_%D0%BC%D1%83%D1%81%D0%BA%D1%83%D0%BB%D0%B0%D1%82%D1%83%D1%80%D0%B0" class="mw-redirect" title="Скелетная мускулатура">Скелетная мускулатура</a> киноринх представлена продольными, дорсовентральными и диагональными мышцами. Продольные мышцы представлены двумя парами продольных мышечных лент: вентро- и дорсолатеральных. У некоторых представителей, таких как <i>Zelinkaderes floridensis</i>, продольные мышцы распространены равномерно по периметру туловища, у других, таких как <i>Echinoderes</i>, <i>Pycnophyes</i> и <i>Kinorhynchus</i>, они собраны в тяжи<sup id="cite_ref-r2002_4-2" class="reference"><a href="#cite_note-r2002-4">[4]</a></sup>. Спинные тяжи развиты значительно слабее брюшных, потому что животные чаще и сильнее изгибаются на брюшную сторону. Каждая лента состоит из отдельных продольных мышц, крепящихся к пахициклям. В последний сегмент мышцы практически не заходят, поскольку крепятся к утолщениям кутикулы вблизи гонопора на предпоследнем сегменте. При укорочении тела из-за синхронного <a href="/wiki/%D0%9C%D1%8B%D1%88%D0%B5%D1%87%D0%BD%D0%BE%D0%B5_%D1%81%D0%BE%D0%BA%D1%80%D0%B0%D1%89%D0%B5%D0%BD%D0%B8%D0%B5" title="Мышечное сокращение">сокращения</a> продольных мышц отдельные сегменты могут заходить друг на друга. В каждом сегменте есть две дорсовентральные мышцы, соединяющие тергит и стерниты. Киноринхи имеют большое количество мышц-протракторов и ретракторов, которые обеспечивают выворачивание и вворачивание интроверта. Кольцевая мускулатура в стенке тела развита плохо. Отдельные кольцевые мышцы есть в интроверте. По набору мышечных элементов к киноринхам наиболее близки приапулиды, <a href="/wiki/%D0%9B%D0%BE%D1%80%D0%B8%D1%86%D0%B8%D1%84%D0%B5%D1%80%D1%8B" title="Лорициферы">лорициферы</a> и <a href="/wiki/%D0%92%D0%BE%D0%BB%D0%BE%D1%81%D0%B0%D1%82%D0%B8%D0%BA%D0%B8" title="Волосатики">волосатики</a><sup id="cite_ref-_d3bf050f2ce1b69e_13-2" class="reference"><a href="#cite_note-_d3bf050f2ce1b69e-13">[13]</a></sup>.
                </p>
                <h3><span id=".D0.9D.D0.B5.D1.80.D0.B2.D0.BD.D0.B0.D1.8F_.D1.81.D0.B8.D1.81.D1.82.D0.B5.D0.BC.D0.B0"></span><span class="mw-headline" id="Нервная_система">Нервная система</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=%D0%9A%D0%B8%D0%BD%D0%BE%D1%80%D0%B8%D0%BD%D1%85%D0%B8&veaction=edit&section=5" class="mw-editsection-visualeditor" title="Редактировать раздел «Нервная система»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=%D0%9A%D0%B8%D0%BD%D0%BE%D1%80%D0%B8%D0%BD%D1%85%D0%B8&action=edit&section=5" title="Редактировать раздел «Нервная система»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
                <p>Нервная система киноринх прилегает к гиподерме, поэтому базальная мембрана, подстилающая гиподерму, одновременно отделяет нервную систему от полости тела. <a href="/wiki/%D0%A6%D0%B5%D0%BD%D1%82%D1%80%D0%B0%D0%BB%D1%8C%D0%BD%D0%B0%D1%8F_%D0%BD%D0%B5%D1%80%D0%B2%D0%BD%D0%B0%D1%8F_%D1%81%D0%B8%D1%81%D1%82%D0%B5%D0%BC%D0%B0" title="Центральная нервная система">Центральную нервную систему</a> составляют окологлоточное нервное кольцо (кольцевой мозг) и двойной брюшной нервный ствол. Мозг широкий, имеет вид воротничка и состоит из трёх колец<sup id="cite_ref-_83713271714e51cd_14-0" class="reference"><a href="#cite_note-_83713271714e51cd-14">[14]</a></sup>. Передний край мозга состоит из 10 скоплений <a href="/wiki/%D0%91%D0%B8%D0%BF%D0%BE%D0%BB%D1%8F%D1%80%D0%BD%D1%8B%D0%B5_%D0%BD%D0%B5%D0%B9%D1%80%D0%BE%D0%BD%D1%8B" title="Биполярные нейроны">биполярных</a> <span data-interwiki-lang="en" data-interwiki-article="Sensory neuron"><a href="/w/index.php?title=%D0%A7%D1%83%D0%B2%D1%81%D1%82%D0%B2%D0%B8%D1%82%D0%B5%D0%BB%D1%8C%D0%BD%D1%8B%D0%B5_%D0%BD%D0%B5%D0%B9%D1%80%D0%BE%D0%BD%D1%8B&action=edit&redlink=1" class="new" title="Чувствительные нейроны (страница отсутствует)">чувствительных</a></span><span style="font-style:normal; font-weight:normal;"><sup class="noprint"><a href="https://en.wikipedia.org/wiki/Sensory_neuron" class="extiw" title="en:Sensory neuron"><span title="Sensory neuron — версия статьи «Чувствительные нейроны» на английском языке">[en]</span></a></sup></span> нейронов, которые иннервируют органы чувств переднего конца тела. Задняя часть мозга также состоит из тел нейронов, которые могут быть как собраны, так и не собраны в <a href="/wiki/%D0%93%D0%B0%D0%BD%D0%B3%D0%BB%D0%B8%D0%B9" title="Ганглий">ганглии</a>. Из заднего мозга выходят 8 продольных <a href="/wiki/%D0%9D%D0%B5%D1%80%D0%B2" title="Нерв">нервов</a>, которые иннервируют шею и туловище<sup id="cite_ref-_83713271714e51cd_14-1" class="reference"><a href="#cite_note-_83713271714e51cd-14">[14]</a></sup>. У <i>Zelinkaderes floridensis</i> от заднего мозга отходят 12 продольных нервов, а у <i>Pycnophyes dentatus</i> — 7<sup id="cite_ref-r2002_4-3" class="reference"><a href="#cite_note-r2002-4">[4]</a></sup>. Промежуток между передней и задней частями мозга занят <a href="/wiki/%D0%9D%D0%B5%D0%B9%D1%80%D0%BE%D0%BF%D0%B8%D0%BB%D1%8C" title="Нейропиль">нейропилем</a>. В его средней части залегают немногочисленные нейроны. <a href="/wiki/%D0%9D%D0%B5%D1%80%D0%B2%D0%BD%D0%B0%D1%8F_%D1%82%D0%BA%D0%B0%D0%BD%D1%8C" title="Нервная ткань">Нервная ткань</a> занимает весомую долю объёма интроверта, и мышцы-ретракторы проходят прямо сквозь нейропиль. Нервный ствол имеет метамерное строение, соответствующее наружной метамерии<sup id="cite_ref-_d0e55b6b25e3cedb_15-0" class="reference"><a href="#cite_note-_d0e55b6b25e3cedb-15">[15]</a></sup>.
                </p><p>В состав <a href="/wiki/%D0%9F%D0%B5%D1%80%D0%B8%D1%84%D0%B5%D1%80%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B0%D1%8F_%D0%BD%D0%B5%D1%80%D0%B2%D0%BD%D0%B0%D1%8F_%D1%81%D0%B8%D1%81%D1%82%D0%B5%D0%BC%D0%B0" title="Периферическая нервная система">периферической нервной системы</a> киноринх входят латеральные, дорсо- и вентролатеральные нервы, связанные кольцевыми комиссурами, а также чувствительные клетки, иннервирующие соматические органы чувств. Совокупность элементов периферической нервной системы, которая повторяется в каждом сегменте, называется нейрозонитом<sup id="cite_ref-_d0e55b6b25e3cedb_15-1" class="reference"><a href="#cite_note-_d0e55b6b25e3cedb-15">[15]</a></sup>.
                </p><p>Мускулатура у киноринх иннервируется брюшным нервным стволом, а также дорсо- и вентролатеральными нервами. Примечательно, что в нервную ткань заходят непосредственно отростки <a href="/wiki/%D0%9C%D0%B8%D0%BE%D1%86%D0%B8%D1%82%D1%8B" title="Миоциты">мышечных клеток</a>. Ротовой конус иннервируется 10 нервами, выходящими из задней части мозга. Ключевым элементом нервной системы, связанным с <a href="/wiki/%D0%9F%D0%B8%D1%89%D0%B5%D0%B2%D0%B0%D1%80%D0%B8%D1%82%D0%B5%D0%BB%D1%8C%D0%BD%D0%B0%D1%8F_%D1%81%D0%B8%D1%81%D1%82%D0%B5%D0%BC%D0%B0" class="mw-redirect" title="Пищеварительная система">пищеварительной системой</a>, является стоматогастрическое нервное кольцо. Строго говоря, чаще всего оно незамкнуто и имеет, скорее, подковообразную форму<sup id="cite_ref-n_16-0" class="reference"><a href="#cite_note-n-16">[16]</a></sup>. Оно принимает нисходящие нервы ротового конуса и даёт начало глоточным нервам. В <a href="/wiki/%D0%93%D0%BB%D0%BE%D1%82%D0%BA%D0%B0" title="Глотка">глоточном</a> эпителии имеются чувствительные клетки, а в выстилке <a href="/wiki/%D0%9F%D0%B8%D1%89%D0%B5%D0%B2%D0%BE%D0%B4" title="Пищевод">пищевода</a> многочисленны нервные клетки<sup id="cite_ref-_d0e55b6b25e3cedb_15-2" class="reference"><a href="#cite_note-_d0e55b6b25e3cedb-15">[15]</a></sup>. Нейронов, иннервирующих кольцевые и продольные мышцы средней кишки, не обнаружено, поэтому, возможно, они сокращаются автономно. Возможно также, что их сокращения стимулируются чувствительно-двигательными клетками кишечного эпителия<sup id="cite_ref-r2002_4-4" class="reference"><a href="#cite_note-r2002-4">[4]</a></sup>.
                </p><p>В целом план строения нервной системы киноринх схож с таковым у приапулид, лорицифер и волосатиков<sup id="cite_ref-_1e3a5737552c4f4a_17-0" class="reference"><a href="#cite_note-_1e3a5737552c4f4a-17">[17]</a></sup>.
                </p>
                <h3><span id=".D0.9E.D1.80.D0.B3.D0.B0.D0.BD.D1.8B_.D1.87.D1.83.D0.B2.D1.81.D1.82.D0.B2"></span><span class="mw-headline" id="Органы_чувств">Органы чувств</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=%D0%9A%D0%B8%D0%BD%D0%BE%D1%80%D0%B8%D0%BD%D1%85%D0%B8&veaction=edit&section=6" class="mw-editsection-visualeditor" title="Редактировать раздел «Органы чувств»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=%D0%9A%D0%B8%D0%BD%D0%BE%D1%80%D0%B8%D0%BD%D1%85%D0%B8&action=edit&section=6" title="Редактировать раздел «Органы чувств»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
                <p>В покровах киноринх нет <span data-interwiki-lang="en" data-interwiki-article="Free nerve ending"><a href="/w/index.php?title=%D0%A1%D0%B2%D0%BE%D0%B1%D0%BE%D0%B4%D0%BD%D0%BE%D0%B5_%D0%BD%D0%B5%D1%80%D0%B2%D0%BD%D0%BE%D0%B5_%D0%BE%D0%BA%D0%BE%D0%BD%D1%87%D0%B0%D0%BD%D0%B8%D0%B5&action=edit&redlink=1" class="new" title="Свободное нервное окончание (страница отсутствует)">свободных нервных окончаний</a></span><span style="font-style:normal; font-weight:normal;"><sup class="noprint"><a href="https://en.wikipedia.org/wiki/Free_nerve_ending" class="extiw" title="en:Free nerve ending"><span title="Free nerve ending — версия статьи «Свободное нервное окончание» на английском языке">[en]</span></a></sup></span> из-за плотной кутикулы. <a href="/wiki/%D0%94%D0%B5%D0%BD%D0%B4%D1%80%D0%B8%D1%82" title="Дендрит">Дендритные</a> отростки сенсорных нейронов связаны с особыми органами чувств: флоскулями, чувствительными пятнами, щетинками, железистыми трубочками, шипами, скалидами и другими придатками. Они функционируют как <a href="/wiki/%D0%A5%D0%B5%D0%BC%D0%BE%D1%80%D0%B5%D1%86%D0%B5%D0%BF%D1%82%D0%BE%D1%80" title="Хеморецептор">хемо</a>- и <a href="/wiki/%D0%9C%D0%B5%D1%85%D0%B0%D0%BD%D0%BE%D1%80%D0%B5%D1%86%D0%B5%D0%BF%D1%82%D0%BE%D1%80" title="Механорецептор">механорецепторы</a><sup id="cite_ref-r2002_4-5" class="reference"><a href="#cite_note-r2002-4">[4]</a></sup>. Сенсорные нейроны киноринх представлены биполярными нейронами, тела которых лежат в гиподерме вблизи соответствующих органов чувств. Флоскули представляют собой кутикулярные выросты, в центре которых находится вогнутый диск с по́рой, окружённый папиллами. Расположение чувствительных пятен на туловище киноринх видоспецифично<sup id="cite_ref-r2002_4-6" class="reference"><a href="#cite_note-r2002-4">[4]</a></sup>. В основании щетинок могут находиться железы, и на вершине щетинки нередко имеется отверстие, через которое дендритные отростки сообщаются с внешней средой. Главным комплексным органом чувств является интроверт в вывернутом состоянии. В глотке имеются особые глоточные стилеты, в которые входят дендритные отростки; по-видимому, они функционируют в качестве хемо- и механорецепторов. На заднем конце тела самцов киноринх есть копулятивные шипы, которые не только выполняют вспомогательные функции при <a href="/wiki/%D0%A1%D0%BF%D0%B0%D1%80%D0%B8%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5" title="Спаривание">спаривании</a>, но и являются органами чувств. Каждый копулятивный шип заключает в себе дендритный отросток и вырост железистой клетки. Многие киноринхи имеют парные <a href="/wiki/%D0%93%D0%BB%D0%B0%D0%B7" title="Глаз">глазки</a> на интроверте. Они выглядят как оранжевые чашечки вокруг линзообразных утолщений кутикулы. Нередко киноринхи, лишённые глазков, всё-таки обладают <a href="/wiki/%D0%A1%D0%B2%D0%B5%D1%82%D0%BE%D1%87%D1%83%D0%B2%D1%81%D1%82%D0%B2%D0%B8%D1%82%D0%B5%D0%BB%D1%8C%D0%BD%D0%BE%D1%81%D1%82%D1%8C" title="Светочувствительность">светочувствительностью</a><sup id="cite_ref-_f7a337ad96aa7f70_18-0" class="reference"><a href="#cite_note-_f7a337ad96aa7f70-18">[18]</a></sup>.
                </p>
                <h3><span id=".D0.9F.D0.B8.D1.89.D0.B5.D0.B2.D0.B0.D1.80.D0.B8.D1.82.D0.B5.D0.BB.D1.8C.D0.BD.D0.B0.D1.8F_.D1.81.D0.B8.D1.81.D1.82.D0.B5.D0.BC.D0.B0"></span><span class="mw-headline" id="Пищеварительная_система">Пищеварительная система</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=%D0%9A%D0%B8%D0%BD%D0%BE%D1%80%D0%B8%D0%BD%D1%85%D0%B8&veaction=edit&section=7" class="mw-editsection-visualeditor" title="Редактировать раздел «Пищеварительная система»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=%D0%9A%D0%B8%D0%BD%D0%BE%D1%80%D0%B8%D0%BD%D1%85%D0%B8&action=edit&section=7" title="Редактировать раздел «Пищеварительная система»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
                <p>В состав пищеварительной системы киноринх входит выстланная кутикулой передняя кишка, средняя кишка, образованная клетками с <a href="/wiki/%D0%90%D0%BF%D0%B8%D0%BA%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D0%B9" class="mw-redirect" title="Апикальный">апикальной</a> щёточной каёмкой, и кутикуляризованная задняя кишка. На всём своём протяжении пищеварительная трубка сохраняет клеточное строение<sup id="cite_ref-r2002_4-7" class="reference"><a href="#cite_note-r2002-4">[4]</a></sup>. <a href="/wiki/%D0%A1%D0%BB%D1%8E%D0%BD%D0%BD%D1%8B%D0%B5_%D0%B6%D0%B5%D0%BB%D0%B5%D0%B7%D1%8B" title="Слюнные железы">Слюнные</a> и пищеварительные железы не обнаружены<sup id="cite_ref-r2002_4-8" class="reference"><a href="#cite_note-r2002-4">[4]</a></sup>. <a href="/wiki/%D0%A0%D0%BE%D1%82%D0%BE%D0%B2%D0%BE%D0%B5_%D0%BE%D1%82%D0%B2%D0%B5%D1%80%D1%81%D1%82%D0%B8%D0%B5" class="mw-redirect" title="Ротовое отверстие">Ротовое отверстие</a> находится на конце тела и окружено кутикулярными губами. Оно открывается в выстланную кутикулой буккальную трубку, имеющую многочисленные кутикулярные складки, которые, как предполагают, играют роль фильтра. В ней также находятся 3 или 4 круга стилетов. За буккальной трубкой следует сосущая глотка, передний конец которой может нести кутикулярное кольцо (глоточную корону). Для усиления сосущего эффекта глотка может частично выталкиваться наружу специальными протракторами, а голова при этом смещается ближе к туловищу<sup id="cite_ref-r2002_4-9" class="reference"><a href="#cite_note-r2002-4">[4]</a></sup>. Вокруг переднего конца глотки находятся 10 железистых клеток с одной <a href="/wiki/%D0%A0%D0%B5%D1%81%D0%BD%D0%B8%D1%87%D0%BA%D0%B0" class="mw-redirect" title="Ресничка">ресничкой</a>, их тела залегают между глоткой и стоматогастрическим нервным кольцом, а апикальные концы открываются по периметру глоточной короны. Глотка имеет внутренний эпителиальный и наружный мышечный слой, поверх которого находится слой внеклеточного матрикса (базальная пластинка). Мышечный и эпителиальный слои глотки разделены такой же пластинкой. В эпителии глотки, помимо эпителиальных клеток, есть железистые, чувствительные и нервные клетки. Мускулатура глотки представлена радиальными и кольцевыми мышечными клетками. Глотка (как, вероятно, и все органы киноринх) имеет постоянный клеточный состав. После глотки следует пищевод, короткий, выстланный кутикулой, в состав которого входят эпителиальные и нервные клетки. Эпителий средней кишки представлен высокопризматическими клетками с хорошо выраженной щёточной каёмкой. Кроме того, в нём встречаются отдельные железистые клетки с крупными <a href="/wiki/%D0%9F%D1%80%D0%BE%D1%84%D0%B5%D1%80%D0%BC%D0%B5%D0%BD%D1%82%D1%8B" title="Проферменты">зимогеновыми</a> гранулами и мощно развитым шероховатым эндоплазматическим ретикулумом, а также моноцилиарные чувствительные клетки. Задняя кишка образована уплощённым эпителием и выстлана кутикулой, которая постепенно утолщается кзади, достигая в задней части толщины наружной кутикулы. В клетках задней кишки очень много <a href="/wiki/%D0%9C%D0%B8%D1%82%D0%BE%D1%85%D0%BE%D0%BD%D0%B4%D1%80%D0%B8%D1%8F" title="Митохондрия">митохондрий</a>, что позволяет предполагать наличие у них функции регуляции ионного баланса<sup id="cite_ref-_8c1e0d98b63b3a68_19-0" class="reference"><a href="#cite_note-_8c1e0d98b63b3a68-19">[19]</a></sup>. Задняя кишка открывается наружу <a href="/wiki/%D0%90%D0%BD%D0%B0%D0%BB%D1%8C%D0%BD%D0%BE%D0%B5_%D0%BE%D1%82%D0%B2%D0%B5%D1%80%D1%81%D1%82%D0%B8%D0%B5" class="mw-redirect" title="Анальное отверстие">анальным отверстием</a> на конце 13-го зонита<sup id="cite_ref-_83713271714e51cd_14-2" class="reference"><a href="#cite_note-_83713271714e51cd-14">[14]</a></sup>.
                </p>
                <h3><span id=".D0.9F.D0.BE.D0.BB.D0.BE.D1.81.D1.82.D1.8C_.D1.82.D0.B5.D0.BB.D0.B0"></span><span class="mw-headline" id="Полость_тела">Полость тела</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=%D0%9A%D0%B8%D0%BD%D0%BE%D1%80%D0%B8%D0%BD%D1%85%D0%B8&veaction=edit&section=8" class="mw-editsection-visualeditor" title="Редактировать раздел «Полость тела»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=%D0%9A%D0%B8%D0%BD%D0%BE%D1%80%D0%B8%D0%BD%D1%85%D0%B8&action=edit&section=8" title="Редактировать раздел «Полость тела»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
                <p>Полость тела киноринх (<a href="/wiki/%D0%93%D0%B5%D0%BC%D0%BE%D1%86%D0%B5%D0%BB%D1%8C" class="mw-redirect" title="Гемоцель">гемоцель</a>) редуцирована, представлена щелевидными пространствами между <a href="/wiki/%D0%9E%D1%80%D0%B3%D0%B0%D0%BD_(%D0%B1%D0%B8%D0%BE%D0%BB%D0%BE%D0%B3%D0%B8%D1%8F)" title="Орган (биология)">органами</a> и заполнена жидкостью. Она лишена специализированной клеточной выстилки. Полостная жидкость содержит хлопья <a href="/wiki/%D0%90%D0%BC%D0%BE%D1%80%D1%84%D0%BD%D1%8B%D0%B5_%D1%82%D0%B5%D0%BB%D0%B0" title="Аморфные тела">аморфного</a> электронноплотного вещества, которое, возможно, является <span data-interwiki-lang="en" data-interwiki-article="Respiratory pigment"><a href="/w/index.php?title=%D0%94%D1%8B%D1%85%D0%B0%D1%82%D0%B5%D0%BB%D1%8C%D0%BD%D1%8B%D0%B9_%D0%BF%D0%B8%D0%B3%D0%BC%D0%B5%D0%BD%D1%82&action=edit&redlink=1" class="new" title="Дыхательный пигмент (страница отсутствует)">дыхательным пигментом</a></span><span style="font-style:normal; font-weight:normal;"><sup class="noprint"><a href="https://en.wikipedia.org/wiki/Respiratory_pigment" class="extiw" title="en:Respiratory pigment"><span title="Respiratory pigment — версия статьи «Дыхательный пигмент» на английском языке">[en]</span></a></sup></span>. В ней также встречаются многочисленные <a href="/wiki/%D0%90%D0%BC%D1%91%D0%B1%D0%BE%D1%86%D0%B8%D1%82%D1%8B" title="Амёбоциты">амёбоциты</a>, содержащие электронноплотные гранулы и <a href="/wiki/%D0%92%D0%B0%D0%BA%D1%83%D0%BE%D0%BB%D1%8C" title="Вакуоль">вакуоли</a> неправильной формы с тёмным рыхлым содержимым<sup id="cite_ref-_604657856bb29d17_20-0" class="reference"><a href="#cite_note-_604657856bb29d17-20">[20]</a></sup>. Амёбоциты могут даже занимать большую часть объёма гемоцеля. Их функция неизвестна<sup id="cite_ref-_83713271714e51cc_21-0" class="reference"><a href="#cite_note-_83713271714e51cc-21">[21]</a></sup>.
                </p>
                <h3><span id=".D0.92.D1.8B.D0.B4.D0.B5.D0.BB.D0.B8.D1.82.D0.B5.D0.BB.D1.8C.D0.BD.D0.B0.D1.8F_.D1.81.D0.B8.D1.81.D1.82.D0.B5.D0.BC.D0.B0"></span><span class="mw-headline" id="Выделительная_система">Выделительная система</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=%D0%9A%D0%B8%D0%BD%D0%BE%D1%80%D0%B8%D0%BD%D1%85%D0%B8&veaction=edit&section=9" class="mw-editsection-visualeditor" title="Редактировать раздел «Выделительная система»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=%D0%9A%D0%B8%D0%BD%D0%BE%D1%80%D0%B8%D0%BD%D1%85%D0%B8&action=edit&section=9" title="Редактировать раздел «Выделительная система»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
                <p><a href="/wiki/%D0%92%D1%8B%D0%B4%D0%B5%D0%BB%D0%B8%D1%82%D0%B5%D0%BB%D1%8C%D0%BD%D0%B0%D1%8F_%D1%81%D0%B8%D1%81%D1%82%D0%B5%D0%BC%D0%B0" title="Выделительная система">Выделительная система</a> киноринх представлена парой <a href="/wiki/%D0%9F%D1%80%D0%BE%D1%82%D0%BE%D0%BD%D0%B5%D1%84%D1%80%D0%B8%D0%B4%D0%B8%D0%B8" title="Протонефридии">протонефридиев</a>, которые залегают вдоль кишки рядом с дорсовентральной мышцей десятого сегмента. Каждый протонефридий состоит из трёх дву<a href="/wiki/%D0%96%D0%B3%D1%83%D1%82%D0%B8%D0%BA" title="Жгутик">жгутиковых</a> терминальных клеток, которые лежат в гемоцеле, длинной канальцевой клетки и нефридиопоровой клетки. У <i>Pycnophyes kielensis</i> протонефридий включает 22 двужгутиковые терминальные клетки, две двужгутиковые канальцевые клетки и нефридиопоровую клетку. У <i>P. greenlandicus</i> имеется 11 терминальных клеток и 2 канальцевые<sup id="cite_ref-r2002_4-10" class="reference"><a href="#cite_note-r2002-4">[4]</a></sup>. Протоки протонефридиев открываются <span data-interwiki-lang="en" data-interwiki-article="Nephridiopore"><a href="/w/index.php?title=%D0%9D%D0%B5%D1%84%D1%80%D0%B8%D0%B4%D0%B8%D0%BE%D0%BF%D0%BE%D1%80&action=edit&redlink=1" class="new" title="Нефридиопор (страница отсутствует)">нефридиопорами</a></span><span style="font-style:normal; font-weight:normal;"><sup class="noprint"><a href="https://en.wikipedia.org/wiki/Nephridiopore" class="extiw" title="en:Nephridiopore"><span title="Nephridiopore — версия статьи «Нефридиопор» на английском языке">[en]</span></a></sup></span> на боковой поверхности 11-го сегмента. Количество выводных каналов и число пор могут варьировать от 6 до нескольких десятков<sup id="cite_ref-_33709763cc88589c_22-0" class="reference"><a href="#cite_note-_33709763cc88589c-22">[22]</a></sup>. В отличие от приапулид и лорицифер, у киноринх выделительная и <a href="/wiki/%D0%9F%D0%BE%D0%BB%D0%BE%D0%B2%D0%B0%D1%8F_%D1%81%D0%B8%D1%81%D1%82%D0%B5%D0%BC%D0%B0" class="mw-redirect" title="Половая система">половая системы</a> независимы друг от друга<sup id="cite_ref-_83713271714e51cd_14-3" class="reference"><a href="#cite_note-_83713271714e51cd-14">[14]</a></sup>.
                </p>
                <h3><span id=".D0.9F.D0.BE.D0.BB.D0.BE.D0.B2.D0.B0.D1.8F_.D1.81.D0.B8.D1.81.D1.82.D0.B5.D0.BC.D0.B0"></span><span class="mw-headline" id="Половая_система">Половая система</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=%D0%9A%D0%B8%D0%BD%D0%BE%D1%80%D0%B8%D0%BD%D1%85%D0%B8&veaction=edit&section=10" class="mw-editsection-visualeditor" title="Редактировать раздел «Половая система»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=%D0%9A%D0%B8%D0%BD%D0%BE%D1%80%D0%B8%D0%BD%D1%85%D0%B8&action=edit&section=10" title="Редактировать раздел «Половая система»">править код</a><span class="mw-editsection-bracket">]</span></span></h3>
                <p><a href="/wiki/%D0%91%D0%B5%D1%81%D0%BF%D0%BE%D0%BB%D0%BE%D0%B5_%D1%80%D0%B0%D0%B7%D0%BC%D0%BD%D0%BE%D0%B6%D0%B5%D0%BD%D0%B8%D0%B5" title="Бесполое размножение">Бесполое размножение</a> у киноринх никогда не наблюдалось<sup id="cite_ref-r2002_4-11" class="reference"><a href="#cite_note-r2002-4">[4]</a></sup>. Киноринхи раздельнополы, хорошо выражен <a href="/wiki/%D0%9F%D0%BE%D0%BB%D0%BE%D0%B2%D0%BE%D0%B9_%D0%B4%D0%B8%D0%BC%D0%BE%D1%80%D1%84%D0%B8%D0%B7%D0%BC" title="Половой диморфизм">половой диморфизм</a>. У самок <a href="/wiki/%D0%93%D0%BE%D0%BD%D0%B0%D0%B4%D1%8B" title="Гонады">гонады</a> располагаются сбоку от кишки в полости тела и тянутся от 5-го до начала 13-го зонита. В самом центре гонады (<a href="/wiki/%D0%AF%D0%B8%D1%87%D0%BD%D0%B8%D0%BA" class="mw-redirect" title="Яичник">яичника</a>) находится крупный зрелый <a href="/wiki/%D0%9E%D0%BE%D1%86%D0%B8%D1%82" title="Ооцит">ооцит</a> с многочисленными <a href="/wiki/%D0%96%D0%B5%D0%BB%D1%82%D0%BE%D0%BA" title="Желток">желтковыми</a> гранулами, а другие, мелкие, ооциты выполняют роль питающих клеток. В предпоследнем сегменте от яичника отходит короткий <a href="/wiki/%D0%AF%D0%B9%D1%86%D0%B5%D0%B2%D0%BE%D0%B4" title="Яйцевод">яйцевод</a>, расширенная передняя часть которого образует подобие воронки. Рядом с яйцеводом находятся крупные гиподермальные железы, а непосредственно над ним в каждой гонаде находится мешковидный <span data-interwiki-lang="en" data-interwiki-article="Spermatheca"><a href="/w/index.php?title=%D0%A1%D0%B5%D0%BC%D1%8F%D0%BF%D1%80%D0%B8%D1%91%D0%BC%D0%BD%D0%B8%D0%BA&action=edit&redlink=1" class="new" title="Семяприёмник (страница отсутствует)">семяприёмник</a></span><span style="font-style:normal; font-weight:normal;"><sup class="noprint"><a href="https://en.wikipedia.org/wiki/Spermatheca" class="extiw" title="en:Spermatheca"><span title="Spermatheca — версия статьи «Семяприёмник» на английском языке">[en]</span></a></sup></span>. Рядом с <a href="/wiki/%D0%93%D0%BE%D0%BD%D0%BE%D0%BF%D0%BE%D1%80%D0%B0" title="Гонопора">гонопором</a> находятся различные железисто-чувствительные органы. Киноринхи не отличаются большой <a href="/wiki/%D0%9F%D0%BB%D0%BE%D0%B4%D0%BE%D0%B2%D0%B8%D1%82%D0%BE%D1%81%D1%82%D1%8C" class="mw-redirect" title="Плодовитость">плодовитостью</a>: в каждом яичнике зрелости достигают лишь 4 или 5 ооцитов. Низкая плодовитость свойственна для обитателей <a href="/wiki/%D0%9C%D0%B5%D0%B9%D0%BE%D0%B1%D0%B5%D0%BD%D1%82%D0%BE%D1%81" title="Мейобентос">мейобентоса</a>, к которым относятся киноринхи. Оплодотворение, по-видимому, происходит около протока семяприёмника. Связанные с яйцеводом железы формируют плотную оболочку <a href="/wiki/%D0%AF%D0%B9%D1%86%D0%BE" title="Яйцо">яйца</a> перед откладыванием его в грунт<sup id="cite_ref-_4828aa7245b7941e_23-0" class="reference"><a href="#cite_note-_4828aa7245b7941e-23">[23]</a></sup>.
                </p><p>Мешковидные <a href="/wiki/%D0%A1%D0%B5%D0%BC%D0%B5%D0%BD%D0%BD%D0%B8%D0%BA" class="mw-redirect" title="Семенник">семенники</a> располагаются сбоку от <a href="/wiki/%D0%9A%D0%B8%D1%88%D0%B5%D1%87%D0%BD%D0%B8%D0%BA" title="Кишечник">кишечника</a>, начинаясь от границы 5-го и 6-го сегментов, и тянутся до гонопоров на границе двух последних сегментов. В передней части семенника залегают <a href="/wiki/%D0%A1%D0%BF%D0%B5%D1%80%D0%BC%D0%B0%D1%82%D0%BE%D0%B3%D0%BE%D0%BD%D0%B8%D0%B0%D0%BB%D1%8C%D0%BD%D0%B0%D1%8F_%D0%BA%D0%BB%D0%B5%D1%82%D0%BA%D0%B0" title="Сперматогониальная клетка">сперматогонии</a>, далее следуют <a href="/wiki/%D0%A1%D0%BF%D0%B5%D1%80%D0%BC%D0%B0%D1%82%D0%BE%D1%86%D0%B8%D1%82" title="Сперматоцит">сперматоциты</a> и <a href="/wiki/%D0%A1%D0%BF%D0%B5%D1%80%D0%BC%D0%B0%D1%82%D0%B8%D0%B4%D0%B0" title="Сперматида">сперматиды</a> задних стадий, а в задней половине видны плотно упакованные <a href="/wiki/%D0%A1%D0%BF%D0%B5%D1%80%D0%BC%D0%B0%D1%82%D0%BE%D0%B7%D0%BE%D0%B8%D0%B4" title="Сперматозоид">сперматозоиды</a>. Сперматозоиды киноринх имеют несколько модифицированное строение. Они представляют собой веретеновидные клетки, длина которых составляет более 10 % от длины взрослого животного. Центральную часть сперматозоида занимает очень длинное и тонкое <a href="/wiki/%D0%9A%D0%BB%D0%B5%D1%82%D0%BE%D1%87%D0%BD%D0%BE%D0%B5_%D1%8F%D0%B4%D1%80%D0%BE" title="Клеточное ядро">ядро</a>. Типичной <a href="/wiki/%D0%90%D0%BA%D1%80%D0%BE%D1%81%D0%BE%D0%BC%D0%B0" title="Акросома">акросомы</a> нет. Сперматозоиды киноринх способны к червеобразным движениям за счёт изгибания клетки. Задняя широкая часть семенника в 12-м сегменте резко сужается в тонкий <a href="/wiki/%D0%A1%D0%B5%D0%BC%D1%8F%D0%B2%D1%8B%D0%BD%D0%BE%D1%81%D1%8F%D1%89%D0%B8%D0%B9_%D0%BF%D1%80%D0%BE%D1%82%D0%BE%D0%BA" title="Семявыносящий проток">семяпровод</a>, который открывается гонопором на конце длинной папиллы, образованной гибкой кутикулярной связкой между стернитами 12-го и 13-го сегментов. Вокруг гонопора обычно располагается густой венчик полых кутикулярных щетинок. Рядом с гонопором находятся копулятивные шипы. Они обладают чувствительностью и служат для плотного фиксирования <a href="/wiki/%D0%A1%D0%BF%D0%B5%D1%80%D0%BC%D0%B0%D1%82%D0%BE%D1%84%D0%BE%D1%80" title="Сперматофор">сперматофора</a> на задних сегментах и поддержания его во время копуляции. При копуляции сперматофор прикрепляется около гонопора самки<sup id="cite_ref-_4828aa7245b7941e_23-1" class="reference"><a href="#cite_note-_4828aa7245b7941e-23">[23]</a></sup>. У некоторых видов при копуляции две особи сцепляются задними концами тела<sup id="cite_ref-_3ab5ca47efa1dd47_24-0" class="reference"><a href="#cite_note-_3ab5ca47efa1dd47-24">[24]</a></sup>.
                </p>
                <h2><span id=".D0.A0.D0.B0.D0.B7.D0.B2.D0.B8.D1.82.D0.B8.D0.B5"></span><span class="mw-headline" id="Развитие">Развитие</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=%D0%9A%D0%B8%D0%BD%D0%BE%D1%80%D0%B8%D0%BD%D1%85%D0%B8&veaction=edit&section=11" class="mw-editsection-visualeditor" title="Редактировать раздел «Развитие»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=%D0%9A%D0%B8%D0%BD%D0%BE%D1%80%D0%B8%D0%BD%D1%85%D0%B8&action=edit&section=11" title="Редактировать раздел «Развитие»">править код</a><span class="mw-editsection-bracket">]</span></span></h2>
                <p>Детали <a href="/wiki/%D0%AD%D0%BC%D0%B1%D1%80%D0%B8%D0%BE%D0%BD%D0%B0%D0%BB%D1%8C%D0%BD%D0%BE%D0%B5_%D1%80%D0%B0%D0%B7%D0%B2%D0%B8%D1%82%D0%B8%D0%B5" class="mw-redirect" title="Эмбриональное развитие">эмбрионального развития</a> киноринх неизвестны. Самки откладывают оплодотворённые яйца по одному в тот же субстрат, где живут взрослые животные. Самка прикрепляет их к частицам грунта за счёт клейкой оболочки. Яйца богаты желтком. В яйце формируется червеобразная <a href="/wiki/%D0%9B%D0%B8%D1%87%D0%B8%D0%BD%D0%BA%D0%B0" title="Личинка">личинка</a>, которая сворачивается по окружности яйца. По строению она очень близка к личинке волосатиков. По мере созревания личинки оболочка яйца истончается. При вылуплении личинка распрямляется и выходит из яйца, используя шипы интроверта. Вылупившиеся черви похожи на взрослых особей и сразу же приступают к питанию. <span data-interwiki-lang="en" data-interwiki-article="Juvenile (organism)"><a href="/w/index.php?title=%D0%AE%D0%B2%D0%B5%D0%BD%D0%B8%D0%BB%D1%8C%D0%BD%D1%8B%D0%B9_%D0%BE%D1%80%D0%B3%D0%B0%D0%BD%D0%B8%D0%B7%D0%BC&action=edit&redlink=1" class="new" title="Ювенильный организм (страница отсутствует)">Ювенильные формы</a></span><span style="font-style:normal; font-weight:normal;"><sup class="noprint"><a href="https://en.wikipedia.org/wiki/Juvenile_(organism)" class="extiw" title="en:Juvenile (organism)"><span title="Juvenile (organism) — версия статьи «Ювенильный организм» на английском языке">[en]</span></a></sup></span>, как и взрослые особи, состоят из 13 сегментов, но отличаются от взрослых более крупными интровертом и глоткой, кроме того, все их придатки ещё очень мягкие и не<a href="/wiki/%D0%A1%D0%BA%D0%BB%D0%B5%D1%80%D0%BE%D1%82%D0%B8%D0%B7%D0%B0%D1%86%D0%B8%D1%8F" title="Склеротизация">склеротизированные</a><sup id="cite_ref-_4b67886771790e66_25-0" class="reference"><a href="#cite_note-_4b67886771790e66-25">[25]</a></sup>. В процессе роста молодые животные периодически линяют, но по достижении взрослого состояния линьки прекращаются<sup id="cite_ref-_83713271714e51cd_14-4" class="reference"><a href="#cite_note-_83713271714e51cd-14">[14]</a></sup> (однако у <i>Z. floridensis</i> и <i>Antygomonas oreas</i> наблюдались линьки во взрослом состоянии<sup id="cite_ref-r2002_4-12" class="reference"><a href="#cite_note-r2002-4">[4]</a></sup>). Всего имеется 6 ювенильных стадий, и с каждой линькой увеличивается число туловищных сенсилл и головных скалид<sup id="cite_ref-_3ab5ca47efa1dd47_24-1" class="reference"><a href="#cite_note-_3ab5ca47efa1dd47-24">[24]</a></sup>.
                </p>
                <h2><span id=".D0.A0.D0.B0.D1.81.D0.BF.D1.80.D0.BE.D1.81.D1.82.D1.80.D0.B0.D0.BD.D0.B5.D0.BD.D0.B8.D0.B5_.D0.B8_.D1.8D.D0.BA.D0.BE.D0.BB.D0.BE.D0.B3.D0.B8.D1.8F"></span><span class="mw-headline" id="Распространение_и_экология">Распространение и экология</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=%D0%9A%D0%B8%D0%BD%D0%BE%D1%80%D0%B8%D0%BD%D1%85%D0%B8&veaction=edit&section=12" class="mw-editsection-visualeditor" title="Редактировать раздел «Распространение и экология»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=%D0%9A%D0%B8%D0%BD%D0%BE%D1%80%D0%B8%D0%BD%D1%85%D0%B8&action=edit&section=12" title="Редактировать раздел «Распространение и экология»">править код</a><span class="mw-editsection-bracket">]</span></span></h2>
                <p>Киноринхи — исключительно свободноживущие<sup id="cite_ref-r2002_4-13" class="reference"><a href="#cite_note-r2002-4">[4]</a></sup> морские мейобентосные животные, распространены по всему миру. Их можно найти в составе мейофауны песчаных пляжей, заиленных песков, мягких илов, богатых органикой. Обычно они населяют первые 3 см грунта. Ключевым фактором, ограничивающим глубину, на которой могут жить киноринхи, является доступность <a href="/wiki/%D0%9A%D0%B8%D1%81%D0%BB%D0%BE%D1%80%D0%BE%D0%B4" title="Кислород">кислорода</a>. Киноринх находили от <a href="/wiki/%D0%9B%D0%B8%D1%82%D0%BE%D1%80%D0%B0%D0%BB%D1%8C" title="Литораль">литоральной</a> зоны до <a href="/wiki/%D0%90%D0%B1%D0%B8%D1%81%D1%81%D0%B0%D0%BB%D1%8C" title="Абиссаль">абиссали</a> — до глубины 5300 м<sup id="cite_ref-r2002_4-14" class="reference"><a href="#cite_note-r2002-4">[4]</a></sup><sup id="cite_ref-_83713271714e51cb_7-5" class="reference"><a href="#cite_note-_83713271714e51cb-7">[7]</a></sup>. Плотность популяций киноринх может составлять от 45 особей на 10 см<sup>2</sup>, как в стоячих <a href="/wiki/%D0%90%D0%BD%D1%82%D0%B0%D1%80%D0%BA%D1%82%D0%B8%D0%BA%D0%B0" title="Антарктика">антарктических</a> водах, до 1—10 особей на 10 см<sup>2</sup> на глубоководьях<sup id="cite_ref-r2002_4-15" class="reference"><a href="#cite_note-r2002-4">[4]</a></sup>. Иногда киноринхи обнаруживаются на поверхности <a href="/wiki/%D0%92%D0%BE%D0%B4%D0%BE%D1%80%D0%BE%D1%81%D0%BB%D0%B8" title="Водоросли">водорослей</a> и других беспозвоночных, таких как <a href="/wiki/%D0%9C%D0%BD%D0%BE%D0%B3%D0%BE%D1%89%D0%B5%D1%82%D0%B8%D0%BD%D0%BA%D0%BE%D0%B2%D1%8B%D0%B5_%D1%87%D0%B5%D1%80%D0%B2%D0%B8" title="Многощетинковые черви">многощетинковые черви</a>, <a href="/wiki/%D0%9C%D1%88%D0%B0%D0%BD%D0%BA%D0%B8" title="Мшанки">мшанки</a>, <a href="/wiki/%D0%93%D1%83%D0%B1%D0%BA%D0%B8" title="Губки">губки</a> и <a href="/wiki/%D0%9C%D0%BE%D0%BB%D0%BB%D1%8E%D1%81%D0%BA%D0%B8" title="Моллюски">моллюски</a><sup id="cite_ref-_6a520a8a8aa36fd4_26-0" class="reference"><a href="#cite_note-_6a520a8a8aa36fd4-26">[26]</a></sup>. Пресноводные и наземные формы среди киноринх отсутствуют<sup id="cite_ref-_3ab5ca47efa1dd41_8-1" class="reference"><a href="#cite_note-_3ab5ca47efa1dd41-8">[8]</a></sup>. Они очень чувствительности к загрязнениям воды<sup id="cite_ref-27" class="reference"><a href="#cite_note-27">[27]</a></sup>.
                </p><p>Киноринхи часто встречаются в <a href="/wiki/%D0%91%D0%B8%D0%BE%D1%82%D0%BE%D0%BF" title="Биотоп">биотопах</a> вместе с <a href="/wiki/%D0%92%D0%B5%D1%81%D0%BB%D0%BE%D0%BD%D0%BE%D0%B3%D0%B8%D0%B5_%D1%80%D0%B0%D0%BA%D0%BE%D0%BE%D0%B1%D1%80%D0%B0%D0%B7%D0%BD%D1%8B%D0%B5" title="Веслоногие ракообразные">веслоногими рачками</a>, <a href="/wiki/%D0%9D%D0%B5%D0%BC%D0%B0%D1%82%D0%BE%D0%B4%D1%8B" title="Нематоды">нематодами</a>, <a href="/wiki/%D0%A2%D0%B8%D1%85%D0%BE%D1%85%D0%BE%D0%B4%D0%BA%D0%B8" title="Тихоходки">тихоходками</a>, <a href="/wiki/%D0%A2%D1%83%D1%80%D0%B1%D0%B5%D0%BB%D0%BB%D1%8F%D1%80%D0%B8%D0%B8" class="mw-redirect" title="Турбеллярии">турбелляриями</a>, <a href="/wiki/%D0%98%D0%BD%D1%84%D1%83%D0%B7%D0%BE%D1%80%D0%B8%D0%B8" title="Инфузории">инфузориями</a>. Как правило, в <a href="/wiki/%D0%9F%D0%BE%D0%BF%D1%83%D0%BB%D1%8F%D1%86%D0%B8%D1%8F" title="Популяция">популяциях</a> поровну самок и самцов. Меньше всего ювенильных особей можно встретить зимой, а наибольшая доля половозрелых особей в <a href="/wiki/%D0%A3%D0%BC%D0%B5%D1%80%D0%B5%D0%BD%D0%BD%D1%8B%D0%B9_%D0%BA%D0%BB%D0%B8%D0%BC%D0%B0%D1%82" title="Умеренный климат">умеренных</a> широтах отмечается в конце зимы — начале весны. В <a href="/wiki/%D0%A2%D1%80%D0%BE%D0%BF%D0%B8%D0%BA%D0%B8" title="Тропики">тропиках</a> размножение киноринх происходит круглый год<sup id="cite_ref-_6a520a8a8aa36fd4_26-1" class="reference"><a href="#cite_note-_6a520a8a8aa36fd4-26">[26]</a></sup>.
                </p><p>Покровы киноринх выделяют слизь, которая склеивает частички субстрата, и нередко животные сами облепляют себя песчинками. Питаются киноринхи <a href="/wiki/%D0%94%D0%B8%D0%B0%D1%82%D0%BE%D0%BC%D0%BE%D0%B2%D1%8B%D0%B5_%D0%B2%D0%BE%D0%B4%D0%BE%D1%80%D0%BE%D1%81%D0%BB%D0%B8" title="Диатомовые водоросли">диатомовыми водорослями</a>, мелкими частицами органического <a href="/wiki/%D0%94%D0%B5%D1%82%D1%80%D0%B8%D1%82" title="Детрит">детрита</a> или и тем, и другим. Некоторые виды фильтруют бактерии с помощью фильтра в буккальной трубке<sup id="cite_ref-r2002_4-16" class="reference"><a href="#cite_note-r2002-4">[4]</a></sup>. Хищные формы неизвестны. Питание осуществляется только при вывернутом интроверте<sup id="cite_ref-_3ab5ca47efa1dd41_8-2" class="reference"><a href="#cite_note-_3ab5ca47efa1dd41-8">[8]</a></sup>. Питается ли кто-то киноринхами, доподлинно неизвестно<sup id="cite_ref-_6a520a8a8aa36fd4_26-2" class="reference"><a href="#cite_note-_6a520a8a8aa36fd4-26">[26]</a></sup><sup id="cite_ref-_83713271714e51cd_14-5" class="reference"><a href="#cite_note-_83713271714e51cd-14">[14]</a></sup>.
                </p><p>У киноринх впервые <a href="/wiki/%D0%AD%D0%BD%D0%B4%D0%BE%D1%81%D0%B8%D0%BC%D0%B1%D0%B8%D0%BE%D0%BD%D1%82" title="Эндосимбионт">эндосимбионты</a> были обнаружены в кишечном эпителии. <a href="/wiki/%D0%91%D0%B0%D0%BA%D1%82%D0%B5%D1%80%D0%B8%D0%B8" title="Бактерии">Бактериальные</a> клетки локализованы в цитоплазме только определённых клеток кишечника (<span data-interwiki-lang="en" data-interwiki-article="Bacteriocyte"><a href="/w/index.php?title=%D0%91%D0%B0%D0%BA%D1%82%D0%B5%D1%80%D0%B8%D0%BE%D1%86%D0%B8%D1%82&action=edit&redlink=1" class="new" title="Бактериоцит (страница отсутствует)">бактериоцитов</a></span><span style="font-style:normal; font-weight:normal;"><sup class="noprint"><a href="https://en.wikipedia.org/wiki/Bacteriocyte" class="extiw" title="en:Bacteriocyte"><span title="Bacteriocyte — версия статьи «Бактериоцит» на английском языке">[en]</span></a></sup></span>). Бактериоциты располагаются в центральной части средней кишки среди обычных высокопризматических эпителиальных клеток. Каждый бактериоцит может содержать более сотни бактериальных клеток. Некоторые учёные утверждают, что бактерии в кишечнике киноринх являются <a href="/wiki/%D0%A5%D0%B5%D0%BC%D0%BE%D0%BB%D0%B8%D1%82%D0%BE%D0%B0%D0%B2%D1%82%D0%BE%D1%82%D1%80%D0%BE%D1%84%D0%B8%D1%8F" class="mw-redirect" title="Хемолитоавтотрофия">хемолитоавтотрофными</a> <a href="/wiki/%D0%9E%D0%BA%D0%B8%D1%81%D0%BB%D0%B5%D0%BD%D0%B8%D0%B5" title="Окисление">окислителями</a> <a href="/wiki/%D0%A1%D0%B5%D1%80%D0%B0" title="Сера">серы</a>, однако эта гипотеза пока не доказана. Возможно, что эти бактерии в действительности являются не эндосимбионтами, а поглощаются кишечником при питании<sup id="cite_ref-r2002_4-17" class="reference"><a href="#cite_note-r2002-4">[4]</a></sup>. В кишечных клетках киноринх могут <a href="/wiki/%D0%9F%D0%B0%D1%80%D0%B0%D0%B7%D0%B8%D1%82" class="mw-redirect" title="Паразит">паразитировать</a> <a href="/wiki/%D0%9C%D0%B8%D0%BA%D1%80%D0%BE%D1%81%D0%BF%D0%BE%D1%80%D0%B8%D0%B4%D0%B8%D0%B8" title="Микроспоридии">микроспоридии</a><sup id="cite_ref-_8fc5ef1cad696b67_28-0" class="reference"><a href="#cite_note-_8fc5ef1cad696b67-28">[28]</a></sup>. В кишечнике <i>Kinorhynchus yushini</i> и <i>Z. floridensis</i> были обнаружены паразитические <a href="/wiki/%D0%90%D0%BF%D0%B8%D0%BA%D0%BE%D0%BC%D0%BF%D0%BB%D0%B5%D0%BA%D1%81%D1%8B" title="Апикомплексы">апикомплексы</a><sup id="cite_ref-r2002_4-18" class="reference"><a href="#cite_note-r2002-4">[4]</a></sup>.
                </p>
                <h2><span id=".D0.9A.D0.BB.D0.B0.D1.81.D1.81.D0.B8.D1.84.D0.B8.D0.BA.D0.B0.D1.86.D0.B8.D1.8F_.D0.B8_.D1.84.D0.B8.D0.BB.D0.BE.D0.B3.D0.B5.D0.BD.D0.B8.D1.8F"></span><span class="mw-headline" id="Классификация_и_филогения">Классификация и филогения</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=%D0%9A%D0%B8%D0%BD%D0%BE%D1%80%D0%B8%D0%BD%D1%85%D0%B8&veaction=edit&section=13" class="mw-editsection-visualeditor" title="Редактировать раздел «Классификация и филогения»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=%D0%9A%D0%B8%D0%BD%D0%BE%D1%80%D0%B8%D0%BD%D1%85%D0%B8&action=edit&section=13" title="Редактировать раздел «Классификация и филогения»">править код</a><span class="mw-editsection-bracket">]</span></span></h2>
                <div class="thumb tright"><div class="thumbinner" style="width:222px;"><a href="/wiki/%D0%A4%D0%B0%D0%B9%D0%BB:Echinoderes_hwiizaa.jpg" class="image"><img alt="" src="//upload.wikimedia.org/wikipedia/commons/thumb/d/d6/Echinoderes_hwiizaa.jpg/220px-Echinoderes_hwiizaa.jpg" decoding="async" width="220" height="507" class="thumbimage" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/d/d6/Echinoderes_hwiizaa.jpg/330px-Echinoderes_hwiizaa.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/d6/Echinoderes_hwiizaa.jpg/440px-Echinoderes_hwiizaa.jpg 2x" data-file-width="503" data-file-height="1159" /></a>  <div class="thumbcaption"><div class="magnify"><a href="/wiki/%D0%A4%D0%B0%D0%B9%D0%BB:Echinoderes_hwiizaa.jpg" class="internal" title="Увеличить"></a></div><i>Echinoderes hwiizaa</i> (отряд Cyclorhagida)</div></div></div>
                <p>В настоящее время киноринх рассматривают в ранге класса в составе группы Scalidophora. Класс киноринх подразделяется на два <a href="/wiki/%D0%9E%D1%82%D1%80%D1%8F%D0%B4_(%D0%B1%D0%B8%D0%BE%D0%BB%D0%BE%D0%B3%D0%B8%D1%8F)" title="Отряд (биология)">отряда</a><sup id="cite_ref-29" class="reference"><a href="#cite_note-29">[29]</a></sup>:
                </p>
                <ul><li>Отряд <span data-interwiki-lang="en" data-interwiki-article="Cyclorhagida"><a href="/w/index.php?title=Cyclorhagida&action=edit&redlink=1" class="new" title="Cyclorhagida (страница отсутствует)">Cyclorhagida</a></span><span style="font-style:normal; font-weight:normal;"><sup class="noprint"><a href="https://en.wikipedia.org/wiki/Cyclorhagida" class="extiw" title="en:Cyclorhagida"><span title="Cyclorhagida — версия статьи «Cyclorhagida» на английском языке">[en]</span></a></sup></span> <span style="font-variant:small-caps;">(Zelinka, 1896) Higgins, 1964</span>. Наиболее широко распространённый и разнообразный класс киноринх. У представителей отряда втягиваться может только первый зонит. Кутикула второго зонита (шейного отдела) подразделяется на 14—16 пластинок, которыми покрыт передний конец туловища при втягивании хобота. Туловище снабжено шипами, его сегменты округлые в поперечном сечении. Часто встречаются в морском иле и песке в <a href="/wiki/%D0%9F%D1%80%D0%B8%D0%BB%D0%B8%D0%B2%D0%BD%D0%BE-%D0%BE%D1%82%D0%BB%D0%B8%D0%B2%D0%BD%D0%B0%D1%8F_%D0%B7%D0%BE%D0%BD%D0%B0" class="mw-redirect" title="Приливно-отливная зона">приливно-отливной зоне</a><sup id="cite_ref-_3ab5ca47efa1dd47_24-2" class="reference"><a href="#cite_note-_3ab5ca47efa1dd47-24">[24]</a></sup><sup id="cite_ref-_83713271714e51ce_30-0" class="reference"><a href="#cite_note-_83713271714e51ce-30">[30]</a></sup>. В отряде выделяют следующие <a href="/wiki/%D0%A1%D0%B5%D0%BC%D0%B5%D0%B9%D1%81%D1%82%D0%B2%D0%BE_(%D0%B1%D0%B8%D0%BE%D0%BB%D0%BE%D0%B3%D0%B8%D1%8F)" class="mw-redirect" title="Семейство (биология)">семейства</a><sup id="cite_ref-31" class="reference"><a href="#cite_note-31">[31]</a></sup>:
                <ul><li><span data-interwiki-lang="en" data-interwiki-article="Antygomonidae"><a href="/w/index.php?title=Antygomonidae&action=edit&redlink=1" class="new" title="Antygomonidae (страница отсутствует)">Antygomonidae</a></span><span style="font-style:normal; font-weight:normal;"><sup class="noprint"><a href="https://en.wikipedia.org/wiki/Antygomonidae" class="extiw" title="en:Antygomonidae"><span title="Antygomonidae — версия статьи «Antygomonidae» на английском языке">[en]</span></a></sup></span> <span style="font-variant:small-caps;">Adrianov & Malakhov, 1994</span>;</li>
                <li><span data-interwiki-lang="en" data-interwiki-article="Cateriidae"><a href="/w/index.php?title=Cateriidae&action=edit&redlink=1" class="new" title="Cateriidae (страница отсутствует)">Cateriidae</a></span><span style="font-style:normal; font-weight:normal;"><sup class="noprint"><a href="https://en.wikipedia.org/wiki/Cateriidae" class="extiw" title="en:Cateriidae"><span title="Cateriidae — версия статьи «Cateriidae» на английском языке">[en]</span></a></sup></span> <span style="font-variant:small-caps;">Gerlach, 1956</span>;</li>
                <li><a href="/w/index.php?title=Dracoderidae&action=edit&redlink=1" class="new" title="Dracoderidae (страница отсутствует)">Dracoderidae</a> <span style="font-variant:small-caps;">Higgins & Shirayama, 1990</span>;</li>
                <li><span data-interwiki-lang="en" data-interwiki-article="Echinoderidae"><a href="/w/index.php?title=Echinoderidae&action=edit&redlink=1" class="new" title="Echinoderidae (страница отсутствует)">Echinoderidae</a></span><span style="font-style:normal; font-weight:normal;"><sup class="noprint"><a href="https://en.wikipedia.org/wiki/Echinoderidae" class="extiw" title="en:Echinoderidae"><span title="Echinoderidae — версия статьи «Echinoderidae» на английском языке">[en]</span></a></sup></span> <span style="font-variant:small-caps;">Zelinka, 1894</span>;</li>
                <li><a href="/w/index.php?title=Semnoderidae&action=edit&redlink=1" class="new" title="Semnoderidae (страница отсутствует)">Semnoderidae</a> <span style="font-variant:small-caps;">Remane, 1929</span>;</li>
                <li><a href="/w/index.php?title=Zelinkaderidae&action=edit&redlink=1" class="new" title="Zelinkaderidae (страница отсутствует)">Zelinkaderidae</a> <span style="font-variant:small-caps;">Higgins, 1990</span>;</li>
                <li>Cyclorhagida <i><a href="/wiki/Incertae_sedis" title="Incertae sedis">incertae sedis</a></i>.</li></ul></li>
                <li>Отряд <span data-interwiki-lang="en" data-interwiki-article="Homalorhagida"><a href="/w/index.php?title=Homalorhagida&action=edit&redlink=1" class="new" title="Homalorhagida (страница отсутствует)">Homalorhagida</a></span><span style="font-style:normal; font-weight:normal;"><sup class="noprint"><a href="https://en.wikipedia.org/wiki/Homalorhagida" class="extiw" title="en:Homalorhagida"><span title="Homalorhagida — версия статьи «Homalorhagida» на английском языке">[en]</span></a></sup></span> <span style="font-variant:small-caps;">(Zelinka, 1896) Higgins, 1964</span>. Относительно крупные киноринхи (до 1 мм). Могут втягиваться два первых зонита. Кутикула шейного отдела подразделяется на не более чем 8 пластинок. В роли замыкателя при втягивании интроверта выступает третий сегмент. Туловище несёт несколько шипов. Туловищные зониты треугольные в поперечном сечении. Обитатели морских илов<sup id="cite_ref-_3ab5ca47efa1dd44_32-0" class="reference"><a href="#cite_note-_3ab5ca47efa1dd44-32">[32]</a></sup><sup id="cite_ref-_83713271714e51ce_30-1" class="reference"><a href="#cite_note-_83713271714e51ce-30">[30]</a></sup>. В отряде выделяют следующие семейства<sup id="cite_ref-33" class="reference"><a href="#cite_note-33">[33]</a></sup>:
                <ul><li><span data-interwiki-lang="en" data-interwiki-article="Neocentrophyidae"><a href="/w/index.php?title=Neocentrophyidae&action=edit&redlink=1" class="new" title="Neocentrophyidae (страница отсутствует)">Neocentrophyidae</a></span><span style="font-style:normal; font-weight:normal;"><sup class="noprint"><a href="https://en.wikipedia.org/wiki/Neocentrophyidae" class="extiw" title="en:Neocentrophyidae"><span title="Neocentrophyidae — версия статьи «Neocentrophyidae» на английском языке">[en]</span></a></sup></span> <span style="font-variant:small-caps;">Higgins, 1969</span>;</li>
                <li><span data-interwiki-lang="en" data-interwiki-article="Pycnophyidae"><a href="/w/index.php?title=Pycnophyidae&action=edit&redlink=1" class="new" title="Pycnophyidae (страница отсутствует)">Pycnophyidae</a></span><span style="font-style:normal; font-weight:normal;"><sup class="noprint"><a href="https://en.wikipedia.org/wiki/Pycnophyidae" class="extiw" title="en:Pycnophyidae"><span title="Pycnophyidae — версия статьи «Pycnophyidae» на английском языке">[en]</span></a></sup></span> <span style="font-variant:small-caps;">Zelinka, 1896</span>.</li></ul></li></ul>
                <div class="thumb tleft"><div class="thumbinner" style="width:222px;"><a href="/wiki/%D0%A4%D0%B0%D0%B9%D0%BB:Pycnophyes_dentatus.jpg" class="image"><img alt="" src="//upload.wikimedia.org/wikipedia/commons/thumb/8/8e/Pycnophyes_dentatus.jpg/220px-Pycnophyes_dentatus.jpg" decoding="async" width="220" height="112" class="thumbimage" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/8/8e/Pycnophyes_dentatus.jpg/330px-Pycnophyes_dentatus.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/8/8e/Pycnophyes_dentatus.jpg/440px-Pycnophyes_dentatus.jpg 2x" data-file-width="2367" data-file-height="1207" /></a>  <div class="thumbcaption"><div class="magnify"><a href="/wiki/%D0%A4%D0%B0%D0%B9%D0%BB:Pycnophyes_dentatus.jpg" class="internal" title="Увеличить"></a></div><i>Pycnophyes dentatus</i> (отряд Homalorhagida)</div></div></div>
                <table class="infobox noprint" style=""><tbody><tr><th colspan="2" scope="colgroup" class="infobox-above" style="text-align:left; font-style:normal; font-size:100%; background:#eaecf0;"><img alt="" src="//upload.wikimedia.org/wikipedia/commons/c/c0/Images.png" decoding="async" width="16" height="16" data-file-width="16" data-file-height="16" /> Внешние изображения</th></tr>
                <tr>
                <th scope="row" class="plainlist" style="text-align:left; flex:0;"><img alt="" src="//upload.wikimedia.org/wikipedia/commons/6/65/Image-silk.png" decoding="async" width="16" height="16" data-file-width="16" data-file-height="16" /></th>
                <td class="plainlist">
                <a rel="nofollow" class="external text" href="https://www.ncbi.nlm.nih.gov/core/lw/2.0/html/tileshop_pmc/tileshop_pmc_inline.html?title=Click%20on%20image%20to%20zoom&p=PMC3&id=4511640_pone.0133440.g003.jpg">Комбинированное филогенетическое дерево киноринх, учитывающее и молекулярные, и морфологические данные</a></td>
                </tr>
                </tbody></table>
                <p>В настоящее время киноринх включают в состав <a href="/wiki/%D0%9A%D0%BB%D0%B0%D0%B4%D0%B0" title="Клада">клады</a> <a href="/wiki/%D0%9B%D0%B8%D0%BD%D1%8F%D1%8E%D1%89%D0%B8%D0%B5" title="Линяющие">линяющие</a> (Ecdysozoa), что подтверждается как морфологическими, так и молекулярными данными. Однако <a href="/wiki/%D0%A1%D1%82%D0%B5%D1%80%D0%BE%D0%B8%D0%B4%D0%BD%D1%8B%D0%B5_%D0%B3%D0%BE%D1%80%D0%BC%D0%BE%D0%BD%D1%8B" title="Стероидные гормоны">стероидных гормонов</a> линьки у них выявлено не было<sup id="cite_ref-r2002_4-19" class="reference"><a href="#cite_note-r2002-4">[4]</a></sup>. Наиболее близкие родственники киноринх — приапулиды, которые являются их <a href="/wiki/%D0%A1%D0%B5%D1%81%D1%82%D1%80%D0%B8%D0%BD%D1%81%D0%BA%D0%B0%D1%8F_%D0%B3%D1%80%D1%83%D0%BF%D0%BF%D0%B0" title="Сестринская группа">сестринской группой</a>. Раньше киноринх включали в состав группы <a href="/wiki/%D0%93%D0%BE%D0%BB%D0%BE%D0%B2%D0%BE%D1%85%D0%BE%D0%B1%D0%BE%D1%82%D0%BD%D1%8B%D0%B5" title="Головохоботные">головохоботные</a> (<i><span lang="la">Cephalorhyncha</span></i>), которая также содержит приапулид, волосатиков и лорицифер. Однако, когда выяснилось, что волосатики более близки к нематодам, то приапулид, лорицифер и киноринх стали объединять в группу <a href="/wiki/Scalidophora" title="Scalidophora">Scalidophora</a>. Впрочем, её монофилия находится под вопросом<sup id="cite_ref-34" class="reference"><a href="#cite_note-34">[34]</a></sup>.
                </p><p>Недавний молекулярный анализ в целом подтвердил традиционную классификацию киноринх, основанную на морфологических признаках. Однако он показал, что Cyclorhagida — <a href="/wiki/%D0%9F%D0%BE%D0%BB%D0%B8%D1%84%D0%B8%D0%BB%D0%B8%D1%8F" title="Полифилия">полифилетическая</a> группа, так как входящий в неё <a href="/wiki/%D0%A0%D0%BE%D0%B4_(%D0%B1%D0%B8%D0%BE%D0%BB%D0%BE%D0%B3%D0%B8%D1%8F)" title="Род (биология)">род</a> <i>Dracoderes</i>, по-видимому, является сестринской группой Homalorhagida или даже входит в состав этого отряда. Монофилия Homalorhagida подтвердилась молекулярными данными<sup id="cite_ref-f_35-0" class="reference"><a href="#cite_note-f-35">[35]</a></sup>.
                </p><p>В 2016 году был <a href="/wiki/%D0%A1%D0%B5%D0%BA%D0%B2%D0%B5%D0%BD%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5" title="Секвенирование">секвенирован</a> <a href="/wiki/%D0%9C%D0%B8%D1%82%D0%BE%D1%85%D0%BE%D0%BD%D0%B4%D1%80%D0%B8%D0%B0%D0%BB%D1%8C%D0%BD%D0%B0%D1%8F_%D0%94%D0%9D%D0%9A" title="Митохондриальная ДНК">митохондриальный</a> <a href="/wiki/%D0%93%D0%B5%D0%BD%D0%BE%D0%BC" title="Геном">геном</a> двух видов киноринх — <i>Echinoderes svetlanae</i> и <i>Pycnophyes kielensis</i>. Порядок <a href="/wiki/%D0%93%D0%B5%D0%BD" title="Ген">генов</a> в митохондриальных геномах у киноринх уникален для <a href="/wiki/Metazoa" class="mw-redirect" title="Metazoa">Metazoa</a> и <a href="/wiki/%D0%A6%D0%B0%D1%80%D1%81%D1%82%D0%B2%D0%BE_(%D0%B1%D0%B8%D0%BE%D0%BB%D0%BE%D0%B3%D0%B8%D1%8F)" title="Царство (биология)">царства</a> животных вообще. У обоих исследованных видов <a href="/wiki/%D0%94%D1%83%D0%BF%D0%BB%D0%B8%D0%BA%D0%B0%D1%86%D0%B8%D1%8F" title="Дупликация">дуплицирован</a> ген <a href="/wiki/%D0%9C%D0%B5%D1%82%D0%B8%D0%BE%D0%BD%D0%B8%D0%BD" title="Метионин">метиониновой</a> <a href="/wiki/%D0%A2%D0%A0%D0%9D%D0%9A" title="ТРНК">тРНК</a><sup id="cite_ref-36" class="reference"><a href="#cite_note-36">[36]</a></sup>.
                </p>
                <h2><span id=".D0.98.D1.81.D1.82.D0.BE.D1.80.D0.B8.D1.8F_.D0.B8.D0.B7.D1.83.D1.87.D0.B5.D0.BD.D0.B8.D1.8F"></span><span class="mw-headline" id="История_изучения">История изучения</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=%D0%9A%D0%B8%D0%BD%D0%BE%D1%80%D0%B8%D0%BD%D1%85%D0%B8&veaction=edit&section=14" class="mw-editsection-visualeditor" title="Редактировать раздел «История изучения»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=%D0%9A%D0%B8%D0%BD%D0%BE%D1%80%D0%B8%D0%BD%D1%85%D0%B8&action=edit&section=14" title="Редактировать раздел «История изучения»">править код</a><span class="mw-editsection-bracket">]</span></span></h2>
                <p>Впервые киноринхи были описаны <a href="/wiki/%D0%A4%D1%80%D0%B0%D0%BD%D1%86%D0%B8%D1%8F" title="Франция">французским</a> <a href="/wiki/%D0%9D%D0%B0%D1%82%D1%83%D1%80%D0%B0%D0%BB%D0%B8%D1%81%D1%82" class="mw-redirect" title="Натуралист">натуралистом</a> <a href="/wiki/%D0%94%D1%8E%D0%B6%D0%B0%D1%80%D0%B4%D0%B5%D0%BD,_%D0%A4%D0%B5%D0%BB%D0%B8%D0%BA%D1%81" title="Дюжарден, Феликс">Феликсом Дюжарденом</a>. В 1841 году он собирал морских беспозвоночных на северном побережье в <a href="/wiki/%D0%91%D1%80%D0%B5%D1%82%D0%B0%D0%BD%D1%8C_(%D0%B8%D1%81%D1%82%D0%BE%D1%80%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B0%D1%8F_%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C)" title="Бретань (историческая область)">Бретани</a> во Франции. В 1863 году найденное им животное получило название <span style="font-style: italic">Echinoderes dujardinii</span> <span style="font-variant:small-caps;">Claparède, 1863</span><sup id="cite_ref-f_35-1" class="reference"><a href="#cite_note-f-35">[35]</a></sup>. В 1881 году оно было выделено в самостоятельную группу Kinorhyncha. После открытия первых киноринх несколько исследователей занялись описанием представителей этой группы, однако в силу новизны группы в их описаниях было много неточностей. В конце XIX — начале XX века <a href="/wiki/%D0%97%D0%B5%D0%BB%D0%B8%D0%BD%D0%BA%D0%B0,_%D0%9A%D0%B0%D1%80%D0%BB" title="Зелинка, Карл">К. Зелинка</a> опубликовал ряд работ, в которых упорядочивал данные других исследователей и описал несколько новых видов киноринх<sup id="cite_ref-_401f68fb6d487ecb_5-1" class="reference"><a href="#cite_note-_401f68fb6d487ecb-5">[5]</a></sup>. Важный вклад в развитие систематики группы внёс американский учёный <span data-interwiki-lang="en" data-interwiki-article="Robert P. Higgins"><a href="/w/index.php?title=%D0%A5%D0%B8%D0%B3%D0%B3%D0%B8%D0%BD%D1%81,_%D0%A0%D0%BE%D0%B1%D0%B5%D1%80%D1%82&action=edit&redlink=1" class="new" title="Хиггинс, Роберт (страница отсутствует)">Роберт Хиггинс</a></span><span style="font-style:normal; font-weight:normal;"><sup class="noprint"><a href="https://en.wikipedia.org/wiki/Robert_P._Higgins" class="extiw" title="en:Robert P. Higgins"><span title="Robert P. Higgins — версия статьи «Хиггинс, Роберт» на английском языке">[en]</span></a></sup></span>, описавший многие виды киноринх и, в частности, предложивший выделение семейства Zelinkaderidae<sup id="cite_ref-37" class="reference"><a href="#cite_note-37">[37]</a></sup>. В разное время киноринх относили к таким таксонам, как <span data-interwiki-lang="en" data-interwiki-article="Aschelminth"><a href="/w/index.php?title=Aschelminthes&action=edit&redlink=1" class="new" title="Aschelminthes (страница отсутствует)">Aschelminthes</a></span><span style="font-style:normal; font-weight:normal;"><sup class="noprint"><a href="https://en.wikipedia.org/wiki/Aschelminth" class="extiw" title="en:Aschelminth"><span title="Aschelminth — версия статьи «Aschelminthes» на английском языке">[en]</span></a></sup></span>, <a href="/wiki/Nematoda" class="mw-redirect" title="Nematoda">Nemathelminthes</a>, Pseudocoelomata и <a href="/wiki/Cycloneuralia" class="mw-redirect" title="Cycloneuralia">Cycloneuralia</a>. В 1994 году было предложено выделение группы линяющие, к которой был отнесён и этот класс<sup id="cite_ref-r2002_4-20" class="reference"><a href="#cite_note-r2002-4">[4]</a></sup>. Активное описание новых видов и родов киноринх продолжается и по сей день<sup id="cite_ref-38" class="reference"><a href="#cite_note-38">[38]</a></sup><sup id="cite_ref-39" class="reference"><a href="#cite_note-39">[39]</a></sup><sup id="cite_ref-40" class="reference"><a href="#cite_note-40">[40]</a></sup>.
                </p>
                <h2><span id=".D0.9F.D1.80.D0.B8.D0.BC.D0.B5.D1.87.D0.B0.D0.BD.D0.B8.D1.8F"></span><span class="mw-headline" id="Примечания">Примечания</span><span class="mw-editsection"><span class="mw-editsection-bracket">[</span><a href="/w/index.php?title=%D0%9A%D0%B8%D0%BD%D0%BE%D1%80%D0%B8%D0%BD%D1%85%D0%B8&veaction=edit&section=15" class="mw-editsection-visualeditor" title="Редактировать раздел «Примечания»">править</a><span class="mw-editsection-divider"> | </span><a href="/w/index.php?title=%D0%9A%D0%B8%D0%BD%D0%BE%D1%80%D0%B8%D0%BD%D1%85%D0%B8&action=edit&section=15" title="Редактировать раздел «Примечания»">править код</a><span class="mw-editsection-bracket">]</span></span></h2>
                <div class="reflist columns" style="-moz-column-width:30em; -webkit-column-width:30em; column-width:30em; list-style-type: decimal;">
                <ol class="references">
                <li id="cite_note-1"><span class="mw-cite-backlink"><a href="#cite_ref-1">↑</a></span> <span class="reference-text"><span class="citation"><i>Reinhard W.</i> <a rel="nofollow" class="external text" href="http://www.biodiversitylibrary.org/item/36963#page/417/mode/1up">Über <i>Echinoderes</i> und <i>Desmoscolex</i> der Umgegend von Odessa</a> // Zoologischer Anzeiger. — 1881. — Bd. 2, <span class="nowrap">№ 1</span>. — S. 403—448.</span></span>
                </li>
                <li id="cite_note-BRE-2"><span class="mw-cite-backlink"><a href="#cite_ref-BRE_2-0">↑</a></span> <span class="reference-text"><span class="citation" id="CITEREFБРЭ2009"><a rel="nofollow" class="external text" href="http://bigenc.ru/text/2065105">Киноринхи</a> / <span class="nowrap">Чесунов А. В.</span> // Канцелярия конфискации — Киргизы. — <abbr title="Москва">М.</abbr> : Большая российская энциклопедия, 2009. — С. 720. — (<a href="/wiki/%D0%91%D0%BE%D0%BB%D1%8C%D1%88%D0%B0%D1%8F_%D1%80%D0%BE%D1%81%D1%81%D0%B8%D0%B9%D1%81%D0%BA%D0%B0%D1%8F_%D1%8D%D0%BD%D1%86%D0%B8%D0%BA%D0%BB%D0%BE%D0%BF%D0%B5%D0%B4%D0%B8%D1%8F" title="Большая российская энциклопедия">Большая российская энциклопедия</a> : <span class="nowrap">[в 35 т.]</span> / гл. ред. <span class="nowrap"><a href="/wiki/%D0%9E%D1%81%D0%B8%D0%BF%D0%BE%D0%B2,_%D0%AE%D1%80%D0%B8%D0%B9_%D0%A1%D0%B5%D1%80%D0%B3%D0%B5%D0%B5%D0%B2%D0%B8%D1%87" title="Осипов, Юрий Сергеевич">Ю. С. Осипов</a></span> ; 2004—2017, т. 13). — <a href="/wiki/%D0%A1%D0%BB%D1%83%D0%B6%D0%B5%D0%B1%D0%BD%D0%B0%D1%8F:%D0%98%D1%81%D1%82%D0%BE%D1%87%D0%BD%D0%B8%D0%BA%D0%B8_%D0%BA%D0%BD%D0%B8%D0%B3/9785852703446" class="internal mw-magiclink-isbn">ISBN 978-5-85270-344-6</a>.</span></span>
                </li>
                <li id="cite_note-3"><span class="mw-cite-backlink"><a href="#cite_ref-3">↑</a></span> <span class="reference-text"><span class="citation"><i><span class="nowrap">Altenburger Andreas</span>, <span class="nowrap">Rho Hyun Soo</span>, <span class="nowrap">Chang Cheon Young</span>, <span class="nowrap">Sørensen Martin Vinther.</span></i> <a rel="nofollow" class="external text" href="https://dx.doi.org/10.1186/s40555-014-0103-6">Zelinkaderes yong sp. nov. from Korea - the first recording of Zelinkaderes (Kinorhyncha: Cyclorhagida) in Asia</a> <span class="ref-info" style="cursor:help;" title="на английском языке">(англ.)</span> // Zoological Studies. — 2015. — 5 February (<span class="nowrap">vol. 54</span>, <span class="nowrap">no. 1</span>). — <a href="/wiki/%D0%9C%D0%B5%D0%B6%D0%B4%D1%83%D0%BD%D0%B0%D1%80%D0%BE%D0%B4%D0%BD%D1%8B%D0%B9_%D1%81%D1%82%D0%B0%D0%BD%D0%B4%D0%B0%D1%80%D1%82%D0%BD%D1%8B%D0%B9_%D1%81%D0%B5%D1%80%D0%B8%D0%B9%D0%BD%D1%8B%D0%B9_%D0%BD%D0%BE%D0%BC%D0%B5%D1%80" class="mw-redirect" title="Международный стандартный серийный номер">ISSN</a> <a rel="nofollow" class="external text" href="//www.worldcat.org/search?fq=x0:jrnl&q=n2:1810-522X">1810-522X</a>. — <a href="/wiki/Doi" class="mw-redirect" title="Doi">doi</a>:<a rel="nofollow" class="external text" href="https://dx.doi.org/10.1186%2Fs40555-014-0103-6">10.1186/s40555-014-0103-6</a>.</span><span class="plainlinks noprint" style="font-size:85%;"> [<a class="external text" href="https://ru.wikipedia.org/w/index.php?title=%D0%A8%D0%B0%D0%B1%D0%BB%D0%BE%D0%BD:Cite_doi/10.1186/s40555-014-0103-6&action=edit&editintro=Шаблон:Cite_doi/editintro2">исправить</a>]</span></span>
                </li>
                <li id="cite_note-r2002-4"><span class="mw-cite-backlink">↑ <a href="#cite_ref-r2002_4-0"><sup><i><b>1</b></i></sup></a> <a href="#cite_ref-r2002_4-1"><sup><i><b>2</b></i></sup></a> <a href="#cite_ref-r2002_4-2"><sup><i><b>3</b></i></sup></a> <a href="#cite_ref-r2002_4-3"><sup><i><b>4</b></i></sup></a> <a href="#cite_ref-r2002_4-4"><sup><i><b>5</b></i></sup></a> <a href="#cite_ref-r2002_4-5"><sup><i><b>6</b></i></sup></a> <a href="#cite_ref-r2002_4-6"><sup><i><b>7</b></i></sup></a> <a href="#cite_ref-r2002_4-7"><sup><i><b>8</b></i></sup></a> <a href="#cite_ref-r2002_4-8"><sup><i><b>9</b></i></sup></a> <a href="#cite_ref-r2002_4-9"><sup><i><b>10</b></i></sup></a> <a href="#cite_ref-r2002_4-10"><sup><i><b>11</b></i></sup></a> <a href="#cite_ref-r2002_4-11"><sup><i><b>12</b></i></sup></a> <a href="#cite_ref-r2002_4-12"><sup><i><b>13</b></i></sup></a> <a href="#cite_ref-r2002_4-13"><sup><i><b>14</b></i></sup></a> <a href="#cite_ref-r2002_4-14"><sup><i><b>15</b></i></sup></a> <a href="#cite_ref-r2002_4-15"><sup><i><b>16</b></i></sup></a> <a href="#cite_ref-r2002_4-16"><sup><i><b>17</b></i></sup></a> <a href="#cite_ref-r2002_4-17"><sup><i><b>18</b></i></sup></a> <a href="#cite_ref-r2002_4-18"><sup><i><b>19</b></i></sup></a> <a href="#cite_ref-r2002_4-19"><sup><i><b>20</b></i></sup></a> <a href="#cite_ref-r2002_4-20"><sup><i><b>21</b></i></sup></a></span> <span class="reference-text"><span class="citation"><i><span class="nowrap">Neuhaus B.</span></i> <a rel="nofollow" class="external text" href="https://dx.doi.org/10.1093/icb/42.3.619">Ultrastructure, Biology, and Phylogenetic Relationships of Kinorhyncha</a> <span class="ref-info" style="cursor:help;" title="на английском языке">(англ.)</span> // Integrative and Comparative Biology. — 2002. — 1 July (<span class="nowrap">vol. 42</span>, <span class="nowrap">no. 3</span>). — <span class="nowrap">P. 619—632</span>. — <a href="/wiki/%D0%9C%D0%B5%D0%B6%D0%B4%D1%83%D0%BD%D0%B0%D1%80%D0%BE%D0%B4%D0%BD%D1%8B%D0%B9_%D1%81%D1%82%D0%B0%D0%BD%D0%B4%D0%B0%D1%80%D1%82%D0%BD%D1%8B%D0%B9_%D1%81%D0%B5%D1%80%D0%B8%D0%B9%D0%BD%D1%8B%D0%B9_%D0%BD%D0%BE%D0%BC%D0%B5%D1%80" class="mw-redirect" title="Международный стандартный серийный номер">ISSN</a> <a rel="nofollow" class="external text" href="//www.worldcat.org/search?fq=x0:jrnl&q=n2:1540-7063">1540-7063</a>. — <a href="/wiki/Doi" class="mw-redirect" title="Doi">doi</a>:<a rel="nofollow" class="external text" href="https://dx.doi.org/10.1093%2Ficb%2F42.3.619">10.1093/icb/42.3.619</a>.</span><span class="plainlinks noprint" style="font-size:85%;"> [<a class="external text" href="https://ru.wikipedia.org/w/index.php?title=%D0%A8%D0%B0%D0%B1%D0%BB%D0%BE%D0%BD:Cite_doi/10.1093/icb/42.3.619&action=edit&editintro=Шаблон:Cite_doi/editintro2">исправить</a>]</span></span>
                </li>
                <li id="cite_note-_401f68fb6d487ecb-5"><span class="mw-cite-backlink">↑ <a href="#cite_ref-_401f68fb6d487ecb_5-0"><sup><i><b>1</b></i></sup></a> <a href="#cite_ref-_401f68fb6d487ecb_5-1"><sup><i><b>2</b></i></sup></a></span> <span class="reference-text"><a href="#CITEREFHandbook_of_Zoology2013">Handbook of Zoology, 2013</a>, p. 181.</span>
                </li>
                <li id="cite_note-_b78f2b8e8623409b-6"><span class="mw-cite-backlink">↑ <a href="#cite_ref-_b78f2b8e8623409b_6-0"><sup><i><b>1</b></i></sup></a> <a href="#cite_ref-_b78f2b8e8623409b_6-1"><sup><i><b>2</b></i></sup></a> <a href="#cite_ref-_b78f2b8e8623409b_6-2"><sup><i><b>3</b></i></sup></a> <a href="#cite_ref-_b78f2b8e8623409b_6-3"><sup><i><b>4</b></i></sup></a></span> <span class="reference-text"><a href="#CITEREFАдрианов,_Малахов1994">Адрианов, Малахов, 1994</a>, с. 5—10.</span>
                </li>
                <li id="cite_note-_83713271714e51cb-7"><span class="mw-cite-backlink">↑ <a href="#cite_ref-_83713271714e51cb_7-0"><sup><i><b>1</b></i></sup></a> <a href="#cite_ref-_83713271714e51cb_7-1"><sup><i><b>2</b></i></sup></a> <a href="#cite_ref-_83713271714e51cb_7-2"><sup><i><b>3</b></i></sup></a> <a href="#cite_ref-_83713271714e51cb_7-3"><sup><i><b>4</b></i></sup></a> <a href="#cite_ref-_83713271714e51cb_7-4"><sup><i><b>5</b></i></sup></a> <a href="#cite_ref-_83713271714e51cb_7-5"><sup><i><b>6</b></i></sup></a></span> <span class="reference-text"><a href="#CITEREFРупперт,_Фокс,_Барнс2008">Рупперт, Фокс, Барнс, 2008</a>, с. 53.</span>
                </li>
                <li id="cite_note-_3ab5ca47efa1dd41-8"><span class="mw-cite-backlink">↑ <a href="#cite_ref-_3ab5ca47efa1dd41_8-0"><sup><i><b>1</b></i></sup></a> <a href="#cite_ref-_3ab5ca47efa1dd41_8-1"><sup><i><b>2</b></i></sup></a> <a href="#cite_ref-_3ab5ca47efa1dd41_8-2"><sup><i><b>3</b></i></sup></a></span> <span class="reference-text"><a href="#CITEREFВестхайде,_Ригер2008">Вестхайде, Ригер, 2008</a>, с. 753.</span>
                </li>
                <li id="cite_note-_2478872f97e48bd0-9"><span class="mw-cite-backlink">↑ <a href="#cite_ref-_2478872f97e48bd0_9-0"><sup><i><b>1</b></i></sup></a> <a href="#cite_ref-_2478872f97e48bd0_9-1"><sup><i><b>2</b></i></sup></a> <a href="#cite_ref-_2478872f97e48bd0_9-2"><sup><i><b>3</b></i></sup></a> <a href="#cite_ref-_2478872f97e48bd0_9-3"><sup><i><b>4</b></i></sup></a> <a href="#cite_ref-_2478872f97e48bd0_9-4"><sup><i><b>5</b></i></sup></a></span> <span class="reference-text"><a href="#CITEREFАдрианов,_Малахов1994">Адрианов, Малахов, 1994</a>, с. 10—31.</span>
                </li>
                <li id="cite_note-_1e3a5b37552c5676-10"><span class="mw-cite-backlink"><a href="#cite_ref-_1e3a5b37552c5676_10-0">↑</a></span> <span class="reference-text"><a href="#CITEREFАдрианов,_Малахов1994">Адрианов, Малахов, 1994</a>, с. 32.</span>
                </li>
                <li id="cite_note-_3ab5ca47efa1dd46-11"><span class="mw-cite-backlink"><a href="#cite_ref-_3ab5ca47efa1dd46_11-0">↑</a></span> <span class="reference-text"><a href="#CITEREFВестхайде,_Ригер2008">Вестхайде, Ригер, 2008</a>, с. 754.</span>
                </li>
                <li id="cite_note-_37a82960165dc3c3-12"><span class="mw-cite-backlink">↑ <a href="#cite_ref-_37a82960165dc3c3_12-0"><sup><i><b>1</b></i></sup></a> <a href="#cite_ref-_37a82960165dc3c3_12-1"><sup><i><b>2</b></i></sup></a></span> <span class="reference-text"><a href="#CITEREFАдрианов,_Малахов1994">Адрианов, Малахов, 1994</a>, с. 33—35.</span>
                </li>
                <li id="cite_note-_d3bf050f2ce1b69e-13"><span class="mw-cite-backlink">↑ <a href="#cite_ref-_d3bf050f2ce1b69e_13-0"><sup><i><b>1</b></i></sup></a> <a href="#cite_ref-_d3bf050f2ce1b69e_13-1"><sup><i><b>2</b></i></sup></a> <a href="#cite_ref-_d3bf050f2ce1b69e_13-2"><sup><i><b>3</b></i></sup></a></span> <span class="reference-text"><a href="#CITEREFАдрианов,_Малахов1994">Адрианов, Малахов, 1994</a>, с. 36—51.</span>
                </li>
                <li id="cite_note-_83713271714e51cd-14"><span class="mw-cite-backlink">↑ <a href="#cite_ref-_83713271714e51cd_14-0"><sup><i><b>1</b></i></sup></a> <a href="#cite_ref-_83713271714e51cd_14-1"><sup><i><b>2</b></i></sup></a> <a href="#cite_ref-_83713271714e51cd_14-2"><sup><i><b>3</b></i></sup></a> <a href="#cite_ref-_83713271714e51cd_14-3"><sup><i><b>4</b></i></sup></a> <a href="#cite_ref-_83713271714e51cd_14-4"><sup><i><b>5</b></i></sup></a> <a href="#cite_ref-_83713271714e51cd_14-5"><sup><i><b>6</b></i></sup></a></span> <span class="reference-text"><a href="#CITEREFРупперт,_Фокс,_Барнс2008">Рупперт, Фокс, Барнс, 2008</a>, с. 55.</span>
                </li>
                <li id="cite_note-_d0e55b6b25e3cedb-15"><span class="mw-cite-backlink">↑ <a href="#cite_ref-_d0e55b6b25e3cedb_15-0"><sup><i><b>1</b></i></sup></a> <a href="#cite_ref-_d0e55b6b25e3cedb_15-1"><sup><i><b>2</b></i></sup></a> <a href="#cite_ref-_d0e55b6b25e3cedb_15-2"><sup><i><b>3</b></i></sup></a></span> <span class="reference-text"><a href="#CITEREFАдрианов,_Малахов1994">Адрианов, Малахов, 1994</a>, с. 51—71.</span>
                </li>
                <li id="cite_note-n-16"><span class="mw-cite-backlink"><a href="#cite_ref-n_16-0">↑</a></span> <span class="reference-text"><span class="citation"><i><span class="nowrap">Herranz M.</span>, <span class="nowrap">Pardos F.</span>, <span class="nowrap">Boyle M. J.</span></i> <a rel="nofollow" class="external text" href="https://www.ncbi.nlm.nih.gov/pubmed/23109054">Comparative morphology of serotonergic-like immunoreactive elements in the central nervous system of kinorhynchs (Kinorhyncha, Cyclorhagida).</a> <span class="ref-info" style="cursor:help;" title="на английском языке">(англ.)</span> // Journal Of Morphology. — 2013. — March (<span class="nowrap">vol. 274</span>, <span class="nowrap">no. 3</span>). — <span class="nowrap">P. 258—274</span>. — <a href="/wiki/Doi" class="mw-redirect" title="Doi">doi</a>:<a rel="nofollow" class="external text" href="https://dx.doi.org/10.1002%2Fjmor.20089">10.1002/jmor.20089</a>. — <a class="external mw-magiclink-pmid" rel="nofollow" href="//www.ncbi.nlm.nih.gov/pubmed/23109054?dopt=Abstract">PMID 23109054</a>.</span><span class="plainlinks noprint" style="font-size:85%;"> [<a class="external text" href="https://ru.wikipedia.org/w/index.php?title=%D0%A8%D0%B0%D0%B1%D0%BB%D0%BE%D0%BD:Cite_pmid/23109054&action=edit&editintro=Шаблон:Cite_pmid/editintro2">исправить</a>]</span></span>
                </li>
                <li id="cite_note-_1e3a5737552c4f4a-17"><span class="mw-cite-backlink"><a href="#cite_ref-_1e3a5737552c4f4a_17-0">↑</a></span> <span class="reference-text"><a href="#CITEREFАдрианов,_Малахов1994">Адрианов, Малахов, 1994</a>, с. 72.</span>
                </li>
                <li id="cite_note-_f7a337ad96aa7f70-18"><span class="mw-cite-backlink"><a href="#cite_ref-_f7a337ad96aa7f70_18-0">↑</a></span> <span class="reference-text"><a href="#CITEREFАдрианов,_Малахов1994">Адрианов, Малахов, 1994</a>, с. 72—101.</span>
                </li>
                <li id="cite_note-_8c1e0d98b63b3a68-19"><span class="mw-cite-backlink"><a href="#cite_ref-_8c1e0d98b63b3a68_19-0">↑</a></span> <span class="reference-text"><a href="#CITEREFАдрианов,_Малахов1994">Адрианов, Малахов, 1994</a>, с. 107—120.</span>
                </li>
                <li id="cite_note-_604657856bb29d17-20"><span class="mw-cite-backlink"><a href="#cite_ref-_604657856bb29d17_20-0">↑</a></span> <span class="reference-text"><a href="#CITEREFАдрианов,_Малахов1994">Адрианов, Малахов, 1994</a>, с. 123—125.</span>
                </li>
                <li id="cite_note-_83713271714e51cc-21"><span class="mw-cite-backlink"><a href="#cite_ref-_83713271714e51cc_21-0">↑</a></span> <span class="reference-text"><a href="#CITEREFРупперт,_Фокс,_Барнс2008">Рупперт, Фокс, Барнс, 2008</a>, с. 54.</span>
                </li>
                <li id="cite_note-_33709763cc88589c-22"><span class="mw-cite-backlink"><a href="#cite_ref-_33709763cc88589c_22-0">↑</a></span> <span class="reference-text"><a href="#CITEREFАдрианов,_Малахов1994">Адрианов, Малахов, 1994</a>, с. 125—128.</span>
                </li>
                <li id="cite_note-_4828aa7245b7941e-23"><span class="mw-cite-backlink">↑ <a href="#cite_ref-_4828aa7245b7941e_23-0"><sup><i><b>1</b></i></sup></a> <a href="#cite_ref-_4828aa7245b7941e_23-1"><sup><i><b>2</b></i></sup></a></span> <span class="reference-text"><a href="#CITEREFАдрианов,_Малахов1994">Адрианов, Малахов, 1994</a>, с. 128—149.</span>
                </li>
                <li id="cite_note-_3ab5ca47efa1dd47-24"><span class="mw-cite-backlink">↑ <a href="#cite_ref-_3ab5ca47efa1dd47_24-0"><sup><i><b>1</b></i></sup></a> <a href="#cite_ref-_3ab5ca47efa1dd47_24-1"><sup><i><b>2</b></i></sup></a> <a href="#cite_ref-_3ab5ca47efa1dd47_24-2"><sup><i><b>3</b></i></sup></a></span> <span class="reference-text"><a href="#CITEREFВестхайде,_Ригер2008">Вестхайде, Ригер, 2008</a>, с. 755.</span>
                </li>
                <li id="cite_note-_4b67886771790e66-25"><span class="mw-cite-backlink"><a href="#cite_ref-_4b67886771790e66_25-0">↑</a></span> <span class="reference-text"><a href="#CITEREFАдрианов,_Малахов1994">Адрианов, Малахов, 1994</a>, с. 150—157.</span>
                </li>
                <li id="cite_note-_6a520a8a8aa36fd4-26"><span class="mw-cite-backlink">↑ <a href="#cite_ref-_6a520a8a8aa36fd4_26-0"><sup><i><b>1</b></i></sup></a> <a href="#cite_ref-_6a520a8a8aa36fd4_26-1"><sup><i><b>2</b></i></sup></a> <a href="#cite_ref-_6a520a8a8aa36fd4_26-2"><sup><i><b>3</b></i></sup></a></span> <span class="reference-text"><a href="#CITEREFАдрианов,_Малахов1994">Адрианов, Малахов, 1994</a>, с. 161—164.</span>
                </li>
                <li id="cite_note-27"><span class="mw-cite-backlink"><a href="#cite_ref-27">↑</a></span> <span class="reference-text"><span class="citation"><i><span class="nowrap">Chariton A. A.</span>, <span class="nowrap">Ho K. T.</span>, <span class="nowrap">Proestou D.</span>, <span class="nowrap">Bik H.</span>, <span class="nowrap">Simpson S. L.</span>, <span class="nowrap">Portis L. M.</span>, <span class="nowrap">Cantwell M. G.</span>, <span class="nowrap">Baguley J. G.</span>, <span class="nowrap">Burgess R. M.</span>, <span class="nowrap">Pelletier M. M.</span>, <span class="nowrap">Perron M.</span>, <span class="nowrap">Gunsch C.</span>, <span class="nowrap">Matthews R. A.</span></i> <a rel="nofollow" class="external text" href="https://www.ncbi.nlm.nih.gov/pubmed/24399368">A molecular-based approach for examining responses of eukaryotes in microcosms to contaminant-spiked estuarine sediments.</a> <span class="ref-info" style="cursor:help;" title="на английском языке">(англ.)</span> // Environmental Toxicology And Chemistry. — 2014. — February (<span class="nowrap">vol. 33</span>, <span class="nowrap">no. 2</span>). — <span class="nowrap">P. 359—369</span>. — <a href="/wiki/Doi" class="mw-redirect" title="Doi">doi</a>:<a rel="nofollow" class="external text" href="https://dx.doi.org/10.1002%2Fetc.2450">10.1002/etc.2450</a>. — <a class="external mw-magiclink-pmid" rel="nofollow" href="//www.ncbi.nlm.nih.gov/pubmed/24399368?dopt=Abstract">PMID 24399368</a>.</span><span class="plainlinks noprint" style="font-size:85%;"> [<a class="external text" href="https://ru.wikipedia.org/w/index.php?title=%D0%A8%D0%B0%D0%B1%D0%BB%D0%BE%D0%BD:Cite_pmid/24399368&action=edit&editintro=Шаблон:Cite_pmid/editintro2">исправить</a>]</span></span>
                </li>
                <li id="cite_note-_8fc5ef1cad696b67-28"><span class="mw-cite-backlink"><a href="#cite_ref-_8fc5ef1cad696b67_28-0">↑</a></span> <span class="reference-text"><a href="#CITEREFАдрианов,_Малахов1994">Адрианов, Малахов, 1994</a>, с. 157—160.</span>
                </li>
                <li id="cite_note-29"><span class="mw-cite-backlink"><a href="#cite_ref-29">↑</a></span> <span class="reference-text">Класс <a rel="nofollow" class="external text" href="http://www.marinespecies.org/aphia.php?p=taxdetails&id=101060"><i>Kinorhyncha</i></a> <span class="ref-info" style="cursor:help;" title="на английском языке">(англ.)</span> в Мировом реестре морских видов (<a href="/wiki/World_Register_of_Marine_Species" title="World Register of Marine Species">World Register of Marine Species</a>). <span class="ref-info" style="cursor:help;" title="Дата последней проверки этой ссылки">(Проверено 6 июля 2017)</span></span>
                </li>
                <li id="cite_note-_83713271714e51ce-30"><span class="mw-cite-backlink">↑ <a href="#cite_ref-_83713271714e51ce_30-0"><sup><i><b>1</b></i></sup></a> <a href="#cite_ref-_83713271714e51ce_30-1"><sup><i><b>2</b></i></sup></a></span> <span class="reference-text"><a href="#CITEREFРупперт,_Фокс,_Барнс2008">Рупперт, Фокс, Барнс, 2008</a>, с. 56.</span>
                </li>
                <li id="cite_note-31"><span class="mw-cite-backlink"><a href="#cite_ref-31">↑</a></span> <span class="reference-text">Отряд <a rel="nofollow" class="external text" href="http://www.marinespecies.org/aphia.php?p=taxdetails&id=101064"><i>Cyclorhagida</i></a> <span class="ref-info" style="cursor:help;" title="на английском языке">(англ.)</span> в Мировом реестре морских видов (<a href="/wiki/World_Register_of_Marine_Species" title="World Register of Marine Species">World Register of Marine Species</a>). <span class="ref-info" style="cursor:help;" title="Дата последней проверки этой ссылки">(Проверено 8 декабря 2018)</span></span>
                </li>
                <li id="cite_note-_3ab5ca47efa1dd44-32"><span class="mw-cite-backlink"><a href="#cite_ref-_3ab5ca47efa1dd44_32-0">↑</a></span> <span class="reference-text"><a href="#CITEREFВестхайде,_Ригер2008">Вестхайде, Ригер, 2008</a>, с. 756.</span>
                </li>
                <li id="cite_note-33"><span class="mw-cite-backlink"><a href="#cite_ref-33">↑</a></span> <span class="reference-text">Отряд <a rel="nofollow" class="external text" href="http://www.marinespecies.org/aphia.php?p=taxdetails&id=101065"><i>Homalorhagida</i></a> <span class="ref-info" style="cursor:help;" title="на английском языке">(англ.)</span> в Мировом реестре морских видов (<a href="/wiki/World_Register_of_Marine_Species" title="World Register of Marine Species">World Register of Marine Species</a>). <span class="ref-info" style="cursor:help;" title="Дата последней проверки этой ссылки">(Проверено 8 декабря 2018)</span></span>
                </li>
                <li id="cite_note-34"><span class="mw-cite-backlink"><a href="#cite_ref-34">↑</a></span> <span class="reference-text"><span class="citation"><i><span class="nowrap">Yamasaki H.</span>, <span class="nowrap">Fujimoto S.</span>, <span class="nowrap">Miyazaki K.</span></i> <a rel="nofollow" class="external text" href="https://www.ncbi.nlm.nih.gov/pubmed/26605063">Phylogenetic position of Loricifera inferred from nearly complete 18S and 28S rRNA gene sequences.</a> <span class="ref-info" style="cursor:help;" title="на английском языке">(англ.)</span> // Zoological Letters. — 2015. — <span class="nowrap">Vol. 1</span>. — <span class="nowrap">P. 18—18</span>. — <a href="/wiki/Doi" class="mw-redirect" title="Doi">doi</a>:<a rel="nofollow" class="external text" href="https://dx.doi.org/10.1186%2Fs40851-015-0017-0">10.1186/s40851-015-0017-0</a>. — <a class="external mw-magiclink-pmid" rel="nofollow" href="//www.ncbi.nlm.nih.gov/pubmed/26605063?dopt=Abstract">PMID 26605063</a>.</span><span class="plainlinks noprint" style="font-size:85%;"> [<a class="external text" href="https://ru.wikipedia.org/w/index.php?title=%D0%A8%D0%B0%D0%B1%D0%BB%D0%BE%D0%BD:Cite_pmid/26605063&action=edit&editintro=Шаблон:Cite_pmid/editintro2">исправить</a>]</span></span>
                </li>
                <li id="cite_note-f-35"><span class="mw-cite-backlink">↑ <a href="#cite_ref-f_35-0"><sup><i><b>1</b></i></sup></a> <a href="#cite_ref-f_35-1"><sup><i><b>2</b></i></sup></a></span> <span class="reference-text"><span class="citation"><i><span class="nowrap">Sørensen M. V.</span>, <span class="nowrap">Dal Zotto M.</span>, <span class="nowrap">Rho H. S.</span>, <span class="nowrap">Herranz M.</span>, <span class="nowrap">Sánchez N.</span>, <span class="nowrap">Pardos F.</span>, <span class="nowrap">Yamasaki H.</span></i> <a rel="nofollow" class="external text" href="https://www.ncbi.nlm.nih.gov/pubmed/26200115">Phylogeny of Kinorhyncha Based on Morphology and Two Molecular Loci.</a> <span class="ref-info" style="cursor:help;" title="на английском языке">(англ.)</span> // PloS One. — 2015. — <span class="nowrap">Vol. 10</span>, <span class="nowrap">no. 7</span>. — <span class="nowrap">P. e0133440—0133440</span>. — <a href="/wiki/Doi" class="mw-redirect" title="Doi">doi</a>:<a rel="nofollow" class="external text" href="https://dx.doi.org/10.1371%2Fjournal.pone.0133440">10.1371/journal.pone.0133440</a>. — <a class="external mw-magiclink-pmid" rel="nofollow" href="//www.ncbi.nlm.nih.gov/pubmed/26200115?dopt=Abstract">PMID 26200115</a>.</span><span class="plainlinks noprint" style="font-size:85%;"> [<a class="external text" href="https://ru.wikipedia.org/w/index.php?title=%D0%A8%D0%B0%D0%B1%D0%BB%D0%BE%D0%BD:Cite_pmid/26200115&action=edit&editintro=Шаблон:Cite_pmid/editintro2">исправить</a>]</span></span>
                </li>
                <li id="cite_note-36"><span class="mw-cite-backlink"><a href="#cite_ref-36">↑</a></span> <span class="reference-text"><span class="citation"><i><span class="nowrap">Popova O. V.</span>, <span class="nowrap">Mikhailov K. V.</span>, <span class="nowrap">Nikitin M. A.</span>, <span class="nowrap">Logacheva M. D.</span>, <span class="nowrap">Penin A. A.</span>, <span class="nowrap">Muntyan M. S.</span>, <span class="nowrap">Kedrova O. S.</span>, <span class="nowrap">Petrov N. B.</span>, <span class="nowrap">Panchin Y. V.</span>, <span class="nowrap">Aleoshin V. V.</span></i> <a rel="nofollow" class="external text" href="https://www.ncbi.nlm.nih.gov/pubmed/27755612">Mitochondrial Genomes of Kinorhyncha: trnM Duplication and New Gene Orders within Animals.</a> <span class="ref-info" style="cursor:help;" title="на английском языке">(англ.)</span> // PloS One. — 2016. — <span class="nowrap">Vol. 11</span>, <span class="nowrap">no. 10</span>. — <span class="nowrap">P. e0165072—0165072</span>. — <a href="/wiki/Doi" class="mw-redirect" title="Doi">doi</a>:<a rel="nofollow" class="external text" href="https://dx.doi.org/10.1371%2Fjournal.pone.0165072">10.1371/journal.pone.0165072</a>. — <a class="external mw-magiclink-pmid" rel="nofollow" href="//www.ncbi.nlm.nih.gov/pubmed/27755612?dopt=Abstract">PMID 27755612</a>.</span><span class="plainlinks noprint" style="font-size:85%;"> [<a class="external text" href="https://ru.wikipedia.org/w/index.php?title=%D0%A8%D0%B0%D0%B1%D0%BB%D0%BE%D0%BD:Cite_pmid/27755612&action=edit&editintro=Шаблон:Cite_pmid/editintro2">исправить</a>]</span></span>
                </li>
                <li id="cite_note-37"><span class="mw-cite-backlink"><a href="#cite_ref-37">↑</a></span> <span class="reference-text"><span class="citation"><span class="citation"><span lang="und"><a rel="nofollow" class="external text" href="https://repository.si.edu/bitstream/handle/10088/5533/SCtZ-0500-Lo_res.pdf?sequence=2">Robert Higgins. Zelinkaderidae, a New Family of Cyclorhagid Kinorhyncha</a></span><span class="hidden-ref" style="display:none"><b> <span class="ref-info" style="cursor:help;" title="на неопределённом языке">(неопр.)</span></b></span>.</span></span></span>
                </li>
                <li id="cite_note-38"><span class="mw-cite-backlink"><a href="#cite_ref-38">↑</a></span> <span class="reference-text"><span class="citation"><i><span class="nowrap">Yamasaki H.</span>, <span class="nowrap">Fujimoto S.</span></i> <a rel="nofollow" class="external text" href="https://www.ncbi.nlm.nih.gov/pubmed/24624018">Two new species in the Echinoderes coulli group (Echinoderidae, Cyclorhagida, Kinorhyncha) from the Ryukyu Islands, Japan.</a> <span class="ref-info" style="cursor:help;" title="на английском языке">(англ.)</span> // ZooKeys. — 2014. — <span class="nowrap">No. 382</span>. — <span class="nowrap">P. 27—52</span>. — <a href="/wiki/Doi" class="mw-redirect" title="Doi">doi</a>:<a rel="nofollow" class="external text" href="https://dx.doi.org/10.3897%2Fzookeys.382.6761">10.3897/zookeys.382.6761</a>. — <a class="external mw-magiclink-pmid" rel="nofollow" href="//www.ncbi.nlm.nih.gov/pubmed/24624018?dopt=Abstract">PMID 24624018</a>.</span><span class="plainlinks noprint" style="font-size:85%;"> [<a class="external text" href="https://ru.wikipedia.org/w/index.php?title=%D0%A8%D0%B0%D0%B1%D0%BB%D0%BE%D0%BD:Cite_pmid/24624018&action=edit&editintro=Шаблон:Cite_pmid/editintro2">исправить</a>]</span></span>
                </li>
                <li id="cite_note-39"><span class="mw-cite-backlink"><a href="#cite_ref-39">↑</a></span> <span class="reference-text"><span class="citation"><i><span class="nowrap">Thomsen V. G.</span>, <span class="nowrap">Rho H. S.</span>, <span class="nowrap">Kim D.</span>, <span class="nowrap">Sørensen M. V.</span></i> <a rel="nofollow" class="external text" href="https://www.ncbi.nlm.nih.gov/pubmed/25243279">A new species of Dracoderes (Kinorhyncha: Dracoderidae) from Korea provides further support for a dracoderid-homalorhagid relationship.</a> <span class="ref-info" style="cursor:help;" title="на английском языке">(англ.)</span> // Zootaxa. — 2013. — <span class="nowrap">Vol. 3682</span>. — <span class="nowrap">P. 133—142</span>. — <a class="external mw-magiclink-pmid" rel="nofollow" href="//www.ncbi.nlm.nih.gov/pubmed/25243279?dopt=Abstract">PMID 25243279</a>.</span><span class="plainlinks noprint" style="font-size:85%;"> [<a class="external text" href="https://ru.wikipedia.org/w/index.php?title=%D0%A8%D0%B0%D0%B1%D0%BB%D0%BE%D0%BD:Cite_pmid/25243279&action=edit&editintro=Шаблон:Cite_pmid/editintro2">исправить</a>]</span></span>
                </li>
                <li id="cite_note-40"><span class="mw-cite-backlink"><a href="#cite_ref-40">↑</a></span> <span class="reference-text"><span class="citation"><i><span class="nowrap">Sørensen M. V.</span>, <span class="nowrap">Rho H. S.</span>, <span class="nowrap">Kim D.</span></i> <a rel="nofollow" class="external text" href="https://www.ncbi.nlm.nih.gov/pubmed/20192691">A new species of Condyloderes (Cyclorhagida, Kinorhyncha) from Korea.</a> <span class="ref-info" style="cursor:help;" title="на английском языке">(англ.)</span> // Zoological Science. — 2010. — March (<span class="nowrap">vol. 27</span>, <span class="nowrap">no. 3</span>). — <span class="nowrap">P. 234—242</span>. — <a href="/wiki/Doi" class="mw-redirect" title="Doi">doi</a>:<a rel="nofollow" class="external text" href="https://dx.doi.org/10.2108%2Fzsj.27.234">10.2108/zsj.27.234</a>. — <a class="external mw-magiclink-pmid" rel="nofollow" href="//www.ncbi.nlm.nih.gov/pubmed/20192691?dopt=Abstract">PMID 20192691</a>.</span><span class="plainlinks noprint" style="font-size:85%;"> [<a class="external text" href="https://ru.wikipedia.org/w/index.php?title=%D0%A8%D0%B0%D0%B1%D0%BB%D0%BE%D0%BD:Cite_pmid/20192691&action=edit&editintro=Шаблон:Cite_pmid/editintro2">исправить</a>]</span></span>
                </li>
                </ol></div>'; // Текст 1 пресета
            }elseif ($url =='http://lr4/text.php?preset=2' ) {
                $text = '<div class="conthead discuss">
                <div class="title">
                  <div class="date left">
                    <strong>12 октября 2021</strong>
                  </div>
                    <h1 itemprop="headline">Россия–Украина: диалог возможен?</h1>
                </div>
                <hr/>
              </div>
                  <div class="date left">
                    <span>Время выхода в эфир:</span>
                    <strong class="red">12 октября 2021, 20:05</strong>
                  </div>
                </div>
                <hr/>
                  <div class="lead
                    rki8Fl5nj">
                    <strong class="lite">
                      Ведущие:
                    </strong>
                    <a href="/contributors/8924/"><b>Юрий Кобаладзе</b></a>, <a href="/contributors/4621/"><b>Светлана Сорокина</b></a>
                  </div>
                  </div>
              </div>
              
                  <div class="multimedia mmtabs">
                    <div class="mediamenu">
                     <a href="#mmread" class="current read rki8Fl5nj clicked">
                       <span class="wsico">8</span><span class="text">читать</span>
                     </a>
                     <a href="/sounds/2917870.html" target="_blank"
                                      class="load rki8Fl5nj">
                                      <span class="wsico">#</span><span class="text">слушать</span>
                                      <span class="size">
                                        49:20
                                      </span>
                     </a>
                         <a href="https://cdn.echo.msk.ru/snd/2021-10-12-krug_sveta-2005-3543448.mp3" class="load rki8Fl5nj jsDownloadMedia"
                                    data-q2="https://cdn.echo.msk.ru/snd/2021-10-12-krug_sveta-2005-3543448.mp3"
                    data-q2-size="37.6 МБ"
                 data-q1="https://cdn.echo.msk.ru/snd/2021-10-12-krug_sveta-2005-sd-3543450.mp3"
                 data-q1-size="15.1 МБ">
                       <span class="wsico">$</span>
                       <span class="text">
                         Cкачать
                       </span>
                       <span class="size">
                       HD / SD
                       </span>
                       </a>
                    </div>
                    <div class="mmcontainer">
                     <div class="current mmread" id="mmread">
                       <div class="mmplayer">
                           <iframe width="640" height="360" src="https://echo.msk.ru/__cr/Pb4t1A086/ced1adkz/kdiImyMWLKakUzCISL7sbAbgya1UbMpNoDfPMarer09kNjatfVSzkqVoanG0k1Rem7pMuYAYjiUASGJTALu6QSSZq7_E4s-FZieRSGuN_l0UZXq9VbtYn5OGDuYNHV6NQhUUyJ4kcBOGSStzx5Clrwnb7KlxOD9Q0TkSNfMLqIGhGilv5_BdB4aGUDiZf1xM5vdo3eQ4eO4TRo-V_K0fbyCl1_r9dMDRNur6sWciN02ZGE0acQkP0zAJM_TQGrmCgDganYSB_Lckh0KLGI9tLaZlOOzEqarvsPYeNxyPf50CRGTanJfggWa6W8I247Wc65pMCrM4TPLj-CJVAruJA0BaypzXgX535kaTCTiPDWxFhxmNFki4zeFHXPYNfl2s09Wm6O1GMPJ3GysDF4L3vzmYnchA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              
                         <div class="typical itemprop="articleBody" dialog _ga1_on_ contextualizable include-relap-widget">
                          <p>
              <b>Ю. Кобаладзе</b><span>―</span>  Здравствуйте. Добрый вечер. После долгого отсутствия мы, наконец, воссоединились со Светланой Сорокиной.  </p>
              <p>
              <b>С. Сорокина</b><span>―</span>  Добрый вечер. </p>
              <p>
              <b>Ю. Кобаладзе</b><span>―</span>  Месяца два не виделись. Теперь надолго мы с вами. И сегодня у нас животрепещущая тема: Россия и Украина.  Возможен ли диалог. Навеянная последней статьей Дмитрия Медведева в «Коммерсанте». </p>
              <p>
              <b>С. Сорокина</b><span>―</span>  Гостей представь, пожалуйста. </p>
              <p>
              <b>Ю. Кобаладзе</b><span>―</span>   Гостей представлю. Не волнуйся. С удовольствием представляю наших гостей. Частого гостя  Романа Цимбалюка, шефа-корреспондента информационного агентства «УНИАН» и редкого гостя, по-моему, на «Эхо Москвы», давно я тебя не слышал.  Константин Затулин, которого я поздравляю с первым днем работы думы нового созыва.  </p>
              <p>
              <b>К. Затулин</b><span>―</span> Спасибо. </p>
              <p>
              <b>С. Сорокина</b><span>―</span>  Здравствуйте, уважаемые гости. Действительно накануне визита Виктории Нуланд. А, судя по всему в повестке, есть вопрос об Украине. Поскольку она завтра встречается с Козаком. И вот накануне визита Виктории Нуланд выходит статья Дмитрия Анатольевича Медведева, который наш бывший президент, бывший премьер-министр, а ныне зампред Совета Безопасности РФ. И статья вышла в «Коммерсанте» и лично меня повергла в некоторое изумление. Сначала хотела спросить, какое у вас впечатление от прочтения этой статьи.  Я была изумлена. Дело в том, что уже довольно много лет назад, когда Дмитрий Анатольевич был президентом, я входила в СПЧ и мы с ним встречались неоднократно. Это были дежурные встречи с советом. И мне он казался человеком вполне себе интеллигентным, юрист. Он хорошо, грамотно говорил. Не замечала за ним склонностей к сниженной лексике или что-то в этом духе. И вдруг статья, написанная как будто не им, а кем-то совершенно другим. Я в изумлении. Ваше впечатление. Константин Федорович. </p>
              <p>
              <b>К. Затулин</b><span>―</span> У меня, я уже успел сказать «Московскому комсомольцу»  — двойственное впечатление. Чувства Дмитрия Анатольевича разделяю. Стилистику — не во всем. А с выводами я не согласен. </p>
              <p>
              <b>С. Сорокина</b><span>―</span>  Об этом позже. Роман. </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Нечестный документ получился. По той причине, что его корректировали после публикации. Вы исправляли грамматические ошибки в этом превью про козу, про волка. Кто писал этот текст на украинском языке, то там в одном предложении было три грамматических ошибки. И мне кажется для человека, занимающего такую должность, можно было бы Януковичу позвонить, они хорошо знакомы. Чтобы он подсказал, как это сформулировать. Ну а текст, классные слова там есть: дебильная, Крымская платформа, что-то ублюдочный и все остальное. </p>
              <p>
              </p>
              <blockquote class="tw">К.Затулин: Чувства Дмитрия Анатольевича разделяю. Стилистику — не во всем. А с выводами я не согласен</blockquote>  <p>
              <b>С. Сорокина</b><span>―</span>  Нацики. </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Чем больше нас так будут называть – тем меньше иллюзий будет у Украины. Хотя их уже нет. </p>
              <p>
              <b>К. Затулин</b><span>―</span> Просто вашим языком написана статья. </p>
              <p>
              <b>С. Сорокина</b><span>―</span>  Это уже наш язык. </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Если мы говорим о Крымской платформе… </p>
              <p>
              <b>К. Затулин</b><span>―</span> Мы говорим о вашем языке, в том числе лично вашем. Сколько раз вы это уже демонстрировали в своих собственных материалах. И тут вдруг удивились. Кто-то вам ответил в таком же стиле. </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Да нет проблем, мы можем держать удар в любом стиле. Просто вопрос в том, что если вы меня сравниваете с зам. секретаря Совета Безопасности России, то мне конечно это льстит. </p>
              <p>
              <b>С. Сорокина</b><span>―</span>  Все-таки бывший президент это не кто-то, кто ругается на все 4 стороны на каком-то ток-шоу. Где мы уже привыкли. </p>
              <p>
              <b>К. Затулин</b><span>―</span> Не Цимбалюк. </p>
              <p>
              <b>С. Сорокина</b><span>―</span>  Не Цимбалюк. Я хочу сказать, что для меня изумление, что человек такого уровня позволяет себе такую сниженную лексику.  </p>
              <p>
              <b>К. Затулин</b><span>―</span> Будто бы не слушаете, не читаете или не знаете, к какой лексике прибегают на самом деле на Украине. </p>
              <p>
              <b>С. Сорокина</b><span>―</span>   А я знаю, к какой лексике прибегают у нас. </p>
              <p>
              <b>К. Затулин</b><span>―</span> Стилистику далеко не во всем разделяю.  И сам ею не пользуюсь. Как правило, во всяком случае.  Пусть кто-то мне хоть что-то процитирует из меня, что бы свидетельствовало о другом. Но удивляться на Украине стилистике, которая выражена была в статье Медведева – это значит просто удивляться самому тому, что происходит на Украине, когда речь заходит о России. Вы послушайте, что они говорят. На разном уровне. На официальном, на не официальном. Депутаты, советники. Сам Зеленский. Грязный газ, который мы поставляем. Это кто говорил? Это Зеленский говорил. </p>
              <p>
              </p>
              <blockquote class="tw">Р.Цимбалюк: Если вы меня сравниваете с зам. секретаря Совета Безопасности России, то мне конечно это льстит</blockquote>  <p>
              <b>Ю. Кобаладзе</b><span>―</span>  Про газ можно сказать, что он грязный.  </p>
              <p>
              <b>К. Затулин</b><span>―</span> Ну да. И заодно… </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Так мы предлагаем его очистить путем транзита через Украину. </p>
              <p>
              <b>К. Затулин</b><span>―</span> Требовать при этом ультимативно, чтобы этот газ транзитировался через Украину. Это же логично все. Логика отдыхает. </p>
              <p>
              <b>С. Сорокина</b><span>―</span>  Давайте вернемся к статье. И вопрос следующий. А зачем вообще эта статья была, как вы полагаете. К чему бы этот выплеск эмоций.  </p>
              <p>
              <b>К. Затулин</b><span>―</span> Эта статья, я не знаю, зачем она была, я не хочу сейчас размышлять в духе того, что сразу стало темой, что Медведев пытается обратить на себя внимание. Как правило, это пишут обо всех, кто выступает вот резко так, неожиданно. Это пускай сделает кто-то другой. А я хочу сказать, что статья, по всей видимости, трудно отделаться от впечатления, что она была помещена в «Коммерсанте» именно с приездом Нуланд. Поскольку в этой статье выражена мысль, что с вассалами говорить не о чем. Надо говорить с сюзеренами. Сюзерен как его представитель приезжает. Поэтому это трудно одно от другого отделить. Во-вторых, эта статья, на мой взгляд, вызвана, конечно, накопившимся раздражением от того, что мы слышим и видим на Украине, когда дело касается перспектив контактов и переговоров даже на высоком уровне. Заметьте, что не кто-нибудь, а ваш министр иностранных дел, дорогой Роман, исключительно часто рассказывает о том, как с позиции силы будет Зеленский разговаривать с Путиным. Я не знаю, откуда у вас такая позиция силы взялась. Как-то я ее не замечаю, эту силу.  Но это довольно  плохой рецепт для того, кто ищет встречи с другим президентом. Совершенно точно ни на какие ультиматумы Путин  со стороны Зеленского не поддастся. </p>
              <p>
              <b>С. Сорокина</b><span>―</span>  Давайте Роману дадим слово. </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Я даже не знаю, где вы в Виктории Нуланд рассмотрели сюзерена. Тем более, скорее всего, она приехала в Москву без печенья. А что касается возможной встречи… </p>
              <p>
              <b>К. Затулин</b><span>―</span> Это к вам, не к нам. Нам печенье не нужно. </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Министры иностранных дел разные вещи говорят. И ваши визави Дмитрия Кулебы тоже не отстают. Но если стороны хотят наладить какие-то отношения, контакты, еще что-то – они это сделают. Но, к сожалению, это не наш случай. </p>
              <p>
              <b>К. Затулин</b><span>―</span> Последние месяцы вы хотите наладить контакты в том стиле, в котором вы это делаете.  </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Насколько я понимаю и вижу ситуацию, никаких переговоров тем более на высшем уровне между Украиной и Россией не предвидится. Если стороны не могут даже обсудить повестку дня, будучи в переговорах,  ну конечно, можно поздравить нас с тем, и кстати вас, как представителя российской власти. Дошли мы очень глубоко. Главное — чтобы не хуже.  </p>
              <p>
              <b>С. Сорокина</b><span>―</span>  Куда уж хуже. </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Есть куда. Вы же не смотрите российское телевидение. Послушаешь – там о-го-го. </p>
              <p>
              <b>К. Затулин</b><span>―</span> Хуже того, они не смотрят и украинское. Уж там совсем о-го-го. </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Константин Федорович, мне приятно, что вы свою страну сравниваете с нашей.  </p>
              <p>
              <b>К. Затулин</b><span> ―</span>  Конечно! Почему же нет?
              <b>С. Сорокина</b><span>―</span>  Кто из нас больше и сильнее.  </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Если у вас и экономический и военный потенциал значительно сильнее, то чего бояться Путину на переговорах в Зеленским. А получается с украинской точки зрения, что я понимаю, что обсуждать объективно нечего, потому что по ключевому вопросу войны и мира никаких уступок не будет ни с вашей стороны, ни с нашей.  </p>
              <p>
              </p>
              <blockquote class="tw">К.Затулин: Совершенно точно ни на какие ультиматумы Путин  со стороны Зеленского не поддастся</blockquote>  <p>
              <b>К. Затулин</b><span>―</span> А в чем проблема с войной и миром. Вы воюете с Россией или нет? </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  По сути – да. </p>
              <p>
              <b>К. Затулин</b><span>―</span> Ну  объявите войну России. Почему не объявляете. Вы назвали ее страной агрессором. И от страны агрессора требуете, чтобы она прокачивала как можно больше газа через ваш газопровод. </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Чтобы его чистить. Чтобы он не был таким грязным. </p>
              <p>
              <b>К. Затулин</b><span>―</span> Эту чепуху можете рассказывать кому угодно.  Особенно хорошо если энергетикам будете рассказывать. Не в этой аудитории. Зачем? Где логика  этой страны, которая агрессор требовать, причем навлекать на нее санкции за то, что она не будет поставлять газ и так далее.  </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  На войне как на войне. Все средства хороши. </p>
              <p>
              <b>К. Затулин</b><span>―</span> Да не на войне, это просто отражение характера украинского государства, которое, к сожалению, слабое, зависимое. И при этом хочет выглядеть сильным, могущественным.  </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Сальдо взаимной торговли… </p>
              <p>
              <b>К. Затулин</b><span>―</span> Упало во много раз вашими усилиями. </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Упало, но дело в том, что оно для России позитивное. То есть вы торгуете с нами больше, чем мы с вами. Поэтому… </p>
              <p>
              <b>К. Затулин</b><span>―</span> Если у вас есть что предложить – давайте мы купим. </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Поэтому эти претензии…  </p>
              <p>
              <b>К. Затулин</b><span>―</span> Я хотел спросить. Скажите, чем газ от угля отличается с точки зрения того, продавать его на Украину или нет.  Медведчука судят или хотят судить за то, что он покупал уголь и продавал его. Между прочим, тот самый уголь, который добывается на украинской же территории. Мы, кстати, ее не признаем ни ДНР, ни ЛНР, как известно. </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Это очень хорошо, что вы это сказали. Только вы де-юре не признаете, а де-факто признаете. </p>
              <p>
              <b>К. Затулин</b><span>―</span> Медведчука за это хотят судить. При этом от России требуют, чтобы она увеличила поставки газа через Украину. Вот объясните эту логику и мне будет все понятно. </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Во-первых, требуют поставки увеличить все, в том числе европейские потребители. </p>
              <p>
              <b>К. Затулин</b><span>―</span> Вы за себя говорите. Не за европейцев. Все время о ком-то другом. За всю Европу, за ЕС, объясняете ему, как ему надо жить. </p>
              <p>
              <b>С. Сорокина</b><span>―</span>  Константин Федорович, но вас послушать, зависимость газовая Украины и взаимозависимость России это что теперь дает основания… </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Нет, уже взаимозависимости нет.  </p>
              <p>
              <b>С. Сорокина</b><span>―</span>  Есть необходимость, чтобы российский газ прокачивался. И что это обосновывает любое хамское теперь отношение к этой стране.  </p>
              <p>
              <b>К. Затулин</b><span>―</span> Секундочку. Я про хамское отношение ничего не говорил. Я говорил о том, что ищу логику в действиях государства Украины. Не в статье, а в официальной политике.  </p>
              <p>
              <b>С. Сорокина</b><span>―</span>  А вы нашу логику хорошо видите? </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  …экономическая безопасность. </p>
              <p>
              <b>К. Затулин</b><span>―</span> Наша логика, что в данном случае содержится в статье Медведева, там речь идет исключительно о том, что на высоком уровне пришли к выводу, что не о чем говорить с нынешним украинским руководством. Это я могу подтвердить, потому что все поведение украинского руководства об этом свидетельствует. Украинское руководство нынешнее завело в окончательный тупик российско-украинские  отношения. Притом, что даже в отличие от предыдущего Порошенко поставила во главу угла не вопросы Донбасса и умиротворения на Донбассе, а так называемую Крымскую платформу. То есть заводит тот, кто ставит Крым во главу угла наших проблем, тот заведомо заводит в тупик любые переговоры. </p>
              <p>
              <b>С. Сорокина</b><span>―</span>  Идея этой статьи в том, что нельзя продолжать диалог с нынешними украинскими властями. </p>
              <p>
              <b>К. Затулин</b><span>―</span> Эта идея, только часть вопроса на самом деле. Об отношениях России и Украины. Потому что если диалог с высшим руководством Украины сегодня бесперспективен, не значит, что необходимо, как было сказано в статье, просто сидеть и ждать. С этим я не согласен абсолютно.  </p>
              <p>
              <b>С. Сорокина</b><span>―</span>  На этом пока остановимся. Потом продолжите мысль. </p>
              <p>
              <b>К. Затулин</b><span>―</span> Вся проблема нашей политики на Украине на протяжении лет состояла в том, что пытались договориться на высоком уровне. Пытались в лучшем случае договориться с бизнес-элитой. Но никогда не думали, что надо вообще обращаться напрямую к людям, которые  думают, может быть, совершенно иное.  Попытки такого рода делались. Ну вот Путин, например, написал статью о русских и украинцах, как одном народе. Тоже можно спорить: один народ или два народа. Во всяком случае, это другой подход. Здесь об этом ничего. Это плохо и это в данном случае изъян этой статьи, с которым я не могу согласиться. </p>
              <p>
              <b>С. Сорокина</b><span>―</span>  Роман. </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Вы знаете, что-то мне подсказывает, что современному российскому государству кроме неприятностей простому гражданину Украины предложить нечего. И история даже оккупированных частей Донбасса об этом говорит. Где вот простому человеку совсем не сладко и неудобно. И да, там российский флаг, но почему-то народ оттуда уезжает с какими-то рекордными темпами. </p>
              <p>
              <b>К. Затулин</b><span>―</span> Как с Украиной? Народ приезжает на Украину? В целом? </p>
              <p>
              </p>
              <blockquote class="tw">Р.Цимбалюк: Если у вас и экономический и военный потенциал сильнее, то чего бояться Путину на переговорах в Зеленским</blockquote>  <p>
              <b>Р. Цимбалюк</b><span>―</span> Эти два вопроса они не связаны… </p>
              <p>
              <b>К. Затулин</b><span>―</span> Вот это интересно. Почему же это?     </p>
              <p>
              <b>С. Сорокина</b><span>―</span>  Секундочку. Дайте сказать Роману. Он вас не перебивал. </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Территория, которая оказалась де-факто под российским управлением, людям ничего не дало.  </p>
              <p>
              <b>К. Затулин</b><span>―</span> Вы о Крыме или Донбассе? </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  В первую очередь о Донбассе. </p>
              <p>
              <b>К. Затулин</b><span>―</span> А в Крым приезжают или уезжают оттуда?  </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Подождите. Украинцы многие уезжают, а то, что из РФ на оккупированную территорию переселяются – это совсем другая история. </p>
              <p>
              <b>К. Затулин</b><span>―</span> Оккупированный Крым или Донбасс? </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  И Крым и Донбасс. </p>
              <p>
              <b>К. Затулин</b><span>―</span> На оккупированный Крым приезжают, а с оккупированного Донбасса уезжают. Так надо… </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  По сути – да. </p>
              <p>
              <b>К. Затулин</b><span>―</span> В Крым-то приезжают почему? </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Я так думаю, что Россия настолько большая страна, что неблагоприятных условий и природных и других достаточно много. Плюс военные. </p>
              <p>
              <b>К. Затулин</b><span>―</span> Ваша страна теряет население все годы независимости.  </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  …может прирасти население? </p>
              <p>
              <b>К. Затулин</b><span>―</span> Никак не может наладить внутреннюю свою жизнь. Из одного кризиса в другой.  </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Это не дает права… </p>
              <p>
              <b>С. Сорокина</b><span>―</span>  Послушайте, а почему мы добавляем им проблем. У них своих хватало. Зачем мы-то ввязывались </p>
              <p>
              <b>К. Затулин</b><span>―</span> Мы не добавляем проблем. </p>
              <p>
              <b>С. Сорокина</b><span>―</span>  А ну да, не добавляем. </p>
              <p>
              <b>К. Затулин</b><span>―</span> Их проблемы на самом деле перетекают… </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Очень интересно вы говорите,  что-то предложить украинцам – это после чего? После Крыма и Донбасса? И что вы думаете и как вы это будете предлагать?  </p>
              <p>
              <b>К. Затулин</b><span>―</span> Это не я предлагал. А только что предложил Путин – увеличить транзит через Украину. Вы не слышали? Только что предложил и не раз предлагал прямой контракт. На что ваш гордый премьер-министр сказал: ни за что. </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Посмотрим.  </p>
              <p>
              <b>К. Затулин</b><span>―</span> Это было или нет? </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Вопрос… </p>
              <p>
              <b>К. Затулин</b><span>―</span> Вы сейчас беспокоитесь о том, что будете замерзать. Говорите: что может Россия предложить Украине.  Ну ясно, что мы не можем предложить русский язык, потому что вы сами по-моему от украинского с кириллицы на латиницу переходите. </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Пока нет. </p>
              <p>
              <b>К. Затулин</b><span>―</span> Во всяком случае, такой ответственный человек, как секретарь вашего совета национальной безопасности ответственно за это ратует. Публично. Но мы вам этого не предлагаем. Русскую культуру – вы от нее отказываетесь. Ну вот газ, например, он вообще грязный. Опасный. Тем не менее, он вам нужен для прокачки. Но заключать с нами договор – да ни за что. Где логика?  </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Логика есть. Потому что очень часто контракты с РФ в этой сфере они предполагают энный набор политических уступок. </p>
              <p>
              <b>К. Затулин</b><span>―</span> Каких? </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Возможно и сейчас будет что-то подобное. Вы сказали, чем отличается уголь от газа.  Ну я еще могу добавить вакцину Спутник, почему все очень  часто предлагается в комплекте с Виктором Медведчуком. И это как раз говорит о политических уступках… Когда мы говорили  о статье Медведева, если вы позволите,  я закончу. Я думаю, что этот текст появился не в связи с приездом Виктории  Нуланд, а в связи с тем, что у Медведчука проблемы на работе.  В Украине. И Медведев и Медведчук на короткой ноге постоянно встречаются, созваниваются. Друг друга поздравляют.  </p>
              <p>
              <b>К. Затулин</b><span>―</span> Я об этом ничего не знаю. </p>
              <p>
              <b>С. Сорокина</b><span>―</span>  Ну хорошо </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Открыто происходит.  </p>
              <p>
              <b>К. Затулин</b><span>―</span> На мой взгляд, в день, когда приезжает Нуланд, выходит статья, это логично предположить, что это взаимосвязано. Что касается треволнений и проблем Медведчука, то они не первый день продолжаются. Раньше почему-то Медведев по этому поводу ничего не писал. А сейчас написал. Поэтому мне кажется мое предположение ближе к истине. </p>
              <p>
              <b>С. Сорокина</b><span>―</span>  Давайте вернемся… </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Вы выдвинули второе обвинение против Виктора Владимировича. Я не знаю, чем закончится суд. Он по-моему идет прямо сейчас.  </p>
              <p>
              <b>С. Сорокина</b><span>―</span>  Да-да. </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span> Возможно, его из-под домашнего ареста в СИЗО переведут. </p>
              <p>
              <b>С. Сорокина</b><span>―</span>  Вернемся в статье. Там действительно вдруг в середине возникает некоторое количество документов, которые времен войны. Рассекреченные, недавно из архивов вынутые. Эта отсылка к временам войны, к тому, что какие-то украинские граждане участвовали, в том числе в еврейских погромах и так далее. К чему сегодня этот отсыл? </p>
              <p>
              <b>Ю. Кобаладзе</b><span>―</span>  Для меня самое непонятное. </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Понятно, что украинцы виноваты во Второй мировой войне, они ее развязали. Сейчас Бандера, Шухевич это страшнее Гитлера. Поэтому таким образом можно трактовать. Именно российское государственное телевидение таким образом называет украинское руководство. Единственное, непонятно почему в России как-то выборочно эти архивы открывают. Ну взяли бы открыли все, чтобы люди могли почитать. Что там было в это время.  </p>
              <p>
              <b>Ю. Кобаладзе</b><span>―</span>  Зачем в этой статье, если согласиться с доводами Константина Федоровича, то непонятно вообще документы, к чему они привязаны? </p>
              <p>
              <b>К. Затулин</b><span>―</span> Я, во-первых, не являюсь адвокатом Медведева и если вы знакомы с историей, то вряд ли я могу быть в качестве адвоката.   У меня были свои проблемы во взаимоотношениях с Дмитрием Анатольевичем Медведевым. Но это дело прошлое и сейчас не об этом. </p>
              <p>
              <b>Ю. Кобаладзе</b><span>―</span>  Ты ему простил все. </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Вы пропустили один состав ГД.  </p>
              <p>
              </p>
              <blockquote class="tw">К.Затулин: Когда приезжает Нуланд, выходит статья, это логично предположить, что это взаимосвязано</blockquote>  <p>
              <b>К. Затулин</b><span>―</span>  Я нисколько не сомневаюсь, что Медведев вовлечен и прежде был вовлечен в дела с Украиной. Он и до того как стать президентом, премьером отвечал, курировал, как у нас говорят, как глава администрации отношения с Украиной. То есть он не новичок в этом вопросе. Почему он привел эти документы, я не знаю, можно было их приводить, можно нет – это вопрос стиля.  Но как я понимаю причину, по которой он процитировал, чтобы показать, что само по себе противоестественно, когда человек, который, по крайней мере, до момента как он стал президентом, не выглядел как шовинист, как националист, как человек, который считает возможным для себя подпевать всему тому, что происходит на Украине в связи с героизацией Бандеры, Шухевича и так далее. Уж, во всяком случае, не борется с этим совершенно точно. </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Ради России? Или ради чего. </p>
              <p>
              <b>К. Затулин</b><span>―</span> Не ради России, а ради своего собственного здоровья душевного. Потому что при чем тут Россия. Мы не считаем Бандеру и Шухевича страшнее Гитлера. Да не дай бог. Мы считаем просто, что само по себе то, что на Украине появились Бандеры, Шухевичи, а у нас Власовы и власовцы – это само по себе пятно на нашей репутации.  И пятно на вашей репутации. Но мы-то считаем это пятном и не собираемся реабилитировать Власова. А вы уже давно реабилитировали Бандеру, сделали его героем. </p>
              <p>
              <b>С. Сорокина</b><span>―</span>  Остановитесь, пожалуйста. </p>
              <p>
              <b>Ю. Кобаладзе</b><span>―</span>  Должен вас прервать, потому что у нас новости середины часа.  </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Бандера всю войну провел в концлагере немецком. </p>
              <p>
              <b>Ю. Кобаладзе</b><span>―</span>  Сейчас у нас новости, мы вернемся в студию через пару минут. </p>
              <p>
              НОВОСТИ </p>
              <p>
              <b>С. Сорокина</b><span>―</span>  Еще раз приветствуем вас. Говорим мы об отношениях России и Украины. К обсуждению подтолкнула вышедшая недавно статья Дмитрия Анатольевича Медведева, размещенная в газете «КоммерсантЪ», которую мы и рассматриваем, с чего бы она такая появилась. Скажите, пожалуйста, мы заговорили о том, что есть документы, отсылающие к войне,  вообще к чему эти этнические поиски, какие-то странные отсылки, которые делает Медведев в этой статье. Роман. </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Мне кажется, что сама постановка вопроса я так понимаю, на этническое происхождение Зеленского, у нас свободная страна и у нас украинцы разных национальностей, в том числе евреи.  И частенько нас обвиняют в том, что у нас что-то с антисемитизмом, но почему-то последние годы люди с фамилией Зеленский или Гройсман занимают высшие должностные посты в нашей стране. Поэтому мне кажется эти обвинения уже поэтому смешны. Понятно, что текст Дмитрия Анатольевича такой глубокий и все там аспекты от НАТО до истории, все это проговаривается. Просто когда он заканчивает текст словами, что Россия очень терпеливая и мы подождем, когда придет другое руководство пророссийское,  ну когда оно придет. Никогда. И поэтому не надо вести диалог с Украиной. Так этих переговоров нет. Их до этого не было. Вот сейчас будет вторая годовщина этой встречи в Париже. Поэтому когда все так удивляются, что не надо вести России переговоры с командой Зеленского. А вы что вели? Не вели. И у нас все сводится вместо того, чтобы обсуждать сущностные вопросы о том, как жить хотя бы рядом, чтобы не воевать при этом.  Де-факто не воевать. Потому что Константин Федорович говорит, что объявите нам войну. Люди, которые воюют против Украины на Донбассе, они ходят в российской военной форме и используют российское оружие. Откуда они его взяли. </p>
              <p>
              </p>
              <blockquote class="tw">К.Затулин: Причем тут Россия, мы не считаем Бандеру и Шухевича страшнее Гитлера. Да не дай бог</blockquote>  <p>
              <b>К. Затулин</b><span>―</span> Ну а вы ходите в американской форме и используете американское оружие. Что дальше? </p>
              <p>
              <b>С. Сорокина</b><span>―</span>  Но они на своей территории. </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Подождите. </p>
              <p>
              <b>К. Затулин</b><span>―</span> И те на своей территории. Они что,  чужие там на своей территории. </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  То есть я правильно понимаю, что… </p>
              <p>
              <b>К. Затулин</b><span>―</span> Пасечники, Пушилины.  Откуда-то завезенные что ли? </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  А Бородай – нет? </p>
              <p>
              <b>К. Затулин</b><span>―</span> Бородай не на этой территории. Бородай сейчас депутат ГД. Живет здесь. </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  А как же так получилось, что он возглавил первую оккупационную администрацию в Донецке. Приехал из Москвы, это у нас что, восстание шахтеров. Он у вас шахтер или тракторист? </p>
              <p>
              <b>К. Затулин</b><span>―</span> Скажите, пожалуйста, а как так получилось, что добрая часть министров приехали из США,  даже не обладая украинским гражданством, имея  двойное гражданство, вопреки законам Украины работали  в кабмине. Получилось так, что украинцы живут и в США, и на Украине. Точно также Бородаи живут в России и на Украине. Так и получилось в результате распада Советского Союза. В частности. Это вас удивляет? </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Интересное сравнение. </p>
              <p>
              <b>С. Сорокина</b><span>―</span>  Сравнение странное. Значит, мы можем вести себя кое-как.  Ссылаясь на чье-то поведение. </p>
              <p>
              <b>К. Затулин</b><span>―</span> В каком вопросе кое-как? </p>
              <p>
              <b>С. Сорокина</b><span>―</span>  В таком. </p>
              <p>
              <b>К. Затулин</b><span>―</span> Роман вспоминает истории 3-4 летней давности… </p>
              <p>
              <b>Р. Цимбалюк —  7</b><span>―</span>летней давности. </p>
              <p>
              <b>К. Затулин</b><span>―</span> Большелетней давности, для того чтобы сегодняшний современный этап каким-то образом охарактеризовать.   </p>
              <p>
              <b>С. Сорокина</b><span>―</span>  Дмитрий Анатольевич войну вспоминает и это ничего. </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Приехали россияне, захватили территорию, подняли там… </p>
              <p>
              <b>К. Затулин</b><span>―</span> Куда приехали, когда? </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  А Бородай он не россиянин? </p>
              <p>
              <b>К. Затулин</b><span>―</span> Бородай один взял и захватил территорию.  </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  А Стрелков? </p>
              <p>
              <b>К. Затулин</b><span>―</span> Вместе с Бородаем. Два человека захватили территорию. </p>
              <p>
              <b>С. Сорокина</b><span>―</span>  Они занимали соответствующие посты.  </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Один был директором оккупационной администрации, другой министром обороны. </p>
              <p>
              <b>К. Затулин</b><span>―</span> До тех пор пока вы будете думать, что все, что произошло с Украиной, это очень характерно для вас, вы никогда ни за что в своей жизни не отвечаете.  В жизни Украины. Украинское государство никогда не виновато в своих проблемах. Всегда это проблемы, которые принесены. </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Нет. </p>
              <p>
              <b>С. Сорокина</b><span>―</span>  Россия тоже никогда ни в чем не признает своей вины. </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Жили в этих иллюзиях до 14-го года.  </p>
              <p>
              <b>К. Затулин</b><span>―</span> Даже во времена Кучмы он рассказывал о том, что Украина — это футбольное поле, на котором играют Россия и США. Это было в устах президента Кучмы, который относительно благополучный… И чье время теперь кажется чуть ли ни золотым веком.  </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Я правильно понимаю, что ваши слова можно трактовать как признание факта, что Россия поставляет оружие и боеприпасы на неподконтрольную часть Донбасса.  </p>
              <p>
              <b>К. Затулин</b><span>―</span> Мои слова надо трактовать так, как они произнесены. На самом деле задан был вопрос: Почему эта статья произошла. Она произошла просто для того, чтобы подчеркнуть, почему российское руководство сегодня уходит от переговоров. Потому что смысла в них не видит.  </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Потому что Украина не капитулирует и не выполняет российские желания. </p>
              <p>
              <b>К. Затулин</b><span>―</span> После перевыборов президента Украины были встречи, в том числе в нормандском формате, вы сейчас вспомнили, два года назад и были взяты на себя обязательства, которые Украина не выполнила. Более того, Украина с одной стороны признает публично то, что надо выполнять Минские соглашения, а с другой стороны везде на всех уровнях говорит, что мы их выполнять не будем, не можем  и не хотим. И вы это, пожалуйста, отрицать не можете. Потому что это факт.  </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  …в российской интерпретации. Этот документ. </p>
              <p>
              <b>К. Затулин</b><span>―</span> Можно прочесть этот документ и там интерпретация… </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Это очень правильно, что вы предлагаете почитать. Там нет в этом тексте никаких республик.  И если вы говорите… </p>
              <p>
              <b>К. Затулин</b><span>―</span> Мы про республики ничего не говорим. </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Тогда нужно расформировать оккупационные администрации под брендом ЛНР и ДНР, и тогда дело начнет… </p>
              <p>
              <b>К. Затулин</b><span>―</span> Может быть, надо расформировать зависимое от внешних игроков правительство Украины. Может быть, и так можно поставить вопрос.  </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  У вас была попытка… И она не удалась. </p>
              <p>
              <b>К. Затулин</b><span>―</span> Совершенно прав Медведев, в чем он прав совершенно – вы никогда по своим обязательствам не отвечаете.  Вы всегда двулично себя ведете. Это просто вошло в плоть, и ткань украинского политикума. Вы даже когда сбили ракетой самолет при Кучме… </p>
              <p>
              <b>С. Сорокина</b><span>―</span>  Ой, остановитесь.  </p>
              <p>
              <b>К. Затулин</b><span>―</span> Почему остановиться? </p>
              <p>
              <b>С. Сорокина</b><span>―</span>  Давайте не будем. </p>
              <p>
              </p>
              <blockquote class="tw">Р.Цимбалюк: Украина не капитулирует и не выполняет российские желания</blockquote>  <p>
              <b>К. Затулин</b><span>―</span> Разве не помните, что сказал тогда президент Кучма? Он сказал это ракета российская, она видимо, украинского языка не понимала. И до сих пор не признали этот факт. </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Мы выплатили компенсации без признания вины. </p>
              <p>
              <b>К. Затулин</b><span>―</span> Без признания вины. Да, это замечательные слова.  </p>
              <p>
              <b>С. Сорокина</b><span>―</span>  Давайте вернемся к нашему вопросу. </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Тему самолетов продолжим. Это интересно.  </p>
              <p>
              <b>С. Сорокина</b><span>―</span>  Я не хочу заступать на эту территорию, потому что мы тогда увязнем… </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Один-один по количеству сбитых пассажирских самолетов. </p>
              <p>
              <b>С. Сорокина</b><span>―</span>  А хочется успеть все-таки поговорить о том, о чем начали. Я, даже слушая ваше уже усталое переругивание подумала, что действительно трудно себе представить, что возможны хоть какие-то переговоры и новые возможности. Нет ли у вас ощущения, что… </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span> Извините, Светлана. Константин Федорович говорит, что вы там чего-то не выполняете, какие-то взятые договоренности. То есть здесь мы видим, здесь не видим. Одни документы мы, подписанные с Украиной, считаем, что это уже неважно. Большой договор, еще что-то. Бог с ним. Это уже история.   </p>
              <p>
              <b>К. Затулин</b><span>―</span> Большой договор. Вы демонстрировали. </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span> Он не помешал вам оккупировать Крым и потом не помешал оккупировать Донбасс. Я хочу сказать… </p>
              <p>
              <b>К. Затулин</b><span>―</span> Конечно, слово «оккупировать» все объясняет. </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Это очень странно, когда украинским переговорщикам говорят, что вы что-то не выполняете. А то, что территория части Украины контролируется Россией путем военного вторжения – это вы почему-то выносите за скобки.  </p>
              <p>
              <b>К. Затулин</b><span>―</span> О какой территории вы говорите? </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Давайте, раз вам не нравится говорить о Крымской платформе и Крыме. Давайте поговорим о Донбассе.  </p>
              <p>
              <b>К. Затулин</b><span>―</span> И что? </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  А вы не знаете, как подписывались Минские соглашения? Российская армия штурмовала украинский город Дебальцево. Ну и взяла его, разрушив до основания. До сих пор там жизнь восстановить не могут или не хотят. Это касается всей части Донбасса. </p>
              <p>
              <b>К. Затулин</b><span>―</span> Все это было привнесено с российской стороны агрессией, которая не имела ничего общего с действиями… Украины, которая развязала на самом деле на востоке боевые действия. </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Что развязала? </p>
              <p>
              <b>К. Затулин</b><span>―</span> Это мы бомбили Луганск или вы? Луганск это ваш город. Вы его бомбили или нет? </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  А вы не бомбили? </p>
              <p>
              <b>К. Затулин</b><span>―</span> Нет, не бомбили.  </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  То есть вы просто стреляли по украинским позициям из жилых районов. </p>
              <p>
              <b>К. Затулин</b><span>―</span> Вы бомбили Луганск? Самолетами. Это же было. Они начали военные действия полномасштабные против части собственной территории.  После того как все то, что произошло с Крымом.  </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Правильно.  А вы хотели после того, что произошло с Крымом, что там говорил президент России? Он говорил про Новороссию. </p>
              <p>
              <b>К. Затулин</b><span>―</span> А что там произошло с Крымом? Вы до сих пор, Роман, будете рассказывать нам, что Крым мы оккупировали, заставили под дулами автоматов всех проголосовать на референдуме?  Вы эту чепуху будете продолжать или нет? Я там был и знаю, что там было. </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Если учесть, как голосовали лично за вас крымчане после всего этого и вы набрали там, если не ошибаюсь 2%. </p>
              <p>
              <b>К. Затулин</b><span>―</span> Вы ошибаетесь. Я не набрал 2%… </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  А сколько? </p>
              <p>
              <b>К. Затулин</b><span>―</span> Я 30% набрал. Если вы имеете в виду выборы в заксобрание Севастополя в 2014 году. Учите матчасть, прежде чем выходить в эфир. Вы попробуйте объяснить всей Украине и самому себе, что это за государство такое успешное. Которое в результате своего руководства независимого частью своей территории, которая  называется Республика Крым, пришло к тому, что в 14-м году два миллиона человек проголосовали  за то, чтобы уйти из этого государства. Это разве не вердикт? И вы будете рассказывать, что мы их заставили штыками это сделать. </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Я вам хочу сказать, что пророссийски настроенные… </p>
              <p>
              <b>К. Затулин</b><span>―</span> Вы врете все время про это. Про оккупированный Крым вы врете.  </p>
              <p>
              <b>С. Сорокина</b><span>―</span>  Вы считаете, что это правильный способ в 21-м веке решать какие-то… </p>
              <p>
              <b>К. Затулин</b><span>―</span> Правильный способ доказывать, что если Косово может быть независимым… </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  А причем здесь Косово. </p>
              <p>
              <b>К. Затулин</b><span>―</span> Потому что это прецедент, это международное право. Вы же говорите о правилах. </p>
              <p>
              <b>С. Сорокина</b><span>―</span>  Мы говорим о правилах. Мы не дали голосовать в Чечне в свое время. Там бы тоже все проголосовали за выход и что. </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Пророссийские  настроения в Крыму были всегда. </p>
              <p>
              <b>К. Затулин</b><span>―</span> На самом деле, если вы интересуетесь крымским вопросом, то вопрос заключается в том, что в течение всех этих лет независимости два миллиона крымчан были заложниками попыток выстроить российско-украинские отношения. Они всегда хотели в Россию. Будете спорить? Это неправда будет. Они в 1991 году проголосовали. За несколько месяцев до общесоюзного, до украинского референдума за то, чтобы восстановить Республику Крым и стать участником союзного договора. Что это означало в январе 1991 года? Это значило выйти из союзной республики Украина, чтобы напрямую стать участником СССР. Почему? – потому что не хотели быть на этой Украине. И, пожалуйста, не опровергайте. Потому что я тогда буду считать вас людьми, которые живут в Зазеркалье. </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Константин Федорович, факт остается, пророссийские  настроения… </p>
              <p>
              <b>К. Затулин</b><span>―</span> Факт остается фактом. Вы провалили свою государственность на Украине. В Крыму, во всяком случае, точно. </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Больше мы такую ошибку не сделаем. Просто когда вы говорите, что это не оккупация, я просто хочу напомнить и спросить у вас, есть ли у вас медаль за возвращение Крыма. Где написано 20 февраля 2014 года. То время, когда Янукович почему-то был в Киеве, подписывал различные соглашения… </p>
              <p>
              <b>К. Затулин</b><span>―</span> У меня много разных медалей </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  А за возвращение Крыма?  Министерства обороны. </p>
              <p>
              <b>К. Затулин</b><span>―</span> У меня есть медаль Министерства обороны. У меня есть моя собственная медаль, которую я издал по этому поводу. Там этого не написано,  там только стоит дата референдума. На моей собственной медали, за которую я отвечаю. </p>
              <p>
              <b>С. Сорокина</b><span>―</span>  Давайте закончим пререкания. Ну хватит, Роман, ну невозможно. </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Дело в том, что перед тем как проводить референдум на этой территории, эта территория была захвачена военным путем. В том числе российскими военными ВАЗами… </p>
              <p>
              <b>К. Затулин</b><span>―</span>  Мы «захватили ее военным путем». Притом что количество войск ваших было больше, чем наших. </p>
              <p>
              <b>С. Сорокина</b><span>―</span>  Скажите, пожалуйста, вот разговор сегодняшний то, что заявил Медведев – это что? Окончательное обнуление переговорного процесса или нет? </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Будут в нормандском формате, будут полудохлые переговоры, которые ни к чему не приведут.  </p>
              <p>
              <b>К. Затулин</b><span>―</span> Что, к сожалению, с этим руководством Украины в силу того, что… </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Другого у нас нет для вас и не будет. </p>
              <p>
              </p>
              <blockquote class="tw">Р.Цимбалюк: Пророссийские  настроения в Крыму были всегда</blockquote>  <p>
              <b>С. Сорокина</b><span>―</span>  То есть сейчас это невозможно. </p>
              <p>
              <b>К. Затулин</b><span>―</span> Во всяком случае, это заявляет зам. председателя совета безопасности РФ. </p>
              <p>
              <b>С. Сорокина</b><span>―</span>  Я прочитала ваше интервью,  «МК» по-моему, где вы говорили по поводу статьи. И меня сильно изумила ваша риторика. </p>
              <p>
              <b>К. Затулин</b><span>―</span> Вас все время изумляет что-то, я заметил.  </p>
              <p>
              <b>С. Сорокина</b><span>―</span>  Да, не потеряла способность к изумлению. Несмотря на столько лет наблюдений всех этих событий, иногда изумляюсь. Так вот изумило меня следующее. Вы, государственный человек, а практически говорите о том, что надо обращаться к народу и что-то такое делать для того, чтобы активизировать смену власти выходит. Как вы можете такое говорить?  </p>
              <p>
              <b>К. Затулин</b><span>―</span> На самом деле я не настолько зациклен на том, чтобы активизировать смену власти. Я за то, чтобы голоса людей, которые считают по-другому, инакомыслящих на Украине были учтены в политическом процессе. </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  У нас есть партия ОПЗЖ по этому поводу. Представлена в парламенте. </p>
              <p>
              <b>К. Затулин</b><span>―</span> Даже ту самую ОПЗЖ, которую я, если вы читали мое… </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Не очень хорошо.  </p>
              <p>
              <b>К. Затулин</b><span>―</span> Совершенно не преувеличиваю ни ее значимость, ни возможности. Но на сегодняшний день они в политическом подполье или полуподполье. Потому что сегодня ради того, что избраться на следующий срок, чтобы зачистить политическое поле, президент Зеленский устраивает какую-то опереточную диктатуру на Украине. С помощью того, что он создает неконституционный совет  национальной безопасности… </p>
              <p>
              <b>С. Сорокина</b><span>―</span>  Постойте. Давайте не будем углубляться. У нас тоже такие зачистки, что можем фору дать.  </p>
              <p>
              <b>К. Затулин</b><span>―</span> Мы начинаем обсуждать Украину, вы говорите – нет, у нас что-то другое. Мы Украину обсуждаем или нас? </p>
              <p>
              <b>С. Сорокина</b><span>―</span>  Мы и нас, и Украину. </p>
              <p>
              <b>К. Затулин</b><span>―</span> Давайте еще Америку обсудим.  С Афганистаном. Вот вы говорите, что не надо обсуждать… </p>
              <p>
              <b>С. Сорокина</b><span>―</span>  Просто вы упираете на то, что Зеленский создал некую диктатуру. А у нас какое управление. </p>
              <p>
              <b>К. Затулин</b><span>―</span> Как это: а еще шляпу надел. </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  У нас будут выборы…  </p>
              <p>
              <b>К. Затулин</b><span>―</span> Если вы хотите по этому поводу поговорить  — давайте поговорим.  </p>
              <p>
              <b>С. Сорокина</b><span>―</span>  В следующий раз. </p>
              <p>
              <b>К. Затулин</b><span>―</span> Если вы хотите говорить по Украине, вот я про нее и говорю. Я считаю Украину кровным делом, считаю, что то, что происходит на Украине – это трагедия. Я сочувствую укрАинцам.  </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  УкраИнцам. </p>
              <p>
              <b>К. Затулин</b><span>―</span> УкрАинцам и украИнцам тоже. И русским сочувствую на Украине.  Я считаю, что да, это наверное не очень было может быть не совсем, я уже сказал, что в стилистике мы можем расходиться, правильно писал Медведев или нет… </p>
              <p>
              <b>С. Сорокина</b><span>―</span>  Да я теперь про ваши уже слова говорю. Про ваше интервью. </p>
              <p>
              <b>К. Затулин</b><span>―</span> Намекал на еврейские корни Зеленского. Но это тот самый президент Зеленский,  который инициировал закон о коренных и некоренных народах по сути.  </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Это касается, кстати, Крыма. </p>
              <p>
              <b>К. Затулин</b><span>―</span> Это касается того, что это коренные народы Украины.  </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Этот закон, который принят…  </p>
              <p>
              <b>К. Затулин</b><span>―</span> Коренных народов на Украине. Не обманывайте. Название закона. </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Но вы текст почитайте. </p>
              <p>
              <b>К. Затулин</b><span>―</span> Я читал. </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  И там касается… </p>
              <p>
              <b>К. Затулин</b><span>―</span> И что там сказано, что не касается Украины, а только Крыма? </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Послушайте. Вы хотите сказать, что когда российские представители очень сильно обижаются, почему русские не являются коренным народом Украины, тогда согласно этому закону украинцы тоже не являются коренным народом Украины. Но вас почему-то это не смущает. А там касается исключительно Крыма и исключительно крымских татар. И не надо в данном вопросе манипулировать. </p>
              <p>
              <b>К. Затулин</b><span>―</span> …Вопрос о том, кто является коренным народом на Украине. В этом законе выставлен удивительный принцип, по которому коренным не может быть народ, у которого по соседству есть государство. Это написано в вашем законе.  Причем тут Крым. </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Это фактически везде. </p>
              <p>
              <b>К. Затулин</b><span>―</span> Это вранье и абсолютно новая вещь для любого специалиста по делам национальностей. </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span> Давайте  почитаем определение в энциклопедии, что такое коренные народы… </p>
              <p>
              <b>К. Затулин</b><span>―</span> То есть США не могли бы стать самостоятельным государством на том основании, что существует Англия. Турция, которая вам там нравится, если продает вам «байрактары»,  конечно, не имеет права рассматривать турок на Кипре отдельным государством, потому что есть же государство Турция. Вы это написали. Вы чего тень на плетень наводите?  Ваш закон о языке что говорит? О том, что не существует такой проблемы, как русский язык. </p>
              <p>
              <b>С. Сорокина</b><span>―</span>  Константин Федорович, давайте вернемся к вашим предложениям.  </p>
              <p>
              <b>К. Затулин</b><span>―</span> Давайте.  </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Не существует такой проблемы. </p>
              <p>
              <b>С. Сорокина</b><span>―</span>  Что вы предлагаете. Вам не нравится вывод, который сделал Медведев, вы предлагаете </p>
              <p>
              <b>К. Затулин</b><span>―</span> А я предлагаю вести работу на Украине таким образом, чтобы это государство пришло, наконец, к необходимости провести такие внутренние реформы, которые позволили бы всем людям бесконфликтно на ее территории существовать.  </p>
              <p>
              <b>С. Сорокина</b><span>―</span>  И вмешательство во внутренние дела суверенного государства. </p>
              <p>
              <b>К. Затулин</b><span>―</span> Вмешательство во внутренние дела, которое осуществляют все во всем мире. </p>
              <p>
              <b>С. Сорокина</b><span>―</span>  И об этом заявляем… </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span> Попытка у вас была и закончилось это кровищей… </p>
              <p>
              <b>С. Сорокина</b><span>―</span>  И вы хотите, чтобы опять кровь что ли была. </p>
              <p>
              <b>К. Затулин</b><span>―</span> Я все 90-е годы пытался, между прочим, не требовал ни Крым, ни Севастополь обратно в РФ. Говорил, дорогие украинцы, для того чтобы вам удержать Украину в этом составе, в котором она возникла как независимое государство на обломках Советского Союза, для этого логично было бы с вашей стороны провести аккуратную федеративную реформу. Предоставить тому же Крыму права такие, которые мы подписали, когда в 1994 году договаривались с Татарстаном, федеративный договор. На этом основании меня объявили врагом украинского народа, депортировали, объявляли персонами нон-грата и так далее.  Я не требовал ничего назад. Вы говорите о договоре.  Я выступал против ратификации договора о дружбе и сотрудничестве и партнерстве с Украиной, просто заранее знал, что фальшивый договор. В нем все, что интересовало Украину – только пункт второй о границах. Но если вы согласились в этом договоре оговорить границы, то чего вы теперь удивляетесь? Нет дружбы, сотрудничества, партнерства — нет на самом деле и границ.  Признания полноценного этих границ. </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Теперь понятно, что стоит подпись президента России.  Я хочу напомнить про дружбу. Сначала Россия оккупировала часть территории Украины, а потом все это обрушилось, вы каким-то образом ставите вопрос таким образом, что… </p>
              <p>
              <b>К. Затулин</b><span>―</span> …современные  проблемы заключаются в том, что  развалили свою экономику попыткой вести торговую и прочую войну с Россией. Попытками наложить санкции на торговлю. Обвиняете своих собственных политических деятелей в том, что они имели такую наглость торговать между одной частью Украины и другой. И вообще с Россией  иметь какие-то отношения. Вы губите свою экономику. Вы сегодня стоите перед перспективой того, что люди на Украине будут замерзать, но вы при  этом вы же гордые, независимые, вы не хотите ни прямых договоров с Россией, потому что вам смертельно не хочется на самом деле хоть в чем-то это свое черное знамя борьбы с Россией не на жизнь,  а на смерть… Да вы надорветесь бороться с Россией.  </p>
              <p>
              <b>С. Сорокина</b><span>―</span>  Так и мы не сворачиваем свои знамена. Позиция же такая.  </p>
              <p>
              </p>
              <blockquote class="tw">К.Затулин: Вы сегодня стоите перед перспективой того, что люди на Украине будут замерзать</blockquote>  <p>
              <b>К. Затулин</b><span>―</span> Если поставили на бесконечную борьбу с Россией… </p>
              <p>
              <b>С. Сорокина</b><span>―</span>  На бесконечную борьбу с Украиной. </p>
              <p>
              <b>К. Затулин</b><span>―</span> На Украину как не Россию, антиРоссию и так далее – надорветесь просто. </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Эти определения, которые вы используете, их все придумали в городе Москва. И все это связано эти претензии в адрес Зеленского, на самом деле, вот прошло чуть больше двух лет после вступления Зеленского в должности и тут на него все ополчились. Давайте посмотрим, как начиналось президентство Зеленского. Да, он молодой, может неопытный, не такой опытный, как Константин Федорович в политике, который искушенный во всех тонкостях украино-российских отношений. Он пришел с простым тезисом: давайте прекратим стрелять. Давайте прекратим войну. Просто ее остановим. Но когда начались переговоры с РФ, оказалось, что чтобы это сделать – нужно идти на политические уступки и нужно признавать оккупационные администрации. И именно исполнять Минские соглашения в этой трактовке, которая неприемлема для Украины. Потому что то, что предлагает Кремль – не предполагает реинтеграцию Донбасса в Украину. Точка. </p>
              <p>
              <b>К. Затулин</b><span>―</span> Как раз Кремль  это и предлагает.  </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Что значит… </p>
              <p>
              <b>К. Затулин</b><span>―</span> Послушайте. Вы с одной стороны не хотите стрелять, а с другой стороны отказались разводить войска по всему периметру. Это же было. Вам сказали: давайте мы разведем… </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Константин Федорович, послушайте меня. Давайте без вот этого избирательного анализа. </p>
              <p>
              <b>К. Затулин</b><span>―</span> … Вот именно без этого избирательного анализа. </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Вы про Минские соглашения, ну так это главный пункт безопасности. Там написано, откуда та сторона, которую мы называем Россия, а вас там нет, но там почему-то люди в российской военной форме. Куда они должны отводить войска? </p>
              <p>
              <b>К. Затулин</b><span>―</span> Откуда вы взяли трактовку… </p>
              <p>
              </p>
              <blockquote class="tw">Р.Цимбалюк: То, что предлагает Кремль – не предполагает реинтеграцию Донбасса в Украину</blockquote>  <p>
              <b>Р. Цимбалюк</b><span>―</span>  Куда они должны отводить войска? Там написано в этом пункте. Я что-то не вижу ни разу в России, чтобы кто-то сказал. Там написано, что на уровень Минских соглашений-1. Это далеко за Дебальцево. Но после того как Путин поставил свою подпись под соответствующим заявлением, российская армия еще три дня продолжала наступление на город Дебальцево.  </p>
              <p>
              <b>К. Затулин</b><span>―</span> Это было когда, при Зеленском что ли? Вот Зеленский пришел и говорит: я не хочу воевать.  И после этого выясняется, что на самом деле, как только зашла речь о разведении сил… </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  То есть вы хотите, чтобы Украина выполняла Минские соглашения именно таким образом. Чтобы Украина дальше драпала. </p>
              <p>
              <b>К. Затулин</b><span>―</span> Я хочу, чтобы она вообще хоть какие-нибудь соглашения… </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Так не будет. </p>
              <p>
              <b>К. Затулин</b><span>―</span> …в истории своей выполняла. Она никогда не выполняет. Никакие соглашения. </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Вы требуете капитуляции. </p>
              <p>
              <b>К. Затулин</b><span>―</span> Да не требуем мы никакой вашей капитуляции.  </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Ваши требования абсолютно необоснованные. </p>
              <p>
              <b>С. Сорокина</b><span>―</span>  Какой показательный разговор.  </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  То, что у  нас будет немножко этой зимой очевидно проблемно — не без этого.  Надо к зиме готовиться летом. </p>
              <p>
              <b>Ю. Кобаладзе</b><span>―</span>  Подняли важную проблему. </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Не первый раз Константин Федорович, российские представители и вы в том числе, по сути, выступаете с ультиматумом в адрес Украины. </p>
              <p>
              <b>К. Затулин</b><span>―</span> Никакого ультиматума нет. Не хотите наш газ – не надо.  </p>
              <p>
              <b>С. Сорокина</b><span>―</span>  Давайте останавливаться. </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Константин Федорович, в одном из эфиров вы сказали, что Украина сама не развалится. Ей нужно помочь, потому что это вражеское государство. Я вас цитирую… </p>
              <p>
              <b>К. Затулин</b><span>―</span> Вы меня не цитируете, вы меня перевираете в очередной раз. Я сказал о том… </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Я к этому эфиру ваши слова много раз… </p>
              <p>
              <b>К. Затулин</b><span>―</span> Я сказал, что если Украина враждебное государство, то никакой заинтересованности у России в преуспевании этого государства Украина  быть не может. Это дважды  два – четыре. </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Если оно враждебное. </p>
              <p>
              <b>С. Сорокина</b><span>―</span>  Остановились. Наше время вышло.  </p>
              <p>
              <b>Ю. Кобаладзе</b><span>―</span>  Пожмите друг другу руки. </p>
              <p>
              <b>С. Сорокина</b><span>―</span>  Роман Цимбалюк и Константин Затулин. Оттолкнувшись от статьи Дмитрия Медведева, говорили об отношениях России и Украины. На мой взгляд, очень показательный разговор. Отношений нет, это правда. Юрий Георгиевич, у меня сложилось впечатление, прослушав все это дело и вспомнив статью Медведева, я подумала, что это констатация дипломатического провала. В котором в первую очередь виновата Россия. Потому что мы не умеем выстраивать эти отношения. Как у тебя ощущения? </p>
              <p>
              <b>Ю. Кобаладзе</b><span>―</span>  У меня печальные ощущения, что мы поругались со всем миром. И с Украиной в том числе.  </p>
              <p>
              <b>С. Сорокина</b><span>―</span>  Это уже давно и понятно.  </p>
              <p>
              <b>Ю. Кобаладзе</b><span>―</span>  Всегда можно найти правых, виноватых. Но факт остается фактом. С Грузией поругались. С Украиной поругались.  Со всеми. </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Это называется не поругались. Это называется – захватили часть территорий соседних стран.  </p>
              <p>
              <b>Ю. Кобаладзе</b><span>―</span>  Не будем уже… </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  А потом украинцам, грузинам говорят: ну почему вы нас так не любите. </p>
              <p>
              <b>С. Сорокина</b><span>―</span>  Бесконечный разговор. </p>
              <p>
              <b>Р. Цимбалюк</b><span>―</span>  Ну что вы же не послушали меня и не федерализировали… </p>
              <p>
              <b>Ю. Кобаладзе</b><span>―</span>  Нас сейчас выгонят из студии. </p>
              <p>
              <b>С. Сорокина</b><span>―</span>  Все время на языке войны.  Спасибо за внимание, всего доброго, до свидания.</p>
                         </div>
                       </div>
                     </div>
              
                    </div>
                  </div>
              </div>
              <div class="rmi4dkZXmXCHSflk" id="e2917870">
                <div class="meta right">
                  
                  <a href="/programs/sorokina/2917870-echo/comments.html#comments" class="comm">
                  <span class="wsico">5</span>
                  <span class="count">171</span>
                </a>
              <a href="/programs/sorokina/2917870-echo/" class="view">
                <span class="wsico">6</span>
                <span class="count ">36063</span>
              </a>
              
                <a rel="nofollow" href="/likes/e2917870/" class="share" data-url="https://echo.msk.ru/programs/sorokina/2917870-echo/" data-title="Россия–Украина: диалог возможен? — Роман Цимбалюк, Константин Затулин — В круге СВЕТА">
                  <span class="wsico">7</span>
                </a>
              </div>
              
                <div class="netlinks">
                  <script src="//echo.msk.ru/__cr/Pb4t1A086/ced1ad1G/IQmYn8fznUfhxzFJ_R_8CXJlGR00aQ7odPKbkHsdjOsl1Db4z9XmAYYKnIM2UlSOG9r9qyMKnKNyeQLXYW4JY-AtaI_UESnX9zaSGKu9Hjxm5Pv_99kIzCM3bnY9bz5P4JZUiNxX4fFEKrlDNZN3r1rYjqjS-w7C0mnz99Ab2BKQS5s_xtGsVHXmsQo5P_6dp5QJDVXI-l4xV9_1HR6-j2HlpTidtYNBhxjaE4VRxwyLGi4aQBmeAXPa88bgmDkisYq4LtfSjXZGFNJ7mI9cnLUniP1kqbrMYWb_ZM8fHT_wR0Ua_UehoDQ4u_ClAZdcKml_28LI7INyyjH3o7nq06Arao_nU00UlhWBexpPnl1kpaj9BOhZLkAHLYXdPUyOsoZU6992cDH2CsohdXKG_VqoXrqA"></script>
                  <div></div><script src="//echo.msk.ru/__cr/Pb4t1A086/ced1ad1G/IQmYn8fznUfhxzFJ_R6dvDeUfLlViLoMUEN_1GweL8xjJvSLfZagc7bKSONjgXZMvSn_CiPcDvPx2lL1synp8oBL6_3m0AyE9dbSejsMPK215tke94sqD8DWv9etPQ6NYVX3eowEwdOmO2hSFlAHPNvaTxjjWY1xIflAZzHJSDPwuRlf9yKelpVnUVpKjPwsxhdpXxXpmszyte9nb42tXKP1RehulAJyFTtZYpWxNx0a-V4J4HivQtOaMcaBa0khQzjpbpZiDMakR8CISy9MvWT3Sz_ny3t_0tQMRz_d_f3QpIRqv-aAcwX5aCG0YsYMuyv_OWG4zZLSyTFEQamI8MEY6Q7Xge7nxZUhmml-_f-l5rod1hrqveCl3ZdMzFyNEYXlKJw0gqLHCRqBVeK1nvrJvnqw"></script>
                  <div class="ya-share2" data-services="twitter,facebook,vkontakte,odnoklassniki,telegram" data-title="В круге СВЕТА: Россия–Украина: диалог возможен?"></div>
                </div>
                <a rel="nofollow" href="/likes/e2917870/" class="recom">
                  <span class="wsico"> </span>рекомендовать
                </a>
              </div>
              
              
              <div></div>'; // Текст 2 пресета
            }elseif ($url =='http://lr4/text.php?preset=3'){
                $text = '<div class="entry-content" itemprop="articleBody">
                <p>Веселая и всеми любимая сказка о Винни-Пухе не подчиняется законам сказочного жанра. Сказка лишена отрицательных персонажей, борьбы добрых и злых сил. Главные герои сказки — Игрушки мальчика Кристофера, с которыми приключаются забавные ситуации в волшебном лесу… На нашем сайте сказка представлена в переводе Заходера.</p>
                <p></p>
                <div class="kc__wrap">
                    <style>
                        .kc__gotop {
                            display: block;
                            text-align: right;
                        }
            
                        .kc__title {
                            font-weight: 500;
                            padding: 0.5em 0 0 0.7em
                        }
            
                        .kc__anchlink {
                            color: #ddd !important;
                            position: absolute;
                            margin-left: -1em;
                        }
                    </style><span style="display:block;" class="kc-title kc__title" id="kcmenu">Оглавление:</span>
                    <ul class="contents">
                        <li class="top"> <a rel="nofollow" href="#glava-pervaya-v-kotoroj-my-znakomimsya-s-vinni-puhom-i-neskolkimi-pchy">♦   ГЛАВА ПЕРВАЯ, в которой мы знакомимся с Винни-Пухом и несколькими пчёлами </a> </li>
                        <li class="top"> <a rel="nofollow" href="#glava-vtoraya-v-kotoroj-vinni-puh-poshyol-v-gosti-a-popal-v-bezvyhodno">♦   ГЛАВА ВТОРАЯ, в которой Винни-Пух пошёл в гости, а попал в безвыходное положение </a> </li>
                        <li class="top"> <a rel="nofollow" href="#glava-tretya-v-kotoroj-puh-i-pyatachok-otpravilis-na-ohotu-i-chut-chut">♦   ГЛАВА ТРЕТЬЯ, в которой Пух и Пятачок отправились на охоту и чуть-чуть не поймали Буку </a> </li>
                        <li class="top"> <a rel="nofollow" href="#glava-chetvyortaya-v-kotoroj-ia-ia-teryaet-hvost-a-puh-nahodit">♦   ГЛАВА ЧЕТВЁРТАЯ, в которой Иа-Иа теряет хвост, а Пух находит </a> </li>
                        <li class="top"> <a rel="nofollow" href="#glava-pyataya-v-kotoroj-pyatachok-vstrechaet-slonopotama">♦   ГЛАВА ПЯТАЯ, в которой Пятачок встречает Слонопотама </a> </li>
                        <li class="top"> <a rel="nofollow" href="#glava-shestaya-v-kotoroj-u-ia-ia-byl-den-rozhdeniya-a-pyatachok-chut-c">♦   ГЛАВА ШЕСТАЯ, в которой у Иа-Иа был день рождения, а Пятачок чуть-чуть не улетел на Луну </a> </li>
                        <li class="top"> <a rel="nofollow" href="#glava-sedmaya-v-kotoroj-kenga-i-kroshka-ru-poyavlyayutsya-v-lesu-a-pya">♦   ГЛАВА СЕДЬМАЯ, в которой Кенга и крошка Ру появляются в лесу, а Пятачок принимает ванну </a> </li>
                        <li class="top"> <a rel="nofollow" href="#glava-vosmaya-v-kotoroj-kristofer-robin-organizuet-iskpeditsiyu-k-seve">♦   ГЛАВА ВОСЬМАЯ, в которой Кристофер Робин организует «искпедицию» к Северному Полюсу </a> </li>
                        <li class="top"> <a rel="nofollow" href="#glava-devyataya-v-kotoroj-pyatachok-sovershenno-okruzhyon-vodoj">♦   ГЛАВА ДЕВЯТАЯ, в которой Пятачок совершенно окружён водой </a> </li>
                        <li class="top"> <a rel="nofollow" href="#glava-desyataya-v-kotoroj-dlya-ia-ia-stroyat-dom-na-puhovoj-opushke">♦   ГЛАВА ДЕСЯТАЯ, в которой для Иа-Иа строят дом на Пуховой опушке </a> </li>
                        <li class="top"> <a rel="nofollow" href="#glava-odinnadtsataya-v-kotoroj-v-les-prihodit-tigra-i-zavtrakaet">♦   ГЛАВА ОДИННАДЦАТАЯ, в которой в лес приходит Тигра и завтракает </a> </li>
                        <li class="top"> <a rel="nofollow" href="#glava-dvenadtsataya-v-kotoroj-krolik-ochen-zanyat-i-my-vpervye-vstrech">♦   ГЛАВА ДВЕНАДЦАТАЯ, в которой Кролик очень занят и мы впервые встречаемся с пятнистым Щасвирнусом </a> </li>
                        <li class="top"> <a rel="nofollow" href="#glava-trinadtsataya-v-kotoroj-vyyasnyaetsya-chto-tigry-ne-lazyat-po-de">♦   ГЛАВА ТРИНАДЦАТАЯ, в которой выясняется, что тигры не лазят по деревьям </a> </li>
                        <li class="top"> <a rel="nofollow" href="#glava-chetyrnadtsataya-v-kotoroj-vinni-puh-izobretaet-novuyu-igru-i-v-">♦   ГЛАВА ЧЕТЫРНАДЦАТАЯ, в которой Винни-Пух изобретает новую игру и в неё включается Иа-Иа </a> </li>
                        <li class="top"> <a rel="nofollow" href="#glava-pyatnadtsataya-v-kotoroj-tigru-ukroshhayut">♦   ГЛАВА ПЯТНАДЦАТАЯ, в которой Тигру укрощают </a> </li>
                        <li class="top"> <a rel="nofollow" href="#glava-shestnadtsataya-v-kotoroj-pyatachok-sovershaet-velikij-podvig">♦   ГЛАВА ШЕСТНАДЦАТАЯ, в которой Пятачок совершает великий подвиг </a> </li>
                        <li class="top"> <a rel="nofollow" href="#glava-semnadtsataya-v-kotoroj-ia-nahodit-soveshnik-i-sova-pereezzhaet">♦   ГЛАВА СЕМНАДЦАТАЯ, в которой Иа находит Совешник и Сова переезжает </a> </li>
                        <li class="top"> <a rel="nofollow" href="#glava-vosemnadtsataya-v-kotoroj-my-ostavlyaem-kristofera-robina-i-vinn">♦   ГЛАВА ВОСЕМНАДЦАТАЯ, в которой мы оставляем Кристофера Робина и Винни-Пуха в зачарованном месте </a> </li>
                    </ul>
                </div>
                <p></p>
                <h2 id="glava-pervaya-v-kotoroj-my-znakomimsya-s-vinni-puhom-i-neskolkimi-pchy">ГЛАВА ПЕРВАЯ, в которой мы знакомимся с Винни-Пухом и несколькими пчёлами</h2>
                <figure class="wp-block-image">
                    <picture class="wp-image-36014">
                        <source class="lazy-load is-loaded" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh1.jpg.webp" type="image/webp" srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh1.jpg.webp" data-loaded="true"><img width="345" height="195" src="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh1.jpg" alt="Винни-Пух и все-все-все - Алан Милн" class="wp-image-36014 lazy-load is-loaded" sizes="(max-width: 345px) 100vw, 345px" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh1.jpg 345w, https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh1-328x185.jpg 328w" data-src="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh1.jpg" style="height: 195px;" srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh1.jpg 345w, https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh1-328x185.jpg 328w" data-loaded="true">
                    </picture>
                </figure>
                <p>Ну вот, перед вами Винни-Пух.</p>
                <p>Как видите, он спускается по лестнице вслед за своим другом Кристофером Робином, головой вниз, пересчитывая ступеньки собственным затылком: бум-бум-бум. Другого способа сходить с лестницы он пока не знает. Иногда ему, правда, кажется, что можно бы найти какой-то другой способ, если бы он только мог на минутку перестать бумкать и как следует сосредоточиться. Но увы — сосредоточиться-то ему и некогда.</p>
                <p>Как бы то ни было, вот он уже спустился и готов с вами познакомиться.</p>
                <p>— Винни-Пух. Очень приятно!</p>
                <p>Вас, вероятно, удивляет, почему его так странно зовут, а если вы знаете английский, то вы удивитесь еще больше.</p>
                <p>Это необыкновенное имя подарил ему Кристофер Робин. Надо вам сказать, что когда-то Кристофер Робин был знаком с одним лебедем на пруду, которого он звал Пухом. Для лебедя это было очень подходящее имя, потому что если ты зовешь лебедя громко:»Пу-ух! Пу-ух!» — а он не откликается, то ты всегда можешь сделать вид, что ты просто понарошку стрелял; а если ты звал его тихо, то все подумают, что ты просто подул себе на нос. Лебедь потом куда-то делся, а имя осталось, и Кристофер Робин решил отдать его своему медвежонку, чтобы оно не пропало зря.</p>
                <div class="ad-tag ad-can-close ad-in-content" ad-num="0">
                    <div class="ad-tag-inner">
                        <div class="ad-placeholder">
                            <div class="ad-placeholder-text placeholder-cite">
                                <div class="cite-text">Наконец он все же набрался храбрости настолько, что решился признаться в собственной трусости.</div>
                                <div class="cite-author">Незнайка на Луне</div>
                            </div>
                        </div>
                        <div class="MKN_ITA_300M actual-ad"></div>
                    </div><i class="ad-close-btn fa fa-times-thin fa-2x" aria-hidden="true"></i>
                </div>
                <p>А Винни — так звали самую лучшую, самую добрую медведицу в зоологическом саду, которую очень-очень любил Кристофер Робин. А она очень-очень любила его. Ее ли назвали Винни в честь Пуха, или Пуха назвали в ее честь — теперь уже никто не знает, даже папа Кристофера Робина. Когда-то он знал, а теперь забыл.</p>
                <p>Словом, теперь мишку зовут Винни-Пух, и вы знаете почему.</p>
                <p>Иногда Винни-Пух любит вечерком во что-нибудь поиграть, а иногда, особенно когда папа дома, он больше любит тихонько посидеть у огня и послушать какую-нибудь интересную сказку.</p>
                <p>В этот вечер…</p>
                <figure class="wp-block-image">
                    <picture class="wp-image-36016">
                        <source class="lazy-load is-loaded" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh2.jpg.webp" type="image/webp" srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh2.jpg.webp" data-loaded="true"><img loading="lazy" width="370" height="247" src="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh2.jpg" alt="Винни-Пух и все-все-все - Алан Милн" class="wp-image-36016 lazy-load is-loaded" sizes="(max-width: 370px) 100vw, 370px" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh2.jpg 370w, https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh2-300x200.jpg 300w" data-src="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh2.jpg" style="height: 247px;" srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh2.jpg 370w, https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh2-300x200.jpg 300w" data-loaded="true">
                    </picture>
                </figure>
                <p>— Папа, как насчет сказки? — спросил Кристофер Робин.</p>
                <p>— Что насчет сказки? — спросил папа.</p>
                <p>— Ты не мог бы рассказать Винни-Пуху сказочку? Ему очень хочется!</p>
                <p>— Может быть, и мог бы, — сказал папа. — А какую ему хочется и про кого?</p>
                <p>— Интересную, и про него, конечно. Он ведь у нас ТАКОЙ медвежонок!</p>
                <p>— Понимаю. — сказал папа.</p>
                <p>— Так, пожалуйста, папочка, расскажи!</p>
                <p>— Попробую, — сказал папа.</p>
                <p>И он попробовал.</p>
                <p>Давным-давно — кажется, в прошлую пятницу — Винни-Пух жил в лесу один-одинешенек, под именем Сандерс.</p>
                <p>— Что значит «жил под именем»? — немедленно спросил Кристофер Робин.</p>
                <p>— Это значит, что на дощечке над дверью было золотыми буквами написано «Мистер Сандерс», а он под ней жил.</p>
                <p>— Он, наверно, и сам этого не понимал, — сказал Кристофер Робин.</p>
                <p>— Зато теперь понял, — проворчал кто-то басом.</p>
                <p>— Тогда я буду продолжать, — сказал папа.</p>
                <p>Вот однажды, гуляя по лесу, Пух вышел на полянку. На полянке рос высокий-превысокий дуб, а на самой верхушке этого дуба кто-то громко жужжал: жжжжжжж…</p>
                <p>Винни-Пух сел на траву под деревом, обхватил голову лапами и стал думать.</p>
                <p>Сначала он подумал так:</p>
                <figure class="wp-block-image">
                    <picture class="wp-image-36017">
                        <source class="lazy-load is-loaded" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh3.jpg.webp" type="image/webp" srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh3.jpg.webp" data-loaded="true"><img loading="lazy" width="356" height="272" src="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh3.jpg" alt="Винни-Пух и все-все-все - Алан Милн" class="wp-image-36017 lazy-load is-loaded" sizes="(max-width: 356px) 100vw, 356px" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh3.jpg 356w, https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh3-262x200.jpg 262w" data-src="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh3.jpg" style="height: 272px;" srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh3.jpg 356w, https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh3-262x200.jpg 262w" data-loaded="true">
                    </picture>
                </figure>
                <p>«Это — жжжжжж — неспроста! Зря никто жужжать не станет. Само дерево жужжать не может. Значит, тут кто-то жужжит. А зачем тебе жужжать, если ты — не пчела? По-моему, так! «</p>
                <p>Потом он еще подумал-подумал и сказал про себя: «А зачем на свете пчелы? Для того, чтобы делать мед! По-моему, так!»</p>
                <p>Тут он поднялся и сказал:</p>
                <p>— А зачем на свете мед? Для того, чтобы я его ел! По-моему, так,луже а не иначе!</p>
                <p>И с этими словами он полез на дерево.</p>
                <p>Он лез, и лез, и все лез, и по дороге он пел про себя песенку, которую сам тут же сочинил. Вот какую:</p>
                <p><em>Мишка очень любит мед!</em></p>
                <p><em>Почему? Кто поймет?</em></p>
                <p><em>В самом деле, почему</em></p>
                <p><em>Мед так нравится ему?</em></p>
                <p>Вот он влез еще немножко повыше… и еще немножко… и еще совсем-совсем немножко повыше… И тут ему пришла на ум другая песенка-пыхтелка:</p>
                <p><em>Если б мишки были пчелами,</em></p>
                <p><em>То они бы нипочем</em></p>
                <p><em>Никогда и не подумали</em></p>
                <p><em>Так высоко строить дом;</em></p>
                <p><em>И тогда (конечно, если бы</em></p>
                <p><em>Пчелы</em></p>
                <p>—<em>это были мишки!)</em></p>
                <p><em>Нам бы, мишкам, было незачем</em></p>
                <p><em>Лазить на такие вышки!</em></p>
                <p>По правде говоря, Пух уже порядком устал, поэтому Пыхтелка получилась такая жалобная. Но ему осталось лезть уже совсем-совсем-совсем немножко. Вот стоит только влезть на эту веточку — и…</p>
                <p>ТРРАХ!</p>
                <p>— Мама! — крикнул Пух, пролетев добрых три метра вниз и чуть не задев носом о толстую ветку.</p>
                <p>— Эх, и зачем я только… — пробормотал он, пролетев еще метров пять.</p>
                <p>— Да ведь я не хотел сделать ничего пло… — попытался он объяснить, стукнувшись о следующую ветку и перевернувшись вверх тормашками.</p>
                <p>— А все из-за того, — признался он наконец, когда перекувырнулся еще три раза, пожелал всего хорошего самым нижним веткам и плавно приземлился в колючий-преколючий терновый куст, — все из-за того, что я слишком люблю мед! Мама!…</p>
                <p>Пух выкарабкался из тернового куста, вытащил из носа колючки и снова задумался. И самым первым делом он подумал о Кристофере Робине.</p>
                <p>— Обо мне? — переспросил дрожащим от волнения голосом Кристофер Робин, не смея верить такому счастью.</p>
                <p>— О тебе.</p>
                <p>Кристофер Робин ничего не сказал, но глаза его становились все больше и больше, а щеки все розовели и розовели.</p>
                <p>Итак, Винни-Пух отправился к своему другу Кристоферу Робину, который жил в том же лесу, в доме с зеленой дверью.</p>
                <p>— Доброе утро, Кристофер Робин! — сказал Пух.</p>
                <p>— Доброе утро, Винни-Пух! — сказал мальчик.</p>
                <p>— Интересно, нет ли у тебя случайно воздушного шара?</p>
                <p>— Воздушного шара?</p>
                <p>— Да, я как раз шел и думал: «Нет ли у Кристофера Робина случайно воздушного шара?» Мне было просто интересно.</p>
                <p>— Зачем тебе понадобился воздушный шар?</p>
                <p>Винни-Пух оглянулся и, убедившись, что никто не подслушивает, прижал лапу к губам и сказал страшным шепотом:</p>
                <p>— Мед.</p>
                <p>— Что-о?</p>
                <p>— Мед! — повторил Пух.</p>
                <p>— Кто же это ходит за медом с воздушными шарами?</p>
                <p>— Я хожу! — сказал Пух.</p>
                <p>Ну, а как раз накануне Кристофер Робин был на вечере у своего друга Пятачка, и там всем гостям дарили воздушные шарики. Кристоферу Робину достался большущий зеленый шар, а одному из Родных и Знакомых Кролика приготовили большой-пребольшой синий шар, но этот Родственник и Знакомый его не взял, потому что сам он был еще такой маленький, что его не взяли в гости, поэтому Кристоферу Робину пришлось, так и быть, захватить с собой оба шара — и зеленый и синий.</p>
                <p>— Какой тебе больше нравится? — спросил Кристофер Робин.</p>
                <p>Пух обхватил голову лапами и задумался глубоко-глубоко.</p>
                <p>— Вот какая история, — сказал он. — Если хочешь достать мед — главное дело в том, чтобы пчелы тебя не заметили. И вот, значит, если шар будет зеленый, они могут подумать, что это листик, и не заметят тебя, а если шар будет синий, они могут подумать, что это просто кусочек неба, и тоже тебя не заметят. Весь вопрос — чему они скорее поверят?</p>
                <p>— А думаешь, они не заметят под шариком тебя?</p>
                <p>— Может, заметят, а может, и нет, — сказал Винни-Пух. — Разве знаешь, что пчелам в голову придет? — Он подумал минутку и добавил: — Я притворюсь, как будто я маленькая черная тучка. Тогда они не догадаются!</p>
                <p>— Тогда тебе лучше взять синий шарик, — сказал Кристофер Робин.</p>
                <p>И вопрос был решен.</p>
                <p>Друзья взяли с собой синий шар, Кристофер Робин, как всегда (просто на всякий случай), захватил свое ружье, и оба отправились в поход.</p>
                <figure class="wp-block-image">
                    <picture class="wp-image-36018">
                        <source class="lazy-load is-loaded" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh4.jpg.webp" type="image/webp" srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh4.jpg.webp" data-loaded="true"><img loading="lazy" width="257" height="382" src="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh4.jpg" alt="Винни-Пух и все-все-все - Алан Милн" class="wp-image-36018 lazy-load is-loaded" sizes="(max-width: 257px) 100vw, 257px" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh4.jpg 257w, https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh4-135x200.jpg 135w" data-src="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh4.jpg" style="height: 382px;" srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh4.jpg 257w, https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh4-135x200.jpg 135w" data-loaded="true">
                    </picture>
                </figure>
                <p>Винни-Пух первым делом подошел к одной знакомой луже и как следует вывалялся в грязи, чтобы стать совсем-совсем черным, как настоящая тучка. Потом они стали надувать шар, держа его вдвоем за веревочку. И когда шар раздулся так, что казалось, вот-вот лопнет, Кристофер Робин вдруг отпустил веревочку, и Винни-Пух плавно взлетел в небо и остановился там-как раз напротив верхушки пчелиного дерева, только немного в стороне.</p>
                <p>— Ураааа! — закричал Кристофер Робин.</p>
                <p>— Что, здорово? — крикнул ему из поднебесья Винни-Пух. — Ну, на кого я похож?</p>
                <p>— На медведя, который летит на воздушном шаре!</p>
                <p>— А на маленькую черную тучку разве не похож? — тревожно спросил Пух.</p>
                <p>— Не очень.</p>
                <p>— Ну ладно, может быть, отсюда больше похоже. А потом, разве знаешь, что придет пчелам в голову!</p>
                <p>К сожалению, ветра не было, и Пух повис в воздухе совершенно неподвижно. Он мог чуять мед, он мог видеть мед, но достать мед он, увы, никак не мог.</p>
                <p>Спустя некоторое время он снова заговорил.</p>
                <p>— Кристофер Робин! — крикнул он шепотом.</p>
                <p>— Чего?</p>
                <p>— По-моему, пчелы что-то подозревают!</p>
                <p>— Что именно?</p>
                <p>— Не знаю я. Но только, по-моему, они ведут себя подозрительно!</p>
                <p>— Может, они думают, что ты хочешь утащить у них мед?</p>
                <p>— Может, и так. Разве знаешь, что пчелам в голову придет!</p>
                <p>Вновь наступило недолгое молчание. И опять послышался голос Пуха:</p>
                <p>— Кристофер Робин!</p>
                <p>— Что?</p>
                <p>— У тебя дома есть зонтик?</p>
                <p>— Кажется, есть.</p>
                <p>— Тогда я тебя прошу: принеси его сюда и ходи тут с ним взад и вперед, а сам поглядывай все время на меня и приговаривай: «Тц-тц-тц, похоже, что дождь собирается!» Я думаю, тогда пчелы нам лучше поверят.</p>
                <p>Ну, Кристофер Робин, конечно, рассмеялся про себя и подумал: «Ах ты, глупенький мишка!» — но вслух он этого не сказал, потому что он очень любил Пуха.</p>
                <p>И он отправился домой за зонтиком.</p>
                <p>— Наконец-то! — крикнул Винни-Пух, как только Кристофер Робин вернулся. — А я уже начал беспокоиться. Я заметил, что пчелы ведут себя совсем подозрительно!</p>
                <p>— Открыть зонтик или не надо?</p>
                <p>— Открыть, но только погоди минутку. Надо действовать наверняка. Самое главное — это обмануть пчелиную царицу. Тебе ее оттуда видно?</p>
                <p>— Нет.</p>
                <p>— Жаль, жаль. Ну, тогда ты ходи с зонтиком и говори: «Тц-тц-тц, похоже, что дождь собирается», а я буду петь специальную Тучкину Песню — такую, какую, наверно, поют все тучки в небесах… Давай!</p>
                <p>Кристофер Робин принялся расхаживать взад и вперед под деревом и говорить, что, кажется, дождь собирается, а Винни-Пух запел такую песню:</p>
                <figure class="wp-block-image">
                    <picture class="wp-image-36019">
                        <source class="lazy-load is-loaded" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh5.jpg.webp" type="image/webp" srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh5.jpg.webp" data-loaded="true"><img loading="lazy" width="248" height="374" src="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh5.jpg" alt="Винни-Пух и все-все-все - Алан Милн" class="wp-image-36019 lazy-load is-loaded" sizes="(max-width: 248px) 100vw, 248px" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh5.jpg 248w, https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh5-133x200.jpg 133w" data-src="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh5.jpg" style="height: 374px;" srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh5.jpg 248w, 
            https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh5-133x200.jpg 133w" data-loaded="true">
                    </picture>
                </figure>
                <p><em>Я Тучка, Тучка, Тучка,</em></p>
                <p><em>А вовсе не медведь,</em></p>
                <p><em>Ах, как приятно Тучке</em></p>
                <p><em>По небу лететь!</em></p>
                <p><em>Ах, в синем-синем небе</em></p>
                <p><em>Порядок и уют</em></p>
                <p>—</p>
                <p><em>Поэтому все Тучки</em></p>
                <p><em>Так весело поют!</em></p>
                <p>Но пчелы, как ни странно, жужжали все подозрительнее и подозрительнее. Многие из них даже вылетели из гнезда и стали летать вокруг Тучки, когда она запела второй куплет песни. А одна пчела вдруг на минутку присела на нос Тучки и сразу же снова взлетела.</p>
                <p>— Кристофер — ай! — Робин! — закричала Тучка.</p>
                <p>— Что?</p>
                <p>— Я думал, думал и наконец все понял. Это неправильные пчелы!</p>
                <p>— Да ну?</p>
                <p>— Совершенно неправильные! И они, наверно, делают неправильный мед, правда?</p>
                <p>— Ну да?</p>
                <p>— Да. Так что мне, скорей всего, лучше спуститься вниз.</p>
                <p>— А как? — спросил Кристофер Робин.</p>
                <p>Об этом Винни-Пух как раз еще и не подумал. Если он выпустит из лап веревочку, он упадет и опять бумкнет. Эта мысль ему не понравилась. Тогда он еще как следует подумал и потом сказал:</p>
                <p>— Кристофер Робин, ты должен сбить шар из ружья. Ружье у тебя с собой?</p>
                <p>— Понятно, с собой, — сказал Кристофер Робин. — Но если я выстрелю в шарик, он же испортится!</p>
                <p>— А если ты не выстрелишь, тогда испорчусь я, — сказал Пух.</p>
                <p>Конечно, тут Кристофер Робин сразу понял, как надо поступить. Он очень тщательно прицелился в шарик и выстрелил.</p>
                <p>— Ой-ой-ой! — вскрикнул Пух.</p>
                <p>— Разве я не попал? — спросил Кристофер Робин.</p>
                <p>— Не то чтобы совсем не попал, — сказал Пух, — но только не попал в шарик!</p>
                <p>— Прости, пожалуйста, — сказал Кристофер Робин и выстрелил снова.</p>
                <p>На этот раз он не промахнулся. Воздух начал медленно выходить из шарика, и Винни-Пух плавно опустился на землю.</p>
                <p>Правда, лапки у него совсем одеревенели, оттого что ему пришлось столько времени висеть, держась за веревочку. Целую неделю после этого происшествия он не мог ими пошевелить, и они так и торчали кверху. Если ему на нос садилась муха, ему приходилось сдувать ее: «Пухх! Пуххх!»</p>
                <p>И, может быть — хотя я в этом не уверен, — может быть, именно тогда-то его и назвали Пухом.</p>
                <p>— Сказке конец? — спросил Кристофер Робин.</p>
                <p>— Конец этой сказке. А есть и другие.</p>
                <p>— Про Пуха и про меня?</p>
                <p>— И про Кролика, про Пятачка, и про всех остальных. Ты сам разве не помнишь?</p>
                <p>— Помнить-то я помню, но когда хочу вспомнить, то забываю…</p>
                <p>— Ну, например, однажды Пух и Пятачок решили поймать Слонопотама…</p>
                <p>— А поймали они его?</p>
                <p>— Нет.</p>
                <p>— Где им! Ведь Пух совсем глупенький. А я его поймал?</p>
                <p>— Ну, услышишь — узнаешь.</p>
                <p>Кристофер Робин кивнул.</p>
                <div class="ad-tag ad-can-close ad-in-content" ad-num="1">
                    <div class="ad-tag-inner">
                        <div class="ad-placeholder-text native-sharing">
                            <div>Нравится произведение?</div>
                            <div>Не забудь поделиться с друзьями </div>
                            <div class="share-btn"><i class="blicon-share2"></i></div>
                        </div>
                        <div class="MKN_ITA_300M actual-ad"></div>
                    </div><i class="ad-close-btn fa fa-times-thin fa-2x" aria-hidden="true"></i>
                </div>
                <p>— Понимаешь, папа, я-то все помню, а вот Пух забыл, и ему очень-очень интересно послушать опять. Ведь это будет настоящая сказка, а не просто так… вспоминание.</p>
                <p>— Вот и я так думаю.</p>
                <p>Кристофер Робин глубоко вздохнул, взял медвежонка за заднюю лапу и поплелся к двери, волоча его за собой. У порога он обернулся и сказал:</p>
                <p>— Ты придешь посмотреть, как я купаюсь?</p>
                <p>— Наверно, — сказал папа.</p>
                <p>— А ему не очень было больно, когда я попал в него из ружья?</p>
                <p>— Ни капельки, — сказал папа.</p>
                <p>Мальчик кивнул и вышел, и через минуту папа услышал, как Винни-Пух поднимается по лесенке: бум-бум-бум.</p><a rel="nofollow" class="kc-gotop kc__gotop" href="#kcmenu">к оглавлению ↑</a>
                <h2 id="glava-vtoraya-v-kotoroj-vinni-puh-poshyol-v-gosti-a-popal-v-bezvyhodno">ГЛАВА ВТОРАЯ, в которой Винни-Пух пошёл в гости, а попал в безвыходное положение</h2>
                <p>Как-то днем известный своим друзьям, а значит, теперь и вам, Винни-Пух (кстати, иногда для краткости его звали просто Пух) не спеша прогуливался по Лесу с довольно важным видом, ворча себе под нос новую песенку.</p>
                <p>Ему было чем гордиться — ведь эту песенку-ворчалку он сам сочинил только сегодня утром, занимаясь, как обычно, утренней гимнастикой перед зеркалом. Надо вам сказать, что Винни-Пух очень хотел похудеть и потому старательно занимался гимнастикой. Он поднимался на носки, вытягивался изо всех сил и в это время пел так:</p>
                <p>— Тара-тара-тара-ра!</p>
                <p>А потом, когда он наклонялся, стараясь дотянуться передними лапками до носков, он пел так:</p>
                <p>— Тара-тара-ой, караул, трам-пам-па!</p>
                <p>Ну, вот так и сочинилась песенка-ворчалка, и после завтрака Винни все время повторял ее про себя, все ворчал и ворчал, пока не выучил ее всю наизусть. Теперь он знал ее всю от начала до конца. Слова в этой Ворчалке были приблизительно такие:</p>
                <p><em>Тара-тара-тара-ра!</em></p>
                <p><em>Трам-пам-пам-тарарам-пам-па!</em></p>
                <p><em>Тири-тири-тири-ри,</em></p>
                <p><em>Трам-пам-пам-тиририм-пим-пи!</em></p>
                <p>И вот, ворча себе под нос эту Ворчалку и размышляя — а размышлял Винни-Пух о том, что было бы, если бы он, Винни, был не Винни-Пухом, а кем-нибудь совсем-совсем другим, — наш Винни незаметно дошел до песчаного откоса, в котором была большая дыра.</p>
                <figure class="wp-block-image">
                    <picture class="wp-image-36020">
                        <source class="lazy-load" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh6.jpg.webp" type="image/webp"><img loading="lazy" width="371" height="295" src="https://mishka-knizhka.ru/wp-content/themes/fluida-child/resources/img/bg_white_loading.jpg" alt="Винни-Пух и все-все-все - Алан Милн" class="wp-image-36020 lazy-load" sizes="(max-width: 371px) 100vw, 371px" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh6.jpg 371w, https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh6-252x200.jpg 252w" data-src="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh6.jpg" style="height: 295px;">
                    </picture>
                </figure>
                <p>— Ага! — сказал Пух. (Трам-пам-пам-тирирам-пам-па!) — Если я что-нибудь в чем-нибудь понимаю, то дыра — это нора, а нора — это Кролик, а Кролик — это подходящая компания, а подходящая компания — это такая компания, где меня чем-нибудь угостят и с удовольствием послушают мою Ворчалку. И все такое прочее!</p>
                <p>Тут он наклонился, сунул голову в нору и крикнул:</p>
                <p>— Эй! Кто-нибудь дома?</p>
                <p>Вместо ответа послышалась какая-то возня, а потом снова стало тихо.</p>
                <p>— Я спросил: «Эй! Кто-нибудь дома?» — повторил Пух громко-громко.</p>
                <p>— Нет! — ответил чей-то голос. — И незачем так орать, — прибавил он, — я и в первый раз прекрасно тебя понял.</p>
                <p>— Простите! — сказал Винни-Пух. — А что, совсем-совсем никого нет дома?</p>
                <p>— Совсем-совсем никого! — отвечал голос. Тут Винни-Пух вытащил голову из норы и задумался.</p>
                <p>Он подумал так: «Не может быть, чтобы там совсем-совсем никого не было! Кто-то там все-таки есть — ведь кто-нибудь должен же был сказать: «Совсем-совсем никого!»</p>
                <p>Поэтому он снова наклонился, сунул голову в отверстие норы и сказал:</p>
                <p>— Слушай, Кролик, а это не ты?</p>
                <p>— Нет, не я! — сказал Кролик совершенно не своим голосом.</p>
                <p>— А разве это не твой голос?</p>
                <p>— По-моему, нет, — сказал Кролик. — По-моему, он совсем, ну ни капельки не похож! И не должен быть похож!</p>
                <p>— Вот как? — сказал Пух.</p>
                <p>Он снова вытащил голову наружу, еще раз задумался, а потом опять сунул голову обратно и сказал:</p>
                <p>— Будьте так добры, скажите мне, пожалуйста, куда девался Кролик?</p>
                <p>— Он пошел в гости к своему другу Винни-Пуху. Они, знаешь, какие с ним друзья!</p>
                <p>Тут Винни-Пух прямо охнул от удивления.</p>
                <p>— Так ведь это же я! — сказал он.</p>
                <p>— Что значит «я»? «Я» бывают разные!</p>
                <p>— Это «я» значит: это я, Винни-Пух!</p>
                <p>На этот раз удивился Кролик. Он удивился еще больше Винни.</p>
                <p>— А ты в этом уверен? — спросил он.</p>
                <p>— Вполне, вполне уверен! — сказал Винни-Пух.</p>
                <p>— Ну хорошо, тогда входи!</p>
                <p>И Винни полез в нору. Он протискивался, протискивался, протискивался и наконец очутился там.</p>
                <p>— Ты был совершенно прав, — сказал Кролик, осмотрев его с головы до ног. — Это действительно ты! Здравствуй, очень рад тебя видеть!</p>
                <p>— А ты думал, кто это?</p>
                <p>— Ну, я думал, мало ли кто это может быть! Сам знаешь, тут, в Лесу нельзя пускать в дом кого попало! Осторожность никогда не повредит. Ну ладно. А не пора ли чем-нибудь подкрепиться?</p>
                <p>Винни-Пух был всегда не прочь немного подкрепиться, в особенности часов в одиннадцать утра, потому что в это время завтрак уже давно окончился, а обед еще и не думал начинаться. И, конечно, он страшно обрадовался, увидев, что Кролик достает чашки и тарелки. А когда Кролик спросил «Тебе чего намазать — меду или сгущенного молока?» — Пух пришел в такой восторг, что выпалил: «И того и другого!» Правда, спохватившись, он, чтобы не показаться очень жадным, поскорее добавил: «А хлеба можно вообще не давать!»</p>
                <figure class="wp-block-image">
                    <picture class="wp-image-36021">
                        <source class="lazy-load is-loaded" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh7.jpg.webp" type="image/webp" srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh7.jpg.webp" data-loaded="true"><img loading="lazy" width="513" height="192" src="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh7.jpg" alt="Винни-Пух и все-все-все - Алан Милн" class="wp-image-36021 lazy-load is-loaded" sizes="(max-width: 513px) 100vw, 513px" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh7.jpg 513w, https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh7-328x123.jpg 328w" data-src="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh7.jpg" style="height: 192px;" srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh7.jpg 513w, https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh7-328x123.jpg 328w" data-loaded="true">
                    </picture>
                </figure>
                <p>И тут он замолчал и долго-долго ничего не говорил, потому что рот у него был ужасно занят.</p>
                <p>А спустя долгое время, мурлыкая что-то сладким-сладким голоском — голос у него стал прямо-таки медовый! — Пух встал из-за стола, от всей души пожал Кролику лапу и сказал, что ему пора идти.</p>
                <p>— Уже пора? — вежливо спросил Кролик.</p>
                <p>Нельзя ручаться, что он не подумал про себя: «Не очень-то вежливо уходить из гостей сразу, как только ты наелся». Но вслух он этого не сказал, потому что он был очень умный Кролик.</p>
                <p>Вслух он спросил:</p>
                <p>— Уже пора?</p>
                <p>— Ну, — замялся Пух, — я мог бы побыть еще немного, если бы ты… если бы у тебя… — запинался он и при этом почему-то не сводил глаз с буфета.</p>
                <p>— По правде говоря, — сказал Кролик, — я сам собирался пойти погулять.</p>
                <p>— А-а, ну хорошо, тогда и я пойду. Всего хорошего.</p>
                <p>— Ну, всего хорошего, если ты больше ничего не хочешь.</p>
                <p>— А разве еще что-нибудь есть? — с надеждой спросил Пух, снова оживляясь.</p>
                <p>Кролик заглянул во все кастрюли и банки и со вздохом сказал:</p>
                <p>— Увы, совсем ничего не осталось!</p>
                <p>— Я так и думал, — сочувственно сказал Пух, покачав головой. — Ну, до свиданья, мне пора идти.</p>
                <p>И он полез из норы. Он изо всех сил тянул себя передними лапками и изо всей мочи толкал себя задними лапками, и спустя некоторое время на воле оказался его нос… потом уши… потом передние лапы… потом плечи… а потом… А потом Винни-Пух закричал:</p>
                <p>— Ай, спасите! Я лучше полезу назад!</p>
                <p>Еще потом он закричал:</p>
                <p>— Ай, помогите! Нет, уж лучше вперед!</p>
                <p>И, наконец, он завопил отчаянным голосом:</p>
                <p>— Ай-ай-ай, спасите-помогите! Не могу ни взад ни вперед!</p>
                <p>Тем временем Кролик, который, как мы помним, собирался пойти погулять, видя, что парадная дверь забита, выбежал наружу черным ходом и, обежав кругом, подошел к Пуху.</p>
                <p>— Ты что — застрял? — спросил он.</p>
                <figure class="wp-block-image">
                    <picture class="wp-image-36022">
                        <source class="lazy-load is-loaded" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh8.jpg.webp" type="image/webp" srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh8.jpg.webp" data-loaded="true"><img loading="lazy" width="378" height="252" src="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh8.jpg" alt="Винни-Пух и все-все-все - Алан Милн" class="wp-image-36022 lazy-load is-loaded" sizes="(max-width: 378px) 100vw, 378px" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh8.jpg 378w, https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh8-300x200.jpg 300w" data-src="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh8.jpg" style="height: 252px;" srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh8.jpg 378w, https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh8-300x200.jpg 300w" data-loaded="true">
                    </picture>
                </figure>
                <p>— Не-ет, я просто отдыхаю, — ответил Пух, стараясь говорить веселым голосом. — Просто отдыхаю думаю кой о чем и пою песенку…</p>
                <p>— Ну-ка, дай мне лапу, — строго сказал Кролик.</p>
                <p>Винни-Пух протянул ему лапу, и Кролик стал его тащить.</p>
                <p>Он тащил и тащил, он тянул и тянул, пока Винни не закричал:</p>
                <p>— Ой-ой-ой! Больно!</p>
                <p>— Теперь все ясно, — сказал Кролик, — ты застрял.</p>
                <p>— Все из-за того, — сердито сказал Пух, — что выход слишком узкий!</p>
                <p>— Нет, все из-за того, что кто-то пожадничал! — строго сказал Кролик. — За столом мне все время казалось, хотя из вежливости я этого не говорил, что кто-то слишком много ест! И я твердо знал, что этот «кто-то» — не я! Делать нечего, придется сбегать за Кристофером Робином.</p>
                <p>Кристофер Робин, друг Винни-Пуха и Кролика, жил, как вы помните, совсем в другом конце Леса. Но он сразу же прибежал на помощь и, когда увидел переднюю половину Винни-Пуха, сказал: «Ах ты, глупенький мой мишка!» — таким ласковым голосом, что у всех сразу стало легче на душе.</p>
                <p>— А я как раз начал думать, — сказал Винни, слегка хлюпая носом, — что вдруг бедному Кролику уже никогда-никогда не придется ходить через парадную дверь… Я бы тогда очень-очень огорчился…</p>
                <p>— Я тоже, — сказал Кролик.</p>
                <p>— Не придется ходить через парадную дверь? — переспросил Кристофер Робин. — Почему? Пожалуй, придется…</p>
                <p>— Ну вот и хорошо, — сказал Кролик.</p>
                <p>— Пожалуй, придется втолкнуть тебя в нору, если мы не сможем тебя вытащить, — закончил Кристофер Робин.</p>
                <p>Тут Кролик задумчиво почесал за ухом и сказал, что ведь если Винни-Пуха втолкнуть в нору, то он там останется насовсем. И что хотя он, Кролик, всегда безумно рад видеть Винни-Пуха, но все-таки, что ни говори, одним полагается жить на земле, а другим под землей, и…</p>
                <p>— По-твоему, я теперь никогда-никогда не выйду на волю? — спросил Пух жалобно.</p>
                <p>— По-моему, если ты уже наполовину вылез, жаль останавливаться на полпути, — сказал Кролик.</p>
                <p>Кристофер Робин кивнул головой.</p>
                <p>— Выход один, — сказал он, — нужно подождать, пока ты опять похудеешь.</p>
                <p>— А долго мне нужно худеть? — испуганно спросил Пух.</p>
                <p>— Да так, с недельку.</p>
                <p>— Ой, да не могу же я торчать тут целую неделю!</p>
                <p>— Торчать-то ты как раз отлично можешь, глупенький мой мишка. Вот вытащить тебя отсюда — это дело похитрее!</p>
                <p>— Не горюй, мы будем читать тебе вслух! — весело воскликнул Кролик. — Только бы снег не пошел… Да, вот еще что, — добавил он, — ты, дружок, занял у меня почти всю комнату… Можно, я буду вешать полотенца на твои задние ноги? А то они торчат там совершенно зря, а из них выйдет чудесная вешалка для полотенец!</p>
                <p>— Ой-ой-ой, це-е-лу-ю неделю! — грустно сказал Пух. — А как же обедать?!</p>
                <p>— Обедать, дорогой мой, не придется! — сказал Кристофер Робин. — Ведь ты должен скорей похудеть! Вот читать вслух — это мы тебе обещаем!</p>
                <p>Медвежонок хотел вздохнуть, но не смог — настолько крепко он застрял. Он уронил слезинку и сказал:</p>
                <p>— Ну, уж вы тогда хотя бы читайте мне какую-нибудь удобоваримую книгу, которая может поддержать и утешить несчастного медвежонка в безвыходном положении…</p>
                <p>И вот целую неделю Кристофер Робин читал вслух именно такую удобоваримую, то есть понятную и интересную, книжку возле Северного Края Пуха, а Кролик вешал выстиранное белье на его Южный Край… И тем временем Пух становился все тоньше, и тоньше, и тоньше.</p>
                <p>А когда неделя кончилась, Кристофер Робин сказал:</p>
                <p>— Пора!</p>
                <p>Он ухватился за передние лапы Пуха, Кролик ухватился за Кристофера Робина, а все Родные и Знакомые Кролика (их было ужасно много!) ухватились за Кролика и стали тащить изо всей мочи.</p>
                <p>И сперва Винни-Пух говорил одно слово:</p>
                <p>— Ой!</p>
                <p>А потом другое слово:</p>
                <p>— Ох!</p>
                <p>И вдруг — совсем-совсем вдруг — он сказал:</p>
                <p>— Хлоп! — точь-в-точь как говорит пробка, когда она вылетает из бутылки.</p>
                <p>Тут Кристофер Робин, и Кролик, и все Родные и Знакомые Кролика сразу полетели вверх тормашками! Получилась настоящая куча мала.</p>
                <p>А на верху этой кучи очутился Винни-Пух — свободный!</p>
                <p>Винни-Пух важно кивнул всем своим друзьям в знак благодарности и с важным видом отправился гулять по Лесу, напевая свою песенку. А Кристофер Робин посмотрел ему вслед и ласково прошептал:</p>
                <p>— Ах ты, глупенький мой мишка!</p><a rel="nofollow" class="kc-gotop kc__gotop" href="#kcmenu">к оглавлению ↑</a>
                <h2 id="glava-tretya-v-kotoroj-puh-i-pyatachok-otpravilis-na-ohotu-i-chut-chut">ГЛАВА ТРЕТЬЯ, в которой Пух и Пятачок отправились на охоту и чуть-чуть не поймали Буку</h2>
                <p> Лучший друг Винни-Пуха, крошечный поросенок, которого звали Пятачок, жил в большом-пребольшом доме, в большом-пребольшом дереве. Дерево стояло в самой середине Леса, дом был в самой середине дерева, а Пятачок жил в самой середине дома. А рядом с домом стоял столбик, на котором была прибита поломанная доска с надписью, и тот, кто умел немножко читать, мог прочесть:</p>
                <figure class="wp-block-image">
                    <picture class="wp-image-36023">
                        <source class="lazy-load is-loaded" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh9.jpg.webp" type="image/webp" srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh9.jpg.webp" data-loaded="true"><img loading="lazy" width="226" height="383" src="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh9.jpg" alt="Винни-Пух и все-все-все - Алан Милн" class="wp-image-36023 lazy-load is-loaded" sizes="(max-width: 226px) 100vw, 226px" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh9.jpg 226w, https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh9-118x200.jpg 118w" data-src="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh9.jpg" style="height: 383px;" srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh9.jpg 226w, https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh9-118x200.jpg 118w" data-loaded="true">
                    </picture>
                </figure>
                <p>Посторонним В.</p>
                <p>Больше никто ничего не мог прочесть, даже тот, кто умел читать совсем хорошо.</p>
                <p>Как-то Кристофер Робин спросил у Пятачка, что тут, на доске, написано. Пятачок сразу же сказал, что тут написано имя его дедушки и что эта доска с надписью — их фамильная реликвия, то есть семейная драгоценность.</p>
                <p>Кристофер Робин сказал, что не может быть такого имени — Посторонним В., а Пятачок ответил, что нет, может, нет, может, потому что дедушку же так звали! И «В» — это просто сокращение, а полностью дедушку звали Посторонним Вилли, а это тоже сокращение имени Вильям Посторонним.</p>
                <p>— У дедушки было два имени, — пояснил он, — специально на тот случай, если он одно где-нибудь потеряет.</p>
                <p>— Подумаешь! У меня тоже два имени, — сказал Кристофер Робин.</p>
                <p>— Ну вот, что я говорил! — сказал Пятачок. — Значит, я прав!</p>
                <p>Был чудесный зимний день. Пятачок, разметавший
                    снег у дверей своего дома, поднял голову и увидел не кого иного, как Винни-Пуха. Пух медленно шел куда-то, внимательно глядя себе под ноги, и так глубоко задумался, что, когда Пятачок окликнул его, он и не подумал остановиться.</p>
                <p>— Эй, Пух! — закричал Пятачок. — Здорово, Пух! Ты что там делаешь?</p>
                <p>— Охочусь! — сказал Пух.</p>
                <p>— Охотишься? На кого?</p>
                <p>— Выслеживаю кого-то! — таинственно ответил Пух.</p>
                <p>Пятачок подошел к нему поближе:</p>
                <div class="ad-tag ad-can-close ad-in-content" ad-num="2">
                    <div class="ad-tag-inner">
                        <div class="ad-placeholder">
                            <div class="ad-placeholder-text placeholder-cite">
                                <div class="cite-text">Для того чтобы во что-то верить, вовсе не обязательно знать, правда ли это.</div>
                                <div class="cite-author">Цикл о Муми-троллях</div>
                            </div>
                        </div>
                        <div class="MKN_ITA_300M actual-ad"></div>
                    </div><i class="ad-close-btn fa fa-times-thin fa-2x" aria-hidden="true"></i>
                </div>
                <p>— Выслеживаешь? Кого?</p>
                <p>— Вот как раз об этом я все время сам себя спрашиваю, — сказал Пух. — В этом весь вопрос: кто это?</p>
                <p>— А как ты думаешь, что ты ответишь на этот вопрос?</p>
                <p>— Придется подождать, пока я с ним встречусь, — сказал Винни-Пух. — Погляди-ка сюда. — Он показал на снег прямо перед собой. — Что ты тут видишь?</p>
                <p>— Следы, — сказал Пятачок. — Отпечатки лап! — Пятачок даже взвизгнул от волнения. — Ой, Пух! Ты думаешь… это… это… страшный Бука?!</p>
                <p>— Может быть, — сказал Пух. — Иногда как будто он, а иногда как будто и не он. По следам разве угадаешь?</p>
                <p>Он замолчал и решительно зашагал вперед по следу, а Пятачок, помедлив минутку-другую, побежал за ним.</p>
                <p>Внезапно Винни-Пух остановился и нагнулся к земле.</p>
                <p>— В чем дело? — спросил Пятачок.</p>
                <p>— Очень странная вещь, — сказал медвежонок. — Теперь тут, кажется, стало два зверя. Вот к этому — Неизвестно Кому — подошел другой — Неизвестно Кто, и они теперь гуляют вдвоем. Знаешь чего, Пятачок? Может быть, ты пойдешь со мной, а то вдруг это окажутся Злые Звери?</p>
                <p>Пятачок мужественно почесал за ухом и сказал, что до пятницы он совершенно свободен и с большим удовольствием пойдет с Пухом, в особенности если там Настоящий Бука.</p>
                <p>— Ты хочешь сказать, если там два Настоящих Буки, — уточнил Винни-Пух, а Пятачок сказал, что это все равно, ведь до пятницы ему совершенно нечего делать.</p>
                <p>И они пошли дальше вместе.</p>
                <figure class="wp-block-image">
                    <picture class="wp-image-36024">
                        <source class="lazy-load is-loaded" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh10.jpg.webp" type="image/webp" srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh10.jpg.webp" data-loaded="true"><img loading="lazy" width="244" height="373" src="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh10.jpg" alt="Винни-Пух и все-все-все - Алан Милн" class="wp-image-36024 lazy-load is-loaded" sizes="(max-width: 244px) 100vw, 244px" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh10.jpg 244w, https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh10-131x200.jpg 131w" data-src="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh10.jpg" style="height: 373px;" srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh10.jpg 244w, https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh10-131x200.jpg 131w" data-loaded="true">
                    </picture>
                </figure>
                <p>Следы шли вокруг маленькой ольховой рощицы… и, значит, два Буки, если это были они, тоже шли вокруг рощицы, и, понятно, Пух и Пятачок тоже пошли вокруг рощицы.</p>
                <p>По пути Пятачок рассказывал Винни-Пуху интересные истории из жизни своего дедушки Посторонним В. Например, как этот дедушка лечился от ревматизма после охоты и как он на склоне лет начал страдать одышкой, и всякие другие занятные вещи.</p>
                <p>А Пух все думал, как же этот дедушка выглядит. И ему пришло в голову, что вдруг они сейчас охотятся как раз на двух дедушек, и интересно, если они поймают этих дедушек, можно ли будет взять хоть одного домой и держать его у себя, и что, интересно, скажет по этому поводу Кристофер Робин.</p>
                <p>А следы все шли и шли перед ними…</p>
                <p>Вдруг Винни-Пух снова остановился как вкопанный.</p>
                <p>— Смотри! — закричал он шепотом и показал на снег.</p>
                <p>— Куда? — тоже шепотом закричал Пятачок и подскочил от страха. Но, чтобы показать, что он подскочил не от страха, а просто так, он тут же подпрыгнул еще разика два, как будто ему просто захотелось попрыгать.</p>
                <p>— Следы, — сказал Пух. — Появился третий зверь!</p>
                <p>— Пух, — взвизгнул Пятачок, — ты думаешь, это еще один Бука?</p>
                <p>— Нет, не думаю, — сказал Пух, — потому что следы совсем другие… Это, может быть, два Буки, а один, скажем… скажем, Бяка… Или же, наоборот, два Бяки, а один, скажем… скажем, Бука… Надо идти за ними, ничего не поделаешь.</p>
                <p>И они пошли дальше, начиная немного волноваться, потому что ведь эти три Неизвестных Зверя могли оказаться Очень Страшными Зверями. И Пятачку ужасно хотелось, чтобы его милый Дедушка Посторонним В. был бы сейчас тут, а не где-то в неизвестном месте… А Пух думал о том, как было бы хорошо, если бы они вдруг, совсем-совсем случайно, встретили Кристофера Робина, — конечно, просто потому, что он, Пух, так любит Кристофера Робина!…</p>
                <p>И тут совершенно неожиданно Пух остановился в третий раз и облизал кончик своего носа, потому что ему вдруг стало страшно жарко. Перед ними были следы четырех зверей!</p>
                <p>— Гляди, гляди, Пятачок! Видишь? Стало три Буки и один Бяка! Еще один Бука прибавился!…</p>
                <p>Да, по-видимому, так и было! Следы, правда, немного путались и перекрещивались друг с другом, но, совершенно несомненно, это были следы четырех комплектов лап.</p>
                <p>— Знаешь что? — сказал Пятачок, в свою очередь, облизав кончик носа и убедившись, что это очень мало помогает. — Знаешь что? По-моему, я что-то вспомнил. Да, да! Я вспомнил об одном деле, которое я забыл сделать вчера, а завтра уже не успею… В общем, мне нужно скорее пойти домой и сделать это дело.</p>
                <p>— Давай сделаем это после обеда, — сказал Пух, — я тебе помогу.</p>
                <p>— Да, понимаешь, это не такое дело, которое можно сделать после обеда, — поскорее сказал Пятачок. — Это такое специальное утреннее дело. Его обязательно надо сделать утром, лучше всего часов в… Который час, ты говорил?</p>
                <p>— Часов двенадцать, — сказал Пух, посмотрев на солнце.</p>
                <p>— Вот, вот, как ты сам сказал, часов в двенадцать. Точнее, от двенадцати до пяти минут первого! Так что ты уж на меня не обижайся, а я… Ой, мама! Кто там?</p>
                <p>Пух посмотрел на небо, а потом, снова услышав чей-то свист, взглянул на большой дуб и увидел кого-то на ветке.</p>
                <p>— Да это же Кристофер Робин! — сказал он.</p>
                <p>— А-а, ну тогда все в порядке, — сказал Пятачок, — с ним тебя никто не тронет. До свиданья!</p>
                <p>И он побежал домой что было духу, ужасно довольный тем, что скоро окажется в полной безопасности.</p>
                <p>Кристофер Робин не спеша слез с дерева.</p>
                <p>— Глупенький мой мишка, — сказал он, — чем это ты там занимался? Я смотрю, сначала ты один обошел два раза вокруг этой рощицы, потом Пятачок побежал за тобой, и вы стали ходить вдвоем… Сейчас, по-моему, вы собирались обойти ее в четвертый раз по своим собственным следам!…</p>
                <p>— Минутку, — сказал Пух, подняв лапу.</p>
                <p>Он присел на корточки и задумался — глубоко-глубоко. Потом он приложил свою лапу к одному следу… Потом он два раза почесал за ухом и поднялся.</p>
                <p>— Н-да… — сказал он. — Теперь я понял, — добавил он. — Я даже не знал, что я такой глупый простофиля! — сказал Винни-Пух. — Я самый бестолковый медвежонок на свете!</p>
                <p>— Что ты! Ты самый лучший медвежонок на свете! — утешил его Кристофер Робин.</p>
                <p>— Правда? — спросил Пух. Он заметно утешился. И вдруг он совсем просиял: — Что ни говори, а уже пора обедать, — сказал он. И он пошел домой обедать.</p><a rel="nofollow" class="kc-gotop kc__gotop" href="#kcmenu">к оглавлению ↑</a>
                <h2 id="glava-chetvyortaya-v-kotoroj-ia-ia-teryaet-hvost-a-puh-nahodit">ГЛАВА ЧЕТВЁРТАЯ, в которой Иа-Иа теряет хвост, а Пух находит</h2>
                <p>Старый серый ослик Иа-Иа стоял один-одинешенек в заросшем чертополохом уголке леса, широко расставив передние ноги и свесив голову набок, и думал о Серьезных Вещах. Иногда он грустно думал: «Почему?», а иногда: «По какой причине?», а иногда он думал даже так: «Какой же отсюда следует вывод?» И неудивительно, что порой он вообще переставал понимать, о чем же он, собственно, думает.</p>
                <p>Поэтому, сказать вам по правде, услышав тяжелые шаги Винни-Пуха, Иа очень обрадовался, что может на минутку перестать думать и просто поздороваться.</p>
                <p>— Как самочувствие? — по обыкновению уныло спросил он.</p>
                <p>— А как твое? — спросил Винни-Пух.</p>
                <p>Иа покачал головой.</p>
                <p>— Не очень как! — сказал он. — Или даже совсем никак. Мне кажется, я уже очень давно не чувствовал себя как.</p>
                <p>— Ай-ай-ай, — сказал Пух, — очень грустно! Дай-ка я на тебя посмотрю.</p>
                <p>Иа-Иа продолжал стоять, понуро глядя в землю, и Винни-Пух обошел вокруг него.</p>
                <p>— Ой, что это случилось с твоим хвостом? — спросил он удивленно.</p>
                <p>— А что с ним случилось? — сказал Иа-Иа.</p>
                <p>— Его нет!</p>
                <p>— Ты не ошибся?</p>
                <p>— Хвост или есть, или его нет. По-моему, тут нельзя ошибиться. А твоего хвоста нет.</p>
                <p>— А что же тогда там есть?</p>
                <p>— Ничего.</p>
                <p>— Ну-ка, посмотрим, — сказал Иа-Иа.</p>
                <figure class="wp-block-image">
                    <picture class="wp-image-36025">
                        <source class="lazy-load" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh11.jpg.webp" type="image/webp"><img loading="lazy" width="530" height="198" src="https://mishka-knizhka.ru/wp-content/themes/fluida-child/resources/img/bg_white_loading.jpg" alt="Винни-Пух и все-все-все - Алан Милн" class="wp-image-36025 lazy-load" sizes="(max-width: 530px) 100vw, 530px" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh11.jpg 530w, https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh11-328x123.jpg 328w" data-src="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh11.jpg" style="height: 198px;">
                    </picture>
                </figure>
                <p>И он медленнио повернулся к тому месту, где недавно был его хвост; затем, заметив, что ему никак не удается его догнать, он стал поворачиваться в обратную сторону, пока не вернулся туда, откуда начал, а тогда он опустил голову и посмотрел снизу и наконец сказал, глубоко и печально вздыхая:</p>
                <p>— Кажется, ты прав.</p>
                <p>— Конечно, я прав, — сказал Пух.</p>
                <p>— Это вполне естественно, — грустно сказал Иа-Иа. — Теперь все понятно. Удивляться не приходится.</p>
                <p>— Ты, наверно, его где-нибудь позабыл, — сказал Винни-Пух.</p>
                <p>— Наверно, его кто-нибудь утащил… — сказал Иа-Иа. — Чего от них ждать! — добавил он после большой паузы.</p>
                <p>Пух чувствовал, что он должен сказать что-нибудь полезное, но не мог придумать, что именно. И он решил вместо этого сделать что-нибудь полезное.</p>
                <p>— Иа-Иа, — торжественно произнес он, — я, Винни-Пух, обещаю тебе найти твой хвост.</p>
                <p>— Спасибо, Пух, — сказал Иа. — Ты настоящий друг. Не то что некоторые!</p>
                <p>И Винни-Пух отправился на поиски хвоста.</p>
                <p>Он вышел в путь чудесным весенним утром. Маленькие прозрачные облачка весело играли на синем небе. Они то набегали на солнышко, словно хотели его закрыть, то поскорее убегали, чтобы дать и другим побаловаться.</p>
                <p>А солнце весело светило, не обращая на них никакого внимания, и сосна, которая носила свои иголки круглый год не снимая, казалась старой и потрепанной рядом с березками, надевшими новые зеленые кружева. Винни шагал мимо сосен и елок, шагал по склонам, заросшим можжевельником и репейником, шагал по крутым берегам ручьев и речек, шагал среди груд камней и снова среди зарослей, и вот наконец, усталый и голодный, он вошел в Дремучий Лес, потому что именно там, в Дремучем Лесу, жила Сова.</p>
                <p>«А если кто-нибудь что-нибудь о чем-нибудь знает, — сказал медвежонок про себя, — то это, конечно, Сова. Или я не Винни-Пух, — сказал он. — А я — он, — добавил Винни-Пух. — Значит, все в порядке! «</p>
                <p>Сова жила в великолепном замке «Каштаны». Да, это был не дом, а настоящий замок. Во всяком случае, так казалось медвежонку, потому что на двери замка был и звонок с кнопкой, и колокольчик со шнурком. Под звонком было прибито объявление:</p>
                <p>ПРОШУ НАЖАТЬ ЭСЛИ НЕ АТКРЫВАЮТ</p>
                <p>А под колокольчиком другое объявление:</p>
                <p>ПРОШУ ПАДЕРГАТЬ ЭСЛИ НЕ АТКРЫВАЮТ</p>
                <p>Оба эти объявления написал Кристофер Робин, который один во всем Лесу умел писать. Даже Сова, хотя она была очень-очень умная и умела читать и даже подписывать свое имя — Сава, и то не сумела бы правильно написать такие трудные слова.</p>
                <p>Винни-Пух внимательно прочел оба объявления, сначала слева направо, а потом — на тот случай, если он что-нибудь пропустил, — справа налево.</p>
                <p>Потом, для верности, он нажал кнопку звонка и постучал по ней, а потом он подергал шнурок колокольчика и крикнул очень громким голосом:</p>
                <p>— Сова! Открывай! Пришел Медведь.</p>
                <p>Дверь открылась, и Сова выглянула наружу.</p>
                <p>— Здравствуй, Пух, — сказала она. — Какие новости?</p>
                <p>— Грустные и ужасные, — сказал Пух, — потому что Иа-Иа, мой старый друг, потерял свой хвост, и он очень убивается о нем. Будь так добра, скажи мне, пожалуйста, как мне его найти?</p>
                <p>— Ну, — сказала Сова, — обычная процедура в таких случаях нижеследующая…</p>
                <p>— Что значит Бычья Цедура? — сказал Пух. — Ты не забывай, что у меня в голове опилки и длинные слова меня только огорчают.<br></p>
                <figure class="wp-block-image">
                    <picture class="wp-image-36026">
                        <source class="lazy-load is-loaded" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh12.jpg.webp" type="image/webp" srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh12.jpg.webp" data-loaded="true"><img loading="lazy" width="242" height="385" src="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh12.jpg" alt="Винни-Пух и все-все-все - Алан Милн" class="wp-image-36026 lazy-load is-loaded" sizes="(max-width: 242px) 100vw, 242px" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh12.jpg 242w, https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh12-126x200.jpg 126w" data-src="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh12.jpg" style="height: 385px;" srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh12.jpg 242w, https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh12-126x200.jpg 126w" data-loaded="true">
                    </picture>
                </figure>
                <p>— Ну, это означает то, что надо сделать.</p>
                <p>— Пока она означает это, я не возражаю, — смиренно сказал Пух.</p>
                <p>— А сделать нужно следующее: во-первых, сообщи в прессу. Потом…</p>
                <p>— Будь здорова, — сказал Пух, подняв лапу. — Так что мы должны сделать с этой… как ты сказала? Ты чихнула, когда собиралась сказать.</p>
                <p>— Я не чихала.</p>
                <p>— Нет, Сова, ты чихнула.</p>
                <p>— Прости, пожалуйста, Пух, но я не чихала. Нельзя же чихнуть и не знать, что ты чихнул.</p>
                <p>— Ну и нельзя знать, что кто-то чихнул, когда никто не чихал.</p>
                <p>— Я начала говорить: сперва сообщи…</p>
                <p>— Ну вот ты опять! Будь здорова, — грустно сказал Винни-Пух.</p>
                <p>— Сообщи в печать, — очень громко и внятно сказала Сова. — Дай в газету объявление и пообещай награду. Надо написать, что мы дадим что-нибудь хорошенькое тому, кто найдет хвост Иа-Иа.</p>
                <p>— Понятно, понятно, — сказал Пух, кивая головой. — Кстати, насчет «чего-нибудь хорошенького», — продолжал он сонно, — я обычно как раз в это время не прочь бы чем-нибудь хорошенько подкре… — И он покосился на буфет, стоявший в углу комнаты Совы. — Скажем, ложечкой сгущенного молока или еще чем-нибудь, например, одним глоточком меду…</p>
                <p>— Ну вот, — сказала Сова, — мы, значит, напишем наше объявление, и его расклеят по всему Лесу.</p>
                <p>«Ложечка меду, — пробормотал медвежонок про себя, — или… или уж нет, на худой конец».</p>
                <p>И он глубоко вздохнул и стал очень стараться слушать то, что говорила Сова.</p>
                <p>А Сова говорила и говорила какие-то ужасно длинные слова, и слова эти становились все длиннее и длиннее… Наконец она вернулась туда, откуда начала, и стала объяснять, что написать это объявление должен Кристофер Робин.</p>
                <p>— Это ведь он написал объявления на моей двери. Ты их видел, Пух?</p>
                <p>Пух уже довольно давно говорил по очереди то «да», то «нет» на все, что бы ни сказала Сова. И так как в последний раз он говорил «да, да», то на этот раз он сказал: «Нет, нет, никогда!» — хотя не имел никакого понятия, о чем идет речь.</p>
                <p>— Как, ты их не видел? — спросила Сова, явно удивившись. — Пойдем посмотрим на них.</p>
                <p>Они вышли наружу, и Пух посмотрел на звонок и на объявление под ним и взглянул на колокольчик и шнурок, который шел от него, и чем больше он смотрел на шнурок колокольчика, тем больше он чувствовал, что он где-то видел что-то очень похожее… Где-то совсем в другом месте, когда-то раньше…</p>
                <p>— Красивый шнурок, правда? — сказала Сова.</p>
                <p>Пух кивнул.</p>
                <p>— Он мне что-то напоминает, — сказал он, — но я не могу вспомнить что. Где ты его взяла?</p>
                <p>— Я как-то шла по лесу, а он висел на кустике, и я сперва подумала, что там кто-нибудь живет, и позвонила, и ничего не случилось, а потом я позвонила очень громко, и он оторвался, и, так как он, по-моему, был никому не нужен, я взяла его домой и…</p>
                <p>— Сова, — сказал Пух торжественно, — он кому-то очень нужен.</p>
                <p>— Кому?</p>
                <p>— Иа. Моему дорогому другу Иа-Иа. Он… он очень любил его.</p>
                <p>— Любил его?</p>
                <p>— Был привязан к нему, — грустно сказал Винни-Пух.</p>
                <p>С этими словами он снял шнурок с крючка и отнес его хозяину, то есть Иа, а когда Кристофер Робин прибил хвост на место, Иа-Иа принялся носиться по Лесу, с таким восторгом размахивая хвостом, что у Винни-Пуха защекотало во всем теле и ему пришлось поскорее побежать домой и немножко подкрепиться.</p>
                <p>Спустя полчаса, утирая губы, он гордо спел:</p>
                <p><em>Кто нашел хвост?</em></p>
                <p><em>Я, Винни-Пух!</em></p>
                <p><em>Около двух</em></p>
                <p><em>(Только по-правдашнему было около одиннадцати!)</em></p>
                <p><em>Я нашел хвост!</em></p><a rel="nofollow" class="kc-gotop kc__gotop" href="#kcmenu">к оглавлению ↑</a>
                <h2 id="glava-pyataya-v-kotoroj-pyatachok-vstrechaet-slonopotama">ГЛАВА ПЯТАЯ, в которой Пятачок встречает Слонопотама</h2>
                <p>Однажды, когда Кристофер Робин, Винни-Пух и Пятачок сидели и мирно беседовали, Кристофер Робин проглотил то, что у него было во рту, и сказал, как будто между прочим:</p>
                <p>— Знаешь, Пятачок, а я сегодня видел Слонопотама.</p>
                <p>— А чего он делал? — спросил Пятачок.</p>
                <div class="ad-tag ad-can-close ad-in-content" ad-num="3">
                    <div class="ad-tag-inner">
                        <div class="ad-placeholder">
                            <div class="ad-placeholder-text placeholder-cite">
                                <div class="cite-text">Любить чтение — это обменивать часы скуки, неизбежные в жизни, на часы большого наслаждения.</div>
                                <div class="cite-author">Шарль Луи де Монтескьё</div>
                            </div>
                        </div>
                        <div class="MKN_ITA_300M actual-ad"></div>
                    </div><i class="ad-close-btn fa fa-times-thin fa-2x" aria-hidden="true"></i>
                </div>
                <p>Можно было подумать, что он ни капельки не удивился!</p>
                <p>— Ну, просто слонялся, — сказал Кристофер Робин, — По-моему, он меня не видел.</p>
                <p>— Я тоже одного как-то видел, — сказал Пятачок. — По-моему, это был он. А может, и нет.</p>
                <p>— Я тоже, — сказал Пух, недоумевая. «Интересно, кто же это такой Слонопотам?» — подумал он.</p>
                <p>— Их не часто встретишь, — небрежно сказал Кристофер Робин.</p>
                <p>— Особенно сейчас, — сказал Пятачок.</p>
                <p>— Особенно в это время года, — сказал Пух.</p>
                <p>Потом они заговорили о чем-то другом, и вскоре пришла пора Пуху и Пятачку идти домой. Они пошли вместе. Сперва, пока они плелись по тропинке на краю Дремучего Леса, оба молчали; но когда они дошли до речки и стали помогать друг другу перебираться по камушкам, а потом бок о бок пошли по узкой тропке между кустов, у них завязался Очень Умный Разговор. Пятачок говорил: «Понимаешь, Пух, что я хочу сказать?» А Пух говорил: «Я и сам так, Пятачок, думаю». Пятачок говорил: «Но с другой стороны, Пух, мы не должны забывать». А Пух отвечал: «Совершенно верно, Пятачок.
                    Не понимаю, как я мог упустить это из виду».</p>
                <p>И вот, как раз когда они дошли до Шести Сосен, Пух оглянулся кругом и, убедившись, что никто не подслушивает, сказал весьма торжественным тоном:</p>
                <figure class="wp-block-image">
                    <picture class="wp-image-36027">
                        <source class="lazy-load" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh13.jpg.webp" type="image/webp"><img loading="lazy" width="238" height="376" src="https://mishka-knizhka.ru/wp-content/themes/fluida-child/resources/img/bg_white_loading.jpg" alt="Винни-Пух и все-все-все - Алан Милн" class="wp-image-36027 lazy-load" sizes="(max-width: 238px) 100vw, 238px" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh13.jpg 238w, https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh13-127x200.jpg 127w" data-src="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh13.jpg" style="height: 376px;">
                    </picture>
                </figure>
                <p>— Пятачок, я что-то придумал.</p>
                <p>— Что ты придумал, Пух?</p>
                <p>— Я решил поймать Слонопотама.</p>
                <p>Сказав это, Винни-Пух несколько раз подряд кивнул головой. Он ожидал, что Пятачок скажет: «Ну да!», или: «Да ну?», или: «Пух, не может быть!», или сделает какое-нибудь другое полезное замечание в этом духе, но Пятачок ничего не сказал.</p>
                <p>По правде говоря, Пятачок огорчился, что не ему первому пришла в голову эта замечательная мысль.</p>
                <p>— Я думаю поймать его, — сказал Пух, подождав еще немножко, — в западню. И это должна быть очень Хитрая Западня, так что тебе придется помочь мне, Пятачок.</p>
                <p>— Пух, — сказал Пятачок, немедленно утешившись и почувствовав себя вполне счастливым, — я тебе, конечно, помогу. — А потом он сказал: — А как мы это сделаем?</p>
                <p>И Пух сказал:</p>
                <p>— В этом-то вся соль: как?</p>
                <p>Они сели, чтобы обдумать свое предприятие.</p>
                <p>Первое, что пришло Пуху в голову, — вырыть Очень Глубокую Яму, а потом Слонопотам пойдет гулять и упадет в эту яму, и…</p>
                <p>— Почему? — спросил Пятачок.</p>
                <p>— Что — почему? — сказал Пух.</p>
                <p>— Почему он туда упадет?</p>
                <p>Пух потер нос лапой и сказал, что, ну, наверно, Слонопотам будет гулять, мурлыкая себе под нос песенку и поглядывая на небо — не пойдет ли дождик, вот он и не заметит Очень Глубокой Ямы, пока не полетит в нее, а тогда ведь будет уже поздно.</p>
                <p>Пятачок сказал, что это, конечно, очень хорошая Западня, но что, если дождик уже будет идти?</p>
                <p>Пух опять почесал свой нос и сказал, что он об этом не подумал. Но тут же просиял и сказал, что, если дождь уже будет идти, Слонопотам может посмотреть на небо, чтобы узнать, скоро ли дождь перестанет, вот он опять и не заметит Очень Глубокой Ямы, пока не полетит в нее!… А ведь тогда будет уже поздно.</p>
                <p>Пятачок сказал, что теперь все ясно, и, по его мнению, это очень-очень Хитрая Западня.</p>
                <p>Пух был весьма польщен, услышав это, и почувствовал, что Слонопотам уже все равно что пойман.</p>
                <p>— Но, — сказал он, — осталось обдумать только одно, а именно: где надо выкопать Очень Глубокую Яму?</p>
                <p>Пятачок сказал, что лучше всего выкопать яму перед самым носом Слонопотама, как раз перед тем, как он в нее упадет.</p>
                <p>— Но ведь он тогда увидит, как мы ее будем копать, — сказал Пух.</p>
                <p>— Не увидит! Ведь он будет смотреть на небо!</p>
                <p>— А вдруг он случайно посмотрит вниз? — сказал Пух. — Тогда он может обо всем догадаться…</p>
                <p>Он долго размышлял, а потом грустно добавил:</p>
                <p>— Да, это не так просто, как я думал. Наверно, поэтому Слонопотамы так редко попадаются…</p>
                <p>— Наверно, поэтому, — согласился Пятачок.</p>
                <p>Они вздохнули и поднялись, а потом, вытащив друг из друга немножко колючек, опять сели, и все это время Пух говорил себе: «Эх, эх, если бы только я умел думать!…» Винни в глубине души был уверен, что поймать Слонопотама можно, надо только, чтобы у охотника в голове был настоящий ум, а не опилки…</p>
                <p>— Предположим, — сказал он Пятачку, — ты бы хотел поймать меня. Как бы ты за это взялся?</p>
                <p>— Ну, — сказал Пятачок, — я бы вот как сделал: я бы сделал западню, и я бы поставил туда приманку — горшок меду. Ты бы его учуял и полез бы за ним, и…</p>
                <p>— Да, я бы полез за ним туда, — взволнованно сказал Пух, — только очень осторожно, чтобы не ушибиться, и я бы взял этот горшок с медом, и сперва я бы облизал только края, как будто там больше меда нет, понимаешь, а там отошел бы в сторону и подумал о нем немножко, а потом я бы вернулся и начал бы лизать с самой середины горшка, а потом…</p>
                <p>— Ну ладно, успокойся, успокойся. Главное — ты был бы в ловушке, и я бы мог тебя поймать. Так вот, первым делом надо подумать о том, что любят Слонопотамы. По-моему, желуди, верно? У нас сейчас их очень много… Эй, Пух, очнись!</p>
                <p>Пух, который тем временем совсем размечтался о меде, очнулся и даже подскочил и сказал, что мед гораздо приманочней, чем желуди. Пятачок был другого мнения, и они чуть было не поспорили об этом; но Пятачок вовремя сообразил, что если они будут класть в ловушку желуди, то желуди придется собирать ему, Пятачку, а если они положат туда мед, то его достанет Пух. Поэтому он сказал: «Очень хорошо, значит, мед!» — в тот самый момент, когда Пух тоже об этом подумал и собирался сказать: «Очень хорошо, значит, желуди».</p>
                <p>— Значит, мед, — повторил Пятачок для верности. — Я выкопаю яму, а ты сходишь за медом.</p>
                <p>— Отлично, — сказал Пух и побрел домой.</p>
                <p>Придя домой, он подошел к буфету, влез на стул и достал с верхней полки большой-пребольшой горшок меду. На горшке было написано «М и о т», но, чтобы удостовериться окончательно, Винни-Пух снял с него бумажную крышку и заглянул внутрь. Там действительно был мед.</p>
                <p>— Но ручаться нельзя, — сказал Пух. — Я помню, мой дядя как-то говорил, что он однажды видел сыр точь-в-точь такого же цвета.</p>
                <p>Винни сунул в горшок мордочку и как следует лизнул.</p>
                <p>— Да, — сказал он, — это он. Сомневаться не приходится. Полный горшок меду. Конечно, если только никто не положил туда на дно сыру — просто так, шутки ради. Может быть, мне лучше немного углубиться… на случай… На тот случай, если Слонопотамы не любят сыру… как и я… Ах! — И он глубоко вздохнул. — Нет, я не ошибся. Чистый мед сверху донизу!</p>
                <figure class="wp-block-image">
                    <picture class="wp-image-36028">
                        <source class="lazy-load" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh14.jpg.webp" type="image/webp"><img loading="lazy" width="238" height="373" src="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh14.jpg" alt="Винни-Пух и все-все-все - Алан Милн" class="wp-image-36028 lazy-load is-loaded" sizes="(max-width: 238px) 100vw, 238px" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh14.jpg 238w, https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh14-128x200.jpg 128w" data-src="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh14.jpg" style="height: 373px;" srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh14.jpg 238w, https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh14-128x200.jpg 128w" data-loaded="true">
                    </picture>
                </figure>
                <p>Окончательно убедившись в этом, Пух понес горшок к западне, и Пятачок, выглянув из Очень Глубокой Ямы, спросил: «Принес?» А Пух сказал: «Да, но он не совсем полный». Пятачок заглянул в горшок и спросил: «Это все, что у тебя осталось?» А Пух сказал: «Да», потому что это была правда.</p>
                <p>И вот Пятачок поставил горшок на дно Ямы, вылез оттуда, и они пошли домой.</p>
                <p>— Ну, Пух, спокойной ночи, — сказал Пятачок, когда они подошли к дому Пуха. — А завтра утром в шесть часов мы встретимся у Сосен и посмотрим, сколько мы наловили Слонопотамов.</p>
                <p>— До шести, Пятачок. А веревка у тебя найдется?</p>
                <p>— Нет. А зачем тебе понадобилась веревка?</p>
                <p>— Чтобы отвести их домой.</p>
                <p>— Ох… А я думал, Слонопотамы идут на свист.</p>
                <p>— Некоторые идут, а некоторые нет. За Слонопотамов ручаться нельзя. Ну, спокойной ночи!</p>
                <p>— Спокойной ночи!</p>
                <p>И Пятачок побежал рысцой к своему дому, возле которого была доска с надписью «Посторонним В.», а Винни-Пух лег спать.</p>
                <p>Спустя несколько часов, когда ночь уже потихоньку убиралась восвояси, Пух внезапно проснулся от какого-то щемящего чувства. У него уже бывало раньше это щемящее чувство, и он знал, что оно означает: ему хотелось есть.</p>
                <p>Он поплелся к буфету, влез на стул, пошарил на верхней полке и нашел там пустоту.</p>
                <p>» Это странно, — подумал он, — я же знаю, что у меня там был горшок меду. Полный горшок, полный медом до самых краев, и на нем было написано «М и о т», чтобы я не ошибся. Очень, очень странно».</p>
                <p>И он начал расхаживать по комнате взад и вперед, раздумывая, куда же мог деваться горшок, и ворча про себя песенку-ворчалку. Вот какую:</p>
                <p><em>Куда мой мед деваться мог?</em></p>
                <p><em>Ведь был полнехонький горшок!</em></p>
                <p><em>Он убежать никак не мог —</em></p>
                <p><em>Ведь у него же нету ног!</em></p>
                <p><em>Не мог уплыть он по реке</em></p>
                <p><em>(Он без хвоста и плавников),</em></p>
                <p><em>Не мог зарыться он в песке…</em></p>
                <p><em>Не мог, а все же — был таков!</em></p>
                <p><em>Не мог уйти он в темный лес,</em></p>
                <p><em>Не мог взлететь под небеса…</em></p>
                <p><em>Не мог, а все-таки исчез!</em></p>
                <p><em>Ну, это прямо чудеса!</em></p>
                <p>Он проворчал эту песню три раза и внезапно все вспомнил. Он же поставил горшок в Хитрую Западню для Слонопотамов!</p>
                <p>— Ай-ай-ай! — сказал Пух. — Вот что получается, когда чересчур заботишься о Слонопотамах!</p>
                <p>И он снова лег в постель.</p>
                <p>Но ему не спалось. Чем больше старался он уснуть, тем меньше у него получалось. Он попробовал считать овец — иногда это очень неплохой способ, — но это не помогало. Он попробовал считать Слонопотамов, но это оказалось еще хуже, потому что каждый Слонопотам, которого он считал, сразу кидался на Пухов горшок с медом и все съедал дочиста! Несколько минут Пух лежал и молча страдал, но когда пятьсот восемьдесят седьмой Слонопотам облизал свои клыки и прорычал: «Очень неплохой мед, пожалуй, лучшего я никогда не пробовал», Пух не выдержал.
                    Он скатился с кровати, выбежал из дому и помчался прямиком к Шести Соснам.</p>
                <p>Солнце еще нежилось в постели, но небо над Дремучим Лесом слегка светилось, как бы говоря, что солнышко уже просыпается и скоро вылезет из-под одеяла. В рассветных сумерках Сосны казались грустными и одинокими; Очень Глубокая Яма казалась еще глубже, чем была, а горшок с медом, стоявший на дне, был совсем призрачным, словно тень. Но когда Пух подошел поближе, нос сказал ему, что тут, конечно, мед, и язычок Пуха вылез наружу и стал облизывать губы.</p>
                <p>— Жалко-жалко, — сказал Пух, сунув нос в горшок, — Слонопотам почти все съел!</p>
                <p>Потом, подумав немножко, он добавил:</p>
                <figure class="wp-block-image">
                    <picture class="wp-image-36029">
                        <source class="lazy-load is-loaded" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh15.jpg.webp" type="image/webp" srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh15.jpg.webp" data-loaded="true"><img loading="lazy" width="228" height="378" src="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh15.jpg" alt="Винни-Пух и все-все-все - Алан Милн" class="wp-image-36029 lazy-load is-loaded" sizes="(max-width: 228px) 100vw, 228px" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh15.jpg 228w, https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh15-121x200.jpg 121w" data-src="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh15.jpg" style="height: 378px;" srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh15.jpg 228w, https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh15-121x200.jpg 121w" data-loaded="true">
                    </picture>
                </figure>
                <p>— Ах нет, это я сам. Я позабыл.</p>
                <p>К счастью, оказалось, что он съел не все. На самом донышке горшка оставалось еще немножко меда, и Пух сунул голову в горшок и начал лизать и лизать…</p>
                <p>Тем временем Пятачок тоже проснулся. Проснувшись, он сразу же сказал: «Ох». Потом, собравшись с духом, заявил: «Ну что же!… Придется», — закончил он отважно. Но все поджилки у него тряслись, потому что в ушах у него гремело страшное слово — СЛОНОПОТАМ!</p>
                <p>Какой он, этот Слонопотам?</p>
                <p>Неужели очень злой?</p>
                <p>Идет ли он на свист?</p>
                <p>И если идет, то з а ч е м?…</p>
                <p>Любит ли он поросят или нет?</p>
                <p>И как он их любит?…</p>
                <p>Если он ест поросят, то, может быть, он все-таки не тронет поросенка, у которого есть дедушка по имени Посторонним В.?</p>
                <p>Бедный Пятачок не знал, как ответить на все эти вопросы. А ведь ему через какой-нибудь час предстояло впервые в жизни встретиться с настоящим Слонопотамом!</p>
                <p>Может быть, лучше притвориться, что заболела голова, и не ходить к Шести Соснам? Но вдруг будет очень хорошая погода и никакого Слонопотама в западне не окажется, а он, Пятачок, зря проваляется все утро в постели?</p>
                <p>Что же делать?</p>
                <p>И тут ему пришла в голову хитрая мысль. Он пойдет сейчас потихоньку к Шести Соснам, очень осторожно заглянет в западню и посмотрит, есть там Слонопотам или нет. Если он там, то он, Пятачок, вернется и ляжет в постель, а если нет, то он, конечно, не ляжет!…</p>
                <p>И Пятачок пошел. Сперва он думал, что, конечно, никакого Слонопотама там не окажется; потом стал думать, что нет, наверно, окажется; когда же он подходил к западне, он был в этом совершенно уверен, потому что услышал, как тот слонопотамит вовсю!</p>
                <p>— Ой-ой-ой! — сказал Пятачок. Ему очень захотелось убежать. Но он не мог. Раз он уже подошел так близко, нужно хоть одним глазком глянуть на живого Слонопотама. И вот он осторожно подкрался сбоку к яме и заглянул туда…</p>
                <p>А Винни-Пух все никак не мог вытащить голову из горшка с медом. Чем больше он тряс головой, тем крепче сидел горшок.</p>
                <p>Пух кричал: «Мама!», кричал: «Помогите!», кричал и просто: «Ай-ай-ай», но все это не помогало. Он пытался стукнуть горшком обо что-нибудь, но, так как он не видел, обо что он стукает, и это не помогало. Он пытался вылезти из западни, но, так как он не видел ничего, кроме горшка (да и тот не весь), и это не получалось.</p>
                <p>Совсем измучившись, он поднял голову (вместе с горшком) и издал отчаянный, жалобный вопль…</p>
                <p>И именно в этот момент Пятачок заглянул в яму.</p>
                <p>— Караул! Караул! — закричал Пятачок. — Слонопотам, ужасный Слонопотам!!! — И он помчался прочь, так что только пятки засверкали, продолжая вопить: — Караул! Слонасный ужопотам! Караул! Потасный Слоноужам! Слоноул! Слоноул! Карасный Потослонам!…</p>
                <p>Он вопил и сверкал пятками, пока не добежал до дома Кристофера Робина.</p>
                <p>— В чем дело, Пятачок? — сказал Кристофер Робин, натягивая штанишки.</p>
                <p>— Ккк-карапот, — сказал Пятачок, который так запыхался, что едва мог выговорить слово. — Ужо…пото… Слонопотам!</p>
                <p>— Где?</p>
                <p>— Вон там, — сказал Пятачок, махнув лапкой.</p>
                <p>— Какой он?</p>
                <p>— У-у-ужасный! С вот такой головищей! Ну прямо, прямо… как… как не знаю что! Как горшок!</p>
                <p>— Ну, — сказал Кристофер Робин, надевая ботинки, — я должен на него посмотреть. Пошли.</p>
                <p>Конечно, вдвоем с Кристофером Робином Пятачок ничего не боялся. И они пошли.</p>
                <p>— Слышишь, слышишь? Это он! — сказал Пятачок испуганно, когда они подошли поближе.</p>
                <p>— Что-то слышу, — сказал Кристофер Робин.</p>
                <p>Они слышали стук. Это бедный Винни, наконец, наткнулся на какой-то корень и пытался разбить свой горшок.</p>
                <p>— Стой, дальше нельзя! — сказал Пятачок, крепко стиснув руку Кристофера Робина. — Ой, как страшно!…</p>
                <p>И вдруг Кристофер Робин покатился со смеху. Он хохотал и хохотал… хохотал и хохотал… И пока он хохотал, голова Слонопотама здорово ударилась о корень. Трах! — горшок разлетелся вдребезги. Бах! — и появилась голова Винни-Пуха.</p>
                <p>И тут наконец Пятачок понял, каким он был глупым Пятачком. Ему стало так стыдно, что он стремглав помчался домой и лег в постель с головной болью, и в это утро он почти окончательно решил убежать из дому и стать моряком.</p>
                <div class="ad-tag ad-can-close ad-in-content" ad-num="4">
                    <div class="ad-tag-inner">
                        <div class="ad-placeholder">
                            <div class="ad-placeholder-text placeholder-cite">
                                <div class="cite-text">Мир — это книга. И кто не путешествовал по нему — прочитал в ней только одну страницу..</div>
                                <div class="cite-author">Аврелий Августин</div>
                            </div>
                        </div>
                        <div class="MKN_ITA_300M actual-ad"></div>
                    </div><i class="ad-close-btn fa fa-times-thin fa-2x" aria-hidden="true"></i>
                </div>
                <p>А Кристофер Робин и Пух отправились завтракать.</p>
                <p>— Мишка! — сказал Кристофер Робин. — Я тебя ужасно люблю!</p>
                <p>— А я-то! — сказал Винни-Пух.</p><a rel="nofollow" class="kc-gotop kc__gotop" href="#kcmenu">к оглавлению ↑</a>
                <h2 id="glava-shestaya-v-kotoroj-u-ia-ia-byl-den-rozhdeniya-a-pyatachok-chut-c">ГЛАВА ШЕСТАЯ, в которой у Иа-Иа был день рождения, а Пятачок чуть-чуть не улетел на Луну</h2>
                <p>Иа-Иа — старый серый ослик — однажды стоял на берегу ручья и понуро смотрел в воду на свое отражение.</p>
                <p>— Душераздирающее зрелище, — сказал он наконец. — Вот как это называется — душераздирающее зрелище.</p>
                <p>Он повернулся и медленно побрел вдоль берега вниз по течению. Пройдя метров двадцать, он перешел ручей вброд и так же медленно побрел обратно по другому берегу. Напротив того места, где он стоял сначала, Иа остановился и снова посмотрел в воду.</p>
                <p>— Я так и думал, — вздохнул он. — С этой стороны ничуть не лучше. Но всем наплевать. Никому нет дела. Душераздирающее зрелище — вот как это называется!</p>
                <p>Тут сзади него в ольшанике раздался треск, и появился Винни-Пух.</p>
                <p>— Доброе утро, Иа! — сказал Пух.</p>
                <p>— Доброе утро, медвежонок Пух, — уныло ответил Иа. — Если это утро доброе. В чем я лично сомневаюсь.</p>
                <p>— Почему? Что случилось?</p>
                <p>— Ничего, медвежонок Пух, ничего особенного. Все же не могут. А некоторым и не приходится. Тут ничего не попишешь.</p>
                <p>— Чего все не могут? — переспросил Пух, потерев нос.</p>
                <p>— Веселиться. Петь, плясать и так далее. Под ореховым кустом.</p>
                <p>— А-а, понятно… — сказал Пух. Он глубоко задумался, а потом спросил: — Под каким ореховым кустом?</p>
                <p>— Под которым орешки каленые, — уныло продолжал Иа-Иа. — Хоровод, веселье и тому подобное. Я не жалуюсь, но так оно и есть.</p>
                <p>Пух уселся на большой камень и попытался что-нибудь понять. Получилось что-то вроде загадки, а Пух был слабоват по части загадок, поскольку в голове у него были опилки. И он на всякий случай запел загадочную песенку:</p>
                <p><em>ПРО СОРОК ПЯТОК</em></p>
                <p><em>————————</em></p>
                <p><em>Вопрос мой прост и краток, —</em></p>
                <p><em>Промолвил Носорог, —</em></p>
                <p><em>Что лучше — сорок пяток</em></p>
                <p><em>Или пяток сорок? —</em></p>
                <p><em>Увы, никто на это</em></p>
                <p><em>Ответа</em></p>
                <p><em>Дать не мог!</em></p>
                <p>— Вот-вот, правильно, — сказал Иа-Иа. — Пой, пой. Трум-тум-тум-тирим-бум-бум. В лесу родилась палочка, в лесу она росла. И много-много радости детишкам принесла. Веселись и развлекайся.</p>
                <p>— Я веселюсь, — сказал Пух.</p>
                <p>— Кое-кому удается, — сказал Иа-Иа.</p>
                <p>— Да что такое случилось? — спросил Пух.</p>
                <p>— А разве что-нибудь случилось?</p>
                <p>— Нет, но у тебя такой грустный вид.</p>
                <p>— Грустный? Отчего это мне быть грустным? Сегодня же мой день рождения. Самый лучший день в году!</p>
                <p>— Твой день рождения? — спросил Пух, ужасно удивленный.</p>
                <p>— Конечно. Разве ты не замечаешь? Посмотри на все эти подарки. — Иа-Иа помахал передней ногой из стороны в сторону. — Посмотри на именинный пирог!</p>
                <p>Пух посмотрел — сначала направо, потом налево.</p>
                <p>— Подарки? — сказал он. — Именинный пирог? Где?</p>
                <p>— Разве ты их не видишь?</p>
                <p>— Нет, — сказал Пух.</p>
                <p>— Я тоже, — сказал Иа-Иа. — Это шутка, — объяснил он. — Ха-ха.</p>
                <p>Пух почесал в затылке, совсем сбитый с толку.</p>
                <p>— А сегодня правда твой день рождения? — спросил он.</p>
                <p>— Правда.</p>
                <p>— Ох! Ну, поздравляю тебя и желаю много-много счастья в этот день.</p>
                <p>— И я тебя поздравляю и желаю много-много счастья в этот день, медвежонок Пух.</p>
                <p>— Но ведь сегодня не мой день рождения.</p>
                <p>— Нет, не твой, а мой.</p>
                <p>— А ты говоришь «желаю тебе счастья в этот день».</p>
                <p>—
                    Ну и что же? Разве ты хочешь быть несчастным в мой день рождения?</p>
                <p>— А, понятно, — сказал Пух.</p>
                <p>— Хватит и того, — сказал Иа-Иа, чуть не плача, — хватит и того, что я сам такой несчастный — без подарков и без именинного пирога, и вообще позабытый и позаброшенный, а уж если все остальные будут несчастны…</p>
                <p>Этого Винни-Пух уже не вынес.</p>
                <p>— Постой тут! — крикнул он и со всех ног помчался домой. Он почувствовал, что должен немедленно преподнести бедному ослику хоть что-нибудь, а потом у него всегда будет время подумать о Настоящем Подарке.</p>
                <p>Возле своего дома он наткнулся на Пятачка, который прыгал у двери, стараясь достать кнопку звонка.</p>
                <p>— Здравствуй, Пятачок, — сказал Винни-Пух.</p>
                <p>— Здравствуй, Винни, — сказал Пятачок.</p>
                <p>— Что это ты делаешь?</p>
                <p>— Я стараюсь позвонить, — объяснил Пятачок. — Я тут шел мимо и…</p>
                <p>— Давай я тебе помогу, — сказал Пух услужливо. Он подошел к двери и нажал кнопку. — А я только что видел Иа, — начал он. — Бедный ослик ужасно расстроен, потому что у него сегодня день рождения, а все о нем забыли, и он очень понурился — ты ведь знаешь, как он умеет, — ну и вот он такой понурый, а я… Да что же это нам никто не открывает — заснули они все там, что ли? — И Пух снова позвонил.</p>
                <p>— Пух, — сказал Пятачок. — Это же твой собственный дом!</p>
                <p>— А-а, — сказал Пух. — Ну да, верно! Тогда давай войдем!</p>
                <p>И они вошли в дом.</p>
                <p>Пух первым делом подошел к буфету, чтобы удостовериться, есть ли у него подходящий, не особенно большой горшочек с медом. Горшочек оказался на месте, и Пух снял его с полки.</p>
                <p>— Я его отнесу Иа, — объяснил он. — В подарок. А ты что ему думаешь подарить?</p>
                <p>— А можно, я тоже его подарю? — спросил Пятачок. — Как будто от нас обоих.</p>
                <p>— Нет, — сказал Пух. — Это ты плохо придумал.</p>
                <p>— Ну, тогда ладно. Я подарю Иа воздушный шарик. У меня остался один от праздника. Я сейчас за ним схожу, хорошо?</p>
                <p>— Вот это ты очень хорошо придумал, Пятачок! Ведь Иа нужно развеселить. А с воздушным шариком кто хочешь развеселится! Никто не может грустить, когда у него есть воздушный шарик!</p>
                <p>Ну, и Пятачок пустился рысцой домой, а Пух с горшочком меду направился к ручью.</p>
                <p>День был жаркий, а путь неблизкий, и, не пройдя и полпути, Пух вдруг почувствовал какое-то странное щекотание. Сначала у него защекотало в носу, потом в горле, а потом засосало под ложечкой и так постепенно дошло до самых пяток. Казалось, словно кто-то внутри у него говорил: «Знаешь, Пух, сейчас самое время чем-нибудь немножко…»</p>
                <figure class="wp-block-image">
                    <picture class="wp-image-36030">
                        <source class="lazy-load" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh16.jpg.webp" type="image/webp"><img loading="lazy" width="239" height="377" src="https://mishka-knizhka.ru/wp-content/themes/fluida-child/resources/img/bg_white_loading.jpg" alt="Винни-Пух и все-все-все - Алан Милн" class="wp-image-36030 lazy-load" sizes="(max-width: 239px) 100vw, 239px" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh16.jpg 239w, https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh16-127x200.jpg 127w" data-src="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh16.jpg" style="height: 377px;">
                    </picture>
                </figure>
                <p>— Ай-ай, — сказал Пух, — я и не знал, что уже так поздно!</p>
                <p>Он сел на землю и снял крышку со своего горшка.</p>
                <p>— Как хорошо, что я взял его с собой, — сказал он. — Немало медведей в такой жаркий день и не подумали бы захватить с собой то, чем можно немножко подкрепиться!…</p>
                <p>— А теперь подумаем, — сказал он, в последний раз облизав донышко горшка, — подумаем, куда же это я собирался идти. Ах да, к Иа.</p>
                <p>Винни-Пух не спеша встал. И тут он вдруг все вспомнил. Он же съел Подарок!</p>
                <p>— Ай-ай-ай! — сказал Пух. — Что мне делать? Я же должен подарить ему что-нибудь! Ай-ай-ай-ай-ай!</p>
                <p>Сперва он прямо не знал, что и думать. А потом он подумал:</p>
                <p>«Все-таки это очень хорошенький горшочек, хотя в нем и нет меду. Если я его как следует вымою и попрошу кого-нибудь написать на нем: «Поздравляю с днем рождения», Иа сможет держать в нем все, что хочешь. Это будет полезная вещь!»</p>
                <p>И так как он в это время был недалеко от Дома Совы — а все в Лесу были уверены, что Сова прекрасно умеет писать, — он решил зайти к ней в гости.</p>
                <p>— Доброе утро, Сова! — сказал Пух.</p>
                <p>— Доброе утро, Пух! — ответила Сова.</p>
                <p>— Поздравляю тебя с днем рождения Иа-Иа, — сказал Пух.</p>
                <p>— Вот как? — удивилась Сова.</p>
                <p>— Да. А что ты ему думаешь подарить?</p>
                <p>— А ты что думаешь ему подарить?</p>
                <p>— Я несу ему в подарок Полезный Горшок, в котором можно держать все, что хочешь, — сказал Пух. — И я хотел попросить тебя…</p>
                <p>— Вот этот? — спросила Сова, взяв горшок из лапок Пуха.</p>
                <p>— Да, и я хотел попросить тебя…</p>
                <p>— Тут когда-то держали мед, — сказала Сова.</p>
                <p>— В нем можно что хочешь держать, — серьезно сказал Пух. — Это очень, очень полезная вещь. И я хотел попросить тебя…</p>
                <p>— Ты бы написал на нем: «Поздравляю с днем рождения».</p>
                <figure class="wp-block-image">
                    <picture class="wp-image-36031">
                        <source class="lazy-load" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh17.jpg.webp" type="image/webp"><img loading="lazy" width="239" height="380" src="https://mishka-knizhka.ru/wp-content/themes/fluida-child/resources/img/bg_white_loading.jpg" alt="Винни-Пух и все-все-все - Алан Милн" class="wp-image-36031 lazy-load" sizes="(max-width: 239px) 100vw, 239px" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh17.jpg 239w, https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh17-126x200.jpg 126w" data-src="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh17.jpg" style="height: 380px;">
                    </picture>
                </figure>
                <p>— Так вот об этом я и пришел тебя попросить! — объяснил наконец Пух. — Потому что у меня правильнописание какое-то хромое. Вообще-то оно хорошее правильнописание, но только почему-то хромает и буквы опаздывают… на свои места. Ты напишешь на нем: «Поздравляю с днем рождения»? Очень тебя прошу!</p>
                <p>— Славный горшочек, — сказала Сова, оглядев горшок со всех сторон. — А можно, я его тоже подарю? Пусть это будет наш общий подарок.</p>
                <p>— Нет, — сказал Пух. — Это ты плоховато придумала. Давай я лучше его сперва помою, а потом ты на нем все напишешь.</p>
                <p>И вот он вымыл горшок и вытер его досуха, а Сова тем временем мусолила кончик своего карандаша и думала, как же пишется слово «Поздравляю».</p>
                <p>— Пух, а ты умеешь читать? — спросила она не без тревоги в голосе. — Вот, например, у меня на двери висит объявление, как звонить, — это мне Кристофер Робин написал. Ты можешь его прочесть?</p>
                <p>— Кристофер Робин сказал мне, что там написано, и тогда я уж смог, — ответил Пух.</p>
                <p>— Очень хорошо! Вот и я тоже скажу тебе, что тут на горшке будет написано, и тогда ты сможешь прочитать!</p>
                <p>И Сова начала писать… Вот что она написала:</p>
                <p>«Про зря вля вля сдине мраш деня про зря вля вля вля!»</p>
                <p>Пух с восхищением посмотрел на эту надпись.</p>
                <p>— Я тут написала: «Поздравляю с днем рождения», — небрежно заметила Сова.</p>
                <p>— Вот это надпись так надпись! — с уважением сказал Винни-Пух.</p>
                <p>— Ну, если уж все тебе сказать, тут написано полностью так: «Поздравляю с днем рождения, желаю всего-всего хорошего. Твой Пух». Я не посчиталась с расходом графита.</p>
                <p>— Чего? — спросил Пух.</p>
                <p>— Тут одного карандаша сколько пошло! — пояснила Сова.</p>
                <p>— Еще бы! — сказал Пух.</p>
                <p>Тем временем Пятачок успел сбегать к себе домой и, захватив воздушный шарик для Иа-Иа, понесся во весь дух, крепко прижимая воздушный шар к груди, чтобы его не унесло ветром. Пятачок ужасно спешил, чтобы поспеть к Иа-Иа раньше Пуха; ему хотелось первым преподнести Ослику подарок, как будто он, Пятачок, сам вспомнил про его день рождения, без всякой подсказки. Он так спешил и так задумался о том, как Иа-Иа обрадуется подарку, что совсем не глядел себе под ноги… И вдруг его нога попала в мышиную норку, и бедный Пятачок полетел носом вниз: БУМ!!!</p>
                <p>Пятачок лежал на земле, не понимая, что же произошло. Сперва он подумал, что весь мир взлетел на воздух, потом он подумал, что, может быть, только их любимый Лес; еще потом — что, может быть, только он, Пятачок, взлетел и сейчас он один-одинешенек лежит где-нибудь на Луне и никогда-никогда не увидит больше ни Пуха, ни Кристофера Робина, ни Иа… И тут ему пришло в голову, что даже и на Луне не обязательно все время лежать носом вниз. Он осторожно встал, осмотрелся кругом.</p>
                <p>Он все еще был в Лесу!</p>
                <p>«Очень интересно! — подумал он. — Интересно, что же это был за Бум? Не мог же я сам наделать столько шуму, когда упал! И где, интересно, мой шар? И откуда, интересно, взялась тут эта тряпочка?»</p>
                <p>О ужас! Эта тряпочка — это и был, именно был! — его воздушный шар!!</p>
                <p>— Ой, мама! — сказал Пятачок. — Ой, мама, ой, мамочка, ой, мама, мама, мама! Ну что ж… Теперь делать нечего. Возвращаться назад нельзя. Другого шара у меня нет… Может быть, Иа-Иа не так уж любит воздушные шары?…</p>
                <p>И он побежал дальше. По правде сказать, бежал он уже не очень весело, но все же скоро он добежал до того самого места, где стоял Иа-Иа и по-прежнему смотрел на свое отражение в воде.</p>
                <p>— Доброе утро, Иа! — крикнул Пятачок еще издали.</p>
                <p>— Доброе утро, маленький Пятачок, — сказал Иа-Иа. — Если это утро — доброе, — добавил он, — в чем я лично сомневаюсь. Но это неважно.</p>
                <p>— Поздравляю тебя с днем рождения, — сказал Пятачок, подойдя тем временем поближе.</p>
                <p>Иа оторвался от своего занятия и уставился на Пятачка.</p>
                <p>— Повтори-ка, повтори, — сказал он.</p>
                <p>— Поздрав…</p>
                <p>— Минуточку…</p>
                <p>С трудом держась на трех ногах, Иа стал осторожно поднимать четвертую ногу к уху.</p>
                <p>— Я вчера этому научился, — пояснил он, упав в третий раз. — Это очень просто, а главное, я так лучше слышу. Ну вот, все в порядке. Так как ты сказал, повтори, — произнес он, с помощью копыта наставив ухо вперед.</p>
                <p>—
                    Поздравляю с днем рождения, — повторил Пятачок.</p>
                <p>— Это ты меня?</p>
                <p>— Конечно, Иа-Иа.</p>
                <p>— С моим днем рождения?</p>
                <p>— Да.</p>
                <p>— Значит, у меня настоящий день рождения?</p>
                <p>— Конечно, Иа, и я принес тебе подарок.</p>
                <p>Иа-Иа медленно опустил правую ногу и с немалым трудом поднял левую.</p>
                <p>— Я хочу послушать еще другим ухом, — пояснил он. — Теперь говори.</p>
                <p>— По-да-рок! — повторил Пятачок очень громко.</p>
                <p>— Мне?</p>
                <p>— Да.</p>
                <p>— К дню рождения?</p>
                <p>— Конечно!</p>
                <p>— Значит, у меня получается настоящий день рождения?</p>
                <p>— Конечно! И я принес тебе воздушный шар.</p>
                <p>— Воздушный шар? — сказал Иа-Иа. — Ты сказал — воздушный шар? Это такие большие, красивые, яркие, их еще надувают? Песни-пляски, гоп-гоп-гоп и тру-ля-ля?</p>
                <p>— Ну да, но только… понимаешь… я очень огорчен… понимаешь… когда я бежал, чтобы поскорее принести тебе его, я упал.</p>
                <p>— Ай-ай, как жаль! Ты, наверно, слишком быстро бежал. Я надеюсь, ты не ушибся, маленький Пятачок?</p>
                <p>— Нет, спасибо, но он… он… Ох, Иа, он лопнул.</p>
                <p>Наступило очень долгое молчание.</p>
                <p>— Мой шарик? — наконец спросил Иа-Иа.</p>
                <p>Пятачок кивнул.</p>
                <p>— Мой деньрожденный подарок?</p>
                <p>— Да, Иа, — сказал Пятачок, слегка хлюпая носом. — Вот он. Поздравляю тебя с днем рождения.</p>
                <div class="ad-tag ad-can-close ad-in-content" ad-num="5">
                    <div class="ad-tag-inner">
                        <div class="ad-placeholder">
                            <div class="ad-placeholder-text placeholder-cite">
                                <div class="cite-text">Дети всего внимательнее слушают тогда, когда говорят не с ними.</div>
                                <div class="cite-author">Перл Бак</div>
                            </div>
                        </div>
                        <div class="MKN_ITA_300M actual-ad"></div>
                    </div><i class="ad-close-btn fa fa-times-thin fa-2x" aria-hidden="true"></i>
                </div>
                <p>И он подал Иа-Иа резиновую тряпочку.</p>
                <p>— Это он? — спросил Иа, очень удивленный.</p>
                <p>Пятачок кивнул.</p>
                <p>— Мой подарок?</p>
                <p>Пятачок снова кивнул.</p>
                <p>— Шарик?</p>
                <p>— Да.</p>
                <p>— Спасибо, Пятачок, — сказал Иа — Извини, пожалуйста, — продолжал он, — но я хотел бы спросить, какого цвета он был, когда… когда он был шариком?</p>
                <p>— Красного.</p>
                <p>«Подумать только! Красного… Мой любимый цвет», — пробормотал Иа-Иа про себя.</p>
                <p>— А какого размера?</p>
                <p>— Почти с меня.</p>
                <p>— Да? Подумать только, почти с тебя!… Мой любимый размер! — грустно сказал Иа-Иа себе под нос. — Так, так.</p>
                <p>Пятачок чувствовал себя очень неважно и прямо не знал, что говорить. Он то и дело открывал рот, собираясь что-нибудь сказать, но тут же решал, что именно этого говорить-то и не стоит. И вдруг, на его счастье, с того берега ручья их кто-то окликнул. То был Пух.</p>
                <p>— Желаю много-много счастья! — кричал Пух, очевидно забыв, что он уже это говорил.</p>
                <p>— Спасибо, Пух, мне уже посчастливилось, — уныло ответил Иа-Иа.</p>
                <p>— Я принес тебе подарочек, — продолжал Пух радостно.</p>
                <p>— Есть у меня подарочек, — отвечал Иа-Иа.</p>
                <p>Тем временем Пух перебрался через ручей и подошел к Иа-Иа. Пятачок сидел немного поодаль, хлюпая носом.</p>
                <figure class="wp-block-image">
                    <picture class="wp-image-36032">
                        <source class="lazy-load" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh18.jpg.webp" type="image/webp"><img loading="lazy" width="393" height="294" src="https://mishka-knizhka.ru/wp-content/themes/fluida-child/resources/img/bg_white_loading.jpg" alt="Винни-Пух и все-все-все - Алан Милн" class="wp-image-36032 lazy-load" sizes="(max-width: 393px) 100vw, 393px" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh18.jpg 393w, https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh18-267x200.jpg 267w" data-src="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh18.jpg" style="height: 294px;">
                    </picture>
                </figure>
                <p>— Вот он, — объявил Пух. — Это — Очень Полезный Горшок. А на нем знаешь чего написано? «Поздравляю с днем рождения, желаю всего-всего хорошего. Твой Пух». Вот сколько всего написано! И в него можно класть что хочешь. Держи.Иа-Иа, увидев горшок, очень оживился.</p>
                <p>— Вот это да! — закричал он. — Знаете что? Мой шарик как раз войдет в этот горшок!</p>
                <p>— Что ты, что ты, Иа, — сказал Пух. — Воздушные шары не входят в горшки. Они слишком большие. Ты с ними не умеешь обращаться. Нужно вот как: возьми шарик за вере…</p>
                <p>— Это другие шары не входят, а мой входит, — с гордостью сказал Иа-Иа. — Гляди, Пятачок!</p>
                <p>Пятачок грустно оглянулся, а Иа-Иа схватил свой бывший шарик зубами и осторожно положил его в горшок, потом он достал его и положил на землю, а потом снова поднял и осторожно положил обратно.</p>
                <p>— Выходит! — закричал Пух. — Я хочу сказать, он входит!</p>
                <p>— Входит! — закричал Пятачок. — И выходит!</p>
                <p>— Здорово выходит! — закричал Иа-Иа. — Входит и выходит — прямо замечательно!</p>
                <p>— Мне очень приятно, — радостно сказал Пух, — что я догадался подарить тебе Полезный Горшок, куда можно класть какие хочешь вещи!</p>
                <p>— А мне очень приятно, — радостно сказал Пятачок, — что я догадался подарить тебе такую Вещь, которую можно класть в этот Полезный Горшок!</p>
                <p>Но Иа-Иа ничего не слышал. Ему было не до того: он то клал свой шар в горшок, то вынимал его обратно, и видно было, что он совершенно счастлив!</p><a rel="nofollow" class="kc-gotop kc__gotop" href="#kcmenu">к оглавлению ↑</a>
                <h2 id="glava-sedmaya-v-kotoroj-kenga-i-kroshka-ru-poyavlyayutsya-v-lesu-a-pya">ГЛАВА СЕДЬМАЯ, в которой Кенга и крошка Ру появляются в лесу, а Пятачок принимает ванну</h2>
                <p>Никто не знал, откуда они взялись, но вдруг они очутились тут, в Лесу: мама Кенга и крошка Ру.</p>
                <p>Пух спросил у Кристофера Робина: «Как они сюда попали?» А Кристофер Робин ответил: «Обычным путем. Понятно, что это значит?» Пух, которому было непонятно, сказал: «Угу». Потом он два раза кивнул головой и сказал: «Обычным путем. Угу. Угу». И отправился к своему другу пятачку узнать, что он об этом думает. У Пятачка был в гостях Кролик. И они принялись обсуждать вопрос втроем.</p>
                <p>— Мне вот что не нравится, — сказал Кролик, — вот мы тут живем — ты, Пух, и ты, Поросенок, и я, — и вдруг…</p>
                <p>— И еще Иа, — сказал Пух.</p>
                <p>— И еще Иа, — и вдруг…</p>
                <p>— И еще Сова, — сказал Пух.</p>
                <p>— И еще Сова, — и вдруг ни с того ни с сего…</p>
                <p>— Да, да, и еще Иа, — сказал Пух, — я про него чуть было не позабыл!</p>
                <p>— В о т м ы т у т ж и в е м, — сказал Кролик очень медленно и громко, — все мы, и вдруг ни с того ни с сего мы однажды утром просыпаемся и что мы видим? Мы видим какое-то незнакомое животное! Животное, о котором мы никогда и не слыхали раньше! Животное, которое носит своих детей в кармане’ Предположим, что я стал бы носить своих детей с собой в кармане, сколько бы мне понадобилось для этого карманов?</p>
                <p>— Шестнадцать, — сказал Пятачок.</p>
                <p>— Семнадцать, кажется… Да, да, — сказал Кролик, — и еще один для носового платка, — итого восемнадцать. Восемнадцать карманов в одном костюме! Я бы просто запутался!</p>
                <p>Тут все замолчали и стали думать про карманы.</p>
                <p>После длинной паузы Пух, который несколько минут ужасно морщил лоб, сказал:</p>
                <p>— По-моему, их пятнадцать.</p>
                <p>— Чего, чего? — спросил Кролик.</p>
                <p>— Пятнадцать.</p>
                <p>— Пятнадцать чего?</p>
                <p>— Твоих детей.</p>
                <p>— А что с ними случилось?</p>
                <p>Пух потер нос и сказал, что ему казалось, Кролик говорил о своих детях.</p>
                <p>— Разве? — небрежно сказал Кролик.</p>
                <p>— Да, ты сказал…</p>
                <p>— Ладно, Пух, забудем это, — нетерпеливо перебил его Пятачок. — Вопрос вот в чем: что мы должны сделать с Кенгой?</p>
                <p>— А-а, понятно, — сказал Пух.</p>
                <p>— Самое лучшее, — сказал Кролик, — будет вот что. Самое лучшее — украсть Крошку Ру и спрятать его, а потом, когда Кенга скажет: «Где же Крошка Ру?» — мы скажем: «АГА!»</p>
                <p>— АГА! — сказал Пух, решив поупражняться. — АГА! АГА!</p>
                <p>— По-моему, — заметил он немного погодя, — мы можем сказать «АГА», даже если мы не украдем Крошку Ру.</p>
                <p>— Пух, — сказал Кролик покровительственным тоном, — действительно у тебя в голове одни опилки!</p>
                <p>— Я знаю, — скромно сказал Пух.</p>
                <p>— Мы скажем «АГА» так, чтобы Кенга поняла, что мы знаем, где Крошка Ру. Такое «АГА» означает: «Мы тебе скажем, где спрятан Крошка Ру, если ты обещаешь уйти из нашего Леса и никогда не возвращаться». А теперь помолчите — я буду думать!</p>
                <p>Пух ушел в уголок и стал учиться говорить такое «АГА». Иногда ему казалось, что у него получается такое «АГА», о каком говорил Кролик, а иногда казалось, что нет.</p>
                <p>«Наверно, тут все дело в упражнении, — думал он. — Интересно, понадобится ли Кенге тоже столько упражняться, чтобы нас понять?»</p>
                <p>— Я вот что хотел спросить, — сказал Пятачок, немного помявшись, — я говорил с Кристофером Робином, и он мне сказал, что Кенга, вообще говоря, считается Одним из Самых Свирепых Зверей. Я вообще-то не боюсь простых свирепых зверей, но всем известно, что если Один Самый Свирепый Зверь лишится своего детеныша, он становится таким свирепым, как Два Самых Свирепых Зверя. А уж тогда, пожалуй, говорить «АГА» довольно глупо.</p>
                <p>— Пятачок, — сказал Кролик, достав карандаш и облизав его кончик, — ты ужасный трусишка.</p>
                <p>Пятачок слегка хлюпнул носом.</p>
                <p>— Трудно быть храбрым, — сказал он, — когда ты всего лишь Очень Маленькое Существо.</p>
                <p>Кролик, который тем временем начал что-то писать, на секунду поднял глаза и сказал:</p>
                <p>— Именно потому, что ты Очень Маленькое Существо, ты будешь очень полезен в предстоящем нам приключении.</p>
                <p>Пятачок пришел в такой восторг при мысли о том, что он будет полезным, что даже позабыл о своих страхах. А когда Кролик сказал, что Кенги бывают свирепыми только в зимние месяцы, а все остальное время они в добродушном настроении, Пятачок едва мог усидеть на месте — так ему захотелось сразу же стать полезным.</p>
                <p>— А как же я? — грустно сказал Пух. — Значит, я не буду полезным?</p>
                <p>— Не огорчайся, Пух, — поспешил утешить его великодушный Пятачок. — Может быть, как-нибудь в другой раз…</p>
                <p>— Без Винни-Пуха, — торжественно произнес Кролик, начиная чинить карандаш, — все предприятие будет невозможным.</p>
                <p>— О-о! — сказал Пятачок, стараясь не показать своего
                    разочарования.</p>
                <p>Пух опять скромно удалился в угол. Но про себя он гордо сказал: «Без меня все невозможно! Ай да медведь! «</p>
                <p>— Ну, теперь все слушайте! — сказал Кролик, кончив писать:</p>
                <p>Пух и Пятачок сели и приготовились слушать — они даже раскрыли рты.</p>
                <p>Вот что прочел Кролик:</p>
                <p>ПЛАН ПОХИЩЕНИЯ КРОШКИ РУ:</p>
                <p>1. Во-первых. Кенга бегает быстрее всех нас, даже быстрее меня.</p>
                <p>2. Еще во-первых. Кенга никогда-никогда не сводит глаз с Крошки Ру, если он не застегнут у нее в кармашке на все пуговицы.</p>
                <p>3. Значит, если мы хотим похитить Крошку Ру, нам надо выиграть время, потому что Кенга бегает быстрее всех нас, даже быстрее меня (см. пункт 1).</p>
                <p>4. Идея. Если Ру выскочит из кармашка Кенги, а Пятачок туда вскочит, Кенга не заметит разницы, потому что Пятачок — Очень Маленькое Существо.</p>
                <p>5. Как и Крошка Ру.</p>
                <p>6. Но Кенга должна обязательно смотреть в другую сторону, чтобы не заметить, как Пятачок вскочит в карман.</p>
                <p>7. Смотри пункт 2.</p>
                <p>8. Еще одна идея. Вот если Пух будет говорить с ней очень вдохновенно, она может на минутку отвернуться.</p>
                <p>9. И тогда я могу убежать с Крошкой Ру.</p>
                <p>10. Очень быстро.</p>
                <p>11. И Кенга сначала ничего не заметит, а заметит все только потом.</p>
                <p>Ну, Кролик с гордостью прочитал все это вслух, и после этого некоторое время никто ничего не говорил.</p>
                <p>Наконец Пятачок, который все время то открывал, то закрывал рот, не издавая при этом ни звука, сумел выговорить очень хриплым голосом:</p>
                <p>— А потом?</p>
                <p>— Что ты хочешь сказать?</p>
                <p>— Когда Кенга заметит, что это не Ру?</p>
                <p>— Тогда мы все скажем: «АГА».</p>
                <p>— Все трое?</p>
                <p>— Да.</p>
                <p>— Правда?</p>
                <p>— Да что тебя беспокоит, Пятачок?</p>
                <p>— Ничего, — сказал Пятачок. — Если мы все трое скажем «АГА», тогда все в порядке. Если мы все трое скажем «АГА», — сказал Пятачок, — я не возражаю, но я бы не хотел говорить «АГА» сам, один. А то оно, это «АГА», очень плохо получится… Кстати, — продолжал он, — ты вполне уверен в том, что ты говорил насчет зимних месяцев?</p>
                <p>— Насчет зимних месяцев?</p>
                <p>— Ну, насчет свирепости только в зимние месяцы.</p>
                <p>— А-а. Да, да, все правильно. Ну, Пух, ты понял, что ты должен делать?</p>
                <p>— Нет, — сказал Медвежонок Пух. — Не совсем А что я должен делать?</p>
                <p>— Ну, все время говорить и говорить с Кенгой, чтобы она ничего не замечала.</p>
                <p>— Ох! А о чем?</p>
                <p>— О чем хочешь.</p>
                <p>— А может быть, почитать ей стихи или что-нибудь в этом роде?</p>
                <p>— Вот именно, — сказал Кролик. — Блестяще. А теперь пошли.</p>
                <p>И все они отправились искать Кенгу.</p>
                <p>Кенга и Ру мирно проводили послеобеденное время у большой ямы с песком. Крошка Ру упражнялся в прыжках в высоту и в длину и даже в глубину — учился падать в мышиные норы и вылезать из них, а Кенга волновалась и поминутно приговаривала: «Ну, дорогой мой, еще один раз прыгни, и домой». И в этот момент на холме появился не кто иной, как Пух.</p>
                <p>— Добрый день, Кенга, — сказал он.</p>
                <p>— Добрый день, Пух.</p>
                <p>— Смотри, как я прыгаю! — пропищал Крошка Ру и упал в очередную мышиную нору.</p>
                <p>— Привет, Ру, малыш!</p>
                <p>— Мы как раз собираемся домой… — сказала Кенга. — Добрый день, Кролик. Добрый день, Пятачок.</p>
                <p>Кролик и Пятачок, которые тем временем показались с другой стороны холма, тоже сказали «добрый день» и «привет, Ру», а Крошка Ру пригласил их посмотреть, как он прыгает…</p>
                <figure class="wp-block-image">
                    <picture class="wp-image-36033">
                        <source class="lazy-load" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh19.jpg.webp" type="image/webp"><img loading="lazy" width="370" height="279" src="https://mishka-knizhka.ru/wp-content/themes/fluida-child/resources/img/bg_white_loading.jpg" alt="Винни-Пух и все-все-все - Алан Милн" class="wp-image-36033 lazy-load" sizes="(max-width: 370px) 100vw, 370px" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh19.jpg 370w, https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh19-265x200.jpg 265w" data-src="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh19.jpg" style="height: 279px;">
                    </picture>
                </figure>
                <p>Они стояли и смотрели. И Кенга смотрела — смотрела во все глаза…</p>
                <p>— Послушай, Кенга, — сказал Пух после того, как Кролик подмигнул ему второй раз, — интересно, ты любишь стихи?</p>
                <p>— Не особенно, — сказала Кенга.</p>
                <p>— А-а, — сказал Пух.</p>
                <p>— Ру, дорогой мой, еще один раз прыгни, и нам пора домой!</p>
                <p>Наступило недолгое молчание. Крошка Ру свалился в очередную мышиную нору.</p>
                <p>— Ну, давай, давай! — громко прошипел Кролик, прикрывая рот лапкой.</p>
                <p>— Кстати, о стихах, — продолжал Пух. — Я как раз сочинил небольшой стишок по дороге. Примерно такой. М-м-м… Минуточку…</p>
                <p>— Очень интересно, — сказала Кенга. — А теперь, маленький мой Ру…</p>
                <p>— Тебе понравится этот стишок, — сказал Кролик.</p>
                <p>— Ты его полюбишь, — пропищал Пятачок.</p>
                <p>— Только слушай очень-очень внимательно, — сказал Кролик.</p>
                <p>— Ничего не пропусти смотри, — пискнул Пятачок.</p>
                <p>— Да, да, — сказала Кенга. Но, увы, она не сводила глаз с Крошки Ру.</p>
                <p>— Так как там говорится, Пух? — спросил Кролик.</p>
                <p>Пух слегка откашлялся и начал:</p>
                <p>СТРОКИ, СОЧИНЕННЫЕ МЕДВЕДЕМ С ОПИЛКАМИ В ГОЛОВЕ</p>
                <p>——————————</p>
                <p><em>На днях, не знаю сам зачем,</em></p>
                <p><em>Зашел я в незнакомый дом,</em></p>
                <p><em>Мне захотелось Кое с Кем</em></p>
                <p><em>Потолковать о Том о Сем.</em></p>
                <p><em>Я рассказал им, Кто, Когда,</em></p>
                <p><em>И Почему, и Отчего,</em></p>
                <p><em>Сказал Откуда и Куда,</em></p>
                <p><em>И Как, и Где, и Для Чего;</em></p>
                <p><em>Что было Раньше, что Потом,</em></p>
                <p><em>И Кто Кого, и Что к Чему,</em></p>
                <p><em>И что подумали о Том,</em></p>
                <p><em>И Если Нет, То Почему?</em></p>
                <p><em>Когда мне не хватало слов,</em></p>
                <p><em>Я добавлял то «Ах», то «Эх»,</em></p>
                <p><em>И «Так сказать», и «Будь здоров»,</em></p>
                <p><em>И «Ну и ну!», и «Просто смех!».</em></p>
                <p><em>Когда ж закончил я рассказ,</em></p>
                <p><em>То кое-кто спросил: «И все?</em></p>
                <p><em>Ты говорил тут целый час,</em></p>
                <p><em>А рассказал ни то ни се!… —</em></p>
                <p><em>Тогда…</em></p>
                <p>— Очень, очень мило, — сказала Кенга, не ожидая рассказа о том, что произошло тогда. — Ну, самый, самый последний раз прыгни, Ру, дорогой мой, и мы пойдем домой!</p>
                <p>Кролик подтолкнул Пуха локтем в бок.</p>
                <p>— Кстати, о стихах, — поспешно сказал Пух. — Ты когда-нибудь обращала внимание на вон то дерево, во-он там?</p>
                <p>— Где?… — сказала Кенга. — Ну, дорогой малыш…</p>
                <p>— Во-он там, впереди, — сказал Пух, показывая за спину Кенги.</p>
                <p>— Нет!… — сказала Кенга. — Ну, Ру, дорогой мой, прыгай в карман, и пошли домой!</p>
                <p>— Нет, ты обязательно посмотри на вон то дерево, во-он там, — сказал Кролик. — Ру, хочешь, я тебя подниму? — И он взял Крошку Ру в лапы.</p>
                <div class="ad-tag ad-can-close ad-in-content" ad-num="6">
                    <div class="ad-tag-inner">
                        <div class="ad-placeholder">
                            <div class="ad-placeholder-text placeholder-cite">
                                <div class="cite-text">Ну, разве можно серьёзно относиться к книжке без картинок?!</div>
                                <div class="cite-author">Алиса в стране чудес (1951)</div>
                            </div>
                        </div>
                        <div class="MKN_ITA_300M actual-ad"></div>
                    </div><i class="ad-close-btn fa fa-times-thin fa-2x" aria-hidden="true"></i>
                </div>
                <p>— А на вон том дереве птичка сидит, — сказал Пух. — А может, это и рыбка.</p>
                <p>— Конечно, там птичка сидит, — сказал Кролик, — если только это не рыбка.</p>
                <p>— Это не рыбка, это птичка, — пискнул Пятачок.</p>
                <p>— Так оно и есть, — сказал Кролик.</p>
                <p>— Интересно, это скворушка или дрозд? — сказал Пух.</p>
                <p>— В этом весь вопрос, — сказал Кролик. — Дрозд это или скворушка?</p>
                <p>И тут наконец Кенга повернулась и посмотрела на вон то дерево.</p>
                <p>И в тот момент, когда она отвернулась, Кролик громким голосом сказал:</p>
                <p>— Ру, на место!</p>
                <p>И на место — в карман Кенги — вскочил Пятачок, а Кролик крепко обхватил Ру и помчался прочь что было духу.</p>
                <p>— Куда это Кролик девался?… — спросила Кенга, снова повернув голову. — Ну как, дорогой малыш, все в порядке?</p>
                <p>Пятачок со дна кармана Кенги что-то пискнул — точь-в-точь как Ру.</p>
                <p>— Кролику пришлось уйти, — сказал Пух, — он, наверно, вспомнил о каком-то важном деле. Вдруг.</p>
                <p>— А Пятачок?</p>
                <p>— Наверно, Пятачок тоже о чем-нибудь вспомнил. Вдруг.</p>
                <p>— Ну ладно, мы пошли домой, — сказала Кенга. — Всего доброго, Пух!</p>
                <p>Три огромных скачка — и она исчезла из виду.</p>
                <p>Пух посмотрел ей вслед.</p>
                <figure class="wp-block-image">
                    <picture class="wp-image-36034">
                        <source class="lazy-load is-loaded" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh20.jpg.webp" type="image/webp" srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh20.jpg.webp" data-loaded="true"><img loading="lazy" width="520" height="196" src="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh20.jpg" alt="Винни-Пух и все-все-все - Алан Милн" class="wp-image-36034 lazy-load is-loaded" sizes="(max-width: 520px) 100vw, 520px" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh20.jpg 520w, https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh20-328x124.jpg 328w" data-src="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh20.jpg" style="height: 196px;" srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh20.jpg 520w, https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh20-328x124.jpg 328w" data-loaded="true">
                    </picture>
                </figure>
                <p><br>«Хотел бы я так прыгать! — подумал он. — Почему это одни умеют, а другие нет? Очень, очень обидно!»</p>
                <p>Кенга, спору нет, отлично умела прыгать, но Пятачку минутами, по правде говоря, хотелось, чтобы Кенга не умела. Бывало, возвращаясь домой из дальней прогулки по Лесу, Пятачок мечтал стать птичкой и уметь летать, но теперь, когда он болтался на дне кармана Кенги, в голове у него прыгали такие мысли:</p>
                <p>называется это</p>
                <p>это летать, на не</p>
                <p>то никогда соглашусь! «</p>
                <p>«Если я</p>
                <p>— Ууууууу! — говорил он, взмывая в воздух,
                    а спускаясь вниз, он говорил: — Ух!…</p>
                <p>И ему пришлось повторять «Уууууууу — ух!», «Уууууууу — ух!», «Ууууууу — ух!» всю дорогу — до самого дома Кенги.</p>
                <p>Конечно, дома, как только Кенга расстегнула свой карман, она заметила, что произошло. В первую секунду она чуть было не испугалась, но сразу поняла, что пугаться нечего — ведь она была вполне уверена, что Кристофер Робин никому не позволит обидеть Крошку Ру.</p>
                <p>«Хорошо, — сказала она про себя, — раз они решили разыграть меня, я их сама разыграю».</p>
                <p>— Ну, Ру, дорогой мой, — сказала она, вытащив поросенка из кармана, — пора укладываться спать.</p>
                <p>— Ага! — сказал Пятачок, стараясь произнести это слово как можно лучше. Но, увы, после такого ужасного путешествия «ага» получилось не очень хорошее, и Кенга, по-видимому, не поняла, что оно означает.</p>
                <p>— Сперва купаться, — весело сказала Кенга.</p>
                <p>— Ага! — повторил Пятачок, тревожно оглядываясь в поисках остальных.</p>
                <p>Но остальных не было. Кролик сидел дома и играл с Крошкой Ру, чувствуя, что с каждой минутой все больше и больше его любит, а Пух, который решил попробовать стать Кенгой, все еще учился прыгать в той же ямке с песком.</p>
                <p>— Не знаю, — сказала Кенга очень задумчивым голосом, — может быть, тебе лучше сегодня принять холодную ванну? Как ты думаешь, Ру, милый?</p>
                <p>Пятачок, который никогда особенно не любил купаться, задрожал от возмущения и сказал самым мужественным голосом, каким только мог:</p>
                <figure class="wp-block-image">
                    <picture class="wp-image-36035">
                        <source class="lazy-load" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh21.jpg.webp" type="image/webp"><img loading="lazy" width="368" height="269" src="https://mishka-knizhka.ru/wp-content/themes/fluida-child/resources/img/bg_white_loading.jpg" alt="Винни-Пух и все-все-все - Алан Милн" class="wp-image-36035 lazy-load" sizes="(max-width: 368px) 100vw, 368px" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh21.jpg 368w, https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh21-274x200.jpg 274w" data-src="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh21.jpg" style="height: 269px;">
                    </picture>
                </figure>
                <p>— Кенга! Я вижу, что пришло время поговорить начистоту.</p>
                <p>— До чего же ты смешной глупыш, Ру, — сказала Кенга, наливая воду в ванну.</p>
                <p>— Я не Ру, — громко сказал Пятачок. — Я Пятачок!</p>
                <p>— Да, милый, да, — сказала Кенга ласково. — Никто с тобой не спорит!… И голосу Пятачка подражает, какой умница! — пробормотала она, доставая с полки большой кусок желтого мыла. — Ну, что ты у меня еще придумаешь?</p>
                <p>— Ты что, не видишь? — закричал Пятачок. — Глаз у тебя, что ли, нет? Погляди на меня!</p>
                <p>— Я-то гляжу, маленький мой Ру, — сказала Кенга довольно строго. — А вот ты помнишь, что я тебе вчера говорила про гримасы? Если ты будешь строить такие гримасы, как Пятачок, то, когда вырастешь, станешь похож на Пятачка, и ты тогда об этом очень-очень пожалеешь. А теперь — марш в ванну и не заставляй меня повторять это еще раз!</p>
                <p>И, не успев опомниться, Пятачок оказался в ванне, и Кенга принялась изо всех сил тереть его большой лохматой мочалкой.</p>
                <p>— Ой! — пищал Пятачок. — Отпусти меня! Я же Пятачок!</p>
                <p>— Не открывай рот, дорогой, а то в него попадет мыло, — сказала Кенга. — Ну вот! Что я тебе говорила?</p>
                <p>— Ты-ты-ты, ты это нарочно сделала, — булькнул было Пятачок, как только смог снова заговорить…</p>
                <p>Но тут во рту у него оказалась мочалка.</p>
                <p>— Вот так хорошо, милый, помалкивай, — сказала Кенга.</p>
                <p>В следующее мгновение Пятачок был извлечен из ванны и крепко-накрепко вытерт мохнатым полотенцем.</p>
                <p>— Ну, — сказала Кенга, — а теперь прими лекарство — и в постель.</p>
                <p>— К-к-какое ле-ле-карство? — пролепетал Пятачок.</p>
                <p>— Рыбий жир, чтобы ты вырос большим и сильным, милый. Ты же не хочешь быть таким маленьким и слабеньким, как Пятачок, правда? Ну, так вот.</p>
                <p>В этот момент кто-то постучал в дверь.</p>
                <p>— Войдите, — сказала Кенга.</p>
                <p>И вошел Кристофер Робин.</p>
                <p>— Кристофер Робин, Кристофер Робин! — рыдал Пятачок. — Скажи Кенге, кто я. Она все время говорит, что я Ру! А я ведь не Ру правда?</p>
                <p>Кристофер Робин осмотрел его очень тщательно и покачал головой.</p>
                <p>— Конечно, ты не Ру, — сказал он, — потому что я только что видел Ру в гостях у Кролика. Они там играют.</p>
                <p>— Ну и ну! — сказала Кенга. — Подумать только! Как это я могла так обознаться!</p>
                <p>— Ага, ага! Вот видишь! — сказал Пятачок. — Что я тебе говорил? Я Пятачок!</p>
                <p>Кристофер Робин снова покачал головой.</p>
                <p>— Нет, ты не Пятачок, — сказал он. — Я хорошо знаю Пятачка, и он совершенно другого цвета.</p>
                <p>«Это потому, что я только сию минуту принял ванну», — хотел сказать Пятачок, но успел сообразить, что, пожалуй, говорить этого не стоит. Едва он открыл рот, собираясь сказать что-то совсем другое, Кенга живо всунула ему в рот ложку с лекарством и похлопала его по спине и сказала ему, что рыбий жир очень, очень вкусный, когда к нему как следует привыкнешь.</p>
                <p>— Я знала, что это не Пятачок, — сказала Кенга потом. — Интересно, кто это все же может быть?</p>
                <p>— Может быть, какой-нибудь родственник Пуха? — сказал Кристофер Робин. — Скажем, племянник, или дядя, или что-нибудь в этом духе?</p>
                <p>— Вероятно, вероятно, — согласилась Кенга. — Только нам надо придумать ему какое-нибудь имя.</p>
                <p>— Можно звать его Пушель, — сказал Кристофер Робин. — Например, Генри Пушель. Сокращенно.</p>
                <p>Но, едва получив новое имя, Генри Пушель вывернулся из объятий Кенги и прыгнул вниз. К его великому счастью, Кристофер Робин оставил дверь открытой.</p>
                <p>Никогда в жизни Генри Пушель-Пятачок не бегал так быстро, как сейчас! Он несся, не останавливаясь ни на секунду. Лишь в сотне шагов от дома он прекратил бег и покатился по земле, чтобы вновь обрести свой собственный — милый, уютный и привычный — цвет…</p>
                <p>Так Кенга и Крошка Ру остались в Лесу. И каждый вторник Крошка Ру отправлялся на целый день в гости к своему новому другу — Кролику, а Кенга проводила весь день со своим новым другом — Пухом, обучая его прыгать, а Пятачок в эти дни гостил у своего старого друга Кристофера Робина.</p>
                <p>И всем было ужасно весело!</p><a rel="nofollow" class="kc-gotop kc__gotop" href="#kcmenu">к оглавлению ↑</a>
                <h2 id="glava-vosmaya-v-kotoroj-kristofer-robin-organizuet-iskpeditsiyu-k-seve">ГЛАВА ВОСЬМАЯ, в которой Кристофер Робин организует «искпедицию» к Северному Полюсу</h2>
                <p>Винни-Пух брел по Лесу, собираясь повидать своего друга Кристофера Робина и выяснить, не позабыл ли он о том, что на свете существуют медведи. Утром за завтраком (завтрак был очень скромный-немножко мармеладу, намазанного на соты с медом) Пуху внезапно пришла в голову новая песня (Шумелка). Она начиналась так: «Хорошо быть медведем, ура!»</p>
                <p>Придумав эту строчку, он почесал в голове и подумал: «Начало просто замечательное, но где же взять вторую строчку?»</p>
                <p>Он попробовал повторить «ура» два и даже три раза, но это что-то не помогало. «Может быть, лучше, — подумал он, — спеть «Хорошо быть медведем, ого!» И он спел «ого». Но, увы, и так дело шло ничуть не лучше. «Ну, тогда ладно, — сказал он, — тогда я могу спеть эту первую строчку два раза, и, может быть, если я буду петь очень быстро, я, сам того не замечая, доберусь до третьей и четвертой строчек, и тогда получится хорошая Шумелка. А ну-ка:</p>
                <p><em>Хорошо быть медведем, ура!</em></p>
                <p><em>Хорошо быть медведем, ура!</em></p>
                <p><em>Побежу…</em></p>
                <p><em>(Нет, победю!)</em></p>
                <p><em>Победю я и жару и мороз,</em></p>
                <p><em>Лишь бы медом был вымазан нос!</em></p>
                <p><em>Победю…</em></p>
                <p><em>(Нет, побежду!)</em></p>
                <p><em>Побежду я любую беду,</em></p>
                <p><em>Лишь бы были все лапки в меду!…</em></p>
                <p><em>Ура, Винни-Пух!</em></p>
                <p><em>Ура, Винни-Пух!</em></p>
                <p><em>Час-друтой пролетит, словно птица,</em></p>
                <p><em>И настанет пора подкрепиться!</em></p>
                <p>Ему почему-то так понравилась эта песня (Шумелка), что он распевал ее всю дорогу, шагая по Лесу. «Но если я буду петь ее дальше, — вдруг подумал он, — как раз придет время чем-нибудь подкрепиться, и тогда последняя строчка будет неправильная». Поэтому он замурлыкал эту песенку без слов.</p>
                <p>Кристофер Робин сидел у порога, натягивая свои Походные Сапоги. Едва Пух увидел Походные Сапоги, он сразу понял, что предстоит Приключение, и он смахнул лапкой остатки меда с мордочки и подтянулся как только мог, чтобы показать, что он ко всему готов.</p>
                <p>— Доброе утро, Кристофер Робин! — крикнул он.</p>
                <p>— Привет, Винни-Пух. Никак не натяну этот Сапог.</p>
                <p>— Это плохо, — сказал Пух.</p>
                <p>— Ты, пожалуйста, упрись мне в спину, а то я могу потянуть так сильно, что полечу вверх тормашками.</p>
                <p>Пух сел и крепко, изо всех сил, уперся лапками в землю, а спиной изо всех сил уперся в спину Кристофера Робина, а Кристофер Робин изо всех сил уперся в спину Пуха и стал тащить и тянуть свой Сапог, пока он наконец не наделся.</p>
                <p>— Ну, вот так, — сказал Пух. — Что будем делать дальше?</p>
                <p>— Мы отправляемся в экспедицию. Все, — сказал Кристофер Робин, поднимаясь и отряхиваясь. — Спасибо, Пух.</p>
                <p>— Отправляемся в искпедицию? — с интересом спросил Пух. — Никогда ни одной не видел. А где она, эта искпедиция?</p>
                <p>— Экспедиция, глупенький мой мишка. Не «ск», а «кс».</p>
                <p>— А-а! — сказал Пух. — Понятно.</p>
                <p>По правде говоря, он ничего не понял.</p>
                <p>— Мы должны отыскать и открыть Северный Полюс.</p>
                <p>— А-а! — снова сказал Пух. — А что такое Северный Полюс? — спросил он.</p>
                <p>— Ну, это такая штука, которую открывают, — небрежно сказал Кристофер Робин, который и сам не очень точно знал, что это за штука.</p>
                <p>— А-а, понятно, — сказал Пух. — А медведи помогают его открывать?</p>
                <p>— Конечно, помогают. И Кролик, и Кенга, и все. Это же экспедиция. Экспедиция — это вот что значит: все идут друг за другом, гуськом… Ты бы лучше сказал всем остальным, чтобы они собирались, пока я почищу ружье. И еще надо не забыть провизию.</p>
                <p>— Про что не забыть?</p>
                <p>— Не про что, а то, что едят.</p>
                <p>—
                    А-а! — сказал Пух радостно. — А мне показалось, ты говорил про какую-то визию. Тогда я пойду и скажу им всем.</p>
                <p>И он отправился в путь.</p>
                <p>Первым, кого он встретил, был Кролик.</p>
                <p>— Здравствуй, Кролик, — сказал Пух. — Это ты?</p>
                <p>— Давай играть, как будто это не я, — сказал Кролик. — Посмотрим, что у нас тогда получится.</p>
                <p>— У меня к тебе поручение.</p>
                <p>— Ладно, я передам Кролику.</p>
                <p>— Мы все отправляемся в искпедицию с Кристофером Робином.</p>
                <p>— Кролик обязательно примет участие.</p>
                <p>— Ой, Кролик, мне некогда, — сказал Пух. — Мы должны, главное, не забывать про… Словом, про то, что едят. А то вдруг нам есть захочется. Я теперь пойду к Пятачку, а ты скажи Кенге, ладно?</p>
                <p>Он попрощался с Кроликом и побежал к дому Пятачка.</p>
                <p>Пятачок сидел на земле и гадал на ромашке, выясняя — любит, не любит, плюнет или поцелует. Оказалось, что плюнет, и он теперь старался вспомнить, на кого он загадал, надеясь, что это не Пух. И тут появился Винни-Пух.</p>
                <p>— Эй, Пятачок! — взволнованно сказал Пух. — Мы все отправляемся в искпедацию. Все, все! И берем про… Покушать. Мы должны что-то открыть.</p>
                <p>— Что открыть? — испуганно спросил Пятачок.</p>
                <p>— Ну, что-то там такое.</p>
                <p>— Не очень злое?</p>
                <p>— Кристофер Робин ничего не говорил насчет злости. Он сказал только, что в нем есть «кс».</p>
                <p>— «Кысы» я не боюсь, — серьезно сказал Пятачок. — Я боюсь только волков, но если с нами пойдет Кристофер Робин, я тогда вообще ничего не боюсь!</p>
                <p>Спустя немного времени все были в сборе, и экспедиция началась. Первым шел Кристофер Робин и Кролик, за ним Пятачок и Пух, далее Кенга с Крошкой Ру и Сова, еще дальше — Иа, а в самом конце, растянувшись длинной цепочкой, шли все Родные и Знакомые Кролика.</p>
                <p>— Я их не приглашал, — небрежно объяснил Кролик, — они просто взяли и пришли. Они всегда так. Они могут идти в конце, позади Иа.</p>
                <p>— Я хотел бы сказать, — сказал Иа, — что это действует на нервы. Я вообще не собирался идти в эту ископе… или как там Пух выразился. Я пришел только из чувства долга. Тем не менее я здесь, и если я должен идти в конце ископе — вы понимаете, о чем я говорю, — то пусть я и буду в конце. Но если каждый раз, когда мне захочется посидеть и отдохнуть, мне придется сначала расчищать себе место от всей этой мелкоты — Родственников и Знакомых Кролика, то это будет не ископе — или как ее там называют, — а просто суета и суматоха. Вот что я хотел сказать.</p>
                <p>— Я понимаю, что Иа имеет в виду, — сказала Сова. — Если вы спросите меня…</p>
                <p>— Я никого не спрашиваю, — сказал Иа. — Я, наоборот, всем объясняю. Можете искать Северный Полюс, а можете играть в «Сиди, сиди, Яша» на муравейнике. С моей стороны возражений нет.</p>
                <p>Тут в голове колонны послышался крик.</p>
                <p>— Вперед! Вперед! — кричал Кристофер Робин.</p>
                <p>— Вперед! — кричали Пух и Пятачок.</p>
                <p>— Вперед! — кричала Сова.</p>
                <p>— Тронулись! — сказал Кролик. — Я должен бежать. — И он помчался в голову колонны к Кристоферу Робину.</p>
                <p>— Вот именно, — сказал Иа. — Все тронулись. Но я тут ни при чем.</p>
                <p>Так они выступили в поход к Полюсу. По дороге они все болтали о разных разностях. Все, кроме Пуха, который сочинял песню.</p>
                <p>— Вот и первая строфа, — сказал он Пятачку, когда она была наконец готова.</p>
                <p>— Первая строфа чего?</p>
                <p>— Моей песни.</p>
                <p>— Какой песни?</p>
                <p>— Этой самой.</p>
                <p>— Какой?</p>
                <p>— Если ты послушаешь, то все узнаешь.</p>
                <p>— А откуда ты знаешь, что я не слушаю?</p>
                <p>На это Пух не нашел, что ответить, и поэтому начал петь:</p>
                <div class="ad-tag ad-can-close ad-in-content" ad-num="7">
                    <div class="ad-tag-inner">
                        <div class="ad-placeholder">
                            <div class="ad-placeholder-text placeholder-cite">
                                <div class="cite-text">Дети, которых не любят, становятся взрослыми, которые не могут любить.</div>
                                <div class="cite-author">Элеонора Рузвельт</div>
                            </div>
                        </div>
                        <div class="MKN_ITA_300M actual-ad"></div>
                    </div><i class="ad-close-btn fa fa-times-thin fa-2x" aria-hidden="true"></i>
                </div>
                <p><em>Все вышли в ИСКПЕДИЦИЮ</em></p>
                <p><em>(Считая и меня).</em></p>
                <p><em>Сова, и Ру, и Кролик,</em></p>
                <p><em>И вся его родня!</em></p>
                <p><em>Вся наша ИСКПЕДИЦИЯ</em></p>
                <p><em>Весь день бродила по лесу,</em></p>
                <p><em>Искала ИСКПЕДИЦИЯ</em></p>
                <p><em>Везде дорогу к Полюсу.</em></p>
                <p><em>И каждый в ИСКПЕДИЦИИ</em></p>
                <p><em>Ужасно был бы рад</em></p>
                <p><em>Узнать, что значит Полюс</em></p>
                <p><em>И с чем его едят!</em></p>
                <p>— Тсс! — сказал Кристофер Робин, обернувшись к Пуху. — Мы как раз подходим к опасному месту!</p>
                <p>— Тсс! — сказал Пух, быстро обернувшись к поросенку.</p>
                <p>— Тсс! — сказал Пятачок Кенге.</p>
                <p>— Тсс! — сказала Кенга Сове, а Крошка Ру несколько раз подряд сказал «тсс» самому себе.</p>
                <p>— Тсс! — сказала Сова, обернувшись к Иа.</p>
                <figure class="wp-block-image">
                    <picture class="wp-image-36036">
                        <source class="lazy-load" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh22.jpg.webp" type="image/webp"><img loading="lazy" width="374" height="275" src="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh22.jpg" alt="Винни-Пух и все-все-все - Алан Милн" class="wp-image-36036 lazy-load is-loaded" sizes="(max-width: 374px) 100vw, 374px" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh22.jpg 374w, https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh22-272x200.jpg 272w" data-src="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh22.jpg" style="height: 275px;" srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh22.jpg 374w, https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh22-272x200.jpg 272w" data-loaded="true">
                    </picture>
                </figure>
                <p>— Цыц! — сказал Иа страшным голосом всем Родным и Знакомым Кролика, и они принялись поспешно говорить друг другу «тсс», пока не дошло до самого последнего. А последний, самый маленький Родственник и Знакомый, так испугался, решив, что вся экспедиция говорит ему «тсс», что немедленно зарылся в землю и просидел там вниз головой целых два дня, пока не убедился, что опасность окончательно миновала. Потом он поспешно отправился домой.</p>
                <p>Его звали Сашка Букашка.</p>
                <p>Экспедиция подошла к речке, которая весело вертелась и кувыркалась среди высоких каменистых берегов, и Кристофер Робин сразу оценил обстановку.</p>
                <p>— Это как раз подходящее место для засад.</p>
                <p>— Какой сад? — шепнул Пух Пятачку. — Может, там малина есть?</p>
                <p>— Дорогой мой Пух, — сказала Сова покровительственным тоном, — неужели ты не знаешь даже, что такое засада?</p>
                <p>— Сова, — сказал Пятачок, строго посмотрев на нее, — Пух ведь не с тобой шептался, а со мной, и совершенно необязательно было тебе…</p>
                <p>— Засада, — сказала Сова, — это вроде сюрприза.</p>
                <p>— Малина иногда тоже, — сказал Пух.</p>
                <p>— Засада, как я собирался объяснить Винни-Пуху, — сказал Пятачок, — это вроде сюрприза.</p>
                <p>— Если на тебя внезапно наскочат, это называется засадой, — сказала Сова.</p>
                <p>— Засадой, Пух, называется, когда на тебя внезапно наскочат, — объяснил Пятачок.</p>
                <p>Пух, который теперь уже знал, что такое засада, сказал, что однажды куст малины наскочил на него внезапно, когда он, Пух, падал с дерева, и ему пришлось потом целую неделю вытаскивать колючки.</p>
                <p>— Никто не говорил о малине, — довольно сердито сказала Сова.</p>
                <figure class="wp-block-image">
                    <picture class="wp-image-36037">
                        <source class="lazy-load is-loaded" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh23.jpg.webp" type="image/webp" srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh23.jpg.webp" data-loaded="true"><img loading="lazy" width="379" height="275" src="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh23.jpg" alt="Винни-Пух и все-все-все - Алан Милн" class="wp-image-36037 lazy-load is-loaded" sizes="(max-width: 379px) 100vw, 379px" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh23.jpg 379w, https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh23-276x200.jpg 276w" data-src="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh23.jpg" style="height: 275px;" srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh23.jpg 379w, https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh23-276x200.jpg 276w" data-loaded="true">
                    </picture>
                </figure>
                <p>— Я же говорил, — сказал Пух.</p>
                <p>Они очень осторожно шли по берегу, пробираясь между скал и камней, и вскоре дошли до места, где берег был пошире и незаметно превращался в ровную лужайку, поросшую зеленой травой, на которой так и хотелось посидеть и отдохнуть. Как только они пришли туда, Кристофер Робин скомандовал: «Стой!» — и все уселись отдыхать.</p>
                <p>— По-моему, — сказал Кристофер Робин, — мы должны съесть всю нашу провизию, чтобы нам было легче идти дальше.</p>
                <p>— Съесть все наше что? — сказал Пух.</p>
                <p>— Все, что мы принесли, — сказал Пятачок, приступая к делу.</p>
                <p>— Это хорошая мысль, — сказал Пух и тоже приступил к делу.</p>
                <p>— У всех есть что поесть? — спросил Кристофер Робин с полным ртом.</p>
                <p>— У всех, кроме меня, — сказал Иа. — Как обычно! — Он грустно оглянулся. — Интересно, никто из вас не сидит случайно на чертополохе?</p>
                <p>— Кажется, я сижу, — сказал Пух. — Ой! — Он вскочил и оглянулся. — Да, я сидел. Я так и чувствовал!</p>
                <p>— Спасибо, Пух. Если он тебе больше не нужен, то…</p>
                <p>Иа-Иа перешел на место Пуха и начал есть.</p>
                <p>— Между прочим, чертополоху не на пользу, когда на нем сидят, — заговорил Иа, на минуту оторвавшись от еды. — Он теряет всякую свежесть. Помните об этом, друзья мои. Не мешает проявлять внимание к товарищу. Надо иногда подумать и о других, я хочу сказать!</p>
                <p>Как только Кристофер Робин покончил со своим завтраком, он что-то шепнул Кролику, а Кролик сказал: «Да, да, конечно», и они отошли в сторонку.</p>
                <p>Как только Кристофер Робин покончил со своим завтраком, он что-то шепнул Кролику, а Кролик сказал: «Да, да, конечно», и они отошли в сторонку.</p>
                <p>— Мне не хотелось говорить при всех, — начал Кристофер
                    Робин.</p>
                <p>— Понятно, — сказал Кролик, надувшись от гордости.</p>
                <p>— Дело в том… я хотел… да нет, наверно, и ты, Кролик, не знаешь… Интересно, какой из себя Северный Полюс?</p>
                <p>— Ну, — сказал Кролик, встопорщив усы, — надо было раньше спросить.</p>
                <p>— Я раньше-то знал, но как будто позабыл, — небрежно сказал Кристофер Робин.</p>
                <p>— Странное совпадение, — сказал Кролик, — я тоже как будто позабыл, хотя раньше-то я, конечно, знал.</p>
                <p>— По-моему, там проходит земная ось. Наверно, она воткнута в землю. Правда?</p>
                <p>— Конечно, там есть ось, и, конечно, она воткнута в землю, потому что больше же ее некуда воткнуть, да к тому же она так и называется: «земляная».</p>
                <p>— И я так думаю.</p>
                <p>— Вопрос не в этом, — сказал Кролик. — Вопрос в том, где она, эта ось?</p>
                <p>— Это мы скоро узнаем! — сказал Кристофер Робин.</p>
                <p>Они вернулись к остальным участникам экспедиции. Пятачок лежал на травке и мирно похрапывал; Ру мыл мордочку и лапки в речке возле запруды, и Кенга, исполненная гордости, объясняла всем и каждому, что Ру впервые в жизни умывается самостоятельно; а Сова рассказывала Кенге интересную историю, полную длинных слов, вроде «энциклопедия» и «рододендрон», хотя Кенга и не думала ее слушать.</p>
                <p>— Не одобряю я этих разных умываний, — ворчал Иа, — в особенности этой новой моды мыть за ушами. А ты, Пух?</p>
                <p>— Ну, — сказал Пух, — я считаю…</p>
                <p>Но мы никогда не узнаем, что считал Пух, потому что в этот момент раздался всплеск, послышался писк Ру и громкий испуганный крик Кенги.</p>
                <p>— Ру упал в воду! — закричал Кролик.</p>
                <figure class="wp-block-image">
                    <picture class="wp-image-36038">
                        <source class="lazy-load is-loaded" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh24.jpg.webp" type="image/webp" srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh24.jpg.webp" data-loaded="true"><img loading="lazy" width="356" height="255" src="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh24.jpg" alt="Винни-Пух и все-все-все - Алан Милн" class="wp-image-36038 lazy-load is-loaded" sizes="(max-width: 356px) 100vw, 356px" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh24.jpg 356w, https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh24-279x200.jpg 279w" data-src="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh24.jpg" style="height: 255px;" srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh24.jpg 356w, https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh24-279x200.jpg 279w" data-loaded="true">
                    </picture>
                </figure>
                <p>— Доумывался! — сказал Иа-Иа.</p>
                <p>Кристофер Робин и Пух кинулись на помощь.</p>
                <p>— Смотрите, как я плаваю! — пропищал Ру. Он был уже на середине пруда, и течение быстро несло его к водопаду у плотины.</p>
                <p>— Ру, дорогой, ты цел? — кричала Кенга.</p>
                <p>— Да! — отвечал Ру. — Смотри, как я пла… Буль, буль! — И он вынырнул уже у следующей запруды.</p>
                <p>Все, как могли, старались ему помочь.</p>
                <p>Пятачок, совершенно проснувшийся, прыгал на месте и кричал: «Ой, ой!»; Сова объясняла, что в случае неожиданного погружения в воду самое важное — это держать голову над поверхностью; Кенга огромными скачками неслась по берегу, не забывая спрашивать: «Ру, дорогой, ты действительно цел?» — на что Ру отвечал: «Смотрите, как я плаваю!»; Иа сел возле запруды — той самой, где Ру упал, — и опустил в воду хвост. Повернувшись спиной ко всему происходящему, он приговаривал: «Все из-за этого мытья; но ты только держись за мой хвост, Ру, и все будет в порядке». А Кристофер Робин и Кролик носились взад и вперед, созывая всех остальных.</p>
                <p>— Ру, держись, мы идем к тебе! — кричал Кристофер Робин.</p>
                <p>— Эй вы там, ребята, перебросьте что-нибудь через реку, немного пониже! — командовал Кролик.</p>
                <p>И только Винни-Пух сделал что-то полезное.</p>
                <figure class="wp-block-image">
                    <picture class="wp-image-36039">
                        <source class="lazy-load" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh25.jpg.webp" type="image/webp"><img loading="lazy" width="259" height="386" src="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh25.jpg" alt="Винни-Пух и все-все-все - Алан Милн" class="wp-image-36039 lazy-load is-loaded" sizes="(max-width: 259px) 100vw, 259px" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh25.jpg 259w, https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh25-134x200.jpg 134w" data-src="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh25.jpg" style="height: 386px;" srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh25.jpg 259w, https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh25-134x200.jpg 134w" data-loaded="true">
                    </picture>
                </figure>
                <p><br></p>
                <p>Он подхватил длинную палку и перебросил ее на тот берег. Туда сразу же перескочила Кенга и схватила другой конец; они опустили палку к самой воде, и вскоре Ру, который продолжал радостно булькать: «Смотрите, как я плаваю!» — ухватился за нее и выкарабкался на берег.</p>
                <p>— Вы видали, как я плаваю? — пищал Ру в восторге, пока Кенга вытирала его. — Пух, ты видел, как я плаваю? Вот это называется плавать! Кролик, ты видел, что я делал? Я плавал! Эй, Пятачок! Пятачок, слышишь? Как ты думаешь, что я сейчас делал? Я плавал! Кристофер Робин, ты видел, как я…</p>
                <p>Но Кристофер Робин не слышал, он смотрел на Пуха.</p>
                <p>— Пух, — сказал он, — где ты нашел эту ось?</p>
                <p>Пух посмотрел на палку, которую все еще продолжал держать.</p>
                <p>— Ну, просто нашел, — сказал он. — Разве это ось? Я думал, это просто палка и она может пригодиться. Она там торчала в земле, а я ее поднял.</p>
                <p>— Пух, — сказал Кристофер Робин торжественно, — экспедиция окончена. Это — Земная Ось. Мы нашли Северный Полюс.</p>
                <p>— Ох, правда? — сказал Пух.</p>
                <p>Когда все вернулись на лужайку, Иа все еще продолжал сидеть, опустив хвост в воду.</p>
                <p>— Пусть кто-нибудь скажет Ру, чтобы он поторопился, — сказал он. — Мой хвост озяб. Я не жалуюсь, я просто констатирую факт. Мой хвост замерз.</p>
                <p>— Вот я! — пропищал Ру.</p>
                <p>— Ах, вот ты где!</p>
                <p>— Ты видел, как я плаваю?</p>
                <p>Иа вытащил хвост из воды и помахал им.</p>
                <p>— Я так и думал, — сказал он. — Ничего не чувствует. Онемел. Вот до чего дошло. Он окоченел. Ну что ж, если это никого не беспокоит, значит, так и должно быть.</p>
                <p>— Бедный мой ослик! Я его сейчас вытру, — сказал Кристофер Робин. Он достал носовой платок и начал вытирать хвост.</p>
                <p>— Спасибо, Кристофер Робин. Ты здесь единственный, кто понимает в хвостах. Остальные не способны думать. Вот в чем их беда. У них нет воображения. Для них хвост это не хвост, а просто добавочная порция спины.</p>
                <p>— Не горюй, Иа! — сказал Кристофер Робин, растирая хвост изо всех сил. — Так лучше?</p>
                <p>— Пожалуй, так он чувствует себя хвостом. Чувствует, что ты им владеешь. Если ты понимаешь, что я хочу сказать.</p>
                <p>— Привет, Иа! — сказал Пух, подойдя со своей Осью.</p>
                <p>— Привет, Пух. Спасибо за внимание. Я думаю, что через день-два я опять сумею им владеть.</p>
                <p>— Чем владеть? — спросил Пух.</p>
                <p>— Тем, о чем мы говорили.</p>
                <p>— А я ни о чем не говорил, — сказал Пух, недоумевая.</p>
                <p>— Значит, я опять ошибся. А я думал, ты сказал, как тебя огорчает история с моим хвостом, и спросил, не мог бы ты чем-нибудь помочь.</p>
                <p>— Нет, — сказал Пух чистосердечно. — Это был не я. — Он подумал немножко и, желая помочь выяснить вопрос, добавил: — Наверно, это был кто-нибудь другой.</p>
                <p>— Ну что ж, тогда поблагодари его от моего имени, когда вы увидитесь.</p>
                <p>Пух смущенно посмотрел на Кристофера Робина.</p>
                <p>— Пух нашел Северный Полюс, — сказал Кристофер Робин. — Здорово, правда? Вот Земная Ось.</p>
                <p>Пух скромно опустил глаза.</p>
                <p>— Вот это? — спросил Иа.</p>
                <p>— Да, — сказал Кристофер Робин.</p>
                <p>— Значит, мы вот эту штуку искали?</p>
                <p>— Да, — сказал Пух.</p>
                <p>— Гм, — сказал Иа-Иа. — Ну что ж. Во всяком случае, дождя не было, — добавил он.</p>
                <p>Они воткнули Ось в землю, и Кристофер Робин привязал к ней дощечку с надписью:</p>
                <p>СЕВЕРНЫЙ ПОЛЮС</p>
                <p>ОТКРЫТ ПУХОМ</p>
                <p>ПУХ ЕГО НАШЕЛ</p>
                <p>Потом все отправились по домам. И, по-моему, хотя я в этом и не вполне уверен, Крошке Ру пришлось принять горячую ванну и немедленно лечь спать. А Пух так гордился своим подвигом, что должен был очень-очень основательно подкрепиться.</p><a rel="nofollow" class="kc-gotop kc__gotop" href="#kcmenu">к оглавлению ↑</a>
                <h2 id="glava-devyataya-v-kotoroj-pyatachok-sovershenno-okruzhyon-vodoj">ГЛАВА ДЕВЯТАЯ, в которой Пятачок совершенно окружён водой</h2>
                <p>Дождик лил, лил и лил. Пятачок сказал себе, что никогда за всю свою жизнь — а ему было ужасно много лет: может быть, три года, а может быть, даже четыре! — никогда он еще не видел столько дождя сразу. А дождь лил, и лил, и лил. С утра до вечера День за днем.</p>
                <p>«Вот если бы, — думал Пятачок, выглядывая из окна, — я был в гостях у Пуха, или у Кристофера Робина, или хотя бы у Кролика, когда дождь начался, мне было бы все время весело. А то сиди тут один-одинешенек и думай, когда он перестанет!»</p>
                <p>И он представлял себе, что он в гостях у Пуха и говорит ему: «Ты видал когда-нибудь такой дождь?» — а Пух отвечает: «Ну прямо ужасно!», или он, Пятачок, в свою очередь, говорит: «Интересно, не размыло ли дорогу к Кристоферу Робину?», а Пух отвечает: «А бедный старый Кролик, наверно, смылся из дому».</p>
                <p>Конечно, такая беседа — это одно удовольствие!</p>
                <p>И вообще какой толк в таких потрясающих вещах, как потопы и наводнения, если тебе не с кем даже о них поговорить?</p>
                <p>А было, спору нет, потрясающе интересно. Маленькие сухие канавки, в которые Пятачок, бывало, так часто лазил, стали ручьями; ручейки, по которым он, бывало, шлепал, подвернув штанишки, превратились в потоки, а речка, на берегах которой друзья так весело играли, вылезла из своего ложа (так называют речкину постель) и разлилась так широко, что Пятачок начал беспокоиться, не заберется ли она скоро и в его собственное ложе (то есть в его постель).</p>
                <p>«Да, немного страшновато, — сказал он сам себе, — быть Очень Маленьким Существом, совершенно окруженным водой! Кристофер Робин и Пух могут спастись, забравшись на дерево, Кенга может ускакать и тоже спастись, Кролик может спастись, зарывшись в землю. Сова может улететь, а Иа может спастись — ммм… если будет громко кричать, пока его не спасут.</p>
                <p>А вот я сижу тут, весь окруженный водой, и совсем-совсем ничего не могу сделать!»</p>
                <p>Дождь все лил, и с каждым днем вода подымалась немножко выше, и вот она подошла уже к самому окошку, а Пятачок все еще ничего не сделал.</p>
                <p>И вдруг он вспомнил историю, которую рассказывал ему Кристофер Робин, — историю про человека на необитаемом острове, который написал что-то на бумажке, положил ее в бутылку и бросил бутылку в море; и Пятачок подумал, что если он напишет что-нибудь на бумажке, положит ее в бутылку и бросит в воду, то, может быть, кто-нибудь придет и спасет его!</p>
                <p>Он обыскал весь свой дом, вернее, все, что в доме оставалось сухого, и наконец он нашел сухой карандаш, кусочек сухой бумаги, сухую бутылку и сухую пробку и написал на одной стороне бумажки:</p>
                <p>ПОМОГИТЕ!</p>
                <p>ПЯТАЧКУ (ЭТО Я)</p>
                <p>а на обороте:</p>
                <p>ЭТО Я, ПЯТАЧОК,</p>
                <p>СПАСИТЕ, ПОМОГИТЕ!</p>
                <p>Потом он положил бумагу в бутылку, как можно лучше закупорил бутылку, как можно дальше высунулся из окошка — но так, чтобы не выпасть, — и изо всех сил бросил бутылку.</p>
                <div class="ad-tag ad-can-close ad-in-content" ad-num="8">
                    <div class="ad-tag-inner">
                        <div class="ad-placeholder">
                            <div class="ad-placeholder-text placeholder-cite">
                                <div class="cite-text">Мир — это книга. И кто не путешествовал по нему — прочитал в ней только одну страницу..</div>
                                <div class="cite-author">Аврелий Августин</div>
                            </div>
                        </div>
                        <div class="MKN_ITA_300M actual-ad"></div>
                    </div><i class="ad-close-btn fa fa-times-thin fa-2x" aria-hidden="true"></i>
                </div>
                <p>— Плюх! — сказала бутылка и закачалась на волнах.</p>
                <p>Пятачок следил, как она медленно уплывает, пока у него глаза не заболели, и ему стало порой казаться, что это бутылка, а порой, что это просто рябь на воде, и наконец он понял, что больше он ее никогда не увидит и что он сделал все, что мог, для своего спасения.</p>
                <p>«И, значит, теперь, — думал он, — кто-нибудь другой должен будет что-нибудь сделать. Я надеюсь, что он сделает это быстро, потому что иначе мне придется плавать, а ведь я не умею».</p>
                <p>Тут он очень глубоко вздохнул и сказал:</p>
                <p>— Хочу, чтобы Пух был тут, вдвоем намного веселее!</p>
                <p>Когда дождь начался, Винни-Пух спал. Дождь лил, лил и лил, а он спал, спал и спал.</p>
                <p>Накануне он очень устал. Как вы помните, он открыл Северный Полюс, и он так гордился этим, что спросил Кристофера Робина, нет ли где еще Полюсов, которые Медведь с опилками в голове мог бы открыть.</p>
                <p>«Есть еще Южный Полюс, — сказал Кристофер Робин, — и, по-моему, где-то есть Восточный Полюс и Западный Полюс, хотя люди почему-то не любят говорить о них».</p>
                <p>Услышав это сообщение, Пух очень взволновался и предложил немедленно устроить искпедицию к Восточному Полюсу, но Кристофер Робин был чем-то занят с Кенгой, так что Пух отправился открывать Восточный Полюс сам. Открыл он его или нет, я забыл; но он вернулся домой таким усталым, что заснул в самый разгар ужина, спустя каких-нибудь полчаса после того, как сел за стол. И вот он спал, и спал, и спал.</p>
                <p>И вдруг он увидел сон. Он, Пух, был на Восточном Полюсе, и это оказался очень холодный Полюс, весь покрытый самыми холодными сортами снега и льда. Пух разыскал пчелиный улей и улегся там спать, но в улье не хватило места для задних лапок Пуха, и их пришлось оставить снаружи. И вдруг, откуда ни возьмись, пришли Дикие Буки, обитающие на Восточном Полюсе, и стали выщипывать мех на лапках Пуха, чтобы устроить гнезда для своих малышей, и чем больше они щипали, тем холоднее становилось лапкам, и наконец Пух проснулся с криком и обнаружил, что он сидит на стуле, а ноги у него в воде и вокруг него всюду тоже вода!</p>
                <p>Он прошлепал к двери и выглянул наружу…</p>
                <p>— Положение серьезное, — сказал Пух, — надо искать спасения.</p>
                <p>Он схватил самый большой горшок с медом и спасся с ним на толстую-претолстую ветку своего дерева, торчавшую высоко-высоко над водой.</p>
                <figure class="wp-block-image">
                    <picture class="wp-image-36040">
                        <source class="lazy-load is-loaded" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh26.jpg.webp" type="image/webp" srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh26.jpg.webp" data-loaded="true"><img loading="lazy" width="238" height="397" src="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh26.jpg" alt="Винни-Пух и все-все-все - Алан Милн" class="wp-image-36040 lazy-load is-loaded" sizes="(max-width: 238px) 100vw, 238px" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh26.jpg 238w, https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh26-120x200.jpg 120w" data-src="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh26.jpg" style="height: 397px;" srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh26.jpg 238w, https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh26-120x200.jpg 120w" data-loaded="true">
                    </picture>
                </figure>
                <p>Потом он опять слез вниз и спасся с другим горшком.</p>
                <p>А когда все спасательные операции были окончены, на ветке сидел Пух, болтая ногами, а рядом стояло десять горшков с медом…</p>
                <p>На другой день на ветке сидел Пух, болтая ногами, а рядом стояли четыре горшка с медом.</p>
                <p>На третий день на ветке сидел Пух, болтая ногами, а рядом стоял один горшок с медом.</p>
                <p>На четвертый день на ветке сидел Пух один-одинешенек.</p>
                <p>И в это самое утро бутылка Пятачка проплывала мимо Пуха.</p>
                <p>И тут с громким криком «Мед! Мед!» Пух кинулся в воду, схватил бутылку и, по шейку в воде, храбро вернулся к дереву и влез на ветку.</p>
                <p>— Жаль, жаль, — сказал Пух, открыв бутылку, — столько мокнуть, и совершенно зря!… Погодите, а что тут делает эта бумажка?</p>
                <p>Он вытащил бумажку и посмотрел на нее.</p>
                <p>— Это Спаслание, — сказал он, — вот что это такое. А вот это буква «Пы», да-да-да, да-да-да, а «Пы», наверно, значит «Пух», и, значит, это очень важное Спаслание для меня, а я не могу узнать, что оно значит! Надо бы найти Кристофера Робина, или Сову, или Пятачка — словом, какого-нибудь читателя, который умеет читать все слова, и они мне скажут, про что тут написано; только вот плавать я не умею. Жалко!</p>
                <p>И вдруг ему пришла в голову мысль, и я считаю, что для медведя с опилками в голове это была очень хорошая мысль. Он сказал себе:</p>
                <p>«Раз бутылка может плавать, то и горшок может плавать, а когда горшок поплывет, я могу сесть на него, если это будет очень большой горшок».</p>
                <p>Он взял свой самый большой горшок и завязал его покрепче.</p>
                <p>— У каждого корабля должно быть название, — сказал он, — значит, я назову свой — «Плавучий Медведь».</p>
                <p>С этими словами он бросил свой корабль в воду и прыгнул вслед.</p>
                <p>Некоторое время Пух и «Плавучий Медведь» не могли решить вопроса о том, кто из них должен быть сверху, но в конце концов они договорились. «Плавучий Медведь» оказался внизу, а на нем — Пух, отчаянно болтавший ногами.</p>
                <p>Кристофер Робин жил в самом высоком месте Леса. Дождь лил, лил и лил, но вода не могла добраться до его дома. И, пожалуй, было довольно весело смотреть вниз и любоваться всей этой водой, но дождь был такой сильный, что Кристофер Робин почти все время сидел дома и думал о разных вещах.</p>
                <p>Каждое утро он выходил (с зонтиком) и втыкал палочку в том месте, до которого дошла вода, а на следующее утро палочка уже скрывалась под водой, так что ему приходилось втыкать новую палочку, и дорога домой становилась все короче и короче.</p>
                <p>Наутро пятого дня он понял, что впервые в жизни оказался на настоящем острове. Это, конечно, было очень-очень здорово!</p>
                <p>И в это самое утро прилетела Сова, чтобы узнать, как поживает ее друг Кристофер Робин.</p>
                <p>— Слушай, Сова, — сказал Кристофер Робин, — до чего здорово! Я живу на острове!</p>
                <p>— Атмосферные условия в последнее время были несколько неблагоприятными, — сказала Сова.</p>
                <p>— Что, что?</p>
                <p>— Дождик был, — пояснила Сова.</p>
                <p>— Да, — сказал Кристофер Робин, — был.</p>
                <p>— Уровень паводка достиг небывалой высоты.</p>
                <p>— Кто?</p>
                <p>— Я говорю — воды кругом много, — пояснила Сова.</p>
                <p>— Да, — согласился Кристофер Робин, — очень много.</p>
                <p>— Однако перспективы быстро улучшаются. Прогноз показывает…</p>
                <p>— Ты видела Пуха?</p>
                <p>— Нет, прогноз…</p>
                <p>— Я надеюсь, он жив и здоров, — сказал Кристофер Робин. — Я немного беспокоюсь о нем. Интересно, Пятачок с ним или нет? Ты думаешь, у них все в порядке, Сова?</p>
                <p>— Я полагаю, что все в порядке. Ты понимаешь, прогноз…</p>
                <p>— Знаешь что, Сова, погляди, как они там, потому что ведь у Пуха опилки в голове и он может сделать какую-нибудь глупость, а я его так люблю, Сова. Понимаешь, Сова?</p>
                <p>— Очень хорошо, — сказала Сова, — я отправляюсь. Вернусь немедленно. — И она улетела.</p>
                <p>Вскоре она вернулась.</p>
                <p>— Пуха там нет, — сказала она.</p>
                <p>— Нет?</p>
                <p>— Он был там. Он сидел на ветке с девятью горшками меда. Но теперь его там нет.</p>
                <p>— Пух, дорогой, — крикнул Кристофер Робин, — где же ты?</p>
                <p>— Вот где я, — ответил сзади ворчливый голосок.</p>
                <p>— Пух!!</p>
                <p>Они кинулись обниматься.</p>
                <p>— Как ты сюда попал, Пух? — спросил Кристофер Робин, когда он смог снова заговорить.</p>
                <p>— На корабле! — сказал Пух гордо. — Я получил очень важное Спаслание в бутылке, но так как мне попала в глаза вода, я не мог его прочитать и привез его тебе на своем корабле.</p>
                <p>С этими гордыми словами он передал Кристоферу Робину послание.</p>
                <p>— Это же от Пятачка! — закричал Кристофер Робин, прочитав послание.</p>
                <p>— А про Пуха там ничего нет? — спросил медвежонок, заглядывая Кристоферу Робину через плечо.</p>
                <p>Кристофер Робин прочел послание вслух.</p>
                <p>— Ах, так все эти «Пы» были Пятачки? А я думал, это были Пухи.</p>
                <p>—
                    Надо его немедленно спасать! Я-то думал, что он с тобой, Пух. Сова, ты можешь его спасти на спине?</p>
                <p>— Не думаю, — отвечала Сова после длительного размышления. — Сомнительно, чтобы спинная мускулатура была в состоянии…</p>
                <p>— Тогда полети к нему сейчас же и скажи, что спасение приближается, а мы с Пухом подумаем, как его спасти, и придем, как только сможем. Ой, Сова, только, ради бога, не разговаривай, лети скорее!</p>
                <p>И, все еще повторяя про себя то, что она хотела, но не успела высказать, Сова улетела.</p>
                <p>— Ну вот, Пух, — сказал Кристофер Робин, — где твой корабль?</p>
                <p>— Надо сказать, — объяснил Пух Кристоферу по дороге к берегу, — что это не совсем обыкновенный корабль. Иногда это корабль, а иногда это вроде несчастного случая. Смотря по тому…</p>
                <p>— Смотря по чему?</p>
                <p>— Ну, по тому — наверху я или внизу. На нем или под ним.</p>
                <p>— Ну, а где он?</p>
                <p>— Вот, — сказал Пух гордо и указал на «Плавучего Медведя».</p>
                <p>Да, это было совсем не то, что Кристофер Робин ожидал увидеть.</p>
                <p>И чем больше он глядел на «Плавучего Медведя» тем больше он думал о том, какой же храбрый и умный медведь Винни-Пух, но чем больше Кристофер Робин думал об этом, тем скромнее глядел Пух в землю, стараясь сделать вид, что это не он.</p>
                <p>— Но только он слишком маленький для нас обоих, — сказал Кристофер Робин грустно.</p>
                <p>— Для нас троих, считая Пятачка.</p>
                <p>— Ну, значит, он еще меньше. Винни-Пух, что же нам делать?</p>
                <p>И тут этот медвежонок, Винни-Пух, Д.П. (Друг Пятачка), П.К. (Приятель Кролика), О.П. (Открыватель Полюса), У.И. и Н.X. (Утешитель Иа-Иа и Находитель Хвоста), — одним словом, наш Винни-Пух сказал такую мудрую вещь, что Кристофер Робин смог только вытаращить глаза и открыть рот, не понимая — неужели это тот самый медведь с опилками в голове, которого он так давно знает и любит.</p>
                <figure class="wp-block-image">
                    <picture class="wp-image-36041">
                        <source class="lazy-load is-loaded" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh27.jpg.webp" type="image/webp" srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh27.jpg.webp" data-loaded="true"><img loading="lazy" width="254" height="390" src="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh27.jpg" alt="Винни-Пух и все-все-все - Алан Милн" class="wp-image-36041 lazy-load is-loaded" sizes="(max-width: 254px) 100vw, 254px" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh27.jpg 254w, https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh27-130x200.jpg 130w" data-src="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh27.jpg" style="height: 390px;" srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh27.jpg 254w, https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh27-130x200.jpg 130w" data-loaded="true">
                    </picture>
                </figure>
                <p>— Мы поплывем в твоем зонтике, — сказал Пух.</p>
                <p>— ??</p>
                <p>— Мы поплывем в твоем зонтике, — сказал Пух.</p>
                <p>— ??</p>
                <p>— Мы поплывем в твоем зонтике, — сказал Пух.</p>
                <p>— !!!</p>
                <p>Да, Кристофер Робин вдруг понял, что это возможно. Он открыл свой зонтик и опустил его на воду. Зонтик поплыл, но закачался. Пух влез в него. И он было уже хотел сказать, что все в порядке, когда обнаружил, что не все, и после непродолжительного купания он вброд вернулся к Кристоферу Робину. Потом они оба сели в зонтик, и зонтик больше не качался.</p>
                <p>— Мы назовем это судно «Мудрость Пуха», — сказал Кристофер Робин.</p>
                <p>И «Мудрость Пуха» на всех парусах поплыла в юго-восточном направлении, время от времени плавно вращаясь.</p>
                <p>Представьте себе, как обрадовался Пятачок, когда наконец увидел Корабль! Потом долгие годы он любил думать, что был в очень большой опасности во время этого ужасного потопа, но единственная опасность угрожала ему только в последние полчаса его заключения, когда Сова уселась на ветку и, чтобы его морально поддержать, стала рассказывать ему длиннейшую историю про свою Тетку, которая однажды по ошибке снесла гусиное яйцо, и история эта тянулась и тянулась (совсем как эта фраза), пока Пятачок (который слушал Сову, высунувшись в окно), потеряв надежду на спасение, начал засыпать и, естественно, стал помаленьку вываливаться из окна; но, по счастью, в тот момент, когда он держался только одними копытцами задних ног, Сова громко вскрикнула, изображая ужас своей Тетки и ее крик, когда она (Тетка) обнаружила, что яйцо было действительно гусиное, и Пятачок проснулся и как раз успел юркнуть обратно в окно и сказать: «Ах как интересно! Да что вы говорите!» — словом, вы можете представить себе его радость, когда он увидел славный Корабль «Мудрость Пуха» (Капитан — К.Робин, 1-й помощник — В.-Пух), который плыл ему на выручку, а К. Робин и В. — Пух, в свою оче…</p>
                <p>Ну, эта история здесь, по сути дела, кончается, а я так устал от этой последней фразы, что тоже не прочь бы кончить, но никак нельзя не рассказать о том, что было позже.</p>
                <p>Потому что позже, когда все высохло, и все ручейки в Лесу стали опять маленькими и хорошенькими, и вода в тихих, сонных лужицах только грезила о великих делах, которые она совершила, Кристофер Робин устроил Торжественный Вечер в честь своего друга Винни-Пуха и в честь Славного Дела, которое он — Винни-Пух — совершил.</p>
                <p>Это был чудесный вечер! В Лесу был накрыт длинный-предлинный стол, и на одном Председательском месте — в конце стола — сидел Кристофер Робин, а на другом Председательском месте — в другом конце стола — сидел сам Винни-Пух, а на остальных местах сидели Гости: Пятачок, и Кролик, и Иа, и Кенга, и Ру, и Сова. А кругом, в траве, расположились Родственники и Знакомые Кролика, всех сортов и размеров (начиная с тех, на которых вы иногда нечаянно наступаете, и кончая теми, которые иногда нечаянно залетают вам в глаз), и терпеливо ждали, что кто-нибудь из Гостей заговорит с ними, или что-нибудь уронит, или хотя бы спросит у них, который час.</p>
                <p>И, конечно, все-все-все славно угостились, а потом Кристофер Робин произнес Хвалебную речь в честь того, кто совершил Славное Дело: и сказал, что для него — для того, кто это Дело совершил, — приготовлен Большой Подарок.</p>
                <figure class="wp-block-image">
                    <picture class="wp-image-36043">
                        <source class="lazy-load" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh30.jpg.webp" type="image/webp"><img loading="lazy" width="251" height="383" src="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh30.jpg" alt="Винни-Пух и все-все-все - Алан Милн" class="wp-image-36043 lazy-load is-loaded" sizes="(max-width: 251px) 100vw, 251px" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh30.jpg 251w, https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh30-131x200.jpg 131w" data-src="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh30.jpg" style="height: 383px;" srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh30.jpg 251w, https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh30-131x200.jpg 131w" data-loaded="true">
                    </picture>
                </figure>
                <p>Но так как он не сказал, кто именно совершил Славное Дело, считая, что все и так его знают, то Иа-Иа вдруг по ошибке принял все Торжество на свой счет, и ослик понял свою ошибку только тогда, когда Подарок (большая, очень красивая коробка) был вручен тому, кто действительно это дело совершил, то есть Винни-Пуху.</p>
                <p>Винни-Пух принял Подарок и сказал «спасибо», и все столпились вокруг него, крича наперебой: «Открывай скорей!», «Чего там есть?», «А я знаю, что там!» и так далее.</p>
                <p>А когда Винни-Пух открыл коробку (поскорей, но все-таки не разрезав, а развязав ленточку — ведь она всегда вдруг может понадобиться), все так и ахнули, а сам Винни чуть не упал от радости.</p>
                <p>Потому что это оказалась Специальная Коробка с чудеснейшим набором карандашей!</p>
                <p>Там были карандаши, помеченные «В» — в честь Винни-Пуха, и карандаши, помеченные «НВ» — в честь Неустрашимого Винни, и еще карандаши, помеченные «ВВ» — в честь… в честь Выручательного Винни, потому что ведь это он выручил Пятачка; и еще там была Машинка для точки карандашей, и Красная Резинка, которая очень хорошо стирает все, что вы написали неправильно, и потом Линейка, и Синие Карандаши, и Красные Карандаши, и даже Зеленые и Красно-Синие, совсем как у взрослых.</p>
                <p>И все это было для Пуха.</p>
                <p>И, по-моему, он все это вполне заслужил.</p>
                <p>А как вы считаете?</p><a rel="nofollow" class="kc-gotop kc__gotop" href="#kcmenu">к оглавлению ↑</a>
                <h2 id="glava-desyataya-v-kotoroj-dlya-ia-ia-stroyat-dom-na-puhovoj-opushke">ГЛАВА ДЕСЯТАЯ, в которой для Иа-Иа строят дом на Пуховой опушке</h2>
                <p>Однажды, когда Винни-Пуху делать было совершенно нечего, он подумал, что всё-таки надо бы чем-нибудь заняться. Вот он и решил заглянуть к Пятачку и посмотреть, чем занимается Пятачок. Шёл снег, и Винни плёлся по белой-белой лесной тропинке и думал, что, наверно, Пятачок сейчас греет ножки у огня; но, к своему удивлению, он увидел, что дверь дома Пятачка открыта, и чем дольше он смотрел туда, тем больше убеждался, что Пятачка там нет.</p>
                <p>— Он ушёл из дому, — грустно сказал Пух, — вот в чём дело. Поэтому его и нет дома! Придётся мне прогуляться одному и самому обдумать всё это. Обидно-досадно!</p>
                <p>Но сначала он решил всё-таки, чтобы окончательно удостовериться, постучать очень-очень громко… И, ожидая, пока Пятачок <em>не</em>  ответит, он прыгал, чтобы согреться, и вдруг в его голове внезапно зазвучал Шум, и он показался Винни хорошим Шумом, который может, пожалуй, многим понравиться:</p>
                <p>Иду вперёд</p>
                <p>(Тирлим-бом-бом),</p>
                <p>И снег идёт</p>
                <p>(Тирлим-бом-бом),</p>
                <p>Хоть нам совсем —</p>
                <div class="ad-tag ad-can-close ad-in-content" ad-num="9">
                    <div class="ad-tag-inner">
                        <div class="ad-placeholder">
                            <div class="ad-placeholder-text placeholder-cite">
                                <div class="cite-text">Если в мире всё бессмысленно, что мешает выдумать какой-нибудь смысл?</div>
                                <div class="cite-author">Алиса в стране чудес</div>
                            </div>
                        </div>
                        <div class="MKN_ITA_300M 
            actual-ad"></div>
                    </div><i class="ad-close-btn fa fa-times-thin fa-2x" aria-hidden="true"></i>
                </div>
                <p>Совсем не по дороге!</p>
                <p>Но только вот</p>
                <p>(Тирлим-бом-бом)</p>
                <p>Скажите, от —</p>
                <p>(Тирлим-бом-бом),</p>
                <p>Скажите, от —</p>
                <p>Чего так зябнут ноги?</p>
                <p>— Тогда я вот что сделаю, — сказал Винни-Пух. — Я сделаю так: просто сперва пойду домой и посмотрю, который час, и, может быть, надену шарф, а потом я пойду навещу Иа и спою ему эту Шумелку.</p>
                <p>Винни побежал домой, и по дороге он так был занят Шумелкой, которую ведь надо было окончательно отделать, перед тем как спеть её Иа, что, когда он внезапно увидел перед собой Пятачка, уютно устроившегося в его лучшем кресле, Пух смог только почесать в голове и впасть в глубокое раздумье — в чьём же доме он находится?</p>
                <p>— Ой, Пятачок, — сказал он, — а я думал, тебя нет дома.</p>
                <p>— Нет, — сказал Пятачок, — это тебя нет дома, Пух.</p>
                <p>— Пожалуй, правильно, — сказал Пух, — во всяком случае, одного из нас нет дома.</p>
                <p>И он посмотрел на часы, которые вот уже третью неделю показывали без пяти одиннадцать.</p>
                <p>— Ура, ура, уже почти одиннадцать, — сказал Пух радостно, — как раз пора чем-нибудь подкрепиться!</p>
                <p>И Винни-Пух полез в буфет.</p>
                <p>— А потом мы пойдём гулять и споём мою Шумелку Иа, — добавил он.</p>
                <p>— Какую Шумелку?</p>
                <p>— Ну, да песню, которую мы собираемся спеть Иа, — объяснил Пух.</p>
                <p>Спустя полчаса, когда Пух и Пятачок отправились в путь, часы, к их утешению, всё ещё показывали без пяти одиннадцать. Ветер утих, и снежок, которому надоело вертеться, пытаясь поймать самого себя за хвост, тихонько спускался вниз, и каждая снежинка сама отыскивала себе место для отдыха. Порой этим местом оказывался нос Винни-Пуха, а порой нет, и спустя немного времени у Пятачка вокруг шеи появился белый шарф, и за ушами у него было так снежно, как ещё никогда в жизни.</p>
                <p>— Пух, — сказал он наконец, слегка помявшись, потому что ведь ему не хотелось, чтобы Пух подумал, что он сдаётся. — Я вот о чём подумал: а что, если мы сейчас пойдём домой и поучим как следует твою песню, поупражняемся, а потом споём её Иа? Завтра… или… или, например, как-нибудь в другой раз, когда мы его случайно встретим?</p>
                <p>— Это очень хорошая мысль, Пятачок! — сказал Пух. — Мы будем сейчас повторять Шумелку по дороге, но только дома её повторять не стоит, потому что это специальная Дорожная Шумелка для Снежной Погоды и её надо петь на дороге, когда идёт снег.</p>
                <p>— Обязательно? — тревожно спросил Пятачок.</p>
                <p>— Да ты сам увидишь, Пятачок, если послушаешь, потому что она вот как начинается: «Иду вперёд. Тирлим-бом-бом…».</p>
                <p>— Тирлим что? — спросил Пятачок.</p>
                <p>— Бом-бом, — сказал Пух. — Я вставил это, чтобы она была шумелочней. «И снег идёт, тирлим-бом-бом, хоть нам…»</p>
                <p>— А ты разве не сказал «иду вперёд»?</p>
                <p>— Да, но «вперёд» был впереди.</p>
                <p>— Впереди тирлим-бом-бома?</p>
                <p>— Это же был другой тирлим-бом-бом, — сказал Винни-Пух, уже несколько сбитый с толку.</p>
                <p>И он запел снова:</p>
                <p>Идём</p>
                <p>Вперёд</p>
                <p>(Тирлим-бом-бом),</p>
                <p>И снег</p>
                <p>Идёт</p>
                <p>(Тирлим-бом-бом),</p>
                <p>Хоть нам</p>
                <p>Совсем-совсем не по дороге!</p>
                <p>Но только</p>
                <p>Вот</p>
                <p>(тирлим-бом-бом)</p>
                <p>Скажите,</p>
                <p>От — (тирлим-бом-бом),</p>
                <p>Скажите,</p>
                <p>Отчего так зябнут ноги?</p>
                <p>Он спел Шумелку так, по-новому, от начала до конца, и, пожалуй, так она стала ещё лучше, и, окончив, Винни замолчал в ожидании, что Пятачок скажет, что из всех Дорожных Шумелок для Снежной Погоды, которые он когда-либо слышал, эта — самая лучшая.</p>
                <p>Пятачок после долгого и серьёзного размышления высказал своё мнение.</p>
                <p>— Пух, — сказал он задумчиво, — по-моему, не так ноги, как уши!</p>
                <p>К этому времени они уже подходили к Унылому Месту, где жил Иа, и, так как у Пятачка за ушками всё ещё было очень снежно и ему это начинало надоедать, они свернули в небольшую сосновую рощицу и присели на калитку в изгороди.<a href="http://hobbitaniya.ru/miln/img/miln86.jpg" target="_blank" rel="noreferrer noopener"></a></p>
                <p>Теперь снег на них не падал, но всё ещё было очень холодно, и, чтобы не замёрзнуть, они спели Шумелку Пуха шесть раз от начала до конца (Пятачок исполнял все тирлим-бом-бомы, а Пух всё остальное), причём оба в нужных местах колотили по изгороди палочками. Вскоре им стало гораздо теплее, и они смогли продолжить разговор.</p>
                <p>— Я сейчас думал, — сказал Пух, — и думал я вот о чём: я думал про Иа.</p>
                <p>— А что ты думал про Иа?</p>
                <p>— То, что ведь бедному Иа негде жить.</p>
                <p>— Негде, негде, — согласился Пятачок.</p>
                <p>— У тебя есть дом, Пятачок, и у меня есть дом, и это очень хорошие дома. И у Кристофера Робина дом, у Совы, и Кенги, и у Кролика тоже есть дома, и даже у Родственников и Знакомых Кролика тоже есть дома или что-нибудь в этом роде, а у бедного Иа нет совсем ничего. И вот что я придумал: давай построим ему дом.</p>
                <p>— Это замечательная мысль, — сказал Пятачок. — А где мы его построим?</p>
                <p>— Мы построим его здесь, — сказал Пух, — на опушке этой рощицы. Тут нет ветра, и тут я об этом подумал. Мы можем назвать это место «Пухова опушка», и мы построим для Иа на Пуховой Опушке — ДОМ ИА.</p>
                <p>— Ой, кстати, там за рощей я видел груду палочек, — сказал Пятачок. — Там их навалена целая куча! Ну прямо целая гора!</p>
                <p>— Спасибо, Пятачок, То, что ты сказал, будет нам очень полезно, и за это я бы мог назвать это место Пуховопятачковой Опушкой, если бы Пухова Опушка не звучала лучше. Но только она звучит лучше потому, что она пушистей и, значит, больше похожа на опушку.</p>
                <p>Они слезли с изгороди и отправились за палочками.</p>
                <p>…Кристофер Робин всё это утро провёл в комнате, путешествуя в Африку и обратно, и он как раз сошёл с корабля и подумал: «Интересно, какая сейчас на улице погода», как вдруг в его дверь постучал не кто иной, как Иа.</p>
                <p>— Здравствуй, Иа, — сказал Кристофер Робин, открыв дверь и выйдя на двор. — Как ты себя чувствуешь?</p>
                <p>— Снег всё идёт, — мрачно сказал Иа.</p>
                <p>— Да, да.</p>
                <p>— И мороз.</p>
                <p>— Да?</p>
                <p>— Да, — сказал Иа. — Однако, — добавил он, немного просветлев, — землетрясений у нас в последнее время не было.</p>
                <p>— Что случилось, Иа?</p>
                <p>— Ничего, Кристофер Робин. Ничего существенного. Ты, конечно, не видел где-нибудь здесь дома или чего-нибудь в этом роде?</p>
                <p>— Какого дома?</p>
                <p>— Просто дома.</p>
                <p>— А кто там живёт?</p>
                <p>— Я живу. По крайней мере, я думал, что я там живу. Но, по-видимому, я там не живу. Ну что ж, в конце концов не у всех же должны быть дома.</p>
                <p>— Ой, Иа, я не знал. Я всегда думал…</p>
                <p>— Не знаю, в чём тут дело, Кристофер Робин, но из-за всего этого снега и тому подобного, не говоря уже о сосульках и всем прочем, сейчас в поле часа в три утра не так жарко, как думают некоторые. Не сказать, чтобы там было душно, если ты понимаешь, что я имею в виду. Да, жаловаться на духоту не приходится. Никак не приходится. По правде говоря, Кристофер Робин, — продолжал Иа громким шопотом, — строго между нами, совершенно секретно, если никому не говорить, — там <em>холодно</em> .</p>
                <p>— Ой, Иа!</p>
                <p>— И я сказал себе — ведь остальные, пожалуй огорчатся, если я замёрзну. Правда, у них ни у кого нет ума, в голове у них только опилки, да и те, очевидно, попали туда по ошибке, и они не умеют думать, но если снег будет идти ещё недель шесть или в этом духе, даже кто-нибудь из них может сказать себе: «Пожалуй, Иа не так уж жарко сейчас, часа в три утра». А потом он захочет это проверить. А ещё потом ему станет очень грустно.</p>
                <p>— Ой, Иа! — сказал Кристофер Робин, которому уже стало очень грустно.</p>
                <p>— Я не имел в виду тебя, Кристофер Робин. Ты не такой. Словом, всё это я клоню к тому, что я построил себе дом возле своей маленькой рощицы.</p>
                <p>— Правда построил? Как замечательно!</p>
                <p>— Действительно замечательным, — продолжал Иа самым унылым тоном, — представляется мне то, что, когда я утром уходил, он был там, а когда я вернулся, его там не было. Вообще это всё вполне понятно, в конце концов это был всего лишь дом Иа. Но всё-таки я несколько обескуражен.</p>
                <p>Кристоферу Робину некогда было особенно удивляться. Он уже забежал в свой дом и моментально натянул тёплую шапку, тёплые ботинки и тёплое пальто.</p>
                <p>— Мы сейчас пойдём и выясним это, — сказал он Иа.</p>
                <p>— Иногда, — сказал Иа, — когда люди забирают чей-нибудь дом, там остаётся кусочек-другой, который им не нужен и который они с удовольствием вернут бывшему хозяину, если ты понимаешь, что я хочу сказать. Вот я и думаю, что если мы заглянем…</p>
                <p>— Пошли, пошли, — сказал Кристофер Робин.</p>
                <p>Они пошли очень быстро, и поэтому они очень быстро пришли на ту опушку рощи, где <em>не было</em>  дома Иа.</p>
                <p>— Ну вот, — сказал Иа. — Не осталось ни единой палочки. Конечно, жаловаться не приходится, ведь остался весь этот снег, с которым я могу делать всё, что я хочу!</p>
                <p>Но Кристофер Робин не слушал Иа. Он прислушивался к чему-то другому.</p>
                <p>— Ты не слышишь? — спросил он Иа.</p>
                <p>— А что там такое? Кто-то смеётся?</p>
                <p>— Слушай.</p>
                <p>Они прислушались… И они услышали ворчливый басок, напевавший, что и он идёт, и снег идёт, хотя им совсем-совсем не по дороге, и чей-то тоненький голосок, успевавший вовремя тирлимбомбомкать.</p>
                <p>— Это Пух! — радостно сказал Кристофер Робин.</p>
                <p>— Вероятно, — сказал Иа.</p>
                <p>— И ещё Пятачок, — взволнованно сказал Кристофер Робин.</p>
                <p>— Возможно, — сказал Иа. — Кто нам сейчас действительно нужен — это хорошая ищейка.</p>
                <p>Слова песни неожиданно изменились.</p>
                <p>— Наш дом готов! — пел бас.</p>
                <p>— Тирлим-бом-бом, — пел пискливый голосок.</p>
                <p>— Прекрасный дом…</p>
                <p>— Тирлим-бом-бом…</p>
                <p>— Я сам охотно жил бы в нём!…</p>
                <p>— Тирлим-бом-бом…</p>
                <p>— Пух! — закричал Кристофер Робин.</p>
                <p>Певцы замолчали.</p>
                <p>— Это Кристофер Робин, — в восторге сказал Пух.</p>
                <p>— Он на той стороне. Там, где мы взяли палочки, — сказал Пятачок.</p>
                <p>— Побежали, — сказал Пух.</p>
                <p>Они помчались по опушке вокруг рощи, и всю дорогу Пух издавал приветственные возгласы.</p>
                <p>— Эй, а тут Иа! — сказал Пух, когда они с Кристофером Робином
                    кончили обниматься. Он толкнул локтем Пятачка, а Пятачок толкнул локтем его, и они подумали, какой это приятный сюрприз. — Здравствуй, Иа!</p>
                <p>— И тебе желаю того же, медвежонок Пух, а по четвергам — вдвое, — уныло сказал Иа.</p>
                <p>Не успел Винни-Пух спросить: «Почему по четвергам?» — как Кристофер Робин начал рассказывать грустную историю пропавшего дома Иа. Пух и Пятачок слушали, и глаза у них становились всё больше и больше.</p>
                <p>— Где, ты говоришь, он был? — спросил Пух.</p>
                <p>— Как раз тут, — сказал Иа.</p>
                <p>— Он был сделан из палочек?</p>
                <p>— Да.</p>
                <p>— Ох, — сказал Пятачок.</p>
                <p>— Что? — сказал Иа</p>
                <p>— Я просто сказал «ох», — нервно ответил Пятачок, и, чтобы не подавать виду, что он смутился, раз-другой тирлимбомбомкнул так беззаботно, как только мог.</p>
                <p>— А ты уверен, что это был дом? — спросил Пух. — Я хочу сказать, ты уверен, что как раз тут был дом?</p>
                <p>— Конечно, уверен, — сказал Иа Он пробормотал про себя: «Ни тени ума нет у некоторых!»</p>
                <p>— В чём дело, Пух? — спросил Кристофер Робин.</p>
                <p>— Ну… — сказал Пух. — Дело в том… — сказал он. — Ну, дело в том… — сказал Пух. — Понимаешь… — сказал Пух. — Как бы вам сказать… — сказал Пух, и тут что-то, видимо, подсказало ему, что он не очень хорошо объясняет дело, так что он снова толкнул Пятачка локтем.</p>
                <p>— Как бы вам сказать… — поспешно сказал Пятачок. — Только теплее, — добавил он после долгого размышления.</p>
                <p>— Что — теплее?</p>
                <p>— На той стороне рощи, где стоит дом Иа.</p>
                <p>— Мой дом? — спросил Иа. — Мой дом был здесь.</p>
                <p>— Нет, — твёрдо сказал Пятачок, — он на той опушке.</p>
                <p>— Потому что там теплее, — сказал Пух.</p>
                <p>— Но я хочу знать…</p>
                <p>— Пойдём и посмотрим, — просто сказал Пятачок, приглашая всех идти за ним.</p>
                <p>Они вышли на опушку, и там стоял дом Иа — с виду уютный-преуютный.</p>
                <p>— Вот он, — сказал Пятачок.</p>
                <p>— Внутри не хуже, чем снаружи, — с гордостью сказал Пух.</p>
                <p>Иа вошёл в дом и снова вышел.</p>
                <p>— Странное явление, — сказал он. — Это мой дом, и я сам построил его там, где я говорил, так что, очевидно, его сдуло сюда ветром. Видимо, ветер перенёс его прямо через рощу и тут опустил. И он стоит здесь целый и невредимый. Пожалуй, местами он даже лучше!</p>
                <p>— Гораздо лучше! — хором сказали Пух и Пятачок.</p>
                <p>— Вот вам пример того, что можно сделать, если не полениться, — сказал Иа. — Тебе понятно, Пух? Тебе понятно, Пятачок? Во-первых — Смекалка, а во-вторых — Добросовестная Работа. Ясно? Вот как надо строить дом! — гордо закончил Иа.</p>
                <p>Все попрощались со счастливым хозяином дома, и Кристофер Робин пошёл обедать со своими друзьями — Пухом и Пятачком. По дороге друзья рассказали ему об Ужасной Ошибке, которую они совершили, и, когда он кончил смеяться, все трое дружно запели Дорожную Шумелку для Снежной Погоды и пели её всю дорогу, причём Пятачок, который всё ещё был немного не в голосе, только тирлимбомбомкал.</p>
                <p>«Конечно, кажется, что тирлимбомбомкать легко, — сказал Пятачок про себя, — но далеко не каждый и с этим сумеет справиться!»</p><a rel="nofollow" class="kc-gotop kc__gotop" href="#kcmenu">к оглавлению ↑</a>
                <h2 id="glava-odinnadtsataya-v-kotoroj-v-les-prihodit-tigra-i-zavtrakaet">ГЛАВА ОДИННАДЦАТАЯ, в которой в лес приходит Тигра и завтракает</h2>
                <p>Винни-Пух внезапно проснулся в полночь и насторожился. Потом он встал с постели, зажег свечку и пошел к буфету-проверить, не пытается ли кто-нибудь туда залезть, но там никого не было, так что он, успокоенный, вернулся обратно, задул свечку и лег в постель. И тут он снова услышал Подозрительный Звук — тот самый, который его разбудил.</p>
                <p>— Это ты, Пятачок? — спросил Пух.</p>
                <p>Но это был не он.</p>
                <p>— Входи, Кристофер Робин, — сказал Пух.</p>
                <p>Но Кристофер Робин не вошел.</p>
                <p>— Завтра расскажешь, Иа, — сказал Пух сонным голосом.</p>
                <p>Но звук продолжался.</p>
                <p>— ВОРРАВОРРАВОРРАВОРРАВОРРА! — говорил Неизвестно Кто, и Пух вдруг почувствовал, что ему, в общем, совершенно не хочется спать.</p>
                <p>«Что это может быть такое? — подумал он. — У нас в Лесу бывает множество всяких звуков, но этот какой-то странный. Это и не пение, и не сопение, и не хрипение… Это даже не тот звук, который издаешь перед тем, как прочитать вслух стихи. Это какой-то незнакомый шум, и шумит какой-то незнакомый зверь. А главное, он шумит у самой моей двери. Очевидно, надо встать и попросить его перестать».</p>
                <p>Винни встал с постели и открыл дверь.</p>
                <p>— Привет! — сказал он, обращаясь неизвестно к кому.</p>
                <p>— Привет! — ответил Неизвестно Кто.</p>
                <p>— Ох! — сказал Пух. — Привет!</p>
                <p>— Привет!</p>
                <p>— А, это ты! — сказал Пух. — Привет!</p>
                <p>— Привет! — сказал Чужой Зверь, недоумевая, до каких пор этот обмен приветствиями будет продолжаться.</p>
                <p>Пух как раз собирался сказать «Привет! » в четвертый раз, но подумал, что, пожалуй, не стоит, и вместо этого он спросил:</p>
                <div class="ad-tag ad-can-close ad-in-content" ad-num="10">
                    <div class="ad-tag-inner">
                        <div class="ad-placeholder">
                            <div class="ad-placeholder-text placeholder-cite">
                                <div class="cite-text">Веди себя так, будто ты уже счастлив, и ты действительно станешь счастливее.</div>
                                <div class="cite-author">Дейл Карнеги</div>
                            </div>
                        </div>
                        <div class="MKN_ITA_300M actual-ad"></div>
                    </div><i class="ad-close-btn fa fa-times-thin fa-2x" aria-hidden="true"></i>
                </div>
                <p>— А кто это?</p>
                <p>— Я, — отвечал Голос.</p>
                <p>— Правда? — сказал Пух. — Ну, тогда входи!</p>
                <p>Тут Неизвестно Кто вошел, и при свете свечи он и Пух уставились друг на друга.</p>
                <p>— Я — Пух, — сказал Винни-Пух.</p>
                <p>— А я — Тигра, — сказал Тигра.</p>
                <p>— Ох! — сказал Пух. (Ведь он никогда раньше видел таких зверей.) — А Кристофер Робин знает про тебя?</p>
                <p>— Конечно, знает! — сказал Тигра.</p>
                <p>— Ну, — сказал Пух, — сейчас полночь, и это самое подходящее время, чтобы лечь спать, а завтра утром у нас будет мед на завтрак. Тигры любят мед?</p>
                <p>— Они все любят! — весело сказал Тигра.</p>
                <p>— Тогда, раз они любят спать на полу, я пойду опять лягу в постель, — сказал Пух, — а завтра мы займемся делами. Спокойной ночи!</p>
                <p>И он лег в постель и поскорее заснул. Первое, что он увидел утром, проснувшись, — был Тигра, который сидел перед зеркалом, уставившись на свое отражение.</p>
                <p>— Доброе утро! — сказал Пух.</p>
                <p>— Доброе утро! — сказал Тигра. — Смотри-ка, тут есть кто-то, точь-в-точь как я, а я думал, я только один такой.</p>
                <p>Пух вылез из постели и начал объяснять, что такое зеркало, но едва он дошел до самого интересного места, Тигра сказал:</p>
                <p>— Минуточку! Извини, пожалуйста, но там кто-то лезет на твой стол!… ВОРРАВОРРАВОРРАВОРРАВОРРА! — проворчал он, схватил угол скатерти, стащил ее на пол, завернулся в нее три раза, перекатился в другой конец комнаты и, после отчаянной борьбы, сунул голову из-под скатерти и весело спросил:</p>
                <p>— Ну, кто победил? Я?</p>
                <p>— Это моя скатерть, — сказал Пух, начиная развертывать Тигру.</p>
                <p>— Никогда бы не подумал, что ее так зовут, — сказал Тигра.</p>
                <p>— Ее стелют на стол, и на нее потом все ставят.</p>
                <p>— А тогда зачем она старалась укусить меня, когда я не смотрел?</p>
                <p>— Не думаю, чтобы она очень старалась. — сказал Пух.</p>
                <p>— Она старалась, — сказал Титра, — но где ей со мной справиться!</p>
                <p>Пух расстелил скатерть на столе, поставил большой горшок меду на скатерть, и они сели завтракать.</p>
                <p>Как только они сели, Тигра набрал полный рот меду… и поглядел на потолок, склонив голову набок. Потом послышалось чмоканье — удивленное чмоканье, и задумчивое чмоканье, и чмоканье, означающее: «Интересно, что же это нам такое дали?»</p>
                <p>А потом он сказал очень решительным голосом:</p>
                <p>— Тигры не любят меда!</p>
                <p>— Ай-ай-ай! — сказал Пух, стараясь показать, что его это ужасно огорчило. — А я-то думал, что они любят все.</p>
                <p>— Все, кроме меда, — сказал Тигра.</p>
                <p>Сказать по совести, Винни-Пуху это было довольно приятно, и он поспешно сообщил Тигре, что, как только он, Пух, справится со своим завтраком, они пойдут в гости к Пятачку, и, может быть, он угостит их желудями.</p>
                <p>— Спасибо, Пух, — сказал Тигра, — потому что как раз желуди Тигры любят больше всего на свете!</p>
                <p>И вот после завтрака они отправились в гости к Пятачку, и Пух по дороге объяснял, что Пятачок — очень Маленькое Существо и не любит, когда на него наскакивают, так что он, Пух, просит Тигру не очень распрыгиваться для первого знакомства, а Тигра, который всю дорогу прятался за деревьями, то вдруг выскакивал из засады, стараясь поймать тень Пуха, когда она не смотрела, отвечал, что Тигры наскакивают только до завтрака, а едва они съедят немного желудей, они становятся Тихими и Вежливыми. Так они незаметно дошли до дверей Пятачка и постучали.</p>
                <figure class="wp-block-image">
                    <picture class="wp-image-36046">
                        <source class="lazy-load is-loaded" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh112.jpg.webp" type="image/webp" srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh112.jpg.webp" data-loaded="true"><img loading="lazy" width="406" height="299" src="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh112.jpg" alt="Винни-Пух и все-все-все - Алан Милн" class="wp-image-36046 lazy-load is-loaded" sizes="(max-width: 406px) 100vw, 406px" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh112.jpg 406w, https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh112-272x200.jpg 272w" data-src="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh112.jpg" style="height: 299px;" srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh112.jpg 406w, https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh112-272x200.jpg 272w" data-loaded="true">
                    </picture>
                </figure>
                <p>— Здравствуй, Пух, — сказал Пятачок.</p>
                <p>— Здравствуй, Пятачок. А это — Тигра.</p>
                <p>— П-п-правда? — спросил Пятачок, отъезжая на стуле к противоположному краю стола. — А я думал, Тигры не такие большие.</p>
                <p>— Ого-го! Это ты не видал больших! — сказал Тигра.</p>
                <p>— Они любят желуди, — сказал Пух, — поэтому мы и пришли. Потому что бедный Тигра до
                    сих пор еще совсем не завтракал.</p>
                <p>Пятачок подвинул корзинку с желудями Тигре и сказал: «Угощайтесь, пожалуйста», а сам крепко прижался к Пуху и, почувствовав себя гораздо храбрее, сказал: «Так ты Тигра? Ну-ну!» — почти веселым голосом. Но Тигра ничего не ответил, потому что рот у него был набит желудями…</p>
                <p>Он долго и громко жевал их, а потом сказал:</p>
                <p>— Мимы ме мюмят момумей.</p>
                <p>А когда Пух и Пятачок спросили: «Что, что?» — он сказал:</p>
                <p>— Мимимите! — и выбежал на улицу.</p>
                <p>Почти в ту же секунду он вернулся и уверенно объявил:</p>
                <p>— Тигры не любят желудей.</p>
                <p>— А ты говорил, они любят все, кроме меда, — сказал Пух.</p>
                <p>— Все, кроме меда и желудей, — объяснил Тигра.</p>
                <p>Услышав это, Пух сказал: «А-а, понятно!» — а Пятачок, который был, пожалуй, немного рад, что Тигры не любят желудей, спросил:</p>
                <p>— А как насчет чертополоха?</p>
                <p>— Чертополох, — сказал Тигра, — Тигры действительно любят больше всего-всего на свете!</p>
                <p>— Тогда пойдем навестим Иа, — предложил Пятачок.</p>
                <p>Все трое отправились в путь. Они шли, и шли, и шли и наконец пришли в тот уголок Леса, где находился Иа-Иа.</p>
                <p>— Здравствуй, Иа! — сказал Пух. — Вот это — Тигра.</p>
                <p>— Кто вот это? — спросил Иа.</p>
                <p>— Вот это, — в один голос объяснили Пух и Пятачок, а Тигра улыбнулся во весь рот и ничего не сказал.</p>
                <p>Иа обошел вокруг Тигры два раза: сначала с одной стороны, потом с другой.</p>
                <p>— Как, вы сказали, это называется? — спросил он, закончив осмотр.</p>
                <figure class="wp-block-image">
                    <picture class="wp-image-36047">
                        <source class="lazy-load is-loaded" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-7.jpg.webp" type="image/webp" srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-7.jpg.webp" data-loaded="true"><img loading="lazy" width="265" height="198" src="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-7.jpg" alt="Винни-Пух и все-все-все - Алан Милн" class="wp-image-36047 lazy-load is-loaded" data-src="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-7.jpg" style="height: 198px;" data-loaded="true">
                    </picture>
                </figure>
                <p>— Тигра.</p>
                <p>— Угу, — сказал Иа.</p>
                <p>— Он только что пришел, — объяснил Пятачок.</p>
                <p>— Угу, — повторил Иа.</p>
                <p>Он некоторое время размышлял, а потом сказал:</p>
                <p>— А когда он уходит?</p>
                <p>Пух стал объяснять Иа, что Тигра — большой друг Кристофера Робина и он теперь всегда будет в Лесу, а Пятачок объяснил Тигре, что он не должен обижаться на то, что сказал Иа, потому что он, то есть Иа, всегда такой угрюмый; а Иа-Иа объяснил Пятачку, что наоборот, сегодня утром он необыкновенно весел: а Тигра объяснил всем и каждому, что он до сих пор еще не завтракал.</p>
                <p>— Ох, так и знал, что позабуду, — сказал наконец Пух. — Тигры всегда едят чертополох — вот почему мы пришли к тебе в гости.</p>
                <p>— Спасибо, Пух! Очень, очень тронут твоим вниманием!</p>
                <p>— Ой, Иа, я не хотел сказать, что мы не хотели тебя видеть…</p>
                <p>— Понятно, понятно. Словом, ваш новый полосатый друг хочет позавтракать. Вполне естественно. Как, вы говорите, его зовут?</p>
                <p>— Тигра.</p>
                <p>— Ну, тогда пойдем сюда, Тигра.</p>
                <p>Иа проводил Тигру к самому колючему кусту чертополоха и для верности показал на него копытом.</p>
                <p>— Этот кустик я берег для своего дня рождения, — сказал он, — но, в конце концов, что такое день рождения? Сегодня он тут, а завтра его нет. Пожалуйста, Тигра, угощайся.</p>
                <p>Тигра сказал «спасибо» и неуверенно покосился на Пуха.</p>
                <p>— Это и есть чертополох? — шепнул он.</p>
                <p>— Да, — сказал Пух.</p>
                <p>— Тот, который Тигры любят больше всего на свете?</p>
                <p>— Совершенно верно, — сказал Пух.</p>
                <p>— Понятно, — сказал Тигра.</p>
                <p>И он храбро откусил большущую ветку и громко захрустел ею. В ту же секунду он сел на землю и сунул лапу в рот.</p>
                <p>— Ой-ой-ой, — сказал он.</p>
                <p>— В чем дело? — спросил Пух.</p>
                <p>— Жжется! — пробормотал Тигра.</p>
                <p>— Кажется, — сказал Иа, — наш друг проглотил пчелу.</p>
                <p>Друг Пуха на секунду перестал трясти головой (он пытался вытрясти колючки) и объяснил, что Тигры не любят чертополоха.</p>
                <p>— Тогда зачем было портить такой отличный экземпляр? — сурово спросил Иа.</p>
                <p>— Но ведь ты сам говорил, — начал Пух, — ты говорил, что Тигры любят все, кроме меда и желудей.</p>
                <p>— И чертополоха! — крикнул Тигра, который в это время бегал с высунутым языком, описывая огромные круги.</p>
                <p>Пух грустно посмотрел на него.</p>
                <p>— Что же мы будем делать? — спросил он Пятачка.</p>
                <p>Пятачок знал, что ответить. Он сказал не задумываясь, что нужно пойти к Кристоферу Робину.</p>
                <p>— Вы найдете его у Кенги, — сказал Иа. Потом он подошел поближе к Пуху и сказал громким шепотом: — Не могли бы вы попросить вашего друга перенести свои спортивные упражнения в какое-нибудь другое место? Я сегодня собираюсь обедать, и мне не очень хочется, чтобы весь мой обед истоптали ногами. Конечно, это пустяки, прихоть, можно сказать, но всех у нас есть свои маленькие капризы. Пух важно кивнул и позвал Тигру.</p>
                <p>— Пошли! Мы сейчас пойдем к Кенге, уж у нее обязательно найдется для тебя куча всяких завтраков.</p>
                <p>Тигра закончил последний круг и подбежал к Пуху.</p>
                <p>— Жжется! — объяснил он, широко и приветливо улыбаясь. — Пошли! — И побежал первым.</p>
                <p>Пух и Пятачок медленно побрели за ним. По дороге Пятачок ничего не говорил, потому что он не мог ни о чем думать, а Пух ничего не говорил, потому что думал о новом стихотворении, и, когда он все хорошенько обдумал, он начал:</p>
                <p><em>Что делать с бедным Тигрой?</em></p>
                <p><em>Как нам его спасти?</em></p>
                <p><em>Ведь тот, кто ничего не ест,</em></p>
                <p><em>Не может и расти!</em></p>
                <p><em>А он не ест ни меду,</em></p>
                <p><em>Ни вкусных желудей —</em></p>
                <p><em>Ну ничего, чем кормят</em></p>
                <p><em>Порядочных людей!</em></p>
                <p><em>Он даже отказался</em></p>
                <p><em>Жевать чертополох,</em></p>
                <p><em>Чем вызвал в нашем Обществе</em></p>
                <p><em>Большой переполох!</em></p>
                <p><em>Так что ж нам делать с Тигрой?</em></p>
                <p><em>Как нам его спасти?</em></p>
                <p><em>Ведь Тигре очень нужно</em></p>
                <p><em>Немного подрасти!</em></p>
                <p>— Да он ведь и так уже очень большой, — сказал Пятачок.</p>
                <p>— На самом деле он еще не очень большой.</p>
                <p>— Ну, он кажется очень большим. Просто огромным.</p>
                <p>Пух, услыхав это, задумался и пробормотал про себя:</p>
                <p><em>Не знаю я сколько в нем Метров,</em></p>
                <p><em>И Литров, и Килограмм,</em></p>
                <p><em>Но Тигры, когда они прыгают,</em></p>
                <p><em>ОГРОМНЫМИ кажутся нам!</em></p>
                <p>— Теперь стихотворение закончено, — сказал он. — Тебе оно нравится, Пятачок?</p>
                <p>— Все, кроме Литров, — сказал Пятачок. — По-моему, они тут ни к чему.</p>
                <p>— А они обязательно хотели встать сзади Метров, — объяснил Пух. — Вот я их и впустил туда, чтобы отвязаться. Вообще это самый лучший способ писать стихи — позволять вещам становиться туда, куда они хотят.</p>
                <p>— Этого я не знал, — сказал Пятачок.</p>
                <p>Тигра тем временем весело прыгал впереди, поминутно возвращаясь, чтобы спросить: «Сюда идти?» И вот наконец показался домик Кенги, и там был Кристофер Робин. Тигра бросился со всех ног к нему.</p>
                <p>— Ах, это ты, Тигра! — сказал Кристофер Робин. — Я знал, что ты где-нибудь тут.</p>
                <p>— А я сколько всего нашел в лесу! — с гордостью сказал Тигра. — Я нашел пух, и пятачок нашел, и еще иа нашел! А вот завтрака я нигде не нашел.</p>
                <p>Пух и Пятачок подошли к Кристоферу Робину обнялись с ним и рассказали, в чем дело.</p>
                <p>— Ты, наверно, знаешь, что Тигры любят? — спросил Пух.</p>
                <p>— Если я очень постараюсь, я, наверно, вспомню, — сказал Кристофер Робин. — но я думаю, что Тигра сам знает.</p>
                <p>— Я знаю, — сказал Тигра, — они любят все на свете, кроме меда и желудей и еще — как эти жгучки называются?</p>
                <p>— Чертополох.</p>
                <p>— Да и еще кроме этих.</p>
                <p>— Ну что же, ладно. Уж Кенга накормит тебя завтраком.</p>
                <p>Они вошли в дом, и когда Крошка Ру сказал «Здравствуй, Пух», и «Здравствуй, Пятачок» (по одному разу), и «Здравствуй, Тигра» (два раза, потому что это очень забавно звучало и, кроме того, он ведь никогда еще так не здоровался), они рассказали Кенге, зачем они пришли, и Кенга очень ласково сказала: «Ну что ж, милый Тигра, загляни в мой буфет и посмотри — что тебе там понравится». Ведь Кенга сразу поняла, что, хотя с виду Тигра очень большой, он так же нуждается в ласке, как и Крошка Ру.</p>
                <p>— А можно мне тоже поглядеть? — сказал Пух который уже начал себя чувствовать немножко одиннадцатичасно, и, получив согласие, он разыскал небольшую банку сгущенного молока. Что-то, видимо, подсказало ему, что Тигры не любят сгущенного молока, и он тихонечко унес банку в уголок и спокойно занялся ею.</p>
                <p>Но чем больше Тигра совал то свой нос, то лапу, то в одну, то в другую банку, тем больше он находил вещей, которые Тигры не любят. И когда он перерыл весь буфет и нашел все, что там было, и оказалось, что он ничего этого есть не может, он спросил Кенгу:</p>
                <p>— Что же теперь будет?</p>
                <p>Но Кенга, и Кристофер Робин, и Пятачок — все стояли вокруг Крошки Ру, уговаривая его принять рыбий жир. И Ру говорил: «Может, не надо?» — а Кенга говорила: «Ну-ну, милый Ру, вспомни, что ты мне обещал».</p>
                <p>— Что это там такое? — шепнул Тигра Пятачку.</p>
                <p>— Это ему лекарство дают, — сказал Пятачок. — Витамины! Он их ненавидит!</p>
                <p>Тигра подошел поближе и наклонился над спинкой кресла Ру. И вдруг он высунул язык, послышалось громкое «буль-буль», и, подскочив от удивления, Кенга вскрикнула: «Ох!» — и ухватила ложку как раз в ту секунду, когда она уже исчезала в пасти Тигры. Ложку она спасла, но рыбий жир исчез.</p>
                <figure class="wp-block-image">
                    <picture class="wp-image-36048">
                        <source class="lazy-load is-loaded" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh113.jpg.webp" type="image/webp" srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh113.jpg.webp" data-loaded="true"><img loading="lazy" width="370" height="279" src="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh113.jpg" alt="Винни-Пух и все-все-все - Алан Милн" class="wp-image-36048 
            lazy-load is-loaded" sizes="(max-width: 370px) 100vw, 370px" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh113.jpg 370w, https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh113-265x200.jpg 265w" data-src="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh113.jpg" style="height: 279px;" srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh113.jpg 370w, https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh113-265x200.jpg 265w" data-loaded="true">
                    </picture>
                </figure>
                <p>— Господи, Тигра, милый! — сказала Кенга.</p>
                <p>— Он мое лекарство принял, он мое лекарство принял, он принял мое лекарство! — в восторге запищал Ру, решивший, что это отличная шутка.</p>
                <p>Тут Тигра посмотрел на потолок, закрыл глаза, и язык его пошел ходить кругами вокруг мордочки, на тот случай, если что-нибудь осталось снаружи. Затем его озарила умиротворенная улыбка, и он сказал:</p>
                <p>— Так вот что Тигры действительно любят!</p>
                <p>Теперь нас не удивит, что он поселился в доме у Кенги и всегда получал рыбий жир на завтрак, обед и ужин. Иногда (когда Кенга считала, что ему нужно подкрепиться) он вместо лекарства принимал ложку-другую кашки, которой завтракал Ру.</p>
                <p>— Но я лично считаю, — говаривал в таких случаях Пятачок Пуху, — я лично считаю, что он и так достаточно крепкий!</p><a rel="nofollow" class="kc-gotop kc__gotop" href="#kcmenu">к оглавлению ↑</a>
                <div class="ad-tag ad-can-close ad-in-content" ad-num="11">
                    <div class="ad-tag-inner">
                        <div class="ad-placeholder">
                            <div class="ad-placeholder-text placeholder-cite">
                                <div class="cite-text">Веди себя так, будто ты уже счастлив, и ты действительно станешь счастливее.</div>
                                <div class="cite-author">Дейл Карнеги</div>
                            </div>
                        </div>
                        <div class="MKN_ITA_300M actual-ad"></div>
                    </div><i class="ad-close-btn fa fa-times-thin fa-2x" aria-hidden="true"></i>
                </div>
                <h2 id="glava-dvenadtsataya-v-kotoroj-krolik-ochen-zanyat-i-my-vpervye-vstrech">ГЛАВА ДВЕНАДЦАТАЯ, в которой Кролик очень занят и мы впервые встречаемся с пятнистым Щасвирнусом</h2>
                <p>Все предвещало, что у Кролика опять будет очень занятой день. Едва успев открыть глаза, Кролик почувствовал, что сегодня все от него зависит и все на него рассчитывают. Это был как раз такой день, когда надо было, скажем, написать письмо (подпись — Кролик), день, когда следовало все проверить, все выяснить, все разъяснить и, наконец, самое главное — что-то организовать.</p>
                <p>В такое утро непременно надо было забежать на минутку к Пуху и сказать: «Ну что ж, отлично, тогда я передам Пятачку», а затем к Пятачку и сообщить: «Пух считает… Но лучше я сначала загляну к Сове». Начинался такой, как бы вам сказать, командирский день, когда все говорят: «Да, Кролик», «Хорошо, Кролик», «Будет исполнено, Кролик» и вообще ожидают дальнейших распоряжений. Кролик вышел из дому и, принюхиваясь к теплому весеннему ветру, размышлял о том, с чего начать.</p>
                <p>Ближе всех к нему был дом Кенги, а в домике Кенги был Ру, который умел говорить: «Да, Кролик» и «Хорошо, Кролик», пожалуй, лучше всех в Лесу; но, увы, в последнее время там безотлучно находился еще один зверь — непослушный и неугомонный Тигра. А он, как известно, был такой Тигра, который всегда сам лучше вас все знает, и, если вы говорите ему, куда надо идти, он прибегает туда первым, а когда вы туда доберетесь, его и след простыл, и вам даже некому гордо сказать: «Ну вот, мы у цели!»</p>
                <p>— Нет, к Кенге не надо, — задумчиво сказал Кролик, подкручивая усики. И, желая окончательно удостовериться в том, что он туда не идет, он повернул налево и побежал прямехонько к дому Кристофера Робина.</p>
                <p>«Что ни говори, — твердил Кролик про себя, — Кристофер Робин надеется только на меня. Он, конечно, любит Пуха, и Пятачка, и Иа, я — тоже, но у них у всех в голове опилки. Это ясно. Он уважает Сову, потому что нельзя не уважать того, кто умеет написать слово «суббота», даже если он пишет его неправильно, но правильнописание — это еще не все. Бывают такие дни, когда умение написать слово «суббота» просто не считается. А Кенга слишком занята Крошкой Ру, а Крошка Ру слишком маленький, а Тигра слишком непослушный, так что, когда наступает ответственный момент, надеяться можно только на меня. Я пойду и узнаю, в чем ему нужно помочь, и тогда я ему, конечно, помогу. Сегодня как раз день для таких занятий».</p>
                <p>Он весело перескочил на другой берег реки и вскоре оказался в районе, где жили его Родственники и Знакомые; сегодня их было, кажется, еще больше обыкновенного. Кивнув одному-другому Ежу (поздороваться с ними за руку было, понятно, некогда), небрежно бросив «Доброе утро, доброе утро» еще кое-кому и снисходительно приветствовав самых маленьких словами: «Ах, это вы», Кролик махнул им всем лапкой и скрылся. Все это вызвало такое волнение и восхищение среди Родственников и Знакомых, что некоторые представители семейства Козявок, включая Сашку Букашку, немедленно направились в Дремучий Лес и полезли на деревья надеясь, что они успеют забраться на верхушку до того, как это — что бы оно там ни было — случится, и они смогут все как следует увидеть.</p>
                <p>Кролик несся по опушке Дремучего Леса, с каждой минутой все больше чувствуя важность своей задачи, и наконец он прибежал к дереву, в котором жил Кристофер Робин.</p>
                <p>Он постучал в дверь.</p>
                <p>Он раза два окликнул Кристофера Робина. Потом он отошел немного назад и, заслонив лапкой глаза от солнца, еще покричал, глядя на верхушку.</p>
                <p>Потом он зашел с другой стороны и опять покричал: «Эй!» и «Слушай!» и «Это Кролик!», но ничего не произошло. Тогда он замолчал и прислушался, и все замолчало и прислушалось вместе с ним, и в освещенном солнцем Лесу стало тихо-тихо, и потом вдруг где-то в невероятной вышине запел жаворонок.</p>
                <p>— Обидно, — сказал Кролик, — он ушел.</p>
                <p>Он снова повернулся к зеленой двери, просто так для порядка, и обирался уже идти, чувствуя, что утро совершенно испорчено, как вдруг заметил на земле листок бумаги. В листке торчала булавка; очевидно, он упал с двери.</p>
                <p>— Ага, — сказал Кролик, снова приходя в хорошее настроение. — Мне опять письмо! Вот что там говорилось:</p>
                <p>Ушол щасвирнус</p>
                <p>занит щасвирнус</p>
                <p>К.Р.</p>
                <p>— Ага! — повторил Кролик. — Надо немедленно сообщить остальным.</p>
                <p>И он с важным видом двинулся в путь.</p>
                <p>Ближе всего отсюда жила Сова, и Кролик направил свои стопы по Дремучему Лесу к дому Совы. Он подошел к двери, позвонил и постучал; потом снова постучал и опять позвонил. Словом, он звонил и стучал, стучал и звонил до тех пор, пока, наконец, наружу не высунулась голова Совы и не сказала:</p>
                <p>— Убирайся, я предаюсь размышлениям, — ах, это ты!</p>
                <p>Сова всегда так встречала гостей.</p>
                <figure class="wp-block-image">
                    <picture class="wp-image-36049">
                        <source class="lazy-load is-loaded" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh223.jpg.webp" type="image/webp" srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh223.jpg.webp" data-loaded="true"><img loading="lazy" width="397" height="304" src="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh223.jpg" alt="Винни-Пух и все-все-все - Алан Милн" class="wp-image-36049 lazy-load is-loaded" sizes="(max-width: 397px) 100vw, 397px" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh223.jpg 397w, https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh223-261x200.jpg 261w" data-src="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh223.jpg" style="height: 304px;" srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh223.jpg 397w, https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh223-261x200.jpg 261w" data-loaded="true">
                    </picture>
                </figure>
                <p>— Сова, — сказал Кролик деловито, — у нас с тобой есть мозги. У остальных — опилки. Если в этом Лесу кто-то должен думать, а когда я говорю «думать», я имею в виду думать по-настоящему, то это наше с тобой дело.</p>
                <p>— Да, — сказала Сова, — я этим и занималась.</p>
                <p>— Прочти вот это.</p>
                <p>Сова взяла у Кролика записку Кристофера Робина и посмотрела на нее в некотором замешательстве. Она конечно, умела подписываться — «Сава» и умела написать «Суббота» так, что вы понимали, что это не вторник, и она довольно неплохо умела читать, если только ей не заглядывали через плечо и не спрашивали ежеминутно: «Ну так что же?» Да, она умела, но…</p>
                <p>— Ну так что же? — спросил Кролик.</p>
                <p>— Да, — сказала Сова очень умным голосом. — Я понимаю, что ты имеешь в виду. Несомненно.</p>
                <p>— Ну так что же?</p>
                <p>— Совершенно точно, — сказала Сова. — Вот именно. — И после некоторого размышления она добавила: — Если бы ты не зашел ко мне, я должна была бы сама зайти к тебе.</p>
                <p>— Почему? — спросил Кролик.</p>
                <p>— По этой самой причине, — сказала Сова, надеясь, что наконец она сумеет что-нибудь выяснить.</p>
                <p>— Вчера утром, — торжественно произнес Кролик, — я навестил Кристофера Робина. Его не было. К его двери была приколота записка.</p>
                <p>— Эта самая записка?</p>
                <p>— Другая. Но смысл ее был тот же самый. Все это очень странно.</p>
                <p>— Поразительно, — сказала Сова, снова уставившись на записку. На минуту ей, неизвестно почему, показалось, что что-то случилось с носом Кристофера Робина. — Что же ты сделал?</p>
                <p>— Ничего.</p>
                <p>— Это самое лучшее, — ответила мудрая Сова.</p>
                <p>Но она с ужасом ожидала нового вопроса. И он не заставил себя долго ждать.</p>
                <p>— Ну так что же? — повторил неумолимый Кролик.</p>
                <p>— Конечно, это совершенно неоспоримо, — пробормотала Сова.</p>
                <p>С минуту она беспомощно открывала и закрывала рот, не в силах ничего больше придумать. И вдруг ее осенило.</p>
                <p>— Скажи мне, Кролик, — сказала она, — что говорилось в первой записке? Только точно. Это очень важно. От этого все зависит. Повтори слово в слово.</p>
                <p>— Да то же самое, что и в этой, честное слово! Сова посмотрела на Кролика, борясь с искушением спихнуть его с дерева, но, сообразив, что это всегда успеется, она еще раз попыталась выяснить, о чем же все-таки идет разговор.</p>
                <p>— Прошу повторить точный текст, — сказала она, словно не обратив внимания на то, что сказал Кролик.</p>
                <p>— Да там было написано: «Ушол щасвирнус». То же самое, что и здесь, только здесь еще добавлено: «Занит щасвирнус».</p>
                <p>Сова с облегчением вздохнула.</p>
                <p>— Ну вот, — сказала Сова, — вот теперь наше положение стало яснее.</p>
                <p>— Да, но каково положение Кристофера Робина? — сказал Кролик. — Где он сейчас? Вот в чем вопрос!</p>
                <p>Сова снова поглядела на записку. Конечно, столь образованной особе ничего не стоило прочитать такую записку: «Ушол щасвирнус. Занит щасвирнус». А что тут еще могло быть написано?</p>
                <p>— По-моему, дорогой мой Кролик, довольно ясно. что произошло, — сказала она. — Кристофер Робин куда-то ушел с Щасвирнусом. Он и этот… Щасвирнус сейчас чем-то заняты. Ты за последнее время встречал у нас в Лесу каких-нибудь Щасвирнусов?</p>
                <p>— М-м-м, — сказал Кролик, — я как раз хотел у тебя узнать. Как они выглядят?</p>
                <p>— Ну, — сказала Сова, — пятнистый или травоядный Щасвирнус — это просто… По крайней мере, — сказала она, — он больше всего похож на… Но, конечно, — продолжала она, — это сильно зависит от… Ну… — сказала Сова. — Словом, я плохо представляю себе их внешний вид, — закончила она чистосердечно.</p>
                <p>— Большое спасибо, — сказал Кролик.</p>
                <p>И он помчался к Винни-Пуху.</p>
                <p>Еще издалека он услышал какой-то загадочный шум. Он остановился и прислушался. Производил этот шум Винни-Пух, а шум был вот какой:</p>
                <p><em>АГАДОЧНЫЙ ШУМ</em></p>
                <p><em>————————-</em></p>
                <p><em>Опять ничего не могу я понять.</em></p>
                <p><em>Опилки мои — в беспорядке.</em></p>
                <p><em>Везде и повсюду, опять и опять</em></p>
                <p><em>Меня окружают загадки.</em></p>
                <p><em>Возьмем это самое слово опять.</em></p>
                <p><em>Зачем мы его произносим,</em></p>
                <p><em>Когда мы свободно могли бы сказать</em></p>
                <p><em>«Ошесть» и «осемь» и «овосемь»?</em></p>
                <p><em>Молчит этажерка, молчит и тахта —</em></p>
                <p><em>У них не добьешься ответа,</em></p>
                <p><em>Зачем это хта — обязательно та.</em></p>
                <p><em>А жерка, как правило, эта!</em></p>
                <p><em>«Собака кусается»… Что ж, не беда.</em></p>
                <p><em>Загадочно то, что собака,</em></p>
                <p><em>Хотя и кусается, но никогда</em></p>
                <p><em>Себя не кусает, однако…</em></p>
                <p><em>О, если бы мог я все это понять.</em></p>
                <p><em>Опилки пришли бы в порядок!</em></p>
                <p><em>А то мне — загадочно! — хочется спать</em></p>
                <p><em>От всех этих Трудных Загадок!</em></p>
                <p>— Здорово, Пух, — сказал Кролик.</p>
                <p>— Здравствуй, Кролик, — сказал Пух сонно.</p>
                <p>— Это ты сам додумался?</p>
                <p>— Да, вроде как сам, — отвечал Пух. — Не то чтобы я умел думать, — продолжал он скромно, — ты ведь сам знаешь, но иногда на меня это находит.</p>
                <p>— Угу, — сказал Кролик, который никогда не позволял ничему находить на него, а всегда все находил и хватал сам. — Так вот, дело вот в чем: ты когда-нибудь видал Пятнистого или Травоядного Щасвирнуса у нас в Лесу?</p>
                <p>— Нет, — сказал Пух, — нико… Нет. Вот Тигру видел сейчас.</p>
                <p>— Он нам ни к чему.</p>
                <p>— Да, — сказал Пух, — я и сам так думал.</p>
                <p>— А Пятачка ты видел?</p>
                <p>— Да, — сказал Пух. — Я думаю, он сейчас тоже ни к чему, — продолжал он сонно.</p>
                <p>— Ну, это зависит от того, видел он кого-нибудь или нет.</p>
                <p>— Он меня видел, — сказал Пух. Кролик присел было рядом с Пухом на землю, но почувствовав, что это умаляет его достоинство, снова встал и сказал:</p>
                <p>— Если сформулировать нашу задачу, то ее можно изложить так: «Что Кристофер Робин делает теперь по утрам?»</p>
                <p>— Что он делает?</p>
                <p>— Да, да. Можешь ты мне рассказать, что он делает по утрам в последнее время? Требуются свидетельства очевидца за последние несколько дней.</p>
                <p>— Да, — сказал Пух, — мы вчера с ним вместе завтракали. Возле Шести Сосен. Я сделал такую маленькую корзиночку, просто небольшую, но подходящую корзиночку, такую порядочную, солидную корзиночку, полную…</p>
                <p>— Да, да, — сказал Кролик, — все понятно. Но имею в виду более позднее время. Ты видел его когда-нибудь от одиннадцати до двенадцати часов дня?</p>
                <p>— Ну, — сказал Пух, — в одиннадцать часов… одиннадцать часов, понимаешь, я обычно захожу домой. У меня в это время там кое-какие дела.</p>
                <p>— А в четверть двенадцатого?</p>
                <p>— Ну… — начал Пух.</p>
                <p>— В полдвенадцатого?</p>
                <p>— Да, — сказал Пух. — В полдвенадцатого или немножко попозже я обычно вижусь с ним.</p>
                <p>И тут, задумавшись об этом, Пух вдруг вспомнил, что он действительно давно не видел Кристофера Робина в это время. После обеда — да, вечером — да, перед завтраком — да, сразу после завтрака — да, а потом, действительно: «Ну, Пух, скоро увидимся», и Кристофер Робин исчезает на все утро.</p>
                <p>— Вот то-то и оно, — сказал Кролик. — Куда?</p>
                <p>— Ну, может быть, он ищет что-нибудь?</p>
                <p>— Что? — спросил Кролик.</p>
                <p>— Я как раз собирался это сказать, — сказал Пух. Потом он добавил: — Ну, может быть, он ищет этого… этого…</p>
                <p>— Пятнистого или Травоядного Щасвирнуса?</p>
                <p>— Да, — сказал Пух, — одного из них. Если он не на месте.</p>
                <p>Кролик строго посмотрел на Винни-Пуха.</p>
                <p>— Кажется, толку от тебя немного, — сказал он.</p>
                <p>— Нет, — сказал Пух. — Но я стараюсь, — добавил он смиренно.</p>
                <p>Кролик поблагодарил его за старание и сказал, что он должен навестить Иа, и Пух, если хочет, может пойти с ним. Но Пух, который чувствовал, что на него находит новый куплет Шумелки, сказал, что он подождет Пятачка.</p>
                <p>— Всего хорошего, Кролик.</p>
                <p>И Кролик ушел.</p>
                <p>Но случилось так, что первым встретил Пятачка как раз Кролик. Пятачок встал в этот день очень-очень рано и решил нарвать себе букетик фиалок, и, когда он нарвал букет и поставил его в вазу посреди своего дома, ему внезапно пришло в голову, что никто ни разу в жизни не нарвал букета фиалок для Иа. И чем больше он думал об этом, тем более он чувствовал, как грустно быть ослом, которому никто никогда в жизни даже не нарвал букета фиалок. И он снова помчался на лужайку, повторяя про себя: «Иа, фиалки», а потом: «Фиалки, Иа-Иа», чтобы не забыть.</p>
                <figure class="wp-block-image">
                    <picture class="wp-image-36050">
                        <source class="lazy-load is-loaded" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh245.jpg.webp" type="image/webp" srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh245.jpg.webp" data-loaded="true"><img loading="lazy" width="217" height="231" src="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh245.jpg" alt="Винни-Пух и все-все-все - Алан Милн" class="wp-image-36050 lazy-load is-loaded" sizes="(max-width: 217px) 100vw, 217px" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh245.jpg 217w, https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh245-188x200.jpg 188w" data-src="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh245.jpg" style="height: 231px;" srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh245.jpg 217w, https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh245-188x200.jpg 188w" data-loaded="true">
                    </picture>
                </figure>
                <p>Пятачок нарвал большой букет и побежал рысцой к тому месту, где обычно пасся Иа, по дороге нюхая фиалки и чувствуя себя необыкновенно счастливым.</p>
                <p>— Здравствуй, Иа, — начал Пятачок немного нерешительно, потому что Иа был чем-то занят.</p>
                <p>Иа поднял ногу и помахал Пятачку, чтобы уходил.</p>
                <p>— Завтра, — сказал Иа, — или послезавтра.</p>
                <p>Пятачок подошел поближе посмотреть, в чем дело. Перед Иа на земле лежали три палочки, на которые он внимательно смотрел. Две палочки соприкасались концами, а третья палочка лежала поперек них. Пятачок подумал, что, наверно, это какая-нибудь Западня.</p>
                <p>— Ой, Иа, — снова начал он, — я как раз…</p>
                <p>— Это маленький Пятачок? — сказал Иа, не отрывая взора от своих палочек.</p>
                <p>— Да, Иа, и я…</p>
                <p>— Ты знаешь, что это такое?</p>
                <p>— Нет, — сказал Пятачок.</p>
                <p>— Это «А».</p>
                <p>— О! О! — сказал Пятачок.</p>
                <p>— Какое «О»? Это «А»! — строго сказал Иа. — Ты что, не слышишь? Или ты думаешь, что ты образованнее Кристофера Робина?</p>
                <p>— Да, — сказал Пятачок. — Нет, — быстренько поправился он и подошел еще поближе.</p>
                <p>— Кристофер Робин сказал, что это «А», — значит это и будет «А». Во всяком случае, пока кто-нибудь на него не наступит, — добавил Иа сурово.</p>
                <p>Пятачок поспешно отскочил назад и понюхал свои фиалки.</p>
                <p>— А ты знаешь, что означает «А», маленький Пятачок?</p>
                <p>— Нет, Иа, не знаю.</p>
                <p>— Оно означает Учение, оно означает Образование, Науки и тому подобные вещи, о которых ни Пух, ни ты не имеете понятия. Вот что означает А.</p>
                <p>— О! — снова сказал Пятачок. — Я хотел сказать «Да ну?» — поспешно пояснил он.</p>
                <div class="ad-tag ad-can-close ad-in-content" ad-num="12">
                    <div class="ad-tag-inner">
                        <div class="ad-placeholder">
                            <div class="ad-placeholder-text placeholder-cite">
                                <div class="cite-text">Мир — это книга. И кто не путешествовал по нему — прочитал в ней только одну страницу..</div>
                                <div class="cite-author">Аврелий Августин</div>
                            </div>
                        </div>
                        <div class="MKN_ITA_300M actual-ad"></div>
                    </div><i class="ad-close-btn fa fa-times-thin fa-2x" aria-hidden="true"></i>
                </div>
                <p>— Слушай меня, маленький Пятачок. В этом Лесу толчется масса всякого народа, и все они говорят: «Ну Иа — это всего лишь Иа, он не считается». Они разгуливают тут взад и вперед и говорят: «Ха-ха!» а что они знают про букву «А»? Ничего. Для них это просто три палочки. Но для Образованных, заметь себе это, маленький Пятачок, для Образованных — я не говорю о Пухах и Пятачках — это знаменитая и могучая буква «А». Да, это тебе не такая вещь, — добавил он, — про которую каждый знает, чем это пахнет!</p>
                <p>Пятачок смущенно спрятал за спину фиалки и оглянулся в поисках помощи.</p>
                <p>— А вот и Кролик, — сказал он радостно. — Здравствуй, Кролик.</p>
                <p>Кролик с важным видом подошел поближе, кивнул Пятачку и сказал: «Привет, Иа», тоном, ясно говорившим, что спустя не более двух минут он скажет: «Всего хорошего».</p>
                <p>— Иа, у меня к тебе только один вопрос. Что это делает Кристофер Робин в последнее время по утрам?</p>
                <p>— Что я сейчас вижу перед собой? — сказал Иа, не поднимая глаз.</p>
                <p>— Три палочки, — не задумываясь, ответил Кролик.</p>
                <p>— Вот видишь? — сказал Иа Пятачку. Потом он повернулся к Кролику. — Теперь я отвечу на твой вопрос, — торжественно сказал он.</p>
                <p>— Спасибо, — сказал Кролик.</p>
                <p>— Что делает Кристофер Робин по утрам? Он учится. Он получает образование. Он обалдевает — по-моему, он употребил именно это слово, но, может быть, я и заблуждаюсь, — он обалдевает знаниями. В меру своих скромных сил я также — если я правильно усвоил это слово — обал… делаю то же, что и он. Вот это, например, буква…</p>
                <p>— Буква «А», — сказал Кролик, — но не очень удачная. Ну ладно, я должен идти и сообщить остальным.</p>
                <p>Иа посмотрел на свои палочки, а потом на Пятачка.</p>
                <p>— Как сказал Кролик? Что это такое? — спросил он.</p>
                <p>— «А», — сказал Пятачок.</p>
                <p>— Это ты ему сказал?</p>
                <p>— Нет, Иа, я не говорил. Я думаю, он сам знает.</p>
                <p>— Он знает? Ты хочешь сказать, что какой-то Кролик знает букву «А»?</p>
                <p>— Да, Иа. Он очень умный, Кролик-то.</p>
                <p>— Умный!… — сказал Иа с презрением, изо всех сил наступив копытом на свои три палочки.</p>
                <p>— Образование!… — с горечью сказал Иа, прыгая на своих палочках (их стало уже шесть).</p>
                <p>— Что такое наука? — спросил Иа, лягая палочки (их было уже двенадцать), так что они взлетели в воздух. — Какой-то Кролик все это знает. Ха!…</p>
                <p>— Я думаю… — начал Пятачок робко.</p>
                <p>— Не надо! — сказал Иа-Иа.</p>
                <p>— Я думаю, фиалки довольно милые, — сказал Пятачок. Он положил перед Иа свой букет и умчался.</p>
                <p>На следующее утро записка на двери Кристофера Робина гласила:</p>
                <p>Я ушел</p>
                <p>сейчас вернусь</p>
                <p>К.Р.</p>
                <p>Вот почему все обитатели Леса — за исключением, конечно, Пятнистого или Травоядного Щасвирнуса — отныне знают, чем Кристофер Робин занимается по утрам.</p><a rel="nofollow" class="kc-gotop kc__gotop" href="#kcmenu">к оглавлению ↑</a>
                <h2 id="glava-trinadtsataya-v-kotoroj-vyyasnyaetsya-chto-tigry-ne-lazyat-po-de">ГЛАВА ТРИНАДЦАТАЯ, в которой выясняется, что тигры не лазят по деревьям</h2>
                <p>Случилось однажды так, что Винни-Пух о чем-то думал. И вот он подумал, что не мешало бы пойти навестить Иа, потому что они не виделись со вчерашнего дня. Он пошел к Иа, распевая песенку, но вдруг он вспомнил, что не видел Сову с позавчерашнего дня, и решил по пути заглянуть в Дремучий Лес и посмотреть, дома ли Сова. Он пошел к Реке, мурлыкая ту же песенку, но, когда он дошел до третьего камня кладки, по которой переходят Реку, он забеспокоился о том, как поживают Кенга, и Ру, и Тигра. Пух подумал: «Я не видел Крошку Ру очень долгое время, а если я его не увижу сегодня, оно будет гораздо-гораздо дольше!»</p>
                <p>И тут он сел на камушек посредине Реки и, раздумывая, что же ему теперь делать, спел еще кусочек той же песни.</p>
                <p>Кусочек, который он спел, был приблизительно вот какой:</p>
                <p><em>Что мне делать, интересно,</em></p>
                <p><em>Поутру?</em></p>
                <p><em>В чехарду сыграть полезно</em></p>
                <p><em>С Крошкой Ру, —</em></p>
                <p><em>Станет талия поуже,</em></p>
                <p><em>Это мне к лицу.</em></p>
                <p><em>К тому же</em></p>
                <p><em>Буду прыгать я не хуже</em></p>
                <p><em>Кен-</em></p>
                <p><em>гу-</em></p>
                <p><em>ру!</em></p>
                <p>А солнце было такое ласковое и теплое, и камень. который лежал на солнышке уже давно, тоже был такой теплый, что Пух почти уже решил провести на нем все утро. И вдруг он вспомнил про Кролика.</p>
                <p>«Да, Кролик! — сказал Пух про себя. — Я люблю с ним поговорить. Он всегда понятно говорит. Он не любит длинных, трудных слов, не то что Сова. Он любит простые, легкие слова, например: «Закусим?» или: «Угощайся, Пух!» Да, по-моему, мне надо пойти навестить Кролика!»</p>
                <p>Тут к песенке прибавился новый кусочек:</p>
                <p><em>Очень мил бывает Кролик</em></p>
                <p><em>Иногда.</em></p>
                <p><em>С ним приятно сесть за столик</em></p>
                <p><em>Да-да-да!</em></p>
                <p><em>Тот, кто хочет подкрепиться,</em></p>
                <p><em>С ним всегда договорится,</em></p>
                <p><em>Если только торопиться</em></p>
                <p><em>Не-</em></p>
                <p><em>ку-</em></p>
                <p><em>да!</em></p>
                <p> И, когда Пух спел все это, он поднялся с камня, вернулся назад на берег и решительно отправился к дому Кролика. Но не прошел он и нескольких шагов, как начал спрашивать себя (ведь больше-то никого рядом не было):</p>
                <p>«А вдруг Кролика нет дома?»</p>
                <p>«Или вдруг я опять застряну у него в двери на обратном пути, как однажды уже случилось, потому что дверь у него была слишком узкая?»</p>
                <p>«Ведь я-то знаю, что я не растолстел, но его дверь вполне могла похудеть!»</p>
                <p>«Да, пожалуй, лучше будет…»</p>
                <p>И все это время он незаметно забирал левее и левее… пока не оказался, к своему большому удивлению, у своей собственной двери.</p>
                <p>Было одиннадцать часов. Вполне подходящее время, чтобы немножко…</p>
                <p>Словом, спустя полчаса Пух отправлялся туда, куда ему действительно хотелось отправиться, а именно к Пятачку, и по дороге он утирал губы лапкой и пел довольно пушистую песенку. Вот какую:</p>
                <p><em>Хорошо живет на свете Винни-Пух!</em></p>
                <p><em>Оттого поет он эти Песни вслух!</em></p>
                <p><em>И неважно, чем он занят,</em></p>
                <p><em>Если он толстеть не станет,</em></p>
                <p><em>А ведь он толстеть не станет,</em></p>
                <p><em>А, наоборот,</em></p>
                <p><em>по-</em></p>
                <p><em>ху-</em></p>
                <p><em>деет!</em></p>
                <p>Конечно, напечатанные здесь эти строки кажутся не особенно хорошими, но Пух, напевая эту песенку в очень солнечное утро, после очень, очень сытного завтрака, был уверен, что это одна из лучших песен, какие он сочинил в жизни. И он пел и пел ее в свое удовольствие.</p>
                <p>Пятачок копал ямку в земле у самой своей двери</p>
                <p>— Здравствуй, Пятачок! — закричал Винни-Пух</p>
                <p>— Ой, здравствуй, Пух! — отвечал Пятачок, подпрыгнув от неожиданности. — А я знал, что это ты!</p>
                <p>— Я тоже, — сказал Пух. — А что ты делаешь?</p>
                <p>— Я сажаю желудь, Пух, и пускай из него вырастет дуб, и тут будет много, много желудей у самого дома, а то за ними приходится ходить бог знает куда. Понимешь?</p>
                <p>— А вдруг не вырастет? — спросил Пух.</p>
                <p>— Вырастет, потому что Кристофер Робин сказал — обязательно вырастет. Поэтому я его и сажаю.</p>
                <p>— Гм, — сказал Пух. — А я тогда… А я тогда посажу соты с медом в своем садике, и из них вырастет целый улей.</p>
                <p>Пятачок был в этом не вполне уверен.</p>
                <p>— Или лучше кусочек сота, — сказал Пух. — Особенно разбрасываться сотами не приходится. Только вот тогда может вырасти не целый улей, а кусочек, да еще вдруг неправильный кусочек — тот, где пчелы только жужжат, а меду не делают. Вот обидно!</p>
                <p>Пятачок согласился, что это будет довольно обидно.</p>
                <p>— Между прочим, Пух, сажать очень трудно, если ты не знаешь как, — сказал он, — это надо уметь. — И он положил желудь в приготовленную ямку, засыпал его землей и попрыгал на этом месте.</p>
                <figure class="wp-block-image">
                    <picture class="wp-image-36051">
                        <source class="lazy-load" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh81.jpg.webp" type="image/webp"><img loading="lazy" width="393" height="321" src="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh81.jpg" alt="Винни-Пух и все-все-все - Алан Милн" class="wp-image-36051 lazy-load is-loaded" sizes="(max-width: 393px) 100vw, 393px" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh81.jpg 393w, https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh81-245x200.jpg 245w" data-src="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh81.jpg" style="height: 321px;" srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh81.jpg 393w, https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh81-245x200.jpg 245w" data-loaded="true">
                    </picture>
                </figure>
                <p>— Я-то умею сажать, — сказал Винни-Пух потому что Кристофер Робин дал мне семена коготков и винтиков, нет — гвоздиков! И я их посадил, и у меня теперь возле двери будет настоящий цветник — коготки и гвоздики. Или винтики.</p>
                <p>— Я думал, они называются ноготки, — неуверенно сказал Пятачок, не переставая прыгать, — а гвоздики… гвоздики — это, наверно, гвоздики!</p>
                <p>— Нет, — сказал Пух, — мои цветы называются коготки и винтики!</p>
                <p>Попрыгав хорошенько. Пятачок вытер лапки о живот и сказал: «Что мы теперь будем делать?», а Пух сказал: «Пойдем навестим Кенгу, Ру и Тигру», и Пятачок сказал: «Д-д-давай п-п-пойдем», — потому что он все еще немножко побаивался Тигру. Тигра был ужасно прыгучий, и у него была такая манера здороваться, что у вас потом всегда были полны уши песку, даже после того, как Кенга скажет: «Тигра, деточка, осторожно!» — и поможет вам встать.</p>
                <p>Они отправились в путь.</p>
                <p>А в этот самый день у Кенги было ужасно хозяйственное настроение. Она решила везде навести порядок и пересчитать все белье и выяснить, сколько осталось у нее кусков мыла, и сколько у Тигры осталось чистых салфеток, и сколько у Ру осталось чистых передников, так что она выставила их обоих из дому, снабдив Ру пакетом бутербродов с салатом, а Тигру пакетом бутербродов с рыбьим жиром, чтобы они могли славно провести время в Лесу.</p>
                <p>По дороге Тигра рассказывал Ру (которого это очень интересовало) обо всем, что умеют делать Тигры.</p>
                <p>— А летать они умеют? — спросил Ру.</p>
                <p>— Тигры-то? — сказал Тигра. — Летать? Тоже спросил! Они знаешь как летают!</p>
                <p>— О! — сказал Ру. — А они могут летать не хуже Совы?</p>
                <p>— Еще бы! — сказал Тигра. — Только они не хотят.</p>
                <p>— А почему они не хотят?</p>
                <p>— Ну, им это почему-то не нравится.</p>
                <p>Ру никак не мог этого понять, потому что ему-то ужасно хотелось полетать, но Тигра объяснил ему, что надо самому быть Тигрой, чтобы это понять.</p>
                <p>— А прыгать? — спросил Ру. — Могут Тигры прыгать, как Кенги?</p>
                <p>— Спрашиваешь! — сказал Тигра. — Еще как! Когда хотят, конечно.</p>
                <p>— Ой, как я люблю прыгать! — сказал Ру. — Давай посмотрим, кто дальше прыгнет — ты или я?</p>
                <p>— Конечно, я, — сказал Тигра, — только мы сейчас не будем задерживаться, а то еще опоздаем.</p>
                <p>— Куда опоздаем?</p>
                <p>— Туда, куда нам надо прийти вовремя. — сказал Тигра, ускоряя шаги. Вскоре они добрались до Шести Сосен.</p>
                <p>— А я умею плавать, — сообщил Ру, — я один раз упал в Реку и плавал. — А Тигры умеют плавать?</p>
                <p>— Конечно, умеют. Тигры все умеют.</p>
                <p>— А по деревьям они умеют лазить лучше, чем Пух? — спросил Ру, остановившись перед самой высокой из Шести Сосен и задрав голову.</p>
                <p>— По деревьям они лазят лучше всех на свете, — сказал Тигра, — гораздо лучше всяких Пухов!</p>
                <p>— А на это дерево они могут влезть?</p>
                <p>— Они всегда лазят как раз по таким деревьям, — сказал Тигра. — Целый день лазят: то вверх, то вниз.</p>
                <p>— Ой, Тигра, правда?</p>
                <p>— А вот сейчас увидишь, — сказал Тигра решительно, — садись ко мне на закорки и увидишь.</p>
                <p>Он внезапно почувствовал, что лазание по деревьям — это единственный талант тигров, в котором он действительно уверен.</p>
                <p>— Ой, Тигра! Ой, Тигра! Ой, Тигра! — пищал Крошка Ру в восторге. Он забрался Тигре на спину, и они полезли.</p>
                <p>До первого сучка Тигра радостно повторял (про себя): «А мы лезем!»</p>
                <p>Добравшись до следующего сучка, он с гордостью сказал (про себя): «Ну что, я зря говорил, что Тигры умеют лазить по деревьям?» Забравшись еще повыше он сказал (про себя): «Конечно, это не так легко, что говорить!…»</p>
                <p>А еще повыше он сказал:</p>
                <p>— Ведь слезать тоже придется. Задом.</p>
                <p>А еще — еще повыше:</p>
                <p>— И это будет трудновато…</p>
                <p>— Если не упасть…</p>
                <p>— А зато тогда это, кажется, будет совсем…</p>
                <p>— Легко!</p>
                <p>И как только он сказал «легко», ветка, на которой он стоял, внезапно сломалась, и он, чувствуя, что падает, едва-едва успел вцепиться в верхнюю ветку. Затем он медленно, медленно поднял голову, зацепился подбородком за эту ветку… Затем подтянул одну заднюю лапу… Потом другую… И, наконец он уселся на эту ветку, тяжело дыша и от души жалея, что он вместо всего этого не попробовал заняться плаванием.</p>
                <p>Ру слез с Тигры и уселся рядышком.</p>
                <p>— Ой, Тигра, — радостно сказал он, — мы уже на самой верхушке?</p>
                <p>— Нет, — сказал Тигра.</p>
                <p>— А мы полезем на верхушку?</p>
                <p>— Н-е-т, — проворчал Тигра.</p>
                <p>— У-у! — сказал Ру довольно грустно, но тут же радостно продолжал: — А здорово это у тебя получилось, когда ты стал понарошку падать, а потом взял и не упал. Давай еще разок?</p>
                <p>— Н-е-т!! — прорычал Тигра.</p>
                <p>Ру немного помолчал, а потом спросил:</p>
                <p>— А можно, мы съедим бутерброды, Тигра?</p>
                <p>— Давай. А где они? — спросил Тигра.</p>
                <p>— Они там внизу, под деревом.</p>
                <p>Тигра сказал:</p>
                <p>— Я думаю, мы лучше их побережем немного.</p>
                <p>Так они и сделали.</p>
                <p>Тем временем Винни-Пух и Пятачок продолжали свою прогулку. Пух в стихах сообщал Пятачку, что «неважно, чем он занят, так как он толстеть не станет, а ведь он толстеть не станет»; а Пятачок размышлял о том, скоро ли вырастет посаженный им желудь.</p>
                <figure class="wp-block-image">
                    <picture class="wp-image-36052">
                        <source class="lazy-load is-loaded" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh171.jpg.webp" type="image/webp" srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh171.jpg.webp" data-loaded="true"><img loading="lazy" width="238" height="159" src="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh171.jpg" alt="Винни-Пух и все-все-все - Алан Милн" class="wp-image-36052 lazy-load is-loaded" data-src="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh171.jpg" style="height: 159px;" data-loaded="true">
                    </picture>
                </figure>
                <p>— Пух, гляди, — неожиданно пискнул Пятачок, — там на Сосне кто-то сидит.</p>
                <p>— Верно, — сказал Пух, с интересом вглядываясь вдаль. — Там какой-то зверь.</p>
                <p>Пятачок схватил Пуха за лапу, очевидно, чтобы Пух не очень пугался.</p>
                <p>— Это какой-нибудь Хищный Зверь? — спросил он, стараясь смотреть в другую сторону.</p>
                <p>Пух кивнул.</p>
                <p>— Это Ягуляр, — сказал он.</p>
                <p>— А что Ягуляры делают? — спросил Пятачок, в глубине души надеясь, что сейчас они этого делать не будут.</p>
                <p>— Они прячутся на ветвях деревьев и оттуда бросаются на вас, когда вы стоите под деревом, — сказал Пух. — Кристофер Робин мне все-все про них рассказывал.</p>
                <p>— Тогда мы лучше не будем подходить к этому дереву, Пух, а то он еще бросится оттуда и ушибется.</p>
                <p>— Они не ушибаются, — сказал Пух, — они здорово умеют бросаться.</p>
                <p>Однако Пятачка это почему-то не утешило. Он все-таки чувствовал, что не стоит подходить к дереву, с которого, того гляди, кто-то бросится, хотя бы и очень умело, и он уже собирался побежать домой по какому-то очень срочному делу, когда Ягуляр подал голос.</p>
                <div class="ad-tag ad-can-close ad-in-content" ad-num="13">
                    <div class="ad-tag-inner">
                        <div class="ad-placeholder">
                            <div class="ad-placeholder-text placeholder-cite">
                                <div class="cite-text">Книги – самые тихие и самые постоянные друзья, они самые доступные и мудрейшие советники, и самые терпеливые учителя.</div>
                                <div class="cite-author">Чарльз Уильям Элиот</div>
                            </div>
                        </div>
                        <div class="MKN_ITA_300M actual-ad"></div>
                    </div><i class="ad-close-btn fa fa-times-thin fa-2x" aria-hidden="true"></i>
                </div>
                <p>— Помогите, помогите! — закричал он.</p>
                <p>— Ягуляры — они всегда так, — сказал Пух, довольный, что может блеснуть своими познаниями. — Они кричат: «Помогите, помогите», а когда вы посмотрите вверх — бросаются на вас.</p>
                <p>— Я смотрю вниз, вниз! — закричал Пятачок очень громко, чтобы Ягуляр по ошибке не сделал того, чего не надо.</p>
                <p>В ответ донесся чей-то восторженный писк с той самой ветки, где сидел Ягуляр:</p>
                <p>— Пух и Пятачок! Пух и Пятачок!</p>
                <p>И Пятачок неожиданно почувствовал, что сегодня прекрасный день, гораздо лучше, чем ему только что казалось. Такой солнечный, теплый денек!</p>
                <p>— Пух! — крикнул он. — По-моему, это Тигра и Ру.</p>
                <p>— По-моему, тоже, — сказал Пух. — А я думал, это Ягуляр и… и еще один Ягуляр.</p>
                <p>— Эй, Ру, — крикнул Пятачок, — что вы там делаете?</p>
                <p>— Мы не можем слезть! Мы не можем слезть! — кричал Ру. — Здорово, правда? Пух, вот здорово! Мы с Тигрой живем на дереве, как Сова! И мы теперь всегда тут будем жить! А я вижу дом Пятачка! Пятачок! Я отсюда твой дом вижу! Высоко мы забрались, правда? Сова и то ниже нас живет!</p>
                <p>— Как ты туда попал, Ру? — спросил Пятачок.</p>
                <p>— Меня Тигра привез! А Тигры вниз лазить не могут, потому что у них хвосты очень путаются между ног. Они только вверх умеют! А когда мы полезли, Тигра про это забыл, а сейчас он уже вспомнил, и мы тут теперь всегда-всегда будем жить. А может, еще выше залезем! Что ты сказал, Тигра? А-а! Тигра говорит, что, если мы заберемся выше, нам не так хорошо будет видно дом Пятачка, так что мы уж тут останемся.</p>
                <p>— Пятачок, — торжественно сказал Пух, выслушав все это, — что мы можем предпринять?</p>
                <p>И он принялся за бутерброды Тигры.</p>
                <p>— Они попались? — тревожно спросил Пятачок.</p>
                <p>Винни-Пух кивнул.</p>
                <p>— А ты не можешь влезть к ним?</p>
                <p>— Я могу, Пятачок. Я могу снять оттуда Крошку Ру, но Тигру я снять не могу, мне его не дотащить. Надо что-нибудь придумать.</p>
                <p>И в раздумье он начал жевать бутерброды Крошки Ру…</p>
                <p>Не знаю, может быть, Пух и успел бы что-нибудь придумать, доев последний бутерброд, но едва он за него принялся, как в кустах послышался треск и оттуда появились Иа и Кристофер Робин.</p>
                <p>— Нисколько не удивлюсь, если завтра выпадет град, — говорил Иа. — Того и жди. Бураны, вьюги и тому подобное. Сегодня, конечно, хорошая погода, но это еще ничего не значит; это еще не сулит хороших перспек… или как там это называется? Словом, ничего такого не сулит… Это просто небольшая порция погоды. И все тут.</p>
                <p>— А вот и Пух, — сказал Кристофер Робин. Ему, очевидно, было безразлично, что порция хорошей погоды не очень большая, лишь бы она была хорошая. — Здравствуй, Пух!</p>
                <p>— Это Кристофер Робин, — сказал Пятачок. — Вот он-то знает, что делать! Они помчались ему навстречу.</p>
                <p>— Ой, Кристофер Робин… — начал Пух.</p>
                <p>— А также Иа, — сказал Иа.</p>
                <p>— Тигра и Крошка Ру залезли прямо на Шесть Сосен и не могут слезть и…</p>
                <p>— А я как раз говорил, — перебил Пятачок, — что если только Кристофер Робин…</p>
                <p>— А также Иа-Иа, — сказал Иа, снова намекая, чтс с ним позабыли поздороваться.</p>
                <p>— Если бы только вы оба были здесь, то мы бы могли что-нибудь придумать! — сказали Пух и Пятачок.</p>
                <p>Кристофер Робин взглянул вверх, увидел Тигру и Крошку Ру и попытался что-нибудь придумать.</p>
                <p>— Я думаю, — сказал глубокомысленно Пятачок, — что если бы Иа встал под деревом, а Пух встал к нему на спину, а я встал на плечи Пуха…</p>
                <p>— И если бы спина Иа-Иа неожиданно треснула, то мы бы все здорово посмеялись. Ха-ха-ха! Как забавно! — сказал Иа. — Очень приятное развлечение, но боюсь, не особенно полезное.</p>
                <p>— Ну, — сказал Пятачок жалобно, — я только думал…</p>
                <p>— Ты думаешь, твоя спина сломалась бы Иа? — спросил ужасно удивленный Пух.</p>
                <p>— Заранее тут ничего сказать нельзя, милый Винни. И это, конечно, как раз самое интересное!</p>
                <p>Пух сказал: «Ох», и все снова принялись думать.</p>
                <p>— Ура, я придумал! — вдруг закричал Кристофер Робин.</p>
                <p>— Слушай внимательно, маленький Пятачок, — сказал Иа, — и ты скоро будешь знать, что мы намерены предпринять.</p>
                <p>— Я сниму рубашку, и мы все возьмем ее за края, и тогда Крошка Ру и Тигра могут туда прыгнуть, все равно как в гамак, они только покачаются и нисколько не ушибутся.</p>
                <p>— Как снять Тигру с дерева, — сказал Иа-Иа, — и никому не повредить! Придерживайся этих правил, уважаемый Пятачок, и все будет в порядке!</p>
                <p>Но уважаемый Пятачок ничего не слышал — так он волновался при мысли, что снова увидит голубые помочи Кристофера Робина. Он уже их видел однажды, когда был гораздо моложе, и пришел тогда в такое возбуждение, что его уложили спать на полчаса раньше обычного.</p>
                <p>И с тех пор он всегда мечтал проверить, действительно ли они такие голубые и такие помочные, как ему показалось.</p>
                <p>Поэтому, когда Кристофер Робин снял рубашку и ожидания Пятачка оправдались в полной мере, Пятачок на радостях простил Иа обиду, ласково улыбнулся ему и даже взялся за тот же край рубашки.</p>
                <p>А Иа шепнул ему:</p>
                <p>— Конечно, и теперь нельзя ручаться, что не произойдет несчастного случая. Несчастные случаи — очень странные штуки. Они обычно случаются совершенно случайно.</p>
                <p>Когда Крошка Ру понял, что ему нужно сделать, он пришел в безумный восторг и запищал:</p>
                <p>— Тигра, Тигра, мы сейчас будем прыгать! Ты погляди, как я прыгаю! Я сейчас просто полечу, вот увидишь. А Тигры так могут? Кристофер Робин! Я пошел! — крикнул он, прыгнул — и угодил в самый центр спасательной рубашки.</p>
                <p>Летел он так быстро, что его снова подбросило почти на такую же высоту и он еще долго продолжал подлетать вверх, приговаривая: «О, о!»</p>
                <p>Наконец он остановился и сказал: «Ой, как здорово!» — и его опустили на землю.</p>
                <p>— Давай, Тигра! — крикнул он. — Это очень просто!</p>
                <p>Но Тигра изо всей силы держался за ветку и говорил про себя: «Конечно, прыгающим животным, вроде Кенги, это хорошо, но для плавающих животных, вроде Тигров, это совершенно другое дело».</p>
                <p>И он почему-то вдруг представил себе, как он плывет на спинке вниз по течению или весело ныряет в прохладной влаге реки, и почувствовал, что это и есть настоящая жизнь для Тигры.</p>
                <p>— Давай, давай! — крикнул Кристофер Робин. — Не бойся.</p>
                <figure class="wp-block-image">
                    <picture class="wp-image-36053">
                        <source class="lazy-load is-loaded" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh813.jpg.webp" type="image/webp" srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh813.jpg.webp" data-loaded="true"><img loading="lazy" width="404" height="317" src="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh813.jpg" alt="Винни-Пух и все-все-все - Алан Милн" class="wp-image-36053 lazy-load is-loaded" sizes="(max-width: 404px) 100vw, 404px" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh813.jpg 404w, https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh813-255x200.jpg 255w" data-src="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh813.jpg" style="height: 317px;" srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh813.jpg 404w, https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh813-255x200.jpg 255w" data-loaded="true">
                    </picture>
                </figure>
                <p>— Сейчас, минуточку, — нервно сказал Тигра, — мне что-то в глаз попало! И он медленно, медленно пополз по ветке.</p>
                <p>— Давай, давай, это очень просто! — пропищал Крошка Ру.</p>
                <p>И вдруг Тигра почувствовал, как это просто.</p>
                <p>— Ой! — крикнул он, видя, как дерево проносится мимо него.</p>
                <p>— Берегитесь! — крикнул Кристофер Робин спасателям.</p>
                <p>Раздался стук, треск разрываемой ткани, и на земле образовалась куча мала. Кристофер Робин, Пух и Пятачок поднялись первыми, потом они подняли Тигру, а в самом низу был, конечно, Иа-Иа.</p>
                <p>— Ой, Иа! — крикнул Кристофер Робин, — Тебе не больно? — Он заботливо ощупал ослика, стряхнул с него пыль и помог ему встать на ноги.</p>
                <p>Иа-Иа долгое время ничего не говорил.</p>
                <p>Потом он спросил:</p>
                <p>— Тигра здесь?</p>
                <p>Тигра был здесь и снова в прекрасном настроении.</p>
                <p>— Да, — сказал Кристофер Робин, — Тигра здесь.</p>
                <p>— Что ж, тогда поблагодарите его от моего имени — сказал Иа.</p><a rel="nofollow" class="kc-gotop kc__gotop" href="#kcmenu">к оглавлению ↑</a>
                <h2 id="glava-chetyrnadtsataya-v-kotoroj-vinni-puh-izobretaet-novuyu-igru-i-v-">ГЛАВА ЧЕТЫРНАДЦАТАЯ, в которой Винни-Пух изобретает новую игру и в неё включается Иа-Иа</h2>
                <p>К тому времени, когда речка добралась до края Леса, она очень выросла — выросла в настоящую Реку. И, сделавшись взрослой, она перестала прыгать, скакать и вертеться, как вначале, в детстве, а двигалась плавно и медленно. Ведь теперь она знала, куда идет, и говорила себе: «Спешить незачем. Когда-нибудь все там будем». Зато все впадавшие в нее маленькие ручейки носились по Лесу взад и вперед без устали, мелькали то тут, то там — ведь им надо было так много, так много увидеть и узнать!</p>
                <p>Широкая тропа — пожалуй, ее можно было даже назвать дорогой — вела из Внешнего Мира в Лес, но, перед тем как попасть в Лес, ей надо было перебраться через эту Реку. И там, где Река и Дорога встречались, был деревянный мостик, почти такой же ширины, как сама дорога, с деревянными перилами по обеим сторонам. Кристофер Робин, пожалуй, мог положить подбородок на верхнюю перекладину перил, если бы захотел: но гораздо интереснее было встать на нижнюю перекладину, наклониться пониже и смотреть на Реку, медленно скользившую куда-то. Винни-Пух, если бы захотел, пожалуй, мог положить свой подбородок на нижнюю перекладину, но куда интереснее было лечь на животик, просунуть голову под перекладину и смотреть, как внизу медленно скользит Река. Для Пятачка же и Крошки Ру это был единственный способ полюбоваться Рекой, потому что они были такие маленькие, что никак не доставали даже до нижней перекладины. Они ложились под перекладину и смотрели на Реку…</p>
                <p>А Река текла и текла, медленно и плавно — ведь спешить ей было некуда.</p>
                <p>Однажды по пути к мостику Винни-Пух старался сочинить какой-нибудь стишок про шишки, потому что кругом валялось множество шишек, а у Винни было поэтическое настроение. Он взял одну шишку посмотрел на нее и сказал про себя: «Это очень хорошая шишка, и, конечно, она должна с чем-нибудь рифмоваться». Сперва он ничего не мог придумать, а потом ему вдруг пришло в голову вот что:</p>
                <figure class="wp-block-image">
                    <picture class="wp-image-36054">
                        <source class="lazy-load is-loaded" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh3-1.jpg.webp" type="image/webp" srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh3-1.jpg.webp" data-loaded="true"><img loading="lazy" width="356" height="272" src="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh3-1.jpg" alt="Винни-Пух и все-все-все - Алан Милн" class="wp-image-36054 lazy-load" sizes="(max-width: 356px) 100vw, 356px" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh3-1.jpg 356w, https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh3-1-262x200.jpg 262w" data-src="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh3-1.jpg" style="height: 272px;" srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh3-1.jpg 356w, https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh3-1-262x200.jpg 262w" data-loaded="true">
                    </picture>
                </figure>
                <p><em>Ах, растут на елке шишки</em></p>
                <p><em>Не для плюшевого Мишки!</em></p>
                <p> — Хотя это неправильно, — сказал он, — потому что шишки мне могут пригодиться, а потом мы с ними хорошо рифмуемся! «Мишки — шишки»!</p>
                <p>Тут ему пришел в голову новый стишок:</p>
                <p><em>Не странно ли, что Волки</em></p>
                <p><em>Не могут жить на елке?</em></p>
                <p> — Хотя «Волки — елки» тоже хорошо рифмуются, — пояснил Пух и продолжал:</p>
                <p><em>Живут на елках белки-</em></p>
                <p><em>Хоть елки и не елки!</em></p>
                <p>Тем временем Винни как раз подошел к мосту. И так как он не смотрел себе под ноги, он споткнулся, шишка выскользнула из его лап и упала в воду.</p>
                <p>— Обидно! — сказал Пух, глядя, как шишка медленно проплывает в сторону моста. Он хотел сходить за новой шишкой, которую тоже можно было срифмовать, но потом подумал, что лучше он просто поглядит на Реку, потому что денек такой славный; Винни-Пух лег на пузо и стал смотреть на Реку, а она медленно, плавно скользила вдаль…</p>
                <p>И вдруг из-под моста появилась его шишка, тоже медленно, плавно скользившая вдаль.</p>
                <p>— Как интересно! — сказал Пух. — Я уронил ее с той стороны, а она выплыла с этой! Интересно, все шишки так делают?</p>
                <p>Он пошел и набрал еще шишек.</p>
                <p>Да. Они все так делали.</p>
                <p>Тогда он бросил две шишки сразу и стал ждать, какая из них выплывет первой. И одна из них выплыла первой, но, так как они были одинакового размера, Пух не знал, была ли это та, которую он задумал, или другая. Тогда в следующий раз он бросил одну большую, а другую маленькую, и большая выплыла первой, как он и думал, а маленькая выплыла последней, как он тоже думал, так что он выиграл два раза!…</p>
                <p>И к тому времени, когда Винни пошел домой пить чай, он уже выиграл тридцать шесть раз и проиграл двадцать восемь. Иными словами, он выиграл… Ну, отнимите сами двадцать восемь от тридцати шести, и вы узнаете, сколько раз он выиграл. Или — сколько раз он проиграл, если это вам интереснее.</p>
                <p>Так появилась на свет игра, которую потом назвали игрой в «Пушишки», в честь Винни-Пуха, который ее изобрел и научил играть в нее своих друзей. Только потом они стали играть палочками вместо шишек, потому что палочки легче различать, а игру назвали просто «Игрой в Пустяки», и в этом названии от Пуха осталось только «Пу», а от шишек вообще ничего не осталось.</p>
                <p>И вот однажды Пух, и Пятачок, и Кролик, и Крошка Ру играли в Пустяки; они бросали палочки по команде Кролика, а потом стремглав мчались на другую сторону моста, и все глядели вниз, ожидая, чья палочка выплывет первой. Ждать приходилось подолгу, потому что Река была в этот день очень ленива и, казалось, вообще не думала о том, чтобы двигаться к цели.</p>
                <p>— А вот моя! — крикнул Крошка Ру. — Нет, не моя, это чья-то другая. Это не твоя, Пятачок? Я думал, это моя, а это не моя. Вот она! Нет, не она! Это не твоя, Пух?</p>
                <p>— Нет, — отвечал Винни-Пух.</p>
                <p>— Наверно, моя палка пропала, — сказал Ру. — Кролик, моя палка — пропалка! Пятачок, а твоя палка — пропалка?</p>
                <p>— Они всегда заставляют ждать дольше, чем вы думаете, — сказал Кролик.</p>
                <p>— А сколько, ты думаешь, они заставят ждать? — спросил Ру.</p>
                <p>— Вон твоя, Пятачок, — вдруг сказал Винни-Пух.</p>
                <p>— Моя такая сероватая, — сказал Пятачок, сам не решаясь высунуться дальше из боязни свалиться в Реку.</p>
                <p>— Да, да, ее я и вижу, она плывет в мою сторону.</p>
                <p>Кролик высунулся дальше всех, высматривая свою палочку; Крошка Ру прыгал, как заводной, пища: «Палка, палка, поскорей! Палка, палка, поскорей!» — и Пятачок тоже ужасно взволновался, потому что ведь показалась только его палочка, а это означало, что он выигрывает.</p>
                <figure class="wp-block-image">
                    <picture class="wp-image-36055">
                        <source class="lazy-load is-loaded" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh88.jpg.webp" type="image/webp" srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh88.jpg.webp" data-loaded="true"><img loading="lazy" width="401" height="459" src="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh88.jpg" alt="Винни-Пух и все-все-все - Алан Милн" class="wp-image-36055 lazy-load is-loaded" sizes="(max-width: 401px) 100vw, 401px" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh88.jpg 401w, https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh88-175x200.jpg 175w" data-src="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh88.jpg" style="height: 459px;" srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh88.jpg 401w, https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh88-175x200.jpg 175w" data-loaded="true">
                    </picture>
                </figure>
                <p>— Выплывает! Вот она, — сказал Пух.</p>
                <p>— А ты уверен, что это моя? — взволнованно запищал Пятачок.</p>
                <p>— Да, потому что она большая и серая. Вот она плывет. Очень большая, серая… Ой, нет, это не она. Это Иа-Иа!</p>
                <p>И из-под моста выплыл Иа-Иа.</p>
                <p>— Иа! — закричали все разом.</p>
                <p>Да, спокойно и величественно, задрав в небо все четыре ноги, по реке плыл Иа-Иа.</p>
                <p>— Это Иа! — запищал Крошка Ру вне себя от волнения.</p>
                <p>— Неужели? — отозвался Иа. Он попал в небольшой водоворот и трижды плавно повернулся вокруг своей оси. — А я-то думал: «Кто это?»</p>
                <p>— Я не знал, что ты тоже играешь, — сказал Крошка Ру.</p>
                <p>— Я не играю, — ответил Иа.</p>
                <p>— А что же ты там делаешь? — спросил Кролик.</p>
                <p>— Можешь отгадывать до трех раз, Кролик. Рою землю? Неправильно. Прыгаю по веткам молодого дуба? Нет, неправильно. Жду, чтобы мне кто-нибудь помог выбраться из реки? Теперь правильно! Дайте Кролику время подумать, и он всегда все отгадает.</p>
                <p>— Ой, Иа, — сказал Пух растерянно. — А что ж мы… я хочу сказать, как же мы… ты думаешь, если мы…</p>
                <p>— Да, — сказал Иа. — Конечно! Один из этих вариантов будет абсолютно правилен. Спасибо тебе, Пух.</p>
                <p>— Ой, он плывет все кругом и кругом, — сказал Крошка Ру, совершенно захваченный этим зрелищем.</p>
                <p>— Почему бы и нет? — холодно отвечал Иа.</p>
                <div class="ad-tag ad-can-close ad-in-content" ad-num="14">
                    <div class="ad-tag-inner">
                        <div class="ad-placeholder">
                            <div class="ad-placeholder-text placeholder-cite">
                                <div class="cite-text">Зорко одно лишь сердце. Самого главного глазами не увидишь.</div>
                                <div class="cite-author">Маленький принц</div>
                            </div>
                        </div>
                        <div class="MKN_ITA_300M actual-ad"></div>
                    </div><i class="ad-close-btn fa fa-times-thin fa-2x" aria-hidden="true"></i>
                </div>
                <p>— Я тоже умею плавать, — гордо сказал Крошка Ру.</p>
                <p>— Но не кругом, — сказал Иа. — Кругом гораздо труднее. Я сегодня вообще не собирался плавать, — продолжал он, медленно вращаясь, — но уж если пришлось, то, мне кажется, легкое вращательное движение справа налево… Или, может быть, вернее сказать, — добавил он, попав в следующий водоворот, — слева направо… При всех обстоятельствах это мое личное дело.</p>
                <p>Наступило молчание. Все задумались.</p>
                <p>— Я, кажется, вроде как придумал, — сказал наконец Винни-Пух. — Но я не уверен, что это будет хорошо.</p>
                <p>— Я тоже, — сказал Иа.</p>
                <p>— Выкладывай, Пух, — сказал Кролик. — Говори.</p>
                <p>— Ну, если мы все будем бросать камни и всякие вещи в реку, с одного боку Иа подымутся волны, и эти волны прибьют Иа к берегу.</p>
                <p>— Это очень хорошая Идея, — сказал Кролик.</p>
                <p>И Винни-Пух снова повеселел.</p>
                <p>— Очень, — сказал Иа. — Когда я захочу, чтобы меня прибили, Винни-Пух, я вам сообщу.</p>
                <p>— А вдруг мы случайно попадем в него? — тревожно спросил Пятачок.</p>
                <p>— Или вдруг мы случайно не попадем в него! — сказал Иа. — Обдумай все эти возможности, Пятачок, прежде чем вы начнете развлекаться.</p>
                <p>Но Винни-Пух уже притащил самый большой камень, какой только мог поднять, и склонился над водой, держа его в лапках.</p>
                <p>— Я его не брошу, я его просто уроню, Иа, — объяснил он. — И тут уж я не промахнусь, то есть я хочу сказать, что я не попаду в тебя. Ты не можешь на минутку перестать вертеться, а то меня это сбивает?</p>
                <p>— Нет, — сказал Иа. — Мне нравится вертеться.</p>
                <p>Кролик почувствовал, что пора ему взять на себя командование.</p>
                <p>— Ну, Пух, — сказал он, — когда я скажу «Пора!» ты можешь пускать камень. Иа-Иа, когда я крикну «Пора!», Пух пустит свой камень.</p>
                <p>— Большое спасибо, Кролик, но я полагаю, что я это узнаю и без тебя.</p>
                <p>— Пух, ты готов? Пятачок, отодвинься немного от Пуха, ты ему мешаешь. Ру, чуть-чуть назад. Вы готовы?</p>
                <p>— Нет, — сказал Иа.</p>
                <p>— Пора! — крикнул Кролик.</p>
                <p>Пух отпустил камень. Раздался громкий всплеск, и Иа-Иа исчез…</p>
                <p>Момент был волнующий, особенно для наблюдателей на мосту. Они глядели во все глаза… И даже вид, палочки Пятачка, которая выплыла чуть-чуть впереди Кроличьей палочки, не так развеселил их, как вы могли бы ожидать. А потом — как раз в тот самый момент, когда Пух уже начал думать, что, наверно, он выбрал неправильный камень или неправильную реку, или неправильный день для своей Идеи, — что-то серое появилось на прибрежной отмели…</p>
                <p>Постепенно оно становилось все больше и больше… и наконец стало ясно, что это Иа-Иа, который выходил из воды.</p>
                <p>С дружным воплем все кинулись с моста; они тащили, и тянули, и подталкивали Иа, и вскоре он встал на твердую почву.</p>
                <p>— Ой, Иа, до чего же ты мокрый! — сказал Пятачок, пощупав его.</p>
                <p>Иа отряхнулся и попросил кого-нибудь объяснить Пятачку, что происходит, когда вы находитесь в воде довольно долгое время.</p>
                <p>— Молодец, Пух! — великодушно сказал Кролик. — Да, нам с тобой пришла в голову неплохая Идея!</p>
                <p>— Какая Идея? — спросил Иа.</p>
                <p>— Прибить тебя вот так к берегу.</p>
                <p>— Прибить меня? — сказал Иа удивленно. — Прибить меня? Вы что думаете — меня прибили? Да? Я просто нырнул! Пух запустил в меня огромным камнем, и, чтобы избежать тяжелого удар в грудь, я нырнул и подплыл к берегу.</p>
                <p>— Это неправда, — шепнул Пятачок Пуху, чтобы его утешить.</p>
                <p>— По-моему, тоже, — нерешительно сказал Пух.</p>
                <p>— Иа — он всегда так, — сказал Пятачок. — Я лично считаю, что ты очень хорошо придумал!</p>
                <p>Пух немного утешился. Ведь если вы Медведь с опилками в голове и думаете о делах, вы иногда с огорчением обнаруживаете, что мысль, которая казалась вам очень дельной, пока она была у вас в голове, оказывается совсем не такой, когда она выходит наружу и на нее смотрят другие. Но, как бы то ни было, Иа был в Реке, а теперь его там не было, так что ничего плохого Пух не сделал.</p>
                <p>— Как же ты упал туда, Иа? — спросил Кролик, вытирая его носовым платком Пятачка.</p>
                <p>— Я не упал, — отвечал Иа.</p>
                <p>— А как же…</p>
                <p>— На меня НАСКОЧИЛИ, — сказал Иа.</p>
                <p>— Ой, — запищал взволнованный Ру, — тебя кто-нибудь толкнул?</p>
                <p>— Кто-то НАСКОЧИЛ на меня. Я стоял на берегу реки и размышлял, размышлял — я надеюсь, кто-нибудь из вас понимает это слово, — как вдруг я ощутил СИЛЬНЫЙ НАСКОК.</p>
                <p>— Ой, Иа! — ахнуло все общество.</p>
                <p>— А ты уверен, что ты не поскользнулся? — рассудительно спросил Кролик.</p>
                <p>— Конечно, я поскользнулся. Если вы стоите на скользком берегу реки и кто-то внезапно НАСКОЧИТ на вас сзади, вы поскользнетесь. А что вы еще можете предложить?</p>
                <p>— Но кто это сделал? — спросил Ру.</p>
                <p>Иа не ответил.</p>
                <p>— Наверно, это был Тигра, — с тревогой сказал Пятачок.</p>
                <p>— Слушай, Иа, — спросил Пух, — он шутил или он нарочно? Я хочу сказать…</p>
                <p>— Я сам об этом все время спрашиваю, медвежонок Пух. Даже на самом дне реки я не переставал спрашивать себя: «Что это — дружеская шутка или обдуманное нападение?» И когда я всплыл на поверхность, я ответил себе: «Мокрое дело». Надеюсь, вы понимаете, что я имею в виду.</p>
                <p>— А где был Тигра? — спросил Кролик.</p>
                <p>Прежде чем Иа успел ответить, раздался громкий треск, и из камышей появился Тигра собственной персоной.</p>
                <p>— Всем привет! — весело сказал Тигра.</p>
                <p>— Здравствуй, Тигра! — сказал Крошка Ру. Кролик вдруг ужасно надулся.</p>
                <p>— Тигра, — сказал он торжественно, — будь любезен, объясни нам, что сейчас произошло?</p>
                <p>— Когда сейчас? — ответил Тигра, слегка смутившись.</p>
                <p>— Когда ты наскочил на Иа и столкнул его в реку.</p>
                <p>— Я на него не наскакивал.</p>
                <p>— Ты на меня наскочил, — мрачно сказал Иа.</p>
                <p>— Нет, не наскакивал. У меня просто был кашель и я стоял случайно сзади Иа, и я сказал: ГРРРРР-ОПП-ПШШ-ШШЦ!»</p>
                <p>— Ты что, Пятачок? — спросил Кролик, помогая Пятачку встать и отряхнуть пыль. — Все в порядке?</p>
                <p>— Это я от неожиданности, — сказал Пятачок дрожащим голосом.</p>
                <p>— Вот это я и называю НАСКАКИВАТЬ, — сказал Иа, — налетать на людей неожиданно. Очень неприятная привычка. У меня нет возражений против пребывания Тигры в Лесу, — продолжал он, — потому что это большой Лес и в нем сколько угодно места для того, чтобы прыгать и скакать. Но я не понимаю, зачем он должен приходить в мой маленький уголок Леса и НАСКАКИВАТЬ на меня. Главное, что в моем уголке нет ничего особенно достопримечательного. Конечно, для тех, кто любит холод, сырость и колючки, в нем есть известная прелесть, но во всех остальных отношениях это самый обычный уголок, и если кому-нибудь пришла охота наска…</p>
                <p>— Я не наскакивал, я кашлял, — сказал Тигра упрямо.</p>
                <p>— На дне реки в этом трудно разобраться, — заметил Иа.</p>
                <p>— Так вот, — сказал Кролик, — все, что я мог сказать по этому поводу… Ах, вот идет Кристофер Робин, так что пусть он это скажет.</p>
                <p>Кристофер Робин шел по лесной дорожке в таком солнечном и безоблачном настроении, как будто бы, например, дважды девятнадцать — это пустяки, и думал о том, что, если он в такой день встанет на нижнюю перекладину перил моста и наклонится над рекой, он вдруг узнает все-все на свете и тогда он расскажет все это Пуху, который пока еще знает не все на свете. Но когда он подошел к мосту и увидел всех своих друзей, он понял, что сегодня совсем не такой день. а совершенно другой — день, когда нужно что-то сделать.</p>
                <p>— История такова, Кристофер Робин, — начал Кролик. — Тигра…</p>
                <p>— Ничего подобного, — сказал Тигра.</p>
                <p>— Как бы то ни было, я оказался там, — сказал Иа.</p>
                <p>— Но он же, наверно, не хотел этого, — сказал Пух.</p>
                <p>— Он просто такой прыгучий, — сказал Пятачок, — от природы.</p>
                <p>— А ну попробуй наскочи на меня, Тигра. — с жаром заявил Крошка Ру. — Иа, Тигра сейчас попробует наскочить на меня. Пятачок, ты как думаешь, кто…</p>
                <p>— Ну, ну, — сказал Кролик, — я думаю, мы откажемся от мысли говорить всем сразу. Вопрос в том, что думает об этом Кристофер Робин.</p>
                <p>— Я просто кашлянул, — сказал Тигра.</p>
                <p>— Он наскочил, — сказал Иа.</p>
                <p>— Ну, может быть, я немножко кашкочил сказал Тигра.</p>
                <p>— Тихо, — сказал Кролик, подняв лапку. — Что думает обо всем этом Кристофер Робин? Вот в чем вопрос.</p>
                <p>— Ну, — сказал Кристофер Робин, не очень понимая, о чем идет речь. — Я думаю…</p>
                <p>— Ну-ну? — сказали все.</p>
                <p>— Я думаю, что мы все сейчас пойдем играть в Пустяки.</p>
                <p>Так они и сделали. И представьте себе, что Иа который никогда раньше не играл в эту игру, выигрывал чаще всех!</p>
                <p>А Крошка Ру два раза свалился в реку. Первый раз случайно, а второй раз нарочно, потому что он увидел, что из Лесу выходит Кенга, и понял, что ему все равно придется сейчас отправляться спать. Кролик сказал, что он пойдет с ним, Тигра и Иа-Иа тоже ушли вместе, потому что Иа решил объяснить Тигре, как выигрывать в Пустяки («Надо пускать палочку с подковыркой, если ты понимаешь, что я хочу сказать, Тигра»), а Кристофер Робин, и Пух, и Пятачок остались на мосту.</p>
                <p>Долгое время они глядели вниз на реку, ничего не говоря, и Река тоже ничего не говорила, потому что ей было очень спокойно и хорошо в этот солнечный полдень.</p>
                <p>— Тигра, в общем, настоящий парень, — сказал Пятачок.</p>
                <p>— Конечно, — сказал Кристофер Робин.</p>
                <p>— Вообще все мы настоящие ребята, — сказал Пух. — Я так думаю, — добавил он. — Но я не уверен, что я прав.</p>
                <p>— Конечно, ты прав, — сказал Кристофер Робин.</p><a rel="nofollow" class="kc-gotop kc__gotop" href="#kcmenu">к оглавлению ↑</a>
                <h2 id="glava-pyatnadtsataya-v-kotoroj-tigru-ukroshhayut">ГЛАВА ПЯТНАДЦАТАЯ, в которой Тигру укрощают</h2>
                <p>Кролик и Пятачок сидели возле парадной двери дома Винни-Пуха и слушали, что говорит Кролик. Винни-Пух тоже сидел с ними. Был дремотный летний полдень, и Лес был полон тихих, неясных звуков, и все они, казалось, говорили Пуху: «Не слушай Кролика. Слушай меня». Поэтому Винни занял самую удобную позицию для того, чтобы не слушать Кролика, и лишь время от времени открывал глаза и говорил: «Ах», а потом закрывал глаза снова и говорил: «Верно, верно!» Сам же Кролик то и дело очень серьезно спрашивал: «Ты понимаешь, что я имею в виду, Пятачок?», а Пятачок не менее серьезно кивал в ответ, чтобы показать, что он все-все понимает.</p>
                <p>— Словом, — сказал Кролик, добравшись наконец до конца, — Тигра в последнее время стал таким большим Выскочкой, что нам пора его укротить. А ты как считаешь, Пятачок?</p>
                <p>Пятачок сказал, что Тигра действительно ужасно большой Выскочка, и если можно придумать, как его укротить, это будет Очень Хорошая Мысль.</p>
                <p>— Я того же мнения, — сказал Кролик. — А ты что скажешь, Пух?</p>
                <p>Пух, вздрогнув, открыл глаза и сказал:</p>
                <p>— Крайне?</p>
                <p>— Что крайне? — спросил Кролик.</p>
                <p>— То, что ты говорил, — сказал Пух. — Обсалютно!</p>
                <p>Пятачок толкнул Пуха локтем в бок, и Пух, который все больше и больше чувствовал, что его куда-то уносит, медленно поднялся и начал приходить в себя.</p>
                <p>— Но как нам это сделать? — спросил Пятачок.</p>
                <p>— Нам надо дать ему хороший урок! — решительно сказал Кролик.</p>
                <p>— Какой урок, Кролик?</p>
                <p>— В этом-то и вопрос, — сказал Кролик.</p>
                <p>Слово «урок» пробудило в Винни-Пухе какие-то неясные воспоминания.</p>
                <p>— Там была такая штука, которая называется «Ждыдва» и еще «Юпять», — сказал он. — Кристофер Робин как-то попытался познакомить меня с ними, но только не вышло.</p>
                <p>— Что не вышло? — спросил Кролик.</p>
                <p>— Кто не вышел? — спросил Пятачок.</p>
                <p>Пух покачал головой.</p>
                <p>— Я не знаю, — сказал он. — Наверно, ничего не вышло. А о чем мы говорим?</p>
                <p>— Пух, — сказал Пятачок укоризненно. — Ты что, не слушал, о чем говорил Кролик?</p>
                <p>— Я слушал, но мне попала в ухо какая-то меховинка. Повтори, пожалуйста, Кролик, ладно?</p>
                <p>Кролик всегда был готов повторять все, что угодно, поэтому он спросил только, с какого места ему начинать, и Винни-Пух ответил, что, конечно, с того места, где мех попал ему в ухо. Тогда Кролик спросил, когда это было.</p>
                <p>Пух ответил, что он точно не знает, потому что он не очень внимательно слушал.</p>
                <p>Но тут Пятачок уладил дело, сказав, что они просто хотели придумать, как им отучить Тигру быть Выскочкой, потому что хотя мы его все любим, но нельзя отрицать, что он ужасный Выскочка.</p>
                <p>— А-а, понимаю! — сказал Пух.</p>
                <p>— Он слишком много прыгает, — сказал Кролик, — и он у нас допрыгается!</p>
                <p>Пух попытался подумать, но все, что приходило ему в голову, было совершенно бесполезно. И он тихонько засопел вот что:</p>
                <p><em>Если бы Кролик Был покрупнее,</em></p>
                <p><em>Если бы Тигра Был посмирнее,</em></p>
                <p><em>Глупые игры</em></p>
                <p><em>Нашего Титры</em></p>
                <p><em>Кролика бы</em></p>
                <p><em>Не смущали нисколько, —</em></p>
                <p><em>Если бы только…</em></p>
                <p><em>Если бы только…</em></p>
                <p><em>Если бы только</em></p>
                <p><em>Нашему кролику</em></p>
                <p><em>Росту прибавить</em></p>
                <p><em>Хоть малую толику!</em></p>
                <p> — Что там Пух сопит? — спросил Кролик. — Что-нибудь толковое?</p>
                <p>— Нет, — сказал Пух грустно. — Бестолковое.</p>
                <p>— Ну, а у меня есть Идея, — сказал Кролик. — Вот какая: мы возьмем Тигру в поход, заведем его куда-нибудь, где он никогда не был, и как будто потеряем его там, а на следующее утро мы опять его найдем и тогда — заметьте себе мои слова, — тогда Тигра будет уже совершенно не тот.</p>
                <p>— Почему? — спросил Винни-Пух.</p>
                <p>— Потому что он будет Скромный Тигра. Потому что он станет Грустным Тигрой, Маленьким Тигрой, Тихим и Вежливым Тигрой, Смирным Тигрой, Тигрой, который говорит: «Милый Кролик, как я рад тебя видеть!» Вот почему.</p>
                <p>— А будет он рад видеть меня и Пятачка?</p>
                <p>— Конечно!</p>
                <p>— Это хорошо, — сказал Пух.</p>
                <p>— Но я бы не хотел, чтобы он все время был Грустным. — сказал Пятачок нерешительно.</p>
                <p>— А Тигры никогда не бывают все время грустными, — успокоил его Кролик. — Они удивительно легко снова приходят в хорошее настроение. Я как раз спрашивал Сову — просто для проверки, — и она подтвердила, что они удивительно легко приходят в него. Но если нам удастся заставить Тигру побыть Маленьким и Грустным хотя бы пять минут, мы уже сделаем доброе дело.</p>
                <p>— А что сказал бы об этом Кристофер Робин? — спросил Пятачок.</p>
                <p>— Вот что, — сказал Кролик. — Он сказал бы: «Пятачок, ты сделал доброе дело. Я бы сам его сделал, если бы я не был так занят. Спасибо тебе, Пятачок. И Пуху спасибо, конечно».</p>
                <p>Пятачок ужасно обрадовался и окончательно поверил, что они затеяли доброе дело, а раз и Винни-Пух и Кролик будут в нем участвовать, то в этом добром деле может участвовать даже и Очень Маленькое Существо и перед этим спокойно выспаться.</p>
                <p>После этого осталось разрешить единственный вопрос — где им как будто потерять Тигру?</p>
                <p>— Мы заведем его к Северному Полюсу, — сказал Кролик, — потому что ведь Северный Полюс мы очень долго открывали, значит, Тигре придется очень, очень, очень долго его закрывать! Ха-ха-ха!</p>
                <p>Тут пришла очередь обрадоваться Винни-Пуху, потому что ведь это он первый нашел Северный Полюс, и, когда они придут туда, Тигра увидит надпись, которая гласит:</p>
                <p>ОТКРЫТ ВИННИ-ПУХОМ, ПУХ ЕГО НАШЕЛ.</p>
                <p>И тогда Тигра будет знать то, чего он сейчас, по-видимому, не знает, а именно, с каким медведем он имеет дело. С Ай-да-Медведем!</p>
                <p>Было решено, что они выступят в поход завтра утром и что Кролик, который жил неподалеку от Кенги, Ру и Тигры, пойдет сейчас домой и спросит Тигру, что он завтра собирается делать, потому что если он ничего не собирается, то как насчет того, чтобы отправиться на прогулку и захватить с собой Пуха и Пятачка? И если Тигра скажет: «Да», то все в порядке, а если он скажет: «Нет»…</p>
                <p>— Он не скажет, — сказал Кролик. — Положитесь на меня!</p>
                <p>И он отправился в путь, не теряя времени. Назавтра погода очень изменилась. Можно сказать, что она превратилась в непогоду. Вместо солнца и тепла — холод и туман.</p>
                <p>Самому-то Пуху было не страшно, но когда он себе представил весь мед, который пчелы не сделают в этот день, ему стало их страшно жалко. Он сообщил это Пятачку, когда тот зашел за ним, а Пятачок сказал, что он думал не столько об этом, сколько о том, как холодно и грустно будет тому, кого как-будто потеряют в этот день в чаще Леса. Но когда они с Пухом подошли к дому Кролика, Кролик сказал им, что день самый подходящий для их затеи, потому что Тигра всегда выскакивает вперед, и как только он скроется из виду, они все убегут в сторону и он никогда их больше не увидит.</p>
                <div class="ad-tag ad-can-close ad-in-content" ad-num="15">
                    <div class="ad-tag-inner">
                        <div class="ad-placeholder">
                            <div class="ad-placeholder-text placeholder-cite">
                                <div class="cite-text">Наконец он все же набрался храбрости настолько, что решился признаться в собственной трусости.</div>
                                <div class="cite-author">Незнайка на Луне</div>
                            </div>
                        </div>
                        <div class="MKN_ITA_300M actual-ad"></div>
                    </div><i class="ad-close-btn fa fa-times-thin fa-2x" aria-hidden="true"></i>
                </div>
                <p>— Совсем никогда? — спросил Пятачок.</p>
                <p>— Да нет, до тех пор, пока мы не найдем его, Пятачок. До завтра или до еще когда-нибудь. Пошли. Он нас ждет.</p>
                <p>Когда они подошли к дому Кенги, оказалось, что Крошка Ру, ближайший друг Тигры, тоже их ждет, и это портило все дело; но Кролик, прикрыв рот лапкой, шепнул Пуху: «Положитесь на меня», — и подошел к Кенге.</p>
                <p>— Я думаю, что Ру лучше сегодня не ходить, — сказал он. — Сегодня не стоит.</p>
                <p>— Почему? — спросил Ру. (Хотя предполагалось, что он не слышит.)</p>
                <p>— Ужасный день, — сказал Кролик, качая головой. — Промозглая сырость. Холод. А ты сегодня утром кашлял.</p>
                <p>— Откуда ты знаешь? — с негодованием спросил Крошка Ру.</p>
                <p>— Дорогой мой, а ты мне даже не сказал! — укоризненно сказала Кенга.</p>
                <p>— Это был Бисквитный Кашель, — сказал Ру. — Бисквитный, а не такой, о котором рассказывают мамам.</p>
                <p>— Я все же думаю, что сегодня не стоит, дорогой. Как-нибудь в другой раз!</p>
                <p>— Тогда завтра? — спросил Ру голосом, полным надежды.</p>
                <p>— Посмотрим, — сказала Кенга.</p>
                <p>— Ты всегда смотришь, и ничего потом не бывает, — печально сказал Крошка Ру.</p>
                <p>— В такой день никто ничего не может рассмотреть, — сказал Кролик. — Я полагаю, мы пойдем не очень далеко, и к обеду все мы… мы все… мы… Ах, Тигра, это ты. Пошли! Всего хорошего, Ру! После обеда мы… Пошли, Пух! Все готовы? Отлично. Пошли.</p>
                <figure class="wp-block-image">
                    <picture class="wp-image-36056">
                        <source class="lazy-load is-loaded" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh112-1.jpg.webp" type="image/webp" srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh112-1.jpg.webp" data-loaded="true"><img loading="lazy" width="406" height="299" src="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh112-1.jpg" alt="Винни-Пух и все-все-все - Алан Милн" class="wp-image-36056 lazy-load is-loaded" sizes="(max-width: 406px) 100vw, 406px" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh112-1.jpg 406w, https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh112-1-272x200.jpg 272w" data-src="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh112-1.jpg" style="height: 299px;" srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh112-1.jpg 406w, https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh112-1-272x200.jpg 272w" data-loaded="true">
                    </picture>
                </figure>
                <p>И они пошли. Сначала Пух, Кролик и Пятачок шли рядом, а Тигра носился вокруг них, описывая большие круги, потом, когда тропинка стала уже, Кролик, Пятачок и Пух пошли гуськом, друг за другом, а Тигра описывал вокруг них петли, и, наконец, когда по обе стороны тропинки встала колючая стена чертополоха, Тигра то убегал далеко вперед, то возвращался, иногда налетая на Кролика, а иногда и нет. И чем дальше они шли, тем гуще становился туман, так что Тигра стал по временам пропадать, и в тот самый момент, когда вы думали, что его уже совсем нет, он появлялся, выпаливая: «Чего же вы? Ходу!» — и, прежде чем вы успевали что-нибудь ответить, снова исчезал.</p>
                <p>Кролик обернулся и подтолкнул Пятачка.</p>
                <p>— В следующий раз! — сказал он. — Передай Пуху.</p>
                <p>— В следующий раз! — сказал Пятачок Пуху.</p>
                <p>— Чего в следующий? — сказал Пух Пятачку.</p>
                <p>Тигра неожиданно появился, налетел на Кролика и снова исчез.</p>
                <p>— Пора, — сказал Кролик.</p>
                <p>Он свернул в прогалину, пересекавшую тропинку, и Пух и Пятачок помчались за ним. Они притаились в высоком папоротнике, прислушиваясь. В Лесу было очень, очень тихо. Они ничего не видели и ничего не слышали.</p>
                <p>— Тсс!… — сказал Кролик.</p>
                <p>— Я и так, — сказал Пух.</p>
                <p>Раздался топот… И снова наступило молчание.</p>
                <p>— Эй! — сказал Тигра так близко от них и так неожиданно, что Пятачок, наверно, подскочил бы если бы не оказалось, что на большей его части сидит Пух.</p>
                <p>— Где вы? Ау! — кричал Тигра.</p>
                <p>Кролик подтолкнул локтем Пуха, и Пух оглянулся в поисках Пятачка, чтобы подтолкнуть его локтем, и не нашел его, а Пятачок продолжал вдыхать запах сырого папоротника, стараясь дышать как можно тише, и чувствовал себя очень храбро.</p>
                <p>— Чудеса! — сказал Тигра.</p>
                <p>Наступила тишина, и спустя несколько мгновений они услышали его удаляющийся топот.</p>
                <p>Они подождали ли еще немножко, и в Лесу снова стало тихо — так тихо, что еще чуточку, и им стало бы страшно.</p>
                <p>Кролик встал и потянулся.</p>
                <p>— Ну? — шепнул он с гордостью. — Видали? Все, как я говорил!</p>
                <p>— Я вот думал, — сказал Пух, — и я думаю…</p>
                <p>— Нет, — сказал Кролик, — не надо. Бежим. Пошли!</p>
                <p>И все они во главе с Кроликом пустились наутек.</p>
                <p>— А теперь, — сказал Кролик, когда они порядочно пробежали, — мы можем поговорить. Что ты хотел сказать, Пух?</p>
                <p>— Да ничего особенного. А почему мы сюда идем?</p>
                <p>— Потому что эта дорога домой.</p>
                <p>— А-а! — сказал Пух.</p>
                <p>— А по-моему, нам надо взять правее, — тревожно сказал Пятачок. — А ты что думаешь, Пух?</p>
                <p>Пух посмотрел на свои передние лапки. Он знал, что одна из них была правая, знал он, кроме того, что если он решит, какая из них правая, то остальная будет левая. Но он никак не мог вспомнить, с чего надо начать.</p>
                <p>— Ну… — начал Пух нерешительно.</p>
                <p>— Пошли! — сказал Кролик. — Я отлично знаю дорогу!</p>
                <p>Они пошли. Спустя десять минут они снова остановились.</p>
                <p>— Очень смешно, — сказал Кролик, — но мне вдруг пока… Ах, конечно. Пошли!…</p>
                <p>— Ну, вот мы и тут, — сказал Кролик спустя еще десять минут. — Нет, кажется…</p>
                <p>— А теперь, — сказал Кролик спустя еще десять минут, — по-моему, мы должны быть у… или мы взяли немного правее, чем я думал?</p>
                <p>— Прямо чудеса! — сказал Кролик спустя еще десять минут. — Почему это в тумане все выглядит так одинаково? Смешно! Ты заметил это, Пух?</p>
                <p>Пух сказал, что заметил.</p>
                <p>— Слава богу, что мы так хорошо знаем наш Лес, а то мы могли бы заблудиться! — сказал Кролик через полчаса. И он засмеялся так беззаботно, как может смеяться только тот, кто так хорошо знает Лес, что не может в нем заблудиться.</p>
                <p>Пятачок чуточку приотстал и подобрался к Пуху сзади.</p>
                <p>— Пух! — шепнул он.</p>
                <p>— Что, Пятачок?</p>
                <p>— Ничего, — сказал Пятачок и уцепился за лапку Пуха. — Я просто хотел быть поближе к тебе.</p>
                <p>Когда Тигра перестал ждать, что остальные найдут его, и когда ему надоело, что рядом нет никого, кому он мог бы сказать: «Эй, пошли, что ли!» — он подумал, что надо пойти домой. И он побежал назад. Первое, что сказала Кенга, увидав его, это: «А вот и наш милый Тигра! Как раз пора принимать рыбий жир!»</p>
                <p>И она налила ему полную чашку. Крошка Ру с гордостью заявил: «А я уже принял», и Тигра, проглотив все, что было в чашке, сказал: «И я тоже», а потом он и Ру стали дружески толкать друг друга, и Тигра случайно перевернул один или два стула, нечаянно, а Крошка Ру случайно перевернул один, нарочно, и Кенга сказала:</p>
                <p>— А ну пойдите побегайте.</p>
                <p>— А куда нам бегать? — спросил Крошка Ру.</p>
                <p>— Пойдите и соберите мне шишек для топки, — сказала Кенга и дала им корзинку.</p>
                <p>И они послушно отправились к Шести Соснам и стали кидать друг в друга шишками, и за этим приятным занятием забыли, зачем они пришли в Лес, и забыли заодно корзинку под деревом, а сами отправились домой обедать.</p>
                <p>Обед как раз подходил к концу, когда Кристофер Робин заглянул в дверь.</p>
                <p>— Где Пух? — спросил он.</p>
                <p>— Тигра, детка, где Пух? — спросила Кенга.</p>
                <p>Тигра стал объяснять, что произошло, и в то же самое время Крошка Ру стал объяснять про свой бисквитный Кашель, а Кенга стала уговаривать их не говорить одновременно. Так что прошло немало времени, пока Кристофер Робин понял, что Пух, Пятачок и Кролик бродят где-то в тумане, заблудившись в Лесной Чаще.</p>
                <p>— Смехота! — шепнул Тигра Крошке Ру. — А вот Тигры никогда не могут заблудиться!</p>
                <p>— А почему они не могут, Тигра?</p>
                <p>— Не могут, и все тут, — объяснил Тигра. — Так уж они устроены!</p>
                <p>— Что ж, — сказал Кристофер Робин, — надо пойти и отыскать их. Вот и все. Пошли, Тигра.</p>
                <p>— А можно, я тоже пойду отыщу их? — взволнованно спросил Ру.</p>
                <p>— Я думаю, не сегодня, дорогой мой, — сказала Кенга, — как-нибудь в другой раз.</p>
                <p>— Ну ладно. А если они заблудятся завтра, можно, я тогда отыщу их?</p>
                <p>— Посмотрим, — сказала Кенга, и Крошка Ру, который отлично знал, что это означает, ушел в угол и начал упражняться в прыжках, отчасти потому, что он хотел попрыгать, а отчасти потому, что он не хотел, чтобы Кристофер Робин и Тигра заметили, как он огорчен, что его не взяли.</p>
                <p>— Итак, — сказал Кролик, — мы умудрились заблудиться. Таковы факты.</p>
                <p>Все трое отдыхали в маленькой ямке с песком. Пуху ужасно надоела эта ямка с песком, и он серьезно подозревал, что она просто-таки бегает за ними по пятам, потому что, куда бы они ни направились, они обязательно натыкались на нее. Каждый раз, когда она появлялась из тумана, Кролик торжествующе заявлял: «Теперь я знаю, где мы!», а Пух грустно говорил: «Я тоже». Пятачок же вообще ничего не говорил, он старался придумать, что бы такое ему сказать, но единственное, что ему приходило в голову, это: «Помогите, спасите!» — а говорить это было бы, наверно, глупо, ведь с ним были Пух и Кролик. Все долго молчали.</p>
                <p>— Ну что ж, — сказал Кролик, по-видимому, все это время напрасно ожидавший, что его поблагодарят за приятную прогулку. — Пожалуй, надо идти.</p>
                <p>— А что, если… — начал Пух не спеша, — если, как только мы потеряем эту Яму из виду, мы постараемся опять ее найти?</p>
                <p>— Какой в этом смысл? — спросил Кролик.</p>
                <p>— Ну, — сказал Пух, — мы все время ищем Дом и не находим его. Вот я и думаю, что если мы будем искать эту Яму, то мы ее обязательно не найдем, потому что тогда мы, может быть, найдем то, чего мы как будто не ищем, а оно может оказаться тем, что мы на самом деле ищем.</p>
                <p>— Не вижу в этом большого смысла, — сказал Кролик.</p>
                <p>— Нет, — сказал Пух скромно, — его тут нет. Но он собирался тут быть, когда я начинал говорить. Очевидно, с ним что-то случилось по дороге.</p>
                <p>— Если я пойду прочь от этой Ямы, а потом пойду обратно к ней, то, конечно, я ее найду, — сказал Кролик.</p>
                <p>— А вот я думал, что, может быть, ты ее не найдешь, — сказал Пух. — Я почему-то так думал.</p>
                <p>— Ты попробуй, — сказал неожиданно Пятачок, — а мы тебя тут подождем.</p>
                <p>Кролик фыркнул, чтобы показать, какой Пятачок глупый, и скрылся в тумане. Отойдя шагов сто, он повернулся и пошел обратно… И после того, как Пух и Пятачок прождали его двадцать минут, Пух встал.</p>
                <p>— Я почему-то так и думал, — сказал Пух. — А теперь, Пятачок, пойдем домой.</p>
                <p>— Пух!… — закричал Пятачок, дрожа от волнения. — Ты разве знаешь дорогу?</p>
                <p>— Нет, — сказал Пух, — но у меня в буфете двенадцать горшков с медом, и они уже очень давно зовут меня. Я не мог как следует их расслышать, потому что Кролик все время тараторил, но если все, кроме этих двенадцати горшков, будут молчать, то я думаю, Пятачок, я узнаю, откуда они меня зовут. Идем!</p>
                <p>Они пошли, и долгое время Пятачок молчал, чтобы не перебивать горшки с медом, и вдруг он легонько пискнул… а потом сказал: «О-о», потому что начал узнавать, где они находятся. Но он все еще не осмеливался сказать об этом громко, чтобы не испортить дело. И как раз в тот момент, когда он уже был настолько в себе уверен, что стало неважно, слышны ли горшки или нет, впереди послышался оклик, и из тумана вынырнул Кристофер Робин.</p>
                <p>— Ах, вы здесь, — сказал Кристофер Робин небрежно, стараясь сделать вид, что он нисколько не волновался.</p>
                <p>— Мы здесь, — сказал Пух.</p>
                <p>— А где Кролик?</p>
                <p>— Я не знаю, — сказал Пух.</p>
                <p>— Да? Ну, я думаю, Тигра его найдет. Он, кажется, пошел вас всех искать.</p>
                <p>— Хорошо, — сказал Пух. — Мне нужно идти домой, чтобы подкрепиться, и Пятачку тоже, потому что мы до сих пор не подкреплялись и…</p>
                <p>— Я вас провожу, — сказал Кристофер Робин. Он проводил Пуха домой и пробыл там очень немалое время.</p>
                <p>И все это время Тигра носился по Лесу, громко рыча, чтобы скорее найти Кролика.</p>
                <figure class="wp-block-image">
                    <picture class="wp-image-36057">
                        <source class="lazy-load is-loaded" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh291.jpg.webp" type="image/webp" srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh291.jpg.webp" data-loaded="true"><img loading="lazy" width="399" height="213" src="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh291.jpg" alt="Винни-Пух и все-все-все - Алан Милн" class="wp-image-36057 lazy-load is-loaded" sizes="(max-width: 399px) 100vw, 399px" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh291.jpg 399w, https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh291-328x175.jpg 328w" data-src="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh291.jpg" style="height: 213px;" srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh291.jpg 399w, https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh291-328x175.jpg 328w" data-loaded="true">
                    </picture>
                </figure>
                <p>И, наконец, очень Маленький и Грустный Кролик услышал его. И этот Маленький и Грустный Кролик кинулся на голос сквозь туман, и голос неожиданно превратился в Тигру: в Доброго Тигру, в Большого Тигру, в Спасительного и Выручательного Тигру, в Тигру, который выскакивал — если он вообще выскакивал — гораздо лучше всех Тигров на свете.</p>
                <p>— Милый Тигра, как же я рад тебя видеть! — закричал Кролик.</p><a rel="nofollow" class="kc-gotop kc__gotop" href="#kcmenu">к оглавлению ↑</a>
                <h2 id="glava-shestnadtsataya-v-kotoroj-pyatachok-sovershaet-velikij-podvig">ГЛАВА ШЕСТНАДЦАТАЯ, в которой Пятачок совершает великий подвиг</h2>
                <p>На полпути от дома Винни-Пуха к дому Пятачка было Задумчивое Место, где они иногда встречались, когда им хотелось повидаться, и там было так тепло и тихо, что они любили посидеть там немножко и подумать, чем же им заняться теперь, когда они уже повидались. Как-то, когда они с Пятачком решили ничем не заниматься. Пух даже придумал специальный стишок про это место, чтобы все знали, для чего оно предназначено:</p>
                <p>3десь любит Медведь</p>
                <p>Порой посидеть</p>
                <p>И подумать:</p>
                <p>«А чем бы таким заняться?»</p>
                <p>Ведь он же — не Слон,</p>
                <p>Поэтому он</p>
                <p>Не может все время</p>
                <p>Без дела слоняться!</p>
                <p>И вот однажды, осенним утром, когда ветер ночью сорвал все листья с деревьев и старался теперь сорвать ветки, Пух и Пятачок сидели в Задумчивом Месте и думали, чем бы им заняться.</p>
                <p>— Я думаю, — сказал Пух, — что я думаю вот что: нам неплохо бы сейчас пойти на Пухову Опушку и повидать Иа, потому что, наверно, его дом снесло ветром и, наверно, он обрадуется, если мы его опять построим.</p>
                <p>— А я думаю, — сказал Пятачок. — что я думаю вот что: нам неплохо было бы сейчас пойти и навестить Кристофера Робина, только мы его не застанем, так что это нельзя.</p>
                <p>— Пойдем навестим всех-всех-всех, — сказал Пух, — потому что, когда ты долго ходишь по холоду, а потом вдруг зайдешь кого-нибудь навестить и он тебе скажет: «Привет, Пух! Вот кстати! Как раз пора чем-нибудь подкрепиться!» — это всегда очень-очень приятно!</p>
                <p>Пятачок сказал, что для того, чтобы навестить всех-всех-всех, нужен серьезный повод — скажем, вроде организации Искпедиции, и пусть Пух что-нибудь придумает, если может.</p>
                <p>Пух, конечно, мог.</p>
                <p>— Мы пойдем, потому что сегодня четверг, — сказал он, — и мы всех поздравим и пожелаем им Очень Приятного Четверга. Пошли, Пятачок!</p>
                <p>Друзья встали, но Пятачок сразу же снова сел. потому что он не знал, какой сильный ветер.</p>
                <p>И когда Пух помог ему подняться, они двинулись в путь. По дороге первым попался им домик Пуха, и, можете себе представить, когда они пришли, хозяин — знакомый вам медвежонок Винни-Пух, — оказался дома и сразу же пригласил их войти и кое-чем подкрепиться. Потом они отправились к дому Кенги, держась друг за друга и крича: «Ну что скажешь?», «Что, что?», «Я не слышу». И пока они добрались до Кенги, оба так замучились, что им пришлось задержаться у нее и еще раз позавтракать. Когда друзья вышли от нее, им показалось, что на дворе стало очень холодно, и они помчались со всех ног к дому Кролика.</p>
                <p>— Мы пришли пожелать тебе Очень Приятного Четверга. — объявил Винни-Пух, после того как он раз-другой попробовал войти в дом и выйти наружу (чтобы удостовериться в том, что дверь Кролика не похудела).</p>
                <p>— А что, собственно, произойдет в Четверг? — спросил Кролик.</p>
                <p>И когда Пух объяснил что, а Кролик, чья жизнь состояла из Очень Важных Дел, сказал: «А-а. А я думал, что вы действительно пришли по делу», — Пух и Пятачок на минутку присели… а потом поплелись дальше. Теперь ветер дул им в спину, так что им не надо было так орать.</p>
                <p>— Кролик — он умный! — сказал Пух в раздумье.</p>
                <p>— Да, — сказал Пятачок. — Кролик — он хитрый.</p>
                <p>— У него настоящие Мозги.</p>
                <p>— Да, — сказал Пятачок, — у Кролика настоящие Мозги.</p>
                <p>Наступило долгое молчание.</p>
                <p>— Наверно, поэтому, — сказал наконец Пух, — наверно, поэтому-то он никогда ничего не понимает!</p>
                <p>Кристофер Робин был уже дома, и он так обрадовался друзьям, что они пробыли у него почти до обеда, и тогда они почти пообедали, то есть съели такой обед, о котором можно потом забыть) и поспешили на Пухову Опушку, чтобы успеть навестить Иа и не опоздать к Настоящему Обеду у Совы.</p>
                <p>— Здравствуй, Иа! — весело окликнули они ослика.</p>
                <p>— А, — сказал Иа, — заблудились?</p>
                <p>— Что ты! Нам просто захотелось тебя навестить, — сказал Пятачок, — и посмотреть, как поживает твой дом. Смотри, Пух, он все еще стоит!</p>
                <div class="ad-tag ad-can-close ad-in-content" ad-num="16">
                    <div class="ad-tag-inner">
                        <div class="ad-placeholder">
                            <div class="ad-placeholder-text placeholder-cite">
                                <div class="cite-text">Дети, которых не любят, становятся взрослыми, которые не могут любить.</div>
                                <div class="cite-author">Элеонора Рузвельт</div>
                            </div>
                        </div>
                        <div class="MKN_ITA_300M actual-ad"></div>
                    </div><i class="ad-close-btn fa fa-times-thin fa-2x" aria-hidden="true"></i>
                </div>
                <p>— Понимаю, — сказал Иа. — Действительно, очень странно. Да, пора бы уже кому-нибудь прийти и свалить его.</p>
                <p>— Мы думали — а вдруг его повалит ветром, — сказал Пух.</p>
                <p>— Ах, вот что. Очевидно, поэтому никто не стал себя утруждать. А я думал, что о нем просто позабыли.</p>
                <p>— Ну, мы были очень рады повидать тебя, Иа, а теперь мы пойдем навестим Сову.</p>
                <p>— Отлично. Сова необыкновенно мила. Она пролетела мимо день-два назад и даже заметила меня. Она, конечно, не сказала мне ни слова, понятное дело, но она знала, что это я. Очень любезно с ее стороны. Согревает душу.</p>
                <p>Пух и Пятачок отодвинулись немного назад и сказали: «Ну, всего хорошего, Иа», очень стараясь не спешить, но ведь им предстоял далекий путь, и они хотели прийти вовремя.</p>
                <p>— Всего хорошего, — сказал Иа. — Смотри, чтобы тебя не унесло ветром, маленький Пятачок. Тебя будет очень не хватать. Многие будут с живым интересом спрашивать: «Куда это унесло маленького Пятачка?» Ну, всего хорошего. Благодарю вас за то, что случайно проходили мимо.</p>
                <p>— До свиданья, — сказали Пух и Пятачок в последний раз и двинулись к дому Совы.</p>
                <p>Теперь ветер дул им навстречу, и уши Пятачка трепались, как флажки, изо всех сил стараясь улететь от хозяина, с великим трудом продвигавшегося вперед. Ему казалось, прошли целые часы, пока он наконец загнал свои ушки под тихие своды Леса, где они снова выпрямились и прислушались — не без волнения — к вою бури в вершинах деревьев.</p>
                <p>— Предположим, Пух, что дерево вдруг упадет, когда мы будем как раз под ним? — спросил Пятачок.</p>
                <p>— Давай лучше предположим, что не упадет, — ответил Пух после некоторого размышления.</p>
                <p>Это предложение утешило Пятачка, и спустя немного времени друзья весело, наперебой, стучали и звонили у двери Совы.</p>
                <p>— Здравствуй, Сова, — сказал Пух, — я надеюсь, мы не опоздали к… Я хочу сказать — как ты поживаешь, Сова? Мы с Пятачком решили тебя навестить, потому что ведь сегодня Четверг.</p>
                <p>— Садись, Пух, садись, садись, Пятачок, — сказала Сова радушно. — Устраивайтесь поудобнее.</p>
                <p>Они поблагодарили ее и устроились как можно удобнее.</p>
                <p>— Понимаешь, Сова, мы очень спешили, чтобы поспеть вовремя к… ну, чтобы успеть повидать тебя до того, как мы уйдем.</p>
                <p>Сова с достоинством кивнула головой.</p>
                <p>— Поправьте меня, если я ошибаюсь, — сказала она, — но не права ли я, предполагая, что на дворе весьма бурный день?</p>
                <p>— Весьма, — сказал Пятачок, который грел свои ушки у огня, мечтая лишь о том, чтобы целым и невредимым вернуться домой.</p>
                <p>— Я так и думала, — сказала Сова. — И вот как раз в такой же бурный день, как ныне, мой дядя Роберт, чей портрет ты видишь на стене по правую руку, Пятачок, — мой дядя Роберт, возвращаясь в поздний час с… Что это?</p>
                <p>Раздался страшный треск.</p>
                <p>— Берегись! — закричал Пух. — Осторожно, часы! Пятачок, с дороги! Пятачок, я на тебя падаю!</p>
                <p>— Спасите! — закричал Пятачок. Пухова сторона комнаты медленно поднималась вверх, его кресло съезжало вниз в направлении кресла Пятачка; стенные часы плавно скользнули по печке, собирая по дороге цветочные вазы, и, наконец, все и вся дружно рухнуло на то, что только что было полом, а сейчас старалось выяснить, как оно справится с ролью стены.</p>
                <p>Дядя Роберт, который, по-видимому, решил превратиться в коврик и захватил с собой заодно знакомую стену, налетел на кресло Пятачка в тот самый момент, когда Пятачок хотел оттуда вылезти.</p>
                <p>Словом, некоторое время было действительно нелегко определить, где север… Потом вновь послышался страшный треск… вся комната лихорадочно затряслась… и наступила тишина.</p>
                <p>В углу зашевелилась скатерть. Она свернулась в клубок и перекатилась через всю комнату. Потом она подскочила раза два-три и выставила наружу два уха; вновь прокатилась по комнате и развернулась.</p>
                <p>— Пух, — сказал нервно Пятачок.</p>
                <p>— Что? — сказало одно из кресел.</p>
                <p>— Где мы?</p>
                <p>— Я не совсем понимаю, — отвечало кресло.</p>
                <p>— Мы… мы в доме Совы?</p>
                <p>— Наверно, да, потому что мы ведь только что собирались выпить чаю и так его и не выпили.</p>
                <p>— Ох! — сказал Пятачок. — Слушай, у Совы всегда почтовый ящик был на потолке?</p>
                <p>— А разве он там?</p>
                <p>— Да, погляди.</p>
                <p>— Не могу, — сказал Пух, — я лежу носом вниз, и на мне что-то такое лежит, а в таком положении, Пятачок, очень трудно рассматривать потолки.</p>
                <p>— Ну, в общем, он там.</p>
                <p>— Может быть, он переехал туда? — предположил Пух. — Просто для разнообразия.</p>
                <p>Под столом в противоположном углу комнаты поднялась какая-то возня, и Сова опять появилась среди гостей.</p>
                <p>— Пятачок! — сказала Сова с очень рассерженным видом. — Где Пух?</p>
                <p>— Я и сам не совсем понимаю, — сказал Пух.</p>
                <p>Сова повернулась на звук его голоса и строго посмотрела на ту часть Пуха, которая еще была на виду.</p>
                <p>— Пух, — с упреком сказала Сова, — это ты наделал?</p>
                <p>— Нет, — кротко сказал Пух, — не думаю, чтобы я.</p>
                <p>— А тогда кто же?</p>
                <p>— Я думаю, это ветер, — сказал Пятачок. — Я думаю, твой дом повалило ветром.</p>
                <p>— Ах, вот как! А я думала, это Пух устроил.</p>
                <p>— Нет! — сказал Пух.</p>
                <p>— Если это ветер, — сказала Сова, думая вслух, — то тогда Пух не виноват. Ответственность не может быть на него возложена.</p>
                <p>С этими милостивыми словами она взлетела, чтобы полюбоваться своим новым потолком.</p>
                <p>— Пятачок, Пятачок! — позвал Пух громким шепотом.</p>
                <p>Пятачок склонился над ним.</p>
                <p>— Что, Пух?</p>
                <p>— Что, она сказала, на меня воз-ло-жено?</p>
                <p>— Она сказала, что она тебя не ругает.</p>
                <p>— А-а, а я думал, она говорила про… то, что на мне… А, понятно!</p>
                <p>— Сова, — сказал Пятачок, — сойди вниз и помоги выбраться Пуху!</p>
                <p>Сова, которая залюбовалась своим почтовым ящиком (а он был проволочный, и в двери была щель с надписью «Для писем и газет», только этой надписи сейчас не было видно, потому что она была снаружи) слетела вниз.</p>
                <p>Вдвоем с Пятачком они долго толкали и дергали кресло, и наконец Пух вылез из-под него и смог оглядеться.</p>
                <p>— Да! — сказала Сова. — Прелестное положение вещей!</p>
                <p>— Что мы будем делать, Пух? Ты можешь о чем-нибудь подумать? — спросил Пятачок.</p>
                <p>— Да, я как раз думал кое о чем, — сказал Пух. — Я думал об одной маленькой вещице. — И он запел вернее, запыхтел</p>
                <p>ПЫХТЕЛКУ:</p>
                <p>—————</p>
                <p><em>Я стоял на носу</em></p>
                <p><em>И держал на весу</em></p>
                <p><em>Задние лапки и все остальное…</em></p>
                <p><em>Цирковой акробат</em></p>
                <p><em>Был бы этому рад,</em></p>
                <p><em>Но Медведь — это дело иное!</em></p>
                <p><em>И потом я свалился,</em></p>
                <p><em>А сам притворился,</em></p>
                <p><em>Как будто решил отдохнуть среди дня.</em></p>
                <p><em>И, лежа на пузе,</em></p>
                <p><em>Я вспомнил о Музе,</em></p>
                <p><em>Но она позабыла Поэта (меня).</em></p>
                <p><em>Что делать!…</em></p>
                <p><em>Уж если,</em></p>
                <p><em>Устроившись в кресле,</em></p>
                <p><em>И то не всегда мы владеем стихом, —</em></p>
                <p><em>Что же может вам спеть</em></p>
                <p><em>Несчастный Медведь,</em></p>
                <p><em>На которого Кресло уселось верхом!</em></p>
                <p> — Вот и все! — сказал Пух.</p>
                <p>Сова неодобрительно кашлянула и сказала, что если Пух уверен, что это действительно все, то они могут посвятить свои умственные способности Проблеме Поисков Выхода.</p>
                <p>— Ибо, — сказала Сова, — мы не можем выйти посредством того, что обычно было наружной дверью На нее что-то упало.</p>
                <p>— А как же еще можно тогда выйти? — тревожно спросил Пятачок.</p>
                <p>— Это и есть та Проблема, Пятачок, решению которой я просила Пуха посвятить свои Умственные Способности.</p>
                <p>Пух уселся на пол (который когда-то был стеной), и уставился на потолок (который некогда был другой стеной — стеной с наружной дверью, которая некогда была наружной дверью), и постарался посвятить им свои Умственные Способности.</p>
                <p>— Сова, ты можешь взлететь к почтовому ящику с Пятачком на спине? — спросил он.</p>
                <p>— Нет, — поспешно сказал Пятачок, — она не может, не может!</p>
                <p>Сова стала объяснять, что такое Необходимая или Соответствующая Спинная Мускулатура. Она уже объясняла это когда-то Пуху и Кристоферу Робину и с тех пор ожидала удобного случая, чтобы повторить объяснения, потому что это такая штука, которую вы спокойно можете объяснять два раза, не опасаясь, что кто-нибудь поймет, о чем вы говорите.</p>
                <p>— Потому что, понимаешь Сова, если бы мы могли посадить Пятачка в почтовый ящик, он мог бы протиснуться сквозь щель, в которую приходят письма, и слезть с дерева и побежать за подмогой, — пояснил Пух.</p>
                <p>Пятачок немедленно заявил, что он за последнее время стал ГОРАЗДО БОЛЬШЕ и вряд ли сможет пролезть в щель, как бы он ни старался.</p>
                <p>Сова сказала, что за последнее время щель для писем стала ГОРАЗДО БОЛЬШЕ специально на тот случай, если придут большие письма, так что Пятачок, вероятно, сможет.</p>
                <p>Пятачок сказал:</p>
                <p>— Но ты говорила, что необходимая, как ее там называют, не выдержит.</p>
                <p>Сова сказала:</p>
                <p>— Не выдержит, об этом нечего и думать.</p>
                <p>А Пятачок сказал:</p>
                <p>— Тогда лучше подумаем о чем-нибудь другом, — и первым подал пример.</p>
                <p>А Пух вспомнил тот день, когда он спас Пятачка от потопа и все им так восхищались; и так как это выпадало ему не часто, он подумал, как хорошо было бы, если бы это сейчас повторилось, и — как обычно, неожиданно — ему пришла в голову мысль.</p>
                <p>— Сова, — сказал Пух, — я что-то придумал.</p>
                <p>— Сообразительный и Изобретательный Медведь! — сказала Сова.</p>
                <p>Пух приосанился, услышав, что его называют Поразительным и Забредательным Медведем, и скромно сказал, что да, эта мысль случайно забрела к нему в голову.</p>
                <p>И он изложил свою мысль.</p>
                <p>— Надо привязать веревку к Пятачку и взлететь к почтовому ящику, держа другой конец веревки в клюве; потом надо просунуть бечевку сквозь проволоку и опустить ее на пол, а еще потом мы с тобой потянем изо всех сил за этот конец, а Пятачок потихоньку подымется вверх на том конце — и дело в шляпе!</p>
                <p>— И Пятачок в ящике, — сказала Сова. — Если, конечно, веревка не оборвется.</p>
                <p>— А если она оборвется? — спросил Пятачок с неподдельным интересом.</p>
                <p>— Тогда мы возьмем другую веревку, — утешил его Пух.</p>
                <p>Пятачка это не очень обрадовало, потому что хотя рваться будут разные веревки, падать будет все тот же самый Пятачок; но, увы, ничего другого никто не мог придумать…</p>
                <p>И вот, мысленно попрощавшись со счастливым временем, проведенным в Лесу, с тем временем, когда его никто не подтягивал к потолкам на веревках, Пятачок храбро кивнул Пуху и сказал, что это Очень Умный Ппп-ппп-ппп, Умный Ппп-ппп-план.</p>
                <p>— Она не порвется, — шепнул ободряюще Пух, — потому что ведь ты Маленькое Существо, а я буду стоять внизу, а если ты нас всех спасешь — это будет Великий Подвиг, о котором долго не забудут, и, может быть, я тогда сочиню про это Песню, и все будут говорить: «Пятачок совершил такой Великий Подвиг, что Пуху пришлось сочинить Хвалебную Песню!»</p>
                <p>Тут Пятачок почувствовал себя гораздо лучше, и, когда все было готово и он начал плавно подниматься к потолку, его охватила такая гордость, что он, конечно, закричал бы: «Вы поглядите на меня», если бы не опасался, что Пух и Сова, залюбовавшись им, выпустят свой конец веревки.</p>
                <p>— Поехали, — весело сказал Пух.</p>
                <p>— Подъем совершается по заранее намеченному плану, — ободряюще заметила Сова.</p>
                <p>Вскоре подъем был окончен. Пятачок открыл ящик и пролез внутрь, затем, отвязавшись, он начал протискиваться в щель, сквозь которую в добрые старые времена, когда входные двери были входными дверями, входило, бывало, много нежданных писем, которые хозяйка вдруг получала от некоей Савы.</p>
                <p>Пятачок протискивал себя и протаскивал себя, и, наконец, совершив последний натиск на щель, он оказался снаружи.</p>
                <p>Счастливый и взволнованный, он на минутку задержался у выхода, чтобы пропищать пленникам слова утешения и привета.</p>
                <p>— Все в порядке! — закричал он в щель. — Твое дерево совсем повалилось, Сова, а на двери лежит большой сук, но Кристофер Робин с моей помощью сможет его отодвинуть, и мы принесем канат для Пуха, я пойду и скажу ему сейчас, а вниз я могу слезть легко, то есть это опасно, но я не боюсь, и мы с Кристофером Робином вернемся приблизительно через полчаса. Пока, Пух! — И, не ожидая ответа Пуха: «До свидания, Пятачок, спасибо», он исчез.</p>
                <p>— Полчаса, — сказала Сова, устраиваясь поудобнее. — Значит, у меня как раз есть время, чтобы закончить повесть, которую я начала рассказывать, — повесть о дяде Роберте, чей портрет ты видишь внизу под собой, милый Винни. Припомним сначала, на чем я остановилась? Ах да! Был как раз такой же бурный день, как ныне, когда мой дядя Роберт… Пух закрыл глаза.</p><a rel="nofollow" class="kc-gotop kc__gotop" href="#kcmenu">к оглавлению ↑</a>
                <h2 id="glava-semnadtsataya-v-kotoroj-ia-nahodit-soveshnik-i-sova-pereezzhaet">ГЛАВА СЕМНАДЦАТАЯ, в которой Иа находит Совешник и Сова переезжает</h2>
                <p>Винни-Пух забрел в Дремучий Лес и остановился перед домом Совы. Теперь он был совершенно не похож на дом. Теперь он выглядел просто как поваленное дерево; а когда дом начинает так выглядеть-значит, хозяину пришло время попытаться переменить адрес.</p>
                <p>Сегодня утром Пух обнаружил у себя под дверью Таинственное Спаслание, которое гласило:</p>
                <p>Я ищу новый адриск для</p>
                <p>Совы ты тоже Кролик</p>
                <p>И, пока он раздумывал, что бы это такое могло значить, пришел Кролик и прочел ему вслух.</p>
                <p>— Я и для остальных приготовил такое письмо, — сказал Кролик. — Растолкую им, о чем речь, и все они тоже будут искать новый адриск, то есть дом для Совы. Извини, очень спешу, всего хорошего!</p>
                <p>И он убежал.</p>
                <p>Пух не спеша поплелся за ним. У него было дело посерьезнее, чем поиски нового дома для Совы; ему нужно было сочинить Хвалебную Песню — Кричалку — про ее прежний дом.</p>
                <p>Ведь он обещал это Пятачку много-много дней назад, и с тех пор, когда бы они с Пятачком ни встречались, Пятачок, правда, ничего не говорил, но было сразу понятно, о чем он не говорит; и если кто-нибудь упоминал Песни (Кричалки), или Деревья или Веревки, или Ночные Бури, Пятачок сразу весь розовел, начиная с кончика носа, и поспешно заговаривал о чем-нибудь совсем другом.</p>
                <p>«Но это не так-то легко, — сказал Винни-Пух про себя, продолжая глядеть на то, что было некогда Домом Совы. — Ведь Поэзия, Кричалки — это не такие вещи, которые вы находите, когда хотите, это вещи, которые находят на вас; и все, что вы можете сделать, — это пойти туда, где они могут вас найти».</p>
                <p>И Винни-Пух терпеливо ждал…</p>
                <p>— Ну, — сказал он после долгого молчания, — я могу, пожалуй, начать: «Вот здесь лежит большущий ствол», потому что ведь он же тут лежит, и посмотрю, что выйдет. Вышло вот что:</p>
                <p>ХВАЛЕБНАЯ ПЕСНЬ</p>
                <p>(кричалка)</p>
                <p>————————</p>
                <p><em>Вот здесь лежит большущий ствол,</em></p>
                <p><em>А он стоял вверх головой,</em></p>
                <p><em>И в нем Медведь беседу вел</em></p>
                <p><em>С его хозяйкою (Совой).</em></p>
                <p><em>Тогда не знал никто-никто,</em></p>
                <p><em>Что вдруг случится ужас что!</em></p>
                <p><em>Увы! Свирепый Ураган</em></p>
                <p><em>Взревел — и повалил Каштан!</em></p>
                <p><em>Друзья мои! В тот страшный час</em></p>
                <p><em>Никто-никто бы нас не спас.</em></p>
                <p><em>Никто бы нам бы не помог,</em></p>
                <p><em>Когда б не Храбрый Пятачок!</em></p>
                <p><em>— Смелей! — он громко произнес. —</em></p>
                <p><em>Друзья, скорей найдите трос</em></p>
                <p><em>(Допустим, толстенький шпагат,</em></p>
                <p><em>А лучше — тоненький канат).</em></p>
                <p><em>И знайте: пусть грозит Беда,</em></p>
                <p><em>Для Смелых выход есть всегда!</em></p>
                <p><em>И вот герой вознесся ввысь,</em></p>
                <p><em>Туда, туда, где брезжил свет, —</em></p>
                <div class="ad-tag ad-can-close ad-in-content" ad-num="17">
                    <div class="ad-tag-inner">
                        <div class="ad-placeholder">
                            <div class="ad-placeholder-text placeholder-cite">
                                <div class="cite-text">Для того чтобы во что-то верить, вовсе не обязательно знать, правда ли это.</div>
                                <div class="cite-author">Цикл о Муми-троллях</div>
                            </div>
                        </div>
                        <div class="MKN_ITA_300M actual-ad"></div>
                    </div><i class="ad-close-btn fa fa-times-thin fa-2x" aria-hidden="true"></i>
                </div>
                <p><em>Сквозь щель Для Писем и Газет!</em></p>
                <p><em>Хоть все от ужаса тряслись</em></p>
                <p><em>И говорили «Ох» и «Ах», —</em></p>
                <p><em>Герою был неведом страх!</em></p>
                <p><em>О Храбрый, ХРАБРЫЙ ПЯТАЧОК!</em></p>
                <p><em>Дрожал ли он? О нет! О нет!</em></p>
                <p><em>Нет, он взлетел под потолок</em></p>
                <p><em>И влез в «Для писем и газет».</em></p>
                <p><em>Он долго лез, но он пролез</em></p>
                <p><em>И смело устремился в Лес!</em></p>
                <p><em>Да, он, как молния, мелькнул,</em></p>
                <p><em>Крича: — Спасите! Караул!</em></p>
                <p><em>Сова и Пух в плену. Беда!</em></p>
                <p><em>На помощь! Все-Все-Все сюда! —</em></p>
                <p><em>И Все-Все-Все (кто бегать мог)</em></p>
                <p><em>Помчались, не жалея ног!</em></p>
                <p><em>И вскоре Все-Все-Все пришли</em></p>
                <p><em>(Не просто, а на помощь к нам),</em></p>
                <p><em>И выход тут же мы нашли</em></p>
                <p><em>(Вернее, он нашелся сам).</em></p>
                <p><em>Так славься, славься на века</em></p>
                <p><em>Великий Подвиг Пятачка!</em></p>
                <p> — Вот, значит, как, — сказал Пух, пропев все это трижды. — Вышло не то, чего я ожидал, но что-то вышло. Теперь надо пойти и спеть все это Пятачку.</p>
                <p>«Я ищу новый адриск для Совы ты тоже Кролик».</p>
                <p>— Что все это значит? — спросил Иа.</p>
                <p>Кролик объяснил.</p>
                <p>— А в чем дело с ее старым домом?</p>
                <p>Кролик объяснил.</p>
                <p>— Мне никогда ничего не рассказывают, — сказал Иа. — Никто меня не информирует. В будущую пятницу, по моим подсчетам, исполнится семнадцать дней с тех пор, как со мной в последний раз говорили.</p>
                <p>— Ну, семнадцать — это ты преувеличиваешь…</p>
                <p>— В будущую пятницу, — пояснил Иа.</p>
                <p>— А сегодня суббота, — сказал Кролик, — значит, всего одиннадцать дней. И, кроме того, я лично был тут неделю назад.</p>
                <p>— Но беседа не состоялась, — сказал Иа. — Не было обмена мнениями. Ты сказал «Здорово!» и промчался дальше. Пока я обдумывал свою реплику, твой хвост мелькнул шагов за сто отсюда на холме. Я хотел было сказать: «Что? Что?» — но понял, конечно, что уже поздно.</p>
                <p>— Ну, я очень спешил.</p>
                <p>— Должен говорить сперва один, потом другой, — продолжал Иа. — По порядку. Иначе это нельзя считать беседой. «Здорово!» — «Что, что?» На мой взгляд, такой обмен репликами ничего не дает. Особенно если когда приходит ваша очередь говорить, вы видите только хвост собеседника. И то еле-еле.</p>
                <p>— Ты сам виноват, Иа. Ты же никогда ни к кому из нас не приходишь. Сидишь как сыч в своем углу и ждешь, чтобы все остальные пришли к тебе. А почему тебе самому к нам не зайти?</p>
                <p>Иа задумался.</p>
                <p>— В твоих словах, Кролик, пожалуй, что-то есть, — сказал он наконец. — Я действительно пренебрегал законами общежития. Я должен больше вращаться. Я должен отвечать на визиты.</p>
                <p>— Правильно, Иа. Заходи к любому из нас в любое время, когда тебе захочется.</p>
                <p>— Спасибо, Кролик. А если кто-нибудь скажет Громким Голосом: «Опять Иа притащился!» — то ведь я могу и выйти.</p>
                <p>Кролик нетерпеливо переминался с ноги на ногу.</p>
                <p>— Ну ладно, — сказал он, — мне пора идти. Я порядком занят сегодня.</p>
                <p>— Всего хорошего, — сказал Иа.</p>
                <p>— Как? А, всего хорошего! И если ты случайно набредешь на хороший дом для Совы, ты нам сообщи обязательно.</p>
                <p>— Обещаю, — сказал Иа.</p>
                <p>И Кролик ушел.</p>
                <p>Пух разыскал Пятачка, и они вдвоем побрели снова в Дремучий Лес.</p>
                <p>— Пятачок, — застенчиво сказал Пух, после того как они долго шли молча.</p>
                <p>— Да, Пух!</p>
                <p>— Ты помнишь, я говорил — надо сочинить Хвалебную Песню (Кричалку) насчет Ты Знаешь Чего.</p>
                <p>— Правда, Пух? — спросил Пятачок, и носик его порозовел. — Ой, неужели ты правда сочинил?</p>
                <p>— Она готова, Пятачок.</p>
                <p>Розовая краска медленно стала заливать ушки Пятачка.</p>
                <p>— Правда, Пух? — хрипло спросил он. — Про… про… тот случай, когда?… Она правда готова?</p>
                <p>— Да, Пятачок.</p>
                <p>Кончики ушей Пятачка запылали; он попытался что-то сказать, но даже после того, как он раза два прокашлялся, ничего не вышло. Тогда Пух продолжал:</p>
                <p>— В ней семь строф.</p>
                <p>— Семь? — переспросил Пятачок, стараясь говорить как можно небрежнее. — Ты ведь не часто сочиняешь Кричалки в целых семь строф, правда, Пух?</p>
                <p>— Никогда, — сказал Пух. — Я думаю, что такого случая никогда не было.</p>
                <p>— А Все-Все-Все уже слышали ее? — спросил Пятачок, на минуту остановившись лишь затем, чтобы поднять палочку и закинуть ее подальше.</p>
                <p>— Нет, — сказал Пух. — Я не знаю, как тебе будет приятнее: если я спою ее сейчас, или если мы подождем, пока встретим Всех-Всех-Всех, и тогда споем ее. Всем сразу.</p>
                <p>Пятачок немного подумал.</p>
                <p>— Я думаю, мне было бы всего приятнее, Пух, если бы ты спел ее мне сейчас… а потом спел ее Всем-Всем-Всем, потому что тогда они ее услышат, а я скажу: «Да, да, Пух мне говорил», и сделаю вид, как будто я не слушаю.</p>
                <p>И Пух спел ему Хвалебную Песню (Кричалку) — все семь строф. Пятачок ничего не говорил — он только стоял и краснел. Ведь никогда еще никто не пел Пятачку, чтобы он «Славился, славился на века!». Когда песня кончилась, ему очень захотелось попросить спеть одну строфу еще раз, но он постеснялся. Это была та самая строфа, которая начиналась словами: «О Храбрый, Храбрый Пятачок». Пятачок чувствовал, что начало этой строфы особенно удалось!</p>
                <p>— Неужели я правда все это сделал? — сказал он наконец.</p>
                <p>— Видишь ли, — сказал Пух, — в поэзии — в стихах… Словом, ты сделал это, Пятачок, потому что стихи говорят, что ты это сделал. Так считается.</p>
                <p>— Ой! — сказал Пятачок. — Ведь я… мне кажется, я немножко дрожал. Конечно, только сначала. А тут говорится: «Дрожал ли он? О нет, о нет!» Вот почему я спросил.</p>
                <p>— Ты дрожал про себя, — сказал Пух. — А для такого Маленького Существа это, пожалуй, даже храбрее, чем совсем не дрожать.</p>
                <p>Пятачок вздохнул от счастья. Так, значит, он был храбрым!</p>
                <p>Подойдя к бывшему дому Совы, они застали там Всех-Всех-Всех, за исключением Иа. Кристофер Робин всем объяснял, что делать, и Кролик объяснял всем то же самое, на тот случай, если они не расслышали, и потом они все делали это. Они где-то раздобыли канат и вытаскивали стулья и картины, и всякие вещи из прежнего дома Совы, чтобы все было готово для переезда в новый дом. Кенга связывала узлы и покрикивала на Сову: «Я думаю, тебе не нужна эта старая грязная посудная тряпка. Правда? И половик тоже не годится, он весь дырявый», на что Сова с негодованием отвечала: «Конечно, он годится — надо только правильно расставить мебель! А это совсем не посудное полотенце, а моя шаль!»</p>
                <p>Крошка Ру поминутно то исчезал в доме, то появлялся оттуда верхом на очередном предмете, который поднимали канатом, что несколько нервировало Кенгу, потому что она не могла за ним как следует присматривать. Она даже накричала на Сову, заявив, что ее дом — это просто позор, там такая грязища, удивительно, что он не опрокинулся раньше! Вы только посмотрите, как зарос этот угол, просто ужас! Там поганки! Сова удивилась и посмотрела, а потом саркастически засмеялась и объяснила, что это ее губка и что если уж не могут отличить самую обычную губку от поганок, то в хорошие времена мы живем!…</p>
                <p>— Ну и ну, — сказала Кенга.</p>
                <p>А Крошка Ру быстро вскочил в дом, пища:</p>
                <p>— Мне нужно, нужно посмотреть на губку Совы! Ах, вот она! Ой, Сова, Сова, это не губка, а клякса! Ты знаешь, что такое клякса, Сова? Это когда твоя губка вся раскляк…</p>
                <p>И Кенга сказала (очень поспешно): «Ру, милый!» — потому что не полагается так разговаривать с тем, кто умеет написать слово «суббота».</p>
                <p>Но все очень обрадовались, когда пришли Пух и Пятачок, и прекратили работу, чтобы немного отдохнуть и послушать новую Кричалку (Хвалебную Песню) Пуха. И вот, когда Все-Все-Все сказали, какая это хорошая Хвалебная Песня (Кричалка), Пятачок небрежно спросил:</p>
                <figure class="wp-block-image">
                    <picture class="wp-image-36058">
                        <source class="lazy-load is-loaded" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh85.jpg.webp" type="image/webp" srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh85.jpg.webp" data-loaded="true"><img loading="lazy" width="399" height="186" src="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh85.jpg" alt="Винни-Пух и все-все-все - Алан Милн" class="wp-image-36058 lazy-load is-loaded" sizes="(max-width: 399px) 100vw, 399px" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh85.jpg 399w, https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh85-328x153.jpg 328w" data-src="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh85.jpg" style="height: 186px;" srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh85.jpg 399w, https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh85-328x153.jpg 328w" data-loaded="true">
                    </picture>
                </figure>
                <p>— Правда, хорошенькая песенка?</p>
                <p>— Ну, а где же новый дом? — спросил Пух. — Ты нашла его, Сова?</p>
                <p>— Она нашла название для него, — сказал Кристофер Робин, лениво пожевывая травинку. — Так что теперь ей не хватает только дома.</p>
                <p>— Я назову его вот как, — важно сказала Сова и показала им то, над чем она трудилась: квадратную дощечку, на которой было намалевано:</p>
                <p>САВЕШНИК</p>
                <p>Как раз в этот захватывающий момент кто-то выскочил из Чащи и налетел на Сову. Доска упала на землю, и к ней кинулись Пятачок и Ру.</p>
                <p>— Ах, это ты, — сказала Сова сердито.</p>
                <p>— Здравствуй, Иа. — сказал Кролик. — Наконец-то. Где же ты был?</p>
                <p>Иа не обратил на них внимания.</p>
                <p>— Доброе утро, Кристофер Робин, — сказал он толкнув Ру и Пятачка и усаживаясь на «Савешник». — Мы одни?</p>
                <p>— Да, — сказал Кристофер Робин, слегка улыбаясь.</p>
                <p>— Мне сказали — крылатая весть долетела и до моего уголка Леса — сырая лощина, которая никому не нужна, — что Некая Особа ищет дом. Я нашел для нее дом.</p>
                <p>— Молодец! — великодушно сказал Кролик.</p>
                <p>Иа посмотрел на него через плечо и снова обратился к Кристоферу Робину.</p>
                <p>— Между нами что-то такое было, — продолжал он громким шепотом, — но неважно. Забудем старые обиды и похищенные хвосты. Словом, если хочешь Кристофер Робин, иди со мной, и я покажу тебе дом.</p>
                <p>Кристофер Робин вскочил на ноги.</p>
                <p>— Идем, Пух! — сказал он.</p>
                <p>— Идем, Тигра! — крикнул Крошка Ру.</p>
                <p>— Может быть, и мы пойдем, Сова? — сказал Кролик.</p>
                <p>— Минутку, — сказала Сова, подымая свою адресную дощечку, которая как раз освободилась.</p>
                <p>Иа отрицательно помахал им передней ногой.</p>
                <p>— Мы с Кристофером Робином отправляемся на прогулку, — сказал он. — На прогулку, а не на толкучку! Если он хочет взять с собой Пуха и Пятачка я буду рад их обществу; но надо, чтобы мы могли Дышать.</p>
                <p>— Ну что ж, отлично, — сказал Кролик, сообразив что ему наконец-то представился случай как следует покомандовать.</p>
                <p>— А мы продолжим выгрузку. За дело, друзья! Эй, Тигра, где канат? — Что там такое, Сова?</p>
                <p>Сова, только что обнаружившая, что ее новый адрес превратился из «Савешника» в «кляксу», наподобие губки, строго кашлянула в сторону Иа, но ничего не сказала, и Ослик, унося на себе значительную часть «Савешника», побрел вслед за своими друзьями.</p>
                <figure class="wp-block-image">
                    <picture class="wp-image-36059">
                        <source class="lazy-load is-loaded" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh156.jpg.webp" type="image/webp" srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh156.jpg.webp" data-loaded="true"><img loading="lazy" width="250" height="348" src="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh156.jpg" alt="Винни-Пух и все-все-все - Алан Милн" class="wp-image-36059 lazy-load is-loaded" sizes="(max-width: 250px) 100vw, 250px" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh156.jpg 250w, https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh156-144x200.jpg 144w" data-src="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh156.jpg" style="height: 348px;" srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh156.jpg 250w, https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh156-144x200.jpg 144w" data-loaded="true">
                    </picture>
                </figure>
                <p>И вскоре все они подходили к дому, который нашел Иа, но еще до того, как он показался, Пятачок стал подталкивать локтем Пуха, а Пух — Пятачка; они толкались и говорили друг другу: «Это он». — «Не может быть». — «Да я тебе говорю, это он!»</p>
                <p>А когда они пришли, это был действительно он.</p>
                <p>— Вот! — гордо произнес Иа, останавливаясь перед домом Пятачка. — И дом, и табличка с надписью, и все прочее!</p>
                <p>— Ой, ой, ой! — крикнул Кристофер Робин, не зная, что ему делать — смеяться или плакать.</p>
                <p>— Самый подходящий дом для Совы. Как ты считаешь, маленький Пятачок? — спросил Иа.</p>
                <p>И тут Пятачок совершил Благородный Поступок. Он совершил его как бы в полусне, вспоминая обо всех тех чудесных словах, которые спел про него Пух.</p>
                <p>— Да, это самый подходящий дом для Совы, — сказал он великодушно. — Я надеюсь, что она будет в нем очень счастлива. — И он два раза проглотил слюнки, потому что ведь и он сам был в нем очень счастлив.</p>
                <p>— Что ты думаешь, Кристофер Робин? — спросил Иа не без тревоги в голосе, чувствуя, что тут что-то не так.</p>
                <p>Кристоферу Робину нужно было задать один вопрос, и он не знал, как его задать.</p>
                <p>— Ну, — сказал он наконец, — это очень хороший дом, и ведь если твой дом повалило ветром, ты должен куда-нибудь переехать. Правда, Пятачок? Что бы ты сделал, если бы твой дом разрушил ветер?</p>
                <p>Прежде чем Пятачок успел сообразить, что ответить, вместо него ответил Винни-Пух.</p>
                <p>— Он бы перешел ко мне и жил бы со мной, — сказал Пух. — Правда же, Пятачок?</p>
                <p>Пятачок пожал его лапу.</p>
                <p>— Спасибо, Пух, — сказал он. — С большой радостью.</p><a rel="nofollow" class="kc-gotop kc__gotop" href="#kcmenu">к оглавлению ↑</a>
                <h2 id="glava-vosemnadtsataya-v-kotoroj-my-ostavlyaem-kristofera-robina-i-vinn">ГЛАВА ВОСЕМНАДЦАТАЯ, в которой мы оставляем Кристофера Робина и Винни-Пуха в зачарованном месте</h2>
                <p>Кристофер Робин куда-то уходил. Совсем. Никто те знал, почему он уходит; никто не знал, куда он уходит; да, да — никто не знал даже, почему он знает, что Кристофер Робин уходит. Но — по той или по иной причине — все в Лесу чувствовали, что это в конце концов должно случиться. Даже Сашка Букашка, самый крошечный Родственник и Знакомый Кролика, тот, который думал, что видел однажды ногу Кристофера Робина, но был в этом не вполне уверен, потому что он легко мог и ошибиться, — даже С. Б. сказал себе, что Положение Дел меняется, а Рано и Поздно (два других Родственника и Знакомых) сказали друг другу: «Ну, Рано?» и «Ну, Поздно?» — таким безнадежным голосом, что было ясно — ожидать ответа нет никакого смысла.</p>
                <p>И однажды, почувствовав, что он больше ждать не может, Кролик составил Сообщение, и вот что в нем говорилось:</p>
                <p>Сообщение все-все-все встречаются возле дома на Пуховой опушке принимают лизорюцию слева по порядку номеров подпись Кролик</p>
                <p>Ему пришлось переписать это раза два-три, пока он сумел заставить «лизорюцию» выглядеть так, как ей полагалось выглядеть с точки зрения Кролика; зато когда наконец этот труд был окончен, он обежал всех и всем прочел свое произведение вслух. Все-Все-Все сказали, что придут.</p>
                <p>— Ну, — сказал Иа-Иа, увидев процессию, направлявшуюся к его дому, — это действительно сюрприз. А я тоже приглашен? Не может быть!</p>
                <p>— Не обращай внимания на Иа, — шепнул Кролик Пуху. — Я ему все рассказал еще утром.</p>
                <p>Все спросили у Иа, как он поживает, и он сказал, что никак, не о чем говорить, и тогда все сели; и как только все уселись, Кролик снова встал.</p>
                <p>— Мы все знаем, почему мы собрались, — сказал он, — но я просил моего друга Иа…</p>
                <p>— Это я, — сказал Иа. — Звучит неплохо!</p>
                <p>— Я просил его предложить Лизорюцию.</p>
                <p>И Кролик сел.</p>
                <p>— Ну давай, Иа, — сказал он.</p>
                <p>— Прошу не торопить меня, — сказал Иа-Иа, медленно поднимаясь. — Прошу не нудавайкать.</p>
                <p>Он вынул из-за уха свернутую трубкой бумагу и не спеша развернул ее.</p>
                <p>— Об этом никто ничего не знает, — продолжал он, — это Сюрприз.</p>
                <p>С достоинством откашлявшись, он снова заговорил.</p>
                <p>— Словом, в общем и целом, и так далее и тому подобное, прежде чем я начну, или, пожалуй, лучше сказать, прежде чем я кончу, я должен вам прочесть Поэтическое Произведение. Доселе… доселе — это трудное слово, означающее… Ну, вы сейчас узнаете, что оно означает. Доселе, как я уже говорил, доселе вся Поэзия в Лесу создавалась Пухом, Медведем с милым характером, но разительным недостатком ума. Однако Поэма, которую я намереваюсь прочесть вам сейчас, была создана Иа-Иа, то есть мною, в часы досуга. Если кто-нибудь отберет у младенца Ру орехи, а также разбудит Сову, мы все сможем насладиться этим творением. Я называю его даже Стихотворением.</p>
                <p>СТИХОТВОРЕНИЕ</p>
                <p>СОЧИНИЛ ОСЕЛ ИА-ИА</p>
                <p>——————————</p>
                <p><em>Кристофер Робин уходит от нас.</em></p>
                <div class="ad-tag ad-can-close ad-in-content" ad-num="18">
                    <div class="ad-tag-inner">
                        <div class="ad-placeholder">
                            <div class="ad-placeholder-text placeholder-cite">
                                <div class="cite-text">Любить чтение — это обменивать часы скуки, неизбежные в жизни, на часы большого наслаждения.</div>
                                <div class="cite-author">Шарль Луи де Монтескьё</div>
                            </div>
                        </div>
                        <div class="MKN_ITA_300M actual-ad"></div>
                    </div><i class="ad-close-btn fa fa-times-thin fa-2x" aria-hidden="true"></i>
                </div>
                <p><em>По-моему, это факт.</em></p>
                <p><em>Куда?</em></p>
                <p><em>Никто не знает.</em></p>
                <p><em>Но он уходит, увы!</em></p>
                <p><em>Да, он нас покидает.</em></p>
                <p><em>(Вот рифма к слову «знает».)</em></p>
                <figure class="wp-block-image">
                    <picture class="wp-image-36060">
                        <source class="lazy-load is-loaded" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh29.jpg.webp" type="image/webp" srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh29.jpg.webp" data-loaded="true"><img loading="lazy" width="249" height="397" src="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh29.jpg" alt="Винни-Пух и все-все-все - Алан Милн" class="wp-image-36060 lazy-load is-loaded" sizes="(max-width: 249px) 100vw, 249px" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh29.jpg 249w, https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh29-125x200.jpg 125w" data-src="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh29.jpg" style="height: 397px;" srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh29.jpg 249w, https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh29-125x200.jpg 125w" data-loaded="true">
                    </picture>
                </figure>
                <p><em>Мы все огорчены</em></p>
                <p><em>(Тут рифма к слову «увы»).</em></p>
                <p><em>Нам всем и правда грустно.</em></p>
                <p><em>Терпеть все это трудно.</em></p>
                <p><em>(Неплохо?)</em></p>
                <p><em>(Так и нет рифмы к слову «факт». Досадно!)</em></p>
                <p><em>(А ведь теперь нужно еще рифму к слову</em></p>
                <p><em>«Досадно». Досадно!)</em></p>
                <p><em>(Пусть эти два «досадно» рифмуют друг</em></p>
                <p><em>С другом, ладно?)</em></p>
                <p><em>Я вижу —</em></p>
                <p><em>Не так-то легко написать</em></p>
                <p><em>Очень хорошую строчку,</em></p>
                <p><em>И лучше бы все</em></p>
                <p><em>Сначала начать,</em></p>
                <p><em>Но легче</em></p>
                <p><em>Поставить точку…</em></p>
                <p><em>Нет!</em></p>
                <p><em>Кристофер Робин,</em></p>
                <p><em>Мы все здесь твои</em></p>
                <p><em>Друзьи…</em></p>
                <p><em>(Не так!)</em></p>
                <p><em>Мы все здесь друзья.</em></p>
                <p><em>(Твоя? Опять не так!)</em></p>
                <p><em>В общем,</em></p>
                <p><em>Прими на прощанье от всех</em></p>
                <p><em>Пожеланье успех…</em></p>
                <p><em>(Не так!)</em></p>
                <p><em>Прими пожеланье успехов</em></p>
                <p><em>От всехов!</em></p>
                <p><em>(Фу ты, вот неуклюжие слова,</em></p>
                <p><em>Что-нибудь всегда получается не так!)</em></p>
                <p><em>Словом,</em></p>
                <p><em>Мы все тебе их желаем,</em></p>
                <p><em>Ты молодец!</em></p>
                <p>КОНЕЦ</p>
                <p>— Если кто-нибудь намерен аплодировать, — сказал Иа, прочитав все это, — то время настало.</p>
                <p>Все захлопали.</p>
                <p>— Благодарю вас, — сказал Иа, — я приятно удивлен и тронут, хотя, возможно, аплодисментам и не хватает звучности.</p>
                <p>— Эти стихи гораздо лучше моих, — с восторгом сказал Винни-Пух. И он действительно был в этом уверен.</p>
                <p>— Что ж, — скромно объяснил Иа. — Так и было задумано.</p>
                <p>— Лизорюция, — сказал Кролик, — такая, что мы все это подпишем и отнесем Кристоферу Робину.</p>
                <p>И резолюция была подписана: Пух, Сова, Пятачок, Иа, Кролик, Кенга, Большая Клякса (это была подпись Тигры) и Три Маленькие Кляксы (это была подпись Крошки Ру).</p>
                <p>И Все-Все-Все отправились к дому Кристофера Робина.</p>
                <figure class="wp-block-image">
                    <picture class="wp-image-36061">
                        <source class="lazy-load is-loaded" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh182.jpg.webp" type="image/webp" srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh182.jpg.webp" data-loaded="true"><img loading="lazy" width="253" height="406" src="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh182.jpg" alt="Винни-Пух и все-все-все - Алан Милн" class="wp-image-36061 lazy-load is-loaded" sizes="(max-width: 253px) 100vw, 253px" data-srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh182.jpg 253w, https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh182-125x200.jpg 125w" data-src="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh182.jpg" style="height: 406px;" srcset="https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh182.jpg 253w, https://mishka-knizhka.ru/wp-content/uploads/2019/06/vinni-pukh182-125x200.jpg 125w" data-loaded="true">
                    </picture>
                </figure>
                <p>— Здравствуйте, друзья, — сказал Кристофер Робин. — Здравствуй, Пух!</p>
                <p>Все они сказали: «Здравствуй», и вдруг всем стало как-то грустно и не по себе — ведь получалось, что они пришли прощаться, а им очень-очень не хотелось об этом думать. Они беспомощно сбились в кучу, ожидая, чтобы заговорил кто-нибудь другой, и только подталкивали друг друга, шепча: «Ну, давай ты», и мало-помалу вперед вытеснили Иа, а все остальные столпились за ним.</p>
                <p>— В чем дело, Иа? — спросил Кристофер Робин.</p>
                <p>Иа помахал хвостом, очевидно желая себя подбодрить, и начал.</p>
                <p>— Кристофер Робин, — сказал он, — мы пришли, чтобы сказать, чтобы передать… как это называется… сочинял один… но мы все — потому что мы слышали…я хочу сказать, мы все знаем, ну, ты понимаешь сам… Мы… Ты… Короче, чтобы не тратить много слов, вот! — Он сердито оглянулся на остальных и сказал: — Весь Лес тут собрался! Совершенно нечем дышать! В жизни не видел такой бессмысленной толпы животных, и главное, все не там, где надо. Неужели вы не понимаете, что Кристоферу Робину хочется побыть одному? Я пошел! И он поскакал прочь.</p>
                <p>Сами хорошенько не понимая почему, остальные тоже начали расходиться, и когда Кристофер Робин закончил чтение Стихотворения и поднял глаза, собираясь сказать «спасибо», перед ним был один Винни Пух.</p>
                <p>— Это очень трогательно, — сказал Кристофер Робин, складывая бумажку и убирая ее в карман. — Пойдем, Пух. — И он быстро зашагал по дороге.</p>
                <p>— Куда мы идем? — спросил Пух, стараясь поспеть за ним и одновременно понять, что им предстоит — Искледиция или еще какое-нибудь Я не знаю что.</p>
                <p>— Никуда, — сказал Кристофер Робин.</p>
                <p>Что ж, они пошли туда, и, после того как они прошли порядочный кусок, Кристофер Робин спросил:</p>
                <p>— Пух, что ты любишь делать больше всего на свете?</p>
                <p>— Ну, — ответил Пух, — я больше всего люблю…</p>
                <p>И тут ему пришлось остановиться и подумать, потому что хотя кушать мед — очень приятное занятие, но есть такая минутка, как раз перед тем как ты примешься за мед, когда еще приятнее, чем потом, когда ты уже ешь, но только Пух не знал, как эта минутка называется. И еще он подумал, что играть с Кристофером Робином тоже очень приятное дело, и играть с Пятачком — это тоже очень приятное дело, и вот когда он все это обдумал, он сказал:</p>
                <p>— Что я люблю больше всего на всем свете — это когда мы с Пятачком придем к тебе в гости и ты говоришь: «Ну как, не пора ли подкрепиться?», а я говорю: «Я бы не возражал, а ты как, Пятачок?», и день такой шумелочный, и все птицы поют. А ты что больше всего любишь делать?</p>
                <p>— Это все я тоже люблю, — сказал Кристофер Робин, — но что больше всего я люблю делать — это…</p>
                <p>— Ну, ну?</p>
                <p>— Ничего.</p>
                <p>— А как ты это делаешь? — спросил Пух после очень продолжительного размышления.</p>
                <p>— Ну вот, спросят, например, тебя, как раз когда ты собираешься это делать: «Что ты собираешься делать, Кристофер Робин?», а ты говоришь: «Да ничего», а потом идешь и делаешь.</p>
                <p>— А, понятно! — сказал Пух.</p>
                <p>— Вот, например, сейчас мы тоже делаем такое ничевошное дело.</p>
                <p>— Понятно! — повторил Пух.</p>
                <p>— Например, когда просто гуляешь, слушаешь то, чего никто не слышит, и ни о чем не заботишься.</p>
                <p>— А-а! — сказал Пух.</p>
                <p>Они шли, думая о Том и о Сем, и постепенно они добрались до Зачарованного Места, которое называлось Капитанский Мостик, потому что оно было на самой вершине холма. Там росло шестьдесят с чем-то деревьев, и Кристофер Робин знал, что это место зачаровано, потому что никто не мог сосчитать, сколько тут деревьев — шестьдесят три или шестьдесят четыре, даже если он привязывал к каждому сосчитанному дереву кусочек бечевки.</p>
                <p>Как полагается в Зачарованном Месте, и земля тут была другая, не такая, как в Лесу, где росли всякие колючки и папоротник и лежали иголки; здесь она вся росла ровной-ровной зеленой травкой, гладкой, как газон.</p>
                <p>Это было единственное место в Лесу, где можно было сесть спокойно и посидеть и не надо было почти сразу же вскакивать в поисках чего-нибудь другого. Наверно, потому, что на Капитанском Мостике вы видели все-все на свете — во всяком случае, до того самого места, где, нам кажется, небо сходится с землей.</p>
                <p>И вдруг Кристофер Робин начал рассказывать Пуху всякие интересные вещи — про людей, которых называют Королями и Королевами, и про еще каких-то, которые называются Купцами, и про то место, которое называется Европа, и про потерянный остров посреди моря, куда не приходят корабли, и как сделать Насос (если нужно), и как в Рыцарей посвящали, и какие товары мы получаем из Бразилии. А Винни-Пух, прислонившись спиной к одному из шестидесяти с чем-то деревьев и сложив лапки на животе, говорил: «О-ох», и «А-а, понятно», и «Не может быть», и думал о том, как было бы чудесно, если бы в голове у него были не опилки, а настоящий ум. И мало-помалу Кристофер Робин рассказал все, что знал, и затих и сидел, глядя с Капитанского Мостика на весь Белый Свет и желая, чтобы так было всегда.</p>
                <p>А Пух продолжал размышлять. И вдруг он спросил Кристофера Робина:</p>
                <p>— А это очень хорошо, когда тебя посвистят?… В эти… Ну, как ты говорил?</p>
                <p>— Чего? — спросил Кристофер Робин нехотя, словно прислушиваясь к кому-то другому.</p>
                <p>— Ну, в эти… на лошадке, — объяснил Пух.</p>
                <p>— Посвятят в Рыцари?</p>
                <p>— Ах, вот как это называется, — сказал Пух.</p>
                <p>— А я думал, это посви… Ну ладно. Они не хуже Короля и Купца и всех остальных, про которых ты говорил?</p>
                <p>— Ну, поменьше Короля, — сказал Кристофер Робин, и тут же, заметив, что Пух, кажется, огорчен, он поспешно добавил: — Но побольше Купца!</p>
                <p>— А Медведь тоже может стать им?</p>
                <p>— Конечно, может! — сказал Кристофер Робин. — Я тебя сейчас посвящу.</p>
                <p>Он взял палочку и, слегка ударив Винни-Пуха по плечу, сказал:</p>
                <p>— Встань, сэр Винни-Пух де Медведь, вернейший из моих рыцарей!</p>
                <p>Понятно, Пух встал, а потом опять сел и сказал: «Спасибо», как полагается говорить, когда тебя посвятили в Рыцари. И незаметно он снова задремал, и во сне он и Сэр Насос, и Сэр Остров, и Купцы жили все вместе, и у них была Лошадка, и все они были верными Рыцарями доброго короля Кристофера Робина (все, кроме Купцов, которые смотрели за Лошадкой). Правда, время от времени он качал головой и говорил про себя: «Я что-то перепутал». А потом он начал думать обо всех вещах, которые Кристофер Робин захочет рассказать ему, когда вернется оттуда, куда собрался уходить, и как тогда трудно будет бедному Медведю с опилками в голове ничего не перепутать.</p>
                <p>«И тогда, наверно, — грустно сказал он про себя, — Кристофер Робин не захочет мне ничего больше рассказывать. Интересно, если ты Верный Рыцарь, неужели ты должен быть только верным, и все, а рассказывать тебе ничего не будут?»</p>
                <p>Тут Кристофер Робин, который все еще смотрел в пространство, подперев голову рукой, вдруг окликнул его:</p>
                <p>— Пух!</p>
                <p>— Что? — сказал Пух.</p>
                <p>— Когда я буду… Когда… Пух!</p>
                <p>— Что, Кристофер Робин?</p>
                <p>— Мне теперь не придется больше делать то, что я больше всего люблю.</p>
                <p>— Никогда?</p>
                <p>— Ну, может, иногда. Но не все время. Они не позволяют.</p>
                <p>Пух ждал продолжения, но Кристофер Робин опять замолчал.</p>
                <p>— Что же, Кристофер Робин? — сказал Пух, желая ему помочь.</p>
                <p>— Пух, когда я буду… ну, ты знаешь… когда я уже не буду ничего не делать, ты будешь иногда приходить сюда?</p>
                <p>— Именно я?</p>
                <p>— Да, Пух.</p>
                <p>— А ты будешь приходить?</p>
                <p>— Да, Пух, обязательно. Обещаю тебе.</p>
                <p>— Это хорошо, — сказал Пух.</p>
                <p>— Пух, обещай, что ты меня никогда-никогда не забудешь. Никогда-никогда! Даже когда мне будет сто лет.</p>
                <p>Пух немного подумал.</p>
                <p>— А сколько тогда мне будет?</p>
                <p>— Девяносто девять.</p>
                <p>Винни-Пух кивнул.</p>
                <p>— Обещаю, — сказал он.</p>
                <p>Все еще глядя вдаль, Кристофер Робин протянул руку и пожал лапку Пуха.</p>
                <p>— Пух, — серьезно сказал Кристофер Робин, — если я… если я буду не совсем такой… — Он остановился и попробовал выразиться иначе: — Пух, ну, что бы ни случилось, ты ведь всегда поймешь. Правда?</p>
                <p>— Что пойму?</p>
                <p>— Ничего. — Мальчик засмеялся и вскочил на ноги. — Пошли.</p>
                <p>— Куда? — спросил Винни-Пух.</p>
                <p>— Куда-нибудь, — сказал Кристофер Робин.</p>
                <p>И они пошли. Но куда бы они ни пришли и что бы ни случилось с ними по дороге, — здесь в Зачарованном Месте на вершине холма в Лесу, маленький мальчик будет всегда, всегда играть со своим медвежонком.<br></p>
            </div>';
            }?>
            <form action="text.php" method='POST'>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name='texta' rows="20"><?= $text ?></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Отправить</button>
            </form>
            <form action="text.php">
                <button type="submit" class="btn btn-danger">Очистить</button>
            </form>
        </div>
        <div class="container">
            <h3>Задание 2</h3>
            <?php if (preg_match_all('/<img[^>]+>/', $text, $arr)) {
                foreach ($arr[0] as $value) echo $value;
            } ?>
            <h3>Задание 6</h3>
            <?= $text2 ?>
        </div>
    </section>

</body>