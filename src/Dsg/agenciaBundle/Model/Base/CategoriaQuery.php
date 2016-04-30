<?php

namespace Dsg\agenciaBundle\Model\Base;

use \Exception;
use \PDO;
use Dsg\agenciaBundle\Model\Categoria as ChildCategoria;
use Dsg\agenciaBundle\Model\CategoriaQuery as ChildCategoriaQuery;
use Dsg\agenciaBundle\Model\Map\CategoriaTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'categoria' table.
 *
 *
 *
 * @method     ChildCategoriaQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ChildCategoriaQuery orderByNombre($order = Criteria::ASC) Order by the nombre column
 * @method     ChildCategoriaQuery orderByCreado($order = Criteria::ASC) Order by the creado column
 * @method     ChildCategoriaQuery orderByActualizado($order = Criteria::ASC) Order by the actualizado column
 *
 * @method     ChildCategoriaQuery groupById() Group by the id column
 * @method     ChildCategoriaQuery groupByNombre() Group by the nombre column
 * @method     ChildCategoriaQuery groupByCreado() Group by the creado column
 * @method     ChildCategoriaQuery groupByActualizado() Group by the actualizado column
 *
 * @method     ChildCategoriaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCategoriaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCategoriaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCategoriaQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCategoriaQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCategoriaQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCategoriaQuery leftJoinTrabajos($relationAlias = null) Adds a LEFT JOIN clause to the query using the Trabajos relation
 * @method     ChildCategoriaQuery rightJoinTrabajos($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Trabajos relation
 * @method     ChildCategoriaQuery innerJoinTrabajos($relationAlias = null) Adds a INNER JOIN clause to the query using the Trabajos relation
 *
 * @method     ChildCategoriaQuery joinWithTrabajos($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Trabajos relation
 *
 * @method     ChildCategoriaQuery leftJoinWithTrabajos() Adds a LEFT JOIN clause and with to the query using the Trabajos relation
 * @method     ChildCategoriaQuery rightJoinWithTrabajos() Adds a RIGHT JOIN clause and with to the query using the Trabajos relation
 * @method     ChildCategoriaQuery innerJoinWithTrabajos() Adds a INNER JOIN clause and with to the query using the Trabajos relation
 *
 * @method     ChildCategoriaQuery leftJoinCategoriaAfiliado($relationAlias = null) Adds a LEFT JOIN clause to the query using the CategoriaAfiliado relation
 * @method     ChildCategoriaQuery rightJoinCategoriaAfiliado($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CategoriaAfiliado relation
 * @method     ChildCategoriaQuery innerJoinCategoriaAfiliado($relationAlias = null) Adds a INNER JOIN clause to the query using the CategoriaAfiliado relation
 *
 * @method     ChildCategoriaQuery joinWithCategoriaAfiliado($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the CategoriaAfiliado relation
 *
 * @method     ChildCategoriaQuery leftJoinWithCategoriaAfiliado() Adds a LEFT JOIN clause and with to the query using the CategoriaAfiliado relation
 * @method     ChildCategoriaQuery rightJoinWithCategoriaAfiliado() Adds a RIGHT JOIN clause and with to the query using the CategoriaAfiliado relation
 * @method     ChildCategoriaQuery innerJoinWithCategoriaAfiliado() Adds a INNER JOIN clause and with to the query using the CategoriaAfiliado relation
 *
 * @method     \Dsg\agenciaBundle\Model\TrabajosQuery|\Dsg\agenciaBundle\Model\CategoriaAfiliadoQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildCategoria findOne(ConnectionInterface $con = null) Return the first ChildCategoria matching the query
 * @method     ChildCategoria findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCategoria matching the query, or a new ChildCategoria object populated from the query conditions when no match is found
 *
 * @method     ChildCategoria findOneById(int $id) Return the first ChildCategoria filtered by the id column
 * @method     ChildCategoria findOneByNombre(string $nombre) Return the first ChildCategoria filtered by the nombre column
 * @method     ChildCategoria findOneByCreado(string $creado) Return the first ChildCategoria filtered by the creado column
 * @method     ChildCategoria findOneByActualizado(string $actualizado) Return the first ChildCategoria filtered by the actualizado column *

 * @method     ChildCategoria requirePk($key, ConnectionInterface $con = null) Return the ChildCategoria by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCategoria requireOne(ConnectionInterface $con = null) Return the first ChildCategoria matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCategoria requireOneById(int $id) Return the first ChildCategoria filtered by the id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCategoria requireOneByNombre(string $nombre) Return the first ChildCategoria filtered by the nombre column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCategoria requireOneByCreado(string $creado) Return the first ChildCategoria filtered by the creado column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCategoria requireOneByActualizado(string $actualizado) Return the first ChildCategoria filtered by the actualizado column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCategoria[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCategoria objects based on current ModelCriteria
 * @method     ChildCategoria[]|ObjectCollection findById(int $id) Return ChildCategoria objects filtered by the id column
 * @method     ChildCategoria[]|ObjectCollection findByNombre(string $nombre) Return ChildCategoria objects filtered by the nombre column
 * @method     ChildCategoria[]|ObjectCollection findByCreado(string $creado) Return ChildCategoria objects filtered by the creado column
 * @method     ChildCategoria[]|ObjectCollection findByActualizado(string $actualizado) Return ChildCategoria objects filtered by the actualizado column
 * @method     ChildCategoria[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CategoriaQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Dsg\agenciaBundle\Model\Base\CategoriaQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\Dsg\\agenciaBundle\\Model\\Categoria', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCategoriaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCategoriaQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCategoriaQuery) {
            return $criteria;
        }
        $query = new ChildCategoriaQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildCategoria|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CategoriaTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CategoriaTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
            // the object is already in the instance pool
            return $obj;
        }

        return $this->findPkSimple($key, $con);
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildCategoria A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id, nombre, creado, actualizado FROM categoria WHERE id = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildCategoria $obj */
            $obj = new ChildCategoria();
            $obj->hydrate($row);
            CategoriaTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
     *
     * @return ChildCategoria|array|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, ConnectionInterface $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($dataFetcher);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     ConnectionInterface $con an optional connection object
     *
     * @return ObjectCollection|array|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getReadConnection($this->getDbName());
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($dataFetcher);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return $this|ChildCategoriaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CategoriaTableMap::COL_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCategoriaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CategoriaTableMap::COL_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id > 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCategoriaQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CategoriaTableMap::COL_ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CategoriaTableMap::COL_ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CategoriaTableMap::COL_ID, $id, $comparison);
    }

    /**
     * Filter the query on the nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByNombre('fooValue');   // WHERE nombre = 'fooValue'
     * $query->filterByNombre('%fooValue%'); // WHERE nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCategoriaQuery The current query, for fluid interface
     */
    public function filterByNombre($nombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nombre)) {
                $nombre = str_replace('*', '%', $nombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CategoriaTableMap::COL_NOMBRE, $nombre, $comparison);
    }

    /**
     * Filter the query on the creado column
     *
     * Example usage:
     * <code>
     * $query->filterByCreado('2011-03-14'); // WHERE creado = '2011-03-14'
     * $query->filterByCreado('now'); // WHERE creado = '2011-03-14'
     * $query->filterByCreado(array('max' => 'yesterday')); // WHERE creado > '2011-03-13'
     * </code>
     *
     * @param     mixed $creado The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCategoriaQuery The current query, for fluid interface
     */
    public function filterByCreado($creado = null, $comparison = null)
    {
        if (is_array($creado)) {
            $useMinMax = false;
            if (isset($creado['min'])) {
                $this->addUsingAlias(CategoriaTableMap::COL_CREADO, $creado['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($creado['max'])) {
                $this->addUsingAlias(CategoriaTableMap::COL_CREADO, $creado['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CategoriaTableMap::COL_CREADO, $creado, $comparison);
    }

    /**
     * Filter the query on the actualizado column
     *
     * Example usage:
     * <code>
     * $query->filterByActualizado('2011-03-14'); // WHERE actualizado = '2011-03-14'
     * $query->filterByActualizado('now'); // WHERE actualizado = '2011-03-14'
     * $query->filterByActualizado(array('max' => 'yesterday')); // WHERE actualizado > '2011-03-13'
     * </code>
     *
     * @param     mixed $actualizado The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCategoriaQuery The current query, for fluid interface
     */
    public function filterByActualizado($actualizado = null, $comparison = null)
    {
        if (is_array($actualizado)) {
            $useMinMax = false;
            if (isset($actualizado['min'])) {
                $this->addUsingAlias(CategoriaTableMap::COL_ACTUALIZADO, $actualizado['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($actualizado['max'])) {
                $this->addUsingAlias(CategoriaTableMap::COL_ACTUALIZADO, $actualizado['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CategoriaTableMap::COL_ACTUALIZADO, $actualizado, $comparison);
    }

    /**
     * Filter the query by a related \Dsg\agenciaBundle\Model\Trabajos object
     *
     * @param \Dsg\agenciaBundle\Model\Trabajos|ObjectCollection $trabajos the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildCategoriaQuery The current query, for fluid interface
     */
    public function filterByTrabajos($trabajos, $comparison = null)
    {
        if ($trabajos instanceof \Dsg\agenciaBundle\Model\Trabajos) {
            return $this
                ->addUsingAlias(CategoriaTableMap::COL_ID, $trabajos->getCategoriaId(), $comparison);
        } elseif ($trabajos instanceof ObjectCollection) {
            return $this
                ->useTrabajosQuery()
                ->filterByPrimaryKeys($trabajos->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByTrabajos() only accepts arguments of type \Dsg\agenciaBundle\Model\Trabajos or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Trabajos relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildCategoriaQuery The current query, for fluid interface
     */
    public function joinTrabajos($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Trabajos');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Trabajos');
        }

        return $this;
    }

    /**
     * Use the Trabajos relation Trabajos object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Dsg\agenciaBundle\Model\TrabajosQuery A secondary query class using the current class as primary query
     */
    public function useTrabajosQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinTrabajos($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Trabajos', '\Dsg\agenciaBundle\Model\TrabajosQuery');
    }

    /**
     * Filter the query by a related \Dsg\agenciaBundle\Model\CategoriaAfiliado object
     *
     * @param \Dsg\agenciaBundle\Model\CategoriaAfiliado|ObjectCollection $categoriaAfiliado the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildCategoriaQuery The current query, for fluid interface
     */
    public function filterByCategoriaAfiliado($categoriaAfiliado, $comparison = null)
    {
        if ($categoriaAfiliado instanceof \Dsg\agenciaBundle\Model\CategoriaAfiliado) {
            return $this
                ->addUsingAlias(CategoriaTableMap::COL_ID, $categoriaAfiliado->getCategoriaId(), $comparison);
        } elseif ($categoriaAfiliado instanceof ObjectCollection) {
            return $this
                ->useCategoriaAfiliadoQuery()
                ->filterByPrimaryKeys($categoriaAfiliado->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCategoriaAfiliado() only accepts arguments of type \Dsg\agenciaBundle\Model\CategoriaAfiliado or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CategoriaAfiliado relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildCategoriaQuery The current query, for fluid interface
     */
    public function joinCategoriaAfiliado($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CategoriaAfiliado');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CategoriaAfiliado');
        }

        return $this;
    }

    /**
     * Use the CategoriaAfiliado relation CategoriaAfiliado object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Dsg\agenciaBundle\Model\CategoriaAfiliadoQuery A secondary query class using the current class as primary query
     */
    public function useCategoriaAfiliadoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCategoriaAfiliado($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CategoriaAfiliado', '\Dsg\agenciaBundle\Model\CategoriaAfiliadoQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCategoria $categoria Object to remove from the list of results
     *
     * @return $this|ChildCategoriaQuery The current query, for fluid interface
     */
    public function prune($categoria = null)
    {
        if ($categoria) {
            $this->addUsingAlias(CategoriaTableMap::COL_ID, $categoria->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the categoria table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CategoriaTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CategoriaTableMap::clearInstancePool();
            CategoriaTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

    /**
     * Performs a DELETE on the database based on the current ModelCriteria
     *
     * @param ConnectionInterface $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public function delete(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CategoriaTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CategoriaTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CategoriaTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CategoriaTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CategoriaQuery
