<?php
namespace Tomazi\SiteBundle\Factories;

//use Symfony\Component\HttpFoundation\Request;

class FactoryHomePage
{
    public function create()
    {
        $data = array(
            'test' => 'Welcome To Home Page',
            'test2' => 'Hello test 2'
        );

        return $data;
    }

} 