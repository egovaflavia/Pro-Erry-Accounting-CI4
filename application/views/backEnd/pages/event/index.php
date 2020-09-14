<div class="col-md-12">
    <!-- Advanced Tables -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <?= $title ?> Tables
        </div>
        <div class="panel-body">
            <a href="<?= site_url('event/create') ?>" class="btn btn-primary"><span class="fa fa-plus"></span> Add</a>
            <br>
            <br>
            <div class="">
                <?= $this->session->flashdata('uploadError'); ?>
                <?= $this->session->flashdata('success'); ?>
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th width="5px">No</th>
                            <th>Event Banner</th>
                            <th width="160">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($events as $no => $row) : ?>
                            <tr class="odd gradeX">
                                <td><?= ++$no ?></td>
                                <td>
                                    <img style="width: 50%;margin: 0 auto;" class="img-responsive" src="uploads/event/<?= $row->event_image ?>" alt="">
                                </td>
                                <td>
                                    <a href="<?= site_url('event/' . $row->event_id) ?>" class="btn btn-warning"><span class="fa fa-edit"></span> Edit</a>
                                    <form action="<?= site_url('event/delete') ?>" method="POST" style="display: contents;">
                                        <input type="hidden" name="id" value="<?= $row->event_id ?>">
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