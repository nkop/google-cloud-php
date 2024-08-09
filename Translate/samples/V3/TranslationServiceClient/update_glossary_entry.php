<?php
/*
 * Copyright 2024 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * This file was automatically generated - do not edit!
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

// [START translate_v3_generated_TranslationService_UpdateGlossaryEntry_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\Translate\V3\Client\TranslationServiceClient;
use Google\Cloud\Translate\V3\GlossaryEntry;
use Google\Cloud\Translate\V3\UpdateGlossaryEntryRequest;

/**
 * Updates a glossary entry.
 *
 * This sample has been automatically generated and should be regarded as a code
 * template only. It will require modifications to work:
 *  - It may require correct/in-range values for request initialization.
 *  - It may require specifying regional endpoints when creating the service client,
 *    please see the apiEndpoint client configuration option for more details.
 */
function update_glossary_entry_sample(): void
{
    // Create a client.
    $translationServiceClient = new TranslationServiceClient();

    // Prepare the request message.
    $glossaryEntry = new GlossaryEntry();
    $request = (new UpdateGlossaryEntryRequest())
        ->setGlossaryEntry($glossaryEntry);

    // Call the API and handle any network failures.
    try {
        /** @var GlossaryEntry $response */
        $response = $translationServiceClient->updateGlossaryEntry($request);
        printf('Response data: %s' . PHP_EOL, $response->serializeToJsonString());
    } catch (ApiException $ex) {
        printf('Call failed with message: %s' . PHP_EOL, $ex->getMessage());
    }
}
// [END translate_v3_generated_TranslationService_UpdateGlossaryEntry_sync]
