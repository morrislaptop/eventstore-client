<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ClientMessageDtos.proto

namespace Rxnet\EventStore\Data\UpdatePersistentSubscriptionCompleted;

/**
 * Protobuf type <code>Rxnet.EventStore.Data.UpdatePersistentSubscriptionCompleted.UpdatePersistentSubscriptionResult</code>
 */
class UpdatePersistentSubscriptionResult
{
    /**
     * Generated from protobuf enum <code>Success = 0;</code>
     */
    const Success = 0;
    /**
     * Generated from protobuf enum <code>DoesNotExist = 1;</code>
     */
    const DoesNotExist = 1;
    /**
     * Generated from protobuf enum <code>Fail = 2;</code>
     */
    const Fail = 2;
    /**
     * Generated from protobuf enum <code>AccessDenied = 3;</code>
     */
    const AccessDenied = 3;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(UpdatePersistentSubscriptionResult::class, \Rxnet\EventStore\Data\UpdatePersistentSubscriptionCompleted_UpdatePersistentSubscriptionResult::class);
