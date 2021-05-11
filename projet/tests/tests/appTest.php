<?php
namespace App\Tests;


use App\Entity\User;
use App\Repository\UserRepository;
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
        $crawler = $client->request('GET', '/login');
        $form = $crawler->selectButton('Sign in')->form([]);
        $form['email'] = 'charles@gmail.com';
        $form['password'] = 'carlos';
        $client->submit($form);
        $this->assertTrue($client->getResponse()->isRedirect('/'));
    }

    public function testLoginFormFalse(){
        $client = static::createClient();
        $crawler = $client->request('GET', '/login');
        $form = $crawler->selectButton('Sign in')->form([]);
        $form['email'] = 'charles@gmail.com';
        $form['password'] = 'false';
        $client->submit($form);
        $this->assertTrue($client->getResponse()->isRedirect('/login'));
    }

    public function testVisitingWhileLoggedIn()
    {
        $client = static::createClient();

        // get or create the user somehow (e.g. creating some users only
        // for tests while loading the test fixtures)
        $userRepository = static::$container->get(UserRepository::class);
        $testUser = $userRepository->findOneByEmail('charles@gmail.com');

        $client->loginUser($testUser);

        // user is now logged in, so you can test protected resources
        $client->request('GET', '/');
        $this->assertResponseIsSuccessful();
    }

    public function testVisitingModif()
    {
        $client = static::createClient();

        // get or create the user somehow (e.g. creating some users only
        // for tests while loading the test fixtures)
        $userRepository = static::$container->get(UserRepository::class);
        $testUser = $userRepository->findOneByEmail('charles@gmail.com');

        $client->loginUser($testUser);
        $client->request('GET', '/modifLivres');
        $this->assertResponseIsSuccessful();
    }

    public function testVisitingAdd()
    {
        $client = static::createClient();

        // get or create the user somehow (e.g. creating some users only
        // for tests while loading the test fixtures)
        $userRepository = static::$container->get(UserRepository::class);
        $testUser = $userRepository->findOneByEmail('charles@gmail.com');

        $client->loginUser($testUser);
        $client->request('GET', '/addLivre/new');
        $this->assertResponseIsSuccessful();
    }


    public function testRegisterAccess(){
        $client = static::createClient();
        $client->request('GET', '/register');
        $this->assertResponseIsSuccessful();
    }

    public function testVisitingInfo()
    {
        $client = static::createClient();

        // get or create the user somehow (e.g. creating some users only
        // for tests while loading the test fixtures)
        $userRepository = static::$container->get(UserRepository::class);
        $testUser = $userRepository->findOneByEmail('charles@gmail.com');

        $client->loginUser($testUser);

        // user is now logged in, so you can test protected resources
        $client->request('GET', '/information');
        $this->assertResponseIsSuccessful();
    }




}

