<?php
class CycloneSlider_Plugin implements ArrayAccess {
    protected $contents;
    
    public function __construct() {
        $this->contents = array();
    }
    
    // ArrayAccess functions
    public function offsetSet($offset, $value) {
        $this->contents[$offset] = $value;
    }

    public function offsetExists($offset) {
        return isset($this->contents[$offset]);
    }

    public function offsetUnset($offset) {
        unset($this->contents[$offset]);
    }

    public function offsetGet($offset) {
        return isset($this->contents[$offset]) ? $this->contents[$offset] : null;
    }
    
    public function run(){ 
        // Loop on contents
        foreach($this->contents as $key=>$content){
            if( is_object($content) ){
                $reflection = new ReflectionClass($content);
                if($reflection->hasMethod('inject')){
                    $content->inject( $this ); // Inject our container
                }
                if($reflection->hasMethod('run')){
                    $content->run(); // Call run method on object
                }
            }
        }
    }
}