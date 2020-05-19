<?php
    $handle = fopen("monfich.csv", "r");  //permet d'aller chercher et ouvrir le fichier CSV en lecture seul
    $paire =true;
    $tabAffich ="";
    while($line = fgetcsv($handle))  // permet de récupérer une ligne CSV (et passe a la suivante)
    {
        if($paire)
        {
            $tabAffich.= '<tr class="paire">';
        }
        else
        {
            $tabAffich.= '<tr class="impaire">';
        }
        
        $tabAffich.= '<td class="titre">'.$line[0].'</td>';
        $tabAffich.= '<td class="desc">'.$line[1].'</td>';
        $tabAffich.= '<td class="date">'.substr($line[2],8,2).'/'.substr($line[2],5,2).'/'.substr($line[2],0,4).'</td>';
        if($line[3]=="1")
        {
            $tabAffich.= '<td class="prio">&uarr;&uarr;</td>';
        }
        elseif($line[3]=="2")
        {
            $tabAffich.= '<td class="prio">&uarr;</td>';
        }
        elseif($line[3]=="3")
        {
            $tabAffich.= '<td class="prio">&harr;</td>';
        }
        elseif($line[3]=="4")
        {
            $tabAffich.= '<td class="prio">&darr;</td>';
        
        }
        elseif($line[3]=="5")
        {
            $tabAffich.= '<td class="prio">&darr;&darr;</td>';
        }
        
        $tabAffich.= '</tr>';
        $paire=!$paire;
    }
    fclose($handle);
    
    $tabCss = [];
    array_push ($tabCss,'./css/table.css');
    array_push ($tabCss,'./css/navbar.css');
    
    $titlePage = "Affichage TODO";
    
    include './afficheTodo.phtml';
?>