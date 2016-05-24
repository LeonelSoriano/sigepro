<?php
/**
 * Created by PhpStorm.
 * User: leonel
 * Date: 24/05/16
 * Time: 2:02
 */

class ObjetivoModel extends CI_Model{

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function insertProject(
        $descripcion,
        $alias,
        $select_responsable,
        $select_observador,
        $fecha_inicio,
        $hourstart,
        $fecha_entrega,
        $hoursend,
        $fecha_final,
        $hoursfinal,
        $inputStados,
        $userId,
        $ip,
        $idAsociado
    ){
        $this->db->trans_start();
    //proyecto
        $dataProject = array(
            'nombre' => $descripcion,
            'alias' => $alias,
            'fecha_entrega' => $fecha_entrega,
            'fecha_inicio' => $fecha_inicio,
            'hora_inicio' => $hourstart,
            'fecha_final' => $fecha_final,
            'hora_final' => $hoursfinal,
            'hora_entrega' => $hoursend,
            'usuario_creador' => $userId,
            'direccion_ip' => $ip,
            'estado' => $inputStados,
            'codigo_proyecto' => $idAsociado
        );

        $this->db->insert('objetivos', $dataProject);
        $insert_id = $this->db->insert_id();

        $dataObservador = array();

        for($i = 0;$i < count($select_responsable);$i++){
            array_push($dataObservador, array(
                'codigo_objetivos' => $insert_id,
                'codigo_usuario' => $select_responsable[$i]
            ));
        }

        $this->db->insert_batch('observadores_objetivos', $dataObservador);

        $dataResponsable = array();

        for($i = 0;$i < count($select_observador);$i++){
            array_push($dataResponsable, array(
                'codigo_objetivos' => $insert_id,
                'codigo_usuario' => $select_observador[$i]
            ));
        }
        $this->db->insert_batch('responsables_objetivos', $dataResponsable);

        $this->db->trans_complete();
    }

}