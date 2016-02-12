<?php
namespace Tomazi\SiteBundle\Factories;

use Symfony\Component\HttpFoundation\Request;

class FactoryHomePage
{
    public function create(Request $request)
    {
        $data = array(
            'Home' => 'Welcome To Home Page'
        );

        return $data;
    }

} 