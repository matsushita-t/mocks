<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

define("WTS_BASE_URL",    "https://stream.watsonplatform.net");
define("WTS_SERVICE",     "/speech-to-text");
define("WTS_VERSION",     "/api/v1/recognize");
define("WTS_NARROW_BAND", "ja-JP_NarrowbandModel");
define("WTS_BROAD_BAND",  "ja-JP_BroadbandModel");
define("WTS_REQUEST_URL", WTS_BASE_URL.WTS_SERVICE.WTS_VERSION."?model=".WTS_NARROW_BAND);
define("WTS_USER_KEY", "4606b0e4-97d1-4909-94af-2611dfec31da");
define("WTS_USER_PASS", "O7vSeaicOkky");

class Translate
{
    private $config;
    protected $CI;

    public function __construct()
    {
        $this->CI = &get_instance();

    }

    public function text_translate($audioFile = NULL, $audioType = "audio/wav", $result_type = "json") {

        // $audioType = "audio/mp3";
        // $audioFile = "/var/www/html/ci3/application/cache/purpose_broadcast_01.mp3";

        $user = "4606b0e4-97d1-4909-94af-2611dfec31da";
        $pass = "O7vSeaicOkky";

        $size = filesize($audioFile);
        $data = file_get_contents($audioFile);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_BINARYTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, WTS_REQUEST_URL);
        curl_setopt($ch, CURLOPT_USERPWD, WTS_USER_KEY.":".WTS_USER_PASS);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: $audioType",
            "Transfer-Encoding: chunked"
        ));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_INFILESIZE, $size);
        $json = @curl_exec($ch);

        if ($result_type == "json") {
            return $json;

        } else if ($result_type == "array") {

            return json_decode($json, TRUE);

        } else {
            $transcript_list = json_decode($json, TRUE);
            $text = NULL;
            foreach ($transcript_list as $transcript) {
                if (!empty($transcript)) {
                    foreach ($transcript as $value) {
                        if (!empty($value["alternatives"][0]["transcript"])) {
                            $text .= $value["alternatives"][0]["transcript"];
                        }
                    }
                }
            }
            return $text;
        }
    }


}