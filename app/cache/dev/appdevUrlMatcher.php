<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // _home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_home');
            }

            return array (  '_controller' => 'Karudev\\SiteBundle\\Controller\\DefaultController::indexAction',  '_route' => '_home',);
        }

        // _contact
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'Karudev\\SiteBundle\\Controller\\DefaultController::contactAction',  '_route' => '_contact',);
        }

        // _profil
        if ($pathinfo === '/profil') {
            return array (  '_controller' => 'Karudev\\SiteBundle\\Controller\\DefaultController::profilAction',  '_route' => '_profil',);
        }

        // _disponibilite
        if ($pathinfo === '/disponibilite') {
            return array (  '_controller' => 'Karudev\\SiteBundle\\Controller\\DefaultController::disponibiliteAction',  '_route' => '_disponibilite',);
        }

        // _apps_enterprise_login
        if ($pathinfo === '/enterprise/login') {
            return array (  '_controller' => 'Karudev\\AppsBundle\\Controller\\DefaultController::loginAction',  '_route' => '_apps_enterprise_login',);
        }

        // _apps_enterprise_logout
        if ($pathinfo === '/enterprise/logout') {
            return array (  '_controller' => 'Karudev\\AppsBundle\\Controller\\DefaultController::logoutAction',  '_route' => '_apps_enterprise_logout',);
        }

        // _apps_enterprise_login_check
        if ($pathinfo === '/enterprise/logincheck') {
            return array('_route' => '_apps_enterprise_login_check');
        }

        // _apps_enterprise_contrat
        if ($pathinfo === '/enterprise/contrat') {
            return array (  '_controller' => 'Karudev\\AppsBundle\\Controller\\ContratController::createAction',  '_route' => '_apps_enterprise_contrat',);
        }

        // _apps_enterprise_contrat_download
        if (0 === strpos($pathinfo, '/enterprise/contrat/download') && preg_match('#^/enterprise/contrat/download/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Karudev\\AppsBundle\\Controller\\ContratController::downloadAction',)), array('_route' => '_apps_enterprise_contrat_download'));
        }

        // _apps_enterprise_organisation
        if ($pathinfo === '/enterprise/organisation') {
            return array (  '_controller' => 'Karudev\\AppsBundle\\Controller\\OrganisationController::createAction',  '_route' => '_apps_enterprise_organisation',);
        }

        // _apps_enterprise_contact
        if ($pathinfo === '/enterprise/contact') {
            return array (  '_controller' => 'Karudev\\AppsBundle\\Controller\\ContactController::createAction',  '_route' => '_apps_enterprise_contact',);
        }

        // _apps_enterprise_contact_show_all
        if ($pathinfo === '/enterprise/contact/show-all') {
            return array (  '_controller' => 'Karudev\\AppsBundle\\Controller\\ContactController::showallAction',  '_route' => '_apps_enterprise_contact_show_all',);
        }

        // _apps_enterprise_contact_show
        if (0 === strpos($pathinfo, '/enterprise/contact/show') && preg_match('#^/enterprise/contact/show/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Karudev\\AppsBundle\\Controller\\ContactController::showAction',)), array('_route' => '_apps_enterprise_contact_show'));
        }

        // _apps_enterprise_contact_edit
        if (0 === strpos($pathinfo, '/enterprise/contact/edit') && preg_match('#^/enterprise/contact/edit/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Karudev\\AppsBundle\\Controller\\ContactController::editAction',)), array('_route' => '_apps_enterprise_contact_edit'));
        }

        // _apps_enterprise_contact_liercontactorganisation
        if (0 === strpos($pathinfo, '/enterprise/contact/liercontactorganisation') && preg_match('#^/enterprise/contact/liercontactorganisation/(?P<id_contact>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Karudev\\AppsBundle\\Controller\\ContactController::liercontactorganisationAction',)), array('_route' => '_apps_enterprise_contact_liercontactorganisation'));
        }

        // _wdt
        if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_info
            if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::infoAction',)), array('_route' => '_profiler_info'));
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+)\\.txt$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_phpinfo
            if ($pathinfo === '/_profiler/phpinfo') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::phpinfoAction',  '_route' => '_profiler_phpinfo',);
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+)/search/results$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }

            // _profiler_redirect
            if (rtrim($pathinfo, '/') === '/_profiler') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_profiler_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => '_profiler_search_results',  'token' => 'empty',  'ip' => '',  'url' => '',  'method' => '',  'limit' => '10',  '_route' => '_profiler_redirect',);
            }

        }

        if (0 === strpos($pathinfo, '/_configurator')) {
            // _configurator_home
            if (rtrim($pathinfo, '/') === '/_configurator') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_configurator_home');
                }

                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
            }

            // _configurator_step
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
