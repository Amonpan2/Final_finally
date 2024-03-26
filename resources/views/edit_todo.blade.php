<h3>EDIT TODO LIST</h3>
<form action={{ url('/update_todo/' . $todo_list['td_id']) }} method="POST">
    @csrf
    <label for="td_id">ID : </label>
    <input type="text" name="td_id" id="" value={{ $todo_list['td_id'] }}>
    <br>
    <br>
    <label for="td_fname">First Name : </label>
    <input type="text" name="td_fname" id="" value={{ $todo_list['td_fname'] }}>
    <br>
    <br>
    <label for="td_lname">Last Name : </label>
    <input type="text" name="td_lname" id="" value={{ $todo_list['td_lname'] }}>
    <br>
    <br>
    <label for="td_action">Action : </label>
    <input type="text" name="td_action" id="" value={{ $todo_list['td_action'] }}>

    <button type="submit">Save</button>
</form>
