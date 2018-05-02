<?php
/**
 * Piwik - free/libre analytics platform
 *
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 */

namespace Piwik\Plugins\HidePasswordReset;

use Piwik\Settings\Setting;
use Piwik\Settings\FieldConfig;

class SystemSettings extends \Piwik\Settings\Plugin\SystemSettings
{
    /** @var Setting */
    public $message;

    protected function init()
    {
 
        $this->message = $this->createMessageSetting();

    }

    private function createMessageSetting()
    {
        $default = "";

        return $this->makeSetting('message', $default, FieldConfig::TYPE_STRING, function (FieldConfig $field) {
            $field->title = 'Login Message';
            $field->uiControl = FieldConfig::UI_CONTROL_TEXTAREA;
            $field->description = 'Message to display in lieu of "Lost your password?"';
        });
    }
   
}
