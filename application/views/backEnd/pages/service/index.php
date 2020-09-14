<div class="col-md-12">
    <!-- Advanced Tables -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <?= $title ?> Tables
        </div>
        <div class="panel-body">
            <a href="<?= site_url('service/create') ?>" class="btn btn-primary"><span class="fa fa-plus"></span> Add</a>
            <br>
            <br>
            <div class="">
                <?= $this->session->flashdata('uploadError'); ?>
                <?= $this->session->flashdata('success'); ?>
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th width="5px">No</th>
                            <th>Category Name</th>
                            <th>Service Desc</th>
                            <th width="160">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($services as $no => $row) : ?>
                            <tr class="odd gradeX">
                                <td><?= ++$no ?></td>
                                <td><?= $row->category_service_name ?></td>
                                <td><?= $row->service_desc ?></td>
                                <td>
                                    <a href="<?= site_url('service/' . $row->service_id) ?>" class="btn btn-warning"><span class="fa fa-edit"></span> Edit</a>
                                    <form action="<?= site_url('service/delete') ?>" method="POST" style="display: contents;">
                                        <input type="hidden" name="id" value="<?= $row->service_id ?>">
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