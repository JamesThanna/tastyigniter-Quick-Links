<?php namespace MiOrder\QuickLinks;

use System\Classes\BaseExtension;
use MiOrder\QuickLinks\QuickLinks;
use Admin\Classes\Widgets;
//use Admin\Classes\BaseDashboardWidget;
/**
 * QuickLinks Extension Information File
 */
class Extension extends BaseExtension
{
  
    /**
     * Returns information about this extension.
     *
     * @return array
     */
    public function extensionMeta()
    {
        return [
            'name'        => 'QuickLinks',
            'author'      => 'MiOrder',
            'description' => 'No description provided yet...',
            'icon'        => 'fa-plug',
            'version'     => '1.0.0'
        ];
    }
  

  public function registerDashboardWidgets() {

    $myWidget = new QuickLinks($this);
    $myWidget->alias = 'QuickLinks';
    $myWidget->bindToController();
}
     

    
       
    /**
     }
    /**
     * Register method, called when the extension is first registered.
     *
     * @return void
     */
    public function register()
    {

    }
  

    /**
     * Boot method, called right before the request route.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this extension.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
// Remove this line and uncomment the line below to activate
//            'MiOrder\QuickLinks\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any admin permissions used by this extension.
     *
     * @return array
     */
    public function registerPermissions()
    {
// Remove this line and uncomment block to activate
        return [
//            'Miorder.QuickLinks.SomePermission' => [
//                'description' => 'Some permission',
//                'group' => 'module',
//            ],
        ];
    }
}
