<?php

namespace ContainerQwRrimx;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder4d207 = null;
    private $initializerdec7f = null;
    private static $publicPropertiesbfead = [
        
    ];
    public function getConnection()
    {
        $this->initializerdec7f && ($this->initializerdec7f->__invoke($valueHolder4d207, $this, 'getConnection', array(), $this->initializerdec7f) || 1) && $this->valueHolder4d207 = $valueHolder4d207;
        return $this->valueHolder4d207->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerdec7f && ($this->initializerdec7f->__invoke($valueHolder4d207, $this, 'getMetadataFactory', array(), $this->initializerdec7f) || 1) && $this->valueHolder4d207 = $valueHolder4d207;
        return $this->valueHolder4d207->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerdec7f && ($this->initializerdec7f->__invoke($valueHolder4d207, $this, 'getExpressionBuilder', array(), $this->initializerdec7f) || 1) && $this->valueHolder4d207 = $valueHolder4d207;
        return $this->valueHolder4d207->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerdec7f && ($this->initializerdec7f->__invoke($valueHolder4d207, $this, 'beginTransaction', array(), $this->initializerdec7f) || 1) && $this->valueHolder4d207 = $valueHolder4d207;
        return $this->valueHolder4d207->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerdec7f && ($this->initializerdec7f->__invoke($valueHolder4d207, $this, 'getCache', array(), $this->initializerdec7f) || 1) && $this->valueHolder4d207 = $valueHolder4d207;
        return $this->valueHolder4d207->getCache();
    }
    public function transactional($func)
    {
        $this->initializerdec7f && ($this->initializerdec7f->__invoke($valueHolder4d207, $this, 'transactional', array('func' => $func), $this->initializerdec7f) || 1) && $this->valueHolder4d207 = $valueHolder4d207;
        return $this->valueHolder4d207->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializerdec7f && ($this->initializerdec7f->__invoke($valueHolder4d207, $this, 'wrapInTransaction', array('func' => $func), $this->initializerdec7f) || 1) && $this->valueHolder4d207 = $valueHolder4d207;
        return $this->valueHolder4d207->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializerdec7f && ($this->initializerdec7f->__invoke($valueHolder4d207, $this, 'commit', array(), $this->initializerdec7f) || 1) && $this->valueHolder4d207 = $valueHolder4d207;
        return $this->valueHolder4d207->commit();
    }
    public function rollback()
    {
        $this->initializerdec7f && ($this->initializerdec7f->__invoke($valueHolder4d207, $this, 'rollback', array(), $this->initializerdec7f) || 1) && $this->valueHolder4d207 = $valueHolder4d207;
        return $this->valueHolder4d207->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerdec7f && ($this->initializerdec7f->__invoke($valueHolder4d207, $this, 'getClassMetadata', array('className' => $className), $this->initializerdec7f) || 1) && $this->valueHolder4d207 = $valueHolder4d207;
        return $this->valueHolder4d207->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerdec7f && ($this->initializerdec7f->__invoke($valueHolder4d207, $this, 'createQuery', array('dql' => $dql), $this->initializerdec7f) || 1) && $this->valueHolder4d207 = $valueHolder4d207;
        return $this->valueHolder4d207->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerdec7f && ($this->initializerdec7f->__invoke($valueHolder4d207, $this, 'createNamedQuery', array('name' => $name), $this->initializerdec7f) || 1) && $this->valueHolder4d207 = $valueHolder4d207;
        return $this->valueHolder4d207->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerdec7f && ($this->initializerdec7f->__invoke($valueHolder4d207, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerdec7f) || 1) && $this->valueHolder4d207 = $valueHolder4d207;
        return $this->valueHolder4d207->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerdec7f && ($this->initializerdec7f->__invoke($valueHolder4d207, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerdec7f) || 1) && $this->valueHolder4d207 = $valueHolder4d207;
        return $this->valueHolder4d207->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerdec7f && ($this->initializerdec7f->__invoke($valueHolder4d207, $this, 'createQueryBuilder', array(), $this->initializerdec7f) || 1) && $this->valueHolder4d207 = $valueHolder4d207;
        return $this->valueHolder4d207->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerdec7f && ($this->initializerdec7f->__invoke($valueHolder4d207, $this, 'flush', array('entity' => $entity), $this->initializerdec7f) || 1) && $this->valueHolder4d207 = $valueHolder4d207;
        return $this->valueHolder4d207->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerdec7f && ($this->initializerdec7f->__invoke($valueHolder4d207, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerdec7f) || 1) && $this->valueHolder4d207 = $valueHolder4d207;
        return $this->valueHolder4d207->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerdec7f && ($this->initializerdec7f->__invoke($valueHolder4d207, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerdec7f) || 1) && $this->valueHolder4d207 = $valueHolder4d207;
        return $this->valueHolder4d207->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerdec7f && ($this->initializerdec7f->__invoke($valueHolder4d207, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerdec7f) || 1) && $this->valueHolder4d207 = $valueHolder4d207;
        return $this->valueHolder4d207->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerdec7f && ($this->initializerdec7f->__invoke($valueHolder4d207, $this, 'clear', array('entityName' => $entityName), $this->initializerdec7f) || 1) && $this->valueHolder4d207 = $valueHolder4d207;
        return $this->valueHolder4d207->clear($entityName);
    }
    public function close()
    {
        $this->initializerdec7f && ($this->initializerdec7f->__invoke($valueHolder4d207, $this, 'close', array(), $this->initializerdec7f) || 1) && $this->valueHolder4d207 = $valueHolder4d207;
        return $this->valueHolder4d207->close();
    }
    public function persist($entity)
    {
        $this->initializerdec7f && ($this->initializerdec7f->__invoke($valueHolder4d207, $this, 'persist', array('entity' => $entity), $this->initializerdec7f) || 1) && $this->valueHolder4d207 = $valueHolder4d207;
        return $this->valueHolder4d207->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerdec7f && ($this->initializerdec7f->__invoke($valueHolder4d207, $this, 'remove', array('entity' => $entity), $this->initializerdec7f) || 1) && $this->valueHolder4d207 = $valueHolder4d207;
        return $this->valueHolder4d207->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerdec7f && ($this->initializerdec7f->__invoke($valueHolder4d207, $this, 'refresh', array('entity' => $entity), $this->initializerdec7f) || 1) && $this->valueHolder4d207 = $valueHolder4d207;
        return $this->valueHolder4d207->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerdec7f && ($this->initializerdec7f->__invoke($valueHolder4d207, $this, 'detach', array('entity' => $entity), $this->initializerdec7f) || 1) && $this->valueHolder4d207 = $valueHolder4d207;
        return $this->valueHolder4d207->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerdec7f && ($this->initializerdec7f->__invoke($valueHolder4d207, $this, 'merge', array('entity' => $entity), $this->initializerdec7f) || 1) && $this->valueHolder4d207 = $valueHolder4d207;
        return $this->valueHolder4d207->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerdec7f && ($this->initializerdec7f->__invoke($valueHolder4d207, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerdec7f) || 1) && $this->valueHolder4d207 = $valueHolder4d207;
        return $this->valueHolder4d207->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerdec7f && ($this->initializerdec7f->__invoke($valueHolder4d207, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerdec7f) || 1) && $this->valueHolder4d207 = $valueHolder4d207;
        return $this->valueHolder4d207->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerdec7f && ($this->initializerdec7f->__invoke($valueHolder4d207, $this, 'getRepository', array('entityName' => $entityName), $this->initializerdec7f) || 1) && $this->valueHolder4d207 = $valueHolder4d207;
        return $this->valueHolder4d207->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerdec7f && ($this->initializerdec7f->__invoke($valueHolder4d207, $this, 'contains', array('entity' => $entity), $this->initializerdec7f) || 1) && $this->valueHolder4d207 = $valueHolder4d207;
        return $this->valueHolder4d207->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerdec7f && ($this->initializerdec7f->__invoke($valueHolder4d207, $this, 'getEventManager', array(), $this->initializerdec7f) || 1) && $this->valueHolder4d207 = $valueHolder4d207;
        return $this->valueHolder4d207->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerdec7f && ($this->initializerdec7f->__invoke($valueHolder4d207, $this, 'getConfiguration', array(), $this->initializerdec7f) || 1) && $this->valueHolder4d207 = $valueHolder4d207;
        return $this->valueHolder4d207->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerdec7f && ($this->initializerdec7f->__invoke($valueHolder4d207, $this, 'isOpen', array(), $this->initializerdec7f) || 1) && $this->valueHolder4d207 = $valueHolder4d207;
        return $this->valueHolder4d207->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerdec7f && ($this->initializerdec7f->__invoke($valueHolder4d207, $this, 'getUnitOfWork', array(), $this->initializerdec7f) || 1) && $this->valueHolder4d207 = $valueHolder4d207;
        return $this->valueHolder4d207->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerdec7f && ($this->initializerdec7f->__invoke($valueHolder4d207, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerdec7f) || 1) && $this->valueHolder4d207 = $valueHolder4d207;
        return $this->valueHolder4d207->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerdec7f && ($this->initializerdec7f->__invoke($valueHolder4d207, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerdec7f) || 1) && $this->valueHolder4d207 = $valueHolder4d207;
        return $this->valueHolder4d207->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerdec7f && ($this->initializerdec7f->__invoke($valueHolder4d207, $this, 'getProxyFactory', array(), $this->initializerdec7f) || 1) && $this->valueHolder4d207 = $valueHolder4d207;
        return $this->valueHolder4d207->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerdec7f && ($this->initializerdec7f->__invoke($valueHolder4d207, $this, 'initializeObject', array('obj' => $obj), $this->initializerdec7f) || 1) && $this->valueHolder4d207 = $valueHolder4d207;
        return $this->valueHolder4d207->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerdec7f && ($this->initializerdec7f->__invoke($valueHolder4d207, $this, 'getFilters', array(), $this->initializerdec7f) || 1) && $this->valueHolder4d207 = $valueHolder4d207;
        return $this->valueHolder4d207->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerdec7f && ($this->initializerdec7f->__invoke($valueHolder4d207, $this, 'isFiltersStateClean', array(), $this->initializerdec7f) || 1) && $this->valueHolder4d207 = $valueHolder4d207;
        return $this->valueHolder4d207->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerdec7f && ($this->initializerdec7f->__invoke($valueHolder4d207, $this, 'hasFilters', array(), $this->initializerdec7f) || 1) && $this->valueHolder4d207 = $valueHolder4d207;
        return $this->valueHolder4d207->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerdec7f = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder4d207) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder4d207 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder4d207->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerdec7f && ($this->initializerdec7f->__invoke($valueHolder4d207, $this, '__get', ['name' => $name], $this->initializerdec7f) || 1) && $this->valueHolder4d207 = $valueHolder4d207;
        if (isset(self::$publicPropertiesbfead[$name])) {
            return $this->valueHolder4d207->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4d207;
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
        $targetObject = $this->valueHolder4d207;
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
        $this->initializerdec7f && ($this->initializerdec7f->__invoke($valueHolder4d207, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerdec7f) || 1) && $this->valueHolder4d207 = $valueHolder4d207;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4d207;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder4d207;
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
        $this->initializerdec7f && ($this->initializerdec7f->__invoke($valueHolder4d207, $this, '__isset', array('name' => $name), $this->initializerdec7f) || 1) && $this->valueHolder4d207 = $valueHolder4d207;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4d207;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder4d207;
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
        $this->initializerdec7f && ($this->initializerdec7f->__invoke($valueHolder4d207, $this, '__unset', array('name' => $name), $this->initializerdec7f) || 1) && $this->valueHolder4d207 = $valueHolder4d207;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4d207;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder4d207;
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
        $this->initializerdec7f && ($this->initializerdec7f->__invoke($valueHolder4d207, $this, '__clone', array(), $this->initializerdec7f) || 1) && $this->valueHolder4d207 = $valueHolder4d207;
        $this->valueHolder4d207 = clone $this->valueHolder4d207;
    }
    public function __sleep()
    {
        $this->initializerdec7f && ($this->initializerdec7f->__invoke($valueHolder4d207, $this, '__sleep', array(), $this->initializerdec7f) || 1) && $this->valueHolder4d207 = $valueHolder4d207;
        return array('valueHolder4d207');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerdec7f = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerdec7f;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerdec7f && ($this->initializerdec7f->__invoke($valueHolder4d207, $this, 'initializeProxy', array(), $this->initializerdec7f) || 1) && $this->valueHolder4d207 = $valueHolder4d207;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder4d207;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder4d207;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
