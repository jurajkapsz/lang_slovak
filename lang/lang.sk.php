<?php

	$about = array(
		'name' => 'Slovensky',
		'author' => array(
			'name' => 'Juraj Kapsz',
			'email' => 'hi@jurajkapsz.sk',
			'website' => 'https://jurajkapsz.sk'
		),
		'release-date' => '2019-07-19'
	);

	/**
	 * Symphony Core
	 */
	$dictionary = array(

		// Missing

		'Are you sure you want to proceed?' => 
		'Naozaj chcete pokračovať?',

		'Reordering was unsuccessful.' => 
		'Usporiadanie sa nepodarilo zmeniť.',

		'Change Password' => 
		'Zmeniť heslo',

		'Remove File' => 
		'Odstrániť súbor',

		'Untitled Field' => 
		'Pole bez názvu',

		'The field “{$title}” ({$type}) has been removed.' => 
		'Pole “{$title}” ({$type}) bolo odstránené.',

		'Undo?' => 
		'Obnoviť?',

		'untitled' => 
		'bez názvu',

		'Expand all' => 
		'Rozbaliť všetko',

		'Collapse all' => 
		'Zbaliť všetko',

		'drag to reorder' => 
		'ťahom zmeníte poradie',

		'Please reset your password' => 
		'Prosím obnovte si Vaše heslo',

		'required' => 
		'povinné',

		'Click to select' => 
		'Kliknutím vyberte',

		'Type to search' => 
		'Vyhľadajte',

		'Clear' => 
		'Zmazať',

		'Search for {$item}' => 
		'Nájsť {$item}',

		'Add filter' => 
		'Pridať filter',

		'filtered' => 
		'filtrované',

		'None' => 
		'Prázdne',

		'Clear filters' => 
		'Odstrániť filtre',

		'Apply filters' => 
		'Použiť filtre',

		'The Symphony calendar widget has been disabled because your system date format is currently not supported. Try one of the following instead or disable the calendar in the field settings:' => 
		'Symphony kalendár nie je k dispozícií, nakoľko v systéme nastavený formát dátumu nie je momentálne podporovaný. Vyskúšajte niektoré z nasledujúcich možností, alebo vypnite kalendár v nastaveniach poľa:',

		'no leading zero' => 
		'bez nuly na začiatku',

		'Enable' => 
		'Povoliť',

		'Install' => 
		'Nainštalovať',

		'Update' => 
		'Zaktualizovať',

		'Add item' => 
		'Pridať položku',

		'Remove item' => 
		'Odstrániť položku',

		'Ignore?' => 
		'Ignorovať?',

		'next' => 
		'ďalšie',

		'at' => 
		'o',

		'just now' => 
		'práve teraz',

		'a minute ago' => 
		'pred minútou',

		'{$minutes} minutes ago' => 
		'pred {$minutes} minútami',

		'about 1 hour ago' => 
		'pred 1 hodinou',

		'about {$hours} hours ago' => 
		'pred {$hours} hodinami',

		'Sort by %1$s %2$s' => 
		'Zoradiť podľa %1$s %2$s',

		'ascending' => 
		'vzostupne',

		'descending' => 
		'zostupne',

		'Documentation' => 
		'Pomocník',

		'Success and Failure XML Examples' => 
		'XML ukážky',

		'When saved successfully, the following XML will be returned:' => 
		'Ak sa úspešne zapíše záznam, vráti sa nasledujúce XML:',

		'Entry [created | edited] successfully.' => 
		'Záznam úspešne vytvorený/upravený.',

		'When an error occurs during saving, due to either missing or invalid fields, the following XML will be returned.' => 
		'Pokiaľ nastane chyba počas ukladania, buď kvôli chýbajúcim alebo nesprávne vyplneným poliam, vráti sa nasledujúce XML:',

		'Notice that it is possible to get mixtures of success and failure messages when using the ‘Allow Multiple’ option.' => 
		'Poznámka: Pri použití možnosti ‘Povoliť viacnásobný zápis‘ sa môže vrátiť kombinácia úspešných a neúspešných oznámení.',

		'Entry encountered errors when saving.' => 
		'Pri ukladaní záznamu nastali chyby.',

		'The following is an example of what is returned if any options return an error:' => 
		'Ukážka odpovede, pokiaľ niektorá z podmienok vráti chybu:',

		'Recipient not found' => 
		'Adresát nenájdený',

		'Example Front-end Form Markup' => 
		'Ukážka kódu formulára',

		'This is an example of the form markup you can use on your frontend:' => 
		'Príklad prezentačného kódu formulára, ktorý môžete použiť na vašej webovej stránke:',

		'Submit' => 
		'Odoslať',

		'To edit an existing entry, include the entry ID value of the entry in the form. This is best as a hidden field like so:' => 
		'Na editáciu existujúceho záznamu pridajte do formulára ID číslo cieľového záznamu, najlepšie pomocou skrytého poľa:',

		'To redirect to a different location upon a successful save, include the redirect location in the form. This is best as a hidden field like so, where the value is the URL to redirect to:' => 
		'Na presmerovanie stránky po úspešnom odoslaní formulára pridajte adresu cieľovej stránky vo forme skrytého poľa:',

		'Send Notification Email' => 
		'Odoslať notifikačný e-mail',

		'Upon the event successfully saving the entry, this option takes input from the form and send an email to the desired recipient.' => 
		'Po úspešnom zápise záznamu udalosťou sa zoberú hodnoty z formulára a odošlú vybraným adresátom.',

		'It currently does not work with ‘Allow Multiple’' => 
		'Možnosť odoslania hodnôt nefunguje pri voľbe ‘Povoliť viacnásobný zápis‘',

		'The following are the recognised fields:' => 
		'Dostupné hodnoty pre odoslanie e-mailom:',

		'Optional' => 
		'Voliteľné',

		'list of comma-separated author usernames.' => 
		'Zoznam používateľských mien oddelených čiarkou.',

		'All of these fields can be set dynamically using the exact field name of another field in the form as shown below in the example form:' => 
		'Hodnoty všetkých polí vedia byť dynamicky nastavené, ako ukazuje nasledujúci príklad:',

		'Name' => 
		'Názov',

		'Email' => 
		'E-mail',

		'Message' => 
		'Správa',

		'A database error occurred while attempting to reorder.' => 
		'Počas zmeny usporiadania nastala chyba v databáze.',

		'%1$s &ndash; %2$s' => 
		false,

		'Data Sources' => 
		'Zdroje údajov',

		'Symphony' => 
		false,

		'Create New' => 
		'Vytvoriť nový',

		'Create a new data source' => 
		'Vytvoriť nový zdroj údajov',

		'An error occurred while processing this form. See below for details.' => 
		'Pri spracovaní formulára nastala chyba. Podrobnosti viď nižšie.',

		'Data Source updated at %s.' => 
		'Zdroj údajov bol zaktualizovaný o %s.',

		'Data Source created at %s.' => 
		'Zdroj údajov bol vytvorený o %s.',

		'Create another?' => 
		'Vytvoriť ďalší?',

		'View all Data Sources' => 
		'Zobraziť všetky zdroje údajov',

		'Untitled' => 
		'Bez názvu',

		'Source' => 
		'Zdroj',

		'System' => 
		'Systém',

		'Authors' => 
		'Autori',

		'Navigation' => 
		'Navigácia',

		'Custom XML' => 
		'Vlastné XML',

		'Static XML' => 
		'Statické XML',

		'From extensions' => 
		'Z rozšírení',

		'Sections' => 
		'Sekcie',

		'Essentials' => 
		'Všeobecné nastavenia',

		'Execution Conditions' => 
		'Podmienky vykonania',

		'Leaving these fields empty will always execute the data source.' => 
		'Zdroj údajov sa vykoná zakaždým, pokiaľ necháte tieto polia prázdne.',

		'Required Parameter' => 
		'Požadovaný parameter',

		'$param' => 
		'$parameter',

		'Forbidden Parameter' => 
		'Zakázaný parameter',

		'Error Conditions' => 
		'Podmienky chyby',

		'Meeting one of these conditions will cause a <code>404 Not Found</code> response.' => 
		'Naplnenie niektorej z týchto podmienok vráti <code>HTTP 404 Nenájdené</code> odpoveď.',

		'The required parameter is missing' => 
		'Požadovaný parameter chýba',

		'The forbidden parameter is present' => 
		'Zakázaný parameter je prítomný',

		'No results are found' => 
		'Žiadne výsledky nenájdené',

		'Filters' => 
		'Filtre',

		'Use %s syntax to filter by page parameters. A default value can be set using %s.' => 
		'Použite zápis %s na filtrovanie výsledkov pomocou parametrov stránky. Predvolenú hodnotu môžete nastaviť prostredníctvom zápisu %s.',

		'$param:default' => 
		'$parameter:predvolená hodnota',

		'Remove filter' => 
		'Odstrániť filter',

		'System ID' => 
		'Systémové ID',

		'Value' => 
		'Hodnota',

		'System Creation Date' => 
		'Dátum vytvorenia',

		'System Modification Date' => 
		'Dátum poslednej zmeny',

		'ID' => 
		false,

		'Username' => 
		'Prihlasovacie meno',

		'First Name' => 
		'Meno',

		'Last Name' => 
		'Priezvisko',

		'User Type' => 
		'Typ používateľa',

		'Parent Page' => 
		'Nadradená stránka',

		'Page Type' => 
		'Typ',

		'Sorting' => 
		'Zoradenie',

		'Use %s syntax to order by page parameters.' => 
		'Použite zápis %s na zoradenie výsledkov pomocou parametrov stránky.',

		'Sort By' => 
		'Zoradiť podľa',

		'Author ID' => 
		'ID autora',

		'Status' => 
		'Stav',

		'Page ID' => 
		'ID stránky',

		'Handle' => 
		'Cesta',

		'Sort Order' => 
		'Zoradenie',

		'{$param}' => 
		'{$parameter}',

		'Grouping' => 
		'Zoskupenie',

		'Group By' => 
		'Zoskupiť podľa',

		'Pagination' => 
		'Stránkovanie',

		'Use %s syntax to limit by page parameters.' => 
		'Použite zápis %s na stránkovanie pomocou parametrov stránky.',

		'Entries per Page' => 
		'Počet riadkov na stránku',

		'Page Number' => 
		'Číslo stránky',

		'Enable pagination' => 
		'Použiť stránkovanie',

		'Content' => 
		'Obsah',

		'Included Elements' => 
		'Zahrnúť polia',

		'Parameters' => 
		'Parametre',

		'Include a count of entries in associated sections' => 
		'Zahrnúť počty záznamov v prepojených sekciách',

		'HTML-encode text' => 
		'HTML zakódovanie textu (HTML-encode)',

		'Enter valid XML, exclude XML declaration' => 
		'Zadajte XML v správnom formáte, vynechajte XML deklaráciu',

		'Attach to Pages' => 
		'Pripojiť k stránkam',

		'The data will only be available on the selected pages.' => 
		'Údaje budú dostupné iba na vybraných stránkach.',

		'Pages' => 
		'Stránky',

		'Save Changes' => 
		'Uložiť zmeny',

		'Create Data Source' => 
		'Vytvoriť zdroj údajov',

		'Delete' => 
		'Zmazať',

		'Delete this data source' => 
		'Zmazať tento zdroj údajov',

		'Are you sure you want to delete this data source?' => 
		'Naozaj chcete zmazať tento zdroj údajov?',

		'%1$s &ndash; %2$s &ndash; %3$s' => 
		false,

		'Data Source' => 
		'Zdroj údajov',

		'Author' => 
		'Autor',

		'Version' => 
		'Verzia',

		'%1$s released on %2$s' => 
		'%1$s vydané %2$s',

		'Created by %1$s at %2$s' => 
		'Založené %1$s o %2$s',

		'Description' => 
		'Popis',

		'Example XML' => 
		'Ukážka XML',

		'Failed to delete %s.' => 
		'%s sa nepodarilo zmazať.',

		'Please check permissions on %s.' => 
		'Prosím skontrolujte prístupové práva na %s.',

		'This is a required field' => 
		'Povinné pole',

		'This field contains invalid characters' => 
		'Pole obsahuje neplatné znaky',

		'The name of the data source must begin with a letter.' => 
		'Názov zdroja údajov musí začínať písmenom.',

		'XML is invalid.' => 
		'XML má neplatný formát.',

		'A result limit must be set' => 
		'Musí byť nastavené stránkovanie výsledkov',

		'Must be a valid number or parameter' => 
		'Musí byť číslo alebo parameter',

		'A page number must be set' => 
		'Číslo strany musí byť nastavené',

		'Please ensure name contains at least one Latin-based character.' => 
		'Prosím uistite sa, že názov obsahuje aspoň jeden znak latinky.',

		'A Data source with the name %s already exists' => 
		'Zdroj údajov s názvom %s už existuje',

		'Failed to write Data source to disk.' => 
		'Zdroj údajov sa nepodarilo uložiť na disk.',

		'Invalid URL' => 
		'Neplatný URL formát',

		'Request timed out. %d second limit reached.' => 
		'Časový limit požiadavky %d sekúnd vypršal.',

		'Failed to load URL, status code %d was returned.' => 
		'Chyba načítania URL adresy, vrátený chybový stav %d.',

		'Events' => 
		'Udalosti',

		'Create a new event' => 
		'Vytvoriť novú udalosť',

		'Event updated at %s.' => 
		'Udalosť bola zaktualizovaná o %s.',

		'Event created at %s.' => 
		'Udalosť vytvorená o %s.',

		'View all Events' => 
		'Zobraziť všetky udalosti',

		'Target' => 
		'Cieľ',

		'Event Filters add additional conditions or actions to an event.' => 
		'Filtre udalostí pridajú ďalšie podmienky alebo funkčnosť k udalosti.',

		'Admin Only' => 
		'Iba admin',

		'Allow Multiple' => 
		'Povoliť viacnásobný zápis',

		'The event will only be available on the selected pages.' => 
		'Udalosť bude dostupná iba na vybraných stránkach.',

		'Last modified on %s' => 
		'Posledná zmena %s',

		'Create Event' => 
		'Vytvoriť udalosť',

		'Delete this event' => 
		'Zmazať udalosť',

		'Are you sure you want to delete this event?' => 
		'Naozaj chcete zmazať túto udalosť?',

		'The name of the event must begin with a letter.' => 
		'Názov udalosti musí začínať na písmeno.',

		'An Event with the name %s already exists' => 
		'Udalosť s názvom %s už existuje',

		'Failed to write Event to disk.' => 
		'Udalosť sa nepodarilo uložiť na disk.',

		'Create a new page' => 
		'Vytvoriť novú stránku',

		'Template' => 
		'Šablóna',

		'Universal Resource Locator' => 
		// Jednotný vyhľadávač zdrojov
		'URL',

		'URL' => 
		false,

		'Type' => 
		'Typ',

		'Children' => 
		'Potomkovia',

		'None found.' => 
		'Žiadne záznamy nenájdené.',

		'Select Page %s' => 
		'Vybrať stránku %s',

		'With Selected...' => 
		'Vybrané záznamy...',

		'Are you sure you want to delete the selected pages?' => 
		'Naozaj chcete vymazať vybrané stránky?',

		'Page updated at %s.' => 
		'Stránka bola zaktualizovaná o %s.',

		'Page created at %s.' => 
		'Stránka bola vytvorená o %s.',

		'View all Pages' => 
		'Zobraziť všetky stránky',

		'View Page' => 
		'Zobraziť stránku',

		'View Page on Frontend' => 
		'Zobraziť stránku na webovej stránke',

		'Page Settings' => 
		'Nastavenia stránky',

		'Page Resources' => 
		'Zdroje stránky',

		'Create Page' => 
		false,

		'Delete this page' => 
		'Zmazať stránku',

		'Are you sure you want to delete this page?' => 
		'Naozaj chcete zmazať túto stránku?',

		'This is a required field.' => 
		'Povinné pole.',

		'This document is not well formed.' => 
		'Tento dokument má nesprávný formát.',

		'The following error was returned:' => 
		'Nastala nasledujúca chyba:',

		'Page Template could not be written to disk.' => 
		'Šablónu stránky sa nepodarilo uložiť na disk.',

		'An index type page already exists.' => 
		'Stránka typu ‘index‘ už existuje.',

		'A 404 type page already exists.' => 
		'Stránka typu ‘404‘ už existuje.',

		'A 403 type page already exists.' => 
		'Stránka typu ‘403‘ už existuje.',

		'Please ensure handle contains at least one Latin-based character.' => 
		'Prosím uistite sa, že cesta obsahuje aspoň jeden znak latinky.',

		'A page with that handle already exists' => 
		'Stránka s danou cestou už existuje',

		'Unknown errors occurred while attempting to save.' => 
		'Pri ukladaní sa vyskytli neznáme chyby.',

		'Check your activity log' => 
		'Skontrolujte váš log záznam',

		'Page could not be deleted because it does not exist.' => 
		'Stránka nemohla byť zmazaná, pretože neexistuje.',

		'Page could not be deleted because it has children.' => 
		'Stránka nemohla byť zmazaná, pretože má pridelné podstránky.',

		'One or more pages could not be deleted.' => 
		'Jedna alebo viaceré stránky nemohli byť zmazané.',

		'Create a section' => 
		'Vytvoriť sekciu',

		'Entries' => 
		'Záznamy',

		'Navigation Group' => 
		'Navigačná skupina',

		'Select Section %s' => 
		'Vybrať sekciu %s',

		'Are you sure you want to delete the selected sections?' => 
		'Naozaj chcete zmazať vybrané sekcie?',

		'Delete Entries' => 
		'Vymazať záznamy',

		'Are you sure you want to delete all entries in the selected sections?' => 
		'Naozaj chcete vymazať všetky záznamy vo vybraných sekciách?',

		'Set navigation group' => 
		'Nastaviť navigačnú skupinu',

		'Fields' => 
		'Polia',

		'Add field' => 
		'Pridať pole',

		'Remove field' => 
		'Odstrániť pole',

		'Create Section' => 
		'Vytvoriť sekciu',

		'The Section, %s, could not be found.' => 
		'Sekcia %s sa nenašla.',

		'Unknown Section' => 
		'Neznáma sekcia',

		'Section updated at %s.' => 
		'Sekcia zaktualizovaná o %s.',

		'Section created at %s.' => 
		'Sekcia vytvorena o %s.',

		'View all Sections' => 
		'Zobraziť všetky sekcie',

		'View Entries' => 
		'Zobraziť záznamy',

		'View Section Entries' => 
		'Zobraziť záznamy sekcie',

		'Delete this section' => 
		'Zmazať sekciu',

		'Are you sure you want to delete this section?' => 
		'Naozaj chcete zmazať túto sekciu?',

		'A Section with the handle %s already exists' => 
		'Sekcia s názvom %s už existuje',

		'A field with this handle already exists. All handle must be unique.' => 
		'Pole s touto cestou už existuje. Všetky cesty musia byť jedinečné.',

		'There is already a field of type %s. There can only be one per section.' => 
		'Pole typu %s už existuje. V každej sekcií môže byť iba jedno pole tohto typu.',

		'An unknown database occurred while attempting to create the section.' => 
		'Pri ukladaní sekcie sa vyskytla neznáma chyba v databáze.',

		'Options' => 
		'Možnosti',

		'Hide this section from the back-end menu' => 
		'Schovať túto sekciu v administratívnej časti',

		'Allow filtering of section entries' => 
		'Umožniť filtrovanie záznamov',

		'The section could not be saved due to conflicting changes' => 
		'Sekciu sa nepodarilo uložil pre konfliktné úpravy',

		'Login' => 
		'Prihlásiť sa',

		'An email containing a customised login link has been sent to %s. It will expire in 2 hours.' => 
		'Na e-mail %s bol odoslaný prihlasovací odkaz. Jeho platnosť vyprší do 2 hodín.',

		'Enter your email address or username to be sent further instructions for logging in.' => 
		'Zadajte Váš e-mail alebo prihlasovacie meno pre doručenie inštrukcií k obnove hesla.',

		'Email Address or Username' => 
		'E-mailová adresa, alebo prihlasovacie meno',

		'Unfortunately no account was found using this information.' => 
		'Nenašiel sa žiaden údajmi zodpovedajúci účet.',

		'This Symphony instance has not been set up for emailing, %s' => 
		'Táto inštalácia Symphony nemá nastavené zasielanie e-mailovových správ, %s',

		'Send Email' => 
		'Odoslať e-mail',

		'Cancel' => 
		'Zrušiť',

		'The login details provided are incorrect.' => 
		'Prihlasovacie údaje sú nesprávne.',

		'No username was entered.' => 
		'Nezadali ste prihlasovacie meno.',

		'Password' => 
		'Heslo',

		'No password was entered.' => 
		'Nezadali ste heslo.',

		'Retrieve password?' => 
		'Obnoviť heslo?',

		'New Symphony Account Password' => 
		'Heslo pre nový Symphony účet',

		'Hi %s,' => 
		'Dobrý deň %s,',

		'A new password has been requested for your account. Login using the following link, and change your password via the Authors area:' => 
		'Pre Váš účet bolo vyžiadané nové heslo. Prihláste sa pomocou nasledujúceho odkazu a heslo si zmeňte v sekcii Autori:',

		'It will expire in 2 hours. If you did not ask for a new password, please disregard this email.' => 
		'Platnosť odkazu vyprší do 2 hodín. Ak ste nepožiadali o nové heslo, prosím ignorujte túto správu.',

		'Best Regards,' => 
		'Úspešný deň,',

		'The Symphony Team' => 
		'Tím Symphony',

		'Filter Entries' => 
		'Filtrovať záznamy',

		'Clear filter' => 
		'Odstrániť filter',

		'No filters applied yet.' => 
		'Bez filtrovania.',

		'Type and hit enter to apply filter…' => 
		'Zadajte text a stlačte ENTER pre použitie filtra...',

		'Comparison mode' => 
		'Porovnanie',

		'This request exceeds the maximum allowed request size of %s specified by your host.' => 
		'Požiadavka prekročila povolenú veľkosť %s stanovenú serverom.',

		'The Symphony configuration file, %s, is not writable. The sort order cannot be modified.' => 
		'Konfiguračný súbor Symphony %s nemá práva na zápis. Zoradenie nemôže byť zmenené.',

		'Create a new entry' => 
		'Vytvoriť nový záznam',

		'Edit Section' => 
		'Upraviť sekciu',

		'Edit Section Configuration' => 
		'Upraviť nastavenie sekcie',

		'An error occurred while retrieving filtered entries. Showing all entries instead.' => 
		'Pri filtrovaní záznamov sa vyskytla chyba. Zobrazujem všetky záznamy.',

		'%d of %d entries (filtered)' => 
		'%d z %d záznamov (filtrované)',

		'%d entries' => 
		'%d záznamov',

		'Select Entry %d' => 
		'Vybrať záznam %d',

		'Are you sure you want to delete the selected entries?' => 
		'Naozaj chcete vymazať vybrané záznamy?',

		'Set %s' => 
		'Nastaviť %s',

		'First' => 
		'Prvá',

		'&larr; Previous' => 
		'&larr; Predchádzajúca',

		'Viewing %1$s - %2$s of %3$s entries' => 
		'Zobrazených %1$s - %2$s z celkovo %3$s záznamov',

		'Go to page …' => 
		'Prejsť na stranu ...',

		'Page %1$s of %2$s' => 
		'Strana %1$s z %2$s',

		'Next &rarr;' => 
		'Nasledujúca &rarr;',

		'Last' => 
		'Posledná',

		'Fields must be added to this section before an entry can be created.' => 
		'Sekcia musí mať zadefinované polia pred vytvorením záznamu.',

		'Add fields' => 
		'Pridať polia',

		'Create Entry' => 
		'Vytvoriť záznam',

		'Some errors were encountered while attempting to save.' => 
		'Pri ukladaní sa vyskytli chyby.',

		'Unknown Entry' => 
		'Neznámy záznam',

		'The Entry, %s, could not be found.' => 
		'Záznam %s sa nenašiel.',

		'Wrong section' => 
		'Nesprávna sekcia',

		'The Entry, %s, does not belong in section %s' => 
		'Záznam %s nepatrí do sekcie 5s',

		'Entry updated at %s.' => 
		'Záznam bol zaktualizovaný o %s.',

		'Entry created at %s.' => 
		'Záznam bol vytvorený o %s.',

		'View all Entries' => 
		'Zobraziť všetky záznamy',

		'Delete this entry' => 
		'Zmazať záznam',

		'Are you sure you want to delete this entry?' => 
		'Naozaj chcete zmazať tento záznam?',

		'Linked to' => 
		'Prepojené na',

		'Links in' => 
		'Spojenia od',

		'New' => 
		'Nový',

		'Show more entries' => 
		'Zobraziť viac záznamov',

		'No links in %s' => 
		'%s (0)',

		'Show Associations' => 
		'Zobraziť asociácie',

		'The entry could not be saved due to conflicting changes' => 
		'Záznam sa nemohol uložiť pre konfliktné úpravy',

		'Create a new author' => 
		'Vytvoriť nového autora',

		'Email Address' => 
		'E-mailová adresa',

		'Last Seen' => 
		'Naposledy prihlásený',

		'Language' => 
		'Jazyk',

		'Select Author %s' => 
		'Vybrať autora %s',

		'Email this author' => 
		'Poslať e-mail autorovi',

		'Unknown' => 
		'Neznámy',

		'System Default' => 
		'Predvolené systémom',

		'You are not authorised to access this page.' => 
		'Nemáte práva na prístup k tejto stránke.',

		'Access Denied' => 
		'Prístup zamietnutý',

		'Author updated at %s.' => 
		'Autor bol zaktualizovaný o %s.',

		'Author created at %s.' => 
		'Autor bol vytvorený o %s.',

		'View all Authors' => 
		'Zobraziť všetkých autorov',

		'The author profile you requested does not exist.' => 
		'Požadovaný profil autora neexistuje.',

		'Author not found' => 
		'Autor nenájdený',

		'You are not authorised to edit other authors.' => 
		'Nemáte práva na úpravu iných autorov.',

		'Login Details' => 
		'Prihlasovacie údaje',

		'Manager' => 
		'Manažér',

		'Developer' => 
		'Vývojár',

		'Leave password fields blank to keep the current password' => 
		'Pre zachovanie súčasného hesla nechajte polia prázdne',

		'Old Password' => 
		'Staré heslo',

		'New Password' => 
		'Nové heslo',

		'Confirm Password' => 
		'Potvrdiť heslo',

		'%s Allow remote login via' => 
		'%s Umožniť vzdialené prihlásenie pomocou',

		'Default Area' => 
		'Predvolená Sekcia',

		'Sections Index' => 
		'Zoznam sekcií',

		'Custom Preferences' => 
		'Vlastné predvoľby',

		'Confirmation' => 
		false,

		'Please confirm changes to this author with your password.' => 
		'Prosím potvrďte zmeny zadaním svojho hesla.',

		'Your Password' => 
		'Vaše heslo',

		'Create Author' => 
		'Vytvoriť autora',

		'Delete this author' => 
		'Zmazať autora',

		'Are you sure you want to delete this author?' => 
		'Naozaj chcete zmazať tohto autora?',

		'You are not authorised to create authors.' => 
		'Na vytváranie nových autorov Nemáte práva.',

		'The user type is invalid. You can only create Authors.' => 
		'Typ používateľa je neplatný. Autorov môžete iba vytvoriť.',

		'Passwords did not match' => 
		'Heslá sa nezhodujú',

		'There were some problems while attempting to save. Please check below for problem fields.' => 
		'Pri ukladaní sa vyskytli chyby. Prosím skontrolujte nižšie označené polia.',

		'You are not authorised to modify this author.' => 
		'Na úpravu používateľa nemáte práva.',

		'Please provide your own password to make changes to this author.' => 
		'Prosím zadajte Vaše vlastne heslo na potvrdenie zmien.',

		'Wrong password, please enter your own password to make changes to this author.' => 
		'Nesprávne heslo, prosím zadajte Vaše vlastne heslo na potvrdenie zmien',

		'Wrong password. Enter old password to change it.' => 
		'Nesprávne heslo. Zadajte staré heslo na jeho zmenu.',

		'Wrong password. Enter old one to change email address.' => 
		'Nesprávne heslo. Zadajte staré heslo na zmenu e-mailovej adresy.',

		'You are not allowed to delete this author.' => 
		'Na zmazanie tohto autora nemáte práva.',

		'You cannot remove yourself as you are the active Author.' => 
		'Nemôžete sa odstrániť, nakoľko ste aktívnym autorom.',

		'Extensions' => 
		'Rozšírenia',

		'Links' => 
		'Odkazy',

		'Select %s Extension' => 
		'Vybrať %s rozšírenie',

		'Status unavailable' => 
		'Stav nedostupný',

		'Not installed' => 
		'Nenainštalované',

		'Disabled' => 
		'Vypnuté',

		'Enabled' => 
		'Povolené',

		'Update available' => 
		'Dostupná aktualizácia',

		'requires Symphony %s' => 
		'vyžaduje Symphony %s',

		'GitHub' => 
		false,

		'Discuss' => 
		'Diskusia',

		'Homepage' => 
		'Webová stránka',

		'Wiki' => 
		false,

		'Issues' => 
		'Vývoj',

		'Disable' => 
		'Vypnúť',

		'Uninstall' => 
		'Odinštalovať',

		'Are you sure you want to uninstall the selected extensions?' => 
		'Naozaj chcete odinštalovať vybrané rozšírenia?',

		'Preferences' => 
		'Predvoľby',

		'The Symphony configuration file, %s, or folder is not writable. You will not be able to save changes to preferences.' => 
		'Konfiguračný súbor Symphony %s, alebo jeho priečinok, nemá práva na zápis. Vaše zmeny v predvoľbách nebude možné uložiť.',

		'Preferences saved.' => 
		'Predvoľby uložené.',

		'System Language' => 
		'Jazyk systému',

		'Authors can set up a differing language in their profiles.' => 
		'Autori si môžu nastaviť iný jazyk vo svojom profile.',

		'Default Email Settings' => 
		'Predvolené e-mail nastavenia',

		'Gateway' => 
		'Brána',

		'Default Cache Settings' => 
		'Predvolené nastavenia cache',

		'An update has been found in your installation to upgrade Symphony to %s.' => 
		'Našla sa aktualizácia systému Symphony na verziu %s.',

		'View update.' => 
		'Zobraziť aktualizáciu.',

		'Your Symphony installation is up to date, but the installer was still detected. For security reasons, it should be removed.' => 
		'Vaša Symphony inštalácia je aktuálna, ale inštalačný balík je stále jej súčasťou. Z bezpečnostných dôvodov by mal byť odstránený.',

		'Remove installer?' => 
		'Odstrániť inštalačný balík?',

		'An update script has been found in your installation.' => 
		'V inštalácii Symphony sa našiel aktualizačný balík.',

		'An extension requires updating.' => 
		'Rozšírenie vyžaduje aktualizáciu.',

		'View extensions' => 
		'Zobraziť rozšírenia.',

		'Cannot request a page callback without first specifying the page.' => 
		false,

		'The page you requested does not exist.' => 
		'Požadovaná stránka neexistuje.',

		'Page Not Found' => 
		'Stránka nebola nájdená',

		'Invalid timezone %s' => 
		'Neplatný formát časovej zóny %s',

		'no leading zeros' => 
		'bez vodiacich núl',

		'The page you requested, %s, does not exist.' => 
		'Požadovaná stránka %s neexistuje.',

		'This error occurred whilst attempting to resolve the 404 page for the original request.' => 
		'Táto chyba nastala pri pokuse rozpoznať 404 stránku pre pôvodnú požiadavku.',

		'The method `%s` is deprecated.' => 
		'Metóda `%s` je zastaraná.',

		'Please use `%s` instead.' => 
		'Prosím použite `%s`.',

		'It will be removed in Symphony %s.' => 
		'Bude to odstránené v Symphony %s.',

		'No suitable engine object found' => 
		false,

		'Error creating Symphony extension manager.' => 
		false,

		'Symphony Database Error' => 
		'Chyba Symphony databázy',

		'There was a problem whilst attempting to establish a database connection. Please check all connection information is correct.' => 
		'Pri pripájaní k databáze sa vyskytol problém. Prosím skontrolujte správnosť všetkých nastavení pripojenia.',

		'There was a problem rendering this page. Please check the activity log for more details.' => 
		'Pri generovaní stránky nastala chyba. Prosím skontrolujte log záznam pre viac informácií.',

		'A message must be supplied unless the alert is of type Alert::ERROR' => 
		false,

		'Your <code>%s</code> file does not define a date format' => 
		false,

		'Log out' => 
		'Odhlásiť sa',

		'yourself' => 
		'Vám samým',

		'an unknown user' => 
		'neznámy používateľ',

		'made by %s at %s.' => 
		'vykonané používateľom %s o %s.',

		'Replace changes?' => 
		'Nahradiť zmeny?',

		'Overwrite' => 
		'Prepísať',

		'View changes.' => 
		'Zobraziť zmeny.',

		'View the updated entry' => 
		'Zobraziť zaktualizovaný záznam',

		'First name is required' => 
		'Meno je povinné',

		'Last name is required' => 
		'Priezvisko je povinné',

		'E-mail address is required' => 
		'E-mailová adresa je povinná',

		'E-mail address entered is invalid' => 
		'Formát e-mailovej adresy je neplatný',

		'E-mail address is already taken' => 
		'Zadaná e-mailová adresa sa už používa',

		'Username is required' => 
		'Prihlasovacie meno je povinné',

		'Username is already taken' => 
		'Prihlasovacie meno je už obsadené',

		'Password is required' => 
		'Heslo je povinné',

		'No records found.' => 
		'Žiadne záznamy.',

		'Data source not executed, forbidden parameter was found.' => 
		'Zdroj údajov nebol vykonaný kvôli prítomnosti zakázaného parametra.',

		'Could not find Data Source %s.' => 
		'Zdroj údajov %s nebol nájdený.',

		'If it was provided by an Extension, ensure that it is installed, and enabled.' => 
		false,

		'Edit' => 
		'Upraviť',

		'Utility' => 
		'Nástroj',

		'Email Gateway Error' => 
		false,

		'Sender Email Address can not contain carriage return or newlines.' => 
		'E-mailová adresa odosielateľa nemôže obsahovať znaky zalomenia riadka.',

		'Sender Name can not contain carriage return or newlines.' => 
		'Meno odosielateľa nemôže obsahovať znaky zalomenia riadka.',

		'Recipient address can not contain carriage return or newlines.' => 
		'Adresa prijímateľa nemôže obsahovať znaky zalomenia riadka.',

		'%s accepts boolean values only.' => 
		'%s akceptuje iba boolean hodnoty.',

		'%1$s is not a supported encoding type. Please use %2$s or %3$s. You can also use %4$s for no encoding.' => 
		'%1$s nie je podporované kódovanie. Prosím použite %2$s alebo %3$s. Takisto môžete použiť %4$s pre variant bez kódovania.',

		'Reply-To Email Address can not contain carriage return or newlines.' => 
		'Reply-To e-mailová adresa nemôže obsahovať znaky zalomenia riadka.',

		'Reply-To Name can not contain carriage return or newlines.' => 
		'Reply-To meno príjemcu nemôže obsahovať znaky zalomenia riadka.',

		'%s accepts strings only; arrays are not allowed.' => 
		'%s akceptuje iba textové reťazce; polia nie sú povolené.',

		'Email subject cannot be empty.' => 
		'Predmet e-mailovej správy nemôže byť prázdny.',

		'Sender email address cannot be empty.' => 
		'E-mailová adresa odosielateľa nemôže byť prázdna.',

		'Sender email address must be a valid email address.' => 
		'E-mailová adresa odosielateľa musí mať platný formát.',

		'Recipient email address cannot be empty.' => 
		'E-mailová adresa prijímateľa nemôže byť prázdna.',

		'The email address ‘%s’ is invalid.' => 
		'E-mailová adresa ‘%s’ má neplatný formát.',

		'No attachments or body text was set. Can not send empty email.' => 
		'Správa neobsahuje text alebo prílohy. Prázdny e-mail nie je možné odoslať.',

		'The content of the file `%s` could not be loaded.' => 
		'Obsah súbora `%s` sa neporadilo načítať.',

		'The %1$s gateway does not support the use of %2$s' => 
		'Brána %1$s nepodporuje použitie %2$s',

		'This gateway can not be found. Can not save as default.' => 
		'Táto brána sa nenašla. Nie je možné ju uložiť ako predvolenú.',

		'Could not find Email Gateway %s.' => 
		'E-mailovú bránu %s sa nepodarilo sa nájsť.',

		'Entry limit specified was not a valid type. String or Integer expected.' => 
		'Hodnota stránkovania nemá platný formát. Očakáva sa reťazec textu alebo číslo.',

		'This event has been customised and cannot be viewed from Symphony.' => 
		'Táto udalosť bola prispôsobená a nemôže byť zobrazená cez Symphony.',

		'Could not find Event %s.' => 
		'Udalosť %s sa nepodarilo nájsť.',

		'The field ‘%s’, provided by the Extension ‘%s’, is currently in use.' => 
		'Pole ‘%s’, poskytované rozšírením ‘%s’, sa momentálne používa.',

		'Please remove it from your sections prior to uninstalling or disabling.' => 
		'Prosím odstráňte ho zo sekcií pred odinštalovaním alebo vypnutím rozšírenia.',

		'The Data Source ‘%s’, provided by the Extension ‘%s’, is currently in use.' => 
		'Zdroj údajov ‘%s’, poskytovaný rozšírením ‘%s’, sa momentálne používa.',

		'Please remove it from your pages prior to uninstalling or disabling.' => 
		'Prosím odstráňte ho zo stránok pred odinštalovaním alebo vypnutím rozšírenia.',

		'The Event ‘%s’, provided by the Extension ‘%s’, is currently in use.' => 
		'Udalosť ‘%s’, poskytovaná rozšírením ‘%s’, sa momentálne používa.',

		'The Text Formatter ‘%s’, provided by the Extension ‘%s’, is currently in use.' => 
		'Textový editor ‘%s’, poskytovaný rozšírením ‘%s’, sa momentálne používa.',

		'Please remove it from your fields prior to uninstalling or disabling.' => 
		'Prosím odstráňte ho z polí pred samotným odinštalovaním alebo vypnutím rozšírenia.',

		'Missing default namespace definition.' => 
		'Chýba definícia predvolenej znakovej sady (namespace).',

		'The %1$s file for the %2$s extension is not valid XML: %3$s' => 
		'Súbor %1$s pre rozšírenie %2$s nemá platný XML formát: %3$s',

		'Could not find extension %s at location %s.' => 
		'Rozšírenie %s sa nepodarilo nájsť na umiestnení %s.',

		'Symphony Extension Missing Error' => 
		'Chyba: Chýbajúce Symphony rozšírenie',

		'New Field' => 
		'Nové Pole',

		'Label' => 
		'Názov',

		'Placement' => 
		'Umiestnenie',

		'Main content' => 
		'Hlavná obsahová časť',

		'Sidebar' => 
		'Bočný stĺpec',

		'Formatting' => 
		'Formátovanie',

		'Validation Rule' => 
		'Kontrola správnosti',

		'Association Interface' => 
		'Rozhranie prepojení',

		'Association Editor' => 
		'Editor prepojení',

		'Make this a required field' => 
		'Označiť pole ako povinné',

		'Display in entries table' => 
		'Zobraziť v prehľade záznamov',

		'Display associations in entries table' => 
		'Zobraziť prepojenie v prehľade záznamov',

		'%s is a reserved name used by the system and is not allowed for a field handle. Try using %s instead.' => 
		'%s je vyhradený názov v systéme a nie je možné ho použiť ako názov cesty poľa. Skúste použiť %s.',

		'Invalid element name. Must be valid %s.' => 
		'Neplatný názov značky. Musí byť platný %s.',

		'A field with that element name already exists. Please choose another.' => 
		'Pole s použitým názvom značky už existuje. Prosím zvoľte iný názov.',

		'Validation rule is not a valid regular expression' => 
		'Kontrola správnosti nemá platný regulárny výraz',

		'‘%s’ is a required field.' => 
		'‘%s’ je povinné pole.',

		'Find values that are an exact match for the given string.' => 
		'Najdi hodnoty presne zhodné s daným reťazcom.',

		'Find entries with a non-empty value.' => 
		'Nájdi záznamy s nie prázdnou hodnotou.',

		'Find entries with an empty value.' => 
		'Nájdi záznamy s prázdnou hodnotou.',

		'Find values that match the given <a href="%s">MySQL regular expressions</a>.' => 
		'Nájdi hodnoty zhodné s <a href="%s">regulárnym výrazom MySQL</a>.',

		'Find values that do not match the given <a href="%s">MySQL regular expressions</a>.' => 
		'Nájdi hodnoty nie zhodné s <a href="%s">regulárnym výrazom MySQL</a>.',

		'Data source output grouping is not supported by the %s field' => 
		'Zlúčenie výstupu zdroja údajov poľom %s nie je podporované',

		'The field `%1$s` does not create settings records in the `tbl_fields_%1$s`.' => 
		false,

		'Please implement the commit function in class `%s`.' => 
		false,

		'The compatibility check will will be removed in Symphony %s.' => 
		false,

		'Settings for field %s could not be found in table tbl_fields_%s.' => 
		'Nastavenia poľa %s neboli nájdené v tabuľke tbl_fields_%s.',

		'Could not find Field %1$s at %2$s.' => 
		'Nie je možné nájsť pole %1$s v %2$s.',

		'XSLT Processing Error' => 
		'Chyba XSLT spracovania',

		'Please login to view this page.' => 
		'Prosím príhláste sa na zobrazenie tejto stránky.',

		'Take me to the login page' => 
		'Prejsť na prihlasovaciu stránku',

		'Forbidden' => 
		'Zamietnuté',

		'Unable to create path - %s' => 
		'Nie je možné vytvoriť cestu - %s',

		'Unable to remove - %s' => 
		'Nie je možné odstrániť - %s',

		'Denied by permission' => 
		'Odmietnuté právami',

		'Unable to remove file - %s' => 
		'Nie je možné odstrániť súbor - %s',

		'Enforced type `%1$s` for argument `$%2$s` does not match any known variable types.' => 
		'Vynútený typ `%1$s` pre hodnotu `$%2$s` nezodpovedá žiadnému známenu typu premennej.',

		'Argument `$%1$s` is not of type `%2$s`, given `%3$s`.' => 
		'Hodnota `$%1$s` nezodpovedá typu `%2$s`. Dodaný typ `%3$s`.',

		'No errors.' => 
		'Žiadne chyby.',

		'Maximum stack depth exceeded.' => 
		'Maximálna hĺbka zásobníka prekročená.',

		'Underflow or the modes mismatch.' => 
		false,

		'Unexpected control character found.' => 
		'Nájdený neočakávaný kontrolný znak.',

		'Syntax error, malformed JSON.' => 
		'Neplatný JSON zápis.',

		'Malformed UTF-8 characters, possibly incorrectly encoded.' => 
		'Nesprávne formátované UTF-8 znaky, pravdepodobne pre nesprávne zakódovanie.',

		'Unknown JSON error' => 
		'Neznáma JSON chyba',

		'JSON not formatted correctly' => 
		'JSON má nesprávny formát',

		'The selected language, %s, could not be found. Using default English dictionary instead.' => 
		'Vybraný jazyk %s sa neporadilo nájsť. Používa sa predvolený anglický slovník.',

		'MySQL Error (%1$s): %2$s in query: %3$s' => 
		'MySQL chyba (%1$s): %2$s v požiadavke: %3$s',

		'Unable to find a Manager class for this resource.' => 
		false,

		'Event' => 
		'Udalosť',

		'DataSource' => 
		'Zdroj údajov',

		'read only' => 
		'iba na čítanie',

		'Select ' => 
		'Vybrať ',

		'Attach to Page' => 
		'Pripojiť ku stránke',

		'Detach from Page' => 
		'Odobrať zo stránky',

		'All' => 
		'Všetky',

		'Please check permissions on %s' => 
		'Prosím overte prístupové práva pre %s',

		'Unsupported SSL type' => 
		'Nepodporovaný typ SSL',

		'No connection has been established to %s' => 
		'na %s sa nevytvorilo spojenie',

		'Header fields can only contain strings' => 
		'Hlavičky môžu obsahovať iba textové reťazce',

		'Can not call HELO on existing session' => 
		'Nie je možné zavolať HELO na existujúce sedenie',

		'Must call EHLO (or HELO) before calling MAIL' => 
		'Pred požiadavkou MAIL sa musí zavolať EHLO alebo HELO',

		'Only one call to MAIL may be made at a time.' => 
		'Súčasne môže existovať iba jedna MAIL požiadavka.',

		'Must call MAIL before calling RCPT' => 
		'Pred požiadavkou RCPT sa musí zavolať MAIL',

		'Must call RCPT before calling DATA' => 
		'Pred požiadavkou DATA sa musí zavolať RCPT',

		'Must call EHLO (or HELO) before calling AUTH' => 
		"Pred požiadavkou AUTH sa musí zavolať EHLO alebo HELO",

		'Can not call AUTH again.' => 
		'AUTH sa nedá znova zavolať.',

		'Unable to connect via TLS' => 
		'Pripojenie pomocou TLS zlyhalo',

		'Could not send request: %s' => 
		'Nebolo možné odoslať požiadavku: %s',

		'%s has timed out' => 
		'Časový limit %s vypršal',

		'Could not read from %s' => 
		'Neporadilo sa čítať z %s',

		'Unable to open socket. Unknown error' => 
		'Nie je možné otvoriť socket. Neznáma chyba.',

		'Unable to open socket. %s' => 
		'Nie je možné otvoriť socket. %s',

		'Unable to set timeout.' => 
		'Nie je možné nastaviť časový limit.',

		'Could not find Text Formatter %s.' => 
		'Textový editor %s sa nepodarilo nájsť.',

		'%s ' => 
		false,

		'Actions' => 
		'Akcie',

		'Apply' => 
		'Použiť',

		'Can not add the element itself as one of its child' => 
		'Nie je možné pridať samotný element ako jeden z jeho potomkov',

		'No suitable XSLT processor was found.' => 
		'Nenašiel sa žiaden vhodný XSLT procesor.',

		'Request was rejected for having an invalid cross-site request forgery token.' => 
		false,

		'Please go back and try again.' => 
		'Prosím vráťte sa späť a skúste to znova.',

		'The use of `%s` is strongly discouraged due to severe security flaws.' => 
		false,

		'Please install the Remote Datasource extension and use `%s` instead.' => 
		false,

		'Data returned is invalid.' => 
		'Vrátené údaje majú neplatný formát.',

		'The %s class failed to acquire a lock, check that %s exists and is writable.' => 
		'Trieda %s nedokázala získať zamknutie, overte či %s existuje a či je zapisovateľná.',

		'Transformed XML is invalid.' => 
		'Výsledné XML má neplatný formát.',

		'The `%s` data source field is deprecated.' => 
		false,

		'The `%s` data source output parameter is deprecated.' => 
		false,

		'Error creating field object with id %1$d, for filtering in data source %2$s. Check this field exists.' => 
		'Chyba pri vytváraní objektu poľa s id %1$d pre filtrovanie zdroja údajov %2$s. Skontrolujte či dané pole existuje.',

		'The `%s` data source filter is deprecated.' => 
		'Filter `%s` zdroja údajov je zastaraný.',

		'The Section, %s, associated with the Data source, %s, could not be found.' => 
		'Sekciu %s, prepojenú so zdrojom údajov %s, sa neporadilo nájsť.',

		'Data source not executed, required parameter is missing.' => 
		'Zdroj údajov nebol vykonaný, chýba požadovaný parameter.',

		'The `%s` data source sort is deprecated.' => 
		'`%s` zoradenie zdroja údajov je zastarané.',

		'Sendmail (default)' => 
		'Sendmail (predvolené)',

		'Email: Sendmail' => 
		'E-mail: Sendmail',

		'From Name' => 
		'Meno odosielateľa',

		'From Email Address' => 
		'E-mailová adresa odosielateľa',

		'SMTP' => 
		false,

		'The Envelope From Address can not contain carriage return or newlines.' => 
		'Údaj ’Od (adresáta)’ nemôže obsahovať znaky zalomenia riadka.',

		'Email: SMTP' => 
		'E-mail: SMTP',

		'HELO Hostname' => 
		false,

		'A fully qualified domain name (FQDN) of your server, e.g. "www.example.com". If left empty, Symphony will attempt to find an IP address for the EHLO/HELO greeting.' => 
		'Plne kvalifikovaný názov domény (FQDN) Vášho servera, napríklad "www.example.com". Ak ponecháte prázdne, Symphony sa pokúsi nájsť IP adresu pre EHLO/HELO príkaz.',

		'Host' => 
		'Server',

		'Port' => 
		'Číslo portu',

		'No encryption' => 
		'Bez šifrovania',

		'SSL encryption' => 
		'SSL šifrovanie',

		'TLS encryption' => 
		'TLS šifrovanie',

		'For a secure connection, SSL and TLS are supported. Please check the manual of your email provider for more details.' => 
		'Pre zabezpečené spojenie je k dispozícii SSL a TLS. Prosím pozrite si návod od Vášho poskytovateľa e-mailových služieb pre bližšie informácie.',

		'%s Requires authentication' => 
		'%s Vyžaduje sa prihlásenie',

		'Some SMTP connections require authentication. If that is the case, enter the username/password combination below.' => 
		'Niektoré SMTP spojenia vyžadujú prihlásenie. Ak je vyžadované, zadajte prihlasovacie meno a heslo do nasledujúcich polí.',

		'Unknown errors where encountered when saving.' => 
		'Pri ukladaní sa vyskytli neznáme chyby.',

		'Entry edited successfully.' => 
		'Záznam úspešne upravený.',

		'Entry created successfully.' => 
		'Záznam úspešne vytvorený.',

		'[Symphony] A new entry was created on %s' => 
		'[Symphony] Nový záznam bol vytvorený o %s',

		'Author types' => 
		'Typ autorov',

		'Allow selection of multiple authors' => 
		'Umožniť výber viacerých autorov',

		'Select current user by default' => 
		'Predvolene vybrať aktuálneho používateľa',

		'Checkbox' => 
		'Zaškrtávacie pole',

		'Yes' => 
		'Áno',

		'No' => 
		'Nie',

		'%s Checked by default' => 
		'%s Predvolene zaškrtnuté',

		'Date' => 
		'Dátum',

		'Find entries where any value is selected.' => 
		'Nájdi záznamy s akoukoľvek vybranou hodnotou.',

		'Find entries where no value is selected.' => 
		'Nájdi záznamy bez vybranej hodnoty.',

		'Default date' => 
		'Predvolený dátum',

		'optional, accepts absolute or relative dates' => 
		'voliteľné, akceptuje abusolútne alebo relatívne dátumy',

		'Display time' => 
		'Ukázať čas',

		'Show calendar' => 
		'Zobraziť kalendár',

		'The date specified in ‘%s’ is invalid.' => 
		'Dátum uvedený v ‘%s’ má neplatný formát.',

		'Text Input' => 
		'Textové pole',

		'‘%s’ contains invalid data. Please check the contents.' => 
		'‘%s’ obsahuje neplatné údaje. Prosím skontroluje obsah.',

		'Select Box' => 
		'Výberové pole',

		'Static Values' => 
		'Statické hodnoty',

		'Dynamic Values' => 
		'Dynamické hodnoty',

		'Allow selection of multiple options' => 
		'Umožniť výber viacerých hodnôt',

		'Sort all options alphabetically' => 
		'Voľby zoradiť abecedne',

		'At least one source must be specified, dynamic or static.' => 
		'Aspoň jeden zdroj musí byť určený, dynamický alebo statický.',

		'Tag List' => 
		'Zoznam značiek',

		'Suggestion List' => 
		'Zoznam návrhov',

		'No Suggestions' => 
		'Žiadne návrhy',

		'Existing Values' => 
		'Existujúce hodnoty',

		'\'%s\' contains invalid data. Please check the contents.' => 
		'\'%s\' obsahuje neplatné údaje. Prosím skontroluje obsah.',

		'Find entries where no value is selected or it is not equal to this value.' => 
		'Nájdi záznamy bez žiadnej vybranej hodnoty alebo nie rovné tejto hodnote.',

		'Find entries where the value is not equal to this value.' => 
		'Nájdi záznamy nie rovné tejto hodnote.',

		'Find entries where the value matches the regex.' => 
		'Nájdi záznamy vyhovujúce regulárnemu výrazu.',

		'Find entries where the value does not match the regex.' => 
		'Nájdi záznamy nie vyhovujúce regulárnemu výrazu.',

		'Textarea' => 
		'Textová oblasť',

		'Number of default rows' => 
		'Počet riadkov',

		'Text Formatter' => 
		'Textový editor',

		'‘%s’ contains invalid XML.' => 
		'‘%s’ obsahuje neplatné XML.',

		'File Upload' => 
		'Nahratie súbora',

		'Find files that are an exact match for the given string.' => 
		'Nájdi súbory presne zhodné s daným textovým reťazcom.',

		'Find entries where a file has been saved.' => 
		'Nájdi záznamy s nahraným súborom.',

		'Find entries where no file has been saved.' => 
		'Nájdi záznamy bez žiadneho nahraného súbora.',

		'Find files that match the given <a href="%s">MySQL regular expressions</a>.' => 
		'Nájdi súbory zhodné s <a href="%s">regulárnym výrazom MySQL</a>.',

		'Find files that do not match the given <a href="%s">MySQL regular expressions</a>.' => 
		'Nájdi súbory nie zhodné s <a href="%s">regulárnym výrazom MySQL</a>.',

		'Find files that match the given mimetype.' => 
		'Nájdi súbory zhodné s daným typom súbora (mimetype).',

		'Find files that match the given size.' => 
		'Nájdi súbory zhodné s uvedenou veľkosťou.',

		'Destination Directory' => 
		'Cieľový priečinok',

		'The destination directory, %s, does not exist.' => 
		'Cieľový priečinok %s neexistuje.',

		'The destination directory is not writable.' => 
		'Cieľový priečinok nemá povolenia na zápis.',

		'Destination folder is not writable.' => 
		'Cieľový priečinok nemá povolenia na zápis.',

		'The file uploaded is no longer available. Please check that it exists, and is readable.' => 
		'Nahraný súbor nie je dostupný. Prosím skontrolujte či existuje a či má povolenie na čítanie.',

		'File chosen in ‘%s’ does not match allowable file types for that field.' => 
		'Vybraný súbor v ‘%s’ nevyhovuje povoleným typom súborov pre dané pole.',

		'File chosen in ‘%s’ is blacklisted for that field.' => 
		'Vybraný súbor v ‘%s’ je blokovaný (blacklist) pre dané pole.',

		'File chosen in ‘%1$s’ exceeds the maximum allowed upload size of %2$s specified by your host.' => 
		'Vybraný súbor v ‘%1$s’ prekračuje maximálnu povolenú veľkosť %2$s, stanovenú vašim serverom.',

		'File chosen in ‘%1$s’ exceeds the maximum allowed upload size of %2$s, specified by Symphony.' => 
		'Vybraný súbor v ‘%1$s’ prekračuje maximálnu povolenú veľkosť %2$s, nastavenú v Symphony.',

		'File chosen in ‘%s’ was only partially uploaded due to an error.' => 
		'Vybraný súbor v ‘%s’ bol nahraný pre chybu len čiastočne.',

		'Uploading ‘%s’ failed. Could not write temporary file to disk.' => 
		'Nahratie ‘%s’ zlyhalo. Nebolo možné zapísať dočasný súbor na disk.',

		'Uploading ‘%s’ failed. File upload stopped by extension.' => 
		'Nahratie ‘%s’ zlyhalo. Nahrávanie súboru bolo zastavené rozšírením.',

		'There was an error while trying to upload the file %1$s to the target directory %2$s.' => 
		'Pri nahrávaní súbora %1$s do priečinka %2$s sa vyskytla chyba.',

		'Database Error' => 
		'Chyba databázy',

		'Uninstall extension' => 
		'Odinštalovať rozšírenie',

		'Uninstall this extension' => 
		'Odinštalovať toto rozšírenie',

		'Sorry, but Symphony was unable to rename the folder. You can try renaming %s to %s yourself, or you can uninstall the extension to continue.' => 
		'Symphony sa nepodarilo priečinok premenovať. Pre pokračovanie môžete skúsiť premenovať %s na %s ručne, alebo rozšírenie odinštalujte pre pokračovanie.',

		'Often the cause of this error is a misnamed extension folder. You can try renaming %s to %s, or you can uninstall the extension to continue.' => 
		'Častou príčinou tejto chyby je zle pomenovaný priečinok rozšírenia. Pre pokračovanie môžete skúsiť premenovať %s na %s ručne, alebo rozšírenie odinštalujte pre pokračovanie.',

		'Rename folder' => 
		'Premenovať priečinok',

		'You can try uninstalling the extension to continue, or you might want to ask on the forums' => 
		'Pre pokračovanie môžete rozšírenie skúsiť odinštalovať, alebo sa informujte na diskusných fórach',

		'This page could not be rendered due to the following XSLT processing errors:' => 
		'Stránka nemohla byť vygenerovaná kvôli nasledujúcim XSLT chybám:',

		'General' => 
		'Všeobecne',

		'Show debug view' => 
		'Zobraziť ladiaci mód',

		'Debug' => 
		'Ladenie',

		'Show debug view for %s' => 
		'Zobraziť ladiaci mód pre %s',

		'Show line %d in debug view' => 
		'Zobraziť riadok %d v ladiacom móde',

		'Blueprints' => 
		'Plány',

		'yesterday' => 
		'včera',

		'today' => 
		'dnes',

		'tomorrow' => 
		'zajtra',

		'now' => 
		'teraz',

		'Sunday' => 
		'Nedela',

		'Monday' => 
		'Pondelok',

		'Tuesday' => 
		'Utorok',

		'Wednesday' => 
		'Streda',

		'Thursday' => 
		'Štvrtok',

		'Friday' => 
		'Piatok',

		'Saturday' => 
		'Sobota',

		'Sun' => 
		'Ne',

		'Mon' => 
		'Po',

		'Tue' => 
		'Ut',

		'Wed' => 
		'Str',

		'Thu' => 
		'Štv',

		'Fri' => 
		'Pia',

		'Sat' => 
		'So',

		'January' => 
		'Január',

		'February' => 
		'Február',

		'March' => 
		'Marec',

		'April' => 
		'Apríl',

		'May' => 
		'Máj',

		'June' => 
		'Jún',

		'July' => 
		'Júl',

		'August' => 
		'August',

		'September' => 
		'September',

		'October' => 
		'Október',

		'November' => 
		'November',

		'December' => 
		'December',

		'Jan' => 
		false,

		'Feb' => 
		false,

		'Mar' => 
		false,

		'Apr' => 
		false,

		'Jun' => 
		'Jún',

		'Jul' => 
		'Júl',

		'Aug' => 
		false,

		'Sep' => 
		false,

		'Oct' => 
		'Okt',

		'Nov' => 
		false,

		'Dec' => 
		false,

		'sec' => 
		'sek',

		'second' => 
		'sekunda',

		'min' => 
		false,

		'minute' => 
		'minúta',

		'hour' => 
		'hodina',

		'day' => 
		'deň',

		'fortnight' => 
		'dva týždne',

		'forthnight' => 
		'dva týždne',

		'month' => 
		'mesiac',

		'year' => 
		'rok',

		'secs' => 
		'sek.',

		'seconds' => 
		'sekúnd',

		'mins' => 
		'min.',

		'minutes' => 
		'minút',

		'hours' => 
		'hodín',

		'days' => 
		'dní',

		'fortnights' => 
		'dvoch týždňov',

		'forthnights' => 
		'dvoch týždňov',

		'months' => 
		'mesiacov',

		'years' => 
		'rokov',

		'weekday' => 
		'pracovný deň',

		'weekdays' => 
		'pracovné dni',

		'week' => 
		'týždeň',

		'weeks' => 
		'týždne',

		'first' => 
		'prvý',

		'third' => 
		'tretí',

		'fourth' => 
		'štvrtý',

		'fifth' => 
		'piaty',

		'sixth' => 
		'šiesty',

		'seventh' => 
		'siedmy',

		'eighth' => 
		'ôsmy',

		'ninth' => 
		'deviaty',

		'tenth' => 
		'desiaty',

		'eleventh' => 
		'jedenásty',

		'twelfth' => 
		'dvanásty',

		'last' => 
		'posledný',

		'previous' => 
		'predchádzajúce',

		'this' => 
		'tento',

		/* Namespace */

		'/blueprints/datasources' => array(

			'Create another?' => 
			'Vytvoriť ďalší?',

		),

		'/publish' => array(

			'Create another?' => 
			'Vytvoriť ďalší?',

		),

		'/system/authors' => array(

			'Create another?' => 
			'Vytvoriť ďalšieho?',

		),

	);

	/**
	 * Transliterations
	 */
	$straight = array(

		// Uppercase letters

	 	'À' => 'A', 	'Á' => 'A', 	'Â' => 'A', 	'Ã' => 'A', 	'Ä' => 'A',
	 	'Å' => 'A', 	'Ā' => 'A', 	'Ą' => 'A', 	'Ă' => 'A', 	'Æ' => 'E',
	 	'Ç' => 'C', 	'Ć' => 'C', 	'Č' => 'C', 	'Ĉ' => 'C', 	'Ċ' => 'C',
	 	'Ď' => 'D', 	'Đ' => 'D', 	'Ð' => 'D', 	'È' => 'E', 	'É' => 'E',
	 	'Ê' => 'E', 	'Ë' => 'E', 	'Ē' => 'E', 	'Ę' => 'E', 	'Ě' => 'E',
	 	'Ĕ' => 'E', 	'Ė' => 'E', 	'Ĝ' => 'G', 	'Ğ' => 'G', 	'Ġ' => 'G',
	 	'Ģ' => 'G', 	'Ĥ' => 'H', 	'Ħ' => 'H', 	'Ì' => 'I', 	'Í' => 'I',
	 	'Î' => 'I', 	'Ï' => 'I', 	'Ī' => 'I', 	'Ĩ' => 'I', 	'Ĭ' => 'I',
	 	'Į' => 'I', 	'İ' => 'I', 	'Ĳ' => 'Ij', 	'Ĵ' => 'J', 	'Ķ' => 'K',
	 	'Ł' => 'L', 	'Ľ' => 'L', 	'Ĺ' => 'L', 	'Ļ' => 'L', 	'Ŀ' => 'L',
	 	'Ñ' => 'N', 	'Ń' => 'N', 	'Ň' => 'N', 	'Ņ' => 'N', 	'Ŋ' => 'N',
	 	'Ò' => 'O', 	'Ó' => 'O', 	'Ô' => 'O', 	'Õ' => 'O', 	'Ö' => 'O',
	 	'Ø' => 'O', 	'Ō' => 'O', 	'Ő' => 'O', 	'Ŏ' => 'O', 	'Œ' => 'O',
	 	'Ŕ' => 'R', 	'Ř' => 'R', 	'Ŗ' => 'R', 	'Ś' => 'S', 	'Š' => 'S',
	 	'Ş' => 'S', 	'Ŝ' => 'S', 	'Ș' => 'S', 	'Ť' => 'T', 	'Ţ' => 'T',
	 	'Ŧ' => 'T', 	'Ț' => 'T', 	'Ù' => 'U', 	'Ú' => 'U', 	'Û' => 'U',
	 	'Ü' => 'U', 	'Ū' => 'U', 	'Ů' => 'U', 	'Ű' => 'U', 	'Ŭ' => 'U',
	 	'Ũ' => 'U', 	'Ų' => 'U', 	'Ŵ' => 'W', 	'Ý' => 'Y', 	'Ŷ' => 'Y',
	 	'Ÿ' => 'Y', 	'Y' => 'Y', 	'Ź' => 'Z', 	'Ž' => 'Z', 	'Ż' => 'Z',
	 	'Þ' => 'T',

		// Lowercase letters

	 	'à' => 'a', 	'á' => 'a', 	'â' => 'a', 	'ã' => 'a', 	'ä' => 'a',
	 	'å' => 'a', 	'ā' => 'a', 	'ą' => 'a', 	'ă' => 'a', 	'æ' => 'e',
	 	'ç' => 'c', 	'ć' => 'c', 	'č' => 'c', 	'ĉ' => 'c', 	'ċ' => 'c',
	 	'ď' => 'd', 	'đ' => 'd', 	'ð' => 'd', 	'è' => 'e', 	'é' => 'e',
	 	'ê' => 'e', 	'ë' => 'e', 	'ē' => 'e', 	'ę' => 'e', 	'ě' => 'e',
	 	'ĕ' => 'e', 	'ė' => 'e', 	'ĝ' => 'g', 	'ğ' => 'g', 	'ġ' => 'g',
	 	'ģ' => 'g', 	'ĥ' => 'h', 	'ħ' => 'h', 	'ì' => 'i', 	'í' => 'i',
	 	'î' => 'i', 	'ï' => 'i', 	'ī' => 'i', 	'ĩ' => 'i', 	'ĭ' => 'i',
	 	'į' => 'i', 	'ı' => 'i', 	'ĳ' => 'ij', 	'ĵ' => 'j', 	'ķ' => 'k',
	 	'ł' => 'l', 	'ľ' => 'l', 	'ĺ' => 'l', 	'ļ' => 'l', 	'ŀ' => 'l',
	 	'ñ' => 'n', 	'ń' => 'n', 	'ň' => 'n', 	'ņ' => 'n', 	'ŋ' => 'n',
	 	'ò' => 'o', 	'ó' => 'o', 	'ô' => 'o', 	'õ' => 'o', 	'ö' => 'o',
	 	'ø' => 'o', 	'ō' => 'o', 	'ő' => 'o', 	'ŏ' => 'o', 	'œ' => 'o',
	 	'ŕ' => 'r', 	'ř' => 'r', 	'ŗ' => 'r', 	'ś' => 's', 	'š' => 's',
	 	'ş' => 's', 	'ŝ' => 's', 	'ș' => 's', 	'ť' => 't', 	'ţ' => 't',
	 	'ŧ' => 't', 	'ț' => 't', 	'ù' => 'u', 	'ú' => 'u', 	'û' => 'u',
	 	'ü' => 'u', 	'ū' => 'u', 	'ů' => 'u', 	'ű' => 'u', 	'ŭ' => 'u',
	 	'ũ' => 'u', 	'ų' => 'u', 	'ŵ' => 'w', 	'ý' => 'y', 	'ŷ' => 'y',
	 	'ÿ' => 'y', 	'y' => 'y', 	'ź' => 'z', 	'ž' => 'z', 	'ż' => 'z',
	 	'þ' => 't', 	'ß' => 'ss', 	'ſ' => 'ss', 	'ƒ' => 'f', 	'ĸ' => 'k',
	 	'ŉ' => 'n',

		// Symbolic
		
	 	'(' => null, 	')' => null, 	',' => null,
	 	'–' => '-', 	'－' => '-', 	'„' => '"',
	 	'“' => '"', 	'”' => '"', 	'—' => '-',
	 	'¿' => null, 	'‽' => null, 	'¡' => null,
	 	'©' => 'c', 	'«' => '"', 	'»' => '"',

		// Special characters
		
	 	'™' => 'TM',
	 	'®' => 'r',
	 	'|' => '-',
	 	'.' => '-',
	 	'=' => '-',
	 	' ' => '-',
	 	'―' => '-',
	 	'‑' => '-',
	 	'#' => null,
	 	'{' => null,
	 	'}' => null,
	 	'*' => null,
	 	'Nº' => 'číslo',
	 	'№' => 'číslo',
	 	'°' => 'stupňov',
	 	'º' => null,

		// Other characters
		
	
	);
	
	$regexp = array(
	
		// Ampersands

	 	'/^&(?!&)$/' => '-',
	 	'/^&(?!&)/' => 'a-',
	 	'/&(?!&)&/' => '-a',
	 	'/&(?!&)/' => '-a-',

		// Other characters
		
	
	);

	$transliterations = array(
		'straight' => $straight,
		'regexp' => $regexp
	);
