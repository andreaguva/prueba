<?php
class UsuarioCliente
{
	private $pdo;
    
    public $id;
    public $nombreCliente;
    public $apellidoCliente;
    public $telefonoCliente;
	public $NoDocumentoCliente;
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

			$stm = $this->pdo->prepare("SELECT * FROM comprador");
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
			          ->prepare("SELECT * FROM comprador WHERE id = ?");
			          

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
			            ->prepare("DELETE FROM comprador WHERE id = ?");			          

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
			$sql = "UPDATE comprador SET 
						nombreCliente = ?, 
						apellidoCliente = ?,
						telefonoCliente = ?, 
						NoDocumentoCliente = ?,
						email = ?, 
						password = ?,
						nivel = ?
				    WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->nombreCliente, 
                        $data->apellidoCliente,
                        $data->telefonoCliente,
                        $data->NoDocumentoCliente, 
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

	public function Registrar(UsuarioCliente $data)
	{
		try 
		{
		$sql = "INSERT INTO comprador (nombreCliente,apellidoCliente,telefonoCliente,NoDocumentoCliente,email,password,nivel) 
		        VALUES (?, ?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
					$data->nombreCliente, 
					$data->apellidoCliente,
					$data->telefonoCliente,
					$data->NoDocumentoCliente, 
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