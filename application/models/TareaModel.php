<?php
/**
 * Created by PhpStorm.
 * User: leonel
 * Date: 24/05/16
 * Time: 2:03
 */


class TareaModel extends CI_Model{

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
            'codigo_actividad' => $idAsociado
        );

        $this->db->insert('tareas', $dataProject);
        $insert_id = $this->db->insert_id();

        $dataObservador = array();

        for($i = 0;$i < count($select_responsable);$i++){
            array_push($dataObservador, array(
                'codigo_tareas' => $insert_id,
                'codigo_usuario' => $select_responsable[$i]
            ));
        }

        $this->db->insert_batch('observadores_tareas', $dataObservador);

        $dataResponsable = array();

        for($i = 0;$i < count($select_observador);$i++){
            array_push($dataResponsable, array(
                'codigo_tareas' => $insert_id,
                'codigo_usuario' => $select_observador[$i]
            ));
        }
        $this->db->insert_batch('responsables_tareas', $dataResponsable);

        $this->db->trans_complete();
    }

}