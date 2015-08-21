<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;


/**
 * Lucky
 */
class LuckyController extends Controller
{
  /**
   * @Route("/lucky", name="lucky")
   */
  public function numberRandAction(){
    $number = rand(0, 100);
    $data = array(
      'luckyNumber'=> rand(0,1000)
    );

    return new JsonResponse($data);
  }

  /**
   * @Route("/lucky/{count}")
   */
  public function numberAction($count){
    $data = array(
      'count' => $count
    );

    return $this->render(
      'lucky/index.html.twig',
      array('count' => $count, )
    );
  }
}
