<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // back_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'back_homepage');
            }

            return array (  '_controller' => 'BackBundle:Default:index',  '_route' => 'back_homepage',);
        }

        // tabella
        if ($pathinfo === '/tabella') {
            return array (  '_controller' => 'BackBundle\\Controller\\ReportisticaController::tabellaAction',  '_route' => 'tabella',);
        }

        if (0 === strpos($pathinfo, '/edit')) {
            // edit
            if ($pathinfo === '/edit') {
                return array (  '_controller' => 'BackBundle\\Controller\\EditController::editAction',  '_route' => 'edit',);
            }

            // editgusto
            if ($pathinfo === '/editgusto') {
                return array (  '_controller' => 'BackBundle\\Controller\\EditController::editgustoAction',  '_route' => 'editgusto',);
            }

        }

        // front_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'front_homepage');
            }

            return array (  '_controller' => 'FrontBundle:Default:index',  '_route' => 'front_homepage',);
        }

        if (0 === strpos($pathinfo, '/gelateri')) {
            // _rotta
            if ($pathinfo === '/gelaterie') {
                return array (  '_controller' => 'FrontBundle\\Controller\\GelateriaController::rottaAction',  '_route' => '_rotta',);
            }

            // _gelateria
            if (0 === strpos($pathinfo, '/gelateria') && preg_match('#^/gelateria/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_gelateria')), array (  '_controller' => 'FrontBundle\\Controller\\GelateriaController::gelateriaAction',));
            }

        }

        // _segnalagelateria
        if ($pathinfo === '/segnalagelateria') {
            return array (  '_controller' => 'FrontBundle\\Controller\\GelateriaController::segnalagelateriaAction',  '_route' => '_segnalagelateria',);
        }

        // _home
        if ($pathinfo === '/home') {
            return array (  '_controller' => 'FrontBundle\\Controller\\HomeController::HomeAction',  '_route' => '_home',);
        }

        // _comefunziona
        if ($pathinfo === '/comefunziona') {
            return array (  '_controller' => 'FrontBundle\\Controller\\HomeController::ComefunzionaAction',  '_route' => '_comefunziona',);
        }

        // _search
        if ($pathinfo === '/Search') {
            return array (  '_controller' => 'FrontBundle\\Controller\\SearchController::SearchAction',  '_route' => '_search',);
        }

        if (0 === strpos($pathinfo, '/User')) {
            // _userlogin
            if ($pathinfo === '/Userlogin') {
                return array (  '_controller' => 'FrontBundle\\Controller\\UserController::UserloginAction',  '_route' => '_userlogin',);
            }

            // _userregistrati
            if ($pathinfo === '/Userregistrati') {
                return array (  '_controller' => 'FrontBundle\\Controller\\UserController::UserregistratiAction',  '_route' => '_userregistrati',);
            }

            // _userpswdimenticata
            if ($pathinfo === '/Userpswdimenticata') {
                return array (  '_controller' => 'FrontBundle\\Controller\\UserController::UserpswdimenticataAction',  '_route' => '_userpswdimenticata',);
            }

            // _userimpostazioniutente
            if ($pathinfo === '/Userimpostazioniutente') {
                return array (  '_controller' => 'FrontBundle\\Controller\\UserController::UserimpostazioniutenteAction',  '_route' => '_userimpostazioniutente',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
