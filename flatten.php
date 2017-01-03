    public function flatten($in)
    {
        $out=array();
        foreach ($in as $value) {
            if(!is_array($value)){
                $out[]=$value;
                }  else {
                $out=array_merge($out,flatten($value));    
                }
        }
        
        return $out;
    }
