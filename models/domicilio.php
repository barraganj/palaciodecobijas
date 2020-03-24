<?php
	include dirname(__file__,2)."/config/conexion.php";
	/**
	*
	*/
	class domicilio
	{
		private $conn;
		private $link;

		function __construct()
		{
			$this->conn   = new Conexion();
			$this->link   = $this->conn->conectarse();
		}

		//Trae todos los domicilios registrados
		public function getdomicilio()
		{
			$query  ="SELECT * FROM tbldetalleventa";
			$result =mysqli_query($this->link,$query);
			$data   =array();
			while ($data[]=mysqli_fetch_assoc($result));
			array_pop($data);
			return $data;
		}

		//Crea una nuevo domicilio
		public function newdomicilio($data){
			$query  ="INSERT INTO tbldetalleventa (ID,IDVenta,IDProducto,Precio,Cantidad) VALUES ('".$data['ID']."','".$data['IDVenta']."','".$data['IDProducto']."','".$data['Precio']."','".$data['Cantidad']."')";
			$result =mysqli_query($this->link,$query);
			if(mysqli_affected_rows($this->link)>0){
				return true;
			}else{
				return false;
			}
		}

		//Obtiene el domiciclio por id
		public function getdomicilioById($ID=NULL){
			if(!empty($ID)){
				$query  ="SELECT * FROM tbldetalleventa WHERE ID=".$ID;
				$result =mysqli_query($this->link,$query);
				$data   =array();
				while ($data[]=mysqli_fetch_assoc($result));
				array_pop($data);
				return $data;
			}else{
				return false;
			}
		}

		//Obtiene el domicilio por id
		public function setEditdomicilio($data){
			if(!empty($data['ID'])){
				$query  ="UPDATE tbldetalleventa SET IDVenta='".$data['IDVenta']."',IDProducto='".$data['IDProducto']."', Precio='".$data['Precio']."',Cantidad='".$data['Cantidad']."' WHERE ID=".$data['ID'];
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

		//Borra el domicilio por id
		public function deletedomicilio($ID=NULL){
			if(!empty($ID)){
				$query  ="DELETE FROM tbldetalleventa WHERE ID=".$ID;
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
		public function getdomicilioBySearch($data=NULL){
			if(!empty($data)){
				$query  ="SELECT * FROM tbldetalleventa WHERE ID LIKE'%".$data."%' OR IDVenta LIKE'%".$data."%'";
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
