<?php

namespace Karudev\AppsBundle\Twig;

class KarudevExtension extends \Twig_Extension {

    public function __construct() {
        
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions() {
        return array(
            'is_numeric' => new \Twig_Function_Method($this, 'is_numeric'),
            'padLeft' => new \Twig_Function_Method($this, 'padLeft')
        );
    }

    public function is_numeric($value) {
        return is_numeric($value);
    }

    public function padLeft($value, $length) {

        if (strlen($value) < $length) {
          
            $pad = '';
            for ($i = 0; $i < $length-strlen($value) ;  $i++) {
                $pad .= '0';
            }
          
            return $pad.$value;
        }else{
            return $value;
        }
    }

    public function getName() {
        return 'karudev_extension';
    }

}

?>
