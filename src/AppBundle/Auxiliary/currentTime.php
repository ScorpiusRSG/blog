<?php

namespace AppBundle\Auxiliary;

class currentTime
{
    
    public function __construct()
    {
        $this->differenceInTime=3;
        $this->date=date('Y-m-d')." ".(date('H')+$this->differenceInTime).":".date('i:s');
    }
    
    public function currentTime()
    {
        return $this->date;
    }
    
    public function timeSettings()
    {
        if ($this->differenceInTime=3)
            $this->season="summer time";
        else 
            $this->season="winter time";
        echo "difference - ".$this->differenceInTime." season - ".$this->season;
    }
    

}
?>