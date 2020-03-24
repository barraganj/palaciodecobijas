<?php
	include dirname(__file__,2)."/config/conexion.php";
	/**
	*
	*/
	class producto
	{
		private $conn;
		private $link;

		function __construct()
		{
			$this->conn   = new Conexion();
			$this->link   = $this->conn->conectarse();
		}

		//Trae todos los usuarios registrados
		public function getproductos()
		{
			$query  ="SELECT * FROM tblproductos";
			$result =mysqli_query($this->link,$query);
			$data   =array();
			while ($data[]=mysqli_fetch_assoc($result));
			array_pop($data);
			return $data;
		}

		//Crea un nuevo producto
		public function newproducto($data){
			$query  ="INSERT INTO tblproductos (ID,Nombre,Precio,Descripcion,Imagen) VALUES ('".$data['ID']."','".$data['Nombre']."','".$data['Precio']."','".$data['Descripcion']."','".$data['Imagen']."')";
			$result =mysqli_query($this->link,$query);
			if(mysqli_affected_rows($this->link)>0){
				return true;
			}else{
				return false;
			}
		}

		//Obtiene el producto por id
		public function getproductoById($ID=NULL){
			if(!empty($ID)){
				$query  ="SELECT * FROM tblproductos WHERE ID=".$ID;
				$result =mysqli_query($this->link,$query);
				$data   =array();
				while ($data[]=mysqli_fetch_assoc($result));
				array_pop($data);
				return $data;
			}else{
				return false;
			}
		}

		//Obtiene el producto por id
		public function setEditproducto($data){
			if(!empty($data['ID'])){
				$query  ="UPDATE tblproductos SET Nombre='".$data['Nombre']."',Precio='".$data['Precio']."', Descripcion='".$data['Descripcion']."',Imagen='".$data['Imagen']."' WHERE ID=".$data['ID'];
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

		//Borra el producto por id
		public function deleteproducto($ID=NULL){
			if(!empty($id)){
				$query  ="DELETE FROM tblproductos WHERE ID=".$ID;
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
		public function getproductoBySearch($data=NULL){
			if(!empty($data)){
				$query  ="SELECT * FROM tblproductos WHERE ID LIKE'%".$data."%' OR Nombre LIKE'%".$data."%'";
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
