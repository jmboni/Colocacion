<?php

namespace Dsg\agenciaBundle\Model\Base;

use \DateTime;
use \Exception;
use \PDO;
use Dsg\agenciaBundle\Model\Categoria as ChildCategoria;
use Dsg\agenciaBundle\Model\CategoriaAfiliado as ChildCategoriaAfiliado;
use Dsg\agenciaBundle\Model\CategoriaAfiliadoQuery as ChildCategoriaAfiliadoQuery;
use Dsg\agenciaBundle\Model\CategoriaQuery as ChildCategoriaQuery;
use Dsg\agenciaBundle\Model\Trabajos as ChildTrabajos;
use Dsg\agenciaBundle\Model\TrabajosQuery as ChildTrabajosQuery;
use Dsg\agenciaBundle\Model\Map\CategoriaAfiliadoTableMap;
use Dsg\agenciaBundle\Model\Map\CategoriaTableMap;
use Dsg\agenciaBundle\Model\Map\TrabajosTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveRecord\ActiveRecordInterface;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\BadMethodCallException;
use Propel\Runtime\Exception\LogicException;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Parser\AbstractParser;
use Propel\Runtime\Util\PropelDateTime;

/**
 * Base class that represents a row from the 'categoria' table.
 *
 *
 *
* @package    propel.generator.src.Dsg.agenciaBundle.Model.Base
*/
abstract class Categoria implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Dsg\\agenciaBundle\\Model\\Map\\CategoriaTableMap';


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
     * The value for the nombre field.
     *
     * @var        string
     */
    protected $nombre;

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
     * @var        ObjectCollection|ChildTrabajos[] Collection to store aggregation of ChildTrabajos objects.
     */
    protected $collTrabajoss;
    protected $collTrabajossPartial;

    /**
     * @var        ObjectCollection|ChildCategoriaAfiliado[] Collection to store aggregation of ChildCategoriaAfiliado objects.
     */
    protected $collCategoriaAfiliados;
    protected $collCategoriaAfiliadosPartial;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var boolean
     */
    protected $alreadyInSave = false;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildTrabajos[]
     */
    protected $trabajossScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildCategoriaAfiliado[]
     */
    protected $categoriaAfiliadosScheduledForDeletion = null;

    /**
     * Initializes internal state of Dsg\agenciaBundle\Model\Base\Categoria object.
     */
    public function __construct()
    {
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
     * Compares this with another <code>Categoria</code> instance.  If
     * <code>obj</code> is an instance of <code>Categoria</code>, delegates to
     * <code>equals(Categoria)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|Categoria The current object, for fluid interface
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
     * Get the [nombre] column value.
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
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
     * @return $this|\Dsg\agenciaBundle\Model\Categoria The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[CategoriaTableMap::COL_ID] = true;
        }

        return $this;
    } // setId()

    /**
     * Set the value of [nombre] column.
     *
     * @param string $v new value
     * @return $this|\Dsg\agenciaBundle\Model\Categoria The current object (for fluent API support)
     */
    public function setNombre($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->nombre !== $v) {
            $this->nombre = $v;
            $this->modifiedColumns[CategoriaTableMap::COL_NOMBRE] = true;
        }

        return $this;
    } // setNombre()

    /**
     * Sets the value of [creado] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\Dsg\agenciaBundle\Model\Categoria The current object (for fluent API support)
     */
    public function setCreado($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->creado !== null || $dt !== null) {
            if ($this->creado === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->creado->format("Y-m-d H:i:s.u")) {
                $this->creado = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CategoriaTableMap::COL_CREADO] = true;
            }
        } // if either are not null

        return $this;
    } // setCreado()

    /**
     * Sets the value of [actualizado] column to a normalized version of the date/time value specified.
     *
     * @param  mixed $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this|\Dsg\agenciaBundle\Model\Categoria The current object (for fluent API support)
     */
    public function setActualizado($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->actualizado !== null || $dt !== null) {
            if ($this->actualizado === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->actualizado->format("Y-m-d H:i:s.u")) {
                $this->actualizado = $dt === null ? null : clone $dt;
                $this->modifiedColumns[CategoriaTableMap::COL_ACTUALIZADO] = true;
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : CategoriaTableMap::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)];
            $this->id = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : CategoriaTableMap::translateFieldName('Nombre', TableMap::TYPE_PHPNAME, $indexType)];
            $this->nombre = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : CategoriaTableMap::translateFieldName('Creado', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->creado = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : CategoriaTableMap::translateFieldName('Actualizado', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->actualizado = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 4; // 4 = CategoriaTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\Dsg\\agenciaBundle\\Model\\Categoria'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(CategoriaTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildCategoriaQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collTrabajoss = null;

            $this->collCategoriaAfiliados = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see Categoria::setDeleted()
     * @see Categoria::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(CategoriaTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildCategoriaQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(CategoriaTableMap::DATABASE_NAME);
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
                CategoriaTableMap::addInstanceToPool($this);
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

            if ($this->trabajossScheduledForDeletion !== null) {
                if (!$this->trabajossScheduledForDeletion->isEmpty()) {
                    \Dsg\agenciaBundle\Model\TrabajosQuery::create()
                        ->filterByPrimaryKeys($this->trabajossScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->trabajossScheduledForDeletion = null;
                }
            }

            if ($this->collTrabajoss !== null) {
                foreach ($this->collTrabajoss as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->categoriaAfiliadosScheduledForDeletion !== null) {
                if (!$this->categoriaAfiliadosScheduledForDeletion->isEmpty()) {
                    \Dsg\agenciaBundle\Model\CategoriaAfiliadoQuery::create()
                        ->filterByPrimaryKeys($this->categoriaAfiliadosScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->categoriaAfiliadosScheduledForDeletion = null;
                }
            }

            if ($this->collCategoriaAfiliados !== null) {
                foreach ($this->collCategoriaAfiliados as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
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

        $this->modifiedColumns[CategoriaTableMap::COL_ID] = true;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CategoriaTableMap::COL_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CategoriaTableMap::COL_ID)) {
            $modifiedColumns[':p' . $index++]  = 'id';
        }
        if ($this->isColumnModified(CategoriaTableMap::COL_NOMBRE)) {
            $modifiedColumns[':p' . $index++]  = 'nombre';
        }
        if ($this->isColumnModified(CategoriaTableMap::COL_CREADO)) {
            $modifiedColumns[':p' . $index++]  = 'creado';
        }
        if ($this->isColumnModified(CategoriaTableMap::COL_ACTUALIZADO)) {
            $modifiedColumns[':p' . $index++]  = 'actualizado';
        }

        $sql = sprintf(
            'INSERT INTO categoria (%s) VALUES (%s)',
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
                    case 'nombre':
                        $stmt->bindValue($identifier, $this->nombre, PDO::PARAM_STR);
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
        $pos = CategoriaTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getNombre();
                break;
            case 2:
                return $this->getCreado();
                break;
            case 3:
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

        if (isset($alreadyDumpedObjects['Categoria'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Categoria'][$this->hashCode()] = true;
        $keys = CategoriaTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getNombre(),
            $keys[2] => $this->getCreado(),
            $keys[3] => $this->getActualizado(),
        );
        if ($result[$keys[2]] instanceof \DateTime) {
            $result[$keys[2]] = $result[$keys[2]]->format('c');
        }

        if ($result[$keys[3]] instanceof \DateTime) {
            $result[$keys[3]] = $result[$keys[3]]->format('c');
        }

        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collTrabajoss) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'trabajoss';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'trabajoss';
                        break;
                    default:
                        $key = 'Trabajoss';
                }

                $result[$key] = $this->collTrabajoss->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCategoriaAfiliados) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'categoriaAfiliados';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'categoria_afiliados';
                        break;
                    default:
                        $key = 'CategoriaAfiliados';
                }

                $result[$key] = $this->collCategoriaAfiliados->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
     * @return $this|\Dsg\agenciaBundle\Model\Categoria
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = CategoriaTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\Dsg\agenciaBundle\Model\Categoria
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setId($value);
                break;
            case 1:
                $this->setNombre($value);
                break;
            case 2:
                $this->setCreado($value);
                break;
            case 3:
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
        $keys = CategoriaTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setId($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setNombre($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setCreado($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setActualizado($arr[$keys[3]]);
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
     * @return $this|\Dsg\agenciaBundle\Model\Categoria The current object, for fluid interface
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
        $criteria = new Criteria(CategoriaTableMap::DATABASE_NAME);

        if ($this->isColumnModified(CategoriaTableMap::COL_ID)) {
            $criteria->add(CategoriaTableMap::COL_ID, $this->id);
        }
        if ($this->isColumnModified(CategoriaTableMap::COL_NOMBRE)) {
            $criteria->add(CategoriaTableMap::COL_NOMBRE, $this->nombre);
        }
        if ($this->isColumnModified(CategoriaTableMap::COL_CREADO)) {
            $criteria->add(CategoriaTableMap::COL_CREADO, $this->creado);
        }
        if ($this->isColumnModified(CategoriaTableMap::COL_ACTUALIZADO)) {
            $criteria->add(CategoriaTableMap::COL_ACTUALIZADO, $this->actualizado);
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
        $criteria = ChildCategoriaQuery::create();
        $criteria->add(CategoriaTableMap::COL_ID, $this->id);

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
     * @param      object $copyObj An object of \Dsg\agenciaBundle\Model\Categoria (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setNombre($this->getNombre());
        $copyObj->setCreado($this->getCreado());
        $copyObj->setActualizado($this->getActualizado());

        if ($deepCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);

            foreach ($this->getTrabajoss() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addTrabajos($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCategoriaAfiliados() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCategoriaAfiliado($relObj->copy($deepCopy));
                }
            }

        } // if ($deepCopy)

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
     * @return \Dsg\agenciaBundle\Model\Categoria Clone of current object.
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
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param      string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName)
    {
        if ('Trabajos' == $relationName) {
            return $this->initTrabajoss();
        }
        if ('CategoriaAfiliado' == $relationName) {
            return $this->initCategoriaAfiliados();
        }
    }

    /**
     * Clears out the collTrabajoss collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addTrabajoss()
     */
    public function clearTrabajoss()
    {
        $this->collTrabajoss = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collTrabajoss collection loaded partially.
     */
    public function resetPartialTrabajoss($v = true)
    {
        $this->collTrabajossPartial = $v;
    }

    /**
     * Initializes the collTrabajoss collection.
     *
     * By default this just sets the collTrabajoss collection to an empty array (like clearcollTrabajoss());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initTrabajoss($overrideExisting = true)
    {
        if (null !== $this->collTrabajoss && !$overrideExisting) {
            return;
        }

        $collectionClassName = TrabajosTableMap::getTableMap()->getCollectionClassName();

        $this->collTrabajoss = new $collectionClassName;
        $this->collTrabajoss->setModel('\Dsg\agenciaBundle\Model\Trabajos');
    }

    /**
     * Gets an array of ChildTrabajos objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildCategoria is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildTrabajos[] List of ChildTrabajos objects
     * @throws PropelException
     */
    public function getTrabajoss(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collTrabajossPartial && !$this->isNew();
        if (null === $this->collTrabajoss || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collTrabajoss) {
                // return empty collection
                $this->initTrabajoss();
            } else {
                $collTrabajoss = ChildTrabajosQuery::create(null, $criteria)
                    ->filterByCategoria($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collTrabajossPartial && count($collTrabajoss)) {
                        $this->initTrabajoss(false);

                        foreach ($collTrabajoss as $obj) {
                            if (false == $this->collTrabajoss->contains($obj)) {
                                $this->collTrabajoss->append($obj);
                            }
                        }

                        $this->collTrabajossPartial = true;
                    }

                    return $collTrabajoss;
                }

                if ($partial && $this->collTrabajoss) {
                    foreach ($this->collTrabajoss as $obj) {
                        if ($obj->isNew()) {
                            $collTrabajoss[] = $obj;
                        }
                    }
                }

                $this->collTrabajoss = $collTrabajoss;
                $this->collTrabajossPartial = false;
            }
        }

        return $this->collTrabajoss;
    }

    /**
     * Sets a collection of ChildTrabajos objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $trabajoss A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildCategoria The current object (for fluent API support)
     */
    public function setTrabajoss(Collection $trabajoss, ConnectionInterface $con = null)
    {
        /** @var ChildTrabajos[] $trabajossToDelete */
        $trabajossToDelete = $this->getTrabajoss(new Criteria(), $con)->diff($trabajoss);


        $this->trabajossScheduledForDeletion = $trabajossToDelete;

        foreach ($trabajossToDelete as $trabajosRemoved) {
            $trabajosRemoved->setCategoria(null);
        }

        $this->collTrabajoss = null;
        foreach ($trabajoss as $trabajos) {
            $this->addTrabajos($trabajos);
        }

        $this->collTrabajoss = $trabajoss;
        $this->collTrabajossPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Trabajos objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related Trabajos objects.
     * @throws PropelException
     */
    public function countTrabajoss(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collTrabajossPartial && !$this->isNew();
        if (null === $this->collTrabajoss || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collTrabajoss) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getTrabajoss());
            }

            $query = ChildTrabajosQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCategoria($this)
                ->count($con);
        }

        return count($this->collTrabajoss);
    }

    /**
     * Method called to associate a ChildTrabajos object to this object
     * through the ChildTrabajos foreign key attribute.
     *
     * @param  ChildTrabajos $l ChildTrabajos
     * @return $this|\Dsg\agenciaBundle\Model\Categoria The current object (for fluent API support)
     */
    public function addTrabajos(ChildTrabajos $l)
    {
        if ($this->collTrabajoss === null) {
            $this->initTrabajoss();
            $this->collTrabajossPartial = true;
        }

        if (!$this->collTrabajoss->contains($l)) {
            $this->doAddTrabajos($l);

            if ($this->trabajossScheduledForDeletion and $this->trabajossScheduledForDeletion->contains($l)) {
                $this->trabajossScheduledForDeletion->remove($this->trabajossScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildTrabajos $trabajos The ChildTrabajos object to add.
     */
    protected function doAddTrabajos(ChildTrabajos $trabajos)
    {
        $this->collTrabajoss[]= $trabajos;
        $trabajos->setCategoria($this);
    }

    /**
     * @param  ChildTrabajos $trabajos The ChildTrabajos object to remove.
     * @return $this|ChildCategoria The current object (for fluent API support)
     */
    public function removeTrabajos(ChildTrabajos $trabajos)
    {
        if ($this->getTrabajoss()->contains($trabajos)) {
            $pos = $this->collTrabajoss->search($trabajos);
            $this->collTrabajoss->remove($pos);
            if (null === $this->trabajossScheduledForDeletion) {
                $this->trabajossScheduledForDeletion = clone $this->collTrabajoss;
                $this->trabajossScheduledForDeletion->clear();
            }
            $this->trabajossScheduledForDeletion[]= clone $trabajos;
            $trabajos->setCategoria(null);
        }

        return $this;
    }

    /**
     * Clears out the collCategoriaAfiliados collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addCategoriaAfiliados()
     */
    public function clearCategoriaAfiliados()
    {
        $this->collCategoriaAfiliados = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collCategoriaAfiliados collection loaded partially.
     */
    public function resetPartialCategoriaAfiliados($v = true)
    {
        $this->collCategoriaAfiliadosPartial = $v;
    }

    /**
     * Initializes the collCategoriaAfiliados collection.
     *
     * By default this just sets the collCategoriaAfiliados collection to an empty array (like clearcollCategoriaAfiliados());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCategoriaAfiliados($overrideExisting = true)
    {
        if (null !== $this->collCategoriaAfiliados && !$overrideExisting) {
            return;
        }

        $collectionClassName = CategoriaAfiliadoTableMap::getTableMap()->getCollectionClassName();

        $this->collCategoriaAfiliados = new $collectionClassName;
        $this->collCategoriaAfiliados->setModel('\Dsg\agenciaBundle\Model\CategoriaAfiliado');
    }

    /**
     * Gets an array of ChildCategoriaAfiliado objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildCategoria is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildCategoriaAfiliado[] List of ChildCategoriaAfiliado objects
     * @throws PropelException
     */
    public function getCategoriaAfiliados(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collCategoriaAfiliadosPartial && !$this->isNew();
        if (null === $this->collCategoriaAfiliados || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCategoriaAfiliados) {
                // return empty collection
                $this->initCategoriaAfiliados();
            } else {
                $collCategoriaAfiliados = ChildCategoriaAfiliadoQuery::create(null, $criteria)
                    ->filterByCategoria($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collCategoriaAfiliadosPartial && count($collCategoriaAfiliados)) {
                        $this->initCategoriaAfiliados(false);

                        foreach ($collCategoriaAfiliados as $obj) {
                            if (false == $this->collCategoriaAfiliados->contains($obj)) {
                                $this->collCategoriaAfiliados->append($obj);
                            }
                        }

                        $this->collCategoriaAfiliadosPartial = true;
                    }

                    return $collCategoriaAfiliados;
                }

                if ($partial && $this->collCategoriaAfiliados) {
                    foreach ($this->collCategoriaAfiliados as $obj) {
                        if ($obj->isNew()) {
                            $collCategoriaAfiliados[] = $obj;
                        }
                    }
                }

                $this->collCategoriaAfiliados = $collCategoriaAfiliados;
                $this->collCategoriaAfiliadosPartial = false;
            }
        }

        return $this->collCategoriaAfiliados;
    }

    /**
     * Sets a collection of ChildCategoriaAfiliado objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $categoriaAfiliados A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildCategoria The current object (for fluent API support)
     */
    public function setCategoriaAfiliados(Collection $categoriaAfiliados, ConnectionInterface $con = null)
    {
        /** @var ChildCategoriaAfiliado[] $categoriaAfiliadosToDelete */
        $categoriaAfiliadosToDelete = $this->getCategoriaAfiliados(new Criteria(), $con)->diff($categoriaAfiliados);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->categoriaAfiliadosScheduledForDeletion = clone $categoriaAfiliadosToDelete;

        foreach ($categoriaAfiliadosToDelete as $categoriaAfiliadoRemoved) {
            $categoriaAfiliadoRemoved->setCategoria(null);
        }

        $this->collCategoriaAfiliados = null;
        foreach ($categoriaAfiliados as $categoriaAfiliado) {
            $this->addCategoriaAfiliado($categoriaAfiliado);
        }

        $this->collCategoriaAfiliados = $categoriaAfiliados;
        $this->collCategoriaAfiliadosPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CategoriaAfiliado objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related CategoriaAfiliado objects.
     * @throws PropelException
     */
    public function countCategoriaAfiliados(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collCategoriaAfiliadosPartial && !$this->isNew();
        if (null === $this->collCategoriaAfiliados || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCategoriaAfiliados) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCategoriaAfiliados());
            }

            $query = ChildCategoriaAfiliadoQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCategoria($this)
                ->count($con);
        }

        return count($this->collCategoriaAfiliados);
    }

    /**
     * Method called to associate a ChildCategoriaAfiliado object to this object
     * through the ChildCategoriaAfiliado foreign key attribute.
     *
     * @param  ChildCategoriaAfiliado $l ChildCategoriaAfiliado
     * @return $this|\Dsg\agenciaBundle\Model\Categoria The current object (for fluent API support)
     */
    public function addCategoriaAfiliado(ChildCategoriaAfiliado $l)
    {
        if ($this->collCategoriaAfiliados === null) {
            $this->initCategoriaAfiliados();
            $this->collCategoriaAfiliadosPartial = true;
        }

        if (!$this->collCategoriaAfiliados->contains($l)) {
            $this->doAddCategoriaAfiliado($l);

            if ($this->categoriaAfiliadosScheduledForDeletion and $this->categoriaAfiliadosScheduledForDeletion->contains($l)) {
                $this->categoriaAfiliadosScheduledForDeletion->remove($this->categoriaAfiliadosScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildCategoriaAfiliado $categoriaAfiliado The ChildCategoriaAfiliado object to add.
     */
    protected function doAddCategoriaAfiliado(ChildCategoriaAfiliado $categoriaAfiliado)
    {
        $this->collCategoriaAfiliados[]= $categoriaAfiliado;
        $categoriaAfiliado->setCategoria($this);
    }

    /**
     * @param  ChildCategoriaAfiliado $categoriaAfiliado The ChildCategoriaAfiliado object to remove.
     * @return $this|ChildCategoria The current object (for fluent API support)
     */
    public function removeCategoriaAfiliado(ChildCategoriaAfiliado $categoriaAfiliado)
    {
        if ($this->getCategoriaAfiliados()->contains($categoriaAfiliado)) {
            $pos = $this->collCategoriaAfiliados->search($categoriaAfiliado);
            $this->collCategoriaAfiliados->remove($pos);
            if (null === $this->categoriaAfiliadosScheduledForDeletion) {
                $this->categoriaAfiliadosScheduledForDeletion = clone $this->collCategoriaAfiliados;
                $this->categoriaAfiliadosScheduledForDeletion->clear();
            }
            $this->categoriaAfiliadosScheduledForDeletion[]= clone $categoriaAfiliado;
            $categoriaAfiliado->setCategoria(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Categoria is new, it will return
     * an empty collection; or if this Categoria has previously
     * been saved, it will retrieve related CategoriaAfiliados from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Categoria.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildCategoriaAfiliado[] List of ChildCategoriaAfiliado objects
     */
    public function getCategoriaAfiliadosJoinAfiliados(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildCategoriaAfiliadoQuery::create(null, $criteria);
        $query->joinWith('Afiliados', $joinBehavior);

        return $this->getCategoriaAfiliados($query, $con);
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        $this->id = null;
        $this->nombre = null;
        $this->creado = null;
        $this->actualizado = null;
        $this->alreadyInSave = false;
        $this->clearAllReferences();
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
            if ($this->collTrabajoss) {
                foreach ($this->collTrabajoss as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCategoriaAfiliados) {
                foreach ($this->collCategoriaAfiliados as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        $this->collTrabajoss = null;
        $this->collCategoriaAfiliados = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CategoriaTableMap::DEFAULT_STRING_FORMAT);
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
