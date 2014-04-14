<?php
/**
 * Czech language file
 *
 * PHP Version 5.3
 *
 * This Source Code Form is subject to the terms of the Mozilla Public License,
 * v. 2.0. If a copy of the MPL was not distributed with this file, You can
 * obtain one at http://mozilla.org/MPL/2.0/.
 *
 * @category  phpMyFAQ
 * @package   Translation
 * @author    Jaroslav Síka <jsika@vexcor.cz>
 * @copyright 2004-2014 phpMyFAQ Team
 * @license   http://www.mozilla.org/MPL/2.0/ Mozilla Public License Version 2.0
 * @link      http://www.phpmyfaq.de
 * @since     2004-04-07
 */

$PMF_LANG["metaCharset"] = "UTF-8";
$PMF_LANG["metaLanguage"] = "cs";
$PMF_LANG["language"] = "Czech";
// ltr: left to right (e.g. English language); rtl: right to left (e.g. Arabic language)
$PMF_LANG["dir"] = "ltr";

$PMF_LANG["nplurals"] = "3";
/**
 * This parameter is used with the function 'plural' from inc/PMF_Language/Plurals.php
 * If this parameter and function are not in sync plural form support will be broken.
 */

// Navigation
$PMF_LANG["msgCategory"] = "Kategorie";
$PMF_LANG["msgShowAllCategories"] = "Zobrazit všechny kategorie";
$PMF_LANG["msgSearch"] = "Hledat";
$PMF_LANG["msgAddContent"] = "Navrhnout dotaz";
$PMF_LANG["msgQuestion"] = "Položit dotaz";
$PMF_LANG["msgOpenQuestions"] = "Nezodpovězené";
$PMF_LANG["msgHelp"] = "Nápověda";
$PMF_LANG["msgContact"] = "Kontakt";
$PMF_LANG["msgHome"] = "Úvodní stránka";
$PMF_LANG["msgNews"] = "Nové";
$PMF_LANG["msgUserOnline"] = " Připojených uživatelů";
$PMF_LANG["msgXMLExport"] = "XML soubor";
$PMF_LANG["msgBack2Home"] = "zpět na Úvod";

// Contentpages
$PMF_LANG["msgFullCategories"] = "Kategorie a dotazy";
$PMF_LANG["msgFullCategoriesIn"] = "Kategorie s dotazy v ";
$PMF_LANG["msgSubCategories"] = "Podkategorie";
$PMF_LANG["msgEntries"] = "dotazů";
$PMF_LANG["msgEntriesIn"] = "Záznamy v kategorii ";
$PMF_LANG["msgViews"] = "zobrazení";
$PMF_LANG["msgPage"] = "Strana ";
$PMF_LANG["msgPages"] = "Stran";
$PMF_LANG["msgPrevious"] = "předchozí";
$PMF_LANG["msgNext"] = "další";
$PMF_LANG["msgCategoryUp"] = "o kategorii výše";
$PMF_LANG["msgLastUpdateArticle"] = "Aktualizováno: ";
$PMF_LANG["msgAuthor"] = "Autor: ";
$PMF_LANG["msgPrinterFriendly"] = "Verze pro tisk";
$PMF_LANG["msgPrintArticle"] = "Vytisknout dotaz";
$PMF_LANG["msgMakeXMLExport"] = "Exportovat do XML";
$PMF_LANG["msgAverageVote"] = "Průměrné hodnocení:";
$PMF_LANG["msgVoteUseability"] = "Můžete ohodnotit tento záznam:";
$PMF_LANG["msgVoteFrom"] = "z";
$PMF_LANG["msgVoteBad"] = "naprosto nepoužitelná";
$PMF_LANG["msgVoteGood"] = "velmi užitečná";
$PMF_LANG["msgVotings"] = "Hodnocení";
$PMF_LANG["msgVoteSubmit"] = "Hodnotit";
$PMF_LANG["msgVoteThanks"] = "Děkujeme za vaše hodnocení!";
$PMF_LANG["msgYouCan"] = "Můžete přidat ";
$PMF_LANG["msgWriteComment"] = "komentář k odpovědi";
$PMF_LANG["msgShowCategory"] = "Přehled obsahu: ";
$PMF_LANG["msgCommentBy"] = "Komentář od ";
$PMF_LANG["msgCommentHeader"] = "Komentář k tomuto záznamu";
$PMF_LANG["msgYourComment"] = "Komentář:";
$PMF_LANG["msgCommentThanks"] = "Děkujeme za komentář!";
$PMF_LANG["msgSeeXMLFile"] = "otevři XML-Soubor";
$PMF_LANG["msgSend2Friend"] = "Poslat příteli";
$PMF_LANG["msgS2FName"] = "Jméno:";
$PMF_LANG["msgS2FEMail"] = "E-mail adresa:";
$PMF_LANG["msgS2FFriends"] = "Vaši přátelé:";
$PMF_LANG["msgS2FEMails"] = ". e-mail adresa:";
$PMF_LANG["msgS2FText"] = "Bude odeslán následující text:";
$PMF_LANG["msgS2FText2"] = "";
$PMF_LANG["msgS2FMessage"] = "Dodatečná zpráva pro vaše přátele:";
$PMF_LANG["msgS2FButton"] = "Odeslat";
$PMF_LANG["msgS2FThx"] = "Děkujeme za vaše doporučení!";
$PMF_LANG["msgS2FMailSubject"] = "Doporučení od ";

// Search
$PMF_LANG["msgSearchWord"] = "Vyhledávání";
$PMF_LANG["msgSearchFind"] = "Hledat ve výsledcích ";
$PMF_LANG["msgSearchAmount"] = " hledat výsledek";
$PMF_LANG["msgSearchAmounts"] = " hledat výsledky";
$PMF_LANG["msgSearchCategory"] = "Kategorie: ";
$PMF_LANG["msgSearchContent"] = "Obsah: ";

// new Content
$PMF_LANG["msgNewContentHeader"] = "Navrhnout nový dotaz";
$PMF_LANG["msgNewContentAddon"] = "Váš návrh dotazu a odpověď bude zveřejněna po zpracování pracovníkem podpory. <br />
Povinná pole jsou <strong>jméno</strong>, <strong>e-mailová adresa</strong>, <strong>kategorie</strong>, <strong>předmět</strong> a <strong>dotaz</strong>. <br />Klíčová slova prosím oddělujte pouze mezerou.
<br /><br />
<strong style=\"color: Red;\">POZOR:</strong> Tento formulář <strong>neslouží</strong> pro kontakt na technickou podporu! Lze jím pouze navrhnout nový dotaz, o kterém si myslíte, že chybí v této databázi.";
$PMF_LANG["msgNewContentUBB"] = "<p>Pro vaše dotazy můžete použít BB kód <a href=\"help/ubbcode.php\" target=\"_blank\">Nápověda o BB kódech</a></p>";
$PMF_LANG["msgNewContentName"] = "Jméno:";
$PMF_LANG["msgNewContentMail"] = "E-mailová adresa:";
$PMF_LANG["msgNewContentCategory"] = "Kategorie";
$PMF_LANG["msgNewContentTheme"] = "Předmět:";
$PMF_LANG["msgNewContentArticle"] = "Dotaz:";
$PMF_LANG["msgNewContentKeywords"] = "Klíčová slova:";
$PMF_LANG["msgNewContentLink"] = "Odkaz tohoto dotazu";
$PMF_LANG["msgNewContentSubmit"] = "Odeslat";
$PMF_LANG["msgInfo"] = "Více informací: ";
$PMF_LANG["msgNewContentThanks"] = "Děkujeme za váš návrh dotazu!";
$PMF_LANG["msgNoQuestionsAvailable"] = "Momentálně nejsou žádné nezodpovězené dotazy.";

// ask Question
$PMF_LANG["msgNewQuestion"] = "Napište svůj dotaz:";
$PMF_LANG["msgAskCategory"] = "Kategorie dotazu";
$PMF_LANG["msgAskYourQuestion"] = "Dotaz:";
$PMF_LANG["msgAskThx4Mail"] = "<h2>Děkujeme za váš e-mail!</h2>";
$PMF_LANG["msgDate_User"] = "Datum / Uživatel";
$PMF_LANG["msgQuestion2"] = "Otázka";
$PMF_LANG["msg2answer"] = "Odpovědět";
$PMF_LANG["msgQuestionText"] = "Zde jsou dotazy ostatních uživatelů. Odpovíte-li na některé z nich, vaše odpovědi zde mohou být zveřejněny.";

// Help
$PMF_LANG["msgHelpText"] = "<p>Struktura je naprosto jednoduchá. <br>
Můžete buďto procházet jednotlivé <strong><a href=\"?action=show\">kategorie</a></strong> nebo použít <strong><a href=\"?action=search\">prohledávání FAQ</a></strong> pomocí klíčových slov.</p>";

// Contact
$PMF_LANG["msgContactEMail"] = "E-mail správci:";
$PMF_LANG["msgMessage"] = "Zpráva:";

// Startsite
$PMF_LANG["msgNews"] = "Novinky";
$PMF_LANG["msgTopTen"] = "TOP 10";
$PMF_LANG["msgHomeThereAre"] = "V databázi je ";
$PMF_LANG["msgHomeArticlesOnline"] = " záznamů";
$PMF_LANG["msgNoNews"] = "Žádné novinky";
$PMF_LANG["msgLatestArticles"] = "5 nejnovějších dotazů:";

// E-Mailbenachrichtigung
$PMF_LANG["msgMailThanks"] = "Děkujeme za Váš návrh.";
$PMF_LANG["msgMailCheck"] = "V databázi je nový záznam! \nProsím zkontroluj admin sekci!";
$PMF_LANG["msgMailContact"] = "Vaše zpráva byla odeslána administrátorovi.";

// Fehlermeldungen
$PMF_LANG["err_noDatabase"] = "Není dostupné spojení s databází.";
$PMF_LANG["err_noHeaders"] = "Žádná kategorie nenalezena.";
$PMF_LANG["err_noArticles"] = "<p>Žádné záznamy nenalezeny.</p>";
$PMF_LANG["err_badID"] = "<p>Chybné ID.</p>";
$PMF_LANG["err_noTopTen"] = "<p>Žádné z TOP 10 není k dispozici.</p>";
$PMF_LANG["err_nothingFound"] = "<p>Žádné záznamy nenalezeny.</p>";
$PMF_LANG["err_SaveEntries"] = "Povinná pole jsou <strong>jméno</strong>, <strong>e-mailová adresa</strong>, <strong>kategorie</strong>, <strong>předmět</strong> a <strong>dotaz</strong>!<br /><br />\n<a href=\"javascript:history.back();\">O stránku zpět</a><br /><br />\n";
$PMF_LANG["err_SaveComment"] = "Povinná pole jsou <strong>jméno</strong>, <strong>e-mailová adresa</strong> a <strong>komentář</strong>!<br /><br />\n<a href=\"javascript:history.back();\">O stránku zpět</a><br /><br />\n";
$PMF_LANG["err_VoteTooMuch"] = "<p>Opakované hlasování se nepočítá. <a href=\"javascript:history.back();\">Klikněte zde</a> pro návrat.</p>";
$PMF_LANG["err_noVote"] = "<p><strong>Není hodnocení!</strong> <a href=\"javascript:history.back();\">Prosím klikněte zde</a> pro hlasování.</p>";
$PMF_LANG["err_noMailAdress"] = "Adresa není správná.<br /><a href=\"javascript:history.back();\">zpět</a>";
$PMF_LANG["err_sendMail"] = "Povinná pole jsou <strong>jméno</strong>, <strong>email adresa</strong> a <strong>dotaz</strong>!";

// Hilfe zur Suche
$PMF_LANG["help_search"] = "Prohledávejte databázi, tak jak jste zvyklí z běžných vyhledávačů. <br />Pro zvýšení relevance nalezených odpovědí přispěje použití více klíčových slov ve vašem dotazu (např. KlíčovéSlovo1 KlíčovéSlovo2).<br /><br />";

// Menü
$PMF_LANG["ad"] = "Sekce administrace";
$PMF_LANG["ad_menu_user_administration"] = "Správa uživatelů";
$PMF_LANG["ad_menu_entry_aprove"] = "Schvalování záznamů";
$PMF_LANG["ad_menu_entry_edit"] = "Editace záznamů";
$PMF_LANG["ad_menu_categ_add"] = "Přidat kategorii";
$PMF_LANG["ad_menu_categ_edit"] = "Editovat kategorii";
$PMF_LANG["ad_menu_news_add"] = "Přidej novinky";
$PMF_LANG["ad_menu_news_edit"] = "Editovat novinky";
$PMF_LANG["ad_menu_open"] = "Editovat nezodpovězené";
$PMF_LANG["ad_menu_stat"] = "Statistiky";
$PMF_LANG["ad_menu_cookie"] = "Cookies";
$PMF_LANG["ad_menu_session"] = "Zobrazit sessiony";
$PMF_LANG["ad_menu_adminlog"] = "Zobrazit Admin log";
$PMF_LANG["ad_menu_passwd"] = "Změňit heslo";
$PMF_LANG["ad_menu_logout"] = "Odhlásit se";
$PMF_LANG["ad_menu_startpage"] = "Úvodní strana";

// Nachrichten
$PMF_LANG["ad_msg_identify"] = "Prosím identifikujte se.";
$PMF_LANG["ad_msg_passmatch"] = "Obě hesla musí být <strong>stejná</strong>!";
$PMF_LANG["ad_msg_savedsuc_1"] = "Profil ";
$PMF_LANG["ad_msg_savedsuc_2"] = "byl úspěšně uložen.";
$PMF_LANG["ad_msg_mysqlerr"] = "Kvůli <strong>chybě databáze</strong> nemůže být profil uložen.";
$PMF_LANG["ad_msg_noauth"] = "Nemáte oprávnění.";

// Allgemein
$PMF_LANG["ad_gen_page"] = "Strana";
$PMF_LANG["ad_gen_of"] = " ";
$PMF_LANG["ad_gen_lastpage"] = "Předchozí Strana";
$PMF_LANG["ad_gen_nextpage"] = "Další Strana";
$PMF_LANG["ad_gen_save"] = "Ulož";
$PMF_LANG["ad_gen_reset"] = "Reset";
$PMF_LANG["ad_gen_yes"] = "Ano";
$PMF_LANG["ad_gen_no"] = "Ne";
$PMF_LANG["ad_gen_top"] = "Vrchol stránky";
$PMF_LANG["ad_gen_ncf"] = "Žádná kategorie nenalezena!";
$PMF_LANG["ad_gen_delete"] = "Smaž";

// Benutzerverwaltung
$PMF_LANG["ad_user"] = "Administrace uživatelů";
$PMF_LANG["ad_user_username"] = "Registrovaní uživatelé";
$PMF_LANG["ad_user_rights"] = "Uživatelská práva";
$PMF_LANG["ad_user_edit"] = "edituj";
$PMF_LANG["ad_user_delete"] = "smaž";
$PMF_LANG["ad_user_add"] = "Přidej uživatele";
$PMF_LANG["ad_user_profou"] = "Profil uživatele";
$PMF_LANG["ad_user_name"] = "Jméno";
$PMF_LANG["ad_user_password"] = "Heslo";
$PMF_LANG["ad_user_confirm"] = "Potvrď";
$PMF_LANG["ad_user_rights"] = "Práva";
$PMF_LANG["ad_user_del_1"] = "Uživatel";
$PMF_LANG["ad_user_del_2"] = "má být smazán?";
$PMF_LANG["ad_user_del_3"] = "Jste si jisti?";
$PMF_LANG["ad_user_deleted"] = "Uživatel byl úspěšně vymazán.";
$PMF_LANG["ad_user_checkall"] = "Vybrat vše"; 

// Beitragsverwaltung
$PMF_LANG["ad_entry_aor"] = "Administrace záznamů";
$PMF_LANG["ad_entry_id"] = "ID";
$PMF_LANG["ad_entry_topic"] = "Téma";
$PMF_LANG["ad_entry_action"] = "Akce";
$PMF_LANG["ad_entry_edit_1"] = "Edituj záznam";
$PMF_LANG["ad_entry_edit_2"] = "";
$PMF_LANG["ad_entry_theme"] = "Téma:";
$PMF_LANG["ad_entry_content"] = "Obsah:";
$PMF_LANG["ad_entry_keywords"] = "Klíčová slova:";
$PMF_LANG["ad_entry_author"] = "Autor:";
$PMF_LANG["ad_entry_category"] = "Kategorie:";
$PMF_LANG["ad_entry_active"] = "Aktivovat zobrazení tohoto záznamu:";
$PMF_LANG["ad_entry_date"] = "Datum:";
$PMF_LANG["ad_entry_changed"] = "Změněno?";
$PMF_LANG["ad_entry_changelog"] = "Změny:";
$PMF_LANG["ad_entry_commentby"] = "Komentář od";
$PMF_LANG["ad_entry_comment"] = "Komentáře:";
$PMF_LANG["ad_entry_save"] = "Ulož";
$PMF_LANG["ad_entry_delete"] = "smaž";
$PMF_LANG["ad_entry_delcom_1"] = "Určitě má být komentář uživatele";
$PMF_LANG["ad_entry_delcom_2"] = "vymazán?";
$PMF_LANG["ad_entry_commentdelsuc"] = "Komentář byl <strong>úspěšně</strong> vymazán.";
$PMF_LANG["ad_entry_back"] = "Zpět k článku";
$PMF_LANG["ad_entry_commentdelfail"] = "Komentář <strong>nebyl</strong> smazán.";
$PMF_LANG["ad_entry_savedsuc"] = "Změny byly <strong>uloženy</strong>.";
$PMF_LANG["ad_entry_savedfail"] = "Bohužel došlo k <strong>chybě databáze</strong>.";
$PMF_LANG["ad_entry_del_1"] = "Určitě má být téma";
$PMF_LANG["ad_entry_del_2"] = " ";
$PMF_LANG["ad_entry_del_3"] = "smazáno?";
$PMF_LANG["ad_entry_delsuc"] = "Záznam <strong>úspěšně</strong> smazán.";
$PMF_LANG["ad_entry_delfail"] = "Záznam <strong>nebyl smazán</strong>!";
$PMF_LANG["ad_entry_back"] = "Zpět";


// Newsverwaltung
$PMF_LANG["ad_news_header"] = "Nadpis";
$PMF_LANG["ad_news_text"] = "Text záznamu";
$PMF_LANG["ad_news_link_url"] = "Odkaz: (<strong>bez http://</strong>)!";
$PMF_LANG["ad_news_link_title"] = "Název odkazu:";
$PMF_LANG["ad_news_link_target"] = "Cíl odkazu";
$PMF_LANG["ad_news_link_window"] = "Odkaz otevře nové okno";
$PMF_LANG["ad_news_link_faq"] = "Odkaz uvnitř systému";
$PMF_LANG["ad_news_add"] = "Přidej novinky";
$PMF_LANG["ad_news_id"] = "#";
$PMF_LANG["ad_news_headline"] = "Nadpis";
$PMF_LANG["ad_news_date"] = "Datum";
$PMF_LANG["ad_news_action"] = "Akce";
$PMF_LANG["ad_news_update"] = "aktualizuj";
$PMF_LANG["ad_news_delete"] = "smaž";
$PMF_LANG["ad_news_nodata"] = "Data nenalezena.";
$PMF_LANG["ad_news_updatesuc"] = "Novinky byly aktualizovány.";
$PMF_LANG["ad_news_del"] = "Určitě chcete smazat tuto novinku?";
$PMF_LANG["ad_news_yesdelete"] = "ano, smaž!";
$PMF_LANG["ad_news_nodelete"] = "ne!";
$PMF_LANG["ad_news_delsuc"] = "Novinka smazána.";
$PMF_LANG["ad_news_updatenews"] = "Aktualizuj novinky";

// Kategorieverwaltung
$PMF_LANG["ad_categ_new"] = "Přidej novou kategorii";
$PMF_LANG["ad_categ_catnum"] = "Číslo kategorie:";
$PMF_LANG["ad_categ_subcatnum"] = "Číslo podkategorie:";
$PMF_LANG["ad_categ_nya"] = "<em>zatím není k dispozici!</em>";
$PMF_LANG["ad_categ_titel"] = "Název Kategorie:";
$PMF_LANG["ad_categ_add"] = "Přidej Kategorii";
$PMF_LANG["ad_categ_existing"] = "Existující Kategorie";
$PMF_LANG["ad_categ_id"] = "#";
$PMF_LANG["ad_categ_categ"] = "Kategorie";
$PMF_LANG["ad_categ_subcateg"] = "Podkategorie";
$PMF_LANG["ad_categ_titel"] = "Jméno kategorie";
$PMF_LANG["ad_categ_action"] = "Akce";
$PMF_LANG["ad_categ_update"] = "aktualizuj";
$PMF_LANG["ad_categ_delete"] = "smaž";
$PMF_LANG["ad_categ_updatecateg"] = "Aktualizuj Kategorii";
$PMF_LANG["ad_categ_nodata"] = "Data nenalezena";
$PMF_LANG["ad_categ_remark"] = "Prosím uvědomte si, že existující záznamy nebudou nadále viditelné, pokud smažete kategorii. Musíte buďto přiřadit k článku novou kategorii, nebo jej vymazat.";
$PMF_LANG["ad_categ_edit_1"] = "Edituj";
$PMF_LANG["ad_categ_edit_2"] = "Kategorie";
$PMF_LANG["ad_categ_add"] = "přidej Kategorii";
$PMF_LANG["ad_categ_added"] = "Kategorie byla přidána.";
$PMF_LANG["ad_categ_updated"] = "Kategorie byla zaktualizována.";
$PMF_LANG["ad_categ_del_yes"] = "ano, smaž!";
$PMF_LANG["ad_categ_del_no"] = "ne!";
$PMF_LANG["ad_categ_deletesure"] = "Určitě chcete smazat kategorii?";
$PMF_LANG["ad_categ_deleted"] = "Kategorie smazána.";

// Cookies
$PMF_LANG["ad_cookie_cookiesuc"] = "Cookie <strong>úspěšně</strong> nastaveno.";
$PMF_LANG["ad_cookie_already"] = "Cookie již bylo nastaveno. Nyní máte následující možnosti:";
$PMF_LANG["ad_cookie_again"] = "Nastav cookie znovu";
$PMF_LANG["ad_cookie_delete"] = "smaž cookie";
$PMF_LANG["ad_cookie_no"] = "Žádné cookie ještě nebylo uloženo. S cookie si můžete uložit svoje přihlašování, takže příště si svoje uživatelské detaily nemusíte pamatovat. Nyní máte následující možnosti:";
$PMF_LANG["ad_cookie_set"] = "Nastav cookie";
$PMF_LANG["ad_cookie_deleted"] = "Cookie úspěšně smazáno.";

// Adminlog
$PMF_LANG["ad_adminlog"] = "Admin log";

// Passwd
$PMF_LANG["ad_passwd_cop"] = "Změňit heslo";
$PMF_LANG["ad_passwd_old"] = "Staré heslo:";
$PMF_LANG["ad_passwd_new"] = "Nové heslo:";
$PMF_LANG["ad_passwd_con"] = "Potvrďit:";
$PMF_LANG["ad_passwd_change"] = "Změňit heslo";
$PMF_LANG["ad_passwd_suc"] = "Heslo úspěšně změněno.";
$PMF_LANG["ad_passwd_remark"] = "<strong>POZOR:</strong><br />Cookie musí být znovu nastaveno!";
$PMF_LANG["ad_passwd_fail"] = "Staré heslo <strong>musí</strong> být napsáno správně a obě nová se musí <strong>shodovat</strong>.";

// Adduser
$PMF_LANG["ad_adus_adduser"] = "Přidat Uživatele:";
$PMF_LANG["ad_adus_name"] = "Jméno:";
$PMF_LANG["ad_adus_password"] = "Heslo:";
$PMF_LANG["ad_adus_add"] = "Přidat uživatele";
$PMF_LANG["ad_adus_suc"] = "Uživatel <strong>úspěšně</strong> přidán.";
$PMF_LANG["ad_adus_edit"] = "Editovat profil";
$PMF_LANG["ad_adus_dberr"] = "<strong>chyba databáze!</strong>";
$PMF_LANG["ad_adus_exerr"] = "Uživatel již <strong>existuje</strong>.";

// Sessions
$PMF_LANG["ad_sess_id"] = "ID";
$PMF_LANG["ad_sess_sid"] = "ID návštěvy";
$PMF_LANG["ad_sess_ip"] = "IP";
$PMF_LANG["ad_sess_time"] = "Čas";
$PMF_LANG["ad_sess_pageviews"] = "Zobrazení";
$PMF_LANG["ad_sess_search"] = "Hledat";
$PMF_LANG["ad_sess_sfs"] = "Hledat návštěvníka";
$PMF_LANG["ad_sess_s_ip"] = "IP:";
$PMF_LANG["ad_sess_s_minct"] = "min. akcí:";
$PMF_LANG["ad_sess_s_date"] = "Datum";
$PMF_LANG["ad_sess_s_after"] = "po";
$PMF_LANG["ad_sess_s_before"] = "před";
$PMF_LANG["ad_sess_s_search"] = "Hledat";
$PMF_LANG["ad_sess_session"] = "Sezení";
$PMF_LANG["ad_sess_r"] = "Hledat ve výsledcích ";
$PMF_LANG["ad_sess_referer"] = "Referer:";
$PMF_LANG["ad_sess_browser"] = "Prohlížeč:";
$PMF_LANG["ad_sess_ai_rubrik"] = "Kategorie:";
$PMF_LANG["ad_sess_ai_artikel"] = "Záznam:";
$PMF_LANG["ad_sess_ai_sb"] = "Hledané řetězce:";
$PMF_LANG["ad_sess_ai_sid"] = "ID sezení:";
$PMF_LANG["ad_sess_back"] = "Zpět";

// Statistik
$PMF_LANG["ad_rs"] = "Statistiky hodnocení";
$PMF_LANG["ad_rs_rating_1"] = "Klasifikace ";
$PMF_LANG["ad_rs_rating_2"] = "uživatelů ukazuje:";
$PMF_LANG["ad_rs_red"] = "Červenou";
$PMF_LANG["ad_rs_green"] = "Zelenou";
$PMF_LANG["ad_rs_altt"] = "s průměrem nižším než 20%";
$PMF_LANG["ad_rs_ahtf"] = "s průměrem vyšším než 80%";
$PMF_LANG["ad_rs_no"] = "Klasifikace není k dispozici";

// Auth
$PMF_LANG["ad_auth_insert"] = "Prosím uveďte své uživatelské jméno a heslo.";
$PMF_LANG["ad_auth_user"] = "Jméno:";
$PMF_LANG["ad_auth_passwd"] = "Heslo:";
$PMF_LANG["ad_auth_ok"] = "OK";
$PMF_LANG["ad_auth_reset"] = "Reset";
$PMF_LANG["ad_auth_fail"] = "Uživatelské jméno nebo heslo nesouhlasí.";
$PMF_LANG["ad_auth_sess"] = "The Sessions ID is passed.";

// Added v0.8 - 24.05.2001 - Bastian - Admin
$PMF_LANG["ad_config_edit"] = "Editovat nastavení";
$PMF_LANG["ad_config_save"] = "Uložit nastavení";
$PMF_LANG["ad_config_reset"] = "Reset";
$PMF_LANG["ad_config_saved"] = "Nastavení bylo úspěšně uloženo.";
$PMF_LANG["ad_menu_editconfig"] = "Editovat nastavení";
$PMF_LANG["ad_att_none"] = "Žádné přílohy nejsou k dispozici";
$PMF_LANG["ad_att_att"] = "Přílohy:";
$PMF_LANG["ad_att_add"] = "Přiložit soubor";
$PMF_LANG["ad_entryins_suc"] = "Záznam byl úspěšně uložen.";
$PMF_LANG["ad_entryins_fail"] = "Došlo k chybě.";
$PMF_LANG["ad_att_del"] = "Smazat";
$PMF_LANG["ad_att_nope"] = "Přílohy mohou být vkládány jen při editování.";
$PMF_LANG["ad_att_delsuc"] = "Příloha byla úspěšně smazána.";
$PMF_LANG["ad_att_delfail"] = "Při mazání přílohy došlo k chybě.";
$PMF_LANG["ad_entry_add"] = "Přidat záznam";

// Added v0.85 - 08.06.2001 - Bastian - Admin
$PMF_LANG["ad_csv_make"] = "Záloha je kompletním obrazem obsahu databáze. Záloha by se měla vytvářet alespoň jednou měsíčně. Formát zálohy je MySQL transaction file, který lze importovat nástrojem phpMyAdmin nebo v příkazové řádce klienta MySQL.";
$PMF_LANG["ad_csv_link"] = "Stáhnout zálohu";
$PMF_LANG["ad_csv_head"] = "Vytvořit zálohu";
$PMF_LANG["ad_att_addto"] = "Přidat k záznamu přílohu";
$PMF_LANG["ad_att_addto_2"] = "";
$PMF_LANG["ad_att_att"] = "Soubor:";
$PMF_LANG["ad_att_butt"] = "OK";
$PMF_LANG["ad_att_suc"] = "Příloha byla úspěšně vložena.";
$PMF_LANG["ad_att_fail"] = "Při vkládání přílohy došlo k chybě.";
$PMF_LANG["ad_att_close"] = "Zavřít okno";

// Added v0.85 - 08.07.2001 - Bastian - Admin
$PMF_LANG["ad_csv_restore"] = "Zde můžete obnovit data ze zálohy. Existující data budou přepsána!";
$PMF_LANG["ad_csv_file"] = "Soubor";
$PMF_LANG["ad_csv_ok"] = "OK";
$PMF_LANG["ad_csv_linklog"] = "zálohovací LOG";
$PMF_LANG["ad_csv_linkdat"] = "zálohovací data";
$PMF_LANG["ad_csv_head2"] = "Obnovení";
$PMF_LANG["ad_csv_no"] = "Tento soubor není zálohou systému.";
$PMF_LANG["ad_csv_prepare"] = "Připravuji databázové dotazy...";
$PMF_LANG["ad_csv_process"] = "Querying...";
$PMF_LANG["ad_csv_of"] = "";
$PMF_LANG["ad_csv_suc"] = "bylo úspěšné.";
$PMF_LANG["ad_csv_backup"] = "Záloha";
$PMF_LANG["ad_csv_rest"] = "Obnovit zálohu";

// Added v0.8 - 25.05.2001 - Bastian - Admin
$PMF_LANG["ad_menu_backup"] = "Záloha";
$PMF_LANG["ad_logout"] = "Sessiony úspěšně ukončeny.";
$PMF_LANG["ad_news_add"] = "Přidat novinky";
$PMF_LANG["ad_news_edit"] = "Editovat novinky";
$PMF_LANG["ad_cookie"] = "Cookies";
$PMF_LANG["ad_sess_head"] = "Zobrazit návštěvy";

// Added v1.1 - 06.01.2002 - Bastian
$PMF_LANG["ad_menu_categ_edit"] = "Administrace kategorií";
$PMF_LANG["ad_menu_stat"] = "Statistiky hodnocení";
$PMF_LANG["ad_kateg_add"] = "přidat kategorii";
$PMF_LANG["ad_kateg_rename"] = "Přejmenovat";
$PMF_LANG["ad_adminlog_date"] = "Smazat";
$PMF_LANG["ad_adminlog_user"] = "Uživatel";
$PMF_LANG["ad_adminlog_ip"] = "IP adresa";

$PMF_LANG["ad_stat_sess"] = "Návštěvy";
$PMF_LANG["ad_stat_days"] = "Dnů";
$PMF_LANG["ad_stat_vis"] = "Návštěvy";
$PMF_LANG["ad_stat_vpd"] = "Návštěvy za Den";
$PMF_LANG["ad_stat_fien"] = "První Log";
$PMF_LANG["ad_stat_laen"] = "Poslední Log";
$PMF_LANG["ad_stat_browse"] = "prohlídnout návštěvy";
$PMF_LANG["ad_stat_ok"] = "OK";

$PMF_LANG["ad_sess_time"] = "Čas";
$PMF_LANG["ad_sess_sid"] = "ID návštěvy";
$PMF_LANG["ad_sess_ip"] = "IP adresa";

$PMF_LANG["ad_ques_take"] = "Upravit otázku";
$PMF_LANG["no_cats"] = "Žádné kategorie nenalezeny.";

// Added v1.1 - 17.01.2002 - Bastian
$PMF_LANG["ad_log_lger"] = "Nesprávné uživatelské jméno nebo heslo.";
$PMF_LANG["ad_log_sess"] = "Session vypršela.";
$PMF_LANG["ad_log_edit"] = "\"Edituj Uživatele\"- pro následujícího uživatele: ";
$PMF_LANG["ad_log_crea"] = "\"Nový záznam\".";
$PMF_LANG["ad_log_crsa"] = "Nový záznam vytvořen.";
$PMF_LANG["ad_log_ussa"] = "Aktualizovat uživatele: ";
$PMF_LANG["ad_log_usde"] = "Smazat uživatele: ";
$PMF_LANG["ad_log_beed"] = "Formulář pro editaci uživatele: ";
$PMF_LANG["ad_log_bede"] = "Smazán záznam: ";

$PMF_LANG["ad_start_visits"] = "Návštěv";
$PMF_LANG["ad_start_articles"] = "Záznamů";
$PMF_LANG["ad_start_comments"] = "Komentářů";


// Added v1.1 - 30.01.2002 - Bastian
$PMF_LANG["ad_categ_paste"] = "vložit";
$PMF_LANG["ad_categ_cut"] = "vyjmout";
$PMF_LANG["ad_categ_copy"] = "kopírovat";
$PMF_LANG["ad_categ_process"] = "Zpracovávám kategorie...";

// Added v1.1.4 - 07.05.2002 - Thorsten
$PMF_LANG["err_NotAuth"] = "<strong>Přístup zamítnut.</strong>";

// Added v1.2.3 - 29.11.2002 - Thorsten
$PMF_LANG["msgPreviusPage"] = "předchozí strana";
$PMF_LANG["msgNextPage"] = "další strana";
$PMF_LANG["msgPageDoublePoint"] = "Strana: ";
$PMF_LANG["msgMainCategory"] = "Hlavní kategorie";

// Added v1.2.4 - 30.01.2003 - Thorsten
$PMF_LANG["ad_passwdsuc"] = "Vaše heslo bylo změněno.";

// Added v1.3.0 - 04.03.2003 - Thorsten
$PMF_LANG["msgPDF"] = "Zobrazit jako PDF";
$PMF_LANG["ad_xml_head"] = "XML-Záloha";
$PMF_LANG["ad_xml_hint"] = "Uložit všechny záznamy do XML souboru.";
$PMF_LANG["ad_xml_gen"] = "Vytvořit XML soubor";
$PMF_LANG["ad_entry_locale"] = "Jazyk";
$PMF_LANG["msgLangaugeSubmit"] = "změnit jazyk";

// Added v1.3.1 - 29.04.2003 - Thorsten
$PMF_LANG["ad_entry_preview"] = "Náhled";
$PMF_LANG["ad_attach_1"] = "Napřed prosím v nastavení vyberte adresář pro přílohy.";
$PMF_LANG["ad_attach_2"] = "Napřed prosím v nastavení vyberte odkaz pro přílohy.";
$PMF_LANG["ad_attach_3"] = "Soubor s příponou .php nemůže být otevřen bez řádné autentifikace.";
$PMF_LANG["ad_attach_4"] = "Přikládaný soubor musí být menší než %s Bytů.";
$PMF_LANG["ad_menu_export"] = "Exportovat";
$PMF_LANG["ad_export_1"] = "Built RSS-Feed on";
$PMF_LANG["ad_export_2"] = ".";
$PMF_LANG["ad_export_file"] = "Chyba: Nemůžu zapsat soubor.";
$PMF_LANG["ad_export_news"] = "RSS-Feed Novinek";
$PMF_LANG["ad_export_topten"] = "RSS-Feed Top 10";
$PMF_LANG["ad_export_latest"] = "RSS-Feed 5ti nejnovějších záznamů";
$PMF_LANG["ad_export_pdf"] = "PDF export všech záznamů";
$PMF_LANG["ad_export_generate"] = "vytvořit RSS-Feed";

$PMF_LANG["rightsLanguage"]['adduser'] = "přidat uživatele";
$PMF_LANG["rightsLanguage"]['edituser'] = "editovat uživatele";
$PMF_LANG["rightsLanguage"]['deluser'] = "mazat uživatele";
$PMF_LANG["rightsLanguage"]['addbt'] = "přidat záznam";
$PMF_LANG["rightsLanguage"]['editbt'] = "editovat záznam";
$PMF_LANG["rightsLanguage"]['delbt'] = "smazat záznam";
$PMF_LANG["rightsLanguage"]['viewlog'] = "zobrazit log";
$PMF_LANG["rightsLanguage"]['adminlog'] = "zobrazit admin log";
$PMF_LANG["rightsLanguage"]['delcomment'] = "smazat komentář";
$PMF_LANG["rightsLanguage"]['addnews'] = "přidat novinky";
$PMF_LANG["rightsLanguage"]['editnews'] = "editovat novinky";
$PMF_LANG["rightsLanguage"]['delnews'] = "smazat novinky";
$PMF_LANG["rightsLanguage"]['addcateg'] = "přidat kategorii";
$PMF_LANG["rightsLanguage"]['editcateg'] = "editovat kategorii";
$PMF_LANG["rightsLanguage"]['delcateg'] = "smazat kategorii";
$PMF_LANG["rightsLanguage"]['passwd'] = "změnit heslo";
$PMF_LANG["rightsLanguage"]['editconfig'] = "editovat konfiguraci";
$PMF_LANG["rightsLanguage"]['addatt'] = "přidat přílohu";
$PMF_LANG["rightsLanguage"]['delatt'] = "mazat přílohy";
$PMF_LANG["rightsLanguage"]['backup'] = "tvořit zálohu";
$PMF_LANG["rightsLanguage"]['restore'] = "obnovit ze zálohy";
$PMF_LANG["rightsLanguage"]['delquestion'] = "mazat nezodpovězené dotazy";

$PMF_LANG["msgAttachedFiles"] = "připojené soubory:";

// Added v1.3.3 - 27.05.2003 - Thorsten
$PMF_LANG["ad_user_action"] = "akce";
$PMF_LANG["ad_entry_email"] = "e-mail adresa:";
$PMF_LANG["ad_entry_allowComments"] = "Povolit vkládání komentářů k tomuto záznamu:";
$PMF_LANG["msgWriteNoComment"] = "K tomuto záznamu nemůžete připojit komentář.";
$PMF_LANG["ad_user_realname"] = "skutečné jméno:";
$PMF_LANG["ad_export_generate_pdf"] = "Vytvořit PDF";
$PMF_LANG["ad_export_full_faq"] = "Dotazy jako PDF soubor: ";
$PMF_LANG["err_bannedIP"] = "Vaše IP adresa byla přidána do \"nepovolených adres\".";
$PMF_LANG["err_SaveQuestion"] = "Povinná pole jsou <strong>jméno</strong>, <strong>e-mailová adresa</strong> a <strong>otázka</strong>.<br /><br /><a href=\"javascript:history.back();\">předchozí stránka</a><br /><br />\n";

// added v1.3.4 - 23.07.2003 - Thorsten
$PMF_LANG["ad_entry_fontcolor"] = "Barva písma: ";
$PMF_LANG["ad_entry_fontsize"] = "Velikost písma: ";

// added v1.4.0 - 2003-12-04 by Thorsten / Mathias
$LANG_CONF['main.language'] = array(0 => "select", 1 => "Jazykový balíček");
$LANG_CONF["main.languageDetection"] = array(0 => "checkbox", 1 => "Enable automatic content negotiation");
$LANG_CONF['main.titleFAQ'] = array(0 => "input", 1 => "Nadpis aplikace");
$LANG_CONF['main.currentVersion'] = array(0 => "print", 1 => "Verze aplikace");
$LANG_CONF["main.metaDescription"] = array(0 => "input", 1 => "Popis stránky");
$LANG_CONF["main.metaKeywords"] = array(0 => "input", 1 => "Klíčová slova");
$LANG_CONF["main.metaPublisher"] = array(0 => "input", 1 => "Jméno autora");
$LANG_CONF['main.administrationMail'] = array(0 => "input", 1 => "E-mail administrátora");
$LANG_CONF["main.contactInformations"] = array(0 => "area", 1 => "Kontaktní informace");
$LANG_CONF["main.send2friendText"] = array(0 => "area", 1 => "Text pro stránku odeslat příteli");
$LANG_CONF['records.maxAttachmentSize'] = array(0 => "input", 1 => "Maximální velikost příloh v Bytech (max. %sByte)");
$LANG_CONF["records.disableAttachments"] = array(0 => "checkbox", 1 => "Přidat odkaz pod jednotlivé záznamy?");
$LANG_CONF["main.enableUserTracking"] = array(0 => "checkbox", 1 => "použít Trackování?");
$LANG_CONF["main.enableAdminLog"] = array(0 => "checkbox", 1 => "použít Admin log?");
$LANG_CONF["security.ipCheck"] = array(0 => "checkbox", 1 => "Do you want the IP to be checked when checking the UINs in admin.php?");
$LANG_CONF["records.numberOfRecordsPerPage"] = array(0 => "input", 1 => "Počet zobrazených topiců na stránce");
$LANG_CONF["records.numberOfShownNewsEntries"] = array(0 => "input", 1 => "Počet záznamů novinek");
$LANG_CONF['security.bannedIPs'] = array(0 => "area", 1 => "Zakázat IP adresy");
$LANG_CONF["main.enableRewriteRules"] = array(0 => "checkbox", 1 => "Aktivovat podporu mod_rewrite? (výchozí: vypnuto)");
$LANG_CONF["security.ldapSupport"] = array(0 => "checkbox", 1 => "Chcete aktivovat podporu LDAP? (výchozí: vypnuto)");
$LANG_CONF["main.referenceURL"] = array(0 => "input", 1 => "Base URL pro verifikaci odkazu (např.: http://www.domena.cz/faq)");
$LANG_CONF["main.urlValidateInterval"] = array(0 => "input", 1 => "Interval mezi AJAX ověřením odkazu (v sekundách)");
$LANG_CONF["records.enableVisibilityQuestions"] = array(0 => "checkbox", 1 => "Vypnout viditelnost nových dotazů?");
$LANG_CONF['security.permLevel'] = array(0 => "select", 1 => "Stupeň zabezpečení");

$PMF_LANG["ad_categ_new_main_cat"] = "jako nová hlavní kategorie";
$PMF_LANG["ad_categ_paste_error"] = "Přesun kategorie není možný.";
$PMF_LANG["ad_categ_move"] = "přesunout kategorii";
$PMF_LANG["ad_categ_lang"] = "Jazyk";
$PMF_LANG["ad_categ_desc"] = "Popis";
$PMF_LANG["ad_categ_change"] = "Změnit za";

$PMF_LANG["lostPassword"] = "Zapoměli jste heslo? Klikněte zde.";
$PMF_LANG["lostpwd_err_1"] = "Chyba: Uživatelské jméno a e-mailová adresa nenalezeny.";
$PMF_LANG["lostpwd_err_2"] = "Chyba: Chybné zadání!";
$PMF_LANG["lostpwd_text_1"] = "Děkujeme, že jste si vyžádali vaše přihlašovací údaje.";
$PMF_LANG["lostpwd_text_2"] = "Prosíme, nastavete si nové helso v admin sekci vašcih FAQ.";
$PMF_LANG["lostpwd_mail_okay"] = "E-mail byl odeslán.";

$PMF_LANG["ad_xmlrpc_button"] = "Získejte poslední verzi systému";
$PMF_LANG["ad_xmlrpc_latest"] = "Poslední dostupná verze";

// added v1.5.0 - 2005-07-31 by Thorsten
$PMF_LANG['ad_categ_select'] = 'Zvolte jazyk sekce';

// added v1.5.1 - 2005-09-06 by Thorsten
$PMF_LANG['msgSitemap'] = 'Mapa stránek';

// added v1.5.2 - 2005-09-23 by Lars
$PMF_LANG['err_inactiveArticle'] = 'Tento záznam není revize a nemůže být zobrazen.';
$PMF_LANG['msgArticleCategories'] = 'Kategorie tohoto záznamu';

// added v1.6.0 - 2006-02-02 by Thorsten
$PMF_LANG['ad_entry_solution_id'] = 'Unikátní ID';
$PMF_LANG['ad_entry_faq_record'] = 'Záznam';
$PMF_LANG['ad_entry_new_revision'] = 'Vytvořit novou revizi?';
$PMF_LANG['ad_entry_record_administration'] = 'Administrace záznamu';
$PMF_LANG['ad_entry_changelog'] = 'Změny';
$PMF_LANG['ad_entry_revision'] = 'Verze';
$PMF_LANG['ad_changerev'] = 'Vybrat revizi';
$PMF_LANG['msgCaptcha'] = "Prosím, opište všechny znaky z obrázku";
$PMF_LANG['msgSelectCategories'] = 'Vyhledat ';
$PMF_LANG['msgAllCategories'] = '... ve všech sekcích';
$PMF_LANG['ad_you_should_update'] = 'Vaše instalace systém uje zastaralá. Měli byste provést update na poslední dostupnou verzi.';
$PMF_LANG['msgAdvancedSearch'] = 'Rozšířené vyhledávání';

// added v1.6.1 - 2006-04-25 by Matteo and Thorsten
$PMF_LANG['spamControlCenter'] = 'Spamová kontrola';
$LANG_CONF["spam.enableSafeEmail"] = array(0 => "checkbox", 1 => "Zobrazovat email uživatele bezpečně (výchozí: zapnuto).");
$LANG_CONF["spam.checkBannedWords"] = array(0 => "checkbox", 1 => "Ověřit obsah veřejných formulářů na zakázaná slova (výchozí: zapnuto).");
$LANG_CONF["spam.enableCaptchaCode"] = array(0 => "checkbox", 1 => "Používat catpcha kód ve veřejných formulářích (výchozí: zapnuto).");
$PMF_LANG['ad_session_expiring'] = 'Vaše session vyprší za %d minut: chcete i nadále zůstat přihlášen?';

// added v1.6.2 - 2006-06-13 by Matteo
$PMF_LANG['ad_stat_management'] = 'Správa session';
$PMF_LANG['ad_stat_choose'] = 'Vyberte měsíc';
$PMF_LANG['ad_stat_delete'] = 'Smazat trvale vybrané sessiony';

// added v2.0.0 - 2005-09-15 by Thorsten and by Minoru TODA
$PMF_LANG['ad_menu_glossary'] = 'Rejstřík';
$PMF_LANG['ad_glossary_add'] = 'Přidat položku rejstříku';
$PMF_LANG['ad_glossary_edit'] = 'Editovat položku rejstříku';
$PMF_LANG['ad_glossary_item'] = 'Položka rejstříku';
$PMF_LANG['ad_glossary_definition'] = 'Definice';
$PMF_LANG['ad_glossary_save'] = 'Uložit položku rejstříku';
$PMF_LANG['ad_glossary_save_success'] = 'Položka rejstříku uložena!';
$PMF_LANG['ad_glossary_save_error'] = 'Položka rejstříku nemůže být uložena protože se vyskytla chyba.';
$PMF_LANG['ad_glossary_update_success'] = 'Položka rejstříku úspěšně změněna!';
$PMF_LANG['ad_glossary_update_error'] = 'Položka rejstříku nemůže být změněna protože se vyskytla chyba.';
$PMF_LANG['ad_glossary_delete'] = 'Smazat položku rejstříku';
$PMF_LANG['ad_glossary_delete_success'] = 'Položka rejstříku úspěšně smazána!';
$PMF_LANG['ad_glossary_delete_error'] = 'Položka rejstříku nemůže být smazána protože se vyskytla chyba.';
$PMF_LANG['ad_linkcheck_noReferenceURL'] = 'Automatická verifikace odkazu vypnuta (base URL pro verifikaci není nastaveno)';
$PMF_LANG['ad_linkcheck_noAllowUrlOpen'] = 'Automatická verifikace odkazu vypnuta (PHP hodnota allow_url_fopen není zapnuta)';
$PMF_LANG['ad_linkcheck_checkResult'] = 'Výsledek automatické verifikace odkazu';
$PMF_LANG['ad_linkcheck_checkSuccess'] = 'OK';
$PMF_LANG['ad_linkcheck_checkFailed'] = 'Chyba';
$PMF_LANG['ad_linkcheck_failReason'] = 'Důvod(y) chyby:';
$PMF_LANG['ad_linkcheck_noLinksFound'] = 'Žádné kompatibilní URL nebylo nalezeno.';
$PMF_LANG['ad_linkcheck_searchbadonly'] = 'Pouze se špatnými odkazy';
$PMF_LANG['ad_linkcheck_infoReason'] = 'Další informace:';
$PMF_LANG['ad_linkcheck_openurl_infoprefix'] = 'Nalezeno během testování <strong>%s</strong>: ';
$PMF_LANG['ad_linkcheck_openurl_notready'] = 'Ověření odkazu není připraveno.';
$PMF_LANG['ad_linkcheck_openurl_maxredirect'] = 'Počet maximálních přesměrováni <strong>%d</strong> překročen.';
$PMF_LANG['ad_linkcheck_openurl_urlisblank'] = 'Rozpoznáno prázdné URL.';
$PMF_LANG['ad_linkcheck_openurl_tooslow'] = 'Cíl <strong>%s</strong> je pomalý nebo neodpovídá.';
$PMF_LANG['ad_linkcheck_openurl_nodns'] = 'DNS překlad cíle <strong>%s</strong> je pomalý nebo skončil chybou DNS, lokální nebo vzdálenou.';
$PMF_LANG['ad_linkcheck_openurl_redirected'] = 'URL přesměrováno na <strong>%s</strong>.';
$PMF_LANG['ad_linkcheck_openurl_ambiguous'] = 'Nejasný HTTP status <strong>%s</strong> vrácen.';
$PMF_LANG['ad_linkcheck_openurl_not_allowed'] = '<em>HEAD</em> metoda není cílem podporována <strong>%s</strong>, povolené metody: <strong>%s</strong>.';
$PMF_LANG['ad_linkcheck_openurl_not_found'] = 'Zdroje nebyli v cíli nalezeny <strong>%s</strong>.';
$PMF_LANG['ad_linkcheck_protocol_unsupported'] = '%s protokol nepodporován automatickým ověřením odkazu.';
$PMF_LANG['ad_menu_linkconfig'] = 'Konfigurovat ověřování URL';
$PMF_LANG['ad_linkcheck_config_title'] = 'Konfigurace ověřování URL';
$PMF_LANG['ad_linkcheck_config_disabled'] = 'Ověřování URL vypnuto';
$PMF_LANG['ad_linkcheck_config_warnlist'] = 'URL s varováním';
$PMF_LANG['ad_linkcheck_config_ignorelist'] = 'URL s ignorací';
$PMF_LANG['ad_linkcheck_config_warnlist_description'] = 'URL s prefixem níže budou způsobovat varování dokud nebudou validní.<br />Použijte tuto funkci k časné detekci nefunkčních URL';
$PMF_LANG['ad_linkcheck_config_ignorelist_description'] = 'určité URL níže mohou být považovány za validní bez validace.<br />Použijte tuto funkci k vynechání URL, které nešlo validovat ověřením URL';
$PMF_LANG['ad_linkcheck_config_th_id'] = 'ID#';
$PMF_LANG['ad_linkcheck_config_th_url'] = 'Shodující se URL';
$PMF_LANG['ad_linkcheck_config_th_reason'] = 'Důvod shody';
$PMF_LANG['ad_linkcheck_config_th_owner'] = 'Majitel záznamu';
$PMF_LANG['ad_linkcheck_config_th_enabled'] = 'Zapnout u záznamu';
$PMF_LANG['ad_linkcheck_config_th_locked'] = 'Uzamknout vlastnictví';
$PMF_LANG['ad_linkcheck_config_th_chown'] = 'Nastavit k získání vlastnictví';
$PMF_LANG['msgNewQuestionVisible'] = 'Otázka by měla být nejprve prohlédnuta než bude zveřejněna.';
$PMF_LANG['msgQuestionsWaiting'] = 'Čeká na zveřejnění administrátorem: ';
$PMF_LANG['ad_entry_visibility'] = 'Zveřejnit?';

// added v2.0.0 - 2006-01-02 by Lars
$PMF_LANG['ad_user_error_password'] =  "Prosím zadejte heslo. ";
$PMF_LANG['ad_user_error_passwordsDontMatch'] =  "Hesla nesouhlasí. ";
$PMF_LANG['ad_user_error_loginInvalid'] =  "Uživatelské jméno není platné.";
$PMF_LANG['ad_user_error_noEmail'] =  "Zadejte platnou emailovou adresu. ";
$PMF_LANG['ad_user_error_noRealName'] =  "Zadejte Vaše reálné jméno. ";
$PMF_LANG['ad_user_error_delete'] =  "Uživatelský účet nelze smazat. ";
$PMF_LANG['ad_user_error_noId'] =  "ID nespecifikováno. ";
$PMF_LANG['ad_user_error_protectedAccount'] =  "Uživatelský účet je chráněn. ";
$PMF_LANG['ad_user_deleteUser'] = "Smazat uživatele";
$PMF_LANG['ad_user_status'] = "Status:";
$PMF_LANG['ad_user_lastModified'] = "poslední změny:";
$PMF_LANG['ad_gen_cancel'] = "Cancel";
$PMF_LANG["rightsLanguage"]['addglossary'] = "přidat položku rejstříku";
$PMF_LANG["rightsLanguage"]['editglossary'] = "editovat položku rejstříku";
$PMF_LANG["rightsLanguage"]['delglossary'] = "smazat položku rejstříku";
$PMF_LANG["ad_menu_group_administration"] = "Administrace skupin";
$PMF_LANG['ad_user_loggedin'] = 'Jste přihlášen jako ';

$PMF_LANG['ad_group_details'] = "Detail skupiny";
$PMF_LANG['ad_group_add'] = "Přidat skupinu";
$PMF_LANG['ad_group_add_link'] = "Přidat skupinu";
$PMF_LANG['ad_group_name'] = "Název:";
$PMF_LANG['ad_group_description'] = "Popis:";
$PMF_LANG['ad_group_autoJoin'] = "Automatické-přidání:";
$PMF_LANG['ad_group_suc'] = "Skupina <strong>úspěšně</strong> přidána.";
$PMF_LANG['ad_group_error_noName'] = "Zadejte název skupiny. ";
$PMF_LANG['ad_group_error_delete'] = "Skupina nelze smazat. ";
$PMF_LANG['ad_group_deleted'] = "Skupina byla úspěšně smazána.";
$PMF_LANG['ad_group_deleteGroup'] = "Smazat skupinu";
$PMF_LANG['ad_group_deleteQuestion'] = "Jste si jist, že by skupina měla být smazána?";
$PMF_LANG['ad_user_uncheckall'] = "Odznačit vše";
$PMF_LANG['ad_group_membership'] = "Členství ve skupině";
$PMF_LANG['ad_group_members'] = "Členové";
$PMF_LANG['ad_group_addMember'] = "+";
$PMF_LANG['ad_group_removeMember'] = "-";

// added v2.0.0 - 2006-07-20 by Matteo
$PMF_LANG['ad_export_which_cat'] = 'Limitovat data, která budou exportována (volitelné)';
$PMF_LANG['ad_export_cat_downwards'] = 'Sestupně?';
$PMF_LANG['ad_export_type'] = 'Formát exportu';
$PMF_LANG['ad_export_type_choose'] = 'Vyberte jeden z podporovaných formátů:';
$PMF_LANG['ad_export_download_view'] = 'Stáhnout nebo zobrazit?';
$PMF_LANG['ad_export_download'] = 'stáhnout';
$PMF_LANG['ad_export_view'] = 'zobrazit';
$PMF_LANG['ad_export_gen_xhtml'] = 'Vytvořit XHTML soubor';
$PMF_LANG['ad_export_gen_docbook'] = 'Vytvořit Docbook soubor';

// added v2.0.0 - 2006-07-22 by Matteo
$PMF_LANG['ad_news_data'] = 'Novinky';
$PMF_LANG['ad_news_author_name'] = 'Jméno autora:';
$PMF_LANG['ad_news_author_email'] = 'Email autora:';
$PMF_LANG['ad_news_set_active'] = 'Aktivovat:';
$PMF_LANG['ad_news_allowComments'] = 'Povolit komentáře:';
$PMF_LANG['ad_news_expiration_window'] = 'Čas expirace novinek (volitelné)';
$PMF_LANG['ad_news_from'] = 'Zobrazit záznam od data:';
$PMF_LANG['ad_news_to'] = 'Zobrazit záznam do data:';
$PMF_LANG['ad_news_insertfail'] = 'Vyskytla se chyba při vkládání novinky do databáze.';
$PMF_LANG['ad_news_updatefail'] = 'Vyskytla se chyba při změně novinky v databázi.';
$PMF_LANG['newsShowCurrent'] = 'Ukázat aktuální novinky.';
$PMF_LANG['newsShowArchive'] = 'Ukázat novinky v archivu.';
$PMF_LANG['newsArchive'] = ' Archiv novinek';
$PMF_LANG['newsWriteComment'] = 'komentář k záznamu';
$PMF_LANG['newsCommentDate'] = 'Přidáno: ';

// added v2.0.0 - 2006-07-29 by Matteo & Thorsten
$PMF_LANG['ad_record_expiration_window'] = 'Čas expirace záznamu (volitelné)';
$PMF_LANG['admin_mainmenu_home'] = 'Úvod';
$PMF_LANG['admin_mainmenu_users'] = 'Uživatelé';
$PMF_LANG['admin_mainmenu_content'] = 'Obsah';
$PMF_LANG['admin_mainmenu_statistics'] = 'Statistiky';
$PMF_LANG['admin_mainmenu_exports'] = 'Exporty';
$PMF_LANG['admin_mainmenu_backup'] = 'Zálohování';
$PMF_LANG['admin_mainmenu_configuration'] = 'Konfigurace';
$PMF_LANG['admin_mainmenu_logout'] = 'Odhlásit';

// added v2.0.0 - 2006-08-15 by Thorsten and Matteo
$PMF_LANG["ad_categ_owner"] = 'Vlastník kategorie';
$PMF_LANG['adminSection'] = 'Administrace';
$PMF_LANG['err_expiredArticle'] = 'Tento záznam expiroval a nemůže být zobrazen';
$PMF_LANG['err_expiredNews'] = 'Tato novinka expirovala a nemůže být zobrazena';
$PMF_LANG['err_inactiveNews'] = 'Tato novinka je revize a nemůže být zobrazena';
$PMF_LANG['msgSearchOnAllLanguages'] = 'Hledat ve všech jazycích:';
$PMF_LANG['ad_entry_tags'] = 'Značky';
$PMF_LANG['msg_tags'] = 'Značky';

// added v2.0.0 - 2006-09-03 by Matteo
$PMF_LANG['ad_linkcheck_feedback_url-batch1'] = 'Ověřování...';
$PMF_LANG['ad_linkcheck_feedback_url-batch2'] = 'Ověřování...';
$PMF_LANG['ad_linkcheck_feedback_url-batch3'] = 'Ověřování...';
$PMF_LANG['ad_linkcheck_feedback_url-checking'] = 'Ověřování...';
$PMF_LANG['ad_linkcheck_feedback_url-disabled'] = 'Vypnuto';
$PMF_LANG['ad_linkcheck_feedback_url-linkbad'] = 'Odkaz KO';
$PMF_LANG['ad_linkcheck_feedback_url-linkok'] = 'Odkaz OK';
$PMF_LANG['ad_linkcheck_feedback_url-noaccess'] = 'Žádný přístup';
$PMF_LANG['ad_linkcheck_feedback_url-noajax'] = 'Žádný AJAX';
$PMF_LANG['ad_linkcheck_feedback_url-nolinks'] = 'Žádné odkazy';
$PMF_LANG['ad_linkcheck_feedback_url-noscript'] = 'Žádné skripty';

// added v2.0.0 - 2006-09-02 by Thomas
$PMF_LANG['msg_related_articles'] = 'Související záznamy';
$LANG_CONF['records.numberOfRelatedArticles'] = array(0 => "input", 1 => "Počet souvysejících odkazů");

// added v2.0.0 - 2006-09-09 by Rudi
$PMF_LANG['ad_categ_trans_1'] = 'Přeložit';
$PMF_LANG['ad_categ_trans_2'] = 'Kategorie';
$PMF_LANG['ad_categ_translatecateg'] = 'Přeložit kategorii';
$PMF_LANG['ad_categ_translate'] = 'Přeložit';
$PMF_LANG['ad_categ_transalready'] = 'Již přeloženo v: ';
$PMF_LANG["ad_categ_deletealllang"] = 'Smazat ve všech jazycích?';
$PMF_LANG["ad_categ_deletethislang"] = 'Smazat pouze v tomto jazyce?';
$PMF_LANG["ad_categ_translated"] = "Kategorie byla přeložena.";

// added v2.0.0 - 2006-09-21 by Rudi
$PMF_LANG["ad_categ_show"] = "Přehled";
$PMF_LANG['ad_menu_categ_structure'] = "Přehled kategorií obsahuje tyto jazyky";

// added v2.0.0 - 2006-09-26 by Thorsten
$PMF_LANG['ad_entry_userpermission'] = 'Oprávnění uživatelů:';
$PMF_LANG['ad_entry_grouppermission'] = 'Oprávnění skupin:';
$PMF_LANG['ad_entry_all_users'] = 'Přístup pro všechny uživatele';
$PMF_LANG['ad_entry_restricted_users'] = 'Omezit přístup na';
$PMF_LANG['ad_entry_all_groups'] = 'Přístup pro všechny skupiny';
$PMF_LANG['ad_entry_restricted_groups'] = 'Omezený přístup na';
$PMF_LANG['ad_session_expiration'] = 'Čas expirace Vaší sessiony';
$PMF_LANG['ad_user_active'] = 'aktivní';
$PMF_LANG['ad_user_blocked'] = 'blokováno';
$PMF_LANG['ad_user_protected'] = 'chráněno';

// added v2.0.0 - 2006-10-07 by Matteo
$PMF_LANG['ad_entry_intlink'] = 'Vyberte záznam, který chcete vložit jako odkaz...';

//added 2.0.0 - 2006-10-10 by Rudi
$PMF_LANG["ad_categ_paste2"] = "Vložit za";
$PMF_LANG["ad_categ_remark_move"] = "Změna 2 kategorií je možná pouze na stejné úrovni.";
$PMF_LANG["ad_categ_remark_overview"] = "Korektní pořadí kategorií bude znázorněno, když jsou všechny kategorie definovány ve stejném jazyce (první slouepc).";

// added v2.0.0 - 2006-10-15 by Matteo
$PMF_LANG['msgUsersOnline'] = '%d hostů a %d registrovaných';
$PMF_LANG['ad_adminlog_del_older_30d'] = 'Trvale smazat logy starší 30 dnů';
$PMF_LANG['ad_adminlog_delete_success'] = 'Starší logy úspěšně smazány.';
$PMF_LANG['ad_adminlog_delete_failure'] = 'Žádné logy nebyli smazány: vyskytla se chyba během zpracování.';

// added 2.0.0 - 2006-11-19 by Thorsten
$PMF_LANG['opensearch_plugin_install'] = 'přidat vyhledávací plugin';
$PMF_LANG['ad_quicklinks'] = 'Rychlé odkazy';
$PMF_LANG['ad_quick_category'] = 'Přidat novou podkategorii';
$PMF_LANG['ad_quick_record'] = 'Přidat nový záznam';
$PMF_LANG['ad_quick_user'] = 'Přidat nového uživatele';
$PMF_LANG['ad_quick_group'] = 'Přidat novou skupinu';

// added v2.0.0 - 2006-12-30 by Matteo
$PMF_LANG['msgNewTranslationHeader'] = 'Návrh překladu';
$PMF_LANG['msgNewTranslationAddon'] = 'Váš návrh překladu nebude publikován okamžitě, ale až po schválení administrátorem. Povinné pole jsou <strong>vaše Jméno</strong>, <strong>vaše e-mailová adresa</strong>, <strong>titulek překladu</strong> a <strong>vlastní překlad zvoleného záznamu</strong>. Prosíme, oddělujte klíčová slova pouze mezerou.';
$PMF_LANG['msgNewTransSourcePane'] = 'Výchozí text';
$PMF_LANG['msgNewTranslationPane'] = 'Přeložený text';
$PMF_LANG['msgNewTranslationName'] = "Vaše jméno:";
$PMF_LANG['msgNewTranslationMail'] = "Váš email:";
$PMF_LANG['msgNewTranslationKeywords'] = "Klíčová slova:";
$PMF_LANG['msgNewTranslationSubmit'] = 'Odeslat váš návrh';
$PMF_LANG['msgTranslate'] = 'Navrhněte překlad tohoto záznamu do';
$PMF_LANG['msgTranslateSubmit'] = 'Přeložit...';
$PMF_LANG['msgNewTranslationThanks'] = "Děkujeme za váš návrh překladu!";

// added v2.0.0 - 2007-02-27 by Matteo
$PMF_LANG["rightsLanguage"]['addgroup'] = "přidat účty skupiny";
$PMF_LANG["rightsLanguage"]['editgroup'] = "editovat účty skupiny";
$PMF_LANG["rightsLanguage"]['delgroup'] = "smazat účty skupiny";

// added v2.0.0 - 2007-02-27 by Thorsten
$PMF_LANG['ad_news_link_parent'] = 'Odkaz otevřít ve stejném okně';

// added v2.0.0 - 2007-03-04 by Thorsten
$PMF_LANG['ad_menu_comments'] = 'Komentáře';
$PMF_LANG['ad_comment_administration'] = 'Administrace komentářů';
$PMF_LANG['ad_comment_faqs'] = 'Komentáře záznamů:';
$PMF_LANG['ad_comment_news'] = 'Komentáře novinek:';
$PMF_LANG['ad_groups'] = 'Skupiny';

// added v2.0.0 - 2007-03-10 by Thorsten
$LANG_CONF['records.orderby'] = array(0 => 'select', 1 => 'Řazení záznamů (dle vlastnosti záznamu)');
$LANG_CONF['records.sortby'] = array(0 => 'select', 1 => 'Řazení záznamů (sestupně nebo vzestupně)');
$PMF_LANG['ad_conf_order_id'] = 'ID (výchozí)';
$PMF_LANG['ad_conf_order_thema'] = 'Titulek';
$PMF_LANG['ad_conf_order_visits'] = 'Počet návštěvníků';
$PMF_LANG['ad_conf_order_datum'] = 'Datum';
$PMF_LANG['ad_conf_order_author'] = 'Autor';
$PMF_LANG['ad_conf_desc'] = 'sestupně';
$PMF_LANG['ad_conf_asc'] = 'vzestupně';
$PMF_LANG['mainControlCenter'] = 'Hlavní nastavení';
$PMF_LANG['recordsControlCenter'] = 'Konfigurace záznamů';

// added v2.0.0 - 2007-03-17 by Thorsten
$PMF_LANG['msgInstantResponse'] = 'Rychlé vyhledávání';
$PMF_LANG['msgInstantResponseMaxRecords'] = '. Nalezeno prvních %d záznamů.';

// added v2.0.0 - 2007-03-29 by Thorsten
$LANG_CONF['records.defaultActivation'] = array(0 => "checkbox", 1 => "Aktivovat nový záznam (výchozí: deaktivováno)");
$LANG_CONF['records.defaultAllowComments'] = array(0 => "checkbox", 1 => "Povolit komentáře k novým záznamům (výchozí: nepovoleno)");

// added v2.0.0 - 2007-04-04 by Thorsten
$PMF_LANG['msgAllCatArticles'] = 'Záznamů v této kategorii';
$PMF_LANG['msgDescriptionInstantResponse'] = 'Začněte psát a zobrazí se vám odpovědi ...';
$PMF_LANG['msgTagSearch'] = 'Označkovaných záznamů';
$PMF_LANG['ad_pmf_info'] = 'Informace';
$PMF_LANG['ad_online_info'] = 'Online ověření verze';
$PMF_LANG['ad_system_info'] = 'Systémové informace';

// added 2.5.0-alpha - 2008-01-25 by Elger
$PMF_LANG['msgRegisterUser'] = 'Registrovat';
$PMF_LANG["ad_user_loginname"] = 'Uživatelské jméno:';
$PMF_LANG['errorRegistration'] = 'Toto pole je povinné!';
$PMF_LANG['submitRegister'] = 'Registrovat';
$PMF_LANG['msgUserData'] = 'Informace o uživateli jsou pro registraci povinné';
$PMF_LANG['captchaError'] = 'Prosím zadejet správný captcha kód!';
$PMF_LANG['msgRegError'] = 'Nalezeny následující chyby. Prosím opravte je:';
$PMF_LANG['successMessage'] = 'Vaše registrace byla úspěšná. Brzy obdržíte potvrzující email s údaji pro přihlášení!';
$PMF_LANG['msgRegThankYou'] = 'Děkujeme za vaši registraci!';
$PMF_LANG['emailRegSubject'] = '[%sitename%] Registrace: nový uživatel';

// added 2.5.0-alpha2 - 2009-01-24 by Thorsten
$PMF_LANG['msgMostPopularSearches'] = 'Nejvíce hledané:';
$LANG_CONF['main.enableWysiwygEditor'] = array(0 => "checkbox", 1 => "Zapnout integrovaný WYSIWYG editor (výchozí: zapnuto)");

// added 2.5.0-beta - 2009-03-30 by Anatoliy
$PMF_LANG['ad_menu_searchstats'] = 'Statistiky hledání';
$PMF_LANG['ad_searchstats_search_term'] = 'Klíčová slova';
$PMF_LANG['ad_searchstats_search_term_count'] = 'Počet';
$PMF_LANG['ad_searchstats_search_term_lang'] = 'Jazyk';
$PMF_LANG['ad_searchstats_search_term_percentage'] = 'Procento';

// added 2.5.0-beta - 2009-03-31 by Anatoliy
$PMF_LANG['ad_record_sticky'] = 'Štítky';
$PMF_LANG['ad_entry_sticky'] = 'Štítky';
$PMF_LANG['stickyRecordsHeader'] = 'Štítky záznamů';

// added 2.5.0-beta - 2009-04-01 by Anatoliy
$PMF_LANG['ad_menu_stopwordsconfig'] = 'Stop slova';
$PMF_LANG['ad_config_stopword_input'] = 'Přidat nové stop slovo';

// added 2.5.0-beta - 2009-04-06 by Anatoliy
$PMF_LANG['msgSendMailDespiteEverything'] = 'Ne, stále není adekvátní odpověď (bude zaslán email)';
$PMF_LANG['msgSendMailIfNothingIsFound'] = 'Je požadovaná odpověď zobrazena ve výsledcích výše?';

// added 2.5.0-RC - 2009-05-11 by Anatoliy & Thorsten
$PMF_LANG['msgChooseLanguageToTranslate'] = 'Prosím vyberte jazyk pro překlad';
$PMF_LANG['msgLangDirIsntWritable'] = 'Složka <strong>/lang</strong> pro překlady není zapisovatelná.';
$PMF_LANG['ad_menu_translations'] = 'Překlad rozhraní';
$PMF_LANG['ad_start_notactive'] = 'Čeká na aktivaci';

// added 2.5.0-RC - 2009-05-20 by Anatoliy
$PMF_LANG['msgTransToolAddNewTranslation'] = 'Přidat nový překlad';
$PMF_LANG['msgTransToolLanguage'] = 'Jazyk';
$PMF_LANG['msgTransToolActions'] = 'Akce';
$PMF_LANG['msgTransToolWritable'] = 'Zapisovatelné';
$PMF_LANG['msgEdit'] = 'Editovat';
$PMF_LANG['msgDelete'] = 'Smazat';
$PMF_LANG['msgYes'] = 'ano';
$PMF_LANG['msgNo'] = 'ne';
$PMF_LANG['msgTransToolSureDeleteFile'] = 'Jste si jist, že soubor s překladem musí být smazán?';
$PMF_LANG['msgTransToolFileRemoved'] = 'Soubor s překladem úspěšně smazán';
$PMF_LANG['msgTransToolErrorRemovingFile'] = 'Nemohu odebrat soubor s překladem';
$PMF_LANG['msgVariable'] = 'Proměnné';
$PMF_LANG['msgCancel'] = 'Cancel';
$PMF_LANG['msgSave'] = 'Uložit';
$PMF_LANG['msgSaving3Dots'] = 'ukládám ...';
$PMF_LANG['msgRemoving3Dots'] = 'odebírám ...';
$PMF_LANG['msgTransToolFileSaved'] = 'Soubor s překladem uložen';
$PMF_LANG['msgTransToolErrorSavingFile'] = 'Chyba při ukládání jazykového souboru';
$PMF_LANG['msgLanguage'] = 'Jazyk';
$PMF_LANG['msgTransToolLanguageCharset'] = 'Znaková sada jazyku';
$PMF_LANG['msgTransToolLanguageDir'] = 'Pokyny k jazyku';
$PMF_LANG['msgTransToolLanguageDesc'] = 'Popis jazyku';
$PMF_LANG['msgAuthor'] = 'Autor';
$PMF_LANG['msgTransToolAddAuthor'] = 'Přidat autora';
$PMF_LANG['msgTransToolCreateTranslation'] = 'Vytvořit překlad';
$PMF_LANG['msgTransToolTransCreated'] = 'Nový překlad úspěšně vytvořen';
$PMF_LANG['msgTransToolCouldntCreateTrans'] = 'Nemohu vytvořit nový překlad';
$PMF_LANG['msgAdding3Dots'] = 'přidávám ...';
$PMF_LANG['msgTransToolSendToTeam'] = 'Poslat týmu phpMyFAQ';
$PMF_LANG['msgSending3Dots'] = 'odesílám ...';
$PMF_LANG['msgTransToolFileSent'] = 'soubor s jazykem byl odeslán phpMyFAQ týmu. Děkujeme za sdílení.';
$PMF_LANG['msgTransToolErrorSendingFile'] = 'Vyskytla se chyba při odesílání jazyka';
$PMF_LANG['msgTransToolPercent'] = 'Procenet';

// added 2.5.0-RC3 - 2009-06-23 by Anatoliy
$LANG_CONF['records.attachmentsPath'] = array(0 => "input", 1 => "Cesta kde budou ukládány přílohy.<br /><small>Relativní cestou se myslí složka v rootu adresáře webu</small>");

// added 2.5.0-RC3 - 2009-06-24 by Anatoliy
$PMF_LANG['msgAttachmentNotFound'] = "Soubor, který zkoušíte stáhnout není na serveru";
$PMF_LANG['ad_sess_noentry'] = "Žádný záznam";

// added 2.6.0-alpha - 2009-07-30 by Aurimas Fišeras
//P.S. "One User online" is also possible, since sprintf just ignores extra args
$PMF_LANG["plmsgUserOnline"][0] = "%d uživatel online";
$PMF_LANG["plmsgUserOnline"][1] = "%d uživatelů online";

// added 2.6.0-alpha - 2009-08-02 by Anatoliy
$LANG_CONF['main.templateSet'] = array(0 => "select", 1 => "Grafická šablona, která bude použita");

// added 2.6.0-alpha - 2009-08-16 by Aurimas Fišeras
$PMF_LANG['msgTransToolRemove'] = 'Odebrat';
$PMF_LANG["msgTransToolLanguageNumberOfPlurals"] = "Počet plurálů";
$PMF_LANG['msgTransToolLanguageOnePlural'] = 'Tento jazyk má pouze jeden plurál';
$PMF_LANG['msgTransToolLanguagePluralNotSet'] = "Podpora plurálu pro jazyk %s je vypnuta (počet plurálů není nastaven)";

// added 2.6.0-alpha - 2009-08-16 by Aurimas Fišeras - Plural messages
$PMF_LANG["plmsgHomeArticlesOnline"][0] = "%d záznam online";
$PMF_LANG["plmsgHomeArticlesOnline"][1] = "%d záznamů online";
$PMF_LANG["plmsgViews"][0] = "%d zobrazení";
$PMF_LANG["plmsgViews"][1] = "%d zobrazení";

// added 2.6.0-alpha - 2009-08-30 by Aurimas Fišeras - Plural messages
$PMF_LANG['plmsgGuestOnline'][0] = '%d host';
$PMF_LANG['plmsgGuestOnline'][1] = '%d hostů';
$PMF_LANG['plmsgRegisteredOnline'][0] = ' a %d registrovaný';
$PMF_LANG['plmsgRegisteredOnline'][1] = ' a %d registrovaných';
$PMF_LANG["plmsgSearchAmount"][0] = "%d výsledků hledání";
$PMF_LANG["plmsgSearchAmount"][1] = "%d výsledků hledání";
$PMF_LANG["plmsgPagesTotal"][0] = " %d stránka";
$PMF_LANG["plmsgPagesTotal"][1] = " %d stránek";
$PMF_LANG["plmsgVotes"][0] = "%d hlas";
$PMF_LANG["plmsgVotes"][1] = "%d hlasů";
$PMF_LANG["plmsgEntries"][0] = "%d záznam";
$PMF_LANG["plmsgEntries"][1] = "%d záznamů";

// added 2.6.0-alpha - 2009-09-06 by Aurimas Fišeras
$PMF_LANG["rightsLanguage"]['addtranslation'] = "přidat překlad";
$PMF_LANG["rightsLanguage"]['edittranslation'] = "editovat překlad";
$PMF_LANG["rightsLanguage"]['deltranslation'] = "smazat překlad";
$PMF_LANG["rightsLanguage"]['approverec'] = "schválit překlad";

// added 2.6.0-alpha - 2009-09-9 by Anatoliy Belsky
$LANG_CONF["records.enableAttachmentEncryption"] = array(0 => "checkbox", 1 => "Povolit šifrování příloh <br><small>Ignorováno pokud jsou přílohy vypnuty</small>");
$LANG_CONF["records.defaultAttachmentEncKey"] = array(0 => "input", 1 => 'Výchozí klíč pro šifrování příloh <br><small>Ignorováno pokud je šifrování příloh vypnuto</small><br><small><font color="red">Upozornění: Neměňte pokud ste již šifrování zapli a použili!!!</font></small>');
//$LANG_CONF["records.attachmentsStorageType"] = array(0 => "select", 1 => "Attachment storage type");
//$PMF_LANG['att_storage_type'][0] = 'Filesystem';
//$PMF_LANG['att_storage_type'][1] = 'Database';

// added 2.6.0-alpha - 2009-09-06 by Thorsten
$PMF_LANG['ad_menu_upgrade'] = 'Upgrade';
$PMF_LANG['ad_you_shouldnt_update'] = 'Máte poslední verzi programu. Upgrade není potřebný.';
$LANG_CONF['security.useSslForLogins'] = array(0 => 'checkbox', 1 => "Povolit přihlášení pouze pomocí SSL připojení? (výchozí: vypnuto)");
$PMF_LANG['msgSecureSwitch'] = "Přepnout do zabezpečeného módu přihlášení!";

// added 2.6.0-alpha - 2009-10-03 by Anatoliy Belsky
$PMF_LANG['msgTransToolNoteFileSaving']  = 'Prosím mějte na paměti, že veškeré změny nebudou zapsány dokud nekliknete na tlačítko uložit';
$PMF_LANG['msgTransToolPageBufferRecorded'] = 'Stránka %d nahrána úspěšně do bufferu';
$PMF_LANG['msgTransToolErrorRecordingPageBuffer'] = 'Chyba při nahrávání stránky %d do bufferu';
$PMF_LANG['msgTransToolRecordingPageBuffer'] = 'Nahrávám stránku %d do bufferu';

// added 2.6.0-alpha - 2009-11-02 by Anatoliy Belsky
$PMF_LANG['ad_record_active'] = 'Aktivní';

// added 2.6.0-alpha - 2009-11-01 by Anatoliy Belsky
$PMF_LANG['msgAttachmentInvalid'] = 'Příloha je špatná, prosím informujte admina';

// added 2.6.0-alpha - 2009-11-02 by max
$LANG_CONF['search.numberSearchTerms']   = array(0 => 'input', 1 => 'Počet zobrazených výsledků vyhledávání');
$LANG_CONF['records.orderingPopularFaqs'] = array(0 => "select", 1 => "Řazení TOP dotazů");
$PMF_LANG['list_all_users']            = 'Ukázat všechny uživatele';

$PMF_LANG['records.orderingPopularFaqs.visits'] = "ukázat nejvíce navštěvované záznamy";
$PMF_LANG['records.orderingPopularFaqs.voting'] = "ukázat záznamy s nejvíce hlasováními";

// added 2.6.0-alpha - 2009-11-05 by Thorsten
$PMF_LANG['msgShowHelp'] = 'Prosím oddělte slova čárkou.';

// added 2.6.0-RC - 2009-11-30 by Thorsten
$PMF_LANG['msgUpdateFaqDate'] = 'vložit datum editace';
$PMF_LANG['msgKeepFaqDate'] = 'ponechat původní datum'; 
$PMF_LANG['msgEditFaqDat'] = 'vložit vlastní datum';
$LANG_CONF['main.optionalMailAddress'] = array(0 => 'checkbox', 1 => 'Emailová adresa jako povinné pole (výchozí: deaktivováno)');
$LANG_CONF['search.useAjaxSearchOnStartpage'] = array(0 => 'checkbox', 1 => 'Okamžitá odpověď na úvodní straně (výchozí: deaktivováno)');

// added v2.6.99 - 2010-11-24 by Gustavo Solt
$LANG_CONF['search.relevance'] = array(0 => 'select', 1 => 'Řadit podle důležitosti');
$LANG_CONF["search.enableRelevance"] = array(0 => "checkbox", 1 => "Aktivovat podporu důležitosti? (výchozí: vypnuto)");
$PMF_LANG['searchControlCenter'] = 'Nastavení vyhledávání';
$PMF_LANG['search.relevance.thema-content-keywords'] = 'Otázka - Odpověď - Klíčová slova';
$PMF_LANG['search.relevance.thema-keywords-content'] = 'Otázka - Klíčová slova - Odpověď';
$PMF_LANG['search.relevance.content-thema-keywords'] = 'Odpověď - Otázka - Klíčová slova';
$PMF_LANG['search.relevance.content-keywords-thema'] = 'Odpověď - Klíčová slova - Otázka';
$PMF_LANG['search.relevance.keywords-content-thema'] = 'Klíčová slova - Odpověď - Otázka';
$PMF_LANG['search.relevance.keywords-thema-content'] = 'Klíčová slova - Otázka - Odpověď';

// added 2.7.0-alpha - 2010-09-13 by Thorsten
$PMF_LANG['msgLoginUser'] = 'Přihlášení';
$PMF_LANG['socialNetworksControlCenter'] = 'Konfigurace sociálních sítí';
$LANG_CONF['socialnetworks.enableTwitterSupport'] = array(0 => 'checkbox', 1 => 'Twitter podpora (výchozí: deaktivováno)');
$LANG_CONF['socialnetworks.twitterConsumerKey'] = array(0 => 'input', 1 => 'Twitter klíč');
$LANG_CONF['socialnetworks.twitterConsumerSecret'] = array(0 => 'input', 1 => 'Twitter secret');

// added 2.7.0-alpha - 2010-10-14 by Tom Zeithaml
$LANG_CONF['socialnetworks.twitterAccessTokenKey'] = array(0 => 'input', 1 => 'Twitter přístupový Token Klíč');
$LANG_CONF['socialnetworks.twitterAccessTokenSecret'] = array(0 => 'input', 1 => 'Twitter přístupový Token Secret');
$LANG_CONF['socialnetworks.enableFacebookSupport'] = array(0 => 'checkbox', 1 => 'Facebook podpora (výchozí: deaktivováno)');

// added 2.7.0-alpha - 2010-12-21 by Anatoliy Belsky
$PMF_LANG["ad_menu_attachments"] = "Přílohy";
$PMF_LANG["ad_menu_attachment_admin"] = "Administrace příloh";
$PMF_LANG['msgAttachmentsFilename'] = 'Název souboru';
$PMF_LANG['msgAttachmentsFilesize'] = 'Velikost souboru';
$PMF_LANG['msgAttachmentsMimeType'] = 'MIME Typ';
$PMF_LANG['msgAttachmentsWannaDelete'] = 'Jste si jist, že chcete smazat tuto přílohu?';
$PMF_LANG['msgAttachmentsDeleted'] = 'Příloha <strong>úspěšně</strong> smazána.';

// added v2.7.0-alpha2 - 2010-01-12 by Gustavo Solt
$PMF_LANG['ad_menu_reports'] = 'Reporty';
$PMF_LANG["ad_stat_report_fields"] = "Pole";
$PMF_LANG["ad_stat_report_category"] = "Kategorie";
$PMF_LANG["ad_stat_report_sub_category"] = "Podkategorie";
$PMF_LANG["ad_stat_report_translations"] = "Překlady";
$PMF_LANG["ad_stat_report_language"] = "Jazyk";
$PMF_LANG["ad_stat_report_id"] = "ID záznamu";
$PMF_LANG["ad_stat_report_sticky"] = "Štítek";
$PMF_LANG["ad_stat_report_title"] = "Otázka";
$PMF_LANG["ad_stat_report_creation_date"] = "Datum";
$PMF_LANG["ad_stat_report_owner"] = "Originální autor";
$PMF_LANG["ad_stat_report_last_modified_person"] = "Poslední autor";
$PMF_LANG["ad_stat_report_url"] = "URL";
$PMF_LANG["ad_stat_report_visits"] = "Návštěvy";
$PMF_LANG["ad_stat_report_make_report"] = "Generovat report";
$PMF_LANG["ad_stat_report_make_csv"] = "Export do CSV";

// added v2.7.0-alpha2 - 2010-02-05 by Thorsten Rinne
$PMF_LANG['msgRegistration'] = 'Registrace';
$PMF_LANG['msgRegistrationCredentials'] = 'Pro registraci prosím zadejte vaše jméno a příjmení, vaše přihlašovací jméno a platnou emailovou adresu!';
$PMF_LANG['msgRegistrationNote'] = 'Po úspěšném dokončení registrace obdržíte odpověď, hned jak administrátor autorizuje vaši registraci.';

// added v2.7.0-beta - 2011-06-13 by Thorsten
$PMF_LANG['ad_entry_changelog_history'] = "Historie změn záznamu";

// added v2.7.0-beta2 - 2011-06-22 by Thorsten
$LANG_CONF['security.ssoSupport'] = array(0 => 'checkbox', 1 => 'Podpora Single Sign On (výchozí: deaktivováno)');
$LANG_CONF['security.ssoLogoutRedirect'] = array(0 => 'input', 1 => 'URL na které bude přesměrováno po úspěšném Single Sign On Odhlášení');
$LANG_CONF['main.dateFormat'] = array(0 => 'input', 1 => 'Formát datumu (výchozí: Y-m-d H:i)');
$LANG_CONF['security.enableLoginOnly'] = array(0 => 'checkbox', 1 => 'Kompletní zabezpečení záznamů (výchozí: deaktivováno)');

// added v2.7.0-RC - 2011-08-18 by Thorsten
$PMF_LANG['securityControlCenter'] = 'Konfigurace zabezpečení';
$PMF_LANG['ad_search_delsuc'] = 'Kritéria vyhledávání byla úspěšně smazána.';
$PMF_LANG['ad_search_delfail'] = 'Kritéria vyhledávání nebyla smazána.';

// added 2.7.1 - 2011-09-30 by Thorsten
$PMF_LANG['msg_about_faq'] = 'Souhrn';
$LANG_CONF['security.useSslOnly'] = array(0 => 'checkbox', 1 => 'Přístupné pouze přes SSL (výchozí: deaktivováno)');
$PMF_LANG['msgTableOfContent'] = 'Obsah';

// added v2.8.0-alpha - 2011-09-22 by Anatoliy
$PMF_LANG['cacheControlCenter'] = 'Cache konfigurace';
$LANG_CONF['cache.varnishEnable'] = array(0 => 'checkbox', 1 => 'Zapnout Varnish >=3.0 podporu<br><small>Budete potřebovat varnish PECL rozšíření</small>');
$LANG_CONF['cache.varnishHost'] = array(0 => 'input', 1 => 'Varnish host');
$LANG_CONF['cache.varnishPort'] = array(0 => 'input', 1 => 'Varnish port');
$LANG_CONF['cache.varnishSecret'] = array(0 => 'input', 1 => 'Varnish secret');
$LANG_CONF['cache.varnishTimeout'] = array(0 => 'input', 1 => 'Varnish timeout');

// added v2.8.0-alpha - 2011-09-29 by Thorsten
$PMF_LANG['ad_menu_searchfaqs'] = 'Hledat záznamy';

// added v2.8.0-alpha - 2012-01-13 by Peter
$LANG_CONF["records.enableCloseQuestion"] = array(0 => "checkbox", 1 => "Zavřít otevřený dotaz po odpovědi?");
$LANG_CONF["records.enableDeleteQuestion"] = array(0 => "checkbox", 1 => "Smazat otevřený dotaz po odpovědi?");
$PMF_LANG["msg2answerFAQ"] = "Zodpovězeno";

// added v2.8.0-alpha - 2012-01-16 by Thorsten
$PMF_LANG['headerUserControlPanel'] = 'Kontrolní panel';
