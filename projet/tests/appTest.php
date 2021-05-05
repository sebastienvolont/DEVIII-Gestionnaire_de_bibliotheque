<?php
namespace App\Tests;

use App\Controller\RegistrationController;
use PHPUnit\Framework\TestCase;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;


class userTest extends kernelTestCase{

    public function testValidUser()
    {
        $user = (new User())
            ->setEmail('test@gmail.com')
            ->setPassword('12345')
            ->setRoles([]);
            self::bootKernel();
            $error = self::$container->get('validator')->validate($user);
            $this->assertCount(0, $error);
    }

    public function testInvalidUser()
    {
        $user = (new User())
            ->setEmail("charlesparm@gmail.com")
            ->setPassword("hjbvjhdb")
            ->setRoles([]);
        self::bootKernel();
        $error = self::$container->get('validator')->validate($user);
        $this->assertCount(1, $error);
    }

}

class registerTest extends WebTestCase{
    public function testLoginAccess(){
        $client = static::createClient();
        $client->request('GET', '/login');
        $this->assertResponseStatusCodeSame(Response::HTTP_OK);
    }

    public function testDeniedAccess(){
        $client = static::createClient();
        $client->request('GET', '/');
        $this->assertTrue($client->getResponse()->isRedirect('/login'));
    }

    public function testDeniedAccessInfo(){
        $client = static::createClient();
        $client->request('GET', '/information');
        $this->assertTrue($client->getResponse()->isRedirect('/login'));
    }

    public function testDeniedAccessModif(){
        $client = static::createClient();
        $client->request('GET', '/modifLivres');
        $this->assertTrue($client->getResponse()->isRedirect('/login'));
    }

    public function testDeniedAccessRecherche(){
        $client = static::createClient();
        $client->request('GET', '/rechercherLivre');
        $this->assertTrue($client->getResponse()->isRedirect('/login'));
    }

    public function testDeniedAccessAfficher(){
        $client = static::createClient();
        $client->request('GET', '/afficherLivre/{id}');
        $this->assertTrue($client->getResponse()->isRedirect('/login'));
    }

    public function testDeniedAccessAdd(){
        $client = static::createClient();
        $client->request('GET', '/addLivre/new');
        $this->assertTrue($client->getResponse()->isRedirect('/login'));
    }

    public function testLoginForm(){
        $client = static::createClient();
        $crawler = $client->request('GET', '/addLivre/new');
        $form = $crawler->selectButton('Sign in')->form([]);
        $form['email'] = 'carlos123';
        $form['password'] = 'carlos';
        $client->submit($form);
        $this->assertTrue($client->getResponse()->isRedirect('/'));
        //$this->assertResponseRedirects('/login');
        //$this->assertTrue($crawler->filter('html:contains("Welcome Back")')->count() > 0);

    }
}

