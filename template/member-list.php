
<div class="rent-step">
  <h4 class="pull-left">
    Member
    <a href="<?php echo $config['app']['baseUrl'].'?page=member/add'; ?>" class="btn btn-small"><i class="icon-plus"></i> Create Member</a>
  </h4>

  <form action="<?php echo $config['app']['baseUrl'].'?page=member'; ?>" class="form-search pull-right">
    <div class="input-append">
      <input type="text" name="search" class="span4 search-query" placeholder="Enter Member ID/First Name/Last Name">
      <input type="hidden" name="page" value="member">
      <button type="submit" class="btn"><i class="icon-search"></i></button>
    </div>
  </form>

  <?php if( empty($member_list) ): ?>
  <div class="alert alert-error">
    Member not found 
    <?php if( !$is_search ): ?><a href="<?php echo $config['app']['baseUrl'].'?page=member/add'; ?>" class="btn btn-small"><i class="icon-plus"></i> Create Member</a><?php endif; ?>
  </div>
  <?php else: ?>

  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Rent Status</th>
        <th>&nbsp;</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($member_list as $member): ?>
      <tr>
        <td><?php echo $member['id']; ?></td>
        <td><?php echo $member['firstname']; ?></td>
        <td><?php echo $member['lastname']; ?></td>
        <td>
          <span><i class="icon-ok"></i></span>
        </td>
        <td>
          <a href="javascript:;" class="btn btn-mini"><i class="icon-eye-open"></i> View info</a>
        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <?php endif; ?>
</div>