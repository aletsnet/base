<?php
/**
 * Auto generated by PRADO - WSAT on 2018-02-02 08:31:03.
 * @author 
 */
class LBsRoles extends TActiveRecord
{
	const TABLE='bs_roles';

	public $id_roles;
	public $nombre;
	public $descripcion;
	public $activo;
	public $borrado;

	public static function finder($className=__CLASS__) {
                return parent::finder($className);
	}

	public static $RELATIONS = array (
		'bs_roles_servicios' => array(self::HAS_MANY, 'LBsRolesServicios', 'id_roles'),
		'bs_usuarios' => array(self::HAS_MANY, 'LBsUsuarios', 'id_roles')
	);

	public function __toString() {
		return $this->nombre;
	}
}