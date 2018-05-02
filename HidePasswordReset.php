<?php
/**
 * Piwik - free/libre analytics platform
 *
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 */

namespace Piwik\Plugins\HidePasswordReset;

class HidePasswordReset extends \Piwik\Plugin
{
	public function registerEvents()
    {
        return array(
            'Template.loginNav' => 'commentOutElement',
			'Template.loginNav' => 'commentOutElement',
        );
    }
	
	public function commentOutElement(&$outString,$area){
		if($area === "top"){
			$outString = "<!--";
		}else if($area === "bottom"){
			$outString = "-->";
			
			$settings = new SystemSettings();
			$outString .= Common::sanitizeString($settings->message->getValue());
		}
	}
}
