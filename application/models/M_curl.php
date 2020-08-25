<?php 
class M_curl extends CI_Model
{
    function get_nik($id)
    {
        $data = array(
            "user_id" => "KOMINFO",
            "password" => "123456",
            // "nik" => "3319035806910003"
            "nik" => $id
        );
        $curl = curl_init();
        
        curl_setopt_array($curl, array(
            CURLOPT_PORT => "8000",
            CURLOPT_URL => "http://ws.dukcapil:8000/dukcapil/get_json/KOMINFO/NIK",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode($data),
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            echo $response;
        }
    }

}