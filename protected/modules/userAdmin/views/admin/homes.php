<div>
    <form method="get" action="/userAdmin/admin/homes">
        <select id="select-home-id" name="home_id">
            <?php $i = 1; ?>
            <?php while ($i <= 5): ?>
                <?php
                $selected = '';
                if ($home_id == $i) {
                    $selected = "selected='selected'";
                }
                ?>
                <option <?php echo $selected ?> value="<?php echo $i; ?>">Домик №<?php echo $i; ?></option>
                <?php $i++; ?>
            <?php endwhile; ?>
        </select>
    </form>
    <hr/>

    <?php $this->renderPartial('_upload', array('home_id' => $home_id)); ?>
    <?php $this->renderPartial('_uploads', array('uploads' => $uploads)); ?>
</div>

<div class="container">
    <h1>jQuery File Upload Demo</h1>
    <h2 class="lead">Basic version</h2>
    <ul class="nav nav-tabs">
        <li class="active"><a href="basic.html">Basic</a></li>
        <li><a href="basic-plus.html">Basic Plus</a></li>
        <li><a href="index.html">Basic Plus UI</a></li>
        <li><a href="angularjs.html">AngularJS</a></li>
        <li><a href="jquery-ui.html">jQuery UI</a></li>
    </ul>
    <br>
    <blockquote>
        <p>File Upload widget with multiple file selection, drag&amp;drop support and progress bar for jQuery.<br>
            Supports cross-domain, chunked and resumable file uploads.<br>
            Works with any server-side platform (PHP, Python, Ruby on Rails, Java, Node.js, Go etc.) that supports standard HTML form file uploads.</p>
    </blockquote>
    <br>
    <!-- The fileinput-button span is used to style the file input field as button -->
    <span class="btn btn-success fileinput-button">
        <i class="glyphicon glyphicon-plus"></i>
        <span>Select files...</span>
        <!-- The file input field used as target for the file upload widget -->
        <input id="fileupload" type="file" name="files[]" multiple>
    </span>
    <br>
    <br>
    <!-- The global progress bar -->
    <div id="progress" class="progress">
        <div class="progress-bar progress-bar-success"></div>
    </div>
    <!-- The container for the uploaded files -->
    <div id="files" class="files"></div>
    <br>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Demo Notes</h3>
        </div>
        <div class="panel-body">
            <ul>
                <li>The maximum file size for uploads in this demo is <strong>5 MB</strong> (default file size is unlimited).</li>
                <li>Only image files (<strong>JPG, GIF, PNG</strong>) are allowed in this demo (by default there is no file type restriction).</li>
                <li>Uploaded files will be deleted automatically after <strong>5 minutes</strong> (demo setting).</li>
                <li>You can <strong>drag &amp; drop</strong> files from your desktop on this webpage (see <a href="https://github.com/blueimp/jQuery-File-Upload/wiki/Browser-support">Browser support</a>).</li>
                <li>Please refer to the <a href="https://github.com/blueimp/jQuery-File-Upload">project website</a> and <a href="https://github.com/blueimp/jQuery-File-Upload/wiki">documentation</a> for more information.</li>
                <li>Built with Twitter's <a href="http://twitter.github.com/bootstrap/">Bootstrap</a> CSS framework and Icons from <a href="http://glyphicons.com/">Glyphicons</a>.</li>
            </ul>
        </div>
    </div>
</div>

<script>
    /*jslint unparam: true */
    /*global window, $ */
    $(function () {
        'use strict';
        // Change this to the location of your server-side upload handler:
        var url = window.location.hostname === 'blueimp.github.io' ?
            '//jquery-file-upload.appspot.com/' : 'fileUpload';
        $('#fileupload').fileupload({
            url: url,
            dataType: 'json',
            done: function (e, data) {
                $.each(data.result.files, function (index, file) {
                    $('<p/>').text(file.name).appendTo('#files');
                });
            },
            progressall: function (e, data) {
                var progress = parseInt(data.loaded / data.total * 100, 10);
                $('#progress .progress-bar').css(
                    'width',
                    progress + '%'
                );
            }
        }).prop('disabled', !$.support.fileInput)
            .parent().addClass($.support.fileInput ? undefined : 'disabled');
    });
</script>