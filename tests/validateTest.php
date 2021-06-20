<?php 

use PHPUnit\Framework\TestCase; //configuración propia de la dependencia phpunit
use App\Validate; // USO ESTE NAMESPACE POR QUE UTILIZAMOS LA CLASE VALIDATE

class ValidateTest extends TestCase
{
    public function test_email()
    {
        $email= Validate::email('nexu_2001@hotmail.com');
        $this->assertTrue($email);

        $email= Validate::email('nexu_@@hotmail.com');
        $this->assertFalse($email);


    }

    public function test_url() 
    {

    $url= Validate::url('https://platzi.com');
        $this->assertTrue($url);

        $url= Validate::url('platzi.com');
        $this->assertFalse($url);

    }


    public function test_password()
    {
        $password = Validate::password('123456');
        $this->assertTrue($password);
    }
}