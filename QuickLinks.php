<?php  

namespace MiOrder\QuickLinks;

use Admin\Classes\BaseDashboardWidget;

class QuickLinks extends BaseDashboardWidget
  
{
  
    /**
     * @var string A unique alias to identify this widget.
     */
    protected $defaultAlias = 'quicklinks';

    public function render()
    {
        $this->prepareVars();

        return $this->partialPath('quicklinks');
    }

    public function defineProperties()
    {
        return [
            'title' => [
                'label' => 'test',
                'default' => 'test',
                'type' => 'text',
            ]
        ];
    }

    protected function prepareVars()
    {
        $user = AdminAuth::getUser();

    }

}
