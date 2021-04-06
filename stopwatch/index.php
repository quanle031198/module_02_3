<?php

class StopWatch
{
    private float $startTime;
    private float $endTime;

    public function getStartTime()
    {
        return $this->startTime;
    }

    public function getEndTime()
    {
        return $this->endTime;
    }

    public function start()
    {
        $this->startTime = microtime(true);
    }

    public function stop()
    {
        $this->endTime = microtime(true);
    }

    public function getElapsedTime()
    {
        return $this->endTime - $this->startTime;
    }
}

$time = new StopWatch();
$array = [];
for($i=0;$i<100;$i++){
    $array[] = rand(1, 10000);
}
$time->start();
for ($i = 0; $i < count($array); $i++) {
    for ($j = $i + 1; $j < count($array); $j++) {
        if ($array[$j] < $array[$i]) {
            $min = $array[$j];
            $array[$j] = $array[$i];
            $array[$i] = $min;
        }
    }
}
$time->stop();
echo "So mili giay troi qua: ".$time->getElapsedTime();
?>
