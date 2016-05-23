<?php

/**
 * Created by PhpStorm.
 * User: leonel
 * Date: 19/05/16
 * Time: 0:13
 */
class ComponentProject
{

    //var db
    private $nameProject;
    private $alias;
    private $nameOperator;


    private $dateStart;
    private $dateEnd;
    private $dateDeathLine;
    private $dateInit;

    private $totalTask;
    private $completeTask;
    private $status;
    private $progres;
    private $img;

    /**
     * ComponentProject constructor.
     */
    public function __construct()
    {
        $this->nameProject = "projecto ejemplo";
        $this->alias = "Alias";
        $this->nameOperator = "nombre de operador";
        $this->dateStart = "2000-01-01";
        $this->dateEnd = "2000-01-02";
        $this->dateDeathLine = "2000-02-01";
        $this->status = "completado";
        $this->dateInit = "1999-20-20";
        $this->totalTask = "85";
        $this->completeTask = "03";
        $this->img = "img.png";
        $this->progres = "50%";
    }


    public  function renderHtml(){

        return "
        <div class='userWidget-1' style='margin-bottom: 50px;width: 100%'>
                        <div class='avatar'>
                            <div class='recordCount'>[C&oacute;digo <span class='cyelloworangeL'>".$this->nameProject."</span>]</div>
                            <img src=' ". base_url("uploads/".$this->img) ." ' alt='avatar'>
                            <div class='ops'>

                                <a href='javascript:void(0)' onclick='loadAjaxtProject(9,1)' title='Agregar Participantes' class='btn btn-icon btn-round btn-o btn-white btn-sm tooltips' data-trigger='hover' data-placement='bottom'><span class='fa  fa-user'></span></a>
                                <a href='javascript:void(0)' title='Ver Detalles' class='btn btn-icon btn-round btn-o btn-white btn-sm tooltips' data-trigger='hover' data-placement='bottom'><span class='fa fa-folder-open-o'></span></a>
                                <a href='javascript:void(0)' title='Modificar Registro' class='btn btn-icon btn-round btn-o btn-white btn-sm tooltips' data-trigger='hover' data-placement='bottom'><span class='fa fa-edit'></span></a>
                                <a href='javascript:void(0)' title='Eliminar' class='btn btn-icon btn-round btn-o btn-white btn-sm tooltips' data-trigger='hover' data-placement='bottom'><span class='fa fa-trash-o'></span></a>
                                <a href='javascript:void(0)' title='Objetivos del Proyecto' class='btn btn-icon btn-round btn-o btn-white btn-sm tooltips' data-trigger='hover' data-placement='bottom'><span class='fa fa-mortar-board'></span></a>

                                <a href='javascript:void(0)' title='Quien Participa en el Proyecto' class='btn btn-icon btn-round btn-o btn-white btn-sm tooltips' data-trigger='hover' data-placement='bottom'><span class='fa fa-users'></span></a>

                            </div>
                            <div class='name osLight'>
                                <span class='icon-badge'></span> ".$this->alias." 
                            </div>
                            <div class='name osLight' style='margin-left:10%;'>
                                Participantes
                            </div>
                        </div>
                        <div class='title'>
                   ".$this->nameOperator."
                    </div>
                        <div class='address'>
                    Operador :

                            | Fecha Tope: <span class='cred strong'>".$this->dateDeathLine."</span>
                        </div>
                        <div id='statusApoint'>

                            <span class='fa fa-rocket' style='font-size: 25px; float: right; margin-right: 25%; color:#cfcfcf'></span>

                            <div class='clearfix'></div>
                            <div class='reviews'>
				                ".$this->status."    
				            </div>
                        </div>
                        <div class='rating' style='clear: both;width:50%' >
                            <div class='number text-green osLight'>
                                <span class='icon-calendar'></span>
                            </div>
                            <span class='textEmail'>Fecha Inicio: (".$this->dateStart.")&nbsp;&nbsp;|| Fecha Final: (".$this->dateEnd.")</span>
                        </div>
                        <ul class='stats' style='width:50%'>
                            <li>
                            <span>
                                    ".$this->dateInit."                	
                                </span>
                                    <i class='icon-calendar'></i> Registrado en
                            </li>
                            <li>
                	<span>
                		 <span>
                		 	<tagtex class='cred cursorP strong tooltips' title='Tareas Pendientes' data-trigger='hover' data-placement='bottom'>".$this->completeTask."</tagtex> / <tagtex class='cursorP tooltips' title='Total de Tareas Creadas' data-trigger='hover' data-placement='bottom'>".$this->totalTask."</tagtex>
                		 </span>
                	</span>
                                <!--<div class='dividerHeight'></div>-->
                            <i class='fa fa-tags'></i> Tareas
                            </li>
                            
                            <li>
                                <span>".$this->progres."</span>
                                <i class='fa fa-keyboard-o'></i> Avance
                            </li>
                            
                        </ul>
                        <div class='clearfix'></div>
                    </div>    
        ";
    }


}


