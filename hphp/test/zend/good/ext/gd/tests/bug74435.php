<?hh <<__EntryPoint>> function main(): void {
$im = imagecreatefromgif(__DIR__ . DIRECTORY_SEPARATOR . 'bug74435.gif');
var_dump($im);
$width = imagesx($im);
$height = imagesy($im);
for ($i = 0; $i < $width; $i += 16) {
    for ($j = 0; $j < $height; $j += 16) {
        if (($index = imagecolorat($im, $i, $j)) >= 2) {
            list($red, $green, $blue, $alpha) = array_values(imagecolorsforindex($im, $index));
            if ($red !== 0 || $green !== 0 || $blue !== 0 || $alpha !== 0) {
                echo "unexpected color at ($i, $j)\n";
            }
        }
    }
}
}
