<?php

namespace Ecs\Request\V20140526;

/**
 * Request of DescribeInstanceRamRole
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getInstanceIds()
 * @method string getPageSize()
 * @method string getRamRoleName()
 * @method string getOwnerId()
 * @method string getPageNumber()
 */
class DescribeInstanceRamRoleRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Ecs',
            '2014-05-26',
            'DescribeInstanceRamRole',
            'ecs'
        );
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        $this->requestParameters['ResourceOwnerId'] = $resourceOwnerId;
        $this->queryParameters['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->requestParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;
        $this->queryParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;

        return $this;
    }

    /**
     * @param string $instanceIds
     *
     * @return $this
     */
    public function setInstanceIds($instanceIds)
    {
        $this->requestParameters['InstanceIds'] = $instanceIds;
        $this->queryParameters['InstanceIds'] = $instanceIds;

        return $this;
    }

    /**
     * @param string $pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        $this->requestParameters['PageSize'] = $pageSize;
        $this->queryParameters['PageSize'] = $pageSize;

        return $this;
    }

    /**
     * @param string $ramRoleName
     *
     * @return $this
     */
    public function setRamRoleName($ramRoleName)
    {
        $this->requestParameters['RamRoleName'] = $ramRoleName;
        $this->queryParameters['RamRoleName'] = $ramRoleName;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        $this->requestParameters['OwnerId'] = $ownerId;
        $this->queryParameters['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $pageNumber
     *
     * @return $this
     */
    public function setPageNumber($pageNumber)
    {
        $this->requestParameters['PageNumber'] = $pageNumber;
        $this->queryParameters['PageNumber'] = $pageNumber;

        return $this;
    }
}
