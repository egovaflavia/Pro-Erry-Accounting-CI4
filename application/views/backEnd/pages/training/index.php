<div class="col-md-12">
    <!-- Advanced Tables -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <?= $title ?> Tables
        </div>
        <div class="panel-body">
            <a href="<?= site_url('training/create') ?>" class="btn btn-primary"><span class="fa fa-plus"></span> Add</a>
            <br>
            <br>
            <div class="">
                <?= $this->session->flashdata('uploadError'); ?>
                <?= $this->session->flashdata('success'); ?>
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th width="5px">No</th>
                            <th>Category</th>
                            <th>Training & Certification Name</th>
                            <th>Price</th>
                            <th width="240">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($trainings as $no => $row) : ?>
                            <tr class="odd gradeX">
                                <td><?= ++$no ?></td>
                                <td><?= $row->category_name ?></td>
                                <td><?= $row->training_name ?></td>
                                <td><?= $row->training_price ?></td>
                                <td>
                                    <a href="<?= site_url('training/detail/' . $row->training_id) ?>" class="btn btn-success"><span class="fa fa-search"></span> Detail</a>
                                    <a href="<?= site_url('training/' . $row->training_id) ?>" class="btn btn-warning"><span class="fa fa-edit"></span> Edit</a>
                                    <form action="<?= site_url('training/delete') ?>" method="POST" style="display: contents;">
                                        <input type="hidden" name="id" value="<?= $row->training_id ?>">
                                        <button class="btn btn-danger"><span class="fa fa-trash"></span> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--End Advanced Tables -->
</div>