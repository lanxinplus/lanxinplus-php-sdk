<?php
/**
 * MessageApiTest
 * PHP version 7.3
 *
 * @category Class
 * @package  LanXinPlusOpenAPI
 * @author   LanXin OPEN
 * @link     https://openapi.lanxin.cn
 */

/**
 * LanXin+ OpenAPI
 *
 * LanXin+ OpenAPI Platform
 *
 * Generated by: https://openapi.lanxin.cn
 */



namespace LanXinPlusOpenAPI\Test\Api;

use PHPUnit\Framework\TestCase;
use \GuzzleHttp\Client;
use \LanXinPlusOpenAPI\Configuration;
use \LanXinPlusOpenAPI\ApiException;
use \LanXinPlusOpenAPI\ObjectSerializer;
use \LanXinPlusOpenAPI\Api\MessageApi;
use \LanXinPlusOpenAPI\Api\AuthApi;


/**
 * MessageApiTest Class Doc Comment
 *
 * @category Class
 * @package  LanXinPlusOpenAPI
 * @author   LanXin OPEN
 * @link     https://openapi.lanxin.cn
 */
class MessageApiTest extends TestCase
{

    /**
     * Setup before running any test cases
     */
    protected static $config;
    public static function setUpBeforeClass(): void
    {
        // 蓝信开放平台网关地址, e.g.: https://example.com/open/apigw
        $host = "host";
        // 应用ID, e.g.: 1234567-7654321
        $appId = "appId";
        // 应用密钥, e.g.: D25F65E65D887AEFD9C92B00310286FA
        $appSecret = "appSecret";

        $config = new Configuration($host, $appId, $appSecret);
        $api = new AuthApi(new Client(), $config);
        $resp = $api->V1ApptokenCreate("client_credential" ,$appId, $appSecret);
        if ($resp->getErrCode() !=0) {
            echo "err in get appToken, errCode:", $resp->getErrCode(), ", errMsg:", $resp->getErrMsg(), PHP_EOL;
        }else{
            $config->setAppToken($resp->getData()->getAppToken());
            self::$config = $config;
        };
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test case for v1ChatNotificationFetch
     *
     * 获取通知消息会话状态.
     *
     */
    public function testV1ChatNotificationFetch()
    {
        $api = new MessageApi(new Client(),self::$config);
        $app_token = self::$config->getAppToken(); // string | app_token 
        $userid = 'userid_example'; // string | userid 
        $user_token = self::$config->getUserToken(); // string | user_token (可选参数)
        try{
            $resp = $api->v1ChatNotificationFetch($app_token, $userid);
            print_r($resp);
            $this->assertEquals($resp->getErrCode(), 0);
        } catch (Exception $e) {
            echo 'Exception when calling MessageApi->v1ChatNotificationFetch: ', $e->getMessage(), PHP_EOL;
        }
    }

    /**
     * Test case for v1MessagesCreate
     *
     * 发送应用消息应用号通道.
     *
     */
    public function testV1MessagesCreate()
    {
        $api = new MessageApi(new Client(),self::$config);
        $app_token = self::$config->getAppToken(); // string | app_token 
        $v1_messages_create_request_body = new \LanXinPlusOpenAPI\Model\V1MessagesCreateRequestBody(); // \LanXinPlusOpenAPI\Model\V1MessagesCreateRequestBody | Request Body 
        $user_token = self::$config->getUserToken(); // string | user_token (可选参数)
        try{
            $resp = $api->v1MessagesCreate($app_token, $v1_messages_create_request_body);
            print_r($resp);
            $this->assertEquals($resp->getErrCode(), 0);
        } catch (Exception $e) {
            echo 'Exception when calling MessageApi->v1MessagesCreate: ', $e->getMessage(), PHP_EOL;
        }
    }

    /**
     * Test case for v1MessagesNotificationCreate
     *
     * 发送通知消息.
     *
     */
    public function testV1MessagesNotificationCreate()
    {
        $api = new MessageApi(new Client(),self::$config);
        $app_token = self::$config->getAppToken(); // string | app_token 
        $v1_messages_notification_create_request_body = new \LanXinPlusOpenAPI\Model\V1MessagesNotificationCreateRequestBody(); // \LanXinPlusOpenAPI\Model\V1MessagesNotificationCreateRequestBody | Request Body 
        $user_token = self::$config->getUserToken(); // string | user_token (可选参数)
        try{
            $resp = $api->v1MessagesNotificationCreate($app_token, $v1_messages_notification_create_request_body);
            print_r($resp);
            $this->assertEquals($resp->getErrCode(), 0);
        } catch (Exception $e) {
            echo 'Exception when calling MessageApi->v1MessagesNotificationCreate: ', $e->getMessage(), PHP_EOL;
        }
    }

    /**
     * Test case for v1MessagesRevoke
     *
     * 撤回消息.
     *
     */
    public function testV1MessagesRevoke()
    {
        $api = new MessageApi(new Client(),self::$config);
        $app_token = self::$config->getAppToken(); // string | app_token 
        $v1_messages_revoke_request_body = new \LanXinPlusOpenAPI\Model\V1MessagesRevokeRequestBody(); // \LanXinPlusOpenAPI\Model\V1MessagesRevokeRequestBody | Request Body 
        $user_token = self::$config->getUserToken(); // string | user_token (可选参数)
        try{
            $resp = $api->v1MessagesRevoke($app_token, $v1_messages_revoke_request_body);
            print_r($resp);
            $this->assertEquals($resp->getErrCode(), 0);
        } catch (Exception $e) {
            echo 'Exception when calling MessageApi->v1MessagesRevoke: ', $e->getMessage(), PHP_EOL;
        }
    }

    /**
     * Test case for v2ChatNotificationUpdate
     *
     * 更新通知消息会话状态（批量）.
     *
     */
    public function testV2ChatNotificationUpdate()
    {
        $api = new MessageApi(new Client(),self::$config);
        $app_token = self::$config->getAppToken(); // string | app_token 
        $v2_chat_notification_update_request_body = new \LanXinPlusOpenAPI\Model\V2ChatNotificationUpdateRequestBody(); // \LanXinPlusOpenAPI\Model\V2ChatNotificationUpdateRequestBody | Request Body 
        $user_token = self::$config->getUserToken(); // string | user_token (可选参数)
        try{
            $resp = $api->v2ChatNotificationUpdate($app_token, $v2_chat_notification_update_request_body);
            print_r($resp);
            $this->assertEquals($resp->getErrCode(), 0);
        } catch (Exception $e) {
            echo 'Exception when calling MessageApi->v2ChatNotificationUpdate: ', $e->getMessage(), PHP_EOL;
        }
    }

    /**
     * Test case for v2EventNotificationCreate
     *
     * 发送应用消息应用号通道.
     *
     */
    public function testV2EventNotificationCreate()
    {
        $api = new MessageApi(new Client(),self::$config);
        $app_token = self::$config->getAppToken(); // string | app_token 
        $v2_event_notification_create_request_body = new \LanXinPlusOpenAPI\Model\V2EventNotificationCreateRequestBody(); // \LanXinPlusOpenAPI\Model\V2EventNotificationCreateRequestBody | Request Body 
        $user_token = self::$config->getUserToken(); // string | user_token (可选参数)
        try{
            $resp = $api->v2EventNotificationCreate($app_token, $v2_event_notification_create_request_body);
            print_r($resp);
            $this->assertEquals($resp->getErrCode(), 0);
        } catch (Exception $e) {
            echo 'Exception when calling MessageApi->v2EventNotificationCreate: ', $e->getMessage(), PHP_EOL;
        }
    }
}