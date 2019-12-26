<?php 
@ini_set('output_buffering',0);
$dasar = '0812';
function GeneRate($qtd){ 
$karakter = mt_rand(100,999);
$tykung = strlen($karakter); 
$tykung--; 
$Hash=NULL; 
    for($x=0;$x<=$qtd;$x++){ 
        $Posicao = rand(0,$tykung); 
        $Hash .= substr($karakter,$Posicao,1); 
    } 
return $Hash; 
} 
print "EXTRAP GENERATOR\n";
print "Author: Rzqmln\n";
print "Suport By : AnonCyberTeam || Indosec\n";
print "\n";
echo "$dasar"; echo GeneRate(7);
print "\n";
echo "$dasar"; echo GeneRate(7);
print "\n";
echo "$dasar"; echo GeneRate(7);
print "\n";
echo "$dasar"; echo GeneRate(7);
print "\n";
echo "$dasar"; echo GeneRate(7);
print "\n";
echo "$dasar"; echo GeneRate(7);
print "\n";
echo "$dasar"; echo GeneRate(7);
print "\n";
echo "$dasar"; echo GeneRate(7);
print "\n";
echo "$dasar"; echo GeneRate(7);
print "\n";
print "\n";
