<h1>ADD Projects</h1><br><br>

<form action="/projects/add" method="post">

<div class="form-group">
<label for="category">Category: </label><br>
<select name="category" id="category" required>

  <option value="">select category</option>
  <option value="Reading">Reading</option>
  <option value="Playing">Playing</option>
  <option value="Eating">Eating</option>
  <option value="Drinking">Drinking</option>
  <option value="Working">Working</option>

</select>


</div><br><br>

<div class="form-group">
<label for="title">Title: </label><br>
<input type="text" name="title" required>
</div><br><br>

<div class="form-group">
<label for="status">Status:</label><br>
<input type="checkbox" name="status" value="1" checked> 
</div><br><br>



<div class="actions">
<button type="submit" name="submit" id="add-btn" class="add-btn">Submit</button>
</div>



</form>