<h2 style="margin-top: 0;">
    <small>Selamat datang</small>
    <br />
    <?php echo $this->session->userdata('nama') ?>
</h2>
<hr />

<div class="form-group">
    <label>Role</label>
    <br /><?php echo ucwords($this->session->userdata('role')) ?>
</div>

<?php
?>
