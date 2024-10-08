<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/memcache/v1/cloud_memcache.proto

namespace Google\Cloud\Memcache\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for [CreateInstance][google.cloud.memcache.v1.CloudMemcache.CreateInstance].
 *
 * Generated from protobuf message <code>google.cloud.memcache.v1.CreateInstanceRequest</code>
 */
class CreateInstanceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the instance location using the form:
     *     `projects/{project_id}/locations/{location_id}`
     * where `location_id` refers to a GCP region
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The logical name of the Memcached instance in the user
     * project with the following restrictions:
     * * Must contain only lowercase letters, numbers, and hyphens.
     * * Must start with a letter.
     * * Must be between 1-40 characters.
     * * Must end with a number or a letter.
     * * Must be unique within the user project / location.
     * If any of the above are not met, the API raises an invalid argument error.
     *
     * Generated from protobuf field <code>string instance_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $instance_id = '';
    /**
     * Required. A Memcached Instance
     *
     * Generated from protobuf field <code>.google.cloud.memcache.v1.Instance instance = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $instance = null;

    /**
     * @param string                             $parent     Required. The resource name of the instance location using the form:
     *                                                       `projects/{project_id}/locations/{location_id}`
     *                                                       where `location_id` refers to a GCP region
     *                                                       Please see {@see CloudMemcacheClient::locationName()} for help formatting this field.
     * @param \Google\Cloud\Memcache\V1\Instance $instance   Required. A Memcached Instance
     * @param string                             $instanceId Required. The logical name of the Memcached instance in the user
     *                                                       project with the following restrictions:
     *
     *                                                       * Must contain only lowercase letters, numbers, and hyphens.
     *                                                       * Must start with a letter.
     *                                                       * Must be between 1-40 characters.
     *                                                       * Must end with a number or a letter.
     *                                                       * Must be unique within the user project / location.
     *
     *                                                       If any of the above are not met, the API raises an invalid argument error.
     *
     * @return \Google\Cloud\Memcache\V1\CreateInstanceRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\Memcache\V1\Instance $instance, string $instanceId): self
    {
        return (new self())
            ->setParent($parent)
            ->setInstance($instance)
            ->setInstanceId($instanceId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The resource name of the instance location using the form:
     *               `projects/{project_id}/locations/{location_id}`
     *           where `location_id` refers to a GCP region
     *     @type string $instance_id
     *           Required. The logical name of the Memcached instance in the user
     *           project with the following restrictions:
     *           * Must contain only lowercase letters, numbers, and hyphens.
     *           * Must start with a letter.
     *           * Must be between 1-40 characters.
     *           * Must end with a number or a letter.
     *           * Must be unique within the user project / location.
     *           If any of the above are not met, the API raises an invalid argument error.
     *     @type \Google\Cloud\Memcache\V1\Instance $instance
     *           Required. A Memcached Instance
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Memcache\V1\CloudMemcache::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the instance location using the form:
     *     `projects/{project_id}/locations/{location_id}`
     * where `location_id` refers to a GCP region
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of the instance location using the form:
     *     `projects/{project_id}/locations/{location_id}`
     * where `location_id` refers to a GCP region
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The logical name of the Memcached instance in the user
     * project with the following restrictions:
     * * Must contain only lowercase letters, numbers, and hyphens.
     * * Must start with a letter.
     * * Must be between 1-40 characters.
     * * Must end with a number or a letter.
     * * Must be unique within the user project / location.
     * If any of the above are not met, the API raises an invalid argument error.
     *
     * Generated from protobuf field <code>string instance_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getInstanceId()
    {
        return $this->instance_id;
    }

    /**
     * Required. The logical name of the Memcached instance in the user
     * project with the following restrictions:
     * * Must contain only lowercase letters, numbers, and hyphens.
     * * Must start with a letter.
     * * Must be between 1-40 characters.
     * * Must end with a number or a letter.
     * * Must be unique within the user project / location.
     * If any of the above are not met, the API raises an invalid argument error.
     *
     * Generated from protobuf field <code>string instance_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setInstanceId($var)
    {
        GPBUtil::checkString($var, True);
        $this->instance_id = $var;

        return $this;
    }

    /**
     * Required. A Memcached Instance
     *
     * Generated from protobuf field <code>.google.cloud.memcache.v1.Instance instance = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Memcache\V1\Instance|null
     */
    public function getInstance()
    {
        return $this->instance;
    }

    public function hasInstance()
    {
        return isset($this->instance);
    }

    public function clearInstance()
    {
        unset($this->instance);
    }

    /**
     * Required. A Memcached Instance
     *
     * Generated from protobuf field <code>.google.cloud.memcache.v1.Instance instance = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Memcache\V1\Instance $var
     * @return $this
     */
    public function setInstance($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Memcache\V1\Instance::class);
        $this->instance = $var;

        return $this;
    }

}

