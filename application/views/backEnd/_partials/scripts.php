<!-- Installation -->
<!-- Summernote -->
<script>
    $('textarea').summernote({
        height: 120,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'underline', 'clear']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link', 'picture', 'video']],
            ['view', ['fullscreen', 'codeview', 'help']]
        ]
    });
</script>
<!-- Quotes -->
<script>
    fetch("https://type.fit/api/quotes")
        .then(function(response) {
            return response.json();
        })
        .then(function(data) {
            var data = data[<?= date('s') ?>];
            console.log(data);
            document.getElementById('quote').innerHTML = data.text;
            document.getElementById('from').innerHTML = data.author;
        });
</script>

<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
<script src="<?= base_url() ?>assets/assetBack/js/jquery-1.10.2.js"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="<?= base_url() ?>assets/assetBack/js/bootstrap.min.js"></script>
<!-- METISMENU SCRIPTS -->
<script src="<?= base_url() ?>assets/assetBack/js/jquery.metisMenu.js"></script>
<!-- MORRIS CHART SCRIPTS -->
<script src="<?= base_url() ?>assets/assetBack/js/morris/raphael-2.1.0.min.js"></script>
<script src="<?= base_url() ?>assets/assetBack/js/morris/morris.js"></script>
<!-- DATA TABLE SCRIPTS -->
<script src="<?= base_url() ?>assets/assetBack/js/dataTables/jquery.dataTables.js"></script>
<script src="<?= base_url() ?>assets/assetBack/js/dataTables/dataTables.bootstrap.js"></script>
<script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
</script>
<!-- CUSTOM SCRIPTS -->
<script src="<?= base_url() ?>assets/assetBack/js/custom.js"></script>