<?php

namespace Tomazi\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Tomazi\SiteBundle\Factories\FactoryHomePage;

class IndexController extends Controller
{
    public $home;

    public $container;

    public function __construct(
        FactoryHomePage $factoryHomePage,
        ContainerInterface $containerInterface
    ){
        $this->home = $factoryHomePage;
        $this->container = $containerInterface;
    }

    public function indexPageAction()
    {
        return $this->render('pages/home.html.twig', array('home' => $this->home->create()));
    }
} 