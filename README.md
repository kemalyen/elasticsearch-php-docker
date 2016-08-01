# elasticsearch-php-docker
Elasticsearch CRUD with PHP and Docker


Video tutorials can be found at https://www.youtube.com/watch?v=2nWSPMmLdeE


## Installation & Configuration

Clone or download source code from git repository.

If you're using windows, do not forget to move codes under Users/__USERNAME__ . Because docker can be work under computer's user directory.

Run 

  docker compose up -d

command from command line.

I've include the composer in composer yml, but f not prefer to use it. I've build dependecies from computer command line:

  composer install
  
  
This is my development docker. It contains PHP 7, MariaDb, Elastic search, nginx


