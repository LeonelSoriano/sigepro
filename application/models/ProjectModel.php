<?php
/**
 * Created by PhpStorm.
 * User: leonel
 * Date: 23/05/16
 * Time: 23:23
 */


class ProjectModel extends CI_Model{

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function insertProject(
        $descripcion,
        $alias,
        $select_responsable,
        $select_observador,
        $fecha_entrega,
        $hoursend,
        $inputStados,
        $userId,
        $ip
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
            'estado' => $inputStados
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


      $this->db->insert('proyectos', $dataProject);
        $insert_id = $this->db->insert_id();

        $dataObservador = array();

        for($i = 0;$i < count($select_responsable);$i++){
            array_push($dataObservador, array(
                'codigo_proyecto' => $insert_id,
                'codigo_usuario' => $select_responsable[$i]
            ));
        }

        if(count($select_responsable) > 0){
            $this->db->insert_batch('observadores_proyectos', $dataObservador);
        }

        $dataResponsable = array();

        for($i = 0;$i < count($select_observador);$i++){
            array_push($dataResponsable, array(
                'codigo_proyecto' => $insert_id,
                'codigo_usuario' => $select_observador[$i]
            ));
        }
        if(count($select_responsable) > 0) {
            $this->db->insert_batch('responsables_proyectos', $dataResponsable);
        }
        $this->db->trans_complete();
    }


    public function  findForList($id){
        $query = $this->db->query('select codigo,nombre,alias,fecha_inicio,fecha_entrega from proyectos 
        WHERE  proyectos.usuario_creador = '. $id  ." AND fecha_eliminado ='0002-11-30'" );
        return $query->result();
    }

    public function  findByid($id){

        $this->db->select('nombre,alias,fecha_creacion,hora_entrega');
        $this->db->from('proyectos');
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
              (SELECT proyectos.codigo FROM proyectos WHERE proyectos.codigo='.$id.'), 1, 0) as active
        FROM estados;
        ');
        return $query->result();
    }

    public function getMultiResposanble($id){

        $query = $this->db->query("SELECT
usuarios.codigo as id,
CONCAT(usuarios.nombre ,' ', usuarios.apellido) as name,
0 as active
FROM responsables_proyectos
INNER  JOIN usuarios ON
responsables_proyectos.codigo_usuario = usuarios.codigo
WHERE responsables_proyectos.codigo_proyecto = $id");
        return $query->result();
    }

    public function  getMultiObservador($id){
        $query = $this->db->query("SELECT
usuarios.codigo as id,
CONCAT(usuarios.nombre ,' ', usuarios.apellido) as name,
0 as active
FROM observadores_proyectos
INNER  JOIN usuarios ON
observadores_proyectos.codigo_usuario = usuarios.codigo 
WHERE observadores_proyectos.codigo_proyecto = $id ");
        return $query->result();
    }

    public function updateProyect($descripcion,
                           $alias,
                           $select_responsable,
                           $select_observador,
                           $fecha_entrega,
                           $hoursend,
                           $inputStados,
                           $userId,
                           $ip,
                           $id){


        $hora_actual = date('H:i');
        $fecha_actual = date('Y-m-d');

        $dataProject = array(
            'nombre' => $descripcion,
            'alias' => $alias,
            'fecha_entrega' => $fecha_entrega,
            'hora_entrega' => $hoursend,
            'usuario_creador' => $userId,
            'direccion_ip' => $ip,
            'estado' => $inputStados
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
        $this->db->update('proyectos', $dataProject);

        $this->db->delete('observadores_proyectos', array('codigo_proyecto' => $id));
        
        $this->db->delete('responsables_proyectos', array('codigo_proyecto' => $id));


        $dataObservador = array();

        for($i = 0;$i < count($select_responsable);$i++){
            array_push($dataObservador, array(
                'codigo_proyecto' => $id,
                'codigo_usuario' => $select_responsable[$i]
            ));
        }
        if(count($select_responsable) > 0){
            $this->db->insert_batch('observadores_proyectos', $dataObservador);
        }


        $dataResponsable = array();

        for($i = 0;$i < count($select_observador);$i++){
            array_push($dataResponsable, array(
                'codigo_proyecto' => $id,
                'codigo_usuario' => $select_observador[$i]
            ));
        }
        if(count($select_responsable) > 0){
            $this->db->insert_batch('responsables_proyectos', $dataResponsable);
        }

        $this->db->trans_complete();
    }
    
    
    public function deleteProject($id){

        $fecha_actual = date('Y-m-d');

        $dataProject = array(
            'fecha_eliminado' => $fecha_actual
        );

        $this->db->where('codigo', $id);
        $this->db->update('proyectos', $dataProject);
    }

    public function  findByidAlias($id){

        $this->db->select('nombre as ProjectNombre,alias as ProjectAlias,
            fecha_creacion as ProjectFechaCreacion,hora_entrega as ProjectHoraEntrega,
            fecha_entrega as ProjectFechaEntrega');
        $this->db->from('proyectos');
        $this->db->where('codigo', $id);
        $query = $this->db->get();
        $result = $query->result();
        return $result[0];
    }

}