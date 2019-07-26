function calculatePriceRanges($start = 0,$end = 250000,$step = 10000){
    $rows = $end/$step;

    $price_ranges = [];

    for($i = $start; $i <= $rows; $i++){
        if($i == 0){
            array_push($price_ranges,'0-'.($step-1));
        }else{
            array_push($price_ranges,($i*$step).'-'.(($i+1)*$step-1)); 
        } 
    }

    return $price_ranges;
}
