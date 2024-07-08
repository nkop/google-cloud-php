<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/llm_utility_service.proto

namespace GPBMetadata\Google\Cloud\Aiplatform\V1;

class LlmUtilityService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Content::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\PredictionService::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
4google/cloud/aiplatform/v1/llm_utility_service.protogoogle.cloud.aiplatform.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto(google/cloud/aiplatform/v1/content.proto3google/cloud/aiplatform/v1/prediction_service.protogoogle/protobuf/struct.proto"�
ComputeTokensRequest<
endpoint (	B*�A�A$
"aiplatform.googleapis.com/Endpoint.
	instances (2.google.protobuf.ValueB�A
model (	B�A:
contents (2#.google.cloud.aiplatform.v1.ContentB�A"B

TokensInfo
tokens (
	token_ids (
role (	B�A"T
ComputeTokensResponse;
tokens_info (2&.google.cloud.aiplatform.v1.TokensInfo2�
LlmUtilityService�
CountTokens..google.cloud.aiplatform.v1.CountTokensRequest/.google.cloud.aiplatform.v1.CountTokensResponse"��Aendpoint,instances����"=/v1/{endpoint=projects/*/locations/*/endpoints/*}:countTokens:*ZL"G/v1/{endpoint=projects/*/locations/*/publishers/*/models/*}:countTokens:*�
ComputeTokens0.google.cloud.aiplatform.v1.ComputeTokensRequest1.google.cloud.aiplatform.v1.ComputeTokensResponse"��Aendpoint,instances����"?/v1/{endpoint=projects/*/locations/*/endpoints/*}:computeTokens:*ZN"I/v1/{endpoint=projects/*/locations/*/publishers/*/models/*}:computeTokens:*M�Aaiplatform.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
com.google.cloud.aiplatform.v1BLlmUtilityServiceProtoPZ>cloud.google.com/go/aiplatform/apiv1/aiplatformpb;aiplatformpb�Google.Cloud.AIPlatform.V1�Google\\Cloud\\AIPlatform\\V1�Google::Cloud::AIPlatform::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

