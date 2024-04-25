<?php
// Burger extension, https://github.com/GiovanniSalmeri/yellow-burger

class YellowBurger {
    const VERSION = "0.9.1";
    public $yellow;         // access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
        $this->yellow->language->setDefaults(array(
            "Language: en",
            "BurgerMenu: Menu",
            "Language: it",
            "BurgerMenu: Menù",
            "Language: es",
            "BurgerMenu: Menú",
            "Language: fr",
            "BurgerMenu: Menu",
            "Language: pt",
            "BurgerMenu: Menu",
            "Language: de",
            "BurgerMenu: Menü",
            "Language: nl",
            "BurgerMenu: Menu",
        ));
    }
    
    // Handle page extra data
    public function onParsePageExtra($page, $name) {
        $output = null;
        if ($name=="header") {
            $assetLocation = $this->yellow->system->get("coreServerBase").$this->yellow->system->get("coreAssetLocation");
            $output .= "<link rel=\"stylesheet\" type=\"text/css\" media=\"all\" href=\"{$assetLocation}burger.css\" />\n";
            $output .= "<link rel=\"stylesheet\" type=\"text/css\" media=\"all\" href=\"{$assetLocation}burger-mmenu-light.css\" />\n";
            $output .= "<script type=\"text/javascript\" defer=\"defer\" src=\"{$assetLocation}burger-mmenu-light.js\"></script>\n";
            $output .= "<script type=\"text/javascript\" defer=\"defer\" src=\"{$assetLocation}burger.js\"></script>\n";
            $output .= "<script type=\"text/javascript\" defer=\"defer\" src=\"{$assetLocation}burger-mmenu-light.polyfills.js\"></script>\n";
        }
        return $output;
    }
}
