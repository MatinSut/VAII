# Mačkafe

Martin Šutek

5ZYI36

## Stručný opis projektu
Mačkafe je webová aplikácia pre novootvorenú mačaciu kaviareň. Jej cieľom je predstaviť kaviareň, zverejniť praktické informácie o jej službách a návštevníkom umožniť prezrieť si galériu a mačky, ktoré hľadajú nový domov. Aplikácia je určená záujemcom o návštevu kaviarne, milovníkom mačiek aj ľuďom, ktorí zvažujú adopciu.

Návštevníci budú môcť kaviareň kontaktovať prostredníctvom formulára. Po registrácii získajú prístup k chatu s kaviarňou a budú môcť odoslať žiadosť o adopciu. Správca bude udržiavať obsah stránky, spravovať galériu a profily mačiek a vybavovať správy a žiadosti o adopciu.

## Role v projekte
Webová stránka bude obsahovať tri role: návštevník, registrovaný používateľ a správca.

**Návštevník** môže bez prihlásenia prezerať verejné stránky, informácie o kaviarni, galériu a profily mačiek. Môže odoslať kontaktný formulár. Nemôže používať chat ani posielať žiadosti o adopciu.

**Registrovaný používateľ** má všetky oprávnenia návštevníka a navyše môže používať chat s kaviarňou a odoslať žiadosť o adopciu. Svoje údaje a stav žiadostí si môže prezerať vo svojom účte.

**Správca** spravuje obsah webovej stránky, fotografie a profily mačiek. Môže meniť stav dostupnosti mačiek na adopciu, prezerať a vybavovať žiadosti o adopciu, odpovedať používateľom v chate a spravovať kontaktné správy.

## Prípady použitia podľa rolí
**Návštevník**
- Prezrie si úvodnú stránku a základné informácie o kaviarni.
- Prezrie si galériu a profily mačiek dostupných na adopciu.
- Odošle kaviarni kontaktnú správu s menom, e-mailom a textom otázky.
- Zaregistruje sa alebo sa prihlási do svojho účtu.

**Registrovaný používateľ**
- Prihlási sa a upraví alebo skontroluje údaje svojho účtu.
- Otvorí chat a odošle správu kaviarni; následne si môže prezerať odpovede.
- Vyberie mačku dostupnú na adopciu a odošle žiadosť s kontaktnými údajmi a informáciami o svojich podmienkach.
- Skontroluje stav svojich žiadostí o adopciu.

**Správca**
- Pridá, upraví alebo odstráni fotografie v galérii a ich popisy.
- Vytvorí a upraví profil mačky vrátane jej popisu a stavu dostupnosti na adopciu.
- Prezrie si žiadosti o adopciu a aktualizuje ich stav (napríklad nová, posudzuje sa, schválená alebo zamietnutá).
- Odpovie na správy registrovaných používateľov v chate a vybaví kontaktné správy.

## Plánované entity

- **Používateľ (User)** – účet návštevníka, ktorý sa zaregistroval. Atribúty: ID, meno, e-mail, hash hesla, dátum registrácie a rola. Používateľ môže mať konverzáciu a viacero žiadostí o adopciu.
- **Mačka (Cat)** – profil mačky v kaviarni. Atribúty: ID, meno, vek alebo dátum narodenia, povaha, opis, fotografia a stav adopcie (dostupná, rezervovaná alebo adoptovaná). Mačka môže byť uvedená vo viacerých žiadostiach o adopciu a môže mať viacero fotografií.
- **Fotografia (Gallery)** – fotografia v galérii alebo pri profile mačky. Atribúty: ID, adresa súboru, popis, dátum pridania a prípadné ID mačky. Fotografia môže patriť do galérie alebo byť priradená ku konkrétnej mačke.
- **Žiadosť o adopciu (Adoptions)** – žiadosť používateľa o adopciu konkrétnej mačky. Atribúty: ID, ID používateľa, ID mačky, dátum podania, kontaktné údaje, odôvodnenie a stav žiadosti.
- **Konverzácia (Conversation)** – chat medzi registrovaným používateľom a kaviarňou. Atribúty: ID, ID používateľa a dátum vytvorenia. Každá konverzácia obsahuje viacero správ.
- **Správa (Message)** – jedna správa v chate. Atribúty: ID, ID konverzácie, ID odosielateľa, text a dátum odoslania. Odosielateľom môže byť používateľ alebo správca.
- **Formulár (Formular)** – otázka odoslaná cez verejný kontaktný formulár. Atribúty: ID, meno, e-mail, text správy, dátum odoslania a stav vybavenia.

## Vzťahy medzi entitami

- Používateľ – Žiadosť o adopciu: **1:N**. Jeden používateľ môže podať viacero žiadostí; každá žiadosť patrí jednému používateľovi.
- Mačka – Žiadosť o adopciu: **1:N**. O jednu mačku môže postupne alebo súčasne prejaviť záujem viac používateľov; každá žiadosť sa týka jednej mačky.
- Používateľ – Konverzácia: **1:1**. Každý registrovaný používateľ má jednu konverzáciu s kaviarňou.
- Konverzácia – Správa: **1:N**. Konverzácia obsahuje viacero správ a každá správa patrí do jednej konverzácie.
- Mačka – Fotografia: **1:N**. Profil mačky môže obsahovať viacero fotografií; fotografia môže byť priradená najviac jednej mačke. Fotografie bez priradenej mačky môžu byť súčasťou všeobecnej galérie.

## Hlavné stránky aplikácie

1. **Domov** – stručné predstavenie kaviarne, aktuálne oznamy a odkazy na galériu, mačky a kontakt.
2. **O kaviarni** – informácie o kaviarni, jej pravidlách, otváracích hodinách a polohe.
3. **Galéria** – prehľad fotografií kaviarne a mačiek.
4. **Mačky na adopciu** – zoznam mačiek dostupných na adopciu a ich profily; prihlásenému používateľovi umožní prejsť k žiadosti o adopciu.
5. **Kontakt** – kontaktné údaje a formulár na odoslanie otázky.
6. **Registrácia a prihlásenie** – vytvorenie účtu a prístup k funkciám pre registrovaných používateľov.
7. **Používateľský účet** – prehľad osobných údajov a stavu podaných žiadostí o adopciu.
8. **Chat** – komunikácia registrovaného používateľa s kaviarňou.
9. **Administrácia** – správa obsahu, galérie, profilov mačiek, kontaktných správ, chatu a žiadostí o adopciu; dostupná iba správcovi.

## Rozdelenie funkcionality

**Základné funkcie**
- Zobrazenie informácií o kaviarni, galérie a profilov mačiek.
- Registrácia, prihlásenie a rozlíšenie oprávnení návštevníka, používateľa a správcu.
- Odoslanie kontaktnej správy cez formulár.
- Podanie žiadosti o adopciu prihláseným používateľom a zobrazenie jej stavu.
- Správa mačiek, fotografií a žiadostí o adopciu v administrácii.
- Základný chat používateľa s kaviarňou vrátane odosielania a zobrazovania správ.

**Rozširujúce funkcie**
- Filtrovanie a vyhľadávanie mačiek podľa veku, pohlavím alebo stavu adopcie.
- E-mailové upozornenia pri odpovedi v chate alebo zmene stavu žiadosti.
- Nahrávanie viacerých fotografií ku každej mačke a ich triedenie v galérii.
- Rezervácia termínu návštevy kaviarne.
- Používateľské hodnotenia alebo novinky z kaviarne.
