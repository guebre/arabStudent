<div class="container mt-5">
   <h2><?php echo $page_heading ; ?></h2>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th><?php echo $this->lang->line('usr_lname'); ?> </th>
            <th><?php echo $this->lang->line('usr_fname'); ?></th>
            <th><?php echo $this->lang->line('usr_email'); ?></th>
            <th><?php echo $this->lang->line('actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php if ($query->num_rows() > 0)  :  $i = 1; ?>
            <?php foreach ($query->result() as $row) : ?>
            <tr>
                <td><?php echo  $i++ //$row->usr_id ; ?></td>
                <td><?php echo $row->usr_lname ; ?></td>
                <td><?php echo $row->usr_fname ; ?></td>
                <td><?php echo $row->usr_email ; ?></td>
                <td><?php echo anchor('me/delete_user/'.$row->usr_id,'<i class = "fas fa-trash-alt"> </i> '.$this->lang->line('common_form_elements_action_delete'),array('class'=> 'btn btn-danger')) ; ?>
                </td>
            </tr>
            <?php endforeach ; ?>
        <?php else : ?>
        <tr>
            <td colspan="5" class="info"><?php echo $this->lang->line('no_users'); ?></td>
        </tr>
        <?php endif; ?>
    </tbody>
</table>

</div>