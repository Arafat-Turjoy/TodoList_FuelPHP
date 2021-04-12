 <h1>Edit Tasks</h1><br><br>


<form action="/projects/edit/<?php echo $project->id; ?>" method="post">

<div class="form-group">
<label for="category">Category: </label><br>
<select name="category" id="category" >

<option value="Reading" <?php echo $project->category==="Reading" ? "selected" : "";?>>Reading</option>
  <option value="Playing" <?php echo $project->category==="Playing" ? "selected" : "";?>>Playing</option>
  <option value="Eating" <?php echo $project->category==="Eating" ? "selected" : "";?>>Eating</option>
  <option value="Drinking" <?php echo $project->category==="Drinking" ? "selected" : "";?>>Drinking</option>
  <option value="Working" <?php echo $project->category==="Working" ? "selected" : "";?>>Working</option>

 </select> 
</div><br><br>


<div class="form-group">
<label for="title">Title: </label><br> 
<input type="text" name="title" value="<?php echo $project->title; ?>" >
</div><br><br>


<div class="form-group">
<label for="status">Status:</label><br>
<?php if($project->status==1): ?>
<input type="checkbox" name="status" value="1" checked>
<?php elseif($project->status==0): ?>
<input type="checkbox" name="status" value="0">
<?php endif; ?>

 </div><br><br>
 <input type="hidden" name="project_id" value="<?php echo $project->id; ?>">

 <div class="actions">

<button type="submit" name="submit" id="add-btn" class="add-btn">Submit</button>
</div> 


 </form> 