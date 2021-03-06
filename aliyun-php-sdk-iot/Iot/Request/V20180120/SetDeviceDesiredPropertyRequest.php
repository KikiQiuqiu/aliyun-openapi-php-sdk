<?php

namespace Iot\Request\V20180120;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SetDeviceDesiredProperty
 *
 * @method string getIotId()
 * @method string getVersions()
 * @method string getIotInstanceId()
 * @method string getDeviceName()
 * @method string getProductKey()
 * @method string getItems()
 */
class SetDeviceDesiredPropertyRequest extends \RpcAcsRequest
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
            'Iot',
            '2018-01-20',
            'SetDeviceDesiredProperty',
            'iot'
        );
    }

    /**
     * @param string $iotId
     *
     * @return $this
     */
    public function setIotId($iotId)
    {
        $this->requestParameters['IotId'] = $iotId;
        $this->queryParameters['IotId'] = $iotId;

        return $this;
    }

    /**
     * @param string $versions
     *
     * @return $this
     */
    public function setVersions($versions)
    {
        $this->requestParameters['Versions'] = $versions;
        $this->queryParameters['Versions'] = $versions;

        return $this;
    }

    /**
     * @param string $iotInstanceId
     *
     * @return $this
     */
    public function setIotInstanceId($iotInstanceId)
    {
        $this->requestParameters['IotInstanceId'] = $iotInstanceId;
        $this->queryParameters['IotInstanceId'] = $iotInstanceId;

        return $this;
    }

    /**
     * @param string $deviceName
     *
     * @return $this
     */
    public function setDeviceName($deviceName)
    {
        $this->requestParameters['DeviceName'] = $deviceName;
        $this->queryParameters['DeviceName'] = $deviceName;

        return $this;
    }

    /**
     * @param string $productKey
     *
     * @return $this
     */
    public function setProductKey($productKey)
    {
        $this->requestParameters['ProductKey'] = $productKey;
        $this->queryParameters['ProductKey'] = $productKey;

        return $this;
    }

    /**
     * @param string $items
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->requestParameters['Items'] = $items;
        $this->queryParameters['Items'] = $items;

        return $this;
    }
}
