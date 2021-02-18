<?php
foreach (range(1, 9, 2) as $number) {
echo "$number ";
}
var_dump(range(1,10));
function xrange($start, $end, $step)
{
    if($start < $end) {
        if($step < 0) {
            throw new Exception("step must dayu 0");
        }
        for($i = $start;$i <= $end;$i +=$step) {
            yield $i;
        }
    }
    if($start > $end) {
        if($step > 0) {
            throw new Exception("step must xiaoyu 0");
        }
        for($i = $start;$i >= $end;$i += $step) {
            yield $i;
        }
    }

}
var_dump(xrange(1,10));