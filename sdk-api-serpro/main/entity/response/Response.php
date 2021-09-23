<?

namespace org\gov\br\sdk\entity\response;

class Response{
    public function cast(\stdClass $object){
        foreach($object as $index => $value){
            $this->$index = $value;
        }

        return $this;
    }

    public function iterate(){
        $temp = array();
        foreach ($this as $key => $value) {
            $tmp[$key] = $value;
        }
        
        return $tmp;
    }
}