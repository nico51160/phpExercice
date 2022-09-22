<?php
function Capitale($pays) {
    switch($pays) {
        case 'france':
            $capital = 'paris';
            break;
        case 'allemagne': 
            $capital ='berlin';
            break;
        case 'italie': 
            $capital ='romes';
            break;
        case 'espagne': 
            $capital ='madrid';
            break;
        case 'suisse': 
            $capital ='berne';
            break;
            
        default: 
            $capital = 0;
         
        }
    
        return ($capital);
}