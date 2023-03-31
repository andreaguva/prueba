<?php
class Usuario
{
	private $pdo;
    
    public $id;
    public $nombre;
    public $apellido;
    public $NoDocumento;
	public $direccion;
    public $telefono;
    public $email;
	public $password;
    public $nivel;



	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::Conectar();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM usuario");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM usuario WHERE id = ?");
			          

			$stm->execute(array($id));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($id)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM usuario WHERE id = ?");			          

			$stm->execute(array($id));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE usuario SET 
						nombre = ?, 
						apellido = ?,
						NoDocumento = ?, 
						direccion = ?,
						telefono = ?, 
						email = ?, 
						password = ?,
						nivel = ?
				    WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->nombre, 
                        $data->apellido,
                        $data->NoDocumento,
                        $data->direccion, 
						$data->telefono,
                        $data->email,
						$data->password,
                        $data->nivel,						
                        $data->id
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(Usuario $data)
	{
		try 
		{
		$sql = "INSERT INTO usuario (nombre,apellido,NoDocumento,direccion,telefono,email,password,nivel) 
		        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
					$data->nombre, 
					$data->apellido,
					$data->NoDocumento,
					$data->direccion, 
					$data->telefono,
					$data->email,
					$data->password,
					$data->nivel	
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}