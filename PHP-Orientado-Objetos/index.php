<?php

require "vendor/autoload.php";

//use app\classes\UploadFoto;
//use app\classes\UploadFile;
//use app\classes\AtividadesPessoa;
//use app\classes\Pessoa;




class Controller
{
    public function make()
    {
        if(!$this->controllerExist()){
            throw new \ControllerNotExistException();
        }

        if(!$this->methodExist()){
            throw new \MethodNotExistException();
        }


        return 'controller';
    }

    private function controllerExist()
    {
        return false;
    }

    private function methodExist()
    {
        return false;
    }
}

class ControllerNotExistException extends \Exception
{
    public function message()
    {
        //return "Erro no arquivo {$this->getFile()} na linha {$this->getLine()}";
        return "Erro ao criar controller";
    }
}


class MethodNotExistException extends \Exception
{
    public function message()
    {
        return "Erro ao chamar o método";
    }
}



try {
    $controller =  new Controller();
    $controller->make();
} catch (Exception $e){
    var_dump($e->message());
}
















//class ShoppingCart
//{
//    private $get = [];
//    private $products = [];
//
//    public function __call(string $name, array $parameters)
//    {
//        $this->products[] = $parameters;
//    }
//
//    public function products()
//    {
//        return $this->products;
//    }
//
//    public function __toString(): string
//    {
//        return "Chamando o toString";
//    }

//    public function __set($name, $value)
//    {
//        if(!property_exists($this, $name)){
//            $this->get[$name][] = $value;
//        }
//        throw new \Exception("Essa propriedade já existe!");
//    }
//
//    public function __get($name)
//    {
//        return var_dump($this->get[$name]);
//    }
//}

//$shopping = new ShoppingCart();
////$shopping->product = "Monitor";
////$shopping->product = "Placa de Video";
////$shopping->product;
//$shopping->add('Monitor');
//$shopping->add('Placa de video');
//var_dump( $shopping->products());
//echo $shopping;







//interface EmailInterface
//{
//    public function send();
//}
//
//class Swift implements EmailInterface
//{
//    public function send()
//    {
//        return "Enviando email com o Swift";
//    }
//}
//
//class Mailer implements EmailInterface
//{
//    public function send()
//    {
//        return "Enviando email com PHPMailer";
//    }
//}
//
//class SendEmail
//{
//    private $email;
//    public function __construct(EmailInterface $email)
//    {
//        $this->email = $email;
//    }
//
//    public function send()
//    {
//        return $this->email->send();
//    }
//}
//
//$email = new SendEmail(new Mailer());
//echo $email->send();
//
//










//abstract class Banco
//{
//    abstract public function depositar(float $valor);
//}
//
//class Bradesco extends Banco
//{
//    private $juros = 1;
//
//    public function depositar($valor)
//    {
//        return "Depositando com juros de {$this->juros}% com o valor de R$ {$valor}";
//    }
//}
//
//class Itau extends Banco
//{
//    private $juros = 0.6;
//
//    public function depositar($valor)
//    {
//        return "Depositando com juros de {$this->juros}% com o valor de R$ {$valor}";
//    }
//}
//
//$itau = new Itau();
//echo $itau->depositar(110) . "<br>";
//
//$bradesco = new Bradesco();
//echo $bradesco->depositar(250);














//abstract class Model
//{
//    public function all()
//    {
//        return "todos registros";
//    }
//
//    public function find(string $id)
//    {
//        return "Encontrando o user com o id {$id}";
//    }
//
//    abstract public function create();
//}
//
//class User extends Model
//{
//    public function create()
//    {
//        return "Usuário cadastrado!";
//    }
//}
//
//class Login
//{
//
//    private $model;
//    public function __construct(Model $model)
//    {
//        $this->model = $model;
//    }
//
//    public function logar(string $id)
//    {
//        return $this->model->find($id);
//    }
//
//}
//
//
//$user = new User();
//echo $user->create() . "<br>";
//
//$login = new Login(new User());
//echo $login->logar('11');







//interface LoggerInterface
//{
//    public function create();
//}
//
//class Logger
//{
//    private $logger;
//    public function __construct(LoggerInterface $logger)
//    {
//        $this->logger = $logger;
//    }
//
//    public function create()
//    {
//        return $this->logger->create();
//    }
//}
//
//class DatabaseLogger implements LoggerInterface
//{
//    public function create()
//    {
//        return "Logger do database";
//    }
//}
//
//class FileLogger implements LoggerInterface
//{
//    public function create()
//    {
//        return "Logger file";
//    }
//}
//
//
//$logger = new Logger(new FileLogger());
//echo $logger->create();
//





//interface UplaodInterface
//{
//    public function uploadFile();
//}
//
//class Upload
//{
//    private $upload;
//    public function __construct(UplaodInterface $uplaod)
//    {
//        $this->upload = $uplaod;
//    }
//
//    public function doUpload()
//    {
//        return $this->upload->uploadFile();
//    }
//}
//
//class UploadPdf implements UplaodInterface
//{
//    public function uploadFile()
//    {
//        return "Upload pdf File";
//    }
//}
//
//class UploadFoto implements UplaodInterface
//{
//    public function uploadFile()
//    {
//        return "Upload foto";
//    }
//}
//
//$uplaod = new Upload(new UploadFoto());
//echo $uplaod->doUpload();








//
//interface HeadInterface
//{
//    public function create();
//}
//
//class Head implements HeadInterface
//{
//    public function create()
//    {
//        return "criando a cabeça";
//    }
//}
//
//class HeadLoiro implements HeadInterface
//{
//    public function create()
//    {
//        return "criando a cabeça loira";
//    }
//}
//
//class Person
//{
//    private $head;
//    public function __construct(HeadInterface $head)
//    {
//        $this->head = $head;
//    }
//
//    public function create()
//    {
//        return $this->head->create();
//    }
//}
//
//
//$person = new Person(new HeadLoiro());
//echo $person->create();
//








//
//abstract class Email
//{
//
//    public static function teste()
//    {
//        return "teste";
//    }
//
//    public static function who()
//    {
//        return "Eduardo";
//    }
//
//    public static function send()
//    {
//        return static::who();
////        return self::who();
//    }
//}


//class SendEmail extends Email
//{
//    public static function who()
//    {
//        echo parent::teste();
//        return "João";
//    }
//
//
//}


//echo Email::send();
//echo SendEmail::send();
//echo SendEmail::who();



//echo UploadFoto::teste();
//echo UploadFoto::PROPRIEDADE_TESTE;
//echo UploadFoto::$propriedade_teste;


//$upload = new UploadFoto("arquivo.png");
//$upload->file("foto.png");
//$upload->validation();
//echo $upload->upload() . "\n";

//
//$atividadesPessoa = new AtividadesPessoa();
//echo $atividadesPessoa->pular() . "\n";
//echo $atividadesPessoa->andar() . "\n";
//
//$pessoa = new Pessoa();
//$pessoa->idade = 24;
//$pessoa->nome = "Eduardo";
//$pessoa->email = "eduardo@example.com";
//
//echo $pessoa->dados() . "\n";
//
//$pessoa = new Pessoa();
//$pessoa->idade = 25;
//$pessoa->nome = "João";
//$pessoa->email = "joao@example.com";
//
//echo $pessoa->dados() . "\n";