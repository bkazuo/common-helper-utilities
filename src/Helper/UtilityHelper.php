<?php

namespace Helper;

/**
 * Validation Helper
 *
 * Utility methods to work with know values.
 *
 */
class UtilityHelper {

    /**
     * Format value
     *
     * @param string $value
     * @param string $mask
     */
    public function mask($val, $mask) {
        $maskared = '';
        $k = 0;
        for($i = 0; $i<=strlen($mask)-1; $i++) {
            if($mask[$i] == '#') {
                if(isset($val[$k]))
                    $maskared .= $val[$k++];
            } else {
                if(isset($mask[$i]))
                    $maskared .= $mask[$i];
            }
        }
        return $maskared;
    }

    /**
     * Get array of days of week
     *
     */
    public function daysOfWeek() {
        return array(
            0 => 'sunday',
            1 => 'monday',
            2 => 'tuesday',
            3 => 'wednesday',
            4 => 'thursday',
            5 => 'friday',
            6 => 'saturday');
    }

    /**
     * Get distance between two lat and lng
     *
     * @param string $lat1
     * @param string $lng1
     * @param string $lat2
     * @param string $lng2
     */
    public function getDistance($lat1, $lgn1, $lat2, $lgn2){
        $earth_radius = 6371;
        $alpha = $lat1 - $lat2;
        $beta = $lgn1 - $lgn2;
        $h = pow((sin(deg2rad($alpha/2))), 2) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * pow(sin(deg2rad($beta/2)),2);
        $dist = 2*$earth_radius*sqrt($h);

        return $dist;
    }

    /**
     * Get all states by name
     *
     */
    public function getAllStatesByName(){
        return array("Acre" ,"Alagoas","Amazonas","Amapá","Bahia","Ceará","Distrito Federal","Espírito Santo","Goiás","Maranhão","Mato Grosso","Mato Grosso do Sul","Minas Gerais","Pará","Paraíba","Paraná","Pernambuco","Piauí","Rio de Janeiro","Rio Grande do Norte","Rondônia","Rio Grande do Sul","Roraima","Santa Catarina","Sergipe","São Paulo","Tocantins");
    }

    /**
     * Get all states by code
     *
     */
    public function getAllStatesByCode(){
        return array("AC","AL","AM","AP","BA","CE","DF","ES","GO","MA","MT","MS","MG","PA","PB","PR","PE","PI","RJ","RN","RO","RS","RR","SC","SE","SP","TO");
    }

    /**
     * Get state code by name
     *
     * @param string $name

     */
    public function getStateCodeByName($name) {
        $states =  array(
            "Acre"                  => "AC",
            "Alagoas"               => "AL",
            "Amazonas"              => "AM",
            "Amapá"                 => "AP",
            "Bahia"                 => "BA",
            "Ceará"                 => "CE",
            "Distrito Federal"      => "DF",
            "Espírito Santo"        => "ES",
            "Goiás"                 => "GO",
            "Maranhão"              => "MA",
            "Mato Grosso"           => "MT",
            "Mato Grosso do Sul"    => "MS",
            "Minas Gerais"          => "MG",
            "Pará"                  => "PA",
            "Paraíba"               => "PB",
            "Paraná"                => "PR",
            "Pernambuco"            => "PE",
            "Piauí"                 => "PI",
            "Rio de Janeiro"        => "RJ",
            "Rio Grande do Norte"   => "RN",
            "Rondônia"              => "RO",
            "Rio Grande do Sul"     => "RS",
            "Roraima"               => "RR",
            "Santa Catarina"        => "SC",
            "Sergipe"               => "SE",
            "São Paulo"             => "SP",
            "Tocantins"             => "TO"
        );

        if (isset($states[$name])) {
            return $states[$name];
        } else {
            return false;
        }
    }

    /**
     * Get state name by code
     *
     * @param string $code

     */
    public function getStateNameByCode($code) {
        $states =  array(
            "AC" => "Acre",
            "AL" => "Alagoas",
            "AM" => "Amazonas",
            "AP" => "Amapá",
            "BA" => "Bahia",
            "CE" => "Ceará",
            "DF" => "Distrito Federal",
            "ES" => "Espírito Santo",
            "GO" => "Goiás",
            "MA" => "Maranhão",
            "MT" => "Mato Grosso",
            "MS" => "Mato Grosso do Sul",
            "MG" => "Minas Gerais",
            "PA" => "Pará",
            "PB" => "Paraíba",
            "PR" => "Paraná",
            "PE" => "Pernambuco",
            "PI" => "Piauí",
            "RJ" => "Rio de Janeiro",
            "RN" => "Rio Grande do Norte",
            "RO" => "Rondônia",
            "RS" => "Rio Grande do Sul",
            "RR" => "Roraima",
            "SC" => "Santa Catarina",
            "SE" => "Sergipe",
            "SP" => "São Paulo",
            "TO" => "Tocantins"             
        );

        if (isset($states[$code])) {
            return $states[$code];
        } else {
            return false;
        }
    }
    
}
