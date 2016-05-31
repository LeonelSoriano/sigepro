<?php

/**
 * Created by PhpStorm.
 * User: leonel
 * Date: 24/05/16
 * Time: 2:02
 */
class ObjetivoModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function insertObjetive(
        $descripcion,
        $alias,
        $select_responsable,
        $select_observador,
        $fecha_entrega,
        $hoursend,
        $inputStados,
        $userId,
        $ip,
        $idAsociado
    )
    {
        $hora_actual = date('H:i');
        $fecha_actual = date('Y-m-d');

        $dataProject = array(
            'nombre' => $descripcion,
            'alias' => $alias,
            'fecha_entrega' => $fecha_entrega,
            'hora_entrega' => $hoursend,
            'usuario_creador' => $userId,
            'direccion_ip' => $ip,
            'estado' => $inputStados,
            'codigo_proyecto' => $idAsociado
        );

        if($inputStados === 1){
            $dataProject['fecha_inicio'] = $fecha_actual;
            $dataProject['hora_inicio'] = $hora_actual;

        }else if($inputStados === 2){

            $dataProject['fecha_inicio'] = $fecha_actual;
            $dataProject['hora_inicio'] = $hora_actual;

        }else if($inputStados === 3){

            $dataProject['fecha_pausa'] = $fecha_actual;
            $dataProject['hora_pausa'] = $hora_actual;

        }else if($inputStados === 4){

            $dataProject['fecha_final'] = $fecha_actual;
            $dataProject['hora_final'] = $hora_actual;
        }


        $this->db->trans_start();

        $this->db->insert('objetivos', $dataProject);
        $insert_id = $this->db->insert_id();

        $dataObservador = array();

        for ($i = 0; $i < count($select_responsable); $i++) {
            array_push($dataObservador, array(
                'codigo_objetivo' => $insert_id,
                'codigo_usuario' => $select_responsable[$i]
            ));
        }

        if(count($select_responsable)>0){
            $this->db->insert_batch('observadores_objetivos', $dataObservador);
        }

        $dataResponsable = array();

        for ($i = 0; $i < count($select_observador); $i++) {
            array_push($dataResponsable, array(
                'codigo_objetivo' => $insert_id,
                'codigo_usuario' => $select_observador[$i]
            ));
        }

        if(count($select_observador)>0) {
            $this->db->insert_batch('responsables_objetivos', $dataResponsable);
        }
        $this->db->trans_complete();
    }


    function findForList($id)
    {
        $query = $this->db->query('SELECT codigo,nombre,alias,fecha_inicio,fecha_entrega FROM objetivos
                    WHERE objetivos.codigo_proyecto = ' . $id." AND fecha_eliminado ='0002-11-30'");
        return $query->result();
    }


    public function  findByid($id){

        $this->db->select('nombre,alias,fecha_entrega,hora_entrega');
        $this->db->from('objetivos');
        $this->db->where('codigo', $id);
        $query = $this->db->get();
        $result = $query->result();
        return $result[0];
    }

    public function estadoForCombo($id){
        $query = $this->db->query('
        SELECT estados.codigo as id,
              estados.nombre as name,
              IF(estados.codigo = 
              (SELECT objetivos.codigo FROM objetivos WHERE objetivos.codigo='.$id.'), 1, 0) as active
        FROM estados;
        ');
        return $query->result();
    }

    public function getMultiResposanble($id){

        $query = $this->db->query("SELECT
            usuarios.codigo as id,
            CONCAT(usuarios.nombre ,' ', usuarios.apellido) as name,
            0 as active
            FROM responsables_objetivos
            INNER  JOIN usuarios ON
            responsables_objetivos.codigo_usuario = usuarios.codigo
            WHERE responsables_objetivos.codigo_objetivo = $id");
        return $query->result();
    }

    public function  getMultiObservador($id){
        $query = $this->db->query("SELECT
            usuarios.codigo as id,
            CONCAT(usuarios.nombre ,' ', usuarios.apellido) as name,
            0 as active
            FROM observadores_objetivos
            INNER  JOIN usuarios ON
            observadores_objetivos.codigo_usuario = usuarios.codigo 
            WHERE observadores_objetivos.codigo_objetivo = $id ");
        return $query->result();
    }

    public function updateObjetivos(
        $descripcion,
        $alias,
        $select_responsable,
        $select_observador,
        $fecha_entrega,
        $hoursend,
        $inputStados,
        $userId,
        $ip,
        $idAsociado,
        $id
    ){
        $hora_actual = date('H:i');
        $fecha_actual = date('Y-m-d');

        $dataProject = array(
            'nombre' => $descripcion,
            'alias' => $alias,
            'fecha_entrega' => $fecha_entrega,
            'hora_entrega' => $hoursend,
            'usuario_creador' => $userId,
            'direccion_ip' => $ip,
            'estado' => $inputStados,
            'codigo_proyecto' => $idAsociado
        );

        if($inputStados === 1){
            $dataProject['fecha_inicio'] = $fecha_actual;
            $dataProject['hora_inicio'] = $hora_actual;

        }else if($inputStados === 2){

            $dataProject['fecha_inicio'] = $fecha_actual;
            $dataProject['hora_inicio'] = $hora_actual;

        }else if($inputStados === 3){

            $dataProject['fecha_pausa'] = $fecha_actual;
            $dataProject['hora_pausa'] = $hora_actual;

        }else if($inputStados === 4){

            $dataProject['fecha_final'] = $fecha_actual;
            $dataProject['hora_final'] = $hora_actual;
        }

        $this->db->trans_start();

        $this->db->where('codigo', $id);
        $this->db->update('objetivos', $dataProject);

        $this->db->delete('observadores_objetivos', array('codigo_objetivo' => $id));

        $this->db->delete('responsables_objetivos', array('codigo_objetivo' => $id));


        $dataObservador = array();

        for($i = 0;$i < count($select_responsable);$i++){
            array_push($dataObservador, array(
                'codigo_objetivo' => $id,
                'codigo_usuario' => $select_responsable[$i]
            ));
        }
        if(count($select_responsable) > 0){
            $this->db->insert_batch('responsables_objetivos', $dataObservador);
        }


        $dataResponsable = array();

        for($i = 0;$i < count($select_observador);$i++){
            array_push($dataResponsable, array(
                'codigo_objetivo' => $id,
                'codigo_usuario' => $select_observador[$i]
            ));
        }
        if(count($select_observador) > 0){
            $this->db->insert_batch('observadores_objetivos', $dataResponsable);
        }

        $this->db->trans_complete();
    }



    public function deleteObjetive($id){

        $fecha_actual = date('Y-m-d');

        $dataProject = array(
            'fecha_eliminado' => $fecha_actual
        );

        $this->db->where('codigo', $id);
        $this->db->update('objetivos', $dataProject);
    }


}//END CLASS