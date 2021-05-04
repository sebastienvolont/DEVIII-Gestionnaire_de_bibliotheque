<?php

namespace ContainerXr8f97V;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf84df = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer7178f = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties623ad = [
        
    ];

    public function getConnection()
    {
        $this->initializer7178f && ($this->initializer7178f->__invoke($valueHolderf84df, $this, 'getConnection', array(), $this->initializer7178f) || 1) && $this->valueHolderf84df = $valueHolderf84df;

        return $this->valueHolderf84df->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer7178f && ($this->initializer7178f->__invoke($valueHolderf84df, $this, 'getMetadataFactory', array(), $this->initializer7178f) || 1) && $this->valueHolderf84df = $valueHolderf84df;

        return $this->valueHolderf84df->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer7178f && ($this->initializer7178f->__invoke($valueHolderf84df, $this, 'getExpressionBuilder', array(), $this->initializer7178f) || 1) && $this->valueHolderf84df = $valueHolderf84df;

        return $this->valueHolderf84df->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer7178f && ($this->initializer7178f->__invoke($valueHolderf84df, $this, 'beginTransaction', array(), $this->initializer7178f) || 1) && $this->valueHolderf84df = $valueHolderf84df;

        return $this->valueHolderf84df->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer7178f && ($this->initializer7178f->__invoke($valueHolderf84df, $this, 'getCache', array(), $this->initializer7178f) || 1) && $this->valueHolderf84df = $valueHolderf84df;

        return $this->valueHolderf84df->getCache();
    }

    public function transactional($func)
    {
        $this->initializer7178f && ($this->initializer7178f->__invoke($valueHolderf84df, $this, 'transactional', array('func' => $func), $this->initializer7178f) || 1) && $this->valueHolderf84df = $valueHolderf84df;

        return $this->valueHolderf84df->transactional($func);
    }

    public function commit()
    {
        $this->initializer7178f && ($this->initializer7178f->__invoke($valueHolderf84df, $this, 'commit', array(), $this->initializer7178f) || 1) && $this->valueHolderf84df = $valueHolderf84df;

        return $this->valueHolderf84df->commit();
    }

    public function rollback()
    {
        $this->initializer7178f && ($this->initializer7178f->__invoke($valueHolderf84df, $this, 'rollback', array(), $this->initializer7178f) || 1) && $this->valueHolderf84df = $valueHolderf84df;

        return $this->valueHolderf84df->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer7178f && ($this->initializer7178f->__invoke($valueHolderf84df, $this, 'getClassMetadata', array('className' => $className), $this->initializer7178f) || 1) && $this->valueHolderf84df = $valueHolderf84df;

        return $this->valueHolderf84df->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer7178f && ($this->initializer7178f->__invoke($valueHolderf84df, $this, 'createQuery', array('dql' => $dql), $this->initializer7178f) || 1) && $this->valueHolderf84df = $valueHolderf84df;

        return $this->valueHolderf84df->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer7178f && ($this->initializer7178f->__invoke($valueHolderf84df, $this, 'createNamedQuery', array('name' => $name), $this->initializer7178f) || 1) && $this->valueHolderf84df = $valueHolderf84df;

        return $this->valueHolderf84df->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer7178f && ($this->initializer7178f->__invoke($valueHolderf84df, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer7178f) || 1) && $this->valueHolderf84df = $valueHolderf84df;

        return $this->valueHolderf84df->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer7178f && ($this->initializer7178f->__invoke($valueHolderf84df, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer7178f) || 1) && $this->valueHolderf84df = $valueHolderf84df;

        return $this->valueHolderf84df->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer7178f && ($this->initializer7178f->__invoke($valueHolderf84df, $this, 'createQueryBuilder', array(), $this->initializer7178f) || 1) && $this->valueHolderf84df = $valueHolderf84df;

        return $this->valueHolderf84df->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer7178f && ($this->initializer7178f->__invoke($valueHolderf84df, $this, 'flush', array('entity' => $entity), $this->initializer7178f) || 1) && $this->valueHolderf84df = $valueHolderf84df;

        return $this->valueHolderf84df->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer7178f && ($this->initializer7178f->__invoke($valueHolderf84df, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7178f) || 1) && $this->valueHolderf84df = $valueHolderf84df;

        return $this->valueHolderf84df->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer7178f && ($this->initializer7178f->__invoke($valueHolderf84df, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer7178f) || 1) && $this->valueHolderf84df = $valueHolderf84df;

        return $this->valueHolderf84df->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer7178f && ($this->initializer7178f->__invoke($valueHolderf84df, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer7178f) || 1) && $this->valueHolderf84df = $valueHolderf84df;

        return $this->valueHolderf84df->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer7178f && ($this->initializer7178f->__invoke($valueHolderf84df, $this, 'clear', array('entityName' => $entityName), $this->initializer7178f) || 1) && $this->valueHolderf84df = $valueHolderf84df;

        return $this->valueHolderf84df->clear($entityName);
    }

    public function close()
    {
        $this->initializer7178f && ($this->initializer7178f->__invoke($valueHolderf84df, $this, 'close', array(), $this->initializer7178f) || 1) && $this->valueHolderf84df = $valueHolderf84df;

        return $this->valueHolderf84df->close();
    }

    public function persist($entity)
    {
        $this->initializer7178f && ($this->initializer7178f->__invoke($valueHolderf84df, $this, 'persist', array('entity' => $entity), $this->initializer7178f) || 1) && $this->valueHolderf84df = $valueHolderf84df;

        return $this->valueHolderf84df->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer7178f && ($this->initializer7178f->__invoke($valueHolderf84df, $this, 'remove', array('entity' => $entity), $this->initializer7178f) || 1) && $this->valueHolderf84df = $valueHolderf84df;

        return $this->valueHolderf84df->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer7178f && ($this->initializer7178f->__invoke($valueHolderf84df, $this, 'refresh', array('entity' => $entity), $this->initializer7178f) || 1) && $this->valueHolderf84df = $valueHolderf84df;

        return $this->valueHolderf84df->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer7178f && ($this->initializer7178f->__invoke($valueHolderf84df, $this, 'detach', array('entity' => $entity), $this->initializer7178f) || 1) && $this->valueHolderf84df = $valueHolderf84df;

        return $this->valueHolderf84df->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer7178f && ($this->initializer7178f->__invoke($valueHolderf84df, $this, 'merge', array('entity' => $entity), $this->initializer7178f) || 1) && $this->valueHolderf84df = $valueHolderf84df;

        return $this->valueHolderf84df->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer7178f && ($this->initializer7178f->__invoke($valueHolderf84df, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer7178f) || 1) && $this->valueHolderf84df = $valueHolderf84df;

        return $this->valueHolderf84df->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer7178f && ($this->initializer7178f->__invoke($valueHolderf84df, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7178f) || 1) && $this->valueHolderf84df = $valueHolderf84df;

        return $this->valueHolderf84df->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer7178f && ($this->initializer7178f->__invoke($valueHolderf84df, $this, 'getRepository', array('entityName' => $entityName), $this->initializer7178f) || 1) && $this->valueHolderf84df = $valueHolderf84df;

        return $this->valueHolderf84df->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer7178f && ($this->initializer7178f->__invoke($valueHolderf84df, $this, 'contains', array('entity' => $entity), $this->initializer7178f) || 1) && $this->valueHolderf84df = $valueHolderf84df;

        return $this->valueHolderf84df->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer7178f && ($this->initializer7178f->__invoke($valueHolderf84df, $this, 'getEventManager', array(), $this->initializer7178f) || 1) && $this->valueHolderf84df = $valueHolderf84df;

        return $this->valueHolderf84df->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer7178f && ($this->initializer7178f->__invoke($valueHolderf84df, $this, 'getConfiguration', array(), $this->initializer7178f) || 1) && $this->valueHolderf84df = $valueHolderf84df;

        return $this->valueHolderf84df->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer7178f && ($this->initializer7178f->__invoke($valueHolderf84df, $this, 'isOpen', array(), $this->initializer7178f) || 1) && $this->valueHolderf84df = $valueHolderf84df;

        return $this->valueHolderf84df->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer7178f && ($this->initializer7178f->__invoke($valueHolderf84df, $this, 'getUnitOfWork', array(), $this->initializer7178f) || 1) && $this->valueHolderf84df = $valueHolderf84df;

        return $this->valueHolderf84df->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer7178f && ($this->initializer7178f->__invoke($valueHolderf84df, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7178f) || 1) && $this->valueHolderf84df = $valueHolderf84df;

        return $this->valueHolderf84df->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer7178f && ($this->initializer7178f->__invoke($valueHolderf84df, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7178f) || 1) && $this->valueHolderf84df = $valueHolderf84df;

        return $this->valueHolderf84df->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer7178f && ($this->initializer7178f->__invoke($valueHolderf84df, $this, 'getProxyFactory', array(), $this->initializer7178f) || 1) && $this->valueHolderf84df = $valueHolderf84df;

        return $this->valueHolderf84df->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer7178f && ($this->initializer7178f->__invoke($valueHolderf84df, $this, 'initializeObject', array('obj' => $obj), $this->initializer7178f) || 1) && $this->valueHolderf84df = $valueHolderf84df;

        return $this->valueHolderf84df->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer7178f && ($this->initializer7178f->__invoke($valueHolderf84df, $this, 'getFilters', array(), $this->initializer7178f) || 1) && $this->valueHolderf84df = $valueHolderf84df;

        return $this->valueHolderf84df->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer7178f && ($this->initializer7178f->__invoke($valueHolderf84df, $this, 'isFiltersStateClean', array(), $this->initializer7178f) || 1) && $this->valueHolderf84df = $valueHolderf84df;

        return $this->valueHolderf84df->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer7178f && ($this->initializer7178f->__invoke($valueHolderf84df, $this, 'hasFilters', array(), $this->initializer7178f) || 1) && $this->valueHolderf84df = $valueHolderf84df;

        return $this->valueHolderf84df->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer7178f = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderf84df) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf84df = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderf84df->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer7178f && ($this->initializer7178f->__invoke($valueHolderf84df, $this, '__get', ['name' => $name], $this->initializer7178f) || 1) && $this->valueHolderf84df = $valueHolderf84df;

        if (isset(self::$publicProperties623ad[$name])) {
            return $this->valueHolderf84df->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf84df;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf84df;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer7178f && ($this->initializer7178f->__invoke($valueHolderf84df, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer7178f) || 1) && $this->valueHolderf84df = $valueHolderf84df;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf84df;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf84df;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer7178f && ($this->initializer7178f->__invoke($valueHolderf84df, $this, '__isset', array('name' => $name), $this->initializer7178f) || 1) && $this->valueHolderf84df = $valueHolderf84df;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf84df;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderf84df;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer7178f && ($this->initializer7178f->__invoke($valueHolderf84df, $this, '__unset', array('name' => $name), $this->initializer7178f) || 1) && $this->valueHolderf84df = $valueHolderf84df;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf84df;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderf84df;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer7178f && ($this->initializer7178f->__invoke($valueHolderf84df, $this, '__clone', array(), $this->initializer7178f) || 1) && $this->valueHolderf84df = $valueHolderf84df;

        $this->valueHolderf84df = clone $this->valueHolderf84df;
    }

    public function __sleep()
    {
        $this->initializer7178f && ($this->initializer7178f->__invoke($valueHolderf84df, $this, '__sleep', array(), $this->initializer7178f) || 1) && $this->valueHolderf84df = $valueHolderf84df;

        return array('valueHolderf84df');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer7178f = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer7178f;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer7178f && ($this->initializer7178f->__invoke($valueHolderf84df, $this, 'initializeProxy', array(), $this->initializer7178f) || 1) && $this->valueHolderf84df = $valueHolderf84df;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf84df;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf84df;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
