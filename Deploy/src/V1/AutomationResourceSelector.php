<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/deploy/v1/cloud_deploy.proto

namespace Google\Cloud\Deploy\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * AutomationResourceSelector contains the information to select the resources
 * to which an Automation is going to be applied.
 *
 * Generated from protobuf message <code>google.cloud.deploy.v1.AutomationResourceSelector</code>
 */
class AutomationResourceSelector extends \Google\Protobuf\Internal\Message
{
    /**
     * Contains attributes about a target.
     *
     * Generated from protobuf field <code>repeated .google.cloud.deploy.v1.TargetAttribute targets = 1;</code>
     */
    private $targets;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Deploy\V1\TargetAttribute>|\Google\Protobuf\Internal\RepeatedField $targets
     *           Contains attributes about a target.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Deploy\V1\CloudDeploy::initOnce();
        parent::__construct($data);
    }

    /**
     * Contains attributes about a target.
     *
     * Generated from protobuf field <code>repeated .google.cloud.deploy.v1.TargetAttribute targets = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTargets()
    {
        return $this->targets;
    }

    /**
     * Contains attributes about a target.
     *
     * Generated from protobuf field <code>repeated .google.cloud.deploy.v1.TargetAttribute targets = 1;</code>
     * @param array<\Google\Cloud\Deploy\V1\TargetAttribute>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTargets($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Deploy\V1\TargetAttribute::class);
        $this->targets = $arr;

        return $this;
    }

}

