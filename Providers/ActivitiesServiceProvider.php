<?php

namespace RabbitCMS\Activities\Providers;

use RabbitCMS\Carrot\Providers\ModuleProvider as CarrotModuleProvider;

class ActivitiesServiceProvider extends CarrotModuleProvider
{
    protected function name()
    {
        return 'activities';
    }
    
    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot()
    {
        /*\BackendAcl::addAclResolver(
            function (BackendAcl $acl) {
                $acl->addGroup('system', trans('backend::acl.system.title'));
                $acl->addAcl('system', 'users.read', trans('backend::acl.users.read'));
                $acl->addAcl('system', 'users.write', trans('backend::acl.users.write'));
                $acl->addAcl('system', 'groups.read', trans('backend::acl.groups.read'));
                $acl->addAcl('system', 'groups.write', trans('backend::acl.groups.write'));
            }
        );

        \BackendMenu::addMenuResolver(
            function (BackendMenu $menu) {
                $menu->addItem(null, 'system', trans('backend::menu.system'), null, 'icon-settings', null, 100000);
                $menu->addItem('system', 'users', trans('backend::menu.users'), relative_route('backend.backend.users'), 'fa-angle-double-right', ['system.users.read'], 10);
                $menu->addItem('system', 'groups', trans('backend::menu.groups'), relative_route('backend.backend.groups'), 'fa-angle-double-right', ['system.groups.read'], 20);
            }
        );*/
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        parent::register();
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}