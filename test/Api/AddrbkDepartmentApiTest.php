<?php
/**
 * AddrbkDepartmentApiTest
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
use \LanXinPlusOpenAPI\Api\AddrbkDepartmentApi;
use \LanXinPlusOpenAPI\Api\AuthApi;


/**
 * AddrbkDepartmentApiTest Class Doc Comment
 *
 * @category Class
 * @package  LanXinPlusOpenAPI
 * @author   LanXin OPEN
 * @link     https://openapi.lanxin.cn
 */
class AddrbkDepartmentApiTest extends TestCase
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
     * Test case for v1DeptsChildrenFetch
     *
     * 获取子分支列表.
     *
     */
    public function testV1DeptsChildrenFetch()
    {
        $api = new AddrbkDepartmentApi(new Client(),self::$config);
        $app_token = self::$config->getAppToken(); // string | app_token 
        $departmentid = 'departmentid_example'; // string | departmentid 
        $user_token = self::$config->getUserToken(); // string | user_token (可选参数)
        try{
            $resp = $api->v1DeptsChildrenFetch($app_token, $departmentid);
            print_r($resp);
            $this->assertEquals($resp->getErrCode(), 0);
        } catch (Exception $e) {
            echo 'Exception when calling AddrbkDepartmentApi->v1DeptsChildrenFetch: ', $e->getMessage(), PHP_EOL;
        }
    }

    /**
     * Test case for v1DeptsCreate
     *
     * 创建分支.
     *
     */
    public function testV1DeptsCreate()
    {
        $api = new AddrbkDepartmentApi(new Client(),self::$config);
        $app_token = self::$config->getAppToken(); // string | app_token 
        $v1_depts_create_request_body = new \LanXinPlusOpenAPI\Model\V1DeptsCreateRequestBody(); // \LanXinPlusOpenAPI\Model\V1DeptsCreateRequestBody | Request Body 
        $user_token = self::$config->getUserToken(); // string | user_token (可选参数)
        try{
            $resp = $api->v1DeptsCreate($app_token, $v1_depts_create_request_body);
            print_r($resp);
            $this->assertEquals($resp->getErrCode(), 0);
        } catch (Exception $e) {
            echo 'Exception when calling AddrbkDepartmentApi->v1DeptsCreate: ', $e->getMessage(), PHP_EOL;
        }
    }

    /**
     * Test case for v1DeptsDelete
     *
     * 删除分支.
     *
     */
    public function testV1DeptsDelete()
    {
        $api = new AddrbkDepartmentApi(new Client(),self::$config);
        $app_token = self::$config->getAppToken(); // string | app_token 
        $departmentid = 'departmentid_example'; // string | departmentid 
        $user_token = self::$config->getUserToken(); // string | user_token (可选参数)
        try{
            $resp = $api->v1DeptsDelete($app_token, $departmentid);
            print_r($resp);
            $this->assertEquals($resp->getErrCode(), 0);
        } catch (Exception $e) {
            echo 'Exception when calling AddrbkDepartmentApi->v1DeptsDelete: ', $e->getMessage(), PHP_EOL;
        }
    }

    /**
     * Test case for v1DeptsFetch
     *
     * 获取分支详情.
     *
     */
    public function testV1DeptsFetch()
    {
        $api = new AddrbkDepartmentApi(new Client(),self::$config);
        $app_token = self::$config->getAppToken(); // string | app_token 
        $departmentid = 'departmentid_example'; // string | departmentid 
        $user_token = self::$config->getUserToken(); // string | user_token (可选参数)
        try{
            $resp = $api->v1DeptsFetch($app_token, $departmentid);
            print_r($resp);
            $this->assertEquals($resp->getErrCode(), 0);
        } catch (Exception $e) {
            echo 'Exception when calling AddrbkDepartmentApi->v1DeptsFetch: ', $e->getMessage(), PHP_EOL;
        }
    }

    /**
     * Test case for v1DeptsStaffsCreate
     *
     * 添加分支成员.
     *
     */
    public function testV1DeptsStaffsCreate()
    {
        $api = new AddrbkDepartmentApi(new Client(),self::$config);
        $app_token = self::$config->getAppToken(); // string | app_token 
        $departmentid = 'departmentid_example'; // string | departmentid 
        $staffid = 'staffid_example'; // string | staffid 
        $user_token = self::$config->getUserToken(); // string | user_token (可选参数)
        try{
            $resp = $api->v1DeptsStaffsCreate($app_token, $departmentid, $staffid);
            print_r($resp);
            $this->assertEquals($resp->getErrCode(), 0);
        } catch (Exception $e) {
            echo 'Exception when calling AddrbkDepartmentApi->v1DeptsStaffsCreate: ', $e->getMessage(), PHP_EOL;
        }
    }

    /**
     * Test case for v1DeptsStaffsDelete
     *
     * 删除分支成员.
     *
     */
    public function testV1DeptsStaffsDelete()
    {
        $api = new AddrbkDepartmentApi(new Client(),self::$config);
        $app_token = self::$config->getAppToken(); // string | app_token 
        $departmentid = 'departmentid_example'; // string | departmentid 
        $staffid = 'staffid_example'; // string | staffid 
        $user_token = self::$config->getUserToken(); // string | user_token (可选参数)
        try{
            $resp = $api->v1DeptsStaffsDelete($app_token, $departmentid, $staffid);
            print_r($resp);
            $this->assertEquals($resp->getErrCode(), 0);
        } catch (Exception $e) {
            echo 'Exception when calling AddrbkDepartmentApi->v1DeptsStaffsDelete: ', $e->getMessage(), PHP_EOL;
        }
    }

    /**
     * Test case for v1DeptsStaffsFetch
     *
     * 获取分支成员列表.
     *
     */
    public function testV1DeptsStaffsFetch()
    {
        $api = new AddrbkDepartmentApi(new Client(),self::$config);
        $app_token = self::$config->getAppToken(); // string | app_token 
        $departmentid = 'departmentid_example'; // string | departmentid 
        $user_token = self::$config->getUserToken(); // string | user_token (可选参数)
        $page = 56; // int | 起始页码从1开始，默认值为1 (可选参数)
        $page_size = 56; // int | 每页显示个数，默认值是100，最大值是100 (可选参数)
        try{
            $resp = $api->v1DeptsStaffsFetch($app_token, $departmentid);
            print_r($resp);
            $this->assertEquals($resp->getErrCode(), 0);
        } catch (Exception $e) {
            echo 'Exception when calling AddrbkDepartmentApi->v1DeptsStaffsFetch: ', $e->getMessage(), PHP_EOL;
        }
    }

    /**
     * Test case for v1DeptsUpdate
     *
     * 更新分支.
     *
     */
    public function testV1DeptsUpdate()
    {
        $api = new AddrbkDepartmentApi(new Client(),self::$config);
        $app_token = self::$config->getAppToken(); // string | app_token 
        $departmentid = 'departmentid_example'; // string | departmentid 
        $v1_depts_update_request_body = new \LanXinPlusOpenAPI\Model\V1DeptsUpdateRequestBody(); // \LanXinPlusOpenAPI\Model\V1DeptsUpdateRequestBody | Request Body 
        $user_token = self::$config->getUserToken(); // string | user_token (可选参数)
        try{
            $resp = $api->v1DeptsUpdate($app_token, $departmentid, $v1_depts_update_request_body);
            print_r($resp);
            $this->assertEquals($resp->getErrCode(), 0);
        } catch (Exception $e) {
            echo 'Exception when calling AddrbkDepartmentApi->v1DeptsUpdate: ', $e->getMessage(), PHP_EOL;
        }
    }
}