<?
use app\models\{Basket, Product, User, Feedback_goods, Feedback, Order};
use app\engine\Db;

include $_SERVER['DOCUMENT_ROOT'] . "/../config/config.php";
include $_SERVER['DOCUMENT_ROOT'] . "/../engine/Autoload.php";

spl_autoload_register([new Autoload(), 'loadClass']);


/*$product = Product::getLimit(0, 4);
echo '<pre>';
var_dump($product);
echo '</pre>';
die();*/


$controllerName = $_GET['c'] ?: 'product';
$actionName = $_GET['a'];

$controllerClass = CONTROLLER_NAMESPACE . ucfirst($controllerName)  . "Controller";

if (class_exists($controllerClass)) {
    $controller = new $controllerClass();
    $controller->runAction($actionName);
} else {
    echo "Не правильный контроллер";
}

$product = Product::getOne(2);
$product->setName('Молоток');
$product->setPrice(123);
$product->save();

/*echo '<pre>';
var_dump($product);
echo '</pre>';
die();

$product = new Product("Сникерс", "Вкусный", 12);
$product->save();
$product->delete();

echo '<pre>';
var_dump($product);
echo '</pre>';
die();*/



/**
 * @var Product $product
 */


//$product->delete();



//$product->setName("Сникерс2");

//$product->save();

//var_dump(get_class_methods($product));

