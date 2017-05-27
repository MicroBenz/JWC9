<!DOCTYPE HTML>

<html>

<head>
    <title>Presentation Uploader</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/app.css">
    <style type="text/css">
        body{
            color: black;
            font-family: 'Helvetica';
            font-size: 14px;
            background: #f0f0f0;
        }
        button{
            font-size: 20px !important;
        }
        table{
            margin-bottom: 60px !important;
        }
    </style>
</head>

<body>
    <div class="container" style="max-width: 500px; margin-top: 40px; background: white; padding: 40px 30px 20px 30px; border-radius: 20px; box-shadow: 0 0 30px #ccc;">
        <div class="text-center">
            <img src="https://jwc9.jwc.in.th/img/logo.png" style="max-width: 100%; max-height: 300px;">
        </div>
        <h4 style="margin-bottom: 15px;" class="text-center">1.เลือกไฟล์</h4>
        <form action="https://jwc9.jwc.in.th/upload" method="post" enctype="multipart/form-data">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <colgroup>
                        <col class="col-xs-1">
                        <col class="col-xs-7">
                    </colgroup>
                    <thead>
                        <tr>
                            <th>Format</th>
                            <th>Upload File</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">
                                <code>PowerPoint</code>
                            </th>
                            <td>
                                <input type="file" name="powerpoint">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <code>PDF</code>
                            </th>
                            <td>
                                <input type="file" name="pdf">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="text-center">
                <button style="" class="btn btn-primary btn-lg" href="#">2.อัพโหลด</button>
            </div>
        </form>
    </div>
</body>

</html>