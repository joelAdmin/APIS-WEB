<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function show($chat_id){
       /* $result = \DB::table('pgrw_chats_mensajes')
                        ->where('delete', 0)
                            ->where('chat_id', $chat_id)
                                ->get();*/
        $result = Message::select('pgrw_chats_mensajes.*', 'receptor.nombres AS nombre_receptor', 'receptor.apellidos AS apellido_receptor',
                                            'receptor.avatar AS avatar_receptor', 'receptor.email AS email_receptor', 'receptor.login AS login_receptor', 'receptor.conectado AS conectado_receptor',   
                                    'emisor.nombres AS nombre_emisor', 'emisor.apellidos AS apellido_emisor',
                                            'emisor.avatar AS avatar_emisor', 'emisor.email AS email_emisor', 'emisor.login AS login_emisor', 'emisor.conectado AS conectado_emisor')
                                        ->join('pgrw_usuarios AS receptor', 'pgrw_chats_mensajes.receptor_id', '=', 'receptor.usuario_id')
                                            ->join('pgrw_usuarios AS emisor', 'pgrw_chats_mensajes.emisor_id', '=', 'emisor.usuario_id')
                                                ->where('delete', 0)
                                                    ->where('chat_id', $chat_id)
                                                        ->get();

        return response()->json(['res'=>true, 'message'=>'success', 'result'=>$result], 200);
    }
}
