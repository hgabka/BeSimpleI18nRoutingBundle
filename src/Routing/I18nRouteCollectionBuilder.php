<?php

namespace BeSimple\I18nRoutingBundle\Routing;

use Symfony\Component\Routing\Route;

@trigger_error(
    'The '.__NAMESPACE__.'\I18nRouteCollectionBuilder class is deprecated and will be removed in 3.0. '.
    'Use the BeSimple\I18nRoutingBundle\Routing\I18nRouteCollection::addI18n instead.',
    E_USER_DEPRECATED
);

/**
 * @deprecated since version 2.4, to be removed in 3.0.
 *             Use {@link \BeSimple\I18nRoutingBundle\Routing\I18nRouteCollection::addI18n} instead.
 */
class I18nRouteCollectionBuilder
{
    /**
     * buildCollection.
     *
     * Available options:
     *
     *  * See Routing class
     *
     * @param  string          $name             The route name
     * @param  array           $localesWithPaths An array with keys locales and values path patterns
     * @param  array           $defaults         An array of default parameter values
     * @param  array           $requirements     An array of requirements for parameters (regexes)
     * @param  array           $options          An array of options
     * @param  string          $host             The host pattern to match
     * @param  string|array    $schemes          A required URI scheme or an array of restricted schemes
     * @param  string|array    $methods          A required HTTP method or an array of restricted methods
     * @return \Symfony\Component\Routing\RouteCollection
     */
    public function buildCollection($name, array $localesWithPaths, array $defaults = array(), array $requirements = array(), array $options = array(), $host = '', $schemes = array(), $methods = array())
    {
        $collection = new I18nRouteCollection();
        $collection->addI18n($name, $localesWithPaths, new Route('', $defaults, $requirements, $options, $host, $schemes, $methods));
        
        return $collection;
    }
}
