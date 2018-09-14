<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

define("WTS_API_URL", "https://gateway.watsonplatform.net/personality-insights/api/v2/profile");
define("WTS_USER_KEY", "a4c650ee-23ed-42fe-b9fe-658aaeb603e8");
define("WTS_USER_PASS", "5ZI0N6EKSWcI");

class PersonalityLogic {
    private $config;
    protected $CI;

    public function __construct()
    {
        $this->CI = &get_instance();
    }

    public function analytic($text = NULL) {




        $api_url = 'https://gateway.watsonplatform.net/personality-insights/api/v2/profile';

        $post_args = array(
            'contentItems' => array(
                array(
                    'content'       => $text,
                    'contenttype'   => 'text/plain',
                    'language'      => 'ja'
                )
            )
        );

        $header_args = array(
            'Content-Type: application/json',
            'Content-Language: ja'
            ,'Accept-Language: ja'
        );

        $post_args = json_encode($post_args);

        $curl = curl_init($api_url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_USERPWD, WTS_USER_KEY.":".WTS_USER_PASS);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $header_args);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $post_args);
        $response = curl_exec($curl);
        curl_close($curl);

        var_dump($response);
        die();


            $datax = array(
            'contentItems' => array(
                $datarr = array(
                    'userid' => 'dummy',
                    'id' => 'someid',
                    'sourceid' => 'freetext',
                    'contenttype' => 'text/plain',
                    'language' => 'ja',
                    'content' => $data)
                    )
            );

            $data_string = json_encode($datax);
            $curl = curl_init();

            //print 'ok';
            //print $this->auth;

            $header_args = array(
                'Content-Type: application/json',
                'X-SyncTimeout: 60',
                // 'Authorization: Basic ' . $this->auth,
                'Content-Length: ' . strlen($data_string)
            );

            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
            curl_setopt($curl, CURLOPT_HTTPHEADER, $header_args);
            curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
            curl_setopt($curl, CURLOPT_USERPWD, WTS_USER_KEY.":".WTS_USER_PASS);
            curl_setopt($curl, CURLOPT_URL, WTS_API_URL);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

            $result = curl_exec($curl);
            if(curl_errno($curl)) {
                echo 'error:' . curl_error($curl);
            }
            curl_close($curl);
            // return $result;
            $result = json_encode($result);
            var_dump($result);
            die();


















        // var_dump($data);
        // die();

        $curl = curl_init();
        $post_args = array(
            'Content-Type' => "text/plain",
            'Accept' => "application/json",
            'Accept-Language' => 'ja',
            'Content-Language' => 'ja',
            'headers' => true,
            'body' => $data
           );


        $header_args = array(
            'Content-Type: application/json',
            'Content-Language: ja',
            'Accept-Language: ja'
        );

        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $post_args);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $header_args);
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($curl, CURLOPT_USERPWD, WTS_USER_KEY.":".WTS_USER_PASS);
        curl_setopt($curl, CURLOPT_URL, WTS_API_URL);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($curl);
        curl_close($curl);

        // $decoded = json_decode($result, true);
        return $result;

    }


}