## Webserver
run you localhost on ../main/public

## Database
There is a database connected

1. pages
    - id (int, auto increment)
    - title (varchar 255 )
    - content (text)
    - slug (varchar 255)
    - status (ENUM published, draft, default  draft)

2. users
    - id (int, auto increment)
    - username (varchar 255)
    - password (varchar 255)

3. blogs
    - id (int, auto increment)
    - title (varchar 255 )
    - content (text)
    - slug (varchar 255)
    - status (ENUM published, draft, default  draft)
## Configs
Go to /config/database.php.
Change Port Number, default 3308

Open the webpage on localhost.

## Startingpoint of App
Bootstrap.php.
## Structure

- *config*: holsd configuration file
- *public*: index directory
- *src* holdsd all classes
- *views*: html components
- *bootstrap.php*: initialize app
- *routes.php*: route handling for Controller call