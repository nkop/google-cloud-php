<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/kms/v1/service.proto

namespace Google\Cloud\Kms\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for [KeyManagementService.Decrypt][google.cloud.kms.v1.KeyManagementService.Decrypt].
 *
 * Generated from protobuf message <code>google.cloud.kms.v1.DecryptResponse</code>
 */
class DecryptResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The decrypted data originally supplied in [EncryptRequest.plaintext][google.cloud.kms.v1.EncryptRequest.plaintext].
     *
     * Generated from protobuf field <code>bytes plaintext = 1;</code>
     */
    private $plaintext = '';
    /**
     * Integrity verification field. A CRC32C checksum of the returned
     * [DecryptResponse.plaintext][google.cloud.kms.v1.DecryptResponse.plaintext]. An integrity check of
     * [DecryptResponse.plaintext][google.cloud.kms.v1.DecryptResponse.plaintext] can be performed by computing the CRC32C
     * checksum of [DecryptResponse.plaintext][google.cloud.kms.v1.DecryptResponse.plaintext] and comparing your results to
     * this field. Discard the response in case of non-matching checksum values,
     * and perform a limited number of retries. A persistent mismatch may indicate
     * an issue in your computation of the CRC32C checksum. Note: receiving this
     * response message indicates that [KeyManagementService][google.cloud.kms.v1.KeyManagementService] is able to
     * successfully decrypt the [ciphertext][google.cloud.kms.v1.DecryptRequest.ciphertext].
     * Note: This field is defined as int64 for reasons of compatibility across
     * different languages. However, it is a non-negative integer, which will
     * never exceed 2^32-1, and can be safely downconverted to uint32 in languages
     * that support this type.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value plaintext_crc32c = 2;</code>
     */
    private $plaintext_crc32c = null;
    /**
     * Whether the Decryption was performed using the primary key version.
     *
     * Generated from protobuf field <code>bool used_primary = 3;</code>
     */
    private $used_primary = false;
    /**
     * The [ProtectionLevel][google.cloud.kms.v1.ProtectionLevel] of the [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] used in decryption.
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.ProtectionLevel protection_level = 4;</code>
     */
    private $protection_level = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $plaintext
     *           The decrypted data originally supplied in [EncryptRequest.plaintext][google.cloud.kms.v1.EncryptRequest.plaintext].
     *     @type \Google\Protobuf\Int64Value $plaintext_crc32c
     *           Integrity verification field. A CRC32C checksum of the returned
     *           [DecryptResponse.plaintext][google.cloud.kms.v1.DecryptResponse.plaintext]. An integrity check of
     *           [DecryptResponse.plaintext][google.cloud.kms.v1.DecryptResponse.plaintext] can be performed by computing the CRC32C
     *           checksum of [DecryptResponse.plaintext][google.cloud.kms.v1.DecryptResponse.plaintext] and comparing your results to
     *           this field. Discard the response in case of non-matching checksum values,
     *           and perform a limited number of retries. A persistent mismatch may indicate
     *           an issue in your computation of the CRC32C checksum. Note: receiving this
     *           response message indicates that [KeyManagementService][google.cloud.kms.v1.KeyManagementService] is able to
     *           successfully decrypt the [ciphertext][google.cloud.kms.v1.DecryptRequest.ciphertext].
     *           Note: This field is defined as int64 for reasons of compatibility across
     *           different languages. However, it is a non-negative integer, which will
     *           never exceed 2^32-1, and can be safely downconverted to uint32 in languages
     *           that support this type.
     *     @type bool $used_primary
     *           Whether the Decryption was performed using the primary key version.
     *     @type int $protection_level
     *           The [ProtectionLevel][google.cloud.kms.v1.ProtectionLevel] of the [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] used in decryption.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Kms\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * The decrypted data originally supplied in [EncryptRequest.plaintext][google.cloud.kms.v1.EncryptRequest.plaintext].
     *
     * Generated from protobuf field <code>bytes plaintext = 1;</code>
     * @return string
     */
    public function getPlaintext()
    {
        return $this->plaintext;
    }

    /**
     * The decrypted data originally supplied in [EncryptRequest.plaintext][google.cloud.kms.v1.EncryptRequest.plaintext].
     *
     * Generated from protobuf field <code>bytes plaintext = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPlaintext($var)
    {
        GPBUtil::checkString($var, False);
        $this->plaintext = $var;

        return $this;
    }

    /**
     * Integrity verification field. A CRC32C checksum of the returned
     * [DecryptResponse.plaintext][google.cloud.kms.v1.DecryptResponse.plaintext]. An integrity check of
     * [DecryptResponse.plaintext][google.cloud.kms.v1.DecryptResponse.plaintext] can be performed by computing the CRC32C
     * checksum of [DecryptResponse.plaintext][google.cloud.kms.v1.DecryptResponse.plaintext] and comparing your results to
     * this field. Discard the response in case of non-matching checksum values,
     * and perform a limited number of retries. A persistent mismatch may indicate
     * an issue in your computation of the CRC32C checksum. Note: receiving this
     * response message indicates that [KeyManagementService][google.cloud.kms.v1.KeyManagementService] is able to
     * successfully decrypt the [ciphertext][google.cloud.kms.v1.DecryptRequest.ciphertext].
     * Note: This field is defined as int64 for reasons of compatibility across
     * different languages. However, it is a non-negative integer, which will
     * never exceed 2^32-1, and can be safely downconverted to uint32 in languages
     * that support this type.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value plaintext_crc32c = 2;</code>
     * @return \Google\Protobuf\Int64Value|null
     */
    public function getPlaintextCrc32C()
    {
        return isset($this->plaintext_crc32c) ? $this->plaintext_crc32c : null;
    }

    public function hasPlaintextCrc32C()
    {
        return isset($this->plaintext_crc32c);
    }

    public function clearPlaintextCrc32C()
    {
        unset($this->plaintext_crc32c);
    }

    /**
     * Returns the unboxed value from <code>getPlaintextCrc32C()</code>

     * Integrity verification field. A CRC32C checksum of the returned
     * [DecryptResponse.plaintext][google.cloud.kms.v1.DecryptResponse.plaintext]. An integrity check of
     * [DecryptResponse.plaintext][google.cloud.kms.v1.DecryptResponse.plaintext] can be performed by computing the CRC32C
     * checksum of [DecryptResponse.plaintext][google.cloud.kms.v1.DecryptResponse.plaintext] and comparing your results to
     * this field. Discard the response in case of non-matching checksum values,
     * and perform a limited number of retries. A persistent mismatch may indicate
     * an issue in your computation of the CRC32C checksum. Note: receiving this
     * response message indicates that [KeyManagementService][google.cloud.kms.v1.KeyManagementService] is able to
     * successfully decrypt the [ciphertext][google.cloud.kms.v1.DecryptRequest.ciphertext].
     * Note: This field is defined as int64 for reasons of compatibility across
     * different languages. However, it is a non-negative integer, which will
     * never exceed 2^32-1, and can be safely downconverted to uint32 in languages
     * that support this type.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value plaintext_crc32c = 2;</code>
     * @return int|string|null
     */
    public function getPlaintextCrc32CValue()
    {
        return $this->readWrapperValue("plaintext_crc32c");
    }

    /**
     * Integrity verification field. A CRC32C checksum of the returned
     * [DecryptResponse.plaintext][google.cloud.kms.v1.DecryptResponse.plaintext]. An integrity check of
     * [DecryptResponse.plaintext][google.cloud.kms.v1.DecryptResponse.plaintext] can be performed by computing the CRC32C
     * checksum of [DecryptResponse.plaintext][google.cloud.kms.v1.DecryptResponse.plaintext] and comparing your results to
     * this field. Discard the response in case of non-matching checksum values,
     * and perform a limited number of retries. A persistent mismatch may indicate
     * an issue in your computation of the CRC32C checksum. Note: receiving this
     * response message indicates that [KeyManagementService][google.cloud.kms.v1.KeyManagementService] is able to
     * successfully decrypt the [ciphertext][google.cloud.kms.v1.DecryptRequest.ciphertext].
     * Note: This field is defined as int64 for reasons of compatibility across
     * different languages. However, it is a non-negative integer, which will
     * never exceed 2^32-1, and can be safely downconverted to uint32 in languages
     * that support this type.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value plaintext_crc32c = 2;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setPlaintextCrc32C($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->plaintext_crc32c = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * Integrity verification field. A CRC32C checksum of the returned
     * [DecryptResponse.plaintext][google.cloud.kms.v1.DecryptResponse.plaintext]. An integrity check of
     * [DecryptResponse.plaintext][google.cloud.kms.v1.DecryptResponse.plaintext] can be performed by computing the CRC32C
     * checksum of [DecryptResponse.plaintext][google.cloud.kms.v1.DecryptResponse.plaintext] and comparing your results to
     * this field. Discard the response in case of non-matching checksum values,
     * and perform a limited number of retries. A persistent mismatch may indicate
     * an issue in your computation of the CRC32C checksum. Note: receiving this
     * response message indicates that [KeyManagementService][google.cloud.kms.v1.KeyManagementService] is able to
     * successfully decrypt the [ciphertext][google.cloud.kms.v1.DecryptRequest.ciphertext].
     * Note: This field is defined as int64 for reasons of compatibility across
     * different languages. However, it is a non-negative integer, which will
     * never exceed 2^32-1, and can be safely downconverted to uint32 in languages
     * that support this type.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value plaintext_crc32c = 2;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setPlaintextCrc32CValue($var)
    {
        $this->writeWrapperValue("plaintext_crc32c", $var);
        return $this;}

    /**
     * Whether the Decryption was performed using the primary key version.
     *
     * Generated from protobuf field <code>bool used_primary = 3;</code>
     * @return bool
     */
    public function getUsedPrimary()
    {
        return $this->used_primary;
    }

    /**
     * Whether the Decryption was performed using the primary key version.
     *
     * Generated from protobuf field <code>bool used_primary = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setUsedPrimary($var)
    {
        GPBUtil::checkBool($var);
        $this->used_primary = $var;

        return $this;
    }

    /**
     * The [ProtectionLevel][google.cloud.kms.v1.ProtectionLevel] of the [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] used in decryption.
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.ProtectionLevel protection_level = 4;</code>
     * @return int
     */
    public function getProtectionLevel()
    {
        return $this->protection_level;
    }

    /**
     * The [ProtectionLevel][google.cloud.kms.v1.ProtectionLevel] of the [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] used in decryption.
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.ProtectionLevel protection_level = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setProtectionLevel($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Kms\V1\ProtectionLevel::class);
        $this->protection_level = $var;

        return $this;
    }

}

