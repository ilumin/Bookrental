
<h2>New Member</h2>

<form action="new-user-success.html" class="form-horizontal">
  
  <div class="control-group">
    <label class="control-label" for="first-name">First Name</label>
    <div class="controls">
      <input type="text" id="first-name" placeholder="First name" name="first_name">
    </div>
  </div>
  
  <div class="control-group">
    <label class="control-label" for="last-name">Last Name</label>
    <div class="controls">
      <input type="text" id="last-name" placeholder="Last name" name="last_name">
    </div>
  </div>
  
  <div class="control-group">
    <label class="control-label" for="id-card">ID Card</label>
    <div class="controls">
      <input type="text" id="id-card" placeholder="ID Card or Passsport" name="citizen_id">
    </div>
  </div>

  <div class="control-group">
    <label for="gender" class="control-label">Gender</label>
    <div class="control">
      <input type="radio" name="gender" id="gender"> Male<br />
      <input type="radio" name="gender" id="gender"> Female
    </div>
  </div>
  
  <div class="control-group">
    <label class="control-label" for="birth-date">Birth date</label>
    <div class="controls">
      <input type="date" id="birth-date" placeholder="Birth date" name="birthdate">
    </div>
  </div>
  
  <div class="control-group">
    <label class="control-label" for="phone">Phone</label>
    <div class="controls">
      <input type="text" id="phone" placeholder="Phone number" name="phone">
    </div>
  </div>
  
  <div class="form-actions">
    <button type="submit" class="btn btn-primary">Save changes</button>
    <button type="button" class="btn">Cancel</button>
  </div>

</form>
