<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: response.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>requestData</code>
 */
class requestData extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string google_visitor_id = 2;</code>
     */
    protected $google_visitor_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $google_visitor_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Response::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string google_visitor_id = 2;</code>
     * @return string
     */
    public function getGoogleVisitorId()
    {
        return $this->google_visitor_id;
    }

    /**
     * Generated from protobuf field <code>string google_visitor_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setGoogleVisitorId($var)
    {
        GPBUtil::checkString($var, True);
        $this->google_visitor_id = $var;

        return $this;
    }

}
