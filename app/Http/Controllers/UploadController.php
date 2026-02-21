<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
USE Illuminate\Support\Facades\Response;

class UploadController extends Controller
{
    function index()
    {
        return view('index');
    }

    function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|file'
        ], $request->all());

        $file = $request->file('file');
        $path = $file->store('attachments', ['disk' => 'spaces', 'visibility' => 'public']);
        // dump($path);

        $url = Storage::disk('spaces')->url($path);
        // dump($url);

        return response()->json(['url' => $url, 'path' => $path]);

    }

     function documento($doc)

    {
        $base="fe/20314646411/";
        list($mes, $dia, $archivo) = explode(".", $doc);
        $doc=str_replace(".", "/", $doc);
         $ext=".pdf";
        $file_name=$archivo.$ext;

            $path=$base.$doc.$ext;
       //return $path;
        $url = Storage::disk('spaces')->url($path);
              $headers=[
      // 'Content-Type'=>'application/pdf',
        'Content-Disposition' => 'attachment; filename='. $file_name. ';'
       ];

        $stream=Storage::disk('spaces')->readStream($path);
        //return $headers;
        return Response::stream(function() use ($stream){

         while(!feof($stream)){
          echo fread($stream,4096);
         flush();
       }
        fclose($stream);
       },200,$headers);


    }
     function documento_xml($doc)

    {
        $base="fe/20314646411/";
        list($mes, $dia, $archivo) = explode(".", $doc);
        $doc=str_replace(".", "/", $doc);
         $ext=".xml";
        $file_name=$archivo.$ext;

            $path=$base.$doc.$ext;
       //return $path;
        $url = Storage::disk('spaces')->url($path);
              $headers=[
      // 'Content-Type'=>'application/pdf',
        'Content-Disposition' => 'attachment; filename='. $file_name. ';'
       ];

        $stream=Storage::disk('spaces')->readStream($path);
        //return $headers;
        return Response::stream(function() use ($stream){

         while(!feof($stream)){
          echo fread($stream,4096);
         flush();
       }
        fclose($stream);
       },200,$headers);


    }
         function documento_cdr($doc)

    {
        $base="fe/20314646411/";
        list($mes, $dia, $archivo) = explode(".", $doc);
        $doc=str_replace(".", "/", $doc);
         $ext=".zip";
        $file_name=$archivo.$ext;

            $path=$base.$doc.$ext;
       //return $path;
        $url = Storage::disk('spaces')->url($path);
              $headers=[
      // 'Content-Type'=>'application/pdf',
        'Content-Disposition' => 'attachment; filename='. $file_name. ';'
       ];

        $stream=Storage::disk('spaces')->readStream($path);
        //return $headers;
        return Response::stream(function() use ($stream){

         while(!feof($stream)){
          echo fread($stream,4096);
         flush();
       }
        fclose($stream);
       },200,$headers);


    }
     public  function check($doc)

    {
         $base="fe/20314646411/";
        list($mes, $dia, $archivo) = explode(".", $doc);
        $doc=str_replace(".", "/", $doc);
         $ext=".pdf";
        $file_name=$archivo.$ext;

            $path=$base.$doc.$ext;

        $url = Storage::disk('spaces')->url($path);
        $stream=Storage::disk('spaces')->readStream($path);
        if($stream)
        {
             $status = true;
        }
        else
        {
             $status = false;
        }

         return response()->json(['respuesta' =>$status]);


    }
         public  function check_cdr($doc)

    {
         $base="fe/20314646411/";
        list($mes, $dia, $archivo) = explode(".", $doc);
        $doc=str_replace(".", "/", $doc);
         $ext=".zip";
        $file_name=$archivo.$ext;

            $path=$base.$doc.$ext;

        $url = Storage::disk('spaces')->url($path);
        $stream=Storage::disk('spaces')->readStream($path);
        if($stream)
        {
             $status = true;
        }
        else
        {
             $status = false;
        }

         return response()->json(['respuesta' =>$status]);


    }
         public  function check_xml($doc)

    {
         $base="fe/20314646411/";
        list($mes, $dia, $archivo) = explode(".", $doc);
        $doc=str_replace(".", "/", $doc);
         $ext=".xml";
        $file_name=$archivo.$ext;

            $path=$base.$doc.$ext;

        $url = Storage::disk('spaces')->url($path);
        $stream=Storage::disk('spaces')->readStream($path);
        if($stream)
        {
             $status = true;
        }
        else
        {
             $status = false;
        }

         return response()->json(['respuesta' =>$status]);


    }

        public function check_file_exist($url){
             $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_NOBODY, true);
            curl_exec($ch);
            $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

            if ($code == 200) {
                $status = true;
            } else {
                $status = false;
            }
            curl_close($ch);

             return response()->json(['respuesta' =>$status]);

    }
 }
