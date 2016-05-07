<?php

namespace Dsg\agenciaBundle\Model\Base;

use \DateTime;
use \Exception;
use \PDO;
use Dsg\agenciaBundle\Model\Categoria as ChildCategoria;
use Dsg\agenciaBundle\Model\CategoriaQuery as ChildCategoriaQuery;
use Dsg\agenciaBundle\Model\TrabajosQuery as ChildTrabajosQuery;
use Dsg\agenciaBundle\Model\Map\TrabajosTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveRecord\ActiveRecordInterface;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\BadMethodCallException;
use Propel\Runtime\Exception\LogicException;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Parser\AbstractParser;
use Propel\Runtime\Util\PropelDateTime;

/**
 * Base class that represents a row from the 'trabajos' table.
 *
 *
 *
* @package    propel.generator.src.Dsg.agenciaBundle.Model.Base
*/
abstract class Trabajos implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Dsg\\agenciaBundle\\Model\\Map\\TrabajosTableMap';


    /**
     * attribute to determine if this object has previously been saved.
     * @var boolean
     */
    protected $new = true;

    /**
     * attribute to determine whether this object has been deleted.
     * @var boolean
     */
    protected $deleted = false;

    /**
     * The columns that have been modified in current object.
     * Tracking modified columns allows us to only update modified columns.
     * @var array
     */
    protected $modifiedColumns = array();

    /**
     * The (virtual) columns that are added at runtime
     * The formatters can add supplementary columns based on a resultset
     * @var array
     */
    protected $virtualColumns = array();

    /**
     * The value for the id field.
     *
     * @var        int
     */
    protected $id;

    /**
     * The value for the categoria_id field.
     *
     * @var        int
     */
    protected $categoria_id;

    /**
     * The value for the tipo field.
     *
     * @var        string
     */
    protected $tipo;

    /**
     * The value for the compania field.
     *
     * @var        string
     */
    protected $compania;

    /**
     * The value for the logo field.
     *
     * @var        string
     */
    protected $logo;

    /**
     * The value for the url field.
     *
     * @var        string
     */
    protected $url;

    /**
     * The value for the posicion field.
     *
     * @var        string
     */
    protected $posicion;

    /**
     * The value for the localidad field.
     *
     * @var        string
     */
    protected $localidad;

    /**
     * The value for the descripcion field.
     *
     * @var        string
     */
    protected $descripcion;

    /**
     * The value for the how_to_apply field.
     *
     * @var        string
     */
    protected $how_to_apply;

    /**
     * The value for the token field.
     *
     * @var        string
     */
    protected $token;

    /**
     * The value for the publico field.
     *
     * Note: this column has a database default value of: true
     * @var        boolean
     */
    protected $publico;

    /**
     * The value for the activado field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $activado;

    /**
     * The value for the email field.
     *
     * @var        string
     */
    protected $email;

    /**
     * The value for the finaliza field.
     *
     * @var        DateTime
     */
    protected $finaliza;

    /**
     * The value for the creado field.
     *
     * @var        DateTime
     */
    protected $creado;

    /**
     * The value for the actualizado field.
     *
     * @var        DateTime
     */
    protected $actualizado;

    /**
     * @var        ChildCategoria
     */
    protected $aCategoria;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var boolean
     */
    protected $alreadyInSave = false;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see __construct()
     */
    public function applyDefaultValues()
    {
        $this->publico = true;
        $this->activado = false;
    }

    /**
     * Initializes internal state of Dsg\agenciaBundle\Model\Base\Trabajos object.
     * @see applyDefaults()
     */
    public function __construct()
    {
        $this->applyDefaultValues();
    }

    /**
     * Returns whether the object has been modified.
     *
     * @return boolean True if the object has been modified.
     */
    public function isModified()
    {
        return !!$this->modifiedColumns;
    }

    /**
     * Has specified column been modified?
     *
     * @param  string  $col column fully qualified name (TableMap::TYPE_COLNAME), e.g. Book::AUTHOR_ID
     * @return boolean True if $col has been modified.
     */
    public function isColumnModified($col)
    {
        return $this->modifiedColumns && isset($this->modifiedColumns[$col]);
    }

    /**
     * Get the columns that have been modified in this object.
     * @return array A unique list of the modified column names for this object.
     */
    public function getModifiedColumns()
    {
        return $this->modifiedColumns ? array_keys($this->modifiedColumns) : [];
    }

    /**
     * Returns whether the object has ever been saved.  This will
     * be false, if the object was retrieved from storage or was created
     * and then saved.
     *
     * @return boolean true, if the object has never been persisted.
     */
    public function isNew()
    {
        return $this->new;
    }

    /**
     * Setter for the isNew attribute.  This method will be called
     * by Propel-generated children and objects.
     *
     * @param boolean $b the state of the object.
     */
    public function setNew($b)
    {
        $this->new = (boolean) $b;
    }

    /**
     * Whether this object has been deleted.
     * @return boolean The deleted state of this object.
     */
    public function isDeleted()
    {
        return $this->deleted;
    }

    /**
     * Specify whether this object has been deleted.
     * @param  boolean $b The deleted state of this object.
     * @return void
     */
    public function setDeleted($b)
    {
        $this->deleted = (boolean) $b;
    }

    /**
     * Sets the modified state for the object to be false.
     * @param  string $col If supplied, only the specified column is reset.
     * @return void
     */
    public function resetModified($col = null)
    {
        if (null !== $col) {
            if (isset($this->modifiedColumns[$col])) {
                unset($this->modifiedColumns[$col]);
            }
        } else {
            $this->modifiedColumns = array();
        }
    }

    /**
     * Compares this with another <code>Trabajos</code> instance.  If
     * <code>obj</code> is an instance of <code>Trabajos</code>, delegates to
     * <code>equals(Trabajos)</code>.  Otherwise, returns <code>false</code>.
     *
     * @param  mixed   $obj The object to compare to.
     * @return boolean Whether equal to the object specified.
     */
    public function equals($obj)
    {
        if (!$obj instanceof static) {
            return false;
        }

        if ($this === $obj) {
            return true;
        }

        if (null === $this->getPrimaryKey() || null === $obj->getPrimaryKey()) {
            return false;
        }

        return $this->getPrimaryKey() === $obj->getPrimaryKey();
    }

    /**
     * Get the associative array of the virtual columns in this object
     *
     * @return array
     */
    public function getVirtualColumns()
    {
        return $this->virtualColumns;
    }

    /**
     * Checks the existence of a virtual column in this object
     *
     * @param  string  $name The virtual column name
     * @return boolean
     */
    public function hasVirtualColumn($name)
    {
        return array_key_exists($name, $this->virtualColumns);
    }

    /**
     * Get the value of a virtual column in this object
     *
     * @param  string $name The virtual column name
     * @return mixed
     *
     * @throws PropelException
     */
    public function getVirtualColumn($name)
    {
        if (!$this->hasVirtualColumn($name)) {
            throw new PropelException(sprintf('Cannot get value of inexistent virtual column %s.', $name));
        }

        return $this->virtualColumns[$name];
    }

    /**
     * Set the value of a virtual column in this object
     *
     * @param string $name  The virtual column name
     * @param mixed  $value The value to give to the virtual column
     *
     * @return $this|Trabajos The current object, for fluid interface
     */
    public function setVirtualColumn($name, $value)
    {
        $this->virtualColumns[$name] = $value;

        return $this;
    }

    /**
     * Logs a message using Propel::log().
     *
     * @param  string  $msg
     * @param  int     $priority One of the Propel::LOG_* logging levels
     * @return boolean
     */
    protected function log($msg, $priority = Propel::LOG_INFO)
    {
        return Propel::log(get_class($this) . ': ' . $msg, $priority);
    }

    /**
     * Export the current object properties to a string, using a given parser format
     * <code>
     * $book = BookQuery::create()->findPk(9012);
     * echo $book->exportTo('JSON');
     *  => {"Id":9012,"Title":"Don Juan","ISBN":"0140422161","Price":12.99,"PublisherId":1234,"AuthorId":5678}');
     * </code>
     *
     * @param  mixed   $parser                 A AbstractParser instance, or a format name ('XML', 'YAML', 'JSON', 'CSV')
     * @param  boolean $includeLazyLoadColumns (optional) Whether to include lazy load(ed) columns. Defaults to TRUE.
     * @return string  The exported data
     */
    public function exportTo($parser, $includeLazyLoadColumns = true)
    {
        if (!$parser instanceof AbstractParser) {
            $parser = AbstractParser::getParser($parser);
        }

        return $parser->fromArray($this->toArray(TableMap::TYPE_PHPNAME, $includeLazyLoadColumns, array(), true));
    }

    /**
     * Clean up internal collections prior to serializing
     * Avoids recursive loops that turn into segmentation faults when serializing
     */
    public function __sleep()
    {
        $this->clearAllReferences();

        $cls = new \ReflectionClass($this);
        $propertyNames = [];
        $serializableProperties = array_diff($cls->getProperties(), $cls->getProperties(\ReflectionProperty::IS_STATIC));

        foreach($serializableProperties as $property) {
            $propertyNames[] = $property->getName();
        }

        return $propertyNames;
    }

    /**
     * Get the [id] column value.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the [categoria_id] column value.
     *
     * @return int
     */
    public function getCategoriaId()
    {
        return $this->categoria_id;
    }

    /**
     * Get the [tipo] column value.
     *
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Get the [compania] column value.
     *
     * @return string
     */
    public function getCompania()
    {
        return $this->compania;
    }

    /**
     * Get the [logo] column value.
     *
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Get the [url] column value.
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Get the [posicion] column value.
     *
     * @return string
     */
    public function getPosicion()
    {
        return $this->posicion;
    }

    /**
     * Get the [localidad] column value.
     *
     * @return string
     */
    public function getLocalidad()
    {
        return $this->localidad;
    }

    /**
     * Get the [descripcion] column value.
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Get the [how_to_apply] column value.
     *
     * @return string
     */
    public function getHowToApply()
    {
        return $this->how_to_apply;
    }

    /**
     * Get the [token] column value.
     *
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Get the [publico] column value.
     *
     * @return boolean
     */
    public function getPublico()
    {
        return $this->publico;
    }

    /**
     * Get the [publico] column value.
     *
     * @return boolean
     */
    public function isPublico()
    {
        return $this->getPublico();
    }

    /**
     * Get the [activado] column value.
     *
     * @return boolean
     */
    public function getActivado()
    {
        return $this->activado;
    }

    /**
     * Get the [activado] column value.
     *
     * @return boolean
     */
    public function isActivado()
    {
        return $this->getActivado();
    }

    /**
     * Get the [email] column value.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Get the [optionally formatted] temporal [finaliza] column value.
     *
     *
     * @param      string $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getFinaliza($format = NULL)
    {
        if ($format === null) {
            return $this->finaliza;
        } else {
            return $this->finaliza instanceof \DateTimeInterface ? $this->finaliza->format($format) : null;
        }
    }

    /**
     * Get the [optionally formatted] temporal [creado] column value.
     *
     *
     * @param      string $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getCreado($format = NULL)
    {
        if ($format === null) {
            return $this->creado;
        } else {
            return $this->creado instanceof \DateTimeInterface ? $this->creado->format($format) : null;
        }
    }

    /**
     * Get the [optionally formatted] temporal [actualizado] column value.
     *
     *
     * @param      string $format The date/time format string (either date()-style or strftime()-style).
     *                            If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
     *
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getActualizado($format = NULL)
    {
        if ($format === null) {
            return $this->actualizado;
        } else {
            return $this->actualizado instanceof \DateTimeInterface ? $this->actualizado->format($format) : null;
        }
    }

    /**
     * Set the value of [id] column.
     *
     * @param int $v new value
     * @return $this|\Dsg\agenciaBundle\Model\Trabajos The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[TrabajosTableMap::COL_ID] = true;
        }

        return $this;
    } // setId()

    /**
     * Set the value of [categoria_id] column.
     *
     * @param int $v new value
     * @return $this|\Dsg\agenciaBundle\Model\Trabajos The current object (for fluent API support)
     */
    public function setCategoriaId($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->categoria_id !== $v) {
            $this->categoria_id = $v;
            $this->modifiedColumns[TrabajosTableMap::COL_CATEGORIA_ID] = true;
        }

        if ($this->aCategoria !== null && $this->aCategoria->getId() !== $v) {
            $this->aCategoria = null;
        }

        return $this;
    } // setCategoriaId()

    /**
     * Set the value of [tipo] column.
     *
     * @param string $v new value
     * @return $this|\Dsg\agenciaBundle\Model\Trabajos The current object (for fluent API support)
     */
    public function setTipo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->tipo !== $v) {
            $this->tipo = $v;
            $this->modifiedColumns[TrabajosTableMap::COL_TIPO] = true;
        }

        return $this;
    } // setTipo()

    /**
     * Set the value of [compania] column.
     *
     * @param string $v new value
     * @return $this|\Dsg\agenciaBundle\Model\Trabajos The current object (for fluent API support)
     */
    public function setCompania($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->compania !== $v) {
            $this->compania = $v;
            $this->modifiedColumns[TrabajosTableMap::COL_COMPANIA] = true;
        }

        return $this;
    } // setCompania()

    /**
     * Set the value of [logo] column.
     *
     * @param string $v new value
     * @return $this|\Dsg\agenciaBundle\Model\Trabajos The current object (for fluent API support)
     */
    public function setLogo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->logo !== $v) {
            $this->logo = $v;
            $this->modifiedColumns[TrabajosTableMap::COL_LOGO] = true;
        }

        return $this;
    } // setLogo()

    /**
     * Set the value of [url] column.
     *
     * @param string $v new value
     * @return $this|\Dsg\agenciaBundle\Model\Trabajos The current object (for fluent API support)
     */
    public function setUrl($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->url !== $v) {
            $this->url = $v;
            $this->modifiedColumns[TrabajosTableMap::COL_URL] = true;
        }

        return $this;
    } // setUrl()

    /**
     * Set the value of [posicion] column.
     *
     * @param string $v new value
     * @return $this|\Dsg\agenciaBundle\Model\Trabajos The current object (for fluent API support)
     */
    public function setPosicion($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->posicion !== $v) {
            $this->posicion = $v;
            $this->modifiedColumns[TrabajosTableMap::COL_POSICION] = true;
        }

        return $this;
    } // setPosicion()

    /**
     * Set the value of [localidad] column.
     *
     * @param string $v new value
     * @return $this|\Dsg\agenciaBundle\Model\Trabajos The current object (for fluent API support)
     */
    public function setLocalidad($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->localidad !== $v) {
            $this->localidad = $v;
            $this->modifiedColumns[TrabajosTableMap::COL_LOCALIDAD] = true;
        }

        return $this;
    } // setLocalidad()

    /**
     * Set the value of [descripcion] column.
     *
     * @param string $v new value
     * @return $this|\Dsg\agenciaBundle\Model\Trabajos The current object (for fluent API support)
     */
    public function setDescripcion($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->descripcion !== $v) {
            $this->descripcion = $v;
            $this->modifiedColumns[TrabajosTableMap::COL_DESCRIPCION] = true;
        }

        return $this;
    } // setDescripcion()

    /**
     * Set the value of [how_to_apply] column.
     *
     * @param string $v new value
     * @return $this|\Dsg\agenciaBundle\Model\Trabajos The current object (for fluent API support)
     */
    public function setHowToApply($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->how_to_apply !== $v) {
            $this->how_to_apply = $v;
            $this->modifiedColumns[TrabajosTableMap::COL_HOW_TO_APPLY] = true;
        }

        return $this;
    } // setHowToApply()

    /**
     * Set the value of [token] column.
     *
     * @param string $v new value
     * @return $this|\Dsg\agenciaBundle\Model\Trabajos The current object (for fluent API support)
     */
    public function setToken($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->token !== $v) {
            $this->token = $v;
            $this->modifiedColumns[TrabajosTableMap::COL_TOKEN] = true;
        }

        return $this;
    } // setToken()

    /**
     * Sets the value of the [publico] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\Dsg\agenciaBundle\Model\Trabajos The current object (for fluent API support)
     */
    public function setPublico($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->publico !== $v) {
            $this->publico = $v;
            $this->modifiedColumns[TrabajosTableMap::COL_PUBLICO] = true;
        }

        return $this;
    } // setPublico()

    /**
     * Sets the value of the [activado] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param  boolean|integer|string $v The new value
     * @return $this|\Dsg\agenciaBundle\Model\Trabajos The current object (for fluent API support)
     */
    public function setActivado($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->activado !== $v) {
            $this->activado = $v;
            $this->modifiedColumns[TrabajosTableMap::COL_ACTIVADO] = true;
        }

        return $this;
    } // setActivado()

    /**
     * Set the value of [email] column.
     *
     * @param string $v new value
     * @return $this|\Dsg\agenciaBundle\Model\Trabajos The current object (for fluent API support)
     */
    public function setEmail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->email !== $v) {
            $this->email = $v;
            $this->modifiedColumns[TrabajosTableMap::COL_EMAIL] = true;
        }

        return $this;
    } // setEmail()

    /**
     * Sets the value of [finaliza] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\Dsg\agenciaBundle\Model\Trabajos The current object (for fluent API support)
     */
    public function setFinaliza($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->finaliza !== null || $dt !== null) {
            if ($this->finaliza === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->finaliza->format("Y-m-d H:i:s.u")) {
                $this->finaliza = $dt === null ? null : clone $dt;
                $this->modifiedColumns[TrabajosTableMap::COL_FINALIZA] = true;
            }
        } // if either are not null

        return $this;
    } // setFinaliza()

    /**
     * Sets the value of [creado] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\Dsg\agenciaBundle\Model\Trabajos The current object (for fluent API support)
     */
    public function setCreado($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->creado !== null || $dt !== null) {
            if ($this->creado === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->creado->format("Y-m-d H:i:s.u")) {
                $this->creado = $dt === null ? null : clone $dt;
                $this->modifiedColumns[TrabajosTableMap::COL_CREADO] = true;
            }
        } // if either are not null

        return $this;
    } // setCreado()

    /**
     * Sets the value of [actualizado] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\Dsg\agenciaBundle\Model\Trabajos The current object (for fluent API support)
     */
    public function setActualizado($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->actualizado !== null || $dt !== null) {
            if ($this->actualizado === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->actualizado->format("Y-m-d H:i:s.u")) {
                $this->actualizado = $dt === null ? null : clone $dt;
                $this->modifiedColumns[TrabajosTableMap::COL_ACTUALIZADO] = true;
            }
        } // if either are not null

        return $this;
    } // setActualizado()

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return boolean Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues()
    {
            if ($this->publico !== true) {
                return false;
            }

            if ($this->activado !== false) {
                return false;
            }

        // otherwise, everything was equal, so return TRUE
        return true;
    } // hasOnlyDefaultValues()

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param array   $row       The row returned by DataFetcher->fetch().
     * @param int     $startcol  0-based offset column which indicates which restultset column to start with.
     * @param boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @param string  $indexType The index type of $row. Mostly DataFetcher->getIndexType().
                                  One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                            TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false, $indexType = TableMap::TYPE_NUM)
    {
        try {

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : TrabajosTableMap::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)];
            $this->id = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : TrabajosTableMap::translateFieldName('CategoriaId', TableMap::TYPE_PHPNAME, $indexType)];
            $this->categoria_id = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : TrabajosTableMap::translateFieldName('Tipo', TableMap::TYPE_PHPNAME, $indexType)];
            $this->tipo = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : TrabajosTableMap::translateFieldName('Compania', TableMap::TYPE_PHPNAME, $indexType)];
            $this->compania = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : TrabajosTableMap::translateFieldName('Logo', TableMap::TYPE_PHPNAME, $indexType)];
            $this->logo = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : TrabajosTableMap::translateFieldName('Url', TableMap::TYPE_PHPNAME, $indexType)];
            $this->url = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : TrabajosTableMap::translateFieldName('Posicion', TableMap::TYPE_PHPNAME, $indexType)];
            $this->posicion = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : TrabajosTableMap::translateFieldName('Localidad', TableMap::TYPE_PHPNAME, $indexType)];
            $this->localidad = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : TrabajosTableMap::translateFieldName('Descripcion', TableMap::TYPE_PHPNAME, $indexType)];
            $this->descripcion = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : TrabajosTableMap::translateFieldName('HowToApply', TableMap::TYPE_PHPNAME, $indexType)];
            $this->how_to_apply = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : TrabajosTableMap::translateFieldName('Token', TableMap::TYPE_PHPNAME, $indexType)];
            $this->token = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : TrabajosTableMap::translateFieldName('Publico', TableMap::TYPE_PHPNAME, $indexType)];
            $this->publico = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : TrabajosTableMap::translateFieldName('Activado', TableMap::TYPE_PHPNAME, $indexType)];
            $this->activado = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : TrabajosTableMap::translateFieldName('Email', TableMap::TYPE_PHPNAME, $indexType)];
            $this->email = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : TrabajosTableMap::translateFieldName('Finaliza', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->finaliza = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : TrabajosTableMap::translateFieldName('Creado', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->creado = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : TrabajosTableMap::translateFieldName('Actualizado', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->actualizado = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 17; // 17 = TrabajosTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\Dsg\\agenciaBundle\\Model\\Trabajos'), 0, $e);
        }
    }

    /**
     * Checks and repairs the internal consistency of the object.
     *
     * This method is executed after an already-instantiated object is re-hydrated
     * from the database.  It exists to check any foreign keys to make sure that
     * the objects related to the current object are correct based on foreign key.
     *
     * You can override this method in the stub class, but you should always invoke
     * the base method from the overridden method (i.e. parent::ensureConsistency()),
     * in case your model changes.
     *
     * @throws PropelException
     */
    public function ensureConsistency()
    {
        if ($this->aCategoria !== null && $this->categoria_id !== $this->aCategoria->getId()) {
            $this->aCategoria = null;
        }
    } // ensureConsistency

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param      boolean $deep (optional) Whether to also de-associated any related objects.
     * @param      ConnectionInterface $con (optional) The ConnectionInterface connection to use.
     * @return void
     * @throws PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload($deep = false, ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(TrabajosTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildTrabajosQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCategoria = null;
        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see Trabajos::setDeleted()
     * @see Trabajos::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(TrabajosTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildTrabajosQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                $this->setDeleted(true);
            }
        });
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param      ConnectionInterface $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see doSave()
     */
    public function save(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(TrabajosTableMap::DATABASE_NAME);
        }

        return $con->transaction(function () use ($con) {
            $ret = $this->preSave($con);
            $isInsert = $this->isNew();
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
            } else {
                $ret = $ret && $this->preUpdate($con);
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                TrabajosTableMap::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }

            return $affectedRows;
        });
    }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param      ConnectionInterface $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see save()
     */
    protected function doSave(ConnectionInterface $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            // We call the save method on the following object(s) if they
            // were passed to this object by their corresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aCategoria !== null) {
                if ($this->aCategoria->isModified() || $this->aCategoria->isNew()) {
                    $affectedRows += $this->aCategoria->save($con);
                }
                $this->setCategoria($this->aCategoria);
            }

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                    $affectedRows += 1;
                } else {
                    $affectedRows += $this->doUpdate($con);
                }
                $this->resetModified();
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param      ConnectionInterface $con
     *
     * @throws PropelException
     * @see doSave()
     */
    protected function doInsert(ConnectionInterface $con)
    {
        $modifiedColumns = array();
        $index = 0;

        $this->modifiedColumns[TrabajosTableMap::COL_ID] = true;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . TrabajosTableMap::COL_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(TrabajosTableMap::COL_ID)) {
            $modifiedColumns[':p' . $index++]  = 'id';
        }
        if ($this->isColumnModified(TrabajosTableMap::COL_CATEGORIA_ID)) {
            $modifiedColumns[':p' . $index++]  = 'categoria_id';
        }
        if ($this->isColumnModified(TrabajosTableMap::COL_TIPO)) {
            $modifiedColumns[':p' . $index++]  = 'tipo';
        }
        if ($this->isColumnModified(TrabajosTableMap::COL_COMPANIA)) {
            $modifiedColumns[':p' . $index++]  = 'compania';
        }
        if ($this->isColumnModified(TrabajosTableMap::COL_LOGO)) {
            $modifiedColumns[':p' . $index++]  = 'logo';
        }
        if ($this->isColumnModified(TrabajosTableMap::COL_URL)) {
            $modifiedColumns[':p' . $index++]  = 'url';
        }
        if ($this->isColumnModified(TrabajosTableMap::COL_POSICION)) {
            $modifiedColumns[':p' . $index++]  = 'posicion';
        }
        if ($this->isColumnModified(TrabajosTableMap::COL_LOCALIDAD)) {
            $modifiedColumns[':p' . $index++]  = 'localidad';
        }
        if ($this->isColumnModified(TrabajosTableMap::COL_DESCRIPCION)) {
            $modifiedColumns[':p' . $index++]  = 'descripcion';
        }
        if ($this->isColumnModified(TrabajosTableMap::COL_HOW_TO_APPLY)) {
            $modifiedColumns[':p' . $index++]  = 'how_to_apply';
        }
        if ($this->isColumnModified(TrabajosTableMap::COL_TOKEN)) {
            $modifiedColumns[':p' . $index++]  = 'token';
        }
        if ($this->isColumnModified(TrabajosTableMap::COL_PUBLICO)) {
            $modifiedColumns[':p' . $index++]  = 'publico';
        }
        if ($this->isColumnModified(TrabajosTableMap::COL_ACTIVADO)) {
            $modifiedColumns[':p' . $index++]  = 'activado';
        }
        if ($this->isColumnModified(TrabajosTableMap::COL_EMAIL)) {
            $modifiedColumns[':p' . $index++]  = 'email';
        }
        if ($this->isColumnModified(TrabajosTableMap::COL_FINALIZA)) {
            $modifiedColumns[':p' . $index++]  = 'finaliza';
        }
        if ($this->isColumnModified(TrabajosTableMap::COL_CREADO)) {
            $modifiedColumns[':p' . $index++]  = 'creado';
        }
        if ($this->isColumnModified(TrabajosTableMap::COL_ACTUALIZADO)) {
            $modifiedColumns[':p' . $index++]  = 'actualizado';
        }

        $sql = sprintf(
            'INSERT INTO trabajos (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'id':
                        $stmt->bindValue($identifier, $this->id, PDO::PARAM_INT);
                        break;
                    case 'categoria_id':
                        $stmt->bindValue($identifier, $this->categoria_id, PDO::PARAM_INT);
                        break;
                    case 'tipo':
                        $stmt->bindValue($identifier, $this->tipo, PDO::PARAM_STR);
                        break;
                    case 'compania':
                        $stmt->bindValue($identifier, $this->compania, PDO::PARAM_STR);
                        break;
                    case 'logo':
                        $stmt->bindValue($identifier, $this->logo, PDO::PARAM_STR);
                        break;
                    case 'url':
                        $stmt->bindValue($identifier, $this->url, PDO::PARAM_STR);
                        break;
                    case 'posicion':
                        $stmt->bindValue($identifier, $this->posicion, PDO::PARAM_STR);
                        break;
                    case 'localidad':
                        $stmt->bindValue($identifier, $this->localidad, PDO::PARAM_STR);
                        break;
                    case 'descripcion':
                        $stmt->bindValue($identifier, $this->descripcion, PDO::PARAM_STR);
                        break;
                    case 'how_to_apply':
                        $stmt->bindValue($identifier, $this->how_to_apply, PDO::PARAM_STR);
                        break;
                    case 'token':
                        $stmt->bindValue($identifier, $this->token, PDO::PARAM_STR);
                        break;
                    case 'publico':
                        $stmt->bindValue($identifier, (int) $this->publico, PDO::PARAM_INT);
                        break;
                    case 'activado':
                        $stmt->bindValue($identifier, (int) $this->activado, PDO::PARAM_INT);
                        break;
                    case 'email':
                        $stmt->bindValue($identifier, $this->email, PDO::PARAM_STR);
                        break;
                    case 'finaliza':
                        $stmt->bindValue($identifier, $this->finaliza ? $this->finaliza->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'creado':
                        $stmt->bindValue($identifier, $this->creado ? $this->creado->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                    case 'actualizado':
                        $stmt->bindValue($identifier, $this->actualizado ? $this->actualizado->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), 0, $e);
        }

        try {
            $pk = $con->lastInsertId();
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', 0, $e);
        }
        $this->setId($pk);

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param      ConnectionInterface $con
     *
     * @return Integer Number of updated rows
     * @see doSave()
     */
    protected function doUpdate(ConnectionInterface $con)
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();

        return $selectCriteria->doUpdate($valuesCriteria, $con);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param      string $name name
     * @param      string $type The type of fieldname the $name is of:
     *                     one of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                     TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *                     Defaults to TableMap::TYPE_PHPNAME.
     * @return mixed Value of field.
     */
    public function getByName($name, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = TrabajosTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param      int $pos position in xml schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch ($pos) {
            case 0:
                return $this->getId();
                break;
            case 1:
                return $this->getCategoriaId();
                break;
            case 2:
                return $this->getTipo();
                break;
            case 3:
                return $this->getCompania();
                break;
            case 4:
                return $this->getLogo();
                break;
            case 5:
                return $this->getUrl();
                break;
            case 6:
                return $this->getPosicion();
                break;
            case 7:
                return $this->getLocalidad();
                break;
            case 8:
                return $this->getDescripcion();
                break;
            case 9:
                return $this->getHowToApply();
                break;
            case 10:
                return $this->getToken();
                break;
            case 11:
                return $this->getPublico();
                break;
            case 12:
                return $this->getActivado();
                break;
            case 13:
                return $this->getEmail();
                break;
            case 14:
                return $this->getFinaliza();
                break;
            case 15:
                return $this->getCreado();
                break;
            case 16:
                return $this->getActualizado();
                break;
            default:
                return null;
                break;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param     string  $keyType (optional) One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME,
     *                    TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *                    Defaults to TableMap::TYPE_PHPNAME.
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to TRUE.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = TableMap::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
    {

        if (isset($alreadyDumpedObjects['Trabajos'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Trabajos'][$this->hashCode()] = true;
        $keys = TrabajosTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getCategoriaId(),
            $keys[2] => $this->getTipo(),
            $keys[3] => $this->getCompania(),
            $keys[4] => $this->getLogo(),
            $keys[5] => $this->getUrl(),
            $keys[6] => $this->getPosicion(),
            $keys[7] => $this->getLocalidad(),
            $keys[8] => $this->getDescripcion(),
            $keys[9] => $this->getHowToApply(),
            $keys[10] => $this->getToken(),
            $keys[11] => $this->getPublico(),
            $keys[12] => $this->getActivado(),
            $keys[13] => $this->getEmail(),
            $keys[14] => $this->getFinaliza(),
            $keys[15] => $this->getCreado(),
            $keys[16] => $this->getActualizado(),
        );
        if ($result[$keys[14]] instanceof \DateTime) {
            $result[$keys[14]] = $result[$keys[14]]->format('c');
        }

        if ($result[$keys[15]] instanceof \DateTime) {
            $result[$keys[15]] = $result[$keys[15]]->format('c');
        }

        if ($result[$keys[16]] instanceof \DateTime) {
            $result[$keys[16]] = $result[$keys[16]]->format('c');
        }

        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aCategoria) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'categoria';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'categoria';
                        break;
                    default:
                        $key = 'Categoria';
                }

                $result[$key] = $this->aCategoria->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
        }

        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param  string $name
     * @param  mixed  $value field value
     * @param  string $type The type of fieldname the $name is of:
     *                one of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *                Defaults to TableMap::TYPE_PHPNAME.
     * @return $this|\Dsg\agenciaBundle\Model\Trabajos
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = TrabajosTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\Dsg\agenciaBundle\Model\Trabajos
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setId($value);
                break;
            case 1:
                $this->setCategoriaId($value);
                break;
            case 2:
                $this->setTipo($value);
                break;
            case 3:
                $this->setCompania($value);
                break;
            case 4:
                $this->setLogo($value);
                break;
            case 5:
                $this->setUrl($value);
                break;
            case 6:
                $this->setPosicion($value);
                break;
            case 7:
                $this->setLocalidad($value);
                break;
            case 8:
                $this->setDescripcion($value);
                break;
            case 9:
                $this->setHowToApply($value);
                break;
            case 10:
                $this->setToken($value);
                break;
            case 11:
                $this->setPublico($value);
                break;
            case 12:
                $this->setActivado($value);
                break;
            case 13:
                $this->setEmail($value);
                break;
            case 14:
                $this->setFinaliza($value);
                break;
            case 15:
                $this->setCreado($value);
                break;
            case 16:
                $this->setActualizado($value);
                break;
        } // switch()

        return $this;
    }

    /**
     * Populates the object using an array.
     *
     * This is particularly useful when populating an object from one of the
     * request arrays (e.g. $_POST).  This method goes through the column
     * names, checking to see whether a matching key exists in populated
     * array. If so the setByName() method is called for that column.
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME,
     * TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     * The default key type is the column's TableMap::TYPE_PHPNAME.
     *
     * @param      array  $arr     An array to populate the object from.
     * @param      string $keyType The type of keys the array uses.
     * @return void
     */
    public function fromArray($arr, $keyType = TableMap::TYPE_PHPNAME)
    {
        $keys = TrabajosTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setId($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setCategoriaId($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setTipo($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setCompania($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setLogo($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setUrl($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setPosicion($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setLocalidad($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setDescripcion($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setHowToApply($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setToken($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setPublico($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setActivado($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setEmail($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setFinaliza($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setCreado($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setActualizado($arr[$keys[16]]);
        }
    }

     /**
     * Populate the current object from a string, using a given parser format
     * <code>
     * $book = new Book();
     * $book->importFrom('JSON', '{"Id":9012,"Title":"Don Juan","ISBN":"0140422161","Price":12.99,"PublisherId":1234,"AuthorId":5678}');
     * </code>
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME,
     * TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     * The default key type is the column's TableMap::TYPE_PHPNAME.
     *
     * @param mixed $parser A AbstractParser instance,
     *                       or a format name ('XML', 'YAML', 'JSON', 'CSV')
     * @param string $data The source data to import from
     * @param string $keyType The type of keys the array uses.
     *
     * @return $this|\Dsg\agenciaBundle\Model\Trabajos The current object, for fluid interface
     */
    public function importFrom($parser, $data, $keyType = TableMap::TYPE_PHPNAME)
    {
        if (!$parser instanceof AbstractParser) {
            $parser = AbstractParser::getParser($parser);
        }

        $this->fromArray($parser->toArray($data), $keyType);

        return $this;
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(TrabajosTableMap::DATABASE_NAME);

        if ($this->isColumnModified(TrabajosTableMap::COL_ID)) {
            $criteria->add(TrabajosTableMap::COL_ID, $this->id);
        }
        if ($this->isColumnModified(TrabajosTableMap::COL_CATEGORIA_ID)) {
            $criteria->add(TrabajosTableMap::COL_CATEGORIA_ID, $this->categoria_id);
        }
        if ($this->isColumnModified(TrabajosTableMap::COL_TIPO)) {
            $criteria->add(TrabajosTableMap::COL_TIPO, $this->tipo);
        }
        if ($this->isColumnModified(TrabajosTableMap::COL_COMPANIA)) {
            $criteria->add(TrabajosTableMap::COL_COMPANIA, $this->compania);
        }
        if ($this->isColumnModified(TrabajosTableMap::COL_LOGO)) {
            $criteria->add(TrabajosTableMap::COL_LOGO, $this->logo);
        }
        if ($this->isColumnModified(TrabajosTableMap::COL_URL)) {
            $criteria->add(TrabajosTableMap::COL_URL, $this->url);
        }
        if ($this->isColumnModified(TrabajosTableMap::COL_POSICION)) {
            $criteria->add(TrabajosTableMap::COL_POSICION, $this->posicion);
        }
        if ($this->isColumnModified(TrabajosTableMap::COL_LOCALIDAD)) {
            $criteria->add(TrabajosTableMap::COL_LOCALIDAD, $this->localidad);
        }
        if ($this->isColumnModified(TrabajosTableMap::COL_DESCRIPCION)) {
            $criteria->add(TrabajosTableMap::COL_DESCRIPCION, $this->descripcion);
        }
        if ($this->isColumnModified(TrabajosTableMap::COL_HOW_TO_APPLY)) {
            $criteria->add(TrabajosTableMap::COL_HOW_TO_APPLY, $this->how_to_apply);
        }
        if ($this->isColumnModified(TrabajosTableMap::COL_TOKEN)) {
            $criteria->add(TrabajosTableMap::COL_TOKEN, $this->token);
        }
        if ($this->isColumnModified(TrabajosTableMap::COL_PUBLICO)) {
            $criteria->add(TrabajosTableMap::COL_PUBLICO, $this->publico);
        }
        if ($this->isColumnModified(TrabajosTableMap::COL_ACTIVADO)) {
            $criteria->add(TrabajosTableMap::COL_ACTIVADO, $this->activado);
        }
        if ($this->isColumnModified(TrabajosTableMap::COL_EMAIL)) {
            $criteria->add(TrabajosTableMap::COL_EMAIL, $this->email);
        }
        if ($this->isColumnModified(TrabajosTableMap::COL_FINALIZA)) {
            $criteria->add(TrabajosTableMap::COL_FINALIZA, $this->finaliza);
        }
        if ($this->isColumnModified(TrabajosTableMap::COL_CREADO)) {
            $criteria->add(TrabajosTableMap::COL_CREADO, $this->creado);
        }
        if ($this->isColumnModified(TrabajosTableMap::COL_ACTUALIZADO)) {
            $criteria->add(TrabajosTableMap::COL_ACTUALIZADO, $this->actualizado);
        }

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @throws LogicException if no primary key is defined
     *
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = ChildTrabajosQuery::create();
        $criteria->add(TrabajosTableMap::COL_ID, $this->id);

        return $criteria;
    }

    /**
     * If the primary key is not null, return the hashcode of the
     * primary key. Otherwise, return the hash code of the object.
     *
     * @return int Hashcode
     */
    public function hashCode()
    {
        $validPk = null !== $this->getId();

        $validPrimaryKeyFKs = 0;
        $primaryKeyFKs = [];

        if ($validPk) {
            return crc32(json_encode($this->getPrimaryKey(), JSON_UNESCAPED_UNICODE));
        } elseif ($validPrimaryKeyFKs) {
            return crc32(json_encode($primaryKeyFKs, JSON_UNESCAPED_UNICODE));
        }

        return spl_object_hash($this);
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getId();
    }

    /**
     * Generic method to set the primary key (id column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \Dsg\agenciaBundle\Model\Trabajos (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setCategoriaId($this->getCategoriaId());
        $copyObj->setTipo($this->getTipo());
        $copyObj->setCompania($this->getCompania());
        $copyObj->setLogo($this->getLogo());
        $copyObj->setUrl($this->getUrl());
        $copyObj->setPosicion($this->getPosicion());
        $copyObj->setLocalidad($this->getLocalidad());
        $copyObj->setDescripcion($this->getDescripcion());
        $copyObj->setHowToApply($this->getHowToApply());
        $copyObj->setToken($this->getToken());
        $copyObj->setPublico($this->getPublico());
        $copyObj->setActivado($this->getActivado());
        $copyObj->setEmail($this->getEmail());
        $copyObj->setFinaliza($this->getFinaliza());
        $copyObj->setCreado($this->getCreado());
        $copyObj->setActualizado($this->getActualizado());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setId(NULL); // this is a auto-increment column, so set to default value
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param  boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return \Dsg\agenciaBundle\Model\Trabajos Clone of current object.
     * @throws PropelException
     */
    public function copy($deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);

        return $copyObj;
    }

    /**
     * Declares an association between this object and a ChildCategoria object.
     *
     * @param  ChildCategoria $v
     * @return $this|\Dsg\agenciaBundle\Model\Trabajos The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCategoria(ChildCategoria $v = null)
    {
        if ($v === null) {
            $this->setCategoriaId(NULL);
        } else {
            $this->setCategoriaId($v->getId());
        }

        $this->aCategoria = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildCategoria object, it will not be re-added.
        if ($v !== null) {
            $v->addTrabajos($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildCategoria object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildCategoria The associated ChildCategoria object.
     * @throws PropelException
     */
    public function getCategoria(ConnectionInterface $con = null)
    {
        if ($this->aCategoria === null && ($this->categoria_id !== null)) {
            $this->aCategoria = ChildCategoriaQuery::create()->findPk($this->categoria_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCategoria->addTrabajoss($this);
             */
        }

        return $this->aCategoria;
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        if (null !== $this->aCategoria) {
            $this->aCategoria->removeTrabajos($this);
        }
        $this->id = null;
        $this->categoria_id = null;
        $this->tipo = null;
        $this->compania = null;
        $this->logo = null;
        $this->url = null;
        $this->posicion = null;
        $this->localidad = null;
        $this->descripcion = null;
        $this->how_to_apply = null;
        $this->token = null;
        $this->publico = null;
        $this->activado = null;
        $this->email = null;
        $this->finaliza = null;
        $this->creado = null;
        $this->actualizado = null;
        $this->alreadyInSave = false;
        $this->clearAllReferences();
        $this->applyDefaultValues();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references and back-references to other model objects or collections of model objects.
     *
     * This method is used to reset all php object references (not the actual reference in the database).
     * Necessary for object serialisation.
     *
     * @param      boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep) {
        } // if ($deep)

        $this->aCategoria = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(TrabajosTableMap::DEFAULT_STRING_FORMAT);
    }

    /**
     * Code to be run before persisting the object
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preSave(ConnectionInterface $con = null)
    {
        if (is_callable('parent::preSave')) {
            return parent::preSave($con);
        }
        return true;
    }

    /**
     * Code to be run after persisting the object
     * @param ConnectionInterface $con
     */
    public function postSave(ConnectionInterface $con = null)
    {
        if (is_callable('parent::postSave')) {
            parent::postSave($con);
        }
    }

    /**
     * Code to be run before inserting to database
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preInsert(ConnectionInterface $con = null)
    {
        if (is_callable('parent::preInsert')) {
            return parent::preInsert($con);
        }
        return true;
    }

    /**
     * Code to be run after inserting to database
     * @param ConnectionInterface $con
     */
    public function postInsert(ConnectionInterface $con = null)
    {
        if (is_callable('parent::postInsert')) {
            parent::postInsert($con);
        }
    }

    /**
     * Code to be run before updating the object in database
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preUpdate(ConnectionInterface $con = null)
    {
        if (is_callable('parent::preUpdate')) {
            return parent::preUpdate($con);
        }
        return true;
    }

    /**
     * Code to be run after updating the object in database
     * @param ConnectionInterface $con
     */
    public function postUpdate(ConnectionInterface $con = null)
    {
        if (is_callable('parent::postUpdate')) {
            parent::postUpdate($con);
        }
    }

    /**
     * Code to be run before deleting the object in database
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preDelete(ConnectionInterface $con = null)
    {
        if (is_callable('parent::preDelete')) {
            return parent::preDelete($con);
        }
        return true;
    }

    /**
     * Code to be run after deleting the object in database
     * @param ConnectionInterface $con
     */
    public function postDelete(ConnectionInterface $con = null)
    {
        if (is_callable('parent::postDelete')) {
            parent::postDelete($con);
        }
    }


    /**
     * Derived method to catches calls to undefined methods.
     *
     * Provides magic import/export method support (fromXML()/toXML(), fromYAML()/toYAML(), etc.).
     * Allows to define default __call() behavior if you overwrite __call()
     *
     * @param string $name
     * @param mixed  $params
     *
     * @return array|string
     */
    public function __call($name, $params)
    {
        if (0 === strpos($name, 'get')) {
            $virtualColumn = substr($name, 3);
            if ($this->hasVirtualColumn($virtualColumn)) {
                return $this->getVirtualColumn($virtualColumn);
            }

            $virtualColumn = lcfirst($virtualColumn);
            if ($this->hasVirtualColumn($virtualColumn)) {
                return $this->getVirtualColumn($virtualColumn);
            }
        }

        if (0 === strpos($name, 'from')) {
            $format = substr($name, 4);

            return $this->importFrom($format, reset($params));
        }

        if (0 === strpos($name, 'to')) {
            $format = substr($name, 2);
            $includeLazyLoadColumns = isset($params[0]) ? $params[0] : true;

            return $this->exportTo($format, $includeLazyLoadColumns);
        }

        throw new BadMethodCallException(sprintf('Call to undefined method: %s.', $name));
    }

}
