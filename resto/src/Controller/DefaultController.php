<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="default_index")
     */
    public function index()
    {
        // Making some computing
        $a = 2;
        $b = 3;
        $sum = $a + $b;

        return $this->render(
            // Template name
            "default/index.html.twig",

            // Template data
            [
                'message' => "Sum of 'a' and 'b'",
                'sum' => $sum
            ]
        );
    }
}
