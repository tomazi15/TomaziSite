<?php
namespace Tomazi\SiteBundle\Factories;

use Symfony\Component\HttpFoundation\Request;

class FactoryHomePage
{

//    /**
//     * @var NavigationRepo
//     */
//    public $nav;
//
//    /**
//     * @param NavigationRepo $navigationRepo
//     */
//    public function __construct(
//        NavigationRepo $navigationRepo
//    ){
//        $this->nav;
//    }

    public function create()
    {
        $data = array(
            'test' => 'Welcome To Home Page',
            'test2' => 'Hello test 2'
        );

        return $data;
    }

} 