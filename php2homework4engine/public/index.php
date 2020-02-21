<?
use app\models\{Basket, Product, User, Feedback_goods, Feedback, Order};
use app\engine\Db;

include $_SERVER['DOCUMENT_ROOT'] . "/../config/config.php";
include $_SERVER['DOCUMENT_ROOT'] . "/../engine/Autoload.php";

spl_autoload_register([new Autoload(), 'loadClass']);



$controllerName = $_GET['c'] ?: 'product';
$actionName = $_GET['a'];

$controllerClass = CONTROLLER_NAMESPACE . ucfirst($controllerName)  . "Controller";

if (class_exists($controllerClass)) {
    $controller = new $controllerClass(new \app\engine\Render());
    $controller->runAction($actionName);
} else {
    echo "Не правильный контроллер";
}

$product = Product::getOne(2);
$product->setName('Молоток');
$product->setPrice(123);
$product->save();


