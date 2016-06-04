<?php
/**
 * class from company
 * @Author leonelsoriano3@gmail.com
 * Date: 06/03/2016
 * Time: 08:05
*/

class EmpresaModel extends CI_Model{
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    
    public function getListAll(){
        $this->db->select('codigo,codigo_alterno,nombre,nombre_corto,rif,nit,
            direccion,telefono,responsable,telefono_responsable,correo_responsable,periodo');
        $this->db->from('empresas');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
        
    }
    
    public function getByid($id){
       $this->db->select('codigo,codigo_alterno,nombre,nombre_corto,rif,nit,
            direccion,telefono,responsable,telefono_responsable,correo_responsable,periodo');
        $this->db->from('empresas');
        $this->db->where('codigo', $id);
        $query = $this->db->get();
        $result = $query->result();
        return $result[0];
    }


    public function create(
        $codigo_alterno,
        $nombre,
        $nombre_corto,
        $rif,
        $nit,
        $direccion,
        $telefono,
        $responsable,
        $telefono_responsable,
        $correo_responsable
        ){
        $data = array(
            codigo_alterno => $codigo_alterno,
            nombre   => $nombre,
            nombre_corto => $nombre_corto,
            rif => $rif,
            nit => $nit,
            direccion => $direccion,
            telefono => $telefono,
            responsable => $responsable,
            telefono_responsable => $telefono_responsable,
            correo_responsable => $ $correo_responsable
        );

        $this->db->insert('empresas', $data);
    }

    public function  update(
        $id,
        $codigo_alterno,
        $nombre,
        $nombre_corto,
        $rif,
        $nit,
        $direccion,
        $telefono,
        $responsable,
        $telefono_responsable,
        $correo_responsable
    ){
        $data = array(
            codigo_alterno => $codigo_alterno,
            nombre   => $nombre,
            nombre_corto => $nombre_corto,
            rif => $rif,
            nit => $nit,
            direccion => $direccion,
            telefono => $telefono,
            responsable => $responsable,
            telefono_responsable => $telefono_responsable,
            correo_responsable => $ $correo_responsable
        );
        $this->db->where('codigo', $id);
        $this->db->update('empresas', $data);
    }


    public function deleteById($id){
        $this->db->trans_start();
        $this->db->select('count(*) as total');
        $this->db->from('usuarios');
        $this->db->where('codigo_empresa',$id);
        $useTotal = $this->db->get()->result()[0]->total;
        if($useTotal !== '0'){
            $this->db->trans_complete();
            return false;
        }
        $this->db->where('codigo', $id);
        $this->db->delete('empresas');

        $this->db->trans_complete();

        return true;
    }
    
    
}