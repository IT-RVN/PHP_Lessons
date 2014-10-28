<?php
function Gradient($HexFrom, $HexTo, $ColorSteps)
{
$FromRGB['r'] = hexdec(substr($HexFrom, 0, 2));
$FromRGB['g'] = hexdec(substr($HexFrom, 2, 2));
$FromRGB['b'] = hexdec(substr($HexFrom, 4, 2));

$ToRGB['r'] = hexdec(substr($HexTo, 0, 2));
$ToRGB['g'] = hexdec(substr($HexTo, 2, 2));
$ToRGB['b'] = hexdec(substr($HexTo, 4, 2));

$StepRGB['r'] = ($FromRGB['r'] - $ToRGB['r']) / ($ColorSteps - 1);
$StepRGB['g'] = ($FromRGB['g'] - $ToRGB['g']) / ($ColorSteps - 1);
$StepRGB['b'] = ($FromRGB['b'] - $ToRGB['b']) / ($ColorSteps - 1);

$GradientColors = array();

for($i = 0; $i <= $ColorSteps; $i++)
{
$RGB['r'] = floor($FromRGB['r'] - ($StepRGB['r'] * $i));
$RGB['g'] = floor($FromRGB['g'] - ($StepRGB['g'] * $i));
$RGB['b'] = floor($FromRGB['b'] - ($StepRGB['b'] * $i));

$HexRGB['r'] = sprintf('%02x', ($RGB['r']));
$HexRGB['g'] = sprintf('%02x', ($RGB['g']));
$HexRGB['b'] = sprintf('%02x', ($RGB['b']));

$GradientColors[] = implode(NULL, $HexRGB);
}
return $GradientColors;
}

$Gradients = Gradient("FF5B5B", "FFCA5B", 50);
foreach($Gradients as $Gradient)
{
echo "<div style=\"background-color: #".$Gradient."; width: 100px; height: 25px;\"></div>";
}

$Gradients = Gradient("E50023", "EAF94D", 50);
foreach($Gradients as $Gradient)
{
    echo "<div style=\"background-color: #".$Gradient."; width: 100px; height: 25px;\"></div>";
}