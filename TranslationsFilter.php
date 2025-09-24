<?php

namespace Piwik\Plugins\HidePasswordReset;


use Piwik\Translation\Loader\JsonFileLoader;

class TranslationsFilter extends JsonFileLoader
{
    private $logger;

    //Inject logger
    public function __construct(\Piwik\Log\LoggerInterface $logger) {
        $this->logger = $logger;
    }

    //Overwrite Translations loaders load function and blank Login_LostYourPassword so that it is not displayed.
    public function load($language, array $directories) {
        $translations = parent::load($language, $directories);

        //Silently fail if key not found.
        try{
            $translations["Login"]["LostYourPassword"] = "";   
        }
        catch(Exception $e){
            $this->logger->error('HidePasswordRest plugin. An error occurred while attempting to blank Login_LostYourPassword in translations', array('exception' => $e));
        }
                             
        return $translations;
    }
}