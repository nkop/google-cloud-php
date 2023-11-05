<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/deploy/v1/cloud_deploy.proto

namespace Google\Cloud\Deploy\V1\DeployJobRun;

use UnexpectedValueException;

/**
 * Well-known deploy failures.
 *
 * Protobuf type <code>google.cloud.deploy.v1.DeployJobRun.FailureCause</code>
 */
class FailureCause
{
    /**
     * No reason for failure is specified.
     *
     * Generated from protobuf enum <code>FAILURE_CAUSE_UNSPECIFIED = 0;</code>
     */
    const FAILURE_CAUSE_UNSPECIFIED = 0;
    /**
     * Cloud Build is not available, either because it is not enabled or because
     * Cloud Deploy has insufficient permissions. See [Required
     * permission](https://cloud.google.com/deploy/docs/cloud-deploy-service-account#required_permissions).
     *
     * Generated from protobuf enum <code>CLOUD_BUILD_UNAVAILABLE = 1;</code>
     */
    const CLOUD_BUILD_UNAVAILABLE = 1;
    /**
     * The deploy operation did not complete successfully; check Cloud Build
     * logs.
     *
     * Generated from protobuf enum <code>EXECUTION_FAILED = 2;</code>
     */
    const EXECUTION_FAILED = 2;
    /**
     * The deploy job run did not complete within the alloted time.
     *
     * Generated from protobuf enum <code>DEADLINE_EXCEEDED = 3;</code>
     */
    const DEADLINE_EXCEEDED = 3;
    /**
     * There were missing resources in the runtime environment required for a
     * canary deployment. Check the Cloud Build logs for more information.
     *
     * Generated from protobuf enum <code>MISSING_RESOURCES_FOR_CANARY = 4;</code>
     */
    const MISSING_RESOURCES_FOR_CANARY = 4;
    /**
     * Cloud Build failed to fulfill Cloud Deploy's request. See failure_message
     * for additional details.
     *
     * Generated from protobuf enum <code>CLOUD_BUILD_REQUEST_FAILED = 5;</code>
     */
    const CLOUD_BUILD_REQUEST_FAILED = 5;

    private static $valueToName = [
        self::FAILURE_CAUSE_UNSPECIFIED => 'FAILURE_CAUSE_UNSPECIFIED',
        self::CLOUD_BUILD_UNAVAILABLE => 'CLOUD_BUILD_UNAVAILABLE',
        self::EXECUTION_FAILED => 'EXECUTION_FAILED',
        self::DEADLINE_EXCEEDED => 'DEADLINE_EXCEEDED',
        self::MISSING_RESOURCES_FOR_CANARY => 'MISSING_RESOURCES_FOR_CANARY',
        self::CLOUD_BUILD_REQUEST_FAILED => 'CLOUD_BUILD_REQUEST_FAILED',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


