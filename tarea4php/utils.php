<?php
include('lib/Configurix.php');
include('lib/conexion.php');
function asgInput($id, $label, $value="", $opts=[]){

    $placeholder = "";
    $type = "text";
    $inputtype = "";
    $readonly = "";

    if(isset($_POST[$id])){
        $value = $_POST[$id];
    }

    extract($opts);

    if($inputtype == "textarea"){
        return <<<INPUT
        <div>
            <label>{$label}</label>
            <textarea id="{$id}" rows="2"></textarea>
        </div>
        INPUT;
    }
    else{

        return <<<INPUT
        <div>
            <label>{$label}</label>
            <input required {$readonly} value="{$value}" type="{$type}" name="{$id}" id="{$id}" placeholder="{$placeholder}">
        </div>
        INPUT;
    }
    
}

function LoadTable1(){
    if(is_dir('data')){
        $datos=conexion::consulta_array('select * from registro');
 // 41 esta dando error
        foreach ($datos as $data) {
            
                echo "
                    <tr>
                        <td><img src='images/{$data['cedula']}.jpg' style='height: 80px;'></td>
                        <td>{$data['cedula']}</td>
                        <td>{$data['nombre']}</td>
                        <td>{$data['apellido']}</td>
                        <td>{$data['curso']}</td>
                        <td>
                            <a href='edit.php?ced={$data['cedula']}'>
                            <svg class='bi bi-pencil' width='2em' height='2em' viewBox='0 0 16 16' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
                            <path fill-rule='evenodd' d='M11.293 1.293a1 1 0 0 1 1.414 0l2 2a1 1 0 0 1 0 1.414l-9 9a1 1 0 0 1-.39.242l-3 1a1 1 0 0 1-1.266-1.265l1-3a1 1 0 0 1 .242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z'/>
                            <path fill-rule='evenodd' d='M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 0 0 .5.5H4v.5a.5.5 0 0 0 .5.5H5v.5a.5.5 0 0 0 .5.5H6v-1.5a.5.5 0 0 0-.5-.5H5v-.5a.5.5 0 0 0-.5-.5H3z'/>
                          </svg>
                            </a>
                        </td>
                    </tr>
                ";
        }
    }
}



?>