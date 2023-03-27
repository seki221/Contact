<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\ContactController;
use Model\User;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'firstname','lastname', 'gender','mail','address','building_name','opinion','created_at', 'update_at'];
    protected $table = 'contacts';
    /**
     * 一覧画面表示用にcontactsテーブルから全てのデータを取得
     */
    public function findAllContnts()
    {
        return Contact::all();
    }

    /**
     * リクエストされたIDをもとにtodosテーブルのレコードを1件取得
     */
    public function findContactById($id)
    {
        return Contact::find($id);
    }

    /**
     * 登録処理
     */
    public function InsertContact($request)
    {
        // リクエストデータを基に管理マスターユーザーに登録する
        return $this->create([
            'contacts' => $request->content,
        ]);
    }

    /**
     * 更新処理
     */
    public function updateContact($request, $book)
    {
        $result = $book->fill([
            'contacts' => $request->content
        ])->save();

        return $result;
    }


    public function deleteContactById($id)
    {
        return $this->destroy($id);
    }

    public function ContactById($id)
    {
        return $this->destroy($id);
    }

}
