<?php 

use PHPUnit\Framework\TestCase; //configuración propia de la dependencia phpunit
use App\Validate; // USO ESTE NAMESPACE POR QUE UTILIZAMOS LA CLASE VALIDATE

class ValidateTest extends TestCase
{
    public function test_email()
    {
        $email= Validate::email('nexu_2001@hotmail.com');
        $this->assertTrue($email);
    }
}