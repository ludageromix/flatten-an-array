    public function flatten($in)
    {
        $out=array();
        foreach ($in as $value) {
            if(!is_array($value)){
                $out[]=$value;
                }  else {
                $out=array_merge($out,$this->flatten($value));    
                }
        }
        
        return $out;
    }
