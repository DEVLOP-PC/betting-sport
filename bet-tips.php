<?php

/**********************************************************
 *
 * http://info.365planetwinall.net/index.php?lang=3&sid=179
 *
 *
 *
 * */


function checkBetFromScore($htScore, $ftScore, $bettip){
    $_htScore = explode('-', trim($htScore));
    $_ftScore = explode('-', trim($ftScore));
    $htScoreHome = $_htScore[0];
    $htScoreAway = $_htScore[1];
    $ftScoreHome = $_ftScore[0];
    $ftScoreAway = $_ftScore[1];
    $htScoreHome2nd = intval($ftScoreHome) - intval($htScoreHome);
    $htScoreAway2nd = intval($ftScoreAway) - intval($htScoreAway);

    // En cas d'erreur dans la correction, le score du deuxième mi-temps sera 0 si la difference est négatif
    if($htScoreHome2nd < 0) $htScoreHome2nd = 0;
    if($htScoreAway2nd < 0) $htScoreAway2nd = 0;

    // Score 2ème mi-temps
    $htScore2nd = $htScoreHome2nd .'-'.$htScoreAway2nd;

    // la somme des Buts :
    $totalButs = intval($ftScoreHome) + intval($ftScoreAway);
    $totalButsHt = intval($htScoreHome) + intval($htScoreAway);
    $totalButsHt2nd = intval($htScoreHome2nd) + intval($htScoreAway2nd);

    // NG && GG check
    $ng = (intval($ftScoreHome) == 0 || intval($ftScoreAway) == 0);
    $gg = (intval($ftScoreHome) > 0 && intval($ftScoreAway) > 0);
    $ng1 = (intval($htScoreHome) == 0 || intval($htScoreAway) == 0);
    $gg1 = (intval($htScoreHome) > 0 && intval($htScoreAway) > 0);
    $ng2 = (intval($htScoreHome2nd) == 0 || intval($htScoreAway2nd) == 0);
    $gg2 = (intval($htScoreHome2nd) > 0 && intval($htScoreAway2nd) > 0);

    $return = array();

    switch(trim($bettip)){

        //1X2
        case '1' :
            if($ftScoreHome > $ftScoreAway){
                $return['won'] = TRUE;
            }else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '2' :
            if($ftScoreHome < $ftScoreAway){
                $return['won'] = TRUE;
            }else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case 'X' :
            if($ftScoreHome == $ftScoreAway){
                $return['won'] = TRUE;
            }else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;

        //DC
        case '1XDC' :
            if( ($ftScoreHome > $ftScoreAway) || ($ftScoreHome == $ftScoreAway) ){
                $return['won'] = TRUE;
            }else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '12DC' :
            if( ($ftScoreHome > $ftScoreAway) || ($ftScoreHome < $ftScoreAway) ){
                $return['won'] = TRUE;
            }else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case 'X2DC' :
            if( ($ftScoreHome == $ftScoreAway) || ($ftScoreHome < $ftScoreAway) ){
                $return['won'] = TRUE;
            }else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case 'X2DC' :
            if( ($ftScoreHome == $ftScoreAway) || ($ftScoreHome < $ftScoreAway) ){
                $return['won'] = TRUE;
            }else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;

        //O/U 0.5 -> 5.5
        case 'Plus 0.5' : case 'Over 0.5' :
            if( $totalButs >= 1 ){
                $return['won'] = TRUE;
            }else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case 'Moins 0.5' : case 'Under 0.5' :
            if( $totalButs == 0 ){
                $return['won'] = TRUE;
            }else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case 'Plus 1.5' : case 'Over 1.5' :
            if( $totalButs >= 2 ){
                $return['won'] = TRUE;
            }else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case 'Moins 1.5' : case 'Under 1.5' :
            if( $totalButs < 2 ){
                $return['won'] = TRUE;
            }else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case 'Plus 2.5' : case 'Over 2.5' :
            if( $totalButs >= 3 ){
                $return['won'] = TRUE;
            }else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case 'Moins 2.5' : case 'Under 2.5' :
            if( $totalButs < 3 ){
                $return['won'] = TRUE;
            }else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case 'Plus 3.5' : case 'Over 3.5' :
            if( $totalButs >= 4 ){
                $return['won'] = TRUE;
            }else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case 'Moins 3.5' : case 'Under 3.5' :
            if( $totalButs < 4 ){
                $return['won'] = TRUE;
            }else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case 'Plus 4.5' : case 'Over 4.5' :
            if( $totalButs >= 5 ){
                $return['won'] = TRUE;
            }else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case 'Moins 4.5' : case 'Under 4.5' :
            if( $totalButs < 5 ){
                $return['won'] = TRUE;
            }else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case 'Plus 5.5' : case 'Over 5.5' :
            if( $totalButs >= 6 ){
                $return['won'] = TRUE;
            }else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case 'Moins 5.5' : case 'Under 5.5' :
            if( $totalButs < 6 ){
                $return['won'] = TRUE;
            }else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;

        // GG/NG
        case 'GG' :
            if( $gg ){
                $return['won'] = TRUE;
            }else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case 'NG' :
            if( $ng ){
                $return['won'] = TRUE;
            }else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;

        // DNB
        case '1 DNB':
            if($ftScoreHome > $ftScoreAway){
                $return['won'] = TRUE;
            }elseif($ftScoreHome == $ftScoreAway){
                $return['won'] = 'void';
            }else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '2 DNB' :
            if($ftScoreHome < $ftScoreAway){
                $return['won'] = TRUE;
            }elseif($ftScoreHome == $ftScoreAway){
                $return['won'] = 'void';
            }else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;

        //GG/NG 1HT
        case 'GG 1HT' :
            if( $gg1 ){
                $return['won'] = TRUE;
            }else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore;
            break;
        case 'NG 1HT' :
            if( $ng1 ){
                $return['won'] = TRUE;
            }else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore;
            break;

        // GG/NG 2HT
        case 'GG 2HT' :
            if( $gg2 ){
                $return['won'] = TRUE;
            }else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore2nd;
            break;
        case 'NG 2HT' :
            if( $ng2 ){
                $return['won'] = TRUE;
            }else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore2nd;
            break;

        // GG/NG 1&2H
        case 'GG&GG Yes':
            if( $gg1 && $gg2 ){
                $return['won'] = TRUE;
            }else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore.'/'.$htScore2nd;
            break;
        case 'GG&NG Yes':
            if( $gg1 && $ng2 ){
                $return['won'] = TRUE;
            }else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore.'/'.$htScore2nd;
            break;

        case 'NG&GG Yes':
            if( $ng1 && $gg2 ){
                $return['won'] = TRUE;
            }else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore.'/'.$htScore2nd;
            break;
        case 'NG&NG Yes':
            if( $ng1 && $ng2 ){
                $return['won'] = TRUE;
            }else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore.'/'.$htScore2nd;
            break;
        case 'GG&GG No':
            if( !$gg1 && !$gg2 ){
                $return['won'] = TRUE;
            }else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore.'/'.$htScore2nd;
            break;
        case 'GG&NG No':
            if( !$gg1 && !$ng2 ){
                $return['won'] = TRUE;
            }else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore.'/'.$htScore2nd;
            break;

        case 'NG&GG No':
            if( !$ng1 && !$gg2){
                $return['won'] = TRUE;
            }else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore.'/'.$htScore2nd;
            break;
        case 'NG&NG No':
            if( !$ng1 && !$ng2 ){
                $return['won'] = TRUE;
            }else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore.'/'.$htScore2nd;
            break;

        // Handicap
        case '1H (0:1)':
            if(intval($ftScoreHome) - intval($ftScoreAway) >= 2 ){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case 'XH (0:1)':
            if(intval($ftScoreHome) - intval($ftScoreAway) == 1 ){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '2H (0:1)':
            if(intval($ftScoreHome) - intval($ftScoreAway) >= 1 ){
                $return['won'] = FALSE;
            }
            else{
                $return['won'] = TRUE;
            }
            $return['result'] = $ftScore;
            break;
        case '1H (0:2)':
            if(intval($ftScoreHome) - intval($ftScoreAway) >= 3 ){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case 'XH (0:2)':
            if(intval($ftScoreHome) - intval($ftScoreAway) == 2 ){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '2H (0:2)':
            if(intval($ftScoreHome) - intval($ftScoreAway) >= 2 ){
                $return['won'] = FALSE;
            }
            else{
                $return['won'] = TRUE;
            }
            $return['result'] = $ftScore;
            break;
        case '1H (0:3)':
            if(intval($ftScoreHome) - intval($ftScoreAway) >= 4 ){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case 'XH (0:3)':
            if(intval($ftScoreHome) - intval($ftScoreAway) == 3 ){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '2H (0:3)':
            if(intval($ftScoreHome) - intval($ftScoreAway) >= 3 ){
                $return['won'] = FALSE;
            }
            else{
                $return['won'] = TRUE;
            }
            $return['result'] = $ftScore;
            break;
        case '1H (1:0)':
            if(intval($ftScoreAway) - intval($ftScoreHome) < 1 ){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case 'XH (1:0)':
            if(intval($ftScoreAway) - intval($ftScoreHome) == 1 ){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '2H (1:0)':
            if(intval($ftScoreAway) - intval($ftScoreHome) > 1 ){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '1H (2:0)':
            if(intval($ftScoreAway) - intval($ftScoreHome) < 2 ){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case 'XH (2:0)':
            if(intval($ftScoreAway) - intval($ftScoreHome) == 2 ){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '2H (2:0)':
            if(intval($ftScoreAway) - intval($ftScoreHome) > 2 ){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '1H (3:0)':
            if(intval($ftScoreAway) - intval($ftScoreHome) < 3 ){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case 'XH (3:0)':
            if(intval($ftScoreAway) - intval($ftScoreHome) == 3 ){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '2H (3:0)':
            if(intval($ftScoreAway) - intval($ftScoreHome) > 3 ){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;

        // HT/FT
        case 'HF 1/1':
            if( (intval($htScoreHome) - intval($htScoreAway) > 0) && intval($ftScoreHome) > intval($ftScoreAway)){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore.'/'.$ftScore;
            break;
        case 'HF 1/X':
            if( (intval($htScoreHome) - intval($htScoreAway) > 0) && intval($ftScoreHome) == intval($ftScoreAway)){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore.'/'.$ftScore;
            break;
        case 'HF 1/2':
            if( (intval($htScoreHome) - intval($htScoreAway) > 0) && intval($ftScoreHome) < intval($ftScoreAway)){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore.'/'.$ftScore;
            break;
        case 'HF X/1':
            if( (intval($htScoreHome) - intval($htScoreAway) == 0) && intval($ftScoreHome) > intval($ftScoreAway)){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore.'/'.$ftScore;
            break;
        case 'HF X/X':
            if( (intval($htScoreHome) - intval($htScoreAway) == 0) && intval($ftScoreHome) == intval($ftScoreAway)){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore.'/'.$ftScore;
            break;
        case 'HF X/2':
            if( (intval($htScoreHome) - intval($htScoreAway) == 0) && intval($ftScoreHome) < intval($ftScoreAway)){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore.'/'.$ftScore;
            break;
        case 'HF 2/1':
            if( (intval($htScoreHome) - intval($htScoreAway) < 0) && intval($ftScoreHome) > intval($ftScoreAway)){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore.'/'.$ftScore;
            break;
        case 'HF 2/X':
            if( (intval($htScoreHome) - intval($htScoreAway) < 0) && intval($ftScoreHome) == intval($ftScoreAway)){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore.'/'.$ftScore;
            break;
        case 'HF 2/2':
            if( (intval($htScoreHome) - intval($htScoreAway) < 0) && intval($ftScoreHome) < intval($ftScoreAway)){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore.'/'.$ftScore;
            break;

        // HTFT Spec
        case 'HF 1X/1X':
            if( (intval($htScoreHome) - intval($htScoreAway) >= 0) && intval($ftScoreHome) >= intval($ftScoreAway)){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore.'/'.$ftScore;
            break;
        case 'HF 1X/12':
            if( (intval($htScoreHome) - intval($htScoreAway) >= 0) && intval($ftScoreHome) != intval($ftScoreAway)){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore.'/'.$ftScore;
            break;
        case 'HF 1X/X2':
            if( (intval($htScoreHome) - intval($htScoreAway) >= 0) && intval($ftScoreHome) <= intval($ftScoreAway)){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore.'/'.$ftScore;
            break;
        case 'HF 12/1X':
            if( (intval($htScoreHome) - intval($htScoreAway) != 0) && intval($ftScoreHome) >= intval($ftScoreAway)){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore.'/'.$ftScore;
            break;
        case 'HF 12/12':
            if( (intval($htScoreHome) - intval($htScoreAway) != 0) && intval($ftScoreHome) != intval($ftScoreAway)){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore.'/'.$ftScore;
            break;
        case 'HF 12/X2':
            if( (intval($htScoreHome) - intval($htScoreAway) != 0) && intval($ftScoreHome) <= intval($ftScoreAway)){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore.'/'.$ftScore;
            break;
        case 'HF X2/1X':
            if( (intval($htScoreHome) - intval($htScoreAway) <= 0) && intval($ftScoreHome) >= intval($ftScoreAway)){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore.'/'.$ftScore;
            break;
        case 'HF X2/12':
            if( (intval($htScoreHome) - intval($htScoreAway) <= 0) && intval($ftScoreHome) != intval($ftScoreAway)){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore.'/'.$ftScore;
            break;
        case 'HF X2/X2':
            if( (intval($htScoreHome) - intval($htScoreAway) <= 0) && intval($ftScoreHome) <= intval($ftScoreAway)){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore.'/'.$ftScore;
            break;
        case 'HF 1/1X':
            if( (intval($htScoreHome) - intval($htScoreAway) > 0) && intval($ftScoreHome) >= intval($ftScoreAway)){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore.'/'.$ftScore;
            break;
        case 'HF 1/12':
            if( (intval($htScoreHome) - intval($htScoreAway) > 0) && intval($ftScoreHome) != intval($ftScoreAway)){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore.'/'.$ftScore;
            break;
        case 'HF 1/X2':
            if( (intval($htScoreHome) - intval($htScoreAway) > 0) && intval($ftScoreHome) <= intval($ftScoreAway)){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore.'/'.$ftScore;
            break;
        case 'HF X/1X':
            if( (intval($htScoreHome) - intval($htScoreAway) == 0) && intval($ftScoreHome) >= intval($ftScoreAway)){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore.'/'.$ftScore;
            break;
        case 'HF X/12':
            if( (intval($htScoreHome) - intval($htScoreAway) == 0) && intval($ftScoreHome) != intval($ftScoreAway)){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore.'/'.$ftScore;
            break;
        case 'HF X/X2':
            if( (intval($htScoreHome) - intval($htScoreAway) == 0) && intval($ftScoreHome) <= intval($ftScoreAway)){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore.'/'.$ftScore;
            break;
        case 'HF 2/1X':
            if( (intval($htScoreHome) - intval($htScoreAway) < 0) && intval($ftScoreHome) >= intval($ftScoreAway)){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore.'/'.$ftScore;
            break;
        case 'HF 2/12':
            if( (intval($htScoreHome) - intval($htScoreAway) < 0) && intval($ftScoreHome) != intval($ftScoreAway)){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore.'/'.$ftScore;
            break;
        case 'HF 2/X2':
            if( (intval($htScoreHome) - intval($htScoreAway) < 0) && intval($ftScoreHome) <= intval($ftScoreAway)){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore.'/'.$ftScore;
            break;
        case 'HF 1X/1':
            if( (intval($htScoreHome) - intval($htScoreAway) >= 0) && intval($ftScoreHome) > intval($ftScoreAway)){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore.'/'.$ftScore;
            break;
        case 'HF 1X/X':
            if( (intval($htScoreHome) - intval($htScoreAway) >= 0) && intval($ftScoreHome) == intval($ftScoreAway)){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore.'/'.$ftScore;
            break;
        case 'HF 1X/2':
            if( (intval($htScoreHome) - intval($htScoreAway) >= 0) && intval($ftScoreHome) < intval($ftScoreAway)){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore.'/'.$ftScore;
            break;
        case 'HF 12/1':
            if( (intval($htScoreHome) - intval($htScoreAway) != 0) && intval($ftScoreHome) > intval($ftScoreAway)){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore.'/'.$ftScore;
            break;
        case 'HF 12/X':
            if( (intval($htScoreHome) - intval($htScoreAway) != 0) && intval($ftScoreHome) == intval($ftScoreAway)){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore.'/'.$ftScore;
            break;
        case 'HF 12/2':
            if( (intval($htScoreHome) - intval($htScoreAway) != 0) && intval($ftScoreHome) < intval($ftScoreAway)){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore.'/'.$ftScore;
            break;
        case 'HF X2/1':
            if( (intval($htScoreHome) - intval($htScoreAway) <= 0) && intval($ftScoreHome) > intval($ftScoreAway)){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore.'/'.$ftScore;
            break;
        case 'HF X2/X':
            if( (intval($htScoreHome) - intval($htScoreAway) <= 0) && intval($ftScoreHome) == intval($ftScoreAway)){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore.'/'.$ftScore;
            break;
        case 'HF X2/2':
            if( (intval($htScoreHome) - intval($htScoreAway) <= 0) && intval($ftScoreHome) < intval($ftScoreAway)){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore.'/'.$ftScore;
            break;

        // C. Score
        case '1:0':
            if(intval($ftScoreHome) == 1 && intval($ftScoreAway) == 0){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '2:0':
            if(intval($ftScoreHome) == 2 && intval($ftScoreAway) == 0){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '2:1':
            if(intval($ftScoreHome) == 2 && intval($ftScoreAway) == 1){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '3:0':
            if(intval($ftScoreHome) == 3 && intval($ftScoreAway) == 0){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '3:1':
            if(intval($ftScoreHome) == 3 && intval($ftScoreAway) == 1){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '3:2':
            if(intval($ftScoreHome) == 3 && intval($ftScoreAway) == 2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '4:0':
            if(intval($ftScoreHome) == 4 && intval($ftScoreAway) == 0){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '4:1':
            if(intval($ftScoreHome) == 4 && intval($ftScoreAway) == 1){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '4:2':
            if(intval($ftScoreHome) == 4 && intval($ftScoreAway) == 2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '4:3':
            if(intval($ftScoreHome) == 4 && intval($ftScoreAway) == 3){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '0:1':
            if(intval($ftScoreHome) == 0 && intval($ftScoreAway) == 1){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '0:2':
            if(intval($ftScoreHome) == 0 && intval($ftScoreAway) == 2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '1:2':
            if(intval($ftScoreHome) == 1 && intval($ftScoreAway) == 2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '0:3':
            if(intval($ftScoreHome) == 0 && intval($ftScoreAway) == 3){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '1:3':
            if(intval($ftScoreHome) == 1 && intval($ftScoreAway) == 3){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '2:3':
            if(intval($ftScoreHome) == 2 && intval($ftScoreAway) == 3){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '0:4':
            if(intval($ftScoreHome) == 0 && intval($ftScoreAway) == 4){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '1:4':
            if(intval($ftScoreHome) == 1 && intval($ftScoreAway) == 4){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '2:4':
            if(intval($ftScoreHome) == 2 && intval($ftScoreAway) == 4){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '3:4':
            if(intval($ftScoreHome) == 3 && intval($ftScoreAway) == 4){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '0:0': case 'X&NG':
            if(intval($ftScoreHome) == 0 && intval($ftScoreAway) == 0){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '1:1': case 'GG&2-':
            if(intval($ftScoreHome) == 1 && intval($ftScoreAway) == 1){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '2:2':
            if(intval($ftScoreHome) == 2 && intval($ftScoreAway) == 2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '3:3':
            if(intval($ftScoreHome) == 3 && intval($ftScoreAway) == 3){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '4:4':
            if(intval($ftScoreHome) == 4 && intval($ftScoreAway) == 4){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case 'Other':
            if(intval($ftScoreHome) > 4 || intval($ftScoreAway) > 4){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;

        // C.Score 1H
        case '0:0 1H': case 'X&NG 1H' :
            if(intval($htScoreHome) == 0 && intval($htScoreAway) == 0){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore;
            break;
        case '1:1 1H':
            if(intval($htScoreHome) == 1 && intval($htScoreAway) == 1){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore;
            break;
        case '2:2 1H':
            if(intval($htScoreHome) == 2 && intval($htScoreAway) == 2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore;
            break;
        case '1:0 1H':
            if(intval($htScoreHome) == 1 && intval($htScoreAway) == 0){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore;
            break;
        case '2:0 1H':
            if(intval($htScoreHome) == 2 && intval($htScoreAway) == 0){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore;
            break;
        case '2:1 1H':
            if(intval($htScoreHome) == 2 && intval($htScoreAway) == 1){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore;
            break;
        case '0:1 1H':
            if(intval($htScoreHome) == 0 && intval($htScoreAway) == 1){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore;
            break;
        case '0:2 1H':
            if(intval($htScoreHome) == 0 && intval($htScoreAway) == 2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore;
            break;
        case '1:2 1H':
            if(intval($htScoreHome) == 1 && intval($htScoreAway) == 2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore;
            break;
        case 'Oth 1H':
            if(intval($htScoreHome) > 2 || intval($htScoreAway) > 2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore;
            break;

        // C.Score 2H
        case '0:0 2H': case 'X&NG 2H':
            if(intval($htScoreHome2nd) == 0 && intval($htScoreAway2nd) == 0){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore2nd;
            break;
        case '1:1 2H':
            if(intval($htScoreHome2nd) == 1 && intval($htScoreAway2nd) == 1){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore2nd;
            break;
        case '2:2 2H':
            if(intval($htScoreHome2nd) == 2 && intval($htScoreAway2nd) == 2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore2nd;
            break;
        case '1:0 2H':
            if(intval($htScoreHome2nd) == 1 && intval($htScoreAway2nd) == 0){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore2nd;
            break;
        case '2:0 2H':
            if(intval($htScoreHome2nd) == 2 && intval($htScoreAway2nd) == 0){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore2nd;
            break;
        case '2:1 2H':
            if(intval($htScoreHome2nd) == 2 && intval($htScoreAway2nd) == 1){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore2nd;
            break;
        case '0:1 2H':
            if(intval($htScoreHome2nd) == 0 && intval($htScoreAway2nd) == 1){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore2nd;
            break;
        case '0:2 2H':
            if(intval($htScoreHome2nd) == 0 && intval($htScoreAway2nd) == 2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore2nd;
            break;
        case '1:2 2H':
            if(intval($htScoreHome2nd) == 1 && intval($htScoreAway2nd) == 2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore2nd;
            break;
        case 'Oth 2H':
            if(intval($htScoreHome2nd) > 2 || intval($htScoreAway2nd) > 2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore2nd;
            break;

        // Half Time
        case 'X-1ère mi-temps':
            if(intval($htScoreHome) == intval($htScoreAway) ){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore;
            break;
        case '1-1ère mi-temps':
            if(intval($htScoreHome) > intval($htScoreAway) ){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore;
            break;
        case '2-1ère mi-temps':
            if(intval($htScoreHome) < intval($htScoreAway) ){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore;
            break;

        //  DC 1st H
        case '1X 1st Half':case '1XDC 1H':case '1X DC 1H':
            if(intval($htScoreHome) >= intval($htScoreAway) ){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore;
            break;
        case '12 1st Half':case '12DC 1H':case '12 DC 1H':
            if(intval($htScoreHome) != intval($htScoreAway) ){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore;
            break;
        case 'X2 1st Half':case 'X2DC 1H':case 'X2 DC 1H':
            if(intval($htScoreHome) <= intval($htScoreAway) ){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore;
            break;

        //  DC 2nd H
        case '1X 2nd Half':case '1XDC 2H':case '1X DC 2H':
        if(intval($htScoreHome2nd) >= intval($htScoreAway2nd) ){
            $return['won'] = TRUE;
        }
        else{
            $return['won'] = FALSE;
        }
        $return['result'] = $htScore2nd;
        break;
        case '12 2nd Half':case '12DC 2H':case '12 DC 2H':
        if(intval($htScoreHome2nd) != intval($htScoreAway2nd) ){
            $return['won'] = TRUE;
        }
        else{
            $return['won'] = FALSE;
        }
        $return['result'] = $htScore2nd;
        break;
        case 'X2 2nd Half':case 'X2DC 2H':case 'X2 DC 2H':
        if(intval($htScoreHome2nd) <= intval($htScoreAway2nd) ){
            $return['won'] = TRUE;
        }
        else{
            $return['won'] = FALSE;
        }
        $return['result'] = $htScore2nd;
        break;

        //DNB 1st H
        case '1 DNB 1H':
            if(intval($htScoreHome) > intval($htScoreAway)){
                $return['won'] = TRUE;
            }elseif(intval($htScoreHome) == intval($htScoreAway)){
                $return['won'] = 'void';
            }else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore;
            break;
        case '2 DNB 1H' :
            if(intval($htScoreHome) < intval($htScoreAway)){
                $return['won'] = TRUE;
            }elseif(intval($htScoreHome) == intval($htScoreAway)){
                $return['won'] = 'void';
            }else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore;
            break;

        //1X2 - 2HT
        case '1-2ème MT':
            if(intval($htScoreHome2nd) > intval($htScoreAway2nd) ){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore2nd;
            break;
        case 'X-2ème MT':
            if(intval($htScoreHome2nd) == intval($htScoreAway2nd) ){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore2nd;
            break;
        case '2-2ème MT':
            if(intval($htScoreHome2nd) < intval($htScoreAway2nd) ){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore2nd;
            break;

        //DC 2nd H
        case '1X DC 2H':
            if(intval($htScoreHome2nd) >= intval($htScoreAway2nd) ){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore2nd;
            break;
        case '12 DC 2H':
            if(intval($htScoreHome2nd) != intval($htScoreAway2nd) ){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore2nd;
            break;
        case 'X2 DC 2H':
            if(intval($htScoreHome2nd) <= intval($htScoreAway2nd) ){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore2nd;
            break;

        // DNB 2nd H
        case '1 DNB 2H':
            if(intval($htScoreHome2nd) > intval($htScoreAway2nd)){
                $return['won'] = TRUE;
            }elseif(intval($htScoreHome2nd) == intval($htScoreAway2nd)){
                $return['won'] = 'void';
            }else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore2nd;
            break;
        case '2 DNB 2H' :
            if(intval($htScoreHome2nd) < intval($htScoreAway2nd)){
                $return['won'] = TRUE;
            }elseif(intval($htScoreHome2nd) == intval($htScoreAway2nd)){
                $return['won'] = 'void';
            }else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore2nd;
            break;

        // Odd/Even
        case 'Pair':
            if(intval(intval($ftScoreHome) + intval($ftScoreAway)) % 2){
                $return['won'] = FALSE;
            }
            else{
                $return['won'] = TRUE;
            }
            $return['result'] = $ftScore;
            break;
        case 'Impair':
            if(intval(intval($ftScoreHome) + intval($ftScoreAway)) % 2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;

        // O/E 1H 2H
        case 'Odd 1HT':
            if(intval(intval($htScoreHome) + intval($htScoreAway)) % 2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore;
            break;
        case 'Even 1HT':
            if(intval(intval($htScoreHome) + intval($htScoreAway)) % 2){
                $return['won'] = FALSE;
            }
            else{
                $return['won'] = TRUE;
            }
            $return['result'] = $htScore;
            break;
        case 'Odd 2HT':
            if(intval(intval($htScoreHome2nd) + intval($htScoreAway2nd)) % 2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore2nd;
            break;
        case 'Even 2HT':
            if(intval(intval($htScoreHome2nd) + intval($htScoreAway2nd)) % 2){
                $return['won'] = FALSE;
            }
            else{
                $return['won'] = TRUE;
            }
            $return['result'] = $htScore2nd;
            break;
        case 'Home Odd':
            if(intval($ftScoreHome) % 2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case 'Away Odd':
            if(intval($ftScoreAway) % 2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case 'Home Even':
            if(intval($ftScoreHome) % 2){
                $return['won'] = FALSE;
            }
            else{
                $return['won'] = TRUE;
            }
            $return['result'] = $ftScore;
            break;
        case 'Away Even':
            if(intval($ftScoreAway) % 2){
                $return['won'] = FALSE;
            }
            else{
                $return['won'] = TRUE;
            }
            $return['result'] = $ftScore;
            break;

        // Combo:
        case '1&3+':
            if(intval($ftScoreHome) > intval($ftScoreAway) && $totalButs >= 3){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case 'X&3+':
            if(intval($ftScoreHome) == intval($ftScoreAway) && $totalButs >= 3){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '2&3+':
            if(intval($ftScoreHome) < intval($ftScoreAway) && $totalButs >= 3){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '1&2-':
            if(intval($ftScoreHome) > intval($ftScoreAway) && $totalButs <= 2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case 'X&2-':
            if(intval($ftScoreHome) == intval($ftScoreAway) && $totalButs <= 2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '2&2-':
            if(intval($ftScoreHome) < intval($ftScoreAway) && $totalButs <= 2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '1&GG':
            if(intval($ftScoreHome) > intval($ftScoreAway) && $gg){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case 'X&GG':
            if(intval($ftScoreHome) == intval($ftScoreAway) && $gg){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '2&GG':
            if(intval($ftScoreHome) < intval($ftScoreAway) && $gg){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '1&NG':
            if(intval($ftScoreHome) > intval($ftScoreAway) && $ng){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case 'X&NG':
            if(intval($ftScoreHome) == 0 && $ng){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '2&NG':
            if(intval($ftScoreHome) < intval($ftScoreAway) && $ng){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '1&4+':
            if(intval($ftScoreHome) > intval($ftScoreAway) && $totalButs >= 4){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '2&4+':
            if(intval($ftScoreHome) < intval($ftScoreAway) && $totalButs >= 4){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '1&3-':
            if(intval($ftScoreHome) > intval($ftScoreAway) && $totalButs <= 3){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '2&3-':
            if(intval($ftScoreHome) > intval($ftScoreAway) && $totalButs <= 3){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case 'GG&3+':
            if($gg && $totalButs >= 3){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case 'NG&2-':
            if( $ng && $totalButs <= 2 ){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case 'NG&3+':
            if( $ng && $totalButs >= 3){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;

        case '1&2+':
            if(intval($ftScoreHome) > intval($ftScoreAway) && $totalButs >= 2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case 'X&2+':
            if(intval($ftScoreHome) == intval($ftScoreAway) && $totalButs >= 2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '2&2+':
            if(intval($ftScoreHome) < intval($ftScoreAway) && $totalButs >= 2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '1&2-3Gls':
            if(intval($ftScoreHome) > intval($ftScoreAway) && $totalButs >= 2 && $totalButs <= 3){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '2&2-3Gls':
            if(intval($ftScoreHome) < intval($ftScoreAway) && $totalButs >= 2 && $totalButs <= 3){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;

        // HT Combo
        case '1&GG 1H':
            if(intval($htScoreHome) > intval($htScoreAway) && $gg1 ){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore;
            break;
        case 'X&GG 1H':
            if(intval($htScoreHome) == intval($htScoreAway) && $gg1 ){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore;
            break;
        case '2&GG 1H':
            if(intval($htScoreHome) < intval($htScoreAway) && $gg1 ){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore;
            break;
        case '1&NG 1H':
            if(intval($htScoreHome) > intval($htScoreAway) && $ng1 ){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore;
            break;
        case '2&NG 1H':
            if(intval($htScoreHome) < intval($htScoreAway) && $ng1 ){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore;
            break;
        case '1&2+ 1H':
            if(intval($htScoreHome) > intval($htScoreAway) && $totalButsHt >= 2 ){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore;
            break;
        case '2&2+ 1H':
            if(intval($htScoreHome) < intval($htScoreAway) && $totalButsHt >= 2 ){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore;
            break;

        // 2H Combo
        case '1&GG 2H':
            if(intval($htScoreHome2nd) > intval($htScoreAway2nd) && $gg2 ){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore2nd;
            break;
        case 'X&GG 2H':
            if(intval($htScoreHome2nd) == intval($htScoreAway2nd) && $gg2 ){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore2nd;
            break;
        case '2&GG 2H':
            if(intval($htScoreHome2nd) < intval($htScoreAway2nd) && $gg2 ){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore2nd;
            break;
        case '1&NG 2H':
            if(intval($htScoreHome2nd) > intval($htScoreAway2nd) && $ng2 ){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore2nd;
            break;
        case '2&NG 2H':
            if(intval($htScoreHome2nd) < intval($htScoreAway2nd) && $ng2 ){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore2nd;
            break;
        case '1&2+ 2H':
            if(intval($htScoreHome2nd) > intval($htScoreAway2nd) && $totalButsHt2nd >= 2 ){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore2nd;
            break;
        case '2&2+ 2H':
            if(intval($htScoreHome2nd) < intval($htScoreAway2nd) && $totalButsHt2nd >= 2 ){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore2nd;
            break;

        // DC Combo
        case '1X&3+':
            if(intval($ftScoreHome) > intval($ftScoreAway) && $totalButs >= 3){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '1X&2-':
            if(intval($ftScoreHome) >= intval($ftScoreAway) && $totalButs <= 2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case 'X2&3+':
            if(intval($ftScoreHome) <= intval($ftScoreAway) && $totalButs >= 3){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case 'X2&2-':
            if(intval($ftScoreHome) <= intval($ftScoreAway) && $totalButs <= 2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '12&3+':
            if(intval($ftScoreHome) != intval($ftScoreAway) && $totalButs >= 3){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '12&2-':
            if(intval($ftScoreHome) != intval($ftScoreAway) && $totalButs <= 2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '1X&GG':
            if(intval($ftScoreHome) >= intval($ftScoreAway) && $gg){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '1X&NG':
            if(intval($ftScoreHome) >= intval($ftScoreAway) && $ng){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case 'X2&GG':
            if(intval($ftScoreHome) <= intval($ftScoreAway) && $gg){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case 'X2&NG':
            if(intval($ftScoreHome) <= intval($ftScoreAway) && $ng){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '12&GG':
            if(intval($ftScoreHome) != intval($ftScoreAway) && $gg){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '12&NG':
            if(intval($ftScoreHome) != intval($ftScoreAway) && $ng){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '1X&4+':
            if(intval($ftScoreHome) >= intval($ftScoreAway) && $totalButs >= 4){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case 'X2&4+':
            if(intval($ftScoreHome) <= intval($ftScoreAway) && $totalButs >= 4){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '1X&3-':
            if(intval($ftScoreHome) >= intval($ftScoreAway) && $totalButs <= 3){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case 'X2&3-':
            if(intval($ftScoreHome) <= intval($ftScoreAway) && $totalButs <= 3){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '12&4+':
            if(intval($ftScoreHome) != intval($ftScoreAway) && $totalButs >= 4){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '12&3-':
            if(intval($ftScoreHome) != intval($ftScoreAway) && $totalButs <= 3){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '1X&2+':
            if(intval($ftScoreHome) >= intval($ftScoreAway) && $totalButs >= 2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '1X&1-':
            if(intval($ftScoreHome) >= intval($ftScoreAway) && $totalButs <= 1){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case 'X2&2+':
            if(intval($ftScoreHome) <= intval($ftScoreAway) && $totalButs >= 2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case 'X2&1-':
            if(intval($ftScoreHome) <= intval($ftScoreAway) && $totalButs <= 1){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '12&2+':
            if(intval($ftScoreHome) != intval($ftScoreAway) && $totalButs >= 2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '12&1-':
            if(intval($ftScoreHome) != intval($ftScoreAway) && $totalButs <= 1){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '1X&2-3Gls':
            if(intval($ftScoreHome) != intval($ftScoreAway) && $totalButs >= 2 && $totalButs <= 3){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '12&2-3Gls':
            if(intval($ftScoreHome) != intval($ftScoreAway) && $totalButs >= 2 && $totalButs <= 3){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case 'X2&2-3Gls':
            if(intval($ftScoreHome) <= intval($ftScoreAway) && $totalButs >= 2 && $totalButs <= 3){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;

        // HT DC Combo
        case '1X&GG 1H':
            if(intval($htScoreHome) >= intval($htScoreAway) && $gg1 ){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore;
            break;
        case '12&GG 1H':
            if(intval($htScoreHome) != intval($htScoreAway) && $gg1 ){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore;
            break;
        case 'X2&GG 1H':
            if(intval($htScoreHome) <= intval($htScoreAway) && $gg1 ){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore;
            break;
        case '1X&NG 1H':
            if(intval($htScoreHome) >= intval($htScoreAway) && $ng1 ){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore;
            break;
        case '12&NG 1H':
            if(intval($htScoreHome) != intval($htScoreAway) && $ng1 ){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore;
            break;
        case 'X2&NG 1H':
            if(intval($htScoreHome) <= intval($htScoreAway) && $ng1 ){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore;
            break;
        case '1X&2+ 1H':
            if(intval($htScoreHome) >= intval($htScoreAway) && $totalButsHt >= 2 ){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore;
            break;
        case '12&2+ 1H':
            if(intval($htScoreHome) != intval($htScoreAway) && $totalButsHt >= 2 ){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore;
            break;
        case 'X2&2+ 1H':
            if(intval($htScoreHome) <= intval($htScoreAway) && $totalButsHt >= 2 ){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore;
            break;
        case '1X&1- 1H':
            if(intval($htScoreHome) >= intval($htScoreAway) && $totalButsHt <= 1 ){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore;
            break;
        case 'X2&1- 1H':
            if(intval($htScoreHome) <= intval($htScoreAway) && $totalButsHt <= 1 ){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore;
            break;


        // 2H DC Combo
        case '1X&GG 2H':
            if(intval($htScoreHome2nd) >= intval($htScoreAway2nd) && $gg2 ){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore2nd;
            break;
        case '12&GG 2H':
            if(intval($htScoreHome2nd) != intval($htScoreAway2nd) && $gg2 ){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore2nd;
            break;
        case 'X2&GG 2H':
            if(intval($htScoreHome2nd) <= intval($htScoreAway2nd) && $gg2 ){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore2nd;
            break;
        case '1X&NG 2H':
            if(intval($htScoreHome2nd) >= intval($htScoreAway2nd) && $ng2 ){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore2nd;
            break;
        case '12&NG 2H':
            if(intval($htScoreHome2nd) != intval($htScoreAway2nd) && $ng2 ){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore2nd;
            break;
        case 'X2&NG 2H':
            if(intval($htScoreHome2nd) <= intval($htScoreAway2nd) && $ng2 ){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore2nd;
            break;
        case '1X&2+ 2H':
            if(intval($htScoreHome2nd) >= intval($htScoreAway2nd) && $totalButsHt2nd >= 2 ){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore2nd;
            break;
        case '12&2+ 2H':
            if(intval($htScoreHome2nd) != intval($htScoreAway2nd) && $totalButsHt2nd >= 2 ){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore2nd;
            break;
        case 'X2&2+ 2H':
            if(intval($htScoreHome2nd) <= intval($htScoreAway2nd) && $totalButsHt2nd >= 2 ){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore2nd;
            break;
        case '1X&1- 2H':
            if(intval($htScoreHome2nd) >= intval($htScoreAway2nd) && $totalButsHt2nd <= 1 ){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore2nd;
            break;
        case 'X2&1- 2H':
            if(intval($htScoreHome2nd) <= intval($htScoreAway2nd) && $totalButsHt2nd <= 1 ){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore2nd;
            break;

        // 3 Combo
        case '1&NG&2+':
            if(intval($ftScoreHome) > intval($ftScoreAway) && $ng && $totalButs >= 2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '1&NG&3+':
            if(intval($ftScoreHome) > intval($ftScoreAway) && $ng && $totalButs >= 3){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '2&NG&2+':
            if(intval($ftScoreHome) < intval($ftScoreAway) && $ng && $totalButs >= 2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '2&NG&3+':
            if(intval($ftScoreHome) < intval($ftScoreAway) && $ng && $totalButs >= 3){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;

        // 3 Combo HT
        case '1ht&1ft &2+':
            if(intval($htScoreHome) > intval($htScoreAway) && intval($ftScoreHome) > intval($ftScoreAway) && $totalButs >= 2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore . '/' . $ftScore;
            break;
        case '2ht&2ft &2+':
            if(intval($htScoreHome) < intval($htScoreAway) && intval($ftScoreHome) < intval($ftScoreAway) && $totalButs >= 2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore . '/' . $ftScore;
            break;
        case '1ht&1ft &3+':
            if(intval($htScoreHome) > intval($htScoreAway) && intval($ftScoreHome) > intval($ftScoreAway) && $totalButs >= 3){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore . '/' . $ftScore;
            break;
        case '2ht&2ft &3+':
            if(intval($htScoreHome) < intval($htScoreAway) && intval($ftScoreHome) < intval($ftScoreAway) && $totalButs >= 3){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore . '/' . $ftScore;
            break;
        case '1ht&1ft &4+':
            if(intval($htScoreHome) > intval($htScoreAway) && intval($ftScoreHome) > intval($ftScoreAway) && $totalButs >= 4){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore . '/' . $ftScore;
            break;
        case '2ht&2ft &4+':
            if(intval($htScoreHome) < intval($htScoreAway) && intval($ftScoreHome) < intval($ftScoreAway) && $totalButs >= 4){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore . '/' . $ftScore;
            break;
        case '1Ht&1Ft &2+Ht':
            if(intval($htScoreHome) > intval($htScoreAway) && intval($ftScoreHome) > intval($ftScoreAway) && $totalButsHt >= 2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore . '/' . $ftScore;
            break;
        case '2Ht&2Ft &2+Ht':
            if(intval($htScoreHome) < intval($htScoreAway) && intval($ftScoreHome) < intval($ftScoreAway) && $totalButsHt >= 2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore . '/' . $ftScore;
            break;

        // Chance Mix
        case '1or3+':
            if(intval($ftScoreHome) > intval($ftScoreAway) || $totalButs >= 3){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case 'Xor3+':
            if(intval($ftScoreHome) == intval($ftScoreAway) || $totalButs >= 3){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '2or3+':
            if(intval($ftScoreHome) < intval($ftScoreAway) || $totalButs >= 3){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '1or2-':
            if(intval($ftScoreHome) > intval($ftScoreAway) || $totalButs <= 2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case 'Xor2-':
            if(intval($ftScoreHome) == intval($ftScoreAway) || $totalButs <= 2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '2or2-':
            if(intval($ftScoreHome) < intval($ftScoreAway) || $totalButs <= 2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '1orGG':
            if(intval($ftScoreHome) > intval($ftScoreAway) || $gg){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case 'XorGG':
            if(intval($ftScoreHome) == intval($ftScoreAway) || $gg){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '2orGG':
            if(intval($ftScoreHome) < intval($ftScoreAway) || $gg){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '1orNG':
            if(intval($ftScoreHome) > intval($ftScoreAway) || $ng){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case 'XorNG':
            if(intval($ftScoreHome) == intval($ftScoreAway) || $ng){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '2orNG':
            if(intval($ftScoreHome) < intval($ftScoreAway) || $ng){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '1or4+':
            if(intval($ftScoreHome) > intval($ftScoreAway) || $totalButs >= 4){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '2or4+':
            if(intval($ftScoreHome) < intval($ftScoreAway) || $totalButs >= 4){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '1or3-':
            if(intval($ftScoreHome) > intval($ftScoreAway) || $totalButs <= 3){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '2or3-':
            if(intval($ftScoreHome) < intval($ftScoreAway) || $totalButs <= 3){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case 'GGor3+':
            if($gg || $totalButs >= 3){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case 'NGor2-':
            if($ng || $totalButs <= 2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case 'NGor3+':
            if($ng || $totalButs >= 3){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case 'GGor2-':
            if($gg || $totalButs <= 2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case 'Xor4+':
            if(intval($ftScoreHome) == intval($ftScoreAway) || $totalButs >= 4){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case 'Xor3-':
            if(intval($ftScoreHome) == intval($ftScoreAway) || $totalButs <= 3){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case 'Xor2+':
            if(intval($ftScoreHome) == intval($ftScoreAway) || $totalButs >= 2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case 'Xor1-':
            if(intval($ftScoreHome) == intval($ftScoreAway) || $totalButs <= 1){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '1or0G':
            if(intval($ftScoreHome) > intval($ftScoreAway) || $totalButs == 0){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '2or0G':
            if(intval($ftScoreHome) < intval($ftScoreAway) || $totalButs == 0){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '1or1-':
            if(intval($ftScoreHome) > intval($ftScoreAway) || $totalButs <= 1){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '2or1-':
            if(intval($ftScoreHome) < intval($ftScoreAway) || $totalButs <= 1){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case 'GGor1-':
            if($gg || $totalButs <= 1){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '1or2+':
            if(intval($ftScoreHome) > intval($ftScoreAway) || $totalButs >= 2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '2or2+':
            if(intval($ftScoreHome) < intval($ftScoreAway) || $totalButs >= 2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;

        // HT Ch. Mix
        case 'HT1orFT1':
            if(intval($htScoreHome) > intval($htScoreAway) || intval($ftScoreHome) > intval($ftScoreAway)){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore . '/' . $ftScore;
            break;
        case 'HT1orFT1':
            if(intval($htScoreHome) < intval($htScoreAway) || intval($ftScoreHome) < intval($ftScoreAway)){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore . '/' . $ftScore;
            break;
        case 'HTXorFTX':
            if(intval($htScoreHome) == intval($htScoreAway) || intval($ftScoreHome) == intval($ftScoreAway)){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore . '/' . $ftScore;
            break;
        case '1orGG 1H':
            if(intval($htScoreHome) > intval($htScoreAway) || $gg1){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore;
            break;
        case 'XorGG 1H':
            if(intval($htScoreHome) == intval($htScoreAway) || $gg1){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore;
            break;
        case '2orGG 1H':
            if(intval($htScoreHome) < intval($htScoreAway) || $gg1){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore;
            break;
        case '1orNG 1H':
            if(intval($htScoreHome) > intval($htScoreAway) || $ng1){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore;
            break;
        case 'XorNG 1H':
            if(intval($htScoreHome) == intval($htScoreAway) || $ng1){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore;
            break;
        case '2orNG 1H':
            if(intval($htScoreHome) < intval($htScoreAway) || $ng1){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore;
            break;
        case '1or2+ 1H':
            if(intval($htScoreHome) > intval($htScoreAway) || $totalButsHt >= 2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore;
            break;
        case 'Xor2+ 1H':
            if(intval($htScoreHome) == intval($htScoreAway) || $totalButsHt >= 2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore;
            break;
        case '2or2+ 1H':
            if(intval($htScoreHome) < intval($htScoreAway) || $totalButsHt >= 2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore;
            break;
        case '1or0G 1H':
            if(intval($htScoreHome) > intval($htScoreAway) || $totalButsHt == 0){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore;
            break;
        case '2or0G 1H':
            if(intval($htScoreHome) < intval($htScoreAway) || $totalButsHt == 0){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore;
            break;
        case '1or1- 1H':
            if(intval($htScoreHome) > intval($htScoreAway) || $totalButsHt <= 1){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore;
            break;
        case '2or1- 1H':
            if(intval($htScoreHome) < intval($htScoreAway) || $totalButsHt <= 1){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore;
            break;
        case 'GGor1- 1H':
            if($gg1 || $totalButsHt <= 1){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore;
            break;

        case '1orGG 2H':
            if(intval($htScoreHome2nd) > intval($htScoreAway2nd) || $gg2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore2nd;
            break;
        case 'XorGG 2H':
            if(intval($htScoreHome2nd) == intval($htScoreAway2nd) || $gg2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore2nd;
            break;
        case '2orGG 2H':
            if(intval($htScoreHome2nd) < intval($htScoreAway2nd) || $gg2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore2nd;
            break;
        case '1orNG 2H':
            if(intval($htScoreHome2nd) > intval($htScoreAway2nd) || $ng2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore2nd;
            break;
        case 'XorNG 2H':
            if(intval($htScoreHome2nd) == intval($htScoreAway2nd) || $ng2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore2nd;
            break;
        case '2orNG 2H':
            if(intval($htScoreHome2nd) < intval($htScoreAway2nd) || $ng2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore2nd;
            break;
        case '1or2+ 2H':
            if(intval($htScoreHome2nd) > intval($htScoreAway2nd) || $totalButsHt2nd >= 2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore2nd;
            break;
        case 'Xor2+ 2H':
            if(intval($htScoreHome2nd) == intval($htScoreAway2nd) || $totalButsHt2nd >= 2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore2nd;
            break;
        case '2or2+ 2H':
            if(intval($htScoreHome2nd) < intval($htScoreAway2nd) || $totalButsHt2nd >= 2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore2nd;
            break;
        case '1or0G 2H':
            if(intval($htScoreHome2nd) > intval($htScoreAway2nd) || $totalButsHt2nd == 0){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore2nd;
            break;
        case '2or0G 2H':
            if(intval($htScoreHome2nd) < intval($htScoreAway2nd) || $totalButsHt2nd == 0){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore2nd;
            break;
        case '1or1- 2H':
            if(intval($htScoreHome2nd) > intval($htScoreAway2nd) || $totalButsHt2nd <= 1){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore2nd;
            break;
        case '2or1- 2H':
            if(intval($htScoreHome2nd) < intval($htScoreAway2nd) || $totalButsHt2nd <= 1){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore2nd;
            break;
        case 'GGor1- 2H':
            if($gg2 || $totalButsHt2nd <= 1){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore2nd;
            break;

        case 'GGorGG':
            if($gg1 || $gg2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore . '/' . $ftScore;
            break;

        // 3CHANCEMIX
        case '1orNGor2-':
            if(intval($ftScoreHome) > intval($ftScoreAway) || $ng || $totalButs <= 2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '2orNGor2-':
            if(intval($ftScoreHome) < intval($ftScoreAway) || $ng || $totalButs <= 2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '1orGGor3+':
            if(intval($ftScoreHome) > intval($ftScoreAway) || $gg || $totalButs >= 3){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '2orGGor3+':
            if(intval($ftScoreHome) < intval($ftScoreAway) || $gg || $totalButs >= 3){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '1orXor2+':
            if(intval($ftScoreHome) > intval($ftScoreAway) || intval($ftScoreHome) == intval($ftScoreAway) || $totalButs >= 2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case 'Xor2or2+':
            if(intval($ftScoreHome) == intval($ftScoreAway) || intval($ftScoreHome) < intval($ftScoreAway) || $totalButs >= 2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '1orXor3+':
            if(intval($ftScoreHome) > intval($ftScoreAway) || intval($ftScoreHome) == intval($ftScoreAway) || $totalButs >= 3){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '1or2or3+':
            if(intval($ftScoreHome) > intval($ftScoreAway) || intval($ftScoreHome) < intval($ftScoreAway) || $totalButs >= 3){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case 'Xor2or3+':
            if(intval($ftScoreHome) == intval($ftScoreAway) || intval($ftScoreHome) < intval($ftScoreAway) || $totalButs >= 3){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '1orXor4+':
            if(intval($ftScoreHome) > intval($ftScoreAway) || intval($ftScoreHome) == intval($ftScoreAway) || $totalButs >= 4){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case 'Xor2or4+':
            if(intval($ftScoreHome) == intval($ftScoreAway) || intval($ftScoreHome) < intval($ftScoreAway) || $totalButs >= 4){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '1orXorGG':
            if(intval($ftScoreHome) > intval($ftScoreAway) || intval($ftScoreHome) == intval($ftScoreAway) || $gg){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case 'Xor2orGG':
            if(intval($ftScoreHome) == intval($ftScoreAway) || intval($ftScoreHome) < intval($ftScoreAway) || $gg){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '1orXorNG':
            if(intval($ftScoreHome) > intval($ftScoreAway) || intval($ftScoreHome) == intval($ftScoreAway) || $ng){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '1or2orNG':
            if(intval($ftScoreHome) > intval($ftScoreAway) || intval($ftScoreHome) < intval($ftScoreAway) || $ng){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case 'Xor2orNG':
            if(intval($ftScoreHome) == intval($ftScoreAway) || intval($ftScoreHome) < intval($ftScoreAway) || $ng){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '1orXor2-':
            if(intval($ftScoreHome) > intval($ftScoreAway) || intval($ftScoreHome) == intval($ftScoreAway) || $totalButs <= 2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case 'Xor2or2-':
            if(intval($ftScoreHome) == intval($ftScoreAway) || intval($ftScoreHome) < intval($ftScoreAway) || $totalButs <= 2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;

        // O/U 1H & 2H
        case 'Over 0.5 1H':
            if($totalButsHt > 0){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore;
            break;
        case 'Over 1.5 1H':
            if($totalButsHt > 1){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore;
            break;
        case 'Over 2.5 1H':
            if($totalButsHt > 2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore;
            break;
        case 'Over 3.5 1H':
            if($totalButsHt > 3){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore;
            break;
        case 'Under 0.5 1H':
            if($totalButsHt < 1){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore;
            break;
        case 'Under 1.5 1H':
            if($totalButsHt < 2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore;
            break;
        case 'Under 2.5 1H':
            if($totalButsHt < 3){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore;
            break;
        case 'Under 3.5 1H':
            if($totalButsHt < 4){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore;
            break;

        case 'Over 0.5 2H':
            if($totalButsHt2nd > 0){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore2nd;
            break;
        case 'Over 1.5 2H':
            if($totalButsHt2nd > 1){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore2nd;
            break;
        case 'Over 2.5 2H':
            if($totalButsHt2nd > 2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore2nd;
            break;
        case 'Over 3.5 2H':
            if($totalButsHt2nd > 3){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore2nd;
            break;
        case 'Under 0.5 2H':
            if($totalButsHt2nd < 1){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore2nd;
            break;
        case 'Under 1.5 2H':
            if($totalButsHt2nd < 2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore2nd;
            break;
        case 'Under 2.5 2H':
            if($totalButsHt2nd < 3){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore2nd;
            break;
        case 'Under 3.5 2H':
            if($totalButsHt2nd < 4){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore2nd;
            break;

        // HT Gls Sp
        case '1+&1+':
            if($totalButsHt >= 1 && $totalButsHt2nd >= 1){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore .'/'. $htScore2nd;
            break;
        case '1+&2+':
            if($totalButsHt >= 1 && $totalButsHt2nd >= 2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore .'/'. $htScore2nd;
            break;
        case '2+&1+':
            if($totalButsHt >= 2 && $totalButsHt2nd >= 1){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore .'/'. $htScore2nd;
            break;
        case '2+&2+':
            if($totalButsHt >= 2 && $totalButsHt2nd >= 2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore .'/'. $htScore2nd;
            break;
        case '1+&3+':
            if($totalButsHt >= 1 && $totalButsHt2nd >= 3){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore .'/'. $htScore2nd;
            break;
        case '1-&1-':
            if($totalButsHt <= 1 && $totalButsHt2nd <= 1){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore .'/'. $htScore2nd;
            break;
        case '1-&2-':
            if($totalButsHt <= 1 && $totalButsHt2nd <= 2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore .'/'. $htScore2nd;
            break;
        case '1-&3-':
            if($totalButsHt <= 1 && $totalButsHt2nd <= 3){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore .'/'. $htScore2nd;
            break;
        case '2-&1-':
            if($totalButsHt <= 2 && $totalButsHt2nd <= 1){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore .'/'. $htScore2nd;
            break;
        case '2-&2-':
            if($totalButsHt <= 2 && $totalButsHt2nd <= 2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore .'/'. $htScore2nd;
            break;
        case '2-&3-':
            if($totalButsHt <= 2 && $totalButsHt2nd <= 3){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore .'/'. $htScore2nd;
            break;
        case '3-&1-':
            if($totalButsHt <= 3 && $totalButsHt2nd <= 1){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore .'/'. $htScore2nd;
            break;
        case '1+&1+ NO':
            if($totalButsHt < 1 || $totalButsHt2nd < 1){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore .'/'. $htScore2nd;
            break;
        case '1+&2+ NO':
            if($totalButsHt < 1 || $totalButsHt2nd < 2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore .'/'. $htScore2nd;
            break;
        case '2+&1+ NO':
            if($totalButsHt < 2 || $totalButsHt2nd < 1){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore .'/'. $htScore2nd;
            break;
        case '2+&2+ NO':
            if($totalButsHt < 2 || $totalButsHt2nd < 2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore .'/'. $htScore2nd;
            break;
        case '1+&3+ NO':
            if($totalButsHt < 1 || $totalButsHt2nd < 3){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore .'/'. $htScore2nd;
            break;
        case '1-&1- NO':
            if($totalButsHt > 1 || $totalButsHt2nd > 1){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore .'/'. $htScore2nd;
            break;
        case '1-&2- NO':
            if($totalButsHt > 1 || $totalButsHt2nd > 2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore .'/'. $htScore2nd;
            break;
        case '1-&3- NO':
            if($totalButsHt > 1 || $totalButsHt2nd > 3){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore .'/'. $htScore2nd;
            break;
        case '2-&1- NO':
            if($totalButsHt > 2 || $totalButsHt2nd > 1){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore .'/'. $htScore2nd;
            break;
        case '2-&2- NO':
            if($totalButsHt > 2 || $totalButsHt2nd > 2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore .'/'. $htScore2nd;
            break;
        case '2-&3- NO':
            if($totalButsHt > 2 || $totalButsHt2nd > 3){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore .'/'. $htScore2nd;
            break;
        case '3-&1- NO':
            if($totalButsHt > 3 || $totalButsHt2nd > 1){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore .'/'. $htScore2nd;
            break;

        // H/A O/U
        case 'Home Over 0.5':
            if(intval($ftScoreHome) > 0){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case 'Home Under 0.5':
            if(intval($ftScoreHome) == 0){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case 'Home Over 1.5':
            if(intval($ftScoreHome) > 1){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case 'Home Under 1.5':
            if(intval($ftScoreHome) <= 1){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case 'Home Over 2.5':
            if(intval($ftScoreHome) > 2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case 'Home Under 2.5':
            if(intval($ftScoreHome) <= 2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case 'Home Over 3.5':
            if(intval($ftScoreHome) > 3){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case 'Home Under 3.5':
            if(intval($ftScoreHome) <= 3){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;

        case 'Away Over 0.5':
            if(intval($ftScoreAway) > 0){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case 'Away Under 0.5':
            if(intval($ftScoreAway) <= 0){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case 'Away Over 1.5':
            if(intval($ftScoreAway) > 1){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case 'Away Under 1.5':
            if(intval($ftScoreAway) <= 1){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case 'Away Over 2.5':
            if(intval($ftScoreAway) > 2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case 'Away Under 2.5':
            if(intval($ftScoreAway) <= 2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case 'Away Over 3.5':
            if(intval($ftScoreAway) > 3){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case 'Away Under 3.5':
            if(intval($ftScoreAway) <= 3){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;

        // HT H/A O/U
        case 'Home Over 0.5 1H':
            if(intval($htScoreHome) > 0){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore;
            break;
        case 'Home Over 0.5 2H':
            if(intval($htScoreHome2nd) > 0){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore2nd;
            break;
        case 'Home Under 0.5 1H':
            if(intval($htScoreHome) <= 0){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore;
            break;
        case 'Home Under 0.5 2H':
            if(intval($htScoreHome2nd) <= 0){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore2nd;
            break;

        case 'Home Over 1.5 1H':
            if(intval($htScoreHome) > 1){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore;
            break;
        case 'Home Over 1.5 2H':
            if(intval($htScoreHome2nd) > 1){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore2nd;
            break;
        case 'Home Under 1.5 1H':
            if(intval($htScoreHome) <= 1){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore;
            break;
        case 'Home Under 1.5 2H':
            if(intval($htScoreHome2nd) <= 1){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore2nd;
            break;

        case 'Away Over 0.5 1H':
            if(intval($htScoreAway) > 0){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore;
            break;
        case 'Away Over 0.5 2H':
            if(intval($htScoreAway2nd) > 0){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore2nd;
            break;
        case 'Away Under 0.5 1H':
            if(intval($htScoreAway) <= 0){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore;
            break;
        case 'Away Under 0.5 2H':
            if(intval($htScoreAway2nd) <= 0){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore2nd;
            break;

        case 'Away Over 1.5 1H':
            if(intval($htScoreAway) > 1){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore;
            break;
        case 'Away Over 1.5 2H':
            if(intval($htScoreAway2nd) > 1){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore2nd;
            break;
        case 'Away Under 1.5 1H':
            if(intval($htScoreAway) <= 1){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore;
            break;
        case 'Away Under 1.5 2H':
            if(intval($htScoreAway2nd) <= 1){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore2nd;
            break;

        // Multi Goal:
        case '1-2Gls':
            if($totalButs >= 1 && $totalButs <= 2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '1-3Gls':
            if($totalButs >= 1 && $totalButs <= 3){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '1-4Gls':
            if($totalButs >= 1 && $totalButs <= 4){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '1-5Gls':
            if($totalButs >= 1 && $totalButs <= 5){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '1-6Gls':
            if($totalButs >= 1 && $totalButs <= 6){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '2-3Gls':
            if($totalButs >= 2 && $totalButs <= 3){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '2-4Gls':
            if($totalButs >= 2 && $totalButs <= 4){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '2-5Gls':
            if($totalButs >= 2 && $totalButs <= 5){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '2-6Gls':
            if($totalButs >= 2 && $totalButs <= 6){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '3-4Gls':
            if($totalButs >= 3 && $totalButs <= 4){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '3-5Gls':
            if($totalButs >= 3 && $totalButs <= 5){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '3-6Gls':
            if($totalButs >= 3 && $totalButs <= 6){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '4-5Gls':
            if($totalButs >= 4 && $totalButs <= 5){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '4-6Gls':
            if($totalButs >= 4 && $totalButs <= 6){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '5-6Gls':
            if($totalButs >= 5 && $totalButs <= 6){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '7+Gls':
            if($totalButs >= 7){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;

        // Multi G 1H
        case '1-2Gls 1H':
            if($totalButsHt >= 1 && $totalButsHt <= 2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore;
            break;
        case '1-3Gls 1H':
            if($totalButsHt >= 1 && $totalButsHt <= 3){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore;
            break;
        case '2-3Gls 1H':
            if($totalButsHt >= 2 && $totalButsHt <= 3){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore;
            break;
        case '1-2Gls 2H':
            if($totalButsHt2nd >= 1 && $totalButsHt2nd <= 2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore2nd;
            break;
        case '1-3Gls 2H':
            if($totalButsHt2nd >= 1 && $totalButsHt2nd <= 3){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore2nd;
            break;
        case '2-3Gls 2H':
            if($totalButsHt2nd >= 2 && $totalButsHt2nd <= 3){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $htScore2nd;
            break;

        // Multi G Ho/Aw
        case '1-2Gls H': case '1-2 Gls H': case '1-2Gls Home': case '1-2 Gls Home':
        if(intval($ftScoreHome) >= 1 && intval($ftScoreHome) <= 2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '1-3Gls H': case '1-3 Gls H': case '1-3Gls Home': case '1-3 Gls Home':
            if(intval($ftScoreHome) >= 1 && intval($ftScoreHome) <= 3){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '2-3Gls H': case '2-3 Gls H': case '2-3Gls Home': case '2-3 Gls Home':
            if(intval($ftScoreHome) >= 2 && intval($ftScoreHome) <= 3){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;

        case '1-2Gls A': case '1-2 Gls A': case '1-2Gls Away': case '1-2 Gls Away':
            if(intval($ftScoreAway) >= 1 && intval($ftScoreAway) <= 2){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '1-3Gls A': case '1-3 Gls A': case '1-3Gls Away': case '1-3 Gls Away':
            if(intval($ftScoreAway) >= 1 && intval($ftScoreAway) <= 3){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;
        case '2-3Gls A': case '2-3 Gls A': case '2-3Gls Away': case '2-3 Gls Away':
            if(intval($ftScoreAway) >= 2 && intval($ftScoreAway) <= 3){
                $return['won'] = TRUE;
            }
            else{
                $return['won'] = FALSE;
            }
            $return['result'] = $ftScore;
            break;

        default:
            $return = FALSE;

    }


    return $return;
}
