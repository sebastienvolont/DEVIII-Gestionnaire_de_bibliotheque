<?php

namespace ContainerYQJPhGy;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder01b8c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer2f524 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesae799 = [
        
    ];

    public function getConnection()
    {
        $this->initializer2f524 && ($this->initializer2f524->__invoke($valueHolder01b8c, $this, 'getConnection', array(), $this->initializer2f524) || 1) && $this->valueHolder01b8c = $valueHolder01b8c;

        return $this->valueHolder01b8c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer2f524 && ($this->initializer2f524->__invoke($valueHolder01b8c, $this, 'getMetadataFactory', array(), $this->initializer2f524) || 1) && $this->valueHolder01b8c = $valueHolder01b8c;

        return $this->valueHolder01b8c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer2f524 && ($this->initializer2f524->__invoke($valueHolder01b8c, $this, 'getExpressionBuilder', array(), $this->initializer2f524) || 1) && $this->valueHolder01b8c = $valueHolder01b8c;

        return $this->valueHolder01b8c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer2f524 && ($this->initializer2f524->__invoke($valueHolder01b8c, $this, 'beginTransaction', array(), $this->initializer2f524) || 1) && $this->valueHolder01b8c = $valueHolder01b8c;

        return $this->valueHolder01b8c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer2f524 && ($this->initializer2f524->__invoke($valueHolder01b8c, $this, 'getCache', array(), $this->initializer2f524) || 1) && $this->valueHolder01b8c = $valueHolder01b8c;

        return $this->valueHolder01b8c->getCache();
    }

    public function transactional($func)
    {
        $this->initializer2f524 && ($this->initializer2f524->__invoke($valueHolder01b8c, $this, 'transactional', array('func' => $func), $this->initializer2f524) || 1) && $this->valueHolder01b8c = $valueHolder01b8c;

        return $this->valueHolder01b8c->transactional($func);
    }

    public function commit()
    {
        $this->initializer2f524 && ($this->initializer2f524->__invoke($valueHolder01b8c, $this, 'commit', array(), $this->initializer2f524) || 1) && $this->valueHolder01b8c = $valueHolder01b8c;

        return $this->valueHolder01b8c->commit();
    }

    public function rollback()
    {
        $this->initializer2f524 && ($this->initializer2f524->__invoke($valueHolder01b8c, $this, 'rollback', array(), $this->initializer2f524) || 1) && $this->valueHolder01b8c = $valueHolder01b8c;

        return $this->valueHolder01b8c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer2f524 && ($this->initializer2f524->__invoke($valueHolder01b8c, $this, 'getClassMetadata', array('className' => $className), $this->initializer2f524) || 1) && $this->valueHolder01b8c = $valueHolder01b8c;

        return $this->valueHolder01b8c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer2f524 && ($this->initializer2f524->__invoke($valueHolder01b8c, $this, 'createQuery', array('dql' => $dql), $this->initializer2f524) || 1) && $this->valueHolder01b8c = $valueHolder01b8c;

        return $this->valueHolder01b8c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer2f524 && ($this->initializer2f524->__invoke($valueHolder01b8c, $this, 'createNamedQuery', array('name' => $name), $this->initializer2f524) || 1) && $this->valueHolder01b8c = $valueHolder01b8c;

        return $this->valueHolder01b8c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer2f524 && ($this->initializer2f524->__invoke($valueHolder01b8c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer2f524) || 1) && $this->valueHolder01b8c = $valueHolder01b8c;

        return $this->valueHolder01b8c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer2f524 && ($this->initializer2f524->__invoke($valueHolder01b8c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer2f524) || 1) && $this->valueHolder01b8c = $valueHolder01b8c;

        return $this->valueHolder01b8c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer2f524 && ($this->initializer2f524->__invoke($valueHolder01b8c, $this, 'createQueryBuilder', array(), $this->initializer2f524) || 1) && $this->valueHolder01b8c = $valueHolder01b8c;

        return $this->valueHolder01b8c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer2f524 && ($this->initializer2f524->__invoke($valueHolder01b8c, $this, 'flush', array('entity' => $entity), $this->initializer2f524) || 1) && $this->valueHolder01b8c = $valueHolder01b8c;

        return $this->valueHolder01b8c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer2f524 && ($this->initializer2f524->__invoke($valueHolder01b8c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2f524) || 1) && $this->valueHolder01b8c = $valueHolder01b8c;

        return $this->valueHolder01b8c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer2f524 && ($this->initializer2f524->__invoke($valueHolder01b8c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer2f524) || 1) && $this->valueHolder01b8c = $valueHolder01b8c;

        return $this->valueHolder01b8c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer2f524 && ($this->initializer2f524->__invoke($valueHolder01b8c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer2f524) || 1) && $this->valueHolder01b8c = $valueHolder01b8c;

        return $this->valueHolder01b8c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer2f524 && ($this->initializer2f524->__invoke($valueHolder01b8c, $this, 'clear', array('entityName' => $entityName), $this->initializer2f524) || 1) && $this->valueHolder01b8c = $valueHolder01b8c;

        return $this->valueHolder01b8c->clear($entityName);
    }

    public function close()
    {
        $this->initializer2f524 && ($this->initializer2f524->__invoke($valueHolder01b8c, $this, 'close', array(), $this->initializer2f524) || 1) && $this->valueHolder01b8c = $valueHolder01b8c;

        return $this->valueHolder01b8c->close();
    }

    public function persist($entity)
    {
        $this->initializer2f524 && ($this->initializer2f524->__invoke($valueHolder01b8c, $this, 'persist', array('entity' => $entity), $this->initializer2f524) || 1) && $this->valueHolder01b8c = $valueHolder01b8c;

        return $this->valueHolder01b8c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer2f524 && ($this->initializer2f524->__invoke($valueHolder01b8c, $this, 'remove', array('entity' => $entity), $this->initializer2f524) || 1) && $this->valueHolder01b8c = $valueHolder01b8c;

        return $this->valueHolder01b8c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer2f524 && ($this->initializer2f524->__invoke($valueHolder01b8c, $this, 'refresh', array('entity' => $entity), $this->initializer2f524) || 1) && $this->valueHolder01b8c = $valueHolder01b8c;

        return $this->valueHolder01b8c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer2f524 && ($this->initializer2f524->__invoke($valueHolder01b8c, $this, 'detach', array('entity' => $entity), $this->initializer2f524) || 1) && $this->valueHolder01b8c = $valueHolder01b8c;

        return $this->valueHolder01b8c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer2f524 && ($this->initializer2f524->__invoke($valueHolder01b8c, $this, 'merge', array('entity' => $entity), $this->initializer2f524) || 1) && $this->valueHolder01b8c = $valueHolder01b8c;

        return $this->valueHolder01b8c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer2f524 && ($this->initializer2f524->__invoke($valueHolder01b8c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer2f524) || 1) && $this->valueHolder01b8c = $valueHolder01b8c;

        return $this->valueHolder01b8c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer2f524 && ($this->initializer2f524->__invoke($valueHolder01b8c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2f524) || 1) && $this->valueHolder01b8c = $valueHolder01b8c;

        return $this->valueHolder01b8c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer2f524 && ($this->initializer2f524->__invoke($valueHolder01b8c, $this, 'getRepository', array('entityName' => $entityName), $this->initializer2f524) || 1) && $this->valueHolder01b8c = $valueHolder01b8c;

        return $this->valueHolder01b8c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer2f524 && ($this->initializer2f524->__invoke($valueHolder01b8c, $this, 'contains', array('entity' => $entity), $this->initializer2f524) || 1) && $this->valueHolder01b8c = $valueHolder01b8c;

        return $this->valueHolder01b8c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer2f524 && ($this->initializer2f524->__invoke($valueHolder01b8c, $this, 'getEventManager', array(), $this->initializer2f524) || 1) && $this->valueHolder01b8c = $valueHolder01b8c;

        return $this->valueHolder01b8c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer2f524 && ($this->initializer2f524->__invoke($valueHolder01b8c, $this, 'getConfiguration', array(), $this->initializer2f524) || 1) && $this->valueHolder01b8c = $valueHolder01b8c;

        return $this->valueHolder01b8c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer2f524 && ($this->initializer2f524->__invoke($valueHolder01b8c, $this, 'isOpen', array(), $this->initializer2f524) || 1) && $this->valueHolder01b8c = $valueHolder01b8c;

        return $this->valueHolder01b8c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer2f524 && ($this->initializer2f524->__invoke($valueHolder01b8c, $this, 'getUnitOfWork', array(), $this->initializer2f524) || 1) && $this->valueHolder01b8c = $valueHolder01b8c;

        return $this->valueHolder01b8c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer2f524 && ($this->initializer2f524->__invoke($valueHolder01b8c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2f524) || 1) && $this->valueHolder01b8c = $valueHolder01b8c;

        return $this->valueHolder01b8c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer2f524 && ($this->initializer2f524->__invoke($valueHolder01b8c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2f524) || 1) && $this->valueHolder01b8c = $valueHolder01b8c;

        return $this->valueHolder01b8c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer2f524 && ($this->initializer2f524->__invoke($valueHolder01b8c, $this, 'getProxyFactory', array(), $this->initializer2f524) || 1) && $this->valueHolder01b8c = $valueHolder01b8c;

        return $this->valueHolder01b8c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer2f524 && ($this->initializer2f524->__invoke($valueHolder01b8c, $this, 'initializeObject', array('obj' => $obj), $this->initializer2f524) || 1) && $this->valueHolder01b8c = $valueHolder01b8c;

        return $this->valueHolder01b8c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer2f524 && ($this->initializer2f524->__invoke($valueHolder01b8c, $this, 'getFilters', array(), $this->initializer2f524) || 1) && $this->valueHolder01b8c = $valueHolder01b8c;

        return $this->valueHolder01b8c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer2f524 && ($this->initializer2f524->__invoke($valueHolder01b8c, $this, 'isFiltersStateClean', array(), $this->initializer2f524) || 1) && $this->valueHolder01b8c = $valueHolder01b8c;

        return $this->valueHolder01b8c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer2f524 && ($this->initializer2f524->__invoke($valueHolder01b8c, $this, 'hasFilters', array(), $this->initializer2f524) || 1) && $this->valueHolder01b8c = $valueHolder01b8c;

        return $this->valueHolder01b8c->hasFilters();
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

        $instance->initializer2f524 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder01b8c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder01b8c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder01b8c->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer2f524 && ($this->initializer2f524->__invoke($valueHolder01b8c, $this, '__get', ['name' => $name], $this->initializer2f524) || 1) && $this->valueHolder01b8c = $valueHolder01b8c;

        if (isset(self::$publicPropertiesae799[$name])) {
            return $this->valueHolder01b8c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder01b8c;

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

        $targetObject = $this->valueHolder01b8c;
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
        $this->initializer2f524 && ($this->initializer2f524->__invoke($valueHolder01b8c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer2f524) || 1) && $this->valueHolder01b8c = $valueHolder01b8c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder01b8c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder01b8c;
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
        $this->initializer2f524 && ($this->initializer2f524->__invoke($valueHolder01b8c, $this, '__isset', array('name' => $name), $this->initializer2f524) || 1) && $this->valueHolder01b8c = $valueHolder01b8c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder01b8c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder01b8c;
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
        $this->initializer2f524 && ($this->initializer2f524->__invoke($valueHolder01b8c, $this, '__unset', array('name' => $name), $this->initializer2f524) || 1) && $this->valueHolder01b8c = $valueHolder01b8c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder01b8c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder01b8c;
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
        $this->initializer2f524 && ($this->initializer2f524->__invoke($valueHolder01b8c, $this, '__clone', array(), $this->initializer2f524) || 1) && $this->valueHolder01b8c = $valueHolder01b8c;

        $this->valueHolder01b8c = clone $this->valueHolder01b8c;
    }

    public function __sleep()
    {
        $this->initializer2f524 && ($this->initializer2f524->__invoke($valueHolder01b8c, $this, '__sleep', array(), $this->initializer2f524) || 1) && $this->valueHolder01b8c = $valueHolder01b8c;

        return array('valueHolder01b8c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer2f524 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer2f524;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer2f524 && ($this->initializer2f524->__invoke($valueHolder01b8c, $this, 'initializeProxy', array(), $this->initializer2f524) || 1) && $this->valueHolder01b8c = $valueHolder01b8c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder01b8c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder01b8c;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
