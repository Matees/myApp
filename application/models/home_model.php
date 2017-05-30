<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model{

    function __construct() {
        parent::__construct();
    }

    function getDruhPlatby(){
        $query = $this->db->query('SELECT d.druh, COUNT(j.Druh_platby_ID) AS pocet FROM druh_platby d INNER JOIN jazda j ON d.ID = j.Druh_platby_ID INNER JOIN zakaznik z ON j.Zakaznik_ID = z.ID WHERE z.adresa = "Nitra" GROUP BY d.druh');
        return $query->result_array();
    }

    function getPocetJazd(){
        $query = $this->db->query('SELECT CONCAT(s.meno, \' \', s.priezvisko) AS menop, COUNT(j.ID) AS pocet FROM sofer s INNER JOIN smena m ON s.ID = m.Sofer_ID INNER JOIN jazda j ON m.ID = j.smena_ID GROUP by menop');
        return $query->result_array();
    }

    function getNajazdeneKm(){
        $query = $this->db->query('SELECT CONCAT(t.nazov, \' \', t.SPZ) AS auto, j.prejdenych_km AS najazdene FROM jazda j INNER JOIN smena s ON j.smena_ID = s.ID INNER JOIN taxik t ON s.Taxik_ID = t.ID');
        return $query->result_array();
    }

    function getPocetZakaznikov(){
        $query = $this->db->query('SELECT YEAR(j.datum_jazdy) AS rok, COUNT(z.ID) AS pocet FROM jazda j INNER JOIN zakaznik z ON j.Zakaznik_ID = z.ID GROUP BY YEAR(j.datum_jazdy) ORDER BY YEAR(j.datum_jazdy)');
        return $query->result_array();
    }
}