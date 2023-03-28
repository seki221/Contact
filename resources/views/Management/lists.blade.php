      @section('Management/main')
      @foreach ($contacts as $contacts)
      <tr>
        <td>
          <div class="db">
            <form action="{{ route('destroy',['id'=>$contacts->id]) }}" method="POST">
              @csrf
              @method('POST')
              {{ $contacts->links() }}
              <button type="submit" class="button_delete">削除</button>
            </form>
          </div>
        </td>
      </tr>
      @endforeach
      </tbody>
      </table>
      </div>