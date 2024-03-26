<h1>TODO TODAY LIST</h1>
<button border="1">ADD TODO</button>
<table border="1">

    <tr> {{-- row --}}
        <td>
            <label for="td_id">Id</label>
        </td>
        <td> {{-- column --}}
            <label for="td_fname">FirstName</label>
        </td>
        <td>
            <label for="td_lname">LastName</label>
        </td>
        <td>
            <label for="action">Action</label>
        </td>
    </tr>
    @foreach ($todo_list as $todo)
        <tr>
            <td>
                <label> {{ $todo['td_id'] }}</label>
            </td>
            <td>
                <label> {{ $todo['td_fname'] }}</label>
            </td>
            <td>
                <label>{{ $todo['td_lname'] }}</label>
            </td>
            <td>
                <a href={{ url('/delete_todo/' . $todo['td_id']) }}>Delete</a>
                <a href={{ url('/edit_todo/' . $todo['td_id']) }}>Edit</a>
            </td>
        </tr>
    @endforeach
</table>

