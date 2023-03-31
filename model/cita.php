<?php
class Cita
{
	private $pdo;
    
    public $idCita;
    public $idCliente;
    public $fecha;
	public $descripcion;



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

			$stm = $this->pdo->prepare("SELECT * FROM cita ");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($idCita)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM cita WHERE idCita = ?");
			          

			$stm->execute(array($idCita));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($idCita)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM cita WHERE idCita = ?");			          

			$stm->execute(array($idCita));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try 
		{

			
			$sql = "UPDATE cita SET 
						idCliente = ?,
						fecha = ?,
                        descripcion = ?
				    WHERE idCita = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->idCliente,
						$data->fecha,
                        $data->descripcion,
                        $data->idCita
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(Cita $data)
	{
		try 
		{
		$sql = "INSERT INTO cita (idCliente,fecha,descripcion) 
		        VALUES (?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->idCliente,
					$data->fecha,
                    $data->descripcion
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	

}
