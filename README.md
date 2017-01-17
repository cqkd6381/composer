# composer
composer require cqkd6381/composer:dev-master

In wendor's peer directory, create a new index.php file.

require 'vendor/autoload.php';

$wendaosi = new Wendaosi\Wendaosi('test4');

echo $wendaosi->printMsg();
