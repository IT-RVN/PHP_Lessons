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

$Gradients = Gradient("FF5B5B", "FFCA5B", 100);
foreach($Gradients as $Gradient)
{
    echo "<div style=\"background-color: #".$Gradient."; width: 1px; height: 50px; float: left;\"></div>";
}
echo "<div style=\"background-color: white; width: 1px; height: 50px; float: left;\"></div>";

$Gradients = Gradient("FFCA5B", "EAF94D", 100);
foreach($Gradients as $Gradient)
{
    echo "<div style=\"background-color: #".$Gradient."; width: 1px; height: 50px; float: left\"></div>";
}
echo "<div style=\"background-color: white; width: 1px; height: 50px; float: left;\"></div>";

$Gradients = Gradient("EAF94D", "CEBAFF", 100);
foreach($Gradients as $Gradient)
{
    echo "<div style=\"background-color: #".$Gradient."; width: 1px; height: 50px; float: left\"></div>";
}
echo "<div style=\"background-color: white; width: 1px; height: 50px; float: left;\"></div>";

$Gradients = Gradient("CEBAFF", "77FF3D", 100);
foreach($Gradients as $Gradient)
{
    echo "<div style=\"background-color: #".$Gradient."; width: 1px; height: 50px; float: left\"></div>";
}
echo "<div style=\"background-color: white; width: 1px; height: 50px; float: left;\"></div>";

$Gradients = Gradient("77FF3D", "FF5271", 100);
foreach($Gradients as $Gradient)
{
    echo "<div style=\"background-color: #".$Gradient."; width: 1px; height: 50px; float: left\"></div>";
}
echo "<div style=\"background-color: white; width: 1px; height: 50px; float: left;\"></div>";

$Gradients = Gradient("FF5271", "FFEBEB", 100);
foreach($Gradients as $Gradient)
{
    echo "<div style=\"background-color: #".$Gradient."; width: 1px; height: 50px; float: left\"></div>";
}
echo "<div style=\"background-color: white; width: 1px; height: 50px; float: left;\"></div>";

$Gradients = Gradient("FFEBEB", "4797FF", 100);
foreach($Gradients as $Gradient)
{
    echo "<div style=\"background-color: #".$Gradient."; width: 1px; height: 50px; float: left\"></div>";
}
echo "<div style=\"background-color: white; width: 1px; height: 50px; float: left;\"></div>";

$Gradients = Gradient("4797FF", "737373", 100);
foreach($Gradients as $Gradient)
{
    echo "<div style=\"background-color: #".$Gradient."; width: 1px; height: 50px; float: left\"></div>";
}
echo "<div style=\"background-color: white; width: 1px; height: 50px; float: left;\"></div>";

$Gradients = Gradient("737373", "000000", 100);
foreach($Gradients as $Gradient)
{
    echo "<div style=\"background-color: #".$Gradient."; width: 1px; height: 50px; float: left\"></div>";
}