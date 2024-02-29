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
            $string = \Piwik\Common::sanitizeInputValues($settings->message->getValue());
            if ( strlen( $string ) < 4 ) {
                $outString .= $string ;
            } else {
                $stringExplode = explode(" " , $string ) ;
                foreach ( $stringExplode as $part ) {
                    if(substr( $part , 0 , 8) == "https://") {
                        $outString .= '<a href="' . $part . '" target="_blank">' . $part . "</a> " ;
                    } else {
                        $outString .= $part . ' ' ;
                    }
                }
                unset($stringExplode);
                unset($part);
            }
            unset($string) ;


        }
    }
}