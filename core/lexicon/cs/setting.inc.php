<?php
/** 
 * Setting Czech lexicon topic
 *
 * @language cs
 * @package modx
 * @subpackage lexicon
 *
 * @author modxcms.cz
 * @updated 2010-12-02
 */
$_lang['area'] = 'Oblast';
$_lang['area_authentication'] = 'Autentizaci a zabezpečení';
$_lang['area_caching'] = 'Cachování';
$_lang['area_editor'] = 'WYSIWYG editor';
$_lang['area_file'] = 'Souborový systém';
$_lang['area_filter'] = 'Filtrovat dle oblasti...';
$_lang['area_furls'] = 'Přátelská URL';
$_lang['area_gateway'] = 'Brána';
$_lang['area_language'] = 'Jazyk a slovník';
$_lang['area_mail'] = 'Pošta';
$_lang['area_manager'] = 'Správce obsahu';
$_lang['area_proxy'] = 'Proxy';
$_lang['area_session'] = 'Session a Cookie';
$_lang['area_lexicon_string'] = 'Oblast záznamu slovníku';
$_lang['area_lexicon_string_msg'] = 'Zadejte klíč záznamu slovníku pro tuto oblast. Pokud ve slovníku záznam není, zobrazí se pouze klíč oblasti.<br />Oblasti jádra:<ul><li>authentication</li><li>caching</li><li>file</li><li>furls</li><li>gateway</li><li>language</li><li>manager</li><li>session</li><li>site</li><li>system</li></ul>';
$_lang['area_site'] = 'Portál';
$_lang['area_system'] = 'Systém a server';
$_lang['areas'] = 'Oblasti';
$_lang['namespace'] = 'Jmenný prostor';
$_lang['namespace_filter'] = 'Filtrovat dle jmenného prostoru...';
$_lang['search_by_key'] = 'Hledat dle klíče...';
$_lang['setting_create'] = 'Vytvořit novou položku konfigurace';
$_lang['setting_err'] = 'Zkontrolujte údaje v těchto políčkách: ';
$_lang['setting_err_ae'] = 'Položka konfigurace s tímto klíčem již existuje. Zadejte jiný název klíče.';
$_lang['setting_err_nf'] = 'Položka konfigurace nenalezena.';
$_lang['setting_err_ns'] = 'Nezadána položka konfigurace';
$_lang['setting_err_remove'] = 'Nastala chyba při ostraňování položky konfigurace.';
$_lang['setting_err_save'] = 'Nastala chyba při ukládání položky konfigurace.';
$_lang['setting_err_startint'] = 'Položka konfigurace nesmí začínat číslem.';
$_lang['setting_err_invalid_document'] = 'Dokument s ID %d neexistuje. Zadejte existující dokument.';
$_lang['setting_remove'] = 'Odstranit položku';
$_lang['setting_remove_confirm'] = 'Opravdu chcete odstranit tuto položku konfigurace? Mohlo by dojít k narušení správné funkčnosti správce obsahu.';
$_lang['setting_update'] = 'Upravit položku';
$_lang['settings_after_install'] = 'Protože se jedná o novou instalaci, je třeba aby jste zkontroloval tyto položky konfigurace a změnil všechny, které je třeba. Poté co vše zkontrolujete klikněte na "Uložit" a tím dojde k aktualizaci databáze.<br /><br />';
$_lang['settings_desc'] = 'V této části lze nastavit obecnou konfiguraci, nastavení správce obsahu a to jak se stránky chovají. Poklikáním na hodnotu ve sloupci Hodnota můžete danou hodnotu upravit přímo v tabulce, nebo klikněte pravým tlačítkem pro další možnosti. Kliknutím na symbol "+" se zobrazí popis dané položky konfigurace.';
$_lang['settings_furls'] = 'Přátelská URL';
$_lang['settings_misc'] = 'Smíšené';
$_lang['settings_site'] = 'Portál';
$_lang['settings_ui'] = 'Rozhranní &amp; Funkce';
$_lang['settings_users'] = 'Uživatel';
$_lang['system_settings'] = 'Konfigurace systému';

// user settings
$_lang['setting_allow_mgr_access'] = 'Přístup do správce obsahu';
$_lang['setting_allow_mgr_access_desc'] = 'Toto vyberte pokud si přejete povolit přístup do správce obsahu. <strong>Poznámka: Pokud je tato možnost nastavena na hodnotu "Ne" bude uživatel přesměrován na stránku přihlášení do správce obsahu nebo na úvodní stránku portálu.</strong>';

$_lang['setting_failed_login'] = 'Počet neúspěšných přihlášení';
$_lang['setting_failed_login_desc'] = 'Počet neúspěšných přihlášení, kterých může uživatel dosáhnout předtím než bude jeho účet zablokován.';

$_lang['setting_login_allowed_days'] = 'Povolené dny';
$_lang['setting_login_allowed_days_desc'] = 'Vyberte dny, ve kterých se tento uživatel může přihlašet do správce obsahu.';

$_lang['setting_login_allowed_ip'] = 'Povolené IP adresy';
$_lang['setting_login_allowed_ip_desc'] = 'Zadejte IP adresy, ze kterých bude uživateli umožněno přihlásit se. <strong>Poznámka: Více IP adres je možno oddělit čárkou.</strong>';

$_lang['setting_login_homepage'] = 'Úvodní stránka po přihlášení';
$_lang['setting_login_homepage_desc'] = 'Zadejte ID dokumentu, do kterého chcete uživatele přesměrovat po té co se přihlásí do správce obsahu. <strong>Poznámka: ujistěte se, že dokument s tímto ID existuje, že je publikován a přístupný tomuto uživateli!</strong>';

// system settings
$_lang['setting_access_policies_version'] = 'Verze schématu přístupových práv';
$_lang['setting_access_policies_version_desc'] = 'Verze systému přístupových práv. NEMĚŇTE.';

$_lang['setting_allow_duplicate_alias'] = 'Povolit duplicitu aliasů';
$_lang['setting_allow_duplicate_alias_desc'] = 'Pokud je nastaveno na "Ano", budete mít možnost ukládat duplicitní aliasy. <strong>Poznámka: Tato možnost by měla být aktivní spolu s nastavením "Ano" u položky "Cesta k přátelským aliasům", aby se předešlo problémům při odkazování na dokumenty.</strong>';

$_lang['setting_allow_tags_in_post'] = 'Povolit HTML tagy v POST';
$_lang['setting_allow_tags_in_post_desc'] = 'Je-li nastaveno "Ne", z obsahu POST proměnných v rámci správce obsahu budou odstraněny všechny HTML tagy. Doporučujeme nechat tuto hodnotu na "Ano".';

$_lang['setting_archive_with'] = 'Používat PCLZip archivaci';
$_lang['setting_archive_with_desc'] = 'Pokud Ano, PCLZip bude používán namísto ZipArchive pro soubory zip. Tuto volbu povolte pokud se Vám zobrazují chyby extractTo nebo máte problémy s rozbalováním ve Správě balíčků.';

$_lang['setting_auto_menuindex'] = 'Automatický menu index';
$_lang['setting_auto_menuindex_desc'] = 'Zvolte "Ano" pro zapnutí automatického indexování položek v menu. (Slouží např. pro řazení položek ve stromu dokumentů.)';

$_lang['setting_auto_check_pkg_updates'] = 'Automatická kontrola aktualizací balíčků';
$_lang['setting_auto_check_pkg_updates_desc'] = 'Je-li nastaveno "Ano", MODX bude automaticky kontrolovat aktualizace balíčků. Toto nastavení může zpomalit načítání.';

$_lang['setting_auto_check_pkg_updates_cache_expire'] = 'Cache pro další automatickou kontrolu aktualizací balíčku';
$_lang['setting_auto_check_pkg_updates_cache_expire_desc'] = 'Počet minut, po které bude správce balíčků udržovat výsledky aktualizací balíčku v cache.';

$_lang['setting_allow_multiple_emails'] = 'Povolit vícenásobné použití e-mailu pro uživatele';
$_lang['setting_allow_multiple_emails_desc'] = 'Je-li nastaveno "Ano", uživatelé mohou sdílet stejnou e-mailovou adresu.';

$_lang['setting_automatic_alias'] = 'Automaticky generovat aliasy';
$_lang['setting_automatic_alias_desc'] = 'Zvolte "Ano", pokud má MODX automaticky generovat aliasy z titulků dokumentů při ukládání.';

$_lang['setting_blocked_minutes'] = 'Doba blokování uživatele';
$_lang['setting_blocked_minutes_desc'] = 'Počet minut, po které bude uživatel blokován, pokud překročí maximální počet pokusů pro přihlášení. Zadávejte pouze čísla (žádné čárky, mezery atd.)';

$_lang['setting_cache_action_map'] = 'Povolit cache mapy akcí';
$_lang['setting_cache_action_map_desc'] = 'Je-li nastaveno "Ano", akce (nebo kontrolní mapy) budou ukládány do cache a tím se zkrátí doba načítání správce obsahu.';

$_lang['setting_cache_context_settings'] = 'Povolit cache nastavení kontextů';
$_lang['setting_cache_context_settings_desc'] = 'Je-li nastaveno "Ano", kontextová nastavení budou ukládána do cache a tím se zkrátí doba načítání.';

$_lang['setting_cache_db'] = 'Povolit cache databáze';
$_lang['setting_cache_db_desc'] = 'Je-li nastaveno "Ano", objekty a přímé SQL dotazy budou ukládány do cache a tím se sníží zátěž databáze.';

$_lang['setting_cache_db_expires'] = 'Expirace databázové cache';
$_lang['setting_cache_db_expires_desc'] = 'Doba (v sekundách), po kterou bude zachovávána databázová cache.';

$_lang['setting_cache_default'] = 'Používat cache dokumentů';
$_lang['setting_cache_default_desc'] = 'Zvolte "Ano" pokud chcete, aby byly všechny dokumenty ve výchozím stavu ukládány do cache.';
$_lang['setting_cache_default_err'] = 'Zvolte jestli chcete nebo nechcete cachovat dokumenty.';

$_lang['setting_cache_disabled'] = 'Globálně zakázat cache';
$_lang['setting_cache_disabled_desc'] = 'Zvolte "Ano" pokud chcete zakázat všechny funkce cache. Nedoporučuje se.';
$_lang['setting_cache_disabled_err'] = 'Zvolte jestli chcete zakát nebo povolit všechny cache funkce.';

$_lang['setting_cache_json'] = 'Ukládat JSON data do cache';
$_lang['setting_cache_json_desc'] = 'Možnost určující zda se mají ukládat všechny JSON data posílané z/do UI správce obsahu do cache.';

$_lang['setting_cache_expires'] = 'Obecná expirace cache';
$_lang['setting_cache_expires_desc'] = 'Doba (v sekundách), po kterou bude zachovávána cache.';

$_lang['setting_cache_json_expires'] = 'Expirace JSON cache';
$_lang['setting_cache_json_expires_desc'] = 'Doba (v sekundách), po které budou zachovány JSON soubory v cache.';

$_lang['setting_cache_handler'] = 'Název třídy správce cache';
$_lang['setting_cache_handler_desc'] = 'Název třídy, která se bude používat při ukládání do cache.';

$_lang['setting_cache_lang_js'] = 'Ukládat JS řetězce slovníků do cache';
$_lang['setting_cache_lang_js_desc'] = 'Je-li nastaveno "Ano", tak bude cache používat serverové hlavičky pro slovníkové JS řetězce, které se nacházejí ve správci obsahu.';

$_lang['setting_cache_lexicon_topics'] = 'Ukládat témata slovníku do cache';
$_lang['setting_cache_lexicon_topics_desc'] = 'Je-li toto nastavení aktivní, všechny témata slovníku budou ukládána do cache. Toto nastavení značně zrychlí načítání stránek správce obsahu při použití internacionalizace. Doporučujeme ponechat hodnotu na "Ano".';

$_lang['setting_cache_noncore_lexicon_topics'] = 'Ukládat ostatní témata slovníku do cache';
$_lang['setting_cache_noncore_lexicon_topics_desc'] = 'Je-li toto nastavení aktivní, témata slovníku, které nejsou součástí jádra budou také ukládána do cache. Toto nastavení je vhodné deaktivovat při vytváření svých vlastních Extras.';

$_lang['setting_cache_resource'] = 'Povolit ukládání částí dokumentů do cache';
$_lang['setting_cache_resource_desc'] = 'Částečné ukládání dokumentu do cache lze nastavit pokud je tato volba aktivní.';

$_lang['setting_cache_resource_expires'] = 'Doba expirace ukládání částí dokumentů do cache';
$_lang['setting_cache_resource_expires_desc'] = 'Tato hodnota v sekundách určuje dobu, po kterou budou soubory zachovány v cache.';

$_lang['setting_cache_scripts'] = 'Povolit cache pro skripty';
$_lang['setting_cache_scripts_desc'] = 'Je-li aktivní, MODX bude do cache ukládat všechny skripty (snippety a pluginy) do souboru pro snížení času potřebného pro načítání stránek. Doporučujeme ponechat tuto hodnotu nastavenou na "Ano".';

$_lang['setting_cache_system_settings'] = 'Povolit cache pro konfiguraci systému';
$_lang['setting_cache_system_settings_desc'] = 'Je-li aktivováno, konfigurace systému bude ukládána do cache, tím dojde ke snížení času potřebného pro načítání stránek. Doporučujeme ponechat tuto hodnotu nastavenou na "Ano".';

$_lang['setting_clear_cache_refresh_trees'] = 'Obnovit stromy při vyprázdnění cache';
$_lang['setting_clear_cache_refresh_trees_desc'] = 'Je-li tato volba aktivní, budou strom dokumentů, elementů a souborů znovunačteny při vyprázdnění cache.';

$_lang['setting_compress_css'] = 'Používat komprimované CSS';
$_lang['setting_compress_css_desc'] = 'Je-li toto nastavení aktivní, MODX bude používat komprimované verze CSS ve správci obsahu. Toto nastavení značně urychluje běh správce obsahu. Deaktivujte pouze v případě, kdy upravujete elementy jádra.';

$_lang['setting_compress_js'] = 'Používat komprimované javaskriptové knihovny';
$_lang['setting_compress_js_desc'] = 'Je-li toto nastavení aktivní, MODX bude používat komprimované verze javaskriptových knihoven ve správci obsahu. Toto nastavení značně urychluje běh správce obsahu. Deaktivujte pouze v případě, kdy upravujete elementy jádra.';

$_lang['setting_concat_js'] = 'Používat minimalizované javaskriptové knihovny';
$_lang['setting_concat_js_desc'] = 'Je-li toto nastavení aktivní, MODX bude používat minimalizované verze javaskriptových knihoven ve správci obsahu. Toto nastavení značně urychluje běh správce obsahu. Deaktivujte pouze v případě, kdy upravujete elementy jádra.';

$_lang['setting_container_suffix'] = 'Přípona složek dokumentů';
$_lang['setting_container_suffix_desc'] = 'Přípona, která bude přidána složce dokumentů pokud se používají přátelská URL.';

$_lang['setting_cultureKey'] = 'Jazyk';
$_lang['setting_cultureKey_desc'] = 'Vyberte jazyk, pro všechny kontexty (kromě správce obsahu "mgr") včetně kontextu "web".';

$_lang['setting_custom_resource_classes'] = 'Vlastní třídy dokumentů';
$_lang['setting_custom_resource_classes_desc'] = 'Čárkou oddělený seznam vlastních tříd dokumentů. Zadávejte malými písmeny klic_zaznamu_ve_slovniku:nazevTridy (Např: wiki_dokument:WikiDokument). Všechny vlastní třídy dokumentů musí rozšiřovat třídu modResource. Pro určení umístění kontroleru pro každou třídu přidejte položku nastavení [nazevTridyMalymiPismeny]_cesta s cestou k PHP souborům pro vytvoření/upravy. Např: wikidokument_cesta pro třídu WikiDokument, která rozšiřuje modResource.';

$_lang['setting_default_template'] = 'Výchozí šablona';
$_lang['setting_default_template_desc'] = 'Vyberte výchozí šablonu, která bude použita pro nové dokumenty. Stále budete mít možnost při úpravě dokumentu vybrat ostatní šablony, toto nastavení je pouze před-výběrem jedné z šablon.';

$_lang['setting_default_per_page'] = 'Počet výsledků na stránce';
$_lang['setting_default_per_page_desc'] = 'Výchozí počet zobrazených výsledků na stránce v rámci celého správce obsahu.';

$_lang['setting_editor_css_path'] = 'Cesta k CSS souboru';
$_lang['setting_editor_css_path_desc'] = 'Zadejte cestu k CSS souboru, který chcete použít v rámci WYSIWYG editoru. Nejlepší je zadat cestu od kořene portálu, například: /assets/site/style.css. Pokud nechcete používat ve WYSIWYG editoru CSS styly ponechte toto políčko prázdné.';

$_lang['setting_editor_css_selectors'] = 'CSS selektory pro editor';
$_lang['setting_editor_css_selectors_desc'] = 'Čárkou oddělený seznam CSS selektorů pro WYSIWYG editor.';

$_lang['setting_emailsender'] = 'Adresa odesílatele registračního e-mailu';
$_lang['setting_emailsender_desc'] = 'Zadejte e-mailovou adresu, která se zobrazí jako odesílatel v e-mailu při odeslání uživatelských údajů po registraci.';
$_lang['setting_emailsender_err'] = 'Zadejte e-mail.';

$_lang['setting_emailsubject'] = 'Předmět registračního e-mailu';
$_lang['setting_emailsubject_desc'] = 'Předmět e-mailu, který je poslán uživateli po jeho registraci.';
$_lang['setting_emailsubject_err'] = 'Zadejte text předmětu e-mailu.';

$_lang['setting_enable_dragdrop'] = 'Povolit Drag/Drop ve stromu Dokumentů a Elementů';
$_lang['setting_enable_dragdrop_desc'] = 'Je-li nastavení neaktivní, není možno upravovat dokumenty/elementy přetažením v rámci stromu.';

$_lang['setting_error_page'] = 'Chybová stránka';
$_lang['setting_error_page_desc'] = 'Zadejte ID dokumentu, na který chcete přesměrovat uživatele, kteří se pokusili přistoupit na stránku, která neexistuje. <strong>Poznámka: ujistěte se, že ID patří existujícímu dokumentu a že je publikován!</strong>';
$_lang['setting_error_page_err'] = 'Zadejte ID dokumentu, který bude sloužit jako chybová stránka.';

$_lang['setting_extension_packages'] = 'Rozšíření balíčky';
$_lang['setting_extension_packages_desc'] = 'Čárkou oddělený seznam balíčků, které se mají nahrát při vytvoření nové instance MODX. Zadávejte ve formátu: nazev_balicku:cesta_k_modelu';

$_lang['setting_failed_login_attempts'] = 'Počet neúspěšných pokusů o přihlášení';
$_lang['setting_failed_login_attempts_desc'] = 'Počet neúspěšných pokusů o přihlášení předtím než bude uživatel zablokován.';

$_lang['setting_fe_editor_lang'] = 'Jazyk frontend editoru';
$_lang['setting_fe_editor_lang_desc'] = 'Vyberte jazyk použitý v editoru na frontendu, pokud je použit.';

$_lang['setting_feed_modx_news'] = 'MODX RSS URL novinek';
$_lang['setting_feed_modx_news_desc'] = 'Zadejte URL pro RSS feed nesoucí novinky.';

$_lang['setting_feed_modx_news_enabled'] = 'MODX RSS novinky';
$_lang['setting_feed_modx_news_enabled_desc'] = 'Je-li nastaveno na "Ne", MODX nebude zobrazovat novinky na úvodní stránce správce obsahu.';

$_lang['setting_feed_modx_security'] = 'MODX RSS URL bezpečnostních oznámení';
$_lang['setting_feed_modx_security_desc'] = 'Zadejte URL pro RSS feed nesoucí bezpečnostní oznámení.';

$_lang['setting_feed_modx_security_enabled'] = 'MODX RSS bezpečnostní oznámení';
$_lang['setting_feed_modx_security_enabled_desc'] = 'Je-li nastaveno na "Ne", MODX nebude zobrazovat bezpečnostní oznámení na úvodní stránce správce obsahu.';

$_lang['setting_filemanager_path'] = 'Cesta pro správce souborů';
$_lang['setting_filemanager_path_desc'] = 'IIS často nemá správně nastavenou proměnnou "document_root", která je používána správcem souborů, s čím může pracovat. Máte-li problémy s používáním správce souborů, ujistěte se, že tato cesta je nastavena do kořene MODX instalace.';

$_lang['setting_filemanager_path_relative'] = 'Relativní cesta pro správce souborů?';
$_lang['setting_filemanager_path_relative_desc'] = 'Je-li cesta nastavená ve filemanager_path relativní vůči MODX base_path, nastavte tuto volbu na Ano, pokud je cesta ve filemanager_path mimo docroot nastavte Ne.';

$_lang['setting_filemanager_url'] = 'URL pro správce souborů';
$_lang['setting_filemanager_url_desc'] = 'Volitelné. Tuto volbu použijte pokud chcete nastavit explicitní URL pro přístup k souborům v rámci správce souborů (užitečné v případě, že jste změnili filemanager_path na cestu mimo MODX webroot). Ujistěte se, že je tato URL přístupná z webu. Pokud tuto volbu ponecháte prázdnou, MODX se pokusí automaticky tuto URL doplnit.';

$_lang['setting_filemanager_url_relative'] = 'Relativní URL pro správce souborů?';
$_lang['setting_filemanager_url_relative_desc'] = 'Je-li URL nastavená v filemanager_url relativní vůči MODX base_url, nastavte tuto volbu na Ano. Je-li URL nastavená ve filemanager_url mimo webroot nastavte Ne.';

$_lang['setting_forgot_login_email'] = 'E-mail zapomenutého přihlášení';
$_lang['setting_forgot_login_email_desc'] = 'Šablona e-mailu, který je odeslán pokud uživatel zapomněl své přihlašovací údaje.';

$_lang['setting_forward_merge_excludes'] = 'Potlačená políčka při symbolickém odkazování';
$_lang['setting_forward_merge_excludes_desc'] = 'Při symbolickém odkazování dochází ke sloučení hodnot políček ze symbolického a cílového dokumentu. Zapsaním názvu políček oddělených čárkou dojde k potlačení přepisu políček z hodnot symbolického dokumentu.';

$_lang['setting_friendly_alias_lowercase_only'] = 'Aliasy malými písmeny';
$_lang['setting_friendly_alias_lowercase_only_desc'] = 'Určuje zda se mají používat pouze malá písmena v aliasech dokumentů.';

$_lang['setting_friendly_alias_max_length'] = 'Maximální délka aliasu';
$_lang['setting_friendly_alias_max_length_desc'] = 'Je-li hodnota větší než 0, maximální délku aliasu dokumentu bude omezena na tuto hodnotu. Nula pro neomezenou délku.';

$_lang['setting_friendly_alias_restrict_chars'] = 'Metoda odstranění nechtěných znaků z aliasu';
$_lang['setting_friendly_alias_restrict_chars_desc'] = 'Metoda omezující použití znaků v aliasech dokumentů. Možnosti: "pattern" povoluje RegEx filtr, "legal" povoluje všechny platné URL znaky, "alpha" povoluje pouze pismena abecedy a "alphanumeric" povoluje pouze znaky a čísla.';

$_lang['setting_friendly_alias_restrict_chars_pattern'] = 'Vzor nechtěných znaků při metodě "pattern"';
$_lang['setting_friendly_alias_restrict_chars_pattern_desc'] = 'Plátný RegEx vzor pro odstranění nechtěných znaků z aliasu dokumentu.';

$_lang['setting_friendly_alias_strip_element_tags'] = 'Odebrat html tagy z aliasu';
$_lang['setting_friendly_alias_strip_element_tags_desc'] = 'Určuje zda by měli být tagy odstraněny z aliasu dokumentu.';

$_lang['setting_friendly_alias_translit'] = 'Metoda přepisování aliasů';
$_lang['setting_friendly_alias_translit_desc'] = 'Metoda přepisování aliasů pro dokumnety. Nevyplněná nebo "none" je výchozí možnost, kdy nedochází k přepisu. Další možné hodnoty jsou "iconv" (pokud je dostupný) nebo tabulka poskytující vlastní přepisovací třídu služby.';

$_lang['setting_friendly_alias_translit_class'] = 'Třída zajišťující přepisování aliasů';
$_lang['setting_friendly_alias_translit_class_desc'] = 'Volitelná služba poskytující tabulku pro službu přepisů pro generování/filtrování aliasů.';

$_lang['setting_friendly_alias_translit_class_path'] = 'Cesta ke třídě zajišťující přepis aliasů';
$_lang['setting_friendly_alias_translit_class_path_desc'] = 'Cesta k balíčku s modelem odkud se má načítat služba třídy pro přepis FURL Alias.';

$_lang['setting_friendly_alias_trim_chars'] = 'Odstranění znaků z konce aliasů';
$_lang['setting_friendly_alias_trim_chars_desc'] = 'Znaky, které mají být odstraněny z konce URL u aliasu dokumentu.';

$_lang['setting_friendly_alias_urls'] = 'Používat přátelské aliasy';
$_lang['setting_friendly_alias_urls_desc'] = 'Nastavením této možnosti na "Ano", bude také k aliasu připojena přípona typu obsahu. Například pokud ID zdroje bude 1, jeho alias bude "uvod" a máte nastavenou koncovku typu obsahu na ".html", nastavením této možnosti na "Ano" dojde vždy k vygenerování odkazu "uvod.html". Pokud zde alias není definován MODX vygeneruje odkaz "1.html".';

$_lang['setting_friendly_alias_word_delimiter'] = 'Oddělovač slov aliasu';
$_lang['setting_friendly_alias_word_delimiter_desc'] = 'Preferovaný oddělovač slov v přátelských URL.';

$_lang['setting_friendly_alias_word_delimiters'] = 'Povolené oddělovače slov';
$_lang['setting_friendly_alias_word_delimiters_desc'] = 'Znaky, které budou použity jako oddělovače slov při vytváření přátelských URL.';

$_lang['setting_friendly_urls'] = 'Používat přátelská URL';
$_lang['setting_friendly_urls_desc'] = 'Nastavení zda má MODX používat přátelská URL (lepší pro zpracování vyhledávači). Toto nastavení funguje pouze pro MODX instalace běžící serveru Apache, pro správnou funkčnost je také nutné nastavit soubor .htaccess. Pro více informací náhledněte do souboru .htaccess přiloženého v MODX distribuci.';
$_lang['setting_friendly_urls_err'] = 'Zvolte zda chcete používat přátelská URL či nikoli.';

$_lang['setting_hidemenu_default'] = 'Nezobrazovat v menu jako výchozí nastavení';
$_lang['setting_hidemenu_default_desc'] = 'Nastavte "Ano" pokud chcete, aby všechny nově vytvořené dokumenty měli přednastaveno nezobrazování se v menu.';

$_lang['setting_mail_charset'] = 'Znaková sada e-mailu';
$_lang['setting_mail_charset_desc'] = 'Znaková sada e-mailu, např. "iso-8859-1" nebo "UTF-8". Doporučujeme "UTF-8".';

$_lang['setting_mail_encoding'] = 'Kódování e-mail';
$_lang['setting_mail_encoding_desc'] = 'Nastavení kódování e-ailových zpráv. Možnosti jsou "8bit", "7bit", "binary", "base64" a "quoted-printable".';

$_lang['setting_mail_use_smtp'] = 'Použít SMTP';
$_lang['setting_mail_use_smtp_desc'] = 'Je-li nastaveno na Ano, MODX použije pro odesílání e-mailů SMTP server.';

$_lang['setting_mail_smtp_auth'] = 'SMTP autentizace';
$_lang['setting_mail_smtp_auth_desc'] = 'Sada SMTP autentizací. Využívá nastavení mail_smtp_user a mail_smtp_password.';

$_lang['setting_mail_smtp_helo'] = 'SMTP Helo zpráva';
$_lang['setting_mail_smtp_helo_desc'] = 'Nastavení SMTP HELO zprávy (Výchozí hostname).';

$_lang['setting_mail_smtp_hosts'] = 'SMTP servery';
$_lang['setting_mail_smtp_hosts_desc'] = 'Nastavení SMTP serverů. Jednotlivé servery musí být odděleny středníkem. Můžete také definovat různý port pro každý server použitím tohoto formátu: [server:port] (např. "smtp1.example.com:25;smtp2.example.com"). Servery budou použity postupně v případě, že předchozí neodpovídá.';

$_lang['setting_mail_smtp_keepalive'] = 'SMTP udržovat spojení';
$_lang['setting_mail_smtp_keepalive_desc'] = 'Zabraňuje SMTP serveru ukončit spojení po odeslání každého e-mailu. Nedoporučuje se.';

$_lang['setting_mail_smtp_pass'] = 'SMTP heslo';
$_lang['setting_mail_smtp_pass_desc'] = 'Heslo pro autentizaci k SMTP serveru.';

$_lang['setting_mail_smtp_port'] = 'SMTP port';
$_lang['setting_mail_smtp_port_desc'] = 'Nastavení výchozího SMTP portu.';

$_lang['setting_mail_smtp_prefix'] = 'SMTP prefix připojení';
$_lang['setting_mail_smtp_prefix_desc'] = 'Nastavení prefixu připojení. Možnosti jsou "", "ssl" nebo "tls"';

$_lang['setting_mail_smtp_single_to'] = 'SMTP jednotlivě';
$_lang['setting_mail_smtp_single_to_desc'] = 'Možnost odesílání e-mailových zpráv jednotlivě.';

$_lang['setting_mail_smtp_timeout'] = 'SMTP timeout';
$_lang['setting_mail_smtp_timeout_desc'] = 'Nastavení délky timeoutu SMTP serveru v sekundách. Tato funkčnost nepracuje ve Windows systémech.';

$_lang['setting_mail_smtp_user'] = 'SMTP uživatelské jméno';
$_lang['setting_mail_smtp_user_desc'] = 'Uživatelské jméno pro autentizaci k SMTP.';

$_lang['setting_manager_direction'] = 'Směr zobrazení textu ve správci obsahu';
$_lang['setting_manager_direction_desc'] = 'Zvolte směr textu, kterým bude zobrazen obsah správce obsahu, zleva do prava nebo zprava do leva.';

$_lang['setting_manager_date_format'] = 'Formát data ve správci obsahu';
$_lang['setting_manager_date_format_desc'] = 'Formátovací řetězec v PHP date() formátu, jak má být datum reprezentován ve správci obsahu.';

$_lang['setting_manager_lang_attribute'] = 'HTML a XML jazykové atributy správce obsahu';
$_lang['setting_manager_lang_attribute_desc'] = 'Zadejte jazykový kód, který nejlépe vystihuje zvolený jazyk správce obsahu, toto nastavení zajistí, že Vám prohlížeč zobrazí správně data.';

$_lang['setting_manager_language'] = 'Jazyk správce obsahu';
$_lang['setting_manager_language_desc'] = 'Zvolte jazyk pro MODX správce obsahu.';

$_lang['setting_manager_login_start'] = 'Úvodní stránka po přihlášení do správce obsahu';
$_lang['setting_manager_login_start_desc'] = 'Zadejte ID dokumentu, na která chcete přesměrovat uživatele po přihlášení do správce obsahu. <strong>Poznámka: ujistěte se, že ID patří existujícímu dokumentu, je publikován a je přístupný tomuto uživateli!</strong>';

$_lang['setting_manager_theme'] = 'Vzhled správce obsahu';
$_lang['setting_manager_theme_desc'] = 'Vyberte vzhled pro správce obsahu.';

$_lang['setting_manager_time_format'] = 'Formát času ve správci obsahu';
$_lang['setting_manager_time_format_desc'] = 'Formátovací řetězec v PHP date() formátu, jak má být čas reprezentován ve správci obsahu.';

$_lang['setting_manager_use_tabs'] = 'Používat záložky ve správci obsahu';
$_lang['setting_manager_use_tabs_desc'] = 'Je-li aktivní, správce obsahu použije pro vykreslení obsahu záložky, jinak budou panely vykresleny pod sebou.';

$_lang['setting_modRequest.class'] = 'Request Handler Class';
$_lang['setting_modRequest.class_desc'] = '';

$_lang['setting_modx_charset'] = 'Kódování znaků';
$_lang['setting_modx_charset_desc'] = 'Nastavte jaké kódování znaků chcete používat v rámci správce obsahu. Pamatujte, že MODX byl testován s mnoha kódováními, ale ne se všemi. Pro většinu jazyků je preferováno výchozí nastavení "UTF-8".';

$_lang['setting_new_file_permissions'] = 'Atributy nového souboru';
$_lang['setting_new_file_permissions_desc'] = 'Souborům nahraným pomocí správce souborů budou nastaveny tyto atributy. Toto nastavení nemusí fungovat na některých serverech, např. na IIS, v těchto případech budete muset nastavit atributy manuálně.';

$_lang['setting_new_folder_permissions'] = 'Atributy nové složky';
$_lang['setting_new_folder_permissions_desc'] = 'Složkám vytvořeným ve správci souborů budou nastaveny tyto atributy. Toto nastavení nemusí fungovat na některých serverech, např. na IIS, v těchto případech budete muset nastavit atributy manuálně.';

$_lang['setting_password_generated_length'] = 'Délka automaticky generovaného hesla';
$_lang['setting_password_generated_length_desc'] = 'Délka automaticky generovaného hesla pro uživatele.';

$_lang['setting_password_min_length'] = 'Minimální délka hesla';
$_lang['setting_password_min_length_desc'] = 'Minimální délka hesla uživatele.';

$_lang['setting_proxy_auth_type'] = 'Proxy typ autentizace';
$_lang['setting_proxy_auth_type_desc'] = 'Podporuje buď BASIC nebo NTLM.';

$_lang['setting_proxy_host'] = 'Proxy server';
$_lang['setting_proxy_host_desc'] = 'Pokud Váš server používá proxy nastavte jej na tomto místě. Tím povolíte MODxu používat proxy, např. pro přístup ke správci balíčků.';

$_lang['setting_proxy_password'] = 'Proxy heslo';
$_lang['setting_proxy_password_desc'] = 'Heslo požadované pro autentizaci k proxy serveru.';

$_lang['setting_proxy_port'] = 'Proxy port';
$_lang['setting_proxy_port_desc'] = 'Port proxy serveru.';

$_lang['setting_proxy_username'] = 'Proxy uživatelské jméno';
$_lang['setting_proxy_username_desc'] = 'Uživatelské jméno pro autentizaci k proxy serveru.';

$_lang['setting_phpthumb_allow_src_above_docroot'] = 'Povolit soubory mimo root';
$_lang['setting_phpthumb_allow_src_above_docroot_desc'] = 'Indikuje zda může být cesta src mimo root. Tato volba je užitečná při multi-kontextovém vývoji s více virtuálními hosty.';

$_lang['setting_phpthumb_cache_maxage'] = 'phpThumb Maximální stáří cache';
$_lang['setting_phpthumb_cache_maxage_desc'] = 'Smaže náhledy uložené v cache, které nebyly načteny více než X dní.';

$_lang['setting_phpthumb_cache_maxsize'] = 'phpThumb Maximální velikost cache';
$_lang['setting_phpthumb_cache_maxsize_desc'] = 'Smaže nejméně často načítané náhledy, když velikost cache přesáhne X MB.';

$_lang['setting_phpthumb_cache_maxfiles'] = 'phpThumb Maximální počet souborů v cache';
$_lang['setting_phpthumb_cache_maxfiles_desc'] = 'Smaže nejméně často načítané náhledy pokud má cache více než X souborů.';

$_lang['setting_phpthumb_cache_source_enabled'] = 'phpThumb Ukládat zdrojové soubory do cache';
$_lang['setting_phpthumb_cache_source_enabled_desc'] = 'Určuje zda se mají zdrojové soubory načítat do cache nebo ne. Doporujeme nastavit "Ne".';

$_lang['setting_phpthumb_error_bgcolor'] = 'phpThumb Chyba: barva pozadí';
$_lang['setting_phpthumb_error_bgcolor_desc'] = 'Hexadecimální hodnota barvy bez #, definující barvu pozadí při výpisu chyby phpThumb.';

$_lang['setting_phpthumb_error_fontsize'] = 'phpThumb Chyba: velikost fontu';
$_lang['setting_phpthumb_error_fontsize_desc'] = 'Hodnota definující velikost fontu v "em" (bez textu "em") při výpisu text chyby v phpThumb.';

$_lang['setting_phpthumb_error_textcolor'] = 'phpThumb Chyba: barva textu';
$_lang['setting_phpthumb_error_textcolor_desc'] = 'Hexadecimální hodnota barvy bez #, definující barvu textu při výpisu chyby phpThumb.';

$_lang['setting_phpthumb_imagemagick_path'] = 'phpThumb Cesta k ImageMagick';
$_lang['setting_phpthumb_imagemagick_path_desc'] = 'Volitelné. Nastavení cesty k ImageMagick pro alternativní generování náhledů pomocí phpThumb, pokud není ve výchozím nastavení PHP.';

$_lang['setting_phpthumb_nohotlink_enabled'] = 'phpThumb Hotlinking: vypnut';
$_lang['setting_phpthumb_nohotlink_enabled_desc'] = 'Vzdálené servery jsou povoleny v atributu src jestliže, není tato volba nastavena na "Ne".';

$_lang['setting_phpthumb_nohotlink_erase_image'] = 'phpThumb Hotlinking: odstranit obrázky';
$_lang['setting_phpthumb_nohotlink_erase_image_desc'] = 'Volba zda mají být odstraněny obrázky generované z cizích serverů, pokud není povolen hotlinking.';

$_lang['setting_phpthumb_nohotlink_text_message'] = 'phpThumb Hotlinking: zpráva nepovoleného přístupu';
$_lang['setting_phpthumb_nohotlink_text_message_desc'] = 'Zpráva, která se zobrazí místo náhledu při zakázaném hotlinkingu.';

$_lang['setting_phpthumb_nohotlink_valid_domains'] = 'phpThumb Hotlinking: platné domény';
$_lang['setting_phpthumb_nohotlink_valid_domains_desc'] = 'Čárkou oddělený seznam domén, které mohou používat hotlinking.';

$_lang['setting_phpthumb_nooffsitelink_enabled'] = 'phpThumb Offsite Linking: vypnut';
$_lang['setting_phpthumb_nooffsitelink_enabled_desc'] = 'Znemožnění používat phpThumb pro vykreslení obrázků na cizích portálech.';

$_lang['setting_phpthumb_nooffsitelink_erase_image'] = 'phpThumb Offsite Linking: odstranit obrázky';
$_lang['setting_phpthumb_nooffsitelink_erase_image_desc'] = 'Volba zda mají být odstraněny obrázky linkované z cizích nepovolených portálů.';

$_lang['setting_phpthumb_nooffsitelink_require_refer'] = 'phpThumb Offsite Linking: vyžadovat Referrer';
$_lang['setting_phpthumb_nooffsitelink_require_refer_desc'] = 'Je-li aktivní, nebude povolen offsite linking pokud nebude platná hlavička Referrer.';

$_lang['setting_phpthumb_nooffsitelink_text_message'] = 'phpThumb Offsite Linking: zpráva nepovoleného přístupu';
$_lang['setting_phpthumb_nooffsitelink_text_message_desc'] = 'Zpráva, která se zobrazí místo náhledu při zakázaném offsite linkingu.';

$_lang['setting_phpthumb_nooffsitelink_valid_domains'] = 'phpThumb Offsite Linking: platné domény';
$_lang['setting_phpthumb_nooffsitelink_valid_domains_desc'] = 'Čárkou oddělený seznam domén, které mohou používat offsite linking.';

$_lang['setting_phpthumb_nooffsitelink_watermark_src'] = 'phpThumb Offsite Linking: zdroj vodoznaku';
$_lang['setting_phpthumb_nooffsitelink_watermark_src_desc'] = 'Volitelné. Cesta k obrázku, který má být použit jako vodoznak při vykreslování obrázku při offsite linking.';

$_lang['setting_phpthumb_zoomcrop'] = 'phpThumb Zoom-Crop (ořez při zvětšení)';
$_lang['setting_phpthumb_zoomcrop_desc'] = 'Výchozí nastavení Zoom-Crop pro phpThumb pokud je použit v MODX. Výchozí hodnota je 0, tím se zabrání oříznutí při zvětšení.';

$_lang['setting_phpthumb_far'] = 'phpThumb zachovat poměr stran';
$_lang['setting_phpthumb_far_desc'] = 'Výchozí hodnota "C" pro zachování poměru stran směrem ke středu.';

$_lang['setting_publish_default'] = 'Publikováno';
$_lang['setting_publish_default_desc'] = 'Zvolte "Ano", pokud chcete, aby všechny nově vytvořené dokumenty byly ve výchozím stavu publikované.';
$_lang['setting_publish_default_err'] = 'Zvolte zda chcete, aby byly dokumenty publikovány nebo ne.';

$_lang['setting_rb_base_dir'] = 'Cesta k souborům';
$_lang['setting_rb_base_dir_desc'] = 'Zadejte fyzickou cestu k adresáři se zdroji. Toto nastavení je obvykle generováno automaticky. Používáte-li IIS, MODX není schopen zjistit automaticky tuto cestu, což zapříčiňuje zobrazení chyb ve správci souborů. V tomto případě můžete zadat cestu do adresáře s obrázky (stejně jako ji vkládáte do Vašeho prohlížeče). <strong>Poznámka:</strong> Adresář se zdroji musí obsahovat složky "images, files, flash a media" jinak nebude správce souborů pracovat správně.';
$_lang['setting_rb_base_dir_err'] = 'Zadejte cestu ke kořenu pro správce souborů.';
$_lang['setting_rb_base_dir_err_invalid'] = 'Tento adresář buď neexistuje nebo není přístupný. Zadejte platný adresář nebo nastavte atributy pro přístup PHP.';

$_lang['setting_rb_base_url'] = 'URL k souborům';
$_lang['setting_rb_base_url_desc'] = 'Zadejte virtuální cestu k adresáři souborů. Toto nastavení je obvykle generováno automaticky. Používáte-li IIS, MODX není schopen zjistit automaticky tuto URL, což zapříčiňuje zobrazení chyb ve správci souborů. V tomto případě můžete zadat URL do adresáře s obrázky (stejně jako ji vkládáte do Vašeho prohlížeče).';
$_lang['setting_rb_base_url_err'] = 'Nastavte URL pro správce souborů.';

$_lang['setting_request_controller'] = 'Název souboru kontroleru požadavků';
$_lang['setting_request_controller_desc'] = 'Název souboru hlavního kontroleru požadavků odkud se načítá MODX. Většina uživatelů by toto měla ponechat na index.php.';

$_lang['setting_request_param_alias'] = 'Název parametru požadavku';
$_lang['setting_request_param_alias_desc'] = 'Název GET parametru identifikujícího alias dokumentu při přesměrování pomocí přátelských URL.';

$_lang['setting_request_param_id'] = 'Název ID parametru požadavku';
$_lang['setting_request_param_id_desc'] = 'Název GET parametru identifikujícího ID dokumnetu pokud nejsou použity přátelské URL.';

$_lang['setting_resolve_hostnames'] = 'Získavat hostname návštěvníků';
$_lang['setting_resolve_hostnames_desc'] = 'Chcete, aby se MODX pokoušel získávat hostname návštěvníků portálu? Získávání hostname může způsobit zatížení serveru navíc, ale návštěvníky to neovlivní.';

$_lang['setting_resource_tree_node_name'] = 'Zdroj názvu dokumentu ve stromu dokumentů';
$_lang['setting_resource_tree_node_name_desc'] = 'Zadejte název políčka, kterého obsah se má zobrazovat jako název dokumentu ve stromu dokumentů. Výchozí hodnotou je pagetitle, ale může zde být použito jakékoliv políčko jako např. menutitle, alias, longtitle, atd.';

$_lang['setting_richtext_default'] = 'WYSIWYG editor';
$_lang['setting_richtext_default_desc'] = 'Zvolte "Ano" pokud chcete, aby všechny nově vytvořené dokumenty používaly ve výchozím stavu WYSIWYG editor.';

$_lang['setting_search_default'] = 'Vyhledatelné dokumenty';
$_lang['setting_search_default_desc'] = 'Zvolte "Ano" pokud chcete, aby byly všechny nově přidané dokumnety ve výchozím stavu vyhledatelné.';
$_lang['setting_search_default_err'] = 'Zvolte zda mají být dokumenty ve výchozím stavu vyhledatelné či nikoli.';

$_lang['setting_server_offset_time'] = 'Rozdíl času serveru';
$_lang['setting_server_offset_time_desc'] = 'Nastavte počet hodin, který je rozdílem mezi Vaším místem a místem, kde je umístěn server.';

$_lang['setting_server_protocol'] = 'Typ serveru';
$_lang['setting_server_protocol_desc'] = 'Pokud Váš portál používá spojení https, vyberte jej zde.';
$_lang['setting_server_protocol_err'] = 'Vyberte zda je Váš portál zabezpečený pomocí https nebo ne.';
$_lang['setting_server_protocol_http'] = 'http';
$_lang['setting_server_protocol_https'] = 'https';

$_lang['setting_session_cookie_domain'] = 'Doména session cookie';
$_lang['setting_session_cookie_domain_desc'] = 'Toto nastavení použijte pro přizpůsobení domény pro session cookie.';

$_lang['setting_session_cookie_lifetime'] = 'Životnost session cookie';
$_lang['setting_session_cookie_lifetime_desc'] = 'Tímto nastavením můžete přizpůsobit životnost session cookie v sekundách. Toto nastavení je použito pro nastavení životnosti sesson cookie přihlášeného uživatele pokud při přihlášení zvolí "Zapamatovat si mě".';

$_lang['setting_session_cookie_path'] = 'Cesta pro session cookie';
$_lang['setting_session_cookie_path_desc'] = 'Toto nastavení použijte pro přizpůsobení cesty ke cookie pro identifikaci portálu v závislosti na specifické session cookie.';

$_lang['setting_session_cookie_secure'] = 'Zabezpečení session cookie';
$_lang['setting_session_cookie_secure_desc'] = 'Aktivací této možnosti dojde k zabezpečení session cookie.';

$_lang['setting_session_handler_class'] = 'Název třídy správce session';
$_lang['setting_session_handler_class_desc'] = 'Pro databází spravované session, použijte "modSessionHandler". Toto ponechte prázdné, pro použití standardní PHP správy session.';

$_lang['setting_session_name'] = 'Název session';
$_lang['setting_session_name_desc'] = 'Toto nastavení použijte pro přizpůsobení názvu session v MODX.';

$_lang['setting_settings_version'] = 'Verze MODX';
$_lang['setting_settings_version_desc'] = 'Verze instalovaného MODX.';

$_lang['setting_settings_distro'] = 'Distribuce';
$_lang['setting_settings_distro_desc'] = 'Současně instalovaná distribuce MODX.';

$_lang['setting_set_header'] = 'Nastavovat HTTP hlavičky';
$_lang['setting_set_header_desc'] = 'Pokud je aktivní, MODX se pokusí nastavit HTTP hlavičky pro dokumnety.';

$_lang['setting_signupemail_message'] = 'Registrační e-mail';
$_lang['setting_signupemail_message_default'] = 'Dobrý den [[+uid]] \n\nZde jsou Vaše přihlašovací údaje pro [[+sname]] Správce obsahu:\n\nUživatelské jméno: [[+uid]]\nHeslo: [[+pwd]]\n\nJakmile se přihlásíte do správce obsahu ([[+surl]]) můžete si změnit heslo.\n\S pozdravem,\nadministrátor portálu.';
$_lang['setting_signupemail_message_desc'] = 'Šablona zprávy, která bude poslána uživateli pokud mu vytvoříte účet a necháte MODX zaslat mu e-mail obsahujicí jeho uživatelské jméno a heslo. <br /><strong>Poznámka:</strong> Následující placeholdery jsou před odesláním nahrazeny správcem obsahu: <br /><br />[[+sname]] - Název portálu, <br />[[+saddr]] - E-mailová adresa portálu, <br />[[+surl]] - URL adresa portálu, <br />[[+uid]] - Jméno nebo ID uživatele, <br />[[+pwd]] - Heslo uživatele, <br />[[+ufn]] - Celé jméno uživatele. <br /><br /><strong>Ponechte placeholdery [[+uid]] a [[+pwd]] v e-mailu nebo nebude uživatelské jméno a heslo obsaženo v e-mailu a uživatel nebude znát své uživatelské jméno a heslo!</strong>';

$_lang['setting_site_name'] = 'Název portálu';
$_lang['setting_site_name_desc'] = 'Zadejte název Vašeho portálu.';
$_lang['setting_site_name_err']  = 'Zadejte název Vašeho portálu.';

$_lang['setting_site_start'] = 'Úvodní stránka portálu';
$_lang['setting_site_start_desc'] = 'Zadejte ID zdroje, kterou chcete použít jako úvodní stránku. <strong>Poznámka: ujistěte se, že zadané ID patří existujícímu zdroji a je publikován!</strong>';
$_lang['setting_site_start_err'] = 'Zadejte ID zdroje, který má být úvodní stránkou portálu.';

$_lang['setting_site_status'] = 'Stav portálu';
$_lang['setting_site_status_desc'] = 'Zvolte "Ano" pro zveřejnění celého portálu na web (stav online). Vyberete-li "Ne" (stav offline), návštěvníci portálu uvidí "Zpráva nedostupnosti portálu" a nebudou si moci portál procházet.';
$_lang['setting_site_status_err'] = 'Zadejte zda má být portál online (Ano) nebo offline (Ne).';

$_lang['setting_site_unavailable_message'] = 'Zpráva nedostupnosti portálu';
$_lang['setting_site_unavailable_message_desc'] = 'Zpráva, která se zobrazí pokud je portál offline nebo pokud nastala chyba. <strong>Poznámka: tato zpráva bude zobrazena pouze v případě, pokud není nastavena možnost "Stránka nedostupnousti portálu".</strong>';

$_lang['setting_site_unavailable_page'] = 'Stránka nedostupnousti portálu';
$_lang['setting_site_unavailable_page_desc'] = 'Zadejte ID dokumentu, kterou chcete použít jako tzv. offline stránku. <strong>Poznámka: ujistěte se, že zadané ID patří existujícímu zdroji a je publikován!</strong>';
$_lang['setting_site_unavailable_page_err'] = 'Zadejte ID dokumentu, která bude použita jako stránka nedostupnosti portálu.';

$_lang['setting_strip_image_paths'] = 'Přepisovat URL souborů';
$_lang['setting_strip_image_paths_desc'] = 'Pokud je nastaveno na "Ne", MODX bude zapisovat cesty k souborům (obrázky, soubory, flash, atd.) jako absolutní URL. Relativní URL jsou užitečné pokud byste chtěli přesunout celou instalaci MODX, např. z vývojového serveru na produkční. Pokud netušíte co s tímto nastavením, ponechte jej nastavené na "Ano".';

$_lang['setting_topmenu_show_descriptions'] = 'Zobrazovat popisky v horním menu';
$_lang['setting_topmenu_show_descriptions_desc'] = 'Je-li nastaveno na \'Ne\', MODX skryje popisky u položek horního menu v rámci správce obsahu.';

$_lang['setting_tree_default_sort'] = 'Výchozí řazení dokumentů ve stromu dokumentů';
$_lang['setting_tree_default_sort_desc'] = 'Políčko, které se má použít pro výchozí řazení dokumentů v rámci stromu dokumentů.';

$_lang['setting_tree_root_id'] = 'ID kořenu stromu';
$_lang['setting_tree_root_id_desc'] = 'Nastavte ID zdroje, pod kterým začne levý strom dokumentů. Uživatel bude mít možnost vidět pouze potomky tohoto zdroje.';

$_lang['setting_udperms_allowroot'] = 'Povolit kořenovou složku';
$_lang['setting_udperms_allowroot_desc'] = 'Chcete uživatelům povolit vytváření nových dokumentů v kořenové složce portálu? ';

$_lang['setting_unauthorized_page'] = 'Stránka neautorizovaného přístupu';
$_lang['setting_unauthorized_page_desc'] = 'Zadejte ID zdroje, na který chcete přesměrovat uživatele pokud se pokusili přistoupit ke stránce, pro kterou nemají oprávnění. <strong>Poznámka: ujistěte se, že zadané ID patří existujícího zdroji, který je publikován a je přístupný veřejnosti!</strong>';
$_lang['setting_unauthorized_page_err'] = 'Zadejte ID zdroje pro stránku neautorizovaného přístupu.';

$_lang['setting_upload_files'] = 'Povolené typy souborů';
$_lang['setting_upload_files_desc'] = 'Zde můžete zadat seznam souborů, které mohou být nahrávány do "assets/files/" pomocí správce souborů. Zadejte přípony souborů pro typy souborů oddělené čárkami.';

$_lang['setting_upload_flash'] = 'Povolené typy souborů flash';
$_lang['setting_upload_flash_desc'] = 'Zde můžete zadat seznam souborů, které mohou být nahrávány do "assets/flash/" pomocí správce souborů. Zadejte přípony souborů pro typy flashů oddělené čárkami.';

$_lang['setting_upload_images'] = 'Povolené typy obrázků';
$_lang['setting_upload_images_desc'] = 'Zde můžete zadat seznam souborů, které mohou být nahrávány do "assets/images/" pomocí správce souborů. Zadejte přípony souborů pro typy obrázků oddělené čárkami.';

$_lang['setting_upload_maxsize'] = 'Maximální velikost nahrávaného souboru';
$_lang['setting_upload_maxsize_desc'] = 'Zadejte maximální velikost souboru, kterou je možno nahrát pomocí správce souborů. Velikost musí být zadána v bajtech. <strong>Poznámka: Nahrávání velkých souborů může trvat dlouho!</strong>';

$_lang['setting_upload_media'] = 'Povolené typy médií';
$_lang['setting_upload_media_desc'] = 'Zde můžete zadat seznam souborů, které mohou být nahrávány do "assets/media/" pomocí správce souborů. Zadejte přípony souborů pro typy médií oddělené čárkami.';

$_lang['setting_use_alias_path'] = 'Použít cesty pomocí přátelských aliasů';
$_lang['setting_use_alias_path_desc'] = 'Nastavením možnosti na "Ano" zobrazí celou cestu k dokumentu pokud má dokument alias. Například, pokud je dokument s aliasem "potomek" umístěn uvnitř složky s aliasem "rodic", pak bude celá adresa zobrazena jako "/rodic/potomek.html".<br /><strong>Poznámka: Je-li toto nastaveno na Ano (zapnutím cest pomocí aliasů), referencované položky (jako obrázky, css, javaskripty, atd.) používají absolutní cesty: např., "/assets/images" na rozdíl od "assets/images". Tímto zamezíte prohlížeči (nebo serveru) vkládání relativních cest do aliasů.</strong>';

$_lang['setting_use_browser'] = 'Povolit správce souborů';
$_lang['setting_use_browser_desc'] = 'Nastavte "Ano" pro aktivaci správce souborů. Toto nastavení povolí uživatelům procházet a nahrávat soubory jako např. obrázky, flash nebo soubory médií na server.';
$_lang['setting_use_browser_err'] = 'Uveďte zda chcete nebo nechcete používat správce souborů.';

$_lang['setting_use_editor'] = 'Povolit WYSIWYG editor';
$_lang['setting_use_editor_desc'] = 'Chcete aktivovat WYSIWYG editor? Pokud je Vám pohodlnější psát přímo HTML, pak ponechte toto nastavení neaktivní. Poznámka: toto nastavení je globálním, tzn. že bude aplikováno na všechny dokumenty a uživatele!';
$_lang['setting_use_editor_err'] = 'Uveďte zda chcete použít WYSIWYG editor nebo ne';

$_lang['setting_use_multibyte'] = 'Použít Multibyte extenzi pro PHP';
$_lang['setting_use_multibyte_desc'] = 'Nastavte na "Ano", pokud chcete používat extenzi mbstring pro multibyte znaky ve Vaší instalaci MODxu. Nastavte pouze pokud máte extenzi instalovanou v PHP. Silně doporučujeme nastavit "Ano" pro použití s češtinou.';

$_lang['setting_webpwdreminder_message'] = 'E-mail pro vyžádání nového hesla';
$_lang['setting_webpwdreminder_message_desc'] = 'Šablona zprávy, která se odešle pokud zažádá webový uživatel o zaslání nového hesla e-mailem. Správce obsahu mu odešle e-mail obsahující nové heslo a aktivační informace. <br /><strong>Poznámka:</strong> Následující placeholdery jsou nahrazeny správcem obsahu než je správa odeslána: <br /><br />[[+sname]] - Název portálu, <br />[[+saddr]] - E-mailová adresa portálu, <br />[[+surl]] - URL adresa portálu, <br />[[+uid]] - Jméno nebo ID uživatele, <br />[[+pwd]] - Heslo uživatele, <br />[[+ufn]] - Celé jméno uživatele. <br /><br /><strong>Ponechte placeholdery [[+uid]] a [[+pwd]] v e-mailu nebo nebude uživatelské jméno a heslo obsaženo v e-mailu a uživatel nebude znát své uživatelské jméno a heslo!</strong>';
$_lang['setting_webpwdreminder_message_default'] = 'Dobrý den [[+uid]]\n\nPro aktivaci nového heslo klikněte na odkaz:\n\n[[+surl]]\n\nPokud vše proběhlo úspěšně můžete použít následující heslo pro přihlášení:\n\nHeslo:[[+pwd]]\n\nPokud jste o změnu hesla nežádali tak tento e-mail ignorujte.\n\nS pozdravem,\nadministrátor portálu.';

$_lang['setting_websignupemail_message'] = 'E-mail po registraci z webu';
$_lang['setting_websignupemail_message_desc'] = 'Šablona zprávy odesílané webovým uživatelům, pokud jim vytvoříte účet webového uživatele a necháte správce obsahu, aby jim odeslal e-mail obsahující jejich uživatelské jméno a heslo. <br /><strong>Poznámka:</strong> Následující placeholdery jsou nahrazeny správcem obsahu než je správa odeslána: <br /><br />[[+sname]] - Název portálu, <br />[[+saddr]] - E-mailová adresa portálu, <br />[[+surl]] - URL adresa portálu, <br />[[+uid]] - Jméno nebo ID uživatele, <br />[[+pwd]] - Heslo uživatele, <br />[[+ufn]] - Celé jméno uživatele. <br /><br /><strong>Ponechte placeholdery [[+uid]] a [[+pwd]] v e-mailu nebo nebude uživatelské jméno a heslo obsaženo v e-mailu a uživatel nebude znát své uživatelské jméno a heslo!</strong>';
$_lang['setting_websignupemail_message_default'] = 'Dobrý den [[+uid]] \n\nZde jsou Vaše přihlašovací údaje pro portál [[+sname]]:\n\nUživatelské jméno: [[+uid]]\nHeslo: [[+pwd]]\n\nJakmile se přihlásíte na [[+sname]] ([[+surl]]) můžete si změnit své heslo.\n\nS pozdravem,\nadministrátor portálu.';

$_lang['setting_welcome_screen'] = 'Zobrazit uvítací obrazovku';
$_lang['setting_welcome_screen_desc'] = 'Je-li nastaveno na "Ano", uvítací obrazovka se zobrazí při dalším načtení úvodní stránky a pak se již nezobrazí.';

$_lang['setting_welcome_screen_url'] = 'URL uvítací obrazovky';
$_lang['setting_welcome_screen_url_desc'] = 'URL uvítací obrazovky, která se zobrazí po prvním přihlášení do správce obsahu.';

$_lang['setting_which_editor'] = 'Výchozí editor';
$_lang['setting_which_editor_desc'] = 'Zde můžete nastavit, který editor chcete používat. Další editory je možno stáhnout a nainstalovat ze stránky MODX download.';

$_lang['setting_which_element_editor'] = 'Výchozí editor pro elementy';
$_lang['setting_which_element_editor_desc'] = 'Zde můžete nastavit, který WYSIWYG editor chcete používat pro editování elementů. Další WYSIWYG editory je možno stáhnout a nainstalovat pomocí správce balíčků.';

$_lang['setting_xhtml_urls'] = 'XHTML URLs';
$_lang['setting_xhtml_urls_desc'] = 'Pokud je nastaveno na Ano, všechny odkazy, které generuje MODX budou v souladu s xHTML včetně zakódování ampersandů.';
