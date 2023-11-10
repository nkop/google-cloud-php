<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/lineage/v1/lineage.proto

namespace GPBMetadata\Google\Cloud\Datacatalog\Lineage\V1;

class Lineage
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
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�P
1google/cloud/datacatalog/lineage/v1/lineage.proto#google.cloud.datacatalog.lineage.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto#google/longrunning/operations.protogoogle/protobuf/empty.proto google/protobuf/field_mask.protogoogle/protobuf/struct.protogoogle/protobuf/timestamp.proto"�
Process
name (	B�A
display_name (	B�AU

attributes (2<.google.cloud.datacatalog.lineage.v1.Process.AttributesEntryB�A@
origin (2+.google.cloud.datacatalog.lineage.v1.OriginB�AI
AttributesEntry
key (	%
value (2.google.protobuf.Value:8:d�Aa
"datalineage.googleapis.com/Process;projects/{project}/locations/{location}/processes/{process}"�
Run
name (	B�A
display_name (	B�AQ

attributes (28.google.cloud.datacatalog.lineage.v1.Run.AttributesEntryB�A3

start_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�AB
state (2..google.cloud.datacatalog.lineage.v1.Run.StateB�AI
AttributesEntry
key (	%
value (2.google.protobuf.Value:8"I
State
UNKNOWN 
STARTED
	COMPLETED

FAILED
ABORTED:k�Ah
datalineage.googleapis.com/RunFprojects/{project}/locations/{location}/processes/{process}/runs/{run}"�
LineageEvent
name (	B�AB
links (2..google.cloud.datacatalog.lineage.v1.EventLinkB�A3

start_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�A:��A�
\'datalineage.googleapis.com/LineageEventdprojects/{project}/locations/{location}/processes/{process}/runs/{run}/lineageEvents/{lineage_event}"�
	EventLinkI
source (24.google.cloud.datacatalog.lineage.v1.EntityReferenceB�AI
target (24.google.cloud.datacatalog.lineage.v1.EntityReferenceB�A"4
EntityReference!
fully_qualified_name (	B�A"�
OperationMetadataP
state (2<.google.cloud.datacatalog.lineage.v1.OperationMetadata.StateB�AX
operation_type (2;.google.cloud.datacatalog.lineage.v1.OperationMetadata.TypeB�A
resource (	B�A
resource_uuid (	B�A4
create_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�A"S
State
STATE_UNSPECIFIED 
PENDING
RUNNING
	SUCCEEDED

FAILED"4
Type
TYPE_UNSPECIFIED 

DELETE

CREATE"�
!ProcessOpenLineageRunEventRequest
parent (	B�A2
open_lineage (2.google.protobuf.StructB�A

request_id (	"�
"ProcessOpenLineageRunEventResponse8
process (	B\'�A$
"datalineage.googleapis.com/Process0
run (	B#�A 
datalineage.googleapis.com/RunD
lineage_events (	B,�A)
\'datalineage.googleapis.com/LineageEvent"�
CreateProcessRequest:
parent (	B*�A�A$"datalineage.googleapis.com/ProcessB
process (2,.google.cloud.datacatalog.lineage.v1.ProcessB�A

request_id (	"�
UpdateProcessRequestB
process (2,.google.cloud.datacatalog.lineage.v1.ProcessB�A/
update_mask (2.google.protobuf.FieldMask
allow_missing ("M
GetProcessRequest8
name (	B*�A�A$
"datalineage.googleapis.com/Process"y
ListProcessesRequest:
parent (	B*�A�A$"datalineage.googleapis.com/Process
	page_size (

page_token (	"q
ListProcessesResponse?
	processes (2,.google.cloud.datacatalog.lineage.v1.Process
next_page_token (	"g
DeleteProcessRequest8
name (	B*�A�A$
"datalineage.googleapis.com/Process
allow_missing ("�
CreateRunRequest6
parent (	B&�A�A datalineage.googleapis.com/Run:
run (2(.google.cloud.datacatalog.lineage.v1.RunB�A

request_id (	"�
UpdateRunRequest:
run (2(.google.cloud.datacatalog.lineage.v1.RunB�A/
update_mask (2.google.protobuf.FieldMask
allow_missing ("E
GetRunRequest4
name (	B&�A�A 
datalineage.googleapis.com/Run"p
ListRunsRequest6
parent (	B&�A�A datalineage.googleapis.com/Run
	page_size (

page_token (	"c
ListRunsResponse6
runs (2(.google.cloud.datacatalog.lineage.v1.Run
next_page_token (	"_
DeleteRunRequest4
name (	B&�A�A 
datalineage.googleapis.com/Run
allow_missing ("�
CreateLineageEventRequest?
parent (	B/�A�A)\'datalineage.googleapis.com/LineageEventM
lineage_event (21.google.cloud.datacatalog.lineage.v1.LineageEventB�A

request_id (	"W
GetLineageEventRequest=
name (	B/�A�A)
\'datalineage.googleapis.com/LineageEvent"�
ListLineageEventsRequest?
parent (	B/�A�A)\'datalineage.googleapis.com/LineageEvent
	page_size (

page_token (	"
ListLineageEventsResponseI
lineage_events (21.google.cloud.datacatalog.lineage.v1.LineageEvent
next_page_token (	"q
DeleteLineageEventRequest=
name (	B/�A�A)
\'datalineage.googleapis.com/LineageEvent
allow_missing ("�
SearchLinksRequest:
parent (	B*�A�A$"datalineage.googleapis.com/ProcessK
source (24.google.cloud.datacatalog.lineage.v1.EntityReferenceB�AH K
target (24.google.cloud.datacatalog.lineage.v1.EntityReferenceB�AH 
	page_size (B�A

page_token (	B�AB

criteria"h
SearchLinksResponse8
links (2).google.cloud.datacatalog.lineage.v1.Link
next_page_token (	"�
Link
name (	B�A�AD
source (24.google.cloud.datacatalog.lineage.v1.EntityReferenceD
target (24.google.cloud.datacatalog.lineage.v1.EntityReference.

start_time (2.google.protobuf.Timestamp,
end_time (2.google.protobuf.Timestamp"�
BatchSearchLinkProcessesRequest:
parent (	B*�A�A$"datalineage.googleapis.com/Process
links (	B�A
	page_size (

page_token (	"�
 BatchSearchLinkProcessesResponseH
process_links (21.google.cloud.datacatalog.lineage.v1.ProcessLinks
next_page_token (	"�
ProcessLinks8
process (	B\'�A$
"datalineage.googleapis.com/ProcessC
links (24.google.cloud.datacatalog.lineage.v1.ProcessLinkInfo"}
ProcessLinkInfo
link (	.

start_time (2.google.protobuf.Timestamp,
end_time (2.google.protobuf.Timestamp"�
OriginK
source_type (26.google.cloud.datacatalog.lineage.v1.Origin.SourceType
name (	"�

SourceType
SOURCE_TYPE_UNSPECIFIED 

CUSTOM
BIGQUERY
DATA_FUSION
COMPOSER
LOOKER_STUDIO
DATAPROC2�
Lineage�
ProcessOpenLineageRunEventF.google.cloud.datacatalog.lineage.v1.ProcessOpenLineageRunEventRequestG.google.cloud.datacatalog.lineage.v1.ProcessOpenLineageRunEventResponse"j���N">/v1/{parent=projects/*/locations/*}:processOpenLineageRunEvent:open_lineage�Aparent,open_lineage�
CreateProcess9.google.cloud.datacatalog.lineage.v1.CreateProcessRequest,.google.cloud.datacatalog.lineage.v1.Process"O���8"-/v1/{parent=projects/*/locations/*}/processes:process�Aparent,process�
UpdateProcess9.google.cloud.datacatalog.lineage.v1.UpdateProcessRequest,.google.cloud.datacatalog.lineage.v1.Process"\\���@25/v1/{process.name=projects/*/locations/*/processes/*}:process�Aprocess,update_mask�

GetProcess6.google.cloud.datacatalog.lineage.v1.GetProcessRequest,.google.cloud.datacatalog.lineage.v1.Process"<���/-/v1/{name=projects/*/locations/*/processes/*}�Aname�
ListProcesses9.google.cloud.datacatalog.lineage.v1.ListProcessesRequest:.google.cloud.datacatalog.lineage.v1.ListProcessesResponse">���/-/v1/{parent=projects/*/locations/*}/processes�Aparent�
DeleteProcess9.google.cloud.datacatalog.lineage.v1.DeleteProcessRequest.google.longrunning.Operation"����/*-/v1/{name=projects/*/locations/*/processes/*}�Aname�AN
google.protobuf.Empty5google.cloud.datacatalog.lineage.v1.OperationMetadata�
	CreateRun5.google.cloud.datacatalog.lineage.v1.CreateRunRequest(.google.cloud.datacatalog.lineage.v1.Run"N���;"4/v1/{parent=projects/*/locations/*/processes/*}/runs:run�A
parent,run�
	UpdateRun5.google.cloud.datacatalog.lineage.v1.UpdateRunRequest(.google.cloud.datacatalog.lineage.v1.Run"W���?28/v1/{run.name=projects/*/locations/*/processes/*/runs/*}:run�Arun,update_mask�
GetRun2.google.cloud.datacatalog.lineage.v1.GetRunRequest(.google.cloud.datacatalog.lineage.v1.Run"C���64/v1/{name=projects/*/locations/*/processes/*/runs/*}�Aname�
ListRuns4.google.cloud.datacatalog.lineage.v1.ListRunsRequest5.google.cloud.datacatalog.lineage.v1.ListRunsResponse"E���64/v1/{parent=projects/*/locations/*/processes/*}/runs�Aparent�
	DeleteRun5.google.cloud.datacatalog.lineage.v1.DeleteRunRequest.google.longrunning.Operation"����6*4/v1/{name=projects/*/locations/*/processes/*/runs/*}�Aname�AN
google.protobuf.Empty5google.cloud.datacatalog.lineage.v1.OperationMetadata�
CreateLineageEvent>.google.cloud.datacatalog.lineage.v1.CreateLineageEventRequest1.google.cloud.datacatalog.lineage.v1.LineageEvent"r���U"D/v1/{parent=projects/*/locations/*/processes/*/runs/*}/lineageEvents:lineage_event�Aparent,lineage_event�
GetLineageEvent;.google.cloud.datacatalog.lineage.v1.GetLineageEventRequest1.google.cloud.datacatalog.lineage.v1.LineageEvent"S���FD/v1/{name=projects/*/locations/*/processes/*/runs/*/lineageEvents/*}�Aname�
ListLineageEvents=.google.cloud.datacatalog.lineage.v1.ListLineageEventsRequest>.google.cloud.datacatalog.lineage.v1.ListLineageEventsResponse"U���FD/v1/{parent=projects/*/locations/*/processes/*/runs/*}/lineageEvents�Aparent�
DeleteLineageEvent>.google.cloud.datacatalog.lineage.v1.DeleteLineageEventRequest.google.protobuf.Empty"S���F*D/v1/{name=projects/*/locations/*/processes/*/runs/*/lineageEvents/*}�Aname�
SearchLinks7.google.cloud.datacatalog.lineage.v1.SearchLinksRequest8.google.cloud.datacatalog.lineage.v1.SearchLinksResponse":���4"//v1/{parent=projects/*/locations/*}:searchLinks:*�
BatchSearchLinkProcessesD.google.cloud.datacatalog.lineage.v1.BatchSearchLinkProcessesRequestE.google.cloud.datacatalog.lineage.v1.BatchSearchLinkProcessesResponse"G���A"</v1/{parent=projects/*/locations/*}:batchSearchLinkProcesses:*N�Adatalineage.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
\'com.google.cloud.datacatalog.lineage.v1BLineageProtoPZAcloud.google.com/go/datacatalog/lineage/apiv1/lineagepb;lineagepb�#Google.Cloud.DataCatalog.Lineage.V1�#Google\\Cloud\\DataCatalog\\Lineage\\V1�\'Google::Cloud::DataCatalog::Lineage::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

