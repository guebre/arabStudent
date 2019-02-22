<table class="table table-bordered">
        <thead>
            <tr>
                <th><?php echo $this->lang->line('lib_diplome'); ?></th>
                <th><?php echo $this->lang->line('date_obtention'); ?></th>
                <th><?php echo $this->lang->line('actions'); ?></th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($data as $row) :?>
            <tr>
            <td><?php echo $row->lib_diplome; ?></td>
            <td><?php echo $row->date_obtention; ?></td>
            <td>
            <button  button="button" class="btn btn-danger btn-sm del_diplome" id="diplome-<?php echo $row->id_diplome; ?>" data-diplome="<?php echo $row->id_diplome; ?>">  <i class = "fas fa-trash-alt"> </i> <?php echo $this->lang->line('common_form_elements_action_delete'); ?> </button>
           
            </td>
            </tr>
        <?php  endforeach;  ?>
        </tbody>
</table>