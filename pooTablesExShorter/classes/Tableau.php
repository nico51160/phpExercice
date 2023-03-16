<?php
class Tableau {
    private $caption;

    private $entete;
    private $donnees

    const DEBUT_TABLE = '<table>';
    const FIN_TABLE   = '</table>';
    const DEBUT_TR    = '<tr>';
    const FIN_TR      = '</tr>';

    public function setCaption($legende) {
        $this->caption = $legende;
    }
    public function setEntete($data, $tr='', $class='', $rowspan='', $colspan='') {
        if(($tr == 1) || ($tr == 3)) { $trD ='<tr>'; } else { $trD = ''; }
        if(($tr == 2) || ($tr == 3)) { $trF ='</tr>';} else { $trF = ''; }
        $this->entete = $trD.'<th class="'.$class.'" colspan="'.$colspan.'"
        rowspan="'.$rowspan.'">'.$data.'</th>'.$trF;
    }
    public function setDonnees($data, $tr='', $class='', $rowspan='', $colspan='') {
        if(($tr == 1) || ($tr == 3)) { $trD ='<tr>'; } else { $trD = ''; }
        if(($tr == 2) || ($tr == 3)) { $trF ='</tr>';} else { $trF = ''; }
        $this->donnees = $trD.'<th class="'.$class.'" colspan="'.$colspan.'"
        rowspan="'.$rowspan.'">'.$data.'</th>'.$trF;
    
    public function getCaption() {
        $caption = '<caption>'.$this->caption.'</caption>';
        return $caption;
    }
    public function getEntete() {
        $entete = '<th class="'.$this->class.'" colspan="'.$this->colspan.'"
         rowspan="'.$this->rowspan.'">'.$this->data.'</th>';
        return $entete;
    }
    public function getDonnees() {
        $donnees = '<td class="'.$this->class.'" colspan="'.$this->colspan.'" 
        rowspan="'.$this->rowspan.'">'.$this->data.'</td>';
        return $donnees;
    }

}