<?php
// Burger extension, https://github.com/GiovanniSalmeri/yellow-burger

class YellowBurger {
    const VERSION = "0.8.16";
    public $yellow;         // access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
        $this->yellow->language->setDefaults([
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
        ]);
    }
    
    // Handle page extra data
    public function onParsePageExtra($page, $name) {
        $output = null;
        if ($name=="header") {
            $extensionLocation = $this->yellow->system->get("coreServerBase").$this->yellow->system->get("coreExtensionLocation");
            $output .= "<link rel=\"stylesheet\" type=\"text/css\" media=\"all\" href=\"{$extensionLocation}burger.css\" />\n";
            $output .= "<link rel=\"stylesheet\" type=\"text/css\" media=\"all\" href=\"{$extensionLocation}burger-mmenu-light.css\" />\n";
            $output .= "<script type=\"text/javascript\" defer=\"defer\" src=\"{$extensionLocation}burger-mmenu-light.js\"></script>\n";
            $output .= "<script type=\"text/javascript\" defer=\"defer\" src=\"{$extensionLocation}burger.js\"></script>\n";
            $output .= "<script type=\"text/javascript\" defer=\"defer\" src=\"{$extensionLocation}burger-mmenu-light.polyfills.js\"></script>\n";
        }
        return $output;
    }
}
