# dndWebApp
 Dnd-Rng-WebApp
## Webserver
Stel de document root van MAMP in op de /public map.

## Database
Maak via phpmyadmin een database (bijvoorbeeld genaamd ddndWebApp) aan met 3 tabellen

1. pages
    - id (int, auto increment)
    - title (varchar 255 )
    - content (text)
    - slug (varchar 255)
    - status (ENUM met waarden published en draft en default waarde draft)
2. users
    - id (int, auto increment)
    - username (varchar 255)
    - password (varchar 255)

3. blogs
    - id (int, auto increment)
    - title (varchar 255 )
    - content (text)
    - slug (varchar 255)
    - status (ENUM met waarden published en draft en default waarde draft)

Vul deze tabellen met wat test data. (Dat kan via insert in phpmyadmin). De pages tabel moet in ieder geval een homepagina bevatten, zorg dat de slug kolom een waarde "home" krijgt.

Voeg een test user toe aan de users tabel,

## Configs
Ga naar de config map en open het bestand database.php.
Verander de waarden; waarschijnlijk het port nummer en de database naam. 

Open de webpagina van mamp en ga naar deze website.

## Tips

Analyseer de werking van deze applicatie.

- Bekijk het bestand bootstrap.php, dit is het startpunt van de applicatie.

## Structuur

- *config*: bevat de configuraties
- *public*: je stelt de document root in op deze folder, dit is het beginpunt.
- *src* bevat alle klassen, waaronder controllers die de requests afhandelen
- *views*: bevat de bestanden met html die aan de gebruiker worden gepresenteerd
- *bootstrap.php*: het beginpunt van de applicatie
- *routes.php*: handelt de routes af zodat de juiste controller wordt aangeroepen en juiste method. 