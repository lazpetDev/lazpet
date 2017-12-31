<?php
//include the Route class
class Route
{

    public static $validRoute = [];
    public static function set($route, $function)
    {
        self::$validRoute[] = $route;

       // print_r(self::$validRoute);
        if ($_GET['url'] == $route) {
            $function->__invoke($twig);
        }
    }
};

//Render templates

//homepage
// class Routes
// {
//     public function home($twig)
//     {//homepage
//         echo $twig->render('home.php.twig');
//     }

//     public function about($twig)
//     {//about page
//         
//     }
//     public function lost($twig)
//     {//about page
//         echo $twig->render('404.php.twig');
//     }
//     public function contact($twig)
//     {//about page
//         echo $twig->render('contact.php.twig');
//     }
// }

Route::set('home', function ($twig) {
    echo $twig->render('home.php.twig');
});

Route::set('about', function ($twig) {
    echo $twig->render('about.php.twig');
});

Route::set('contact', function ($twig) {
    echo $twig->render('contact.php.twig');
});

Route::set('work', function ($twig) {
    echo $twig->render('work.php.twig');
});
