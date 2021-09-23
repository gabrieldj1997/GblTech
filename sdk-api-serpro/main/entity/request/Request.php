<?

namespace org\gov\br\sdk\entity\request;


class Request
{
    public function iterate() {
        $tmp = array();
        foreach($this AS $index => $value) {
            $tmp[$index] = $value;
        }
        
        return $tmp;
    }
}