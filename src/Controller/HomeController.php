<?php
/**
 * Created by PhpStorm.
 * User: rummykhan
 * Date: 12/2/17
 * Time: 1:37 AM
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends Controller
{
    public function index()
    {
        $number = mt_rand(0, 100);

        return new Response('<html><body>Lucky number: '.$number.'</body></html>');
    }
}