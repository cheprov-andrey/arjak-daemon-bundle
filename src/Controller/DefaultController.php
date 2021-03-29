<?php

namespace arjak\DaemonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Class DefaultController
 * @package arjak\DaemonBundle\Controller
 * @Route ("/daemon", name="daemon", priority="1")
 */
class DefaultController extends AbstractController
{

}
