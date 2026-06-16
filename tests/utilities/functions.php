

<?php

function create($class,$attr = [],$times = null){
    return $class::factory()->count($times)->create($attr);
}


function make($class,$attr = [],$times=null){
    return $class::factory()->count($times)->make($attr);
}

