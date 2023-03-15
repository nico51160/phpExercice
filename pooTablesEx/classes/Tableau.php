<?php
class Tableau {
    private $caption;
    private $data;
    private $class;
    private $rowspan;
    private $colspan;

    const DEBUT_TABLE = '<table>';
    const FIN_TABLE   = '</table>';
    const DEBUT_TR    = '<tr>';
    const FIN_TR      = '</tr>';

    public function setCaption($legende) {
        $this->caption = $legende;
    }
    public function setEntete($data, $class='', $rowspan='', $colspan='') {
        $this->data    = $data;
        $this->class   = $class;
        $this->rowspan = $rowspan;
        $this->colspan = $colspan;
    }
    public function setDonnees($data, $class='', $rowspan='', $colspan='') {
        $this->data    = $data;
        $this->class   = $class;
        $this->rowspan = $rowspan;
        $this->colspan = $colspan;
    }
    
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