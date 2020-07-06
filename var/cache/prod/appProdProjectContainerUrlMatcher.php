<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = [];
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        // index
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'ProjetBundle\\Controller\\DefaultController::indexAction',  '_route' => 'index',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_index;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'index'));
            }

            return $ret;
        }
        not_index:

        // new-projet
        if ('/new' === $pathinfo) {
            return array (  '_controller' => 'ProjetBundle\\Controller\\DefaultController::newAction',  '_route' => 'new-projet',);
        }

        // edit-projet
        if (0 === strpos($pathinfo, '/edit') && preg_match('#^/edit/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'edit-projet']), array (  '_controller' => 'ProjetBundle\\Controller\\DefaultController::editAction',));
        }

        if (0 === strpos($pathinfo, '/collab')) {
            // indexcollab
            if ('/collab/collab' === $pathinfo) {
                return array (  '_controller' => 'CollaborateurBundle\\Controller\\DefaultController::indexAction',  '_route' => 'indexcollab',);
            }

            // new-collab
            if ('/collab/new' === $pathinfo) {
                return array (  '_controller' => 'CollaborateurBundle\\Controller\\DefaultController::newAction',  '_route' => 'new-collab',);
            }

            // edit-collab
            if (0 === strpos($pathinfo, '/collab/edit') && preg_match('#^/collab/edit/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'edit-collab']), array (  '_controller' => 'CollaborateurBundle\\Controller\\DefaultController::editAction',));
            }

            // delete-projet
            if (0 === strpos($pathinfo, '/collab/delete') && preg_match('#^/collab/delete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'delete-projet']), array (  '_controller' => 'CollaborateurBundle\\Controller\\DefaultController::deleteAction',));
            }

        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
