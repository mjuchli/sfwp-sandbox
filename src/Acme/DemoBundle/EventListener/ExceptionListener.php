<?php

namespace Acme\DemoBundle\EventListener;

use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


class ExceptionListener
{
    public function onKernelException(GetResponseForExceptionEvent $event)
    {
        /*$exception = $event->getException();
        $request = $event->getRequest();


        if ($exception instanceof NotFoundHttpException) {
            $response = new RedirectResponse('/~marc/sfwp/web/wordpress'.$request->getPathInfo());
            $event->setResponse($response);
        }*/
    }
}
