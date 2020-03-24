<?php
	include dirname(__file__,2)."/config/conexion.php";
	/**
	*
	*/
	class venta
	{
		private $conn;
		private $link;

		function __construct()
		{
			$this->conn   = new Conexion();
			$this->link   = $this->conn->conectarse();
		}

		//Trae todos las ventas registrados
		public function getventa()
		{
			$query  ="SELECT * FROM tblventas";
			$result =mysqli_query($this->link,$query);
			$data   =array();
			while ($data[]=mysqli_fetch_assoc($result));
			array_pop($data);
			return $data;
		}

		//Crea una nuevo venta
		public function newventa($data){
			$query  ="INSERT INTO tblventas (ID,ClaveTransaccion,PaypalDatos,Fecha,Correo,Total,Statu) VALUES ('".$data['ID']."','".$data['ClaveTransaccion']."','".$data['PaypalDatos']."','".$data['Fecha']."','".$data['Correo']."','".$data['Total']."','".$data['Statu']."')";
			$result =mysqli_query($this->link,$query);
			if(mysqli_affected_rows($this->link)>0){
				return true;
			}else{
				return false;
			}
		}

		//Obtiene la venta por id
		public function getventaById($ID=NULL){
			if(!empty($ID)){
				$query  ="SELECT * FROM tblventas WHERE ID=".$ID;
				$result =mysqli_query($this->link,$query);
				$data   =array();
				while ($data[]=mysqli_fetch_assoc($result));
				array_pop($data);
				return $data;
			}else{
				return false;
			}
		}

		//Obtiene la venta por id
		public function setEditventa($data){
			if(!empty($data['ID'])){
				$query  ="UPDATE tblventas SET ClaveTransaccion='".$data['ClaveTransaccion']."',PaypalDatos='".$data['PaypalDatos']."', Fecha='".$data['Fecha']."',Correo='".$data['Correo']."', Total='".$data['Total']."',Statu='".$data['Statu']."' WHERE ID=".$data['ID'];
				$result =mysqli_query($this->link,$query);
				if($result){
					return true;
				}else{
					return false;
				}
			}else{
				return false;
			}
		}

		//Borra la venta por id
		public function deleteventa($ID=NULL){
			if(!empty($ID)){
				$query  ="DELETE FROM tblventas WHERE ID=".$ID;
				$result =mysqli_query($this->link,$query);
				if(mysqli_affected_rows($this->link)>0){
					return true;
				}else{
					return false;
				}
			}else{
				return false;
			}
		}

		//Filtro de busqueda
		public function getventaBySearch($data=NULL){
			if(!empty($data)){
				$query  ="SELECT * FROM tblventas WHERE ID LIKE'%".$data."%' OR ClaveTransaccion LIKE'%".$data."%'";
				$result =mysqli_query($this->link,$query);
				$data   =array();
				while ($data[]=mysqli_fetch_assoc($result));
				array_pop($data);
				return $data;
			}else{
				return false;
			}
		}
	}
