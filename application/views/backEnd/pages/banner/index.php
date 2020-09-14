<div class="col-md-12">
    <!-- Advanced Tables -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <?= $title ?> Tables
        </div>
        <div class="panel-body">
            <div class="">
                <?= $this->session->flashdata('uploadError'); ?>
                <?= $this->session->flashdata('success'); ?>
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>Banner Headline</th>
                            <th>Banner Subheadline</th>
                            <th width="160">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="odd gradeX">
                            <td>
                                <img style="width: 50%;margin: 0 auto;" class="img-responsive" src="uploads/banner/<?= $banners->banner_one ?>" alt="">
                            </td>
                            <td>
                                <img style="width: 50%;margin: 0 auto;" class="img-responsive" src="uploads/banner/<?= $banners->banner_two ?>" alt="">
                            </td>
                            <td>
                                <a href="<?= site_url('banner/' . $banners->banner_id) ?>" class="btn btn-warning"><span class="fa fa-edit"></span> Edit</a>
                                <form action="<?= site_url('banner/delete') ?>" method="POST" style="display: contents;">
                                    <input type="hidden" name="id" value="<?= $banners->banner_id ?>">
                                    <button class="btn btn-danger"><span class="fa fa-trash"></span> Delete</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--End Advanced Tables -->
</div>