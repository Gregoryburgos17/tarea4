<?php
    
    class conexion{
         
      public $mycon=null;
      static $intancia=null;
          function __construct(){
           //esta linea es el error
          $this->mycon=mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
          }
          function __destruct(){
            mysqli_close($this->mycon);
          }

          public static  function ejecutar($sql){
            if(self::$intancia==null){
              self::$intancia= new conexion();
            }
            $srs= mysqli_query(self::$intancia->mycon,$sql);
            return $srs;
            
          }


          public static  function consulta($sql){
           if(self::$intancia==null){
             self::$intancia= new conexion();
           }
           $srs= mysqli_query(self::$intancia->mycon);
           $final=[];
           while($fila=mysqli_fetch_object($srs)){
             $final[]=$fila;
           }

        }
        public static  function consulta_array($sql){
          if(self::$intancia==null){
            
            self::$intancia= new conexion();
          }//41 esta dando error
          $srs= mysqli_query(self::$intancia->mycon);
          $final=[];//43 dando error
          while($fila=mysqli_fetch_assoc($srs)){
            $final[]=$fila;
          }

       }


    }
?>